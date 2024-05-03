<?php
/*
  $template = "";
  foreach($cloneHotels as $hotel){
      $template .= "<tr> <th>{$hotel['name']}</th> <td>{$hotel['description']}</td> <td>{$hotel['parking']}</td> <td>{$hotel['vote']}</td> <td>{$hotel['distance_to_center']}</td> </tr>";
    }
*/
?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Voto</th>
      <th scope="col">Distanza</th>
    </tr>
  </thead>
  <tbody>
    <?= $template ?>
  </tbody>
</table>

</body>
</html>