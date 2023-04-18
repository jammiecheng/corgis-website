<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Jiawen's Selection</title>
        @include('layouts.meta')
        @include('users.css')
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body onload="init()">
        @include('layouts.nav')
        <main class="account">
            <form method="post" action="/productstore" class="mainform" enctype="multipart/form-data">
            @csrf
                <fieldset>
                    <legend>新增商品</legend>
                    名稱：<br><input type="text" name="name" required><br>
                    品牌：<select name="brand">
                            <option>請選擇品牌</option>
                            <option value="orijen">Orijen
                            <option value="realpower">Real Power
                            <option value="bluebuffalo">Blue Buffalo
                        </select><br>
                    種類：<select name="type">
                            <option>請選擇種類</option>
                            <option value="puppy">幼犬
                            <option value="original">成犬
                            <option value="senior">高齡犬
                        </select><br>
                    圖片位址：<br><input type="text" name="image" required><br>
                    網址：<br><input type="text" name="website" required><br>
                    <button type="submit">新增</button>
                </fieldset>
            </form>
        </main>
        @include('layouts.footer')
        @include('layouts.js')
    </body>
</html>