<!DOCTYPE HTML>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Favicons -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
    <title><?php echo wp_get_document_title(); ?></title>
</head>

<body <?php body_class(); ?>>        
        <header class="header">
            <a href="../"><img src="../wp-content/uploads/2024/06/logo_sm_v1.png"></a>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
            <ul class="menu">
                <li><a href="https://www.sergiomansur.com.br/#perfil" class="active">Perfil</a></li>
                <li><a href="https://www.sergiomansur.com.br/#clientes">Clientes</a></li>
                <li><a href="https://www.sergiomansur.com.br/#contatos">Contato</a></li>
                <li><a href="https://www.sergiomansur.com.br/perguntas-frequentes/">Perguntas Frequentes</a></li>
            </ul>
        </header>