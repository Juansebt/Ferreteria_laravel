function create() {
    axios.post("/producto",{
        'nombreProducto':"Fresa",
        'cantidadProducto':15,
        'estadoProducto':'A',
    })
    .then(function (response){
        console.log(response);
    })
    .catch(function (error) {
        console.log(error);
    })
}