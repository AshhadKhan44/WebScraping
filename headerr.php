<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!--IE-Compatibility-->
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <!--bootstrap cdn-->
        <!--Mobile meta-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CUSIT Alumni</title>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
           <!-- <link rel="stylesheet" href="style.css">
           <link rel="stylesheet" href="style2.css">
           <link rel="stylesheet" href="ng/ngToast.css">-->
		<!--if IE 9-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <!--end if IE 9-->
        <?php
		if(isset($_GET['char'])){
		$char = $_GET['char'];
		$strlen = strlen($char);
		echo $strlen;
		}
		?>
            
    </head>
	