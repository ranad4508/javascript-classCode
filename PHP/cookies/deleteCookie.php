<?php
setcookie("name", "Dinesh", time()-86400,"/", "", 0);

echo "Cookie user is deleted. ".$_COOKIE['name'];
?>