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
.container{
  display: inline-flex;
  justify-content: center;
  align-items: center;
  align-content: center;
  width: 100%;
  height: 100vh;
}

.container .card{
  position: relative;
  width: 700px;
  height: 450px;
  background: #232323;
  border-radius: 20px;
  overflow: hidden;
  background: url(https://i.pinimg.com/originals/00/df/a4/00dfa4420e24bdb15a74dfce10112f55.jpg);
}


.container .card .imgBx img{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 270px;
}

.container .card .contentBx{
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 100px;
  text-align: center;
}

.container .card .contentBx .size span{
  width: 70px;
  height: 26px;
  text-align: center;
  
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

<div class="container">
  <div class="card">
    <div class="contentBx">
      <h2>Quem nós somos?</h2>
      <div class="size">
        <span>Somos uma loja revendedora de jogos eletrônicos com um preço mais barato do que qualquer plataforma vendedora de jogos.</span>
  </div>
</body>
</html>