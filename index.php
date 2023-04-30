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
			<form action="pages/home-dono.php" method="post">
				<input type="email" name="username" placeholder="Usuário" required>
				<input type="password" name="password" placeholder="Senha" required minlength="8" maxlength="16">
				<button type="submit">Entrar</button>
                <a href="#">Esqueceu sua senha?</a>
			</form>
		</div>
	</section>
</body>
</html>