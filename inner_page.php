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

						<div id="user-details-div" class="boxshadow">
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
						<div>
							<div>
								<div id="save_form" class="boxshadow">
									<h3>Register</h3>
									<label id="name_label" class="label"></label>
									<input type="text" name="" id="name" class="form-control input-box" placeholder="Name" required>
									<label id="home_label" class="label"></label>
									<input type="text" name="" id="home" class="form-control input-box" placeholder="Home town" required>
									<label id="phone_label" class="label"></label>
									<input type="text" name="" id="phone" class="form-control input-box" placeholder="Phone" required>
									<label id="email_label" class="label"></label>
									<input type="email" name="" id="email" class="form-control input-box" placeholder="Email" required>
									<input type="submit" name="" value="Save" class="button form-button btn-outline-primary home-btn" id="save_btn">
								</div>

								<div id="update_form" class="boxshadow">
									<h3>Update</h3>
									<label id="name_label" class="label"></label>
									<input type="text" name="" id="name" class="form-control input-box" placeholder="Name" required>
									<label id="home_label" class="label"></label>
									<input type="text" name="" id="home" class="form-control input-box" placeholder="Home town" required>
									<label id="phone_label" class="label"></label>
									<input type="text" name="" id="phone" class="form-control input-box" placeholder="Phone" required>
									<label id="email_label" class="label"></label>
									<input type="email" name="" id="email" class="form-control input-box" placeholder="Email" required>
									<input type="submit" name="" value="Update" class="button form-button btn-outline-primary home-btn" id="update_btn">
								</div>

								<div id="delete_confirmation_form" class="boxshadow">
									<div id="delete-confirmation-text-div">
										Are you sure to Delete..?
									</div>
									<div id="delete-confirmation-button-div">
										<div>
											<input type="submit" name="" value="Yes" class="button form-button btn-outline-primary home-btn" id="yes-button">
										</div>
										<div>
											<input type="submit" name="" value="No" class="button form-button btn-outline-primary home-btn" id="no-button">
										</div>		
									</div>
								</div>
								
							</div>
						</div>

					</div>

				</div>

				<!-- ======= END middle div ========= -->

				<div class="col-md-4" id="inner-third-div">
					<div>
						<input type="submit" name="" value="Delete" class="button form-button btn-outline-primary home-btn" id="delete_btn">
					</div>
				</div>
			</div>

		</div>

	</main>
</body>
</html>

<script type="text/javascript" src="./assets/js/main.js"></script>