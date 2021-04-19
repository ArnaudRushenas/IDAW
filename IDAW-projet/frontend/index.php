
<?php
require_once("template_header.php");



require_once("template_menu.php");

$currentPageId = "Accueil";
if(isset($_GET['page'])) {
$currentPageId = $_GET['page'];
}

?>

<form action="login.php" method="post">
    <h2> Se connecter </h2>
    <?php if (isset($_GET['error'])) { ?>
        <p class= "error"><?php echo $_GET['error']; ?></p>
        <?php }  ?>
    <label> Nom d'utilisateur </label>
    <input type="text" name= "uname" placeholder= " Nom d'utilisateur"><br>

    <label> Mot de Passe </label>
    <input type = "password" name = "password" placeholder = "Mot de Passe"><br>

    <button type = "submit">Se connecter</button>
</form>

</body>







<?php
  renderMenuToHTML($currentPageId);
?>