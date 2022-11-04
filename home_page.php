<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

	<title>Phone book</title>
</head>
<body>
	<main>
       
       <!-- =============== main div =============== -->

		<div id="main-div">
			<div class="row">
				<div id="search-div" class="col-md-6">
					
					<div id="home-input-div">
						<h2 id="home-h2">PHONE BOOK</h2>
						<input id="home-search-bar" type="search" class="form-control" placeholder="SEARCH NAME.......">
					</div>
					<div id="home-button-div">
						<a id="aa" class="button btn-outline-primary home-btn" href="./inner_page.php">Show more</a>
						<a id = "home-search-btn" class="button btn-outline-primary home-btn" >Search</a>
					</div>
				</div>
				<div id="earth-div" class="col-md-6">
					<div id="home-earth-image-div">
						<img src="./assets/images/orange.png">
					</div>
				</div>
			</div>
		</div>

		<!-- =============== end main div =============== -->
	</main>

</body>
</html>

<script type="text/javascript" src="./assets/js/main.js"></script>