<?php 

	/* 	echo('<pre>');
	print_r($_POST);
	echo('</pre>'); */
	
	require '../../todo_list/tarefa.model.php';
	require '../../todo_list/tarefa.service.php';
	require '../../todo_list/conexao.php';

	//echo $ac;

	switch ($ac) {
		case 'ti': // insert tarefa
			$tarefa = new Tarefa();
			$tarefa->__set('tarefa',$_POST['tarefa']);
			$tarefa->__set('status',0);
			$tarefa->__set('id_usuario',$_SESSION['id']);

			$conexao = new Conexao();
			$tarefaService = new TarefaService($conexao, $tarefa);
			$tarefaService->inserir();
			 
			/* echo('<pre>');
			print_r($tarefaService);
			echo('</pre>'); */
			break;

		case 'tc': // tarefa lista completa
			$tarefa = new Tarefa();
			$conexao = new Conexao();

			$tarefaService = new TarefaService($conexao, $tarefa);
			$tarefas = $tarefaService->recuperar(false);
			break;

		case 'tp': // tarefa lista de pendência
			$tarefa = new Tarefa();
			$conexao = new Conexao();

			$tarefaService = new TarefaService($conexao, $tarefa);
			$tarefas = $tarefaService->recuperar(true);
			break;

		case 'ta': // atualizar tarefa
			/* echo('estamos aqui');
			echo('<pre>');
			print_r($_POST);
			echo('</pre>'); */


			$tarefa = new Tarefa();
			$tarefa->__set('id',$_POST['id']);
			$tarefa->__set('tarefa',$_POST['tarefa']);

			$conexao = new Conexao();

			$tarefaService = new TarefaService($conexao, $tarefa);
			$tarefaService->atualizar();
			break;


		case 'tr': // remover tarefa
			$tarefa = new Tarefa();
			$tarefa->__set('id',$_GET['id']);

			$conexao = new Conexao();
			$tarefaService  = new TarefaService($conexao, $tarefa);
			$tarefaService->remover();
			header('Location: todas_tarefas.php');
			break;

		case 'ts': // marca como status verificado
			$tarefa = new Tarefa();
			$tarefa->__set('id',$_GET['id']);
			$tarefa->__set('status',1);

			$conexao = new Conexao();

			$tarefaService = new TarefaService($conexao, $tarefa);
			$tarefaService->statusTarefa();
			break;



		default:
			// code...
			break;
	}

?>