<?php
// Server
include __DIR__ . '/partials/show/server.php';
// Head page code
include __DIR__ . '/partials/templates/head.php';
?>

<main class="container">
    <div class="row">
        <div class="col-12">
            
            <header>
                <h1 class="text-primary">Details Room</h1>                    
            </header>

            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">ID:<?php echo $room['id']; ?></li>
                    <li class="list-group-item">ROOM N°:<?php echo $room['room_number']; ?></li>
                    <li class="list-group-item">BEDS:<?php echo $room['beds']; ?></li>
                    <li class="list-group-item">FLOOR:<?php echo $room['floor']; ?></li>
                </ul>
            </div>

            <a href="./">Torna all archivio</a>

        </div>
    </div>
</main>

<?php 
    include __DIR__ . '/partials/templates/footer.php';
?>