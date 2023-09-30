window.onload = function () {
    if (document.querySelector("header")) {
        fetch("/inc/header.html")
            .then((response) => {
                return response.text();
            })
            .then((data) => {
                document.querySelector("header").innerHTML = data;
            });
    }
    if (document.querySelector("footer")) {
        fetch("/inc/footer.html")
            .then((response) => {
                return response.text();
            })
            .then((data) => {
                document.querySelector("footer").innerHTML = data;
                const date = new Date();
                document.getElementById(
                    "footer-text"
                ).innerText = `© 2000 - ${date.getFullYear()} эл\\д Планерное. Все права защищены`;
            });
    }
};