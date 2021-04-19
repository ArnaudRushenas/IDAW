<?php
include "C:\wamp64\www\IDAW\IDAW-projet\backend\config.php";


if (isset($_POST['uname']) && isset($_POST['password'])){
    function validate($data){
        $data= trim($data);
        $data=stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;


    }
    $uname= validate($_POST['uname']);
    $password=validate($_POST['password']);

    if (empty($uname)){
        header('Location: index.php?error=Nom dutilisateur requis');
        exit();
    }elseif (empty($password)){
        header('Location: index.php?error=Mot de Passe requis');
        exit();
    }else{
        $sql = "SELECT * FROM utilisateur where Login='$uname' AND Mot de Passe='$password'";

        $result= mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) ===1){
            $row =mysqli_fetch_assoc($result);

            print_r($row);
        }
    }

}else {
    header("location: index.php?error");
    exit();
}

