
const prob = document.getElementById('btn');
const title = document.querySelector('.modal-title')
const cont = document.querySelector('.modal-body')
const email = document.getElementById("email");
const comment = document.getElementById("comment");



document.querySelector('form').onsubmit = block;

function block() {
   if((email.value == '')&&(comment.value == '')||(email.value == '')||(comment.value == '')){
      title.innerHTML = "Не все поля заполнены";
      cont.innerHTML = "Пожалуйста, заполните обязательные поля"; 
   }
   else {
      title.innerHTML = "Спасибо за ваш отзыв!";
      cont.innerHTML = "Ваши данные успешно отправлены.";
   }
   console.log(email.value);
   console.log(comment.value);

$.ajax({
url: 'ajax.php',
type: 'POST',
cache: false,
data: {'email': email.value, 'comment': comment.value},
dataType: 'html',
beforeSend: function(){
$("#btn").prop("disabled", true);
},
success: function(){
title.innerHTML = "Спасибо";
cont.innerHTML = "Ваши данные успешно отравлены";
modal.classList.remove('none');
email.value = '';
comment.value = '';
$("#btn").prop("disabled", false);

}
});

   return false;
}