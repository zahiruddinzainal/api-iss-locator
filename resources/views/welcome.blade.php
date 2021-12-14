<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Maybank Interview - Zahiruddin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .spacing {
            margin-top: 15px;
        }

        .spacing-large {
            margin-top: 50px;
        }

    </style>
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="overlay">
        <div class="login">
            <div class="login__inner">
                <div class="login__content">
                    <div class="login__form">
                        <div class="form">
                            <h1 class="login__heading" style="margin: auto; margin-top: 100px;">API Gateway</h1>
                            <div class="form__group spacing-large">
                                <a target="_blank" href="/api/satelites" class="form__btn" type="submit">
                                    <span class="form__btn-text">All satelites API</span>
                                </a>
                            </div>
                            <div class="form__group">
                                <a target="_blank" href="/demo/timestamp" class="form__btn" type="submit">
                                    <span class="form__btn-text">ISS LOCATOR<br>(by timestamp)</span>
                                </a>
                            </div>
                            <div class="form__group">
                                <a target="_blank" href="/demo/geocode" class="form__btn" type="submit">
                                    <span class="form__btn-text" style="margin: auto;">ISS LOCATOR<br>(by geolocation)</span>
                                </a>
                            </div>
                            <div class="form__group">
                                <a target="_blank" href="/demo/before" class="form__btn" type="submit">
                                    <span class="form__btn-text" style="margin: auto;">ISS LOCATOR<br>(before every 10 minutes)</span>
                                </a>
                            </div>
                            <div class="form__group">
                                <a target="_blank" href="/demo/after" class="form__btn" type="submit">
                                    <span class="form__btn-text" style="margin: auto;">ISS LOCATOR<br>(after every 10 minutes)</span>
                                </a>
                            </div>
                            <div class="form__group">
                                <a target="_blank" href="https://github.com/zahiruddinzainal" class="form__btn"
                                    type="submit">
                                    <span class="form__btn-text">API DOCUMENTATION</span>
                                </a>
                            </div>

                            <div id="loader" class="loader"></div>
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
</body>

</html>
