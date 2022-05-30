<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Games Store</title>
    <style type="text/css">
        body {
            display: flex;
  justify-content: center;
  align-items: center;
  align-content: center;
    padding: 0;
    margin: 0;
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
form {
    font-family: Verdana,Tahoma,sans-serif;
    font-size: 15px;
    max-width: 500px;
}

h1 {
    margin-bottom: 20px;
    margin-left: 20px;
    color: #0c30f7;
    text-shadow: 5px 5px 5px black;
}

input, textarea {
    width: 200px;
    padding: 10px;
    color: black;
    margin-left: 20px;
    margin-top: 10px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border: 1px solid;
}

input:hover, textarea:hover, input:focus, textarea:focus {
    border-color: #000066;
    box-shadow: 5px 0px 9px #FFFF00;
    background-color: #66FFFF;
    color: black;
    font-weight: bold;
}

.enviar {
    background-color: #66FFFF;
    height: 40px;
    width: 100px;
    font-weight: bold;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border: 1px solid;
    color: black;
}

textarea {
    width: 400px;
    height: 120px;
    line-height: 20px;
    max-width: 400px;
}

form label {
    margin-left: 20px;
    color: #FFFFFF;
    font-weight: bold;
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
        <form action="contato.php" style="margin: auto; width: 220px;">
            <h1>Entre em contato</h1>

                <input type="text" id="nomeid" placeholder="Seu Nome" required="required" name="nome" />
                <label for="nome">Nome</label>

                <input type="tel" id="foneid" placeholder="(xx)xx-xx-xx-xx" name="fone" />
                <label for="fone">Fone</label>

                <input type="email" id="emailid" placeholder="fulano@mail.com" name="email" />
                <label for="email">Email</label>

                <textarea placeholder="Deixe sua opnião"></textarea>

                <input type="submit" class="enviar" onclick="Enviar();" value="Enviar" />
        </form>
</nav>
</body>
</html>