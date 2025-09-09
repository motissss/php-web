<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>yarr</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <link rel="icon" href="favicon.png" />
  </head>

  <body>
    <form action="form-submitted.php" method="post">
      <label for="email">E-pasts:</label><br />
      <input type="email" id="email" name="email" required /><br /><br />

      <label for="vards">Vārds:</label><br />
      <input type="text" id="vards" name="vards" required /><br /><br />

      <label for="atsauksme">Atsauksme:</label><br />
      <textarea
        id="atsauksme"
        name="atsauksme"
        rows="5"
        cols="40"
        required
      ></textarea
      ><br /><br />

      <input type="checkbox" id="info_epasts" name="info_epasts" value="jā" />
      <label for="info_epasts">Vai vēlies saņemt info e-pastu?</label
      ><br /><br />

      <input type="submit" value="Iesniegt" />
    </form>
  </body>
</html>