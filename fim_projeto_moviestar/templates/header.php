<?php

require_once("globals.php");
require_once("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moviestar</title>
    <link rel="short icon" href="img/moviestar.ico">
     <!--Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.css" integrity="sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!--FONTAWESOME -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    
    <!--CSS do projeto -->
    <link rel="stylesheet" href="<?= $BASE_URL?>css/styles.css">
   
</head>
<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
         <a href="<?= $BASE_URL?>" class="navbar-brand">
            <img src="<?= $BASE_URL?>img/logo.svg" alt="moviestar" id="logo">
           <span id="moviestar-title">
             MovieStar
           </span>
         </a>
            
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
         data-target="#navbar" aria-controls="navbar" aria-expanded="false" 
         aria-label="Toggle-navigation">
           <i class="fas fa-bars"></i>
         </button>
            <form action="" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
               <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" 
                placeholder="Buscar Filmes" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit">
                 <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="collapse navbar-collapse">
                 <ul class="classnavbar-nav">
                    <li class="nav-item">
                      <a href="<?= $BASE_URL?>auth.php" class="nav-link">Entrar/Cadastrar</a>
                    </li>
                 </ul>

            </div>
     </nav>
    </header>
    </div>
