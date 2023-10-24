<?php
	class Tarefa{
		private $id;
		private $tarefa;
		private $status;
		private $id_usuario;
		private $data_cadastro;

		public function __get($atributo) {
			return $this->$atributo;
		}

		public function __set($atributo,$valor) {
			$this->$atributo = $valor;
		}
	}
?>