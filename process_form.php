<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Now you can use this data for whatever purpose you need (e.g., sending emails, saving to a database).
    // You can add additional validation and sanitization to the data as needed.
    
    // Example: Sending an email
    $to = "ambushonTop@gmail.com";
    $subject = "Ambush Contact - Website";
    $emailBody = "Name: $name\nEmail: $email\nMessage: $message";
    
    mail($to, $subject, $emailBody);
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data here

    // Redirect user back to homepage
    header("Location: https://ambushmgaming.com/ ");
    exit; // Important: Ensure script execution stops after redirect
}
?>

