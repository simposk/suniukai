<nav class="nav">
    <div class="container">
        <a class="navbar-brand" href="/pradinis">Šuniukai</a>
        <div class="right">
            <ul>
                @if(!Auth::check())
                    <li>
                        <a href="/login" class="nav-link">Log In</a>
                    </li>

                    <li>
                        <a href="/register" class="nav-link">Register</a>
                    </li>
                @else
                    <li>
                        <a class="nav-link" href="/home">Dashboard</span></a>
                    </li>
                
                    <li>
                        <a href="../ads" class="nav-link">Ads</a>
                    </li>

                    <li>
                        <form action="/logout" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="logout">Log Out</button>
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>