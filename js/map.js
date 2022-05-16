function drawMarker(stations){
    for(station in stations){
        // On crée le marqueur et on lui attribue une popup
        var marqueur = L.marker([stations[station].lat, stations[station].lon]); //.addTo(carte); Inutile lors de l'utilisation des clusters
        marqueur.bindPopup("<p>"+station+"</p>");
        marqueur.addTo(map);
        // On ajoute le marqueur au tableau
    }
};
function drawPath(path){
    // create a red polyline from an array of LatLng points
    var latlngs = [
        [45.51, -122.68],
        [37.77, -122.43],
        [34.04, -118.2]
    ];

    var polyline = L.polyline(latlngs, {color: 'red'}).addTo(map);

    // zoom the map to the polyline
    map.fitBounds(polyline.getBounds());
};