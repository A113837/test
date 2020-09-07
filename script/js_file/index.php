<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>myrobot2u</title>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Stylesheets -->
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="js/TweenMax.min.js"></script>
    <script src="js/ScrollToPlugin.min.js"></script>
    <script src="js/EasePack.min.js"></script>
    <script src="js/animate-scroll.js"></script>
	<script src="js/polygonizr.js"></script>
	<script src="js/scrolla.jquery.js"></script> 
	<script src="js/typed.js"></script>
	<script src="/js/timer.js"></script>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style.J_polygone.css">
	<link rel="stylesheet" href="css/demo.css">
	
</head>
<body>
<section style="position: relative; top: 0px; left: 0px">

	<div id="main-nav" class="center" style="margin-left: auto; margin-right: auto;">
		<ul class="nav">
			<li><a href="">Home</a></li>
			<li><a href="">Project</a>
				<ul class="sub-menu">
					<li><a href="">Arduino</a></li>
					<li><a href="">STM32</a>
						<ul class="sub-menu-one">
							<li><a href="">STM32F4 Discovery</a></li>
							<li><a href="">Nucleo</a></li>
						</ul>
					</li>
					<li><a href="">Raspberry Pi</a></li>
					<li><a href="">ESP8266</a></li>
				</ul>
			</li>
			<li><a href="">Store</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="">Contact</a></li>
		</ul>
	</div>

	<div id="example">	
	</div>

	
</section>

<div class="centertype" id="blink">
  <span id="type7" class="typ"></span>
</div>

<section id="section2">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	  </ol>
	  <div class="carousel-inner">

	    <div class="carousel-item active">
	      <img class="d-block center" src="images/cybernetics.jpg" alt="First slide" style="width:900px; height: 440px;">
	      <div class="carousel-caption">
	        <h3>ROBOTIC</h3>
	        <p>High precision and  accuracy</p>
	      </div>
	    </div>

	    <div class="carousel-item">
	      <img class="d-block center" src="images/cybernetics2.jpg" alt="Second slide" style="width:900px; height: 440px;">
	      <div class="carousel-caption">
	        <h3>Drone</h3>
	        <p>Flying anywhere</p>
	      </div>
	    </div>

	    <div class="carousel-item">
	      <img class="d-block center" src="images/cybernetics5.jpg" alt="Third slide" style="width:900px; height: 440px;">
	      <div class="carousel-caption">
	        <h3>Navigator</h3>
	        <p>Easy navigate</p>
	      </div>
	    </div>

	    <div class="carousel-item">
	      <img class="d-block center" src="images/cybernetics3.jpg" alt="Fourth slide" style="width:900px; height: 440px;">
	      <div class="carousel-caption">
	        <h3>Humanoid</h3>
	        <p>Human assistant</p>
	      </div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</section>	<!-- section2 -->

	<div id="box1" class="box animate" style="height: 225px;" data-animate="bounceIn" data-duration="2.0s" data-delay="0.5s" data-offset="100">
		<a href="#">
			<img id="uno" src="images/uno.jpg" style="width: 324px; height: 210px; border-radius: 15px;">
		</a>
 
	</div>
	<div id="box2" class="panel box" style="height: 225px;" data-animate="bounceIn" data-duration="1.0s" data-delay="0.1s" data-offset="100">
		<a href="#">
			<img id="rasp" src="images/rasp.jpg" style="width: 324px; height: 210px; border-radius: 15px;" >
		</a>
	</div>
	<div id="box3" class="box" style="height: 225px;" data-animate="bounceIn" data-duration="2.0s" data-delay="0.5s" data-offset="100">
		<a href="#">
			<img id="stm32" src="images/stm32.jpg" style="width: 324px; height: 210px; border-radius: 15px;">
		</a>
	</div>
	<div id="box4" class="box animate" style="height: 225px; animation-duration: 1s" data-animate="bounceIn" data-duration="2.0s" data-delay="0.5s" data-offset="100">
		<a href="#">
			<img id="node" src="images/node.jpg" style="width: 324px; height: 210px; border-radius: 15px;">
		</a>
	</div>


</body>
</html>
<script src="js/script.js"></script>
<script type="text/javascript">






</script>
