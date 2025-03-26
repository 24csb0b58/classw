<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstname = $_POST['firstname'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $age = $_POST['age'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $education = $_POST['education'] ?? '';
    $email = $_POST['email'] ?? '';
    $state = $_POST['state'] ?? '';
    $country = $_POST['country'] ?? '';
    $institute = $_POST['institute'] ?? '';

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    echo "<h2>Registration Details</h2>";
    echo "<p><strong>First Name:</strong> $firstname</p>";
    echo "<p><strong>Last Name:</strong> $lastname</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Education Qualification:</strong> $education</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>State:</strong> $state</p>";
    echo "<p><strong>Country:</strong> $country</p>";
    echo "<p><strong>Institute Type:</strong> $institute</p>";
} else {
    echo "<h2>Invalid Request</h2>";
}
?>
