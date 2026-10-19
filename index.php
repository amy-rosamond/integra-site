<?php

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

include('header.php');


include('includes/components/box-list-class.php');

?>

<div class="container container-divide-img">
    <div class="page-header">
        <h1>Conferences, <br>User Days & <br>Workshops.</h1>
        <small>Real connections. Shared Knowledge.<br>Lasting impact.</small>
        <p>Integra is the User Group for Advanced e5 & Collaborative Planning users, and other associated software customers. It is an independent, self-funding, non-profit making organisation run by a committee of members, which supports its members’ interests by sharing best practice and innovative ideas, facilitating jointly funded software developments and arranging workshops and meetings.</p>
        <!-- <p>The main aim of the group is to promote and maintain a healthy dialogue between Advanced, associated third party suppliers, and their users; ensuring that the suppliers understand what their users need and want and initiating and developing networking relationships between members.</p> -->
        <div>
            <a href="events.php" class="a-btn a-btn-bg">Explore our events</a>
        </div>
    </div>
    <div class="container-divide-img-img">
        <div class="blob-container">
            <div class="blob blob-left-bottom"></div>

            <div class="blob blob-right-top"></div>

            <div class="blob-img">
                <img src="https://evbk-public.s3-eu-west-1.amazonaws.com/integra/website/img/events/radisson-blu-sheffield.jpg" alt="Speaker at conference">
            </div>
        </div>
    </div>
</div>
<div class="container container-light">
    <div class="box-list">
        <?php

        $conferences = new BoxListItem(
            file_get_contents(__DIR__ . '/img/svg-icon/group.svg'),
            'Conferences',
            'Inspiring keynotes, expert panels and valuable netwroking with industry peers.',
            '#'
        );
        $conferences->get_details();

        $userDays = new BoxListItem(
            file_get_contents(__DIR__ . '/img/svg-icon/user.svg'),
            'User Days',
            'Share experiences, discover new feautures, and get direct input from our team.',
            '#'
        );
        $userDays->get_details();

        $workshops = new BoxListItem(
            file_get_contents(__DIR__ . '/img/svg-icon/light-bulb.svg'),
            'Workshops',
            'Hands-on sessions designed to build skills, solve real challenges and drive practical results.',
            '#'
        );
        $workshops->get_details();


        ?>

    </div>
</div>

<div class="container container-divide-img">
    <div class="container-divide-img-img" style="padding-bottom: 80px;">
        <svg width="0" height="0" style="position: absolute;">
            <defs>
                <clipPath id="wave-image-clip" clipPathUnits="objectBoundingBox">
                    <!-- 
                    Coordinates normalized from 0.0 to 1.0:
                    Top-Left -> Top-Right Curve -> S-Curve Bottom Edge -> Back to Top-Left
                    -->
                    <path d="M 0,0 
                    L 0.8,0 
                    C 0.95,0 1.0,0.1 1.0,0.25 
                    C 1.0,0.4 0.92,0.5 0.8,0.65 
                    C 0.65,0.85 0.35,0.7 0,1.0 
                    Z" />
                </clipPath>
            </defs>
        </svg>
        <div class="blob-container-full-height">
            <div class="blob-img">
                <img src="https://evbk-public.s3-eu-west-1.amazonaws.com/integra/website/img/people/people-3.jpg" alt="Speaker at conference">
            </div>
            <div class="blob-background"></div>
            <div class="blob-background"></div>
        </div>
    </div>
    <div class="page-header">
        <small>Our Aims</small>
        <h1>What we're here to <br>achieve</h1>
        <p>The main aim of the group is to promote and maintain a healthy dialogue between Advanced, associated third party suppliers, and their users; ensuring that the suppliers understand what their users need and want and initiating and developing networking relationships between members.</p>
        <div>
            <a href="aims.php" class="a-btn a-btn-bg">More information</a>
        </div>
    </div>
</div>

<?php

include('footer.php');

?>