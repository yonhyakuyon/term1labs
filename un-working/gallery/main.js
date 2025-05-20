let btn_cat = $("#cats");
console.log(btn_cat);
btn_cat.on("click", function () {
    let category = $("#category").html();

    $.ajax({
        method: "POST",
        url: "ajax.php",
        data: {id: category}
    })
        .done(function (msg) {
            let pic_cat = $("#pic");
            pic_cat.html(msg);
            console.log(msg);
        });
})