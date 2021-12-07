<?php 
    include('./web_header.php');
?>

<style>
    #footer {
        display: block;
    }
</style>

<header id="header">
    <div class="container">
        <div class="row header">
            <div class="col s12">
                <!-- <img src="./img/horizon.png" alt="brand-logo"> -->
                <h1>We are the <span style="color: var(--primaryColor);">fluidic</span> advertising agency</h1>
                <p><span style="font-weight: 700; font-style: italic;">Creativity</span> fuels us. <span style="font-weight: 700; font-style: italic;">Strategic thinking</span> drives us. <span style="font-weight: 700; font-style: italic;">Technology</span> powers us. <br>Finding their fine balance makes us the agile sailors to steer your brand ship to the next horizon.</p>
            </div>
        </div>
    </div>
</header>

<section id="sec-section-hp">
    <div class="container">
        <div class="row section-hp sec-section-hp">
            <div class="col s12 m1"></div>
            <div class="col s12 m6 sec-section-hp-left">
                <h1>We don’t do mundane. We go fluid.</h1>
                <div class="line"></div>
                <p>Fluidic thinking drives everything we do. Everything!</p>
                <br><br>
                <a href="./about-us" class="cta">
                    <span class="cta-top-shadow"></span>
                    <span class="cta-text">Read more</span>
                    <span class="cta-bottom-shadow"></span>
                </a>
            </div>
            <div class="col s12 m4 sec-section-hp-right">
                <img src="./img/Lower-hero-bg.jpg" alt="">
            </div>
            <div class="col s12 m1"></div>
        </div>

        <div class="row section-hp sec-section-hp-ipad">
            <div class="col s12 m7 sec-section-hp-left">
                <h1>We don’t do mundane. We go fluid.</h1>
                <div class="line"></div>
                <p>Fluidic thinking drives everything we do. Everything!</p>
                <br><br>
                <a href="./about-us" class="cta">
                    <span class="cta-top-shadow"></span>
                    <span class="cta-text">Read more</span>
                    <span class="cta-bottom-shadow"></span>
                </a>
            </div>
            <div class="col s12 m5 sec-section-hp-right">
                <img src="./img/Lower-hero-bg.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<section id="third-section-hp">
    <div class="container">
        <div class="row section-hp third-section-hp">
            <div class="col s6 m2 inner-col">
                <img src="./img/logos/dainik-jagran.png" class="brand-logos" alt="logo">
            </div>
            <div class="col s6 m2">
                <img src="./img/logos/cognito.png" class="brand-logos" alt="logo">
            </div>
            <div class="col s6 m2">
                <img src="./img/logos/del-monte.png" class="brand-logos" alt="logo">
            </div>
            <div class="col s6 m2">
                <img src="./img/logos/RB.png" class="brand-logos" alt="logo">
            </div>
            <div class="col s6 m2">
                <img src="./img/logos/nestle.png" class="brand-logos" alt="logo">
            </div>
            <div class="col s6 m2">
                <img src="./img/logos/pepsico.png" class="brand-logos" alt="logo">
            </div>
        </div>
    </div>
</section>

<section id="portfolio">
    <div class="container">
        <div class="row section-hp portfolio center">
            <h1>Dive-in to our fluidic pool of work</h1>
            <p>We make brands happen. And how! Relish a small glimpse of what we do.</p>

            <br><br>
            <div class="portfolio-container">
                <div class="tile" onclick="portfolioOne();">
                    <img src="./img/portfolio/cognito500x500.png">
                    <div class="tile-overlay">
                        <h4>View</h4>
                    </div>
                </div>
                <div class="tile" onclick="portfolioTwo();">
                    <img src="./img/portfolio/grofers1100x1100.jpg">
                    <div class="tile-overlay">
                        <h4>View</h4>
                    </div>
                </div>
                <div class="tile" onclick="portfolioThree();">
                    <img src="./img/portfolio/rollery550x1000.jpg">
                    <div class="tile-overlay">
                        <h4>View</h4>
                    </div>
                </div>
                <div class="tile" onclick="portfolioFour();">
                    <img src="./img/portfolio/abesit500x500.jpg">
                    <div class="tile-overlay">
                        <h4>View</h4>
                    </div>
                </div>
            </div>

            <br><br><br>
            <a href="./our-work" class="cta">
                <span class="cta-top-shadow"></span>
                <span class="cta-text">View more</span>
                <span class="cta-bottom-shadow"></span>
            </a>
        </div>
    </div>
</section>

<section id="team">
    <div class="container">
        <div class="row section-hp teamMembers center">
            <h1>Grey matter, matters! </h1>
            <p class="teamPara">Meet the ever-curious able minds who steer us.</p>
            <br><br>
            <div class="col s12 m3 teamCol teamMemberOne">
                <a href="javascript:void(0);">
                    <img src="./img/chetan1.png" class="teamImg" alt="team member image">
                </a>
                <h4>Jack Walker</h4>
                <p>Arhitect</p>
            </div>

            <div class="col s12 m3 teamCol teamMemberTwo">
                <a href="javascript:void(0);">
                    <img src="./img/hrithik1.png" class="teamImg" alt="team member image">
                </a>
                <h4>Zoe Brown</h4>
                <p>Product manager</p>
            </div>

            <div class="col s12 m3 teamCol teamMemberThree">
                <a href="javascript:void(0);">
                    <img src="./img/kshitij1.png" class="teamImg" alt="team member image">
                </a>
                <h4>Ethan White</h4>
                <p>Graphic designer</p>
            </div>

            <div class="col s12 m3 teamCol teamMemberFour">
                <a href="javascript:void(0);">
                    <img src="./img/priyanka1.png" class="teamImg" alt="team member image">
                </a>
                <h4>Mary Jones</h4>
                <p>UX designer</p>
            </div>

            <div class="col s12 empty"></div>
            <a href="./about-us" class="cta">
                <span class="cta-top-shadow"></span>
                <span class="cta-text">Know more</span>
                <span class="cta-bottom-shadow"></span>
            </a>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row services">
            <h1 class="center">What we offer?</h1>
            <p class="teamPara center">We make brands become more. Being the curious ones, we do not stop at the obvious, we go beyond.</p>
            <br><br>
            <div class="col s12 m4">
                <div class="card card1">
                    <h2><span style="color: var(--primaryColor);">Creative</span> <br>
                        Branding</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis, accusantium molestiae.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card card2">
                    <h2><span style="color: var(--primaryColor);">Film</span> <br>
                        Production</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis, accusantium molestiae.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card card3">
                    <h2><span style="color: var(--primaryColor);">Advertising</span> <br>
                        Photography</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis, accusantium molestiae.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card card4">
                    <h2><span style="color: var(--primaryColor);">Print</span> <br>
                        Production</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis, accusantium molestiae.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card card5">
                    <h2><span style="color: var(--primaryColor);">Retail</span> <br>
                        Communication</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis, accusantium molestiae.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card card6">
                    <h2><span style="color: var(--primaryColor);">Digital</span> <br>
                        Integrated</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis, accusantium molestiae.</p>
                </div>
            </div>
        </div>

        <div class="row center">
            <div class="col s12 empty"></div>
            <a href="./our-services" class="cta">
                <span class="cta-top-shadow"></span>
                <span class="cta-text">View more</span>
                <span class="cta-bottom-shadow"></span>
            </a>
        </div>
    </div>
</section>

<?php 
    include('./web_footer.php');
?>