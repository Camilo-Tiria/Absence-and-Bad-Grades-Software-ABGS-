<?php
	session_start();
	session_unset();
	session_destroy();
	header("location:/Proyecto_SENA/ABGS/?x=3");
	?>





