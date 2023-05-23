<?php 
 include('validar-login.php');
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
       <title>Login</title>
       <!--<link href ="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">-->
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;400&family=Noto+Serif:wght@700&display=swap" rel="stylesheet">
    </head>
    <style>
        body{
            margin: 0;
            font-family: sans-serif;
        }
        .main-login{
            width: 100vw;
            height: 100vh;
            background-color: #201b2c;
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .left-login{
            width: 50vw;
            height: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .left-login > h1{
             font-size: 3vw;         
            color: #77ffc0;
            

        }
        .left-login-image{
            font-size:3vw;
             width: 35vw;
        }

        .right-login{
            width: 60vw;
            height: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .card-login{
            width: 60%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 35px 35px;
            background: #2f2841;
            border-radius: 20px;
            box-shadow: 0px 10px 40px #00000056;


        }
        .card-login > h1{
            color: #00ff88;
            font-weight: 800;
            padding: 25px 25px;
            margin: 0;
        }
        .texfield{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-self: center;
            font-size: 16pt;
            box-shadow: 0px 10px 40px #00000056;
            margin: 10px;

        }
        .input{
            width: 100%;
            border:none;
            border-radius: 10px 10px;
            padding: 15px;
            background: #514869 ;
            color: #f0ffffde;
            font-size: 16pt;
            box-shadow: 0px 10px 40px #00000056;

        }
        .input::placeholder{
            color:#f0ffff94;
        }
        .lab{
            color: #f0ffffde;
            margin-top: 10px;
            font-size: 16pt;

        }
        .button{
            width: 100%;
            padding: 16px 0px;
            margin: 10px;
            border: none;
            border-radius: 10px;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 2px;
            color:#2b134b;
            background:#00ff88;
            cursor: pointer;
            box-shadow: 0px 10px 40px -12px #00ff8052;
        }
        @media only screen and (max-width:950px){
            .card-login{
                width: 85%;
            }
        }
        @media only screen and (max-width:600px){
            .main-login{
                flex-direction: column;
            }
        }

    </style>
  <body> 
   
    <div class="main-login">
        <div class="left-login">
            <h1>Faça Login<br> Bem vindo ao Gerenciador de Tarefas</h1>
            <div class="left-login-image">
                <img src="tech-company-animate.svg" alt="animação">
            </div>
           
        </div>
       
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                 
                
                    <form action="login.php" method="POST"> 
                    <div class="lab" > 
                    <label for="email">Email:</label>
                    </div>  
                    <div class="texfild">
                    <input class="input" type="email" placeholder="Enter email" name="email" required>
                    </div>
                
                
                <div class="lab">
                <label  for="senha">Senha:</label>
                </div>
                <div class="texfild">
                <input class="input" type="password" placeholder="Enter senha" name="senha" required>
                </div>
                <br>
                
                <button class="button"type="submit">Entrar </button>
                <button class="button"><a href="cadastro.php" >Criar Conta</a></button>
                
                
            </form>
            </div>
        </div>

     </div>
   
  </body>
</html>