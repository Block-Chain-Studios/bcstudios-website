<?php include 'header.php'; ?>

<?php
// $featured_movie_id = $this->crud_model->get_featured_movie();
// $invest_movie = $this->crud_model->get_invest_movies();
?>

<div class="black-bg">
	<!-- TOP LANDING SECTION --> 
	<div style="height:100vh;width:100%;background-image: url('img/home_top_banner.jpg')">
		<!-- logo -->
		<div style="float: left;">
			<a href="/">
			<img src="img/logo-1.jpg" style="margin: 18px 18px; width: 160px;" />
			</a>
		</div>
		<div style="float: right;margin: 18px 18px; height: 50px;" class="">
			<a href="#" class="btn btn-danger">Sign in</a>
		</div>
		
		<!-- promo text visible for large devices -->
		<div style="font-size: 85px;font-weight: bold;clear: both;padding: 100px 0px 0px 0px; text-align:center; color: #fff;" class="">
			<div class="container landing-page-movies-wrapper">
			    <div class="row">
			    	<div class="col-sm-12">
			    		<h3 style="color: red; text-transform: uppercase; text-align: center; margin-bottom: 50px;">For educational purposes only</h3>
			    	</div>
			        <div class="col-sm-6">
			        	<a href="http://socialblock.amplewebsites.com/wyldwest" target="_blank">
			        		<img src="img/landing-movie-2.jpg" alt="movie image" />
			        	</a>
			        	<a href="http://socialblock.amplewebsites.com/wyldwest" target="_blank" class="btn btn-danger btn-lg">
							COMING SOON
						</a>
			        </div>
			        <div class="col-sm-6">
			        	<a href="/tflix_elpat">
			        		<img src="img/landing-movie-1.jpg" alt="movie image" />
			        	</a>
			        	<a href="/tflix_elpat" class="btn btn-danger btn-lg">
							INVEST NOW
						</a>
					</div>
			    </div>
			</div>
		</div>
	</div>
	<!-- MIDDLE TAB SECTION -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bs-component">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#">
							<i class="fa fa-sign-out" style="font-size: 64px; font-weight: lighter; padding: 20px 0px 5px;"></i>
							<br>
							<p>media gallery</p>
							</a>
						</li>
						<li>
							<a href="#" id="playMovie"> <!-- data-toggle="tab" -->
							<i class="fa fa-laptop" style="font-size: 64px; font-weight: lighter; padding: 20px 0px 5px;"></i>
							<br>
							<p>watch movies</p>
							</a>
						</li>
						<li>
							<a href="#">
							<img src="img/token.png" alt="token" />
							<br>
							<p>buy tokens</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<a href="javascript:history.back()" class="btn btn-primary" id="zBackBtn">&#8592; Back</a>
</div>

<?php include 'footer.php';?>