<?php 
	 
	/* echo('<pre>');
	print_r($_POST);
	echo('</pre>'); */
	
	require '../../todo_list/usuario.model.php';
	require '../../todo_list/usuario.service.php';
	require '../../todo_list/conexao.php';

	switch ($ac) {
		case 'ui':
			$usuario = new Usuario();
			$usuario->__set('email',$_POST['email']);
			$usuario->__set('nome',$_POST['nome']);
			$usuario->__set('senha',md5($_POST['senha']));

			$conexao = new Conexao();
			$usuarioService = new UsuarioService($conexao, $usuario);
			$usuarioService->inserir();
			break;

		case 'us':
			$usuario = new Usuario();
			$usuario->__set('email',$_POST['email']);
			$usuario->__set('senha',md5($_POST['senha']));

			$conexao = new Conexao();
			$usuarioService = new UsuarioService($conexao, $usuario);
			$sUsuario = $usuarioService->localizar();
			break;

		default:
			// code...
			break;
	}

?>