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

<main class="container">
    <div class="row">
        <div class="col-12">
            
            <header>
                <h1 class="text-primary">Hotel Rooms</h1>                    
            </header>

            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Number</th>
                        <th>Floor</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if (! empty($rooms)) {
                        foreach ($rooms as $room) { ?>
                            <tr>
                                <td><?php echo $room['id']; ?></td>
                                <td><?php echo $room['room_number']; ?></td>
                                <td><?php echo $room['floor']; ?></td>
                                <td><a class="text-success" href="./show.php?id=<?php echo $room['id']; ?>">view</a></td>
                                <td>
                                    <a class="text-primary" href="./edit.php?id=<?php echo $room['id']; ?>">update</a>
                                </td>
                                <td class="text-danger">
                                    <form action="./partials/delete/server.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $room['id'];?>">
                                        <input class="btn btn-danger" type="submit" value="Delete">
                                    </form>
                                </td>
                            </tr>
                    <?php }
                    }?>
                </tbody>
            </table>

        </div>
    </div>
</main>

<?php 
    include __DIR__ . '/partials/templates/footer.php'; // Footer page -- Template HTML { Script js compresi }
?>