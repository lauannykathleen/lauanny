<?php
//require_once '../lauanny/database/Connection.php';
//require_once '../lauanny/database/Driver/mysql.php';


use Database\Connection;
use Database\Driver\mysql;

class DaoUsuario {  
    public function salvar(Usuario $usuario){ /* Salvar */
        try {
            $p_sql = mysql::getConnect();
            $sql = "INSERT INTO usuario (
                idusuario,nome,email,senha) 
                VALUES (?,?,?,?)";
                $p_sql = $p_sql-> prepare($sql);

            $p_sql->bindValue(1, $usuario->getIdusuario());
            $p_sql->bindValue(2, $usuario->getNome());
            $p_sql->bindValue(3, $usuario->getEmail());
            $p_sql->bindValue(4, $usuario->getSenha());
            return $p_sql->execute();                
        }
        catch (PDOException $e){
            echo "Ocorreu um erro ao tentar executar esta açao"; }

    
    }
}