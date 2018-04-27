// Coordenadas a, b e c
let a, b, c;
let origin, directionsService, directionsDisplay;

function initMap() {
    // Nova instância do mapa
    let map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -23.1870104, lng: -50.6564267},
        zoom: 16
    });

    // Origem definida no local em que mapa está inicializado
    origin = map.getCenter();
    
    directionsService = new google.maps.DirectionsService;
    directionsDisplay = new google.maps.DirectionsRenderer({ 
        map: map,
        polylineOptions: {
          strokeOpacity: 0.9,
          strokeWeight: 4,
          strokeColor: "black",
          zIndex: 10
        }
    });
    directionsDisplay.setMap(map);

    // input com primeiro endereço
    let end1 = /** @type {!HTMLInputElement} */(document.getElementById('end1'));
    // input com segundo endereço
    let end2 = /** @type {!HTMLInputElement} */(document.getElementById('end2'));
    // input com terceiro endereço
    let end3 = /** @type {!HTMLInputElement} */(document.getElementById('end3'));

    // Autocomplete para cada endereço
    let autocomplete1 = new google.maps.places.Autocomplete(end1);
    let autocomplete2 = new google.maps.places.Autocomplete(end2);
    let autocomplete3 = new google.maps.places.Autocomplete(end3);
    
    autocomplete1.addListener('place_changed', function() {
        a = autocomplete1.getPlace();
        console.log('place', a);
    });

    autocomplete2.addListener('place_changed', function() {
        b = autocomplete2.getPlace();
        console.log('place', b);
    });

    autocomplete3.addListener('place_changed', function() {
        c = autocomplete3.getPlace();
        console.log('place', c);
    });

    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        // Obter localização atual
        navigator.geolocation.getCurrentPosition(function(position) {
            console.log("navigator.geolocation", position);
            // Coordenadas da localização atual
            let meuLocal = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            console.log("meuLocal", meuLocal);
            // Centralizar mapa na localização atual
            map.setCenter(meuLocal);

            origin = map.getCenter();

        }, function() {
            console.log("Browser doesn't support Geolocation");
        });
    } else {
        console.log("Browser doesn't support Geolocation");
    }
}

// Dado os pontos A, B e C, calcular a melhor rota e traçar no mapa
function calculateRoute() {
    let waypts = [];
    let distances = [];
    if(a){
        // Retorna distância em metros do ponto meuLocal A
        distances.push(google.maps.geometry.spherical.computeDistanceBetween(origin, a.geometry.location));
        console.log("meuLocal -> A", distances[distances.length-1]);
        waypts.push({
            location: a.geometry.location,
            stopover: true
        });
    }

    if(b) {
        // Retorna distância em metros do ponto meuLocal B
        distances.push(google.maps.geometry.spherical.computeDistanceBetween(origin, b.geometry.location));
        console.log("meuLocal -> B", distances[distances.length-1]);
        
        waypts.push({
            location: b.geometry.location,
            stopover: true
        });
    }

    if(c){
        // Retorna distância em metros do ponto meuLocal C
        distances.push(google.maps.geometry.spherical.computeDistanceBetween(origin, c.geometry.location));
        console.log("meuLocal -> C", distances[distances.length-1]);
        
        waypts.push({
            location: c.geometry.location,
            stopover: true
        });
    }
    // O local mais distante sera o destino
    // Obter o indice do local mais distance
    console.log(distances);
    const indexMax = distances.indexOf(Math.max(...distances));
    // Definir o destino pelo local mais distante
    let destination = waypts[indexMax].location;

    // Remover destino dos pontos intermediários
    waypts.splice(indexMax, 1);

    let request = {
        origin: origin,
        destination: destination,
        waypoints: waypts,
        optimizeWaypoints: true,
        travelMode: 'DRIVING'
    };

    directionsService.route(request, function(result, status) {
        if (status == 'OK') {
            const routes = result['routes'][0].legs;
            console.log("result", result);
            console.log("routes", routes);

            directionsDisplay.setDirections(result);
            // Distância em metros
            let distance = 0;
            // Duração em segundos
            let duration = 0;
            // Calcular tempo e distancia total
            routes.map((route) => {
                distance += route.distance.value;
                duration += route.duration.value;
            });

            document.getElementById('info').innerHTML = `
                <p>Distância: <strong>${(distance/1000).toFixed(2)} km</strong></p>
                <p>Tempo estimado: <strong>${(duration/60).toFixed(1)} minutos</strong></p>
            `;
        }
    });
}
