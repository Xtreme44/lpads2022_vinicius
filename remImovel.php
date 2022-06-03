<?php
    include 'conexao.php';

    $id = trim($_POST['id']);

    if (!empty($id)){
        $sql = "DELETE FROM imovel WHERE id=?";

        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
        Conexao::desconectar();
    }

    //header("location:lstImovel.php")
?>