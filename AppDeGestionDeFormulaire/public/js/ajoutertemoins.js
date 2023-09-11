// if radio button is checked, display div with input and label

    const selectTemoins = document.getElementById("selectTemoins");
    const divT1 = document.getElementById("divTemoins1");
    const divT2 = document.getElementById("divTemoins2");
    if (selectTemoins.value = "1") {
        divT1.style.display = "block";
        divT2.style.display = "block";
    } else {
        divT1.style.display = "none";
        divT2.style.display = "none";
    }


