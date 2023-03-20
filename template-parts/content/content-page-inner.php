    <?php
    /**
     * Template part for displaying page content in page.php
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package WordPress
     * @subpackage Twenty_Twenty_One
     * @since Twenty Twenty-One 1.0
     */
    ?>
    <style>
        body{
            background: #C8E3F6;
        }
        .header{
            background-color: #C8E3F6;
        }
        .header .logo-wrapper{
            text-align: center;
        }
        .header .logo-wrapper img{
            width: 170px;
        }
        .main-content{
            background-color: #FFD022;
        }
        .c-row{
            padding: 40px 0 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-flow: row wrap;
        }
        .c-column.c-left .img-wrapper img{
            border-radius: 50%;
            height: auto;
            max-width: 485px;
            width: 100%;
            object-fit: cover;
            box-shadow: 5.66px 5.66px 0px 0px rgba(40,45,49,1);
        }
        @media (min-width:768px) {
            .c-column.c-left .img-wrapper img{
                height: 485px;
            }
        }

        @media (max-width:768px) {
            body .c-dropdown-wrap{
                flex-flow: column ;
            }
            #select2-c-location-container{
                text-align: left;
            }
            body .c-dropdown-wrap .c-dropdown{
                text-align: center;
                margin-bottom: 15px;
            }
            .c-dropdown-wrap button{
                margin: 0 auto;
            }
        }

        @media (max-width: 550px){
            .c-row .c-column.c-right .c-right-inner {
                max-width: 350px;
                min-height: 300px;
                padding: 20px;
            }
        }
        @media (max-width: 370px){
            .c-row .c-column.c-right .c-right-inner {
                max-width: 310px;
                min-height: 250px;
                padding: 15px;
            }
        }

        .c-column.c-right .c-right-inner{
            background-color: #fff;
            padding: 40px;
            border-radius: 18px;
            box-shadow: 5.66px 5.66px 0px 0px rgb(40, 45, 49);
            max-width: 500px;
            min-height: 300px;
            width: 100%;
        }
        .c-column.c-right{
            margin-left: 0;
            margin-top: 30px;
        }
        @media (min-width:1024px) {
            .c-column.c-left{
                margin-right: 30px;
            }
            .c-column.c-right{
                margin-left: 30px;
                margin-top: 0;
            }
        }
        .btn-wrapper{
            text-align: center;
            /*margin-top: 60px;*/
        }
        .btn-wrapper .btn-continue:hover {
            text-decoration: none;
        }
        .btn-wrapper .btn-continue {
            transition: all 0.2s ease, visibility 0s;
            /*border-radius: 0px;*/
            /*box-shadow: -0.34px 5.66px #282D31;*/
            /*background: #C8E3F6;*/
            /*margin: 0 5.5px 0px 0px;*/
            font-family: kodchasan,serif;
            color: #282D31;
            display: initial;
            font-size: 17px;
            padding: 15px 0;
            cursor: pointer;
        }

        .c-right-inner h1{
            font-size: 40px;
            color: rgb(200,227,246);
            /*border-bottom: 3px solid rgb(200,227,246);*/
            padding-bottom: 23px;
            font-family: kodchasan,serif;
            font-weight: 500;
            margin-bottom: 25px;
        }
        .body-wrap{
            display: flex;
            justify-content: flex-start;
            align-items: baseline;
            margin-bottom: 10px;
        }
        .body-wrap span {
            width: 100px;
            font-size: 2.0rem;
            color: rgb(80,91,98);
            font-family: kodchasan,serif;
            font-weight: 500;
        }
        .body-wrap p {
            width: 320px;
            color: rgb(120,136,148);
            font-size: 20px;
            font-family: kodchasan,serif;
            margin-left: 15px;
            margin-bottom: 0;
        }
        .c-dropdown-wrap{
            display: flex;
            justify-content: center;
            padding: 30px 0 0;
        }
        .c-dropdown-wrap .c-dropdown{
            margin: 0 10px;
        }
        ::-webkit-input-placeholder { /* Edge */
            color: #000000;;
        }

        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: #000000;;
        }

        .select2-default {
            color: #f00 !important;
        }

        .select2-container {
            min-width: 250px;
        }
        body .select2-container .select2-selection--single{
            height: 55px;
            /*border: 2px solid #aaa;*/
            border-radius: 30px !important;
            background-color: #fff;
            padding: 10px;
            font-size: 19px;
            font-family: kodchasan,serif;
        }
        #select2-c-price-results .select2-results__option {
            padding-right: 20px;
            vertical-align: middle;
        }
        #select2-c-price-results .select2-results__option:hover:before {
            border: 2px solid #000000;
        }
        #select2-c-price-results .select2-results__option:before {
            content: "";
            display: inline-block;
            position: relative;
            height: 20px;
            width: 20px;
            border: 2px solid #e9e9e9;
            border-radius: 4px;
            background-color: #fff;
            margin-right: 20px;
            vertical-align: middle;
            top: -2px;
        }
        #select2-c-price-results .select2-results__option[aria-selected=true]:before {
            font-family:fontAwesome;
            content: "\f00c";
            color: #fff;
            background-color: #C8E3F6;
            border: 0;
            display: inline-block;
            padding-left: 3px;
        }
        .select2-container--default .select2-results__option[aria-selected=true]:hover,
        .select2-container--default .select2-results__option[aria-selected=true] {
            background-color: transparent;
            color: #000;
        }
        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #eaeaeb;
            color: #272727;
        }
        .select2-container--default.select2-container--focus .select2-selection--single,
        .select2-container--default.select2-container--focus .select2-selection--multiple {
            border-color: #C8E3F6;
            border-width: 2px;
        }
        .select2-container--default .select2-selection--multiple {
            height: 55px;
            /*border: 2px solid #aaa;*/
            border-radius: 30px !important;
            background-color: #fff;
            padding: 7px 7px 7px 12px;
            font-size: 19px;
            font-family: kodchasan,serif;
        }
        .select2-container--open .select2-dropdown--below {

            border-radius: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);

        }
        .select2-selection .select2-selection--multiple:after {
            content: 'hhghgh';
        }
        /* select with icons badges single*/
        .select-icon .select2-selection__placeholder .badge {
            display: none;
        }
        .select-icon .placeholder {
            display: none;
        }
        .select-icon .select2-results__option:before,
        .select-icon .select2-results__option[aria-selected=true]:before {
            display: none !important;
            /* content: "" !important; */
        }
        .select-icon  .select2-search--dropdown {
            display: none;
        }
        body .select2-container--default .select2-selection--single .select2-selection__arrow b{
            display: none;
        }
        .select2-dropdown.select2-dropdown--below{
            margin-top: 15px;
        }
        .select2-results__option{
            color: #9d9a9a;
            border-bottom: 1px solid #9d9a9a;
            width: 90%;
            margin:5px auto 0;
            padding: 12px;
            font-size: 15px;
            font-family: kodchasan,serif;
        }
        .select2-results__option:last-child{
            border-bottom: none !important;
        }
        .select2-container--default .select2-results__option--highlighted[aria-selected]{
            background-color: transparent;
            color: #000;
        }
        .select2-container--default .select2-results > .select2-results__options{
            max-height: 220px;
        }
        .c-dropdown-wrap button{
            width: 90px;
            border-radius: 30px;
            border: 1px solid #eee;
            background: #C8E3F6;
        }
        .c-dropdown-wrap button span{
            font-size: 36px;
        }

        .c-row-wrap-append .owl-nav,
        .c-row-wrap .owl-nav{
            display: flex;
            justify-content: center;
            align-items: baseline;
            margin-bottom: 20px;
        }
        .c-row-wrap-append .owl-prev,
        .c-row-wrap .owl-prev{
            background: #C8E3F6 !important;
            height: 52px;
            width: 60px;
            border-radius: 30px 0 0 30px;
            position: relative;
            top: 3px;
            box-shadow: 0 5.66px #282D31;
        }
        .c-row-wrap-append .owl-next,
        .c-row-wrap .owl-next{
            background: #C8E3F6 !important;
            height: 52px;
            width: 60px;
            border-radius: 30px;
            position: relative;
            top: 3px;
            box-shadow: 0 5.66px #282D31;
            left: -7px;
        }
        .c-row-wrap-append .owl-prev i,
        .c-row-wrap .owl-prev i,
        .c-row-wrap-append .owl-next i,
        .c-row-wrap .owl-next i{
            font-size: 25px;
        }

        .checkbox-wrap form {
            max-width: 710px;
            margin: 40px auto 0;
        }
        .checkbox-wrap fieldset {
            background: #fff;
            padding: 15px 15px 9px;
            border-radius: 20px 20px 0 0;
            display: flex;
            justify-content: start;
            flex-flow: row wrap;
        }
        .checkbox-wrap fieldset p{
            font-family: kodchasan,serif;
            margin: 15px 0 0;
            font-size: 12px;
            color: gray;
            width: 100%;
            text-align: center;
        }
        .checkbox-wrap button{
            width: 100%;
            background: #C8E3F6;
            border: 1px solid #b2a7a7;
            height: 40px;
            border-radius: 0px 0px 20px 20px;
            font-size: 17px;
        }
        .checkbox-wrap .c-check{
            margin-bottom: 10px;
            margin-right: 15px;
        }
        .checkbox-wrap .c-check span{
            font-family: kodchasan, serif;
            font-size: 16px;
            color: #7f7c7c;
        }
        .checkbox-wrap .c-check input{
            margin-right: 10px;
        }

        /*Loader*/
        #loader {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 7px solid #f3f3f3;
            border-top: 7px solid #FFD022;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
            z-index: 99;
        }
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
            z-index: 3;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /*body .select2-container--default #select2-c-price-results .select2-results__option:hover{*/
        /*    color: #9d9a9a;*/
        /*}*/
        body .select2-container--default .select2-results__option[aria-selected="true"]{
            color: #000;
        }

        body .select2-container--default .select2-results__option:hover{
            color: #282D31;
        }
        .select2-container--default .select2-results__option--highlighted[aria-selected="false"]{
            color: #9d9a9a;
        }
        footer{
            box-shadow: 0.00px 0.00px 15px 10px rgba(8,8,8,0.3)
        }
        footer p{
            color: #fff;
            text-align: center;
            margin: 0;
            padding: 15px;
        }
        .navigation-wrap span{
            color: #fff;
            font-size: 35px;
            padding: 0px 13px;
            transition: all 0.2s ease, visibility 0s;
            border-radius: 7px;
            border: 0px solid rgb(150, 15, 112);
            background: rgb(200, 227, 246);
            box-shadow: 2.12px 2.12px 2px black;
        }
        .navigation-wrap{
            display: flex;
            justify-content: space-between;
            padding-bottom: 25px;
        }
        .navigation-wrap span.ion-chatbubble-working{
            margin-right: 50px;
        }
        .navigation-wrap span.ion-ios-home{
            margin-left: 50px;
        }
        .error-msg{
                min-height: 400px;
        }
        .error-msg h2{
            text-align: center;
            margin-top: 150px;
        }

        .c-row-wrap-append .owl-next{
            max-width: 240px;
            width: 100%;
        }

        .c-row-wrap-append .owl-prev{
            display: none;
        }
        .main-wrapper .modal-body{
            top: 25%;
        }
        @media (min-width: 768px) {
            .main-wrapper .modal-dialog{
                width: 720px;
            }
            .checkbox-wrap .c-check{
                width: 31%;
            }
        }
        .credit-wrap{
            text-align: center;
            font-size: 10px;
            color: #fff;
            margin-top: 30px;
        }
        .credit-wrap span{
            margin: 0 15px;
        }
        .ion-chatbubble-working{
            display: none;
        }

    </style>
    <div class="site-loader hide">
        <div id="overlay"></div>
        <div id="loader"></div>
    </div>
    <div class="main-wrapper">
        <header class="header">
            <div class="logo-wrapper">
                <a href="<?php echo site_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/WTE%20logo_LOGO_edited.webp" ?>" alt="what to Eat"></a>
            </div>
        </header>
        <section class="main-content">
            <form method="post" action="#">
                <div class="c-dropdown-wrap">
                    <div class="c-dropdown c-dropdown_left">
                        <select id="c-location" class="c-location">
                            <option value="all">Anywhere</option>
                            <option value="current">Current Location</option>
                            <option value="area">Choose Area</option>
                        </select>
                    </div>
                    <div class="c-dropdown c-dropdown_right">
                        <select id="c-price" class="c-price" multiple="multiple">
                            <option value="all" id="anyprice">Any price</option>
                            <option value="1" class="price">$</option>
                            <option value="2" class="price">$$</option>
                            <option value="3" class="price">$$$</option>
                        </select>
                    </div>
                        <input type="hidden"  id="areaCode" value="" name="area_code">
                    <button type="button" name="submit" id ="submit"><span class="ion-thumbsup"></span></button>
                 </div>
            </form>
            <div class="c-row-wrap owl-carousel">
                <div class="c-row" >
                    <div class="c-column c-left">
                        <div class="img-wrapper">
                            <img src="<?php echo get_template_directory_uri()."/assets/images/thuscoffee.png" ?>" alt="resturant-image"  title="Thus Coffee">
                        </div>
                        <div class="credit-wrap">
                            <span>Image Credit:</span>
                            <span>PS Cafe</span>
                        </div>
                    </div>
                    <div class="c-column c-right">
                        <div class="c-right-inner">
                            <h1>Thus Coffee</h1>
                            <div class="zipcode"></div>
                            <div class="body-wrap">
                                <span>Tags</span>
                                <p>Cafe</p>
                            </div>
                            <div class="body-wrap">
                                <span>Address</span>
                                <p>4 Jalan Kuras Singapore 577723</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-row-wrap-append"></div>
            <div class="navigation-wrap">
               <a href="<?php echo site_url();?>"><span class="ion-ios-home"></span></a>
                <span class="ion-chatbubble-working"></span>
            </div>
        </section>
        <!-- Modal -->
        <div class="modal fade" id="areaModal" tabindex="-1" role="dialog" aria-labelledby="areaModalLabel" aria-hidden="true">
            <div class="modal-body modal-dialog">
                <div class="checkbox-wrap">
                    <form method="post" action="">
                        <fieldset>
                            <div class="c-check"><input id="ad_Checkbox1" type="checkbox" name="selector[]" class="ads_Checkbox" value="573908"><span>AMK/Bishan</span></div>
                            <div class="c-check"><input id="ad_Checkbox2" type="checkbox" name="selector[]" class="ads_Checkbox" value="330053"><span>Geylang</span></div>
                            <div class="c-check"><input id="ad_Checkbox3" type="checkbox" name="selector[]" class="ads_Checkbox" value="545166"><span>Seng Kang</span></div>
                            <div class="c-check"><input id="ad_Checkbox4" type="checkbox" name="selector[]" class="ads_Checkbox" value="589667"><span>Bukit Timah</span></div>
                            <div class="c-check"><input id="ad_Checkbox5" type="checkbox" name="selector[]" class="ads_Checkbox" value="219923"><span>Little India</span></div>
                            <div class="c-check"><input id="ad_Checkbox6" type="checkbox" name="selector[]" class="ads_Checkbox" value="529783"><span>Tampines</span></div>
                            <div class="c-check"><input id="ad_Checkbox7" type="checkbox" name="selector[]" class="ads_Checkbox" value="699010"><span>CBD</span></div>
                            <div class="c-check"><input id="ad_Checkbox8" type="checkbox" name="selector[]" class="ads_Checkbox" value="248656"><span>Orchard</span></div>
                            <div class="c-check"><input id="ad_Checkbox9" type="checkbox" name="selector[]" class="ads_Checkbox" value="730309"><span>Woodlands</span></div>
                            <div class="c-check"><input id="ad_Checkbox10" type="checkbox" name="selector[]" class="ads_Checkbox" value="120420"><span>Clementi</span></div>
                            <div class="c-check"><input id="ad_Checkbox11" type="checkbox" name="selector[]" class="ads_Checkbox" value="150016"><span>Redhill</span></div>
                            <div class="c-check"><input id="ad_Checkbox12" type="checkbox" name="selector[]" class="ads_Checkbox" value="762431"><span>Yishun</span></div>
                            <p>Search within 5km of selected areas</p>
                        </fieldset>
                        <button type="button" data-dismiss="modal" id="save_value" name="save_value">done</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

