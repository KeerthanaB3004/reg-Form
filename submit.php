<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="output-container">
        <h2>Registration Details</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Safely retrieving and displaying the form data
            $country = htmlspecialchars($_POST['country'] ?? 'Not provided');
            $state = htmlspecialchars($_POST['state'] ?? 'Not provided');
            
            echo "<p><strong>First Name:</strong> " . htmlspecialchars($_POST['firstName']) . "</p>";
            echo "<p><strong>Last Name:</strong> " . htmlspecialchars($_POST['lastName']) . "</p>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
            echo "<p><strong>Phone:</strong> " . htmlspecialchars($_POST['phone']) . "</p>";
            echo "<p><strong>Date of Birth:</strong> " . htmlspecialchars($_POST['dob'] ?? 'Not provided') . "</p>";
            echo "<p><strong>Gender:</strong> " . htmlspecialchars($_POST['gender'] ?? 'Not provided') . "</p>";
            echo "<p><strong>Education:</strong> " . htmlspecialchars($_POST['education'] ?? 'Not provided') . "</p>";
            echo "<p><strong>Country:</strong> " . $country . "</p>";
            echo "<p><strong>State:</strong> " . $state . "</p>";
            //echo "<p><strong>Password:</strong> [Hidden]</p>";
            echo "<p><strong>Password:</strong> " . htmlspecialchars($_POST['password']) . "</p>";

        } else {
            echo "<p>Invalid form submission.</p>";
        }
        ?>
        <a href="index.html" class="back-link">Go Back to Form</a>
    </div>
</body>
</html>
