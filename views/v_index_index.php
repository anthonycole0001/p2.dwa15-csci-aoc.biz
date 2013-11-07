<!DOCTYPE html>

<?php if($user): ?>
        <h1>Hello <?=$user->first_name;?></h1>
            <?php else: ?>
        <h1>Please sign up or login</h1>
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
						<a data-toggle="modal" href="/users/signup" class="btn btn-primary btn-lg"><i class="icon-lock">Sign Up &raquo;</a>
						<a data-toggle="modal" href="/users/login" class="btn btn-primary btn-lg"<i class="icon-lock">Log In &raquo;</a>
					</p>
		</div>
	</div>



    <br />
    <br />
    <hr>
    <br />


</html>
