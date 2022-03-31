

## <?php

$query = $pdo->query("SELECT `did`, `soort`, `naam`, `gedrag`, `kooi` FROM `dieren` WHERE ( naam LIKE '%$naam%' OR kooi LIKE '%$kooi%' ));

?>