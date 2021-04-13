<html>
    <head>
        <title> Exemple Dynamique </title>
    </head>
    <body>
        <h1>
            La date d'aujourd'hui est le :
            <?php
                 // Affichage de la date
                echo date("d/m/Y");
            ?>
        </h1>
        <h2>
            Il est exactement :
            <?php
                 //affichage heure
                echo date("H:i");
            ?>

        <h2>
            <?php
            $tab = array(1,2,3,4,5,6);
            $i = 0;
            echo "3 premieres valeurs dans tab : ";
            while( $i<count($tab) and ($i<3) ){
                echo $tab[$i]."\n";
                $i++;
            }
            ?>
        </h3>
    
    </body>
</html>
