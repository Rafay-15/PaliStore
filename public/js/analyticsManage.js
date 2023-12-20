var div = document.getElementById("detailContainer");
var add = document.getElementById("addProd");
var update =document.getElementById("updateProd");
var del = document.getElementById("delProd");



while (div.firstChild){
    div.removeChild(div.firstChild);  
}

add.addEventListener("click", function(){
    alert("Add Product");
    while (div.firstChild){
        div.removeChild(div.firstChild);  
    }

    var h = document.createElement("h2").innerHTML = "Add Product";
    div.appendChild(h);

    var input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("placeholder", "Product ID");

    var input2 = document.createElement("input");
    input2.setAttribute("type", "text");
    input2.setAttribute("placeholder", "Product Name");

    var input3 = document.createElement("input");
    input3.setAttribute("type", "text");
    input3.setAttribute("placeholder", "Product Price");

    var input4 = document.createElement("input");
    input4.setAttribute("type", "text");
    input4.setAttribute("placeholder", "Product Discription");

    var h1 = document.createElement("h4");
    h1.setAttribute("text", "Upload Photos");
    var input5 = document.createElement("input");
    input5.setAttribute("type", "file");
    input5.setAttribute("accept", "image/*");


})