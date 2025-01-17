<?php
// message.php

// Include the database connection file
include('db.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $userName = $_POST["user"];
    $emailId = $_POST["emailid"];
    $comment = $_POST["comment"];

    // Validate and sanitize the input data (you should customize this based on your requirements)
    $userName = htmlspecialchars($userName);
    $emailId = filter_var($emailId, FILTER_SANITIZE_EMAIL);
    $comment = htmlspecialchars($comment);

    // Insert data into the database
    $sql = "INSERT INTO UserData (Name, Email, Message) VALUES ('$userName', '$emailId', '$comment')";

    if ($conn->query($sql) === TRUE) {
        // Display success message
        echo '<h1 style="margin:10px 35%;text-align: center;border:2px solid black;color:green;padding:6px;font-size: 20px;font-family: Verdana, Geneva, Tahoma, sans-serif;border-radius: 10px;">Message sent successfully!</h1>';
    } else {
        // Display error message
        echo '<h1>Error: ' . $sql . '<br>' . $conn->error . '</h1>';
    }
    
    // Close the database connection
    $conn->close();
}
?>
<script>
    setTimeout(function(){
		window.location = 'Contact-Us';
	},1700);
    
</script>

