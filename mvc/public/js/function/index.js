function select(id='selector') {
    const element =  document.querySelector(id);
    return element;
}

function selectAll(id='selector') {
    const [...all] = document.querySelectorAll(id);
    return all;
}

// prototypes

HTMLInputElement.prototype.valueString = function() {
    return this.value.toString()
}