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
        <small>Aims</small>
        <h1>Our <br>Purpose</h1>
        <p>Integra has evolved into a self-funding organisation comprising Advanced and other associated software clients. The main purpose is to allow elected committee members to communicate member needs to senior management of the software companies.</p>
        <!-- <div>
            <a href="events.php" class="a-btn a-btn-bg">Explore our events</a>
        </div> -->
    </div>
    <div class="container-divide-img-img">
        <div class="blob-container">
            <div class="blob blob-left-bottom" style="clip-path: shape(from 97.03% 42.97%,curve to 92.30% 55.64% with 96.16% 50.00%,smooth to 86.69% 66.87%,smooth to 79.44% 75.04%,smooth to 71.83% 85.41%,smooth to 63.30% 95.48%,smooth to 50.82% 92.04%,smooth to 38.02% 88.69%,smooth to 25.54% 87.94%,smooth to 18.88% 77.72%,smooth to 14.77% 65.94%,smooth to 6.52% 55.64%,smooth to 3.68% 43.53%,smooth to 9.98% 31.97%,smooth to 19.23% 23.69%,smooth to 29.62% 18.61%,smooth to 39.86% 15.69%,smooth to 50.83% 8.86%,smooth to 62.82% 5.86%,smooth to 71.09% 15.88%,smooth to 76.74% 26.85%,smooth to 89.04% 33.27%,smooth to 97.03% 42.97%);">&nbsp;</div>

            <div class="blob blob-right-top" style="clip-path: shape(from 97.03% 42.97%,curve to 92.30% 55.64% with 96.16% 50.00%,smooth to 86.69% 66.87%,smooth to 79.44% 75.04%,smooth to 71.83% 85.41%,smooth to 63.30% 95.48%,smooth to 50.82% 92.04%,smooth to 38.02% 88.69%,smooth to 25.54% 87.94%,smooth to 18.88% 77.72%,smooth to 14.77% 65.94%,smooth to 6.52% 55.64%,smooth to 3.68% 43.53%,smooth to 9.98% 31.97%,smooth to 19.23% 23.69%,smooth to 29.62% 18.61%,smooth to 39.86% 15.69%,smooth to 50.83% 8.86%,smooth to 62.82% 5.86%,smooth to 71.09% 15.88%,smooth to 76.74% 26.85%,smooth to 89.04% 33.27%,smooth to 97.03% 42.97%);"></div>

            <div class="blob-img" style="clip-path: shape(from 93.61% 43.15%,curve to 89.69% 55.70% with 90.55% 50.00%,smooth to 89.60% 68.67%,smooth to 82.42% 77.09%,smooth to 69.58% 80.19%,smooth to 60.31% 86.72%,smooth to 50.17% 90.07%,smooth to 39.65% 85.97%,smooth to 30.46% 80.37%,smooth to 17.97% 76.71%,smooth to 6.80% 69.68%,smooth to 3.44% 56.80%,smooth to 5.63% 43.84%,smooth to 13.22% 33.68%,smooth to 18.50% 21.73%,smooth to 24.57% 10.56%,smooth to 37.63% 10.36%,smooth to 50.25% 11.65%,smooth to 61.87% 10.26%,smooth to 72.78% 14.39%,smooth to 84.77% 20.60%,smooth to 94.31% 29.67%,smooth to 93.61% 43.15%);">
                <img src="https://evbk-public.s3-eu-west-1.amazonaws.com/integra/website/img/people/people-3.jpg" alt="Events">
            </div>
        </div>
    </div>
</div>
<div id="eventsContainer" class="container container-light">
    <div class="cards">
        <?php

        $collaboration = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/group.svg'),
            'Collaboration',
            'Support collaborative working between members'
        );
        $collaboration->get_details();

        $networking = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/globe.svg'),
            'Networking',
            'Facilitate networking between members'
        );
        $networking->get_details();

        $recruiting = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/add-people.svg'),
            'Recruiting',
            'Recruit new members to Integra'
        );
        $recruiting->get_details();

        $advancedImprovements = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/clipboard.svg'),
            'Advanced improvements',
            'Chasing Advanced for improvements in service delivery & quality imperatives'
        );
        $advancedImprovements->get_details();

        $strategicDevelopment = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/trolley.svg'),
            'Strategic Delevelopment',
            'Influence the strategic development of the products'
        );
        $strategicDevelopment->get_details();

        $memberRequests = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/person.svg'),
            'Member Requests',
            'Manage member requests for help'
        );
        $memberRequests->get_details();

        $annualConferenceAdvanced = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/presentation.svg'),
            'Annual User Conference with Advanced',
            'Help to plan and organise an annual user conference with Advanced'
        );
        $annualConferenceAdvanced->get_details();

        $midYearMeeting = new cardItemSmall(
            file_get_contents(__DIR__ . '/img/svg-icon/computer.svg'),
            'Mid Year Meeting',
            'Plan, organise & host a mid year meeting or workshop'
        );
        $midYearMeeting->get_details();

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