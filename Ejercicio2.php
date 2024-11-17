<?php
$nota = rand(1,10);
if ($nota >= 0 && $nota <= 5) {
	echo"Tu nota es un insuficiente";
} elseif ($nota >= 6 && $nota <= 8) {
	echo"Tienes un notable";
} elseif ($nota >= 9 && $nota <= 10) {
	echo "Tienes un sobresaliente";
};