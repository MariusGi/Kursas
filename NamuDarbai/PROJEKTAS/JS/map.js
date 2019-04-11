//AmCharts Javascript
let map = AmCharts.makeChart("chartdiv", {

	"type": "map",
    "theme": "none",
    "pathToImages": "http://www.amcharts.com/lib/3/images/",

	"dataProvider": {
     "map": "worldLow",
		"getAreasFromMap": true
	},
	"areasSettings": {
		"autoZoom": false,
		"selectedColor": "#CC0000",
        "selectable": true
	}
});

//My Javascript

//Adding event listeners to all countries
map.addListener("clickMapObject", function (event) {
    let selectedCountry = event.mapObject.title;
    let countryDataArr = getCountryData(selectedCountry);
    
    showModal(countryDataArr); 
});

//Function returns data from countryapi.js
function getCountryData(clickedCountry) {
    for(var i = 0; i < countryData.Response.length; i++) {
        if(countryData.Response[i].Name === clickedCountry) {
            let clickedCountryData = { 
                'country' : clickedCountry,
                'region' : countryData.Response[i].Region,
                'area' : countryData.Response[i].Area,
                'language' : countryData.Response[i].NativeLanguage,
                'CurrencyCode' : countryData.Response[i].CurrencyCode,
                'CurrencyName' : countryData.Response[i].CurrencyName,
                'Flag' : countryData.Response[i].Flag
            }
            return clickedCountryData;
        }
    }
}

//Function adds data from getCountryData function into modal and displays it
function showModal(clickedCountry, clickedCountryDataArr) {
    let clickedCountryHTML = '<p>Country: <img class="countryFlag" src="' + clickedCountry.Flag + '" alt="Flag"> ' + clickedCountry.country + '</p>';
    let clickedRegionHTML = '<p>Region: ' + clickedCountry.region + '</p>';
    let clickedAreaHTML = '<p>Area: ' + clickedCountry.area + ' km\xB2</p>';
    let clickedLanguageHTML = '<p>Language: ' + clickedCountry.language + '</p>';
    let clickedCurrencyCodeHTML = '<p>Currency: ' + clickedCountry.CurrencyName + ' (' + clickedCountry.CurrencyCode + ')</p>';
    
    
    $('.modal').empty();
    $('#ex1').append(clickedCountryHTML, clickedRegionHTML,clickedAreaHTML,clickedLanguageHTML,clickedCurrencyCodeHTML);
    $('.modal').modal();
    $('.close-modal').hide();
}