<?php
class Conexao {

	private $host   = 'localhost';
	private $dbname = 'php_tarefa';
	private $user   = 'root';
	private $pass   = '';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"
			);

			return $conexao;

		} catch (PDOExeption $e) {
			echo '<p>'.$e->getMessege().'</p>';
		}
	}
}	

?>