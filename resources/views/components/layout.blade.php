<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>House-App</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_forward" />
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
    <style>
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-4 pb-4 px-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">my<span><b>House</b></span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="d-flex justify-content-between w-100">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <x-link href="home" :active="request()->is('home')">Home</x-link>
                        </li>
                        <li class="nav-item">
                            <x-link href="/renting" :active="request()->is('renting')">Renting</x-link>
                        </li>
                        <li class="nav-item">
                            <x-link href="/contact" :active="request()->is('contact')">Contacts</x-link>
                        </li>

                    </ul>
                    <ul class="navbar-nav">
                        @guest()
                        <li class="nav-item">
                            <x-link href="/login" :active="request()->is('login')">Login</x-link>
                        </li>
                        <li class="nav-item">
                            <x-link href="/signin" :active="request()->is('signin')">Create account</x-link>
                        </li>
                        @endguest
                        @auth()
                        <form action="logout-user" method="post">
                            @csrf
                           <x-button type='submit'>Log out</x-button>
                        </form>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    {{ $slot }}
</body>

</html>
