<?php

setcookie("username", null, time() - 60);
setcookie("nama", null, time() - 60);

header("Location: index.php");
