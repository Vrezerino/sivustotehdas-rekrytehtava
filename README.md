# Tehtävä ja vastauksia

<h4>1. Ohjelmakoodi (https://github.com/sivustotehdas/rekrytehtava/blob/main/ThisWeekBlock.php) tuottaa Drupal-lohkon (Blockin), joita käytetään tyypillisesti sivun osien (kuten valikot, kielivalinta yms.) rakentamiseen. Mitä kyseisellä lohkolla rakennetaan, mihin tarkoitukseen se on tehty?</h4>

   — Lohko tuottaa slideshown (carousel) joka sisältää esityksiä, tapahtumia ja kursseja seuraavan viikon ajalta.

<h4>2. Miksi metodissa ThisWeekBlock::build() lisätään cache tag "sivustotehdas:weekly"?</h4>

   — Jos wrapperin viikkosisältö muuttuu, sen välimuisti vanhentuu ja wrapper päivittyy.

<h4>3. Miksi metodissa ThisWeekBlock::build() lisätään cache tag "node:".$node->id()?</h4>

   — Yksittäisillekin nodeille annetaan tagi, koska yhden muuttuessa (poistuessa tai päivittyessä) sen näkymä päivittyy. Koko viikkonäkymän välimuistia ei tarvitse vanhentaa.

<h4>4. Mikä syntaksivirhe metodissa ThisWeekBlock::getFieldIlmoittautuminenPaattyyNodes() on?</h4>

   — Rivi 199: $this->$database pitäisi olla $this->database

<h4>5. Mikä logiikkavirhe metodissa ThisWeekBlock::getFieldIlmoittautuminenPaattyyNodes() on?</h4>

   — Rivi 226: if (empty($entity_ids)). Tarvitsee negaation, ettei alemmalla rivillä kutsuttu loadMultiple saa tyhjää taulukkoa.