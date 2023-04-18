<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sign Up</title>
        @include('layouts.meta')
        @include('users.css')
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body onload="init()">
        @include('layouts.nav')
        <main class="account">
            <form method="post" action="/userstore" class="mainform">
            @csrf
                <fieldset>
                    <legend>註冊</legend>
                    姓名：<br><input type="text" name="name" required><br>
                    生日：<br><input type="date" name="birth" required><br>
                    <div class="radio">
                        性別：<br><input type="radio" name="gender" value="male">男
                        <input type="radio" name="gender" value="female">女
                    </div>
                    帳號：<br><input type="email" name="email" pattern="{A-Z a-z 0-9}" required><br>
                    密碼：<br><input type="password" name="password" pattern="{A-Z a-z 0-9}{8,12}" required><br>
                    <button type="submit">送出</button>
                </fieldset>
            </form>
        </main>
        @include('layouts.footer')
        @include('layouts.js')
    </body>
</html>