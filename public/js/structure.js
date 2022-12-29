const buttons = document.querySelectorAll(".structure-sort-btns button");
const blocks = document.querySelectorAll(".structure-sorted");

function hideBlocks() {
    buttons.forEach(btn => {
        btn.classList.remove("arsipa-active-link");
    })
    blocks.forEach((block) => {
        block.classList.add("hidden");
    });
}

buttons.forEach((btn) => {
    btn.onclick = () => {
        let showClass = btn.getAttribute("data-open");
        hideBlocks();
        document
            .querySelector(`.structure-sorted.${showClass}`)
            .classList.remove("hidden");
        btn.classList.add("arsipa-active-link");

    };
});
