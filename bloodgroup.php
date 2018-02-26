<html>
<head>
</head>
<body>
<div>
<?php
$bgroup = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$bgroup = test_input($_POST["bgroup"]);
}
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>

<<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">>
<fieldset>
<legend>Blood Group<legend>
<select value="combo" name="bgroup" >
		<option value="A+">A+</option>
		<option value="B+">B+</option>
		<input type="submit" name="submit">
		
		</select>

</fieldset>
<?php
echo $bgroup;
?>
</form>

</div>
</body>
</html>
