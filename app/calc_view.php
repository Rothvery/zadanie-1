<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_x">Liczba 1: </label>
        <input id="id_x" type="text" name="x" value="<?php if (isset($x)) print($x); ?>" /><br />
	<label for="id_op">Operacja: </label>
	<select name="op">
		<option value="plus">+</option>
		<option value="minus">-</option>
		<option value="times">*</option>
		<option value="div">/</option>
	</select><br />
	<label for="id_y">Liczba 2: </label>
	<input id="id_y" type="text" name="y" value="<?php if (isset($y)) print($y); ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>
    
<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>
    <br />
    <b>Kalkulator kredytowy</b>
    <form action="<?php print(_APP_URL);?>/app/loanCalc.php" method="get">
            <input type="text" name="kwota" placeholder="kwota" >
            <input type="text" name="okres" placeholder="okres" >
            <input type="text" name="oprocentowanie" placeholder="oprocentowanie" >
            <br>
            <button type="submit" name="submit" value="submit">Policz</button>
            
        </form>
        <?php if (isset($funds_per_month)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$funds_per_month; ?>
</div>
<?php } ?>
 
</body>
</html>