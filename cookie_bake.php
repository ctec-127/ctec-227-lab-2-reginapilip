<?php //cookie_bake.php
setcookie("username", "BettyW", time() + 7200);
setcookie("firstname", "Betty", time() + 7200);
setcookie("lastname", "White", time() + 7200);

// array cookie
setcookie("cookie[institution]", "Clark",  time() + 7200);
setcookie("cookie[city]", "Vancouver", time() + 7200);
setcookie("cookie[state]", "WA", time() + 7200);

echo "<h1>Cookies have been set!</h1>";
?>