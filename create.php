<?php


include __DIR__ . '/partials/templates/head.php';   // Head page code -- Template HTML 

?>


<main class="container">
    <div class="row">
        <div class="col-12">
            
            <header>
                <h1 class="text-primary">Create Rooms</h1>                    
            </header>

            <form action="./partials/create/server.php" method="POST">
                <div class="form-group">
                    <label for="room_number">Room number</label>
                    <input class="form-control" type="number" name="room_number" id="room_number" placeholder="Insert room number">
                </div>

                <div class="form-group">
                    <label for="beds">Beds number</label>
                    <input class="form-control" type="number" name="beds" id="beds" placeholder="Insert beds number">
                </div>

                <div class="form-group">
                    <label for="floor">Floor number</label>
                    <input class="form-control" type="number" name="floor" id="floor" placeholder="Insert floor number">
                </div>

                <div class="form-group text-right">
                    <input class="btn btn-success" type="submit" value="Create">
                </div>
            </form>

        </div>
    </div>
</main>

<?php 
    include __DIR__ . '/partials/templates/footer.php'; // Footer page -- Template HTML { Script js compresi }
?>