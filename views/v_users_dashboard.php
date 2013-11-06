<!DOCTYPE html>

<?php if(isset($login)): ?>
        <h1>The user is not logged-in, please login?></h1>
            <?php else: ?>
        <h1>Welcome to the DataGram Dashboard</h1>
<?php endif; ?>

<?php if(isset($logout)): ?>
        <h1>You are now logged out of the system?></h1>
<?php endif; ?>


  <!-- Primary Page Layout
  ================================================== -->

    <div class="container">
        <div class="jumbotron">
            <div class="profile-card vcard">


            </div>
        </div>
    </div>
    
    <br />
    <br />
    <hr>
    <br />
    
</html>