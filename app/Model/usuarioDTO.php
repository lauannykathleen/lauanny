<?php
Class usuario {
    private $idusuario;
    private $nome;
    private $email;
    private $senha;

public function getIdusuario (){
    return $this->idusuario;
}
public function setIdusuario ($idusuario){
$this->idusuario= $idusuario;
}

public function getNome (){
    return $this->nome;
}
public function setNome ($nome){
$this->nome= $nome;
}

public function getEmail (){
    return $this->email;
}
public function setEmail ($email){
$this->email= $email;
}
public function getSenha (){
    return $this->senha;
}
public function setSenha ($senha){
$this->senha= $senha;
}


}