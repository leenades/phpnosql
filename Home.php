<html>
<title>Sociology Website</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<body class="home">
<div class="headerpath">
<a href="Home.php">HOME</a>
<a href="foundingFathers.php">Founding Fathers of Sociology</a>
<a href="viewArticles.php">View articles</a>

</div>
<div class="transbox">
<h1> Welcome to the sociology website!</h1>

<!-- <p> Insert an image</p>
<input type="file" name="files">
</br>
</br>
<button type="submit" class="submitBTN">Submit</button> 
</br>
-->
<?php

    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    
    //var_dump($mng);
    
    $listdatabases = new MongoDB\Driver\Command(["listDatabases" => 1]);
    $res = $mng->executeCommand("admin", $listdatabases);

    $query = new MongoDB\Driver\Query([]); 
    $rows = $mng->executeQuery("multimediaDB.multimediaTEXT", $query);
    foreach ($rows as $row) 
    {
        
        echo "<h4>$row->WhatisSoci</h4>";
        echo "<h1>History</h1>";
        echo "<h4>$row->history</h4>";
        echo "<h4> $row->morehist<h4>";
    }
    
?> 

</div>
<video class="vid" width="400" controls>
  <source src="soci.mp4" type="video/mp4">
</video>
</body>
</html>