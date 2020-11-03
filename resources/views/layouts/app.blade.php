
<html>
    <head>
        <title>App Name - Frise historique</title>
    </head>
    <body>
        <div id="app">
            @section('sidebar')
            <li>
                <router-link to="/test"><i class="fa fa-dashboard"></i> Test</router-link>
            </li>
            <li>
                <router-link to="/example"><i class="fa fa-dashboard"></i> Example</router-link>
            </li>
            @show
        </div>
        <script src="js/app.js"></script>
    </body>
</html>