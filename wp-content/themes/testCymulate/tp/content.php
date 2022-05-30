<div class="containerSite">
    <?php get_header() ?>
    <?php
    define('DIR_TEMPLATE', get_template_directory());

    include DIR_TEMPLATE  . '/tp/tp_header.php';
    include_once DIR_TEMPLATE  . '/tp/tp_slide.php';
    include_once DIR_TEMPLATE  . '/tp/tp_main.php';
    include_once DIR_TEMPLATE  . '/tp/tp_slide_footer.php';


    ?>

    <?php get_footer() ?>
</div>

<style>
    body {
        margin: 0;
    }

    .containerSite {
        display: flex;
        flex-direction: column;

    }
</style>