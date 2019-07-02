<template>
    <div class="btn-group">
        <button type="button" v-on:click.prevent="toggleShow()" class="btn btn-secondary dropdown-toggle" :class="showtext" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
            login
        </button>
        <div class="dropdown-menu dropdown-menu-lg-right" :class="showtext">
            <div class="card" style="width: 18rem;">
                <img :src="imagesrc" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center m-auto">User Name</h5>
                    <p class="card-text">one line about user quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                showtext :''
            }
        },
        props:{
            imagesrc : String
        },
        methods: {
            toggleShow: function(){
                if(this.showtext == ''){
                    this.showtext ='show'
                }else{
                    this.showtext = ''
                }
            }
        },

        watch: {

        },
    }
</script>


<style scoped>

</style>
