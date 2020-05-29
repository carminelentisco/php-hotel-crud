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
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Boolean Hotel</a>
        
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $base_path ?>">
                        Tutte le stanze
                    </a>
                </li>
            </ul>   
            
        </nav>
    </header>