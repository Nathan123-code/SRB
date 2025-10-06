<nav class="navbar navbar-expand bg-warning">
    <div class="container">
        <ul class="navbar-nav gap-3">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'text-white bg-primary rounded' : 'text-primary' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('kom1*') ? 'text-white bg-primary rounded' : 'text-primary' }}" href="/kom1">Komisi 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('kom2*') ? 'text-white bg-primary' : 'text-primary' }}" href="/kom2">Komisi 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('kom3*') ? 'text-white bg-primary' : 'text-primary' }}" href="/kom3">Komisi 3</a>
            </li>
        </ul>
    </div>
</nav>
