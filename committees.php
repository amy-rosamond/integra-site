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
        <small>Committee Groups</small>
        <h1>Our Committee<br>Groups</h1>
        <p>Integra is run by a small group of Advanced e5 clients elected by members from a diverse range of organisations. The organisation is structured as below:</p>
        <!-- <div>
            <a href="events.php" class="a-btn a-btn-bg">Explore our events</a>
        </div> -->
    </div>
    <div class="container-divide-img-img">
        <div class="blob-container">
            <div class="blob blob-left-bottom"></div>

            <div class="blob blob-right-top"></div>

            <div class="blob-img">
                <img src="https://evbk-public.s3-eu-west-1.amazonaws.com/integra/website/img/people/people-3.jpg" alt="Events">
            </div>
        </div>
    </div>
</div>
<div id="eventsContainer" class="container container-light">
    <div class="cards">
        <?php

        $mainCommittee = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/group.svg'),
            'Main Committee',
            'The Main Committee is responsible for upholding the Constitution of the User Group. It works closely with our suppliers to ensure clients are well represented and influence the senior management to continually improve support services and influence product initiatives and development. It is also is responsible for organising events for members to attend, including the conference, user forums, development forums and communicating these events and other news of interest to members.'
        );
        $mainCommittee->get_details();

        $serviceDeliveryForum = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/clipboard.svg'),
            'Service Delivery Forum',
            'The Service Delivery Forum is responsible for acting as a representative forum of the customer base to the suppliers, meeting with senior management to discuss support and service provision, quality and initiatives targeted at improving support level. The forum meets twice a year.'
        );
        $serviceDeliveryForum->get_details();

        $developmentUserForum = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/trolley.svg'),
            'Development User Forum',
            'The Development User Forum is responsible for influencing Advanced\'s strategic product development on e5 to the benefit of all members. The forum meets twice a year.'
        );
        $developmentUserForum->get_details();

        $integraUserForum = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/globe.svg'),
            'Integra User Forum (IUF)',
            'The Integra User Forum (IUF) provides members with the opportunity to meet together to discuss pertinent issues, operational matters and use of existing software. There are also opportunities to view ancillary software products that add business value together with presentations from guest speakers and updates on developments from participating members. The forum meets approx. once a year.'
        );
        $integraUserForum->get_details();


        ?>
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