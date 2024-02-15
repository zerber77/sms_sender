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
                                <th scope="col" class="">#</th>
                                <th scope="col" class="">Пользователь</th>
                                <th scope="col" class="">Текст отзыва</th>
                                <th scope="col" class="">Дата рождения</th>
                                <th scope="col" class="">Отправить СМС</th>
                                <th scope="col" class="">Редактировать</th>
                                <th scope="col" class="">Удалить</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(comment,i) in users">
                                <th scope="row">{{comment.id}}</th>
                                <td>{{comment.phone}}</td>
                                <td>{{comment.name}}</td>
                                <td>{{comment.birth}}</td>
                                <td>
                                    <button  @click.prevent="sendSms(comment.id, i)">
                                        <i style="color: #234e89" class="fa fa-mail-forward m-auto"></i>
                                    </button>
                                    <p v-if="comment.status">{{comment.status}}</p>
                                </td>
                                <td>
                                    <button  @click.prevent="update(comment.id, i)"><i style="color: #234e89" class="fa fa-pencil m-auto"></i></button>
                                </td>
                                <td>
                                    <button  @click.prevent="delete_comment(comment.id)"> <i style="color: #ee5566" class="fa fa-pencil m-auto"></i></button>
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
    name: "index",
    data(){
      return {
          users:{},
      }
    },
    methods: {
        getUsers() {
            api.get('api/users/')
                .then(res => {
                    this.users = res.data
                })
        },
        sendSms(id, index) {
            this.users[index].status = 'Отправка...'
            api.get('api/users/'+id)
                .then(res => {
                    this.users[index].status = res.data
                })
        },
    },
    mounted(){
        this.getUsers()
    },
}
</script>

<style scoped>

</style>
