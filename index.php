<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InHaus</title>
    <link rel="stylesheet" href="src/style/index.css">
</head>
<body>
    <main>
        <a href="#" class="image-link">
          <img src="./src/image/logo_inhaus.png" alt="Logo InHaus" class="image">
        </a>
      
        <nav>
            <button class="btnLogin-popup" id="btnLogin">Login</button>

       
        <section class="login-form hidden" id="loginForm">
        <form action="login.php" method="POST">
    <h2>Entrar</h2>
    <input type="text" name="usuario" placeholder="Usuário" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit">Entrar</button>
</form>

          
          </section>
        </nav>
      </main>
      




    <script src="src/js/index.js"></script>
</body>
</html>