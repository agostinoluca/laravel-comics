<footer>
    <div class="top_footer">
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex p-3 gap-3 ">
                    <div>
                        <h4>DC COMICS</h4>
                        <ul>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Comics</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                        <!-- /ul dc comics -->

                        <h4>SHOP</h4>
                        <ul>
                            <li><a href="#">Shop DC</a></li>
                            <li><a href="#">Shop DC Collectibles</a></li>
                        </ul>
                        <!-- /ul shop -->
                    </div>

                    <ul>
                        <h4>DC</h4>
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Ad Choices</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Subscriptions</a></li>
                        <li><a href="#">Talent Workshops</a></li>
                        <li><a href="#">CPSC Certificates</a></li>
                        <li><a href="#">Ratings</a></li>
                        <li><a href="#">Shop Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                    <!-- /ul dc -->

                    <ul>
                        <h4>SITES</h4>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                    </ul>
                    <!-- /ul sites -->

                </div>
                <div class="logo_bg col-6"></div>
            </div>

        </div>
    </div>
    <!-- /.top_footer -->

    <div class="bottom_footer">
        <div class="container p-3">
            <div class="row justify-content-between align-items-center">
                <button>SIGN-UP NOW!</button>
                <div class="d-flex align-items-center gap-3">
                    <span class="get_follower">FOLLOW US</span>
                    <a href="#">
                        <img src={{ Vite::asset('resources/images/footer-facebook.png') }} alt="Facebook Icon">
                    </a>
                    <a href="#">
                        <img src={{ Vite::asset('resources/images/footer-twitter.png') }} alt="Twitter Icon">
                    </a>
                    <a href="#">
                        <img src={{ Vite::asset('resources/images/footer-youtube.png') }} alt="YouTube Icon">
                    </a>
                    <a href="#">
                        <img src={{ Vite::asset('resources/images/footer-pinterest.png') }} alt="Pinterest Icon">
                    </a>
                    <a href="#">
                        <img src={{ Vite::asset('resources/images/footer-periscope.png') }} alt="Periscope Icon">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.bottom_footer -->
</footer>
</template>



<style scoped>
    .top_footer {
        background-image: url({{ mix('resources/images/footer-bg.jpg') }});
        background-size: cover;
        background-repeat: no-repeat;

        & .logo_bg {
            background-image: url({{ mix('resources/images/dc-logo-bg.png') }});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        & h4 {
            color: var(--dc-light);
            margin: 0.75rem 0;
        }

        & li:hover {
            filter: brightness(100);
        }

        & a {
            color: var(--dc-lightgray);
            font-size: 0.75rem;
            font-weight: 700;
        }
    }

    .bottom_footer {
        background-color: var(--dc-secondary);

        & button {
            padding: 0.5rem;
            background-color: transparent;
            color: var(--dc-light);
            font-weight: 600;
            font-family: inherit;
            border: 3px solid var(--dc-primary);
            cursor: pointer;

            &:hover {
                transform: scale(1.1);
            }
        }

        & .get_follower {
            color: var(--dc-primary);
            font-weight: 700;
            letter-spacing: -1px;
        }

        & img:hover {
            transform: scale(1.2);
            filter: brightness(100);
        }
    }
</style>
