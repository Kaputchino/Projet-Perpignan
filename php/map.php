
<?php
        require 'html/map.html';
        $request="SELECT * FROM `trips` WHERE `idUser`="."0";
        $result = mysqli_query($connexion, $request); 
        foreach($result as $value){
        print_r($value);
        $requestFirst="SELECT * FROM `stations` WHERE `id`=".$value["idFirstStation"];
        $resultFirst = mysqli_query($connexion, $requestFirst); 
        foreach ($resultFirst as $valueFirst){
            echo("<script>adaptedDrawMarker(".$valueFirst.");
            var stations = {
                'lo': { 'lat': 120,'lon': 2.349903 }

            };
            drawMarker(stations);


            </script>");
        
             }
        }
?>