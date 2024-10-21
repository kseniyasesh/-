<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Анкета бронирования отеля</title>
</head>
<body>

<div class="container">
		<form action="" method="POST">
			<label>
			ФИО: <input type="text" name="fullName">
			</label>
			<label>
<br>
			Адрес: <input type="text" name="adress">
			</label>
<br>			
			<label>
			Возраст: <input type="number" name="age" min="10" max="100">
			</label>
				
<br>
			<label>
			Дополнительные опции:
			<div class="dopMenu">
				<label><input type="checkbox" name="lunch" value="Да">Обед</label>
   				<label><input type="checkbox" name="bed" value="Да">Спальное место</label>
			</label>
<br>
			<label>
				Согласие об обработке персональных данных: <input type="checkbox" name="agreement" value="Согласен" > 
			</label>	
 			<button class="btn">Отправить</button>
		</form>	
</div>

<br>

<?php
function getParameter($key){
	if (isset($_POST[$key])) {
		return $_POST[$key];
	} else {
		return "Не выбрано";
	}
}
	$fullName = getParameter('fullName');
	$adress = getParameter ('adress');
	$age = getParameter ('age');
	$agreement = getParameter ('agreement');
	$lunch = getParameter ('lunch');
	$bed = getParameter ('bed');


	echo "Ваша анкета! <br> ФИО: $fullName <br> Адрес: $adress <br> Возраст: $age <br> Дополнительные опции: <br> Обед: $lunch Спальное место: $bed <br>";
	echo "Согласие об обработке персональных данных: $agreement";

?>
</body>
</html>