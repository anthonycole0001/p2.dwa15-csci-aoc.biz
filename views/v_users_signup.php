<!DOCTYPE html>

<!--
<?php if(isset($users_first_name, $users_last_name, $users_email, $users_acctid, $users_pwd)): ?>
        <h1>You must first signup for the service by setting up the following <?=$users_first_name, $users_last_name, $users_email, $users_acctid, $users_pwd?></h1>
            <?php else: ?>
        <h1>You are not signed up for the service.<br>  Please create your DataGram account below!</h1>
<?php endif; ?>
-->


  <!-- Primary Page Layout
  ================================================== -->

    <div class="content">
        <div class="container">
            <!--<div class="signup">-->
                <div class="signup-form col-lg-6 pull-left">
                    <h3><b>Create your DataGram account</b></h3>
                        <p>&nbsp;</p>
                        <form role="form" action="/users/p_signup" method="POST" id="signupform" autocomplete="off">
                                <div class="form-group">
                                    <input type="text" required class="form-control" id="inputFirstName" placeholder="First Name" name="first_name" tabindex="1">
                                    <img class="error" src="/img/check_red.png" alt=""/>
                                    <img class="check" src="/img/check_green.png" alt="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" required class="form-control" id="inputLastName" placeholder="Last Name" name="last_name" tabindex="2">
                                    <img class="error" src="/img/check_red.png" alt="" />
                                    <img class="check" src="/img/check_green.png" alt="" />
                                </div>
                                <div class="form-group">
                                    <input type="email" required class="form-control" id="inputEmail" placeholder="Email" name="email" tabindex="3">
                                    <img class="error" src="/img/check_red.png" alt="" />
                                    <img class="check" src="/img/check_green.png" alt="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" required class="form-control" id="inputPassword" placeholder="Password" name="password" tabindex="4">
                                    <img class="error" src="/img/check_red.png" alt="" />
                                    <img class="check" src="/img/check_green.png" alt="" />
                                </div>
                            <span class="error"></span>
                                <button type="submit" class="btn btn-green" tabindex="6">Create my account</button><br>
                                <small>By clicking create account, you are agreeing to the <a href="/terms-of-use" target="_blank">DataGram Terms of Service</a>.</small>
                        </form>
                                
                </div>
            <!--</div>-->
        </div>
    </div>

    <br />
    <br />
    <hr>
    <br />
    
</html>