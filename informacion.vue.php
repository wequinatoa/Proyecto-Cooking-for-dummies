<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default carta">
                    <div class="card-header cabeza">INFORMACION</div>

                    <div class="card-body ">
                        <a href="trivia-de-comida"><img class="card-img"  src="https://firebasestorage.googleapis.com/v0/b/sistemacalificaciones-78da3.appspot.com/o/trivia.png?alt=media&token=f22c70e1-2125-48a5-bb90-4a71f2579124"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default carta">
                    <div class="card-header cabeza">CARRERAS DEL CHEF</div>

                    <div class="card-body">
                        <a href="ejemplVue"><img class="card-img"  src="https://firebasestorage.googleapis.com/v0/b/sistemacalificaciones-78da3.appspot.com/o/carreraChefs.png?alt=media&token=8e54e8a8-82b1-450a-872e-618e2c179f17"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
    .cabeza{
        padding: 10px;
        color: #000000;
        background-color: goldenrod;
        border-radius: 6px;
        border: 2px solid #000000;
    }
    .carta{
        margin-top: 10px;
    }
    .enter {
        margin: 0 auto;
        display: inline-block;
    }
</style>