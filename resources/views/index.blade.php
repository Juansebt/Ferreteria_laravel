<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <div id="app">
        <div class="row m-5">
            <button type="button" class="col mx-3 btn btn-outline-light">
                <router-link to="/app">App</router-link>
            </button>
            <button class="col btn btn-outline-light">
                <router-link to="/saludar">Saludar</router-link>
            </button>
        </div>
        <!-- <router-link to="/app">App</router-link>
        <router-link to="/saludar">Saludar</router-link> -->
        <router-view></router-view>
    </div>
</body>
</html>
@vite('resources/js/app.js')
