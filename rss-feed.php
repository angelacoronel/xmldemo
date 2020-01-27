<?php
// Create connection
 $con=mysqli_connect("db_tracks","localhost","root");
// Check connection
 if (mysqli_connect_errno($con)) {
 echo "Database connection failed!: " . mysqli_connect_error();
 }
 
 $sql = "SELECT * FROM tbl_music ORDER BY id DESC LIMIT 20";
 $query = mysqli_query($con,$sql);
 
 header( "Content-type: text/xml");
 
 echo "<?xml version='1.0' encoding='UTF-8'?>
 <rss version='2.0'>
 <channel>
 <title>w3schools.in | RSS</title>
 <link>/</link>
 <description>Cloud RSS</description>
 <language>en-us</language>";
 
 while($row = mysqli_fetch_array($con,$query)){
   $title=$row["title"];
   $artist=$row["artist"];
   $album=$row["album"];
 
   echo "<item>
   <title>$title</title>
   <artist>$artist</artist>
   <album>$album</album>
   </item>";
 }
 echo "</channel></rss>";
?>
