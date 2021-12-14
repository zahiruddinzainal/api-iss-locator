<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Maybank Interview - Zahiruddin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="overlay">
        <div class="login">
            <div class="login__inner">
                <div class="login__header">
                    <div class="login__title">
                        <h1 class="login__heading">ISS Locator</h1>
                    </div>
                </div>
                <div class="login__content">
                    <div class="login__form">
                        <div class="form">
                            <div class="form__group">
                                <input id="satelite_id" class="form__input" type="text" name="satelite_id"
                                    placeholder="Insert satelite ID (eg: 25544)" required>
                                <div class="form__input-after"></div>
                            </div>
                            <div class="form__group">
                                <input id="latitude" class="form__input" type="text" name="latitude"
                                    placeholder="Insert latitude (eg: 37.8271)" required>
                                <div class="form__input-after"></div>
                            </div>
                            <div class="form__group">
                                <input id="longitude" class="form__input" type="text" name="longitude"
                                    placeholder="Insert longitude (eg: -122.3471)" required>
                                <div class="form__input-after"></div>
                            </div>
                            <div class="form__group">
                                <button id="text" class="form__btn" type="submit">
                                    <span class="form__btn-text">Get data</span>
                                </button>
                            </div>
                            <div class="form__group">
                                <p class="form__text">Crafted by
                                    <a href="https://zvhir.com" class="form__link"> zvhir.com</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="login__footer">
                    <div class="login__subtitle">
                        <h3 class="login__subheading">Maybank Interview December 2021</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var button = document.getElementById('text');
        button.onclick = function() {
            var satelite_id = document.getElementById('satelite_id').value;
            var latitude = document.getElementById('latitude').value;
            var longitude = document.getElementById('longitude').value;
            if (latitude && longitude) {
                window.location.href = '/api/satelite/' + satelite_id + '/latitude/'+ latitude +'/longitude/' + longitude;
            }
        };
    </script>

</body>

</html>