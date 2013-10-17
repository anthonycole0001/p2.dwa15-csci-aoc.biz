
  <!-- Primary Page Layout
  ================================================== -->

  <div class="container">
    <div class="sixteen columns" style="padding-top: 30px;">
      <a href id="linktohomepage" "http://anthonyocole.com/index.html">
      <h1>Datalytics</h1>
      </a>
      <h4>Sign-up</h4>
      <h4><nav align="right">
        <ul>
          <li>
            <a id="linktoaboutus" href="/aboutus.php">About Us</a>&nbsp;&nbsp;
            <a id="linktosignup" href="/signup.php">Sign-up</a>&nbsp;&nbsp;
            <a id="linktologin" href="/login.php">Login</a>&nbsp;&nbsp;
            <a id="linktoemail" href="mailto:Anthony.cole0001@gmail.com" target= "_blank">Contact</a>&nbsp;&nbsp;
            <a id="linktorblog" href="blog.dwa15-csci-aoc.com">Blog</a>
          </li>
          </li>
        </ul>       
      </nav></h4> 
      <hr />
      <br \>
         </div>

<div class="content">
            <header>
                <div class="container">
                        <div class="login">
                            <div class="signup-form col-lg-6 pull-left">
                                <h3><b>Create your account</b></h3>
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
                                  <small>By clicking create account, you are agreeing to the <a href="/terms-of-use" target="_blank">Datalytics Terms of Service</a>.</small>
                                </form>
                            </div>
                             <div class="phone pull-left col-lg-5">
                                <img src="/images/dashboard.png" alt="Social Analytics Dashboard">
                            </div>
                        </div>
                    </div>
                </header>
        </div>
        </body>
</html>