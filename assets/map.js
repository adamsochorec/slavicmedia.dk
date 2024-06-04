// MAP START
function createMap() {
  const map = L.map("map");
  map.attributionControl.setPrefix("");
  L.tileLayer(
    "https://{s}.tile.thunderforest.com/outdoors/{z}/{x}/{y}{r}.png?apikey=7530a0f24d13406081285d989b4b17e5",
    {
      attribution:
        'Maps &copy; <a href="https://www.thunderforest.com">Thunderforest</a>, Data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
      maxZoom: 22,
    }
  ).addTo(map);
  return map; // return the map object
}

const map = createMap(); // call createMap() to get the map object
map.setView([55.55781, 8.25], 4); // set the view of a map

// lighthouse
const lighthouse = L.circle([55.55781, 8.08323], {
  color: "black",
  fillColor: "black",
  fillOpacity: 0.5,
  radius: 200,
}).addTo(map);
lighthouse.bindPopup("Blåvand Lighthouse");
