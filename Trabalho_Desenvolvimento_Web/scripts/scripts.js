function initMap() {
    const mapOptions = {
      center: { lat: 37.7749, lng: -122.4194 },
      zoom: 10,
    };
  
    const map = new google.maps.Map(document.getElementById("map"), mapOptions);
  }

  document.addEventListener("DOMContentLoaded", function () {
    const parkingItems = document.querySelectorAll(".parking-list li");
    parkingItems.forEach(function (item) {
      item.addEventListener("click", function () {
        const name = item.querySelector("h2").innerText;
        console.log("Estacionamento selecionado:", name);
      });
    });
  });

  