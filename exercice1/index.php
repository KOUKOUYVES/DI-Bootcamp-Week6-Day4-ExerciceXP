<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<br><br>
<h1 style="text-align: center;">ExerciceXP 1 Display The Cars</h1>

<div class="container">

        <?php
            $cars = array("Dastun", "Honda","BMW "); 
            echo "Les differentes de marque de voitures sont : <br><br> ", $cars[0] . " " . $cars[1] . " " . $cars[2]."<br> <br>";
            echo "Les differentes de marque de voitures après arrangement sont : <br><br>" ."<b>" . $cars[2] ."</b>". "<br> " . $cars[0] . "<br>" . $cars[1];
        ?>
</div>

</body>
</html>