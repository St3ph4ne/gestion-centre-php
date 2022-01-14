<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>


<style>
  td{
    border:1px solid black;
    padding: 4px;
    }
</style>
<?php
function dbConnect() {
  $host = 'db'; //Nom donné dans le docker-compose.yml
  $user = 'myuser'; // user et pwd du docker compose
  $password = 'monpassword';
  $db = 'tutoseu';

  $conn = new mysqli($host,$user,$password,$db);

  if(!$conn) {
    return false;
  } else{
    return $conn;
  }
}

if(dbConnect()) {
  $db = dbConnect();
  
  $activities = "SELECT * FROM `Activitie`";
  $query = $db->query($activities);
  echo "<table>
          <tr>
            <th>ID Activités</th>
            <th>Nom</th>
            <th>Coût</th>
            <th>Prix</th>
          </tr>";
  while($results = $query->fetch_assoc()){
    echo "<tr>";
      echo "<td>" . $results['idActivitie'] . "</td>";
    
      echo "<td>" . $results['name'] . "</td>";

      echo "<td>" . $results['cout'] . "</td>";

      echo "<td>" . $results['prix'] . "</td>";

    echo"</tr>";

    
  };
  $db->close();

}


?>