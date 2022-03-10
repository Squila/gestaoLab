<?php include("logica-usuario.php");?>
<?php
logout();
header("Location: index.php?logout=true");
die();
?>