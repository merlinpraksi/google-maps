<!DOCTYPE html>
<html>
<head>
    <title>Google Maps</title>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="map"></div>

    <script>
    function initMap() {
  
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 37.7749, lng: -122.4194}, 
            zoom: 10 
        });

        @foreach ($markers as $marker)
            var marker{{ $marker['id'] }} = new google.maps.Marker({
                position: {lat: {{ $marker['latitude'] }}, lng: {{ $marker['longitude'] }}},
                map: map,
                title: "{{ $marker['name'] }}"
            });

            var infoWindow{{ $marker['id'] }} = new google.maps.InfoWindow({
                content: '<div>' +
                    '<h3>{{ $marker['name'] }}</h3>' +
                    '<p>{{ $marker['description'] }}</p>' +
                    '<p>Added: {{ $marker['added'] }}</p>' +
                    '<p>Edited: {{ $marker['edited'] }}</p>' +
                    '</div>'
            });

            marker{{ $marker['id'] }}.addListener('click', function() {
                infoWindow{{ $marker['id'] }}.open(map, marker{{ $marker['id'] }});
            });
        @endforeach
    }
</script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
   
</body>
</html>
