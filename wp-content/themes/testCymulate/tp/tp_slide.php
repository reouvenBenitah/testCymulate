<div class="" id="content-slide">
    <div class="imgcover">
        <div class="coltex1">
            Gain Visibility to
        </div>
        <div class="coltex2">
            Immediate Threats
        </div>
        <div class="coltex3">
            as They Emerge
        </div>
        <div class="textAndBtn ">
            <div class="text">
                Our way to help keep organizations <br /> aware and protected.
            </div>
            <div class="groupBtn">
                <button>Free Trial</button>
            </div>
        </div>
    </div>

</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&family=Work+Sans&display=swap');

    #content-slide {
        background-image: url('wp-content/themes/testCymulate/assets/images/Desktop/Desktop_hero.png');
        background-size: cover;
        background-repeat: no-repeat;
        /* margin-top: 110px; */
        height: 600px;
        width: 100%;

    }

    .imgcover {
        display: flex;
        flex-direction: column;
        margin-bottom: 0;
        margin: 10% 0 0 98px;


    }


    .imgcover div {
        font-family: system-ui;
        font-size: 30px;
        font-weight: 600;
        line-height: 30px;
        letter-spacing: 0.1em;
        text-align: left;
        color: #fff;

    }

    .textAndBtn {
        display: flex;
        flex-direction: column;
        /* margin: 60px auto; */
        /* margin-left: 90px; */
        margin-top: 0;
        color: #fff;
    }

    .groupBtn button {
        padding: 10px 20px;
        font-family: 'Poppins';
        border: 1px solid #fff;
        border-radius: 20px;
        background: #0e54c4;
        color: #fff;
    }

    .groupBtn button:hover {
        padding: 10px 20px;
        font-family: 'Poppins';
        border: 1px solid #fff;
        border-radius: 20px;
        background: #fff;
        color: #0e54c4;
    }

    .textAndBtn .text {
        padding: 15px 0;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 11px;
        line-height: 15px;
        letter-spacing: 0.05em;
    }

    @media only screen and (max-width: 1120px) {
        #content-slide {
            background-image: url('wp-content/themes/testCymulate/assets/images/Desktop/Desktop_hero.png');
            background-size: contain;
            background-repeat: no-repeat;
            padding: 98px 20px 20px;
            height: 617px;
        }
    }


    @media only screen and (max-width: 490px) {
        #content-slide {
            background-image: url('wp-content/themes/testCymulate/assets/images/Mobile/Mobile_hero.png');
            background-size: contain;
            background-repeat: no-repeat;
            padding: 98px 20px 20px;
            height: 600px;
        }

        .imgcover div {
            font-family: system-ui;
            font-size: 30px;
            font-weight: 600;
            line-height: 30px;
            letter-spacing: 0.1em;
            text-align: center;
            color: #fff;
        }

        .imgcover {
            display: flex;
            flex-direction: column;
            margin-bottom: 0;
            margin: 0px;
        }

    }
</style>