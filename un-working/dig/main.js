let btn_cat = $(".buttons");
console.log(btn_cat);
btn_cat.on("click", function () {
    // при нажатии на кнопки
    // класса 'buttons' работает функция:
    let pic = $(".main_pic").html(); //pic = фото с классом main_pic

    $.ajax({
        method: "POST",
        url: "cats_calc.php",
        data: {id: pic}
    })
        .done(function (msg) {
            pic.html(msg);
            console.log(msg);
        });
})