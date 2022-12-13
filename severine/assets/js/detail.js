$(document).ready(function () {
    // la funcion usa una variable "data" - array de tratamientos
    const index = Number(window.location.search.replace('?item=', ''));
    const value = data[index];
    $('.contact-wrapper').append(`
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <!-- Image-->
            <figure>
                <img class="shape" src="assets/images/tratamientos/${value.image}" alt="">
            </figure>
            <!-- Image End -->
        </div>
        <div class="col-lg-6">
            <!-- Contact Content Start -->
            <div class="contact-content" style="padding: 30px;">

                <!-- Contact Title Start -->
                <div class="contact-title">
                    <h4 class="sub-title">${value.title}</h4>
                    <h2 class="main-title">${value.subtitle}</h2>
                    <p class="pt-3">
                        ${value.description}
                    </p>
                </div>
                <!-- Contact Title End -->


            </div>
            <!-- Contact Content End -->
        </div>
        
    </div>
    `)
    
})