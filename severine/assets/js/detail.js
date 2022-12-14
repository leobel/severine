$(document).ready(function () {
    // la funcion usa una variable "data" - array de tratamientos
    const index = Number(window.location.search.replace('?item=', ''));
    const value = data[index];

    $('.tratamientos-details-wrapper').append(`
    <div class="row gx-xxl-5">
    <div class="col-lg-8">

        <!-- Courses Details Start -->
        <div class="tratamientos-details">

            <div class="tratamientos-details-images">
                <img src="assets/images/tratamientos/${value.image}" alt="Courses Details">
            </div>

            <h2 class="title">${value.title}</h2>

            <!-- Courses Details Tab Start -->
            <div class="tratamientos-details-tab">

                <!-- Details Tab Menu Start -->
                <div class="details-tab-menu">
                    <ul class="nav justify-content-center">
                        <li><button class="active" data-bs-toggle="tab" data-bs-target="#description">Descripción</button></li>
                    </ul>
                </div>
                <!-- Details Tab Menu End -->

                <!-- Details Tab Content Start -->
                <div class="details-tab-content">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="description">

                            <!-- Tab Description Start -->
                            <div class="tab-description">
                                <div class="description-wrapper">
                                    <h3 class="tab-title">Descripción:</h3>
                                    ${value.description.split('.').map(d => `<p>${d}</p>`).join('')}
                                </div>
                                <div class="description-wrapper">
                                    <h3 class="tab-title">Origen:</h3>
                                    ${value.subtitle.split('.').map(d => `<p>${d}</p>`).join('')}
                                </div>
                            </div>
                            <!-- Tab Description End -->

                        </div>
                    </div>
                </div>
                <!-- Details Tab Content End -->

            </div>
            <!-- Tratamientos Details Tab End -->

        </div>
        <!-- Tratamientos Details End -->

    </div>
    <div class="col-lg-4">
        <!-- Tratamientos Details Sidebar Start -->
        <div class="sidebar">

            <!-- Sidebar Widget Information Start -->
            <div class="sidebar-widget widget-information">
                <div class="info-price">
                    <span class="price">$${value.price}</span>
                </div>
                <div class="info-list">
                    <ul>
                        <li><i class="icofont-man-in-glasses"></i> <strong>Peluquera</strong> <span>${value.peluquera}</span></li>
                        <li><i class="icofont-clock-time"></i> <strong>Duración</strong> <span>${value.duracion}</span></li>
                        <li><i class="icofont-bars"></i> <strong>Demanda</strong> <span>${value.demanda}</span></li>
                        <li><i class="icofont-book-alt"></i> <strong>Complejidad</strong> <span>${value.complejidad}</span></li>
                    </ul>
                </div>
                <!-- <div class="info-btn">
                    <a href="#" class="btn btn-secondary btn-hover-primary">Enroll Now</a>
                </div> -->
            </div>
            <!-- Sidebar Widget Information End -->

            <!-- Sidebar Widget Share Start -->
            <div class="sidebar-widget">
                <h4 class="widget-title">Compartirr tratamiento:</h4>

                <ul class="social">
                    <li><a href="${value.socials.facebook}"><i class="icofont-facebook"></i></a></li>
                    <li><a href="${value.socials.skype}"><i class="icofont-skype"></i></a></li>
                    <li><a href="${value.socials.twitter}"><i class="icofont-twitter"></i></a></li>
                    <li><a href="${value.socials.linkedin}"><i class="icofont-linkedin"></i></a></li>
                </ul>
            </div>
            <!-- Sidebar Widget Share End -->

        </div>
        <!-- Tratamientos Details Sidebar End -->
    </div>
</div>
    `)

    const relacionados = data.filter(t => t.id != value.id && 
        (t.category == value.category)
    ).slice(0, 3);
    let node = $(`<div class="row gx-xxl-5">`);
    $.each(relacionados, function (_, t) {
        node.append(`
        <div class="col-lg-4 col-sm-6">
            <!-- Single tratamientos Start -->
            <div class="single-tratamientos">
                <div class="tratamientos-images">
                    <a href="tratamientos-details-left-sidebar.html"><img src="assets/images/tratamientos/${t.image}" alt="tratamientos"></a>
                </div>
                <div class="tratamientos-content" style="background: #F5F2ED;">
                    <div class="content-wrapper">
                        <h4 class="title"><a href="tratamientos-details-left-sidebar.html">${t.title}</a></h4> 
                        <p class="pt-3">${t.description}</p>
                        <a href="detail.html?item=${t.id}" class="btn btn-primary btn-hover-secondary mt-4">Ver más</a>
                    </div>
                    
                </div>
            </div>
            <!-- Single tratamientos End -->
        </div>
        `)
        $(".tratamientos-wrapper").append(node);
    })

})