<template>
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- Topbar -->


            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">

                    <!-- Menu desktop -->
                    <div  class="menu-desktop">
                        <ul class="main-menu">

                            <li >
                                <a href="#" @click.prevent="">Товары</a>
                                <ul class="sub-menu">
                                    <router-link to="/">Запчасти</router-link>
                                    <router-link to="/product">Масла</router-link>
                                </ul>
                            </li>

                        </ul>
                    </div>

                </nav>
            </div>
        </div>

    </header>

    <router-view :key="$route.fullPath"></router-view>
</template>

<script>
export default {
    name: "App"
}
</script>

<style scoped>

</style>
