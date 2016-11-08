<?php
/*
 * Изучите понятие «рекурсия», составьте рекурсивную
функцию вычисления чисел Фибоначчи, проверьте ее
работу
F0 = 0, F1 = 1, Fi = F(i-1) + F(i-2), pentru i>=2
 */
function fibonacci($x)
{
	if($x===0){
		return 0;
	}
	if($x==1) {
		return 1;
	}else{
		return fibonacci($x-1)+ fibonacci($x-2);
	}
}

?>

<html>
<head>
	<title>

	</title>
</head>
<body>
<h1>Hello world!</h1>
<h2><?php echo fibonacci(4);?></h2>
</body>
</html>