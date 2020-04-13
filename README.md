Junat taulukossa
================

Miksi?
------
VR kerää hyvää reaaliaikaista aikatauludataa junistaan, mutta ainoa virallinen käyttöliittymä tähän on raskas Flash-palvelu ["Junat Kartalla"](http://www.vr.fi/fi/index/aikataulut/junatkartalla.html). Vaihtoehtona olisi myös ["Junien Kulkutiedot"](http://www.vr.fi/fi/index/aikataulut/liikennetilanne/junienkulkutiedot.html.stx) palvelu, mutta tämä sisältää vain tiettyjen asemien aikataulutiedot.


Miten?
------
VR tarjoaa aikataulutiedot julkisen [rajapinnan kautta](http://www.apps4finland.fi/fi/data/junat-kartalla-palvelun-rajapinta/) jota tämä JavaScript-ohjelma lukee ja näyttää. Eli tässä ei käytetä mitään muuta kuin yhtä HTML-tiedostoa joka sisältää hieman JavaScript-koodia ja CSS-tyylitystä.

Missä?
------
Käyttöliittymä on käytettävissä osoitteessa [https://aeirola.github.io/junat-taulukossa/junat.html](https://aeirola.github.io/junat-taulukossa/junat.html). Sivu ottaa kaksi URL-parametria "syote" ja "laji" joiden avulla voi bookmarkata tietyn aseman/junan ja junalajin. Eli esimerkiksi [https://aeirola.github.io/junat-taulukossa/junat.html?syote=PSL&laji=2](https://aeirola.github.io/junat-taulukossa/junat.html?syote=PSL&laji=2). Asemien koodit ei valitettavasti esillä, joten niitä pitää joko keksiä tai löytää sopivan junan kautta.
