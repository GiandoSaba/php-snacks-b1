<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row mx-4">
                <div class="col-12">
                    <form action="index.php" method="GET">
                        <label for="carburante">Carburante:</label>
                        <select name="carburante" id="carburante" v-model="filter.carburante" @change="getCar">
                            <option value="all">All</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Benzina">Benzina</option>
                        </select>
                        <label for="cambio">Cambio:</label>
                        <select name="cambio" id="cambio" v-model="filter.cambio" @change="getCar">
                            <option value="all">All</option>
                            <option value="Manuale">Manuale</option>
                            <option value="Automatico">Automatico</option>
                        </select>
                        <label for="n_porte">Numero Porte: </label>
                        <select name="n_porte" id="n_porte" v-model="filter.n_porte" @change="getCar">
                            <option value="all">All</option>
                            <option value="5">5</option>
                            <option value="2">2</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="row row-cols-3 align-items-stretch">
                <div class="col mb-2" v-for="car in cars" :key="car.id">
                    <div class="card">
                        <img :src="car.img" class="card-img-top" :alt="car.marca" style="height: 250px">
                        <div class="card-body">
                            <h5 class="card-title">{{car.marca}} {{car.modello}}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Prezzo: {{car.prezzo}}</li>
                            <li class="list-group-item">Chilometri: {{ car.chilometraggio }}</li>
                            <li class="list-group-item">Carburante: {{ car.carburante }}</li>
                            <li class="list-group-item">N. Porte: {{ car.n_porte }}</li>
                            <li class="list-group-item">Cambio: {{ car.cambio }} Marce: {{ car.n_marce }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>