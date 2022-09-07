<html>
    <head>
        <title> Pagina com a criação da tabela </title>
        <meta charset="utf-8">
</head>
<body>
<table border="1">
    <tr><td>Tabela criada pelo FOR</td></tr>

<?php
$quantidade =$_POST["quantidade"];
$quantidade1=$_POST["quantidade1"];
echo " linhas $quantidade</br>";
echo "colunas $quantidade1";
for($i = 1;$i <= $quantidade; $i++)
{
    echo "<Tr>";
    for($j = 1;$j <= $quantidade1; $j++)
    {
    echo "<td>$j</td>";
    }
    "</tr>";
}
?>
</table>
</body>
</html>