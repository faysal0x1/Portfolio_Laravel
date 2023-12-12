<div class="hero-section section-dark-blue-bg">
    <div class="hero-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xxl-7">
                    <div class="hero-content">
                        <h3 class="title-big" data-aos="fade-up" id="title"></h3>
                        <h2 class="title-large" id="short_title">

                        </h2>

                        <a href="#" id="pdf_file" class="btn btn-xl btn-outline-one icon-space-left">Get Resume <i
                                class="icofont-download"></i></a>

                        <div class="video-link">
                            <a class="wave-btn" href="https://youtu.be/MKjhBO2xQzg" data-autoplay="true"
                                data-vbtype="video">

                                <div class="ripple"><i class="icofont-ui-play"></i></div>
                            </a>

                            <span class="video-text"> Watch Video</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="hero-shape hero-top-shape">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="hero-shape hero-bottom-shape">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="hero-portrait">
            <div class="image">
                <img class="img-fluid" src="{{ asset('frontend/assets/images/portrait/portrait-hero.png') }}" alt="">

                <div class="image-half-round-shape"></div>
                <div class="social-link">

                    <a href="https://www.example.com" target="_blank"><i class="icofont-facebook"></i></a>
                    <a href="https://www.example.com" target="_blank"><i class="icofont-dribbble"></i></a>
                    <a href="https://www.example.com" target="_blank"><i class="icofont-behance"></i></a>
                    <a href="https://www.example.com" target="_blank"><i class="icofont-linkedin"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
    getAbout();

    async function getAbout() {    
    try {
        const res = await axios.get('/web/get/hero');

        console.log(res.data[0].title);

        if (res.status === 200) {
            const data = res.data[0];

            const title = document.getElementById('title');
            const short_title = document.getElementById('short_title');
            const pdf_file = document.getElementById('pdf_file');
            if (data) {
            
                title.innerHTML  = data.title;
                short_title.innerHTML  = data.short_title;
                pdf_file.setAttribute('href', data.pdf_file);
            }
        }
    }catch(error)
    {
        console.error("Request failed:", error);
    }
}

</script>