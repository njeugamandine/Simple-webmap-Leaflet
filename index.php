<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<title>Njeugeut- OpenlayerWebmap</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="css/leaflet.css"><link rel="stylesheet" href="css/L.Control.Locate.min.css">
        <link rel="stylesheet" href="css/qgis2web.css"><link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/leaflet-control-geocoder.Geocoder.css">
        <link rel="stylesheet" href="css/leaflet-measure.css">
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        </style>
        <title></title>
    </head>
    <body>
        <div id="map">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script><script src="js/L.Control.Locate.min.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-control-geocoder.Geocoder.js"></script>
        <script src="js/leaflet-measure.js"></script>
        <script src="data/Region_6.js"></script>
        <script src="data/Departement_7.js"></script>
        <script src="data/SousPrefecture_8.js"></script>
        <script>
        var highlightLayer;
        function highlightFeature(e) {
            highlightLayer = e.target;
            highlightLayer.openPopup();
        }
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[4.20243604225,-10.51958298171051],[10.896010807749999,-0.57461619828949]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank"></a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps"></a> &middot; <a href="https://qgis.org"></a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        L.control.locate({locateOptions: {maxZoom: 19}}).addTo(map);
        var measureControl = new L.Control.Measure({
            position: 'topleft',
            primaryLengthUnit: 'meters',
            secondaryLengthUnit: 'kilometers',
            primaryAreaUnit: 'sqmeters',
            secondaryAreaUnit: 'hectares'
        });
        measureControl.addTo(map);
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .innerHTML = '';
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .className += ' fas fa-ruler';
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_ESRIShadedRelief_0');
        map.getPane('pane_ESRIShadedRelief_0').style.zIndex = 400;
        var layer_ESRIShadedRelief_0 = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Shaded_Relief/MapServer/tile/{z}/{y}/{x}', {
            pane: 'pane_ESRIShadedRelief_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 20
        });
        layer_ESRIShadedRelief_0;
        map.createPane('pane_ESRISatellite_1');
        map.getPane('pane_ESRISatellite_1').style.zIndex = 401;
        var layer_ESRISatellite_1 = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            pane: 'pane_ESRISatellite_1',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 20
        });
        layer_ESRISatellite_1;
        map.createPane('pane_ESRIStandard_2');
        map.getPane('pane_ESRIStandard_2').style.zIndex = 402;
        var layer_ESRIStandard_2 = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
            pane: 'pane_ESRIStandard_2',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 20
        });
        layer_ESRIStandard_2;
        map.createPane('pane_GoogleSatellite_3');
        map.getPane('pane_GoogleSatellite_3').style.zIndex = 403;
        var layer_GoogleSatellite_3 = L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            pane: 'pane_GoogleSatellite_3',
            opacity: 1.0,
            attribution: '<a href="https://www.google.at/permissions/geoguidelines/attr-guide.html">Map data ©2015 Google</a>',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 20
        });
        layer_GoogleSatellite_3;
        map.createPane('pane_OpenTopoMap_4');
        map.getPane('pane_OpenTopoMap_4').style.zIndex = 404;
        var layer_OpenTopoMap_4 = L.tileLayer('https://a.tile.opentopomap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OpenTopoMap_4',
            opacity: 1.0,
            attribution: '<a href="https://www.openstreetmap.org/copyright">Kartendaten: © OpenStreetMap-Mitwirkende, SRTM | Kartendarstellung: © OpenTopoMap (CC-BY-SA)</a>',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 18
        });
        layer_OpenTopoMap_4;
        map.createPane('pane_OSMStandard_5');
        map.getPane('pane_OSMStandard_5').style.zIndex = 405;
        var layer_OSMStandard_5 = L.tileLayer('http://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OSMStandard_5',
            opacity: 1.0,
            attribution: '<a href="https://www.openstreetmap.org/copyright"></a>',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_OSMStandard_5;
        map.addLayer(layer_OSMStandard_5);
        function pop_Region_6(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Code Region: </th>\
                        <td>' + (feature.properties['GID_1'] !== null ? autolinker.link(feature.properties['GID_1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Region: </th>\
                        <td>' + (feature.properties['NAME_1'] !== null ? autolinker.link(feature.properties['NAME_1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Region_6_0() {
            return {
                pane: 'pane_Region_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 7.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(145,82,45,0.0)',
                interactive: true,
            }
        }
        
        map.createPane('pane_Region_6');
        map.getPane('pane_Region_6').style.zIndex = 406;
        map.getPane('pane_Region_6').style['mix-blend-mode'] = 'normal';
        var layer_Region_6 = new L.geoJson(json_Region_6, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Region_6',
            layerName: 'layer_Region_6',
            pane: 'pane_Region_6',
            onEachFeature: pop_Region_6,
            style: style_Region_6_0,
        });
        bounds_group.addLayer(layer_Region_6);
        map.addLayer(layer_Region_6);
        function pop_Departement_7(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Code Departement: </th>\
                        <td>' + (feature.properties['GID_2'] !== null ? autolinker.link(feature.properties['GID_2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Region: </th>\
                        <td>' + (feature.properties['NAME_1'] !== null ? autolinker.link(feature.properties['NAME_1'].toLocaleString()) : '') + '</td>\
                    	</tr>\
                    <tr>\
                        <th scope="row">Departement: </th>\
                        <td>' + (feature.properties['NAME_2'] !== null ? autolinker.link(feature.properties['NAME_2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Departement_7_0() {
            return {
                pane: 'pane_Departement_7',
                opacity: 1,
                color: 'rgba(224,30,26,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(125,139,143,0.0)',
                interactive: true,
            }
        }
        map.createPane('pane_Departement_7');
        map.getPane('pane_Departement_7').style.zIndex = 407;
        map.getPane('pane_Departement_7').style['mix-blend-mode'] = 'normal';
        var layer_Departement_7 = new L.geoJson(json_Departement_7, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Departement_7',
            layerName: 'layer_Departement_7',
            pane: 'pane_Departement_7',
            onEachFeature: pop_Departement_7,
            style: style_Departement_7_0,
        });
        bounds_group.addLayer(layer_Departement_7);
        function pop_SousPrefecture_8(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Code sous-prefecture: </th>\
                        <td>' + (feature.properties['GID_3'] !== null ? autolinker.link(feature.properties['GID_3'].toLocaleString()) : '') + '</td>\
                        </tr>\
                    <tr>\
                        <th scope="row">Sous-prefecture: </th>\
                        <td>' + (feature.properties['NAME_3'] !== null ? autolinker.link(feature.properties['NAME_3'].toLocaleString()) : '') + '</td>\
                        </tr>\
                    <tr>\
                        <th scope="row">Region: </th>\
                        <td>' + (feature.properties['NAME_1'] !== null ? autolinker.link(feature.properties['NAME_1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Departement: </th>\
                        <td>' + (feature.properties['NAME_2'] !== null ? autolinker.link(feature.properties['NAME_2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_SousPrefecture_8_0() {
            return {
                pane: 'pane_SousPrefecture_8',
                opacity: 1,
                color: 'rgba(48,135,43,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(190,178,151,0.0)',
                interactive: true,
            }
        }
        map.createPane('pane_SousPrefecture_8');
        map.getPane('pane_SousPrefecture_8').style.zIndex = 408;
        map.getPane('pane_SousPrefecture_8').style['mix-blend-mode'] = 'normal';
        var layer_SousPrefecture_8 = new L.geoJson(json_SousPrefecture_8, {
            attribution: '',
            interactive: true,
            dataVar: 'json_SousPrefecture_8',
            layerName: 'layer_SousPrefecture_8',
            pane: 'pane_SousPrefecture_8',
            onEachFeature: pop_SousPrefecture_8,
            style: style_SousPrefecture_8_0,
        });
        bounds_group.addLayer(layer_SousPrefecture_8);
        var osmGeocoder = new L.Control.Geocoder({
            collapsed: true,
            position: 'topleft',
            text: 'Search',
            title: 'Testing'
        }).addTo(map);
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .className += ' fa fa-search';
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .title += 'Search for a place';
        var baseMaps = {};
        L.control.layers(baseMaps,{'<img src="legend/SousPrefecture_8.png" /> Sous-Prefecture': layer_SousPrefecture_8,'<img src="legend/Departement_7.png" /> Departement': layer_Departement_7,'<img src="legend/Region_6.png" /> Region': layer_Region_6,"OSM Standard": layer_OSMStandard_5,"OpenTopoMap": layer_OpenTopoMap_4,"Google Satellite": layer_GoogleSatellite_3,"ESRI Standard": layer_ESRIStandard_2,"ESRI Satellite": layer_ESRISatellite_1,"ESRI Shaded Relief": layer_ESRIShadedRelief_0,}).addTo(map);
        setBounds();
        var i = 0;
        layer_Region_6.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['NAME_1'] !== null?String('<div style="color: #323232; font-size: 12pt; font-weight: bold; font-family: \'Arial\', sans-serif;">' + layer.feature.properties['NAME_1']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_Region_6'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        var i = 0;
        layer_Departement_7.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['NAME_2'] !== null?String('<div style="color: #973434; font-size: 10pt; font-weight: bold; font-family: \'Arial\', sans-serif;">' + layer.feature.properties['NAME_2']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_Departement_7'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        var i = 0;
        layer_SousPrefecture_8.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['NAME_3'] !== null?String('<div style="color: #30872b; font-size: 8pt; font-family: \'Arial\', sans-serif;">' + layer.feature.properties['NAME_3']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_SousPrefecture_8'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        resetLabels([layer_Region_6,layer_Departement_7,layer_SousPrefecture_8]);
        map.on("zoomend", function(){
            resetLabels([layer_Region_6,layer_Departement_7,layer_SousPrefecture_8]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_Region_6,layer_Departement_7,layer_SousPrefecture_8]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_Region_6,layer_Departement_7,layer_SousPrefecture_8]);
        });
        </script>
    </body>
</html>
