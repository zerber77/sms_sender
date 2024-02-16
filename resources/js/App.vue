<template>
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">SMS sender</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <router-link  to="/" class="nav-link active">
                                <i class="nav-icon fa fa-user"></i>
                                <p>
                                    Пользователи
                                </p>
                            </router-link>

                        </li>

                        <li class="nav-item menu-open">
                            <router-link  to="/product" class="nav-link active">
                                <i class="nav-icon fa fa-mail-reply"></i>
                                <p>
                                    CMC
                                </p>
                            </router-link>
 <!--                           <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p data-file=""></p>
                                    </a>
                                </li>
                            </ul>-->
                        </li>
                        <li class="nav-item menu-open">
                            <router-link  to="/about" class="nav-link active">
                                <i class="nav-icon fa fa-address-book"></i>
                                <p>
                                    O приложении
                                </p>
                            </router-link>

                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
        </aside>

    <router-view :key="$route.fullPath"></router-view>
</template>

<script>
export default {
    name: "App"
}
</script>

<style scoped>
p:hover{
   color: #a5d9ea;
}
</style>
