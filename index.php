<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>PHP Dischi JSON</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app" class="container mt-5">
        <div class="row">
            <div class="col-md-4" v-for="disco in dischi" :key="disco.titolo">
                <div class="card-container" @click="flipCard(disco)">
                    <div class="card" :class="{ 'is-flipped': disco.flipped }">
                        <!-- Faccia anteriore della card -->
                        <div class="card-front bg-secondary-subtle">
                            <img :src="disco.copertina" class="card-img-top" :alt="disco.titolo">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ disco.titolo }}</h5>
                                <p class="card-text">{{ disco.artista }}</p>
                                <p class="card-text anno">{{ disco.anno }}</p>
                            </div>
                        </div>
                        <!-- Faccia posteriore della card -->
                        <div class="card-back" v-if="disco.flipped">
                            <div class="card-body">
                                <p class="card-text">{{ disco.descrizione }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>