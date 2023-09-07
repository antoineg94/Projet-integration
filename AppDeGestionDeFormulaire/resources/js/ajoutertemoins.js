//Su le clic d'un bouton onClick() Ajouter un label et un input en utilisant une focntion javascript

function addElement() {
    // create a new div element
    const newDiv = document.createElement("div");
    newDiv.className = "form-group";
    // and give it some content
    const newContent = document.createTextNode("Hi there and greetings!");
    // add the text node to the newly created div
    newDiv.appendChild(newContent);
}

const el = document.createElement("input");
el.className = "integr_elements";
el.placeholder = "name";
el.id = "name";

const form = document.getElementById("my-form");
form.appendChild(el);