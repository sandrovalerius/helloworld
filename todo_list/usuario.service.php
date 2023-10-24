<?php

class UsuarioService {

	private $conexao;
	private $usuario;

	public function __construct(Conexao $conexao, Usuario $usuario) {
		$this->conexao = $conexao->conectar();
		$this->usuario = $usuario;
	}

	public function inserir() {     // create
		$query = 'insert into tb_usuario(nome,email,senha) values (:nome,:email,:senha)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome',$this->usuario->__get('nome'));
		$stmt->bindValue(':email',$this->usuario->__get('email'));
		$stmt->bindValue(':senha',$this->usuario->__get('senha'));
		$stmt->execute();
	}

	public function localizar() {   // read
		$query = '
			select * 
			from   tb_usuario 
			where  email = :email AND senha = :senha
		'; 

		$stmt  = $this->conexao->prepare($query);
		$stmt->bindValue(':email',$this->usuario->__get('email'));
		$stmt->bindValue(':senha',$this->usuario->__get('senha'));
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_OBJ);
	}

}

?>