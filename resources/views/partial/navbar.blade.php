<section id="header">
    <h1 class="logo"><a href="/home">DIELTH</a></h1>

    <nav>
        <ul class="navbar">
            <li><a href="/home">Home</a></li>
            <li><a href="/measure">Measure</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/categories">Article</a></li>

            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hai, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/home"><i class="bi bi-layout-text-sidebar-reverse"></i> Home</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li><a href="/login">Login</a></li>
            @endauth
        </ul>
    </nav>

</section>
