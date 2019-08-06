<?php
	require_once 'bd.php';//подключение к бд
	$country = trim($_POST['country']);//получаем переменную из массива пост, убираем лишние пробелы
	$country = htmlentities($country);
	
if(isset($country))
{
		$sql = 'INSERT INTO countrys(country) VALUES(:country)';// ввод данных в бд через именнованные плейсхолдер
		$params = ['country' => $country];//защита от SQL-инекций
		$stmt = $pdo->prepare($sql);
		$stmt->execute($params);
		$smsg = "Страна успешно добавлена";
}
		
else
{
			$fmsg = "Ошибка";
}

	//Можно использовать другой способ защиты пользовательского ввода, а именно строго ограничить ввод, создав массив с вариантами ввода.
	
	/*
	require_once 'arraycountry.php';
	$country = ucfirst($country);
	if(in_array($country, $listCountry))
	{
		$sql = 'INSERT INTO countrys(country) VALUES(:country)';
		$params = ['country' => $country];//защита от SQL-инекций
		$stmt = $pdo->prepare($sql);
		$stmt->execute($params);
		$smsg = "Страна успешно добавлена";
		
	}
	else
	{
		$fmsg = "Такой страны не существует или она не признана ООН";
	}
*/
?>

