<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>PHP Dischi JSON</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app">
        <div v-for="disco in dischi" class="disco">
            <h2>{{ disco.titolo }}</h2>
            <p>{{ disco.artista }}</p>
            <p>{{ disco.anno }}</p>
        </div>
    </div>

    <script src="script.js"> </script>
</body>

</html>