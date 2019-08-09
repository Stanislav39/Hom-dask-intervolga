# Hom-dask-intervolga
Задание на должность ученик веб-разработчика

Другие задания

№1
Решите задачу на PHP
Есть отсортированный по возрастанию массив из 1000 элементов. Есть число, которое точно есть в этом массиве. Выведите на экран его порядковый номер.
Не используйте готовый функций поиска, напишите код.
Ваш код должен использовать то, что массив уже отсортирован, и быть по возможности оптимальным.

```
<?php
$arr = range(1,1000);//Создаём массив на 1000 элементов
$val =257; //вводим искомое значение

function seach($arr,$val)// создаём функцию поиска
{
	$st = 0; //начало массивы
	$fin = count($arr) -1;//конец массива

	while($st<=$fin) //используем бинарный поиск спомощью цикла 
	{   
    		$p=floor(($st+$fin)/2);//$p - половина массива

			if($arr[$p]===$val)
			{   
				return $p;
			}
	
			elseif($arr[$p] > $val)
			{
				$fin= $p-1;
			}
			
			else
			{
				$st=$p+1;	
			}	
	}	
	
	return "error";
} 
echo "Ответ:".seach($arr,$val);



?>
```

№2
Задача.
Дедушка рассказал такую историю. Когда он был молод, он работал и с работы ездил домой на электричке. Однажды дедушка познакомился с девушкой, которая жила в противоположной стороне от дома. И тогда дедушка решил, что когда он будет возвращаться с работы, то будет садиться на первый попавшийся поезд и ехать либо домой, либо к девушке. Электрички и туда, и обратно идут каждые 15 минут. Через месяц оказалось, что к девушке он ездил в 4 раза чаще, чем домой. Почему?
Объясните свой ответ.							   

Ответ: электрички  домой имеют смещение по расписание каждый день на 3 минуты, электрички к девушки ходят в установленном порядке. Например: электрички домой ходят первый день в 0м,15м,30м,45м, а кдевушке в 1м,16м,31м,46м. Смещая расписание электричек домой на 3 минуты получаем: на 2 день в 3м,18м,33м,48м, на 3 день в 6м,21м,36м,51м, на 4день в 9м,24м,39м,54м, на 5 день в 12м,27м,42м,57м. Получается соотношение 1 к 4. 
                                  
								  
№3
Что делает этот sql-запрос? Объясните по-русски (поясните смысл, не нужно просто переводить дословно, обратите внимание на названия таблиц и полей

select count(*) from users inner join orders on users.id=orders.id_user where users.age<19


Ответ: возвращает таблицу  с пользователями старше 19

 №4
Какую самую сложную программистскую задачу вы решали в своей жизни? Расскажите как это было и чем кончилось?

Создавал регистрацию  сайта  с защитой от SQL-инекций и хэшированием пароля пользователя в БД. Всё делал с помощью видеоуроков.
 
