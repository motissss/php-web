<?php
$email = $_POST['email'] ?? '';
$vards = $_POST['vards'] ?? '';
$atsauksme = $_POST['atsauksme'] ?? '';
$info_epasts = isset($_POST['info_epasts']) ? 'Jā' : 'Nē';

$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$vards = htmlspecialchars($vards, ENT_QUOTES, 'UTF-8');
$atsauksme = nl2br(htmlspecialchars($atsauksme, ENT_QUOTES, 'UTF-8'));
?>
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Forma iesniegta</title>
</head>
<body>
    <h1>Paldies par atsauksmi!</h1>
    <p><strong>E-pasts:</strong> <?php echo $email; ?></p>
    <p><strong>Vārds:</strong> <?php echo $vards; ?></p>
    <p><strong>Atsauksme:</strong><br> <?php echo $atsauksme; ?></p>
    <p><strong>Vēlas saņemt info e-pastu:</strong> <?php echo $info_epasts; ?></p>
</body>
</html>
