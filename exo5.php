<!DOCTYPE html>
<html lang="en">
    <head><title>Exercice 1</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
        <h1> </h1><br/>
        <form method="post" action="exo5.php">
        delimiteur : <input type="text" name="b"/> <br/>
        Entrez tous les numeros avec le delimiteur: <input type="text" name="n"/> <br/>  
            <input type="submit" name="valider" value="OK"/>
        </form>


<?php


if (isset($_POST['valider'])) {
    $chaine=$_POST['n'];
    $delimiter=$_POST['b'];
    $tab=explode($delimiter,$chaine);
    $T=array("Orange"=>array(),"Free"=>array(),"Expresso"=>array(),"Invalide"=>array());   
    for($i=0;$i<count($tab);$i++){
        if(preg_match("#[0-9]#", $tab[$i])){
            if (strlen($tab[$i])==9) {


                if (($tab[$i][0]==$tab[$i][1])==7) {
                    $T["Orange"][]=$tab[$i];


            }
                else if ($tab[$i][0]==7 && $tab[$i][1]==8) {
                    $T["Orange"][]=$tab[$i];


                }
                    else if ($tab[$i][0]==7 && $tab[$i][1]==0) {
                        $T["Expresso"][]=$tab[$i];


                    }
                        else if ($tab[$i][0]==7 && $tab[$i][1]==6) {
                            $T["Free"][]=$tab[$i];


                        }




                       }
                        else{ echo $tab[$i].' est a revoir!!!</br>';
                        $T["Invalide"][]=$tab[$i];
                        }
            }
            else { echo $tab[$i]." ne s'agit pas d'un numero de telephone</br>"; }


        }
        echo("wa expresso</br>");
        $P1=(count($T["Expresso"])*100)/count($tab);
        for ($i=0;$i<count($T["Expresso"]);$i++)
        echo $T["Expresso"][$i].'</br>';
        echo $P1."%</br></br>";
        echo "___________________________</br>";


        echo("wa free</br>");
        $P1=(count($T["Free"])*100)/count($tab);
        for ($i=0;$i<count($T["Free"]);$i++)
        echo $T["Free"][$i].'</br>';
        echo $P1."%</br></br>";
        echo "___________________________</br>";


        echo("wa orange</br>");
        $P1=(count($T["Orange"])*100)/count($tab);
        for ($i=0;$i<count($T["Orange"]);$i++)
        echo $T["Orange"][$i].'</br>';
        echo $P1."%</br></br>";
        echo "___________________________</br>";


        echo("wa invalide</br>");
        $P1=(count($T["Invalide"])*100)/count($tab);
        for ($i=0;$i<count($T["Invalide"]);$i++)
        echo $T["Invalide"][$i].'</br>';
        echo $P1."%</br></br>";
        echo "___________________________</br>";


    }                     


?>


</body>
</html> 
