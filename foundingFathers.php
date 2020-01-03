<html>
<title>Sociology Website</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<body class="foundingFathers">
<div class="headerpath">
<a href="Home.php">HOME</a>
<a href="foundingFathers.php">Founding Fathers of Sociology</a>
<a href="viewArticles.php">View articles</a>

</div>
<div class='transbox'>
<h2>Ibn Khaldoun</h2>
<img class ='image' src='IbnKhaldun.jpg' width=200px height=200px>
<?php

  $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

  $filter = ['_id' => new MongoDB\BSON\ObjectID( '5e0275f8f93abd1190322b8e' )];
  $options = [];
  $query = new MongoDB\Driver\Query($filter, $options);     
  $docs = $manager->executeQuery('Sociology.foundingFathers', $query);

  foreach ($docs as $doc) {
      echo "<h4>$doc->Info</h4>";
  }

?> 

</div>
<div class="transbox">
<h2>Auguste Comte</h2>
<img class ='image' src='aug.jfif' width=200px height=200px>
<?php

  $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

  $filter = ['_id' => new MongoDB\BSON\ObjectID( '5e031dbff93abd1190322b90' )];
  $options = [];

  $query = new MongoDB\Driver\Query($filter, $options);     
  $docs = $manager->executeQuery('Sociology.foundingFathers', $query);

  foreach ($docs as $doc) {
    echo "<h4>$doc->Info</h4>";
  }
?> 
</div>
<div class="transbox">
<h2>Friedrich Engels</h2>
<img class ='image' src='fred.jfif' width=200px height=200px>
<?php

  $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

  $filter = ['_id' => new MongoDB\BSON\ObjectID( '5e031e26f93abd1190322b91' )];
  $options = [];

  $query = new MongoDB\Driver\Query($filter, $options);     
  $docs = $manager->executeQuery('Sociology.foundingFathers', $query);

  foreach ($docs as $doc) {
    echo "<h4>$doc->Info</h4>";
  }

?> 
</div>
<div class="transbox">
<h2>Karl Marx</h2>
<img class ='image' src='karl.jfif' width=200px height=200px>
<?php

  $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

  $filter = ['_id' => new MongoDB\BSON\ObjectID( '5e031eddf93abd1190322b92' )];
  $options = [];

  $query = new MongoDB\Driver\Query($filter, $options);     
  $docs = $manager->executeQuery('Sociology.foundingFathers', $query);

  foreach ($docs as $doc) {
    echo "<h4>$doc->Info</h4>";
  }
?> 
</div>
</body>
</html>