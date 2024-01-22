'use strict';

function clearInput(name){
    document.getElementById(name).value = '';
    document.getElementById('filtering-form').submit()
}

window.clearInput = clearInput;

