<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $to = "charlesotwari12@gmail.com"; // Replace with the recipient's email address
    $subject = "New Contact Form Submission from $name";
    $headers = "From: $email";

    // Send email
    mail($to, $subject, $message, $headers);

    // Redirect back to the form after submission
    header("Location: index.html");
    exit;
}
?> -->
