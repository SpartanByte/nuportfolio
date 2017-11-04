@yield('foot')
    	<div class="footer-container">
    		<div class="footer">
    			<ul class="footer-left admin">
    				<li>Admin Center &#9654; Blog Posts</li>
                    <li><a href="{{ route('posts.index')}}">&#9672; Frontend Blog Index</a></li>
                    <li><a href="{{ route('posts.create')}}">&#9672; Create A Post</a></li>
                    <li><a href="{{ route('admin.home')}}">&#9672; Admin Home</a></li>
    			</ul>
    			<ul class="footer-right">
    				<li>&#9654;</li>
    			</ul>
    		</div>
    	</div>
    </body>
</html>
