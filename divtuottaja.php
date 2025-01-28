<?php

class DivTuottaja
{
    private $divMaara;

    public function __construct($divMaara)
    {
        $this->divMaara = max(1, intval($divMaara));
    }

    /**
     * Tuota sisäkkäisiä divejä rekursiivisesti
     * 
     * @param int $count Jäljellä oleva määrä tuotettavana
     * @param int $level Divin taso
     * @return string Divejä merkkijonona
     */
    public function tuotaDiveja($count = null, $level = 0)
    {
        // Jos ei erikseen annettu, määrä on aina vähintään 1
        if ($count === null) $count = $this->divMaara;

        if ($count <= 0) return '';

        // Joka toisen divin reunat ovat punaiset, muutoin siniset
        $borderColor = $level % 2 === 0 ? 'red' : 'blue';

        // Tyylittele div
        $style = "border: 2px solid $borderColor; margin: 10px; padding: 10px;";

        return "<div style=\"$style\">Level $level" . $this->tuotaDiveja($count - 1, $level + 1) . "</div>";
    }
}

// Syötetty lukumäärä GET parametristä
$divMaara = isset($_GET['num']) ? $_GET['num'] : 1;

// Luo tuottajaolio
$generator = new DivTuottaja($divMaara);

// Generoi html
$htmlOutput = $generator->tuotaDiveja();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sisäkkäiset divit</title>
</head>

<body>
    <?= $htmlOutput ?>
</body>

</html>