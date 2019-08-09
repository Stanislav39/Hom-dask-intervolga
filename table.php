<!DOCTYPE html>
<html>
<head>
<meta charset="cp1251_general_ci"><!-- указываем кодировку -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> <!--Ставим расширение для разных размеров экрана -->

<!-- Последняя компиляция и сжатый CSS -->  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Дополнение к теме -->  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Последняя компиляция и сжатый JavaScript -->  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<div class="table-responsive">
<table class="table table-striped table-bordered">
	<tr >
		<th>Номер</th>
		<th>Страна</th>
		<th>Время добавления</th>
	</tr>
	
<?php
require_once 'bd.php';
if(isset($_POST['myCountry']))
{
	$result = $pdo->query('SELECT * FROM countrys');
	
		while($row = $result->fetch(PDO::FETCH_ASSOC))
		{
			echo "<tr><td>" . $row['id'] . "</td><td>". $row['country'] . "</td><td>"  . $row['date'] ."</td></tr>";
		}
		echo "</table>";
}
?>
</table>
</div>
</body>
</html>

