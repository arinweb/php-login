<?php
include_once("../db.php");
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["mail"]) || empty($_POST["password"])) {
        echo "{\"content\":\"Boşlukları Doldurunuz!\"}";
    }else {
        $control = $db->prepare("SELECT * FROM member WHERE mail=? and password=?");
        $control->execute([
            strip_tags($_POST["mail"]),
            md5(strip_tags($_POST["password"]))
        ]);
        if ($control->rowCount() > 0) {
            echo "{\"content\":\"Giriş Başarılı\"}";
            $_SESSION["user"]["status"] = true;
        }else {
            echo "{\"content\":\"Giriş Başarısız\"}";
        }

    }
}else {
    echo "{\"content\":\"ERROR\"}";
}
?>

