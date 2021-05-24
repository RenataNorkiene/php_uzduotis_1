<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Duomenu lentele</title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Mokiniai</h2>
        <table>
            <tr>
                <th>Klase</th>
                <th>Kodas</th>
                <th>Vardas</th>
                <th>Pavarde</th>
                <th>Kontroliniu darbu vidurkis</th>
                <th>Duomenu formavimo data</th>
            </tr>
        <?php
        foreach($students as $klase => $klasesInfo) {
            foreach ($klasesInfo as $student) {
                $baluSuma = 0;
                $baluKiekis = 0;
                foreach ($student['pazymiai'] as $dalykas => $balas) {
                    $baluSuma += $balas;
                    $baluKiekis++;
                }
                if ($baluKiekis > 0) {
                    $vidurkis = round($baluSuma / $baluKiekis, 1);
                } else {
                    $vidurkis = "-";
                }
                echo "<tr>";
                echo "<td>". $klase ."</td>";
                echo "<td>". $student["kodas"] ."</td>";
                echo "<td>". $student["vardas"] ."</td>";
                echo "<td>". $student["pavarde"] ."</td>";
                echo "<td>". $vidurkis ."</td>";
                echo "<td>". $student["data"] ."</td>";
                echo "</tr>";
            }
        }
        ?>
        </table>
    </div>
</body>
</html>