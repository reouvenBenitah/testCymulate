<header class="header">
    <div class="contentHeader">

        <a href="/testCymulate/" class="logo">
            <img src="https://cymulate.com/wp-content/uploads/2021/08/cymulate-logo.png">
        </a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">

            <li class="nav-item">
                <a href="#">Products</a>
            </li>
            <li class="nav-item">
                <a href="#">What’s in it for you?</a>
            </li>
            <li class="nav-item">
                <a href="#">Resources</a>
            </li>
            <li class="nav-item">
                <a href="#">Company</a>
            </li>
            <li class="nav-item">
                <a href="#">Partners</a>
            </li>
            <li class="nav-item">
                <a href="#" class="btns">Blog</a>|
                <a href="#" class="btns">Sign in</a>
                <button class="btn-primary">Get Started</button>
            </li>
        </ul>
    </div>
</header>

<style>
    .contentHeader {
        /* padding: 0px 93px 0px 93px; */
    }

    /* header */
    a {
        color: #070723;
    }

    #firstRow {
        margin-top: 28px;
    }

    #menuTop {
        float: right;

    }

    #menuTop li {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 13px;
        line-height: 20px;
        /* identical to box height */

        letter-spacing: 0.05em;
        text-transform: uppercase;

        /* Dark Blue */

        color: #070723;
    }

    .header {
        background-color: #fff;
        box-shadow: 1px 1px 4px 0 rgba(0, 0, 0, .1);
        position: fixed;
        width: 100%;
        height: 110px;
        z-index: 3;
    }


    .header ul {
        /* margin: 0; */
        padding: 0;
        list-style: none;
        overflow: hidden;
        background-color: #fff;
    }

    .header li a {
        display: block;
        padding: 9px 19px;
        color: black;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 13px;
        line-height: 24px;
        letter-spacing: 0.05em;
        color: #070723;
        transition: all 200ms ease-in;
        text-decoration: none;
    }

    .header li a:hover,
    .header .menu-btn:hover {
        /* background-color: #f4f4f4; */
        text-decoration: underline;

    }

    .btns {
        display: inline !important;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 13px;
        line-height: 20px;
        /* identical to box height */

        letter-spacing: 0.05em;
        text-transform: uppercase;

        /* Dark Blue */

        color: #070723;
    }

    .header .logo {
        display: block;
        float: left;
        font-size: 2em;
        padding: 25px 0 0px 0;
        text-decoration: none;
    }

    /* menu */

    .header .menu {
        clear: both;
        max-height: 0;
        transition: max-height .2s ease-out;
    }

    /* menu icon */

    .header .menu-icon {
        cursor: pointer;
        display: inline-block;
        float: right;
        padding: 28px 20px;
        position: relative;
        user-select: none;
    }

    .header .menu-icon .navicon {
        background: #333;
        display: block;
        height: 2px;
        position: relative;
        transition: background .2s ease-out;
        width: 18px;
    }

    .header .menu-icon .navicon:before,
    .header .menu-icon .navicon:after {
        background: #333;
        content: '';
        display: block;
        height: 100%;
        position: absolute;
        transition: all .2s ease-out;
        width: 100%;
    }

    .header .menu-icon .navicon:before {
        top: 5px;
    }

    .header .menu-icon .navicon:after {
        top: -5px;
    }

    /* menu btn */

    .header .menu-btn {
        display: none;
    }

    .header .menu-btn:checked~.menu {
        max-height: 400px;
        padding: 20px;
    }

    .header .menu-btn:checked~.menu-icon .navicon {
        background: transparent;
    }

    .header .menu-btn:checked~.menu-icon .navicon:before {
        transform: rotate(-45deg);
    }

    .header .menu-btn:checked~.menu-icon .navicon:after {
        transform: rotate(45deg);
    }

    .header .menu-btn:checked~.menu-icon:not(.steps) .navicon:before,
    .header .menu-btn:checked~.menu-icon:not(.steps) .navicon:after {
        top: 0;
    }

    .btn-primary {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 12px 40px 12px;
        gap: 10px;
        width: 160px;
        height: 38px;
        background: #0E54C4;
        border-radius: 60px;
        border: 0;
        color: #fff;
    }

    .btn-primary:hover {
        /* background: var(--clr-primary-hover); */
        border: 1px solid #0E54C4;
        color: #111;
    }







    @media (min-width: 1110px) {

        /* .header .logo {
            display: block;
            float: left;
            font-size: 2em;
            padding: 33px 0 0px 28px;
            text-decoration: none;
        } */

        .header li {
            float: left;
            padding-top: 25px;
        }

        .header li:last-child {
            float: left;
            padding: 0px;
        }


        /* .header li a {
            padding: 20px 30px;
        } */

        .header .menu {
            clear: none;
            float: right;
            max-height: none;
            /* margin-top: 33px; */
        }

        .header .menu-icon {
            display: none;
        }

        .contentHeader {
            padding: 0px 98px 0px 98px !important;

        }
    }

    @media only screen and (max-width: 1110px) {

        .header .logo {
            display: block;
            float: left;
            font-size: 2em;
            padding: 25px 0 0px 33px;
            text-decoration: none;
        }


    }
</style>