<div class="login-container">

	<form class="form-signin" action ="index.php?controler=login&action=connexion" method="POST">
		<h2 class="form-signin-heading">Connectez-vous pour continuer</h2>
		<label for="inputEmail" class="sr-only">adresse e-mail</label>
		<input type="email" id="inputEmail" class="form-control" placeholder="Adresse e-mail" required autofocus>
		<label for="inputPassword" class="sr-only">Mot de passe</label>
		<input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
		<div class="checkbox">
			<label>
				<input type="checkbox" value="remember-me"> Se souvenir de moi
			</label>
		</div>
		<input type="submit" class="btn btn-lg btn-primary btn-block"/>
	</form>

</div>	