<!DOCTYPE html>
<html lang="en">
    <head>
        <title>更新商品</title>
        @include('layouts.meta')
        @include('users.css')
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body onload="init()">
        @include('layouts.nav')
        <main class="account">
            <h1>更新商品</h1>
            <form method="post" action="/productupdated">
            @csrf
                Product Name: <input type="text" name="name" required><br>
                New Image: <input type="text" name="image" required><br>
                New Website: <input type="text" name="website" required><br>
                <button type="submit">更新</button>
            </form>
        </main>
        @include('layouts.footer')
        @include('layouts.js')
    </body>
</html>


