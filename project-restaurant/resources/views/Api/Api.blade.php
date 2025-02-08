{{--<!DOCTYPE html>--}}
{{--<html lang="fa">--}}
{{--<head>--}}
{{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDt_wqXmSwBZav4xJoum-rqSsZwKV6b064&callback=initMap" async defer></script>--}}
{{--    <script>--}}
{{--        function initMap() {--}}
{{--            var location = {lat: 35.24505, lng: 58.45803}; // مختصات کاشمر--}}
{{--            var map = new google.maps.Map(document.getElementById("map"), {--}}
{{--                zoom: 12,--}}
{{--                center: location--}}
{{--            });--}}
{{--            var marker = new google.maps.Marker({position: location, map: map});--}}
{{--        }--}}
{{--    </script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="map" style="height: 400px; width: 100%;"></div>--}}
{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نقشه گوگل در لاراول</title>

    <!-- لینک به Google Maps API با قابلیت Places -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDt_wqXmSwBZav4xJoum-rqSsZwKV6b064&libraries=places&callback=initMap" async defer></script>

    <script>
        let map;
        let marker;
        let autocomplete;

        function initMap() {
            var defaultLocation = {lat: 35.24505, lng: 58.45803}; // مختصات پیش‌فرض (کاشمر)

            // ایجاد نقشه
            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 12,
                center: defaultLocation
            });

            // اضافه کردن مارکر پیش‌فرض
            marker = new google.maps.Marker({
                position: defaultLocation,
                map: map,
                draggable: true
            });

            // رویداد برای گرفتن مختصات جدید پس از جابجایی مارکر
            google.maps.event.addListener(marker, 'dragend', function (event) {
                document.getElementById("latitude").value = event.latLng.lat();
                document.getElementById("longitude").value = event.latLng.lng();
            });

            // فعال‌سازی AutoComplete برای ورودی جستجو **داخل تابع initMap**
            var input = document.getElementById("searchBox");
            autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.bindTo("bounds", map);

            // رویداد انتخاب مکان از کادر جستجو
            autocomplete.addListener("place_changed", function () {
                var place = autocomplete.getPlace();

                if (!place.geometry) {
                    alert("مکان انتخابی معتبر نیست!");
                    return;
                }

                // تغییر مکان مرکز نقشه
                map.setCenter(place.geometry.location);
                map.setZoom(15);

                // جابجایی مارکر
                marker.setPosition(place.geometry.location);

                // مقدار مختصات را در فرم قرار دهید
                document.getElementById("latitude").value = place.geometry.location.lat();
                document.getElementById("longitude").value = place.geometry.location.lng();
            });
        }
    </script>



</head>
<body>

<h2>انتخاب مکان روی نقشه</h2>


<!-- کادر جستجو -->
<input id="searchBox" type="text" placeholder="جستجوی مکان..." style="width: 300px; padding: 10px; margin: 10px;">

<!-- نقشه -->
<div id="map" style="height: 400px; width: 100%; margin-top: 10px;"></div>

<!-- فرم ذخیره اطلاعات مکان -->
<form action="{{ route('map.store') }}" method="POST">
    @csrf
    <input type="text" id="latitude" name="latitude">
    <input type="text" id="longitude" name="longitude">
    <button type="submit" style="margin-top: 10px;">ذخیره مکان</button>
</form>

</body>
</html>

