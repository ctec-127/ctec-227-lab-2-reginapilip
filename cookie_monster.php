<?php 
setcookie("username", "BettyW", time() - 1);
setcookie("firstname", "Betty", time() - 1);
setcookie("lastname", "White", time() - 1);

// array cookie
setcookie("cookie[institution]", "Clark",  time() - 7200);
setcookie("cookie[city]", "Vancouver", time() - 7200);
setcookie("cookie[state]", "WA", time() - 7200);

echo "<h1>Cookies have been destroyed.</h1>";
?>