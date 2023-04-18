<!DOCTYPE html>
<html lang="en">
    <head>
        <title>User List</title>
        @include('layouts.meta')
        @include('users.css')
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body onload="init()">
        @include('layouts.nav')
        <main  class="account">
            <h1>User List</h1>
            <?php
            DB::connection('mysql');
            $users = DB::select('select * from users');
            foreach ($users as $user) {
                echo "<div class='list'>";
                echo "<h3>User ID: " . $user->id . "</h3>";
                echo "<h3>User Name: " . $user->name . "</h3>";
                echo "<h3>Email: " . $user->email . "</h3>";
                echo "</div>";
            }
            ?>
        </main>
        @include('layouts.footer')
        @include('layouts.js')
    </body>
</html>