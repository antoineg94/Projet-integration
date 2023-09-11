
// if radio button is checked, display div with input and label
function displayTemoins1() {
    const radioTemoins = document.getElementById("radioTemoins");
    const btnTemoins = document.getElementById("btnTemoins");
    const divT1 = document.getElementById("divTemoins1");
    if (radioTemoins.checked) {
        divT1.style.display = "block";
        btnTemoins.style.display = "block";
    } else {
        divT1.style.display = "none";
        btnTemoins.style.display = "none";
    }
}


// if radio button is checked, display div with input and label
function displayTemoins2() {
    const btnTemoins = document.getElementById("btnTemoins");
    const divT2 = document.getElementById("divTemoins2");
    if (btnTemoins.checked) {
        divT2.style.display = "block";
        btnTemoins.style.display = "none";
    } else {
        divT2.style.display = "none";
        btnTemoins.style.display = "block";
    }
}

