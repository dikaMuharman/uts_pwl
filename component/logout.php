<?php
session_start();
session_unset("member");
session_destroy();
header("Location: http://localhost/tugas-uts/index.php");
