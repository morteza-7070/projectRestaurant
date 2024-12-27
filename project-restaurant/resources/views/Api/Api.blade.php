<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نقشه</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDt_wqXmSwBZav4xJoum-rqSsZwKV6b064&callback=initMap" async defer></script>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
<h1>نمایش موقعیت روی نقشه</h1>
<input type="text" id="address" placeholder="آدرس را وارد کنید">
<button id="submit">جستجو</button>
<div id="map"></div>

<script>
    let map;
    let marker;

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 35.6892, lng: 51.3890 }, // مرکز نقشه
            zoom: 10,
        });
    }

    document.getElementById('submit').addEventListener('click', function() {
        const address = document.getElementById('address').value;

        fetch('/get-coordinates', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify({ address: address }),
        })
            .then(response => response.json())
            .then(data => {
                if (data.lat && data.lng) {
                    const location = { lat: data.lat, lng: data.lng };

                    // تنظیم موقعیت نشانگر
                    if (marker) {
                        marker.setMap(null); // حذف نشانگر قبلی
                    }
                    marker = new google.maps.Marker({
                        position: location,
                        map: map,
                    });

                    // تنظیم مرکز نقشه به موقعیت جدید
                    map.setCenter(location);
                } else {
                    alert('آدرس پیدا نشد');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
</script>
</body>
</html>
