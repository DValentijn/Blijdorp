<head>
    <link rel="stylesheet" href="style5.css" type="text/css">
    <link rel="shortcut icon" href="img/logo.png" />
    <title>Dierenpark Blijdorp | Dylano Valentijn</title>
</head>


<?php

include('connect.php');

// Query maken om alle rijen uit de tabel taak op te halen
$query = $pdo->query("SELECT * FROM `dieren` ORDER BY `dieren`.`naam` ASC");

?>
<style>
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
table {
    margin-left: 35%;
}</style>
<!-- Tabel aanmaken in HTML -->
<table>
    <tr>
        <th>Id</th>
        <th>Soort</th>
        <th>Naam</th>
        <th>Gedrag</th>
        <th>Kooi</th>
    </tr>

    <!-- While loop die door alle opgehaalde rijen van de tabel taak gaat -->
    <?php while ($row = $query->fetch()) { ?>

    <!-- Alle data van de opgehaalde rij in table row stoppen -->
    <?php echo '<tr>' ?>
        <td><?php echo $row['did']; ?></td>
        <td><?php echo $row['soort']; ?></td>
        <td><?php echo $row['naam']; ?></td>
        <td></n><?php echo $row['gedrag']; ?></td>
        <td></n><?php echo $row['kooi']; ?></td>

    <?php echo '</tr>' ?>

    <?php } ?>
</table>



