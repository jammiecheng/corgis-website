<!DOCTYPE html>
<html lang="en">
    <head>
        <title>刪除商品</title>
        @include('layouts.meta')
        @include('users.css')
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body onload="init()">
        @include('layouts.nav')
        <main class="account">
            <h1>刪除商品</h1>
            <form method="post" action="/productdeleted">
            @csrf
                Product ID: <input type="text" name="id" required><br>
                <button type="submit">刪除</button>
            </form>
        </main>
        @include('layouts.footer')
        @include('layouts.js')
    </body>
</html>

