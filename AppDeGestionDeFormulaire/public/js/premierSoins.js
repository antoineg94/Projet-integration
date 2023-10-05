const selectSecouriste = document.getElementById("premiers_soins");
const ajoutSecouriste = document.getElementById("nom_secouriste");

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


