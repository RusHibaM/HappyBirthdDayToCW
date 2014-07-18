<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Teaching Service System">
    <meta name="author" content="Godlike">
    <link rel="shortcut icon" href="">

    <title>迟到的生日祝福</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="./css/mainstyle.css" rel="stylesheet">

    <script src="./js/jquery.min.js"></script>
    <link rel="stylesheet" href="unstyle.css">
		<script src="//code.jquery.com/jquery-latest.min.js"></script>
		<meta name="viewport" content="width=device-width">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
      
      <div class="navbar-collapse collapse">
      <button id="logout" type="button" class="btn btn-success navbar-btn navbar-right">赵冲</button> 
      <button  id="logout" style="#8A2BE2" class="btn navbar-btn navbar-left" >RusHibaM</button><!--User's name is here-->
          </div><!--/.nav-collapse -->
        </div><!--container-fluid-->
        </div><!--navbar navbar-inverse navbar-fixed-top-->

	
    
    
    <center><div class="banner">
			<ul>
				<li style="background-image: url('p1.jpg');">
					<div class="inner">
						<h1>都说大学忙起来就像面对书海不知道何去何从</h1>
						<p>不过应该是充实的吧</p>						
					</div>
				</li>

				<li style="background-image: url('p2.jpg');">
					<div class="inner">
						<h1>还是会怀念高中的生活、高中的教室、高中的。。。</h1>
						<p>或许回忆总是美好</p>
					</div>
				</li>

				<li style="background-image: url('p9.jpg');">
					<div class="inner">
						<h3>送你一份迟到的生日祝福</h3>
						<p>Happy Birthday</p>
					</div>
				</li>

				<li style="background-image: url('p6.jpg');">
					<div class="inner">
						<h1>Hope you like</h1>
						<p>这个网址也是一起送给你的，以后要搞个什么个人主页的还是可行的.至于为什么迟来了这么久。。原因太多了，你确实想了解再跟你详述</p>
					</div>
				</li>
			</ul>
		</div></center>

      <hr>

      

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="./bootstrap/js/jquery.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>

		

		<script src="./unslider.min.js"></script>
		<script>
			if(window.chrome) {
				$('.banner li').css('background-size', '100% 100%');
			}

			$('.banner').unslider({
				arrows: true,
				fluid: true,
				dots: true
			});

			//  Find any element starting with a # in the URL
			//  And listen to any click events it fires
			$('a[href^="#"]').click(function() {
				//  Find the target element
				var target = $($(this).attr('href'));

				//  And get its position
				var pos = target.offset(); // fallback to scrolling to top || {left: 0, top: 0};

				//  jQuery will return false if there's no element
				//  and your code will throw errors if it tries to do .offset().left;
				if(pos) {
					//  Scroll the page
					$('html, body').animate({
						scrollTop: pos.top,
						scrollLeft: pos.left
					}, 1000);
				}

				//  Don't let them visit the url, we'll scroll you there
				return false;
			});

			
		</script>

</body></html>