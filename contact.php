<?php

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

include('header.php');

include('includes/components/cards-class.php');


?>

<div class="container container-divide-img">
    <div class="page-header">
        <small>Contact</small>
        <h1>Get in<br>Touch</h1>
        <p>We'd love to hear from you. Whether you have a question about an upcoming event, want to get involved, or just wan to learn more about Integra, we're here tp help.</p>
        <!-- <div>
            <a href="https://www.eventbooking.uk.com/integra/?" class="a-btn a-btn-bg-hover">Apply Now</a>
            <a href="https://www.eventbooking.uk.com/integra/?" class="a-btn a-btn-bg">Sign In Here</a>
        </div> -->
    </div>
    <div class="container-divide-img-img" style="padding-bottom:20px;">
        <img class="logo" src="https://evbk-public.s3-eu-west-1.amazonaws.com/integra/website/img/logos/logo-blob.png" alt="Integra" style="max-width: 400px;">
    </div>
</div>

<div class="container container-light container-divide-img">
    <div class="page-header">
        <small>Contact Us</small>
        <h1>We'd love to<br>hear from you</h1>
        <p>We'd love to hear from you. Whether you have a question about an upcoming event, want to get involved, or just wan to learn more about Integra, we're here to help.</p>
        <!-- <div>
            <a href="https://www.eventbooking.uk.com/integra/?" class="a-btn a-btn-bg-hover">Apply Now</a>
            <a href="https://www.eventbooking.uk.com/integra/?" class="a-btn a-btn-bg">Sign In Here</a>
        </div> -->
    </div>
</div>
<div class="container container-light" style="padding-top: 0px;">
    <div class="cards">
        <?php

        $email = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/email.svg'),
            'Email',
            '<a class="cards-text-a" target="_blank" href="mailto:integra@taylorbennett.co.uk">integra@taylorbennett.co.uk</a>We aim to reply within 2 working days.'
        );
        $email->get_details();

        $phone = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/phone.svg'),
            'Phone',
            '<a class="cards-text-a" target="_blank" href="tel:+44 (0) 1462 742 927">+44 (0) 1462 742 927</a>Mon - Fri, 8am - 5:30pm (GMT)'
        );
        $phone->get_details();

        $office = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/map.svg'),
            'Our Office',
            '<a class="cards-text-a" target="_blank" href="https://goo.gl/maps/2atVMrvSS8gmtS8R7">1 Church Barn</a>
            Caldecote Road<br>
            Newnham<br>
            Baldock, SG7 5LA'
        );
        $office->get_details();

        $linkedIn = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/linkedin.svg'),
            'LinkedIn',
            '<a class="cards-text-a" target="_blank" href="https://www.linkedin.com/in/integrausers/">Follow us</a> for the latest updates, events, and news.'
        );
        $linkedIn->get_details();

        ?>
    </div>
</div>


<?php

include('footer.php');

?>