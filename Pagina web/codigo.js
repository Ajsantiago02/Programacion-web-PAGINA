function validacion() {
    valor = document.getElementById('nombre').value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
        alert("Este campo no puede ir vacio");
        
    return false;
    }


    valor = document.getElementById("email").value;
    if( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(valor)) ) {
        alert("Ingresa un correo valido");
      return false;
    }

  

  }


  function muestraoculta(id)
    {
        var elemento = document.getElementById('contenidos_'+id);
        var enlace = document.getElementById('enlace_'+id);

        if(elemento.style.display =="" || elemento.style.display == "block"){
            elemento.style.display = "none";
            enlace.innerHTML = 'Mostrar contenidos '+id;

        }else{
            elemento.style.display = "block";
            enlace.innerHTML='ocultar contenidos '+id;
        }

    }
 