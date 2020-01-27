<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("rss-feed.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $artist = $data->getElementsByTagName("link")->item(0)->nodeValue;
  
   echo "<li>$title
            <ul>
                <li>$artist</li>
            </ul>
        </li>";
 }
?>
</ul>
