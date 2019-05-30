<?php


include("bd.php");
session_start();

$produto = $_GET['produto'];

$sql = mysqli_query($link,"SELECT * FROM produtos WHERE nome = '".$produto."'");


while ($row_consulta = mysqli_fetch_assoc($sql)) {

    $id=$row_consulta['idproduto'];
$nome=$row_consulta['nome'];
$valor=$row_consulta['valor'];
$estoque=$row_consulta['estoque'];

echo "<table class='table'>";
    echo "<thead>";
        echo "<tr>";
            echo "<th class='text-center' scope='col'>Nome</th>";
            echo "<th class='text-center' scope='col'>Valor</th>";
            echo "<th class='text-center' scope='col'>Quantidade</th";
            echo "</br>";
            echo "<th class='text-center' scope='col'>Editar</th>";
            echo "<th class='text-center' scope='col'>Excluir</th>";
        echo "</tr>";
    echo "</thead>";
    echo "<form>";
        echo "<tbody>";
            echo "<tr>";
                echo "<td class='text-center'>".$nome."</td>";
                echo "<td class='text-center'>".$valor."</td>";
                echo "<td class='text-center'>".$estoque."</td>";
                echo "<td class='text-center'><a class='btn btn-primary btn-sm' href='page-editar.php?idproduto=".$id."'>Editar</td>";
                if($_SESSION['cargo'] == "Administrador"){
                    echo "<td class='text-center'><a class='btn btn-danger btn-sm' href='func-excluir.php?idproduto=".$id."'>Excluir</td>";
                }else if($_SESSION['cargo'] == "Operador"){
                    echo "<td class='text-center'> <button type='button' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#Modal' data-whatever=".$nome.">Excluir</button></td>";
                    echo "<td> <div hidden>".$id."</div></td>";
                    }
                @mysqli_free_result($result);
            echo "</tr>";
        echo "</tbody>";
    echo "</form>";
echo "</table>";
}
