<?php
 
 $validacoes= [];
 
 if (count ($_POST)>0) {
    

    if ($_POST['name'] === "") {
        $validacoes[] = "Por favor preencha o nome do usuario";
    }
    if ($_POST['e-mail'] === ""){
        $validacoes[] = "Por favor preencha o e-mail do usuario";
    }
    if ($_POST['senha'] === "") {
        $validacoes[] = "Por favor insira a senha";
    }
    if ($_POST['senha'] === "") {
        $validacoes[] = "Por favor confirme a senha";
    }
 }

?>

<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width === "" initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php if (count($validacoes)):?>
     <ul>
        <?php foreach ($validacoes as $validacao):?>
        <li><?=$validacao?></li>
        <?php endforeach; ?>
     </ul>
        <?php endif; ?>
        <form action="index.php" method="POST">
            <div>
                <input type="text" name="nome" placeholder="Digite seu nome">
            </div>
            <div>
                <input type="text" name="email" placeholder="Digite seu e-mail">
            </div>
            <div>
                <input type="password" name="senha" placeholder="Digite sua senha">
            </div>
            <div>
                <input type="password" name="senha" placeholder="Confirme sua senha">
            </div>
            <div>
                <input type="submit" value="enviar">
            </div>
        </form>
    </body>
</html>