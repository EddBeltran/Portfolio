document.getElementById('post-form').addEventListener('click', postData);
const validator = document.getElementById('validator')

function postData(e){
    e.preventDefault();

    //var name = document.getElementById('subtotal')
    //console.log("name", name.textContent)

    //var name = document.getElementById('subtotal').textContent;
    var params = [...cart]//"name="+name;

    console.log("params", params)

    //PENDIENTE VALIDACION

    var xhr = new XMLHttpRequest();
    xhr.open('POST', './backend/process.php', true);
    //xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.setRequestHeader('Content-Type', 'application/json');

    xhr.onload = function(){
         console.log(this.responseText);
    }
    xhr.send(JSON.stringify(params));
    // //document.getElementById("postForm").reset();
    validator.innerText = "Se envió la informacion mediante AJAX";

}