<?php
//aby wypisac niektore znaki stosujemy tzw. znaki modyfikacji, ucieczki
echo 'Arnold pedzioł kiesik "Jo wrócym"<br>';
echo 'You deleted C:\\Windaws\\System32<br>';
echo "To sie nie uozszerzy: \n nowa linijko \n";
$Number=5;
//zmienne w stringach zapisane w "" są interpretowane
echo "Zmienna = $Number";
echo <<<END
        a
      b
    c
\n
END;
echo <<<END
        a
       b
      c
      END;
?>