
<?php session_start() ;


?>

<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">
    <title>Job 03</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  </head>

<body>

 <header>

 	<nav class="nav-wrapper amber">    
	      <a href="#" class="brand-logo">Logo</a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="">Accueil</a></li>
			<li><a href="">Inscription</a></li>
			<li><a href="">Connexion</a></li>
			<li><a href="">Rechercher</a></li>       
	      </ul>
	</nav>

 </header>

 <section>

 	<form>
 		<div>
		  <input type="radio" id="" name="drone" value="huey" checked>
		  <label for="huey">Femme</label>
		</div>

		<div>
		  <input type="radio" id="" name="drone" value="dewey">
		  <label for="dewey">Homme</label>
		</div>

		<div>
		  <input type="radio" id="" name="drone" value="dewey">
		  <label for="dewey">Les deux</label>
		</div>

		<input type="text" name="" placeholder="Prénom">
		<input type="text" name="" placeholder="Nom">
		<input type="text" name="" placeholder="Adresse">

		<input type="mail" name="" placeholder="Email">

		<input type="password" name="" placeholder="Mot de passe">
		<input type="password" name="" placeholder="Confirmation mdp">

		<p>Quelle est ta passions ?</p>

		<div>
		  <input type="checkbox" id="scales" name="scales"
		         checked>
		  <label for="scales">Poisson Rouge ?</label>
		</div>

		<div>
		  <input type="checkbox" id="horns" name="horns">
		  <label for="horns">Capt'n Pastaga ?</label>
		</div>

		<button>Valider</button>

 	</form>

 </section>

 <footer class="page-footer amber">
          <div class="container">
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
					<li><a class="grey-text text-lighten-3" href="">Accueil</a></li>
					<li><a class="grey-text text-lighten-3" href="">Inscription</a></li>
					<li><a class="grey-text text-lighten-3" href="">Connexion</a></li>
					<li><a class="grey-text text-lighten-3" href="">Rechercher</a></li>  
                </ul>
              </div>
          </div>
        </footer>

</body>

</html>