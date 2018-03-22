/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    (function (window, google) {
//map options
        var myLatLng = {
            lat: -12.0992000,
            lng: -77.0400000
        };
        var options = {
            center: myLatLng,
            zoom: 14,
            maptypeID: google.maps.MapTypeId.SATELLITE,
        },
                element = document.getElementById('map'),
                //map
                map = new google.maps.Map(element, options);
        var infoWindow = new google.maps.InfoWindow({map: map});

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var contentString = '<div id="content">Usted Esta Aqui</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });
                var marker = new google.maps.Marker({
                    position: pos,
                    map: map,
                    icon: '../recursos/img/yo.png',
                    animation: google.maps.Animation.BOUNCE,
                    draggable: true
                });
                marker.addListener('click', function () {
                    infowindow.open(map, marker);
                    openInfoWindow(marker);

                });
                map.setCenter(pos);
            }, function () {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }

        var marker = new google.maps.Marker({
            position: {
                lat: -12.0978097,
                lng: -77.0272800
            },
            map: map,
            icon: '../recursos/img/1.png'
        });
        var marker = new google.maps.Marker({
            position: {
                lat: -12.097114,
                lng: -77.015196
            },
            map: map,
            icon: '../recursos/img/2.png'
        });
        var marker = new google.maps.Marker({
            position: {
                lat: -12.10144,
                lng: -77.03563
            },
            map: map,
            icon: '../recursos/img/3.png'
        });
        var marker = new google.maps.Marker({
            position: {
                lat: -12.09906,
                lng: -77.03469
            },
            map: map,
            icon: '../recursos/img/4.png'
        });
        var marker = new google.maps.Marker({
            position: {
                lat: -12.10098,
                lng: -77.03393
            },
            map: map,
            icon: '../recursos/img/5.png'
        });
        var marker = new google.maps.Marker({
            position: {
                lat: -12.10778,
                lng: -77.05025
            },
            map: map,
            icon: '../recursos/img/6.png'
        });
        var marker = new google.maps.Marker({
            position: {
                lat: -12.09572,
                lng: -77.05716
            },
            map: map,
            icon: '../recursos/img/7.png'
        });
        var marker = new google.maps.Marker({
            position: {
                lat: -12.09962,
                lng: -77.02071
            },
            map: map,
            icon: '../recursos/img/8.png'
        });
        var marker = new google.maps.Marker({
            position: {
                lat: -12.10597,
                lng: -77.04848
            },
            map: map,
            icon: '../recursos/img/9.png'
        });
        var marker = new google.maps.Marker({
            position: {
                lat: -12.09384,
                lng: -77.01619
            },
            map: map,
            icon: '../recursos/img/10.png'
        });
        var marker = new google.maps.Marker({
            position: {
                lat: -12.10767,
                lng: -77.05048
            },
            map: map,
            icon: '../recursos/img/11.png'
        });
        var marker = new google.maps.Marker({
            position: {
                lat: -12.10813,
                lng: -77.05456
            },
            map: map,
            icon: '../recursos/img/12.png'
        });
        var marker = new google.maps.Marker({
            position: {
                lat: -12.10722,
                lng: -77.05547
            },
            map: map,
            icon: '../recursos/img/13.png'
        });
    }(window, google));
});

