window.animations = (function(s) {
	switch(true) {
		case (s.animationName !== undefined): return { start: 'animationstart', iteration: 'animationiteration', end: 'animationend' };
		case (s.OAnimationName !== undefined): return { start: 'OAnimationStart', iteration: 'OAnimationIteration', end: 'OAnimationEnd' };
		case (s.MSAnimationName !== undefined): return { start: 'MSAnimationStart', iteration: 'MSAnimationIteration', end: 'MSAnimationEnd' };
		case (s.MozAnimationName !== undefined): return { start: 'mozAnimationStart', iteration: 'mozAnimationIteration', end: 'mozAnimationEnd' };
		case (s.WebkitAnimationName !== undefined): return { start: 'webkitAnimationStart', iteration: 'webkitAnimationIteration', end: 'webkitAnimationEnd' };
		default: return false;
	}
})(document.documentElement.style);

window.Modal = (function() {
	var root = helpers.newElement('div', {'id': 'modals'}),
		overlay = helpers.newElement('div', {'id': 'overlay'}),
		sizeCheck = throttle(function() {
			root.find('.modal-content').each(function() {
				this[['remove', 'add'][+(this.scrollHeight > this.clientHeight)] + 'Class']('scroll-vertical');
			});
		}, 10);

	$('body')[0].appendChild(overlay);
	$('body')[0].appendChild(root);

	window.on('resize', sizeCheck);

	root.on('click', function exit(e) {
			if(e && e.target.hasClass('modal-close-all')) {
				overlay.hide();
				root.hide();
				root.innerHTML = '';
			}
		});

	function Modal(userOptions) {
		if(!(this instanceof Modal)) {
			return new Modal(userOptions);
		}

		this.options = {
			animation: 'zoomIn',
			buttonEvents: {
				'modal-close': this.closeModal
			},
			buttons: '<a class="modal-close">Close</a>',
			clickToClose: true,
			openOnContent: false,
			postClose: function() {},
			postOpen: function() {},
			preClose: function() {},
			preOpen: function() {},
			speed: 'fast',
			style: ''
		}.extend(userOptions)
		._validate({
			animation: 'type:string',
			buttons: 'type:string',
			clickToClose: 'type:boolean',
			openOnContent: 'type:boolean',
			postClose: 'type:function',
			postOpen: 'type:function',
			preClose: 'type:function',
			preOpen: 'type:function',
			speed: 'type:string',
			style: 'type:string'
		});

		if(this.options.__invalid) {
			return false;
		}

		this.hasContent = false;
		this.isVisible = false;
		this.contentNode = helpers.newElement('div', {'class': 'modal-container' + ((this.options.clickToClose) ? ' modal-close-all' : '')});

		if(this.options !== undefined && this.options.content !== undefined) {
			this.setContent(this.options.content);
		}

		return this;
	}

	Modal.prototype.setContent = function setContent(content) {
		// Set Content
		this.contentNode.innerHTML = '<div class="modal-content animated {animation} {speed} {style}">{content}<div class="buttons">{buttons}</div></div>'.format({
			animation: this.options.animation,
			buttons: this.options.buttons,
			content: content,
			speed: this.options.speed,
			style: this.options.style
		});

		// Add Modal to Container
		root.appendChild(this.contentNode);

		// Bind Supplied Events to Buttons
		if(this.options.buttonEvents) {
			for(var key in this.options.buttonEvents) {
				this.contentNode.on('click', ('.' + key), this.options.buttonEvents[key].bind(this));
			}
		}
		// Open if openOnContent Config
		if(this.options.openOnContent) {
			this.openModal();
		}

		// Update hasContent State
		this.hasContent = true;

		// Return Object
		return this;
	};

	Modal.prototype.pushContent = function pushContent(content, selector) {
		this.contentNode.find(selector || '.modal-content > :first-child')[0].outerHTML = content;

		sizeCheck();

		return this;
	};

	Modal.prototype.openModal = function openModal() {
		overlay.show();
		root.show();

		this.isVisible = true;

		// Bind Events to Animations
		this.contentNode.firstChild.one(animations.start, this.callbacks('preOpen'));
		this.contentNode.firstChild.one(animations.end, this.callbacks('postOpen'));

		sizeCheck();

		return this;
	};

	Modal.prototype.closeModal = function closeModal() {
		this.callbacks('preClose')();

		this.contentNode.firstChild.toggleClass(this.options.animation + ' ' + this.options.animation.replace('In', 'Out'));

		// Bind Events to Animations
		//this.contentNode.firstChild.one(animations.start, this.callbacks('preClose'));
		this.contentNode.firstChild.one(animations.end, function(e) {
			this.callbacks('postClose')();
			//this.contentNode.innerHTML = '';
			root.removeChild(this.contentNode);

			if(root.childNodes.length === 0) {
				overlay.hide();
				root.hide();
				root.innerHTML = '';
			}
		}.bind(this));

		return this;
	};

	Modal.prototype.callbacks = function callbacks(key) {
		if(this.options[key] && typeof(this.options[key]) === 'function') {
			return this.options[key].bind(this);
		}
	};

	return Modal;
})();

window.fastModal = function fastModal(html) {
	return Modal({
		animation: 'zoomIn',
		clickToClose: false,
		content: html,
		speed: 'flash'
	}).openModal();
};

/* ALERTS */
window.notify = (function() {
	var notify = function notify(type, title, message) {
		var tmpModal = new Modal({
				clickToClose: false,
				animation: 'bounceIn',
				style: type,
				buttons: '<a class="modal-close">Okay!</a>',
				content: '<h2>{0}</h2><p>{1}</p>'.format({ 0: title, 1: message })
			});

		tmpModal.openModal();

		return tmpModal;
	};

	notify.alert = function alert(message) {
		return notify('alert', 'Well...', message);
	};

	notify.error = function error(message) {
		return notify('error', 'Oops!', message);
	};

	notify.inform = function inform(message) {
		//return notify('inform', 'Update', message);
		return notify('question', 'Information', message);
	};

	/*notify.warn = function warn(message) {
		return notify('warn', 'Warning', message);
	};*/

	notify.confirm = function confirm(title, message, callback) {
		var tmpModal = new Modal({
				clickToClose: false,
				animation: 'bounceIn',
				style: 'question',
				buttons: '<a class="submit">Okay</a><a class="modal-close">Cancel</a>',
				buttonEvents: {'modal-close': function() { this.closeModal(); callback(false); }, submit: function() { callback(true); this.closeModal(); }},
				content: '<h2>{0}</h2><p>{1}</p>'.format({ 0: title, 1: message })
			}).openModal();

		return tmpModal;
	};

	notify.prompt = function prompt(title, message, callback) {
		var tmpModal = new Modal({
				clickToClose: false,
				animation: 'bounceIn',
				style: 'question',
				buttons: '<a class="submit">Submit</a><a class="modal-close">Cancel</a>',
				buttonEvents: {'modal-close': function() { this.closeModal(); callback(false); }, submit: function() { callback(this.contentNode.find('#input')[0].value); this.closeModal(); }},
				content: '<h2>{0}</h2><p>{1}<br><input type="text" id="input" /></p>'.format({ 0: title, 1: message })
			});

		tmpModal.openModal();

		return tmpModal;
	};

	return notify;
})();