<section class="bg">
    <div class="container">
        <form method="post" id="callback_form">
            <h3 class="white pb0">Напишите нам</h3>
            <input type="text" name="name" id="callback_name" placeholder="Имя*" required>
            <input type="email" name="email" id="callback_email" placeholder="Email*" required>
            <input type="tel" name="phone" id="callback_phone" placeholder="Телефон*" required>
            <textarea name="comment" id="callback_comment" placeholder="Комментарий"></textarea>
            <button type="submit" class="callback_submit">Отправить</button>
        </form>
    </div>
</section>
<script>
    callback_form.onsubmit = (e) => {
        e.preventDefault();
        let fd = new FormData(callback_form);
        fetch("/api/callback-form", {
            method: 'POST',
            body: fd
        }).then(response => {
            switch (response.status) {
                case 200:
                    alert("Письмо отправлено!")
                    break;
                case 429:
                    alert("Ошибка: Количество попыток превышено! Попробуйте снова через 30 минут.")
                    break;
            }
        })
    }
</script>
