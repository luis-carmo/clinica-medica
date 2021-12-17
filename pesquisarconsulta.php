<?php 
include('conexao/conexao.php');
include('menu.php');

$sql = "select * from tblconsultas";
$qry = mysqli_query($con, $sql);
echo "<br>";
echo "<div class='container' text-center>"
    . "<span><h3 class='text-center text-dark'><b>Pesquisar Consultas</b></h3><hr></span>"
    . "<table class='table table-striped table-hover table-bordered text-center'>";
echo "<input id='myInput' class='form-control' type='text' placeholder='Pesquisar...'>";
echo "<br>";
echo "<tr>";
echo "<thead class='thead-dark'><th>ID</th><th>PACIENTE</th></th><th>DATA</th><th>HORA</th><th>ESPECIALIDADE</th><th>MÉDICO</th><th colspan='2' class='text-center'>OPÇÕES</th></thead>";
echo "</tr>";
while ($linha = mysqli_fetch_array($qry)) {

    echo "<tr>";
    echo "<tbody id='myTable'>";
    echo "<th>{$linha['idcon']}</th>";
    echo strtoupper("<td>{$linha['paciente']}</td>");
    echo "<td>{$linha['dtcon']}</td>";
    echo ("<td>{$linha['hora']}</td>");
    echo strtoupper("<td>{$linha['especial']}</td>");
    echo strtoupper("<td>{$linha['medico']}</td>");
    echo "<td><a href='editarpaciente.php?idcon={$linha['idcon']}'><img src='img/edit.png' class='mx-auto d-block'></a></td>";
    echo "<td><a href='deletarconsulta.php?idcon={$linha['idcon']}'><img src='img/delete.png' class='mx-auto d-block'></a></td>";
    echo "</tbody>";
    echo "</tr>";
}
echo "</table></div>";
?>
