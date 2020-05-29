<?php

include_once __DIR__ . '/partials/update/server-edit.php';

include __DIR__ . '/partials/templates/head.php';   // Head page code -- Template HTML 

?>


<main class="container">
    <div class="row">
        <div class="col-12">
            
            <header>
                <h1 class="text-primary">Hotel Rooms</h1>                    
            </header>

            <form action="./partials/update/server-update.php" method="POST">
                <div class="form-group">
                    <label for="room_number">Room number</label>
                    <input class="form-control" type="number" name="room_number" id="room_number" value="<?php echo $room['room_number'] ?>">
                </div>

                <div class="form-group">
                    <label for="beds">Beds number</label>
                    <input class="form-control" type="number" name="beds" id="beds" value="<?php echo $room['beds'] ?>">
                </div>

                <div class="form-group">
                    <label for="floor">Floor number</label>
                    <input class="form-control" type="number" name="floor" id="floor" value="<?php echo $room['floor'] ?>">
                </div>

                <div class="form-group text-right">
                    <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
                    <input class="btn btn-primary" type="submit" value="Save">
                </div>
            </form>

        </div>
    </div>
</main>

<?php 
    include __DIR__ . '/partials/templates/footer.php'; // Footer page -- Template HTML { Script js compresi }
?>