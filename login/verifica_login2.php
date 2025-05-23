<?php
// Verifica se estamos conectados ao BD
if ( ! isset( $conexao_pdo ) || ! is_object( $conexao_pdo ) ) {
	exit('Erro na conexão com o banco de dados.');
}

// Une $_SESSION e $POST para verificação
if ( isset( $_POST ) && ! empty( $_POST ) ) {
	$dados_usuario = $_POST;
} else {
	$dados_usuario = $_SESSION;
}


// Verifica se os campos de usuário e senha existem
// E se não estão em branco
if ( 
	isset ( $dados_usuario['password'] )  &&
  ! empty ( $dados_usuario['password'] ) 
) {
	// Faz a consulta do nome de usuário na base de dados
	$pdo_checa_user = $conexao_pdo->prepare('SELECT * FROM funcionarios WHERE matricula = ? or rfid = ? LIMIT 1');
	$verifica_pdo = $pdo_checa_user->execute( array( $dados_usuario['login'], $dados_usuario['login'] ) );
	
	// Verifica se a consulta foi realizada com sucesso
	if ( ! $verifica_pdo ) {
		$erro = $pdo_checa_user->errorInfo();
        
		exit( $erro[2] );
        
        echo "errorrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
	}
	
	// Busca os dados da linha encontrada
	$fetch_usuario = $pdo_checa_user->fetch();
	
	// Verifica se a senha do usuário está correta
	if ( $dados_usuario['login'] === $fetch_usuario['matricula'] ) {
		// O usuário está logado
		$_SESSION['logado']       = true;
		$_SESSION['nome'] = $fetch_usuario['nome'];
        $_SESSION['matricula'] = $fetch_usuario['matricula'];
        $_SESSION['rfid'] = $fetch_usuario['rfid'];
        
	} else {
		// Continua deslogado
		$_SESSION['logado']     = false;
		
		// Preenche o erro para o usuário
		$_SESSION['login_erro'] = 'Usuário ou senha inválidos';
	}
}
?>
