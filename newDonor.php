<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Add Donor</title>

	<link rel="shortcut icon" href="css/resource/hand.png" type="image/x-icon">
	<link rel="icon" href="css/resource/hand.png" type="image/x-icon">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/newDonor1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
	 crossorigin="anonymous">
</head>

<body>
	<div class="container" id="DE">

		<nav class="navbar navbar-expand-md bg-dark navbar-dark">
			<a class="navbar-brand" href="index.php"> <i class="fas fa-angle-right"></i> PAU | Blood Donor</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="nav navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" href="newDonor.php"><i class="fas fa-user-plus"></i> New Donor</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="editDonor.php"><i class="fas fa-user-edit"></i> Edit Donor</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="deleteDonor.php"><i class="fas fa-user-minus"></i> Delete Donor</a>
					</li>
				</ul>
			</div>
		</nav>




















 

		<div id="frm-cvr">
			<div class="cl-wh" id="f-mlb">Add New Donor</div>
			<form action="insert.php" method="post">

				<div class="f-i-bx b2 mrg3b" id="border">
					<div class="tb">
						<div class="td icn"><i class="fas fa-user"></i></div>
						<div class="td prt"><input type="text" name="name" placeholder="Name"></div>
					</div>
				</div>

				<div class="f-i-bx b2 mrg3b" id="border">
					<div class="tb">
						<div class="td icn"><i class="fas fa-tint"></i></div>
						<div class="td prt"><input type="text" name="blood" placeholder="Blood Group"></div>
					</div>
				</div>

				<div class="f-i-bx b2 mrg3b" id="border">
					<div class="tb">
						<div class="td icn"><i class="fas fa-map-marked-alt"></i></div>
						<div class="td prt"><input type="text" name="city" placeholder="City"></div>
					</div>
				</div>

				<div class="f-i-bx b2 mrg3b" id="border">
					<div class="tb">
						<div class="td icn"><i class="fas fa-mobile-alt"></i></div>
						<div class="td prt"><input type="text" name="phone" placeholder="Phone"></div>
					</div>
				</div>

						



				<div id="tc-bx">You agree to our <a href="#">terms and conditions</a> &amp; <a href="#">privacy policies</a>.</div>
				<div id="s-btn" class="mrg25t"><input type="submit" value="Add Donor" class="b3"></div>

			</form>
		</div>




</br>
</br>
</br>
</br>

		<footer>
            <p class="h6 text-center text-white">&copy Copyright 2018 PAU | Blood Donor - All Rights Reserved</p>
        </footer>
	</div>
</body>

</html>