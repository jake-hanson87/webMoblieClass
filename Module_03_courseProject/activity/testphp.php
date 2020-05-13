<?php
include 'config.php'
include 'mod3_opendb.php'

$sql = "SELECT bookId, title, authorName, genre, releaseDate FROM books";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "bookId: " . $row["bookId"].  "<br>";
        echo "title: " . $row["title"]. "<br>";
        echo "authorname: " . $row["authorName"]. "<br>";
        echo "genre: " . $row["genre"]. "<br>";
        echo "releaseDate: " . $row["releaseDate"]. "<br><hr>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>
