const calcbuttons       = document.querySelectorAll('input');
const onBtn             = document.querySelector('#calcBtnOn');
const calcWindow        = document.querySelector('#calcResult');
let isNewValueEntered   = false;
let isCalcBtnPressed    = false;
let calcAction          = '';
let calcMemory          = '';

calcbuttons.forEach(btn => {
    btn.addEventListener('click', function() {
        let btnValue = this.getAttribute('value');
        
        if(isCalculatorOn() !== 'ON') {
            calcExecute(btnValue);
        }
        if(btnValue === 'ON') {
            calcOn();
        }
    });
});

function calcExecute(pressedBtn) {
    switch(pressedBtn) {
        case '':
            calcInput();
            break;
        case 'CE':
            calcCE();
            break;
        case 'C':
            calcC();
            break;
        case '<-':
            calcBackspace();
            break;
        case 'OFF':
            calcOff();
            break;
        case '/':
            calcDivide();
            calcSaveToMemory(pressedBtn);
            break;
        case '*':
            calcMultiply()
            calcSaveToMemory(pressedBtn);
            break;
        case '-':
            calcSubtract();
            calcSaveToMemory(pressedBtn);
        case '+':
            calcSum();
            calcSaveToMemory(pressedBtn);
            break;
        case '=':
            calcEquals();
            break;
        case '.':
            calcDot();
            break;
        default:
            calcEnterNumber(pressedBtn);
    }
}
//General functions
function isCalculatorOn() { 
    let onOffBtnVal = document.getElementById('calcBtnOn').getAttribute('value');
    return onOffBtnVal;
}

function calcReset() {
    isNewValueEntered = false;
    isCalcBtnPressed = false;
    calcAction = '';
    calcMemory = '';
}

function calcSaveToMemory(calcAct) {
    if(calcWindow.value !== '') {
        calcMemory = calcWindow.value;
        isCalcBtnPressed = true;
        calcAction = calcAct;
    } else {
        calcAction = calcAct;
    }
}

//Specific functions
function calcInput() {
    calcWindow.blur();
}

function calcCE() {
    calcWindow.value = '';
}

function calcC() {
    calcWindow.value = '';
    calcReset();
}

function calcBackspace() {
    calcWindow.value = (calcWindow.value).slice(0,-1);
}

function calcOn() {
    onBtn.setAttribute('value', 'OFF');
    onBtn.style.background = '#ffede5';
    calcWindow.style.background = '#edffe5';
}

function calcOff() {
    onBtn.setAttribute('value', 'ON');
    onBtn.style.background = '#edffe5';
    calcWindow.style.background = '#ffede5';
    calcWindow.value = '';
    calcReset();
}

function calcDivide() {
    if(calcWindow.value !== '' && isNewValueEntered === true) {
        calcWindow.value = Number(calcMemory) / Number(calcWindow.value);
        calcReset();
    }
}

function calcMultiply() {
    if(calcWindow.value !== '' && isNewValueEntered === true) {
        calcWindow.value = Number(calcMemory) * Number(calcWindow.value);
        calcReset();
    }
}

function calcSubtract() {
    if(calcWindow.value !== '' && isNewValueEntered === true) {
        calcWindow.value = Number(calcMemory) - Number(calcWindow.value);
        calcReset();
    }
}

function calcSum() {
    if(calcWindow.value !== '' && isNewValueEntered === true) {
        calcWindow.value = Number(calcMemory) + Number(calcWindow.value);
        calcReset();
    }
}

function calcEquals() {
   if(calcWindow.value !== '' && isNewValueEntered === true) {
        switch(calcAction) {
            case '/':
                calcDivide();
                break;
            case '*':
                calcMultiply();
                break;
            case '-':
                calcSubtract();
                break;
            case '+':
                calcSum();
                break;
        }
    } 
}

function calcDot() {
    if((calcWindow.value).indexOf('.') === -1) {
        calcWindow.value = calcWindow.value + '.';
    }   
}

function calcEnterNumber(pressedBtn) {
    if(isCalcBtnPressed === false) {
        let calcWindVal = calcWindow.value;
        calcWindow.value = calcWindVal + pressedBtn;
    } else {
        calcWindow.value = ''
        isCalcBtnPressed = false;
        isNewValueEntered = true;
        calcWindow.value = pressedBtn;
    }
}