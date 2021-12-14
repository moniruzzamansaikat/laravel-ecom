<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Ecommerce Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css" integrity="sha512-NZ19NrT58XPK5sXqXnnvtf9T5kLXSzGQlVZL9taZWeTBtXoN3xIfTdxbkQh6QSoJfJgpojRqMfhyqBAAEeiXcA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .main-slider {
            min-height: 400px !important;
            padding: 2rem auto !important;
            background: #e8e8e8 !important;
        }

        .main-slider img {
            max-width: 300px !important;
            max-height: 400px !important;
        }

    </style>
</head>
<body>
    {{View::make("shared.navbar")}}

    <div class="container-fluid">
        @yield("page_content")
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.min.js" integrity="sha512-Pv/SmxhkTB6tWGQWDa6gHgJpfBdIpyUy59QkbshS1948GRmj6WgZz18PaDMOqaEyKLRAvgil7sx/WACNGE4Txw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var myCarousel = document.querySelector('#homePageSlider')
        var carousel = new bootstrap.Carousel(myCarousel)
    </script>
</body>
</html>
