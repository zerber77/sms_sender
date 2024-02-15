<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
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
                                <th scope="col" class="">#</th>
                                <th scope="col" class="">Пользователь</th>
                                <th scope="col" class="">Номер телефона</th>
                                <th scope="col" class="">Текст сообщения</th>
                                <th scope="col" class="">Время отправки</th>
                                <th scope="col" class="">Статус</th>
                                <th scope="col" class="">Режим</th>
                                <th scope="col" class="">Удалить</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(sms,i) in messages">
                                <th scope="row">{{sms.id}}</th>
                                <td>{{sms.user_name}}</td>
                                <td>{{sms.phone}}</td>
                                <td>{{sms.text}}</td>
                                <td>{{sms.created_at}}</td>
                                <td>{{sms.status}}</td>
                                <td>{{sms.mode}}</td>
                                <td>
                                    <button  @click.prevent="delete_comment(sms.id)"> <i style="color: #ee5566" class="fa fa-pencil m-auto"></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                </div>
                <!-- /.content-wrapper -->
                <!-- Control Sidebar -->
                <aside class="control-sidebar control-sidebar-dark">
                    <!-- Control sidebar content goes here -->
                </aside>
            </div>
        </section>
    </div>
</template>

<script>
import api from "../modules/api";

export default {
    name: "product",
    data(){
        return {
            messages:{},
        }
    },
    methods: {
        getSms() {
            api.get('api/sms/')
                .then(res => {
                    this.messages = res.data.data
                    console.log(this.messages)
                })
        },
    },
    mounted(){
        this.getSms()
    },
}
</script>

<style scoped>

</style>
