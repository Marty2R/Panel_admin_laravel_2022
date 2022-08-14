<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- meta -->
    <meta name="description" content="Site d'entrainement en Laravel">
    <meta name="author" content="Marty">
    <!-- Script -->
    <script src="https://kit.fontawesome.com/a1d607b151.js" crossorigin="anonymous"></script>
    <!-- Link -->
    <link href="{{ asset('../css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/style.css') }}" rel="stylesheet">
    <title>Projet Laravel - Marty</title>
</head>

    <body>

        @auth
        <header>

            <h1>User Panel</h1>

            <nav>

                <ul>

                    <li><p>CORE</p></li>

                    <li><a href="/dashboard"> <i class="fas fa-chart-line"></i> Dashboard</a></li>
                    <li><a href="/profile"> <i class="fas fa-users"></i> Profile</a></li>
                    <li><a href="/change_password"> <i class="fas fa-calendar"></i> Change Password</a></li>
                    <!-- Déconnection -->
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                            
                        </form>
                    </li>

                </ul>

            </nav>

        </header>
        @endauth

        <main class="main">

            @yield('content')

        </main>

    </body>

</html>