<?php
if ($_POST["message"]) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $message = 'The below information was submitted via the contact form on <a href="http://www.AllGood.Plumbing">All Good Plumbing</a><br><br>Name: ' . $name . "<br>" . 'Phone: ' . $phone . "<br>" . 'Email: ' . $email . "<br>" . 'Message: ' . $message;

    $ehead = 'From: All Good Plumbing<Inquiry@AllGood.Plumbing>' . PHP_EOL;
    $ehead .= "Reply-To: " . $email . PHP_EOL;
    $ehead .= "MIME-Version: 1.0" . PHP_EOL;
    $ehead .= "Content-type:text/html;charset=UTF-8" . PHP_EOL;

    $erespo = "Unfortunately there was an error sending your message :(";
    if (mail('1allgoodplumbing@gmail.com', 'Website Inquiry - All Good Plumbing', $message, $ehead)) {
        $erespo = "Thank you for your message, we will get back to you as soon as possible!";
    }
    echo "<script>alert('" . $erespo . "');</script>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>All Good Plumbing</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-config" content="assets/favicons/browserconfig.xml">
    <meta name="theme-color" content="#b4b4b4">
</head>

<body>
    <nav>
        <ul>
            <img class="logo" src="assets/images/logo.png" alt="All Good Plumbing logo">
            <li><a href="#about">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#reviews">Reviews</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>
    <main>
        <section id="about">
            <h1>About Us</h1>
            <div class="details altl">
                <img src="assets/images/about.png" alt="stock image of a team of plumbers">
                <p>At All Good Plumbing, we are a family-owned and operated business with a long-standing reputation for
                    providing exceptional plumbing services to our community. We understand that plumbing issues can be
                    stressful and disruptive, which is why we are committed to providing prompt, reliable, and
                    professional service to our valued customers.
                    <br><br>
                    Our team of experienced and skilled plumbers have the knowledge and expertise to handle all of your
                    plumbing needs, from simple repairs to complex installations. We use only the highest quality
                    materials and equipment to ensure that our work is durable and long-lasting. We are also fully
                    licensed, insured, and bonded, so you can trust that your property is in safe hands.
                    <br><br>
                    If you are looking for a dependable and professional plumbing company, look no further than All Good
                    Plumbing. Contact us today to schedule a service or to learn more about how we can help you with
                    your plumbing needs.
                </p>
            </div>
        </section>
        <section id="services">
            <h1>Our Services</h1>
            <div class="details altr">
                <img src="assets/images/services.png" alt="stock image of a plumber fixing a pipe">
                <p>At All Good Plumbing, we offer a wide range of services to meet all of your plumbing needs.<br>
                    From fixing leaks and unclogging drains, to installing new fixtures and appliances, we've got you
                    covered.<br>
                    Our services include the following:
                </p>
                <ul>
                    <li>Leak repairs</li>
                    <li>Drain cleaning</li>
                    <li>New plumbing installations</li>
                    <li>Toilet repairs and replacements</li>
                    <li>Faucet repairs and replacements</li>
                    <li>Water heater repairs and replacements</li>
                </ul>
            </div>
        </section>
        <section id="reviews">
            <h1>Reviews</h1>
            <div class="details altl">
                <img src="assets/images/reviews.png" alt="stock image of a happy customer">
                <div class="review">
                    <p>"I had a great experience with All Good Plumbing. They were quick to respond to my emergency and
                        fixed the problem efficiently. Highly recommend!"</p>
                    <p>- John Doe</p>
                </div>
                <div class="review">
                    <p>"I've been using All Good Plumbing for all of my plumbing needs for the past 5 years. They are
                        always reliable and do great work."</p>
                    <p>- Jane Smith</p>
                </div>
            </div>
        </section>
        <section id="contact">
            <h1>Contact Us</h1>
            <div class="details altr">
                <img src="assets/images/contact.png" class="contimg" alt="stock image of a plumber on the phone">
                <div>
                    <p>Have a question or need to schedule a service?<br>Contact us at <a
                            href="tel:+1615-967-0552">615-967-0552</a> or fill out the form below to send us a message
                    </p>
                    <form method="post" id="contact">
                        <div class="formitm">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="confor" placeholder="John Doe">
                        </div>
                        <div class="formitm">
                            <label for="phone">Phone:</label>
                            <input type="tel" id="phone" name="phone" class="confor"
                                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890">
                        </div>
                        <div class="formitm">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="confor"
                                placeholder="myemail@example.com">
                        </div>
                        <div class="formitm">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" class="confor1"
                                placeholder="Your message here"></textarea>
                        </div>
                        <input type="submit" class="submit" value="Send Message">
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>Copyright © All Good Plumbing</p>
    </footer>
</body>
<script>
    $(window).ready(function () {
        $("#contact").on("keypress", function (event) {
            var keyPressed = event.keyCode || event.which;
            if (keyPressed === 13 && (document.activeElement != document.getElementById("message"))) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>

</html>