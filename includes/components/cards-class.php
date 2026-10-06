<?php

class cardItem
{
    public $class;
    public $img;
    public $type;
    public $title;
    public $location;
    public $text;
    public $href;

    public function __construct($class, $img, $type, $title, $location, $text, $href)
    {
        $this->class = $class;
        $this->img = $img;
        $this->type = $type;
        $this->title = $title;
        $this->location = $location;
        $this->text = $text;
        $this->href = $href;
    }

    public function get_details()
    {
        // Check if the href exists, is not empty, and is not just a placeholder hash
        $has_link = !empty($this->href) && $this->href !== '#';
?>
        <div class="<?php echo $this->class; ?> all-events">
            <img src="<?php echo $this->img; ?>" alt="Event">
            <div>
                <div>
                    <p><?php echo $this->type; ?></p>
                    <h3><?php echo $this->title; ?></h3>
                    <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                        <?php echo $this->location; ?></p>
                    <p><?php echo $this->text; ?></p>
                </div>
                <?php if ($has_link): ?>
                    <a href="<?php echo $this->href; ?>" class="a-btn a-btn-bg-hover">
                        Sign up
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
        </div>

<?php
    }
}

// <div class="all-events">
//             <img src="https://evbk-public.s3-eu-west-1.amazonaws.com/integra/website/img/events/radisson-blu-sheffield.jpg" alt="Event">
//             <div>
//                 <div>
//                     <p>Conference</p>
//                     <h3>Integra User Conference 2026</h3>
//                     <p>
//                     <?= file_get_contents(__DIR__ . '/img/svg-icon/map.svg') 
//                     Radisson Blu, Sheffield</p>
//                     <p>Join us for a day of inspiraton, expert speakers, and valuable networking opportunities.</p>
//                 </div>
//                 <a href="#" class="a-btn a-btn-bg-hover">
//                     Learn more
//                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
//                         <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
//                     </svg>
//                 </a>
//             </div>
//         </div>