<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">
    <div class="h-screen flex flex-col justify-center items-center">
        <form method="post">
            @csrf
            <label>
                <input name="user" type="text" placeholder="Usuario">
            </label> <br>
            <label>
                <input name="password" type="password" placeholder="contraseña">
            </label>


            <button type="submit">login</button>
        </form>
    </div>

</body>

</html>
