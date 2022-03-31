<?php require_once "connect.php"; ?>


<html>
    
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="shortcut icon" href="img/logo.png" />
    <title>Dierenpark Blijdorp | Dylano Valentijn</title>
</head>
<body>


<div class="logoandmaker">
    <div class='logo'>
        <img src="https://portofbusiness.nl/wp-content/uploads/2020/01/1920_bd-5-rgb-breed-rotterdam-zoo.png
    " name="logo" style="width:500px;height:250px;"/>
    </div>

    <div class='maker'>
            <a href="https://www.linkedin.com/in/dylano-valentijn-265b36208/" target="_blank">
                <img src="img/maker.png" style="width: 250px;margin-top: -280px;" alt="Naar de linkedIn van de maker.">
</a>
        </div>
</div>

<div class="backgroundimg1">
</div>

</body>


<div class="form">
    <form method="post">
    <h2 for="soort">Wat voor soort dier is het?</h2>
            <select name="soort" id="soort">
            <option value="" selected>--- Kies uw soort ---</option>
            <option value="zoogdier">Zoogdier</option>
            <option value="reptiel">Reptiel</option>
            <option value="vis">Vis</option>
            <option value="amfibien">Amfibien</option>
            <option value="vogel">Vogel</option>
            </select>

        <h2>Naam van het dier?</h2> <INPUT TYPE="text" name='naam'>

        <h2>Wat voor gedrag heeft het dier?</h2> <INPUT name='gedrag' rows="2" cols="30"/>

        <?php 
            $data = $pdo->query("SELECT `knaam` FROM `kooi`")->fetchAll(PDO::FETCH_OBJ);
        ?>

        <h2 for="kooi">Welk verblijf?</h2>
        <select name="kooi" id="kooi">
            <?php foreach($data as $d): ?>
             <option value="<?= $d->knaam; ?>"><?= $d->knaam; ?></option>
                  <?php endforeach; ?>
            </select>
           
        <h2> <input type="submit", name="btcSave">  </h2>
        </form>


<?php 





if (isset($_POST["btcSave"])) {
    include('connect.php');


    $soort = $_POST["soort"];
    $naam = $_POST["naam"];
    $gedrag = $_POST["gedrag"];
    $kooi = $_POST["kooi"];

    $query = "INSERT INTO dieren (soort, naam, gedrag, kooi) VALUES" . "('$soort', '$naam', '$gedrag', '$kooi')";

    $stm = $pdo->prepare($query);

    if ($stm->execute()) {

    } else {
        echo "Dit dier is niet toegevoegd!";
    }
}
?>







</html>

