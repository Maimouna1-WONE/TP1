<!DOCTYPE html>
<html>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <head><title>Exercice 2</title></head>
    <body>
        <h1>Les 12 mois d'une annee </h1>
        <form method="post" action="exo2.php">


            <select name="langue">
            <option value="" >Choisi une langue</option>
            <option value="Francais" >Francais</option>
            <option value="Anglais" >Anglais</option><br/>
        </select>
           <input type="submit" name="valider" value="OK"/>
       </form>


       <?php


    if (isset($_POST['valider'])) {
       $langue = $_POST["langue"];
       $T=array("fr"=>array(),"en"=>array());
       $T['fr']=array("Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","septembre","Octobe","Novembre","Decembre");
       $T['en']=array("January","February","March","April","May","June","July","August","September","October","November","December");


if ($langue=="Anglais"){   
affiche($T['en']);
}




if ($langue=="Francais"){  
    affiche($T['fr']);
} 




}
?>






<?php
function affiche($tab) {?>
    <table border="3" width="400" height="100">
    <tbody>
    <?php


        for ($i=0; $i<12; $i=$i+3) // index de ligne
        { 
    ?>
        <tr>
    <?php
            for ($j=$i; $j<$i+3; $j++) // index de colonne
            {


    ?>
            <td> <?php
            echo $j+1;?>
            </td>
            <td><?php
            echo $tab[$j];?></td>


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


    </table>
</body>
</html> 
