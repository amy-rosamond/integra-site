<?php

// include('variables.php');

?>
<?php


class BoxListItem
{
    public $icon;
    public $title;
    public $text;
    public $href;

    public function __construct($icon, $title, $text, $href)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->text = $text;
        $this->href = $href;
    }

    public function get_details()
    {
        // Check if the href exists, is not empty, and is not just a placeholder hash
        $has_link = !empty($this->href) && $this->href !== '#';
?>

        <div class="box-list-box">
            <div><?php echo $this->icon; ?></div>
            <h2><?php echo $this->title ?></h2>
            <p><?php echo $this->text ?></p>
            <?php if ($has_link): ?>
                <a href="<?php echo $this->href ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            <?php endif; ?>
        </div>

<?php
    }
}

?>

<!-- List HTML
<div class="box-list-box">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
    </svg>
    <h2>Conferences</h2>
    <p>Inspiring keynotes, expert panels and valuable netwroking with industry peers.</p>
</div> -->