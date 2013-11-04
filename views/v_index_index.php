<!DOCTYPE html>

<?php if(isset($login)): ?>
        <h1>The user is not logged-in, please login?></h1>
            <?php else: ?>
        <h1>This is the login page, please login</h1>
<?php endif; ?>

<?php if(isset($logout)): ?>
        <h1>You are now logged out of the system?></h1>
<?php endif; ?>

  <!-- Primary Page Layout
  ================================================== -->



	<!-- Start Page Content -->
	<div class="container">
		<div class="jumbotron">
				  <h1>Welcome!</h1>
					<p>
						Datagram is a simple micro-blogging platform. If you do not have an account, please sign up for one. 
						If you already have an account, please login.  If you are interested in learning which friends of 
						yours are using the app, please browse through the user profiles and comments.
					</p>
					<br />
					<p>
						<a data-toggle="modal" href="/index/signup" class="btn btn-primary btn-lg"><i class="icon-lock">Sign Up &raquo;</a>
						<a data-toggle="modal" href="/index/login" class="btn btn-primary btn-lg"<i class="icon-lock">Log In &raquo;</a>
					</p>
		</div>
	</div>

<!-- Start Search -->

	<div class="container">
		<div class="well">
				<form method="GET" class="form-inline" action="/search/posts/">
					<input name="query" class="form-control input-lg" placeholder="Search Through DataGram...."></input>
				</form>
		</div>
	</div>

<!-- End Search -->

    <br />
    <br />
    <hr>
    <br />


</html>
