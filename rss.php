<?php 
    $conn = mysqli_connect("localhost", "root", "") or die (mysqli_error($conn));
    $db = mysqli_select_db($conn, "db_tracks");

    if(mysqli_connect_errno($conn)){
        echo "Database connection failed!: ". mysqli_connect_errno();
    }
    $sql = "SELECT * FROM tbl_music ORDER BY mus_id DESC LIMIT 20";
    $q = mysqli_query($conn, $sql);

    header("Content-type: text/xml");

    echo "<?xml version='1.0' encoding='UTF-8'?>
        <rss version='2.0'><channel>";
    
    while($r = mysqli_fetch_array($q)){

        $title = $r['title'];
        $genre = $r['genre'];
        $artist = $r['artist'];
        $album = $r['album'];

        echo "<track>
        <title>$title</title>
        <genre>$genre</genre>
        <artist>$artist</artist>
        <album>$album</album>
        </track>";
    }
    echo "</channel></rss>";
?>



