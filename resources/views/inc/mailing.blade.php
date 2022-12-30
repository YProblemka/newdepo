<section class="bg mailing">
    <div class="container">
        <h3 class="tac white">Подписаться на рассылку новостей</h3>
        <form id="mailing" method="POST">
            <input type="mail" name="email" placeholder="Ваш email*" required>
            <button class="btn" type="submit">Подписаться</button>
        </form>
    </div>
</section>
<script>
    mailing.onsubmit = (e) => {
        e.preventDefault();
        let fd = new FormData(mailing);
        fetch("/api/newsletter/subscription", {
            method: 'POST',
            headers: {
                'Accept': 'application/json'
            },
            body: fd
        }).then(response => {
            switch (response.status) {
                case 200:
                    alert("Вам на почту придет письмо с подтверждением!")
                    break;
                case 422:
                    alert("Ошибка: Почта уже зарегистирована")
                    break;
                case 429:
                    alert("Ошибка: Количество попыток превышено! Попробуйте снова через 30 минут.")
                    break;
            }
        })
    }
</script>
