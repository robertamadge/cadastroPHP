
<?php  

    if(isset($_POST['cadastrar'])){
        $anoNascimento = '';
        $anoAtual = date('Y');
        $nome = $_POST['nome'];
        $email = $_POST["email"];
        $nascimento = $_POST["nascimento"];
        $sexo = $_POST["sexo"];

        $anoNascimento = date('Y', strtotime($_POST['nascimento']));

        $idade = $anoAtual - $anoNascimento;

        echo "<h2>Informações sobre o seu cadastro:</h2>";

        echo "<h4>Idade: $idade anos. </h4><br/>";

        echo "<h4>Nome: $nome </h4><br/>"; 
        echo "<h4>Email: $email </h4><br/>";
        echo "<h4>Data de Nascimento: $nascimento </h4><br/>";
        echo "<h4>Sexo: $sexo </h4><br/>";    
        echo "<h4>Hobbies:</h4><br/>";
        foreach ($_POST["hobbies" ] as $hobbies ) {
            print $hobbies ."<br />";
        }  
  
        die;
      } 
?>

<!DOCTYPE html>
<html style="background-color: #90C3C8;">
    <head>
        <title>Cadastro</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./../css/custom.css" >
    </head>
    
    <body style="background-image: url(./../img/back2.jpg);">

        <header>
            <h3>Cadastro</h3>
        </header>
        
        <div class="container">
            <form class="needs-validation" method="post">
                <div class="row g-3" >
                    <div class="col-sm-6" >
                        <?php if (isset($_GET['erro'])):?>
                            <div class="alert alert-danger" role="alert">
                                Erro ao preencher cadastro.
                            </div>
                        <?php endif; ?>

                        <input type="hidden" value="1" name="cadastrar"/>
                        <label for="nome" class="form-label" >Nome:</label>
                        <input type="text" class="form-control" name="nome" id="nome" required >
                        <br>
                        <label for="email" class="form-label" >Email:</label>
                        <input type="text" class="form-control" name="email" id="email" required >
                        <br>
                        <label for="nascimento" class="form-label" >Data de Nascimento:</label>
                        <input type="date" class="form-control" name="nascimento" id="nascimento" required >
                        <hr class="rounded">
                        <label class="form-label" >Sexo:</label><br>
                        <input type="radio" name="sexo" value="Masculino" > Masculino <br>
                        <input type="radio" name="sexo" value="Feminino" > Feminino
                    
                    </div>

                    <br>

                    <div class="col-sm-6" style="margin-bottom: 30px;">
                        <label class="form-label" >Hobbies:</label>
                        <br>                        
                        <label for="ler">Ler</label>
                        <input id="ler" name="hobbies[]" type="checkbox" value="Ler">
                        <br>
                        <label for="esportes">Praticar Esportes</label>
                        <input id="esportes" name="hobbies[]" type="checkbox" value="Praticar Esportes">
                        <br>
                        <label for="viajar">Viajar</label>
                        <input id="viajar" name="hobbies[]" type="checkbox" value="Viajar">
                        <br>
                        <label for="nada">Não Fazer Nada</label>
                        <input id="nada" name="hobbies[]" type="checkbox" value="Não Fazer Nada">
                    </div>
                    <br>

                    <hr class="rounded">

                    <div>                    
                        <button class="w-100 btn btn btn-light" type="submit" style="margin-top: inherit;
                        font-size: 20px; width: 190px;">Enviar</button>                        
                    </div>
                </div>
            </form>
        </div>
    </body>

    <footer>        
        <p> Desenvolvido por: Roberta Madge | Maceió, 2021</p>
    </footer> 
</html>