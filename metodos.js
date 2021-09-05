

function mostrarContrasena(){
    //var tipo = document.getElementById("password");
   // if(tipo.type === "password"){
     //   tipo.type = "text";
        alert("HOLA MUNDO TS1");
    //}else{
      //  tipo.type = "password";
    //}
}


  function mostrar() {
    var archivo = document.getElementById("file").files[0];
    var reader = new FileReader();
    if (file) {
        reader.readAsDataURL(archivo);
        reader.onloadend = function() {
            document.getElementById("img").src = reader.result;
            document.getElementById("img").height = "480";
            document.getElementById("img").width = "450";
        }
    }
}