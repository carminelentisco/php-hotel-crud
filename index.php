<?php
/********************************************************
  
*                         INDEX.PHP                     *
 
********************************************************/

include __DIR__ . '/partials/home/server.php';      // Home server -- Collegamento alla logica server impostata  
include __DIR__ . '/partials/templates/head.php';   // Head page code -- Template HTML 

?>

<?php

/**
 * 
 *  ALLERT
 * 
 * Verifico se la query string ritorna un id  
 * quindi stampa un allert con un info di successo dell operazione
 * 
**/

if (empty($_GET['del'])) { ?>
    <div class="alert alert-success">
        Stanza cancellata con successo
    </div>
<?php } ?>

<main class="container d-flex justify-content-around flex-wrap">
    <?php foreach ($rooms as $room) { ?>
    <div class="card mt-5 text-center" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Room Number: <?php echo $room['room_number'];?></h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Beds: <?php echo $room['beds'];?></li>
                <li class="list-group-item">Floor: <?php echo $room['floor'];?></li>
            </ul>
            <div class="d-flex justify-content-around">
                <a class="btn btn-info" href="./show.php?id=<?php echo $room['id']; ?>">View</a>
                <a href="./edit.php?id=<?php echo $room['id']; ?>" class="btn btn-primary">Update</a>
                <form action="./partials/delete/server.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $room['id'];?>">
                    <input class="btn btn-danger" type="submit" value="Delete">
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
</main>

<?php 
    include __DIR__ . '/partials/templates/footer.php'; // Footer page -- Template HTML { Script js compresi }
?>