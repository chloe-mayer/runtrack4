
<?php session_start() ;


?>

<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">
    <title>Job 04</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
 	<br>
 	<form class="col s6">

	 		  <p>
			    <label>
			      <input class="with-gap" name="group3" type="radio" checked />
			      <span>Femme</span>
			    </label>
			  </p>

			  <p>
			    <label>
			      <input class="with-gap" name="group3" type="radio" />
			      <span>Homme</span>
			    </label>
			  </p>

			  <p>
			    <label>
			      <input class="with-gap" name="group3" type="radio" />
			      <span>Les deux</span>
			    </label>
			  </p>

		<div class="row">

	        <div class="input-field col s6">
	        <i class="material-icons prefix">perm_identity</i>	        	
	          <input id="first_name" type="text" class="validate">
	          <label for="first_name" class="active">Prénom</label>
	        </div>

	        <div class="input-field col s6">
	        <i class="material-icons prefix">perm_identity</i>
	          <input id="last_name" type="text" class="validate">
	          <label for="last_name" class="active">Nom</label>
	        </div>
	      
	        <div class="input-field col s6">
	        <i class="material-icons prefix">vpn_key</i>	        	
	          <input id="first_name" type="password" class="validate">
	          <label for="first_name" class="active">Mot de passe</label>
	        </div>

	        <div class="input-field col s6">
	        <i class="material-icons prefix">vpn_key</i>	        	
	          <input id="last_name" type="password" class="validate">
	          <label for="last_name" class="active">Confirmation mot de passe</label>
	        </div>

	       	<div class="input-field col s6">
	        <i class="material-icons prefix">home</i>	       		
	          <input id="last_name" type="text" class="validate">
	          <label for="last_name" class="active">Adresse</label>
	        </div>

	        <div class="input-field col s6">
	        <i class="material-icons prefix">mail</i>	        	
	          <input id="email" type="email" class="validate">
	          <label for="email" class="active">Email</label>
	        </div>

			</div>

				<p>Plutôt qui ?</p>

				    <p>
				      <label>
				        <input type="checkbox" class="filled-in" />
				        <span>Capt'n Pétanque ?</span>
				      </label>
				    </p>

				    <p>
				      <label>
				        <input type="checkbox" class="filled-in" />
				        <span>Capt'n Pastaga ?</span>
				      </label>
				    </p>


		<a class="waves-effect waves-light btn amber">Valider</a>

 	</form><br>

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