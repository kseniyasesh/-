<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Передача данных через форму</title>
</head>
<body>
	<h2>Анкета слушателя курсов</h2>
	<form action="" method="get">
<!-- 		<label>
			Согласие об обработке персональных данных 
			<input type="checkbox" name="agreement" value="Согласие">
		</label> -->
		<fieldset>
			<legend>Выберите языки, которые хотели бы изучить</legend>
		<label>
			PHP
			<input type="checkbox" name="languages[]" value="PHP">
		</label>
		<label>
			JS
			<input type="checkbox" name="languages[]" value="Java+Script">
		</label>
		<label>
			Python
			<input type="checkbox" name="languages[]" value="Python">
		</label>
		</fieldset>

		<fieldset>
			<legend>Удобная форма оплаты</legend>
		
			<label>
				Наличный расчет
				<input type="radio" name="pay" value="Наличный расчет">
			</label>
			<label>
				Безналичный расчет
				<input type="radio" name="pay" value="Безналичный расчет">
			</label>
		</fieldset>

		<fieldset>
			<legend>Выберите город</legend>
			<select name="cities[]" size="5" multiple="multiple">
				<option value="Москва">Москва</option>
				<option value="Новосибирск">Новосибирск</option>
				<option value="Курск">Курск</option>
				<option value="Томск">Томск</option>
				<option value="Владивосток">Владивосток</option>
			</select>
		</fieldset>

		<fieldset>
			<legend>Какова численность группы</legend>
			<input type="range" name="count" min="1" max="15">
			<input type="number" name="count" min="1" max="15">
		</fieldset>

		<fieldset>
			<legend>Выберете дату</legend>
			<input type="date" name="date">
		</fieldset>

		<p><button>Отправить</button></p>
		
	</form>
<?php
/*$agreement = "Не задано";

if (isset($_GET['agreement'])) {
	$agreement = $_GET['agreement'];
}

echo $agreement;*/

function getParameter($key) {
	if (isset($_GET[$key])) {
		return $_GET[$key];
	} else {
		return "Не выбрано";
	}
}

function getParameters($key) {
	if (isset($_GET[$key])) {
		return $_GET[$key];
	} else {
		return [];
	}
}

$languages = getParameters('languages');
$pay = getParameter('pay');
$cities = getParameters('cities');
$date = getParameter('date');

echo "<div>Выбранные языки: ";

foreach ($languages as $language) {
	echo "$language,";
}

echo "</div>";


echo "<div>Выбранная форма оплаты: $pay</div>";

echo "<div>Выбранный город: ";

foreach ($cities as $city) {
	echo "$city,";
}

echo "</div>";

echo "<div>Выбраная дата: $date";
?>
</body>
</html>