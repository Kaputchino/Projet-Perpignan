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


    var polyline = L.polyline(latlngs, {color: 'red'}).addTo(map);
};
function initMapDBLink(){
    var mysql = require('mysql');

    var con = mysql.createConnection({
      host: "localhost",
      user: "root",
      password: ""
    });
    
    con.connect(function(err) {
    if (err) throw err;
        console.log("Connected!");

    });
}