<?php
// Get the form data
$name = $_POST['name'];
$pnum = $_POST['pnum'];
$ward = $_POST['ward'];
$age = $_POST['age'];
$category = $_POST['category'];
$suggestions = $_POST['suggestions'];

// Connect to the database
$host = "localhost"; // Database host
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "basavanagudi"; // Database name

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert the form data into the database
$sql = "INSERT INTO suggestions (name, pnum, ward, age, category, suggestions)
        VALUES ('$name', '$pnum', '$ward', '$age', '$category', '$suggestions')";

if (mysqli_query($conn, $sql)) {











    ?>

<script>
    alert("thank you for your suggestions")
    window.location.href ="https://www.youtube.com/watch?v=KHiu36zSBD4&t=151s"
</script>




<?php
} else {
    echo "Error inserting record: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
