const images = document.querySelectorAll(".fotogalery__album img");

images.forEach((image) => {
    image.addEventListener("click", () => {
        document.querySelector(".pop-up").style.display = "block";
        document.querySelector(".pop-up img").src = image.getAttribute("src");
    });
});

document.querySelector(".pop-up span").addEventListener("click", () => {
    document.querySelector(".pop-up").style.display = "none";
});

document.querySelector(".pop-up").addEventListener("click", () => {
    document.querySelector(".pop-up").style.display = "none";
});
