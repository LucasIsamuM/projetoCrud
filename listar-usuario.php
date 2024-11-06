<h1> Listar Usuario </h1>

<?php

$sql = "SELECT * FROM usuarios";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<table class=' table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th> ID </th>";
        print "<th> NOME </th>";
        print "<th> EMAIL </th>";
        print "<th> DATA DE NASCIMENTO </th>";
        print "<th> AÇOES </th>";
        print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>" . $row->data_nascimento . "</td>";
        print "<td>
        <button onclick= \"location.href='?page=editar&id=".$row->id."';\"class='btn btn-success'>EDITAR</button>


        <button onclick= \"if(confirm('Quer excluir mesmo ?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';} else {false;}\" class='btn btn-danger'>EXCLUIR</button>

        
               </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'> Não encontrou resultado! </p>";
}

?>
