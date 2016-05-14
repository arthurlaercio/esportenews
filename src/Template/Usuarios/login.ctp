<html >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login usuários</title> 
    <?= $this->Html->css('resetlogin.css') ?>
    <?= $this->Html->css('stylelogin.css') ?>
  </head>
  
  <body>

	<div class="pen-title">
            <h1>Esporte News Admin</h1><span>
	</div>

        <div class="module form-module">
          <div class="toggle"><i class="fa fa-times fa-pencil"></i>
            
          </div>
          <div class="form">
            <h2>Login to your account</h2>
            <form>
              <input type="text" placeholder="Username"/>
              <input type="password" placeholder="Password"/>
              <button>Login</button>
            </form>
          </div>
          
          <div class="cta"><a href="http://localhost:8765/">Esqueceu sua senha?</a></div>
        </div>
        
   
  </body>
</html>
