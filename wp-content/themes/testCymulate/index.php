<div class="containerSite">
    <?php
    get_header() ?>

    <?php
    if (is_home()) {
        include DIR_TEMPLATE  . '/tp/tp_header.php';
        include_once DIR_TEMPLATE  . '/tp/tp_slide.php';
        include_once DIR_TEMPLATE  . '/tp/tp_main.php';
    }
    ?>
    <div class="h"></div>
    <?php
    include_once DIR_TEMPLATE  . '/tp/tp_slide_footer.php';
    ?>

    <?php get_footer() ?>
</div>

<style>
    .h {
        height: 120px;
    }

    body {
        margin: 0;
    }

    .containerSite {
        display: flex;
        flex-direction: column;

    }
</style>