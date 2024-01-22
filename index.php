<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style.css">
    <title>Spa center</title>
</head>
<body>
    <main>

        <header>
            <div class="contacts is-flex background-coral">
                <div class="tel-email color-grey">
                    <ion-icon name="call-outline"></ion-icon> +012 345 6789 | <ion-icon name="mail-outline"></ion-icon> info@example.com
                </div>
                <div class="social is-flex">
                    <a class="color-orange" href="https://es-es.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a class="color-orange" href="https://twitter.com/?lang=es"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a class="color-orange" href="https://es.linkedin.com/"><ion-icon name="logo-linkedin"></ion-icon></a>
                    <a class="color-orange" href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a class="color-orange" href="https://www.youtube.com/"><ion-icon name="logo-youtube"></ion-icon></a>
                </div>
            </div>
            
            <nav class="bottom-header is-flex">
                <div class="name is-flex">
                    <span class="color-black fs-30">SPA</span>
                    <span class="color-orange fs-30">Center</span>
                </div>
                
                <div class="navigation is-flex">
                    <a href="#" class="color-orange fs-15">Home</a>
                    <a href="#about-us" class="color-black fs-15">About</a>
                    <a href="#" class="color-black fs-15">Services</a>
                    <a href="#" class="color-black fs-15">Pricing</a>
                    <a href="#" class="color-black fs-15">Pages</a>
                    <a href="#" class="color-black fs-15">Contacts</a>
                </div>

                <div class="book-now">
                    <button class="button">Book Now</button>
                </div>
            </nav>
        </header>

        <section class="heroimage">
            <div>
                <h4 class="color-white fs-10">SPA & BEAUTY CENTER</h4>
                <h1 class="color-white fs-60">Cellulite Treatment</h1>
                <p class="color-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia consectetur saepe consequatur soluta explicabo sequi magnam vel, laborum assumenda laudantium nostrum ut vero velit fugiat impedit iure, voluptatem distinctio voluptates!</p>
                <button class="hero-button">Make Appointment</button>
                <div class="row"></div>
            </div>
        </section>

        <section>
            <article class="about-us is-flex" id="about-us">
                <img src="public/media/img/about.jpg" alt="about">
                <div>
                    <span class="background-coral color-orange p-05 fs-10">ABOUT US</span>
                    <h3 class="fs-25 mt-01">Your Best Spa, Beauty & Skin Case Center</h3>
                    <p class="fs-10 mt-05">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam accusamus laudantium consectetur suscipit repellendus, ipsam voluptatum dicta ipsa dolorem assumenda perferendis aperiam necessitatibus temporibus quo.</p>
                    <div class="conteiners is-flex">
                        <div class="background-coral">
                            <h2 class="color-orange fs-25">99</h2>
                            <p>SPA SPECIALISTS</p>
                        </div>
                        <div class="background-coral">
                            <h2 class="color-orange fs-25">999</h2>
                            <p>HAPPY CLIENTS</p>
                        </div>
                    </div>
                </div>
            </article>
            
            <article class="our-service text-align-center">
                <span class="background-coral color-orange p-05 fs-10">OUR SERVICE</span>
                <h3 class="fs-25 mt-01">Spa & Beauty Servises</h3>
                <div class="services">
                    <div class="is-flex">
                        <div class="body-massage is-flex">
                            <div class="services-black">
                                <h5 class="fs-25 color-white">Body Massage</h5>
                            <p class="fs-10 color-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias earum quos dolores amet autem possimus omnis necessita.</p>
                            </div>
                        </div>
                        <div class="stone-therapy is-flex">
                            <div class="services-black">
                                <h5 class="fs-25 color-white">Stone Therapy</h5>
                            <p class="fs-10 color-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias earum quos dolores amet autem possimus omnis necessita.</p>
                            </div>
                        </div>
                        <div class="facial-therapy is-flex">
                            <div class="services-black">
                                <h5 class="fs-25 color-white">Facial Therapy</h5>
                            <p class="fs-10 color-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias earum quos dolores amet autem possimus omnis necessita.</p>
                            </div>
                        </div>
                        <div class="skin-care is-flex">
                            <div class="services-black">
                                <h5 class="fs-25 color-white">Skin Care</h5>
                            <p class="fs-10 color-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias earum quos dolores amet autem possimus omnis necessita.</p>
                            </div>
                        </div>
                        <div class="stream-bath is-flex">
                            <div class="services-black">
                                <h5 class="fs-25 color-white">Steam Bath</h5>
                            <p class="fs-10 color-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias earum quos dolores amet autem possimus omnis necessita.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formular">
                    <div class="formular-black">
                        <div>
                            <h3>Make Appointment</h3>
                            <form class="formular-form">
                                <input type="text" placeholder="Your Name">
                                <input type="text" placeholder="Your Email">
                                <br>
                                <input type="text" placeholder="Select Date">
                                <input type="text" placeholder="Select Time">
                                <br>
                                <input type="text" placeholder="Select A Service">
                                <input type="button" value="Make Appointment">
                            </form>
                        </div>
                    </div>
                </div>
            </article>
        </section>

    </main>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>