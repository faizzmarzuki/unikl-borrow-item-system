<?php
session_start();  
include 'login.php';
?>
<html>
<head>
  <title>Homepage Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home | Design studio template</title>
  <meta name="description" content="Page-specific description">
  <meta name="keywords" content="Page-specific keywords">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="shortcut icon" href="static/images/favicons/favicon.png" type="image/x-icon">
  <link rel="apple-touch-icon" href="static/images/favicons/apple-touch-icon.png">
  <link rel="apple-touch-icon-precomposed" href="static/images/favicons/apple-touch-icon-precomposed.png">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,300,700" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="static/css/screen.min.css">
  <link rel="stylesheet" href="static/css/custom.min.css">
  <title>Homepage Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/a468e1af6f.js" crossorigin="anonymous"></script>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
    }

    .header {
      padding: 5px;
      text-align: center;
      background: #ffffff;
      color: white;
    }

    .header h1 {
      font-size: 10px;
    }

    .navbar {
      overflow: hidden;
      background-color: rgb(4, 0, 43);
    }

    .navbar a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
    }

    .navbar a.right {
      float: right;
    }

    .navbar a:hover {
      background-color: #ddd;
      color: black;
    }

    .navbar a.active {
      background-color: rgba(255, 196, 0, 0.856);
      color: white;
    }

    .row {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
    }

    .side {
      -ms-flex: 30%;
      flex: 30%;
      background-color: #f1f1f1;
      padding: 20px;
    }

    .main {
      -ms-flex: 70%;
      flex: 70%;
      background-color: white;
      padding: 20px;
    }

    .fakeimg {
      background-color: rgba(255, 217, 0, 0.856);
      width: 100%;
      padding: 20px;
    }

    .footer {
      padding: 20px;
      text-align: center;
      background: #ddd;
    }

    @media screen and (max-width: 700px) {
      .row {
        flex-direction: column;
      }
    }

    @media screen and (max-width: 400px) {
      .navbar a {
        float: none;
        width: 100%;
      }
    }

    .dropdown {
      float: left;
      overflow: hidden;
    }

    .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .navbar a:hover,
    .dropdown:hover .dropbtn {
      background-color: rgba(255, 217, 0, 0.856);
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .topnav-right {
      float: right;
    }

    html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
input,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
main,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
    margin: 0;
    padding: 0;
    border: 0;
    -webkit-box-sizing: border-box;
    box-sizing: border-box
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section {
    display: block
}

nav ol,
nav ul {
    list-style: none
}

blockquote,
q {
    quotes: none
}

blockquote:before,
blockquote:after,
q:before,
q:after {
    content: '';
    content: none
}

table {
    border-collapse: collapse;
    border-spacing: 0
}

button,
input[type=submit] {
    cursor: pointer
}

h1 {
    font-size: 42px;
    font-weight: lighter
}

h2 {
    font-size: 26px;
    font-weight: lighter
}

h3 {
    font-size: 20px;
    font-weight: lighter
}

p {
    font-size: 15px;
    font-weight: lighter;
    color: #909090
}

a {
    font-size: 14px;
    text-decoration: none;
    color: #000833;
}

html,
body {
    width: 100%;
    height: 100%
}

body {
    background-color: #fff;
    font-family: "Lato", sans-serif;
    color: #424242
}

.contact {
    width: 100%;
    min-height: 500px;
    padding: 50px 0;
    background-color: #ecf0f1;
    text-align: left
}

.contact__inner {
    max-width: 1024px;
    margin: 0 auto
}

.contact__inner:after {
    content: '';
    display: table;
    clear: both
}

.contact__title {
    font-size: 28px;
    font-weight: 400;
    margin-bottom: 10px;
    text-transform: capitalize;
    text-align: center
}

.contact__descr {
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 55px;
    text-align: center
}

.contact__form {
    display: block;
    float: left;
    max-width: 465px;
    margin: 0 15px 0 40px
}

.contact__form:after {
    content: '';
    display: table;
    clear: both
}

.contact__form-input {
    display: inline-block;
    width: 220px;
    height: 45px;
    margin-bottom: 20px;
    padding-left: 12px;
    border: 2px solid #bec3c7;
    font-style: italic;
    color: #999
}

.contact__form-input:first-of-type {
    margin-right: 20px
}

.contact__form-tarea {
    display: block;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    width: 465px;
    height: 155px;
    margin-bottom: 25px;
    padding: 20px 0 0 12px;
    border: 2px solid #bec3c7;
    font-style: italic;
    color: #999;
    resize: none
}

.contact__form-submit {
    display: block;
    float: right;
    width: 115px;
    height: 35px;
    text-align: center;
    background-color: #000833;
    font-size: 15px;
    color: #fff;
    text-transform: uppercase;
    -webkit-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s
}

.contact__form-submit:hover {
    background-color: #000833
}

.contact__card {
    display: inline-block;
    width: 230px;
    height: 150px
}

.contact__card-title {
    margin-bottom: 20px;
    font-size: 14px;
    line-height: .5;
    text-transform: uppercase
}

.contact__card-item {
    position: relative;
    font-size: 14px;
    line-height: 24px
}

.contact__card-item:before {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    font-family: FontAwesome
}

.contact__card-item.place {
    padding-left: 15px;
    margin-bottom: 15px
}

.contact__card-item.place:before {
    content: "\f041"
}

.contact__card-item.tel {
    padding-left: 17px;
    margin-bottom: 10px
}

.contact__card-item.tel:before {
    content: "\f098"
}

.contact__card-item.fax:before {
    content: "\f02f"
}

.contact__card-item.email {
    display: inline-block;
    padding-left: 20px;
    font-size: 14px;
    line-height: 24px;
    color: #444
}

.contact__card-item.email:before {
    content: "\f003"
}

.contact__card-item.email:hover {
    text-decoration: underline
}

.page-header {
    width: 100%;
    min-height: 95px;
    background-color: #fff
}

.page-header:after {
    content: '';
    display: table;
    clear: both
}

.page-header.is-fixed {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 999;
    -webkit-box-shadow: 0 2px 4px 0 #424242;
    box-shadow: 0 2px 4px 0 #424242
}

.page-header__inner {
    max-width: 1024px;
    margin: 0 auto
}

.page-header__inner:after {
    content: '';
    display: table;
    clear: both
}

.page-header__logo {
    float: left;
    height: 50px;
    margin: 25px 0 0 40px;
    padding: 5px 0 0 65px;
    background: url(../images/logo.jpg) 0 center no-repeat
}

.page-header__logo h1 {
    font-size: 20px;
    font-weight: 700;
    text-transform: uppercase
}

.page-header__logo span {
    font-size: 14px;
    text-transform: capitalize
}

.page-header__nav {
    float: right;
    margin: 30px 55px 0 0;
    background-color: #fff
}

.page-header__nav li {
    display: inline-block;
    margin-left: 5px
}

.page-header__nav-link {
    display: inline-block;
    font-size: 14px;
    text-transform: uppercase;
    padding: 10px;
    -webkit-transition: background-color .2s;
    -o-transition: background-color .2s;
    transition: background-color .2s;
    color: #424242
}

.page-header__nav-link:hover,
.page-header__nav-link.is-active {
    background-color: #000833;
    color: #fff
}

.page-footer {
    width: 100%;
    min-height: 85px;
    padding-bottom: 30px;
    background-color: #f8be00;
}

.page-footer__inner {
    max-width: 1024px;
    margin: 0 auto
}

.page-footer__inner:after {
    content: '';
    display: table;
    clear: both
}

.page-footer__copyright {
    display: inline-block;
    margin: 35px 0 0 45px;
    font-size: 14px;
    color: #000000
}

.page-footer__gotop {
    display: block;
    float: right;
    width: 45px;
    height: 45px;
    margin: 20px 45px 0 0;
    font-size: 0;
    text-align: center;
    overflow: hidden;
    background-color: #000833;
    color: transparent;
    -webkit-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s
}

.page-footer__gotop:hover {
    background-color: #000833
}

.page-footer__gotop:before {
    font-size: 20px;
    line-height: 45px;
    font-family: FontAwesome;
    content: "\f077";
    color: #fff
}

.portfolio {
    width: 100%;
    min-height: 680px;
    padding-top: 50px;
    background-color: #fff;
    text-align: center
}

.portfolio__inner {
    max-width: 1024px;
    margin: 0 auto
}

.portfolio__inner:after {
    content: '';
    display: table;
    clear: both
}

.portfolio__title {
    font-size: 28px;
    font-weight: 400;
    margin-bottom: 10px
}

.portfolio__descr {
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 40px
}

.portfolio__filter li {
    display: inline-block;
    margin: 0 10px;
    cursor: pointer
}

.portfolio__filter-btn {
    display: inline-block;
    font-size: 14px;
    text-transform: uppercase;
    padding: 10px;
    color: #fff;
    background-color: #000833;
    -webkit-transition: background-color .2s;
    -o-transition: background-color .2s;
    transition: background-color .2s
}

.portfolio__filter-btn:hover,
.portfolio__filter-btn.is-selected {
    background-color: #000833
}

.portfolio__content {
    margin: 45px auto 60px
}

.portfolio__item {
    position: relative;
    display: inline-block;
    width: 180px;
    height: 180px;
    margin: 0 30px 35px;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    overflow: hidden
}

.portfolio__item.is-hidden {
    display: none
}

.portfolio__item-img {
    display: inline-block;
    height: 100%;
    margin: 0 auto
}

.portfolio__item-caption {
    visibility: hidden;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    padding-top: 35px;
    background-color: #000833;
    background-color: #000833;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    color: #fff;
    opacity: 0;
    -webkit-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s
}

.portfolio__item:hover .portfolio__item-caption {
    opacity: 1;
    visibility: visible
}

.portfolio__item-title {
    display: block;
    font-size: 18px;
    margin-bottom: 10px
}

.portfolio__item-title:before {
    content: "\f002";
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    display: block;
    width: 40px;
    height: 40px;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    margin: 0 auto 20px;
    padding-top: 10px;
    background-color: #ccc;
    background-color: rgba(0, 0, 0, .5);
    font-family: FontAwesome;
    text-align: center
}

.portfolio__item-cat {
    display: block;
    font-size: 15px
}

.promo {
    width: 100%;
    min-height: 455px;
    padding: 70px 0;
    background: #323232 url(static/images/UniKL_MITEC2.jpg) center 0 no-repeat;
    background-attachment: fixed;
    -webkit-background-size: cover;
    background-size: cover;
    text-align: center;
    color: #fff
}

.promo__inner {
    max-width: 1024px;
    margin: 0 auto
}

.promo__inner:after {
    content: '';
    display: table;
    clear: both
}

.promo__title {
    margin-bottom: 35px;
    font-size: 55px;
    text-transform: capitalize
}

.promo__title span {
    font-weight: 700
}

.promo__descr {
    max-width: 580px;
    margin: 0 auto 50px;
    font-size: 18px;
    line-height: 1.1;
    color: #fff
}

.promo__btn {
    display: block;
    width: 125px;
    height: 35px;
    margin: 0 auto 45px;
    padding-top: 10px;
    background-color: #000833;
    font-size: 15px;
    color: #fff;
    text-transform: uppercase;
    -webkit-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s
}

.promo__btn:hover {
    background-color: #000833
}

.promo__go-next {
    display: block;
    width: 40px;
    height: 40px;
    margin: 0 auto;
    background-color: #fff;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    font-size: 0;
    color: #323232;
    -webkit-transition: -webkit-transform .5s;
    transition: -webkit-transform .5s;
    -o-transition: transform .5s;
    transition: transform .5s;
    transition: transform .5s, -webkit-transform .5s
}

.promo__go-next:before {
    font-size: 30px;
    line-height: 40px;
    font-family: FontAwesome;
    content: "\f078"
}

.promo__go-next:hover {
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2)
}

.team {
    width: 100%;
    min-height: 645px;
    padding-top: 55px;
    background-color: #000833;
    text-align: center
}

.team__inner {
    max-width: 1024px;
    margin: 0 auto
}

.team__inner:after {
    content: '';
    display: table;
    clear: both
}

.team__title {
    font-size: 28px;
    font-weight: 400;
    margin-bottom: 10px;
    color: #fff;
    text-transform: capitalize
}

.team__descr {
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 10px;
    color: #fff
}

.team__member {
    display: inline-block;
    position: relative;
    width: 220px;
    margin: 0 30px 30px;
    background-color: #fff
}

.team__member img {
    width: 100%
}

.team__member-info {
    display: block;
    width: 100%;
    height: 190px;
    padding: 15px 10px
}

.team__member-name {
    margin-bottom: 5px;
    font-size: 18px
}

.team__member-role {
    display: block;
    margin-bottom: 20px;
    font-size: 13px;
    font-style: italic;
    text-transform: capitalize
}

.team__member-descr {
    text-align: left;
    line-height: 1.3
}

.team__member-soc {
    display: block;
    position: absolute;
    width: 180px;
    height: 50px;
    top: 95px;
    left: 50%;
    margin-left: -90px;
    background-color: #000833;
    background-color: #000833;
    white-space: nowrap;
    overflow: hidden;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s
}

.team__member:hover .team__member-soc {
    opacity: 1;
    visibility: visible
}

.team__member-soc li {
    display: inline-block
}

.team__member-icon {
    display: block;
    width: 45px;
    height: 50px;
    margin-left: -3px;
    color: #fff;
    -webkit-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s;
    font-size: 0
}

.team__member-icon:hover {
    color: #c1c1c1
}

.team__member-icon:before {
    display: block;
    font-family: FontAwesome;
    font-size: 30px;
    line-height: 50px
}

.team__member-icon.fb:before {
    content: "\f09a"
}

.team__member-icon.tw:before {
    content: "\f099"
}

.team__member-icon.gplus:before {
    content: "\f0d5"
}

.team__member-icon.db:before {
    content: "\f17d"
}

@media screen and (max-width:1000px) {
    .portfolio__item {
        width: 170px;
        height: 170px;
        margin: 0 1.5% 35px
    }

    .team__member {
        width: 190px;
        margin: 0 20px 30px
    }
}

@media screen and (max-width:800px) {
    .contact__form {
        max-width: 50%;
        margin: 0 2% 0 8%
    }

    .contact__form-input {
        width: 100%
    }

    .contact__form-tarea {
        width: 100%
    }

    .contact__card {
        width: 40%
    }

    .page-header__logo {
        margin: 25px 0 0 10px
    }

    .page-header__nav {
        margin: 30px 10px 0 0
    }

    .portfolio__item {
        width: 190px;
        height: 190px;
        margin: 0 5% 35px
    }

    .team__member {
        width: 180px;
        margin: 0 10px 30px
    }
}

@media screen and (max-width:640px) {
    .contact {
        padding: 50px 10px
    }

    .contact__form {
        float: none;
        max-width: 90%;
        margin: 0 auto 50px
    }

    .contact__card {
        display: block;
        width: 230px;
        margin: 20px auto
    }

    .contact__card-title {
        text-align: center
    }

    .page-header__logo h1 {
        display: none
    }

    .page-header__logo span {
        display: none
    }

    .page-header__nav li {
        margin-left: 0
    }

    .portfolio {
        padding: 50px 10px
    }

    .portfolio__filter li {
        margin: 0 5px
    }

    .team {
        padding: 55px 10px
    }

    .team__member {
        display: block;
        width: 260px;
        margin: 0 auto 30px
    }

    .team__member-info {
        height: auto
    }

    .team__member-descr {
        display: none
    }

    .team__member-soc {
        width: 260px;
        top: 220px;
        margin-left: -130px
    }
}

@media screen and (max-width:480px) {
    .contact__form-submit {
        float: none;
        margin: 0 auto
    }

    .page-header {
        min-height: 50px
    }

    .page-header__inner {
        text-align: center
    }

    .page-header__logo {
        float: none;
        position: relative;
        display: inline-block;
        margin: 20px auto 10px;
        text-align: left
    }

    .page-header__logo h1 {
        display: block
    }

    .page-header__logo span {
        display: inline-block
    }

    .page-header__nav {
        float: none;
        margin: 10px auto;
        padding-top: 20px;
        text-align: center;
        border-top: 1px solid #eee
    }

    .page-header__nav li {
        margin-left: 0
    }

    .page-footer {
        padding: 0 10px 30px;
        text-align: center
    }

    .page-footer__copyright {
        margin: 35px auto 0
    }

    .page-footer__gotop {
        float: none;
        width: 100%;
        margin: 20px auto 0
    }

    .portfolio__filter li {
        display: block
    }

    div {
        text-align: center;
        color:#000000;
    }

    .fas fa-file-signature {
    width: 36px !important;
    height: 36px !important;
}
}
  </style>
</head>

<body>
  <div class="header">
    <h1><a href="main.php" class="active"><img src="logo.png" alt="Girl in a jacket" width="200" height="100"></a></h1>
  </div>

  <div class="navbar">
    <a href="Main.html" class="active">Home</a>
    <div class="dropdown">
      <button class="dropbtn">Insert
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="Insert_LoanForm.php">IT Equipment Loan Form</a>
        <a href="Insert_IDApplication.php">ID Application Form</a>
        <a href="Insert_Services.php">IT Service Form</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">View All
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="Table_loan.php">IT Equipment Loan Form</a>
        <a href="Table_ID.php">ID Application Form</a>
        <a href="Table_Services.php">IT Service Form</a>
      </div>
    </div>
    <div class="topnav-right">
      <a href="Login_Page.php">Log In</a>
    </div>
  </div>

  <!-- $Promo section-->
  <section class="promo js-jumbo" id="home">
    <h2 class="promo__title">Welcome <span>user</span></h2>
    <p class="promo__descr">This is Homepage for IT Service Application Form</p>
  </section><!-- $Portfolio section-->
  </section><!-- $Team section-->
  <section class="team" id="team">
    <div class="team__inner">
      <h2 class="team__title">About us</h2>
      <p class="team__descr">This system is for Student and Staff of UniKL MITEC.</p>
      <p class="team__descr">Student and Staff of UniKL MITEC can fill up form on this system to use IT Unit's service.</p>
      <style>
        * {
        box-sizing: border-box;
        }

        /* Create two unequal columns that floats next to each other */
        .column {
        float: center;
        padding: 10px;
        height: 465px; /* Should be removed. Only for demonstration */
        }

        .left {
        width: 50%;
        }

        .right {
        width: 50%;
        }

        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }
    </style>
    <div class="row">
  <div class="column left" style="background-color:#f8be00;">
    <br>
    <h2><img src="45021.png" alt="Girl " width="210" height="200"></h2>
    <br>
    <h3 style="color: black;"><b><i>Search Data</i></b><h3>
    <br>
    <p style="color: black;"><b>User can search their data and past record on View All.</b></p>
    <p style="color: black;"><b>All user need to do just enter your ID in the search bar.</b></p>
    <p style="color: black;"><b>User also can edit and view their data.</b></p>
    <br><br>
    <a class="promo__btn" href="UserIns.pdf">User Manual</a>
  </div>
  <div class="column right" style="background-color:#f8be00;">
  <br>
    <h2><img src="icon-form-25.png" alt="Girl " width="210" height="200"></h2>
    <br>
    <h3 style="color: black;"><b><i>Insert Form</i></b><h3>
    <br>
    <p style="color: black;"><b>User can choose 3 types of form, ID Form, Loan Form and Service Form.</b></p>
    <p style="color: black;"><b>ID Form for student or staff who need to make an ID.</b></p>
    <p style="color: black;"><b>Loan Form for student or staff who need to loan an IT item for an event.</b></p>
    <p style="color: black;"><b>Service Form for student or stuff who need a services from IT Unit.</b></p>
    <br>
    <a class="promo__btn" href="UserTab.pdf">User Manual</a>
  </div>
</div>
      
    </div>
  </section><!-- $Contact section-->
  <section class="contact" id="contact">
    <div class="contact__inner">
      <h2 class="contact__title">Contact us</h2>
      <div class="contact__card vcard">
        <h3 class="contact__card-title">Information</h3>
        <div class="contact__card-item place">
          <div class="fn org">UniKL MITEC</div>
          <div class="adr">
            <div class="street-address">Jalan Persiaran Sinaran Ilmu,</div><span class="locality">Bandar Seri Alam,</span>
            <br>
            <span class="region">81750 Masai, Johor.</span>
          </div>
        </div>
        <div class="contact__card-item tel">+607 - <span class="type"></span>381 2400</div>
        <div class="contact__card-item fax tel">+607 - <span class="type"></span>381 2500</div><a
          class="contact__card-item email">it.uniklmitec@gmail.com</a>
      </div>
    </div>
  </section><!-- $Page footer-->
  <footer class="page-footer">
    <div class="page-footer__inner">
        <span class="page-footer__copyright">&copy; 2018 Universiti Kuala Lumpur | All rights reserved. | <a href="https://www.unikl.edu.my/legal-and-compliance/">Legal</a> | <a href="https://www.unikl.edu.my/sitemap/">Sitemap</a></span>
        
        <a class="page-footer__gotop js-anchor" href="#home">Go to top</a>
    </div>
  </footer>
  <script src="static/js/body.min.js"></script>