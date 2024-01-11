<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>PHP Dischi JSON</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="app" class="container mt-5">
        <div class="row">
            <div class="col-md-4" v-for="disco in dischi">
                <div class="card bg-secondary-subtle">
                    <img :src="disco.copertina" class="card-img-top" :alt="disco.titolo">
                    <div class="card-body">
                        <h5 class="card-title">{{ disco.titolo }}</h5>
                        <p class="card-text">{{ disco.artista }}</p>
                        <p class="card-text anno">{{ disco.anno }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>