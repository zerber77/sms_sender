<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Описание</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-10 connectedSortable">


                        <p>Стек, на котором сделано приложение: Laravel8(PHP 7.2) Vue3 MySql</p>
                        <p>Отправка смс осуществляется либо вручную (на вкладке "Пользователи" кнопка "Отправить СМС"), либо автоматически за 7 дней до дня рождения.</p>
                        <p>После отправки смс получаем код результата от сервера и записываем в базу.</p>
                        <p>Поле статус у смс-сообщений имеет значения: ОК ... -отправлено, ERROR - ошибка при отправке на сервере, ToSend - сообщение будет отправлено после 10.30</p>
                        <p>В планировщике задач две задачи:  </p>
                        <p>CollectBirthdays - собирает пользователей, у которых ДР через 7 дней, и сохраняет их в базу со статусом ToSend. Данная задача запускается кажый час.</p>
                        <p>SendBirthdaySms - отправляет смс со статусом ToSend. Выполняется в 10.30</p>

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
export default {
    name: "about"
}
</script>

<style scoped>

</style>
