<?php 
$people = array(
    ["name"=>"Andris",
    "email" => "Andris@gmail.com",
    "Languges" => "C++"
],
    ["name"=>"Kristers",
    "email" => "Kristers@gmail.com",
    "Languges" => "Php"
],
    [
    "name"=>"Pēteris",
    "email" => "Pjord@gmail.com",
    "Languges" => "C#"
    ]
)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Saraksts ar personām:<h1>
    <ul>
        <?php foreach ($people as $person): ?>
            <li>
                <strong>Vārds:</strong> <?= htmlspecialchars($person['name']) ?><br>
                <strong>E-pasts:</strong> <?= htmlspecialchars($person['email']) ?><br>
                <strong>Valoda:</strong> <?= htmlspecialchars($person['Languges']) ?>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>