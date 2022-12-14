<!DOCTYPE html>
<html lang="en">
<head>

	<title>Wine Store</title>
	<? include "parts/meta.php"; ?>

</head>
<body>
	<header>
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Wine Store</h1>
			</div>
			<div class="flex-stretch"></div>
			<div class="flex-none nav">
				<ul class="container display-flex">
					<li><a href="#article1">Cabernet Sauvignon</a></li>
					<li><a href="#article2">Syrah</a></li>
					<li><a href="#article3">Zinfandel</a></li>
					<li><a href="#article4">Pinot Noir</a></li>
				</ul>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="card soft">
			<h2>Grid</h2>
				

				<!-- <div class="grid"></div> -->
				<div class="grid gap xs-small md-medium text-center">
					<div class="col-xs-6">Column 6</div>
					<div class="col-xs-6">Column 6</div>
					
					<div class="col-xs-4">Column 4</div>
					<div class="col-xs-4">Column 4</div>
					<div class="col-xs-4">Column 4</div>

					<div class="col-xs-3">Column 3</div>
					<div class="col-xs-3">Column 3</div>
					<div class="col-xs-3">Column 3</div>
					<div class="col-xs-3">Column 3</div>

					<div class="col-xs-2">Column 2</div>
					<div class="col-xs-2">Column 2</div>
					<div class="col-xs-2">Column 2</div>
					<div class="col-xs-2">Column 2</div>
					<div class="col-xs-2">Column 2</div>
					<div class="col-xs-2">Column 2</div>					

					<div class="grid ten col-xs-12 gap">
						<div class="col-xs-2">Column 2</div>
						<div class="col-xs-2">Column 2</div>
						<div class="col-xs-2">Column 2</div>
						<div class="col-xs-2">Column 2</div>
						<div class="col-xs-2">Column 2</div>
					</div>
				</div>
				
		</div>
	</div>

	<div class="container">
		<div class="card soft">
			<h2>Responsive Grid</h2>
			<div class="grid gap text-center">
				<div class="col-xs-12 col-md-6">Column 6</div>
				<div class="col-xs-12 col-md-6">Column 6</div>
				<div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>
				<div class="col-xs-12 col-md-4 col-xl-6">Column 6</div>
				<div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>

				<div class="col-xs-12 col-md-3 col-xl-2">Column 2</div>
				<div class="col-xs-12 col-md-3 col-xl-4">Column 4</div>
				<div class="col-xs-12 col-md-3 col-xl-4">Column 4</div>
				<div class="col-xs-12 col-md-3 col-xl-2">Column 2</div>

				<div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>
				<div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>
				<div class="col-xs-12 col-md-4 col-xl-6">Column 6</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="grid gap xs-small md-medium">
			<div class="col-xs-6 col-md-3">
				<div class="card soft"><img src="http://via.placeholder.com/500" alt="" class="media-image"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card soft"><img src="http://via.placeholder.com/500" alt="" class="media-image"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card soft"><img src="http://via.placeholder.com/500" alt="" class="media-image"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card soft"><img src="http://via.placeholder.com/500" alt="" class="media-image"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<article id="article1" class="article">
			<h2>Cabernet Sauvignon</h2>
			<div class="article-body">
				<p>
					Taste: Black Cherry, Black Currant, Baking Spices, and Cedar (from oak)
					<br>Style: Full-Bodied Red Wine
					<br>Description: Cabernet Sauvignon is a full-bodied red grape first heavily planted in the Bordeaux region. Today, it???s the most popular wine variety in the world! Wines are full-bodied with bold tannins and a long persistent finish driven mostly by the higher levels of alcohol and tannin that often accompany these wines.
					<br>Food Pairing: lamb, beef, smoked meats, French, American, firm cheeses like aged cheddar and hard cheeses like Pecorino.
				</p>
		</article>
		<article id="article2" class="article">
			<h2>Syrah</h2>
			<div class="article-body">
				<p>
					Taste: Blueberry, plum, tobacco, cured meat, black pepper, violet
					<br>Style: Full-Bodied Red Wine
					<br>Description: Syrah (aka Shiraz) is a full-bodied red wine that???s heavily planted in the Rh??ne Valley in France and Australia. The wines have intense fruit flavors and medium-weight tannins. Syrah is commonly blended with Grenache and Mourv??dre to create the red Rh??ne blend. The wine often has a meaty (beef broth, jerky) quality.
					<br>Food Pairing: lamb, beef, smoked meats; Mediterranean, French, and American firm cheeses like white cheddar, and hard cheeses like Spanish Manchego.
				</p>
			</div>
		</article>
	</div>
	<div class="view-window" style="background-image: url(img/image1.jpg);"></div>
	<div class="container">
		<article id="article3" class="article">
			<h2>Zinfandel</h2>
			<div class="article-body">
				<p>
					Taste: A broad, exotic array of fruits from stone (overripe nectarine), to red (raspberry, sour cherry), to blue (plum, blueberry), to black (blackberry, boysenberry), Asian 5 Spice Powder, Sweet Tobacco
					<br>Style: Medium-bodied to full-bodied Red Wine
					<br>Description: Zinfandel (aka Primitivo) is a medium-bodied red wine that originated in Croatia. Wines are fruit-forward and spicy with a medium length finish. Zinfandel is a red grape that may be better known in its pink variation, White Zinfandel.
					<br>Food Pairing: chicken, pork, cured meat, lamb, beef, barbecue, Italian, American, Chinese, Thai, Indian, full-flavored like cheddar and firm cheeses such as Manchego
				</p>
			</div>
		</article>
		<article id="article4" class="article">
			<h2>Pinot Noir</h2>
			<div class="article-body">
				<p>
					Taste: Very red fruited (cherry, cranberry) and red-floral (rose), often with appealing vegetal notes of beet, rhubarb, or mushroom
					<br>Style: Lighter-bodied Red Wine
					Description: Pinot Noir is a dry, light-bodied red that was first widely planted in France. The wines typically have higher acidity and a soft, smooth, low-tannin finish.
					<br>Food Pairing: chicken, pork, veal, duck, cured meat, French, German, cream sauces, soft cheeses, nutty medium-firm cheeses like Gruy??re
				</p>
			</div>
		</article>
	</div>
	
</body>
</html>