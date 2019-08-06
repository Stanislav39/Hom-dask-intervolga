<?php

require_once 'bd.php';
if(isset($_POST['myCountry']))
{
	$result = $pdo->query('SELECT * FROM countrys');
		while($row = $result->fetch(PDO::FETCH_ASSOC))
		{
			echo '№ ' . $row['id'] . ' ' . $row['country'] . ' ' . 'время добавления ' . $row['date'] . '<br>' . '<br>';
		}
		
}




?>