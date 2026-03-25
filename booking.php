<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Анкета</title>
</head>
<body>
	<h2>Анкета</h2>
<form action="" method="post">
	<label>
		ФИО: <input type="text" name="fullName">
	</label>
	<label>
		Возраст: <input type="number" name="age" min="10" max="100">
	</label>
	<label>
		Согласие об обработке персональных данных: <input type="checkbox" name="agreement" value="Согласен">
	</label>
	<button>Отправить</button>
</form>

<?php 
	function getParameter($key) {
		if (isset($_POST[$key])) {
			return $_POST[$key];
		} else {
			return "Не выбрано";
		}
	}

	$fullName = getParameter('fullName');
	$age = getParameter('age');
	$agreement = getParameter('agreement');


	echo "<h2>Ваша анкета</h2>";
	echo "<p>ФИО: $fullName</p>";
	echo "<p>Возраст: $age</p>";
	echo "<p>Согласие об обработке персональных данных: $agreement</p>";

?>
</body>
</html>