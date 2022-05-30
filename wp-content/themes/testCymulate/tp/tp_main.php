<?php
if (get_query_var('paged')) {
    $paged = get_query_var('paged');
}
if (get_query_var('page')) {
    $paged = get_query_var('page');
}

$query = new WP_Query(array('post_type' => 'snippet', 'paged' => $paged));

if ($query->have_posts()) : ?>
    <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="entry">
            <h2 class="title"><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
    <!-- show pagination here -->
<?php else : ?>
    <!-- show 404 error here -->
<?php endif; ?>

<div class="" id="contentMain">
    <div class="imgCoverList">
        <div id="titleList">
            <div class="coltex1">
                Gain Visibility to
            </div>
            <div class="coltex2">
                Immediate Threats
            </div>
            <div class="coltex3">
                as They Emerge
            </div>
        </div>
        <div id="listNum">
            <div class="one item">
                <div class="num1">01</div>
                <div class="textList">
                    New payloads and attacks show <br>
                    up in the wild every day.
                </div>
            </div>
            <div class="tow item">
                <div class="num2">02</div>
                <div class="textList">
                    The Cymulate Research Lab catches and analyzes <br>
                    threats immediately after they are launched by <br>
                    cybercriminals and malicious hackers.
                </div>
            </div>
            <div class="three item">
                <div class="num3">03</div>
                <div class="textList">
                    Receive a daily email with important <br>
                    information and simple remediation tips.
                </div>
            </div>
            <div class="four item">
                <div class="num4">04</div>
                <div class="textList">
                    Contact us at anytime to learn how you <br>
                    can validate your defenses against them.
                </div>
            </div>
        </div>

    </div>
    <div class="imgCoverForm ">
        <form action="" method="post">
            <div class="titleForm">
                <h4>Sign Up For The Threat Alerts</h4>
            </div>
            <div class="form-row col">
                <div class="inputFn">
                    <input type="text" placeholder="First Name *">
                </div>

                <div class="inputLn">
                    <input type="text" placeholder="Last Name *">
                </div>

            </div>
            <div class="form-row">
                <input type="text" placeholder="Email *">
            </div>
            <div class="form-row">
                <select name="" id="">
                    <option value="">Country *</option>
                </select>
            </div>
            <div class="form-row">
                <select name="" id="">
                    <option value="">State/Region</option>
                </select>
            </div>
            <div class=" checkbox">
                <input type="checkbox" name="" id="check">
                <label for="check">* I accept the Terms and Conditions and Privacy Policy.</label>
            </div>
            <div class="btn">
                <button class="btn-primary">Subscribe</button>
            </div>
        </form>
    </div>
</div>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&family=Work+Sans&display=swap');

    #contentMain {
        background-image: url('wp-content/themes/testCymulate/assets/images/Desktop/Secbackround.png');
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        justify-content: space-between;
        padding: 60px 93px 50px 93px;
    }

    #titleList {
        padding-bottom: 10px;
    }

    #titleList div {
        font-family: 'Rajdhani';
        font-style: normal;
        font-weight: 600;
        font-size: 34px;
        line-height: 93%;
        letter-spacing: 0.1em;
        color: #070723;
    }

    .imgCoverList {
        /* padding: 70px 0 20px 0px; */
    }

    .item {
        display: flex;
    }

    .item div:first-child {
        font-family: 'Rajdhani';
        font-style: normal;
        font-weight: 700;
        font-size: 49px;
        color: #EF2C1D;
        width: 70px;
        letter-spacing: 0.05em;
    }

    .item .textList {
        font-family: 'Work Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 19px;
        display: flex;
        align-items: center;
        letter-spacing: -0.02em;
        color: #090909;
    }

    .imgCoverForm {
        background: #FFFFFF;
        box-shadow: 0px 0px 24px rgba(7, 7, 35, 0.08);
        border-radius: 16.2934px;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 24px;
        letter-spacing: 0.05em;
        color: #070723;
        width: 45%;


    }

    .imgCoverForm form {
        padding-inline: 30px;
    }


    .form-row {
        padding-bottom: 13px;
    }

    .form-row input,
    select {
        width: 100%;
        height: 47px;
        border: 1px solid #E5E5E5;
        border-radius: 29px;
        padding: 13px;
    }

    .col .inputFn {
        margin-right: 10px;
        width: 100%;
    }

    .col .inputLn {
        width: 100%;
    }

    .col {
        display: flex;

    }

    .checkbox input {
        border: 1px solid #E5E5E5;
        border-radius: 6px;
    }

    .checkbox label {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 11px;
        line-height: 21px;
        letter-spacing: 0.05em;
        color: #070723;
    }

    .btn .btn-primary {

        align-items: center;
        padding: 12px 38px 12px;
        gap: 10px;
        width: 115px;
        height: 38px;
        background: #0E54C4;
        border-radius: 60px;
        border: 0;
        color: #fff;
    }

    .btn {
        margin-top: 10px;

    }

    .btn .btn-primary:hover {

        align-items: center;
        padding: 12px 38px 12px;
        gap: 10px;
        width: 115px;
        height: 38px;
        background: #0E54C4;
        border-radius: 60px;
        color: #111;
        border: 1px solid #0E54C4;
    }

    @media only screen and (max-width: 1000px) {
        #contentMain {
            background-image: url('wp-content/themes/testCymulate/assets/images/Mobile/SecbackrounMobile.png');
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding: 25px;
            height: 1186px;
            flex-direction: column;
        }

        .imgCoverForm {
            background: #FFFFFF;
            box-shadow: 0px 0px 24px rgba(7, 7, 35, 0.08);
            border-radius: 16.2934px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: 0.05em;
            color: #070723;
            margin-top: 40px;
            width: 80%;
        }

        .one {
            height: 48px
        }

        .tow {
            height: 120px;
        }

        .three {
            height: 72px;
        }

        .four {
            height: 72px;

        }
    }

    @media only screen and (max-width: 495px) {
        #contentMain {
            background-image: url('wp-content/themes/testCymulate/assets/images/Mobile/SecbackrounMobile.png');
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: flex-start;
            padding: 25px;
            height: 1000px;
            flex-direction: column;
        }

        .imgCoverForm {
            background: #FFFFFF;
            box-shadow: 0px 0px 24px rgba(7, 7, 35, 0.08);
            border-radius: 16.2934px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: 0.05em;
            color: #070723;
            margin-top: 40px;
            width: 100%;
        }

        .one {
            height: 48px
        }

        .tow {
            height: 120px;
        }

        .three {
            height: 72px;
        }

        .four {
            height: 72px;

        }
    }
</style>