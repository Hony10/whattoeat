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

    .grey{
        background-color: #C8E3F6;
        padding: 30px 30px 70px;
    }
    @media (max-width: 768px){
        .grey{
            height: 100vh;
        }
        .logo-wrapper img{
            margin-top: 30px;
        }
    }
    .logo-wrapper{
        text-align: center;
    }
 .logo-wrapper img{
     width: 100%;
     max-width: 980px;
     /*margin-top: 30px;*/
 }
    #comp-lca9wmri {
        width: 226px;
        height: 52px;
        position: relative;
        margin: 0 auto;
        /*left: 377px;*/
        /*grid-area: 2 / 1 / 3 / 2;*/
        /*justify-self: start;*/
        /*align-self: start;*/
        /*pointer-events: auto;*/
    }
    #comp-lca9wmri .style-lcutkd1x__root:hover{
        text-decoration: none;
        background-color: #fff;
        transition: all 0.2s ease, visibility 0s;
    }

    #comp-lca9wmri .style-lcutkd1x__root {
        transition: all 0.2s ease, visibility 0s;
        border-radius: 50px;
        border: 2px solid #55450B;
        box-shadow: 5.66px 5.66px #55450B;
        background: #FFD022;
    }
    .StylableButton2545352419__root {
        border: none;
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: 100%;
        min-height: 10px;
        min-width: 10px;
        padding: 0;
        touch-action: manipulation;
        width: 100%;
        color: #000;
        text-decoration: none;
    }
    .StylableButton2545352419__container {
        align-items: center;
        display: flex;
        flex-basis: auto;
        flex-direction: row;
        flex-grow: 1;
        height: 100%;
        justify-content: center;
        overflow: hidden;
        transition: all .2s ease,visibility 0s;
        width: 100%;
    }

    #comp-lca9wmri .style-lcutkd1x__root .StylableButton2545352419__label {
        transition: inherit;
        display: initial;
        margin: 0px 5.5px 0px 0px;
        font-family: 'Kodchasan', sans-serif;
        /*font-family: 'Open Sans', sans-serif;*/
        /*font-family: 'Oswald', sans-serif;*/
        color: #55450B;
        font-size: 20px;
    }
    #comp-lca9wmri .style-lcutkd1x__root .StylableButton2545352419__icon {
        transition: inherit;
        display: initial;
        margin: 0px 0px 0px 5.5px;
        fill: #55450B;
        width: 18px;
        height: 18px;
    }
    .yellow{
        background: #FFD022;
        height: 1000px;
    }

    #comp-lca47ym5 { --contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;--height:573px;--width:980px }#comp-ld190l2a { height:auto }#c1dmp { width:auto;min-height:40px }#comp-lca420n4 { --bg-overlay-color:rgb(var(--color_15));--bg-gradient:none;min-width:980px }#pageBackground_c1dmp { --bg-position:absolute;--bg-overlay-color:rgb(var(--color_28));--bg-gradient:none }/* END STYLABLE DIRECTIVE RULES */

    #comp-lca9wmri .style-lcutkd1x__root{-st-extends: StylableButton;transition: all 0.2s ease, visibility 0s;border-radius: 50px;border: 2px solid #55450B;box-shadow: 5.66px 5.66px #55450B;background: #FFD022}

    /* START STYLABLE DIRECTIVE RULES */

    #comp-lca9wmri .style-lcutkd1x__root:hover {
        box-shadow: 5.66px 5.66px #55450B;
        background: #FFFFFF;
    }

    #comp-lca9wmri .style-lcutkd1x__root:disabled{background: #E2E2E2}

    #comp-lca9wmri .style-lcutkd1x__root:disabled .StylableButton2545352419__label{color: #8F8F8F}

    #comp-lca9wmri .style-lcutkd1x__root:disabled .StylableButton2545352419__icon{fill: #8F8F8F}

    #comp-lca9wmri .style-lcutkd1x__root .StylableButton2545352419__container{transition: inherit}

    #comp-lca9wmri .style-lcutkd1x__root .StylableButton2545352419__label{transition: inherit;display: initial;margin: 0px 5.5px 0px 0px;font-family: kodchasan,serif;color: #55450B;font-size: 20px}

    #comp-lca9wmri .style-lcutkd1x__root .StylableButton2545352419__icon{transition: inherit;display: initial;margin: 0px 0px 0px 5.5px;fill: #55450B;width: 18px;height: 18px}

    #comp-lca9wmri .style-lcutkd1x__root:hover .StylableButton2545352419__icon {
        width: 28px;
        height: 28px;
        fill: #55450B;
    }

    #comp-lca9wmri .style-lcutkd1x__root:hover .StylableButton2545352419__label {
        font-size: 19px;
    }

    @media screen and (min-width: 1px) and (max-width: 0px) {
        #comp-lca9wmri .style-lcutkd1x__root .StylableButton2545352419__label {
            font-size: 18px;
        }
        #comp-lca9wmri .style-lcutkd1x__root:hover .StylableButton2545352419__label {
            font-size: 16px;
        }
    }

    body{
        overflow: hidden;
    }

</style>
<div class="wrapper">
    <section class="grey">
        <div class="logo-wrapper">
            <img src="<?php echo get_template_directory_uri()."/assets/images/WTE logo_LOGO.webp" ?>" alt="logo">
        </div>
        <div id="comp-lca9wmri" class="comp-lca9wmri">
            <a data-testid="linkElement" href="<?php echo site_url()?>/help-me-decide" target="_self" class="StylableButton2545352419__root style-lcutkd1x__root wixui-button StylableButton2545352419__link" aria-label="help me decide">
                <div class="StylableButton2545352419__container">
                    <span class="StylableButton2545352419__label wixui-button__label" data-testid="stylablebutton-label">help me decide</span>
                    <span class="StylableButton2545352419__icon wixui-button__icon" aria-hidden="true" data-testid="stylablebutton-icon">
                        <div>
                            <svg data-bbox="13.05 2.55 33.878 54.8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                            <g>
                                <path d="M46.5 28.9L20.6 3c-.6-.6-1.6-.6-2.2 0l-4.8 4.8c-.6.6-.6 1.6 0 2.2l19.8 20-19.9 19.9c-.6.6-.6 1.6 0 2.2l4.8 4.8c.6.6 1.6.6 2.2 0l21-21 4.8-4.8c.8-.6.8-1.6.2-2.2z"></path>
                            </g>
                            </svg>
                        </div>
                    </span>
                </div>
            </a>
        </div>
    </section>
    <section class="yellow">
        <div id="map"></div>
    </section>
</div>