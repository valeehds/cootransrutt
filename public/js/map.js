import L from 'leaflet';

document.addEventListener('DOMContentLoaded', function() {
  // Inicializa el mapa en el contenedor 'map'
  var map = L.map('map').setView([51.505, -0.09], 13);

  // Agrega una capa de mapa de OpenStreetMap
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  // Crea un marcador y agrega al mapa
  var marker = L.marker([51.5, -0.09]).addTo(map);

  // Simula movimiento del marcador
  var latlngs = [
    [51.5, -0.09],
    [51.52, -0.1],
    [51.53, -0.12]
  ];

  var currentIndex = 0;

  function moveMarker() {
    marker.setLatLng(latlngs[currentIndex]).update();
    currentIndex = (currentIndex + 1) % latlngs.length;
    setTimeout(moveMarker, 1000); // Mueve el marcador cada segundo
  }

  moveMarker(); // Inicia el movimiento del marcador
});
