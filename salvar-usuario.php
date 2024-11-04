<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nascimento = $_POST["data_nascimento"];

        $sql = " INSERT INTO usuarios (nome , email , senha , data_nascimento ) VALUES ( '{nome}' , '{email}' , '{senha}' , '{data_nasc}')";

        $res = $conn->query($sql);




        
        break;
    
    case 'editar':
         
         break;

    case 'excluir':
         
         break;

}

?>