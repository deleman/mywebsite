<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-flex-start border-bottom mb-3">
            <span class="d-flex">
            <a class="navbar-brand" href="#">Navbar</a>
                <router-link to="/" class="nav-link">Home</router-link>
                <router-link to="/mynavbar" class="nav-link">navbar</router-link>
                <router-link to="/search" class="nav-link">search</router-link> 
            </span>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    
                </div>
            </div>
        </nav>

        <router-view></router-view> 

    </div>
</template>

<script>
export default {
    
}
</script>

<style scoped>
    .navbar span {
    justify-content: center;    
}
</style>
