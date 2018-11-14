
<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "myDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("A conexãop falhou: " . mysqli_connect_error());
}
echo  $_POST["id"];
$id = $_POST["id"];
// código SQL
$sql = "DELETE FROM registro WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Dado deletado com sucesso";
} else {
    echo "Erro ao deletar o dado: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
S