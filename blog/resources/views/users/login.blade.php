<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My Account</title>
        @include('layouts.meta')
        @include('users.css')
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body onload="init()">
        @include('layouts.nav')
        <main class="account">
            <form method="get" action="/selection" class="mainform">
            @csrf
                <fieldset>
                    <legend>一般登入</legend>
                    帳號：<br><input type="email" name="email" pattern="{A-Z a-z 0-9}" required><br>
                    密碼：<br><input type="password" name="password" pattern="{A-Z a-z 0-9}{8,12}" required><br>
                    <button type="submit">登入</button>
                </fieldset>
            </form>
            <div class="link-text">
                <a href="/signup">立即加入會員</a>
                <a href="/updatepassword">忘記密碼</a>
            </div>
            <form action="" class="secondform">
            @csrf
                <fieldset>
                    <legend>使用其他方式登入</legend>
                    <button class="media"><img src="images/google.png"> Google</button>
                    <button class="media"><img src="images/facebook.png"> Facebook</button>
                    <button class="media"><img src="images/apple.png"> Apple</button>
                </fieldset>
            </form>
        </main>
        @include('layouts.footer')
        @include('layouts.js')
    </body>
</html>