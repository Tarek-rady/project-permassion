<script>

    function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 25.29, lng: 51.53},
            zoom: 13
        });

        var input = document.getElementById('searchInput');
        // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
            map: map,
            anchorPoint: new google.maps.Point(0, -29),
            draggable: true
        });
        marker.setPosition({lat: 25.29, lng: 51.53});

        google.maps.event.addListener(map, 'click', function (event) {
            // document.getElementById("lat").value = event.latLng.lat();
            // document.getElementById("lng").value = event.latLng.lng();
            console.log('Lat: ' + event.latLng.lat() + ' Lng:' + event.latLng.lng() + ' from click event');
            marker.setPosition(event.latLng);
        });

        marker.addListener('position_changed', printMarkerLocation);

        function printMarkerLocation() {

            document.getElementById('lat').value = marker.position.lat();
            document.getElementById('lng').value = marker.position.lng();

            console.log('Lat: ' + marker.position.lat() + ' Lng:' + marker.position.lng() + ' from marker event' );
        }

        autocomplete.addListener('place_changed', function () {

            infowindow.close();
            marker.setVisible(false);
            var place = autocomplete.getPlace();

            if (!place.geometry) {
                window.alert("Autocomplete's returned place contains no geometry");
                return;
            }

            // If the place has a geometry, then present it on a map.
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }

            // marker.setIcon(({
            //     asset: place.icon,
            //     size: new google.maps.Size(71, 71),
            //     origin: new google.maps.Point(0, 0),
            //     anchor: new google.maps.Point(17, 34),
            //     scaledSize: new google.maps.Size(35, 35)
            // }));

            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

            var address = '';
            if (place.address_components) {
                address = [
                    (place.address_components[0] && place.address_components[0].short_name || ''),
                    (place.address_components[1] && place.address_components[1].short_name || ''),
                    (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
            }

            infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
            infowindow.open(map, marker);

            Location
            document.getElementById('location').value = place.formatted_address;
        });

    }

</script>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap&key=AIzaSyDWZCkmkzES9K2-Ci3AhwEmoOdrth04zKs" ></script>
