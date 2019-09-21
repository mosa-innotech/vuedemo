<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Events</title>
    </head>
    <body>
        <h1>Events</h1>

        <div id="events-app">

            <button type="button" v-on:click="buttonClicked();" name="button">Click Me</button>

            <div v-on:mouseover="elementHovered();" >
                <h2>Hello</h2>
                <h2>Hello</h2>
                <h2>Hello</h2>
                <h2>Hello</h2>
            </div>
        </div>
    
        <script type="text/javascript" src="/js/vue.min.js"></script>
        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
