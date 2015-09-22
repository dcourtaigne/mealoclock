<!DOCTYPE html>
<html>
<meta charset = 'UTF-8'>
	<head>
		<title>Meal o'Clock | Organisez des repas, partagez des moments | accueil !</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Fontdiner+Swanky' >
		<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/style2.css')?>">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


	</head>

	<body>
    <!-- logo + nav -->
		<header>
            <!-- logo du site -->

				<h1><img src="<?= $this->assetUrl('img/mealoclockB.png')?>" alt='logo meal oclock Découvrir, partager, échanger, savourer !'></h1>

            <!-- logo du site -->

            <!-- navbar -->

				<nav class="navbar navbar-default">

				  <div class="container-fluid">

				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>

				  	</div>

			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav largeurSite">

				      <li><a class="home navbar-brand glyphicon glyphicon-home btn-sm" href="home.php"></a></li>

			        <li><a href="#">Comment ça marche ? <span class="sr-only">(current)</span></a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Communautés <span class="caret"></span></a>

                <!-- menu déroulant -->

			          <ul class="dropdown-menu">
			            <li><a href="<?= $this->url('eventsbycom',['com'=>'vege']); ?>">Végétarien</a></li>
			            <li><a href="<?= $this->url('eventsbycom',['com'=>'vegan']); ?>">Végan</a></li>
			            <li><a href="<?= $this->url('eventsbycom',['com'=>'ssgluten']); ?>">Sans gluten</a></li>
			           	<li><a href="<?= $this->url('eventsbycom',['com'=>'sslactose']); ?>">Sans lactose</a></li>
			           	<li role="separator" class="divider"></li>

			          </ul>
			        </li>

			        <li><a href="<?= $this->url('events'); ?>">Evénements</a></li>
              <?php if($w_user==NULL):?>
			        <li class="navbar-right"><a>Se connecter</a></li>
              <?php else:?>
              <li class="navbar-right"><a href="<?=$this->url('logout')?>">Logout</a></li>
              <li class="navbar-right"><a href="<?=$this->url('logout')?>"><?="Bonjour ".ucfirst($w_user['user_name'])?></a></li>
            <?php endif ?>
			      </ul>
			    </div>
	<div id="overlay">
    <div id="modal">

    <div class="col-lg-6 top">
      <h4>Connectez vous</h4>
      <a href="" id="button">X</a>
    </div>
    <div id="mid">
      <form id="loginform" class="col-lg-6" method="POST" action="<?= $this->url('login')?>">
        <div class="forms">
          <div class="form-group" class="col-sm-10">
            <div id="errorMessage" class="text-danger"></div>
              <label for="user_login">Email address:</label>
            <input type="email" class="form-control" id="user_login" name="user_name" placeholder="Email">
          </div>
          <div class="form-group" class="col-sm-10">
              <label for="user_password">Password:</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div>
              <input type="checkbox" name="remember" value="yes">
              <span>Remember me</span>
            </div>
            <div class="form-group">
              <input type="submit" value="Login" name="login" class="btn btn-primary btn-block btn-lg" tabindex="7">
            </div>
        </div>
      </form>
    </div>
    <div id="bot">
      <div class="col-lg-6">
        <h4 class="toggle-button">Ou inscrivez vous</h4>
        <a href="" id="button">X</a>
      </div>
      <form class="col-lg-6" id="registerform" method="POST" action="<?= $this->url('signup')?>">
        <div>
          <label> Votre nom (ceci est public): </label><span class="text-danger" id="errorName"></span>
          <input type="text" class="form-control" name="user_name" id="left" placeholder="First Name">
          <label> Votre adresse email:</label><span class="text-danger" id="errorEmail"></span>
          <input type="text" class="form-control" name="user_email" placeholder="Email adress">
          <label> Mot de passe: </label><span class="text-danger" id="errorPass"></span>
          <input type="password" class="form-control" name="password" placeholder="Password">
          <label> Verification: </label><span class="text-danger" id="errorPassRepeat"></span>
          <input type="password" class="form-control" name="passwordrepeat" placeholder="Repeat Password">
          <span>By clicking Sign Up, you agree to our Terms and that you have read our Data Policy, including our Cookie Use.</span>
          <input type="submit" name="signup" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7">
        </div>
      </form>
    </div>
    </div>
  </div>

          <!-- fin de la navbar -->
		</header>
