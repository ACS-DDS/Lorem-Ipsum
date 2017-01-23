<?php require_once("li.php");$li = new LoremIpsum();?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Lorem Ipsum</title>

		<link rel="stylesheet" href="">
	</head>
	<body>
		<form action="index" method="post" accept-charset="utf-8">
			<input type="number" min="0" name="char" />
			<input type="submit" value="Send" />
		</form>
		<div id="output">
<?php if(isset($_POST["char"])) : ?>
			<?=$li->getContent($_POST["char"]);?>
<?php endif; ?>
		</div>
	</body>
</html>