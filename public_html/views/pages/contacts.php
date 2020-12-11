<header class="page contacts">
    <foto></foto>
    <div>
        <div class="heder">
            <div><h3><?=$page['headtitle_'.$lang];?></h3></div>
            <div><p><?=$page['headdecript_'.$lang];?></p></div>
        </div>
        <a href="" class="link tomain"></a>
    </div>
</header>
<centre>
    <?php if(!empty($page['intro_'.$lang])) {?><intro><?=$page['intro_'.$lang];?></intro><?php } ?>
    <?php if(!empty($page['text_'.$lang])) {?><div class="text"><?=$page['text_'.$lang];?></div><?php } ?>
    <map>
        <script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script>
        <script>
            google.maps.event.addDomListener(window, 'load', init);
            var map;
            function init() {
                var mapOptions = {
                    center: new google.maps.LatLng(47.066987,37.505399),
                    zoom: 15,
                    zoomControl: true,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.DEFAULT,
                    },
                    disableDoubleClickZoom: true,
                    mapTypeControl: false,
                    scaleControl: false,
                    scrollwheel: false,
                    panControl: false,
                    streetViewControl: false,
                    draggable : true,
                    overviewMapControl: false,
                    overviewMapControlOptions: {
                        opened: false,
                    },
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    styles: [
          {
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [
              { "color": "#d3d3d3" }
            ]
          },{
            "featureType": "transit",
            "stylers": [
              { "color": "#808080" },
              { "visibility": "off" }
            ]
          },{
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
              { "visibility": "on" },
              { "color": "#b3b3b3" }
            ]
          },{
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [
              { "color": "#ffffff" }
            ]
          },{
            "featureType": "road.local",
            "elementType": "geometry.fill",
            "stylers": [
              { "visibility": "on" },
              { "color": "#ffffff" },
              { "weight": 1.8 }
            ]
          },{
            "featureType": "road.local",
            "elementType": "geometry.stroke",
            "stylers": [
              { "color": "#d7d7d7" }
            ]
          },{
            "featureType": "poi",
            "elementType": "geometry.fill",
            "stylers": [
              { "visibility": "on" },
              { "color": "#ebebeb" }
            ]
          },{
            "featureType": "administrative",
            "elementType": "geometry",
            "stylers": [
              { "color": "#a7a7a7" }
            ]
          },{
            "featureType": "road.arterial",
            "elementType": "geometry.fill",
            "stylers": [
              { "color": "#ffffff" }
            ]
          },{
            "featureType": "road.arterial",
            "elementType": "geometry.fill",
            "stylers": [
              { "color": "#ffffff" }
            ]
          },{
            "featureType": "landscape",
            "elementType": "geometry.fill",
            "stylers": [
              { "visibility": "on" },
              { "color": "#efefef" }
            ]
          },{
            "featureType": "road",
            "elementType": "labels.text.fill",
            "stylers": [
              { "color": "#696969" }
            ]
          },{
            "featureType": "administrative",
            "elementType": "labels.text.fill",
            "stylers": [
              { "visibility": "on" },
              { "color": "#737373" }
            ]
          },{
            "featureType": "poi",
            "elementType": "labels.icon",
            "stylers": [
              { "visibility": "off" }
            ]
          },{
            "featureType": "poi",
            "elementType": "labels",
            "stylers": [
              { "visibility": "off" }
            ]
          },{
            "featureType": "road.arterial",
            "elementType": "geometry.stroke",
            "stylers": [
              { "color": "#d6d6d6" }
            ]
          },{
            "featureType": "road",
            "elementType": "labels.icon",
            "stylers": [
              { "visibility": "off" }
            ]
          },{
          },{
            "featureType": "poi",
            "elementType": "geometry.fill",
            "stylers": [
              { "color": "#dadada" }
            ]
          }
        ],
                }
                var mapElement = document.getElementById('kXoXUkK0VEU');
                var map = new google.maps.Map(mapElement, mapOptions);
                var locations = [
        ['ООО \"СРЗ\"', 'Азовский Судоремонтный завод', 'undefined', 'undefined', 'asrz.com.ua', 47.069583, 37.51776, 'images/markers/srz.png'],
        ['ООО УК \"МИГ\"', 'Управляющая компания', 'undefined', 'info@ukmig.com.ua', 'ukmig.com.ua', 47.066427, 37.507466, 'images/markers/mig.png'],
        ['ООО \"УкрТрансАгро\"', 'Зерновой терминал', '+38 062 9595820', 'uta@uta.dn.ua', 'uta.dn.ua', 47.06370012667452,37.511966428527785, 'images/markers/uta.png'],
        ['ООО \"УТА Логистик\"', 'оптимальная логистика', 'undefined', 'undefined', 'undefined', 47.069, 37.513303, 'images/markers/uta-logistic.png'],
        ['ООО \"Мартлет\"', 'фумигация', 'undefined', 'undefined', 'martlet.com.ua', 47.07, 37.513747, 'images/markers/Martlet-logo.png'],

        ['ООО \"Маритайм Логистикс\"', 'морская логистика', '+38 062 9407915', 'undefined', 'maritime-logistics.com.ua', 47.061126, 37.504180, 'images/markers/maritime-logistics.png']
                ];
                for (i = 0; i < locations.length; i++) {
                                if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
                                if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
                                if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
                   if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
                   if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
                    marker = new google.maps.Marker({
                        icon: markericon,
                        position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                        map: map,
                        title: locations[i][0],
                        desc: description,
                        tel: telephone,
                        email: email,
                        web: web
                    });
        link = '';     }

        }
        </script>
        <style>
            #kXoXUkK0VEU {
                height:500px;
                width:100%;
            }
            .gm-style-iw * {
                display: block;
                width: 100%;
            }
            .gm-style-iw h4, .gm-style-iw p {
                margin: 0;
                padding: 0;
            }
            .gm-style-iw a {
                color: #4272db;
            }
        </style>

        <div id='kXoXUkK0VEU'></div>
    </map>
</centre>
