<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Delete User Page</title>
        @include('layouts.meta')
        @include('users.css')
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body onload="init()">
        @include('layouts.nav')
        <main class="account">
            <h1>Delete User</h1>
            <form method="post" action="/userdeleted">
            @csrf
                User ID: <input type="text" name="id" required><br>
                <button type="submit">送出</button>
            </form>
        </main>
        @include('layouts.footer')
        @include('layouts.js')
    </body>
</html>

