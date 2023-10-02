const selectSecouriste = document.getElementById("selectSecouriste");
const ajoutSecouriste = document.getElementById("ajoutSecouriste");

selectSecouriste.addEventListener("change", function () {

if (selectSecouriste.value == "1") 
{
    ajoutSecouriste.style.display = "block"; 
} 

else if(selectSecouriste.value == "0")
{
    ajoutSecouriste.style.display = "none";
}

});


