"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[588],{588:(s,e,c)=>{c.r(e),c.d(e,{default:()=>t});var a=c(821),d={class:"content-wrapper"},n=[(0,a.uE)('<div class="content-header"><div class="container-fluid"><div class="row mb-2"><div class="col-sm-6"><h1 class="m-0">Описание</h1></div></div></div></div><section class="content"><div class="container-fluid"><div class="row"><section class="col-lg-10 connectedSortable"><p>Стек, на котором сделано приложение: Laravel8(PHP 7.2) Vue3 MySql</p><p>Отправка смс осуществляется либо вручную (на вкладке &quot;Пользователи&quot; кнопка &quot;Отправить СМС&quot;), либо автоматически за 7 дней до дня рождения.</p><p>После отправки смс получаем код результата от сервера и записываем в базу.</p><p>Поле статус у смс-сообщений имеет значения: ОК ... -отправлено, ERROR - ошибка при отправке на сервере, ToSend - сообщение будет отправлено после 10.30</p><p>В планировщике задач две задачи: </p><p>CollectBirthdays - собирает пользователей, у которых ДР через 7 дней, и сохраняет их в базу со статусом ToSend. Данная задача запускается кажый час.</p><p>SendBirthdaySms - отправляет смс со статусом ToSend. Выполняется в 10.30</p></section></div><aside class="control-sidebar control-sidebar-dark"></aside></div></section>',2)];const o={name:"about"};const t=(0,c(744).Z)(o,[["render",function(s,e,c,o,t,i){return(0,a.wg)(),(0,a.iD)("div",d,n)}]])}}]);