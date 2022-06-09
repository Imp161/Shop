<?php
    require 'script.php';

?>
<!doctype html>
<html lang="ru">
<style>
</style>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="style2.css">
 <title>Shop</title>
  </head>
  <body>

  <!--Меню-->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #BB9CFE;">

  <!-- Логотип -->
  <a href="shop.html" class="navbar-brand">
 <img src="img/logo.png" width="199" height="81" class="logo" alt="ulsk"></a> 
<div class="container">

  <!-- Ссылки -->

<ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link text-white" href="photo.html"><h1> Галерея </h1>
      </a>
    </li>
     <li class="nav-item ">
      <a class="nav-link text-white" href="form.html"> <h2>Заказ</h2>
      </a>
    </li>
  </ul>

</div>
<form class="form-inline my-2 my-lg-0">
<input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search" id="searchplace">
<button class="btn btn-dark my-2 my-sm-0" type="submit" id="searchbutton">Искать</button>
</form>
</nav>
  
	<div class="row" style="margin-top: 80px; margin-left: 155px;" align="center">
		<div class="card border-light" style="width: 22rem; margin-right: 80px;" >
			<p>	</p>
 	 		<img src="img/<?php echo $image[0]?>" class="card-img-top" width=350px height=350px>
 	 		<div class="card-body">
			<p class="kind"><h6 class = "kind"><?php echo $name[0]?></h6></p>
   	 		<p class="name"> <?php echo $price[0]?></p>
  			</div>
		</div>
		<div class="card border-light" style="width: 22rem; margin-right: 80px;" >
			<p>	</p>
 	 		<img src="img/<?php echo $image[1]?>" class="card-img-top"  width=350px height=350px>
 	 		<div class="card-body">
   	 		<p class="kind"><h6 class = "kind"><?php echo $name[1]?></h6></p>
   	 		<p class="name"><?php echo $price[1]?></p>
  			</div>
		</div>
		<div class="card border-light" style="width: 22rem; margin-right: 80px;" >
			<p>	</p>
 	 		<img src="img/<?php echo $image[2]?>" class="card-img-top"  width=350px height=350px >
 	 		<div class="card-body">
   	 		<p class="kind"><h6 class = "kind"><?php echo $name[2]?></h6></p>
   	 		<p class="name"><?php echo $price[2]?></p>
  			</div>
		</div>
	</div>
</div>


<div class="row" style="margin-top: 80px; margin-left: 155px;" align="center">
		<div class="card border-light" style="width: 22rem; margin-right: 80px;" >
			<p>	</p>
 	 		<img src="img/<?php echo $image[3]?>" class="card-img-top" width=350px height=350px>
 	 		<div class="card-body">
			<p class="kind"><h6 class = "kind"><?php echo $name[3]?></h6></p>
   	 		<p class="name"> <?php echo $price[3]?></p>
  			</div>
		</div>
		<div class="card border-light" style="width: 22rem; margin-right: 80px;" >
			<p>	</p>
 	 		<img src="img/<?php echo $image[4]?>" class="card-img-top"  width=350px height=350px>
 	 		<div class="card-body">
   	 		<p class="kind"><h6 class = "kind"><?php echo $name[4]?></h6></p>
   	 		<p class="name"><?php echo $price[4]?></p>
  			</div>
		</div>
		<div class="card border-light" style="width: 22rem; margin-right: 80px;" >
			<p>	</p>
 	 		<img src="img/<?php echo $image[5]?>" class="card-img-top"  width=350px height=350px >
 	 		<div class="card-body">
   	 		<p class="kind"><h6 class = "kind"><?php echo $name[5]?></h6></p>
   	 		<p class="name"><?php echo $price[5]?></p>
  			</div>
		</div>
	</div>
</div>

<div class="row" style="margin-top: 80px; margin-left: 155px;" align="center">
		<div class="card border-light" style="width: 22rem; margin-right: 80px;" >
			<p>	</p>
 	 		<img src="img/<?php echo $image[6]?>" class="card-img-top" width=350px height=350px>
 	 		<div class="card-body">
			<p class="kind"><h6 class = "kind"><?php echo $name[6]?></h6></p>
   	 		<p class="name"> <?php echo $price[6]?></p>
  			</div>
		</div>
		<div class="card border-light" style="width: 22rem; margin-right: 80px;" >
			<p>	</p>
 	 		<img src="img/<?php echo $image[7]?>" class="card-img-top"  width=350px height=350px>
 	 		<div class="card-body">
   	 		<p class="kind"><h6 class = "kind"><?php echo $name[7]?></h6></p>
   	 		<p class="name"><?php echo $price[7]?></p>
  			</div>
		</div>
		<div class="card border-light" style="width: 22rem; margin-right: 80px;" >
			<p>	</p>
 	 		<img src="img/<?php echo $image[8]?>" class="card-img-top"  width=350px height=350px >
 	 		<div class="card-body">
   	 		<p class="kind"><h6 class = "kind"><?php echo $name[8]?></h6></p>
   	 		<p class="name"><?php echo $price[8]?></p>
  			</div>
		</div>
	</div>
</div>
    <!--Separate Popper and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="search.js"></script>   
</body>
</html> 