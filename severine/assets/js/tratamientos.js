$(document).ready(function () {
    /**
     * List tratamientos
     * */
    listarTratamientos();
});

// esta funcion recibe una categoria para filtrar - lista de tratamientos en la la variable data q es el array cargado en el html
function listarTratamientos(category) {
    console.log('category', category);

    $(".tratamientos-wrapper").empty();// vacia el div padre donde van a ir todos los tratamientos

      // filtrado
    let tratamientos = !category ? data : data.filter(t => t.category.includes(category)) //si le pase o no una categoria para filtrar -  si no hay categoria dame toda la lista, sino filtra -- por cada trataniento dentro del array me quedo con los que su categoria incluya la que pase como parametro


    // armar el html
    for (let i = 0; i < tratamientos.length; i += 3) {//busca en el array de elementos
        const items = tratamientos.slice(i, i + 3);
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
                            <a href="detail.html?item=${i + index}" class="btn btn-primary btn-hover-secondary mt-4">Ver más</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            `);
        });
        $(".tratamientos-wrapper").append(node);
    }
}

