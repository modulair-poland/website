<?php
require_once("dbutils.php");
$q = $_REQUEST["q"];
$cokolwiek=explode(',', $q);
$result = easyQuery("SELECT * FROM blog WHERE updateType IN ( ".implode(",",str_split(str_repeat("?", count($cokolwiek))))." ) ORDER BY post_date DESC, id DESC", str_repeat("s", count($cokolwiek)), ...$cokolwiek);
while($row = $result->fetch_assoc() )
        {
          echo "<div class=\"panel panel-tiny-icon\">";
          echo "<div class=\"text\">";
          echo "<h4>".$row['title']."</h4>";
          echo $row['shortDescription'];
          echo "</div>";
          echo "<div class=\"icon\">";
          echo "<img class=\"".$row['updateType']."\" alt=\"".$row["updateType"]."\">";
          echo "</div>";
          echo "<div class=\"date\">";
          echo date("d.m.Y", strtotime($row['post_date']));
          echo "</div> </div>";
        }
?>
