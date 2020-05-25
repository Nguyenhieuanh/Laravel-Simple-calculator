let isCalculate = false;
let result = document.getElementById('result');
function clk_btn(btn) {
    if (isCalculate) {
        result.value = '';
        isCalculate = false;
    }
    result.value += btn;
}

function clear_btn(btn) {
    if (btn == 'C' || btn == 'CE') {
        result.value = '';
    }
}