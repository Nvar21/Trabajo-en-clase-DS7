<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="public\css\stylesPerfil.css">
</head>
<body>
<div class="container"> 
    <div class="card"> 
        <div class="info"> 
            <span>Perfil del usuario</span> 
            <button id="savebutton">Editar Perfil</button> 
        </div> <div class="forms"> 
            <div class="inputs"> 
                <span>Nombre</span> <input type="text" readonly value="John"> 
            </div> 
            <div class="inputs"> 
                <span>Apellido</span> <input type="text" readonly value="Doe"> 
            </div> 
            <div class="inputs"> 
                <span>Email</span> <input type="text" readonly value="mail@mail.com"> 
            </div> 
            <div class="inputs"> 
            <span>Provincia</span> 
            <input type="text" readonly value="Panamá"> 
            <div class="image">
                <img src="public\images\defaultprofilepic.jpg" alt="defaultprofile">
                <button>Cambiar Imagen</button>
            </div>
            
        </div> 
    </div>
</div>
</div>

<script>
    var savebutton = document.getElementById('savebutton');
var readonly = true;
var inputs = document.querySelectorAll('input[type="text"]');
savebutton.addEventListener('click',function(){
    
     for (var i=0; i<inputs.length; i++) {
     inputs[i].toggleAttribute('readonly');
     };

    if (savebutton.innerHTML == "Editar Perfil") {
      savebutton.innerHTML = "Cancelar";
         } else {
      savebutton.innerHTML = "Editar Perfil";
      }
     
});
</script>
</body>
</html>



