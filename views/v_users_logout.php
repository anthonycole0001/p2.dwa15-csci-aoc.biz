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
                  <h1></h1>
                    <p>
                        Thank you for using DataGram.  Check back in soon to stay up to date with your friends and their data.
                    </p>
                    <br />
                    <p>
                        <a data-toggle="modal" href="/users/login" class="btn btn-primary btn-lg"<i class="icon-lock">Log In &raquo;</a>
                    </p>
        </div>
    </div>


<!-- End Search -->

    <br />
    <br />
    <hr>
    <br />


</html>
