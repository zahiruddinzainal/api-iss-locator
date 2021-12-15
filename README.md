# International Space Station (ISS) Locator Mcroservice API

This api allows you  to see list of satellites and it's id. It also provide location from any given timestamp or geolocation. You can use Postman API or any other software to test the API

## Installation

Copy '.env example' file and rename as '.env' then run following command:
```bash
php artisan key:generate
```

To serve the system run following command:
```bash
php artisan serve
```

Done. There you go!

## Here is screenshot from Postman API to test the API
![](http://api.zvhir.com/public/screenshot/1.png)
List of satellite and it's id

![](http://api.zvhir.com/public/screenshot/2.png)
ISS Location - by timestamp

![](http://api.zvhir.com/public/screenshot/3.png)
ISS Location - by geolocation (latitude and longitude)

![](http://api.zvhir.com/public/screenshot/4.png)
ISS Location every before 10 minutes.

![](http://api.zvhir.com/public/screenshot/5.png)
ISS Location every after 10 minutes.
