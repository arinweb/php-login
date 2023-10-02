    <form id="signin-form">
        <div class="mail-box">
            <label for="name">Ad - Soyad</label>
            <input type="name" id="name" name="name">
        </div>

        <div class="name-box">
            <label for="mail">E-Posta</label>
            <input type="mail" id="mail" name="mail">
        </div>

        <div class="password-box">
            <label for="password">Şifre</label>
            <input type="password" id="password" name="password">
        </div>

        <div class="submit-box">
            <button type="submit" id="submit">
                Kaydol
            </button>
        </div>
    </form>
    <a href="index.php?p=signup">Giriş Yap</a>


    <script>
        let form = document.getElementById("signin-form");
        let submitBtn = document.getElementById("submit");

        form.addEventListener("submit", async (e) => {

            e.preventDefault();
            let formData = new FormData();
            formData.append("name", document.getElementById("name").value);
            formData.append("mail", document.getElementById("mail").value);
            formData.append("password", document.getElementById("password").value);


            let data = await fetch("post/signin.post.php", {
                    method: "POST",
                    body: formData
                })
                .then((data) => data.json())
                .then((e) => {
                    alert(e.content);
                    if (e.content == "Kaydınız Başarılı") window.location.href = ("index.php?p=home");
                });

        });
    </script>