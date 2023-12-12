<div class="service-display-section section-gap-tb-165 pos-relative">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Start Section Content -->
                <div class="section-content">
                    <span class="section-tag">My Services</span>
                    <h2 class="section-title">Service Provide For My Clients.</h2>
                </div>
                <!-- End Section Content -->
            </div>
        </div>
    </div>

    <!-- Start Service Section Wrapper -->
    <div class="service-display-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">


                    <div class="service-display-slider">
                        <!-- Slider main container -->
                        <div class="swiper-container">
                            <!-- Additional required wrapper -->
                            <div id="servicesContainer" class="swiper-wrapper">
                                <!-- Slides -->




                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="service-display-dots">
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- End Service Section Wrapper -->
</div>


<script>
    async function getServices() {
        try {
            const res = await axios.get('/web/get/services');
            if (res.status === 200) {
                const servicesContainer = document.getElementById('servicesContainer');
                const servicesData = res.data;


                servicesData.forEach(service => {
                    const items = service.items;
                    const serviceLists = service.service_list;

                    // Check if serviceList is an array before using map
                    
                    const serviceList = JSON.parse(serviceLists);

                    // Assuming you have an HTML element with id "listContainer" to display the list
                    const listContainer = document.getElementById('listContainer');

                    // Create an unordered list and append list items
                    const ulElement = document.createElement('ul');
                    serviceList.forEach(item => {
                        const liElement = document.createElement('li');
                        liElement.textContent = item;
                        ulElement.appendChild(liElement);
                    });

                    servicesContainer.innerHTML += `
                        <div class="service-box-single-item swiper-slide">
                            <div class="inner-shape inner-shape-top-right"></div>
                            <div class="icon">
                                <img src="frontend/assets/images/icon/service-icon-1.png" alt="${service.title}">
                            </div>
                            <h4 class="title"><a href="${service.link}">${service.title}</a></h4>
                            <ul>
                                ${ulElement.outerHTML}
                            </ul>
                            <div class="inner-shape inner-shape-bottom-right"></div>
                        </div>`;
                });

                // Initialize Swiper after adding slides
                const swiper = new Swiper('.swiper-container', {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    // Disable pagination by setting 'pagination' to false
                    pagination: false,
                });
            }

            
        } catch (error) {
            console.error("Request failed:", error);
        }


    }

    // Call the function to fetch and display services
    getServices();
</script>