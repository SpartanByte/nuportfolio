
@yield('foot')

		<div id="footer">
			<ul class="footer-left">
					<li>&copy; <?php echo date('Y'); ?> | Brian Wardwell | Email at: 
						<a href="mailto:brianwardwell@brianwardwell.com">brianwardwell@brianwardwell.com</a> or
						<a href="mailto:brianwardwell79@gmail.com">brianwardwell79@gmail.com</a></li>
					<li><a href="https://www.facebook.com/briantwardwell">facebook.com/briantwardwell</a><strong> || </strong>
						<a href="https://twitter.com/spartanbyte">twitter.com/spartanbyte</a><strong> || </strong>
						<a href="https://github.com/spartanbyte">github.com/spartanbyte</a><strong> || </strong>
				</ul>

			<ul class="footer-right">
			<script>
                    image01 = new Image()
                    image01.src ="/images/icons/linkedin.png"
                    image02 = new Image()
                    image02.src="/images/icons/rev-linkedin.png"
                </script>
				{{--<li><a href="{{ url('https://www.google.com/') }}" onmouseover="document.images['example'].src=image02.src" onmouseout="document.images['example'].src=image01.src">
                <img src="/images/icons/linkedin.png" name="example"></a></li>--}}
				<li><a href="https://www.linkedin.com/in/briantwardwell/"><img src="/images/icons/linkedin.png" title="LinkedIn"/></a></li>
				<li><a href="https://www.facebook.com/briantwardwell"><img src="/images/icons/facebook.png" title="Facebook"/></a></li>
				<li><a href="https://twitter.com/wardwell_brian"><img src="/images/icons/twitter.png" title="Twitter"/></a></li>
				<li><a href="https://github.com/SpartanByte"><img src="/images/icons/github.png" title="GitHub" /></a></li>
                {{--<li><a href="#"><img src="/images/icons/spotify.png" title="Spotify"/></a></li>--}}
                <li><a href="https://soundcloud.com/battle-cry-wardwell"><img src="/images/icons/soundcloud.png" title="Soundcloud"/></a></li>
                <li><a href="http://spartanbyte.deviantart.com/"><img src="/images/icons/deviantart-new.png" title="DeviantArt"/></a></li>
			</ul>
							

			


		</div>
    </body>
</html>
