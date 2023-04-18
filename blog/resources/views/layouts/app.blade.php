<html>
    <head>
        <title>Corgi's Universe</title>
        @include('layouts.meta')
        @include('layouts.css')
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body onload="init()">
        @include('layouts.nav')
        <main class="home">
            <div class="title">
                Welecome<br>to<br>Corgi's Universe
            </div>
            <div class="circle">
                <a href="/selection">Let's Start</a>
            </div>
        </main>
        @include('layouts.footer')
        @include('layouts.js')
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>