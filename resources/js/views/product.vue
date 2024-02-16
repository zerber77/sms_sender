<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">СМС-ообщения</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Left col -->
                    <div class="w-100 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Выбрать типы СМС
                        </div>
                        <ul>
                            <div class="d-inline float-l mv20">
                                <input @change.prevent="filterByBrand" :value="'OK'" v-model="brandFlt"  type="checkbox" class="btn-check d-inline mr-1" id="1">
                                <span>Доставленные</span>
                            </div>
                            <div>
                                <input @change.prevent="filterByBrand" :value="'ERROR'" v-model="brandFlt"  type="checkbox" class="btn-check d-inline mr-1" id="2">
                                <span>Не доставленные</span>
                            </div>
                            <div>
                                <input @change.prevent="filterByBrand" :value="'ToSend'" v-model="brandFlt"  type="checkbox" class="btn-check d-inline mr-1" id="3">
                                <span>Готовы к отправке</span>
                            </div>
                        </ul>
                    </div>
                    <section class="col-lg-10 connectedSortable">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="">#</th>
                                <th scope="col" class="">Пользователь</th>
                                <th scope="col" class="">Номер телефона</th>
                                <th scope="col" class="">Текст сообщения</th>
                                <th scope="col" class="">Добавлено</th>
                                <th scope="col" class="">Время отправки</th>
                                <th scope="col" class="">Статус</th>
                                <th scope="col" class="">Режим</th>
                                <th scope="col" class="">Удалить</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(sms,i) in filteredProdArray">
                                <th scope="row">{{sms.id}}</th>
                                <td>{{sms.user_name}}</td>
                                <td>{{sms.phone}}</td>
                                <td>{{sms.text}}</td>
                                <td>{{sms.created_at}}</td>
                                <td>{{sms.updated_at}}</td>
                                <td>{{sms.status}}</td>
                                <td>{{sms.mode}}</td>
                                <td>
                                    <button  @click.prevent="delSms(sms.id)"> <i style="color: #ee5566" class="fa fa-pencil m-auto"></i></button>
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
            brandFlt:[],
            filteredProdArray:[],
        }
    },
    methods: {
        getSms() {
            api.get('api/sms/')
                .then(res => {
                    this.messages = res.data.data
                    this.filteredProdArray = this.messages
                })
        },
        delSms(id) {
            api.get('api/sms/del/'+id)
                .then(res => {
                    this.getSms()
                })
        },
    },
    computed: {
        filterByBrand() {
            this.filteredProdArray = this.filteredPartsByBrands
 //           console.log(this.filteredProdArray)
        },
        filteredPartsByBrands() {
            return this.brandFlt.length
                ? (this.messages.filter(sms => this.brandFlt.some(brand => sms.status.indexOf(brand) !== -1)))
                : this.messages
        },
    },
    mounted(){
        this.getSms()
    },
}
</script>

<style scoped>

</style>
