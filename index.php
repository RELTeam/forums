<?php
session_start();
echo "©️ 2023 Gunful LLC. All rights reserved. <br> <br>";
echo "ReToilet Networking<br> <br>";
echo "Broadcast: ReToilet Forums is now live on ToiletOS! <br> <br>";

?>
<link rel="stylesheet" href="style.css">
<a href="/recent.php">Index of topics</a> <br>
<?php if (isset($_SESSION['LOGGED_IN'])): ?> 
<a href="/new_topic.php">New topic</a> <br>
<a href="/signout.php">Log out</a>
<?php else: ?>
<a href="/login.php">Login</a> <br>
<a href="/signup.php">Sign up</a>
<?php endif ?>