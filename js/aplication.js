$(document).ready(function(){
    $("#form").submit(function(event) { //устанавливаем событие отправки для формы с id=form
      event.preventDefault(); //Отключаем обновление страницы
      var form_data = $(this).serialize(); //собераем все данные из формы
      $.ajax({
         type: "POST", //Метод отправки
         url: "../functions/order.php", //путь до php фаила отправителя
         data: form_data,

         success: function() {
            //код в этом блоке выполняется при успешной отправке сообщения
             document.getElementById("modul").insertAdjacentHTML('afterend', '<div class="modul_window" id="modul-window"><h1 id="close-modul"><a onclick="click6()">+</a></h1><p>Заявка успешно отправлена</p></div>')
             document.getElementById("modul-window").style.transitionDuration =  1.5 + "s";
             document.getElementById("modul-window").style.left = 0 + "%";
            }
     });
  });
});

function click6(){
    document.getElementById("modul-window").style.left = -20 + "%";
}