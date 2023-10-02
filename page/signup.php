
    <form id="signup-form">
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
                Giriş Yap
            </button>
        </div>
    </form>

    <a href="index.php?p=signin">Kaydol</a>



    <script>
        let form = document.getElementById("signup-form");
        let submitBtn = document.getElementById("submit");

        form.addEventListener("submit", async (e) => {
            
            e.preventDefault();
			let formData = new FormData();
			formData.append("mail",document.getElementById("mail").value);
			formData.append("password",document.getElementById("password").value);
			
			
            let data = await fetch("post/signup.post.php",{
                method: "POST",
                body: formData
            })
            .then((data) => data.json())
            .then((e) => {
				alert(e.content);
                if (e.content == "Giriş Başarılı") window.location.href = ("index.php?p=home");
            });

        });
    </script>