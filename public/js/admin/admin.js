$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
function update() {
    // update news
    $(".admin-news .save-btn.no-action").click(function () {
        const save_btn = $(this)[0];
        const id = $(this)[0].id;
        const title = $(this).siblings("input.change-input")[0];
        const content = $(this).siblings("textarea.change-input")[0];
        const img = $(this).parent().siblings(".image-preview")[0];
        const img_input = $(this).siblings(".add-img-btn")[0];
        let fd = new FormData();
        fd.append("title", title.value);
        fd.append("content", content.value);
        if (img_input.files[0]) {
            fd.append("img", img_input.files[0]);
        }
        if ($(this)[0].id !== "") {
            fd.append("_method", "PUT");
            $.ajax({
                type: "POST",
                cache: false,
                processData: false,
                contentType: false,
                data: fd,
                url: "/api/news/" + id,
                success: function (data) {
                    title.value = data.response.title;
                    content.value = data.response.content;
                    img.src = data.response.img_url;
                    alert("Успешно обновлено");
                },
                error: function (data) {
                    if (data.status == 422) {
                        alert(
                            "Неверные данные или размер файла превышает максимально допустимый"
                        );
                    } else if (data.status == 404) {
                        alert("Не найдено");
                    } else if (data.status == 500) {
                        alert("Неизвестна ошибка, напишите разработчикам!");
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
                url: "/api/news",
                success: function (data) {
                    title.value = data.response.title;
                    content.value = data.response.content;
                    img.src = data.response.img_url;
                    save_btn.id = data.response.id;
                    alert("Успешно создано");
                },
                error: function (data) {
                    if (data.status == 422) {
                        alert(
                            "Неверные данные или размер файла превышает максимально допустимый"
                        );
                    } else if (data.status == 404) {
                        alert("Не найдено");
                    } else if (data.status == 500) {
                        alert("Неизвестна ошибка, напишите разработчикам!");
                    }
                },
            });
            // add news
        }
    });
    // update news

    // update albums
    $(".admin-albums .save-btn.no-action").click(function () {
        const save_btn = $(this)[0];
        const id = $(this)[0].id;
        const title = $(this).siblings("input.change-input")[0];

        let fd = new FormData();
        fd.append("title", title.value);

        if ($(this)[0].id !== "") {
            fd.append("_method", "PUT");
            $.ajax({
                type: "POST",
                cache: false,
                processData: false,
                contentType: false,
                data: fd,
                url: "/api/album/" + id,
                success: function (data) {
                    title.value = data.response.title;
                    alert("Успешно обновлено");
                },
                error: function (data) {
                    if (data.status == 422) {
                        alert(
                            "Неверные данные или размер файла превышает максимально допустимый"
                        );
                    } else if (data.status == 404) {
                        alert("Не найдено");
                    } else if (data.status == 500) {
                        alert("Неизвестна ошибка, напишите разработчикам!");
                    }
                },
            });
        } else {
            // add albums
            fd.append("_method", "POST");
            $.ajax({
                type: "POST",
                cache: false,
                processData: false,
                contentType: false,
                data: fd,
                url: "/api/album",
                success: function (data) {
                    title.value = data.response.title;
                    save_btn.id = data.response.id;
                    alert("Успешно создано");
                },
                error: function (data) {
                    if (data.status == 422) {
                        alert(
                            "Неверные данные или размер файла превышает максимально допустимый"
                        );
                    } else if (data.status == 404) {
                        alert("Не найдено");
                    } else if (data.status == 500) {
                        alert("Неизвестна ошибка, напишите разработчикам!");
                    }
                },
            });
            // add albums
        }
    });
    // update albums

    // update album-image
    $(".admin-images .save-btn.no-action").click(function () {
        const save_btn = $(this)[0];
        const id = $(this)[0].id;
        const album_id = $(".admin-images")[0].getAttribute("data-album-id");
        const img = $(this).parent().siblings(".image-preview")[0];
        const img_input = $(this).siblings(".add-img-btn")[0];

        let fd = new FormData();
        fd.append("img", img_input.files[0]);
        fd.append("album_id", album_id);

        if ($(this)[0].id !== "") {
            fd.append("_method", "PUT");
            $.ajax({
                type: "POST",
                cache: false,
                processData: false,
                contentType: false,
                data: fd,
                url: "/api/image/" + id,
                success: function (data) {
                    img.src = data.response.img_url;
                    alert("Успешно обновлено");
                },
                error: function (data) {
                    if (data.status == 422) {
                        alert(
                            "Неверные данные или размер файла превышает максимально допустимый"
                        );
                    } else if (data.status == 404) {
                        alert("Не найдено");
                    } else if (data.status == 500) {
                        alert("Неизвестна ошибка, напишите разработчикам!");
                    }
                },
            });
        } else {
            // add album-image
            fd.append("_method", "POST");
            $.ajax({
                type: "POST",
                cache: false,
                processData: false,
                contentType: false,
                data: fd,
                url: "/api/image",
                success: function (data) {
                    img.src = data.response.img_url;
                    save_btn.id = data.response.id;
                    alert("Успешно создано");
                },
                error: function (data) {
                    if (data.status == 422) {
                        alert(
                            "Неверные данные или размер файла превышает максимально допустимый"
                        );
                    } else if (data.status == 404) {
                        alert("Не найдено");
                    } else if (data.status == 500) {
                        alert("Неизвестна ошибка, напишите разработчикам!");
                    }
                },
            });
            // add album-image
        }
    });
    // update album-image

    // delete someone
    $(".delete-btn.no-action").click(function () {
        let closet = $(this).closest(".col-6");
        $.ajax({
            type: "POST",
            data: { _method: "DELETE" },
            url: `/api/${$(this)[0].attributes.getNamedItem("path").value}/${
                $(this).siblings(".save-btn")[0].id
            }`,
            success: function (data) {
                alert("Успешно удалено");
                closet.remove();
            },
            error: function (data) {
                if (data.status == 404) {
                    alert("Ошибка, не найдено");
                } else if (data.status == 500) {
                    alert("Неизвестна ошибка, напишите разработчикам!");
                }
            },
        });
    });
    // delete someone
    $(".no-action").removeClass("no-action");
}
$(document).ready(function () {
    update();
    // add news
    $(".add-btn-news").click(function () {
        $(".all-cards").prepend(
            `<div class="col-6 col-md-4 col-xl-3 col-xxl-3">
                <div class="app-card app-card-doc shadow-sm h-100">
                    <img src="" class="image-preview">
                    <div class="app-card-body p-3">
                        <input type="file" class="add-img-btn">
                        <input type="text" class="change-input" value="" placeholder="Заголовок новости">
                        <textarea class="change-input" placeholder="Текст новости"></textarea>
                        <button class="save-btn btn btn-primary no-action" id="">Сохранить</button>
                        <button class="delete-btn btn btn-primary no-action" path="news"><i class="far fa-trash-alt"
                                style="color: white;"></i></button>
                    </div>
                </div>
            </div>`
        );
        update();
    });
    // add news

    // add album
    $(".add-btn-albums").click(function () {
        $(".all-cards").prepend(
            `<div class="col-6 col-md-4 col-xl-3 col-xxl-3">
                <div class="app-card app-card-doc shadow-sm h-100">
                    <div class="app-card-body p-3">
                        <input type="text" class="change-input" value="" placeholder="Название альбома">
                        <button class="save-btn btn btn-primary no-action" id="">Сохранить</button>
                        <a class="btn btn-primary" href="{{ route('admin.album-images', ['album' => $album->id]) }}">Изменить
                            фото</a>
                        <button class="delete-btn btn btn-primary no-action" path="album"><i class="far fa-trash-alt"
                                style="color: white;"></i></button>
                    </div>
                </div>
            </div>`
        );
        update();
    });
    // add album

    // add album-image
    $(".add-btn-images").click(function () {
        $(".all-cards").prepend(
            `<div class="col-6 col-md-4 col-xl-3 col-xxl-3">
            <div class="app-card app-card-doc shadow-sm h-100">
                <img src="" class="image-preview">
                <div class="app-card-body p-3">
                    <input type="file" class="add-img-btn">
                    <button class="save-btn btn btn-primary no-action" id="" data-album-id="">Сохранить</button>
                    <button class="delete-btn btn btn-primary no-action" path="image"><i class="far fa-trash-alt"
                            style="color: white;"></i></button>
                </div>
            </div>
        </div>`
        );
        update();
    });
    // add album-image
});
