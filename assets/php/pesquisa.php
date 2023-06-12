<?php 
if (!session_start()) {
    session_start();
}

if (isset($_POST['buscar'])) {
    echo "<script>alert('pesquisou')</script>";
}

header("Location: ../../pages/produtosGerais.php");
?>