var id = 0;

function create() {
    axios.post('/categoria',{
        nombreCategoria:txtNombre.value,
        codigoCategoria:txtCodigo.value,
        estadoCategoria:"A",
    })
    .then(function (response) {
        console.log(response);
        read();
        clear();
    })
    .catch(function (error) {
        console.log(error);
    });
}

function read() {
    axios.get('/categoria')
    .then(function (response) {
        console.log(response);
        let datos = ''
        response.data.forEach((element, index) => {
            datos += `<tr onclick='load(${JSON.stringify(element)})'>`;
            datos += `<td>${index+1}</td>`;
            datos += `<td>${element.nombreCategoria}</td>`;
            datos += `<td>${element.codigoCategoria}</td>`;
            datos += `<td>${element.estadoCategoria}</td>`;
            datos += `</tr>`;
        });
        tblBody.innerHTML = datos;
    })
    .catch(function (error) {
        console.log(error);
    });
}

function update() {
    axios.put('/categoria/' + this.id, {
        id: this.id,
        nombreCategoria: txtNombre.value,
        codigoCategoria: txtCodigo.value,
    }).then(function(response){
        console.log(response);
        read();
        clear();
    }).catch(function(error){
        console.log(error);
    })
}

function deletes() {
    let respuesta = confirm("¿Está seguro de eliminar la categoria?");
    if(respuesta) {
        axios.delete('/categoria/' + this.id)
        .then(function (response) {
            console.log(response);
            read();
            clear();
        })
        .then(function (error) {
            console.log(error);
        });
    }
}

function clear() {
    txtNombre.value = "";
    txtCodigo.value = "";
}

function load(element) {
    this.id = element.id
    txtNombre.value = element.nombreCategoria;
    txtCodigo.value = element.codigoCategoria;
}

read();