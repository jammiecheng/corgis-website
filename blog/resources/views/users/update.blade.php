<!DOCTYPE html>
<html lang="en">
    <head>
        <title>忘記密碼</title>
        @include('layouts.meta')
        @include('users.css')
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body onload="init()">
        @include('layouts.nav')
        <main class="account">
            <h1>忘記密碼</h1>
            <form method="post" action="/userupdated">
            @csrf
                User Name: <input type="text" name="name" required><br>
                New Password: <input type="password" name="password" pattern="{A-Z a-z 0-9}{8,12}" required><br>
                <button type="submit">送出</button>
            </form>
        </main>
        @include('layouts.footer')
        @include('layouts.js')
    </body>
</html>


