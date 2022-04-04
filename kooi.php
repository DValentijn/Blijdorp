<head>
    <link rel="stylesheet" href="style5.css" type="text/css">
    <link rel="shortcut icon" href="img/logo.png" />
    <title>Dierenpark Blijdorp | Dylano Valentijn</title>
</head>


<?php

include('connect.php');

// Query maken om alle rijen uit de tabel taak op te halen
$query = $pdo->query("SELECT * FROM `kooi` ORDER BY `kooi`.`knaam` ASC");

?>
<style>
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>
<!-- Tabel aanmaken in HTML -->
<table>
    <tr>
        <th>Id</th>
        <th>Naam</th>
    </tr>

    <!-- While loop die door alle opgehaalde rijen van de tabel taak gaat -->
    <?php while ($row = $query->fetch()) { ?>

    <!-- Alle data van de opgehaalde rij in table row stoppen -->
    <?php echo '<tr>' ?>
        <td><?php echo $row['kid']; ?></td>
        <td><?php echo $row['knaam']; ?></td>

    <?php echo '</tr>' ?>

    <?php } ?>
</table>

<?php 
require("connect.php")
?>



<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style5.css" type="text/css">
    <link rel="shortcut icon" href="img/logo.png" />
    <title>Dierenpark Blijdorp | Dylano Valentijn</title>

    <div class="form">
    <form method="post">
    <h2 for="soort">Zoek functie</h2>

    <?php 
            $data = $pdo->query("SELECT `knaam` FROM `kooi`")->fetchAll(PDO::FETCH_OBJ);
        ?>


    <select name="txtsearch" id="kooi">
            <?php foreach($data as $d): ?>
             <option value="<?= $d->knaam; ?>"><?= $d->knaam; ?></option>
                  <?php endforeach; ?>
            </select>

    <h2> <input type="submit", name="search">  </h2>
</form>

</head>
<body>

<style>
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>

<?php 

    $query = "SELECT * FROM dieren";

    if(isset($_POST['search'])){
        $search = $_POST['txtsearch'];
        $query = "SELECT * FROM dieren WHERE naam Like '%$search%' OR kooi LIKE '%$search%'";
    }

    $stm = $pdo->prepare($query);
    if ($stm-> execute()){
        $result = $stm->fetchAll(PDO::FETCH_OBJ);
        foreach ($result as $row){ ?>
        <table>

        <tr>
        <th>Id</th>
        <th>Soort</th>
        <th>Naam</th>
        <th>Gedrag</th>
        <th>Kooi</th>
    </tr>

            <?php echo '<tr>'?>
            <td><?php echo $row->did; ?></td>
            <td><?php echo $row->soort; ?></td>
            <td><?php echo $row->naam; ?></td>
            <td></n><?php echo $row->gedrag; ?></td>
            <td></n><?php echo $row->kooi; ?></td>
    
        <?php echo '</tr>' ?>

<?php } 
} ?>

        </table>
    </div>

</div>
</body>


