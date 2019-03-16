var preke = {
title: 'Nešiojamas kompiuteris',
description: 'NVIDIA GeForce GTX 1070 grafinis adapteris su Max-Q4 technologija, Intel Core 8th Generation procesorius ir pažangi aušinimo sistema suteikia reikiamą galią, nesvarbu, kur būtumėte.',
discount: 30,
isItNew: true,
color: 0,
price: 699.00,
currency: 'EUR',
};

var formattedPrice = (preke.price).toFixed(2);
var priceWithDiscount = (preke.price - preke.discount).toFixed(2);

var titleHTML = 
`<h3>
    <i class="fas fa-shopping-basket"> Prekė: 
    <span class="textToHighlight">${preke.title}<span></i>
</h3>`;
var priceHTML = 
`<h4>
    <i class="fas fa-money-bill-alt"> Kaina:</i>
    <span id="oldPrice">${formattedPrice} ${preke.currency}</span>&nbsp;&nbsp;
    <span id="newPrice">${priceWithDiscount} ${preke.currency}</span>
</h4>`;
var descriptionHTML = 
`<p>
    <i class="fas fa-info-circle"> Aprašymas:</i>&nbsp;
    <span class="textToHighlight">${preke.description}</span>
</p>`;
var colorHTML = 
`<p>
    <i class="fas fa-palette"> Spalva: </i>
    <select>
        <option value="Black">Juoda</option>
        <option value="Red">Raudona</option>
        <option value="Green">Žalia</option>
        <option value="Silver">Sidabrinė</option>
    </select>
</p>`;

document.write(titleHTML);
document.write(priceHTML);
document.write(descriptionHTML);
document.write(colorHTML);

var selectorValueFromColorVar = document.getElementsByTagName('option')[preke.color];
var iconColors = document.getElementsByClassName('fas fa-palette')[0];
var selectorElement = document.getElementsByTagName('select')[0];

selectorValueFromColorVar.setAttribute('selected','');
iconColors.style.color = selectorElement.value;

selectorElement.addEventListener('change', function(){
    var selectorIndex = selectorElement.options[selectorElement.selectedIndex].index;
    preke.color = selectorIndex;
    iconColors.style.color = selectorElement.value;
});

if(!preke.isItNew) {
    var highlightedText = document.getElementsByClassName('textToHighlight');
    for(var i = 0; i<highlightedText.length; i++){
        highlightedText[i].style.color = "green";
    }
}