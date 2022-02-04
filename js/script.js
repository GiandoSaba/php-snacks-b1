var app = new Vue({
    el: '#app',
    data: {
        cars: [],
    },
    created() {
        axios.get('http://localhost/php-snacks-b1/server/controller.php').
            then((result) => {
                console.log(result.data.response);
            })
            .catch((err) => {
                console.log(err);
        });
    }
})