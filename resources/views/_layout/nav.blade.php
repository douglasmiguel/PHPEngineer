@if (Auth::user())
<nav class="navbar navbar-static-top" role="navigation">
    <a href="javascript:void(0);" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Nav</span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ Gravatar::src(Auth::user()->email, 50) }}" class="user-image" alt="{{ Auth::user()->name }}" title="{{ Auth::user()->name }}">
                    <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="user-header">
                        <img src="{{ Gravatar::src(Auth::user()->email, 100) }}" class="img-circle" alt="{{ Auth::user()->name }}" title="{{ Auth::user()->name }}">
                        <p>
                            {{ Auth::user()->name }}
                            <small>{{ Auth::user()->email }}</small>
                        </p>
                    </li>
                    <li class="user-footer">
                        <div class="pull-right">
                            <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sair</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
@endif