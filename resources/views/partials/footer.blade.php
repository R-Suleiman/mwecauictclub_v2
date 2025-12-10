<!--footer-->
<footer class="footer-modern text-light pt-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center gap-2">
                        <img class="img-fluid rounded-circle d-none d-md-block d-sm-block" src="../../img/logo.png"
                            style="width: 80px; border:none;">
                    </a>
                    <div>
                        <div class="fw-bold text-white">Mwecau-ICT Club</div>
                        <small class="text-light opacity-75 fst-italic">Inspire • Innovate • Integrate</small>
                    </div>
                </div>
                <p class="text-light-70 mb-2">P.O. Box 1226, Moshi, Kilimanjaro</p>
                <p class="text-light-70 mb-2">Tel: +255615251038</p>
                <p class="text-light-70 mb-0">Email: info@mmwecauictclub.ac.tz</p>
            </div>
            <div class="col-md-2 col-6">
                <h6 class="fw-bold text-white mb-3">Quick Links</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="https://www.mwecau.ac.tz/" class="text-decoration-none">Mwecau</a></li>
                    <li><a href="{{ route('about.page') }}" class="text-decoration-none">About Us</a></li>
                    <li><a href="{{ route('department.page') }}" class="text-decoration-none">Our Projects</a></li>
                    <li><a href="{{ route('register') }}" class="text-decoration-none">Become Member</a></li>
                    <li><a href="{{ route('contact.page') }}" class="text-decoration-none">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-6">
                <h6 class="fw-bold text-white mb-3">Explore</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="{{ route('about.page') }}" class="text-decoration-none">About</a></li>
                    <li><a href="{{ route('privacy-policy.page') }}" class="text-decoration-none">Privacy Policy</a></li>
                    <li><a href="{{ route('licence and use.page') }}" class="text-decoration-none">Licence & Uses</a></li>
                    <li><a href="#" class="text-decoration-none">Tutorials</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h6 class="fw-bold text-white mb-3">Stay Connected</h6>
                <div class="d-flex flex-wrap gap-2">
                    <a href="#" class="chip2 chip-soft2 text-decoration-none"><i class="fab fa-whatsapp me-1"></i> WhatsApp</a>
                    <a href="#" class="chip2 chip-soft2 text-decoration-none"><i class="fab fa-instagram me-1"></i> Instagram</a>
                </div>
                <div class="mt-3">
                    <a href="{{ route('register') }}" class="btn btn-modern btn-sm">Join the club</a>
                </div>
            </div>
        </div>
        <hr class="footer-divider">
        <div class="text-center text-light-70 pb-3">
            <small><i class="fa fa-copyright colorIcon"></i> <?php echo date('Y'); ?> Ecode Technologies.</small>
        </div>
    </div>
</footer>
