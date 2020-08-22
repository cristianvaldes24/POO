    function rellenarInicio(){
        axios({
            url: '../backend/api/publicaciones.php',
            method: 'get',
            responseType: 'json'
        }).then(res=>{
            console.log(res)
            for($i=0; $i<res.data.length; $i++){
                document.getElementById('inicio').innerHTML +=
            `<div class="foto">
            <img src="${res.data[$i].urlImagen}" alt="">
            </div>`
            }
        }).catch(error=>{
            console.log(error);
        })
}

rellenarInicio();

function inicio(){
    document.getElementById('botonInicio').style.backgroundColor="black"
    document.getElementById('botonInicio').style.color="white"
    document.getElementById('inicio').style.display="block"
    document.getElementById('siguiendo').style.display="none"
    document.getElementById('botonSiguiendo').style.backgroundColor="white"
    document.getElementById('botonSiguiendo').style.color="black"
}

function siguiendo(){
    document.getElementById('botonSiguiendo').style.backgroundColor="black"
    document.getElementById('botonSiguiendo').style.color="white"
    document.getElementById('inicio').style.display="none"
    document.getElementById('botonInicio').style.backgroundColor="white"
    document.getElementById('botonInicio').style.color="black"
    document.getElementById('siguiendo').style.display="block"
}