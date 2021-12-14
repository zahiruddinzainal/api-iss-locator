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
                        <h1 class="login__heading">ISS Locator<br><span style="font-size: 20px;">(before every 10 minutes)</span></h1>
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
                                <input id="date" class="form__input" type="datetime-local" name="date"
                                    placeholder="Pick a date" required>
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
            var date = document.getElementById('date').value;
            if (satelite_id && date) {
                window.location.href = '/api/before/satelite/' + satelite_id + '/timestamp/' + Date.parse(date);
            }
        };
    </script>

</body>

</html>

