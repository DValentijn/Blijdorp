<?php

include('connect.php');

// Query maken om alle rijen uit de tabel taak op te halen
$query = $pdo->query("SELECT * FROM `dieren` ORDER BY `dier`.`naam` ASC");

?>
<style>
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}</style>
<!-- Tabel aanmaken in HTML -->
<table>
    <tr>
        <th>Naam</th>
        <th>Datum</th>
        <th>Aantal</th>
        <th>Datum van aanmaak</th>
    </tr>

    <!-- While loop die door alle opgehaalde rijen van de tabel taak gaat -->
    <?php while ($row = $query->fetch()) { ?>

    <!-- Alle data van de opgehaalde rij in table row stoppen -->
    <?php echo '<tr>' ?>
        <td><?php echo $row['naam']; ?></td>
        <td><?php echo $row['datum']; ?></td>
        <td><?php echo $row['people']; ?></td>
        <td></n><?php echo $row['datumaanmaak']; ?></td>

    <?php echo '</tr>' ?>

    <?php } ?>
</table>