<?php
    require_once 'pessoa.php';
    $p = new Pessoa("crudphp","localhost/php","root", "");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Crud PHP</title>
</head>
<body>
    <section id="esquerda">
        <form action="">
            <h2>Cadastrar Pessoa</h2>
            <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone">
            <label for="email">E-mail</label>
                <input type="text" name="email" id="email">
                    <input type="submit" value="Cadastrar">
        </form>
    </section>
    <section id="direita">
        <table>
            <tr id="titulo">
                <td>Nome</td>
                <td>Contato</td>
                <td colspan="2">E-email</td>
            </tr>
        <?php 
            $dados = $p->buscarDados();
            if(count($dados) > 0){
                for($i=0; $i < count($dados); $i++){
                    echo "<tr>";
                    foreach($dados[$i] as $k => $v){
                        if($k != "id"){

                        }
                    }
                    echo "</>";
                }
            }

        ?>
                <td>Gabrie</td>
                <td>81 987772234</td>
                <td>teste@gmail.com</td>
                <td><a href="">Editar</a> <a href="">Excluir</a></td>
            </tr>
        </table>
    </section>
</body>
</html>