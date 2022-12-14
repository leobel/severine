$(document).ready(function () {
    /**
     * List sevegetal
     * */
    listarSevegetal();
});

// esta funcion recibe una tonalidad para filtrar - lista de sevegetal en la la variable data q es el array cargado en el html
function listarSevegetal(tonalidad) {
    console.log('tonalidad', tonalidad);

    $(".tratamientos-wrapper").empty();// vacia el div padre donde van a ir todos los sevegetal

      // filtrado
    let sevegetals = !tonalidad ? data : data.filter(t => t.tonalidad.includes(tonalidad)) //si le pase o no una tonalidad para filtrar -  si no hay categoria dame toda la lista, sino filtra -- por cada sevegetal dentro del array me quedo con los que su tonalidad incluya la que pase como parametro


    // armar el html
    buildList(sevegetals);
}

function buildList(sevegetals) {
    for (let i = 0; i < sevegetals.length; i += 3) { //busca en el array de elementos
        const items = sevegetals.slice(i, i + 3);
        let node = $(`<div class="row gx-xxl-5">`);
        $.each(items, function (index, value) {
            node.append(`
            <div class="col-lg-4 col-sm-6">
                <div class="single-tratamientos">
                    <div class="tratamientos-images">
                        <a href="tratamientos-details-left-sidebar.html"><img src="assets/images/tratamientos/${value.image}" alt="tratamientos"></a>
                    </div>
                    <div class="tratamientos-content">
                        <div class="content-wrapper">
                            <h4 class="title"><a href="tratamientos-details-left-sidebar.html">${value.title}
                                </a></h4> 
                            <p class="pt-3">${value.description}
                            </p>
                            <a href="detail.html?item=${value.id}" class="btn btn-primary btn-hover-secondary mt-4">Ver más</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            `);
        });
        $(".tratamientos-wrapper").append(node);
    }
}

function searchSevegetal() {
    $(".tratamientos-wrapper").empty();// vacia el div padre donde van a ir todos los sevegetal
    
    const text = $('input[name="search"]').val().toLowerCase();
    let sevegetals = !text ? data : data.filter(t => t.description.toLowerCase().includes(text));

    // armar el html
    buildList(sevegetals);
}