 <?php
include('config.php');

if(@$_REQUEST['botao_salvar']) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $raca = $_POST['raca'];
    $peso = $_POST['peso'];
    $idade_anos = $_POST['idade_anos'];
    $idade_meses = $_POST['idade_meses'];
    $sexo = $_POST['sexo'];
    $nome_tutor = $_POST['nome_tutor'];

    $query = "INSERT INTO  animal (id, nome, raca, peso, idade_anos, idade_meses, sexo, nome_tutor)  
        VALUES($id, $nome,$raca, $peso, $idade_anos, $idade_meses, $sexo, $nome_tutor)";
    $result = mysqli_query($connection, $query);
    
}
?>

<html>

<form action=# method=post>
ID <input type="text" name="id"> <br> 
Nome <input type="text" name="nome"> <br>
Raça <input type="text" name="raca">  
Peso <input type="text" name="peso"> <br>
Quantidade de anos <input type="text" name="idade_anos"> <br>
Quantidade de meses <input type="text" name="idade_meses"> <br>
Sexo <input type="text" name="sexo"> <br>
Nome do Tutor <input type="text" name="nome_tutor"> <br>
<input type="submit" name="botao_salvar">

</html>
