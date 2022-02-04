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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>