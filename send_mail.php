‏```php
‏<?php
‏if ($_SERVER["REQUEST_METHOD"] == "POST") {
‏    $email = $_POST['email'];

    // إعداد البريد الإلكتروني
‏    $to = "apra4844@gmail.com"; // استبدل هذا بعنوان بريدك الإلكتروني
‏    $subject = "رسالة جديدة من الموقع";
‏    $message = "تم استلام بريد إلكتروني من: " . $email;
‏    $headers = "From: noreply@yourdomain.com";

    // إرسال البريد الإلكتروني
‏    if (mail($to, $subject, $message, $headers)) {
‏        echo "تم إرسال البريد الإلكتروني بنجاح.";
‏    } else {
‏        echo "فشل في إرسال البريد الإلكتروني.";
    }
}
?>
```