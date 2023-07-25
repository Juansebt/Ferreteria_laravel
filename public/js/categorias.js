var id = 0;

function create() {
    axios.post('/categorias',{
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
        console.log(Object.values(error.response.data.errors));
        let data = ''
        Object.values(error.response.data.errors).forEach(element => {
            console.log(element);
            data += `${element}<br>`;
            Swal.fire({
                icon: 'error',
                title: 'Error',
                html: data,
                allowHtml: true,
              })
        });
        // errores.innerHTML = data;
    });
}

function read() {
    axios.get('/categorias')
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
    axios.put('/categorias/' + this.id, {
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
        axios.delete('/categorias/' + this.id)
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