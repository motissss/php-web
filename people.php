<?php
class Person {
    public $name;
    public $email;
    public $language;
    
    public function __construct($name, $email, $language) {
        $this->name = $name;
        $this->email = $email;
        $this->language = $language;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_language() {
        return $this->language;
    }
}
$people = [
    new Person("Andris", "andris@gmail.com", "PHP"),
    new Person("Kristers", "kristers@gmail.com", "JavaScript"),
    new Person("Pēteris", "peteris@gmail.com", "Python")
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Saraksts ar personām</title>
</head>
<body>
    <h1>Saraksts ar personām:</h1>
    <ul>
        <?php foreach ($people as $person): ?>
            <li>
                <strong>Vārds:</strong> <?= htmlspecialchars($person->get_name()) ?><br>
                <strong>E-pasts:</strong> <?= htmlspecialchars($person->get_email()) ?><br>
                <strong>Valoda:</strong> <?= htmlspecialchars($person->get_language()) ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
