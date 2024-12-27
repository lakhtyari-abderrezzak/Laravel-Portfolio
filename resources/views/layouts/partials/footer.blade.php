    <!-- Start Footer -->
    <div class="footer">
        <div class="container">
            <div class="box">
                <h3> &lt; Hizo /&gt; </h3>
                <ul class="social">
                    <li>
                        <a href="#" class="facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
                <p class="text">

                </p>
            </div>
            <div class="box">
                <ul class="links">
                    <li><a href="#landing">{{ __('nav.home') }}</a></li>
                    <li><a href="#about">{{ __('nav.about') }}</a></li>
                    <li><a href="#projects">{{ __('nav.projects') }}</a></li>
                    <li><a href="#services">{{ __('nav.services') }}</a></li>
                    <li><a href="#our-skills">{{ __('nav.skills') }}</a></li>
                </ul>
            </div>
            <div class="box">
                <div class="line">
                    <i class="fas fa-map-marker-alt fa-fw"></i>
                    <div class="info">{{ __('global.footer.address') }}</div>
                </div>
                <div class="line">
                    <i class="far fa-clock fa-fw"></i>
                    <div class="info">{{ __('global.footer.business-hours') }}</div>
                </div>
                <div class="line">
                    <i class="fas fa-phone-volume fa-fw"></i>
                    <div class="info">
                        <span>+353831119128</span>
                    </div>
                </div>
            </div>
            <!-- Google Map Embed -->
            <div class="footer-map">
                <h3>{{ __('global.footer.location') }}</h3>
                <!-- Embed Google Map -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2384.3303996974487!2d-6.248410584264696!3d53.349805380158975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x485b5b3e4b9450f1%3A0x0f5146489d944b1e!2sDublin%2C%20Ireland!5e0!3m2!1sen!2sus!4v1634814889600!5m2!1sen!2sus"
                     allowfullscreen="" loading="lazy"></iframe>

            </div>
        </div>
        <p class="copyright">{{ __('global.footer.copyright') }} &copy; </p>
    </div>
    <!-- End Footer -->


    <!-- Start Up Button-->
    <span class="go-up "><i class="fas fa-angle-double-up fa-2x"></i></span>
    <!-- End Up Button-->
    <script src="{{ asset('javascript/main.js') }}"></script>
