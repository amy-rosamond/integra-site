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

            <div class="blob blob-right-top" style="clip-path: shape(from 95.58% 43.30%,curve to 93.90% 56.21% with 95.49% 50.00%,smooth to 91.34% 69.19%,smooth to 85.11% 80.19%,smooth to 72.54% 83.90%,smooth to 60.15% 84.27%,smooth to 49.37% 89.56%,smooth to 37.80% 91.76%,smooth to 25.44% 87.70%,smooth to 14.48% 80.76%,smooth to 12.77% 67.91%,smooth to 9.25% 55.06%,smooth to 7.00% 44.28%,smooth to 10.58% 31.46%,smooth to 15.27% 20.12%,smooth to 26.63% 14.13%,smooth to 38.36% 9.97%,smooth to 49.74% 9.41%,smooth to 61.35% 11.86%,smooth to 70.24% 17.77%,smooth to 77.71% 26.22%,smooth to 88.87% 32.99%,smooth to 95.58% 43.30%);"></div>

            <div class="blob-img">
                <img src="https://evbk-public.s3-eu-west-1.amazonaws.com/integra/website/img/events/radisson-blu-sheffield.jpg" alt="Events">
            </div>
        </div>
    </div>
</div>
<div class="container container-light">
    <nav>

        <?php

        foreach ($navBarEvents as $a) {
            // onClick="{( => { lenis?.scrollTo("' . $a['href'] . '");} }" 
            echo '<button id="' . $a['eventDisplay'] . '" onClick="eventDisplay(\'' . $a['eventDisplay'] . '\');" class="a-btn a-btn-bg-hover ' . $a['class'] . '">' . $a['name'] . '</button>';
        }

        ?>

    </nav>
</div>
<div id="eventsContainer" class="container container-light" style="padding-top: 0px;">
    <div class="cards">
        <?php

        $integraConference26 = new cardItem(
            'conference',
            'https://evbk-public.s3-eu-west-1.amazonaws.com/integra/website/img/events/radisson-blu-sheffield.jpg',
            '25 Nov 2026',
            'Conference',
            'Integra User Conference 2026',
            'Radisson Blu, Sheffield',
            'Join us for a day of inspiraton, expert speakers, and valuable networking opportunities.',
            'https://www.eventbooking.uk.com/integra-2026/'
        );
        $integraConference26->get_details();

        $midYearUserMeeting = new cardItem(
            'user',
            'https://evbk-public.s3-eu-west-1.amazonaws.com/integra/website/img/people/people-3.jpg',
            '21 April 2023',
            'User Meeting',
            'Mid Year User Meeting',
            'Nottingham Belfty Hotel',
            'The main aim of the group is to promote and maintain a healthy dialogue between Advanced, associated third party suppliers, and their users; ensuring that the suppliers understand what their users need and want and initiating and developing networking relationships between members.',
            '#'
        );
        $midYearUserMeeting->get_details();

        $committee = new cardItem(
            'committee',
            'https://evbk-public.s3-eu-west-1.amazonaws.com/integra/website/img/people/people-2.jpg',
            '14 July 2023',
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

<?php

include('footer.php');

?>

<script src="script/events.js?r=123"></script>

<!-- <script>
    window.addEventListener('load', function() {
        pageOnload('projects');
    });
</script> -->