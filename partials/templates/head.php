<?php 
/********************************************************
  
*                        HEAD.PHP                       *
 
********************************************************/

include_once __DIR__ . '/../../env.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $base_path ?>dist/css/app.css">
</head>
<body>

    <header class="main-header">
        <nav class="navbar navbar-dark bg-dark navbar-expand">
            
            <a class="navbar-brand" href="<?php echo $base_path ?>">Boolean Hotel</a>
        
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo $base_path ?>">
                        Tutte le stanze
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo $base_path ?>create.php">
                        New Room
                    </a>
                </li>
            </ul>   
            
        </nav>
    </header>