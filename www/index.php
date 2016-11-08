<?php
/*
 * Изучите понятие «рекурсия», составьте рекурсивную
функцию вычисления чисел Фибоначчи, проверьте ее
работу
F0 = 0, F1 = 1, Fi = F(i-1) + F(i-2), pentru i>=2
 */
error_reporting(E_ALL);
function fibonacci($x)
{
	if($x===0){
		return 0;
	};
	if($x==1) {
		return 1;
	}else{
		return (fibonacci($x-1) + fibonacci($x-2));
	};
}

/*
 * Напишите функцию, которая вычисляет доход по
вкладу. В качестве аргумента принимается сумма
вклада, срок в месяцах, годовой процент.
Возвращается сумма вклада по окончанию срока.
 */
function dohod($suma, $termen, $procentAnual)
{
	$procentLunar = $procentAnual / 12;
	$suma += $suma * $procentLunar * $termen;
	return $suma;
}
function dohodComplex($suma, $termen, $procentAnual)
{
	$procentLunar = $procentAnual / 12;
	if($termen == 1){
		$suma =  $suma+ $suma*$procentLunar;
	}else{
		$suma = dohodComplex($suma, $termen - 1, $procentAnual)*$procentLunar + dohodComplex($suma, $termen - 1, $procentAnual);
	}
	return $suma;

}
/*
 * Напишите функцию, которая принимает на вход два
аргумента – число (1..31) и номер месяца (1..12).
Возвращает правильно сформированную дату на
русском языке. Например: «1 января» или «9 мая»
 */

function dateInRu($day, $month){
	$months = array(1 => 'января',
	                'февраля',
	                'марта',
	                'апреля',
	                'мая',
	                'июня',
	                'июля',
	                'августа',
	                'сентября',
	                'октября',
	                'ноября',
	                'декабря');
	return $day ." " . $months[$month];
}
?>

<html>
<head>
	<title>

	</title>
</head>
<body>
<h1>Hello world!</h1>
<h2><?php echo dateInRu(1, 9);?></h2>
</body>
</html>