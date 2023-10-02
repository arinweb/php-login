<?php

if ($_SESSION["user"]["status"] == true) {
    echo "Oturum Aktif";
}else {
    echo "Oturum Pasif";
}

?>