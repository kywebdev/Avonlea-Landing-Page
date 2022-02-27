<!doctype html>
<html lang="en">
    <head>
        <title>Avonlea Landing Page</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body>
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
		<main>
			<div class="bg-slider">
				<div class="slide">
					<img src="img/image-1.jpg" alt="" />
					<div class="slide-overlay"></div>
				</div>
				<div class="slide">
					<img src="img/image-2.jpg" alt="" />
					<div class="slide-overlay"></div>
				</div>
				<div class="slide">
					<img src="img/image-3.jpg" alt="" />
					<div class="slide-overlay"></div>
				</div>
			</div>
			<div class="container">
				<div class="logo">
					<img src="img/logo.png" alt="" />
				</div>
				<div class="line"></div>
				<h1>Welcome!</h1>
				<h2>New senior living community coming to Chantilly, Virginia in Spring 2025!</h2>
				<div class="line"></div>
				<div class="buttons">
					<button class="btn btn-blue" data-toggle="modal" data-target="#stay-tuned">Keep me posted!</button>
					<button class="btn btn-teal">Want to learn more?</button>
				</div>
			</div>
		</main>
		<section class="about-section">
			<h2>About Our New Senior Living Community in Chantilly</h2>
			<div class="line"></div>
			<p>Welcome to the perfect blend of urban convenience and natural retreat, where you’ll find dynamic and delightful senior living!</p>
			<p>Tucked between South Riding Market Square and Dulles Landing Shopping Center (less than two miles from each), you’ll enjoy easy access to restaurants and shopping as well as two senior centers and Dulles Airport. Just nearby is the beautiful Virginia countryside featuring wineries and more. Free yourself of typical homeowner chores so you can savor the independent life you relish and have more time available for exciting new experiences.</p>
			<p>You’ll also have plenty of activities right outside your apartment door. Our new community will feature a fitness studio with group exercise classes, an arts center, dining venues, club lounge, salon, garden terraces, walking path, pickleball court and putting green. And for our four-legged residents, we’ll have a pet wash and run!</p>
			<p>Your new home will also come with an array of living and care options. Independent Living, Assisted Living, Memory Support and Home Care and Home Health therapy services will be available on site. Find peace of mind in knowing you have choices, and you will be well cared for along the way.</p>
			<p>This new community will be owned and operated by Goodwin House Inc., a premier, nonprofit senior living organization that serves more than 2,200 older adults across the region and has been a Washington Post Top Ten Workplace since 2019.</p>
		</section>
		<section class="contact-section">
			<div class="container">
				<h2>We'd love to hear from you!</h2>
				<div class="line"></div>
				<p>Thank you for sharing your questions and comments. We'll follow up with you right away.</p>
				<form>
					<div>
						<label for="name">Name</label>
						<input type="text" id="name" placeholder="Name" />
					</div>
					<div>
						<label for="email">Email</label>
						<input type="email" id="email" placeholder="Email" />
					</div>
					<div>
						<label for="message">Message</label>
						<textarea id="message" placeholder="Message"></textarea>
					</div>
					<div>
						<input type="submit" id="submit" value="Submit" />
					</div>
				</form>
			</div>
			<p class="address">24780 Avonlea Promenade Drive Chantilly, Loudoun County, Virginia 20152 | 703.824.1254</p>
		</section>
		<div class="modal fade" id="stay-tuned" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							<img src="img/close.png" alt="" />
						</span>
					</button>
					<div class="modal-body">
						<h2>Stay Tuned</h2>
						<div class="line"></div>
						<p>A new senior living community. A new chapter for you. Sign up to stay updated and follow our progress.</p>
						<form>
							<label for="signup">Enter Email Address Here</label>
							<input type="email" id="signup" placeholder="Enter Email Address Here" />
							<input type="submit" id="signup-submit" value="" />
						</form>
					</div>
				</div>
			</div>
		</div>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>