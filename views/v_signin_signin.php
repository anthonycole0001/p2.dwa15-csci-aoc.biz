<!DOCTYPE html>



  <!-- Primary Page Layout
  ================================================== -->

<div class="content">
        <div class="container">
            <div class="signup">
                <div class="signup-form col-lg-6 pull-left">
                    <h3><b>Create your DataGram account</b></h3>
                        <p>&nbsp;</p>
                        <form role="form" action="/signup" method="post" id="signUpForm" autocomplete="off">
                        <input type="hidden" name="from" value="home">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputFullName" placeholder="Full name" name="name" tabindex="1">
                                <img class="error" src="/img/check_red.png" alt=""/>
                                <img class="check" src="/img/check_green.png" alt="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputCompany" placeholder="Company" name="company" tabindex="2">
                                <img class="error" src="/img/check_red.png" alt="" />
                                <img class="check" src="/img/check_green.png" alt="" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" tabindex="3">
                                <img class="error" src="/img/check_red.png" alt="" />
                                <img class="check" src="/img/check_green.png" alt="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" tabindex="4">
                                <img class="error" src="/img/check_red.png" alt="" />
                                <img class="check" src="/img/check_green.png" alt="" />
                            </div>
                                  <span class="error"></span>
                                  <button type="submit" class="btn btn-green" tabindex="6">Create my account</button>
                                  <small>By clicking create account, you are agreeing to the <a href="/terms-of-use" target="_blank">DataGram Terms of Service</a>.</small>
                        </form>
                </div>
            </div>
        </div>
    </div>

    <br />
    <br />
    <hr>
    <br />

                
</html>