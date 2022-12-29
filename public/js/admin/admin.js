$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
function update() {
    // update news
    $(".admin-news .save-btn").click(function () {
        const id = $(this)[0].id;
        const title = $(this).siblings("input.change-input")[0];
        const content = $(this)
            .siblings(".app-doc-meta")
            .find(".change-input")[0];

        let fd = new FormData();

        fd.append("title", title.value);
        fd.append("content", content.value);
        
        if ($(this)[0].id !== "") {
            fd.append("_method", "POST");
            $.ajax({
                type: "POST",
                cache: false,
                processData: false,
                contentType: false,
                data: fd,
                url: "/api/news/" + id,
                success: function (data) {
                    // title.innerText = data.response.title;
                    // date.innerText = data.response.date;
                    console.log("a")
                    
                },
                error: function (data) {
                    if (data.status == 422) {
                        alert(
                            "Неверные данные или размер файла превышает максимально допустимый"
                        );
                    } else if (data.status == 404) {
                        alert("Не найдено");
                    } else if (data.status == 500) {
                        alert("Написать разработчикам");
                    }
                },
            });
        } else {
            // add news
            fd.append("_method", "POST");
            $.ajax({
                type: "POST",
                cache: false,
                processData: false,
                contentType: false,
                data: fd,
                url: "/action/post",
                success: function (data) {
                    console.log("b")
                    
                },
                error: function (data) {
                    if (data.status == 422) {
                        alert(
                            "Неверные данные или размер файла превышает максимально допустимый"
                        );
                    } else if (data.status == 404) {
                        alert("Не найдено");
                    } else if (data.status == 500) {
                        alert("Написать разработчикам");
                    }
                },
            });
            // add news
        }
    });
    // update news

    // delete someone
    $(".delete-btn").click(function () {
        var closet = $(this).closest(".col-6");
        $.ajax({
            type: "POST",
            data: { _method: "DELETE" },
            url:
                "/action/" +
                $(this)[0].attributes.getNamedItem("path").value +
                "/" +
                $(this).siblings(".save-btn")[0].id,
            success: function (data) {
                closet.remove();
            },
            error: function (data) {
                if (data.status == 404) {
                    alert("Ошибка");
                } else if (data.status == 500) {
                    alert("Написать разработчикам");
                }
            },
        });
    });
    // delete someone
}

$(document).ready(function () {
    update();

    // add news
    $(".add-btn-services").click(function () {
        $(".all-cards").prepend(
            `<div class="col-6 col-md-4 col-xl-3 col-xxl-4">
            <div class="app-card app-card-doc shadow-sm h-100">
                <img src="" class="admin-services-img">
                <div class="app-card-body p-3">
                    <input type="file" class="add-img-btn">
                    <h4 class="app-doc-title truncate mb-0" title=""></h4>
                    <input type="text" name="name" class="change-input" placeholder="Название услуги"
                        value="">
                    <div class="app-doc-meta">
                        <ul class="list-unstyled mb-0">
                            <li class="services-dcp-text">
                                <span class="text-muted">Описание:</span>
                                <span class="admin-services-dcp"></span>
                            </li>
                            <textarea name="services-dcp" class="services-dcp product-dcp" placeholder="Описание"></textarea>
                        </ul>
                    </div>
                    <button class="change-btn change-btn-services btn btn-primary">Изменить</button>
                    <button class="save-btn save-btn-services btn btn-primary"
                        id="">Сохранить</button>
                    <button class="delete-btn btn btn-primary" path="service"><i class="far fa-trash-alt"
                            style="color: white;"></i></button>
                </div>
            </div>
        </div>`
        );
        update();
    });
    // add news

});