<?php ob_start(); ?>
<header>
    <h1> Billet simple pour l'Alaska</h1>
    <h2> par <br/> Jean Forteroche</h2>
</header>
<div class="panel panel-primary">
<div class="alert alert-dismissible alert-warning">
	<h4><a href = "index.php"> Veuillez remplir tous les champs</a>
</div>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>
 
 
 