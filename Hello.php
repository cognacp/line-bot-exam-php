<?php
//echo "Hello World สวัสดีชาวโลก"."<br>";
define("CONSTANT", "Hello world.");
echo "define("CONSTANT", "Hello world.")"."<br>";
echo CONSTANT."<br>"; // outputs "Hello world."
//echo "Constant."<br>"; // outputs "Constant" and issues a notice.";
echo Constant."<br>"; // outputs "Constant" and issues a notice.
define("GREETING", "Hello you.", true);
//echo "define("GREETING", "Hello you.", true);";
echo GREETING."<br>"; // outputs "Hello you."
echo Greeting."<br>"; // outputs "Hello you."
?>
