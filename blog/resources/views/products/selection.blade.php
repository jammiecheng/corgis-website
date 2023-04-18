<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Jiawen's Selection</title>
        @include('layouts.meta')
        @include('products.css')
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body onload="init()">
        @include('layouts.nav')
        <main class="selection">
            <div class="productSection">
                <a href="https://intl.orijenpetfoods.com/zh-tw/" class="brandTitle">Orijen 渴望</a>
                <div class="splitLine"></div>
                <div class="productLine">
                <?php
                DB::connection('mysql');
                $orijens = DB::select('select * from products where brand = ?', ['orijen']);
                foreach ($orijens as $orijen) {
                    echo "<div class='product'>";
                    echo "<img src='" . $orijen->image . "' class='productTitle'>";                
                    echo "<a href='" . $orijen->website . "' class='productContent'>";
                    echo $orijen->name . "</a>";
                    echo "</div>";
                }
                ?>
                </div>
            </div>
            <div class="productSection">
                <a href="https://intl.orijenpetfoods.com/zh-tw/" class="brandTitle">Real Power 瑞威</a>
                <div class="splitLine"></div>
                <div class="productLine">
                <?php
                DB::connection('mysql');
                $realpowers = DB::select('select * from products where brand = ?', ['realpower']);
                foreach ($realpowers as $realpower) {
                    echo "<div class='product'>";
                    echo "<img src='" . $realpower->image . "' class='productTitle'>";                
                    echo "<a href='" . $realpower->website . "' class='productContent'>";
                    echo $realpower->name . "</a>";
                    echo "</div>";
                }
                ?>
                </div>
            </div>
            <div class="productSection">
                <a href="https://intl.orijenpetfoods.com/zh-tw/" class="brandTitle">Blue Buffalo 藍饌</a>
                <div class="splitLine"></div>
                <div class="productLine">
                <?php
                DB::connection('mysql');
                $bluebuffalos = DB::select('select * from products where brand = ?', ['bluebuffalo']);
                foreach ($bluebuffalos as $bluebuffalo) {
                    echo "<div class='product'>";
                    echo "<img src='" . $bluebuffalo->image . "' class='productTitle'>";                
                    echo "<a href='" . $bluebuffalo->website . "' class='productContent'>";
                    echo $bluebuffalo->name . "</a>";
                    echo "</div>";
                }
                ?>
                </div>
            </div>
        </main>
        @include('layouts.footer')
        @include('layouts.js')
    </body>
</html>