<!DOCTYPE html>
<html>
<head>
    <title>галерея)</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .gallery-image {
            display: none;
            max-width: 500px;
            max-height: 500px;
        }
    </style>
    <script>
        $(document).ready(function() {
            var category = '';

            $('.category-button').on('click', function() {
                category = $(this).data('category');
                loadGallery(category);
            });

            function loadGallery(category) {
                $.ajax({
                    url: 'getImages.php',
                    method: 'POST',
                    data: { category: category },
                    success: function(response) {
                        var images = JSON.parse(response);
                        var galleryHtml = '';
                        for (var i = 0; i < images.length; i++) {
                            galleryHtml += '<img class="gallery-image" src="' + images[i].image_loc + '">';
                        }
                        $('#gallery').html(galleryHtml);
                        showImage(0);
                    }
                });
            }

            var currentIndex = 0;

            function showImage(index) {
                var images = $('.gallery-image');
                if (images.length > 0) {
                    currentIndex = (index + images.length) % images.length;
                    images.hide();
                    $(images[currentIndex]).show();
                }
            }

            $('#previous-button').on('click', function() {
                showImage(currentIndex - 1);
            });

            $('#next-button').on('click', function() {
                showImage(currentIndex + 1);
            });
        });
    </script>
</head>
<body>
<h1>че нада?</h1>

<div id="categories">
    <button class="category-button" data-category="1">Котики</button>
    <button class="category-button" data-category="2">Собачки</button>
    <button class="category-button" data-category="3">Бурятия</button>
</div>

<div id="gallery"></div>

<button id="previous-button">Назад</button>
<button id="next-button">Вперед</button>
</body>
</html>