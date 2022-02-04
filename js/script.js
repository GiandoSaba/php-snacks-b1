var app = new Vue({
    el: '#app',
    data: {
        cars: [],
        filter: {
            carburante: 'all',
            cambio: 'all',
            n_porte: 'all',
        },
    },
    created() {
        this.getCar();
    },
    methods: {
        getCar() {
            const params = {
                carburante: this.filter.carburante,
                cambio: this.filter.cambio,
                n_porte: this.filter.n_porte,
            };
            axios.get('http://localhost/php-snacks-b1/server/controller.php', { params }).
                then((result) => {
                    console.log(params)
                    this.cars = result.data.response;
                })
                .catch((err) => {
                    console.log(err);
            });
        }
    }
})