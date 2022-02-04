var app = new Vue({
    el: '#app',
    data: {
        cars: [],
    },
    created() {
        axios.get('http://localhost/php-snacks-b1/server/controller.php').
            then((result) => {
                this.cars = result.data.response;
            })
            .catch((err) => {
        });
    }
})