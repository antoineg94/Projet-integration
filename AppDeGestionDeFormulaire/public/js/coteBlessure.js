const blessure0 = document.getElementById("nature_blessure1");
const blessure1 = document.getElementById("nature_blessure2");
const blessure2 = document.getElementById("nature_blessure3");
const blessure3 = document.getElementById("nature_blessure4");
const blessure4 = document.getElementById("nature_blessure5");
const blessure5 = document.getElementById("nature_blessure6");
const blessure6 = document.getElementById("nature_blessure7");
const blessure7 = document.getElementById("nature_blessure8");
const blessure8 = document.getElementById("nature_blessure9");
const blessure9 = document.getElementById("nature_blessure10");

const cote0 = document.getElementById("cote0");
const cote1 = document.getElementById("cote1");
const cote2 = document.getElementById("cote2");
const cote3 = document.getElementById("cote3");
const cote4 = document.getElementById("cote4");
const cote5 = document.getElementById("cote5");
const cote6 = document.getElementById("cote6");
const cote7 = document.getElementById("cote7");
const cote8 = document.getElementById("cote8");
const cote9 = document.getElementById("cote9");

let valeur0 = false;
let valeur1 = false;
let valeur2 = false;
let valeur3 = false;
let valeur4 = false;
let valeur5 = false;
let valeur6 = false;
let valeur7 = false;
let valeur8 = false;
let valeur9 = false;

blessure0.addEventListener("change", function () {

if(document.getElementById('nature_blessure1').value == "Tête, visage, nez, yeux, oreille") {
    cote0.style.display = "block";

    if(valeur0 == true){
        valeur0 = false;
        cote0.style.display = "none";        

    }
    else{
        valeur0 = true;
    }
}

});

blessure1.addEventListener("change", function () {
    if(document.getElementById('nature_blessure2').value == "Torse") {
        cote1.style.display = "block";
    
        if(valeur1 == true){
            valeur1 = false;
            cote1.style.display = "none";        
    
        }
        else{
            valeur1 = true;
        }
    }
    
    });  

blessure2.addEventListener("change", function () {
    if(document.getElementById('nature_blessure3').value == "Poumons") {
        cote2.style.display = "block";
    
        if(valeur2 == true){
            valeur2 = false;
            cote2.style.display = "none";        
    
        }
        else{
            valeur2 = true;
        }
    }
    
});  

blessure3.addEventListener("change", function () {
    if(document.getElementById('nature_blessure4').value == "Bras, épaule, coude") {
        cote3.style.display = "block";
    
        if(valeur3 == true){
            valeur3 = false;
            cote3.style.display = "none";        
    
        }
        else{
            valeur3 = true;
        }
    }
    
});

blessure4.addEventListener("change", function () {
    if(document.getElementById('nature_blessure5').value == "Poignet, main, doigt") {
        cote4.style.display = "block";
    
        if(valeur4 == true){
            valeur4 = false;
            cote4.style.display = "none";        
    
        }
        else{
            valeur4 = true;
        }
    }
    
});

blessure5.addEventListener("change", function () {
    if(document.getElementById('nature_blessure6').value == "Dos") {
        cote5.style.display = "block";
    
        if(valeur5 == true){
            valeur5 = false;
            cote5.style.display = "none";        
    
        }
        else{
            valeur5 = true;
        }
    }
    
});

blessure6.addEventListener("change", function () {
    if(document.getElementById('nature_blessure7').value == "Hanche") {
        cote6.style.display = "block";
    
        if(valeur6 == true){
            valeur6 = false;
            cote6.style.display = "none";        
    
        }
        else{
            valeur6 = true;
        }
    }
    
});

blessure7.addEventListener("change", function () {
    if(document.getElementById('nature_blessure8').value == "Jambe, genou") {
        cote7.style.display = "block";
    
        if(valeur7 == true){
            valeur7 = false;
            cote7.style.display = "none";        
    
        }
        else{
            valeur7 = true;
        }
    }
    
});

blessure8.addEventListener("change", function () {
    if(document.getElementById('nature_blessure9').value == "Pied, orteil, cheville") {
        cote8.style.display = "block";
    
        if(valeur8 == true){
            valeur8 = false;
            cote8.style.display = "none";        
    
        }
        else{
            valeur8 = true;
        }
    }
    
});

blessure9.addEventListener("change", function () {
    if(document.getElementById('nature_blessure10').value == "Autre") {
        cote9.style.display = "block";
      

         if(valeur9 == true){
            valeur9 = false;
            cote9.style.display = "none";        
    
        }
        else{
            valeur9 = true;
        }
        
    }
    
});



const description_blessure11 = document.getElementById("description_blessure11");

const autreD = document.getElementById("autreD");

let valeur11 = false;

description_blessure11.addEventListener("change", function () {
    if(document.getElementById('description_blessure11').value == "Autre") {
        autreD.style.display = "block";
      

         if(valeur11 == true){
            valeur11 = false;
            autreD.style.display = "none";        
    
        }
        else{
            valeur11 = true;
        }
        
    }
    
});