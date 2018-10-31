<?php

class Orfanatos {


    public function addOrfanato($nome, $estado, $endereco, $telefone, $email, $horario) {

        global $pdo;
        
        $sql = "INSERT INTO orfanatos SET nome = :nome, estado = :estado, endereco = :endereco, 
        telefone = :telefone, email = :email, horario = :horario";
        $sql = $pdo->prepare($sql);

        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":estado", $estado);
        $sql->bindValue(":endereco", $endereco);
        $sql->bindValue(":telefone", $telefone);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":horario", $horario);
        $sql->execute();

    }

    public function getOrfanatos() {

        global $pdo;
        $array = array();
        
        $sql = "SELECT * FROM orfanatos";
        $sql = $pdo->prepare($sql);
        $sql->execute();

        if($sql->rowCOunt() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;

    }

    public function getOrfanato($id) {

        global $pdo;
        $array = array();
        
        $sql = "SELECT * FROM orfanatos WHERE id = :id AND id = :id AND id = :id AND id = :id AND id = :id AND id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCOunt() > 0) {
            $array = $sql->fetchAll();
        }

        return $array = array(
            "id" => $id
        );

    }


}

$orfanatos = new Orfanatos();


?>