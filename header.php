<?php

$menu = [
    "inicio" => [
        "ruta" => "./index.php"
    ],
    "Sobre mi" => [
        "ruta" => "./index.php"
    ],
    "Trabajos" => [
        "ruta" => "./index.php"
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Playwrite+NG+Modern:wght@100..400&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollToPlugin.min.js"></script>
</head>
<body>
    <header>
        <figure>
            <img src="./assets/img/RecursoLogo.png" alt="" class="logo">
        </figure>
        <menu>
            <ul>
                <?php foreach ($menu as $item => $link){ ?>
                     <li>
                         <a href="<?php echo $link['ruta'];?>" class="button"><?php echo $item;?>
                         </a>
                     </li>
                <?php }  ?>
                <button>
                    Contactame
                 </button>
            </ul>
        </menu>
    </header>