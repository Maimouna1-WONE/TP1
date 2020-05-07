<?php session_start();
 include 'pagination2.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head><title>Exercice 1</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
        <h1>Les nombres premiers </h1><br/>
        <form method="post" action="exo1.php">
             Entrez le premier entier : <input type="text" name="n"/> <br/>
            <input type="submit" name="valider" value="OK"/>
        </form>


<?php


    if (isset($_POST['valider'])) {
        $n=$_POST['n'];
        if(preg_match("#[0-9]#", $n)){
            if($n>10000){




                    $negatif = false;
                    if($n<0){
                        $negatif = true;
                        $n = -$n;
                    }
                    //On prend chaque nombre entre 2 et n (0 et 1 n'étant pas premier)
                    for($i=1;$i<=$n;$i++){
                        $nbDiv = 0;//Et on compte le nombre de diviseur    
                        for($j=1;$j<=$i;$j++){
                            if($i%$j==0){
                                $nbDiv++;            
                            }
                        }
                        if($nbDiv == 2){
                //Un nombre premier est un chiffre qui ne possède que 2 diviseur (1 et
                // lui-même)
                            if($negatif){
                                echo "-";
                            }




                            $T1[]=$i;




                            $som=0;
                            $som=$som+$i;
                            $moy=$som/$nbDiv;


                        }




                    }
                    echo 'la moyenne est '.$moy .'<br/>';    




                    $T2=array("inf"=>array(),"sup"=>array());
                    for($i=0;$i<count($T1);$i++){
                        if($T1[$i]<$moy) { 
                            $T2['inf'][]=$T1[$i];}
                        else {$T2['sup'][]=$T1[$i];}
                    }
                    $_SESSION['inf']=$T2['inf'];
                    $_SESSION['sup']=$T2['sup'];


            }
            else{
                echo'Donner un nombre superieur a 10000';}
        }
        else echo $n. ' nest pas numerique';
    }






    echo 'INFERIEURS</br>';
    if(isset($_SESSION['inf']) || isset($_GET['pageInf']))
    {
        echo '</br> Page : ';
        $nombreDePages=ceil(count($_SESSION['inf'])/100);
        for ($i = 1 ; $i <= $nombreDePages ; $i++)
        {
            echo '<a href="exo1.php?pageInf=' . $i . '">' . $i . '</a> ';}
        if(isset($_GET['pageInf']))
        {
            $page=$_GET['pageInf'];
            pagination($page,$_SESSION['inf']);
        }
        else
        {
            pagination(1,$_SESSION['inf']);
        }
    }












        echo 'SUPERIEURS</br>';
        if(isset($_SESSION['sup']) || isset($_GET['pageInf']))
        {
            echo '</br> Page : ';
            $nombreDePages=ceil(count($_SESSION['sup'])/100);
            for ($i = 1 ; $i <= $nombreDePages ; $i++)
            {
                          echo '<a href="exo1.php?pageSup=' . $i . '">' . $i . '</a> ';}
            if(isset($_GET['pageSup']))
            {
                $page=$_GET['pageSup'];
                pagination($page,$_SESSION['sup']);
            }
            else
            {
                pagination(1,$_SESSION['sup']);
            }
        }








?>


</body>
</html> 
