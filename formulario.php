<?php

    if(isset($_POST['submit']))
    {
      
    
     

     include_once('config.php');

     if (!$conexao) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "enviado";
    }

    
    $db_selected = mysqli_select_db($conexao, 'formulario-jh');

    if (!$db_selected) {
        die("Cannot use your_database_name: " . mysqli_error($conexao));
    }

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $data_nasc = $_POST['data_nasc'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,genero,data_nasc,cidade,estado,endereco) VALUES ('$nome','$email','$telefone','$genero','$data_nasc','$cidade','$estado','$endereco')");
    
    
    }




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="formstyle.css">
</head>
<body class="formbody">
    <div class="box">
        <form action="formulario.php" method = "POST">
            <fieldset>  
                <legend><b>Formulário de Clientes</b></legend>
                <br>

                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputuser" required>
                    <label for="nome" class="labelimput">Nome Completo</label>
                </div>
                <br>
                <br>

                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputuser"  required>
                    <label for="email" class="labelimput">Email</label>
                </div>
                <br>
                <br>

                <div class="inputbox">
                    <input type="text" name="telefone" id="telefone" class="inputuser" required>
                    <label for="nome" class="labelimput">Telefone</label>
                </div>
                <br>
                

                <p>Sexo</p>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="Masculino">Masculino</label>
                <br>
                <input type="radio" name="genero" id="outro" value="outro" required>
                <label for="outro">Outro</label>
                <br>
                <br>
            

                <div class="inputbox">
                    <label for="data_nascimento"><b> Data de Nascimento: </b></label>
                    <input type="date" name="data_nasc" id="data_nasc" class="inputdate"  required>
                </div>
                <br>
                <br>

                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputuser" required>
                    <label for="cidade" class="labelimput">Cidade</label>
                </div>
                <br>
                

                <div class="inputbox">
                    <input type="text" name="estado" id="estadp" class="inputuser" required>
                    <label for="estado" class="labelimput">Estado</label>
                </div>
                <br>
                <br>

                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputuser" required>
                    <label for="endereco" class="labelimput">Endereço</label>
                </div>
                <br>
                <br>

                <input type="submit" name="submit" id="submit">


                   

                
            </fieldset>
        </form>


    </div>
    
</body>
</html>