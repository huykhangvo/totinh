<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>My love</title>
	<link rel="shortcut icon" href="/img/icon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:700" rel="stylesheet">
	<link rel="stylesheet" href="1.css">
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="tim.js"></script>

</head>

<body style="background-image: url('img/Valentine-wallpaper-12.jpg');background-position: center;overflow: hidden;background-repeat: no-repeat;background-size: 100% 100%;">
	<div class="container">
		<div class="row">
				<div class="col-12 ">
						<div class="msg text-center">
							<h1 style="color:white; font-size: 60px;">LÀM BẠN GÁI ANH NHÉ !!!</h1>
						</div>
				</div>
		</div>
		<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div id="yes" class="col-6">
							<a href="gui.php"><button type="button" class="btn btn-outline-danger">Em Đồng Ý !!!</button></a>	
						</div>
					</div>
					<div class="col-sm-6">
						<div id="No" class="col-6">
							<button type="button" class="btn btn-outline-danger">No !!!</button>
						</div>
					</div>
				</div>
		</div>
	</div>
	<div style="visibility:hidden">
    <audio autoplay loop>
        <source src="music/Mot-Nha-Da-LAB.mp3">
    </audio> 
    <audio src="music/Mot-Nha-Da-LAB.mp3" autoplay="true"></audio>
	</div>
	
</body>

<script language="javascript">
	document.getElementById("No").addEventListener("mousemove", function (event) {
		move();
	});
	
	function move() {
		var x = Math.random() * 300
		var y = Math.random() * 300
		var left = x + 'px';
		var top = y + 'px';
		document.getElementById('No').style.left = left;
		document.getElementById('No').style.top = top;
	}
</script>

</html>