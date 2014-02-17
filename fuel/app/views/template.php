<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <?= Asset::css('bootstrap.css') ?>

    <!-- Loading Flat UI -->
    <?= Asset::css('flat-ui.css') ?>

    <!-- <link rel="shortcut icon" href="images/favicon.ico"> -->
    <?= Asset::css('web.css') ?>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>

      <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <?= Html::anchor('/', 'Raven Writters', array("class" => "navbar-brand")) ?>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><?= Html::anchor('browse', 'Browse Stories') ?></li>
            <li><?= Html::anchor('about', 'About Us') ?></li>
            <li><?= Html::anchor('search', 'Writter Search') ?></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <?php if ($user): ?>
              <li><a href="#"><?= $user->username ?></a></li>
              <li class="dropdown open">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Settings<b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="#">Create a New Post</a></li>
                    <li><a href="#">General Info</a></li>
                    <li><a href="#">Order Library</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Log Out</a></li>
                  </ul>
                </li>
              <li><a href="#">Points: #</a></li>
            <?php else: ?>
            <li><a href="#" data-toggle="modal" data-target="#myModal">
              Sign In
            </a></li>
            <li><a href="#" data-toggle="modal" data-target="#signModal">
              Sign up
            </a></li>
            <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Sign In</h4>
          </div>
          <div class="modal-body">
             <?= Form::open(['role' => 'form', 'class' => 'form-signin', 'action' => 'auth/login']) ?>
              <input name="email" type="email" class="form-control" placeholder="Email address" required autofocus>
              <input name="password" type="password" class="form-control" placeholder="Password" required>
              <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
              </label>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Login With Facebook</button>
          </div>
        </div>
      </div>
    </div>

     <!-- SignUp Modal -->
    <div class="modal fade" id="signModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
          </div>
          <div class="modal-body">
             <?= Form::open(['role' => 'form', 'class' => 'form-signin', 'action' => 'auth/signup']) ?>
              <input name="email" type="email" class="form-control" placeholder="Email Adress" required autofocus>
              <input name="password" type="password" class="form-control" placeholder="Password" required>
              <input name="confirm" type="password" class="form-control" placeholder="Confirm Password" required>
          
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Join Us With Facebook</button>
          </div>
        </div>
      </div>
    </div>


   

      <?= $body ?>

      <hr>
   <div class="container">
      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.container-->
    <!-- /.container -->


    <!-- Load JS here for greater good =============================-->
    <?= Asset::js('jquery-1.8.3.min.js') ?>
    <?= Asset::js('jquery-ui-1.10.3.custom.min.js') ?>
    <?= Asset::js('jquery.ui.touch-punch.min.js') ?>
    <?= Asset::js('bootstrap.min.js') ?>
    <?= Asset::js('bootstrap-select.js') ?>
    <?= Asset::js('bootstrap-switch.js') ?>
    <?= Asset::js('flatui-checkbox.js') ?>
    <?= Asset::js('flatui-radio.js') ?>
    <?= Asset::js('jquery.tagsinput.js') ?>
    <?= Asset::js('jquery.placeholder.js') ?>
  </body>
</html>
