<?php
if (mail("youremail@example.com", "Test Mail", "This is a test email from PHP mail().")) {
    echo "✅ Mail function is working!";
} else {
    echo "❌ PHP mail() failed on this server.";
}
?>
