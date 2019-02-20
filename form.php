<!DOCTYPE HTML>
<html>

<head>
<meta charset="UTF-8">
<title>HTML5</title>
</head>

<body>
<form action="" method="post">
<input type="text" name="subject" id="subject" value="Car Loan">
<button type="submit" name="ok">OK</button>
</form>
<?php
if(isset($_POST['ok'])){
echo $_POST['subject'];
}
?>
</body>

</html>