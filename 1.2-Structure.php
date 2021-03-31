		/********************
		*	Structure PHP	*
		********************/

<?php /*Balise à utiliser*/ ?>

<?php 
// Lien de visualisation: "http://localhost:8081/1.2-Structure.php"

// Commentaire sur une ligne
/*Commentaire sur
plusieurs lignes*/ 

// Afficher du texte:

echo "<br>L'instruction « echo » pour afficher le texte.";

print "<br>« print » c'est exactement la même chose<br>";
/* raccourcis
<?php echo	=>	<?=
*/
// Variable:
$myName = "Thomas";
$myAge = 33;

// Constante:

// Concaténation:
	// quote simple (attention aux appostrophes)
echo '<br>Je m\'appelle ' . $myName . ' et j\'ai ' . $myAge . ' ans.';
	// quote double
echo "<br>Je m'appelle $myName et j'ai $myAge ans.<br>";
	// back quote
echo `<br>Je m\'appelle ${$myName} et j\'ai ${$myAge} ans.<br>`;
?>