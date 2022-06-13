<!DOCTYPE html>
<html lang="fr">

<head>
    <title>DemoMot</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        @include('include.header')
    </header>
    <main class="grid place-items-center ">
        @yield('content')
    </main>
    <footer>
        @include('include.footer')
    </footer>
</body>

</html>