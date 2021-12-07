<?php include('./web_header.php') ?>

<style>
    #footer-cta {
        display: none;
    }
</style>

<section id="portfolio-header">
    <div class="container-fluid">
        <div class="row portfolio-header center">
            <div class="col s12 inner-col">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</section>

<br><br><br>
<section id="contact-us">
    <div class="container">
        <div class="row contact-us">
            <div class="col s12 m7 contact-left">
                <form action="#">
                    <label for="name">Your name (Required)</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>

                    <label for="email">Your email (Required)</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address" required>

                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Enter your subject">

                    <label for="message">Your message</label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message"></textarea>

                    <input type="submit" value="Submit">
                </form>
            </div>

            <div class="col s12 m5 contact-right">
                <h4>Contact information</h4>
                <p>Details</p>
                <div class="line"></div>
                <br>

                <h4>Registered office</h4>
                <p>C-276, C Block Road, C Block, <br>Sector 63, Noida, Uttar Pradesh <br>Pincode: 201307</p>
                <br>

                <h4>Directly connect on</h4>
                <div class="line"></div>
                <div class="row directly">
                    <div class="col s12 m6"><p><a href="tel:+919871719955">+91 98717 19955</a></p></div>
                    <div class="col s12 m6"><p><a href="mailto:may59ank@gmail.com">may59ank@gmail.com</a></p></div>
                    <div class="col s12 m6"><p><a href="tel:+919871719955">+91 98717 19955</a></p></div>
                    <div class="col s12 m6"><p><a href="mailto:may59ank@gmail.com">may59ank@gmail.com</a></p></div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>

<?php include('./web_footer.php') ?>