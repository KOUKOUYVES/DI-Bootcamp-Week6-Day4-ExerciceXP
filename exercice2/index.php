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
<h1 style="text-align: center;">ExerciceXP 2 Calculate Area Of Rectangle</h1>

<div class="container">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer un nombre</label>
                <input type="text" name="str[]" value="<?php echo $fruits[$key];?>" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Delete</button>
        </form><br>

        <?php
                $fruits = array("Janvier <br>", "Fevrier <br>", "Mars <br>", "Avril <br>", "Mai <br>", "Juin <br>", "Juillet <br>", "Août <br>", "Septembre <br>", "Octobre <br>", "Novembre <br>", "Décembre <br>");
                    foreach($fruits as $key  => $fruit):
                        echo $key.'-'.$fruit."<br>";
                    endforeach;
                    if (isset($_POST['submit'])) {
                        $input = $_POST["str"];
                        unset($fruits[$key]);
                        }

        // $langages = array("p"=>"PHP", "j"=>"Java", "a"=>"Ada", "h"=>"HTML");
        // unset($langages["j"]);
        // print_r($langages); 
        ?>
</div>

</body>
</html>