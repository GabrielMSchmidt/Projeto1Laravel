<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css"> 
    <title>Login</title>
</head>
<body>
    <form action="{{route('users.store')}}" method="post">
        @csrf
        <div class="main-login">
            <div class="left-login">
                <h1>Bem Vindo<br> Registre-se agora mesmo</h1>
                <img src="iconbas.svg" class="left-login-img" alt="Icon Basquete">
            </div>

            <div class="right-login">
                <div class="card-login">
                    <h1>LOGIN</h1>
                    <div class="textfield">
                        <label for="name">Nome</label>
                        <input type="text" name="name" placeholder="Nome">
                    </div>
                    <div class="textfield">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <button class="btn-login">Login</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>