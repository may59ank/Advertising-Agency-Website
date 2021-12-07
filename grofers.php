<?php 
    include('./web_header.php')
?>

<style>
    .related-grofers {
        display: none;
    }
</style>

<section id="titlebar" class="grofers">
    <div class="container-fluid">
        <div class="row portfolio-header center">
            <div class="col s12 inner-col">
                <!-- <h1>Grofers Market</h1> -->
            </div>
        </div>
    </div>
</section>

<section id="portfolio-images">
    <div class="container">
        <div class="row section-hp portfolio-images">
            <div class="col s12 m9 portfolio-left">
                <img src="./img/portfolio/grofers938x505_1.jpg" alt="grofers work">
                <br><br>
                <img src="./img/portfolio/grofers938x505_2.jpg" alt="grofers work">
                <br><br>
                <img src="./img/portfolio/grofers938x505_3.jpg" alt="grofers work">
                <br><br>
                <img src="./img/portfolio/grofers938x505_4.jpg" alt="grofers work">
                <br><br>
                <img src="./img/portfolio/grofers938x505_5.jpg" alt="grofers work">
            </div>

            <div class="col s12 m3 portfolio-right">
                <h4>Grofers Market</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut ligula leo. Aliquam suscipit sed purus. Ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <br><br>
                <a href="#" class="cta">
                    <span class="cta-top-shadow"></span>
                    <span class="cta-text">Visit website</span>
                    <span class="cta-bottom-shadow"></span>
                </a>
                <br><br><br>
                <h5>Info</h5>
                <table>
                    <tr>
                        <td>Date: </td>
                        <td>June 2022, 2017</td>
                    </tr>
                    <tr>
                        <td>Category: </td>
                        <td>Creative</td>
                    </tr>
                </table>

                <div class="social">
                    <p>SHARE</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <?php 
            include('./related_projects.php')
        ?>

    </div>
</section>

<?php 
    include('./web_footer.php')
?>