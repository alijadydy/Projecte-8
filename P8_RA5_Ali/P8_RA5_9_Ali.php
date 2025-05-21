<?php
// Exercici 9: Nota mitjana
$notes = [6, 7, 8, 5, 9];
$mitjana = array_sum($notes) / count($notes);
echo "Nota mitjana: $mitjana<br>";
if ($mitjana >= 5) {
    echo "Estàs aprovat.";
} else {
    echo "Estàs suspès.";
}
?>