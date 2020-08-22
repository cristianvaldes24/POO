 var usuarios = [];
 const url = '../../pinterest/pinterest_backend/api/usuarios.php'
 function obtenerUsuarios(){
    axios({
        method:'GET',
        url:url,
        responseType:'json'
    }).then(res=>{
        console.log(res.data);
        this.usuarios = res.data;
    }).catch(error=>{
        console.error(error);
    });
 }//pinterest_backend\api\usuarios.php

 obtenerUsuarios();

 function guardar(){
     let usuario = {
        correo: document.getElementById('inputCorreo').value,
        contrasenia: document.getElementById('inputCorreo').value,
        edad: document.getElementById('inputEdad').value
    }
    console.log('usuario a guardar', usuario)
    axios({
        method:'POST',
        url:url,
        responseType:'json',
        data:usuario
    }).then(res=>{
        console.log(res);
        obtenerUsuarios();
    }).catch(error=>{
        console.error(error);
    });
 }