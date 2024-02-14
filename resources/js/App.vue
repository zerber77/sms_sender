<template>
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <router-link  to="/product" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    База данных
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </router-link>

                        </li>

                        <li class="nav-item menu-open">
                            <router-link  to="/product" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Логи
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </router-link>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p data-file=""></p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>

    <router-view :key="$route.fullPath"></router-view>
</template>

<script>
export default {
    name: "App"
}
</script>

<style scoped>

</style>
