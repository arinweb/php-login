<?php
include_once("../db.php");
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"]) || empty($_POST["mail"]) || empty($_POST["password"])) {
        echo "{\"content\":\"Boşlukları Doldurunuz!\"}";
    }else {
        $insert = $db->prepare("INSERT INTO member (name,mail,password) VALUES (?,?,?)");
        $insert->execute([strip_tags($_POST["name"]),strip_tags($_POST["mail"]),md5(strip_tags($_POST["password"]))]);
        if ($insert->rowCount() > 0) {
            echo "{\"content\":\"Kaydınız Başarılı\"}";
            $_SESSION["user"]["status"] = true;
        }else {
            echo "{\"content\":\"Kaydınız Başarısız\"}";
        }

    }
}else {
    echo "{\"content\":\"ERROR\"}";
}
?>

