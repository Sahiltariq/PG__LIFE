<?php
// Connect to the database
$conn = mysqli_connect("127.0.0.1", "root", "", "pglife");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Call the stored procedure to increase like count
$sql = "CALL IncreaseLikeCount()";
if (mysqli_query($conn, $sql)) {
    echo "Like count increased successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
