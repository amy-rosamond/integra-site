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
        <small>New's & Events</small>
        <h1>Upcoming<br>Events</h1>
        <p>Integra run a number of meetings, workshops and special interest groups throughout the year on various topics of real interest to users, in addition to events run by Capita Solutions and other third party suppliers. Below is a list of all the scheduled events, and links which could be of interest to e2 & e5 customers.</p>
        <!-- <div>
            <a href="events.php" class="a-btn a-btn-bg">Explore our events</a>
        </div> -->
    </div>
    <div class="container-divide-img-img">
        <div class="blob-container">
            <div class="blob blob-left-bottom"></div>

            <div class="blob blob-right-top"></div>

            <div class="blob-img">
                <img src="https://evbk-public.s3-eu-west-1.amazonaws.com/integra/website/img/events/radisson-blu-sheffield.jpg" alt="Events">
            </div>
        </div>
    </div>
</div>
<div class="container" style="padding-block: 0px;position: relative; bottom: 3%;">
    <nav>

        <?php

        foreach ($navBarEvents as $a) {
            // onClick="{( => { lenis?.scrollTo("' . $a['href'] . '");} }" 
            echo '<button id="' . $a['eventDisplay'] . '" onClick="eventDisplay(\'' . $a['eventDisplay'] . '\');" class="' . $a['class'] . '">' . $a['name'] . '</button>';
        }

        ?>

    </nav>
</div>
<div id="eventsContainer" class="container" style="padding-top: 0px;">
    <div class="cards">
        <?php

        $integraConference26 = new cardItem(
            'conference',
            'https://evbk-public.s3-eu-west-1.amazonaws.com/integra/website/img/events/radisson-blu-sheffield.jpg',
            'Conference',
            'Integra User Conference 2026',
            'Radisson Blu, Sheffield',
            'Join us for a day of inspiraton, expert speakers, and valuable networking opportunities.',
            'https://www.eventbooking.uk.com/integra-2026/'
        );
        $integraConference26->get_details();

        $midYearUserMeeting = new cardItem(
            'user',
            'https://evbk-public.s3-eu-west-1.amazonaws.com/integra/website/img/events/radisson-blu-sheffield.jpg',
            'User Meeting',
            'Mid Year User Meeting',
            'Nottingham Belfty Hotel',
            'The main aim of the group is to promote and maintain a healthy dialogue between Advanced, associated third party suppliers, and their users; ensuring that the suppliers understand what their users need and want and initiating and developing networking relationships between members.',
            '#'
        );
        $midYearUserMeeting->get_details();

        $committee = new cardItem(
            'committee',
            'https://evbk-public.s3-eu-west-1.amazonaws.com/integra/website/img/events/radisson-blu-sheffield.jpg',
            'Committee Meeting',
            'Committee',
            'Mailbox Office Birmingham',
            'The main aim of the group is to promote and maintain a healthy dialogue between Advanced, associated third party suppliers, and their users; ensuring that the suppliers understand what their users need and want and initiating and developing networking relationships between members.',
            '#'
        );
        $committee->get_details();

        ?>
    </div>
</div>


<script src="script/events.js?r=123"></script>

<!-- <script>
    window.addEventListener('load', function() {
        pageOnload('projects');
    });
</script> -->