<?php require('../_layout/header.php') ?>

    <script src="./components/RatingCounter.js"></script>

    <div id="app">
        <h3> Test : {{msg}} </h3>
        <component-a></component-a>
        <rating-counter></rating-counter>

    </div>

    <script>
        //Vue.component("component-a", { template: `<div>A</div>` });

        new Vue({
            el: "#app",
            data: {
                msg: "Hello Vue"
            }
        })
    </script>

<?php include('../_layout/footer.php') ?>