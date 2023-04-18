<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Products List</title>
        @include('layouts.meta')
        @include('users.css')
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body onload="init()">
        @include('layouts.nav')
        <main  class="account">
            <h1>Products List</h1>
            <?php
            DB::connection('mysql');
            $products = DB::select('select * from products');
            foreach ($products as $product) {
                echo "<div class='list'>";
                echo "<h3>Product ID: " . $product->id . "</h3>";
                echo "<h3>Product Name: " . $product->name . "</h3>";
                echo "</div>";
            }
            ?>
        </main>
        @include('layouts.footer')
        @include('layouts.js')
    </body>
</html>