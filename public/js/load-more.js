const news_wrapper = document.querySelector(".news");
const btn = document.querySelector("#load-more");
const limit = 9;

btn.onclick = () => {
    let count = news_wrapper.querySelectorAll("article.article").length;
    fetch(`/api/news?offset=${count}&limit=${limit}`)
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            return data.response;
        })
        .then((news) => {
            news.forEach((article) => {
                news_wrapper.insertAdjacentHTML(
                    "beforeend",
                    `
            <article class="article">
                        <a href="${article.url}"></a>
                        <img src="${article.img_url}" alt="${article.title}">
                        <div class="article__footer">
                            <p class="article__title">${article.title}</p>
                            <p class="article__date">${article.created_at}</p>
                        </div>
                    </article>
            `
                );
            });            
            if (news.length==0||news.length<limit) {
                btn.style.display = "none";
            }
        });
};
