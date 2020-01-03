<html>
<title>Sociology Website</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<body class="viewarticles">
<div class="headerpath">
<a href="Home.php">HOME</a>
<a href="foundingFathers.php">Founding Fathers of Sociology</a>
<a href="viewArticles.php">View articles</a>
</div>

<form method="POST">
<textarea rows=20 cols=100 name="articletext" placeholder="Enter here.."></textarea>
<input  class="btn" name="enter" type="submit" value="Add Article">
</form>
<?php
if(isset($_POST['enter']))
{
$bulk = new MongoDB\Driver\BulkWrite;
$article = $_POST['articletext'];

$insertart = [
    '_id' => new MongoDB\BSON\ObjectID,
    'articletext' => $article
];
try {
    $bulk->insert($insertart);

    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

    $result = $manager->executeBulkWrite("Sociology.articles",$bulk);
} catch (MongoDB\Driver\Exception $e) {
    die("Error Encountered ".$e);
} 
} 
?>
</body>
</html>