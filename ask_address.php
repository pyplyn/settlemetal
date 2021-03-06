<?php
ob_start();
include "header1.php";
require "config.php";
if(isset($_SESSION['login_user'])){
    header('Location:cart.php');
}

?>
<div class="row login-frm paddingtb"><!-- start form-->
  <div id="login_form" class="paddinglf  new-row  col-lg-offset-3 col-md-6 col-sm-9 col-md-offset-3 col-sm-offset-2 shadow-left">
      <form class="margin-0-tb" action="assets/setinfo/userLogin.php" method="post">
          <div class="form-group header-label">
              <label class="control-label" id="sign-label">Sign In</label>
          </div>
          <div class="container-fluid">
            <?php
            if(isset($_GET['login'])){ ?>
            <div id="login-false" class="form-group ">
              <div class="row">
                  <div class="col-md-12"><center><span class="label label-danger">Email or password is incorrect !</span></center></div>
              </div>
            </div><?php }
            ?>
            <div class="form-group">
                <input class="form-control input-lg" name="email" id="email" type="email" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <input class="form-control input-lg" name="pass4word" id="pwd" type="password" placeholder="Password" required="">
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-blue" type="submit">LOGIN </button>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="checkbox margin-0-tb">
                            <label class="control-label">
                                <input type="checkbox">Remember Me</label>
                        </div>
                    </div>
                    <div id="forgot-pass" class="col-md-6" style=""><a href="#">Forgot Password ?</a></div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12"><center><span class="label label-primary">OR Log in with</span></center><br></div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="btn-group btn-group-justified">
                    <div class="btn-group">
                        <button id="facebook" class="btn btn-default" type="button" onClick="fblogin()"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook </button>
                    </div>
                    <div class="btn-group">
                        <button id="twitter" class="btn btn-default" type="button"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter </button>
                    </div>
                    <div class="btn-group">
                        <button id="googleplus" class="btn btn-default" type="button"><i class="fa fa-google-plus" aria-hidden="true"></i> Google+ </button>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="form-group footer-label margin-0-tb">
              <div class="row">
                  <div class="col-md-9">
                      <label id="new-account" class="control-label">Need new account ?</label>
                  </div>
                  <div class="col-md-3">
                      <a class="btn btn-green btn-green btn-block" role="button" href="register.php">Sign Up</a>
                  </div>
              </div>
          </div>
      </form>
  </div>
</div><!-- end form -->
<?php
include "footer.php";
?>
