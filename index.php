<?php 
session_start();

// Conecta ao banco de dados
$servidor = "localhost"; // nome do servidor MySQL
$usuario_bd = "root"; // nome do usuário do banco de dados
$senha_bd = ""; // senha do banco de dados
$nome_bd = "interbd"; // nome do banco de dados
$conexao = mysqli_connect($servidor, $usuario_bd, $senha_bd, $nome_bd);

// Verifica se houve erro na conexão
if (!$conexao) {
    die("Erro de conexão: " . mysqli_connect_error());
}

$username = $_POST["username"];
$password = $_POST["password"];


// Verifica se o usuário já está logado
if (isset($_SESSION["username"])) {
    // Redireciona o usuário para a página protegida
    header("Location: home-dono.php");
}

// Verifica se o formulário de login foi submetido
if (isset($_POST["username"]) && isset($_POST["password"])) {

// Define a consulta SQL para buscar as informações do usuário
$consulta = "SELECT * FROM cadastro_c WHERE email = '$username' AND senha = '$password'";

// Executa a consulta SQL
$resultado = mysqli_query($conexao, $consulta);

// Verifica se a consulta retornou um resultado
if (mysqli_num_rows($resultado) == 1) {
    // Define o nome do usuário na sessão
    $_SESSION["username"] = $usuario;

    // Redireciona o usuário para a página protegida
    header("Location: pages/home-cliente.php");
} else {
    // Exibe uma mensagem de erro
    $mensagem_erro = "Usuário ou senha incorretos";
    echo $mensagem_erro;
}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <section class="fundo-login"> 
        <img  class="logo-login" src="images/logo.png" alt="Logo da empresa">
		<div class="form">
			<h2 class="texto-login">Login</h2>
			<form action="Login.php" method="post">
				<input type="email" name="username" placeholder="UsuÃ¡rio" required>
				<input type="password" name="password" placeholder="Senha" required minlength="8" maxlength="16">
				<button type="submit">Entrar</button>
                <a href="#">Esqueceu sua senha?</a>
			</form>
		</div>
	</section>
</body>
</html>