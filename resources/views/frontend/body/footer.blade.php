<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<footer class="footer-section section-bg overflow-hidden pos-relative">

    <div class="footer-inner-shape-top-left"></div>
    <div class="footer-inner-shape-top-right"></div>
    <div class="footer-section-top section-gap-t-165">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Start Section Content -->
                    <div class="section-content pos-relative text-center">
                        <span class="section-tag">Get Latest Updates</span>
                        <h2 class="section-title">Subscribe For Newsletter</h2>
                    </div>
                    <!-- End Section Content -->
                </div>
            </div>
            <div class="footer-top-wrapper text-center">
                <div class="row">
                    <div class="col-12">

                        <form id="formPost" class="footer-newsletter">
                            @csrf
                            <input type="email" name="email" id="email" placeholder="demo@example.com">
                            <button class="submit-btn" type="submit">Subscribe Now</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-center section-gap-tb-165">
        <div class="container">
            <div class="row justify-content-between align-items-center mb-n5">
                <div class="col-auto mb-5">
                    <!-- Start Single Footer Info -->
                    <div class="footer-single-info">
                        <a href="tel:+0123456789" class="info-box">
                            <span class="icon"><i class="icofont-phone"></i></span>
                            <span class="text">0123456789</span>
                        </a>
                    </div>
                    <!-- Start Single Footer Info -->
                </div>
                <div class="col-auto mb-5">
                    <!-- Start Single Footer Info -->
                    <div class="footer-single-info">
                        <a href="mailto:demo@example.com" class="info-box">
                            <span class="icon"><i class="icofont-envelope-open"></i></span>
                            <span class="text">demo@example.com</span>
                        </a>
                    </div>
                    <!-- Start Single Footer Info -->
                </div>
                <div class="col-auto mb-5">
                    <!-- Start Single Footer Info -->
                    <div class="footer-single-info">
                        <ul class="social-link">
                            <li><a href="https://www.example.com" target="_blank"><i class="icofont-facebook"></i></a>
                            </li>
                            <li><a href="https://www.example.com" target="_blank"><i class="icofont-dribbble"></i></a>
                            </li>
                            <li><a href="https://www.example.com" target="_blank"><i class="icofont-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Start Single Footer Info -->
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div
                class="row justify-content-center justify-content-md-between align-items-center flex-column-reverse flex-md-row">
                <div class="col-auto">
                    <div class="footer-copyright">
                        <p class="copyright-text">&copy; 2021 <a href="index.html">Lendex</a> Made with <i
                                class="icofont-heart"></i> by <a href="https://hasthemes.com/"
                                target="_blank">HasThemes</a> </p>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="index.html" class="footer-logo">
                        <div class="logo">
                            <img src={{ asset('frontend/assets/images/logo/logo.png') }}" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>


<script>
   document.getElementById('formPost').addEventListener('submit', function (event) {
    event.preventDefault();
    addNewsLetter();
});

async function addNewsLetter() {
    try {
        const email = document.getElementById('email').value;
        if (email === '') {
            return;
        }

        const res = await axios.post('/admin/newsletter/store', {
            email
        });

        if (res.status === 200) {
            document.getElementById('email').value = '';
            toastr.success(res.data.message, 'Success');
        } else {
            toastr.error(res.data.message, 'Error');
        }
    } catch (error) {
        console.error("Request failed:", error);
    }
}
</script>