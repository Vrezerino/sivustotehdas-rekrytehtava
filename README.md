# Tehtävä ja vastauksia

1. Ohjelmakoodi (https://github.com/sivustotehdas/rekrytehtava/blob/main/ThisWeekBlock.php) tuottaa Drupal-lohkon (Blockin), joita käytetään tyypillisesti sivun osien (kuten valikot, kielivalinta yms.) rakentamiseen. Mitä kyseisellä lohkolla rakennetaan, mihin tarkoitukseen se on tehty?

   — Lohko tuottaa slideshown (carousel) joka sisältää esityksiä, tapahtumia ja kursseja seuraavan viikon ajalta.

2. Miksi metodissa ThisWeekBlock::build() lisätään cache tag "sivustotehdas:weekly"?

   — Jos wrapperin viikkosisältö muuttuu, sen välimuisti vanhentuu ja wrapper päivittyy.

3. Miksi metodissa ThisWeekBlock::build() lisätään cache tag "node:".$node->id()?
   — Yksittäisillekin nodeille annetaan tagi, koska yhden muuttuessa (poistuessa tai päivittyessä) sen näkymä päivittyy.

Koko viikkonäkymän välimuistia ei tarvitse vanhentaa.

4. Mikä syntaksivirhe metodissa ThisWeekBlock::getFieldIlmoittautuminenPaattyyNodes() on?

   — Rivi 199: $this->$database pitäisi olla $this->database

5. Mikä logiikkavirhe metodissa ThisWeekBlock::getFieldIlmoittautuminenPaattyyNodes() on?

   — Rivi 226: if (empty($entity_ids)). Tarvitsee negaation, ettei alemmalla rivillä kutsuttu loadMultiple saa tyhjää taulukkoa.