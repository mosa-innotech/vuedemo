<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>VFor</title>
    </head>
    <body>
        <h1>My Playlist</h1>

        <div id="vfor-app">

            Song: <input type="text" name="aSong" v-model="aSong"> &nbsp
            Artist: <input type="text" name="aSong" v-model="aSongArtist">
            <br><br>
            <button type="button" v-on:click="addSong()" name="button">Add Song</button>

            <p v-for="song in songs">Song:  @{{ song.track }} | Artist: @{{ song.artist }}</p>
            <br>
            <button type="button" v-on:click="removeSong()" name="button">Remove Song</button>
            <button type="button" v-on:click="clearList()" name="button">Empty List</button>

        </div>

        <script type="text/javascript" src="/js/vue.min.js"></script>
        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
