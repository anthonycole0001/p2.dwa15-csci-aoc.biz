<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>

	
</head>

<body>	

	<!-- Wrap all page content here -->
  	<div id="wrap">
	<div class="container content">

	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
		  	<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				  	<span class="icon-bar"></span>
				  	<span class="icon-bar"></span>
				  	<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/index">DataGram</a>
		  	</div>
		  	<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					
					<?php if($user): ?>
					<li class="active"><a id="linktohomepage" href="/index">Home</a></li>
					<li><a id="linktoaboutus" href="/index/aboutus">About Us</a></li>
					<li><a id="linktoprofile" href="/users/profile">Profile</a></li>
					<li><a id="linktomakeapost" href="/posts/add">Make Posts</a></li>&nbsp;
					<li><a id="linktomyposts" href="/posts/index">My Post</a></li>&nbsp;
        			<li><a id="linktodashboard" href="/posts/users">Followers</a></li>
        			<li><a id="linktologout" href='/users/logout'>Logout</a></li>
					<li><a id="linktohelp" href="/index/help">Help</a></li>


					<!-- Menu options for users who are not logged in -->
        			<?php else: ?>
					<li class="active"><a id="linktohomepage" href="/index">Home</a></li>
					<li><a id="linktoaboutus" href="/index/aboutus">About Us</a></li>
					<li><a id="linktosignup" href="/users/signup">Sign Up</a></li>
					<li><a id="linktologin" href="/users/login">Log In</a></li>
					<li><a id="linktohelp" href="/index/help">Help</a></li>
    			    <?php endif; ?>

				</ul>
				<br />
		  	</div><!--/.nav-collapse -->
		</div>
  	</div>
	<br />
	<br />
	<br />
	<br />

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>


	<!-- Start Footer -->

	<div id="footer">
		<div class="container">
			<article>
				<p class="text-muted credit">Data<em>Gram</em> is a simple Micro-Blog Application<br>
					<a href="http://www.extension.harvard.edu/courses/dynamic-web-applications" target="_blank"><br>
						Harvard University Extension School | CSCI-E15</a>&nbsp;&nbsp;
						<strong>Professor:</strong> Susan Buck<br>
						<strong>Copy Right:</strong> Anthony Cole
				</p>
			</article>
		</div>
	</div>
</div>
</div>
</div>

<!-- End Footer -->
</body>
</html>