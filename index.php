<?php 
require_once "constants/constant.php";
require_once INCLUDES."variables.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title; ?></title>

	<!-- bootstrap includes -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- google font includes -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>

	<!-- font awesome includes -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- my css files -->
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_R ?>general.css">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_R ?>header.css">
	<script src="<?php echo JS_R ?>values.js"></script>
	<script src="<?php echo JS_R ?>load-logic.js"></script>
</head>
<body style="padding: 5px 10px;">
	<?php include INCLUDES."header.php"; ?>
	<script src="<?php echo JS_R ?>header.js"></script>

	<section id="wedContent" style="margin-top: 100px; height: 100%"></section>


	<?php include INCLUDES."footer.php"; ?>
	<script>
		loadPage(currentPage);
	</script>
</body>
</html>
