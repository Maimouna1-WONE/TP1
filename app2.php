<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <head><title>Exercice 2</title>
    <style>




table tbody tr td.tdia { background:#8A2BE2;/*violet*/ }
    table tbody tr td.tdij { background:#FFCC66;/*orange*/ } /* tbody : colonne et ligne identique */
table tbody tr td.tdin { background:#00FFFF;/*turquoise*/ }/*derniere ligne */
    </style>
    </head>
    <body>
    <header><center><h1>SONATEL ACADEMY</h1></header></center>
    <center>  <form method="post" action="app2.php">
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


        Select C3:&nbsp;&nbsp; <br/>
            <select name="C3">
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
        </form>    </center>      




<?php
if((isset($_POST['n'])) && (isset($_POST['valider'])) ){
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
         <?php
         if ( $_POST['C1']!=$_POST['C2'] && $_POST['C3']!=$_POST['C2'] ) {
            if ($_POST['pos']=="Bas"){
        if(($j==$NbrCol-$i+1) || $i==$j || ($j>=$i && $j<=$NbrCol-$i)){ ?>
         <td bgcolor=" <?php echo $_POST['C2'];?> "> </td>


         <?php }else{ if (($j<=$i && $j>=$NbrCol-$i+1)){ ?>
<td bgcolor=" <?php echo $_POST['C1'];?> "> </td>
<?php
}else{ ?>
 <td bgcolor=" <?php echo $_POST['C3'];?> "> </td>


        <?php
           }} } else{ 
            if(($j==$NbrCol-$i+1) || $i==$j || ($j>=$i && $j<=$NbrCol-$i)){ ?>
                <td bgcolor=" <?php echo $_POST['C1'];?> "> </td>


                <?php }else{ if (($j<=$i && $j>=$NbrCol-$i+1)){ ?>
       <td bgcolor=" <?php echo $_POST['C2'];?> "> </td>
       <?php
       }else{ ?>
        <td bgcolor=" <?php echo $_POST['C3'];?> "                                                                                                           > </td>






          <?php }}}
          } else echo "!!!donnez des couleurs differentes</br>";
?>
<?php
        } 
?>
    </tr>


<?php


    }
?>








</tbody>
<?php


    }
?>




</table>    </body>
</html>
