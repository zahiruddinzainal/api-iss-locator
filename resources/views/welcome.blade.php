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

        .spacing-medium {
            margin-top: 25px;
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
                            <p>To get all satellites list and it's id. For now the server only provide single satelite
                                which is ISS. The default id is '25544'. You need to go to the following url endpoint:
                            </p>
                            <p class="spacing">Example of API usage: </p>
                            <p class="spacing"><strong>GET: <a
                                        href="http://api.zvhir.com/api/satelites">http://api.zvhir.com/api/satelites</a></strong>
                            </p>
                            <img class="spacing" src="snippet1.png" width="100%" height="auto">

                            <p class="spacing-large" style="margin: auto;">
                                ---------------------------------------------------------------------</p>

                            <div class="form__group spacing-large">
                                <a target="_blank" href="/demo/timestamp" class="form__btn" type="submit">
                                    <span class="form__btn-text">ISS LOCATOR<br>(by timestamp)</span>
                                </a>
                            </div>
                            <p>You can get information of the satelites at given timestamp. You need to go to the
                                following url endpoint and pass satelite id and the timestamp: </p>
                            <p class="spacing">Example of API usage: </p>
                            <p class="spacing"><strong>GET: <a
                                        href="http://api.zvhir.com/api/satelite/25544/timestamp/1639499100">http://api.zvhir.com/api/satelite/25544/timestamp/1639499100</a></strong>
                            </p>
                            <img class="spacing" src="snippet2.png" width="100%" height="auto">

                            <p class="spacing-large" style="margin: auto;">
                                ---------------------------------------------------------------------</p>

                            <div class="form__group spacing-large">
                                <a target="_blank" href="/demo/geocode" class="form__btn" type="submit">
                                    <span class="form__btn-text" style="margin: auto;">ISS LOCATOR<br>(by
                                        geolocation)</span>
                                </a>
                            </div>
                            <p>You can also get reverse information of the satelites by passing the latitude and
                                longitude: </p>
                            <p class="spacing">Example of API usage: </p>
                            <p class="spacing"><strong>GET: <a
                                        href="http://api.zvhir.com/api/satelite/25544/latitude/4.2105/longitude/101.9758">http://api.zvhir.com/api/satelite/25544/latitude/4.2105/longitude/101.9758</a></strong>
                            </p>
                            <img class="spacing" src="snippet5.png" width="100%" height="auto">

                            <p class="spacing-large" style="margin: auto;">
                                ---------------------------------------------------------------------</p>


                            <div class="form__group spacing-large">
                                <a target="_blank" href="/demo/before" class="form__btn" type="submit">
                                    <span class="form__btn-text" style="margin: auto;">ISS LOCATOR<br>(before every 10
                                        minutes)</span>
                                </a>
                            </div>
                            <p>You can also get information of the satelites every 10 minutes before a given timestamp.
                                You need to go to the following url endpoint and pass satelite id and the timestamp:
                            </p>
                            <p class="spacing">Example of API usage: </p>
                            <p class="spacing"><strong>GET: <a
                                        href="http://api.zvhir.com/api/before/satelite/25544/timestamp/1639499100">http://api.zvhir.com/api/before/satelite/25544/timestamp/1639499100</a></strong>
                            </p>
                            <img class="spacing" src="snippet3.png" width="100%" height="auto">

                            <p class="spacing-large" style="margin: auto;">---------------------------------------------------------------------</p>

                            <div class="form__group spacing-large">
                                <a target="_blank" href="/demo/after" class="form__btn" type="submit">
                                    <span class="form__btn-text" style="margin: auto;">ISS LOCATOR<br>(after every 10
                                        minutes)</span>
                                </a>
                            </div>
                            <p>You can also get information of the satelites every 10 minutes after a given timestamp.
                                You need to go to the following url endpoint and pass satelite id and the timestamp:
                            </p>
                            <p class="spacing">Example of API usage: </p>
                            <p class="spacing"><strong>GET: <a
                                        href="http://api.zvhir.com/api/after/satelite/25544/timestamp/1639499100">http://api.zvhir.com/api/after/satelite/25544/timestamp/1639499100</a></strong>
                            </p>
                            <img class="spacing" src="snippet4.png" width="100%" height="auto">

                            <p class="spacing-large" style="margin: auto;">---------------------------------------------------------------------</p>

                            <div class="form__group spacing-large">
                                <a target="_blank" href="https://interview.zvhir.com" class="form__btn"
                                    type="submit">
                                    <span class="form__btn-text">LIVE DEMO</span>
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
