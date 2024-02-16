<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Панель управления</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-10 connectedSortable">
    <table class="table">
        <thead>
        <tr>

            <th scope="col">ФИО</th>
            <th scope="col">Телефон</th>
            <th scope="col">Дата рождения</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><!--title-->
                <input v-model="name" type="text" class="form-control"  placeholder="ФИО" maxlength="50">
            </td>
            <td><!--title-->
                <input v-model="phone" type="text" class="form-control"  placeholder="Номер телефона" maxlength="12">
            </td>
            <td><!--title-->

                <input type="date" v-model="birth" id="start" name="trip-start" value="2005-12-01" min="1920-01-01" max="2018-12-31" />

            </td>
        </tr>
        </tbody>
    </table>
                        <button class="btn m-3  stext-101 cl0 size-103 bg1  hov-btn1 p-lr-15 trans-04" @click.prevent="store">Сохранить</button>
                    </section>
                </div>
                <aside class="control-sidebar control-sidebar-dark">
                    <!-- Control sidebar content goes here -->
                </aside>
            </div>
        </section>
    </div>
</template>

<script>
import api from "../../modules/api";
import axios from "axios";
export default {
    name: "create",
    data(){
        return{
            name:'',
            phone:'',
            birth:'',
        }
    },
    methods:{
        store(){
            console.log(this.name, this.birth)
            api.post(`api/users/store/`,{'phone':this.phone,'name':this.name, 'birth':this.birth})
                .then(res=>{
                    this.$router.push({name: 'index'})
                })
        },
    },
}
</script>

<style scoped>
.btn{
    background-color: #007bff;
    color: #fff;
}
</style>
