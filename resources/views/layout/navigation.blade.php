<nav class="navbar navbar-expand bg-warning">
    <div class="container">
        <ul class="navbar-nav gap-3">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'text-white bg-primary rounded' : 'text-primary' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('project*') ? 'text-white bg-primary rounded' : 'text-primary' }}" href="/project">Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('contact*') ? 'text-white bg-primary' : 'text-primary' }}" href="/contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>
