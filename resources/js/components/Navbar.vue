<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-flex-start border-bottom mb-3">
        <span class="d-flex">
        <a class="navbar-brand" href="#">Navbar</a>
            <mylink v-for="(value,index) in outterLinks" :key="index" :hreflink="value[0]" :namelink="value[1]"></mylink>
        </span>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <mylink v-for="(value,index) in innerLinks" :key="index" :hreflink="value[0]" :namelink="value[1]"></mylink>
                
            </div>
        </div>
    </nav>

    
</template>

<script>



//import other components

//general components


export default {
    
    data() {
        return {
            innerLinks:[
               ['/' , 'Home'],
               ['/search' , 'seach'],
               ['/mynavbar' , 'mynavbar'],
               ['articles.php' , 'Articles'],
            ],
            outterLinks:[
                ['#' , 'one'],
                ['#' , 'two'],
                ['#' , 'three'],
            ]
        }
    }
}

</script>

<style scoped>
.navbar span {
    justify-content: center;    
}
</style>