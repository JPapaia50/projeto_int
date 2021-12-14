<?php
    $pdo = new PDO('mysql:host=localhost;dbname=id16168272_compartilha_producao', 'id16168272_security', '0@9#7y$_Z%iJIdbi');

    $sql = $pdo->prepare("SELECT * FROM login");
    if ($sql->execute()){
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach($info AS $key => $values){
            echo "Codigo: ".$values['codigo']."<br>";
            echo "Nome: ".$values['nome']."<br>";
            echo "Email: ".$values['email']."<br>";
            echo "Senha: ".$values['senha']."<br>";
            
            echo "<a href='delUsuario.php?codigo=".$values['codigo']."'>(Deletar)</a>";
            echo "<a href='altUsuario.php?codigo=".$values['codigo']."'>(Alterar)</a>";

            echo "<hr>";


        }    
    }
?>