<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Dancing+Script:wght@400..700&family=Roboto+Slab:wght@100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Dancing+Script:wght@400..700&family=Roboto+Slab:wght@100..900&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Dancing+Script:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto+Slab:wght@100..900&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<style>
 body {
    margin: 0;
    padding: 0;
    font-family: 'Ubuntu', sans-serif;
    background: url('https://zorronightclub.com/assets/images/bg/pattern_bg.jpg') no-repeat;
    background-size: cover;
    font-size: 15px;
    line-height: 1.42857143;
}


* {
    padding: 0;
    margin: 0;
}

/* Navbar Styles */
nav {
    /* background-color: hsl(202, 75%, 47%); */
    background-color: black;
    padding: 10px;
    text-align: center;
    height: 75px;
    display: flex;
    align-items: center;
    justify-content: center;

}

nav img {
    margin-top: -15px;
    margin-left: -21px;
}

nav a {
    color: white;
    padding: 14px 20px;
    text-decoration: none;
    text-transform: uppercase;
}

nav a:hover {
    color: orange;
}

nav h4 {
    font-size: 28px;
    color: white;
    position: absolute;
    left: 10px;
    font-family: "Dancing Script", cursive;
    font-optical-sizing: auto;
    font-style: normal;
}

nav h3 {
    font-size: 22px;
    color: white;
    position: absolute;
    right: 15px;
    font-family: "Dancing Script", cursive;
    font-optical-sizing: auto;
    font-style: normal;
}


/* ..............footer..................... */

.footer {
            background-color: black;
            color: white;
            display: flex;
            box-shadow: 0 0 6px 5px rgba(58, 138, 208, 0.57);
        }

        .fleft {
            /* background-color: green; */
            width: 30%;
            margin-left: 5%;
            padding: 20px;
        }

        .fleft p {
            padding: 5px;
            text-align: justify;
        }

        .fleft h4 {
            font-size: 22px;
            margin-bottom: 8px;
            font-style: italic;
        }

        .fright {
            display: flex;
            justify-content: space-between;
            text-align: center;
            margin-right: 5%;
            /* background-color: red; */
            width: 60%;
            padding: 20px;
        }

        .fright ul {
            list-style-type: none;
            line-height: 30px;
            text-align: left;
            width: 30%;
        }

        .fright span {
            font-weight: bold;
            font-size: 18px;
        }

        .fa-brands {
            font-size: 22px;
            color: white;
            padding: 10px;
            border: .2px solid white;
            border-radius: 8px;
            /* background-color: black; */
        }

        .fa-brands:hover {
            background-color: #4CAF50;
        }

        .ftext {
            text-align: center;
            background-color: black;
            color: white;
            padding: 10px;
        }

        .hr {
            background-color: white;
            width: 100%;
            height: 1px;
        }



a:hover,
a:focus {}

a:focus {
    outline: none;
}

button:focus {
    outline: none;
}

input:focus {
    outline: none;
}

.main_wrapper p {
    font-family: 'Ubuntu', sans-serif;
    line-height: 25px;
}

.pad_0 {
    padding: 0px !important;
}

.pad_b_0 {
    padding-bottom: 0px !important;
}

.pad_l_0 {
    padding-left: 0px !important
}

.pad_r_0 {
    padding-right: 0px !important
}

.pad_b_50 {
    padding-bottom: 50px;
}

.pad_t_55 {
    padding-top: 55px;
}

.pad_t_60 {
    padding-top: 60px;
}

.pad_t_b_80 {
    padding-top: 80px;
    padding-bottom: 80px;
}

.pad_t_80 {
    padding-top: 80px;
}

.pad_b_80 {
    padding-bottom: 80px;
}

.center_align {
    text-align: center;
}

.full-width {
    float: left;
    width: 100%;
}

.subscribe_input input::-webkit-input-placeholder {
    color: #ffffff;
}

.subscribe_input input :-moz-placeholder {
    /* Firefox 18- */
    color: #ffffff;
}

.subscribe_input input ::-moz-placeholder {
    color: #ffffff;
}

.subscribe_input input :-ms-input-placeholder {
    color: #ffffff;
}

.nc_form input::-webkit-input-placeholder {
    color: #b0b0b0;
}

.nc_form input:-moz-placeholder {
    color: #b0b0b0;
}

.nc_form input::-moz-placeholder {
    color: #b0b0b0;
}

.nc_form input:-ms-input-placeholder {
    color: #b0b0b0;
}

.nc_form textarea::-webkit-input-placeholder {
    color: #b0b0b0;
}

.nc_form textarea:-moz-placeholder {
    color: #b0b0b0;
}

.nc_comment_form textarea::-moz-placeholder {
    color: #b0b0b0;
}

.nc_form textarea:-ms-input-placeholder {
    color: #b0b0b0;
}


.nc_navigations ul li a,
.blog_desc a,
.nc_navigations ul li a:after {
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -ms-transition: all 0.2s;
    -o-transition: all 0.2s;
}

.right_details a {
    -webkit-transition: all 500ms cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -moz-transition: all 500ms cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -o-transition: all 500ms cubic-bezier(0.455, 0.030, 0.515, 0.955);
    transition: all 500ms cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -webkit-transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -moz-transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -o-transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
    transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
}

.triangle_shape,
.triangle_btn:before,
.triangle_btn:after,
.triangle_shape:before,
.triangle_shape:after,
.triangle_box:before,
.triangle_box:after,
.tagcloud a:after,
.tagcloud a:before {
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -ms-transition: all 0.2s;
    -o-transition: all 0.2s;
}

.nc_sevice_overlay,
.border,
.nc_form input,
.photo_gallery_popup img {
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -ms-transition: all 0.2s;
    -o-transition: all 0.2s;
}

.gallery_overlay,
.item img,
.blog_thumb img,
.tparrows,
.tparrows:before,
.book_thumb .table_overlay {
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -ms-transition: all 0.2s;
    -o-transition: all 0.2s;
}

.mfp-container button,
.mfp-container button:after,
.mfp-container button:before,
.triangle_btn:after,
.triangle_btn:before .table_overlay {
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -ms-transition: all 0.2s;
    -o-transition: all 0.2s;
}

.overlay_inner h4,
.overlay_inner p {
    -webkit-transition: all 1000ms cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -moz-transition: all 1000ms cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -o-transition: all 1000ms cubic-bezier(0.455, 0.030, 0.515, 0.955);
    transition: all 1000ms cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -webkit-transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -moz-transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -o-transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
    transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
}

.align_center {
    text-align: center;
}

.color_overlay {
    background-color: rgba(0, 0, 0, 0.88);
}

a{
    text-decoration: none;
}
.main_wrapper {
    float: left;
    width: 100%;
    backface-visibility: hidden;
    z-index: 999;
}

.nc_header_main_home1 {
    position: relative;
}

.nc_header_main {
    background: url('../images/bg/header_bg.jpg') no-repeat;
    background-size: cover;
    position: relative;
    margin-top: 99px;
}

.nc_header_main:after {
    background-color: rgba(4, 4, 4, 0.85);
    content: "";
    position: absolute !important;
    width: 100%;
    height: 100%;
    display: block;
}

.nc_header_main .overlay_color {
    position: relative;
    z-index: 99;
}

.wrapper_navigation.nc_home_1 {
    background-color: rgba(0, 0, 0, 0.9) !important;
    position: absolute !important;
    bottom: 0;
    left: 0;
    width: 100%;
}

.nc_logo_center {
    float: left;
    width: 100%;
    text-align: center;
    position: relative;
    display: inline-block;
}

.nc_logo_center>p.logo_bottom_text {
    color: #fff;
    font-size: 24px;
    text-transform: uppercase;
    letter-spacing: 1.1em;
    font-weight: 100;
    position: relative;
    font-family: 'Ubuntu', sans-serif;
}

p.logo_bottom_text:after {
    width: 100%;
    height: 108px;
    content: "";
    position: absolute !important;
    bottom: -92px;
    left: 0;
    background-image: url('../images/bottom_line.png');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-position: center bottom;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -moz-transition: all 0.5s;
}

p.logo_bottom_text:hover:after {
    -webkit-filter: brightness(.5);
    filter: brightness(.5);
}

.nc_slider_home .tparrows {
    display: none !important;
}


.wrapper_navigation {
    background-color: #030203;
    border-top: 1px solid #ff2a70;
    border-bottom: 1px solid #ff2a70;
    position: relative;
    padding: 27px 0;
}

.wrapper_navigation:before {
    content: "";
    position: absolute !important;
    width: 0;
    height: 0;
    left: 0;
    top: 0;
    border-top: 40px solid #ff2a70;
    border-right: 40px solid transparent;
}

.wrapper_navigation:after {
    content: "";
    position: absolute !important;
    width: 0;
    height: 0;
    right: 0;
    bottom: 0;
    border-bottom: 40px solid #ff2a70;
    border-left: 40px solid transparent;
}

.nc_header_main .wrapper_navigation {
    position: fixed;
    top: 0;
}

.nc_logo {
    float: left;
}

.navigation_main {
    float: left;
    width: 100%;
}

.nc_navigations {
    float: left;
    width: 100%;
    margin-top: 10px;
    -webkit-transition: all 500ms cubic-bezier(0.840, 0.045, 0.310, 1);
    -webkit-transition: all 500ms cubic-bezier(0.840, 0.045, 0.310, 1.295);
    -moz-transition: all 500ms cubic-bezier(0.840, 0.045, 0.310, 1.295);
    -o-transition: all 500ms cubic-bezier(0.840, 0.045, 0.310, 1.295);
    transition: all 500ms cubic-bezier(0.840, 0.045, 0.310, 1.295);
    -webkit-transition-timing-function: cubic-bezier(0.840, 0.045, 0.310, 1);
    -webkit-transition-timing-function: cubic-bezier(0.840, 0.045, 0.310, 1.295);
    -moz-transition-timing-function: cubic-bezier(0.840, 0.045, 0.310, 1.295);
    -o-transition-timing-function: cubic-bezier(0.840, 0.045, 0.310, 1.295);
    transition-timing-function: cubic-bezier(0.840, 0.045, 0.310, 1.295);
 
}

.nc_navigations ul {
    margin: 0;
    padding: 0;
    float: right;
}

.nc_navigations ul>li {
    list-style: none;
    float: left;
    margin-left: 40px;
    position: relative;
}

.nc_navigations ul>li:first-child {
    margin-left: 0px;
}

.nc_navigations ul>li>a {
    position: relative;
    text-transform: uppercase;
    font-size: 18px;
    color: #fff;
    text-decoration: none;
    padding: 39px 0px;
}

.nc_navigations ul li a:after {
    width: 100%;
    height: 5px;
    content: "";
    position: absolute !important;
    bottom: 20px;
    left: 0;
    z-index: 1;
    background: -webkit-radial-gradient(50% 50%, ellipse closest-side, #ff2a70, rgba(255, 255, 255, 0) 75%);
    background: -moz-radial-gradient(50% 50%, ellipse closest-side, #ff2a70, rgba(255, 255, 255, 0) 75%);
    background: -ms-radial-gradient(50% 50%, ellipse closest-side, #ff2a70, rgba(255, 255, 255, 0) 75%);
    background: -o-radial-gradient(50% 50%, ellipse closest-side, #ff2a70, rgba(255, 255, 255, 0) 75%);
    transform: scale(0);
    -webkit-transform: scale(0);
    -ms-transform: scale(0);
    -moz-transform: scale(0);
    -o-transform: scale(0);
}

.nc_navigations ul>li>ul>li a:after {
    display: none;
}

.nc_navigations ul li a:hover {
    color: #dd2361;
}



.navbar_header {
    position: relative;
    z-index: 99;
    float: right;
}

.navbar_toggle {
    float: left;
    width: 40px;
    cursor: pointer;
}

.navbar_close {
    display: none;
}

.navbar_toggle i {
    float: left;
    width: 22px;
    height: 2px;
    background-color: #fff;
    margin-bottom: 4px;
    transition: all ease-in-out 0.3s;
    -webkit-transition: all ease-in-out 0.3s;
    -moz-transition: all ease-in-out 0.3s;
    -ms-transition: all ease-in-out 0.3s;
    -o-transition: all ease-in-out 0.3s;
}

.toggle_open i {
    top: 27px;
    position: absolute;
    left: 0;
}

.toggle_open i:nth-child(1) {
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
}

.toggle_open i:nth-child(2) {
    opacity: 0;
}

.toggle_open i:nth-child(3) {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
}


.nc_navigations ul li.dropdown_menu i.caret_down {
    position: absolute;
    content: "";
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-top: 5px solid #fff;
    top: 50%;
    right: -15px;
    cursor: pointer;
    margin-top: -2px;
}

.nc_navigations ul>li>ul {
    min-width: 250px;
    z-index: 99;
    position: absolute;
    text-align: left;
    background-color: #1C1C1C;
    z-index: 99;
    top: 90%;
    border: 1px solid #313131;
    visibility: hidden;
    opacity: 0;
    left: 0;
}

.nc_navigations ul>li:hover>ul,
.nc_navigations ul>li:focus>ul {
    visibility: visible;
    opacity: 1;
    top: 61px;
}

.nc_navigations ul li ul.sub-menu:after {
    content: '';
    position: absolute;
    bottom: 100%;
    left: 20px;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 10px solid #1C1C1C;
    z-index: 1;
}

.nc_navigations>ul>li>ul>li>a:hover {
    background-color: #ff2a70;
    color: #fff;
}

.nc_navigations ul>li>ul>li {
    display: block;
    float: none;
    margin: 0px;
}

.nc_navigations ul>li>ul>li>a {
    white-space: nowrap;
    display: block;
    padding: 0px;
    backface-visibility: hidden;
    color: #BFBFBF;
    padding: 10px;
    font-size: 14px;
}

.nc_navigations ul>li>ul>li:last-child {
    border-bottom: 0px;
}


.nc_navigations ul.sub-menu li i.caret_down {
    top: 40%;
    right: 4px;
}

.nc_navigations ul>li>ul>li {
    position: relative;
}

.nc_navigations ul>li>ul>li>ul {
    left: 134%;
    top: 0;
}


.wrapper_navigation.fixed_top_menu {
    position: fixed !important;
    top: 0;
    left: 0;
    height: 99px;
    z-index: 999;
    background-color: #030203 !important;
}


.nc_welcome_wrapper {
    padding-bottom: 50px;
    padding-top: 55px;
}

.nc_heading_middle {
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
    color: #fff;
    letter-spacing: 0.075em;
    float: left;
    width: 100%;
}

.nc_heading_middle h2 {
    display: inline-block;
    position: relative;
    font-family: 'Ubuntu', sans-serif;
    letter-spacing: 0.075em;
    font-weight: bold;
}

.nc_heading_middle h2>span {
    color: #ff2a70;
}

.nc_heading_middle h2:after {
    width: 350px;
    height: 5px;
    content: "";
    position: absolute !important;
    bottom: -22px;
    margin-left: -175px;
    left: 50%;
    z-index: 0;
    background: -webkit-radial-gradient(50% 50%, ellipse closest-side, #ff2a70, rgba(255, 42, 112, 0) 60%);
    background: -moz-radial-gradient(50% 50%, ellipse closest-side, #ff2a70, rgba(255, 42, 112, 0) 60%);
    background: -ms-radial-gradient(50% 50%, ellipse closest-side, #ff2a70, rgba(255, 42, 112, 0) 60%);
    background: -o-radial-gradient(50% 50%, ellipse closest-side, #ff2a70, rgba(255, 42, 112, 0) 60%);
}

.nc_club_services {
    float: left;
    width: 100%;
    margin-top: 65px;
}

.nc_thumb_wrapper {
    position: relative;
    float: left;
    width: 100%;
    perspective: 400px;
    overflow: hidden;
}

.nc_club_services .nc_thumb_wrapper {
    margin-bottom: 30px;
}

.nc_sevice_overlay {
    background-color: #080808;
    display: block;
    position: absolute !important;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9;
    opacity: 0;
}

.nc_sevice_overlay .overlay_inner {
    text-align: center;
    padding: 100px 35px 0px;
    float: left;
    width: 100%;
}

.overlay_inner .border {
    display: inline-block;
    border: 2px solid #ff2a70;
    width: 83px;
    height: 83px;
    line-height: 108px;
    text-align: center;
    border-radius: 5px;
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    opacity: 0;
}

.overlay_inner svg {
    fill: #ff2a70;
    width: 36px;
    height: 36px;
}

.overlay_inner h4 {
    font-size: 20px;
    text-transform: uppercase;
    font-weight: 500;
    padding-top: 20px;
    padding-bottom: 10px;
    color: #fff;
    opacity: 0;
    transform: scale(.8);
    -webkit-transform: scale(.8);
    -ms-transform: scale(.8);
    -moz-transform: scale(.8);
    -o-transform: scale(.8);
}

.overlay_inner p {
    color: #e0e0e0;
    line-height: 25px;
    font-size: 15px;
    -webkit-transform: translateX(50px);
    -moz-transform: translateX(50px);
    -ms-transform: translateX(50px);
    -o-transform: translateX(50px);
    opacity: 0;
}

.nc_thumb_wrapper:hover .triangle_shape:after {
    border-bottom: 78px solid #ff2a70;
    border-left: 78px solid transparent;
}

.nc_thumb_wrapper .triangle_shape:after {
    border-bottom: 0px solid #ff2a70;
    border-left: 0px solid transparent;
}

.nc_thumb_wrapper .triangle_shape:before {
    border-top: 0px solid #ff2a70;
    border-right: 0px solid transparent;
}

.nc_thumb_wrapper:hover .triangle_shape:before {
    border-top: 78px solid #ff2a70;
    border-right: 78px solid transparent;
}



.nc_thumb_wrapper:hover>.nc_sevice_overlay {
    opacity: 1;
}

.nc_thumb_wrapper:hover .overlay_inner p {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    opacity: 1;
}

.nc_thumb_wrapper:hover .overlay_inner h4,
.nc_thumb_wrapper:hover .border {
    opacity: 1;
    transform: scale(1);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    -moz-transform: scale(1);
    -o-transform: scale(1);
}

.nc_event_wrapper {
    background: url("../images/bg/event_bg.jpg") no-repeat;
    background-size: cover;
    background-position: 100% 100%;
    background-attachment: fixed;
}

.nc_event_wrapper .color_overlay {
    padding-top: 55px;
    padding-bottom: 75px;
}

.nc_event_main {
    margin-top: 61px;
}

.nc_event_main,
.nc_event_cover {
    float: left;
    width: 100%;
}

.nc_thumb_wrapper img {
    width: 100%;
}

.nc_event_cover .nc_thumb_wrapper {
    margin-bottom: 1px;
}

.nc_event_cover .nc_thumb_wrapper:after {
    background-color: transparent;
}

.nc_event_cover .bottom_tab {
    display: inline-block;
    width: 100%;
    padding: 12px 20px;
    background-color: #ff2a70;
}

.bottom_tab span {
    color: #ffffff;
    font-size: 15px;
    font-weight: 500;
    margin-right: 20px;
    float: left;
}

.nc_event_cover .thumb_overlay {
    background-color: rgba(0, 0, 0, 0.65);
    display: block;
    position: absolute !important;
    z-index: 9;
    opacity: 0;
}

.book_now_button {
    display: inline-block;
    text-align: center;
    width: 100%;
    position: absolute;
    top: 25%;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}

.nc_event_cover .book_now_button {
    transform: translateY(-150%);
    -webkit-transform: translateY(-150%);
    -o-transform: translateY(-150%);
    -moz-transform: translateY(-150%);
    -ms-transform: translateY(-150%);
}

.book_now_button .read_m_btn {
    font-size: 15px;
    text-transform: capitalize;
    background-color: #ff2a70;
    color: #ffffff;
    border-left: none;
    border-right: none;
    font-weight: 500;
    line-height: 42px;
    height: 45px;
    backface-visibility: hidden;
}

.book_now_button .read_m_btn:hover {
    background-color: transparent;
}

.nc_event_cover .overlay_inner_bottom {
    bottom: 0;
    position: absolute !important;
    width: 100%;
    padding: 10px 22px;
    background-color: rgba(0, 0, 0, 0.75);
    transform: translateY(100%);
    -webkit-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transition: all 0.2s;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -ms-transition: all 0.3s;
    -o-transition: all 0.3s;
}

.nc_event_cover:hover .thumb_overlay {
    opacity: 1;
}

.overlay_inner_bottom h4 {
    font-size: 20px;
    text-transform: uppercase;
    font-weight: 500;
    padding-bottom: 0px;
    color: #ffffff;
    font-family: 'Ubuntu', sans-serif;
}

.overlay_inner_bottom p {
    color: #e0e0e0;
    line-height: 25px;
    font-size: 15px;
}

.nc_event_cover:hover .book_now_button,
.nc_event_cover:hover .overlay_inner_bottom {
    transform: translateY(0);
    -webkit-transform: translateY(0);
    -o-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
}



.owl-dot.active span {
    background-color: #ff2a70;
}

.owl-dots .owl-dot:last-child span {
    margin-right: 0;
}


.nc_gallery_wrapper {
    padding-bottom: 80px;
    padding-top: 55px;
    background: url('../images/bg/pattern_bg.jpg') no-repeat;
    background-size: cover;
}

.home_gallery {
    margin-top: 61px;
}

.middle_inner {
    float: left;
    width: 100%;
    margin-top: 60px;
}

.gallery_main .gallery_item {
    float: left;
    position: relative;
}

.gallery_item .overlay {
    position: absolute !important;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.75);
    top: 0;
    left: 0;
    display: block;
    opacity: 0;
}


.nc_track_wrapper {
    background: url("../images/bg/track_bg.jpg") no-repeat;
    background-size: cover;
    background-position: 100% 100%;
}


.nc_media_player {
    float: left;
    width: 100%;
    margin-bottom: 5px;
}

.nc_media_player .track_thumb {
    float: left;
    padding-right: 0;
}

.nc_media_player .track_thumb img {
    width: 100%;
}

.media_player .mejs-playlist li {
    font-family: 'Ubuntu', sans-serif;
    color: #fff;
    font-weight: 100;
    font-weight: 500;
    text-transform: uppercase;
    font-size: 20px;
}

.media_player {
    float: left;
    width: 100%;
    background-color: #080808;
    padding: 45px 30px 0px !important;
    height: 246px;
}

.media_player * {
    outline: none;
}

.media_player .mejs-playlist {
    position: relative;
    top: 0 !important;
    width: 100% !important;
    background-color: transparent;
}

.media_player .mejs-controls .mejs-time-rail .mejs-time-current:before {
    content: "";
    width: 11px;
    height: 11px;
    border-radius: 11px;
    background-color: #ffffff;
    display: block;
    position: absolute;
    top: -4px;
    right: -4px;
}

.media_player .mejs-controls .mejs-time-rail .mejs-time-current:after {
    content: "";
    width: 19px;
    height: 19px;
    border-radius: 15px;
    border: 2px solid #ffffff;
    display: block;
    position: absolute;
    top: -8px;
    right: -8px;
}

.media_player {
    padding-left: 0;
}

.media_player .mejs-container {
    background-color: transparent !important;
}

.media_player .mejs-container .mejs-controls {
    background: none;
    position: relative !important;
    height: auto !important;
    float: left;
    margin-top: 32px;
}

.media_player .mejs-time {
    top: 47px;
    position: absolute !important;
    left: 0;
}

.mejs-time span.mejs-currenttime+span {
    transform: rotate(23deg);
    -webkit-transform: rotate(23deg);
    -moz-transform: rotate(23deg);
    -ms-transform: rotate(23deg);
    -o-transform: rotate(23deg);
    position: absolute !important;
    margin-left: 7px;
    margin-top: -2px;
}

.mejs-time .mejs-duration {
    margin-left: 16px;
}

.media_player .mejs-button {
    position: absolute !important;
    top: 45px;
}

.media_player .mejs-time-rail,
.media_player .mejs-time-rail .mejs-time-total,
.media_player .mejs-time-rail .mejs-time-loaded {
    width: 100% !important;
}

.media_player .mejs-button.mejs-prevtrack-button {
    left: 33%;
}

.media_player .mejs-button.mejs-playpause-button {
    left: 40%;
}

.media_player .mejs-button.mejs-playpause-button button {
    margin: 0 !important;
}

.media_player .mejs-button.mejs-nexttrack-button {
    left: 47%;
}

.media_player .mejs-button.mejs-shuffle-button {
    left: 53%;
}

.media_player .mejs-button.mejs-volume-button {
    position: absolute !important;
    right: 129px;
}

.media_player .mejs-controls a.mejs-horizontal-volume-slider {
    right: 0;
    position: absolute !important;
    top: 49px;
    width: 123px;
}

.media_player .mejs-controls a.mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
    background-color: transparent !important;
}



.track_crousel .owl-controls {
    margin-top: 0px;
}

.nc_track_wrapper .color_overlay {
    padding-top: 55px;
    padding-bottom: 80px;
}

.owl-nav div {
    border: 2px solid #fff;
    width: 37px;
    height: 37px;
    line-height: 37px;
    text-align: center;
}

.owl-nav div i {
    font-size: 19px;
    color: #fff;
}

.track_crousel {
    float: left;
    width: 100%;
}

.track_crousel .item img {
    width: 100%;
}

.track_crousel .owl-nav div {
    position: absolute !important;
    top: 50%;
    margin-top: -18.5px;
    -webkit-transition: all ease-in-out 0.25s;
}

.owl-carousel .owl-nav div {
    position: relative;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.25s;
    transition: all 0.2s;
}

.owl-carousel .owl-nav div:hover {
    border-left-color: transparent;
    border-right-color: transparent;
    border-top-color: #ff2a70;
    border-bottom-color: #ff2a70;
}

.owl-carousel .owl-nav div:hover i {
    color: #ff2a70;
}

.owl-nav div,
.owl-nav div i {
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.25s;
    transition: all 0.2s;
}

.owl-carousel .owl-nav div:before {
    content: "";
    position: absolute;
    width: 0;
    height: 0;
    left: -2px;
    top: -2px;
    border-top: 0px solid transparent;
    border-right: 0px solid transparent;
    opacity: 0;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.25s;
    transition: all 0.2s;
}

.owl-carousel .owl-nav div:after {
    opacity: 0;
    content: "";
    position: absolute;
    width: 0;
    height: 0;
    right: -2px;
    bottom: -2px;
    border-bottom: 0px solid transparent;
    border-left: 0px solid transparent;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.25s;
    transition: all 0.2s;
}

.owl-carousel .owl-nav div:hover:before {
    opacity: 1;
    border-top: 14px solid #ff2a70;
    border-right: 14px solid transparent;
}

.owl-carousel .owl-nav div:hover:after {
    opacity: 1;
    border-bottom: 14px solid #ff2a70;
    border-left: 14px solid transparent;
}

.track_crousel .owl-nav .owl-prev {
    left: 0;
}

.track_crousel .owl-nav .owl-next {
    right: 0;
}

.track_crousel .item {
    overflow: hidden;
}

.track_crousel .item .track_overlay {
    background-color: rgba(0, 0, 0, 0.5);
    position: absolute !important;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    opacity: 0;
}

.track_crousel .item.active .track_overlay,
.track_crousel .item:hover .track_overlay {
    opacity: 1;
    transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
}

.track_crousel .item .triangle_shape:before {
    border-top: 0px solid #ff2a70;
    border-right: 0px solid transparent;
}

.track_crousel .item .triangle_shape:after {
    border-bottom: 0px solid #ff2a70;
    border-left: 0px solid transparent;
}

.track_crousel .item.active .triangle_shape:before,
.track_crousel .item:hover .triangle_shape:before {
    border-top: 50px solid #ff2a70;
    border-right: 50px solid transparent;
}

.track_crousel .item.active .triangle_shape:after,
.track_crousel .item:hover .triangle_shape:after {
    border-bottom: 50px solid #ff2a70;
    border-left: 50px solid transparent;
}

.play_button {
    position: absolute !important;
    width: 100%;
    top: 29%;
    text-align: center;
    transform: translateY(10px);
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transition: all 0.3s;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -o-transition: all 0.3s;
    -ms-transition: all 0.3s;
    opacity: 0;
}

.play_button i {
    color: #ff2a70;
    font-size: 24px;
    width: 44px;
    height: 44px;
    border-radius: 5em;
    border: 2px solid;
    line-height: 44px;
    text-align: center;
    padding-left: 5px;
    position: absolute;
    left: 50%;
    margin-left: -22px;
    cursor: pointer;
}

.bottom_song_title {
    color: #fff;
    text-transform: uppercase;
    bottom: 0;
    position: absolute;
    left: 0;
    width: 100%;
    height: 44px;
    line-height: 45px;
    text-align: center;
    background-color: rgba(0, 0, 0, 0.75);
    transform: translateY(-100px);
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transition: all 0.3s;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -o-transition: all 0.3s;
    -ms-transition: all 0.3s;
    opacity: 0;
}

.track_crousel .item.active .bottom_song_title,
.track_crousel .item.active .play_button,
.track_crousel .item:hover .bottom_song_title,
.track_crousel .item:hover .play_button {
    opacity: 1;
    transform: translateY(0px);
    -webkit-transform: translateY(0px);
    -moz-transform: translateY(0px);
    -ms-transform: translateY(0px);
    -o-transform: translateY(0px);
}


.video_section {
    padding-top: 55px;
    padding-bottom: 80px;
}

.video_crousel {}

.video_overlay a {
    display: block;
    position: relative;
}

.overlay_button {
    position: absolute !important;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.video_overlay a .overlay_button {
    background-color: rgba(0, 0, 0, 0.2);
}

.overlay_button i {
    content: "\f144";
    font: normal normal normal 78px/1 FontAwesome;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    color: #ff2a70;
    background-color: rgba(209, 200, 211, 0.52);
    border-radius: 5em;
    padding: 2px 6px 0;
    top: 50%;
    left: 50%;
    position: absolute !important;
    margin-top: -40px;
    margin-left: -38px;
}

.video_crousel .mejs-overlay-button {
    background: none;
}

.video_crousel .owl-nav {
    display: inline-block;
    width: 100%;
}

.video_crousel .owl-nav div {
    display: inline-block;
    margin-right: 20px;
    position: relative;
}

.video_crousel .owl-nav div:last-child {
    margin-right: 0;
}

.owl-controls {
    margin-top: 50px;
}


.nc_testimonial_wrapper {
    background: url("../images/bg/event_bg.jpg") no-repeat;
    background-size: cover;
    background-position: 100% 100%;
    background-attachment: fixed;
}

.nc_testimonial_wrapper .color_overlay {
    padding-top: 80px;
    padding-bottom: 75px;
}

.nc_testimonial_inner {
    text-align: center;
    float: left;
    width: 100%;
    padding: 0 12%;
}

.nc_testimonial_inner .thumbnail {
    margin-bottom: 0;
}

.nc_testimonial_inner .thumbnail img {
    width: 170px;
    height: 170px;
    margin: auto;
}

.nc_testimonial_inner .test_title {
    color: #fff;
    font-weight: 500;
    text-transform: uppercase;
    line-height: 34px;
    margin: 21px 0 14px;
}

.nc_testimonial_inner p {
    font-size: 15px;
    line-height: 25px;
    color: #e0e0e0;
}

.nc_testimonial_inner .social_icons {
    margin-top: 15px;
    display: inline-block;
    width: 100%;
}

.social_icons a {
    border: 2px solid #fff;
    width: 37px;
    height: 37px;
    line-height: 37px;
    text-align: center;
    color: #ffffff;
    display: inline-block;
    margin-right: 18px;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -ms-transition: all 0.2s;
    -o-transition: all 0.2s;
    backface-visibility: hidden;
}

.social_icons a:last-child {
    margin-right: 0;
}

.social_icons .triangle_box:before {
    left: -2px;
    top: -2px;
    border-top: 0px solid transparent;
    border-right: 0px solid transparent;
}

.social_icons .triangle_box:after {
    right: -2px;
    bottom: -2px;
    border-bottom: 0px solid transparent;
    border-left: 0px solid transparent;
}

.social_icons a:hover {
    border-left-color: transparent;
    border-right-color: transparent;
    border-top: 2px solid #ff2a70;
    border-bottom: 2px solid #ff2a70;
}

.social_icons a:hover i {
    color: #ff2a70;
}

.social_icons .triangle_box:after,
.social_icons .triangle_box:before {
    opacity: 0;
}

.social_icons a:hover:before {
    opacity: 1;
    border-top: 14px solid #ff2a70;
    border-right: 14px solid transparent;
}

.social_icons a:hover:after {
    opacity: 1;
    border-bottom: 14px solid #ff2a70;
    border-left: 14px solid transparent;
}



 /*----------------------- 10. testimonial css end

  --------------------------------Home Blog css start----------------*/


.nc_blog_section {
    padding-top: 80px;
    background: url('../images/bg/pattern_bg.jpg') no-repeat;
    background-size: cover;
}

.nc_blog_section .nc_heading_middle h2 {
    margin-top: -4px;
}

.blog_post_home {}

.blog_cover {
    float: left;
    width: 100%;
    margin-bottom: 70px;
}

.blog_thumb {
    float: left;
    width: 100%;
    position: relative;
    overflow: hidden;
}

.blog_thumb img {
    height: auto;
    width: 100%;
}

.blog_desc {
    float: left;
    width: 100%;
}

.blog_desc h3 {
    font-size: 20px;
    color: #fff;
    margin-top: 30px;
    margin-bottom: 12px;
    font-weight: 500;
}

.blog_desc.home_desc h3 {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 19ch;
}

.blog_desc h3 a {
    color: #ffffff;
}

.blog_desc h3 a:hover {
    color: #ff2a70;
}

.blog_desc .nc_comments {
    font-size: 15px;
    font-weight: 500;
    color: #ff2a70;
    line-height: 23px;
    opacity: .7;
    backface-visibility: hidden;
}

.blog_desc .nc_comments span {
    position: relative;
    display: inline-block;
    margin-right: 10px;
    font-weight: 600;
}

.blog_desc .nc_comments span:after {
    content: "";
    position: absolute !important;
    width: 2px;
    height: 17px;
    background-color: #ff2a70;
    transform: rotate(18deg);
    -webkit-transform: rotate(18deg);
    -ms-transform: rotate(18deg);
    -o-transform: rotate(18deg);
    -moz-transform: rotate(18deg);
    top: 4px;
    right: -8px;
}

.blog_desc .nc_comments span:last-child:after {
    display: none;
}

.blog_desc p {
    color: #e0e0e0;
    font-size: 15px;
    line-height: 25px;
    padding-top: 20px;
}

.thumb_overlay {
    position: absolute !important;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
}

.blog_thumb .thumb_overlay {
    background-color: rgba(0, 0, 0, 0.5);
    transform: scale(1.3);
    -webkit-transform: scale(1.3);
    -moz-transform: scale(1.3);
    -ms-transform: scale(1.3);
    -o-transform: scale(1.3);
    opacity: 0;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -ms-transition: all 0.2s;
    -o-transition: all 0.2s;
}

.blog_cover .blog_thumb:hover .thumb_overlay {
    transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    opacity: 1;
}


/*------   Home Blog css end----------- subscribe css start --------------------*/

.nc_subscribe_section {
    background-color: #000000;
    padding: 57px 0 80px;
}

.nc_subscribe_cover h3 {
    color: #ffffff;
    font-size: 20px;
    font-weight: 500;
}

.nc_subscribe_cover h4 {
    color: #e0e0e0;
    font-size: 15px;
    line-height: 23px;
    font-family: 'Ubuntu', sans-serif;
    text-transform: inherit;
    font-weight: 100;
}

.nc_subscribe_cover h4 span {
    color: #ff2a70;
}

.subscribe_input {
    display: inline-block;
    width: 100%;
    margin-top: 35px;
}

.subscribe_input input {
    background-color: transparent;
    border-bottom: 2px solid #ffffff !important;
    border: none;
    padding: 0px 20px;
    font-size: 15px;
    line-height: 23px;
    color: #e0e0e0;
    height: 50px;
    margin-right: 26px;
    width: 35%;
}

.subscribe_input button {
    background: transparent;
    border-left: transparent;
    border-right: transparent;
    border-color: #ffffff;
    height: 50px;
    line-height: 48px;
    font-size: 15px;
    font-weight: 500;
    text-transform: uppercase;
    padding: 0 30px;
    color: #fefefe;
    letter-spacing: 0.025em;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -ms-transition: all 0.2s;
    -o-transition: all 0.2s;
}

.subscribe_input button:hover {
    color: #ff2a70;
    border-color: #ff2a70;
}

.subscribe_input button:hover:after,
.subscribe_input button:hover:before {
    opacity: 1;
}

.subscribe_input .triangle_btn:after,
.subscribe_input .triangle_btn:before {
    opacity: 0;
}


/*--------subscribe css end------------------footer css start-------------------------------------*/



/*recent tweets start*/

.widget.nc_recent_twitt ul li {
    width: 100%;
    float: left;
    padding-bottom: 30px;
    border-bottom: 1px solid #232323;
    margin-bottom: 30px;
}

.widget.nc_recent_twitt ul li i {
    float: left;
    color: #ff2a70;
    margin-right: 20px;
    line-height: 30px;
    font-size: 18px;
    -webkit-transition: all 500ms cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -moz-transition: all 500ms cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -o-transition: all 500ms cubic-bezier(0.455, 0.030, 0.515, 0.955);
    transition: all 500ms cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -webkit-transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -moz-transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -o-transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
    transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
}

.nc_recent_twitt ul li:hover i {
    transform: translateY(50%);
    -webkit-transform: translateY(50%);
    -moz-transform: translateY(50%);
    -ms-transform: translateY(50%);
    -o-transform: translateY(50%);
}

.widget.nc_recent_twitt ul li div {
    float: left;
    width: 80%;
}

.widget.nc_recent_twitt ul li div p {
    color: #e0e0e0;
    line-height: 25px;
    font-size: 15px;
}

.widget.nc_recent_twitt ul li div span {
    color: #ff2a70;
    font-size: 15px;
    font-weight: 500;
}





/*----------footer css end---------footer bottom start-----------------------*/



/*------footer bottom end------about us page css start------------------------*/

.nc_breadcum {
    float: left;
    width: 100%;
    padding: 63px 0 90px;
    background: url("https://zorronightclub.com/assets/images/bg/header_bg.jpg");
}



.nc_club_slider_wrap {
    padding-top: 55px;
}

.nc_club_slider {
    position: relative;
    float: left;
    width: 100%;
    margin-top: 60px;
}

.wrapper_caption {
    position: absolute;
    top: 0;
    right: 7.8%
}

.nc_club_slider .slider_caption {
    padding: 20px 50px 0px;
    background-color: rgba(0, 0, 0, 0.85);
    width: 58%;
    height: 100%;
    float: right;
    margin-right: 15px;
}

.nc_club_slider .item img {
    width: 100%;
}

.nc_club_slider .item .container {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    height: 100%;
}

.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
  width: 100%;
  padding-right: var(--bs-gutter-x,.75rem);
  padding-left: var(--bs-gutter-x,.75rem);
  margin-right: auto;
  margin-left: auto;
}

.nc_club_slider .item .container .row {
    height: 100%;
}

.m_right {
    float: right;
    margin-right: 15px;
}

.slider_caption .center_align {
    position: relative;
}

.slider_caption h2 {
    font-size: 30px;
    line-height: inherit;
    text-align: center;
    position: relative;
    display: inline-block;
    color: #ffffff;
    font-weight: bold;
    letter-spacing: 0.075em;
}

.slider_caption .center_align:after {
    width: 100%;
    height: 5px;
    content: "";
    position: absolute;
    bottom: -9px;
    left: 0;
    z-index: 1;
    background: -webkit-radial-gradient(50% 50%, ellipse closest-side, #ff2a70, rgba(0, 0, 255, 0) 60%);
    background: -moz-radial-gradient(50% 50%, ellipse closest-side, #ff2a70, rgba(0, 0, 255, 0) 100%);
    background: -ms-radial-gradient(50% 50%, ellipse closest-side, #ff2a70, rgba(0, 0, 255, 0) 100%);
    background: -o-radial-gradient(50% 50%, ellipse closest-side, #ff2a70, rgba(0, 0, 255, 0) 100%);
}

.slider_caption .para_slider {
    float: left;
    width: 100%;
    padding-top: 38px;
}

.slider_caption p {
    color: #e0e0e0;
    font-size: 15px;
    line-height: 25px;
    margin-bottom: 25px;
}

.nc_club_slider .item .color_overlay {
    position: absolute !important;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.2);
}




.nc_club_slider .carousel-control span {
    border: 2px solid #fff;
    width: 37px;
    height: 37px;
    line-height: 34px;
    text-align: center;
    top: 50%;
    position: absolute;
    margin-top: -18px;
    color: #fff;
}

.nc_club_slider .carousel-control.left,
.nc_club_slider .carousel-control.right {
    background-color: transparent;
    background-image: none;
}

.nc_club_slider .left.carousel-control span {
    left: 52px;
}

.nc_club_slider .right.carousel-control span {
    right: 52px;
}

.nc_club_slider .carousel-control span i {
    font-size: 19px;
    color: #fff;
}

.carousel-control span,
.carousel-control span:after,
.carousel-control span:before,
.carousel-control span i {
    transition: all ease-in-out 0.2s;
    -webkit-transition: all ease-in-out 0.2s;
    -moz-transition: all ease-in-out 0.2s;
}

.nc_club_slider .carousel-control span:hover {
    border-color: #ff2a70;
    border-left-color: transparent;
    border-right-color: transparent;
}

.nc_club_slider .carousel-control span:hover i {
    color: #ff2a70;
}

.nc_club_slider .carousel-control span:before {
    position: absolute;
    content: "";
    top: -2px;
    left: -2px;
}

.nc_club_slider .carousel-control span:after {
    position: absolute;
    content: "";
    bottom: -2px;
    right: -2px;
}
.nc_club_slider .slider_caption {
  padding: 20px 50px 0px;
  background-color: rgba(0, 0, 0, 0.85);
  width: 58%;
  height: 100%;
  float: right;
  margin-right: 15px;
}

.nc_club_slider .carousel-control span:hover:after {
    border-bottom: 14px solid #ff2a70;
    border-left: 12px solid transparent;
}

.nc_club_slider .carousel-control span:hover:before {
    border-top: 14px solid #ff2a70;
    border-right: 12px solid transparent;
}


/*----------about us page css end--------------offer section css start----------------------*/

.nc_offers_section {
    background-color: #000000;
    padding-top: 55px;
    padding-bottom: 50px;
}

.nc_offers_main {}

.offers_box_wrapper {
    float: left;
    width: 100%;
    background-color: #080808;
    margin-bottom: 30px;
}

.offers_box_wrapper .box_thumb {
    float: left;
    margin-right: 30px;
    overflow: hidden;
}

.offers_box_wrapper img {
    float: left;
    width: 170px;
    height: 207px;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -moz-transition: all 0.5s;
}

.offers_box_wrapper .right_details {
    padding: 30px 30px 0px;
}

.right_details h4 {
    color: #fff;
    font-size: 20px;
    text-transform: uppercase;
    margin-top: -1px;
    margin-bottom: 20px;
    font-weight: 500;
    backface-visibility: hidden;
}

.right_details h4 a {
    color: #fff;
    text-decoration: none;
}

.right_details p {
    color: #e0e0e0;
}

.offers_box_wrapper .right_details h4 a:hover {
    color: #ff2a70;
}

.offers_box_wrapper:hover img {
    transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
}


/*-----------offer section css end--------club crousel css start----------------*/

.club_disc_section {
    padding-bottom: 80px;
}

.nc_club_cover {
    float: left;
    width: 100%;
}

.overlay_bottom {
    position: absolute !important;
    bottom: 0;
    left: 0;
    width: 100%;
    z-index: 1;
}

.nc_club_cover .overlay_bottom h3 {
    color: #ffffff;
    font-size: 20px;
    text-align: center;
    margin: 0;
    padding: 28.5px 0px;
    font-weight: 500;
}

.nc_club_cover .overlay_bottom {
    background-color: rgba(0, 0, 0, 0.85);
    bottom: -50%;
    transition: all 0.3s;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -ms-transition: all 0.3s;
}

.nc_club_cover:hover .nc_thumb_wrapper img {
    transform: scale(1.2);
    -webkit-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -ms-transform: scale(1.2);
    -o-transform: scale(1.2);
}

.nc_thumb_wrapper img {
    transition: all 0.4s;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -ms-transition: all 0.4s;
}

.nc_club_cover:hover .overlay_bottom {
    bottom: 0;
    opacity: 1;
}

.nc_club_cover .thumb_overlay {
    transform: scale(1.3);
    -webkit-transform: scale(1.3);
    -moz-transform: scale(1.3);
    -ms-transform: scale(1.3);
    -o-transform: scale(1.3);
}

.nc_club_cover:hover .thumb_overlay {
    transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
}

.nc_thumb_wrapper .triangle_btn:hover:after {
    border-bottom: 23px solid #ff2a70;
    border-left: 23px solid transparent;
    opacity: 1;
}

.nc_thumb_wrapper .triangle_btn:hover:before {
    border-top: 23px solid #ff2a70;
    border-right: 23px solid transparent;
    opacity: 1;
}


/*--------club crousel css end----------blog page css start-------------*/

.nc_blog_cover {
    float: left;
    width: 100%;
    margin-bottom: 80px;
}

.nc_blog_cover .thumb_overlay {
    background-color: rgba(0, 0, 0, 0.75);
}

.blog_thumb:hover .thumb_overlay {
    transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    opacity: 1;
}

.blog_readmore {
    float: left;
    width: 100%;
    text-align: right;
}

.blog_desc .blog_readmore {
    margin-top: 17px;
}

.blog_readmore .read_m_btn {
    border-top-color: #fff;
    border-bottom-color: #fff;
    padding: 0 25px;
}

.read_m_btn {
    display: inline-block;
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    font-size: 15px;
    height: 50px;
    line-height: 48px;
    border-top: 2px solid #fff;
    border-bottom: 2px solid #fff;
    padding: 0 27px;
    letter-spacing: 0.025em;
    font-weight: 500;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    transition: all 0.2s;
}

.read_m_btn:hover {
    color: #ff2a70;
    border-color: #ff2a70 !important;
}

.read_m_btn.triangle_btn:after,
.read_m_btn.triangle_btn:before {
    opacity: 0;
}

.read_m_btn:hover:after,
.read_m_btn:hover:before {
    opacity: 1;
}



.blog_pagination {
    float: left;
    width: 100%;
    text-align: center;
    padding-bottom: 80px;
}

.blog_pagination .pagination {
    margin: 0px;
    display: inline-block;
    padding-left: 0;
}

.blog_pagination .pagination i {
    color: #fff;
    font-size: 27px;
    top: 3px;
    position: relative;
}

.blog_pagination ul .nav-previous a,
.blog_pagination ul .nav-next a {
    border-color: transparent !important;
}

.blog_pagination ul .nav-previous a:hover:before,
.blog_pagination ul .nav-next a:hover:before,
.blog_pagination ul .nav-previous a:hover:after,
.blog_pagination ul .nav-next a:hover:after {
    display: none;
}

.blog_pagination ul .nav-previous a {
    margin-right: 15px;
}

.blog_pagination ul .nav-next a {
    margin-right: 0px;
    margin-left: -5px;
}

.blog_pagination ul li {
    display: inline-block;
}

.blog_pagination ul li a {
    position: relative;
    margin-right: 17px;
    float: left;
    width: 37px;
    height: 37px;
    line-height: 35px;
    border: 2px solid #fff;
    color: #ffffff;
    font-size: 15px;
    font-weight: 500;
    backface-visibility: hidden;
}

ul.pagination li a:hover {
    color: #ff2a70;
}

ul.pagination>li>a:focus,
ul.pagination>li>a:hover,
ul.pagination i:hover {
    z-index: 2;
    color: #ff2a70;
}

.pagination li a,
.pagination li i {
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -ms-transition: all 0.2s;
    -o-transition: all 0.2s;
}

.blog_pagination ul li a:after,
.blog_pagination ul li a:before {
    content: "";
    position: absolute !important;
    width: 0;
    height: 0;
    opacity: 0;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -ms-transition: all 0.2s;
    -o-transition: all 0.2s;
}

.blog_pagination ul li a:before {
    left: -2px;
    top: -2px;
    border-top: 0px solid transparent;
    border-right: 0px solid transparent;
}

.blog_pagination ul li a:after {
    right: -2px;
    bottom: -2px;
    border-bottom: 0px solid transparent;
    border-left: 0px solid transparent;
}

.pagination li a:hover,
.pagination li.active a {
    border-color: #ff2a70;
    border-left-color: transparent;
    border-right-color: transparent;
}

.pagination li.active a:after {
    border-bottom: 14px solid #ff2a70;
    border-left: 14px solid transparent;
}

.pagination li.active a:before {
    border-top: 14px solid #ff2a70;
    border-right: 14px solid transparent;
}

.pagination li a:hover:after {
    opacity: 1;
    border-bottom: 14px solid #ff2a70;
    border-left: 14px solid transparent;
}

.pagination li a:hover:before {
    opacity: 1;
    border-top: 14px solid #ff2a70;
    border-right: 14px solid transparent;
}

.pagination li.active a {
    color: #ff2a70;
}

.pagination li.active a:after,
.pagination li.active a:before {
    opacity: 1;
}


/*--------------blog page css end----------------blog sidebar css start-----------*/

.widget ul li span,
.widget a {
    transition: all ease-in-out 0.25s;
    -webkit-transition: all ease-in-out 0.25s;
    -moz-transition: all ease-in-out 0.25s;
    -ms-transition: all ease-in-out 0.25s;
    -o-transition: all ease-in-out 0.25s;
}

.nc_blog_sidebar {
    float: left;
    width: 100%;
}

.nc_blog_sidebar .widget {
    margin-bottom: 80px;
}

.nc_search_form {
    position: relative;
}

.nc_search_form input {
    background: transparent;
    border: none;
    border-bottom: 1px solid #ff2a70;
    width: 100%;
    color: #e0e0e0;
    padding: 0px 50px 20px 28px;
    font-size: 15px;
}

.nc_search_form button {
    background: transparent;
    border: none;
    position: absolute !important;
    color: #e0e0e0;
    top: 0;
    right: 27px;
}

.nc_blog_sidebar .widget .widget_title {
    color: #fff;
    margin-top: 0;
    margin-bottom: 30px;
    font-size: 20px;
    font-weight: 500;
    letter-spacing: 0.01em;
}

.textwidget {
    width: 100%;
    float: left;
}



.nc_categories_list ul li {
    float: left;
    width: 100%;
    margin-bottom: 10px;
}

.nc_categories_list ul li a,
.nc_categories_list ul li span {
    color: #e0e0e0;
    text-transform: capitalize;
    font-weight: 500;
}

.nc_categories_list ul li span {
    float: right;
}

.nc_categories_list ul li:hover span,
.nc_categories_list ul li:hover a {
    color: #ff2a70;
}




.nc_blog_sidebar .nc_recent_posts ul li {
    float: left;
    width: 100%;
    margin-bottom: 30px;
    background-color: #000000;
    padding-right: 13px;
}

.nc_blog_sidebar .nc_recent_posts ul li:last-child {
    margin-bottom: 0px;
}

.nc_blog_sidebar .nc_recent_posts ul li img {
    float: left;
    width: 120px;
    height: 114px;
    margin-right: 13px;
}

.nc_blog_sidebar .nc_recent_posts ul li div a {
    color: #ffffff;
    font-size: 20px;
    text-transform: uppercase;
    display: block;
    margin-top: 15px;
    margin-bottom: 10px;
    font-weight: 500;
}

.nc_recent_posts ul li div a:hover {
    color: #ff2a70;
}

.nc_blog_sidebar .nc_recent_posts ul li div p {
    color: #e0e0e0;
}

.tagcloud a {
    position: relative;
    float: left;
    margin-right: 20px;
    margin-bottom: 20px;
    color: #ffffff;
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    height: 40px;
    line-height: 38px;
    border-top: 2px solid #ffffff;
    border-bottom: 2px solid #ffffff;
    padding: 0 16px;
}

.tagcloud a:after,
.tagcloud a:before {
    position: absolute !important;
    content: "";
    width: 0;
    height: 0;
}

.tagcloud a:before {
    top: 0;
    left: 0;
    border-top: 0px solid #ff2a70;
    border-right: 0px solid transparent;
}

.tagcloud a:after {
    bottom: 0;
    right: 0;
    border-bottom: 0px solid #ff2a70;
    border-left: 0px solid transparent;
}

.tagcloud a:hover {
    color: #ff2a70;
    border-color: #ff2a70;
}

.tagcloud a:hover:before {
    top: 0;
    left: 0;
    border-top: 15px solid #ff2a70;
    border-right: 15px solid transparent;
}

.tagcloud a:hover:after {
    bottom: 0;
    right: 0;
    border-bottom: 15px solid #ff2a70;
    border-left: 15px solid transparent;
}


/*---------------------------------------recent posts css end----------------*/


/*---------------------------- sidebar gallery css start -------------------------*/

.sidebar_gallery {
    float: left;
    width: 100%;
}

.sidebar_gallery a {
    float: left;
    width: 90px;
    height: 90px;
}

.sidebar_gallery a img {
    width: 100%;
    height: 100%;
    transition: all ease-in-out 0.25s;
    -webkit-transition: all ease-in-out 0.25s;
    -moz-transition: all ease-in-out 0.25s;
}

.sidebar_gallery img:hover {
    -webkit-filter: sepia(100%);
    filter: sepia(100%);
}



a.fancybox-nav.fancybox-prev span,
a.fancybox-nav.fancybox-next span {
    background-image: none;
}

a.fancybox-nav.fancybox-prev span:after,
a.fancybox-nav.fancybox-next span:after {
    display: inline-block;
    font: normal normal normal 19px/1 FontAwesome;
    text-rendering: auto;
    color: #ffffff;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    position: absolute !important;
    top: 50%;
    border: 2px solid;
    width: 37px;
    position: absolute !important;
    height: 37px;
    line-height: 37px;
    text-align: center;
}

a.fancybox-nav.fancybox-prev span:after {
    content: "\f0d9";
    left: 0;
    padding-right: 4px;
}

a.fancybox-nav.fancybox-next span:after {
    content: "\f0da";
    right: 0;
    padding-left: 4px;
}





/*-------......................................-- track css start ----....................-------*/

.nc_sidebar_track {
    float: left;
    width: 100%;
    background-color: #000000;
    padding: 30px;
}

.nc_sidebar_track .mejs-playlist li {
    font-family: 'Ubuntu', sans-serif;
    color: #fff;
    font-weight: 500;
    letter-spacing: 0.05em;
    text-transform: uppercase;
}

.nc_sidebar_track img {
    width: 32.4%;
}

.nc_sidebar_track .mejs-container {
    width: 100% !important;
}

.nc_sidebar_track .mejs-container,
.nc_sidebar_track .mejs-playlist {
    background: none;
}

.nc_sidebar_track .mejs-container .mejs-controls {
    background: none;
    position: relative !important;
    height: auto !important;
    float: left;
    margin-top: 5px;
}

.nc_sidebar_track .mejs-playlist {
    width: 100% !important;
    top: 15px !important;
}

.nc_sidebar_track .mejs-button {
    position: relative;
    top: 66px;
}

.nc_sidebar_track .mejs-button.mejs-prevtrack-button,
.nc_sidebar_track .mejs-button.mejs-nexttrack-button,
.nc_sidebar_track .mejs-shuffle-button {
    top: 71px;
}

.nc_sidebar_track .mejs-playpause-button,
.media_player .mejs-playpause-button {
    border: 2px solid #fff !important;
    border-radius: 5em;
    left: -5px;
    padding: 10px 0 0 12px !important;
}

.media_player .mejs-playpause-button {
    top: 40px;
}

.nc_sidebar_track .mejs-shuffle-button {
    margin-left: 7px !important
}

.nc_sidebar_track .mejs-playpause-button button {
    margin: 0 !important;
}

.nc_sidebar_track .mejs-button button {
    margin-left: 0 !important;
    margin-right: 0 !important;
}

.nc_sidebar_track .mejs-button.mejs-volume-button {
    top: -12px;
    left: 62%;
}

.nc_sidebar_track a.mejs-horizontal-volume-slider {
    left: 62%;
    top: -8px;
    width: 22% !important;
}

.nc_sidebar_track .mejs-horizontal-volume-current {
    background: transparent !important;
}

.nc_sidebar_track .mejs-time,
.nc_sidebar_track .mejs-time {
    display: none !important;
}

.nc_sidebar_track div.mejs-time-rail,
.nc_sidebar_track .mejs-time-rail .mejs-time-total {
    width: 100% !important;
}





/*...........blog sidebar css end....................blog center css start...................*/

.blog_center .blog_thumb img {
    width: 100%;
}

.blog_center .blog_desc {
    text-align: center;
    padding-left: 85px;
    padding-right: 85px;
}

.blog_center .blog_readmore {
    text-align: center;
}


/*......blog center css end................blog full width css start...................*/

.blog_full_main_cover .blog_pagination {
    padding-top: 80px;
}

.nc_blog_cover.nc_blog_full {
    background-color: #000000;
}

.nc_blog_full .blog_desc {
    padding-top: 50px;
    padding-bottom: 50px;
}

.nc_blog_full:nth-child(odd) .blog_desc {
    padding-right: 14%;
    padding-left: 30px;
}

.nc_blog_full:nth-child(even) .blog_desc {
    padding-left: 14%;
    padding-right: 30px;
}

.nc_blog_full .blog_desc h3 {
    margin-top: -3px;
}


/*.............blog full width css end............blog single css start.........................*/

.nc_blog_comments_section {
    float: left;
    width: 100%;
    padding-top: 70px;
}

h2.comment_title {
    color: #ffffff;
    margin: 0px;
    font-weight: bold;
    font-size: 30px;
}

.comment_list {
    float: left;
    width: 100%;
}

.comment_list ul {
    float: left;
    width: 100%;
}

.comment_list ul:first-child {
    padding-left: 0;
}

.comment_list ul li {
    float: left;
    width: 100%;
    list-style: none;
}

.nc_specific_comment {
    float: left;
    width: 100%;
    margin-top: 50px;
}

.nc_specific_comment .blog_avtar {
    float: left;
    margin-right: 30px;
}

.blog_avtar a {
    display: block;
}

.blog_avtar img {
    width: 110px;
    height: 110px;
}

.right_avtar_details h3 {
    display: inline-block;
    margin-top: -2px;
    margin-bottom: 20px;
    text-transform: capitalize;
    color: #fff;
    font-size: 20px;
    font-weight: 500;
}

.right_avtar_details span {
    color: #ff2a70;
    font-weight: 500;
    margin-left: 5px;
    line-height: 23px;
    font-size: 15px;
    font-weight: 500;
}

.right_avtar_details p {
    color: #b0b0b0;
    margin-bottom: 0px;
    font-size: 15px;
    line-height: 25px;
}

.right_avtar_details .read_m_btn {
    float: right;
    margin-top: 25px;
    cursor: pointer;
    width: 140px;
    padding: 0;
    border-top: 2px solid #fff;
    border-bottom: 2px solid #fff;
}

.comment_list ul li ul.children {
    padding-left: 14.6%;
}

.nc_comment_form {
    float: left;
    width: 100%;
    padding-top: 70px;
}

.nc_comment_form .comment_title {
    margin-bottom: 50px;
}

.nc_form {
    float: left;
    width: 100%;
}

.nc_form input {
    width: 100%;
    background-color: #040404;
    border: 1px solid #646464;
    padding-left: 20px;
    height: 65px;
    color: #ffffff;
    margin-bottom: 20px;
}

.nc_form textarea {
    width: 100%;
    background-color: #040404;
    border: 1px solid #646464;
    padding-left: 20px;
    height: 290px;
    color: #ffffff;
    padding-top: 20px;
    margin-bottom: 20px;
}

.nc_form input:focus,
.nc_form input:hover {
    border-color: #ff2a70;
    background-color: transparent;
}

.nc_form textarea:focus,
.nc_form textarea:hover {
    border-color: #ff2a70;
    background-color: transparent;
    outline: none;
}

.nc_form .read_m_btn {
    background-color: transparent;
    border-left: transparent;
    border-right: transparent;
    float: right;
    width: 140px;
    padding: 0px;
    border-top: 2px solid #fff;
    border-bottom: 2px solid #fff;
    cursor: pointer;
    backface-visibility: hidden;
}

.nc_form .read_m_btn:hover {
    border-top: 2px solid #ff2a70;
    border-bottom: 2px solid #ff2a70;
}


/*.........blog single css end............event page css start .................*/

.nc_event_section {
    background: url('../images/bg/pattern_bg.jpg') no-repeat;
    background-size: cover;
}

.event_page_main {
    float: left;
    width: 100%;
    padding-top: 80px;
}

.event_page_main .nc_event_cover {
    float: left;
    width: 100%;
    margin-bottom: 80px;
}

.button_center {
    float: left;
    width: 100%;
    text-align: center;
}

.button_center .read_m_btn {
    border-top: 2px solid #fff;
    border-bottom: 2px solid #fff;
}


/*..............event page css end.....................................*/
.nc_media_player .mejs-container {
    width: 100% !important;
    height: auto !important;
}


/* ........................ music track css end ......................*/




.contact_section_main,
.nc_contanct_form,
.right_map_part {
    float: left;
    width: 100%;
}

.nc_contanct_form .nc_form input {
    margin-bottom: 32px;
}

.nc_contanct_form .nc_form textarea {
    margin-bottom: 30px;
}

.contact_details_ract,
.location_map {
    float: left;
    width: 100%;
}

.contact_details_ract {
    background-color: #ff2a70;
    padding: 30px;
    position: relative;
    border-bottom: 1px solid #ef2869;
}

.contact_details_ract:after {
    content: "";
    position: absolute !important;
    width: 0;
    height: 0;
    display: block;
    border-left: 18px solid transparent;
    border-right: 18px solid transparent;
    border-top: 18px solid #ff2a70;
    bottom: -18px;
    left: 50%;
    margin-left: -18px;
    z-index: 9;
}

.contact_details_ract ul {
    margin: 0;
    list-style: none;
    padding: 0;
    float: left;
    width: 100%;
}

.contact_details_ract ul li {
    float: left;
    width: 50%;
    padding-right: 15px;
}

.contact_details_ract ul li div {
    float: left;
    width: 100%;
    margin-bottom: 30px;
}

.contact_details_ract ul li svg,
.contact_details_ract ul li i {
    float: left;
    font-size: 20px;
    margin-right: 20px;
    fill: #ffffff;
    color: #ffffff;
    margin-top: 4px;
}

.contact_details_ract ul li p {
    float: left;
    width: 80%;
    color: #ffffff;
    line-height: 24px;
    font-size: 15px;
    margin-bottom: 0;
}

.contact_details_ract ul li a {
    color: #fff;
}

#big_googleMap {
    width: 100%;
    height: 421px;
}



/*--........................ booking table css start................................... ----*/

.nc_booking_table_wrapper {
    float: left;
    width: 100%;
}

.nc_book_table {
    float: left;
    width: 20%;
    padding: 0 15px;
    margin-bottom: 63px;
    position: relative;
}

.book_thumb {
    float: left;
    width: 100%;
    position: relative;
    padding: 15px 0px;
    overflow: hidden;
    text-align: center;
    cursor: pointer;
}

.book_thumb img {
    max-width: 100%;
    height: 128px;
}

.table_overlay {
    content: '';
    position: absolute !important;
    width: 100%;
    top: 0;
    left: 0;
    height: 100%;
    cursor: pointer;
}

.book_thumb .triangle_shape {
    position: absolute !important;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9;
    border-top: transparent;
    border-bottom: transparent;
}

.book_thumb .triangle_shape:before {
    border-top: 0px solid #ff2a70;
    border-right: 0px solid transparent;
}

.book_thumb .triangle_shape:after {
    border-bottom: 0px solid #ff2a70;
    border-left: 0px solid transparent;
}

.nc_book_table:hover .table_overlay {
    background-color: rgba(0, 0, 0, 0.7);
}

.book_thumb:hover .triangle_shape:before {
    border-top: 48px solid #ff2a70;
    border-right: 48px solid transparent;
}

.book_thumb:hover .triangle_shape:after {
    border-bottom: 48px solid #ff2a70;
    border-left: 48px solid transparent;
}

.table_overlay p {
    color: #fff;
    font-size: 15px;
    font-weight: 500;
    top: 50%;
    position: absolute !important;
    width: 100%;
    margin-top: -12px;
    margin-bottom: 0;
    text-transform: capitalize;
}

.table_overlay .tbl_n {
    z-index: 1;
}

.table_overlay .reserved_tbl {
    color: #181818;
    z-index: 0;
    display: none;
}

.seat_active .triangle_shape {
    display: none;
}

.seat_active .reserved_tbl {
    display: block;
}

.seat_active .table_overlay {
    background-color: rgba(0, 0, 0, 0.7);
}

.nc_table_close {
    border: 1px solid #ffffff;
    border-radius: 2px;
    width: 15px;
    height: 15px;
    line-height: 10px;
    text-align: center;
    cursor: pointer;
    position: absolute !important;
    z-index: 9;
    right: 0px;
    top: 0px;
    color: #ffffff;
    display: inline-block;
    visibility: hidden;
}

.seat_active .nc_table_close {
    visibility: visible;
}

.book_thumb:hover .triangle_shape {
    border-top: 1px solid #ff2a70;
    border-bottom: 1px solid #ff2a70;
}


/*-- booking table css end----*/

.nc_booking_page {
    background: url("../images/bg/pattern_bg.jpg") no-repeat;
    background-size: cover;
}

.nc_booking_form h1 {
    color: #ffffff;
    font-size: 35px;
    font-weight: bold;
    margin-top: 0;
    margin-bottom: 45px;
}


/* calender css start */

.ui-datepicker {
    z-index: 9;
    position: relative;
    background-color: #fff;
}

.ui-datepicker-header {
    background-color: #ff2a70;
    color: #fff;
    font-weight: bold;
}

.ui-datepicker-calendar tr td a:hover {
    color: #ffffff;
    background-color: #ff2a70;
}

.nc_booking_form .ui-datepicker-trigger {
    position: absolute !important;
    right: 40px;
    top: 24px;
    background-color: transparent;
    border: none;
}

.nc_booking_form .ui-datepicker-trigger:after {
    content: "\f107";
    display: inline-block;
    font: normal normal normal 18px FontAwesome;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    color: #fff;
}

a.ui-datepicker-prev:before,
a.ui-datepicker-next:before {
    display: inline-block;
    font: normal normal normal 18px FontAwesome;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    color: #fff;
    position: absolute !important;
    left: 6px;
    top: 5px;
    z-index: 9;
}

a.ui-datepicker-prev:before {
    content: "\f191";
}

a.ui-datepicker-next:before {
    content: "\f152";
}


/*............................... calender css end ...............................*/



.nc_gallery_section {
    background: url('../images/bg/pattern_bg.jpg') no-repeat;
    background-size: cover;
}

.nc_photo_galley {
    float: left;
    width: 100%;
}

.gallery_cover {
    float: left;
    width: 100%;
}

.photo_grid {
    float: left;
}

.photo_grid.width_1 {
    width: 29.62%;
}

.photo_grid.width_2 {
    width: 21.61%;
}

.photo_grid.width_3 {
    width: 30.56%;
}

.photo_grid.width_4 {
    width: 18.21%;
}

.photo_grid.width_5 {
    width: 35.19%;
}

.margin-top {
    margin-top: -1.34%;
}

.nc_photo_galley .photo_grid a {
    float: left;
    width: 100%;
    position: relative;
    overflow: hidden;
}

.nc_photo_galley .photo_grid a img {
    width: 100%;
}

.gallery_cover .triangle_shape:after {
    border-bottom: 0px solid #ff2a70;
    border-left: 0px solid transparent;
}

.gallery_cover .triangle_shape:before {
    border-top: 0px solid #ff2a70;
    border-right: 0px solid transparent;
}

.gallery_cover:hover .triangle_shape:after {
    border-bottom: 78px solid #ff2a70;
    border-left: 78px solid transparent;
}

.gallery_cover:hover .triangle_shape:before {
    border-top: 78px solid #ff2a70;
    border-right: 78px solid transparent;
}

.gallery_overlay {
    position: absolute !important;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.75);
    opacity: 0;
}

.nc_photo_galley a:hover .gallery_overlay {
    opacity: 1;
}

.zoom_anim {
    text-align: left;
    max-width: 970px;
    margin: 0px auto;
    position: relative;
}

.my_zoom_in .zoom_anim {
    opacity: 0;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
}

.my_zoom_in.mfp-ready .zoom_anim {
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.gallery_thumb {
    position: relative;
    float: left;
    width: 100%;
}

.gallery_thumb .overlay {
    position: absolute !important;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.zoom_anim img {
    width: 100%;
}

.gallery_desc {
    background-color: #000000;
    padding: 30px;
    float: left;
    width: 100%;
}

.gallery_desc h3 {
    margin-top: 0;
    color: #ffffff;
    font-size: 20px;
    margin-bottom: 20px;
}

.gallery_desc p {
    color: #e0e0e0;
    font-size: 15px;
    line-height: 25.6px;
    margin-bottom: 30px;
}

.gallery_desc .read_m_btn {
    float: right;
    border-top: 2px solid #fff;
    border-bottom: 2px solid #fff;
}


/* ........................gallery arrow button css start....................... */

.my_zoom_in .mfp-arrow.active {
    margin-top: 0px;
}

.mfp-arrow-left {
    left: 10% !important;
}

.mfp-arrow-right {
    right: 10% !important;
}

.mfp-arrow:before {
    content: "";
    position: absolute !important;
    left: -2px;
    top: -2px;
    border-top: 0px solid #ff2a70;
    border-right: 0px solid transparent;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -ms-transition: all 0.2s;
    -o-transition: all 0.2s;
}

.mfp-arrow:after {
    content: "";
    position: absolute !important;
    right: -2px;
    bottom: -2px;
    border-bottom: 0px solid #ff2a70;
    border-left: 0px solid transparent;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -ms-transition: all 0.2s;
    -o-transition: all 0.2s;
}

.mfp-arrow i {
    color: #fff;
    font-size: 19px;
    z-index: 9999;
    position: relative;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -ms-transition: all 0.2s;
    -o-transition: all 0.2s;
}

.mfp-arrow:hover {
    border-color: #ff2a70 !important;
    border-left-color: transparent !important;
    border-right-color: transparent !important;
}

.mfp-arrow:hover i {
    color: #ff2a70;
}

.mfp-arrow:hover:after {
    border-bottom: 14px solid #ff2a70;
    border-left: 14px solid transparent;
}

.mfp-arrow:hover:before {
    border-top: 14px solid #ff2a70;
    border-right: 14px solid transparent;
}


/* gallery arrow button css end */


.nc_video_thumb .triangle_shape:after {
    border-bottom: 0px solid #ff2a70;
    border-left: 0px solid transparent;
}

.nc_video_thumb .triangle_shape:before {
    border-top: 0px solid #ff2a70;
    border-right: 0px;
}

.nc_video_thumb:hover .triangle_shape:after {
    border-bottom: 78px solid #ff2a70;
    border-left: 78px solid transparent;
}

.nc_video_thumb:hover .triangle_shape:before {
    border-top: 78px solid #ff2a70;
    border-right: 78px solid transparent;
}

.video_gallery_wrapper {
    background: url('../images/bg/pattern_bg.jpg') no-repeat;
    background-size: cover;
}

.video_popup_gallery img.img-responsive {
    width: 100%;
}

.nc_video_gallery {
    float: left;
    width: 100%;
}

.nc_video_thumb img {
    -webkit-transition: all 300ms cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -moz-transition: all 300ms cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -o-transition: all 300ms cubic-bezier(0.455, 0.030, 0.515, 0.955);
    transition: all 300ms cubic-bezier(0.455, 0.030, 0.515, 0.955);
    /* easeInOutQuad */
    -webkit-transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -moz-transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -o-transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
    transition-timing-function: cubic-bezier(0.455, 0.030, 0.515, 0.955);
    /* easeInOutQuad */
}

.nc_video_thumb:hover img {
    transform: scale(1.2);
    -webkit-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -o-transform: scale(1.2);
    -ms-transform: scale(1.2);
}

.nc_video_gallery .nc_video_thumb {
    float: left;
    width: 100%;
    position: relative;
    overflow: hidden;
}

.nc_video_thumb a {
    float: left;
    width: 100%;
    position: relative;
}

.nc_video_thumb .overlay {
    position: absolute !important;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.75);
    visibility: hidden;
    opacity: 0;
    transition: all ease-in-out 0.6s;
    -ms-transition: all ease-in-out 0.6s;
    -o-transition: all ease-in-out 0.6s;
    -moz-transition: all ease-in-out 0.6s;
    -webkit-transition: all ease-in-out 0.6s;
}

.nc_video_thumb .overlay_button img,
.nc_video_thumb .overlay_button i {
    position: absolute !important;
    top: 50%;
    left: 50%;
    margin-top: -44px;
    margin-left: -44px;
    width: 88px;
    height: 88px;
}

.nc_video_thumb:hover .overlay {
    opacity: 1;
    visibility: visible;
}

.video_zoom {
    text-align: left;
    max-width: 405px;
    margin: 0px auto;
    position: relative;
}

.my_zoom_in .video_zoom {
    opacity: 0;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
}

.my_zoom_in.mfp-ready .video_zoom {
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.my-mfp-zoom-in.mfp-removing .video_zoom {
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
    opacity: 0;
}

.video_zoom.triangle_shape:after {
    border-bottom: 98px solid #ff2a70;
    border-left: 98px solid transparent;
}

.video_zoom.triangle_shape:before {
    border-top: 98px solid #ff2a70;
    border-right: 98px solid transparent;
}


/* video controllers css start */

.video_zoom .mejs-container.svg.mejs-video {
    width: 100% !important;
    height: 673px !important;
    overflow: hidden;
}

.video_zoom .mejs-mediaelement {
    overlflow: hidden;
}

.video_zoom .mejs-mediaelement,
.video_zoom .mejs-poster {
    width: 100% !important;
    height: 100% !important;
}

.video_zoom .mejs-poster img {
    display: block !important;
}

.video_zoom .mejs-overlay {
    width: 100% !important;
    height: 100% !important;
}

.video_zoom video {
    width: 100%;
    height: auto;
}

.video_zoom .mejs-container .mejs-controls {
    background: rgba(8, 8, 8, 0.97);
    height: 156px;
    padding: 0 45px;
    visibility: visible;
}
.video_zoom .mejs-time-rail {
    width: 100% !important;
    position: relative;
    padding: 0px !important;
    margin-top: 20px !important;
}

.video_zoom .mejs-time-total,
.video_zoom .mejs-time-rail .mejs-time-loaded {
    width: 100% !important;
    height: 8px;
}

.video_zoom .mejs-time-current {
    height: 8px !important;
}

.video_zoom .mejs-button {
    position: absolute !important;
    bottom: 20px;
}

.video_zoom .mejs-time {
    position: absolute;
    top: 46px;
    left: 26%;
}

.video_zoom .mejs-button.mejs-volume-button {
    right: 20.5%;
}

.video_zoom .mejs-controls a.mejs-horizontal-volume-slider {
    width: 124px;
    position: absolute !important;
    right: 9.1%;
    top: 44px;
    display: block !important;
}

.video_zoom .mejs-horizontal-volume-current {
    background-color: transparent !important;
}

.video_zoom .mejs-playpause-button {
    border: 2px solid #fff !important;
    border-radius: 5em;
    padding: 8px 0 0 10px !important;
    width: 35px !important;
    height: 35px !important
}

.video_zoom .mejs-playpause-button button {
    margin: 0px !important;
}

.video_zoom .mejs-button.mejs-loop-button {
    left: 35%;
}

.video_zoom .mejs-overlay-button {
    background: url('../images/icon/Play_btn.svg') no-repeat;
}

.video_zoom .mejs-overlay:hover .mejs-overlay-button {
    background-position: inherit;
}

.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-handle {
    position: absolute;
    left: 0;
}

/* video controllers css end */


.nc_preloader {
    position: fixed;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    z-index: 1212121;
    width: 100%;
    height: 100%;
    text-align: center;
    background-image: url("../images/bg/slide_2.jpg");
}

.loader_overlay {
    position: relative;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background-color: #080808;
}

.loader_image {
    position: absolute !important;
    left: 50%;
    top: 50%;
    margin: -15px 0 0 -12px;
}

.loader_image img {
    width: 36px;
    height: 36px;
}


/*----------------------------------------------------------------------------------
 28. preloader css end
 ----------------------------------------------------------------------------------*/

.nc_club_slider .tp-caption {
    padding: 0px !important;
}


/*......................triangle and button shape css start.....................*/

.triangle_btn {
    position: relative;
    border-top: 2px solid #ff2a70;
    border-bottom: 2px solid #ff2a70;
}

.triangle_btn:before {
    content: "";
    position: absolute !important;
    width: 0;
    height: 0;
    left: 0;
    top: 0;
    border-top: 0px solid #ff2a70;
    border-right: 0px solid transparent;
}

.triangle_btn:after {
    content: "";
    position: absolute !important;
    width: 0;
    height: 0;
    right: 0;
    bottom: 0;
    border-bottom: 0px solid #ff2a70;
    border-left: 0px solid transparent;
}

.triangle_btn:hover:before {
    border-top: 23px solid #ff2a70;
    border-right: 23px solid transparent;
}

.triangle_btn:hover:after {
    border-bottom: 23px solid #ff2a70;
    border-left: 23px solid transparent;
}

.triangle_shape {
    border-top: 1px solid #ff2a70;
    border-bottom: 1px solid #ff2a70;
    position: relative;
}

.triangle_shape:before {
    content: "";
    position: absolute !important;
    width: 0;
    height: 0;
    left: 0;
    top: 0;
    border-top: 78px solid #ff2a70;
    border-right: 78px solid transparent;
    z-index: 1;
}

.triangle_shape:after {
    content: "";
    position: absolute !important;
    width: 0;
    height: 0;
    right: 0;
    bottom: 0;
    border-bottom: 78px solid #ff2a70;
    border-left: 78px solid transparent;
    z-index: 1;
}

.triangle_box {
    position: relative;
    border-top: 2px solid #ff2a70;
    border-bottom: 2px solid #ff2a70;
    border-left: 2px solid transparent;
    border-right: 2px solid transparent;
}

.triangle_box:before {
    content: "";
    position: absolute !important;
    width: 0;
    height: 0;
    left: 0;
    top: 0;
    border-top: 15px solid #ff2a70;
    border-right: 15px solid transparent;
}

.triangle_box:after {
    content: "";
    position: absolute !important;
    width: 0;
    height: 0;
    right: 0;
    bottom: 0;
    border-bottom: 15px solid #ff2a70;
    border-left: 15px solid transparent;
}


/*.............triangle and button shape css end.........................*/




.nc_event_main .owl-dots {
    text-align: center;
    margin: 40px 0 0;
}

.owl-dot span {
    background-color: #fff;
    width: 16px;
    height: 16px;
    display: inline-block;
    margin-right: 10px;
}

.video_crousel .owl-nav {
    text-align: center;
    margin-top: 40px;
}

.video_crousel .owl-nav>* {
    margin: 0 10px;
}

.testimonial_crousel .owl-dots {
    text-align: center;
    margin: 40px 0 0;
}

.slider_caption {
    height: 100%;
    width: 100%;
    max-width: 658px;
    position: absolute;
    right: 20%;
    padding: 20px 50px 0px;
    background: rgba(0, 0, 0, 0.85);
}
</style>
<body>
    

<!--         <div class="nc_preloader">
        <div class="loader_overlay">
            <div class="loader_image">
                <img src="assets/images/icon/music_loader.gif" alt="loader">
            </div>
        </div>
    </div> -->
  
    <nav>
        <h4>The Noida Clubs</h4>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <!-- <a href="service.php">Services</a> -->
        <!-- <a href="#clubs">Clubs</a>
        <a href="#clubs">Gallery</a> -->
        <a href="contact.php">Contact Us</a>
        <a href="../Html/buyticket.php">Buy Tickets</a><img src="../image/new.gif" alt="">
        <a href="status.php" id="status">Booking Status</a>
        <a href="../Html/admin.php">Admin</a>
    </nav>


        <!-- ..............................content are here................................ -->


    
    <div class="main_wrapper nc_club_slider_wrap">
        <div class="container">
            <div class="row">
                
                <div class="nc_heading_middle">
                    <h2> Welcome To<span> Night Club Noida</span> </h2>
                </div>
                
            </div>
           
        </div>
       

        <div class="nc_club_slider">
            <div class="back">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <img src="https://zorronightclub.com/assets/images/bg/slide_1.jpg" class="d-block w-100" alt="slider">
                                            <div class="slider_caption">
                                                <div class="center_align">
                                                    <h2 class="fromtop_small"> our story </h2>
                                                </div>
                                                <div class="para_slider fromtop_small">
                                                    <p>Welcome to Zorro, the hottest luxury nightclub in Sector 29, Gurugram. As a leading party destination in Delhi NCR, we take pride in providing an unforgettable experience to all party enthusiasts. Our state-of-the-art audiovisual production and vibrant ambiance create a hyped-up atmosphere that keeps the energy soaring all night long.<br>
Step into our meticulously designed interior, crafted by experts, and immerse yourself in a world of extraordinary luxury. From the enchanting lighting effects at the entrance to the lively dance floor, every detail is tailored to set the perfect mood for an epic night.<br>
As the beats drop, get ready to groove and dance the night away while sipping on our delectable house cocktails. Our culinary experience is equally exceptional, with flavor-packed dishes curated by top chefs, ensuring a true delight for your taste buds.<br>
At Zorro, we ensure that every moment is memorable, whether it's the pulsating music, delectable food, or luxurious ambiance. So come hungry for a night of revelry and indulge in all that Zorro has to offer!
</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <img src="https://media.istockphoto.com/id/535403859/photo/dancing-at-disco.jpg?s=612x612&w=0&k=20&c=mVZX9qAsgnOv8C0t9gR81ofJ0JG20Orc4Io9r4AKNQQ=" class="d-block w-100" alt="slider">
                                            <div class="slider_caption">
                                                <div class="center_align">
                                                    <h2 class="fromtop_small"> our story </h2>
                                                </div>
                                                <div class="para_slider fromtop_small">
                                                    <p>Welcome to Zorro, the hottest luxury nightclub in Sector 29, Gurugram. As a leading party destination in Delhi NCR, we take pride in providing an unforgettable experience to all party enthusiasts. Our state-of-the-art audiovisual production and vibrant ambiance create a hyped-up atmosphere that keeps the energy soaring all night long.<br>
Step into our meticulously designed interior, crafted by experts, and immerse yourself in a world of extraordinary luxury. From the enchanting lighting effects at the entrance to the lively dance floor, every detail is tailored to set the perfect mood for an epic night.<br>
As the beats drop, get ready to groove and dance the night away while sipping on our delectable house cocktails. Our culinary experience is equally exceptional, with flavor-packed dishes curated by top chefs, ensuring a true delight for your taste buds.<br>
At Zorro, we ensure that every moment is memorable, whether it's the pulsating music, delectable food, or luxurious ambiance. So come hungry for a night of revelry and indulge in all that Zorro has to offer!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <img src="https://previews.123rf.com/images/redfig/redfig0901/redfig090100075/4181192-set-in-a-night-club-dancing-girls.jpg" class="d-block w-100" alt="slider">
                                            <div class="slider_caption">
                                                <div class="center_align">
                                                    <h2 class="fromtop_small"> our story </h2>
                                                </div>
                                                <div class="para_slider fromtop_small">
                                                    <p>Welcome to Zorro, the hottest luxury nightclub in Sector 29, Gurugram. As a leading party destination in Delhi NCR, we take pride in providing an unforgettable experience to all party enthusiasts. Our state-of-the-art audiovisual production and vibrant ambiance create a hyped-up atmosphere that keeps the energy soaring all night long.<br>
Step into our meticulously designed interior, crafted by experts, and immerse yourself in a world of extraordinary luxury. From the enchanting lighting effects at the entrance to the lively dance floor, every detail is tailored to set the perfect mood for an epic night.<br>
As the beats drop, get ready to groove and dance the night away while sipping on our delectable house cocktails. Our culinary experience is equally exceptional, with flavor-packed dishes curated by top chefs, ensuring a true delight for your taste buds.<br>
At Zorro, we ensure that every moment is memorable, whether it's the pulsating music, delectable food, or luxurious ambiance. So come hungry for a night of revelry and indulge in all that Zorro has to offer!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
   

    <div class="main_wrapper nc_offers_section">
        <div class="container">
            <div class="row">
              
                <div class="nc_heading_middle">
                    <h2> What we Offers </h2>
                </div>
               
                <div class="middle_inner nc_offers_main">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="offers_box_wrapper">
                                <div class="box_thumb">
                                    <img src="assets/images/offers/offer1.jpg" class="img-reponsive" alt="">
                                </div>
                                <div class="right_details">
                                    <h4>Top-notch Audiovisual Production</h4>
                                    <p>At Zorro, we pride ourselves on providing the best audio and visual experience for our guests. Our cutting-edge technology ensures that the music and lighting are of the highest quality, creating an electrifying atmosphere that keeps the party going all night long.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="offers_box_wrapper">
                                <div class="box_thumb">
                                    <img src="assets/images/offers/offer2.jpg" class="img-reponsive" alt="">
                                </div>
                                <div class="right_details">
                                    <h4>Luxurious Ambiance</h4>
                                    <p>Our interior design experts have meticulously crafted a space that exudes extraordinary luxury. From the moment you step inside, you'll be captivated by the enchanting lighting effects and vibrant dance floor, setting the perfect mood for an unforgettable night of celebration.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="offers_box_wrapper">
                                <div class="box_thumb">
                                    <img src="assets/images/offers/offer3.jpg" class="img-reponsive" alt="">
                                </div>
                                <div class="right_details">
                                    <h4>Exceptional Culinary Experience</h4>
                                    <p>Zorro offers more than just a night of dancing; our top chefs have curated a menu of flavor-packed dishes that are a true delight for your taste buds. Whether it's a scrumptious starter or a mouthwatering main course, our culinary offerings add an extra layer of enjoyment to your party experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="offers_box_wrapper">
                                <div class="box_thumb">
                                    <img src="assets/images/offers/offer4.jpg" class="img-reponsive" alt="">
                                </div>
                                <div class="right_details">
                                    <h4>Creative House Cocktails</h4>
                                    <p>Our bar serves an array of creative house cocktails that are specially crafted to complement the energetic vibe of the club. Sip on our signature drinks as you dance and mingle, adding a touch of excitement and indulgence to your night at Zorro.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="main_wrapper club_disc_section pad_t_55">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="nc_heading_middle">
                        <h2> Night Club Zorro </h2>
                    </div>
                    

                    <div class="nc_event_main club_crousel  owl-carousel" id="subs_scroll">
                      
                        <div class="item">
                            <div class="nc_club_cover">
                                <div class="nc_thumb_wrapper"> <img src="images/event8.jpg" alt="">
                                </div>
                            </div>
                           
                        </div>
                        
                        <div class="item">
                            <div class="nc_club_cover">
                                <div class="nc_thumb_wrapper"> <img src="images/event9.jpg" alt="">
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="item">
                            <div class="nc_club_cover">
                                <div class="nc_thumb_wrapper">
                                    <img src="images/event1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="nc_club_cover">
                                <div class="nc_thumb_wrapper">
                                    <img src="images/event2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                       
                        <div class="item">
                            <div class="nc_club_cover">
                                <div class="nc_thumb_wrapper">
                                    <img src="images/event3.jpg" alt="">
                                </div>
                            </div>
                           
                        </div>
                       
                        <div class="item">
                            <div class="nc_club_cover">
                                <div class="nc_thumb_wrapper">
                                    <img src="images/event4.jpg" alt="">
                                </div>
                            </div>
                          
                        </div>
                      
                        <div class="item">
                            <div class="nc_club_cover">
                                <div class="nc_thumb_wrapper">
                                    <img src="images/event5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                       
                        <div class="item">
                            <div class="nc_club_cover">
                                <div class="nc_thumb_wrapper">
                                    <img src="images/event6.jpg" alt="">
                                </div>
                            </div>
                           
                        </div>
                      
                        <div class="item">
                            <div class="nc_club_cover">
                                <div class="nc_thumb_wrapper">
                                    <img src="images/event7.jpg" alt="">
                                </div>
                            </div>
                          
                        </div>
                      
                    </div>
                  
                </div>
              
            </div>
          
        </div>
       
    </div>
   
    <div class="main_wrapper nc_subscribe_section">
        <div class="container">
            <div class="row">
                <div class="nc_subscribe_cover align_center">
                    <h3>want the latest Zorro Club news </h3>
                    <h4>Subscribe to our newsletter and never miss a <span>Event</span></h4>
                    <div class="subscribe_input">
                        <form>
                            <input type="email" placeholder="Enter Your Email">
                            <button type="submit" class="triangle_btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- .....................footer is here........................................................... -->


   <div class="footer">
        <div class="fleft">
            <h4>The Noida Clubs</h4>
            <p>Noida hosts a number of premium, exclusive clubs that attract professionals and those looking for a
                high-end experience. Clubs like The Club at Jaypee Greens and The Grand Venice offer </p>
            <p>For younger crowds and those seeking nightlife, Noida's Sector 18 area, known for its malls and
                commercial spots, has some good options. Clubs like The Vault Café, Sky Bar, and The Noida </p>
        </div>
        <div class="fright">
            <ul>
                <span>Links</span>
                <li>Home</li>
                <li>About Us</li>
                <li>Clubs</li>
                <li>Pricing</li>
                <li>Contact</li>
            </ul>
            <ul>
                <span>Contact US</span>
                <li><b>Address</b> - Noida Sector 58 </li>
                <li>Delhi - Noida Expressway </li>
                <li><b>Phone :</b> +91,700760000</li>
                <li><b>Email I'd :-</b>amitpss239@gmail.com</li>
            </ul>
            <ul>
                <span>Social Links</span>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero asperiores es</li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </li>
            </ul>
        </div>
    </div>
  
    <div class="hr"></div>
    <div class="ftext">
        <p>© 2024 Transportio. All Rights Reserved by PSS Tech noida </p>
    </div>
   
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
 
    <script src="assets/js/animation/jquery.scrollorama.js"></script>
    <script src="assets/js/animation/TweenMax.js"></script>
    
    <script src="assets/js/plugins/owl-carousel/owl.carousel.js"></script>
   
    <script src="assets/js/plugins/video/js/mediaelement-and-player.min.js"></script>
    <script src="assets/js/plugins/video/js/mep-feature-playlist.js"></script>
   
    <script src="assets/js/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/js/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/plugins/revolution/js/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/js/plugins/revolution/js/revolution.extension.navigation.min.js"></script>
    <script src="assets/js/plugins/revolution/js/revolution.extension.slideanims.min.js"></script>
    <script src="assets/js/plugins/revolution/js/revolution.extension.actions.min.js"></script>
    <script src="assets/js/plugins/revolution/js/revolution.extension.parallax.min.js"></script>

    <script src="assets/js/plugins/gallery/jquery.magnific-popup.js"></script>
   
    <script src="assets/js/plugins/jquery_ui/jquery-ui.js"></script>
    
   
    <script src="assets/js/custom.js"></script>
    
</body>
</html>








<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Dancing+Script:wght@400..700&family=Roboto+Slab:wght@100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Dancing+Script:wght@400..700&family=Roboto+Slab:wght@100..900&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Dancing+Script:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto+Slab:wght@100..900&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        /* General Reset */
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: black;
    color: white;
}
    /*

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
    color: #333;
} */

header {
    background-color: #333;
    color: white;
    padding: 10px 0;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* max-width: 1200px; */
    margin: 0 auto;
    padding: 0 20px;
}

nav .logo {
    font-size: 24px;
    font-weight: bold;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
}

main {
    max-width: 1200px;
    margin: 40px auto;
    padding: 0 20px;
    
}

.intro {
    text-align: center;
    margin-bottom: 40px;
}

.intro h1 {
    font-size: 32px;
    color: white;
}

.services {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 30px;
}

.service-item {
    background-color: #3b4954;
    padding: 10px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.service-item h2 {
    font-size: 24px;
    /* margin-bottom: 10px; */
}

.service-item ul {
    list-style: none;
}

.service-item ul li {
    margin-bottom: 8px;
}

.cta {
    text-align: center;
    margin-top: 40px;
    padding: 40px;
    /* background-color: #333; */
    color: white;
    border-radius: 8px;
}

.cta h2 {
    font-size: 28px;
    margin-bottom: 20px;
}

.cta button {
    background-color: #ff6f61;
    color: white;
    border: none;
    padding: 15px 30px;
    font-size: 18px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 15px;
}

.cta button:hover {
    background-color: #ff3f2f;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px;
}

        * {
            padding: 0;
            margin: 0;
        }

        /* Navbar Styles */
        nav {
            /* background-color: hsl(202, 75%, 47%); */
            background-color: black;
            padding: 10px;
            text-align: center;
            height: 75px;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        nav img {
            margin-top: -15px;
            margin-left: -21px;
        }

        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-transform: uppercase;
        }

        nav a:hover {
            color: orange;
        }

        nav h4 {
            font-size: 28px;
            color: white;
            position: absolute;
            left: 10px;
            font-family: "Dancing Script", cursive;
            font-optical-sizing: auto;
            font-style: normal;
        }

        nav h3 {
            font-size: 22px;
            color: white;
            position: absolute;
            right: 15px;
            font-family: "Dancing Script", cursive;
            font-optical-sizing: auto;
            font-style: normal;
        }


        /* ..............footer..................... */

        .footer {
            background-color: black;
            color: white;
            display: flex;
        }

        .fleft {
            /* background-color: green; */
            width: 30%;
            margin-left: 5%;
            padding: 20px;
        }

        .fleft p {
            padding: 5px;
            text-align: justify;
        }

        .fleft h4 {
            font-size: 22px;
            margin-bottom: 8px;
            font-style: italic;
        }

        .fright {
            display: flex;
            justify-content: space-between;
            text-align: center;
            margin-right: 5%;
            /* background-color: red; */
            width: 60%;
            padding: 20px;
        }

        .fright ul {
            list-style-type: none;
            line-height: 30px;
            text-align: left;
            width: 30%;
        }

        .fright span {
            font-weight: bold;
            font-size: 18px;
        }

        .fa-brands {
            font-size: 22px;
            color: white;
            padding: 10px;
            border: .2px solid white;
            border-radius: 8px;
            /* background-color: black; */
        }

        .fa-brands:hover {
            background-color: #4CAF50;
        }

        .ftext {
            text-align: center;
            background-color: black;
            color: white;
            padding: 10px;
        }

        .hr {
            background-color: white;
            width: 100%;
            height: 1px;
        }
    </style>
</head>

<body>
    <nav>
        <h4>The Noida Clubs</h4>
        <a href="../html/index.php">Home</a>
        <a href="../html/about.php">About</a>
        <a href="../html/service.php">Services</a>
         <a href="#clubs">Clubs</a>
        <a href="#clubs">Gallery</a> 
        <a href="../html/contact.php">Contact Us</a>
        <a href="../html/buyticket.php">Buy Tickets</a><img src="../image/new.gif" alt="">
        <a href="../Html/admin.php">Admin</a>
    </nav>

    <main>
        <section class="intro">
            <h1>Welcome to The Noida's Club Services Page</h1>
            <p>Explore our exclusive offerings designed to provide unique and enriching experiences for all our members.</p>
        </section>

        <section class="services">
            <div class="service-item">
                <h2>Exclusive Events and Gatherings</h2>
                <ul>
                    <li>Members-Only Parties</li>
                    <li>Networking Events</li>
                    <li>Themed Nights</li>
                    <li>Workshops & Seminars</li>
                </ul>
            </div>

            <div class="service-item">
                <h2>Premium Club Facilities</h2>
                <ul>
                    <li>Lounge & Social Areas</li>
                    <li>Fitness Center</li>
                    <li>Private Meeting Rooms</li>
                    <li>Dining Options</li>
                </ul>
            </div>

            <div class="service-item">
                <h2>Member Discounts & Partnerships</h2>
                <ul>
                    <li>Retail Discounts</li>
                    <li>Travel Benefits</li>
                    <li>Event Access</li>
                    <li>Wellness Programs</li>
                </ul>
            </div>

            <div class="service-item">
                <h2>Concierge & Personal Services</h2>
                <ul>
                    <li>Travel & Vacation Planning</li>
                    <li>Event Planning</li>
                    <li>Personal Shopping</li>
                    <li>24/7 Support</li>
                </ul>
            </div>

            <div class="service-item">
                <h2>Volunteer and Community Involvement</h2>
                <ul>
                    <li>Charity Drives & Events</li>
                    <li>Sustainability Programs</li>
                    <li>Mentorship Programs</li>
                </ul>
            </div>
        </section>

        <section class="cta">
            <h2>Get Started Today!</h2>
            <p>Join The Noida's Club and begin enjoying the full range of our premium services. For membership inquiries, pricing details, or questions about any of our offerings, please contact us!</p>
            <button id="contactBtn">Contact Us</button>
        </section>
    </main>

    <div class="footer">
        <div class="fleft">
            <h4>The Noida Clubs</h4>
            <p>Noida hosts a number of premium, exclusive clubs that attract professionals and those looking for a
                high-end experience. Clubs like The Club at Jaypee Greens and The Grand Venice offer </p>
            <p>For younger crowds and those seeking nightlife, Noida's Sector 18 area, known for its malls and
                commercial spots, has some good options. Clubs like The Vault Café, Sky Bar, and The Noida </p>
        </div>
        <div class="fright">
            <ul>
                <span>Links</span>
                <li>Home</li>
                <li>About Us</li>
                <li>Clubs</li>
                <li>Pricing</li>
                <li>Contact</li>
            </ul>
            <ul>
                <span>Contact US</span>
                <li><b>Address</b> - Noida Sector 58 </li>
                <li>Delhi - Noida Expressway </li>
                <li><b>Phone :</b> +91,700760000</li>
                <li><b>Email I'd :-</b>amitpss239@gmail.com</li>
            </ul>
            <ul>
                <span>Social Links</span>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero asperiores es</li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="hr"></div>
    <div class="ftext">
        <p>© 2024 Transportio. All Rights Reserved by PSS Tech noida </p>
    </div>

</body>

</html>
<script>
    document.getElementById('contactBtn').addEventListener('click', function() {
    alert('Thank you for your interest! Please contact us at contact@noidasclub.com for more information. OR 7007600000');
});
</script> -->