<?php

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

include('header.php');


include('includes/components/box-list-class.php');
include('includes/components/cards-class.php');
include('includes/events/events-array.php');

?>

<div class="container container-divide-img">
    <div class="page-header">
        <small>Membership</small>
        <h1>What is <br>Integra</h1>
        <p>Integra is a non-profit making unincorporated association formed to promote the interests of its members.</p>
        <p>Integra plans and organises conferences, user days and workshops together with making representations to the suppliers of software and services for product changes, future developments, support initiatives and service delivery.</p>
        <p>The main aim of the group is to promote and maintain a healthy dialogue between Advanced and their users. Ensuring that the suppliers understand what their users need and want and initiate and develop networking relationships between members.</p>
        <div>
            <a href="https://www.eventbooking.uk.com/integra/?" class="a-btn a-btn-bg-hover">Apply Now</a>
            <a href="https://www.eventbooking.uk.com/integra/?" class="a-btn a-btn-bg">Sign In Here</a>
        </div>
    </div>
    <div class="container-divide-img-img">
        <img class="logo" src="https://evbk-public.s3-eu-west-1.amazonaws.com/integra/website/img/logos/logo-blob.png" alt="Integra">
    </div>
</div>
<div id="eventsContainer" class="container container-light">
    <div class="page-header">
        <h2>Why should I join?</h2>
    </div>
    <div class="cards">
        <?php

        $productDevelopment = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/phone.svg'),
            'Latest Product Developments',
            'You can keep in touch with what is happening with Advanced, including the latest product developments'
        );
        $productDevelopment->get_details();

        $networking = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/group.svg'),
            'Networking',
            'You will learn how to get the most out of your products and system by talking and listening to fellow users and suppliers'
        );
        $networking->get_details();

        $teamwork = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/add-people.svg'),
            'Teamwork',
            'You can join with other users to make the suppliers management and staff aware of your views and register your needs for product enhancements'
        );
        $teamwork->get_details();

        $support = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/clipboard.svg'),
            'Support',
            'You can easily contact other Integra members who have a supplier implementation similar to yours'
        );
        $support->get_details();

        ?>
    </div>
</div>
<div id="eventsContainer" class="container">
    <div class="page-header">
        <h2>Who can Join?</h2>
        <p>Membership of Integra is by subscription and is open to all licensed users of e2, e5 and associated solutions.</p>
    </div>
    <div class="page-header">
        <h2>What exactly do I get?</h2>
        <p>Your organisation will receive <strong>FREE</strong> attendance for up to two attendees at all Integra User Forums, Development Workshops held during the year. These sessions provide pro-active, clearly focused opportunities for the exchange of views and information with Advanced. We work together with Advanced to ensure that the e5 content at the conference is relevant and most importantly useful. You are also entitled to send along representatives to these committee meetings that are held during the year. Our groups currently include:</p>
    </div>
    <div class="cards">
        <?php

        $executiveCommittee = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/phone.svg'),
            'Executive Committee',
            ''
        );
        $executiveCommittee->get_details();

        $serviceUserForum = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/group.svg'),
            'Service Delivery User Forum',
            ''
        );
        $serviceUserForum->get_details();

        $focusGroup = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/add-people.svg'),
            'Development Focus Group',
            ''
        );
        $focusGroup->get_details();

        $forumWorkshops = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/clipboard.svg'),
            'Integra User Forum/Workshops',
            ''
        );
        $forumWorkshops->get_details();

        ?>
    </div>
</div>
<div id="eventsContainer" class="container container-light">
    <div class="page-header">
        <h2>What will it cost?</h2>
        <p>The cost of membership is £300 plus VAT and the subscription year runs from July 1 – June 30.</p>
        <p>If you would like some further information before applying, regarding the aims of the user group and the related benefits please contact us.</p>
        <p>If you have any queries or would like to know more about the Integra User Group please do not hesitate to contact Sallie Bentley or email at <a target="_blank" href="mailto:integra@taylorbennett.co.uk">integra@taylorbennett.co.uk</a></p>
        <div>
            <a href="https://www.eventbooking.uk.com/integra/?" class="a-btn a-btn-bg">Apply Now</a>
        </div>
    </div>
    <div class="page-header">
        <h2>Already a member?</h2>
        <div>
            <a href="https://www.eventbooking.uk.com/integra/?" class="a-btn a-btn-bg">Sign In Here</a>
        </div>
    </div>
</div>

<?php

include('footer.php');

?>

<script src="script/events.js?r=123"></script>

<!-- <script>
    window.addEventListener('load', function() {
        pageOnload('projects');
    });
</script> -->