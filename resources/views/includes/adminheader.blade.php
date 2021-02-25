<div class="admin-nav-wrapper">
    <div class="admin-app-title">
        <a class="admin-navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'BrianWardwell') }}
        </a>
    </div>
    <ul class="admin-nav-ul">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">&#9654; USER:
                    <span class="current-user">{{ Auth::user()->name }}</span><span class="caret"></span>
                </a>
                <ul class="admin-items" role="menu">
                    <li><a href="{{ route('posts.index')}}">&#9672; Frontend Blog Index</a></li>
                    <li><a href="{{ route('admin.create')}}">&#9672; Create A Post</a></li>
                    <li><a href="{{ route('admin.home')}}">&#9672; Admin Home</a></li>
                    <li>
                        <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            &#9672; Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif
    </ul>
</div>

<!-- Scripts -->
<script src="/js/app.js"></script>