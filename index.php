<!DOCTYPE html>
<html>
<head>
<meta charset="cp1251_general_ci"><!-- указываем кодировку -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> <!--Ставим расширение для разных размеров экрана -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!--подключаем  bootstrap-->
<title>Выберите страну</title>



</head>
<body>
<?php

require_once 'bd.php';// файл подключения к бд
require_once 'config.php';// файл настройки ввода в бд

?>
<div class="container">
     <div class="row">
		<div class="col-lg-4">
			<form   class="form-signin" method="POST"><!--создаем форму ввода, указываем метод-->
				<h2>Введите страну</h2>
				
				<input type="text" class="form-control" name="country"  placeholder="Россия" required>
				<button class="btn btn-lg btn-primary btn-block" type="submit">ОК</button>
				
				<?php if(isset($fmsg)){?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php }?>
				<?php if(isset($smsg)){?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php }?>
	 
				
			
			</form>
		</div>
	   
		<div class="col-lg-8">
	       <img class="btn-block" src="worldmap.png">
		</div>
	 
	       
     </div>
	 
</div>

   <br>
   
<div class="container">
	<div class="row">
        <div class="col-lg-6">
			<h2>Страны</h2> 
			<a href="https://ru.wikipedia.org/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_%D0%B3%D0%BE%D1%81%D1%83%D0%B4%D0%B0%D1%80%D1%81%D1%82%D0%B2" target="_blank">Wikipedia cписок всех стран</a><!-- ссылка на сторонний ресурс с информацией для пользователя-->
       

		</div>
        <div class="col-lg-6">
			<form action="table.php" method="POST"><!--форма вывода данных из таблицы-->
				<h2>Мои страны</h2>
				<input class="btn btn-lg btn-primary" type="submit" name="myCountry" value="посмотреть">
			</form>
        </div>
      
    </div>
</div>
	
	
</body>




</html>