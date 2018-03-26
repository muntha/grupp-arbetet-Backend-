<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body class="container">
    <h1>Info om produkterna</h1>

<?php
// Steg 1: Hämta data (JSON)
$data = file_get_contents(
    "http://localhost:8888/Inlammingsuppgift2/api/products/");
// echo $data;
// Steg 2: JSON -> PHP-Array
$array = json_decode($data , true);
?>
<table class="table">
    <tr>
        <th>Titel</th> 
        <th>Beskrivning</th> 
        <th>Bild</th> 
        <th>Pris</th>
    </tr>
    <?php foreach($array as $key=>$value){ ?>
    <tr>
        <td><?php echo $value['titel']?></td>
        <td><?php echo $value['beskrivning']?></td>
        <td><img src="http://localhost:8888/Inlammingsuppgift2/Images/<?php echo $value['bild']?>"alt='Bild på destination'></td>
        <td><?php echo $value['pris']?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>