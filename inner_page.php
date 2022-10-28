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
	<div id="inner-main-div">

		<!-- ========== name displaying  div ============ -->

		<div class="row">
			<div class="col-md-4" id="inner-first-div">
				<div id="phone-logo-div">
					<img src="./assets/images/iphone-notch.svg">
				</div>
				<div id="name-display-div">
					<p>ivin jose 1</p>
					<p>name 2</p>
					<p>name 3</p>
					<p>name 4</p>
					<p>name 5</p>
					<p>name 6</p>
					<p>name 7</p>
					<p>name 8</p>
					<p>name 9</p>
				</div>
			</div>

			<!-- ========== END name displaying  div ============ -->

			<!-- ========== inner middle  div ============ -->

			<div class="col-md-4" id="inner-middle-div">

				<!-- search bar div -->

				<div id="inner-search-div">
					<div id="inner-searchbar-div">
						<input type="search" name="" id="inner-search-bar" placeholder="SEARCH NAME.........">
					</div>
					<div id="inner-search-btn-div">
						<button id="inner-search-btn" class="button btn-outline-primary home-btn">Search</button>
					</div>
				</div>

				<!-- END search bar div -->

				<div id="all-data-div">

					 <!-- ------- All details displaying div ------ -->

					<div id="user-details-div">
					     <div id="user-details-heading-div">
					     	<div id="user-details-logo-div">
					     		<i id="open-book-logo" class="fa-solid fa-book-open-reader"></i>
					     		<h2>NAME LASTNAME</h2>
					     	</div>
					     	<div id="user-details-display-div">
					     		<b>proffesion:</b> Student<br>
					     		<b>Home:</b> place<br>
					     		<b>Phone:</b> 1234567899<br>
					     		<b>email:</b> something@gmail.com
					     	</div>
					     </div>	
					     <div id="user-details-image-div">
					     	<img id="user-details-image" src="./assets/images/orange.png">
					     </div>		
					</div>

				</div>

			</div>

			<!-- ======= END middle div ========= -->

			<div class="col-md-4" id="inner-third-div">
				<div>
					buttons
				</div>
			</div>
		</div>

	</div>

</main>
</body>
</html>