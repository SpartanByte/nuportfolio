window.$ = document.querySelectorAll.bind(document);

$.named = document.getElementsByName.bind(document);

$.id = 'altQuery';

$.ready = function ready(callback, done) {
	if((done === true && document.readyState === 'complete') || (done !== true && (document.readyState === 'complete' || document.readyState === 'interactive'))) {
		callback.call();
	} else if(document.addEventListener) {
		if(done === true) {
			window.addEventListener('load', callback);
		} else {
			document.addEventListener('DOMContentLoaded', callback);
		}
	} else if(document.attachEvent) {
		document.attachEvent('onreadystatechange', function () {
			if((done === true && document.readyState === 'complete') || (done !== true && document.readyState === 'interactive')) {
				callback.call();
			}
		});
	}
};

Node.prototype.on = window.on = function on(name, stringOrFn, fn) {
	var tfn = stringOrFn;
	if(typeof(stringOrFn) === 'string') {
		tfn = function(e) {
			if(e.target) {
				if(e.target.matches(stringOrFn)) {
					return fn.call(e.target, e);
				} else if(e.target.parent(stringOrFn)) {
					return fn.call(e.target.parent(stringOrFn), e);
				}
			}
		};
	}
	this.addEventListener(name, tfn);

	return this;
};

Node.prototype.one = window.one = function one(name, fn) {
	var storedFn = function() {
						fn();
						this.off(name, storedFn);
					};
	this.addEventListener(name, storedFn);

	return this;
};

Node.prototype.off = window.off = function off(name, fn) {
	this.removeEventListener(name, fn);

	return this;
};

Node.prototype.trigger = function trigger(eventType) {
	// var _event = new InputEvent('input', {
	// var _event = new Event(eventType, {
	var _event = new MouseEvent(eventType, {
		'view': window,
		'bubbles': true,
		'cancelable': true
	});

	!this.dispatchEvent(_event);
};

Node.prototype.clone = function clone(deep) {
	return this.cloneNode(!!deep);
};

Node.prototype.css = function css(propertyOrMap, value) {
	if(typeof(propertyOrMap) === 'string') {
		if(value !== undefined) {
			this.style[propertyOrMap] = value;
		} else {
			return this.style[propertyOrMap];
		}
	} else if(typeof(propertyOrMap) === 'object') {
		for(var i in propertyOrMap) {
			if(propertyOrMap.hasOwnProperty(i)) {
				this.css(i, propertyOrMap[i]);
			}
		}
	}

	return this;
};

Node.prototype.show = function show(property) {
	this.style.display = property || 'block';

	return this;
};

Node.prototype.hide = function hide() {
	this.style.display = 'none';

	return this;
};

Node.prototype.toggle = function toggle(property) {
	this[['show', 'hide'][+(this.style.display !== 'none')]](property);

	return this;
};

Node.prototype.html = function html(markup) {
	return ((markup !== undefined) ? (this.innerHTML = markup, this) : this.innerHTML);
};

Node.prototype.text = function text(content) {
	return ((content !== undefined) ? (this.textContent = text, this) : this.textContent);
};

Node.prototype.exchange = function exchange(content) {
	this.outerHTML = (typeof(content) === 'object') ? content.outerHTML : content;

	return this;
};

Node.prototype.insert = function insert(property) {
	return function(content) {
			this.insertAdjacentHTML(property, (typeof(content) === 'object') ? content.outerHTML : content);

			return this;
		};
};

Node.prototype.before = Node.prototype.insert('beforebegin');
Node.prototype.prepend = Node.prototype.insert('afterbegin');
Node.prototype.append = Node.prototype.insert('beforeend');
Node.prototype.after = Node.prototype.insert('afterend');
// FIXES WRONGLY IMPLEMENTED FIREFOX FUNCTIONS
if('before' in Element.prototype) { delete Element.prototype.before; }
if('prepend' in Element.prototype) { delete Element.prototype.prepend; }
if('append' in Element.prototype) { delete Element.prototype.append; }
if('after' in Element.prototype) { delete Element.prototype.after; }

Node.prototype.find = function find(selector) {
	return this.querySelectorAll(selector);
};

Node.prototype.hasClass = function hasClass(selector) {
	return (this.className.split(' ').indexOf(selector) > -1);
};

Node.prototype.addClass = function addClass(selector) {
	if(!this.hasClass(selector)) {
		this.className = (this.className + ' ' + selector).trim();
	}

	return this;
};

Node.prototype.traverse = function traverse(property) {
	return function(selector) {
		var target = this[property];

		if(selector) {
			for(; target && !target.matches(selector);) {
				target = target[property];
			}
		}

		return target;
	};
};

Node.prototype.next = Node.prototype.traverse('nextElementSibling');
Node.prototype.parent = Node.prototype.traverse('parentElement');
Node.prototype.previous = Node.prototype.traverse('previousElementSibling');

Node.prototype.siblings = function siblings(selector) {
	return [].filter.call(this.parentElement.children, function(child) {
		return (child !== this && this.matches(selector || '*'));
	}, this);
};

Node.prototype.position = function position(absolute) {
	var offset = { top: this.offsetTop, left: this.offsetLeft };

	if(absolute) {
		var current = this.offsetParent;

		for(; current;) {
			offset.top += +current.offsetTop;
			offset.left += +current.offsetLeft;
			current = current.offsetParent;
		}
	}

	return offset;
};

Node.prototype.remove = function remove() {
	this.parentElement.removeChild(this);
};

Node.prototype.removeClass = function removeClass(selector) {
	var selectors = this.className.trim().split(' ');

	if(this.hasClass(selector)) {
		selectors.splice(selectors.indexOf(selector), 1);

		this.className = selectors.join(' ');
	}

	return this;
};

Node.prototype.toggleClass = function toggleClass(selectors, evaluation) {
	selectors.split(' ').forEach(function(value) {
		this[['add', 'remove'][+((evaluation === undefined) ? this.hasClass(value) : !evaluation)] + 'Class'](value);
	}, this);

	return this;
};

Node.prototype.setAttributes = function setAttributes(attributes) {
	attributes.forEach(function(cv) {
		this.setAttribute(cv, attributes[cv]);
	}, this);

	return this;
};

Node.prototype.toggleAttribute = function toggleAttribute(attribute, states) {
	if(states) {
		if(typeof(states) === 'object' && states.length === 2) {
			this.setAttribute(attribute, states[+(this.getAttribute(attribute) == states[1] || this.getAttribute(attribute) === '')]);
		} else {
			if(this.getAttribute(attribute) === states) {
				this.removeAttribute(attribute);
			} else {
				this.setAttribute(attribute, states);
			}
		}
	} else {
		if(this.getAttribute(attribute) === '') {
			this.removeAttribute(attribute);
		} else {
			this.setAttribute(attribute, '');
		}
	}

	return this;
};

Node.prototype.data = function data() {
	switch(arguments.length) {
		case 0:
			var dataset = Object.create(null);

			this.attributes.forEach(function(x) {
				if(/^data-/.test(this[x].name)) {
					dataset[this[x].name.substr(5).toCamelCase()] = this[x].value;
				}
			}, this.attributes);

			return dataset;
		case 1:
			return this.getAttribute('data-' + arguments[0]);
		case 2:
			this.setAttribute('data-' + arguments[0], arguments[1]);

			return this;
	}
};

NodeList.prototype.aggregate = function aggregate(attributeOrFn, unfiltered) {
	var data = [];

	this.forEach(function(cv, i) {
		if(typeof(attributeOrFn) === 'function') {
			data.push(attributeOrFn.apply(this[i]));
		} else {
			if(this[i].hasAttribute(attributeOrFn) || !!unfiltered) {
				data.push((this[i][attributeOrFn] === undefined) ? this[i].getAttribute(attributeOrFn) : this[i][attributeOrFn]);
			}
		}
	}, this);

	return data;
};

NodeList.prototype.each = function each(fn) {
	this.forEach(function(cv, i) {
		fn.call(this[i], i, this[i]);
	}, this);

	return this;
};

NodeList.prototype.get = function get(index) {
	return ((index !== undefined) ? this[index.wrap(this.length)] : this);
};

NodeList.prototype.eq = function eq(index) {
	return this[index.wrap(this.length)];
};

NodeList.prototype.index = function index(element) {
	return Array.prototype.indexOf.call(this, element);
};

NodeList.prototype.toArray = function toArray() {
	return Array.prototype.slice.call(this);
};

NodeList.prototype.repeater = function repeater(fn) {
	Object.defineProperty(this, fn, {
		configurable: true,
		writable: true,
		value: function() {
			var i = 0, args = new Array(arguments.length);

			for(; i < args.length; ++i) {
				args[i] = arguments[i];
			}

			this.toArray().forEach(function(elem) {
				(elem[fn]).apply(elem, args);
			});

			return this;
		}
	});
};

NodeList.prototype.repeater('on');
NodeList.prototype.repeater('one');
NodeList.prototype.repeater('off');
NodeList.prototype.repeater('trigger');
NodeList.prototype.repeater('css');
NodeList.prototype.repeater('show');
NodeList.prototype.repeater('hide');
NodeList.prototype.repeater('data');
NodeList.prototype.repeater('toggle');
NodeList.prototype.repeater('html');
NodeList.prototype.repeater('remove');
NodeList.prototype.repeater('before');
NodeList.prototype.repeater('prepend');
NodeList.prototype.repeater('append');
NodeList.prototype.repeater('after');
NodeList.prototype.repeater('addClass');
NodeList.prototype.repeater('removeClass');
NodeList.prototype.repeater('toggleClass');
NodeList.prototype.repeater('setAttribute');
NodeList.prototype.repeater('setAttributes');
NodeList.prototype.repeater('removeAttribute');
NodeList.prototype.repeater('toggleAttribute');

window.helpers = {
	newElement: function newElement(nodeType, attributes) {
		var key,
			frag = document.createDocumentFragment(),
			element = document.createElement(nodeType);

		for(key in attributes) {
			if(attributes.hasOwnProperty(key)) {
				element.setAttribute(key, attributes[key]);
			}
		}

		frag.appendChild(element);

		return element;
	},
	toArray: function toArray(arrayLikeObject) {
		return Array.prototype.slice.call(arrayLikeObject);
	},
	serialize: function serialize(form) {
		if(typeof(form) === 'object' && form.nodeName == "FORM") {
			var field, i = 0, s = [],
				fields = form.elements.length;

			for(; i < fields; i++) {
				field = form.elements[i];

				if(field.name && field.disabled !== true && ['file', 'reset', 'submit', 'button'].indexOf(field.type) === -1) {
					if(field.type == 'select-multiple') {
						var ii = form.elements[i].selectedOptions.length;

						for(; ii >= 0; ii++) {
							s[s.length] = encodeURIComponent(field.name) + '=' + encodeURIComponent(field.selectedOptions[ii].value);
						}
					} else if(['checkbox', 'radio'].indexOf(field.type) === -1 || (field.checked && field.value)) {
						s[s.length] = encodeURIComponent(field.name) + '=' + encodeURIComponent(field.value);
					} else {
						s[s.length] = encodeURIComponent(field.name) + '=on';
					}
				}
			}

			return s.join('&').replace(/%20/g, '+');
		}
	}
};

window.scrollTop = function scrollTop(Y) {
	setTimeout(function() {
		window.scroll(0, Y);
	}, 0);
};

window.throttle = function throttle(fn, wait) {
	var timeout;

	return function() {
		clearTimeout(timeout);

		timeout = setTimeout(fn.bind(this, arguments), (wait || 100));
	};
};

Object.defineProperty(Object.prototype, 'keys', {
		configurable:true,
		writable:true,
		value: function keys() {
			return Object.keys(this);
		}
	});

Object.defineProperty(Object.prototype, 'serialize', {
		configurable: true,
		writable: true,
		value: function serialize() {
			if(typeof(this) === 'object' && !(this instanceof String)) {
				return this.keys().reduce(function(p, k) {
					p.push(encodeURIComponent(k) + '=' + encodeURIComponent(this[k]));
					return p;
				}.bind(this), []).join('&');
			} else {
				return this.toString();
			}
		}
	});

Object.defineProperty(Object.prototype, 'extend', {
		configurable:true,
		writable:true,
		value: function extend(extender) {
			if(extender !== undefined) {
				Object.keys(extender).forEach(function(key) {
					if(typeof(extender[key]) == 'object') {
						this[key].extend(extender[key]);
					} else {
						this[key] = extender[key];
					}
				}, this);
			}

			return this;
		}
	});

Object.defineProperty(Object.prototype, '_validate', {
		configurable:true,
		writable:true,
		value: function _validate(rules) {
			var response = '';

			try {
				rules.keys().forEach(function(key) {
					rules[key].split('&').forEach(function(rule) {
						var tempRule = rule.split(/^([a-z]+?):/);

						switch(tempRule[1]) {
							case 'type':
								if(typeof(this[key]) !== tempRule[2]) {
									response += key + ' must be a ' + tempRule[2] + '\n';

									this.__invalid = true;
								}
							break;

							case 'min':
								if((this[key] && (this[key].length || this[key])) < tempRule[2]) {
									response += key + ' must be greater than ' + tempRule[2] + '\n';

									this.__invalid = true;
								}
							break;

							case 'max':
								if((this[key] && (this[key].length || this[key])) > tempRule[2]) {
									response += key + ' must be less than ' + tempRule[2] + '\n';

									this.__invalid = true;
								}
							break;

							case 'match':
								if(!RegExp(tempRule[2]).test(this[key])) {
									response += key + ' must match /' + tempRule[2] + '/\n';

									this.__invalid = true;
								}
							break;

							default:break;
						}
					}, this);
				}, this);

				if(this.__invalid) {
					throw new Error();
				} else {
					return this;
				}
			} catch (e) {
				throw new Error('The following requirements were not met:\n' + response);
			}
		}
	});

Object.defineProperty(Object.prototype, 'forEach', {
		configurable:true,
		writable:true,
		value: function forEach(fn, thisValue) {
			if(fn !== undefined) {
				this.keys().forEach(fn, (thisValue || window));
			}

			return this;
		}
	});

Object.defineProperty(Object.prototype, 'isEmpty', {
		configurable: true,
		writable: true,
		value: function isEmpty() {
			for(var key in this) {
				if(this.hasOwnProperty(key)) {
					return false;
				}
			}

			return true;
		}
	});

Object.defineProperty(Object.prototype, 'getPath', {
		configurable: true,
		writable: true,
		value: function getPath(path) {
			var key = path.split('.')[0],
				value = this[key];

			if(undefined !== value && key.length !== path.length) {
				return value.getPath(path.substr(key.length + 1));
			} else {
				return value;
			}
		}
	});

Object.defineProperty(String.prototype, 'format', {
		configurable: true,
		writable: true,
		value: function format(args) {
				args = ((typeof(args) === 'object') ? args : Array.prototype.slice.call(arguments));

				return this.replace(/\{\{|\}\}|\{([a-zA-Z0-9\._]+)\}/g, function(match, nthArg) {
					if(match === '{{' || match === '}}') { return match[0]; }

					return args.getPath(nthArg);
				});
			}
	});

Object.defineProperty(String.prototype, 'toCamelCase', {
		configurable: true,
		writable: true,
		value: function toCamelCase() {
				return this.replace(/[\s-](\w){1}/g, function(_, match) {
						return match.toUpperCase();
					});
			}
	});

Object.defineProperty(Number.prototype, 'wrap', {
	configurable: true,
	writable: true,
	value: function wrap(length) {
			if(length === 0) {
				return this;
			} else {
				return ((this % length) + length) % length;
			}
		}
	});

Element.prototype.matches = (Element.prototype.matches || Element.prototype.mozMatchesSelector || Element.prototype.webkitMatchesSelector || Element.prototype.msMatchesSelector || Element.prototype.oMatchesSelector ||
	function(selector) {
		return ($(selector).toArray().indexOf(this) !== -1);
	}
);

Element.prototype.remove = (Element.prototype.remove ||
	function remove() {
		this.parentElement.removeChild(this);
	}
);