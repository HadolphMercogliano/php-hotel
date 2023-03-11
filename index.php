<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      http-equiv="X-UA-Compatible"
      content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0" />

    <meta
      name="Description"
      content="" />
    <meta
      name="Author"
      content="Hadolph Mercogliano" />

    <!-- LINK BOOTSTRAP -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
      defer></script>

    <title>Hotels</title>
  </head>

  <body>

    <div class="container mt-5">
      <h1 class=" pb-3">Lista Hotel</h1>
      <form method="GET" class="d-flex align-items-center justify-content-center">
        <h2 class="me-3">Filtri</h2>
        <label class="me-1 align-self-bottom" for="parking">Parcheggio</label>
      <input  type="checkbox" name="parking" id="parking">
<button type="submit" class="btn btn-primary m-3">Cerca</button>
      </form>
   <table class="table table-hover">
  <thead>
    <tr>
      <?php foreach ($hotels[0] as$key => $hotel ) { ?>
      <th scope="col"><?= $key?></th>
    <?php } ?>      
    </tr>
  </thead>

  <tbody>
    <?php foreach ($hotels as $hotel ) { ?>
      <tr>
      <?php foreach ($hotel as  $data ) {  ?>
        
          <td><?= $data ?></td>
          <?php } ?>
        </tr>
   <?php } ?>
  </tbody>
</table>
</div>
  </body>
</html>
