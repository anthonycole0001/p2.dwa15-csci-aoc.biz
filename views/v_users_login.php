<!DOCTYPE html>

<?php if(isset($login)): ?>
        <h1>The user is not logged-in, please login?></h1>
            <?php else: ?>
        <h1></h1>
<?php endif; ?>

<?php if(isset($logout)): ?>
        <h1>You are now logged out of the system?></h1>
<?php endif; ?>


  <!-- Primary Page Layout
  ================================================== -->


    <!-- Start Page Content -->
    <div class="container">
        <div class="jumbotron">

            <!-- Start Login Modal -->
            <div class="login">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Login to DataGram <em></em></h4>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="/users/p_login">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" name="email" required class="form-control" placeholder="Enter email" data-validation-matches-match="email" data-validation-matches-message= "Must match email address entered above" >
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label for="password">Enter password</label>
                                    <input type="password" name="password" required class="form-control"  placeholder="Password">
                                    <p class="help-block"></p>
                                </div>
                                <?php if(isset($error)): ?>
                                    <div class='error'>
                                        Login failed. Please double check your email and password.
                                    </div>
                                    <br>
                                <?php endif; ?>
                                <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="icon-lock"></i> Login Now</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- End Login Modal -->
        </div>
    </div>
    <br />
    <br />
    <hr>
    <br />
    
</html>