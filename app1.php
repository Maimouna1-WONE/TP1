		<!DOCTYPE html>
		<html lang="en">
		    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
		    <link rel="stylesheet" type="text/css" href="../TP/app1.css">  
		    <head><title>Exercice 1</title>
		    </head>
		    <body>
		

		      <header> <center> <h1>SONATEL ACADEMY</h1></center></header>
		      <center>  <form method="post" action="app1.php">
		

		          taille de la matrice :<br/>
		

		            <input type="text" name="n"/> <br/><br/>
		

		

		             Select C1:&nbsp;&nbsp; <br/>
		            <select name="C1">
		            <option value='red' type="radio">rouge</option>
		            <option value='blue' type="radio">bleu</option>
		            <option value='green' type="radio">vert</option><br/>
		        </select><br/><br/>
		

		        Select C2:&nbsp;&nbsp; <br/>
		            <select name="C2">
		            <option value='red' type="radio">rouge</option>
		            <option value='blue' type="radio">bleu</option>
		            <option value='green' type="radio">vert</option><br/>
		        </select><br/><br/>
		

		        Position:&nbsp;&nbsp; <br/>
		            <select name="pos">
		            <option value='Haut' type="radio">Haut</option>
		

		            <option value='Bas' type="radio">Bas</option><br/>
		        </select><br/><br/>
		            <input type="submit" name="ignorer" value="Annuler"/>&nbsp;&nbsp;&nbsp;&nbsp;
		

		            <input type="submit" name="valider" value="Dessiner"/>
		        </form> </center>
		

		

		<?php
		//$T=array("1"=>array("rouge","red"),"2"=>array("bleu","blue"),"3"=>array("vert","green"));
		//$T['fr']=array("vert","jaune","rouge","bleu","marron");
		//$T['en']=array("green","yellow","red","blue","brown");
		if((isset($_POST['n'])) && (isset($_POST['valider'])) ){
		

		    //$couleur1 = htmlentities($_POST["C1"],ENT_QUOTES);
		    $NbrCol =$_POST['n'] ;// nombre de colonnes
		    $NbrLigne = $_POST['n'] ; // nombre de lignes 
		?>
		<table border="1" width="250" height="250">
		<tbody>
		<?php
		    for ($i=1; $i<=$NbrLigne; $i++) // index de ligne
		    { 
		?>
		    <tr>
		<?php
		        for ($j=1; $j<=$NbrCol; $j++) // index de colonne
		        {
		

		?>
		         <?php   if  ($_POST['C1']!=$_POST['C2']) {
		          if ($_POST['pos']=="Bas"){
		

		     if ($i>=$j ||($j==$NbrCol-$i+1)) {?>
		        <td bgcolor=" <?php echo $_POST['C1'];?> "> </td>
		    <?php 
		    } else{?>
		

		<td bgcolor=" <?php echo $_POST['C2'];?> "> </td>
		

		  <?php  }} else {
		      if ($i>=$j ||($j==$NbrCol-$i+1)) {?>
		        <td bgcolor=" <?php echo $_POST['C2'];?> "> </td>
		    <?php 
		    } else{?>   
		

		<td bgcolor=" <?php echo $_POST['C1'];?> "> </td>
		

		

		<?php
		    }  }} else echo "!!!donnez des couleurs differentes</br>";
		?>
		

		

		<?php
		        } 
		?>
		    </tr>
		

		<?php
		

		    }
		?>
		

		</tbody>
		

		

		

		</table>
		<?php
		

		    }
		?>
		

		</body>
		</html>
