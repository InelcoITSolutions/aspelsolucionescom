
function numeros(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}



function minus(a){
    tecla = (document.all) ? a.keyCode : a.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta letras en minusculas y 
    //mayusculas asi como las acentuada en la parte de \8 la diagonal es para 
    //poner otra tecla y el 8 es el valor del espaciado
    patron =/[A-Za-z ]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function valida(){
        if(document.getElementById("texto").value.length <= 7){
            alert('ingrese un nombre de minimo 8 caracteres');
            return false;
        }else{
                document.form1.submit();
        }
    }



