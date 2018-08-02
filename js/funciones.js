function agregardatos(nombre,apellido,direccion){
    cadena = "nombre=" + nombre + 
             "&apellido=" + apellido + 
             "&direccion=" + direccion +
             "&op=agregar";
    $.ajax({
        type:"POST",
        url:"../functions/Operaciones.php",
        data:cadena,
        success:function(r){
            if(r==1){
                
                alert("Agregado con éxito");
                window.location.reload();                
            }else{
                alert("Fallo el servidor");
            }
        }
    });
}

function agregaform(datos){
    
        d=datos.split('||');
        $('#idpersona').val(d[0]);
        $('#nombreu').val(d[1]);
        $('#apellidou').val(d[2]);
        $('#direccionu').val(d[3]);
        
    }
    
    function actualizaDatos(){
    
    
        id=$('#idpersona').val();
        nombre=$('#nombreu').val();
        apellido=$('#apellidou').val();
        direccion=$('#direccionu').val();
        cadena= "id=" + id +
                "&nombre=" + nombre + 
                "&apellido=" + apellido +
                "&direccion=" + direccion +
                "&op=actualizar";;
        $.ajax({
            type:"POST",
            url:"../functions/Operaciones.php",
            data:cadena,
            success:function(r){
                
                if(r==1){
                    alert("Actualizado con éxito");
                    window.location.reload();
                }else{
                    alert("Fallo el servidor :(");
                }
            }
        });
    
    }

    function eliminaPersona(id){
        cadena = "id=" + id + "&op=eliminar" ;
        var eliminar = confirm("¿Está seguro que desea eliminar el registro "+id+" ?");

        if(eliminar){
        $.ajax({
            type:"POST",
            url:"../functions/Operaciones.php",
            data:cadena,
            success:function(r){
                if(r==1){
                    
                    alert("Eliminado con éxito");
                    window.location.reload();                
                }else{
                    alert("Fallo el servidor");
                }
            }
        });
        }
    }
    

    //P R U E B A
    function agregar(){
        $('#MyP').append('<div></div>');
        $('#MyP').append('<span>'+$('#nombre').val()+' </span>');
        $('#MyP').append('<span>'+$('#apellido').val()+' </span>');
        $('#MyP').append('<span>'+$('#direccion').val()+' </span>');

        $('#nombre').val("");
        $('#apellido').val("");
        $('#direccion').val("");
    }