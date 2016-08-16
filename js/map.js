var mainMap;
var allMarkers = [];
var userMarker;
var directionsService;
var directionsDisplay;

function initMap() {

	directionsService = new google.maps.DirectionsService;
  	directionsDisplay = new google.maps.DirectionsRenderer;

	var mapContainer = document.querySelector('#map-container');

	var options = {
		center: {
			lat: -41.294989,
			lng: 174.783620,
		},
		zoom: 16
	};

	mainMap = new google.maps.Map(mapContainer, options);

	directionsDisplay.setMap(mainMap);

	placeStoreMarkers();

	getUserLocation();
}

function placeStoreMarkers() {

	var locations = [
		{
			title: "Blue Lotus Tattoo Studio",
			lat: -36.741395,
			lng: 174.711233,
			
		},

		{
			title: "Ninjaflower Piercing Studio",
			lat: -41.291039,
			lng: 174.774941,

		}
	];

	for( var i=0; i<locations.length; i++ ) {

		var marker = new google.maps.Marker({
			position: {
				lat: locations[i].lat,
				lng: locations[i].lng
			},
			map: mainMap,
			title: locations[i].title,
			id: i,
		});

	google.maps.event.addListener(marker, 'click', function() {
    window.location.href = this.url;
});

		allMarkers.push(marker);
	}

	console.log(allMarkers);

	populateStorePicker(locations);

}

function populateStorePicker(locations) {

	console.log(locations);

	var storePickerElement = document.querySelector('#store-picker');

	var optionElement = document.createElement('option');
	optionElement.innerHTML = "Please select a store...";
	storePickerElement.appendChild(optionElement);

	for( var i=0; i<locations.length; i++ ) {

		var optionElement = document.createElement('option');

		optionElement.innerHTML = locations[i].title;

		storePickerElement.appendChild(optionElement);

	}

	storePickerElement.onchange = showChosenLocation;

}

function showChosenLocation() {

	var selectElement = this;

	var selectedOptionIndex = selectElement.selectedIndex;

	var optionElement = selectElement[selectedOptionIndex];

	var optionText = optionElement.value;

	var theChosenMarker;
	for( var i=0; i<allMarkers.length; i++ ) {

		if( optionText == allMarkers[i].title ) {
	
			theChosenMarker = allMarkers[i];

			i = allMarkers.length;
		}

	}

	if( theChosenMarker != undefined ) {

		mainMap.panTo({
			lat: theChosenMarker.getPosition().lat(),
			lng: theChosenMarker.getPosition().lng()
		});

		mainMap.setZoom(15);

	}

}








