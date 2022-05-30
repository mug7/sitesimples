<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games Store</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        .back{
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background:url(https://img.freepik.com/vetores-gratis/fundo-branco-abstrato_23-2148810353.jpg?w=2000) no-repeat top center #efeff1;
  background-size:cover;
}
.thx{
  position: fixed;
  left:50%;
  transform:translateX(-50%);
  bottom: 15px;
}
nav{
  width: 100%;
  position: fixed;
  top:50px;
  text-align:center;
}
nav a{
  font-family: 'Oswald', sans-serif;
  font-weight:500;
  text-transform:uppercase;
  text-decoration:none;
  color:#16151b;
  margin:0 15px;
  font-size:16px;
  letter-spacing:1px;
  position:relative;
  display:inline-block;
}
nav a:before{
  content:'';
  position: absolute;
  width: 100%;
  height: 3px;
  background:#16151b;
  top:47%;
  animation:out 0.2s cubic-bezier(1, 0, 0.58, 0.97) 1 both;
}
nav a:hover:before{
  animation:in 0.2s cubic-bezier(1, 0, 0.58, 0.97) 1 both;

}
@keyframes in{
  0%{
    width: 0;
    left:0;
    right:auto;
  }
  100%{
    left:0;
    right:auto;
    width: 100%;
  }
}
@keyframes out{
  0%{
    width:100%;
    left: auto;
    right: 0;
  }
  100%{
    width: 0;
    left: auto;
    right: 0;
  }
}
@keyframes show{
  0%{
    opacity:0;
    transform:translateY(-10px);
  }
  100%{
    opacity:1;
    transform:translateY(0);
  }
}

@for $i from 1 through 5 {
  nav a:nth-child(#{$i}){
    animation:show .2s #{$i*0.1+1}s ease 1 both;
  }
}
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="back"></div>
<nav>
  <a href="index.php">Início</a>
  <a href="sobre.php">Sobre Nós</a>
  <a href="contato.php">Contato</a>
  <a href="login.php">Login</a>
</nav>

    <div>
        <h1>Login</h1>
        <form action="login2.php" method="post">
        <input type="text" placeholder="Nome" id="nome" name="nome">
        <br><br>
        <input type="password" placeholder="Senha" id="senha" name="senha">
        <br><br>
        <button>Enviar</button>
        </form>
    </div>
</body>
</html>