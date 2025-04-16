<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $number = htmlspecialchars(trim($_POST['number']));
    $email = htmlspecialchars(trim($_POST['email']));
    $loanamount = htmlspecialchars(trim($_POST['loanamount']));
    $loantype = htmlspecialchars(trim($_POST['loantype']));  
    $message = htmlspecialchars(trim($_POST['message']));
    
    $to = "Moneyunlimited2727@gmail.com";
    $subject = "Your Mall Contact Us Form";
    
    $email_body = "You have received a new message:\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Number: $number\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Loan Amount: $loanamount\n";
    $email_body .= "Loan Type: $loantype\n";
    $email_body .= "Message: $message\n";

    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";
    
    if (mail($to, $subject, $email_body, $headers)) {
        header("Location: thank_you.php");
        exit();
    } else {
        echo "There was an error sending your message. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
