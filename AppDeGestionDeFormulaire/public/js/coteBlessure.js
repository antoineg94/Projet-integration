// create a function that adds two radio buttons
function addRadioButtons(divName) {
    alert("test");
    const selectBlessure = document.getElementById("blessure");
    selectBlessure.addEventListener("change", function () {
    var newdiv = document.createElement('div');
    newdiv.innerHTML = "<input type='radio' name='coteBlessure' value='gauche'> Gauche<br><input type='radio' name='coteBlessure' value='droite'> Droite";
    document.getElementById(divName).appendChild(newdiv);
    });
}