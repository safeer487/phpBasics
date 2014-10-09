<?php
/**
 * Ver todas las sessions activas.
 */

session_start();

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>