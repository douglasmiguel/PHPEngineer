@if (Auth::user())
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header">MENU:</li>
            <li class="{{ Menu::active('about') }}">
                <a href="{{ route('about') }}"><i class="fa fa-info"></i> <span>About</span></a>
            </li>
            <li class="{{ Menu::active('education') }}">
                <a href="{{ route('education') }}"><i class="fa fa-graduation-cap"></i> <span>Education</span></a>
            </li>
            <li class="{{ Menu::active('recommendation') }}">
                <a href="{{ route('recommendation') }}"><i class="fa fa-envelope-o"></i> <span>Recommendation</span></a>
            </li>
            <li class="{{ Menu::active('technology') }}">
                <a href="{{ route('technology') }}"><i class="fa fa-lightbulb-o"></i> <span>Technology</span></a>
            </li>
            <li class="{{ Menu::active('project') }}">
                <a href="{{ route('project.index') }}"><i class="fa fa-bar-chart"></i> <span>Projects</span></a>
            </li>
            <li class="{{ Menu::active('github') }}">
                <a href="{{ route('github') }}"><i class="fa fa-github"></i> <span>GitHub</span></a>
            </li>
        </ul>
    </section>
</aside>
@endif
