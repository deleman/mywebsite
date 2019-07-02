<template>
    <div class="form-group row  {!! $errors->has('captcha') ? ' has-error' : '' !!}">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Captcha</label>

        <div class="col-md-6 ">
            <div class="captcha bg-dark">
                <span v-html="captcha" >
                </span>
                <button type="button" class="btn btn-success  btn-refresh" v-on:click="refreshImage()">
                    <i class="fas fa-sync text-primary"></i>
                </button>
            </div>
            <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">


            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
     data () {
         return {
            captcha: ''
         }
     },

        props: {
            // Basic type check (`null` and `undefined` values will pass any type validation)
            captchavalue: String,
        },
    methods: {

        refreshImage: function() {
            this.$http.get("http://localhost:8000/refresh_captcha").then(response => {
                this.captcha = response.body;
            }, error => {
                console.error(error);
            });
        },


    },
    mounted() {
        this.$http.get("http://localhost:8000/refresh_captcha").then(response => {
            this.captcha = response.body;
        }, error => {
            console.error(error);
        });
    console.log('mounted was invoked \n')
    console.log(this.captchaValue)
},
}
</script>


<style scoped>

</style>
