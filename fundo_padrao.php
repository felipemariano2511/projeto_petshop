<?php
session_start();

// Define os itens do menu
$menuItems = array(
    'principal.php' => 'Home',
    'cadastro_usuario.php' => 'Novo Cliente',
    'cadastro_pets.php' => 'Novo Pet',
    'pesquisar.php' => 'Pesquisar'
);

if (isset($_GET['menu'])) {
    $_SESSION['activeMenuItem'] = $_GET['menu'];
} else {
    // Se não houver parâmetro 'menu' na URL, defina o item de menu inicial como ativo
    $_SESSION['activeMenuItem'] = 'principal.php';
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="menu">
                <div class="opcoes_logo">
                    <a>PetShop</a>                    
                    
                </div>

                <div class="opcoes_menu">
                    <?php foreach ($menuItems as $page => $label): ?>
                        <a href="index.php?menu=<?php echo $page; ?>" <?php 
                            echo ($_SESSION['activeMenuItem'] == $page) ? 'class="selected"' : ''; ?>><?php echo $label; ?></a>
                    <?php endforeach; ?>
                </div>
                <div class="logo">

                </div>
            </div>
        </nav>
    </header>
    
    <?php
    if (isset($_GET['menu'])) {
        include $_GET['menu'];
    } else {
        include 'principal.php';
    }
    ?>
</body>
</html>
