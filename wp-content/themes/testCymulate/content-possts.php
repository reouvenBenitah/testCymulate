<?php

/**
* Template Name: content-posts
* Template Post Type: page, post
*/
?>
<div class="" id="contentFooter">
    <?php $prioritizes = get_terms(['taxonomy' => 'Prioritize']) ?>
    <ul id="ulBtn">
        <?php foreach ($prioritizes as $prioritize) : ?>
            <li>
                <a href="<?= get_term_link($prioritize) ?>"><?= $prioritize->name ?></a>
            </li>
        <?php endforeach; ?>
        <li>
            <a href="/testCymulate">All</a>
        </li>
    </ul>
    <ul>
        <li><a href=""></a></li>
    </ul>
    <div id="slideItem">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="card">
                    <div class="headerCard">
                        <img src="<?php the_post_thumbnail('post-thumbnail') ?>"" alt="">
                </div>
                <div class=" date"><?= get_the_date() ?>
                    </div>
                    <div class="text">
                        <span class="title"><?php the_title();  ?> </span>
                        <span class="textBody">
                            <?php the_content() ?>
                        </span>
                    </div>
                </div>
            <?php endwhile;
        else : ?>
            <p>No Posts !!</p>
        <?php endif; ?>
    </div>

</div>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Rajdhani:wght@700&family=Work+Sans&display=swap');




    .setting {
        display: flex;
        justify-content: flex-end;
    }

    #contentFooter {
        margin-top: 120px;
        background: #070723;
        height: 520px;
    }

    #slideItem {
        display: flex;
        margin: 70px auto;
        margin-left: auto;
        margin-right: auto;
        overflow-x: auto;
        overflow-y: hidden;
        width: 85%;
    }

    .card .header {}

    .card {
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #fff;
        height: 260px;
        width: 100%;
        background: #202039;
        margin-inline: 11px;
        border-radius: 16px;
        padding: 10px;
        min-width: 260px;
    }

    .card .date {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 300;
        font-size: 13px;
        line-height: 24px;
        text-align: center;
        letter-spacing: 0.05em;
        color: #FFFFFF;
    }

    .card .textBody {
        display: block;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 13px;
        line-height: 21px;
        text-align: center;
        letter-spacing: 0.05em;
        color: #FFFFFF;
    }

    .card .text .title {
        display: block;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 24px;
        text-align: center;
        letter-spacing: 0.05em;
        color: #FFFFFF;
    }

    #ulBtn li {
        display: inline-block;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 13px;
        line-height: 20px;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        color: #070723;
        padding: 10px;
        background: #0E54C4;
        border-radius: 10px;


    }

    #ulBtn li a {
        color: #fff;
        text-decoration: none;
    }
</style>

<script></script>