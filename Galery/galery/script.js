$(document).ready(function() {
    var category = '';

    $('.category-button').on('click', function() {
        category = $(this).data('category');
        galery(category);
    });
    var now_pic_numbr = 0;

    function galery(category) {
        $.ajax({
            url: 'database.php',
            method: 'POST',
            data: { category: category },
            success: function(response) {
                var images = JSON.parse(response);
                var galleryHtml = '';
                for (var i = 0; i < images.length; i++) {
                    galleryHtml += '<img class="gallery-image" width="500" height="500" src="' + images[i].image_loc + '">';
                }
                $('#gallery').html(galleryHtml);
                Image(0);
            }
        });
    }

    function Image(index) {
        var images = $('.gallery-image');
        if (images.length > 0) {
            now_pic_numbr = (index + images.length) % images.length;
            images.hide();
            $(images[now_pic_numbr]).show();
        }
    }

    $('#back-btn').on('click', function() {
        Image(now_pic_numbr - 1);
    });

    $('#next-btn').on('click', function() {
        Image(now_pic_numbr + 1);
    });
});