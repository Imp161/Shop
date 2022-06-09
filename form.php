<?php
    require 'ajax.php';
?>
<!doctype html>
<html lang="ru">
<style>
</style>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="style3.css">
	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <title>Shop</title>
  </head>
  <body>

   <!--Меню-->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #BB9CFE;">

  <!-- Логотип -->
  <a href="shop.html" class="navbar-brand">
 <img src="img/logo.png" width="199" height="81" class="logo" alt="shop"></a> 
<div class="container">

  <!-- Ссылки -->

<ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link text-white" href="photo.php"><h1> Галерея </h1>
      </a>
    </li>
     <li class="nav-item ">
      <a class="nav-link text-white" href="form.html"> <h2>Заказ</h2>
      </a>
    </li>
  </ul>

</div>
</nav>
<br>

<div class="container">

<!--Ввод почты-->
<form name="form" onsubmit="return false" action="action.php" method="post">
  <div class="form-group row">
    <label for="yourname" class="col-form-label mr-sm-2"><h6>Твои контакты!</h6></label>
    <div class="col-xl-4">
    <input type="email" class="form-control" value="" id="email" name="email" aria-describedby="emailHelp" placeholder="Введите адрес почты" style="width: 680px;" required>	
  </div>
</div>

<!--Текстовое поле-->
<div class="form-group row">
  <label for="textbox"><h6>Пожелания и предложения</h6></label></div>
  <div class="form-group row">
  <div class="col-xl-9">
  <textarea class="form-control" rows="5" id="comment" name="comment" value="" required ></textarea>
</div>
</div>

<!--Флажки-->
<div class="form-group row">
<label for="request" class="col-xs-3 col-form-label mr-2"><h6>Пожелания и предложения</h6></label></div>
<div class="form-group row">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="goodness" id="check_1"  name="check_1">
  <label class="form-check-label" for="defaultCheck1">
    <h6>Добра!</h6>
  </label>
</div>
</div>

<div class="form-group row">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="happiness" id="check_2" name="check_2">
  <label class="form-check-label" for="defaultCheck2">
    <h6>Счастья!</h6>
  </label>
</div>
</div>

<div class="form-group row">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="health" id="check_3" name="check_3">
  <label class="form-check-label" for="defaultCheck2">
    <h6>Всего хорошего!</h6>
  </label>
</div>
</div>


<!--Радиокнопки-->
<div class="form-group row">
<label for="gender" class="col-form-label mr-2"><h6>Кто ты?</h6></label></div>
<div class="form-group row">
<div class="form-check">
  <input class="form-check-input" type="radio" name="radio_b" id="radio_b" value="new">
  <label class="form-check-label" for="user1">
    <h6>Новый пользователь</h6>
  </label>
</div>
</div>

<div class="form-group row">
<div class="form-check">
  <input class="form-check-input" type="radio" name="radio_b" id="radio_b" value="frequent">
  <label class="form-check-label" for="user2">
    <h6>Частый посетитель</h6>
  </label>
</div>
</div>

<div class="form-group row">
<div class="form-check">
  <input class="form-check-input" type="radio" name="radio_b" id="radio_b" value="friend">
  <label class="form-check-label" for="user3">
    <h6>Твой лучший друг!</h6>
  </label>
</div>
</div>

<!--Загрузка файла-->
  <div class="form-group">
    <label for="exampleFormControlFile1"><h6>Загрузи файл!</h6></label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
<br>

<!--Кнопка отправить-->
  <button type="submit" class="btn btn-dark btn-primary" data-bs-target="#mod" id="btn" data-bs-toggle="modal" >Отправить!</button>
</form>
 <!-- Модальное окно -->
	<div class="modal fade" id="mod" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
		  <div class="modal-content">
			<div class="modal-header">
			  <div class="modal-title" id="exampleModalLabel">Спасибо за ваш отзыв!
			  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
					  </button>
			</div>
			<div class="modal-body">
			  <p>Ваши данные успешно отправлены.</p>
			</div>
		  </div>
		</div>
</div>
	<script src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </body>
</html>