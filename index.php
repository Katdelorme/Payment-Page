<!--Used: HTML5, CSS, CSS Gradient, CSS Animation, Jquery, Flexbox -->
<!--Credit: https://css-tricks.com/couple-takes-sticky-footer/-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Payment Page | Coded by Katherine Delorme</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="A UI design turned webpage. A Nike payment page design by Stanley Huang coded by Katherine Delorme. Frontend design utilizing html5, flexbox, CSS, CSS linter and more."/>
	<meta name="keywords" content="website created using flexbox, an example of ui design turned into a website, using flexbox, git, web design, web designer , coding, designer, Katherine Delorme, user interface, female web designer, web designer in Miami, web designer in Orlando">
	<meta name="author" content="Katherine Delorme">
	<meta name="application-name" content="Nike Payment Page - UI to Frontend"/>
	<!--Dublin Core-->
	<meta name="DC.Title" content="Nike Payment Page | Coded by Katherine Delorme" />
	<meta name="DC.Creator" content="Katherine Delorme" />
	<meta name="DC.Subject" content="Web Design, UI to Frontend Design" />
	<meta name="DC.Description" content="A UI design turned webpage. A Nike payment page design by Stanley Huang coded by Katherine Delorme. Frontend design utilizing html5, flexbox, CSS, CSS linter and more." />
	<meta name="DC.Type" content="Portfolio Piece" />
	<meta name="DC.Language" content="English" />
	<!--Twitter Card: Summary-->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@Katdelorme" />
	<meta name="twitter:title" content="Nike Payment Page - UI to Frontend" />
	<meta name="twitter:description" content="A website UI mockup turned webpage. A Nike Payment Page coded by Katherine Delorme. Frontend design utilizing html5, flexbox and more." />
	<meta name="twitter:image" content="" />
	<!--Facebook Open Graph-->
	<meta property="og:url" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Nike Payment Page - UI to Frontend" />
	<meta property="og:description" content="A website UI mockup turned webpage. A Nike Payment Page coded by Katherine Delorme. Frontend design utilizing html5, flexbox and more." />
	<meta property="og:image" content="" />
	<!--favicon-->
	<link rel="icon" type="image/png" href="favicon/favicon-bars.ico" />
	<!--stylesheets-->
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,500" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
	<section>
		<div class="container">
			<div class="cart">
        <div>
          <h3>Your Cart (3)</h3><p>&#9664 Continue shopping</p>
        </div>
        <div>
          item 1
        </div>
        <div>
          item 2
        </div>
        <div>
          item 3
        </div>
        <!--<p>Total: $305</p>-->
      </div>
			<div class="payment">
				<div>
					<h3>1. Shipping</h3>
					<i class="fa fa-check-circle-o fa-lg" aria-hidden="true"></i>
				</div>
				<div>
					<h3>2. Payment Details</h3>
					<div>
					<i class="fa fa-cc-visa fa-lg" aria-hidden="true"></i>
					<i class="fa fa-cc-amex fa-lg" aria-hidden="true"></i>
					<i class="fa fa-cc-discover fa-lg" aria-hidden="true"></i>
					<i class="fa fa-cc-mastercard fa-lg" aria-hidden="true"></i>
					</div>

					<h4>Name</h4>
					<input type="text" name="name" placeholder="Firstname Lastname">
					<h4>Card Number</h4>
					<input type="text" name="card" placeholder="5555555555555555">
					<h4>Expiration Date</h4>
						<select name="months">
						  <option value="january">January</option>
						  <option value="february">February</option>
						  <option value="march">March</option>
						  <option value="april">April</option>
						  <option value="may">May</option>
						  <option value="june">June</option>
						  <option value="july">July</option>
						  <option value="aguast">August</option>
						  <option value="september" selected="selected">September</option>
						  <option value="october">October</option>
						  <option value="november">November</option>
						  <option value="december">December</option>
						</select>
						<select name="years">
						  <option value="2017">2017</option>
						  <option value="2018">2018</option>
						  <option value="2019" selected="selected">2019</option>
						  <option value="2020">2020</option>
						  <option value="2021">2021</option>
						  <option value="2022">2022</option>
						  <option value="2023">2023</option>
						  <option value="2024">2024</option>
						  <option value="2025">2025</option>
						  <option value="2026">2026</option>
						  <option value="2027">2027</option>
						  <option value="2028">2028</option>
						</select>
					<h4>CC</h4>
					<input type="text" name="cc" maxlength="4" size="4" placeholder="&#9679;&#9679;&#9679;">

				</div>
				<div>
					<h3>3. Order Preview</h3>
				</div>
				<div><h2>Next Step</h2></div>
			</div>
		</div>
	</section>

	<footer>
	  <a href="https://www.facebook.com/KatdelormeKatdesign/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	  <a href="https://twitter.com/Katdelorme" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	  <a href="https://dribbble.com/KatherineDelorme" target="_blank"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
	  <a href="#" target="_blank"><i class="fa fa-behance" aria-hidden="true"></i></a>
	  <p>&copy; 2017 copyright All rights reserved</p>
	  <p>Site mockup by <a href="https://www.behance.net/gallery/48350095/Daily-UI-Challenge" target="_blank">Stanley Huang</a> Coded with &hearts; by <a href="#" target="_blank">Katherine Delorme</a></p>
	</footer>

</body>
</html>
