<?php

// crud

class TarefaService {
	private $conexao;
	private $tarefa;

	public function __construct(Conexao $conexao, Tarefa $tarefa) {
		$this->conexao = $conexao->conectar();
		$this->tarefa = $tarefa;
	}

	public function inserir() {     // create
		$query = 'insert into tb_tarefa(tarefa,status,id_usuario) 
						 values (:tarefa,:status,:id_usuario)
		';
		
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':tarefa',    $this->tarefa->__get('tarefa'));
		$stmt->bindValue(':status',    $this->tarefa->__get('status'));
		$stmt->bindValue(':id_usuario',$this->tarefa->__get('id_usuario'));
		$stmt->execute();
	}

	public function recuperar($pendencia) {   // read

		$pendencia = isset($pendencia) ? $pendencia : false;


		$query = '
			select 
				t.id,  t.tarefa, t.status, u.nome 
			from 
				tb_tarefa as t 
			left join tb_usuario as u on (t.id_usuario = u.id)
		';

		if ($pendencia) {
			$query = $query.'  where t.status = 0';
		}


		$stmt  = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function atualizar() {   //update
		// print_r($this->tarefa);

		$query = "update tb_tarefa set tarefa = :tarefa where id = :id";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':tarefa',$this->tarefa->__get('tarefa'));
		$stmt->bindValue(':id',$this->tarefa->__get('id'));
		$stmt->execute();
	}


	public function remover() {    // delete
		$query = 'delete from tb_tarefa where id = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id',$this->tarefa->__get('id'));
		$stmt->execute();	
	}


	public function statusTarefa() {   //update
		$query = "update tb_tarefa set status = :status where id = :id";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':status',$this->tarefa->__get('status'));
		$stmt->bindValue(':id',    $this->tarefa->__get('id'));
		return $stmt->execute();
	}

}

?>