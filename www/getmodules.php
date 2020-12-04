<?php
require_once("dbutils.php");
$q = $_REQUEST["q"];
$result = easyQuery("SELECT * FROM modules WHERE moduleName LIKE ? OR shortDescription LIKE ?", "ss", "%".$q."%", "%".$q."%");
while($row = $result->fetch_assoc())
{
    
    echo "<div class=\"panel panel-list\">";
    echo "<div class=\"text\">";
    echo "<h3>".$row['moduleName']."</h3>";
    echo $row['shortDescription'];
    echo "</div>";
    echo "<div class=\"image\">";
    echo "<img src=\"images/modules".$row['image'].".png\" alt=\"module image\">";
    echo "</div>";
    echo "<div class=\"tags\">";
    echo "tags:";
    $tags = explode(",", $row['tags']);
    for($i = 0; $i < count($tags); $i++)
    {
        echo " ".$tags[$i];
    }
    echo "</div>";
    echo "<div class=\"price\">";
    echo "expected price: ".$row["price"]."€";
    echo "</div> </div>"; 
  
}
?>