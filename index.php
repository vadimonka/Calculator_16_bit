<html>
<head>
	<title>16хКАЛЬКУЛЯТОР</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>
	<form action="" method="POST">
		<?php
		$multy=0;
		if (isset($_POST['op'])){
			$op=$_POST['op'];
			$p1=$_POST['p1'];
			$p2=$_POST['p2'];
				
				if($op=='Сложение (+)'){
					$p1='0x'.$p1;
					$p2='0x'.$p2;
					$multy=$p1+$p2;
				}
				if($op=='Вычитание (-)'){
					$p1='0x'.$p1;
					$p2='0x'.$p2;
					$multy=$p1-$p2;
				}
				if($op=='Умножение (*)'){
					$p1='0x'.$p1;
					$p2='0x'.$p2;
					$multy=$p1*$p2;
				}
				if($op=='Деление (/)'){
					if($p2!='0'){
						$p1='0x'.$p1;
						$p2='0x'.$p2;
						$multy=$p1/$p2;
					}else{
						$multy='Деление на ноль';
					}
				}
		}
		?>
		<table>
			<tr>
				<td colspan="2" class="head" style="border-radius:10px 10px 5px 5px;"><center>Калькулятор для 0000<sub>16</sub> чисел</center></td>
			</tr>
			<tr>
				<td colspan="2" class="panel" style="border-radius:5px;"><?php if($multy!='0') printf("0x%X",$multy); ?></td>
			</tr>
			<tr>
				<td><input class="inp" type="text" name="p1" autocomplete="off" placeholder="первое число"></td>
				<td><input class="inp" type="text" name="p2" autocomplete="off" placeholder="второе число"></td>
			</tr>
			<tr>
				<td><input class="subm" type="submit" name="op" value="Сложение (+)"></td>
				<td><input class="subm" type="submit" name="op" value="Вычитание (-)"></td>
			</tr>
			<tr>
				<td><input class="subm" type="submit" name="op" value="Умножение (*)"></td>
				<td><input class="subm" type="submit" name="op" value="Деление (/)"></td>
			</tr>
			<tr>
				<td colspan="2" class="foot" style="border-radius:5px 5px 10px 10px;">2016</td>
			</tr>
		</table>
	</form>
	<script language="javascript">
		var a=0;
	</script>
</body>
</html>
