<?php 
if( $_POST["daterange"] || $_POST["total_guests"] ) {
$daterange = $_POST["daterange"];
$total_guests = $_POST["total_guests"];

} ?>

<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=3.561904761904762, maximum-scale=1, user-scalable=no, height=device-height">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&display=swap" rel="stylesheet">
      <style type="text/css">@charset "UTF-8";
         /**
         * Variables declared here can be overridden by consuming applications, with
         * the help of the `!default` flag.
         *
         * @example
         *     // overriding $hoverColor
         *     $hoverColor: rgba(red, 0.05);
         *
         *     // overriding image path
         *     $flagsImagePath: "images/";
         *
         *     // import the scss file after the overrides
         *     @import "bower_component/intl-tel-input/src/css/intlTelInput";
         */
         .intl-tel-input {
         position: relative;
         display: inline-block; }
         .intl-tel-input * {
         box-sizing: border-box;
         -moz-box-sizing: border-box; }
         .intl-tel-input .hide {
         display: none; }
         .intl-tel-input .v-hide {
         visibility: hidden; }
         .intl-tel-input input, .intl-tel-input input[type=text], .intl-tel-input input[type=tel] {
         position: relative;
         z-index: 0;
         margin-top: 0 !important;
         margin-bottom: 0 !important;
         padding-right: 36px;
         margin-right: 0; }
         .intl-tel-input .flag-container {
         position: absolute;
         top: 0;
         bottom: 0;
         right: 0;
         padding: 1px; }
         .intl-tel-input .selected-flag {
         z-index: 1;
         position: relative;
         width: 36px;
         height: 100%;
         padding: 0 0 0 8px; }
         .intl-tel-input .selected-flag .iti-flag {
         position: absolute;
         top: 0;
         bottom: 0;
         margin: auto; }
         .intl-tel-input .selected-flag .iti-arrow {
         position: absolute;
         top: 50%;
         margin-top: -2px;
         right: 6px;
         width: 0;
         height: 0;
         border-left: 3px solid transparent;
         border-right: 3px solid transparent;
         border-top: 4px solid #555; }
         .intl-tel-input .selected-flag .iti-arrow.up {
         border-top: none;
         border-bottom: 4px solid #555; }
         .intl-tel-input .country-list {
         position: absolute;
         z-index: 2;
         list-style: none;
         text-align: left;
         padding: 0;
         margin: 0 0 0 -1px;
         box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
         background-color: white;
         border: 1px solid #CCC;
         white-space: nowrap;
         max-height: 200px;
         overflow-y: scroll; }
         .intl-tel-input .country-list.dropup {
         bottom: 100%;
         margin-bottom: -1px; }
         .intl-tel-input .country-list .flag-box {
         display: inline-block;
         width: 20px; }
         @media (max-width: 500px) {
         .intl-tel-input .country-list {
         white-space: normal; } }
         .intl-tel-input .country-list .divider {
         padding-bottom: 5px;
         margin-bottom: 5px;
         border-bottom: 1px solid #CCC; }
         .intl-tel-input .country-list .country {
         padding: 5px 10px; }
         .intl-tel-input .country-list .country .dial-code {
         color: #999; }
         .intl-tel-input .country-list .country.highlight {
         background-color: rgba(0, 0, 0, 0.05); }
         .intl-tel-input .country-list .flag-box, .intl-tel-input .country-list .country-name, .intl-tel-input .country-list .dial-code {
         vertical-align: middle; }
         .intl-tel-input .country-list .flag-box, .intl-tel-input .country-list .country-name {
         margin-right: 6px; }
         .intl-tel-input.allow-dropdown input, .intl-tel-input.allow-dropdown input[type=text], .intl-tel-input.allow-dropdown input[type=tel], .intl-tel-input.separate-dial-code input, .intl-tel-input.separate-dial-code input[type=text], .intl-tel-input.separate-dial-code input[type=tel] {
         padding-right: 6px;
         padding-left: 52px;
         margin-left: 0; }
         .intl-tel-input.allow-dropdown .flag-container, .intl-tel-input.separate-dial-code .flag-container {
         right: auto;
         left: 0; }
         .intl-tel-input.allow-dropdown .selected-flag, .intl-tel-input.separate-dial-code .selected-flag {
         width: 46px; }
         .intl-tel-input.allow-dropdown .flag-container:hover {
         cursor: pointer; }
         .intl-tel-input.allow-dropdown .flag-container:hover .selected-flag {
         background-color: rgba(0, 0, 0, 0.05); }
         .intl-tel-input.allow-dropdown input[disabled] + .flag-container:hover, .intl-tel-input.allow-dropdown input[readonly] + .flag-container:hover {
         cursor: default; }
         .intl-tel-input.allow-dropdown input[disabled] + .flag-container:hover .selected-flag, .intl-tel-input.allow-dropdown input[readonly] + .flag-container:hover .selected-flag {
         background-color: transparent; }
         .intl-tel-input.separate-dial-code .selected-flag {
         background-color: rgba(0, 0, 0, 0.05);
         display: table; }
         .intl-tel-input.separate-dial-code .selected-dial-code {
         display: table-cell;
         vertical-align: middle;
         padding-left: 28px; }
         .intl-tel-input.separate-dial-code.iti-sdc-2 input, .intl-tel-input.separate-dial-code.iti-sdc-2 input[type=text], .intl-tel-input.separate-dial-code.iti-sdc-2 input[type=tel] {
         padding-left: 66px; }
         .intl-tel-input.separate-dial-code.iti-sdc-2 .selected-flag {
         width: 60px; }
         .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 input, .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 input[type=text], .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 input[type=tel] {
         padding-left: 76px; }
         .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 .selected-flag {
         width: 70px; }
         .intl-tel-input.separate-dial-code.iti-sdc-3 input, .intl-tel-input.separate-dial-code.iti-sdc-3 input[type=text], .intl-tel-input.separate-dial-code.iti-sdc-3 input[type=tel] {
         padding-left: 74px; }
         .intl-tel-input.separate-dial-code.iti-sdc-3 .selected-flag {
         width: 68px; }
         .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input, .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input[type=text], .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input[type=tel] {
         padding-left: 84px; }
         .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 .selected-flag {
         width: 78px; }
         .intl-tel-input.separate-dial-code.iti-sdc-4 input, .intl-tel-input.separate-dial-code.iti-sdc-4 input[type=text], .intl-tel-input.separate-dial-code.iti-sdc-4 input[type=tel] {
         padding-left: 82px; }
         .intl-tel-input.separate-dial-code.iti-sdc-4 .selected-flag {
         width: 76px; }
         .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-4 input, .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-4 input[type=text], .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-4 input[type=tel] {
         padding-left: 92px; }
         .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-4 .selected-flag {
         width: 86px; }
         .intl-tel-input.separate-dial-code.iti-sdc-5 input, .intl-tel-input.separate-dial-code.iti-sdc-5 input[type=text], .intl-tel-input.separate-dial-code.iti-sdc-5 input[type=tel] {
         padding-left: 90px; }
         .intl-tel-input.separate-dial-code.iti-sdc-5 .selected-flag {
         width: 84px; }
         .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-5 input, .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-5 input[type=text], .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-5 input[type=tel] {
         padding-left: 100px; }
         .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-5 .selected-flag {
         width: 94px; }
         .intl-tel-input.iti-container {
         position: absolute;
         top: -1000px;
         left: -1000px;
         z-index: 1060;
         padding: 1px; }
         .intl-tel-input.iti-container:hover {
         cursor: pointer; }
         .iti-mobile .intl-tel-input.iti-container {
         top: 30px;
         bottom: 30px;
         left: 30px;
         right: 30px;
         position: fixed; }
         .iti-mobile .intl-tel-input .country-list {
         max-height: 100%;
         width: 100%; }
         .iti-mobile .intl-tel-input .country-list .country {
         padding: 10px 10px;
         line-height: 1.5em; }
         .iti-flag {
         width: 20px; }
         .iti-flag.be {
         width: 18px; }
         .iti-flag.ch {
         width: 15px; }
         .iti-flag.mc {
         width: 19px; }
         .iti-flag.ne {
         width: 18px; }
         .iti-flag.np {
         width: 13px; }
         .iti-flag.va {
         width: 15px; }
         @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
         .iti-flag {
         background-size: 5630px 15px; } }
         .iti-flag.ac {
         height: 10px;
         background-position: 0px 0px; }
         .iti-flag.ad {
         height: 14px;
         background-position: -22px 0px; }
         .iti-flag.ae {
         height: 10px;
         background-position: -44px 0px; }
         .iti-flag.af {
         height: 14px;
         background-position: -66px 0px; }
         .iti-flag.ag {
         height: 14px;
         background-position: -88px 0px; }
         .iti-flag.ai {
         height: 10px;
         background-position: -110px 0px; }
         .iti-flag.al {
         height: 15px;
         background-position: -132px 0px; }
         .iti-flag.am {
         height: 10px;
         background-position: -154px 0px; }
         .iti-flag.ao {
         height: 14px;
         background-position: -176px 0px; }
         .iti-flag.aq {
         height: 14px;
         background-position: -198px 0px; }
         .iti-flag.ar {
         height: 13px;
         background-position: -220px 0px; }
         .iti-flag.as {
         height: 10px;
         background-position: -242px 0px; }
         .iti-flag.at {
         height: 14px;
         background-position: -264px 0px; }
         .iti-flag.au {
         height: 10px;
         background-position: -286px 0px; }
         .iti-flag.aw {
         height: 14px;
         background-position: -308px 0px; }
         .iti-flag.ax {
         height: 13px;
         background-position: -330px 0px; }
         .iti-flag.az {
         height: 10px;
         background-position: -352px 0px; }
         .iti-flag.ba {
         height: 10px;
         background-position: -374px 0px; }
         .iti-flag.bb {
         height: 14px;
         background-position: -396px 0px; }
         .iti-flag.bd {
         height: 12px;
         background-position: -418px 0px; }
         .iti-flag.be {
         height: 15px;
         background-position: -440px 0px; }
         .iti-flag.bf {
         height: 14px;
         background-position: -460px 0px; }
         .iti-flag.bg {
         height: 12px;
         background-position: -482px 0px; }
         .iti-flag.bh {
         height: 12px;
         background-position: -504px 0px; }
         .iti-flag.bi {
         height: 12px;
         background-position: -526px 0px; }
         .iti-flag.bj {
         height: 14px;
         background-position: -548px 0px; }
         .iti-flag.bl {
         height: 14px;
         background-position: -570px 0px; }
         .iti-flag.bm {
         height: 10px;
         background-position: -592px 0px; }
         .iti-flag.bn {
         height: 10px;
         background-position: -614px 0px; }
         .iti-flag.bo {
         height: 14px;
         background-position: -636px 0px; }
         .iti-flag.bq {
         height: 14px;
         background-position: -658px 0px; }
         .iti-flag.br {
         height: 14px;
         background-position: -680px 0px; }
         .iti-flag.bs {
         height: 10px;
         background-position: -702px 0px; }
         .iti-flag.bt {
         height: 14px;
         background-position: -724px 0px; }
         .iti-flag.bv {
         height: 15px;
         background-position: -746px 0px; }
         .iti-flag.bw {
         height: 14px;
         background-position: -768px 0px; }
         .iti-flag.by {
         height: 10px;
         background-position: -790px 0px; }
         .iti-flag.bz {
         height: 14px;
         background-position: -812px 0px; }
         .iti-flag.ca {
         height: 10px;
         background-position: -834px 0px; }
         .iti-flag.cc {
         height: 10px;
         background-position: -856px 0px; }
         .iti-flag.cd {
         height: 15px;
         background-position: -878px 0px; }
         .iti-flag.cf {
         height: 14px;
         background-position: -900px 0px; }
         .iti-flag.cg {
         height: 14px;
         background-position: -922px 0px; }
         .iti-flag.ch {
         height: 15px;
         background-position: -944px 0px; }
         .iti-flag.ci {
         height: 14px;
         background-position: -961px 0px; }
         .iti-flag.ck {
         height: 10px;
         background-position: -983px 0px; }
         .iti-flag.cl {
         height: 14px;
         background-position: -1005px 0px; }
         .iti-flag.cm {
         height: 14px;
         background-position: -1027px 0px; }
         .iti-flag.cn {
         height: 14px;
         background-position: -1049px 0px; }
         .iti-flag.co {
         height: 14px;
         background-position: -1071px 0px; }
         .iti-flag.cp {
         height: 14px;
         background-position: -1093px 0px; }
         .iti-flag.cr {
         height: 12px;
         background-position: -1115px 0px; }
         .iti-flag.cu {
         height: 10px;
         background-position: -1137px 0px; }
         .iti-flag.cv {
         height: 12px;
         background-position: -1159px 0px; }
         .iti-flag.cw {
         height: 14px;
         background-position: -1181px 0px; }
         .iti-flag.cx {
         height: 10px;
         background-position: -1203px 0px; }
         .iti-flag.cy {
         height: 13px;
         background-position: -1225px 0px; }
         .iti-flag.cz {
         height: 14px;
         background-position: -1247px 0px; }
         .iti-flag.de {
         height: 12px;
         background-position: -1269px 0px; }
         .iti-flag.dg {
         height: 10px;
         background-position: -1291px 0px; }
         .iti-flag.dj {
         height: 14px;
         background-position: -1313px 0px; }
         .iti-flag.dk {
         height: 15px;
         background-position: -1335px 0px; }
         .iti-flag.dm {
         height: 10px;
         background-position: -1357px 0px; }
         .iti-flag.do {
         height: 13px;
         background-position: -1379px 0px; }
         .iti-flag.dz {
         height: 14px;
         background-position: -1401px 0px; }
         .iti-flag.ea {
         height: 14px;
         background-position: -1423px 0px; }
         .iti-flag.ec {
         height: 14px;
         background-position: -1445px 0px; }
         .iti-flag.ee {
         height: 13px;
         background-position: -1467px 0px; }
         .iti-flag.eg {
         height: 14px;
         background-position: -1489px 0px; }
         .iti-flag.eh {
         height: 10px;
         background-position: -1511px 0px; }
         .iti-flag.er {
         height: 10px;
         background-position: -1533px 0px; }
         .iti-flag.es {
         height: 14px;
         background-position: -1555px 0px; }
         .iti-flag.et {
         height: 10px;
         background-position: -1577px 0px; }
         .iti-flag.eu {
         height: 14px;
         background-position: -1599px 0px; }
         .iti-flag.fi {
         height: 12px;
         background-position: -1621px 0px; }
         .iti-flag.fj {
         height: 10px;
         background-position: -1643px 0px; }
         .iti-flag.fk {
         height: 10px;
         background-position: -1665px 0px; }
         .iti-flag.fm {
         height: 11px;
         background-position: -1687px 0px; }
         .iti-flag.fo {
         height: 15px;
         background-position: -1709px 0px; }
         .iti-flag.fr {
         height: 14px;
         background-position: -1731px 0px; }
         .iti-flag.ga {
         height: 15px;
         background-position: -1753px 0px; }
         .iti-flag.gb {
         height: 10px;
         background-position: -1775px 0px; }
         .iti-flag.gd {
         height: 12px;
         background-position: -1797px 0px; }
         .iti-flag.ge {
         height: 14px;
         background-position: -1819px 0px; }
         .iti-flag.gf {
         height: 14px;
         background-position: -1841px 0px; }
         .iti-flag.gg {
         height: 14px;
         background-position: -1863px 0px; }
         .iti-flag.gh {
         height: 14px;
         background-position: -1885px 0px; }
         .iti-flag.gi {
         height: 10px;
         background-position: -1907px 0px; }
         .iti-flag.gl {
         height: 14px;
         background-position: -1929px 0px; }
         .iti-flag.gm {
         height: 14px;
         background-position: -1951px 0px; }
         .iti-flag.gn {
         height: 14px;
         background-position: -1973px 0px; }
         .iti-flag.gp {
         height: 14px;
         background-position: -1995px 0px; }
         .iti-flag.gq {
         height: 14px;
         background-position: -2017px 0px; }
         .iti-flag.gr {
         height: 14px;
         background-position: -2039px 0px; }
         .iti-flag.gs {
         height: 10px;
         background-position: -2061px 0px; }
         .iti-flag.gt {
         height: 13px;
         background-position: -2083px 0px; }
         .iti-flag.gu {
         height: 11px;
         background-position: -2105px 0px; }
         .iti-flag.gw {
         height: 10px;
         background-position: -2127px 0px; }
         .iti-flag.gy {
         height: 12px;
         background-position: -2149px 0px; }
         .iti-flag.hk {
         height: 14px;
         background-position: -2171px 0px; }
         .iti-flag.hm {
         height: 10px;
         background-position: -2193px 0px; }
         .iti-flag.hn {
         height: 10px;
         background-position: -2215px 0px; }
         .iti-flag.hr {
         height: 10px;
         background-position: -2237px 0px; }
         .iti-flag.ht {
         height: 12px;
         background-position: -2259px 0px; }
         .iti-flag.hu {
         height: 10px;
         background-position: -2281px 0px; }
         .iti-flag.ic {
         height: 14px;
         background-position: -2303px 0px; }
         .iti-flag.id {
         height: 14px;
         background-position: -2325px 0px; }
         .iti-flag.ie {
         height: 10px;
         background-position: -2347px 0px; }
         .iti-flag.il {
         height: 15px;
         background-position: -2369px 0px; }
         .iti-flag.im {
         height: 10px;
         background-position: -2391px 0px; }
         .iti-flag.in {
         height: 14px;
         background-position: -2413px 0px; }
         .iti-flag.io {
         height: 10px;
         background-position: -2435px 0px; }
         .iti-flag.iq {
         height: 14px;
         background-position: -2457px 0px; }
         .iti-flag.ir {
         height: 12px;
         background-position: -2479px 0px; }
         .iti-flag.is {
         height: 15px;
         background-position: -2501px 0px; }
         .iti-flag.it {
         height: 14px;
         background-position: -2523px 0px; }
         .iti-flag.je {
         height: 12px;
         background-position: -2545px 0px; }
         .iti-flag.jm {
         height: 10px;
         background-position: -2567px 0px; }
         .iti-flag.jo {
         height: 10px;
         background-position: -2589px 0px; }
         .iti-flag.jp {
         height: 14px;
         background-position: -2611px 0px; }
         .iti-flag.ke {
         height: 14px;
         background-position: -2633px 0px; }
         .iti-flag.kg {
         height: 12px;
         background-position: -2655px 0px; }
         .iti-flag.kh {
         height: 13px;
         background-position: -2677px 0px; }
         .iti-flag.ki {
         height: 10px;
         background-position: -2699px 0px; }
         .iti-flag.km {
         height: 12px;
         background-position: -2721px 0px; }
         .iti-flag.kn {
         height: 14px;
         background-position: -2743px 0px; }
         .iti-flag.kp {
         height: 10px;
         background-position: -2765px 0px; }
         .iti-flag.kr {
         height: 14px;
         background-position: -2787px 0px; }
         .iti-flag.kw {
         height: 10px;
         background-position: -2809px 0px; }
         .iti-flag.ky {
         height: 10px;
         background-position: -2831px 0px; }
         .iti-flag.kz {
         height: 10px;
         background-position: -2853px 0px; }
         .iti-flag.la {
         height: 14px;
         background-position: -2875px 0px; }
         .iti-flag.lb {
         height: 14px;
         background-position: -2897px 0px; }
         .iti-flag.lc {
         height: 10px;
         background-position: -2919px 0px; }
         .iti-flag.li {
         height: 12px;
         background-position: -2941px 0px; }
         .iti-flag.lk {
         height: 10px;
         background-position: -2963px 0px; }
         .iti-flag.lr {
         height: 11px;
         background-position: -2985px 0px; }
         .iti-flag.ls {
         height: 14px;
         background-position: -3007px 0px; }
         .iti-flag.lt {
         height: 12px;
         background-position: -3029px 0px; }
         .iti-flag.lu {
         height: 12px;
         background-position: -3051px 0px; }
         .iti-flag.lv {
         height: 10px;
         background-position: -3073px 0px; }
         .iti-flag.ly {
         height: 10px;
         background-position: -3095px 0px; }
         .iti-flag.ma {
         height: 14px;
         background-position: -3117px 0px; }
         .iti-flag.mc {
         height: 15px;
         background-position: -3139px 0px; }
         .iti-flag.md {
         height: 10px;
         background-position: -3160px 0px; }
         .iti-flag.me {
         height: 10px;
         background-position: -3182px 0px; }
         .iti-flag.mf {
         height: 14px;
         background-position: -3204px 0px; }
         .iti-flag.mg {
         height: 14px;
         background-position: -3226px 0px; }
         .iti-flag.mh {
         height: 11px;
         background-position: -3248px 0px; }
         .iti-flag.mk {
         height: 10px;
         background-position: -3270px 0px; }
         .iti-flag.ml {
         height: 14px;
         background-position: -3292px 0px; }
         .iti-flag.mm {
         height: 14px;
         background-position: -3314px 0px; }
         .iti-flag.mn {
         height: 10px;
         background-position: -3336px 0px; }
         .iti-flag.mo {
         height: 14px;
         background-position: -3358px 0px; }
         .iti-flag.mp {
         height: 10px;
         background-position: -3380px 0px; }
         .iti-flag.mq {
         height: 14px;
         background-position: -3402px 0px; }
         .iti-flag.mr {
         height: 14px;
         background-position: -3424px 0px; }
         .iti-flag.ms {
         height: 10px;
         background-position: -3446px 0px; }
         .iti-flag.mt {
         height: 14px;
         background-position: -3468px 0px; }
         .iti-flag.mu {
         height: 14px;
         background-position: -3490px 0px; }
         .iti-flag.mv {
         height: 14px;
         background-position: -3512px 0px; }
         .iti-flag.mw {
         height: 14px;
         background-position: -3534px 0px; }
         .iti-flag.mx {
         height: 12px;
         background-position: -3556px 0px; }
         .iti-flag.my {
         height: 10px;
         background-position: -3578px 0px; }
         .iti-flag.mz {
         height: 14px;
         background-position: -3600px 0px; }
         .iti-flag.na {
         height: 14px;
         background-position: -3622px 0px; }
         .iti-flag.nc {
         height: 10px;
         background-position: -3644px 0px; }
         .iti-flag.ne {
         height: 15px;
         background-position: -3666px 0px; }
         .iti-flag.nf {
         height: 10px;
         background-position: -3686px 0px; }
         .iti-flag.ng {
         height: 10px;
         background-position: -3708px 0px; }
         .iti-flag.ni {
         height: 12px;
         background-position: -3730px 0px; }
         .iti-flag.nl {
         height: 14px;
         background-position: -3752px 0px; }
         .iti-flag.no {
         height: 15px;
         background-position: -3774px 0px; }
         .iti-flag.np {
         height: 15px;
         background-position: -3796px 0px; }
         .iti-flag.nr {
         height: 10px;
         background-position: -3811px 0px; }
         .iti-flag.nu {
         height: 10px;
         background-position: -3833px 0px; }
         .iti-flag.nz {
         height: 10px;
         background-position: -3855px 0px; }
         .iti-flag.om {
         height: 10px;
         background-position: -3877px 0px; }
         .iti-flag.pa {
         height: 14px;
         background-position: -3899px 0px; }
         .iti-flag.pe {
         height: 14px;
         background-position: -3921px 0px; }
         .iti-flag.pf {
         height: 14px;
         background-position: -3943px 0px; }
         .iti-flag.pg {
         height: 15px;
         background-position: -3965px 0px; }
         .iti-flag.ph {
         height: 10px;
         background-position: -3987px 0px; }
         .iti-flag.pk {
         height: 14px;
         background-position: -4009px 0px; }
         .iti-flag.pl {
         height: 13px;
         background-position: -4031px 0px; }
         .iti-flag.pm {
         height: 14px;
         background-position: -4053px 0px; }
         .iti-flag.pn {
         height: 10px;
         background-position: -4075px 0px; }
         .iti-flag.pr {
         height: 14px;
         background-position: -4097px 0px; }
         .iti-flag.ps {
         height: 10px;
         background-position: -4119px 0px; }
         .iti-flag.pt {
         height: 14px;
         background-position: -4141px 0px; }
         .iti-flag.pw {
         height: 13px;
         background-position: -4163px 0px; }
         .iti-flag.py {
         height: 11px;
         background-position: -4185px 0px; }
         .iti-flag.qa {
         height: 8px;
         background-position: -4207px 0px; }
         .iti-flag.re {
         height: 14px;
         background-position: -4229px 0px; }
         .iti-flag.ro {
         height: 14px;
         background-position: -4251px 0px; }
         .iti-flag.rs {
         height: 14px;
         background-position: -4273px 0px; }
         .iti-flag.ru {
         height: 14px;
         background-position: -4295px 0px; }
         .iti-flag.rw {
         height: 14px;
         background-position: -4317px 0px; }
         .iti-flag.sa {
         height: 14px;
         background-position: -4339px 0px; }
         .iti-flag.sb {
         height: 10px;
         background-position: -4361px 0px; }
         .iti-flag.sc {
         height: 10px;
         background-position: -4383px 0px; }
         .iti-flag.sd {
         height: 10px;
         background-position: -4405px 0px; }
         .iti-flag.se {
         height: 13px;
         background-position: -4427px 0px; }
         .iti-flag.sg {
         height: 14px;
         background-position: -4449px 0px; }
         .iti-flag.sh {
         height: 10px;
         background-position: -4471px 0px; }
         .iti-flag.si {
         height: 10px;
         background-position: -4493px 0px; }
         .iti-flag.sj {
         height: 15px;
         background-position: -4515px 0px; }
         .iti-flag.sk {
         height: 14px;
         background-position: -4537px 0px; }
         .iti-flag.sl {
         height: 14px;
         background-position: -4559px 0px; }
         .iti-flag.sm {
         height: 15px;
         background-position: -4581px 0px; }
         .iti-flag.sn {
         height: 14px;
         background-position: -4603px 0px; }
         .iti-flag.so {
         height: 14px;
         background-position: -4625px 0px; }
         .iti-flag.sr {
         height: 14px;
         background-position: -4647px 0px; }
         .iti-flag.ss {
         height: 10px;
         background-position: -4669px 0px; }
         .iti-flag.st {
         height: 10px;
         background-position: -4691px 0px; }
         .iti-flag.sv {
         height: 12px;
         background-position: -4713px 0px; }
         .iti-flag.sx {
         height: 14px;
         background-position: -4735px 0px; }
         .iti-flag.sy {
         height: 14px;
         background-position: -4757px 0px; }
         .iti-flag.sz {
         height: 14px;
         background-position: -4779px 0px; }
         .iti-flag.ta {
         height: 10px;
         background-position: -4801px 0px; }
         .iti-flag.tc {
         height: 10px;
         background-position: -4823px 0px; }
         .iti-flag.td {
         height: 14px;
         background-position: -4845px 0px; }
         .iti-flag.tf {
         height: 14px;
         background-position: -4867px 0px; }
         .iti-flag.tg {
         height: 13px;
         background-position: -4889px 0px; }
         .iti-flag.th {
         height: 14px;
         background-position: -4911px 0px; }
         .iti-flag.tj {
         height: 10px;
         background-position: -4933px 0px; }
         .iti-flag.tk {
         height: 10px;
         background-position: -4955px 0px; }
         .iti-flag.tl {
         height: 10px;
         background-position: -4977px 0px; }
         .iti-flag.tm {
         height: 14px;
         background-position: -4999px 0px; }
         .iti-flag.tn {
         height: 14px;
         background-position: -5021px 0px; }
         .iti-flag.to {
         height: 10px;
         background-position: -5043px 0px; }
         .iti-flag.tr {
         height: 14px;
         background-position: -5065px 0px; }
         .iti-flag.tt {
         height: 12px;
         background-position: -5087px 0px; }
         .iti-flag.tv {
         height: 10px;
         background-position: -5109px 0px; }
         .iti-flag.tw {
         height: 14px;
         background-position: -5131px 0px; }
         .iti-flag.tz {
         height: 14px;
         background-position: -5153px 0px; }
         .iti-flag.ua {
         height: 14px;
         background-position: -5175px 0px; }
         .iti-flag.ug {
         height: 14px;
         background-position: -5197px 0px; }
         .iti-flag.um {
         height: 11px;
         background-position: -5219px 0px; }
         .iti-flag.us {
         height: 11px;
         background-position: -5241px 0px; }
         .iti-flag.uy {
         height: 14px;
         background-position: -5263px 0px; }
         .iti-flag.uz {
         height: 10px;
         background-position: -5285px 0px; }
         .iti-flag.va {
         height: 15px;
         background-position: -5307px 0px; }
         .iti-flag.vc {
         height: 14px;
         background-position: -5324px 0px; }
         .iti-flag.ve {
         height: 14px;
         background-position: -5346px 0px; }
         .iti-flag.vg {
         height: 10px;
         background-position: -5368px 0px; }
         .iti-flag.vi {
         height: 14px;
         background-position: -5390px 0px; }
         .iti-flag.vn {
         height: 14px;
         background-position: -5412px 0px; }
         .iti-flag.vu {
         height: 12px;
         background-position: -5434px 0px; }
         .iti-flag.wf {
         height: 14px;
         background-position: -5456px 0px; }
         .iti-flag.ws {
         height: 10px;
         background-position: -5478px 0px; }
         .iti-flag.xk {
         height: 15px;
         background-position: -5500px 0px; }
         .iti-flag.ye {
         height: 14px;
         background-position: -5522px 0px; }
         .iti-flag.yt {
         height: 14px;
         background-position: -5544px 0px; }
         .iti-flag.za {
         height: 14px;
         background-position: -5566px 0px; }
         .iti-flag.zm {
         height: 14px;
         background-position: -5588px 0px; }
         .iti-flag.zw {
         height: 10px;
         background-position: -5610px 0px; }
         .iti-flag {
         width: 20px;
         height: 15px;
         box-shadow: 0px 0px 1px 0px #888;
         background-image: url('//bv3.hotelrunner.com/flags.ae33acae404631e997ef.png');
         background-repeat: no-repeat;
         background-color: #DBDBDB;
         background-position: 20px 0; }
         @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
         .iti-flag {
         background-image: url('//bv3.hotelrunner.com/flags@2x.f2c77a6b7e26ff160fdb.png'); } }
         .iti-flag.np {
         background-color: transparent; }
         /* based on angular-toastr css https://github.com/Foxandxss/angular-toastr/blob/cb508fe6801d6b288d3afc525bb40fee1b101650/dist/angular-toastr.css */
         /* position */
         .toast-center-center {
         top: 50%;
         left: 50%;
         -webkit-transform: translate(-50%, -50%);
         transform: translate(-50%, -50%);
         }
         .toast-top-center {
         top: 0;
         right: 0;
         width: 100%;
         }
         .toast-bottom-center {
         bottom: 0;
         right: 0;
         width: 100%;
         }
         .toast-top-full-width {
         top: 0;
         right: 0;
         width: 100%;
         }
         .toast-bottom-full-width {
         bottom: 0;
         right: 0;
         width: 100%;
         }
         .toast-top-left {
         top: 12px;
         left: 12px;
         }
         .toast-top-right {
         top: 12px;
         right: 12px;
         }
         .toast-bottom-right {
         right: 12px;
         bottom: 12px;
         }
         .toast-bottom-left {
         bottom: 12px;
         left: 12px;
         }
         /* toast styles */
         .toast-title {
         font-weight: bold;
         }
         .toast-message {
         word-wrap: break-word;
         }
         .toast-message a,
         .toast-message label {
         color: #FFFFFF;
         }
         /* .toast-message a:hover {
         color: #CCCCCC;
         text-decoration: none;
         } */
         .toast-close-button {
         position: relative;
         right: -0.3em;
         top: -0.3em;
         float: right;
         font-size: 20px;
         font-weight: bold;
         color: #FFFFFF;
         text-shadow: 0 1px 0 #ffffff;
         /* opacity: 0.8; */
         }
         .toast-close-button:hover,
         .toast-close-button:focus {
         color: #000000;
         text-decoration: none;
         cursor: pointer;
         opacity: 0.4;
         }
         /*Additional properties for button version
         iOS requires the button element instead of an anchor tag.
         If you want the anchor version, it requires `href="#"`.*/
         button.toast-close-button {
         padding: 0;
         cursor: pointer;
         background: transparent;
         border: 0;
         }
         .toast-container {
         pointer-events: none;
         position: fixed;
         z-index: 999999;
         }
         .toast-container * {
         box-sizing: border-box;
         }
         .toast-container .toast {
         position: relative;
         overflow: hidden;
         margin: 0 0 6px;
         padding: 15px 15px 15px 50px;
         width: 300px;
         border-radius: 3px 3px 3px 3px;
         background-position: 15px center;
         background-repeat: no-repeat;
         background-size: 24px;
         box-shadow: 0 0 12px #999999;
         color: #FFFFFF;
         }
         .toast-container .toast:hover {
         box-shadow: 0 0 12px #000000;
         opacity: 1;
         cursor: pointer;
         }
         /* https://github.com/FortAwesome/Font-Awesome-Pro/blob/master/advanced-options/raw-svg/regular/info-circle.svg */
         .toast-info {
         background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' width='512' height='512'%3E%3Cpath fill='rgb(255,255,255)' d='M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z'/%3E%3C/svg%3E");
         }
         /* https://github.com/FortAwesome/Font-Awesome-Pro/blob/master/advanced-options/raw-svg/regular/times-circle.svg */
         .toast-error {
         background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' width='512' height='512'%3E%3Cpath fill='rgb(255,255,255)' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z'/%3E%3C/svg%3E");
         }
         /* https://github.com/FortAwesome/Font-Awesome-Pro/blob/master/advanced-options/raw-svg/regular/check.svg */
         .toast-success {
         background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' width='512' height='512'%3E%3Cpath fill='rgb(255,255,255)' d='M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z'/%3E%3C/svg%3E");
         }
         /* https://github.com/FortAwesome/Font-Awesome-Pro/blob/master/advanced-options/raw-svg/regular/exclamation-triangle.svg */
         .toast-warning {
         background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512' width='576' height='512'%3E%3Cpath fill='rgb(255,255,255)' d='M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z'/%3E%3C/svg%3E");
         }
         .toast-container.toast-top-center .toast,
         .toast-container.toast-bottom-center .toast {
         width: 300px;
         margin-left: auto;
         margin-right: auto;
         }
         .toast-container.toast-top-full-width .toast,
         .toast-container.toast-bottom-full-width .toast {
         width: 96%;
         margin-left: auto;
         margin-right: auto;
         }
         .toast {
         background-color: #030303;
         pointer-events: auto;
         }
         .toast-success {
         background-color: #51A351;
         }
         .toast-error {
         background-color: #BD362F;
         }
         .toast-info {
         background-color: #2F96B4;
         }
         .toast-warning {
         background-color: #F89406;
         }
         .toast-progress {
         position: absolute;
         left: 0;
         bottom: 0;
         height: 4px;
         background-color: #000000;
         opacity: 0.4;
         }
         /* Responsive Design */
         @media all and (max-width: 240px) {
         .toast-container .toast.div {
         padding: 8px 8px 8px 50px;
         width: 11em;
         }
         .toast-container .toast-close-button {
         right: -0.2em;
         top: -0.2em;
         }
         }
         @media all and (min-width: 241px) and (max-width: 480px) {
         .toast-container .toast.div {
         padding: 8px 8px 8px 50px;
         width: 18em;
         }
         .toast-container .toast-close-button {
         right: -0.2em;
         top: -0.2em;
         }
         }
         @media all and (min-width: 481px) and (max-width: 768px) {
         .toast-container .toast.div {
         padding: 15px 15px 15px 50px;
         width: 25em;
         }
         }
         /* =============================================================
         * BASE STYLES
         * ============================================================*/
         .datepicker {
         box-sizing: border-box;
         overflow: hidden;
         position: absolute;
         width: 260px;
         z-index: 1;
         margin-top: 8px;
         }
         .datepicker__inner {
         overflow: hidden;
         }
         .datepicker__month {
         border-collapse: collapse;
         text-align: center;
         width: 100%;
         }
         .datepicker__month--month2 {
         display: none;
         }
         .datepicker__month-day--valid {
         cursor: pointer;
         }
         .datepicker__month-day--lastMonth,
         .datepicker__month-day--nextMonth {
         visibility: hidden;
         }
         .datepicker__month-button {
         cursor: pointer;
         }
         .datepicker__info--feedback {
         display: none;
         }
         .datepicker__info--error,
         .datepicker__info--help {
         display: block;
         }
         .datepicker__close-button {
         cursor: pointer;
         }
         .datepicker__tooltip {
         position: absolute;
         }
         /* =============================================================
         * THEME
         * ============================================================*/
         .datepicker {
         background-color: #fff;
         border-radius: 0px;
         box-shadow: 8px 8px 40px 5px rgba(0, 0, 0, 0.08);
         color: #484c55;
         /* font-family: 'Helvetica', 'Helvetica Neue', 'Arial', sans-serif; */
         font-size: 14px;
         line-height: 14px;
         }
         .datepicker__inner {
         padding: 20px;
         }
         .datepicker__month {
         font-size: 12px;
         }
         .datepicker__month-caption {
         border-bottom: 1px solid #dcdcdc;
         height: 2.5em;
         vertical-align: middle;
         }
         .datepicker__month-name {
         /* text-transform: uppercase; */
         }
         .datepicker__week-days {
         height: 2em;
         vertical-align: middle;
         }
         .datepicker__week-name {
         font-size: 11px;
         font-weight: 400;
         /* text-transform: uppercase; */
         }
         .datepicker__month-day {
         transition-duration: 0.2s;
         transition-property: color, background-color, border-color;
         transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
         color: #acb2c1;
         padding: 9px 7px;
         }
         .datepicker__month-day--no-check-in {
         position: relative;
         }
         .datepicker__month-day--no-check-in:after {
         background-color: rgba(255, 0, 0, 0.1);
         bottom: 0;
         content: '';
         display: block;
         left: 0;
         position: absolute;
         right: 50%;
         top: 0;
         z-index: -1;
         }
         .datepicker__month-day--no-check-out {
         position: relative;
         }
         .datepicker__month-day--no-check-out:after {
         background-color: rgba(255, 0, 0, 0.1);
         bottom: 0;
         content: '';
         display: block;
         left: 50%;
         position: absolute;
         right: 0;
         top: 0;
         z-index: -1;
         }
         .datepicker__month-day--invalid {
         color: #e8ebf4;
         }
         .datepicker__month-day--disabled {
         color: #e8ebf4;
         position: relative;
         }
         .datepicker__month-day--disabled:after {
         content: '\00d7';
         left: 50%;
         position: absolute;
         color: red;
         font-size: 16px;
         top: 50%;
         -webkit-transform: translate(-50%, -50%);
         transform: translate(-50%, -50%);
         }
         .datepicker__month-day--selected {
         background-color: var(--gray300);
         color: #757575;
         /* opacity: 0.5;
         filter: alpha(opacity=50); /* For IE8 and earlier */
         }
         .datepicker__month-day--selected:after {
         display: none;
         }
         .datepicker__month-day--hovering {
         background-color: var(--gray300);
         color: #757575;
         /* opacity: 0.5;
         filter: alpha(opacity=50); /* For IE8 and earlier */
         }
         .datepicker__month-day--today {
         /* background-color: #6391f9;
         color: #fff; */
         font-weight: bold;
         }
         .datepicker__month-day--first-day-selected,
         .datepicker__month-day--last-day-selected {
         background-color: var(--primary);
         color: #fff;
         box-shadow: 0 0 5px 1px rgba(66, 75, 83, 0.4);
         /* opacity: 1;
         filter: alpha(opacity=100); /* For IE8 and earlier */
         }
         .datepicker__month-day--last-day-selected {
         background-color: var(--secondary);
         }
         .datepicker__month-day--last-day-selected:after {
         content: none;
         }
         .datepicker__month-button {
         transition-duration: 0.2s;
         transition-property: color, background-color, border-color;
         transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
         /* background-color: var(--navbarBackground); */
         border-radius: 4px;
         color: #9da6b8;
         display: inline-block;
         padding: 5px 10px;
         }
         .datepicker__month-button:hover {
         background-color: var(--primary);
         color: #fff;
         }
         .datepicker__topbar {
         margin-bottom: 20px;
         position: relative;
         text-align: left;
         }
         .datepicker__info-text {
         font-size: 13px;
         }
         .datepicker__info--selected {
         font-size: 11px;
         /* text-transform: uppercase; */
         }
         .datepicker__info--selected-label {
         color: #acb2c1;
         }
         .datepicker__info-text--selected-days {
         font-size: 11px;
         font-style: normal;
         }
         .datepicker__info--error {
         color: red;
         font-size: 13px;
         font-style: italic;
         }
         .datepicker__info--help {
         color: #acb2c1;
         font-style: italic;
         }
         .datepicker__close-button {
         transition-duration: 0.2s;
         transition-property: color, background-color, border-color;
         transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
         background-color: var(--primary);
         border-radius: 4px;
         border: none;
         box-shadow: none;
         font-size: 10px;
         color: #fff;
         margin-top: 20px;
         padding: 7px 13px;
         text-decoration: none;
         text-shadow: none;
         /* text-transform: uppercase; */
         }
         .datepicker__close-button:hover {
         background-color: #484c55;
         color: #fff;
         }
         .datepicker__tooltip {
         background-color: #ffe684;
         border-radius: 2px;
         font-size: 11px;
         margin-top: -5px;
         padding: 5px 10px;
         }
         .datepicker__tooltip:after {
         border-left: 4px solid transparent;
         border-right: 4px solid transparent;
         border-top: 4px solid #ffe684;
         bottom: -4px;
         content: '';
         left: 50%;
         margin-left: -4px;
         position: absolute;
         }
         @media (max-width: 782px) {
         .datepicker__topbar { display: none; }
         }
         @media (min-width: 320px) {
         .datepicker {
         width: 300px;
         margin-left: -0.50rem;
         }
         .datepicker:before {
         left: 20px;
         }
         .datepicker.endDate:before {
         left: 203px;
         }
         }
         @media (min-width: 480px) {
         .datepicker {
         width: 460px;
         }
         .datepicker__months {
         overflow: hidden;
         }
         .datepicker__month {
         width: 200px;
         }
         .datepicker__month--month1 {
         float: left;
         }
         .datepicker__month--month2 {
         display: table;
         float: right;
         }
         .datepicker__month-button--disabled {
         visibility: hidden;
         }
         .datepicker__months {
         position: relative;
         }
         .datepicker__months:before {
         background: #dcdcdc;
         bottom: 0;
         content: '';
         display: block;
         left: 50%;
         position: absolute;
         top: 0;
         width: 1px;
         }
         .datepicker:before {
         left: 187px;
         }
         .datepicker.endDate:before {
         left: 376px;
         }
         }
         @media (min-width: 768px) {
         .datepicker {
         width: 560px;
         margin-left: -66px;
         }
         .datepicker__month {
         width: 240px;
         }
         .datepicker__close-button {
         margin-top: 0;
         position: absolute;
         right: 0;
         top: 0;
         }
         .datepicker:before {
         left: 140px;
         }
         .datepicker.endDate:before {
         left: 300px;
         }
         }
         @media (min-width: 992px) {
         .datepicker {
         margin-left: -43px;
         }
         .datepicker:before {
         left: 118px;
         }
         .datepicker.endDate:before {
         left: 308px;
         }
         }
         @media (min-width: 1200px) {
         .datepicker {
         margin-left: -43px;
         }
         .datepicker:before {
         left: 118px;
         }
         .datepicker.endDate:before {
         left: 308px;
         }
         }
         .datepicker:before {
         content: " ";
         display: block;
         position: absolute;
         bottom: 100%;
         border-left: 15px solid transparent;
         border-right: 15px solid transparent;
         border-bottom: 15px solid var(--primary);
         transition: all 1s ease;
         }
         @font-face {
         font-family: mallory;
         src: url('//bv3.hotelrunner.com/mallory-light-webfont-v01.0c432d9f0f261d3a406b.eot');
         src: url('//bv3.hotelrunner.com/mallory-light-webfont-v01.0c432d9f0f261d3a406b.eot#iefix') format("embedded-opentype"), url('//bv3.hotelrunner.com/mallory-light-webfont-v01.93f441bab86ee3e21d43.woff2') format("woff2"), url('//bv3.hotelrunner.com/mallory-light-webfont-v01.588aaa9d420a40fcf14d.woff') format("woff"), url('//bv3.hotelrunner.com/mallory-light-webfont-v01.56c7c3262419f1998e17.ttf') format("truetype");
         font-weight: 200;
         font-style: normal; }
         @font-face {
         font-family: mallory;
         src: url('//bv3.hotelrunner.com/Mallory-Book.0d8742b4878b87b96b9c.eot');
         src: url('//bv3.hotelrunner.com/Mallory-Book.0d8742b4878b87b96b9c.eot#iefix') format("embedded-opentype"), url('//bv3.hotelrunner.com/Mallory-Book.9da57a7cb768ee379fdd.woff2') format("woff2"), url('//bv3.hotelrunner.com/Mallory-Book.1311291b66a9945865aa.woff') format("woff"), url('//bv3.hotelrunner.com/Mallory-Book.e25b4a890d6d034eabdb.ttf') format("truetype");
         font-weight: 400;
         font-style: normal; }
         @font-face {
         font-family: mallory;
         src: url('//bv3.hotelrunner.com/mallory-medium.69479cce1a7107980dfc.eot');
         src: url('//bv3.hotelrunner.com/mallory-medium.69479cce1a7107980dfc.eot#iefix') format("embedded-opentype"), url('//bv3.hotelrunner.com/mallory-medium.3211aebce77f169fe755.woff2') format("woff2"), url('//bv3.hotelrunner.com/mallory-medium.1f097eaf35aa2097619b.woff') format("woff"), url('//bv3.hotelrunner.com/mallory-medium.2f10bae4cf5996a16d6f.ttf') format("truetype");
         font-weight: 700;
         font-style: normal; }
         
         :root {
         --blue: #007bff;
         --indigo: #6610f2;
         --purple: #6f42c1;
         --pink: #e83e8c;
         --red: #dc3545;
         --orange: #fd7e14;
         --yellow: #ffc107;
         --green: #28a745;
         --teal: #20c997;
         --cyan: #17a2b8;
         --white: #fff;
         --gray: #6c757d;
         --gray-dark: #343a40;
         --primary: #007bff;
         --secondary: #6c757d;
         --success: #28a745;
         --info: #17a2b8;
         --warning: #ffc107;
         --danger: #dc3545;
         --light: #f8f9fa;
         --dark: #343a40;
         --breakpoint-xs: 0;
         --breakpoint-sm: 576px;
         --breakpoint-md: 768px;
         --breakpoint-lg: 992px;
         --breakpoint-xl: 1200px;
         --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
         --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }
         *,
         *::before,
         *::after {
         box-sizing: border-box; }
         html {
         font-family: sans-serif;
         line-height: 1.15;
         -webkit-text-size-adjust: 100%;
         -ms-text-size-adjust: 100%;
         -ms-overflow-style: scrollbar;
         -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }
         @-ms-viewport {
         width: device-width; }
         article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
         display: block; }
         body {
         margin: 0;
         font-size: 1rem;
         font-weight: 400;
         line-height: 1.5;
         color: #212529;
         text-align: left;
         background-color: #fff; }
         [tabindex="-1"]:focus {
         outline: 0 !important; }
         hr {
         box-sizing: content-box;
         height: 0;
         overflow: visible; }
         h1, h2, h3, h4, h5, h6 {
         margin-top: 0;
         margin-bottom: 0.5rem; }
         p {
         margin-top: 0;
         margin-bottom: 1rem; }
         abbr[title],
         abbr[data-original-title] {
         text-decoration: underline;
         -webkit-text-decoration: underline dotted;
         text-decoration: underline dotted;
         cursor: help;
         border-bottom: 0; }
         address {
         margin-bottom: 1rem;
         font-style: normal;
         line-height: inherit; }
         ol,
         ul,
         dl {
         margin-top: 0;
         margin-bottom: 1rem; }
         ol ol,
         ul ul,
         ol ul,
         ul ol {
         margin-bottom: 0; }
         dt {
         font-weight: 700; }
         dd {
         margin-bottom: .5rem;
         margin-left: 0; }
         blockquote {
         margin: 0 0 1rem; }
         dfn {
         font-style: italic; }
         b,
         strong {
         font-weight: bolder; }
         small {
         font-size: 80%; }
         sub,
         sup {
         position: relative;
         font-size: 75%;
         line-height: 0;
         vertical-align: baseline; }
         sub {
         bottom: -.25em; }
         sup {
         top: -.5em; }
         a {
         color: #007bff;
         text-decoration: none;
         background-color: transparent;
         -webkit-text-decoration-skip: objects; }
         a:hover {
         color: #0056b3;
         text-decoration: underline; }
         a:not([href]):not([tabindex]) {
         color: inherit;
         text-decoration: none; }
         a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
         color: inherit;
         text-decoration: none; }
         a:not([href]):not([tabindex]):focus {
         outline: 0; }
         pre,
         code,
         kbd,
         samp {
         font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
         font-size: 1em; }
         pre {
         margin-top: 0;
         margin-bottom: 1rem;
         overflow: auto;
         -ms-overflow-style: scrollbar; }
         figure {
         margin: 0 0 1rem; }
         img {
         vertical-align: middle;
         border-style: none; }
         svg {
         overflow: hidden;
         vertical-align: middle; }
         table {
         border-collapse: collapse; }
         caption {
         padding-top: 0.75rem;
         padding-bottom: 0.75rem;
         color: #6c757d;
         text-align: left;
         caption-side: bottom; }
         th {
         text-align: inherit; }
         label {
         display: inline-block;
         margin-bottom: 0.5rem; }
         button {
         border-radius: 0; }
         button:focus {
         outline: 1px dotted;
         outline: 5px auto -webkit-focus-ring-color; }
         input,
         button,
         select,
         optgroup,
         textarea {
         margin: 0;
         font-family: inherit;
         font-size: inherit;
         line-height: inherit; }
         button,
         input {
         overflow: visible; }
         button,
         select {
         text-transform: none; }
         button,
         html [type="button"],
         [type="reset"],
         [type="submit"] {
         -webkit-appearance: button; }
         button::-moz-focus-inner,
         [type="button"]::-moz-focus-inner,
         [type="reset"]::-moz-focus-inner,
         [type="submit"]::-moz-focus-inner {
         padding: 0;
         border-style: none; }
         input[type="radio"],
         input[type="checkbox"] {
         box-sizing: border-box;
         padding: 0; }
         input[type="date"],
         input[type="time"],
         input[type="datetime-local"],
         input[type="month"] {
         -webkit-appearance: listbox; }
         textarea {
         overflow: auto;
         resize: vertical; }
         fieldset {
         min-width: 0;
         padding: 0;
         margin: 0;
         border: 0; }
         legend {
         display: block;
         width: 100%;
         max-width: 100%;
         padding: 0;
         margin-bottom: .5rem;
         font-size: 1.5rem;
         line-height: inherit;
         color: inherit;
         white-space: normal; }
         progress {
         vertical-align: baseline; }
         [type="number"]::-webkit-inner-spin-button,
         [type="number"]::-webkit-outer-spin-button {
         height: auto; }
         [type="search"] {
         outline-offset: -2px;
         -webkit-appearance: none; }
         [type="search"]::-webkit-search-cancel-button,
         [type="search"]::-webkit-search-decoration {
         -webkit-appearance: none; }
         ::-webkit-file-upload-button {
         font: inherit;
         -webkit-appearance: button; }
         output {
         display: inline-block; }
         summary {
         display: list-item;
         cursor: pointer; }
         template {
         display: none; }
         [hidden] {
         display: none !important; }
         h1, h2, h3, h4, h5, h6,
         .h1, .h2, .h3, .h4, .h5, .h6 {
         margin-bottom: 0.5rem;
         font-family: inherit;
         font-weight: 500;
         line-height: 1.2;
         color: inherit; }
         h1, .h1 {
         font-size: 2.5rem; }
         h2, .h2 {
         font-size: 2rem; }
         h3, .h3 {
         font-size: 1.75rem; }
         h4, .h4 {
         font-size: 1.5rem; }
         h5, .h5 {
         font-size: 1.25rem; }
         h6, .h6 {
         font-size: 1rem; }
         .lead {
         font-size: 1.25rem;
         font-weight: 300; }
         .display-1 {
         font-size: 6rem;
         font-weight: 300;
         line-height: 1.2; }
         .display-2 {
         font-size: 5.5rem;
         font-weight: 300;
         line-height: 1.2; }
         .display-3 {
         font-size: 4.5rem;
         font-weight: 300;
         line-height: 1.2; }
         .display-4 {
         font-size: 3.5rem;
         font-weight: 300;
         line-height: 1.2; }
         hr {
         margin-top: 1rem;
         margin-bottom: 1rem;
         border: 0;
         border-top: 1px solid rgba(0, 0, 0, 0.1); }
         small,
         .small {
         font-size: 80%;
         font-weight: 400; }
         mark,
         .mark {
         padding: 0.2em;
         background-color: #fcf8e3; }
         .list-unstyled {
         padding-left: 0;
         list-style: none; }
         .list-inline {
         padding-left: 0;
         list-style: none; }
         .list-inline-item {
         display: inline-block; }
         .list-inline-item:not(:last-child) {
         margin-right: 0.5rem; }
         .list-inline:hover {
            color: #000!impportant;
         }
         .initialism {
         font-size: 90%;
         text-transform: uppercase; }
         .blockquote {
         margin-bottom: 1rem;
         font-size: 1.25rem; }
         .blockquote-footer {
         display: block;
         font-size: 80%;
         color: #6c757d; }
         .blockquote-footer::before {
         content: "\2014 \00A0"; }
         .img-fluid {
         max-width: 100%;
         height: auto; }
         .img-thumbnail {
         padding: 0.25rem;
         background-color: #fff;
         border: 1px solid #dee2e6;
         border-radius: 0.25rem;
         max-width: 100%;
         height: auto; }
         .figure {
         display: inline-block; }
         .figure-img {
         margin-bottom: 0.5rem;
         line-height: 1; }
         .figure-caption {
         font-size: 90%;
         color: #6c757d; }
         code {
         font-size: 87.5%;
         color: #e83e8c;
         word-break: break-word; }
         a > code {
         color: inherit; }
         kbd {
         padding: 0.2rem 0.4rem;
         font-size: 87.5%;
         color: #fff;
         background-color: #212529;
         border-radius: 0.2rem; }
         kbd kbd {
         padding: 0;
         font-size: 100%;
         font-weight: 700; }
         pre {
         display: block;
         font-size: 87.5%;
         color: #212529; }
         pre code {
         font-size: inherit;
         color: inherit;
         word-break: normal; }
         .pre-scrollable {
         max-height: 340px;
         overflow-y: scroll; }
         .container {
         width: 100%;
         padding-right: 15px;
         padding-left: 15px;
         margin-right: auto;
         margin-left: auto; }
         @media (min-width: 576px) {
         .container {
         max-width: 540px; } }
         @media (min-width: 768px) {
         .container {
         max-width: 720px; } }
         @media (min-width: 992px) {
         .container {
         max-width: 960px; } }
         @media (min-width: 1200px) {
         .container {
         max-width: 1140px; } }
         .container-fluid {
         width: 100%;
         padding-right: 15px;
         padding-left: 15px;
         margin-right: auto;
         margin-left: auto; }
         .row {
         display: flex;
         flex-wrap: wrap;
         margin-right: -15px;
         margin-left: -15px; }
         .no-gutters {
         margin-right: 0;
         margin-left: 0; }
         .no-gutters > .col,
         .no-gutters > [class*="col-"] {
         padding-right: 0;
         padding-left: 0; }
         .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
         .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
         .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
         .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
         .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
         .col-xl-auto {
         position: relative;
         width: 100%;
         min-height: 1px;
         padding-right: 15px;
         padding-left: 15px; }
         .col {
         flex-basis: 0;
         flex-grow: 1;
         max-width: 100%; }
         .col-auto {
         flex: 0 0 auto;
         width: auto;
         max-width: none; }
         .col-1 {
         flex: 0 0 8.33333333%;
         max-width: 8.33333333%; }
         .col-2 {
         flex: 0 0 16.66666667%;
         max-width: 16.66666667%; }
         .col-3 {
         flex: 0 0 25%;
         max-width: 25%; }
         .col-4 {
         flex: 0 0 33.33333333%;
         max-width: 33.33333333%; }
         .col-5 {
         flex: 0 0 41.66666667%;
         max-width: 41.66666667%; }
         .col-6 {
         flex: 0 0 50%;
         max-width: 50%; }
         .col-7 {
         flex: 0 0 58.33333333%;
         max-width: 58.33333333%; }
         .col-8 {
         flex: 0 0 66.66666667%;
         max-width: 66.66666667%; }
         .col-9 {
         flex: 0 0 75%;
         max-width: 75%; }
         .col-10 {
         flex: 0 0 83.33333333%;
         max-width: 83.33333333%; }
         .col-11 {
         flex: 0 0 91.66666667%;
         max-width: 91.66666667%; }
         .col-12 {
         flex: 0 0 100%;
         max-width: 100%; }
         .order-first {
         order: -1; }
         .order-last {
         order: 13; }
         .order-0 {
         order: 0; }
         .order-1 {
         order: 1; }
         .order-2 {
         order: 2; }
         .order-3 {
         order: 3; }
         .order-4 {
         order: 4; }
         .order-5 {
         order: 5; }
         .order-6 {
         order: 6; }
         .order-7 {
         order: 7; }
         .order-8 {
         order: 8; }
         .order-9 {
         order: 9; }
         .order-10 {
         order: 10; }
         .order-11 {
         order: 11; }
         .order-12 {
         order: 12; }
         .offset-1 {
         margin-left: 8.33333333%; }
         .offset-2 {
         margin-left: 16.66666667%; }
         .offset-3 {
         margin-left: 25%; }
         .offset-4 {
         margin-left: 33.33333333%; }
         .offset-5 {
         margin-left: 41.66666667%; }
         .offset-6 {
         margin-left: 50%; }
         .offset-7 {
         margin-left: 58.33333333%; }
         .offset-8 {
         margin-left: 66.66666667%; }
         .offset-9 {
         margin-left: 75%; }
         .offset-10 {
         margin-left: 83.33333333%; }
         .offset-11 {
         margin-left: 91.66666667%; }
         @media (min-width: 576px) {
         .col-sm {
         flex-basis: 0;
         flex-grow: 1;
         max-width: 100%; }
         .col-sm-auto {
         flex: 0 0 auto;
         width: auto;
         max-width: none; }
         .col-sm-1 {
         flex: 0 0 8.33333333%;
         max-width: 8.33333333%; }
         .col-sm-2 {
         flex: 0 0 16.66666667%;
         max-width: 16.66666667%; }
         .col-sm-3 {
         flex: 0 0 25%;
         max-width: 25%; }
         .col-sm-4 {
         flex: 0 0 33.33333333%;
         max-width: 33.33333333%; }
         .col-sm-5 {
         flex: 0 0 41.66666667%;
         max-width: 41.66666667%; }
         .col-sm-6 {
         flex: 0 0 50%;
         max-width: 50%; }
         .col-sm-7 {
         flex: 0 0 58.33333333%;
         max-width: 58.33333333%; }
         .col-sm-8 {
         flex: 0 0 66.66666667%;
         max-width: 66.66666667%; }
         .col-sm-9 {
         flex: 0 0 75%;
         max-width: 75%; }
         .col-sm-10 {
         flex: 0 0 83.33333333%;
         max-width: 83.33333333%; }
         .col-sm-11 {
         flex: 0 0 91.66666667%;
         max-width: 91.66666667%; }
         .col-sm-12 {
         flex: 0 0 100%;
         max-width: 100%; }
         .order-sm-first {
         order: -1; }
         .order-sm-last {
         order: 13; }
         .order-sm-0 {
         order: 0; }
         .order-sm-1 {
         order: 1; }
         .order-sm-2 {
         order: 2; }
         .order-sm-3 {
         order: 3; }
         .order-sm-4 {
         order: 4; }
         .order-sm-5 {
         order: 5; }
         .order-sm-6 {
         order: 6; }
         .order-sm-7 {
         order: 7; }
         .order-sm-8 {
         order: 8; }
         .order-sm-9 {
         order: 9; }
         .order-sm-10 {
         order: 10; }
         .order-sm-11 {
         order: 11; }
         .order-sm-12 {
         order: 12; }
         .offset-sm-0 {
         margin-left: 0; }
         .offset-sm-1 {
         margin-left: 8.33333333%; }
         .offset-sm-2 {
         margin-left: 16.66666667%; }
         .offset-sm-3 {
         margin-left: 25%; }
         .offset-sm-4 {
         margin-left: 33.33333333%; }
         .offset-sm-5 {
         margin-left: 41.66666667%; }
         .offset-sm-6 {
         margin-left: 50%; }
         .offset-sm-7 {
         margin-left: 58.33333333%; }
         .offset-sm-8 {
         margin-left: 66.66666667%; }
         .offset-sm-9 {
         margin-left: 75%; }
         .offset-sm-10 {
         margin-left: 83.33333333%; }
         .offset-sm-11 {
         margin-left: 91.66666667%; } }
         @media (min-width: 768px) {
         .col-md {
         flex-basis: 0;
         flex-grow: 1;
         max-width: 100%; }
         .col-md-auto {
         flex: 0 0 auto;
         width: auto;
         max-width: none; }
         .col-md-1 {
         flex: 0 0 8.33333333%;
         max-width: 8.33333333%; }
         .col-md-2 {
         flex: 0 0 16.66666667%;
         max-width: 16.66666667%; }
         .col-md-3 {
         flex: 0 0 25%;
         max-width: 25%; }
         .col-md-4 {
         flex: 0 0 33.33333333%;
         max-width: 33.33333333%; }
         .col-md-5 {
         flex: 0 0 41.66666667%;
         max-width: 41.66666667%; }
         .col-md-6 {
         flex: 0 0 50%;
         max-width: 50%; }
         .col-md-7 {
         flex: 0 0 58.33333333%;
         max-width: 58.33333333%; }
         .col-md-8 {
         flex: 0 0 66.66666667%;
         max-width: 66.66666667%; }
         .col-md-9 {
         flex: 0 0 75%;
         max-width: 75%; }
         .col-md-10 {
         flex: 0 0 83.33333333%;
         max-width: 83.33333333%; }
         .col-md-11 {
         flex: 0 0 91.66666667%;
         max-width: 91.66666667%; }
         .col-md-12 {
         flex: 0 0 100%;
         max-width: 100%; }
         .order-md-first {
         order: -1; }
         .order-md-last {
         order: 13; }
         .order-md-0 {
         order: 0; }
         .order-md-1 {
         order: 1; }
         .order-md-2 {
         order: 2; }
         .order-md-3 {
         order: 3; }
         .order-md-4 {
         order: 4; }
         .order-md-5 {
         order: 5; }
         .order-md-6 {
         order: 6; }
         .order-md-7 {
         order: 7; }
         .order-md-8 {
         order: 8; }
         .order-md-9 {
         order: 9; }
         .order-md-10 {
         order: 10; }
         .order-md-11 {
         order: 11; }
         .order-md-12 {
         order: 12; }
         .offset-md-0 {
         margin-left: 0; }
         .offset-md-1 {
         margin-left: 8.33333333%; }
         .offset-md-2 {
         margin-left: 16.66666667%; }
         .offset-md-3 {
         margin-left: 25%; }
         .offset-md-4 {
         margin-left: 33.33333333%; }
         .offset-md-5 {
         margin-left: 41.66666667%; }
         .offset-md-6 {
         margin-left: 50%; }
         .offset-md-7 {
         margin-left: 58.33333333%; }
         .offset-md-8 {
         margin-left: 66.66666667%; }
         .offset-md-9 {
         margin-left: 75%; }
         .offset-md-10 {
         margin-left: 83.33333333%; }
         .offset-md-11 {
         margin-left: 91.66666667%; } }
         @media (min-width: 992px) {
         .col-lg {
         flex-basis: 0;
         flex-grow: 1;
         max-width: 100%; }
         .col-lg-auto {
         flex: 0 0 auto;
         width: auto;
         max-width: none; }
         .col-lg-1 {
         flex: 0 0 8.33333333%;
         max-width: 8.33333333%; }
         .col-lg-2 {
         flex: 0 0 16.66666667%;
         max-width: 16.66666667%; }
         .col-lg-3 {
         flex: 0 0 25%;
         max-width: 25%; }
         .col-lg-4 {
         flex: 0 0 33.33333333%;
         max-width: 33.33333333%; }
         .col-lg-5 {
         flex: 0 0 41.66666667%;
         max-width: 41.66666667%; }
         .col-lg-6 {
         flex: 0 0 50%;
         max-width: 50%; }
         .col-lg-7 {
         flex: 0 0 58.33333333%;
         max-width: 58.33333333%; }
         .col-lg-8 {
         flex: 0 0 66.66666667%;
         max-width: 66.66666667%; }
         .col-lg-9 {
         flex: 0 0 75%;
         max-width: 75%; }
         .col-lg-10 {
         flex: 0 0 83.33333333%;
         max-width: 83.33333333%; }
         .col-lg-11 {
         flex: 0 0 91.66666667%;
         max-width: 91.66666667%; }
         .col-lg-12 {
         flex: 0 0 100%;
         max-width: 100%; }
         .order-lg-first {
         order: -1; }
         .order-lg-last {
         order: 13; }
         .order-lg-0 {
         order: 0; }
         .order-lg-1 {
         order: 1; }
         .order-lg-2 {
         order: 2; }
         .order-lg-3 {
         order: 3; }
         .order-lg-4 {
         order: 4; }
         .order-lg-5 {
         order: 5; }
         .order-lg-6 {
         order: 6; }
         .order-lg-7 {
         order: 7; }
         .order-lg-8 {
         order: 8; }
         .order-lg-9 {
         order: 9; }
         .order-lg-10 {
         order: 10; }
         .order-lg-11 {
         order: 11; }
         .order-lg-12 {
         order: 12; }
         .offset-lg-0 {
         margin-left: 0; }
         .offset-lg-1 {
         margin-left: 8.33333333%; }
         .offset-lg-2 {
         margin-left: 16.66666667%; }
         .offset-lg-3 {
         margin-left: 25%; }
         .offset-lg-4 {
         margin-left: 33.33333333%; }
         .offset-lg-5 {
         margin-left: 41.66666667%; }
         .offset-lg-6 {
         margin-left: 50%; }
         .offset-lg-7 {
         margin-left: 58.33333333%; }
         .offset-lg-8 {
         margin-left: 66.66666667%; }
         .offset-lg-9 {
         margin-left: 75%; }
         .offset-lg-10 {
         margin-left: 83.33333333%; }
         .offset-lg-11 {
         margin-left: 91.66666667%; } }
         @media (min-width: 1200px) {
         .col-xl {
         flex-basis: 0;
         flex-grow: 1;
         max-width: 100%; }
         .col-xl-auto {
         flex: 0 0 auto;
         width: auto;
         max-width: none; }
         .col-xl-1 {
         flex: 0 0 8.33333333%;
         max-width: 8.33333333%; }
         .col-xl-2 {
         flex: 0 0 16.66666667%;
         max-width: 16.66666667%; }
         .col-xl-3 {
         flex: 0 0 25%;
         max-width: 25%; }
         .col-xl-4 {
         flex: 0 0 33.33333333%;
         max-width: 33.33333333%; }
         .col-xl-5 {
         flex: 0 0 41.66666667%;
         max-width: 41.66666667%; }
         .col-xl-6 {
         flex: 0 0 50%;
         max-width: 50%; }
         .col-xl-7 {
         flex: 0 0 58.33333333%;
         max-width: 58.33333333%; }
         .col-xl-8 {
         flex: 0 0 66.66666667%;
         max-width: 66.66666667%; }
         .col-xl-9 {
         flex: 0 0 75%;
         max-width: 75%; }
         .col-xl-10 {
         flex: 0 0 83.33333333%;
         max-width: 83.33333333%; }
         .col-xl-11 {
         flex: 0 0 91.66666667%;
         max-width: 91.66666667%; }
         .col-xl-12 {
         flex: 0 0 100%;
         max-width: 100%; }
         .order-xl-first {
         order: -1; }
         .order-xl-last {
         order: 13; }
         .order-xl-0 {
         order: 0; }
         .order-xl-1 {
         order: 1; }
         .order-xl-2 {
         order: 2; }
         .order-xl-3 {
         order: 3; }
         .order-xl-4 {
         order: 4; }
         .order-xl-5 {
         order: 5; }
         .order-xl-6 {
         order: 6; }
         .order-xl-7 {
         order: 7; }
         .order-xl-8 {
         order: 8; }
         .order-xl-9 {
         order: 9; }
         .order-xl-10 {
         order: 10; }
         .order-xl-11 {
         order: 11; }
         .order-xl-12 {
         order: 12; }
         .offset-xl-0 {
         margin-left: 0; }
         .offset-xl-1 {
         margin-left: 8.33333333%; }
         .offset-xl-2 {
         margin-left: 16.66666667%; }
         .offset-xl-3 {
         margin-left: 25%; }
         .offset-xl-4 {
         margin-left: 33.33333333%; }
         .offset-xl-5 {
         margin-left: 41.66666667%; }
         .offset-xl-6 {
         margin-left: 50%; }
         .offset-xl-7 {
         margin-left: 58.33333333%; }
         .offset-xl-8 {
         margin-left: 66.66666667%; }
         .offset-xl-9 {
         margin-left: 75%; }
         .offset-xl-10 {
         margin-left: 83.33333333%; }
         .offset-xl-11 {
         margin-left: 91.66666667%; } }
         .table {
         width: 100%;
         margin-bottom: 1rem;
         background-color: transparent; }
         .table th,
         .table td {
         padding: 0.75rem;
         vertical-align: top;
         border-top: 1px solid #dee2e6; }
         .table thead th {
         vertical-align: bottom;
         border-bottom: 2px solid #dee2e6; }
         .table tbody + tbody {
         border-top: 2px solid #dee2e6; }
         .table .table {
         background-color: #fff; }
         .table-sm th,
         .table-sm td {
         padding: 0.3rem; }
         .table-bordered {
         border: 1px solid #dee2e6; }
         .table-bordered th,
         .table-bordered td {
         border: 1px solid #dee2e6; }
         .table-bordered thead th,
         .table-bordered thead td {
         border-bottom-width: 2px; }
         .table-borderless th,
         .table-borderless td,
         .table-borderless thead th,
         .table-borderless tbody + tbody {
         border: 0; }
         .table-striped tbody tr:nth-of-type(odd) {
         background-color: rgba(0, 0, 0, 0.05); }
         .table-hover tbody tr:hover {
         background-color: rgba(0, 0, 0, 0.075); }
         .table-primary,
         .table-primary > th,
         .table-primary > td {
         background-color: #b8daff; }
         .table-hover .table-primary:hover {
         background-color: #9fcdff; }
         .table-hover .table-primary:hover > td,
         .table-hover .table-primary:hover > th {
         background-color: #9fcdff; }
         .table-secondary,
         .table-secondary > th,
         .table-secondary > td {
         background-color: #d6d8db; }
         .table-hover .table-secondary:hover {
         background-color: #c8cbcf; }
         .table-hover .table-secondary:hover > td,
         .table-hover .table-secondary:hover > th {
         background-color: #c8cbcf; }
         .table-success,
         .table-success > th,
         .table-success > td {
         background-color: #c3e6cb; }
         .table-hover .table-success:hover {
         background-color: #b1dfbb; }
         .table-hover .table-success:hover > td,
         .table-hover .table-success:hover > th {
         background-color: #b1dfbb; }
         .table-info,
         .table-info > th,
         .table-info > td {
         background-color: #bee5eb; }
         .table-hover .table-info:hover {
         background-color: #abdde5; }
         .table-hover .table-info:hover > td,
         .table-hover .table-info:hover > th {
         background-color: #abdde5; }
         .table-warning,
         .table-warning > th,
         .table-warning > td {
         background-color: #ffeeba; }
         .table-hover .table-warning:hover {
         background-color: #ffe8a1; }
         .table-hover .table-warning:hover > td,
         .table-hover .table-warning:hover > th {
         background-color: #ffe8a1; }
         .table-danger,
         .table-danger > th,
         .table-danger > td {
         background-color: #f5c6cb; }
         .table-hover .table-danger:hover {
         background-color: #f1b0b7; }
         .table-hover .table-danger:hover > td,
         .table-hover .table-danger:hover > th {
         background-color: #f1b0b7; }
         .table-light,
         .table-light > th,
         .table-light > td {
         background-color: #fdfdfe; }
         .table-hover .table-light:hover {
         background-color: #ececf6; }
         .table-hover .table-light:hover > td,
         .table-hover .table-light:hover > th {
         background-color: #ececf6; }
         .table-dark,
         .table-dark > th,
         .table-dark > td {
         background-color: #c6c8ca; }
         .table-hover .table-dark:hover {
         background-color: #b9bbbe; }
         .table-hover .table-dark:hover > td,
         .table-hover .table-dark:hover > th {
         background-color: #b9bbbe; }
         .table-active,
         .table-active > th,
         .table-active > td {
         background-color: rgba(0, 0, 0, 0.075); }
         .table-hover .table-active:hover {
         background-color: rgba(0, 0, 0, 0.075); }
         .table-hover .table-active:hover > td,
         .table-hover .table-active:hover > th {
         background-color: rgba(0, 0, 0, 0.075); }
         .table .thead-dark th {
         color: #fff;
         background-color: #212529;
         border-color: #32383e; }
         .table .thead-light th {
         color: #495057;
         background-color: #e9ecef;
         border-color: #dee2e6; }
         .table-dark {
         color: #fff;
         background-color: #212529; }
         .table-dark th,
         .table-dark td,
         .table-dark thead th {
         border-color: #32383e; }
         .table-dark.table-bordered {
         border: 0; }
         .table-dark.table-striped tbody tr:nth-of-type(odd) {
         background-color: rgba(255, 255, 255, 0.05); }
         .table-dark.table-hover tbody tr:hover {
         background-color: rgba(255, 255, 255, 0.075); }
         @media (max-width: 575.98px) {
         .table-responsive-sm {
         display: block;
         width: 100%;
         overflow-x: auto;
         -webkit-overflow-scrolling: touch;
         -ms-overflow-style: -ms-autohiding-scrollbar; }
         .table-responsive-sm > .table-bordered {
         border: 0; } }
         @media (max-width: 767.98px) {
         .table-responsive-md {
         display: block;
         width: 100%;
         overflow-x: auto;
         -webkit-overflow-scrolling: touch;
         -ms-overflow-style: -ms-autohiding-scrollbar; }
         .table-responsive-md > .table-bordered {
         border: 0; } }
         @media (max-width: 991.98px) {
         .table-responsive-lg {
         display: block;
         width: 100%;
         overflow-x: auto;
         -webkit-overflow-scrolling: touch;
         -ms-overflow-style: -ms-autohiding-scrollbar; }
         .table-responsive-lg > .table-bordered {
         border: 0; } }
         @media (max-width: 1199.98px) {
         .table-responsive-xl {
         display: block;
         width: 100%;
         overflow-x: auto;
         -webkit-overflow-scrolling: touch;
         -ms-overflow-style: -ms-autohiding-scrollbar; }
         .table-responsive-xl > .table-bordered {
         border: 0; } }
         .table-responsive {
         display: block;
         width: 100%;
         overflow-x: auto;
         -webkit-overflow-scrolling: touch;
         -ms-overflow-style: -ms-autohiding-scrollbar; }
         .table-responsive > .table-bordered {
         border: 0; }
         .form-control {
         display: block;
         width: 100%;
         height: calc(2.25rem + 2px);
         padding: 0.375rem 0.75rem;
         font-size: 1rem;
         line-height: 1.5;
         color: #495057;
         background-color: #fff;
         background-clip: padding-box;
         border: 1px solid #ced4da;
         border-radius: 0.25rem;
         transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
         @media screen and (prefers-reduced-motion: reduce) {
         .form-control {
         transition: none; } }
         .form-control::-ms-expand {
         background-color: transparent;
         border: 0; }
         .form-control:focus {
         color: #495057;
         background-color: #fff;
         border-color: #80bdff;
         outline: 0;
         box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
         .form-control::-webkit-input-placeholder {
         color: #6c757d;
         opacity: 1; }
         .form-control::-moz-placeholder {
         color: #6c757d;
         opacity: 1; }
         .form-control::-ms-input-placeholder {
         color: #6c757d;
         opacity: 1; }
         .form-control::placeholder {
         color: #6c757d;
         opacity: 1; }
         .form-control:disabled, .form-control[readonly] {
         background-color: #e9ecef;
         opacity: 1; }
         select.form-control:focus::-ms-value {
         color: #495057;
         background-color: #fff; }
         .form-control-file,
         .form-control-range {
         display: block;
         width: 100%; }
         .col-form-label {
         padding-top: calc(0.375rem + 1px);
         padding-bottom: calc(0.375rem + 1px);
         margin-bottom: 0;
         font-size: inherit;
         line-height: 1.5; }
         .col-form-label-lg {
         padding-top: calc(0.5rem + 1px);
         padding-bottom: calc(0.5rem + 1px);
         font-size: 1.25rem;
         line-height: 1.5; }
         .col-form-label-sm {
         padding-top: calc(0.25rem + 1px);
         padding-bottom: calc(0.25rem + 1px);
         font-size: 0.875rem;
         line-height: 1.5; }
         .form-control-plaintext {
         display: block;
         width: 100%;
         padding-top: 0.375rem;
         padding-bottom: 0.375rem;
         margin-bottom: 0;
         line-height: 1.5;
         color: #212529;
         background-color: transparent;
         border: solid transparent;
         border-width: 1px 0; }
         .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
         padding-right: 0;
         padding-left: 0; }
         .form-control-sm {
         height: calc(1.8125rem + 2px);
         padding: 0.25rem 0.5rem;
         font-size: 0.875rem;
         line-height: 1.5;
         border-radius: 0.2rem; }
         .form-control-lg {
         height: calc(2.875rem + 2px);
         padding: 0.5rem 1rem;
         font-size: 1.25rem;
         line-height: 1.5;
         border-radius: 0.3rem; }
         select.form-control[size], select.form-control[multiple] {
         height: auto; }
         textarea.form-control {
         height: auto; }
         .form-group {
         margin-bottom: 1rem; }
         .form-text {
         display: block;
         margin-top: 0.25rem; }
         .form-row {
         display: flex;
         flex-wrap: wrap;
         margin-right: -5px;
         margin-left: -5px; }
         .form-row > .col,
         .form-row > [class*="col-"] {
         padding-right: 5px;
         padding-left: 5px; }
         .form-check {
         position: relative;
         display: block;
         padding-left: 1.25rem; }
         .form-check-input {
         position: absolute;
         margin-top: 0.3rem;
         margin-left: -1.25rem; }
         .form-check-input:disabled ~ .form-check-label {
         color: #6c757d; }
         .form-check-label {
         margin-bottom: 0; }
         .form-check-inline {
         display: inline-flex;
         align-items: center;
         padding-left: 0;
         margin-right: 0.75rem; }
         .form-check-inline .form-check-input {
         position: static;
         margin-top: 0;
         margin-right: 0.3125rem;
         margin-left: 0; }
         .valid-feedback {
         display: none;
         width: 100%;
         margin-top: 0.25rem;
         font-size: 80%;
         color: #28a745; }
         .valid-tooltip {
         position: absolute;
         top: 100%;
         z-index: 5;
         display: none;
         max-width: 100%;
         padding: 0.25rem 0.5rem;
         margin-top: .1rem;
         font-size: 0.875rem;
         line-height: 1.5;
         color: #fff;
         background-color: rgba(40, 167, 69, 0.9);
         border-radius: 0.25rem; }
         .was-validated .form-control:valid, .form-control.is-valid, .was-validated
         .custom-select:valid,
         .custom-select.is-valid {
         border-color: #28a745; }
         .was-validated .form-control:valid:focus, .form-control.is-valid:focus, .was-validated
         .custom-select:valid:focus,
         .custom-select.is-valid:focus {
         border-color: #28a745;
         box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }
         .was-validated .form-control:valid ~ .valid-feedback,
         .was-validated .form-control:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback,
         .form-control.is-valid ~ .valid-tooltip, .was-validated
         .custom-select:valid ~ .valid-feedback,
         .was-validated
         .custom-select:valid ~ .valid-tooltip,
         .custom-select.is-valid ~ .valid-feedback,
         .custom-select.is-valid ~ .valid-tooltip {
         display: block; }
         .was-validated .form-control-file:valid ~ .valid-feedback,
         .was-validated .form-control-file:valid ~ .valid-tooltip, .form-control-file.is-valid ~ .valid-feedback,
         .form-control-file.is-valid ~ .valid-tooltip {
         display: block; }
         .was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
         color: #28a745; }
         .was-validated .form-check-input:valid ~ .valid-feedback,
         .was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
         .form-check-input.is-valid ~ .valid-tooltip {
         display: block; }
         .was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
         color: #28a745; }
         .was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
         background-color: #71dd8a; }
         .was-validated .custom-control-input:valid ~ .valid-feedback,
         .was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
         .custom-control-input.is-valid ~ .valid-tooltip {
         display: block; }
         .was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
         background-color: #34ce57; }
         .was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
         box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }
         .was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
         border-color: #28a745; }
         .was-validated .custom-file-input:valid ~ .custom-file-label::after, .custom-file-input.is-valid ~ .custom-file-label::after {
         border-color: inherit; }
         .was-validated .custom-file-input:valid ~ .valid-feedback,
         .was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
         .custom-file-input.is-valid ~ .valid-tooltip {
         display: block; }
         .was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
         box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }
         .invalid-feedback {
         display: none;
         width: 100%;
         margin-top: 0.25rem;
         font-size: 80%;
         color: #dc3545; }
         .invalid-tooltip {
         position: absolute;
         top: 100%;
         z-index: 5;
         display: none;
         max-width: 100%;
         padding: 0.25rem 0.5rem;
         margin-top: .1rem;
         font-size: 0.875rem;
         line-height: 1.5;
         color: #fff;
         background-color: rgba(220, 53, 69, 0.9);
         border-radius: 0.25rem; }
         .was-validated .form-control:invalid, .form-control.is-invalid, .was-validated
         .custom-select:invalid,
         .custom-select.is-invalid {
         border-color: #dc3545; }
         .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus, .was-validated
         .custom-select:invalid:focus,
         .custom-select.is-invalid:focus {
         border-color: #dc3545;
         box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }
         .was-validated .form-control:invalid ~ .invalid-feedback,
         .was-validated .form-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback,
         .form-control.is-invalid ~ .invalid-tooltip, .was-validated
         .custom-select:invalid ~ .invalid-feedback,
         .was-validated
         .custom-select:invalid ~ .invalid-tooltip,
         .custom-select.is-invalid ~ .invalid-feedback,
         .custom-select.is-invalid ~ .invalid-tooltip {
         display: block; }
         .was-validated .form-control-file:invalid ~ .invalid-feedback,
         .was-validated .form-control-file:invalid ~ .invalid-tooltip, .form-control-file.is-invalid ~ .invalid-feedback,
         .form-control-file.is-invalid ~ .invalid-tooltip {
         display: block; }
         .was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
         color: #dc3545; }
         .was-validated .form-check-input:invalid ~ .invalid-feedback,
         .was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
         .form-check-input.is-invalid ~ .invalid-tooltip {
         display: block; }
         .was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
         color: #dc3545; }
         .was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
         background-color: #efa2a9; }
         .was-validated .custom-control-input:invalid ~ .invalid-feedback,
         .was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
         .custom-control-input.is-invalid ~ .invalid-tooltip {
         display: block; }
         .was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
         background-color: #e4606d; }
         .was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
         box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }
         .was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
         border-color: #dc3545; }
         .was-validated .custom-file-input:invalid ~ .custom-file-label::after, .custom-file-input.is-invalid ~ .custom-file-label::after {
         border-color: inherit; }
         .was-validated .custom-file-input:invalid ~ .invalid-feedback,
         .was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
         .custom-file-input.is-invalid ~ .invalid-tooltip {
         display: block; }
         .was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
         box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }
         .form-inline {
         display: flex;
         flex-flow: row wrap;
         align-items: center; }
         .form-inline .form-check {
         width: 100%; }
         @media (min-width: 576px) {
         .form-inline label {
         display: flex;
         align-items: center;
         justify-content: center;
         margin-bottom: 0; }
         .form-inline .form-group {
         display: flex;
         flex: 0 0 auto;
         flex-flow: row wrap;
         align-items: center;
         margin-bottom: 0; }
         .form-inline .form-control {
         display: inline-block;
         width: auto;
         vertical-align: middle; }
         .form-inline .form-control-plaintext {
         display: inline-block; }
         .form-inline .input-group,
         .form-inline .custom-select {
         width: auto; }
         .form-inline .form-check {
         display: flex;
         align-items: center;
         justify-content: center;
         width: auto;
         padding-left: 0; }
         .form-inline .form-check-input {
         position: relative;
         margin-top: 0;
         margin-right: 0.25rem;
         margin-left: 0; }
         .form-inline .custom-control {
         align-items: center;
         justify-content: center; }
         .form-inline .custom-control-label {
         margin-bottom: 0; } }
         .btn {
         display: inline-block;
         font-weight: 400;
         text-align: center;
         white-space: nowrap;
         vertical-align: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
         border: 1px solid transparent;
         padding: 0.375rem 0.75rem;
         font-size: 1rem;
         line-height: 1.5;
         border-radius: 0.25rem;
         transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
         @media screen and (prefers-reduced-motion: reduce) {
         .btn {
         transition: none; } }
         .btn:hover, .btn:focus {
         text-decoration: none; }
         .btn:focus, .btn.focus {
         outline: 0;
         box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
         .btn.disabled, .btn:disabled {
         opacity: 0.65; }
         .btn:not(:disabled):not(.disabled) {
         cursor: pointer; }
         a.btn.disabled,
         fieldset:disabled a.btn {
         pointer-events: none; }
         .btn-primary {
         color: #fff;
         background-color: #007bff;
         border-color: #007bff; }
         .btn-primary:hover {
         color: #fff;
         background-color: #0069d9;
         border-color: #0062cc; }
         .btn-primary:focus, .btn-primary.focus {
         box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5); }
         .btn-primary.disabled, .btn-primary:disabled {
         color: #fff;
         background-color: #007bff;
         border-color: #007bff; }
         .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
         .show > .btn-primary.dropdown-toggle {
         color: #fff;
         background-color: #0062cc;
         border-color: #005cbf; }
         .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
         .show > .btn-primary.dropdown-toggle:focus {
         box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5); }
         .btn-secondary {
         color: #fff;
         background-color: #6c757d;
         border-color: #6c757d; }
         .btn-secondary:hover {
         color: #fff;
         background-color: #5a6268;
         border-color: #545b62; }
         .btn-secondary:focus, .btn-secondary.focus {
         box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }
         .btn-secondary.disabled, .btn-secondary:disabled {
         color: #fff;
         background-color: #6c757d;
         border-color: #6c757d; }
         .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
         .show > .btn-secondary.dropdown-toggle {
         color: #fff;
         background-color: #545b62;
         border-color: #4e555b; }
         .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
         .show > .btn-secondary.dropdown-toggle:focus {
         box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }
         .btn-success {
         color: #fff;
         background-color: #28a745;
         border-color: #28a745; }
         .btn-success:hover {
         color: #fff;
         background-color: #218838;
         border-color: #1e7e34; }
         .btn-success:focus, .btn-success.focus {
         box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }
         .btn-success.disabled, .btn-success:disabled {
         color: #fff;
         background-color: #28a745;
         border-color: #28a745; }
         .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
         .show > .btn-success.dropdown-toggle {
         color: #fff;
         background-color: #1e7e34;
         border-color: #1c7430; }
         .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
         .show > .btn-success.dropdown-toggle:focus {
         box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }
         .btn-info {
         color: #fff;
         background-color: #17a2b8;
         border-color: #17a2b8; }
         .btn-info:hover {
         color: #fff;
         background-color: #138496;
         border-color: #117a8b; }
         .btn-info:focus, .btn-info.focus {
         box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }
         .btn-info.disabled, .btn-info:disabled {
         color: #fff;
         background-color: #17a2b8;
         border-color: #17a2b8; }
         .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
         .show > .btn-info.dropdown-toggle {
         color: #fff;
         background-color: #117a8b;
         border-color: #10707f; }
         .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
         .show > .btn-info.dropdown-toggle:focus {
         box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }
         .btn-warning {
         color: #212529;
         background-color: #ffc107;
         border-color: #ffc107; }
         .btn-warning:hover {
         color: #212529;
         background-color: #e0a800;
         border-color: #d39e00; }
         .btn-warning:focus, .btn-warning.focus {
         box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }
         .btn-warning.disabled, .btn-warning:disabled {
         color: #212529;
         background-color: #ffc107;
         border-color: #ffc107; }
         .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
         .show > .btn-warning.dropdown-toggle {
         color: #212529;
         background-color: #d39e00;
         border-color: #c69500; }
         .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
         .show > .btn-warning.dropdown-toggle:focus {
         box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }
         .btn-danger {
         color: #fff;
         background-color: #dc3545;
         border-color: #dc3545; }
         .btn-danger:hover {
         color: #fff;
         background-color: #c82333;
         border-color: #bd2130; }
         .btn-danger:focus, .btn-danger.focus {
         box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }
         .btn-danger.disabled, .btn-danger:disabled {
         color: #fff;
         background-color: #dc3545;
         border-color: #dc3545; }
         .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
         .show > .btn-danger.dropdown-toggle {
         color: #fff;
         background-color: #bd2130;
         border-color: #b21f2d; }
         .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
         .show > .btn-danger.dropdown-toggle:focus {
         box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }
         .btn-light {
         color: #212529;
         background-color: #f8f9fa;
         border-color: #f8f9fa; }
         .btn-light:hover {
         color: #212529;
         background-color: #e2e6ea;
         border-color: #dae0e5; }
         .btn-light:focus, .btn-light.focus {
         box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
         .btn-light.disabled, .btn-light:disabled {
         color: #212529;
         background-color: #f8f9fa;
         border-color: #f8f9fa; }
         .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
         .show > .btn-light.dropdown-toggle {
         color: #212529;
         background-color: #dae0e5;
         border-color: #d3d9df; }
         .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
         .show > .btn-light.dropdown-toggle:focus {
         box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
         .btn-dark {
         color: #fff;
         background-color: #343a40;
         border-color: #343a40; }
         .btn-dark:hover {
         color: #fff;
         background-color: #23272b;
         border-color: #1d2124; }
         .btn-dark:focus, .btn-dark.focus {
         box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }
         .btn-dark.disabled, .btn-dark:disabled {
         color: #fff;
         background-color: #343a40;
         border-color: #343a40; }
         .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
         .show > .btn-dark.dropdown-toggle {
         color: #fff;
         background-color: #1d2124;
         border-color: #171a1d; }
         .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
         .show > .btn-dark.dropdown-toggle:focus {
         box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }
         .btn-outline-primary {
         color: #007bff;
         background-color: transparent;
         background-image: none;
         border-color: #007bff; }
         .btn-outline-primary:hover {
         color: #fff;
         background-color: #007bff;
         border-color: #007bff; }
         .btn-outline-primary:focus, .btn-outline-primary.focus {
         box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5); }
         .btn-outline-primary.disabled, .btn-outline-primary:disabled {
         color: #007bff;
         background-color: transparent; }
         .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
         .show > .btn-outline-primary.dropdown-toggle {
         color: #fff;
         background-color: #007bff;
         border-color: #007bff; }
         .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
         .show > .btn-outline-primary.dropdown-toggle:focus {
         box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5); }
         .btn-outline-secondary {
         color: #6c757d;
         background-color: transparent;
         background-image: none;
         border-color: #6c757d; }
         .btn-outline-secondary:hover {
         color: #fff;
         background-color: #6c757d;
         border-color: #6c757d; }
         .btn-outline-secondary:focus, .btn-outline-secondary.focus {
         box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }
         .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
         color: #6c757d;
         background-color: transparent; }
         .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
         .show > .btn-outline-secondary.dropdown-toggle {
         color: #fff;
         background-color: #6c757d;
         border-color: #6c757d; }
         .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
         .show > .btn-outline-secondary.dropdown-toggle:focus {
         box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }
         .btn-outline-success {
         color: #28a745;
         background-color: transparent;
         background-image: none;
         border-color: #28a745; }
         .btn-outline-success:hover {
         color: #fff;
         background-color: #28a745;
         border-color: #28a745; }
         .btn-outline-success:focus, .btn-outline-success.focus {
         box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }
         .btn-outline-success.disabled, .btn-outline-success:disabled {
         color: #28a745;
         background-color: transparent; }
         .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
         .show > .btn-outline-success.dropdown-toggle {
         color: #fff;
         background-color: #28a745;
         border-color: #28a745; }
         .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
         .show > .btn-outline-success.dropdown-toggle:focus {
         box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }
         .btn-outline-info {
         color: #17a2b8;
         background-color: transparent;
         background-image: none;
         border-color: #17a2b8; }
         .btn-outline-info:hover {
         color: #fff;
         background-color: #17a2b8;
         border-color: #17a2b8; }
         .btn-outline-info:focus, .btn-outline-info.focus {
         box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }
         .btn-outline-info.disabled, .btn-outline-info:disabled {
         color: #17a2b8;
         background-color: transparent; }
         .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
         .show > .btn-outline-info.dropdown-toggle {
         color: #fff;
         background-color: #17a2b8;
         border-color: #17a2b8; }
         .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
         .show > .btn-outline-info.dropdown-toggle:focus {
         box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }
         .btn-outline-warning {
         color: #ffc107;
         background-color: transparent;
         background-image: none;
         border-color: #ffc107; }
         .btn-outline-warning:hover {
         color: #212529;
         background-color: #ffc107;
         border-color: #ffc107; }
         .btn-outline-warning:focus, .btn-outline-warning.focus {
         box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }
         .btn-outline-warning.disabled, .btn-outline-warning:disabled {
         color: #ffc107;
         background-color: transparent; }
         .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
         .show > .btn-outline-warning.dropdown-toggle {
         color: #212529;
         background-color: #ffc107;
         border-color: #ffc107; }
         .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
         .show > .btn-outline-warning.dropdown-toggle:focus {
         box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }
         .btn-outline-danger {
         color: #dc3545;
         background-color: transparent;
         background-image: none;
         border-color: #dc3545; }
         .btn-outline-danger:hover {
         color: #fff;
         background-color: #dc3545;
         border-color: #dc3545; }
         .btn-outline-danger:focus, .btn-outline-danger.focus {
         box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }
         .btn-outline-danger.disabled, .btn-outline-danger:disabled {
         color: #dc3545;
         background-color: transparent; }
         .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
         .show > .btn-outline-danger.dropdown-toggle {
         color: #fff;
         background-color: #dc3545;
         border-color: #dc3545; }
         .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
         .show > .btn-outline-danger.dropdown-toggle:focus {
         box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }
         .btn-outline-light {
         color: #f8f9fa;
         background-color: transparent;
         background-image: none;
         border-color: #f8f9fa; }
         .btn-outline-light:hover {
         color: #212529;
         background-color: #f8f9fa;
         border-color: #f8f9fa; }
         .btn-outline-light:focus, .btn-outline-light.focus {
         box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
         .btn-outline-light.disabled, .btn-outline-light:disabled {
         color: #f8f9fa;
         background-color: transparent; }
         .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
         .show > .btn-outline-light.dropdown-toggle {
         color: #212529;
         background-color: #f8f9fa;
         border-color: #f8f9fa; }
         .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
         .show > .btn-outline-light.dropdown-toggle:focus {
         box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
         .btn-outline-dark {
         color: #343a40;
         background-color: transparent;
         background-image: none;
         border-color: #343a40; }
         .btn-outline-dark:hover {
         color: #fff;
         background-color: #343a40;
         border-color: #343a40; }
         .btn-outline-dark:focus, .btn-outline-dark.focus {
         box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }
         .btn-outline-dark.disabled, .btn-outline-dark:disabled {
         color: #343a40;
         background-color: transparent; }
         .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
         .show > .btn-outline-dark.dropdown-toggle {
         color: #fff;
         background-color: #343a40;
         border-color: #343a40; }
         .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
         .show > .btn-outline-dark.dropdown-toggle:focus {
         box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }
         .btn-link {
         font-weight: 400;
         color: #007bff;
         background-color: transparent; }
         .btn-link:hover {
         color: #0056b3;
         text-decoration: underline;
         background-color: transparent;
         border-color: transparent; }
         .btn-link:focus, .btn-link.focus {
         text-decoration: underline;
         border-color: transparent;
         box-shadow: none; }
         .btn-link:disabled, .btn-link.disabled {
         color: #6c757d;
         pointer-events: none; }
         .btn-lg, .btn-group-lg > .btn {
         padding: 0.5rem 1rem;
         font-size: 1.25rem;
         line-height: 1.5;
         border-radius: 0.3rem; }
         .btn-sm, .btn-group-sm > .btn {
         padding: 0.25rem 0.5rem;
         font-size: 0.875rem;
         line-height: 1.5;
         border-radius: 0.2rem; }
         .btn-block {
         display: block;
         width: 100%; }
         .btn-block + .btn-block {
         margin-top: 0.5rem; }
         input[type="submit"].btn-block,
         input[type="reset"].btn-block,
         input[type="button"].btn-block {
         width: 100%; }
         .fade {
         transition: opacity 0.15s linear; }
         @media screen and (prefers-reduced-motion: reduce) {
         .fade {
         transition: none; } }
         .fade:not(.show) {
         opacity: 0; }
         .collapse:not(.show) {
         display: none; }
         .collapsing {
         position: relative;
         height: 0;
         overflow: hidden;
         transition: height 0.35s ease; }
         @media screen and (prefers-reduced-motion: reduce) {
         .collapsing {
         transition: none; } }
         .dropup,
         .dropright,
         .dropdown,
         .dropleft {
         position: relative; }
         .dropdown-toggle::after {
         display: inline-block;
         width: 0;
         height: 0;
         margin-left: 0.255em;
         vertical-align: 0.255em;
         content: "";
         border-top: 0.3em solid;
         border-right: 0.3em solid transparent;
         border-bottom: 0;
         border-left: 0.3em solid transparent; }
         .dropdown-toggle:empty::after {
         margin-left: 0; }
         .dropdown-menu {
         position: absolute;
         top: 100%;
         left: 0;
         z-index: 1000;
         display: none;
         float: left;
         min-width: 10rem;
         padding: 0.5rem 0;
         margin: 0.125rem 0 0;
         font-size: 1rem;
         color: #212529;
         text-align: left;
         list-style: none;
         background-color: #fff;
         background-clip: padding-box;
         border: 1px solid rgba(0, 0, 0, 0.15);
         border-radius: 0.25rem; }
         .dropdown-menu-right {
         right: 0;
         left: auto; }
         .dropup .dropdown-menu {
         top: auto;
         bottom: 100%;
         margin-top: 0;
         margin-bottom: 0.125rem; }
         .dropup .dropdown-toggle::after {
         display: inline-block;
         width: 0;
         height: 0;
         margin-left: 0.255em;
         vertical-align: 0.255em;
         content: "";
         border-top: 0;
         border-right: 0.3em solid transparent;
         border-bottom: 0.3em solid;
         border-left: 0.3em solid transparent; }
         .dropup .dropdown-toggle:empty::after {
         margin-left: 0; }
         .dropright .dropdown-menu {
         top: 0;
         right: auto;
         left: 100%;
         margin-top: 0;
         margin-left: 0.125rem; }
         .dropright .dropdown-toggle::after {
         display: inline-block;
         width: 0;
         height: 0;
         margin-left: 0.255em;
         vertical-align: 0.255em;
         content: "";
         border-top: 0.3em solid transparent;
         border-right: 0;
         border-bottom: 0.3em solid transparent;
         border-left: 0.3em solid; }
         .dropright .dropdown-toggle:empty::after {
         margin-left: 0; }
         .dropright .dropdown-toggle::after {
         vertical-align: 0; }
         .dropleft .dropdown-menu {
         top: 0;
         right: 100%;
         left: auto;
         margin-top: 0;
         margin-right: 0.125rem; }
         .dropleft .dropdown-toggle::after {
         display: inline-block;
         width: 0;
         height: 0;
         margin-left: 0.255em;
         vertical-align: 0.255em;
         content: ""; }
         .dropleft .dropdown-toggle::after {
         display: none; }
         .dropleft .dropdown-toggle::before {
         display: inline-block;
         width: 0;
         height: 0;
         margin-right: 0.255em;
         vertical-align: 0.255em;
         content: "";
         border-top: 0.3em solid transparent;
         border-right: 0.3em solid;
         border-bottom: 0.3em solid transparent; }
         .dropleft .dropdown-toggle:empty::after {
         margin-left: 0; }
         .dropleft .dropdown-toggle::before {
         vertical-align: 0; }
         .dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
         right: auto;
         bottom: auto; }
         .dropdown-divider {
         height: 0;
         margin: 0.5rem 0;
         overflow: hidden;
         border-top: 1px solid #e9ecef; }
         .dropdown-item {
         display: block;
         width: 100%;
         padding: 0.25rem 1.5rem;
         clear: both;
         font-weight: 400;
         color: #212529;
         text-align: inherit;
         white-space: nowrap;
         background-color: transparent;
         border: 0; }
         .dropdown-item:hover, .dropdown-item:focus {
         color: #16181b;
         text-decoration: none;
         background-color: #f8f9fa; }
         .dropdown-item.active, .dropdown-item:active {
         color: #fff;
         text-decoration: none;
         background-color: #007bff; }
         .dropdown-item.disabled, .dropdown-item:disabled {
         color: #6c757d;
         background-color: transparent; }
         .dropdown-menu.show {
         display: block; }
         .dropdown-header {
         display: block;
         padding: 0.5rem 1.5rem;
         margin-bottom: 0;
         font-size: 0.875rem;
         color: #6c757d;
         white-space: nowrap; }
         .dropdown-item-text {
         display: block;
         padding: 0.25rem 1.5rem;
         color: #212529; }
         .btn-group,
         .btn-group-vertical {
         position: relative;
         display: inline-flex;
         vertical-align: middle; }
         .btn-group > .btn,
         .btn-group-vertical > .btn {
         position: relative;
         flex: 0 1 auto; }
         .btn-group > .btn:hover,
         .btn-group-vertical > .btn:hover {
         z-index: 1; }
         .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
         .btn-group-vertical > .btn:focus,
         .btn-group-vertical > .btn:active,
         .btn-group-vertical > .btn.active {
         z-index: 1; }
         .btn-group .btn + .btn,
         .btn-group .btn + .btn-group,
         .btn-group .btn-group + .btn,
         .btn-group .btn-group + .btn-group,
         .btn-group-vertical .btn + .btn,
         .btn-group-vertical .btn + .btn-group,
         .btn-group-vertical .btn-group + .btn,
         .btn-group-vertical .btn-group + .btn-group {
         margin-left: -1px; }
         .btn-toolbar {
         display: flex;
         flex-wrap: wrap;
         justify-content: flex-start; }
         .btn-toolbar .input-group {
         width: auto; }
         .btn-group > .btn:first-child {
         margin-left: 0; }
         .btn-group > .btn:not(:last-child):not(.dropdown-toggle),
         .btn-group > .btn-group:not(:last-child) > .btn {
         border-top-right-radius: 0;
         border-bottom-right-radius: 0; }
         .btn-group > .btn:not(:first-child),
         .btn-group > .btn-group:not(:first-child) > .btn {
         border-top-left-radius: 0;
         border-bottom-left-radius: 0; }
         .dropdown-toggle-split {
         padding-right: 0.5625rem;
         padding-left: 0.5625rem; }
         .dropdown-toggle-split::after,
         .dropup .dropdown-toggle-split::after,
         .dropright .dropdown-toggle-split::after {
         margin-left: 0; }
         .dropleft .dropdown-toggle-split::before {
         margin-right: 0; }
         .btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
         padding-right: 0.375rem;
         padding-left: 0.375rem; }
         .btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
         padding-right: 0.75rem;
         padding-left: 0.75rem; }
         .btn-group-vertical {
         flex-direction: column;
         align-items: flex-start;
         justify-content: center; }
         .btn-group-vertical .btn,
         .btn-group-vertical .btn-group {
         width: 100%; }
         .btn-group-vertical > .btn + .btn,
         .btn-group-vertical > .btn + .btn-group,
         .btn-group-vertical > .btn-group + .btn,
         .btn-group-vertical > .btn-group + .btn-group {
         margin-top: -1px;
         margin-left: 0; }
         .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
         .btn-group-vertical > .btn-group:not(:last-child) > .btn {
         border-bottom-right-radius: 0;
         border-bottom-left-radius: 0; }
         .btn-group-vertical > .btn:not(:first-child),
         .btn-group-vertical > .btn-group:not(:first-child) > .btn {
         border-top-left-radius: 0;
         border-top-right-radius: 0; }
         .btn-group-toggle > .btn,
         .btn-group-toggle > .btn-group > .btn {
         margin-bottom: 0; }
         .btn-group-toggle > .btn input[type="radio"],
         .btn-group-toggle > .btn input[type="checkbox"],
         .btn-group-toggle > .btn-group > .btn input[type="radio"],
         .btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
         position: absolute;
         clip: rect(0, 0, 0, 0);
         pointer-events: none; }
         .input-group {
         position: relative;
         display: flex;
         flex-wrap: wrap;
         align-items: stretch;
         width: 100%; }
         .input-group > .form-control,
         .input-group > .custom-select,
         .input-group > .custom-file {
         position: relative;
         flex: 1 1 auto;
         width: 1%;
         margin-bottom: 0; }
         .input-group > .form-control + .form-control,
         .input-group > .form-control + .custom-select,
         .input-group > .form-control + .custom-file,
         .input-group > .custom-select + .form-control,
         .input-group > .custom-select + .custom-select,
         .input-group > .custom-select + .custom-file,
         .input-group > .custom-file + .form-control,
         .input-group > .custom-file + .custom-select,
         .input-group > .custom-file + .custom-file {
         margin-left: -1px; }
         .input-group > .form-control:focus,
         .input-group > .custom-select:focus,
         .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
         z-index: 3; }
         .input-group > .custom-file .custom-file-input:focus {
         z-index: 4; }
         .input-group > .form-control:not(:last-child),
         .input-group > .custom-select:not(:last-child) {
         border-top-right-radius: 0;
         border-bottom-right-radius: 0; }
         .input-group > .form-control:not(:first-child),
         .input-group > .custom-select:not(:first-child) {
         border-top-left-radius: 0;
         border-bottom-left-radius: 0; }
         .input-group > .custom-file {
         display: flex;
         align-items: center; }
         .input-group > .custom-file:not(:last-child) .custom-file-label,
         .input-group > .custom-file:not(:last-child) .custom-file-label::after {
         border-top-right-radius: 0;
         border-bottom-right-radius: 0; }
         .input-group > .custom-file:not(:first-child) .custom-file-label {
         border-top-left-radius: 0;
         border-bottom-left-radius: 0; }
         .input-group-prepend,
         .input-group-append {
         display: flex; }
         .input-group-prepend .btn,
         .input-group-append .btn {
         position: relative;
         z-index: 2; }
         .input-group-prepend .btn + .btn,
         .input-group-prepend .btn + .input-group-text,
         .input-group-prepend .input-group-text + .input-group-text,
         .input-group-prepend .input-group-text + .btn,
         .input-group-append .btn + .btn,
         .input-group-append .btn + .input-group-text,
         .input-group-append .input-group-text + .input-group-text,
         .input-group-append .input-group-text + .btn {
         margin-left: -1px; }
         .input-group-prepend {
         margin-right: -1px; }
         .input-group-append {
         margin-left: -1px; }
         .input-group-text {
         display: flex;
         align-items: center;
         padding: 0.375rem 0.75rem;
         margin-bottom: 0;
         font-size: 1rem;
         font-weight: 400;
         line-height: 1.5;
         color: #495057;
         text-align: center;
         white-space: nowrap;
         background-color: #e9ecef;
         border: 1px solid #ced4da;
         border-radius: 0.25rem; }
         .input-group-text input[type="radio"],
         .input-group-text input[type="checkbox"] {
         margin-top: 0; }
         .input-group-lg > .form-control,
         .input-group-lg > .input-group-prepend > .input-group-text,
         .input-group-lg > .input-group-append > .input-group-text,
         .input-group-lg > .input-group-prepend > .btn,
         .input-group-lg > .input-group-append > .btn {
         height: calc(2.875rem + 2px);
         padding: 0.5rem 1rem;
         font-size: 1.25rem;
         line-height: 1.5;
         border-radius: 0.3rem; }
         .input-group-sm > .form-control,
         .input-group-sm > .input-group-prepend > .input-group-text,
         .input-group-sm > .input-group-append > .input-group-text,
         .input-group-sm > .input-group-prepend > .btn,
         .input-group-sm > .input-group-append > .btn {
         height: calc(1.8125rem + 2px);
         padding: 0.25rem 0.5rem;
         font-size: 0.875rem;
         line-height: 1.5;
         border-radius: 0.2rem; }
         .input-group > .input-group-prepend > .btn,
         .input-group > .input-group-prepend > .input-group-text,
         .input-group > .input-group-append:not(:last-child) > .btn,
         .input-group > .input-group-append:not(:last-child) > .input-group-text,
         .input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
         .input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
         border-top-right-radius: 0;
         border-bottom-right-radius: 0; }
         .input-group > .input-group-append > .btn,
         .input-group > .input-group-append > .input-group-text,
         .input-group > .input-group-prepend:not(:first-child) > .btn,
         .input-group > .input-group-prepend:not(:first-child) > .input-group-text,
         .input-group > .input-group-prepend:first-child > .btn:not(:first-child),
         .input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
         border-top-left-radius: 0;
         border-bottom-left-radius: 0; }
         .custom-control {
         position: relative;
         display: block;
         min-height: 1.5rem;
         padding-left: 1.5rem; }
         .custom-control-inline {
         display: inline-flex;
         margin-right: 1rem; }
         .custom-control-input {
         position: absolute;
         z-index: -1;
         opacity: 0; }
         .custom-control-input:checked ~ .custom-control-label::before {
         color: #fff;
         background-color: #007bff; }
         .custom-control-input:focus ~ .custom-control-label::before {
         box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
         .custom-control-input:active ~ .custom-control-label::before {
         color: #fff;
         background-color: #b3d7ff; }
         .custom-control-input:disabled ~ .custom-control-label {
         color: #6c757d; }
         .custom-control-input:disabled ~ .custom-control-label::before {
         background-color: #e9ecef; }
         .custom-control-label {
         position: relative;
         margin-bottom: 0; }
         .custom-control-label::before {
         position: absolute;
         top: 0.25rem;
         left: -1.5rem;
         display: block;
         width: 1rem;
         height: 1rem;
         pointer-events: none;
         content: "";
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
         background-color: #dee2e6; }
         .custom-control-label::after {
         position: absolute;
         top: 0.25rem;
         left: -1.5rem;
         display: block;
         width: 1rem;
         height: 1rem;
         content: "";
         background-repeat: no-repeat;
         background-position: center center;
         background-size: 50% 50%; }
         .custom-checkbox .custom-control-label::before {
         border-radius: 0.25rem; }
         .custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
         background-color: #007bff; }
         .custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
         background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E"); }
         .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
         background-color: #007bff; }
         .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
         background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E"); }
         .custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
         background-color: rgba(0, 123, 255, 0.5); }
         .custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
         background-color: rgba(0, 123, 255, 0.5); }
         .custom-radio .custom-control-label::before {
         border-radius: 50%; }
         .custom-radio .custom-control-input:checked ~ .custom-control-label::before {
         background-color: #007bff; }
         .custom-radio .custom-control-input:checked ~ .custom-control-label::after {
         background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E"); }
         .custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
         background-color: rgba(0, 123, 255, 0.5); }
         .custom-select {
         display: inline-block;
         width: 100%;
         height: calc(2.25rem + 2px);
         padding: 0.375rem 1.75rem 0.375rem 0.75rem;
         line-height: 1.5;
         color: #495057;
         vertical-align: middle;
         background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center;
         background-size: 8px 10px;
         border: 1px solid #ced4da;
         border-radius: 0.25rem;
         -webkit-appearance: none;
         -moz-appearance: none;
         appearance: none; }
         .custom-select:focus {
         border-color: #80bdff;
         outline: 0;
         box-shadow: 0 0 0 0.2rem rgba(128, 189, 255, 0.5); }
         .custom-select:focus::-ms-value {
         color: #495057;
         background-color: #fff; }
         .custom-select[multiple], .custom-select[size]:not([size="1"]) {
         height: auto;
         padding-right: 0.75rem;
         background-image: none; }
         .custom-select:disabled {
         color: #6c757d;
         background-color: #e9ecef; }
         .custom-select::-ms-expand {
         opacity: 0; }
         .custom-select-sm {
         height: calc(1.8125rem + 2px);
         padding-top: 0.375rem;
         padding-bottom: 0.375rem;
         font-size: 75%; }
         .custom-select-lg {
         height: calc(2.875rem + 2px);
         padding-top: 0.375rem;
         padding-bottom: 0.375rem;
         font-size: 125%; }
         .custom-file {
         position: relative;
         display: inline-block;
         width: 100%;
         height: calc(2.25rem + 2px);
         margin-bottom: 0; }
         .custom-file-input {
         position: relative;
         z-index: 2;
         width: 100%;
         height: calc(2.25rem + 2px);
         margin: 0;
         opacity: 0; }
         .custom-file-input:focus ~ .custom-file-label {
         border-color: #80bdff;
         box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
         .custom-file-input:focus ~ .custom-file-label::after {
         border-color: #80bdff; }
         .custom-file-input:disabled ~ .custom-file-label {
         background-color: #e9ecef; }
         .custom-file-input:lang(en) ~ .custom-file-label::after {
         content: "Browse"; }
         .custom-file-label {
         position: absolute;
         top: 0;
         right: 0;
         left: 0;
         z-index: 1;
         height: calc(2.25rem + 2px);
         padding: 0.375rem 0.75rem;
         line-height: 1.5;
         color: #495057;
         background-color: #fff;
         border: 1px solid #ced4da;
         border-radius: 0.25rem; }
         .custom-file-label::after {
         position: absolute;
         top: 0;
         right: 0;
         bottom: 0;
         z-index: 3;
         display: block;
         height: 2.25rem;
         padding: 0.375rem 0.75rem;
         line-height: 1.5;
         color: #495057;
         content: "Browse";
         background-color: #e9ecef;
         border-left: 1px solid #ced4da;
         border-radius: 0 0.25rem 0.25rem 0; }
         .custom-range {
         width: 100%;
         padding-left: 0;
         background-color: transparent;
         -webkit-appearance: none;
         -moz-appearance: none;
         appearance: none; }
         .custom-range:focus {
         outline: none; }
         .custom-range:focus::-webkit-slider-thumb {
         box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
         .custom-range:focus::-moz-range-thumb {
         box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
         .custom-range:focus::-ms-thumb {
         box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
         .custom-range::-moz-focus-outer {
         border: 0; }
         .custom-range::-webkit-slider-thumb {
         width: 1rem;
         height: 1rem;
         margin-top: -0.25rem;
         background-color: #007bff;
         border: 0;
         border-radius: 1rem;
         transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
         -webkit-appearance: none;
         appearance: none; }
         @media screen and (prefers-reduced-motion: reduce) {
         .custom-range::-webkit-slider-thumb {
         transition: none; } }
         .custom-range::-webkit-slider-thumb:active {
         background-color: #b3d7ff; }
         .custom-range::-webkit-slider-runnable-track {
         width: 100%;
         height: 0.5rem;
         color: transparent;
         cursor: pointer;
         background-color: #dee2e6;
         border-color: transparent;
         border-radius: 1rem; }
         .custom-range::-moz-range-thumb {
         width: 1rem;
         height: 1rem;
         background-color: #007bff;
         border: 0;
         border-radius: 1rem;
         transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
         -moz-appearance: none;
         appearance: none; }
         @media screen and (prefers-reduced-motion: reduce) {
         .custom-range::-moz-range-thumb {
         transition: none; } }
         .custom-range::-moz-range-thumb:active {
         background-color: #b3d7ff; }
         .custom-range::-moz-range-track {
         width: 100%;
         height: 0.5rem;
         color: transparent;
         cursor: pointer;
         background-color: #dee2e6;
         border-color: transparent;
         border-radius: 1rem; }
         .custom-range::-ms-thumb {
         width: 1rem;
         height: 1rem;
         margin-top: 0;
         margin-right: 0.2rem;
         margin-left: 0.2rem;
         background-color: #007bff;
         border: 0;
         border-radius: 1rem;
         transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
         appearance: none; }
         @media screen and (prefers-reduced-motion: reduce) {
         .custom-range::-ms-thumb {
         transition: none; } }
         .custom-range::-ms-thumb:active {
         background-color: #b3d7ff; }
         .custom-range::-ms-track {
         width: 100%;
         height: 0.5rem;
         color: transparent;
         cursor: pointer;
         background-color: transparent;
         border-color: transparent;
         border-width: 0.5rem; }
         .custom-range::-ms-fill-lower {
         background-color: #dee2e6;
         border-radius: 1rem; }
         .custom-range::-ms-fill-upper {
         margin-right: 15px;
         background-color: #dee2e6;
         border-radius: 1rem; }
         .custom-control-label::before,
         .custom-file-label,
         .custom-select {
         transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
         @media screen and (prefers-reduced-motion: reduce) {
         .custom-control-label::before,
         .custom-file-label,
         .custom-select {
         transition: none; } }
         .nav {
         display: flex;
         flex-wrap: wrap;
         padding-left: 0;
         margin-bottom: 0;
         list-style: none; }
         .nav-link {
         display: block;
         padding: 0.5rem 1rem; }
         .nav-link:hover, .nav-link:focus {
         text-decoration: none; }
         .nav-link.disabled {
         color: #6c757d; }
         .nav-tabs {
         border-bottom: 1px solid #dee2e6; }
         .nav-tabs .nav-item {
         margin-bottom: -1px; }
         .nav-tabs .nav-link {
         border: 1px solid transparent;
         border-top-left-radius: 0.25rem;
         border-top-right-radius: 0.25rem; }
         .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
         border-color: #e9ecef #e9ecef #dee2e6; }
         .nav-tabs .nav-link.disabled {
         color: #6c757d;
         background-color: transparent;
         border-color: transparent; }
         .nav-tabs .nav-link.active,
         .nav-tabs .nav-item.show .nav-link {
         color: #495057;
         background-color: #fff;
         border-color: #dee2e6 #dee2e6 #fff; }
         .nav-tabs .dropdown-menu {
         margin-top: -1px;
         border-top-left-radius: 0;
         border-top-right-radius: 0; }
         .nav-pills .nav-link {
         border-radius: 0.25rem; }
         .nav-pills .nav-link.active,
         .nav-pills .show > .nav-link {
         color: #fff;
         background-color: #007bff; }
         .nav-fill .nav-item {
         flex: 1 1 auto;
         text-align: center; }
         .nav-justified .nav-item {
         flex-basis: 0;
         flex-grow: 1;
         text-align: center; }
         .tab-content > .tab-pane {
         display: none; }
         .tab-content > .active {
         display: block; }
         .navbar {
         position: relative;
         display: flex;
         flex-wrap: wrap;
         align-items: center;
         justify-content: space-between;
         padding: 0.5rem 1rem; }
         .navbar > .container,
         .navbar > .container-fluid {
         display: flex;
         flex-wrap: wrap;
         align-items: center;
         justify-content: space-between; }
         .navbar-brand {
         display: inline-block;
         padding-top: 0.3125rem;
         padding-bottom: 0.3125rem;
         margin-right: 1rem;
         font-size: 1.25rem;
         line-height: inherit;
         white-space: nowrap; }
         .navbar-brand:hover, .navbar-brand:focus {
         text-decoration: none; }
         .navbar-nav {
         display: flex;
         flex-direction: column;
         padding-left: 0;
         margin-bottom: 0;
         list-style: none; }
         .navbar-nav .nav-link {
         padding-right: 0;
         padding-left: 0; }
         .navbar-nav .dropdown-menu {
         position: static;
         float: none; }
         .navbar-text {
         display: inline-block;
         padding-top: 0.5rem;
         padding-bottom: 0.5rem; }
         .navbar-collapse {
         flex-basis: 100%;
         flex-grow: 1;
         align-items: center; }
         .navbar-toggler {
         padding: 0.25rem 0.75rem;
         font-size: 1.25rem;
         line-height: 1;
         background-color: transparent;
         border: 1px solid transparent;
         border-radius: 0.25rem; }
         .navbar-toggler:hover, .navbar-toggler:focus {
         text-decoration: none; }
         .navbar-toggler:not(:disabled):not(.disabled) {
         cursor: pointer; }
         .navbar-toggler-icon {
         display: inline-block;
         width: 1.5em;
         height: 1.5em;
         vertical-align: middle;
         content: "";
         background: no-repeat center center;
         background-size: 100% 100%; }
         @media (max-width: 575.98px) {
         .navbar-expand-sm > .container,
         .navbar-expand-sm > .container-fluid {
         padding-right: 0;
         padding-left: 0; } }
         @media (min-width: 576px) {
         .navbar-expand-sm {
         flex-flow: row nowrap;
         justify-content: flex-start; }
         .navbar-expand-sm .navbar-nav {
         flex-direction: row; }
         .navbar-expand-sm .navbar-nav .dropdown-menu {
         position: absolute; }
         .navbar-expand-sm .navbar-nav .nav-link {
         padding-right: 0.5rem;
         padding-left: 0.5rem; }
         .navbar-expand-sm > .container,
         .navbar-expand-sm > .container-fluid {
         flex-wrap: nowrap; }
         .navbar-expand-sm .navbar-collapse {
         display: flex !important;
         flex-basis: auto; }
         .navbar-expand-sm .navbar-toggler {
         display: none; } }
         @media (max-width: 767.98px) {
         .navbar-expand-md > .container,
         .navbar-expand-md > .container-fluid {
         padding-right: 0;
         padding-left: 0; } }
         @media (min-width: 768px) {
         .navbar-expand-md {
         flex-flow: row nowrap;
         justify-content: flex-start; }
         .navbar-expand-md .navbar-nav {
         flex-direction: row; }
         .navbar-expand-md .navbar-nav .dropdown-menu {
         position: absolute; }
         .navbar-expand-md .navbar-nav .nav-link {
         padding-right: 0.5rem;
         padding-left: 0.5rem; }
         .navbar-expand-md > .container,
         .navbar-expand-md > .container-fluid {
         flex-wrap: nowrap; }
         .navbar-expand-md .navbar-collapse {
         display: flex !important;
         flex-basis: auto; }
         .navbar-expand-md .navbar-toggler {
         display: none; } }
         @media (max-width: 991.98px) {
         .navbar-expand-lg > .container,
         .navbar-expand-lg > .container-fluid {
         padding-right: 0;
         padding-left: 0; } }
         @media (min-width: 992px) {
         .navbar-expand-lg {
         flex-flow: row nowrap;
         justify-content: flex-start; }
         .navbar-expand-lg .navbar-nav {
         flex-direction: row; }
         .navbar-expand-lg .navbar-nav .dropdown-menu {
         position: absolute; }
         .navbar-expand-lg .navbar-nav .nav-link {
         padding-right: 0.5rem;
         padding-left: 0.5rem; }
         .navbar-expand-lg > .container,
         .navbar-expand-lg > .container-fluid {
         flex-wrap: nowrap; }
         .navbar-expand-lg .navbar-collapse {
         display: flex !important;
         flex-basis: auto; }
         .navbar-expand-lg .navbar-toggler {
         display: none; } }
         @media (max-width: 1199.98px) {
         .navbar-expand-xl > .container,
         .navbar-expand-xl > .container-fluid {
         padding-right: 0;
         padding-left: 0; } }
         @media (min-width: 1200px) {
         .navbar-expand-xl {
         flex-flow: row nowrap;
         justify-content: flex-start; }
         .navbar-expand-xl .navbar-nav {
         flex-direction: row; }
         .navbar-expand-xl .navbar-nav .dropdown-menu {
         position: absolute; }
         .navbar-expand-xl .navbar-nav .nav-link {
         padding-right: 0.5rem;
         padding-left: 0.5rem; }
         .navbar-expand-xl > .container,
         .navbar-expand-xl > .container-fluid {
         flex-wrap: nowrap; }
         .navbar-expand-xl .navbar-collapse {
         display: flex !important;
         flex-basis: auto; }
         .navbar-expand-xl .navbar-toggler {
         display: none; } }
         .navbar-expand {
         flex-flow: row nowrap;
         justify-content: flex-start; }
         .navbar-expand > .container,
         .navbar-expand > .container-fluid {
         padding-right: 0;
         padding-left: 0; }
         .navbar-expand .navbar-nav {
         flex-direction: row; }
         .navbar-expand .navbar-nav .dropdown-menu {
         position: absolute; }
         .navbar-expand .navbar-nav .nav-link {
         padding-right: 0.5rem;
         padding-left: 0.5rem; }
         .navbar-expand > .container,
         .navbar-expand > .container-fluid {
         flex-wrap: nowrap; }
         .navbar-expand .navbar-collapse {
         display: flex !important;
         flex-basis: auto; }
         .navbar-expand .navbar-toggler {
         display: none; }
         .navbar-light .navbar-brand {
         color: rgba(0, 0, 0, 0.9); }
         .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
         color: rgba(0, 0, 0, 0.9); }
         .navbar-light .navbar-nav .nav-link {
         color: rgba(0, 0, 0, 0.5); }
         .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
         color: rgba(0, 0, 0, 0.7); }
         .navbar-light .navbar-nav .nav-link.disabled {
         color: rgba(0, 0, 0, 0.3); }
         .navbar-light .navbar-nav .show > .nav-link,
         .navbar-light .navbar-nav .active > .nav-link,
         .navbar-light .navbar-nav .nav-link.show,
         .navbar-light .navbar-nav .nav-link.active {
         color: rgba(0, 0, 0, 0.9); }
         .navbar-light .navbar-toggler {
         color: rgba(0, 0, 0, 0.5);
         border-color: rgba(0, 0, 0, 0.1); }
         .navbar-light .navbar-toggler-icon {
         background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }
         .navbar-light .navbar-text {
         color: rgba(0, 0, 0, 0.5); }
         .navbar-light .navbar-text a {
         color: rgba(0, 0, 0, 0.9); }
         /* .navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
         color: rgba(0, 0, 0, 0.9); } */
         .navbar-dark .navbar-brand {
         color: #fff; }
         .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
         color: #fff; }
         .navbar-dark .navbar-nav .nav-link {
         color: rgba(255, 255, 255, 0.5); }
         .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
         color: rgba(255, 255, 255, 0.75); }
         .navbar-dark .navbar-nav .nav-link.disabled {
         color: rgba(255, 255, 255, 0.25); }
         .navbar-dark .navbar-nav .show > .nav-link,
         .navbar-dark .navbar-nav .active > .nav-link,
         .navbar-dark .navbar-nav .nav-link.show,
         .navbar-dark .navbar-nav .nav-link.active {
         color: #fff; }
         .navbar-dark .navbar-toggler {
         color: rgba(255, 255, 255, 0.5);
         border-color: rgba(255, 255, 255, 0.1); }
         .navbar-dark .navbar-toggler-icon {
         background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }
         .navbar-dark .navbar-text {
         color: rgba(255, 255, 255, 0.5); }
         /* .navbar-dark .navbar-text a {
         color: #fff; } */
         .card {
         position: relative;
         display: flex;
         flex-direction: column;
         min-width: 0;
         word-wrap: break-word;
         background-color: #fff;
         background-clip: border-box;
         border: 1px solid rgba(0, 0, 0, 0.125);
         border-radius: 0.25rem; }
         .card > hr {
         margin-right: 0;
         margin-left: 0; }
         .card > .list-group:first-child .list-group-item:first-child {
         border-top-left-radius: 0.25rem;
         border-top-right-radius: 0.25rem; }
         .card > .list-group:last-child .list-group-item:last-child {
         border-bottom-right-radius: 0.25rem;
         border-bottom-left-radius: 0.25rem; }
         .card-body {
         flex: 1 1 auto;
         padding: 1.25rem; }
         .card-title {
         margin-bottom: 0.75rem; }
         .card-subtitle {
         margin-top: -0.375rem;
         margin-bottom: 0; }
         .card-text:last-child {
         margin-bottom: 0; }
         .card-link:hover {
         text-decoration: none; }
         .card-link + .card-link {
         margin-left: 1.25rem; }
         .card-header {
         padding: 0.75rem 1.25rem;
         margin-bottom: 0;
         background-color: rgba(0, 0, 0, 0.03);
         border-bottom: 1px solid rgba(0, 0, 0, 0.125); }
         .card-header:first-child {
         border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0; }
         .card-header + .list-group .list-group-item:first-child {
         border-top: 0; }
         .card-footer {
         padding: 0.75rem 1.25rem;
         background-color: rgba(0, 0, 0, 0.03);
         border-top: 1px solid rgba(0, 0, 0, 0.125); }
         .card-footer:last-child {
         border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px); }
         .card-header-tabs {
         margin-right: -0.625rem;
         margin-bottom: -0.75rem;
         margin-left: -0.625rem;
         border-bottom: 0; }
         .card-header-pills {
         margin-right: -0.625rem;
         margin-left: -0.625rem; }
         .card-img-overlay {
         position: absolute;
         top: 0;
         right: 0;
         bottom: 0;
         left: 0;
         padding: 1.25rem; }
         .card-img {
         width: 100%;
         border-radius: calc(0.25rem - 1px); }
         .card-img-top {
         width: 100%;
         border-top-left-radius: calc(0.25rem - 1px);
         border-top-right-radius: calc(0.25rem - 1px); }
         .card-img-bottom {
         width: 100%;
         border-bottom-right-radius: calc(0.25rem - 1px);
         border-bottom-left-radius: calc(0.25rem - 1px); }
         .card-deck {
         display: flex;
         flex-direction: column; }
         .card-deck .card {
         margin-bottom: 15px; }
         @media (min-width: 576px) {
         .card-deck {
         flex-flow: row wrap;
         margin-right: -15px;
         margin-left: -15px; }
         .card-deck .card {
         display: flex;
         flex: 1 0 0%;
         flex-direction: column;
         margin-right: 15px;
         margin-bottom: 0;
         margin-left: 15px; } }
         .card-group {
         display: flex;
         flex-direction: column; }
         .card-group > .card {
         margin-bottom: 15px; }
         @media (min-width: 576px) {
         .card-group {
         flex-flow: row wrap; }
         .card-group > .card {
         flex: 1 0 0%;
         margin-bottom: 0; }
         .card-group > .card + .card {
         margin-left: 0;
         border-left: 0; }
         .card-group > .card:first-child {
         border-top-right-radius: 0;
         border-bottom-right-radius: 0; }
         .card-group > .card:first-child .card-img-top,
         .card-group > .card:first-child .card-header {
         border-top-right-radius: 0; }
         .card-group > .card:first-child .card-img-bottom,
         .card-group > .card:first-child .card-footer {
         border-bottom-right-radius: 0; }
         .card-group > .card:last-child {
         border-top-left-radius: 0;
         border-bottom-left-radius: 0; }
         .card-group > .card:last-child .card-img-top,
         .card-group > .card:last-child .card-header {
         border-top-left-radius: 0; }
         .card-group > .card:last-child .card-img-bottom,
         .card-group > .card:last-child .card-footer {
         border-bottom-left-radius: 0; }
         .card-group > .card:only-child {
         border-radius: 0.25rem; }
         .card-group > .card:only-child .card-img-top,
         .card-group > .card:only-child .card-header {
         border-top-left-radius: 0.25rem;
         border-top-right-radius: 0.25rem; }
         .card-group > .card:only-child .card-img-bottom,
         .card-group > .card:only-child .card-footer {
         border-bottom-right-radius: 0.25rem;
         border-bottom-left-radius: 0.25rem; }
         .card-group > .card:not(:first-child):not(:last-child):not(:only-child) {
         border-radius: 0; }
         .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
         .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
         .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header,
         .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
         border-radius: 0; } }
         .card-columns .card {
         margin-bottom: 0.75rem; }
         @media (min-width: 576px) {
         .card-columns {
         -webkit-column-count: 3;
         -moz-column-count: 3;
         column-count: 3;
         -webkit-column-gap: 1.25rem;
         -moz-column-gap: 1.25rem;
         column-gap: 1.25rem;
         orphans: 1;
         widows: 1; }
         .card-columns .card {
         display: inline-block;
         width: 100%; } }
         .accordion .card:not(:first-of-type):not(:last-of-type) {
         border-bottom: 0;
         border-radius: 0; }
         .accordion .card:not(:first-of-type) .card-header:first-child {
         border-radius: 0; }
         .accordion .card:first-of-type {
         border-bottom: 0;
         border-bottom-right-radius: 0;
         border-bottom-left-radius: 0; }
         .accordion .card:last-of-type {
         border-top-left-radius: 0;
         border-top-right-radius: 0; }
         .breadcrumb {
         display: flex;
         flex-wrap: wrap;
         padding: 0.75rem 1rem;
         margin-bottom: 1rem;
         list-style: none;
         background-color: #e9ecef;
         border-radius: 0.25rem; }
         .breadcrumb-item + .breadcrumb-item {
         padding-left: 0.5rem; }
         .breadcrumb-item + .breadcrumb-item::before {
         display: inline-block;
         padding-right: 0.5rem;
         color: #6c757d;
         content: "/"; }
         .breadcrumb-item + .breadcrumb-item:hover::before {
         text-decoration: underline; }
         .breadcrumb-item + .breadcrumb-item:hover::before {
         text-decoration: none; }
         .breadcrumb-item.active {
         color: #6c757d; }
         .pagination {
         display: flex;
         padding-left: 0;
         list-style: none;
         border-radius: 0.25rem; }
         .page-link {
         position: relative;
         display: block;
         padding: 0.5rem 0.75rem;
         margin-left: -1px;
         line-height: 1.25;
         color: #007bff;
         background-color: #fff;
         border: 1px solid #dee2e6; }
         .page-link:hover {
         z-index: 2;
         color: #0056b3;
         text-decoration: none;
         background-color: #e9ecef;
         border-color: #dee2e6; }
         .page-link:focus {
         z-index: 2;
         outline: 0;
         box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
         .page-link:not(:disabled):not(.disabled) {
         cursor: pointer; }
         .page-item:first-child .page-link {
         margin-left: 0;
         border-top-left-radius: 0.25rem;
         border-bottom-left-radius: 0.25rem; }
         .page-item:last-child .page-link {
         border-top-right-radius: 0.25rem;
         border-bottom-right-radius: 0.25rem; }
         .page-item.active .page-link {
         z-index: 1;
         color: #fff;
         background-color: #007bff;
         border-color: #007bff; }
         .page-item.disabled .page-link {
         color: #6c757d;
         pointer-events: none;
         cursor: auto;
         background-color: #fff;
         border-color: #dee2e6; }
         .pagination-lg .page-link {
         padding: 0.75rem 1.5rem;
         font-size: 1.25rem;
         line-height: 1.5; }
         .pagination-lg .page-item:first-child .page-link {
         border-top-left-radius: 0.3rem;
         border-bottom-left-radius: 0.3rem; }
         .pagination-lg .page-item:last-child .page-link {
         border-top-right-radius: 0.3rem;
         border-bottom-right-radius: 0.3rem; }
         .pagination-sm .page-link {
         padding: 0.25rem 0.5rem;
         font-size: 0.875rem;
         line-height: 1.5; }
         .pagination-sm .page-item:first-child .page-link {
         border-top-left-radius: 0.2rem;
         border-bottom-left-radius: 0.2rem; }
         .pagination-sm .page-item:last-child .page-link {
         border-top-right-radius: 0.2rem;
         border-bottom-right-radius: 0.2rem; }
         .badge {
         display: inline-block;
         padding: 0.25em 0.4em;
         font-size: 75%;
         font-weight: 700;
         line-height: 1;
         text-align: center;
         white-space: nowrap;
         vertical-align: baseline;
         border-radius: 0.25rem; }
         .badge:empty {
         display: none; }
         .btn .badge {
         position: relative;
         top: -1px; }
         .badge-pill {
         padding-right: 0.6em;
         padding-left: 0.6em;
         border-radius: 10rem; }
         .badge-primary {
         color: #fff;
         background-color: #007bff; }
         .badge-primary[href]:hover, .badge-primary[href]:focus {
         color: #fff;
         text-decoration: none;
         background-color: #0062cc; }
         .badge-secondary {
         color: #fff;
         background-color: #6c757d; }
         /* .badge-secondary[href]:hover, .badge-secondary[href]:focus {
         color: #fff;
         text-decoration: none;
         background-color: #545b62; } */
         .badge-success {
         color: #fff;
         background-color: #28a745; }
         .badge-success[href]:hover, .badge-success[href]:focus {
         color: #fff;
         text-decoration: none;
         background-color: #1e7e34; }
         .badge-info {
         color: #fff;
         background-color: #17a2b8; }
         .badge-info[href]:hover, .badge-info[href]:focus {
         color: #fff;
         text-decoration: none;
         background-color: #117a8b; }
         .badge-warning {
         color: #212529;
         background-color: #ffc107; }
         .badge-warning[href]:hover, .badge-warning[href]:focus {
         color: #212529;
         text-decoration: none;
         background-color: #d39e00; }
         .badge-danger {
         color: #fff;
         background-color: #dc3545; }
         .badge-danger[href]:hover, .badge-danger[href]:focus {
         color: #fff;
         text-decoration: none;
         background-color: #bd2130; }
         .badge-light {
         color: #212529;
         background-color: #f8f9fa; }
         .badge-light[href]:hover, .badge-light[href]:focus {
         color: #212529;
         text-decoration: none;
         background-color: #dae0e5; }
         .badge-dark {
         color: #fff;
         background-color: #343a40; }
         .badge-dark[href]:hover, .badge-dark[href]:focus {
         color: #fff;
         text-decoration: none;
         background-color: #1d2124; }
         .jumbotron {
         padding: 2rem 1rem;
         margin-bottom: 2rem;
         background-color: #e9ecef;
         border-radius: 0.3rem; }
         @media (min-width: 576px) {
         .jumbotron {
         padding: 4rem 2rem; } }
         .jumbotron-fluid {
         padding-right: 0;
         padding-left: 0;
         border-radius: 0; }
         .alert {
         position: relative;
         padding: 0.75rem 1.25rem;
         margin-bottom: 1rem;
         border: 1px solid transparent;
         border-radius: 0.25rem; }
         .alert-heading {
         color: inherit; }
         .alert-link {
         font-weight: 700; }
         .alert-dismissible {
         padding-right: 4rem; }
         .alert-dismissible .close {
         position: absolute;
         top: 0;
         right: 0;
         padding: 0.75rem 1.25rem;
         color: inherit; }
         .alert-primary {
         color: #004085;
         background-color: #cce5ff;
         border-color: #b8daff; }
         .alert-primary hr {
         border-top-color: #9fcdff; }
         .alert-primary .alert-link {
         color: #002752; }
         .alert-secondary {
         color: #383d41;
         background-color: #e2e3e5;
         border-color: #d6d8db; }
         .alert-secondary hr {
         border-top-color: #c8cbcf; }
         .alert-secondary .alert-link {
         color: #202326; }
         .alert-success {
         color: #155724;
         background-color: #d4edda;
         border-color: #c3e6cb; }
         .alert-success hr {
         border-top-color: #b1dfbb; }
         .alert-success .alert-link {
         color: #0b2e13; }
         .alert-info {
         color: #0c5460;
         background-color: #d1ecf1;
         border-color: #bee5eb; }
         .alert-info hr {
         border-top-color: #abdde5; }
         .alert-info .alert-link {
         color: #062c33; }
         .alert-warning {
         color: #856404;
         background-color: #fff3cd;
         border-color: #ffeeba; }
         .alert-warning hr {
         border-top-color: #ffe8a1; }
         .alert-warning .alert-link {
         color: #533f03; }
         .alert-danger {
         color: #721c24;
         background-color: #f8d7da;
         border-color: #f5c6cb; }
         .alert-danger hr {
         border-top-color: #f1b0b7; }
         .alert-danger .alert-link {
         color: #491217; }
         .alert-light {
         color: #818182;
         background-color: #fefefe;
         border-color: #fdfdfe; }
         .alert-light hr {
         border-top-color: #ececf6; }
         .alert-light .alert-link {
         color: #686868; }
         .alert-dark {
         color: #1b1e21;
         background-color: #d6d8d9;
         border-color: #c6c8ca; }
         .alert-dark hr {
         border-top-color: #b9bbbe; }
         .alert-dark .alert-link {
         color: #040505; }
         @-webkit-keyframes progress-bar-stripes {
         from {
         background-position: 1rem 0; }
         to {
         background-position: 0 0; } }
         @keyframes progress-bar-stripes {
         from {
         background-position: 1rem 0; }
         to {
         background-position: 0 0; } }
         .progress {
         display: flex;
         height: 1rem;
         overflow: hidden;
         font-size: 0.75rem;
         background-color: #e9ecef;
         border-radius: 0.25rem; }
         .progress-bar {
         display: flex;
         flex-direction: column;
         justify-content: center;
         color: #fff;
         text-align: center;
         white-space: nowrap;
         background-color: #007bff;
         transition: width 0.6s ease; }
         @media screen and (prefers-reduced-motion: reduce) {
         .progress-bar {
         transition: none; } }
         .progress-bar-striped {
         background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
         background-size: 1rem 1rem; }
         .progress-bar-animated {
         -webkit-animation: progress-bar-stripes 1s linear infinite;
         animation: progress-bar-stripes 1s linear infinite; }
         .media {
         display: flex;
         align-items: flex-start; }
         .media-body {
         flex: 1; }
         .list-group {
         display: flex;
         flex-direction: column;
         padding-left: 0;
         margin-bottom: 0; }
         .list-group-item-action {
         width: 100%;
         color: #495057;
         text-align: inherit; }
         .list-group-item-action:hover, .list-group-item-action:focus {
         color: #495057;
         text-decoration: none;
         background-color: #f8f9fa; }
         .list-group-item-action:active {
         color: #212529;
         background-color: #e9ecef; }
         .list-group-item {
         position: relative;
         display: block;
         padding: 0.75rem 1.25rem;
         margin-bottom: -1px;
         background-color: #fff;
         border: 1px solid rgba(0, 0, 0, 0.125); }
         .list-group-item:first-child {
         border-top-left-radius: 0.25rem;
         border-top-right-radius: 0.25rem; }
         .list-group-item:last-child {
         margin-bottom: 0;
         border-bottom-right-radius: 0.25rem;
         border-bottom-left-radius: 0.25rem; }
         .list-group-item:hover, .list-group-item:focus {
         z-index: 1;
         text-decoration: none; }
         .list-group-item.disabled, .list-group-item:disabled {
         color: #6c757d;
         background-color: #fff; }
         .list-group-item.active {
         z-index: 2;
         color: #fff;
         background-color: #007bff;
         border-color: #007bff; }
         .list-group-flush .list-group-item {
         border-right: 0;
         border-left: 0;
         border-radius: 0; }
         .list-group-flush:first-child .list-group-item:first-child {
         border-top: 0; }
         .list-group-flush:last-child .list-group-item:last-child {
         border-bottom: 0; }
         .list-group-item-primary {
         color: #004085;
         background-color: #b8daff; }
         .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
         color: #004085;
         background-color: #9fcdff; }
         .list-group-item-primary.list-group-item-action.active {
         color: #fff;
         background-color: #004085;
         border-color: #004085; }
         .list-group-item-secondary {
         color: #383d41;
         background-color: #d6d8db; }
         .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
         color: #383d41;
         background-color: #c8cbcf; }
         .list-group-item-secondary.list-group-item-action.active {
         color: #fff;
         background-color: #383d41;
         border-color: #383d41; }
         .list-group-item-success {
         color: #155724;
         background-color: #c3e6cb; }
         .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
         color: #155724;
         background-color: #b1dfbb; }
         .list-group-item-success.list-group-item-action.active {
         color: #fff;
         background-color: #155724;
         border-color: #155724; }
         .list-group-item-info {
         color: #0c5460;
         background-color: #bee5eb; }
         .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
         color: #0c5460;
         background-color: #abdde5; }
         .list-group-item-info.list-group-item-action.active {
         color: #fff;
         background-color: #0c5460;
         border-color: #0c5460; }
         .list-group-item-warning {
         color: #856404;
         background-color: #ffeeba; }
         .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
         color: #856404;
         background-color: #ffe8a1; }
         .list-group-item-warning.list-group-item-action.active {
         color: #fff;
         background-color: #856404;
         border-color: #856404; }
         .list-group-item-danger {
         color: #721c24;
         background-color: #f5c6cb; }
         .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
         color: #721c24;
         background-color: #f1b0b7; }
         .list-group-item-danger.list-group-item-action.active {
         color: #fff;
         background-color: #721c24;
         border-color: #721c24; }
         .list-group-item-light {
         color: #818182;
         background-color: #fdfdfe; }
         .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
         color: #818182;
         background-color: #ececf6; }
         .list-group-item-light.list-group-item-action.active {
         color: #fff;
         background-color: #818182;
         border-color: #818182; }
         .list-group-item-dark {
         color: #1b1e21;
         background-color: #c6c8ca; }
         .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
         color: #1b1e21;
         background-color: #b9bbbe; }
         .list-group-item-dark.list-group-item-action.active {
         color: #fff;
         background-color: #1b1e21;
         border-color: #1b1e21; }
         .close {
         float: right;
         font-size: 1.5rem;
         font-weight: 700;
         line-height: 1;
         color: #000;
         text-shadow: 0 1px 0 #fff;
         opacity: .5; }
         .close:not(:disabled):not(.disabled) {
         cursor: pointer; }
         .close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
         color: #000;
         text-decoration: none;
         opacity: .75; }
         button.close {
         padding: 0;
         background-color: transparent;
         border: 0;
         -webkit-appearance: none; }
         .modal-open {
         overflow: hidden; }
         .modal-open .modal {
         overflow-x: hidden;
         overflow-y: auto; }
         .modal {
         position: fixed;
         top: 0;
         right: 0;
         bottom: 0;
         left: 0;
         z-index: 1050;
         display: none;
         overflow: hidden;
         outline: 0; }
         .modal-dialog {
         position: relative;
         width: auto;
         margin: 0.5rem;
         pointer-events: none; }
         .modal.fade .modal-dialog {
         transition: -webkit-transform 0.3s ease-out;
         transition: transform 0.3s ease-out;
         transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
         -webkit-transform: translate(0, -25%);
         transform: translate(0, -25%); }
         @media screen and (prefers-reduced-motion: reduce) {
         .modal.fade .modal-dialog {
         transition: none; } }
         .modal.show .modal-dialog {
         -webkit-transform: translate(0, 0);
         transform: translate(0, 0); }
         .modal-dialog-centered {
         display: flex;
         align-items: center;
         min-height: calc(100% - (0.5rem * 2)); }
         .modal-dialog-centered::before {
         display: block;
         height: calc(100vh - (0.5rem * 2));
         content: ""; }
         .modal-content {
         position: relative;
         display: flex;
         flex-direction: column;
         width: 100%;
         pointer-events: auto;
         background-color: #fff;
         background-clip: padding-box;
         border: 1px solid rgba(0, 0, 0, 0.2);
         border-radius: 0.3rem;
         outline: 0; }
         .modal-backdrop {
         position: fixed;
         top: 0;
         right: 0;
         bottom: 0;
         left: 0;
         z-index: 1040;
         background-color: #000; }
         .modal-backdrop.fade {
         opacity: 0; }
         .modal-backdrop.show {
         opacity: 0.5; }
         .modal-header {
         display: flex;
         align-items: flex-start;
         justify-content: space-between;
         padding: 1rem;
         border-bottom: 1px solid #e9ecef;
         border-top-left-radius: 0.3rem;
         border-top-right-radius: 0.3rem; }
         .modal-header .close {
         padding: 1rem;
         margin: -1rem -1rem -1rem auto; }
         .modal-title {
         margin-bottom: 0;
         line-height: 1.5; }
         .modal-body {
         position: relative;
         flex: 1 1 auto;
         padding: 1rem; }
         .modal-footer {
         display: flex;
         align-items: center;
         justify-content: flex-end;
         padding: 1rem;
         border-top: 1px solid #e9ecef; }
         .modal-footer > :not(:first-child) {
         margin-left: .25rem; }
         .modal-footer > :not(:last-child) {
         margin-right: .25rem; }
         .modal-scrollbar-measure {
         position: absolute;
         top: -9999px;
         width: 50px;
         height: 50px;
         overflow: scroll; }
         @media (min-width: 576px) {
         .modal-dialog {
         max-width: 500px;
         margin: 1.75rem auto; }
         .modal-dialog-centered {
         min-height: calc(100% - (1.75rem * 2)); }
         .modal-dialog-centered::before {
         height: calc(100vh - (1.75rem * 2)); }
         .modal-sm {
         max-width: 300px; } }
         @media (min-width: 992px) {
         .modal-lg {
         max-width: 800px; } }
         .tooltip {
         position: absolute;
         z-index: 1070;
         display: block;
         margin: 0;
         font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
         font-style: normal;
         font-weight: 400;
         line-height: 1.5;
         text-align: left;
         text-align: start;
         text-decoration: none;
         text-shadow: none;
         text-transform: none;
         letter-spacing: normal;
         word-break: normal;
         word-spacing: normal;
         white-space: normal;
         line-break: auto;
         font-size: 0.875rem;
         word-wrap: break-word;
         opacity: 0; }
         .tooltip.show {
         opacity: 0.9; }
         .tooltip .arrow {
         position: absolute;
         display: block;
         width: 0.8rem;
         height: 0.4rem; }
         .tooltip .arrow::before {
         position: absolute;
         content: "";
         border-color: transparent;
         border-style: solid; }
         .bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
         padding: 0.4rem 0; }
         .bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
         bottom: 0; }
         .bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
         top: 0;
         border-width: 0.4rem 0.4rem 0;
         border-top-color: #000; }
         .bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
         padding: 0 0.4rem; }
         .bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
         left: 0;
         width: 0.4rem;
         height: 0.8rem; }
         .bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
         right: 0;
         border-width: 0.4rem 0.4rem 0.4rem 0;
         border-right-color: #000; }
         .bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
         padding: 0.4rem 0; }
         .bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
         top: 0; }
         .bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
         bottom: 0;
         border-width: 0 0.4rem 0.4rem;
         border-bottom-color: #000; }
         .bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
         padding: 0 0.4rem; }
         .bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
         right: 0;
         width: 0.4rem;
         height: 0.8rem; }
         .bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
         left: 0;
         border-width: 0.4rem 0 0.4rem 0.4rem;
         border-left-color: #000; }
         .tooltip-inner {
         max-width: 200px;
         padding: 0.25rem 0.5rem;
         color: #fff;
         text-align: center;
         background-color: #000;
         border-radius: 0.25rem; }
         .popover {
         position: absolute;
         top: 0;
         left: 0;
         z-index: 1060;
         display: block;
         max-width: 276px;
         font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
         font-style: normal;
         font-weight: 400;
         line-height: 1.5;
         text-align: left;
         text-align: start;
         text-decoration: none;
         text-shadow: none;
         text-transform: none;
         letter-spacing: normal;
         word-break: normal;
         word-spacing: normal;
         white-space: normal;
         line-break: auto;
         font-size: 0.875rem;
         word-wrap: break-word;
         background-color: #fff;
         background-clip: padding-box;
         border: 1px solid rgba(0, 0, 0, 0.2);
         border-radius: 0.3rem; }
         .popover .arrow {
         position: absolute;
         display: block;
         width: 1rem;
         height: 0.5rem;
         margin: 0 0.3rem; }
         .popover .arrow::before, .popover .arrow::after {
         position: absolute;
         display: block;
         content: "";
         border-color: transparent;
         border-style: solid; }
         .bs-popover-top, .bs-popover-auto[x-placement^="top"] {
         margin-bottom: 0.5rem; }
         .bs-popover-top .arrow, .bs-popover-auto[x-placement^="top"] .arrow {
         bottom: calc((0.5rem + 1px) * -1); }
         .bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before,
         .bs-popover-top .arrow::after,
         .bs-popover-auto[x-placement^="top"] .arrow::after {
         border-width: 0.5rem 0.5rem 0; }
         .bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before {
         bottom: 0;
         border-top-color: rgba(0, 0, 0, 0.25); }
         .bs-popover-top .arrow::after,
         .bs-popover-auto[x-placement^="top"] .arrow::after {
         bottom: 1px;
         border-top-color: #fff; }
         .bs-popover-right, .bs-popover-auto[x-placement^="right"] {
         margin-left: 0.5rem; }
         .bs-popover-right .arrow, .bs-popover-auto[x-placement^="right"] .arrow {
         left: calc((0.5rem + 1px) * -1);
         width: 0.5rem;
         height: 1rem;
         margin: 0.3rem 0; }
         .bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before,
         .bs-popover-right .arrow::after,
         .bs-popover-auto[x-placement^="right"] .arrow::after {
         border-width: 0.5rem 0.5rem 0.5rem 0; }
         .bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before {
         left: 0;
         border-right-color: rgba(0, 0, 0, 0.25); }
         .bs-popover-right .arrow::after,
         .bs-popover-auto[x-placement^="right"] .arrow::after {
         left: 1px;
         border-right-color: #fff; }
         .bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
         margin-top: 0.5rem; }
         .bs-popover-bottom .arrow, .bs-popover-auto[x-placement^="bottom"] .arrow {
         top: calc((0.5rem + 1px) * -1); }
         .bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before,
         .bs-popover-bottom .arrow::after,
         .bs-popover-auto[x-placement^="bottom"] .arrow::after {
         border-width: 0 0.5rem 0.5rem 0.5rem; }
         .bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before {
         top: 0;
         border-bottom-color: rgba(0, 0, 0, 0.25); }
         .bs-popover-bottom .arrow::after,
         .bs-popover-auto[x-placement^="bottom"] .arrow::after {
         top: 1px;
         border-bottom-color: #fff; }
         .bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
         position: absolute;
         top: 0;
         left: 50%;
         display: block;
         width: 1rem;
         margin-left: -0.5rem;
         content: "";
         border-bottom: 1px solid #f7f7f7; }
         .bs-popover-left, .bs-popover-auto[x-placement^="left"] {
         margin-right: 0.5rem; }
         .bs-popover-left .arrow, .bs-popover-auto[x-placement^="left"] .arrow {
         right: calc((0.5rem + 1px) * -1);
         width: 0.5rem;
         height: 1rem;
         margin: 0.3rem 0; }
         .bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before,
         .bs-popover-left .arrow::after,
         .bs-popover-auto[x-placement^="left"] .arrow::after {
         border-width: 0.5rem 0 0.5rem 0.5rem; }
         .bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before {
         right: 0;
         border-left-color: rgba(0, 0, 0, 0.25); }
         .bs-popover-left .arrow::after,
         .bs-popover-auto[x-placement^="left"] .arrow::after {
         right: 1px;
         border-left-color: #fff; }
         .popover-header {
         padding: 0.5rem 0.75rem;
         margin-bottom: 0;
         font-size: 1rem;
         color: inherit;
         background-color: #f7f7f7;
         border-bottom: 1px solid #ebebeb;
         border-top-left-radius: calc(0.3rem - 1px);
         border-top-right-radius: calc(0.3rem - 1px); }
         .popover-header:empty {
         display: none; }
         .popover-body {
         padding: 0.5rem 0.75rem;
         color: #212529; }
         .carousel {
         position: relative; }
         .carousel-inner {
         position: relative;
         width: 100%;
         overflow: hidden; }
         .carousel-item {
         position: relative;
         display: none;
         align-items: center;
         width: 100%;
         -webkit-backface-visibility: hidden;
         backface-visibility: hidden;
         -webkit-perspective: 1000px;
         perspective: 1000px; }
         .carousel-item.active,
         .carousel-item-next,
         .carousel-item-prev {
         display: block;
         transition: -webkit-transform 0.6s ease;
         transition: transform 0.6s ease;
         transition: transform 0.6s ease, -webkit-transform 0.6s ease; }
         @media screen and (prefers-reduced-motion: reduce) {
         .carousel-item.active,
         .carousel-item-next,
         .carousel-item-prev {
         transition: none; } }
         .carousel-item-next,
         .carousel-item-prev {
         position: absolute;
         top: 0; }
         .carousel-item-next.carousel-item-left,
         .carousel-item-prev.carousel-item-right {
         -webkit-transform: translateX(0);
         transform: translateX(0); }
         @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
         .carousel-item-next.carousel-item-left,
         .carousel-item-prev.carousel-item-right {
         -webkit-transform: translate3d(0, 0, 0);
         transform: translate3d(0, 0, 0); } }
         .carousel-item-next,
         .active.carousel-item-right {
         -webkit-transform: translateX(100%);
         transform: translateX(100%); }
         @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
         .carousel-item-next,
         .active.carousel-item-right {
         -webkit-transform: translate3d(100%, 0, 0);
         transform: translate3d(100%, 0, 0); } }
         .carousel-item-prev,
         .active.carousel-item-left {
         -webkit-transform: translateX(-100%);
         transform: translateX(-100%); }
         @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
         .carousel-item-prev,
         .active.carousel-item-left {
         -webkit-transform: translate3d(-100%, 0, 0);
         transform: translate3d(-100%, 0, 0); } }
         .carousel-fade .carousel-item {
         opacity: 0;
         transition-duration: .6s;
         transition-property: opacity; }
         .carousel-fade .carousel-item.active,
         .carousel-fade .carousel-item-next.carousel-item-left,
         .carousel-fade .carousel-item-prev.carousel-item-right {
         opacity: 1; }
         .carousel-fade .active.carousel-item-left,
         .carousel-fade .active.carousel-item-right {
         opacity: 0; }
         .carousel-fade .carousel-item-next,
         .carousel-fade .carousel-item-prev,
         .carousel-fade .carousel-item.active,
         .carousel-fade .active.carousel-item-left,
         .carousel-fade .active.carousel-item-prev {
         -webkit-transform: translateX(0);
         transform: translateX(0); }
         @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
         .carousel-fade .carousel-item-next,
         .carousel-fade .carousel-item-prev,
         .carousel-fade .carousel-item.active,
         .carousel-fade .active.carousel-item-left,
         .carousel-fade .active.carousel-item-prev {
         -webkit-transform: translate3d(0, 0, 0);
         transform: translate3d(0, 0, 0); } }
         .carousel-control-prev,
         .carousel-control-next {
         position: absolute;
         top: 0;
         bottom: 0;
         display: flex;
         align-items: center;
         justify-content: center;
         width: 15%;
         color: #fff;
         text-align: center;
         opacity: 0.5; }
         .carousel-control-prev:hover, .carousel-control-prev:focus,
         .carousel-control-next:hover,
         .carousel-control-next:focus {
         color: #fff;
         text-decoration: none;
         outline: 0;
         opacity: .9; }
         .carousel-control-prev {
         left: 0; }
         .carousel-control-next {
         right: 0; }
         .carousel-control-prev-icon,
         .carousel-control-next-icon {
         display: inline-block;
         width: 20px;
         height: 20px;
         background: transparent no-repeat center center;
         background-size: 100% 100%; }
         .carousel-control-prev-icon {
         background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E"); }
         .carousel-control-next-icon {
         background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E"); }
         .carousel-indicators {
         position: absolute;
         right: 0;
         bottom: 10px;
         left: 0;
         z-index: 15;
         display: flex;
         justify-content: center;
         padding-left: 0;
         margin-right: 15%;
         margin-left: 15%;
         list-style: none; }
         .carousel-indicators li {
         position: relative;
         flex: 0 1 auto;
         width: 30px;
         height: 3px;
         margin-right: 3px;
         margin-left: 3px;
         text-indent: -999px;
         cursor: pointer;
         background-color: rgba(255, 255, 255, 0.5); }
         .carousel-indicators li::before {
         position: absolute;
         top: -10px;
         left: 0;
         display: inline-block;
         width: 100%;
         height: 10px;
         content: ""; }
         .carousel-indicators li::after {
         position: absolute;
         bottom: -10px;
         left: 0;
         display: inline-block;
         width: 100%;
         height: 10px;
         content: ""; }
         .carousel-indicators .active {
         background-color: #fff; }
         .carousel-caption {
         position: absolute;
         right: 15%;
         bottom: 20px;
         left: 15%;
         z-index: 10;
         padding-top: 20px;
         padding-bottom: 20px;
         color: #fff;
         text-align: center; }
         .align-baseline {
         vertical-align: baseline !important; }
         .align-top {
         vertical-align: top !important; }
         .align-middle {
         vertical-align: middle !important; }
         .align-bottom {
         vertical-align: bottom !important; }
         .align-text-bottom {
         vertical-align: text-bottom !important; }
         .align-text-top {
         vertical-align: text-top !important; }
         .bg-primary {
         background-color: #007bff !important; }
         a.bg-primary:hover, a.bg-primary:focus,
         button.bg-primary:hover,
         button.bg-primary:focus {
         background-color: #0062cc !important; }
         .bg-secondary {
         background-color: #6c757d !important; }
         a.bg-secondary:hover, a.bg-secondary:focus,
         button.bg-secondary:hover,
         button.bg-secondary:focus {
         background-color: #545b62 !important; }
         .bg-success {
         background-color: #28a745 !important; }
         a.bg-success:hover, a.bg-success:focus,
         button.bg-success:hover,
         button.bg-success:focus {
         background-color: #1e7e34 !important; }
         .bg-info {
         background-color: #17a2b8 !important; }
         a.bg-info:hover, a.bg-info:focus,
         button.bg-info:hover,
         button.bg-info:focus {
         background-color: #117a8b !important; }
         .bg-warning {
         background-color: #ffc107 !important; }
         a.bg-warning:hover, a.bg-warning:focus,
         button.bg-warning:hover,
         button.bg-warning:focus {
         background-color: #d39e00 !important; }
         .bg-danger {
         background-color: #dc3545 !important; }
         a.bg-danger:hover, a.bg-danger:focus,
         button.bg-danger:hover,
         button.bg-danger:focus {
         background-color: #bd2130 !important; }
         .bg-light {
         background-color: #f8f9fa !important; }
         a.bg-light:hover, a.bg-light:focus,
         button.bg-light:hover,
         button.bg-light:focus {
         background-color: #dae0e5 !important; }
         .bg-dark {
         background-color: #343a40 !important; }
         a.bg-dark:hover, a.bg-dark:focus,
         button.bg-dark:hover,
         button.bg-dark:focus {
         background-color: #1d2124 !important; }
         .bg-white {
         background-color: #fff !important; }
         .bg-transparent {
         background-color: transparent !important; }
         .border {
         border: 1px solid #dee2e6 !important; }
         .border-top {
         border-top: 1px solid #dee2e6 !important; }
         .border-right {
         border-right: 1px solid #dee2e6 !important; }
         .border-bottom {
         border-bottom: 1px solid #dee2e6 !important; }
         .border-left {
         border-left: 1px solid #dee2e6 !important; }
         .border-0 {
         border: 0 !important; }
         .border-top-0 {
         border-top: 0 !important; }
         .border-right-0 {
         border-right: 0 !important; }
         .border-bottom-0 {
         border-bottom: 0 !important; }
         .border-left-0 {
         border-left: 0 !important; }
         .border-primary {
         border-color: #007bff !important; }
         .border-secondary {
         border-color: #6c757d !important; }
         .border-success {
         border-color: #28a745 !important; }
         .border-info {
         border-color: #17a2b8 !important; }
         .border-warning {
         border-color: #ffc107 !important; }
         .border-danger {
         border-color: #dc3545 !important; }
         .border-light {
         border-color: #f8f9fa !important; }
         .border-dark {
         border-color: #343a40 !important; }
         .border-white {
         border-color: #fff !important; }
         .rounded {
         border-radius: 0.25rem !important; }
         .rounded-top {
         border-top-left-radius: 0.25rem !important;
         border-top-right-radius: 0.25rem !important; }
         .rounded-right {
         border-top-right-radius: 0.25rem !important;
         border-bottom-right-radius: 0.25rem !important; }
         .rounded-bottom {
         border-bottom-right-radius: 0.25rem !important;
         border-bottom-left-radius: 0.25rem !important; }
         .rounded-left {
         border-top-left-radius: 0.25rem !important;
         border-bottom-left-radius: 0.25rem !important; }
         .rounded-circle {
         border-radius: 50% !important; }
         .rounded-0 {
         border-radius: 0 !important; }
         .clearfix::after {
         display: block;
         clear: both;
         content: ""; }
         .d-none {
         display: none !important; }
         .d-inline {
         display: inline !important; }
         .d-inline-block {
         display: inline-block !important; }
         .d-block {
         display: block !important; }
         .d-table {
         display: table !important; }
         .d-table-row {
         display: table-row !important; }
         .d-table-cell {
         display: table-cell !important; }
         .d-flex {
         display: flex !important; }
         .d-inline-flex {
         display: inline-flex !important; }
         @media (min-width: 576px) {
         .d-sm-none {
         display: none !important; }
         .d-sm-inline {
         display: inline !important; }
         .d-sm-inline-block {
         display: inline-block !important; }
         .d-sm-block {
         display: block !important; }
         .d-sm-table {
         display: table !important; }
         .d-sm-table-row {
         display: table-row !important; }
         .d-sm-table-cell {
         display: table-cell !important; }
         .d-sm-flex {
         display: flex !important; }
         .d-sm-inline-flex {
         display: inline-flex !important; } }
         @media (min-width: 768px) {
         .d-md-none {
         display: none !important; }
         .d-md-inline {
         display: inline !important; }
         .d-md-inline-block {
         display: inline-block !important; }
         .d-md-block {
         display: block !important; }
         .d-md-table {
         display: table !important; }
         .d-md-table-row {
         display: table-row !important; }
         .d-md-table-cell {
         display: table-cell !important; }
         .d-md-flex {
         display: flex !important; }
         .d-md-inline-flex {
         display: inline-flex !important; } }
         @media (min-width: 992px) {
         .d-lg-none {
         display: none !important; }
         .d-lg-inline {
         display: inline !important; }
         .d-lg-inline-block {
         display: inline-block !important; }
         .d-lg-block {
         display: block !important; }
         .d-lg-table {
         display: table !important; }
         .d-lg-table-row {
         display: table-row !important; }
         .d-lg-table-cell {
         display: table-cell !important; }
         .d-lg-flex {
         display: flex !important; }
         .d-lg-inline-flex {
         display: inline-flex !important; } }
         @media (min-width: 1200px) {
         .d-xl-none {
         display: none !important; }
         .d-xl-inline {
         display: inline !important; }
         .d-xl-inline-block {
         display: inline-block !important; }
         .d-xl-block {
         display: block !important; }
         .d-xl-table {
         display: table !important; }
         .d-xl-table-row {
         display: table-row !important; }
         .d-xl-table-cell {
         display: table-cell !important; }
         .d-xl-flex {
         display: flex !important; }
         .d-xl-inline-flex {
         display: inline-flex !important; } }
         @media print {
         .d-print-none {
         display: none !important; }
         .d-print-inline {
         display: inline !important; }
         .d-print-inline-block {
         display: inline-block !important; }
         .d-print-block {
         display: block !important; }
         .d-print-table {
         display: table !important; }
         .d-print-table-row {
         display: table-row !important; }
         .d-print-table-cell {
         display: table-cell !important; }
         .d-print-flex {
         display: flex !important; }
         .d-print-inline-flex {
         display: inline-flex !important; } }
         .embed-responsive {
         position: relative;
         display: block;
         width: 100%;
         padding: 0;
         overflow: hidden; }
         .embed-responsive::before {
         display: block;
         content: ""; }
         .embed-responsive .embed-responsive-item,
         .embed-responsive iframe,
         .embed-responsive embed,
         .embed-responsive object,
         .embed-responsive video {
         position: absolute;
         top: 0;
         bottom: 0;
         left: 0;
         width: 100%;
         height: 100%;
         border: 0; }
         .embed-responsive-21by9::before {
         padding-top: 42.85714286%; }
         .embed-responsive-16by9::before {
         padding-top: 56.25%; }
         .embed-responsive-4by3::before {
         padding-top: 75%; }
         .embed-responsive-1by1::before {
         padding-top: 100%; }
         .flex-row {
         flex-direction: row !important; }
         .flex-column {
         flex-direction: column !important; }
         .flex-row-reverse {
         flex-direction: row-reverse !important; }
         .flex-column-reverse {
         flex-direction: column-reverse !important; }
         .flex-wrap {
         flex-wrap: wrap !important; }
         .flex-nowrap {
         flex-wrap: nowrap !important; }
         .flex-wrap-reverse {
         flex-wrap: wrap-reverse !important; }
         .flex-fill {
         flex: 1 1 auto !important; }
         .flex-grow-0 {
         flex-grow: 0 !important; }
         .flex-grow-1 {
         flex-grow: 1 !important; }
         .flex-shrink-0 {
         flex-shrink: 0 !important; }
         .flex-shrink-1 {
         flex-shrink: 1 !important; }
         .justify-content-start {
         justify-content: flex-start !important; }
         .justify-content-end {
         justify-content: flex-end !important; }
         .justify-content-center {
         justify-content: center !important; }
         .justify-content-between {
         justify-content: space-between !important; }
         .justify-content-around {
         justify-content: space-around !important; }
         .align-items-start {
         align-items: flex-start !important; }
         .align-items-end {
         align-items: flex-end !important; }
         .align-items-center {
         align-items: center !important; }
         .align-items-baseline {
         align-items: baseline !important; }
         .align-items-stretch {
         align-items: stretch !important; }
         .align-content-start {
         align-content: flex-start !important; }
         .align-content-end {
         align-content: flex-end !important; }
         .align-content-center {
         align-content: center !important; }
         .align-content-between {
         align-content: space-between !important; }
         .align-content-around {
         align-content: space-around !important; }
         .align-content-stretch {
         align-content: stretch !important; }
         .align-self-auto {
         align-self: auto !important; }
         .align-self-start {
         align-self: flex-start !important; }
         .align-self-end {
         align-self: flex-end !important; }
         .align-self-center {
         align-self: center !important; }
         .align-self-baseline {
         align-self: baseline !important; }
         .align-self-stretch {
         align-self: stretch !important; }
         @media (min-width: 576px) {
         .flex-sm-row {
         flex-direction: row !important; }
         .flex-sm-column {
         flex-direction: column !important; }
         .flex-sm-row-reverse {
         flex-direction: row-reverse !important; }
         .flex-sm-column-reverse {
         flex-direction: column-reverse !important; }
         .flex-sm-wrap {
         flex-wrap: wrap !important; }
         .flex-sm-nowrap {
         flex-wrap: nowrap !important; }
         .flex-sm-wrap-reverse {
         flex-wrap: wrap-reverse !important; }
         .flex-sm-fill {
         flex: 1 1 auto !important; }
         .flex-sm-grow-0 {
         flex-grow: 0 !important; }
         .flex-sm-grow-1 {
         flex-grow: 1 !important; }
         .flex-sm-shrink-0 {
         flex-shrink: 0 !important; }
         .flex-sm-shrink-1 {
         flex-shrink: 1 !important; }
         .justify-content-sm-start {
         justify-content: flex-start !important; }
         .justify-content-sm-end {
         justify-content: flex-end !important; }
         .justify-content-sm-center {
         justify-content: center !important; }
         .justify-content-sm-between {
         justify-content: space-between !important; }
         .justify-content-sm-around {
         justify-content: space-around !important; }
         .align-items-sm-start {
         align-items: flex-start !important; }
         .align-items-sm-end {
         align-items: flex-end !important; }
         .align-items-sm-center {
         align-items: center !important; }
         .align-items-sm-baseline {
         align-items: baseline !important; }
         .align-items-sm-stretch {
         align-items: stretch !important; }
         .align-content-sm-start {
         align-content: flex-start !important; }
         .align-content-sm-end {
         align-content: flex-end !important; }
         .align-content-sm-center {
         align-content: center !important; }
         .align-content-sm-between {
         align-content: space-between !important; }
         .align-content-sm-around {
         align-content: space-around !important; }
         .align-content-sm-stretch {
         align-content: stretch !important; }
         .align-self-sm-auto {
         align-self: auto !important; }
         .align-self-sm-start {
         align-self: flex-start !important; }
         .align-self-sm-end {
         align-self: flex-end !important; }
         .align-self-sm-center {
         align-self: center !important; }
         .align-self-sm-baseline {
         align-self: baseline !important; }
         .align-self-sm-stretch {
         align-self: stretch !important; } }
         @media (min-width: 768px) {
         .flex-md-row {
         flex-direction: row !important; }
         .flex-md-column {
         flex-direction: column !important; }
         .flex-md-row-reverse {
         flex-direction: row-reverse !important; }
         .flex-md-column-reverse {
         flex-direction: column-reverse !important; }
         .flex-md-wrap {
         flex-wrap: wrap !important; }
         .flex-md-nowrap {
         flex-wrap: nowrap !important; }
         .flex-md-wrap-reverse {
         flex-wrap: wrap-reverse !important; }
         .flex-md-fill {
         flex: 1 1 auto !important; }
         .flex-md-grow-0 {
         flex-grow: 0 !important; }
         .flex-md-grow-1 {
         flex-grow: 1 !important; }
         .flex-md-shrink-0 {
         flex-shrink: 0 !important; }
         .flex-md-shrink-1 {
         flex-shrink: 1 !important; }
         .justify-content-md-start {
         justify-content: flex-start !important; }
         .justify-content-md-end {
         justify-content: flex-end !important; }
         .justify-content-md-center {
         justify-content: center !important; }
         .justify-content-md-between {
         justify-content: space-between !important; }
         .justify-content-md-around {
         justify-content: space-around !important; }
         .align-items-md-start {
         align-items: flex-start !important; }
         .align-items-md-end {
         align-items: flex-end !important; }
         .align-items-md-center {
         align-items: center !important; }
         .align-items-md-baseline {
         align-items: baseline !important; }
         .align-items-md-stretch {
         align-items: stretch !important; }
         .align-content-md-start {
         align-content: flex-start !important; }
         .align-content-md-end {
         align-content: flex-end !important; }
         .align-content-md-center {
         align-content: center !important; }
         .align-content-md-between {
         align-content: space-between !important; }
         .align-content-md-around {
         align-content: space-around !important; }
         .align-content-md-stretch {
         align-content: stretch !important; }
         .align-self-md-auto {
         align-self: auto !important; }
         .align-self-md-start {
         align-self: flex-start !important; }
         .align-self-md-end {
         align-self: flex-end !important; }
         .align-self-md-center {
         align-self: center !important; }
         .align-self-md-baseline {
         align-self: baseline !important; }
         .align-self-md-stretch {
         align-self: stretch !important; } }
         @media (min-width: 992px) {
         .flex-lg-row {
         flex-direction: row !important; }
         .flex-lg-column {
         flex-direction: column !important; }
         .flex-lg-row-reverse {
         flex-direction: row-reverse !important; }
         .flex-lg-column-reverse {
         flex-direction: column-reverse !important; }
         .flex-lg-wrap {
         flex-wrap: wrap !important; }
         .flex-lg-nowrap {
         flex-wrap: nowrap !important; }
         .flex-lg-wrap-reverse {
         flex-wrap: wrap-reverse !important; }
         .flex-lg-fill {
         flex: 1 1 auto !important; }
         .flex-lg-grow-0 {
         flex-grow: 0 !important; }
         .flex-lg-grow-1 {
         flex-grow: 1 !important; }
         .flex-lg-shrink-0 {
         flex-shrink: 0 !important; }
         .flex-lg-shrink-1 {
         flex-shrink: 1 !important; }
         .justify-content-lg-start {
         justify-content: flex-start !important; }
         .justify-content-lg-end {
         justify-content: flex-end !important; }
         .justify-content-lg-center {
         justify-content: center !important; }
         .justify-content-lg-between {
         justify-content: space-between !important; }
         .justify-content-lg-around {
         justify-content: space-around !important; }
         .align-items-lg-start {
         align-items: flex-start !important; }
         .align-items-lg-end {
         align-items: flex-end !important; }
         .align-items-lg-center {
         align-items: center !important; }
         .align-items-lg-baseline {
         align-items: baseline !important; }
         .align-items-lg-stretch {
         align-items: stretch !important; }
         .align-content-lg-start {
         align-content: flex-start !important; }
         .align-content-lg-end {
         align-content: flex-end !important; }
         .align-content-lg-center {
         align-content: center !important; }
         .align-content-lg-between {
         align-content: space-between !important; }
         .align-content-lg-around {
         align-content: space-around !important; }
         .align-content-lg-stretch {
         align-content: stretch !important; }
         .align-self-lg-auto {
         align-self: auto !important; }
         .align-self-lg-start {
         align-self: flex-start !important; }
         .align-self-lg-end {
         align-self: flex-end !important; }
         .align-self-lg-center {
         align-self: center !important; }
         .align-self-lg-baseline {
         align-self: baseline !important; }
         .align-self-lg-stretch {
         align-self: stretch !important; } }
         @media (min-width: 1200px) {
         .flex-xl-row {
         flex-direction: row !important; }
         .flex-xl-column {
         flex-direction: column !important; }
         .flex-xl-row-reverse {
         flex-direction: row-reverse !important; }
         .flex-xl-column-reverse {
         flex-direction: column-reverse !important; }
         .flex-xl-wrap {
         flex-wrap: wrap !important; }
         .flex-xl-nowrap {
         flex-wrap: nowrap !important; }
         .flex-xl-wrap-reverse {
         flex-wrap: wrap-reverse !important; }
         .flex-xl-fill {
         flex: 1 1 auto !important; }
         .flex-xl-grow-0 {
         flex-grow: 0 !important; }
         .flex-xl-grow-1 {
         flex-grow: 1 !important; }
         .flex-xl-shrink-0 {
         flex-shrink: 0 !important; }
         .flex-xl-shrink-1 {
         flex-shrink: 1 !important; }
         .justify-content-xl-start {
         justify-content: flex-start !important; }
         .justify-content-xl-end {
         justify-content: flex-end !important; }
         .justify-content-xl-center {
         justify-content: center !important; }
         .justify-content-xl-between {
         justify-content: space-between !important; }
         .justify-content-xl-around {
         justify-content: space-around !important; }
         .align-items-xl-start {
         align-items: flex-start !important; }
         .align-items-xl-end {
         align-items: flex-end !important; }
         .align-items-xl-center {
         align-items: center !important; }
         .align-items-xl-baseline {
         align-items: baseline !important; }
         .align-items-xl-stretch {
         align-items: stretch !important; }
         .align-content-xl-start {
         align-content: flex-start !important; }
         .align-content-xl-end {
         align-content: flex-end !important; }
         .align-content-xl-center {
         align-content: center !important; }
         .align-content-xl-between {
         align-content: space-between !important; }
         .align-content-xl-around {
         align-content: space-around !important; }
         .align-content-xl-stretch {
         align-content: stretch !important; }
         .align-self-xl-auto {
         align-self: auto !important; }
         .align-self-xl-start {
         align-self: flex-start !important; }
         .align-self-xl-end {
         align-self: flex-end !important; }
         .align-self-xl-center {
         align-self: center !important; }
         .align-self-xl-baseline {
         align-self: baseline !important; }
         .align-self-xl-stretch {
         align-self: stretch !important; } }
         .float-left {
         float: left !important; }
         .float-right {
         float: right !important; }
         .float-none {
         float: none !important; }
         @media (min-width: 576px) {
         .float-sm-left {
         float: left !important; }
         .float-sm-right {
         float: right !important; }
         .float-sm-none {
         float: none !important; } }
         @media (min-width: 768px) {
         .float-md-left {
         float: left !important; }
         .float-md-right {
         float: right !important; }
         .float-md-none {
         float: none !important; } }
         @media (min-width: 992px) {
         .float-lg-left {
         float: left !important; }
         .float-lg-right {
         float: right !important; }
         .float-lg-none {
         float: none !important; } }
         @media (min-width: 1200px) {
         .float-xl-left {
         float: left !important; }
         .float-xl-right {
         float: right !important; }
         .float-xl-none {
         float: none !important; } }
         .position-static {
         position: static !important; }
         .position-relative {
         position: relative !important; }
         .position-absolute {
         position: absolute !important; }
         .position-fixed {
         position: fixed !important; }
         .position-sticky {
         position: -webkit-sticky !important;
         position: sticky !important; }
         .fixed-top {
         position: fixed;
         top: 0;
         right: 0;
         left: 0;
         z-index: 1030; }
         .fixed-bottom {
         position: fixed;
         right: 0;
         bottom: 0;
         left: 0;
         z-index: 1030; }
         @supports ((position: -webkit-sticky) or (position: sticky)) {
         .sticky-top {
         position: -webkit-sticky;
         position: sticky;
         top: 0;
         z-index: 1020; } }
         .sr-only {
         position: absolute;
         width: 1px;
         height: 1px;
         padding: 0;
         overflow: hidden;
         clip: rect(0, 0, 0, 0);
         white-space: nowrap;
         border: 0; }
         .sr-only-focusable:active, .sr-only-focusable:focus {
         position: static;
         width: auto;
         height: auto;
         overflow: visible;
         clip: auto;
         white-space: normal; }
         .shadow-sm {
         box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important; }
         .shadow {
         box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; }
         .shadow-lg {
         box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important; }
         .shadow-none {
         box-shadow: none !important; }
         .w-25 {
         width: 25% !important; }
         .w-50 {
         width: 50% !important; }
         .w-75 {
         width: 75% !important; }
         .w-100 {
         width: 100% !important; }
         .w-auto {
         width: auto !important; }
         .h-25 {
         height: 25% !important; }
         .h-50 {
         height: 50% !important; }
         .h-75 {
         height: 75% !important; }
         .h-100 {
         height: 100% !important; }
         .h-auto {
         height: auto !important; }
         .mw-100 {
         max-width: 100% !important; }
         .mh-100 {
         max-height: 100% !important; }
         .m-0 {
         margin: 0 !important; }
         .mt-0,
         .my-0 {
         margin-top: 0 !important; }
         .mr-0,
         .mx-0 {
         margin-right: 0 !important; }
         .mb-0,
         .my-0 {
         margin-bottom: 0 !important; }
         .ml-0,
         .mx-0 {
         margin-left: 0 !important; }
         .m-1 {
         margin: 0.25rem !important; }
         .mt-1,
         .my-1 {
         margin-top: 0.25rem !important; }
         .mr-1,
         .mx-1 {
         margin-right: 0.25rem !important; }
         .mb-1,
         .my-1 {
         margin-bottom: 0.25rem !important; }
         .ml-1,
         .mx-1 {
         margin-left: 0.25rem !important; }
         .m-2 {
         margin: 0.5rem !important; }
         .mt-2,
         .my-2 {
         margin-top: 0.5rem !important; }
         .mr-2,
         .mx-2 {
         margin-right: 0.5rem !important; }
         .mb-2,
         .my-2 {
         margin-bottom: 0.5rem !important; }
         .ml-2,
         .mx-2 {
         margin-left: 0.5rem !important; }
         .m-3 {
         margin: 1rem !important; }
         .mt-3,
         .my-3 {
         margin-top: 1rem !important; }
         .mr-3,
         .mx-3 {
         margin-right: 1rem !important; }
         .mb-3,
         .my-3 {
         margin-bottom: 1rem !important; }
         .ml-3,
         .mx-3 {
         margin-left: 1rem !important; }
         .m-4 {
         margin: 1.5rem !important; }
         .mt-4,
         .my-4 {
         margin-top: 1.5rem !important; }
         .mr-4,
         .mx-4 {
         margin-right: 1.5rem !important; }
         .mb-4,
         .my-4 {
         margin-bottom: 1.5rem !important; }
         .ml-4,
         .mx-4 {
         margin-left: 1.5rem !important; }
         .m-5 {
         margin: 3rem !important; }
         .mt-5,
         .my-5 {
         margin-top: 3rem !important; }
         .mr-5,
         .mx-5 {
         margin-right: 3rem !important; }
         .mb-5,
         .my-5 {
         margin-bottom: 3rem !important; }
         .ml-5,
         .mx-5 {
         margin-left: 3rem !important; }
         .p-0 {
         padding: 0 !important; }
         .pt-0,
         .py-0 {
         padding-top: 0 !important; }
         .pr-0,
         .px-0 {
         padding-right: 0 !important; }
         .pb-0,
         .py-0 {
         padding-bottom: 0 !important; }
         .pl-0,
         .px-0 {
         padding-left: 0 !important; }
         .p-1 {
         padding: 0.25rem !important; }
         .pt-1,
         .py-1 {
         padding-top: 0.25rem !important; }
         .pr-1,
         .px-1 {
         padding-right: 0.25rem !important; }
         .pb-1,
         .py-1 {
         padding-bottom: 0.25rem !important; }
         .pl-1,
         .px-1 {
         padding-left: 0.25rem !important; }
         .p-2 {
         padding: 0.5rem !important; }
         .pt-2,
         .py-2 {
         padding-top: 0.5rem !important; }
         .pr-2,
         .px-2 {
         padding-right: 0.5rem !important; }
         .pb-2,
         .py-2 {
         padding-bottom: 0.5rem !important; }
         .pl-2,
         .px-2 {
         padding-left: 0.5rem !important; }
         .p-3 {
         padding: 1rem !important; }
         .pt-3,
         .py-3 {
         padding-top: 1rem !important; }
         .pr-3,
         .px-3 {
         padding-right: 1rem !important; }
         .pb-3,
         .py-3 {
         padding-bottom: 1rem !important; }
         .pl-3,
         .px-3 {
         padding-left: 1rem !important; }
         .p-4 {
         padding: 1.5rem !important; }
         .pt-4,
         .py-4 {
         padding-top: 1.5rem !important; }
         .pr-4,
         .px-4 {
         padding-right: 1.5rem !important; }
         .pb-4,
         .py-4 {
         padding-bottom: 1.5rem !important; }
         .pl-4,
         .px-4 {
         padding-left: 1.5rem !important; }
         .p-5 {
         padding: 3rem !important; }
         .pt-5,
         .py-5 {
         padding-top: 3rem !important; }
         .pr-5,
         .px-5 {
         padding-right: 3rem !important; }
         .pb-5,
         .py-5 {
         padding-bottom: 3rem !important; }
         .pl-5,
         .px-5 {
         padding-left: 3rem !important; }
         .m-auto {
         margin: auto !important; }
         .mt-auto,
         .my-auto {
         margin-top: auto !important; }
         .mr-auto,
         .mx-auto {
         margin-right: auto !important; }
         .mb-auto,
         .my-auto {
         margin-bottom: auto !important; }
         .ml-auto,
         .mx-auto {
         margin-left: auto !important; }
         @media (min-width: 576px) {
         .m-sm-0 {
         margin: 0 !important; }
         .mt-sm-0,
         .my-sm-0 {
         margin-top: 0 !important; }
         .mr-sm-0,
         .mx-sm-0 {
         margin-right: 0 !important; }
         .mb-sm-0,
         .my-sm-0 {
         margin-bottom: 0 !important; }
         .ml-sm-0,
         .mx-sm-0 {
         margin-left: 0 !important; }
         .m-sm-1 {
         margin: 0.25rem !important; }
         .mt-sm-1,
         .my-sm-1 {
         margin-top: 0.25rem !important; }
         .mr-sm-1,
         .mx-sm-1 {
         margin-right: 0.25rem !important; }
         .mb-sm-1,
         .my-sm-1 {
         margin-bottom: 0.25rem !important; }
         .ml-sm-1,
         .mx-sm-1 {
         margin-left: 0.25rem !important; }
         .m-sm-2 {
         margin: 0.5rem !important; }
         .mt-sm-2,
         .my-sm-2 {
         margin-top: 0.5rem !important; }
         .mr-sm-2,
         .mx-sm-2 {
         margin-right: 0.5rem !important; }
         .mb-sm-2,
         .my-sm-2 {
         margin-bottom: 0.5rem !important; }
         .ml-sm-2,
         .mx-sm-2 {
         margin-left: 0.5rem !important; }
         .m-sm-3 {
         margin: 1rem !important; }
         .mt-sm-3,
         .my-sm-3 {
         margin-top: 1rem !important; }
         .mr-sm-3,
         .mx-sm-3 {
         margin-right: 1rem !important; }
         .mb-sm-3,
         .my-sm-3 {
         margin-bottom: 1rem !important; }
         .ml-sm-3,
         .mx-sm-3 {
         margin-left: 1rem !important; }
         .m-sm-4 {
         margin: 1.5rem !important; }
         .mt-sm-4,
         .my-sm-4 {
         margin-top: 1.5rem !important; }
         .mr-sm-4,
         .mx-sm-4 {
         margin-right: 1.5rem !important; }
         .mb-sm-4,
         .my-sm-4 {
         margin-bottom: 1.5rem !important; }
         .ml-sm-4,
         .mx-sm-4 {
         margin-left: 1.5rem !important; }
         .m-sm-5 {
         margin: 3rem !important; }
         .mt-sm-5,
         .my-sm-5 {
         margin-top: 3rem !important; }
         .mr-sm-5,
         .mx-sm-5 {
         margin-right: 3rem !important; }
         .mb-sm-5,
         .my-sm-5 {
         margin-bottom: 3rem !important; }
         .ml-sm-5,
         .mx-sm-5 {
         margin-left: 3rem !important; }
         .p-sm-0 {
         padding: 0 !important; }
         .pt-sm-0,
         .py-sm-0 {
         padding-top: 0 !important; }
         .pr-sm-0,
         .px-sm-0 {
         padding-right: 0 !important; }
         .pb-sm-0,
         .py-sm-0 {
         padding-bottom: 0 !important; }
         .pl-sm-0,
         .px-sm-0 {
         padding-left: 0 !important; }
         .p-sm-1 {
         padding: 0.25rem !important; }
         .pt-sm-1,
         .py-sm-1 {
         padding-top: 0.25rem !important; }
         .pr-sm-1,
         .px-sm-1 {
         padding-right: 0.25rem !important; }
         .pb-sm-1,
         .py-sm-1 {
         padding-bottom: 0.25rem !important; }
         .pl-sm-1,
         .px-sm-1 {
         padding-left: 0.25rem !important; }
         .p-sm-2 {
         padding: 0.5rem !important; }
         .pt-sm-2,
         .py-sm-2 {
         padding-top: 0.5rem !important; }
         .pr-sm-2,
         .px-sm-2 {
         padding-right: 0.5rem !important; }
         .pb-sm-2,
         .py-sm-2 {
         padding-bottom: 0.5rem !important; }
         .pl-sm-2,
         .px-sm-2 {
         padding-left: 0.5rem !important; }
         .p-sm-3 {
         padding: 1rem !important; }
         .pt-sm-3,
         .py-sm-3 {
         padding-top: 1rem !important; }
         .pr-sm-3,
         .px-sm-3 {
         padding-right: 1rem !important; }
         .pb-sm-3,
         .py-sm-3 {
         padding-bottom: 1rem !important; }
         .pl-sm-3,
         .px-sm-3 {
         padding-left: 1rem !important; }
         .p-sm-4 {
         padding: 1.5rem !important; }
         .pt-sm-4,
         .py-sm-4 {
         padding-top: 1.5rem !important; }
         .pr-sm-4,
         .px-sm-4 {
         padding-right: 1.5rem !important; }
         .pb-sm-4,
         .py-sm-4 {
         padding-bottom: 1.5rem !important; }
         .pl-sm-4,
         .px-sm-4 {
         padding-left: 1.5rem !important; }
         .p-sm-5 {
         padding: 3rem !important; }
         .pt-sm-5,
         .py-sm-5 {
         padding-top: 3rem !important; }
         .pr-sm-5,
         .px-sm-5 {
         padding-right: 3rem !important; }
         .pb-sm-5,
         .py-sm-5 {
         padding-bottom: 3rem !important; }
         .pl-sm-5,
         .px-sm-5 {
         padding-left: 3rem !important; }
         .m-sm-auto {
         margin: auto !important; }
         .mt-sm-auto,
         .my-sm-auto {
         margin-top: auto !important; }
         .mr-sm-auto,
         .mx-sm-auto {
         margin-right: auto !important; }
         .mb-sm-auto,
         .my-sm-auto {
         margin-bottom: auto !important; }
         .ml-sm-auto,
         .mx-sm-auto {
         margin-left: auto !important; } }
         @media (min-width: 768px) {
         .m-md-0 {
         margin: 0 !important; }
         .mt-md-0,
         .my-md-0 {
         margin-top: 0 !important; }
         .mr-md-0,
         .mx-md-0 {
         margin-right: 0 !important; }
         .mb-md-0,
         .my-md-0 {
         margin-bottom: 0 !important; }
         .ml-md-0,
         .mx-md-0 {
         margin-left: 0 !important; }
         .m-md-1 {
         margin: 0.25rem !important; }
         .mt-md-1,
         .my-md-1 {
         margin-top: 0.25rem !important; }
         .mr-md-1,
         .mx-md-1 {
         margin-right: 0.25rem !important; }
         .mb-md-1,
         .my-md-1 {
         margin-bottom: 0.25rem !important; }
         .ml-md-1,
         .mx-md-1 {
         margin-left: 0.25rem !important; }
         .m-md-2 {
         margin: 0.5rem !important; }
         .mt-md-2,
         .my-md-2 {
         margin-top: 0.5rem !important; }
         .mr-md-2,
         .mx-md-2 {
         margin-right: 0.5rem !important; }
         .mb-md-2,
         .my-md-2 {
         margin-bottom: 0.5rem !important; }
         .ml-md-2,
         .mx-md-2 {
         margin-left: 0.5rem !important; }
         .m-md-3 {
         margin: 1rem !important; }
         .mt-md-3,
         .my-md-3 {
         margin-top: 1rem !important; }
         .mr-md-3,
         .mx-md-3 {
         margin-right: 1rem !important; }
         .mb-md-3,
         .my-md-3 {
         margin-bottom: 1rem !important; }
         .ml-md-3,
         .mx-md-3 {
         margin-left: 1rem !important; }
         .m-md-4 {
         margin: 1.5rem !important; }
         .mt-md-4,
         .my-md-4 {
         margin-top: 1.5rem !important; }
         .mr-md-4,
         .mx-md-4 {
         margin-right: 1.5rem !important; }
         .mb-md-4,
         .my-md-4 {
         margin-bottom: 1.5rem !important; }
         .ml-md-4,
         .mx-md-4 {
         margin-left: 1.5rem !important; }
         .m-md-5 {
         margin: 3rem !important; }
         .mt-md-5,
         .my-md-5 {
         margin-top: 3rem !important; }
         .mr-md-5,
         .mx-md-5 {
         margin-right: 3rem !important; }
         .mb-md-5,
         .my-md-5 {
         margin-bottom: 3rem !important; }
         .ml-md-5,
         .mx-md-5 {
         margin-left: 3rem !important; }
         .p-md-0 {
         padding: 0 !important; }
         .pt-md-0,
         .py-md-0 {
         padding-top: 0 !important; }
         .pr-md-0,
         .px-md-0 {
         padding-right: 0 !important; }
         .pb-md-0,
         .py-md-0 {
         padding-bottom: 0 !important; }
         .pl-md-0,
         .px-md-0 {
         padding-left: 0 !important; }
         .p-md-1 {
         padding: 0.25rem !important; }
         .pt-md-1,
         .py-md-1 {
         padding-top: 0.25rem !important; }
         .pr-md-1,
         .px-md-1 {
         padding-right: 0.25rem !important; }
         .pb-md-1,
         .py-md-1 {
         padding-bottom: 0.25rem !important; }
         .pl-md-1,
         .px-md-1 {
         padding-left: 0.25rem !important; }
         .p-md-2 {
         padding: 0.5rem !important; }
         .pt-md-2,
         .py-md-2 {
         padding-top: 0.5rem !important; }
         .pr-md-2,
         .px-md-2 {
         padding-right: 0.5rem !important; }
         .pb-md-2,
         .py-md-2 {
         padding-bottom: 0.5rem !important; }
         .pl-md-2,
         .px-md-2 {
         padding-left: 0.5rem !important; }
         .p-md-3 {
         padding: 1rem !important; }
         .pt-md-3,
         .py-md-3 {
         padding-top: 1rem !important; }
         .pr-md-3,
         .px-md-3 {
         padding-right: 1rem !important; }
         .pb-md-3,
         .py-md-3 {
         padding-bottom: 1rem !important; }
         .pl-md-3,
         .px-md-3 {
         padding-left: 1rem !important; }
         .p-md-4 {
         padding: 1.5rem !important; }
         .pt-md-4,
         .py-md-4 {
         padding-top: 1.5rem !important; }
         .pr-md-4,
         .px-md-4 {
         padding-right: 1.5rem !important; }
         .pb-md-4,
         .py-md-4 {
         padding-bottom: 1.5rem !important; }
         .pl-md-4,
         .px-md-4 {
         padding-left: 1.5rem !important; }
         .p-md-5 {
         padding: 3rem !important; }
         .pt-md-5,
         .py-md-5 {
         padding-top: 3rem !important; }
         .pr-md-5,
         .px-md-5 {
         padding-right: 3rem !important; }
         .pb-md-5,
         .py-md-5 {
         padding-bottom: 3rem !important; }
         .pl-md-5,
         .px-md-5 {
         padding-left: 3rem !important; }
         .m-md-auto {
         margin: auto !important; }
         .mt-md-auto,
         .my-md-auto {
         margin-top: auto !important; }
         .mr-md-auto,
         .mx-md-auto {
         margin-right: auto !important; }
         .mb-md-auto,
         .my-md-auto {
         margin-bottom: auto !important; }
         .ml-md-auto,
         .mx-md-auto {
         margin-left: auto !important; } }
         @media (min-width: 992px) {
         .m-lg-0 {
         margin: 0 !important; }
         .mt-lg-0,
         .my-lg-0 {
         margin-top: 0 !important; }
         .mr-lg-0,
         .mx-lg-0 {
         margin-right: 0 !important; }
         .mb-lg-0,
         .my-lg-0 {
         margin-bottom: 0 !important; }
         .ml-lg-0,
         .mx-lg-0 {
         margin-left: 0 !important; }
         .m-lg-1 {
         margin: 0.25rem !important; }
         .mt-lg-1,
         .my-lg-1 {
         margin-top: 0.25rem !important; }
         .mr-lg-1,
         .mx-lg-1 {
         margin-right: 0.25rem !important; }
         .mb-lg-1,
         .my-lg-1 {
         margin-bottom: 0.25rem !important; }
         .ml-lg-1,
         .mx-lg-1 {
         margin-left: 0.25rem !important; }
         .m-lg-2 {
         margin: 0.5rem !important; }
         .mt-lg-2,
         .my-lg-2 {
         margin-top: 0.5rem !important; }
         .mr-lg-2,
         .mx-lg-2 {
         margin-right: 0.5rem !important; }
         .mb-lg-2,
         .my-lg-2 {
         margin-bottom: 0.5rem !important; }
         .ml-lg-2,
         .mx-lg-2 {
         margin-left: 0.5rem !important; }
         .m-lg-3 {
         margin: 1rem !important; }
         .mt-lg-3,
         .my-lg-3 {
         margin-top: 1rem !important; }
         .mr-lg-3,
         .mx-lg-3 {
         margin-right: 1rem !important; }
         .mb-lg-3,
         .my-lg-3 {
         margin-bottom: 1rem !important; }
         .ml-lg-3,
         .mx-lg-3 {
         margin-left: 1rem !important; }
         .m-lg-4 {
         margin: 1.5rem !important; }
         .mt-lg-4,
         .my-lg-4 {
         margin-top: 1.5rem !important; }
         .mr-lg-4,
         .mx-lg-4 {
         margin-right: 1.5rem !important; }
         .mb-lg-4,
         .my-lg-4 {
         margin-bottom: 1.5rem !important; }
         .ml-lg-4,
         .mx-lg-4 {
         margin-left: 1.5rem !important; }
         .m-lg-5 {
         margin: 3rem !important; }
         .mt-lg-5,
         .my-lg-5 {
         margin-top: 3rem !important; }
         .mr-lg-5,
         .mx-lg-5 {
         margin-right: 3rem !important; }
         .mb-lg-5,
         .my-lg-5 {
         margin-bottom: 3rem !important; }
         .ml-lg-5,
         .mx-lg-5 {
         margin-left: 3rem !important; }
         .p-lg-0 {
         padding: 0 !important; }
         .pt-lg-0,
         .py-lg-0 {
         padding-top: 0 !important; }
         .pr-lg-0,
         .px-lg-0 {
         padding-right: 0 !important; }
         .pb-lg-0,
         .py-lg-0 {
         padding-bottom: 0 !important; }
         .pl-lg-0,
         .px-lg-0 {
         padding-left: 0 !important; }
         .p-lg-1 {
         padding: 0.25rem !important; }
         .pt-lg-1,
         .py-lg-1 {
         padding-top: 0.25rem !important; }
         .pr-lg-1,
         .px-lg-1 {
         padding-right: 0.25rem !important; }
         .pb-lg-1,
         .py-lg-1 {
         padding-bottom: 0.25rem !important; }
         .pl-lg-1,
         .px-lg-1 {
         padding-left: 0.25rem !important; }
         .p-lg-2 {
         padding: 0.5rem !important; }
         .pt-lg-2,
         .py-lg-2 {
         padding-top: 0.5rem !important; }
         .pr-lg-2,
         .px-lg-2 {
         padding-right: 0.5rem !important; }
         .pb-lg-2,
         .py-lg-2 {
         padding-bottom: 0.5rem !important; }
         .pl-lg-2,
         .px-lg-2 {
         padding-left: 0.5rem !important; }
         .p-lg-3 {
         padding: 1rem !important; }
         .pt-lg-3,
         .py-lg-3 {
         padding-top: 1rem !important; }
         .pr-lg-3,
         .px-lg-3 {
         padding-right: 1rem !important; }
         .pb-lg-3,
         .py-lg-3 {
         padding-bottom: 1rem !important; }
         .pl-lg-3,
         .px-lg-3 {
         padding-left: 1rem !important; }
         .p-lg-4 {
         padding: 1.5rem !important; }
         .pt-lg-4,
         .py-lg-4 {
         padding-top: 1.5rem !important; }
         .pr-lg-4,
         .px-lg-4 {
         padding-right: 1.5rem !important; }
         .pb-lg-4,
         .py-lg-4 {
         padding-bottom: 1.5rem !important; }
         .pl-lg-4,
         .px-lg-4 {
         padding-left: 1.5rem !important; }
         .p-lg-5 {
         padding: 3rem !important; }
         .pt-lg-5,
         .py-lg-5 {
         padding-top: 3rem !important; }
         .pr-lg-5,
         .px-lg-5 {
         padding-right: 3rem !important; }
         .pb-lg-5,
         .py-lg-5 {
         padding-bottom: 3rem !important; }
         .pl-lg-5,
         .px-lg-5 {
         padding-left: 3rem !important; }
         .m-lg-auto {
         margin: auto !important; }
         .mt-lg-auto,
         .my-lg-auto {
         margin-top: auto !important; }
         .mr-lg-auto,
         .mx-lg-auto {
         margin-right: auto !important; }
         .mb-lg-auto,
         .my-lg-auto {
         margin-bottom: auto !important; }
         .ml-lg-auto,
         .mx-lg-auto {
         margin-left: auto !important; } }
         @media (min-width: 1200px) {
         .m-xl-0 {
         margin: 0 !important; }
         .mt-xl-0,
         .my-xl-0 {
         margin-top: 0 !important; }
         .mr-xl-0,
         .mx-xl-0 {
         margin-right: 0 !important; }
         .mb-xl-0,
         .my-xl-0 {
         margin-bottom: 0 !important; }
         .ml-xl-0,
         .mx-xl-0 {
         margin-left: 0 !important; }
         .m-xl-1 {
         margin: 0.25rem !important; }
         .mt-xl-1,
         .my-xl-1 {
         margin-top: 0.25rem !important; }
         .mr-xl-1,
         .mx-xl-1 {
         margin-right: 0.25rem !important; }
         .mb-xl-1,
         .my-xl-1 {
         margin-bottom: 0.25rem !important; }
         .ml-xl-1,
         .mx-xl-1 {
         margin-left: 0.25rem !important; }
         .m-xl-2 {
         margin: 0.5rem !important; }
         .mt-xl-2,
         .my-xl-2 {
         margin-top: 0.5rem !important; }
         .mr-xl-2,
         .mx-xl-2 {
         margin-right: 0.5rem !important; }
         .mb-xl-2,
         .my-xl-2 {
         margin-bottom: 0.5rem !important; }
         .ml-xl-2,
         .mx-xl-2 {
         margin-left: 0.5rem !important; }
         .m-xl-3 {
         margin: 1rem !important; }
         .mt-xl-3,
         .my-xl-3 {
         margin-top: 1rem !important; }
         .mr-xl-3,
         .mx-xl-3 {
         margin-right: 1rem !important; }
         .mb-xl-3,
         .my-xl-3 {
         margin-bottom: 1rem !important; }
         .ml-xl-3,
         .mx-xl-3 {
         margin-left: 1rem !important; }
         .m-xl-4 {
         margin: 1.5rem !important; }
         .mt-xl-4,
         .my-xl-4 {
         margin-top: 1.5rem !important; }
         .mr-xl-4,
         .mx-xl-4 {
         margin-right: 1.5rem !important; }
         .mb-xl-4,
         .my-xl-4 {
         margin-bottom: 1.5rem !important; }
         .ml-xl-4,
         .mx-xl-4 {
         margin-left: 1.5rem !important; }
         .m-xl-5 {
         margin: 3rem !important; }
         .mt-xl-5,
         .my-xl-5 {
         margin-top: 3rem !important; }
         .mr-xl-5,
         .mx-xl-5 {
         margin-right: 3rem !important; }
         .mb-xl-5,
         .my-xl-5 {
         margin-bottom: 3rem !important; }
         .ml-xl-5,
         .mx-xl-5 {
         margin-left: 3rem !important; }
         .p-xl-0 {
         padding: 0 !important; }
         .pt-xl-0,
         .py-xl-0 {
         padding-top: 0 !important; }
         .pr-xl-0,
         .px-xl-0 {
         padding-right: 0 !important; }
         .pb-xl-0,
         .py-xl-0 {
         padding-bottom: 0 !important; }
         .pl-xl-0,
         .px-xl-0 {
         padding-left: 0 !important; }
         .p-xl-1 {
         padding: 0.25rem !important; }
         .pt-xl-1,
         .py-xl-1 {
         padding-top: 0.25rem !important; }
         .pr-xl-1,
         .px-xl-1 {
         padding-right: 0.25rem !important; }
         .pb-xl-1,
         .py-xl-1 {
         padding-bottom: 0.25rem !important; }
         .pl-xl-1,
         .px-xl-1 {
         padding-left: 0.25rem !important; }
         .p-xl-2 {
         padding: 0.5rem !important; }
         .pt-xl-2,
         .py-xl-2 {
         padding-top: 0.5rem !important; }
         .pr-xl-2,
         .px-xl-2 {
         padding-right: 0.5rem !important; }
         .pb-xl-2,
         .py-xl-2 {
         padding-bottom: 0.5rem !important; }
         .pl-xl-2,
         .px-xl-2 {
         padding-left: 0.5rem !important; }
         .p-xl-3 {
         padding: 1rem !important; }
         .pt-xl-3,
         .py-xl-3 {
         padding-top: 1rem !important; }
         .pr-xl-3,
         .px-xl-3 {
         padding-right: 1rem !important; }
         .pb-xl-3,
         .py-xl-3 {
         padding-bottom: 1rem !important; }
         .pl-xl-3,
         .px-xl-3 {
         padding-left: 1rem !important; }
         .p-xl-4 {
         padding: 1.5rem !important; }
         .pt-xl-4,
         .py-xl-4 {
         padding-top: 1.5rem !important; }
         .pr-xl-4,
         .px-xl-4 {
         padding-right: 1.5rem !important; }
         .pb-xl-4,
         .py-xl-4 {
         padding-bottom: 1.5rem !important; }
         .pl-xl-4,
         .px-xl-4 {
         padding-left: 1.5rem !important; }
         .p-xl-5 {
         padding: 3rem !important; }
         .pt-xl-5,
         .py-xl-5 {
         padding-top: 3rem !important; }
         .pr-xl-5,
         .px-xl-5 {
         padding-right: 3rem !important; }
         .pb-xl-5,
         .py-xl-5 {
         padding-bottom: 3rem !important; }
         .pl-xl-5,
         .px-xl-5 {
         padding-left: 3rem !important; }
         .m-xl-auto {
         margin: auto !important; }
         .mt-xl-auto,
         .my-xl-auto {
         margin-top: auto !important; }
         .mr-xl-auto,
         .mx-xl-auto {
         margin-right: auto !important; }
         .mb-xl-auto,
         .my-xl-auto {
         margin-bottom: auto !important; }
         .ml-xl-auto,
         .mx-xl-auto {
         margin-left: auto !important; } }
         .text-monospace {
         font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }
         .text-justify {
         text-align: justify !important; }
         .text-nowrap {
         white-space: nowrap !important; }
         .text-truncate {
         overflow: hidden;
         text-overflow: ellipsis;
         white-space: nowrap; }
         .text-left {
         text-align: left !important; }
         .text-right {
         text-align: right !important; }
         .text-center {
         text-align: center !important; }
         @media (min-width: 576px) {
         .text-sm-left {
         text-align: left !important; }
         .text-sm-right {
         text-align: right !important; }
         .text-sm-center {
         text-align: center !important; } }
         @media (min-width: 768px) {
         .text-md-left {
         text-align: left !important; }
         .text-md-right {
         text-align: right !important; }
         .text-md-center {
         text-align: center !important; } }
         @media (min-width: 992px) {
         .text-lg-left {
         text-align: left !important; }
         .text-lg-right {
         text-align: right !important; }
         .text-lg-center {
         text-align: center !important; } }
         @media (min-width: 1200px) {
         .text-xl-left {
         text-align: left !important; }
         .text-xl-right {
         text-align: right !important; }
         .text-xl-center {
         text-align: center !important; } }
         .text-lowercase {
         text-transform: lowercase !important; }
         .text-uppercase {
         text-transform: uppercase !important; }
         .text-capitalize {
         text-transform: capitalize !important; }
         .font-weight-light {
         font-weight: 300 !important; }
         .font-weight-normal {
         font-weight: 400 !important; }
         .font-weight-bold {
         font-weight: 700 !important; }
         .font-italic {
         font-style: italic !important; }
         .text-white {
         color: #fff !important; }
         .text-primary {
         color: #007bff !important; }
         a.text-primary:hover, a.text-primary:focus {
         color: #0062cc !important; }
         .text-secondary {
         color: #6c757d !important; }
         a.text-secondary:hover, a.text-secondary:focus {
         color: #545b62 !important; }
         .text-success {
         color: #28a745 !important; }
         a.text-success:hover, a.text-success:focus {
         color: #1e7e34 !important; }
         .text-info {
         color: #17a2b8 !important; }
         a.text-info:hover, a.text-info:focus {
         color: #117a8b !important; }
         .text-warning {
         color: #ffc107 !important; }
         a.text-warning:hover, a.text-warning:focus {
         color: #d39e00 !important; }
         .text-danger {
         color: #dc3545 !important; }
         a.text-danger:hover, a.text-danger:focus {
         color: #bd2130 !important; }
         .text-light {
         color: #f8f9fa !important; }
         a.text-light:hover, a.text-light:focus {
         color: #dae0e5 !important; }
         .text-dark {
         color: #343a40 !important; }
         a.text-dark:hover, a.text-dark:focus {
         color: #1d2124 !important; }
         .text-body {
         color: #212529 !important; }
         .text-muted {
         color: #6c757d !important; }
         .text-black-50 {
         color: rgba(0, 0, 0, 0.5) !important; }
         .text-white-50 {
         color: rgba(255, 255, 255, 0.5) !important; }
         .text-hide {
         font: 0/0 a;
         color: transparent;
         text-shadow: none;
         background-color: transparent;
         border: 0; }
         .visible {
         visibility: visible !important; }
         .invisible {
         visibility: hidden !important; }
         @media print {
         *,
         *::before,
         *::after {
         text-shadow: none !important;
         box-shadow: none !important; }
         a:not(.btn) {
         text-decoration: underline; }
         abbr[title]::after {
         content: " (" attr(title) ")"; }
         pre {
         white-space: pre-wrap !important; }
         pre,
         blockquote {
         border: 1px solid #adb5bd;
         page-break-inside: avoid; }
         thead {
         display: table-header-group; }
         tr,
         img {
         page-break-inside: avoid; }
         p,
         h2,
         h3 {
         orphans: 3;
         widows: 3; }
         h2,
         h3 {
         page-break-after: avoid; }
         @page {
         size: a3; }
         body {
         min-width: 992px !important; }
         .container {
         min-width: 992px !important; }
         .navbar {
         display: none; }
         .badge {
         border: 1px solid #000; }
         .table {
         border-collapse: collapse !important; }
         .table td,
         .table th {
         background-color: #fff !important; }
         .table-bordered th,
         .table-bordered td {
         border: 1px solid #dee2e6 !important; }
         .table-dark {
         color: inherit; }
         .table-dark th,
         .table-dark td,
         .table-dark thead th,
         .table-dark tbody + tbody {
         border-color: #dee2e6; }
         .table .thead-dark th {
         color: inherit;
         border-color: #dee2e6; } }
         :root {
         --gray100: #f8f9fa;
         --gray200: #e9ecef;
         --gray300: #dee2e6;
         --gray400: #ced4da;
         --gray600: #6c757d;
         --gray700: #495057;
         --gray800: #343a40;
         --gray900: #212529;
         --black: #000;
         --blue: #007bff;
         --indigo: #6610f2;
         --purple: #6f42c1;
         --pink: #e83e8c;
         --red: #dc3545;
         --orange: #fd7e14;
         --yellow: #ffc107;
         --green: #28a745;
         --teal: #20c997;
         --cyan: #17a2b8;
         --white: #fff;
         --gray: #6c757d;
         --gray-dark: #343a40; }
         :root {
         --primary: #f45960;
         --secondary: #6c757d;
         --success: #28a745;
         --info: #17a2b8;
         --warning: #ffc107;
         --danger: #dc3545;
         --light: #f8f9fa;
         --dark: #343a40;
         --cardContrastBgColor: #fafafa;
         --navbarBackground: #515B62;
         --footerBackground: #515B62;
         --tabBackgroundColor: #e9ecef;
         --lastRoomBadgeColor: #5082b7;
         --roomSelectionBorderColor: #f45960;
         --clearTextColor: #fff;
         --bodyColor: #505050;
         --cardTextColor: #505050;
         --tabTextcolor: #505050;
         --contrastTextColor: #505050;
         --priceColor: #28a745;
         --bgColor: #fafafa;
         --tableBorderColor: #dee2e6;
         --border-color: #dee2e6;
         --font-size-base: 1rem;
         --font-size-xxl: 2.5rem;
         --font-size-xl: 1.5rem;
         --font-size-lg: 1.25rem;
         --font-size-md: 0.9rem;
         --font-size-sm: 0.85rem;
         --font-size-xs: 0.77rem;
         --boxShadow: 0 .5rem 1rem #dadada;
         --mainOverlayBackground: transparent;
         --cardsBackgroundColor: #fff;
         --bodyBackground: none;
         --bodyBackgroundRepeat: 'repeat';
         --bodyBackgroundSize: 'auto';
         --font-family-base: mallory, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; }
         h6 {
         font-weight: 500; }
         a {
         cursor: pointer; }
         div.cart {
         min-height: 200px; }
         .form-control {
         border-radius: 0px;
         background-clip: inherit; }
         .form-control:focus {
         box-shadow: 0 0 0 1px #ced4da;
         border-color: #ced4da; }
         .btn-primary.disabled, .btn-primary:disabled, .btn-primary, .btn:hover, .btn:active, .btn:focus, .btn:not(:disabled):not(.disabled):active, .btn:not(:disabled):not(.disabled).active, .show > .btn.dropdown-toggle {
         color: var(--clearTextColor);
         background-color: var(--primary);
         border-color: var(--primary); }
         .btn-outline-primary {
         color: var(--primary);
         border-color: var(--primary); }
         .btn-outline-primary:hover, .btn-outline-primary:active, .btn-outline-primary:focus, .btn-outline-primary:visited {
         -webkit-filter: brightness(95%);
         filter: brightness(95%);
         background-color: transparent;
         background-image: none;
         color: var(--primary);
         border-color: var(--primary); }
         .btn-secondary.disabled, .btn-secondary:disabled, .btn-secondary, .btn-secondary:hover, .btn-secondary:active, .btn-secondary:focus, .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active, .show > .btn-secondary.dropdown-toggle {
         color: var(--clearTextColor);
         background-color: var(--secondary);
         border-color: var(--secondary); }
         .btn-tab.disabled, .btn-tab:disabled, .btn-tab, .btn-tab:hover, .btn-tab:active, .btn-tab:focus, .btn-tab:not(:disabled):not(.disabled):active, .btn-tab:not(:disabled):not(.disabled).active, .show > .btn-tab.dropdown-toggle {
         background-color: var(--cardContrastBgColor);
         color: var(--contrastTextColor);
         border-color: var(--cardContrastBgColor); }
         .btn:hover, .btn:active, .btn:focus, .btn:not(:disabled):not(.disabled):active, .btn:not(:disabled):not(.disabled).active, .show > .btn.dropdown-toggle {
         -webkit-filter: brightness(95%);
         filter: brightness(95%); }
         .border, .table-bordered, .table-bordered th, .table-bordered td {
         border: 1px solid var(--tableBorderColor) !important; }
         .table thead th {
         border-bottom: 2px solid var(--tableBorderColor) !important; }
         .btn:focus {
         box-shadow: none !important; }
         .custom-select:focus {
         border-color: #ced4da;
         box-shadow: 0 0 0 0px var(--primary); }
         .badge {
         border-radius: 0px;
         vertical-align: middle; }
         .badge-secondary {
         color: var(--clearTextColor);
         background-color: var(--secondary); }
         .nav-tabs .nav-link.active,
         .nav-tabs .nav-item.show .nav-link {
         color: var(--cardTextColor);
         background-color: var(--cardsBackgroundColor);
         border-color: var(--border-color); }
         .nav-tabs .nav-link {
         border: 0px solid transparent;
         border-top-left-radius: 0rem;
         border-top-right-radius: 0rem;
         color: var(--tabTextcolor); }
         .nav-tabs {
         border-bottom: 1px solid var(--border-color); }
         .nav-tabs li {
         border: 0px solid transparent;
         border-top-left-radius: 0rem;
         border-top-right-radius: 0rem;
         color: var(--tabTextcolor);
         background-color: var(--tabBackgroundColor);
         border-color: var(--border-color); }
         .nav-tabs li:not(.active) {
         border: 1px solid var(--border-color); }
         .group-nav-tabs li {
         border: 1px solid var(--border-color);
         margin-right: 10px;
         color: var(--tabTextcolor);
         background-color: var(--tabBackgroundColor);
         border-color: var(--border-color); }
         .alert {
         border-radius: 0px; }
         .bs-datepicker-body .is-other-month {
         display: none !important; }
         /* theming */
         .theme-default .bs-datepicker-head {
         background-color: var(--primary); }
         .theme-default .bs-datepicker-body table td span.selected,
         .theme-default .bs-datepicker-body table td.selected span,
         .theme-default .bs-datepicker-body table td span[class*="select-"]:after,
         .theme-default .bs-datepicker-body table td[class*="select-"] span:after {
         background-color: var(--primary); }
         .theme-default .bs-datepicker-body table td.week span {
         color: var(--primary); }
         .carousel-control-prev,
         .carousel-control-next {
         width: 5%; }
         .badge-outline {
         display: inline-block;
         padding: 0.25em 0.4em;
         font-size: 75%;
         font-weight: 700;
         line-height: 1;
         text-align: center;
         white-space: nowrap;
         vertical-align: baseline;
         border-radius: 0px;
         border: 1px solid; }
         .badge-outline.badge-o-info {
         color: #17a2b8;
         border-color: #17a2b8; }
         .badge-outline.badge-o-danger {
         color: #dc3545;
         border-color: #dc3545; }
         .badge-outline.badge-o-success {
         color: #28a745;
         border-color: #28a745; }
         .badge-outline.badge-o-warning {
         color: #ffc107;
         border-color: #ffc107; }
         .pad0 {
         padding: 0px !important; }
         .padR0 {
         padding-right: 0px !important; }
         .padL0 {
         padding-left: 0px !important; }
         .mar0 {
         margin: 0px; }
         .mar10 {
         margin: 10px; }
         .pad10 {
         padding: 10px !important; }
         .pad20 {
         padding: 20px !important; }
         .marR0 {
         margin-right: 0px !important; }
         .marR10 {
         margin-right: 10px !important; }
         .marR30 {
         margin-right: 30px !important; }
         .marR50 {
         margin-right: 50px !important; }
         .marL0 {
         margin-left: 0px !important; }
         .marL5 {
         margin-left: 5px !important; }
         .marL10 {
         margin-left: 10px !important; }
         .marL20 {
         margin-left: 20px !important; }
         .marL30 {
         margin-left: 30px !important; }
         .marT1 {
         margin-top: 1px !important; }
         .marT5 {
         margin-top: 0.2rem !important; }
         .marT10 {
         margin-top: 0.4rem !important; }
         .marT15 {
         margin-top: 0.6rem !important; }
         .marT15n {
         margin-top: -1rem !important; }
         .marT20 {
         margin-top: 0.8rem !important; }
         .marT30 {
         margin-top: 30px !important; }
         .marT40 {
         margin-top: 40px !important; }
         .marT50 {
         margin-top: 50px !important; }
         .marB0 {
         margin-bottom: 0px !important; }
         .marB5 {
         margin-bottom: 5px !important; }
         .marB20 {
         margin-bottom: 20px !important; }
         .marB25 {
         margin-bottom: 25px !important; }
         .marB10 {
         margin-bottom: 10px !important; }
         .marB30 {
         margin-bottom: 30px !important; }
         .padT0 {
         padding-top: 0px !important; }
         .padT10 {
         padding-top: 10px !important; }
         .padT25 {
         padding-top: 25px !important; }
         .padB10 {
         padding-bottom: 10px !important; }
         .padB20 {
         padding-bottom: 20px !important; }
         .padB30 {
         padding-bottom: 30px !important; }
         .padL10 {
         padding-left: 10px !important; }
         .padL40 {
         padding-left: 40px !important; }
         .padR40 {
         padding-right: 40px !important; }
         .padL45 {
         padding-left: 45px !important; }
         .align-left {
         text-align: left !important; }
         .table.no-border td {
         border: none !important; }
         .fontsize16 {
         font-size: 16px !important; }
         .fontsize25 {
         font-size: 25px !important; }
         .no-border {
         border: none !important; }
         @-webkit-keyframes hb {
         0% {
         -webkit-transform: translateX(-375px);
         transform: translateX(-375px); }
         50% {
         -webkit-transform: translateX(0);
         transform: translateX(0); }
         to {
         -webkit-transform: translateX(375px);
         transform: translateX(375px); } }
         @keyframes hb {
         0% {
         -webkit-transform: translateX(-375px);
         transform: translateX(-375px); }
         50% {
         -webkit-transform: translateX(0);
         transform: translateX(0); }
         to {
         -webkit-transform: translateX(375px);
         transform: translateX(375px); } }
         @-webkit-keyframes ib {
         0% {
         -webkit-transform: translateX(-265px);
         transform: translateX(-265px); }
         50% {
         -webkit-transform: translateX(0);
         transform: translateX(0); }
         to {
         -webkit-transform: translateX(265px);
         transform: translateX(265px); } }
         @keyframes ib {
         0% {
         -webkit-transform: translateX(-265px);
         transform: translateX(-265px); }
         50% {
         -webkit-transform: translateX(0);
         transform: translateX(0); }
         to {
         -webkit-transform: translateX(265px);
         transform: translateX(265px); } }
         @-webkit-keyframes jb {
         0% {
         -webkit-transform: translateX(-230px);
         transform: translateX(-230px); }
         50% {
         -webkit-transform: translateX(0);
         transform: translateX(0); }
         to {
         -webkit-transform: translateX(230px);
         transform: translateX(230px); } }
         @keyframes jb {
         0% {
         -webkit-transform: translateX(-230px);
         transform: translateX(-230px); }
         50% {
         -webkit-transform: translateX(0);
         transform: translateX(0); }
         to {
         -webkit-transform: translateX(230px);
         transform: translateX(230px); } }
         @-webkit-keyframes kb {
         0% {
         -webkit-transform: translateX(-180px);
         transform: translateX(-180px); }
         50% {
         -webkit-transform: translateX(0);
         transform: translateX(0); }
         to {
         -webkit-transform: translateX(180px);
         transform: translateX(180px); } }
         @keyframes kb {
         0% {
         -webkit-transform: translateX(-180px);
         transform: translateX(-180px); }
         50% {
         -webkit-transform: translateX(0);
         transform: translateX(0); }
         to {
         -webkit-transform: translateX(180px);
         transform: translateX(180px); } }
         @-webkit-keyframes lb {
         0% {
         -webkit-transform: translateX(-125px);
         transform: translateX(-125px); }
         50% {
         -webkit-transform: translateX(0);
         transform: translateX(0); }
         to {
         -webkit-transform: translateX(125px);
         transform: translateX(125px); } }
         @keyframes lb {
         0% {
         -webkit-transform: translateX(-125px);
         transform: translateX(-125px); }
         50% {
         -webkit-transform: translateX(0);
         transform: translateX(0); }
         to {
         -webkit-transform: translateX(125px);
         transform: translateX(125px); } }
         @-webkit-keyframes spin {
         0% {
         -webkit-transform: rotate(0deg); }
         100% {
         -webkit-transform: rotate(359deg); } }
         @keyframes spin {
         0% {
         -webkit-transform: rotate(0deg);
         transform: rotate(0deg); }
         100% {
         -webkit-transform: rotate(359deg);
         transform: rotate(359deg); } }
         @font-face {
         font-family: icons;
         src: url('//bv3.hotelrunner.com/icons.27c8065a7d240d73dccd.eot');
         src: url('//bv3.hotelrunner.com/icons.27c8065a7d240d73dccd.eot#iefix') format("embedded-opentype"), url('//bv3.hotelrunner.com/icons.4b86565de3214a61274b.woff') format("woff"), url('//bv3.hotelrunner.com/icons.89b5838f35bfb030fdd2.ttf') format("truetype"), url('//bv3.hotelrunner.com/icons.66f7d2525cbf5b1e4ef9.svg#icons') format("svg");
         font-weight: 400;
         font-style: normal; }
         @font-face {
         font-family: custom_icons;
         src: url('//bv3.hotelrunner.com/icomoon.b3af798ffeeba241c62b.eot');
         src: url('//bv3.hotelrunner.com/icomoon.b3af798ffeeba241c62b.eot#iefix') format("embedded-opentype"), url('//bv3.hotelrunner.com/icomoon.10a0e890c716d9958812.woff') format("woff"), url('//bv3.hotelrunner.com/icomoon.ce2dec6cdffdf697e8f3.ttf') format("truetype"), url('//bv3.hotelrunner.com/icomoon.52ae0a5200c3e035ec3c.svg#icons') format("svg");
         font-weight: 400;
         font-style: normal; }
         .icon-spin {
         display: inline-block;
         -webkit-animation: spin 2s infinite linear;
         animation: spin 2s infinite linear; }
         .hricon-10, .chricon-10 {
         font-size: 10px; }
         .hricon-12, .chricon-12 {
         font-size: 12px; }
         .hricon-14 {
         font-size: 14px; }
         .hricon-16, .chricon-16 {
         font-size: 16px; }
         .hricon-18, .chricon-18 {
         font-size: 18px; }
         .hricon-20, .chricon-20 {
         font-size: 20px; }
         .hricon-21, .chricon-21 {
         font-size: 21px; }
         .hricon-22, .chricon-22 {
         font-size: 22px; }
         .hricon-24, .chricon-24 {
         font-size: 24px; }
         .hricon-32, .chricon-32 {
         font-size: 32px; }
         .hricon-48, .chricon-48 {
         font-size: 48px; }
         .hricon-64, .chricon-64 {
         font-size: 64px; }
         .chricon-soft_corner_checkin:before, .chricon-check-in:before {
         content: "\e902"; }
         .chricon-soft_corner_checkout:before, .chricon-check-out:before {
         content: "\e903"; }
         .hricon-1ah:before {
         content: "\F101"; }
         .hricon-24-hour-finess-center:before {
         content: "\F102"; }
         .hricon-24hour-check-in:before {
         content: "\F103"; }
         .hricon-24hour-frontdesk:before {
         content: "\F104"; }
         .hricon-24hour-room-service:before {
         content: "\F105"; }
         .hricon-24hour-security:before {
         content: "\F106"; }
         .hricon-desktop-ic-black-down:before {
         content: "\F107"; }
         .hricon-desktop-ic-black-down-arrow:before {
         content: "\F108"; }
         .hricon-desktop-ic-profile:before {
         content: "\F109"; }
         .hricon-internet:before {
         content: "\F10A"; }
         .hricon-iron:before {
         content: "\F10B"; }
         .hricon-add-a-website:before {
         content: "\F10C"; }
         .hricon-additional-bathroom:before {
         content: "\F10D"; }
         .hricon-additional-fee-for-pets:before {
         content: "\F10E"; }
         .hricon-additional-information:before {
         content: "\F10F"; }
         .hricon-additional-toilet:before {
         content: "\F110"; }
         .hricon-address:before {
         content: "\F111"; }
         .hricon-adults-line:before {
         content: "\F112"; }
         .hricon-adults-one:before {
         content: "\F113"; }
         .hricon-after-hours:before {
         content: "\F114"; }
         .hricon-afternoon-tea:before {
         content: "\F115"; }
         .hricon-agoda-price-guarante:before {
         content: "\F116"; }
         .hricon-air-bath-access:before {
         content: "\F117"; }
         .hricon-air-conditioning:before {
         content: "\F118"; }
         .hricon-air-purifier:before {
         content: "\F119"; }
         .hricon-airport-transfer-big:before {
         content: "\F11A"; }
         .hricon-airport-transfer-oneway:before {
         content: "\F11B"; }
         .hricon-airport-transfer-roundtrip:before {
         content: "\F11C"; }
         .hricon-airport-transfer-small:before {
         content: "\F11D"; }
         .hricon-airport-transfer-solid:before {
         content: "\F11E"; }
         .hricon-airport-transfer:before {
         content: "\F11F"; }
         .hricon-airports:before {
         content: "\F120"; }
         .hricon-alarm-clock:before {
         content: "\F121"; }
         .hricon-american-express:before {
         content: "\F122"; }
         .hricon-apartment:before {
         content: "\F123"; }
         .hricon-app-android:before {
         content: "\F124"; }
         .hricon-app-apple:before {
         content: "\F125"; }
         .hricon-app-windos:before {
         content: "\F126"; }
         .hricon-aps-lock:before {
         content: "\F127"; }
         .hricon-area:before {
         content: "\F128"; }
         .hricon-arrow-big-down:before {
         content: "\F129"; }
         .hricon-arrow-big-up:before {
         content: "\F12A"; }
         .hricon-arrow-right-box:before {
         content: "\F12B"; }
         .hricon-arrow-right:before {
         content: "\F12C"; }
         .hricon-assembly-pin-border:before {
         content: "\F12D"; }
         .hricon-assembly-restaurant:before {
         content: "\F12E"; }
         .hricon-atm-cash-machine-on-site:before {
         content: "\F12F"; }
         .hricon-attractions:before {
         content: "\F130"; }
         .hricon-avatar-hotel:before {
         content: "\F131"; }
         .hricon-avatar-property:before {
         content: "\F132"; }
         .hricon-baby-cot:before {
         content: "\F133"; }
         .hricon-babysitting:before {
         content: "\F134"; }
         .hricon-back-to-top:before {
         content: "\F135"; }
         .hricon-badge-insider:before {
         content: "\F136"; }
         .hricon-badminton-court:before {
         content: "\F137"; }
         .hricon-balcony-terrace:before {
         content: "\F138"; }
         .hricon-balloon-minus:before {
         content: "\F139"; }
         .hricon-balloon-plus:before {
         content: "\F13A"; }
         .hricon-balloon:before {
         content: "\F13B"; }
         .hricon-bathrobes:before {
         content: "\F13C"; }
         .hricon-bathroom-basics:before {
         content: "\F13D"; }
         .hricon-bathroom-phone:before {
         content: "\F13E"; }
         .hricon-bathrooms:before {
         content: "\F13F"; }
         .hricon-bathtub:before {
         content: "\F140"; }
         .hricon-bbq-facilities:before {
         content: "\F141"; }
         .hricon-bc-global-card:before {
         content: "\F142"; }
         .hricon-beach:before {
         content: "\F143"; }
         .hricon-bed-property:before {
         content: "\F144"; }
         .hricon-bed:before {
         content: "\F145"; }
         .hricon-bedroom:before {
         content: "\F146"; }
         .hricon-bell-alerts:before {
         content: "\F147"; }
         .hricon-best-value:before {
         content: "\F148"; }
         .hricon-bicycle-rental:before {
         content: "\F149"; }
         .hricon-billiards:before {
         content: "\F14A"; }
         .hricon-blackout-curtains:before {
         content: "\F14B"; }
         .hricon-blizzard:before {
         content: "\F14C"; }
         .hricon-blowing-drifting-snow:before {
         content: "\F14D"; }
         .hricon-blowing-dust-sandstorm:before {
         content: "\F14E"; }
         .hricon-blowing-spray-windy:before {
         content: "\F14F"; }
         .hricon-boat:before {
         content: "\F150"; }
         .hricon-book-now-pay-later:before {
         content: "\F151"; }
         .hricon-book-without-a-creditcard:before {
         content: "\F152"; }
         .hricon-bottle-of-sparkling-wine:before {
         content: "\F153"; }
         .hricon-bottle-of-wine:before {
         content: "\F154"; }
         .hricon-bowling-alley:before {
         content: "\F155"; }
         .hricon-bracket-left:before {
         content: "\F156"; }
         .hricon-bracket-right:before {
         content: "\F157"; }
         .hricon-breakfast-buffet:before {
         content: "\F158"; }
         .hricon-breakfast-one-person:before {
         content: "\F159"; }
         .hricon-breakfast:before {
         content: "\F15A"; }
         .hricon-breezy:before {
         content: "\F15B"; }
         .hricon-broken-clouds:before {
         content: "\F15C"; }
         .hricon-budget:before {
         content: "\F15D"; }
         .hricon-bullet:before {
         content: "\F15E"; }
         .hricon-bungalow:before {
         content: "\F15F"; }
         .hricon-bunk-bed:before {
         content: "\F160"; }
         .hricon-bus-and-rail-stations:before {
         content: "\F161"; }
         .hricon-bus-station:before {
         content: "\F162"; }
         .hricon-business-center:before {
         content: "\F163"; }
         .hricon-business-facilities:before {
         content: "\F164"; }
         .hricon-business-hover:before {
         content: "\F165"; }
         .hricon-business:before {
         content: "\F166"; }
         .hricon-buzzer-wireless-intercom:before {
         content: "\F167"; }
         .hricon-c-coupon:before {
         content: "\F168"; }
         .hricon-cable-car-station:before {
         content: "\F169"; }
         .hricon-calendar-onmap:before {
         content: "\F16A"; }
         .hricon-callcenter-24hour:before {
         content: "\F16B"; }
         .hricon-callcenter-line:before {
         content: "\F16C"; }
         .hricon-callcenter:before {
         content: "\F16D"; }
         .hricon-camera-hover:before {
         content: "\F16E"; }
         .hricon-cancellation-policy-non-refund-special-condition:before {
         content: "\F16F"; }
         .hricon-canoe:before {
         content: "\F170"; }
         .hricon-capsule:before {
         content: "\F171"; }
         .hricon-car-hire:before {
         content: "\F172"; }
         .hricon-car-park-charges:before {
         content: "\F173"; }
         .hricon-car-park-free-charge:before {
         content: "\F174"; }
         .hricon-car-park-nearby:before {
         content: "\F175"; }
         .hricon-car-park-onsite:before {
         content: "\F176"; }
         .hricon-car-park:before {
         content: "\F177"; }
         .hricon-car-power-charging-station:before {
         content: "\F178"; }
         .hricon-carbon-monoxide-detector:before {
         content: "\F179"; }
         .hricon-carpeting:before {
         content: "\F17A"; }
         .hricon-carrouselarrow-left:before {
         content: "\F17B"; }
         .hricon-carrouselarrow-right:before {
         content: "\F17C"; }
         .hricon-cash-circle-h:before {
         content: "\F17D"; }
         .hricon-cash-circle-s:before {
         content: "\F17E"; }
         .hricon-cash-h:before {
         content: "\F17F"; }
         .hricon-cash-line-circle-h:before {
         content: "\F180"; }
         .hricon-cash-line-circle-s:before {
         content: "\F181"; }
         .hricon-cash-line-h:before {
         content: "\F182"; }
         .hricon-cash-line-s:before {
         content: "\F183"; }
         .hricon-cash-s:before {
         content: "\F184"; }
         .hricon-cash:before {
         content: "\F185"; }
         .hricon-casino:before {
         content: "\F186"; }
         .hricon-cats-allowed:before {
         content: "\F187"; }
         .hricon-chapel:before {
         content: "\F188"; }
         .hricon-chat:before {
         content: "\F189"; }
         .hricon-check-box:before {
         content: "\F18A"; }
         .hricon-check-circle-o:before {
         content: "\F18B"; }
         .hricon-check-circle:before {
         content: "\F18C"; }
         .hricon-check-in:before {
         content: "\F18D"; }
         .hricon-check-out:before {
         content: "\F18E"; }
         .hricon-check-valid-state:before {
         content: "\F18F"; }
         .hricon-check:before {
         content: "\F190"; }
         .hricon-checkin-date:before {
         content: "\F191"; }
         .hricon-checkin-hover-date:before {
         content: "\F192"; }
         .hricon-checkout-date:before {
         content: "\F193"; }
         .hricon-checkout-hover-date:before {
         content: "\F194"; }
         .hricon-child-icon:before {
         content: "\F195"; }
         .hricon-child-line:before {
         content: "\F196"; }
         .hricon-child:before {
         content: "\F197"; }
         .hricon-children-high-chair:before {
         content: "\F198"; }
         .hricon-children-one:before {
         content: "\F199"; }
         .hricon-children-playground:before {
         content: "\F19A"; }
         .hricon-china-event:before {
         content: "\F19B"; }
         .hricon-china-only:before {
         content: "\F19C"; }
         .hricon-chinese-friendly:before {
         content: "\F19D"; }
         .hricon-circle-05:before {
         content: "\F19E"; }
         .hricon-circle-1:before {
         content: "\F19F"; }
         .hricon-circle-15:before {
         content: "\F1A0"; }
         .hricon-circle-2:before {
         content: "\F1A1"; }
         .hricon-circle-25:before {
         content: "\F1A2"; }
         .hricon-circle-3:before {
         content: "\F1A3"; }
         .hricon-circle-35:before {
         content: "\F1A4"; }
         .hricon-circle-4:before {
         content: "\F1A5"; }
         .hricon-circle-45:before {
         content: "\F1A6"; }
         .hricon-circle-5:before {
         content: "\F1A7"; }
         .hricon-circle-arrow-left:before {
         content: "\F1A8"; }
         .hricon-circle-arrow-right:before {
         content: "\F1A9"; }
         .hricon-cities:before {
         content: "\F1AA"; }
         .hricon-city-buses:before {
         content: "\F1AB"; }
         .hricon-city-view:before {
         content: "\F1AC"; }
         .hricon-cleaning-products:before {
         content: "\F1AD"; }
         .hricon-clear-mark:before {
         content: "\F1AE"; }
         .hricon-clear-sky-b:before {
         content: "\F1AF"; }
         .hricon-clear-sky:before {
         content: "\F1B0"; }
         .hricon-clear:before {
         content: "\F1B1"; }
         .hricon-close-popup-solid:before {
         content: "\F1B2"; }
         .hricon-close-popup:before {
         content: "\F1B3"; }
         .hricon-closest-bar:before {
         content: "\F1B4"; }
         .hricon-closest-market:before {
         content: "\F1B5"; }
         .hricon-closet:before {
         content: "\F1B6"; }
         .hricon-clothes-dryer-pay:before {
         content: "\F1B7"; }
         .hricon-clothes-rack:before {
         content: "\F1B8"; }
         .hricon-clothes-washer-free:before {
         content: "\F1B9"; }
         .hricon-cloudy:before {
         content: "\F1BA"; }
         .hricon-club-lounge-access:before {
         content: "\F1BB"; }
         .hricon-coffee-shop:before {
         content: "\F1BC"; }
         .hricon-coffee-tea-maker:before {
         content: "\F1BD"; }
         .hricon-complimentary-bottled-water:before {
         content: "\F1BE"; }
         .hricon-complimentary-instant-coffee:before {
         content: "\F1BF"; }
         .hricon-complimentary-tea:before {
         content: "\F1C0"; }
         .hricon-compset-comparison:before {
         content: "\F1C1"; }
         .hricon-concierge:before {
         content: "\F1C2"; }
         .hricon-confirmation-instant:before {
         content: "\F1C3"; }
         .hricon-confirmation-later:before {
         content: "\F1C4"; }
         .hricon-confirmation-solid:before {
         content: "\F1C5"; }
         .hricon-confirmation:before {
         content: "\F1C6"; }
         .hricon-continental-breakfast:before {
         content: "\F1C7"; }
         .hricon-control-close-circle:before {
         content: "\F1C8"; }
         .hricon-control-collapse:before {
         content: "\F1C9"; }
         .hricon-control-expand:before {
         content: "\F1CA"; }
         .hricon-cookie:before {
         content: "\F1CB"; }
         .hricon-couple-hover:before {
         content: "\F1CC"; }
         .hricon-couple:before {
         content: "\F1CD"; }
         .hricon-coupon-card-no-circle:before {
         content: "\F1CE"; }
         .hricon-coupon-card-solid:before {
         content: "\F1CF"; }
         .hricon-coupon-card:before {
         content: "\F1D0"; }
         .hricon-coupon-promo:before {
         content: "\F1D1"; }
         .hricon-coupon:before {
         content: "\F1D2"; }
         .hricon-credit-card-bf:before {
         content: "\F1D3"; }
         .hricon-credit-card-required:before {
         content: "\F1D4"; }
         .hricon-credit-card:before {
         content: "\F1D5"; }
         .hricon-culture:before {
         content: "\F1D6"; }
         .hricon-currency-exchange:before {
         content: "\F1D7"; }
         .hricon-daily-housekeeping:before {
         content: "\F1D8"; }
         .hricon-daily-newspaper:before {
         content: "\F1D9"; }
         .hricon-dart-board:before {
         content: "\F1DA"; }
         .hricon-dashboard:before {
         content: "\F1DB"; }
         .hricon-data-at-your-fingertips:before {
         content: "\F1DC"; }
         .hricon-deal-gift-card:before {
         content: "\F1DD"; }
         .hricon-deal-insider:before {
         content: "\F1DE"; }
         .hricon-default-feedback:before {
         content: "\F1DF"; }
         .hricon-desk:before {
         content: "\F1E0"; }
         .hricon-diners-clubs-card:before {
         content: "\F1E1"; }
         .hricon-dinner:before {
         content: "\F1E2"; }
         .hricon-discount:before {
         content: "\F1E3"; }
         .hricon-discover-card:before {
         content: "\F1E4"; }
         .hricon-dishwasher:before {
         content: "\F1E5"; }
         .hricon-distance-from-city-center:before {
         content: "\F1E6"; }
         .hricon-distance-to-airport:before {
         content: "\F1E7"; }
         .hricon-diving:before {
         content: "\F1E8"; }
         .hricon-document:before {
         content: "\F1E9"; }
         .hricon-dog-allowed:before {
         content: "\F1EA"; }
         .hricon-domestic-rates:before {
         content: "\F1EB"; }
         .hricon-dot-seperater:before {
         content: "\F1EC"; }
         .hricon-double-bed:before {
         content: "\F1ED"; }
         .hricon-double-super-king-queen:before {
         content: "\F1EE"; }
         .hricon-download-apps:before {
         content: "\F1EF"; }
         .hricon-dressing-room:before {
         content: "\F1F0"; }
         .hricon-drinks:before {
         content: "\F1F1"; }
         .hricon-drizzle:before {
         content: "\F1F2"; }
         .hricon-drug-stores:before {
         content: "\F1F3"; }
         .hricon-dryer:before {
         content: "\F1F4"; }
         .hricon-dvd-cd-player:before {
         content: "\F1F5"; }
         .hricon-dynamic-banner:before {
         content: "\F1F6"; }
         .hricon-early-bird-deal:before {
         content: "\F1F7"; }
         .hricon-early-check-in:before {
         content: "\F1F8"; }
         .hricon-easy-integration:before {
         content: "\F1F9"; }
         .hricon-edge-arrow-left:before {
         content: "\F1FA"; }
         .hricon-edge-arrow-right:before {
         content: "\F1FB"; }
         .hricon-edit:before {
         content: "\F1FC"; }
         .hricon-electric-blanket:before {
         content: "\F1FD"; }
         .hricon-elevator:before {
         content: "\F1FE"; }
         .hricon-email-envelope:before {
         content: "\F1FF"; }
         .hricon-emo-dislike-ani1:before {
         content: "\F200"; }
         .hricon-emo-dislike-ani2:before {
         content: "\F201"; }
         .hricon-emo-dislike-ani3:before {
         content: "\F202"; }
         .hricon-emo-dislike-click:before, .survey-banner-answer-icon.hricon-emo-dislike-ani1:active:before {
         content: "\F203"; }
         .hricon-emo-dont-care-ani1:before {
         content: "\F204"; }
         .hricon-emo-dont-care-ani2:before {
         content: "\F205"; }
         .hricon-emo-dont-care-ani3:before {
         content: "\F206"; }
         .hricon-emo-dont-care-click:before, .survey-banner-answer-icon.hricon-emo-dont-care-ani1:active:before {
         content: "\F207"; }
         .hricon-emo-great-ani1:before {
         content: "\F208"; }
         .hricon-emo-great-ani2:before {
         content: "\F209"; }
         .hricon-emo-great-ani3:before {
         content: "\F20A"; }
         .hricon-emo-great-click:before, .survey-banner-answer-icon.hricon-emo-great-ani1:active:before {
         content: "\F20B"; }
         .hricon-emo-nice-ani1:before {
         content: "\F20C"; }
         .hricon-emo-nice-ani2:before {
         content: "\F20D"; }
         .hricon-emo-nice-ani3:before {
         content: "\F20E"; }
         .hricon-emo-nice-click:before, .survey-banner-answer-icon.hricon-emo-nice-ani1:active:before {
         content: "\F20F"; }
         .hricon-entire-place:before {
         content: "\F210"; }
         .hricon-essentials:before {
         content: "\F211"; }
         .hricon-everybody-fits:before {
         content: "\F212"; }
         .hricon-exclusive-sale:before {
         content: "\F213"; }
         .hricon-executive-floor:before {
         content: "\F214"; }
         .hricon-executive-lounge-access:before {
         content: "\F215"; }
         .hricon-export-calendar:before {
         content: "\F216"; }
         .hricon-express-check-in-check-out:before {
         content: "\F217"; }
         .hricon-exterior:before {
         content: "\F218"; }
         .hricon-extra-bed:before {
         content: "\F219"; }
         .hricon-extra-long-beds:before {
         content: "\F21A"; }
         .hricon-facebook-logo:before {
         content: "\F21B"; }
         .hricon-facilities-for-disabled-guests:before {
         content: "\F21C"; }
         .hricon-facilities-rich:before {
         content: "\F21D"; }
         .hricon-failed-o:before {
         content: "\F21E"; }
         .hricon-failed:before {
         content: "\F21F"; }
         .hricon-fair-mostly-clear:before {
         content: "\F220"; }
         .hricon-fair-mostly-sunny:before {
         content: "\F221"; }
         .hricon-family-friendly:before {
         content: "\F222"; }
         .hricon-family-fun:before {
         content: "\F223"; }
         .hricon-family-line:before {
         content: "\F224"; }
         .hricon-family-room:before {
         content: "\F225"; }
         .hricon-family-special-deal:before {
         content: "\F226"; }
         .hricon-family-with-small-kids-hover:before {
         content: "\F227"; }
         .hricon-family-with-teens-hover:before {
         content: "\F228"; }
         .hricon-family-with-teens:before {
         content: "\F229"; }
         .hricon-fan:before {
         content: "\F22A"; }
         .hricon-faq:before {
         content: "\F22B"; }
         .hricon-favorite-filled:before {
         content: "\F22C"; }
         .hricon-favorite:before {
         content: "\F22D"; }
         .hricon-fax-machine:before {
         content: "\F22E"; }
         .hricon-fax-or-photo:before {
         content: "\F22F"; }
         .hricon-feedback:before {
         content: "\F230"; }
         .hricon-few-clouds:before {
         content: "\F231"; }
         .hricon-filter-icon:before {
         content: "\F232"; }
         .hricon-filter-line:before {
         content: "\F233"; }
         .hricon-fire-extinguisher:before {
         content: "\F234"; }
         .hricon-fireplace:before {
         content: "\F235"; }
         .hricon-first-aid-kit:before {
         content: "\F236"; }
         .hricon-fishing:before {
         content: "\F237"; }
         .hricon-fitness-center-charge:before {
         content: "\F238"; }
         .hricon-fitness-center:before {
         content: "\F239"; }
         .hricon-fitness-club:before {
         content: "\F23A"; }
         .hricon-flash-deal:before {
         content: "\F23B"; }
         .hricon-flash-sale:before {
         content: "\F23C"; }
         .hricon-flight-earn:before {
         content: "\F23D"; }
         .hricon-foggy:before {
         content: "\F23E"; }
         .hricon-forgot-pass:before {
         content: "\F23F"; }
         .hricon-free-bicycle:before {
         content: "\F240"; }
         .hricon-free-breakfast:before {
         content: "\F241"; }
         .hricon-free-cancellation:before {
         content: "\F242"; }
         .hricon-free-fitness-center:before {
         content: "\F243"; }
         .hricon-free-night-stay-circle:before {
         content: "\F244"; }
         .hricon-free-night-stay:before {
         content: "\F245"; }
         .hricon-free-night:before {
         content: "\F246"; }
         .hricon-free-welcome-drink:before {
         content: "\F247"; }
         .hricon-free-wifi-in-all-rooms:before {
         content: "\F248"; }
         .hricon-freezing-drizzle:before {
         content: "\F249"; }
         .hricon-freezing-rain:before {
         content: "\F24A"; }
         .hricon-frequent-traveler:before {
         content: "\F24B"; }
         .hricon-fresh-newly-built-property:before {
         content: "\F24C"; }
         .hricon-frigid-ice-crystals:before {
         content: "\F24D"; }
         .hricon-g-giftcard:before {
         content: "\F24E"; }
         .hricon-garden:before {
         content: "\F24F"; }
         .hricon-gca-wreath-left:before {
         content: "\F250"; }
         .hricon-gca-wreath-right:before {
         content: "\F251"; }
         .hricon-get-extra-space:before {
         content: "\F252"; }
         .hricon-gift-card:before {
         content: "\F253"; }
         .hricon-gift-souvenir-shop:before {
         content: "\F254"; }
         .hricon-giftcard-instant:before {
         content: "\F255"; }
         .hricon-giftcard:before {
         content: "\F256"; }
         .hricon-global:before {
         content: "\F257"; }
         .hricon-golf-course-on-site:before {
         content: "\F258"; }
         .hricon-golf-course-within-3k:before {
         content: "\F259"; }
         .hricon-grocery-deliveries:before {
         content: "\F25A"; }
         .hricon-ground-floor:before {
         content: "\F25B"; }
         .hricon-group-travelers-hover:before {
         content: "\F25C"; }
         .hricon-group-travelers:before {
         content: "\F25D"; }
         .hricon-guest-house:before {
         content: "\F25E"; }
         .hricon-gym:before {
         content: "\F25F"; }
         .hricon-hail:before {
         content: "\F260"; }
         .hricon-hair-dryer:before {
         content: "\F261"; }
         .hricon-halal-restaurant-b:before {
         content: "\F262"; }
         .hricon-halal-restaurant:before {
         content: "\F263"; }
         .hricon-half-full-board:before {
         content: "\F264"; }
         .hricon-hamburger-menu:before {
         content: "\F265"; }
         .hricon-hangers:before {
         content: "\F266"; }
         .hricon-haze-windy:before {
         content: "\F267"; }
         .hricon-heart-of-the-city:before {
         content: "\F268"; }
         .hricon-heating:before {
         content: "\F269"; }
         .hricon-heavy-rain:before {
         content: "\F26A"; }
         .hricon-heavy-snow:before {
         content: "\F26B"; }
         .hricon-high-floor:before {
         content: "\F26C"; }
         .hricon-high-to-low:before {
         content: "\F26D"; }
         .hricon-hiking-trails:before {
         content: "\F26E"; }
         .hricon-holiday-house:before {
         content: "\F26F"; }
         .hricon-homestay:before {
         content: "\F270"; }
         .hricon-horse-riding:before {
         content: "\F271"; }
         .hricon-hospitals-clinics:before {
         content: "\F272"; }
         .hricon-hot-spring-access:before {
         content: "\F273"; }
         .hricon-hot-spring-bath:before {
         content: "\F274"; }
         .hricon-hot-tub:before {
         content: "\F275"; }
         .hricon-hot:before {
         content: "\F276"; }
         .hricon-hotel-benefit:before {
         content: "\F277"; }
         .hricon-hotel-book-last:before {
         content: "\F278"; }
         .hricon-hotel-data:before {
         content: "\F279"; }
         .hricon-hotel-great-location:before {
         content: "\F27A"; }
         .hricon-hotel-people-looking:before {
         content: "\F27B"; }
         .hricon-hotel-star-half:before {
         content: "\F27C"; }
         .hricon-hotel-star:before {
         content: "\F27D"; }
         .hricon-hotel-wifi:before {
         content: "\F27E"; }
         .hricon-hotel:before {
         content: "\F27F"; }
         .hricon-hover-details:before {
         content: "\F280"; }
         .hricon-human-large:before {
         content: "\F281"; }
         .hricon-humidifier:before {
         content: "\F282"; }
         .hricon-hurricane:before {
         content: "\F283"; }
         .hricon-ic-filter-bestseller:before {
         content: "\F284"; }
         .hricon-icon-arrow-down:before {
         content: "\F285"; }
         .hricon-icon-arrow-up:before {
         content: "\F286"; }
         .hricon-iftar:before {
         content: "\F287"; }
         .hricon-import-calendar:before {
         content: "\F288"; }
         .hricon-in-room-safe:before {
         content: "\F289"; }
         .hricon-in-room-tablet:before {
         content: "\F28A"; }
         .hricon-in-room-video-games:before {
         content: "\F28B"; }
         .hricon-indoor-poor:before {
         content: "\F28C"; }
         .hricon-infant:before {
         content: "\F28D"; }
         .hricon-infirmary:before {
         content: "\F28E"; }
         .hricon-info-alert:before {
         content: "\F28F"; }
         .hricon-info-with-circle:before {
         content: "\F290"; }
         .hricon-information:before {
         content: "\F291"; }
         .hricon-inhouse-movies:before {
         content: "\F292"; }
         .hricon-insider-deal-desktop:before {
         content: "\F293"; }
         .hricon-installment-graph:before {
         content: "\F294"; }
         .hricon-installment-line:before {
         content: "\F295"; }
         .hricon-installment-solid:before {
         content: "\F296"; }
         .hricon-instant-booking:before {
         content: "\F297"; }
         .hricon-instant:before {
         content: "\F298"; }
         .hricon-interconnecting-room-available:before {
         content: "\F299"; }
         .hricon-invalided-file:before {
         content: "\F29A"; }
         .hricon-ipod-docking-station:before {
         content: "\F29B"; }
         .hricon-islamic-prayer-room:before {
         content: "\F29C"; }
         .hricon-isolated-thunderstorms:before {
         content: "\F29D"; }
         .hricon-jacuzzi-bathtub:before {
         content: "\F29E"; }
         .hricon-japanese-futon:before {
         content: "\F29F"; }
         .hricon-jcb:before {
         content: "\F2A0"; }
         .hricon-karaoke:before {
         content: "\F2A1"; }
         .hricon-keyless-access:before {
         content: "\F2A2"; }
         .hricon-kids-club:before {
         content: "\F2A3"; }
         .hricon-king-bed:before {
         content: "\F2A4"; }
         .hricon-kitchen:before {
         content: "\F2A5"; }
         .hricon-kitchenette:before {
         content: "\F2A6"; }
         .hricon-kitchenware:before {
         content: "\F2A7"; }
         .hricon-kosher-restaurant:before {
         content: "\F2A8"; }
         .hricon-lake-view:before {
         content: "\F2A9"; }
         .hricon-laptop-friendly-workspace:before {
         content: "\F2AA"; }
         .hricon-laptop-safe-box:before {
         content: "\F2AB"; }
         .hricon-last-minute-deal-2:before {
         content: "\F2AC"; }
         .hricon-last-minute-deal:before {
         content: "\F2AD"; }
         .hricon-last-viewed:before {
         content: "\F2AE"; }
         .hricon-late-check-out:before {
         content: "\F2AF"; }
         .hricon-laundromat:before {
         content: "\F2B0"; }
         .hricon-laundry-service:before {
         content: "\F2B1"; }
         .hricon-length-of-stay:before {
         content: "\F2B2"; }
         .hricon-library:before {
         content: "\F2B3"; }
         .hricon-light-rain:before {
         content: "\F2B4"; }
         .hricon-light-snow:before {
         content: "\F2B5"; }
         .hricon-lightbox:before {
         content: "\F2B6"; }
         .hricon-limit-deal:before {
         content: "\F2B7"; }
         .hricon-limited-access-floor:before {
         content: "\F2B8"; }
         .hricon-line-close:before {
         content: "\F2B9"; }
         .hricon-line-empty-circle:before {
         content: "\F2BA"; }
         .hricon-linens:before {
         content: "\F2BB"; }
         .hricon-link-out-bold:before {
         content: "\F2BC"; }
         .hricon-link-out:before {
         content: "\F2BD"; }
         .hricon-lobby:before {
         content: "\F2BE"; }
         .hricon-lockers:before {
         content: "\F2BF"; }
         .hricon-logo-ah:before {
         content: "\F2C0"; }
         .hricon-logo-wechat:before {
         content: "\F2C1"; }
         .hricon-long-stay-deal:before {
         content: "\F2C2"; }
         .hricon-long-stays-promotion:before {
         content: "\F2C3"; }
         .hricon-long-stays:before {
         content: "\F2C4"; }
         .hricon-low-floor:before {
         content: "\F2C5"; }
         .hricon-low-to-high:before {
         content: "\F2C6"; }
         .hricon-luggage-storage:before {
         content: "\F2C7"; }
         .hricon-luggage:before {
         content: "\F2C8"; }
         .hricon-lunch:before {
         content: "\F2C9"; }
         .hricon-luxury:before {
         content: "\F2CA"; }
         .hricon-male-capsule:before {
         content: "\F2CB"; }
         .hricon-mandarin:before {
         content: "\F2CC"; }
         .hricon-map-airport:before {
         content: "\F2CD"; }
         .hricon-map-attraction:before {
         content: "\F2CE"; }
         .hricon-map-city:before {
         content: "\F2CF"; }
         .hricon-map-night:before {
         content: "\F2D0"; }
         .hricon-map-pin-fat:before {
         content: "\F2D1"; }
         .hricon-map-room:before {
         content: "\F2D2"; }
         .hricon-map-transportation:before {
         content: "\F2D3"; }
         .hricon-map-view:before {
         content: "\F2D4"; }
         .hricon-map-entry:before {
         content: "\F2D5"; }
         .hricon-massage:before {
         content: "\F2D6"; }
         .hricon-mastercard:before {
         content: "\F2D7"; }
         .hricon-max-occupancy-plus:before {
         content: "\F2D8"; }
         .hricon-max-occupancy:before {
         content: "\F2D9"; }
         .hricon-meeting-banquet:before {
         content: "\F2DA"; }
         .hricon-meeting-facilities:before {
         content: "\F2DB"; }
         .hricon-menu-about:before {
         content: "\F2DC"; }
         .hricon-menu-account-hover:before {
         content: "\F2DD"; }
         .hricon-menu-account:before {
         content: "\F2DE"; }
         .hricon-menu-bookings:before {
         content: "\F2DF"; }
         .hricon-menu-calendar-hover:before {
         content: "\F2E0"; }
         .hricon-menu-calendar:before {
         content: "\F2E1"; }
         .hricon-menu-contact-us:before {
         content: "\F2E2"; }
         .hricon-menu-favorite:before {
         content: "\F2E3"; }
         .hricon-menu-inbox-hover:before {
         content: "\F2E4"; }
         .hricon-menu-inbox:before {
         content: "\F2E5"; }
         .hricon-menu-listings-hover:before {
         content: "\F2E6"; }
         .hricon-menu-listings:before {
         content: "\F2E7"; }
         .hricon-menu-overviews-hover:before {
         content: "\F2E8"; }
         .hricon-menu-overviews:before {
         content: "\F2E9"; }
         .hricon-menu-price-display:before {
         content: "\F2EA"; }
         .hricon-menu-reservations-hover:before {
         content: "\F2EB"; }
         .hricon-menu-reservations:before {
         content: "\F2EC"; }
         .hricon-menu-reviews:before {
         content: "\F2ED"; }
         .hricon-menu-today-deals:before {
         content: "\F2EE"; }
         .hricon-message-left:before {
         content: "\F2EF"; }
         .hricon-message-right:before {
         content: "\F2F0"; }
         .hricon-metro-subway-station:before {
         content: "\F2F1"; }
         .hricon-microwave:before {
         content: "\F2F2"; }
         .hricon-mini-bar:before {
         content: "\F2F3"; }
         .hricon-minibar-b:before {
         content: "\F2F4"; }
         .hricon-minus-thin:before {
         content: "\F2F5"; }
         .hricon-minus-with-circle:before {
         content: "\F2F6"; }
         .hricon-mirror:before {
         content: "\F2F7"; }
         .hricon-mist:before {
         content: "\F2F8"; }
         .hricon-mixed-rain-hail:before {
         content: "\F2F9"; }
         .hricon-mmb-account:before {
         content: "\F2FA"; }
         .hricon-mmb-booking:before {
         content: "\F2FB"; }
         .hricon-mmb-g-giftcard:before {
         content: "\F2FC"; }
         .hricon-mmb-gift-cards:before {
         content: "\F2FD"; }
         .hricon-mmb-inbox:before {
         content: "\F2FE"; }
         .hricon-mmb-my-booking:before {
         content: "\F2FF"; }
         .hricon-mmb-my-rewards:before {
         content: "\F300"; }
         .hricon-mmb-payment-methods:before {
         content: "\F301"; }
         .hricon-mmb-pointsmax:before {
         content: "\F302"; }
         .hricon-mmb-refer-a-friend:before {
         content: "\F303"; }
         .hricon-mmb-reviews-b:before {
         content: "\F304"; }
         .hricon-mmb-reviews:before {
         content: "\F305"; }
         .hricon-more-images:before {
         content: "\F306"; }
         .hricon-more-money:before {
         content: "\F307"; }
         .hricon-mosquitonet:before {
         content: "\F308"; }
         .hricon-most-popular-destinations:before {
         content: "\F309"; }
         .hricon-mostly-cloudy-day:before {
         content: "\F30A"; }
         .hricon-mostly-cloudy-night:before {
         content: "\F30B"; }
         .hricon-motorbike:before {
         content: "\F30C"; }
         .hricon-mountain-view:before {
         content: "\F30D"; }
         .hricon-mse-icon:before {
         content: "\F30E"; }
         .hricon-mse-price-icon:before {
         content: "\F30F"; }
         .hricon-museum-arts:before {
         content: "\F310"; }
         .hricon-nav-back:before {
         content: "\F311"; }
         .hricon-nav-down-bold:before {
         content: "\F312"; }
         .hricon-nav-down-thin:before {
         content: "\F313"; }
         .hricon-nav-left-bold:before {
         content: "\F314"; }
         .hricon-nav-left-thin:before {
         content: "\F315"; }
         .hricon-nav-right-bold:before {
         content: "\F316"; }
         .hricon-nav-right-thin:before {
         content: "\F317"; }
         .hricon-nav-up-bold:before {
         content: "\F318"; }
         .hricon-nav-up-thin:before {
         content: "\F319"; }
         .hricon-negative:before {
         content: "\F31A"; }
         .hricon-neighborhood-line:before {
         content: "\F31B"; }
         .hricon-neighborhood:before {
         content: "\F31C"; }
         .hricon-new-property:before {
         content: "\F31D"; }
         .hricon-nightclub:before {
         content: "\F31E"; }
         .hricon-nightlife:before {
         content: "\F31F"; }
         .hricon-no-breakfast-a:before {
         content: "\F320"; }
         .hricon-no-breakfast-b:before {
         content: "\F321"; }
         .hricon-no-cc-fee:before {
         content: "\F322"; }
         .hricon-no-cc:before {
         content: "\F323"; }
         .hricon-non-smoking-room:before {
         content: "\F324"; }
         .hricon-non-smoking:before {
         content: "\F325"; }
         .hricon-not-available:before {
         content: "\F326"; }
         .hricon-noti-balloon-answer:before {
         content: "\F327"; }
         .hricon-noti-balloon-question:before {
         content: "\F328"; }
         .hricon-noti-check-mark-rounded-inner:before {
         content: "\F329"; }
         .hricon-noti-check-mark-sharp:before {
         content: "\F32A"; }
         .hricon-notice-info:before {
         content: "\F32B"; }
         .hricon-number-of-floors:before {
         content: "\F32C"; }
         .hricon-number-of-rooms:before {
         content: "\F32D"; }
         .hricon-number-reviews:before {
         content: "\F32E"; }
         .hricon-number1:before {
         content: "\F32F"; }
         .hricon-occupancy:before {
         content: "\F330"; }
         .hricon-ocean-view:before {
         content: "\F331"; }
         .hricon-open-a-new-tab:before {
         content: "\F332"; }
         .hricon-outdoor-pool:before {
         content: "\F333"; }
         .hricon-partly-cloudy-day:before {
         content: "\F334"; }
         .hricon-partly-cloudy-night:before {
         content: "\F335"; }
         .hricon-password:before {
         content: "\F336"; }
         .hricon-pay-at-hotel-in-cash:before {
         content: "\F337"; }
         .hricon-pay-at-the-place:before {
         content: "\F338"; }
         .hricon-pay-on-checkin:before {
         content: "\F339"; }
         .hricon-payment-option-no-credit-card:before {
         content: "\F33A"; }
         .hricon-pending-bold:before {
         content: "\F33B"; }
         .hricon-pending:before {
         content: "\F33C"; }
         .hricon-personal-cheque:before {
         content: "\F33D"; }
         .hricon-personal-details:before {
         content: "\F33E"; }
         .hricon-pet-allowed-room:before {
         content: "\F33F"; }
         .hricon-pets-allowed:before {
         content: "\F340"; }
         .hricon-photo-uploader:before {
         content: "\F341"; }
         .hricon-photocopying:before {
         content: "\F342"; }
         .hricon-pin-airport:before {
         content: "\F343"; }
         .hricon-pin-beach:before {
         content: "\F344"; }
         .hricon-pin-business:before {
         content: "\F345"; }
         .hricon-pin-casino:before {
         content: "\F346"; }
         .hricon-pin-culture:before {
         content: "\F347"; }
         .hricon-pin-excellent:before {
         content: "\F348"; }
         .hricon-pin-family-fun:before {
         content: "\F349"; }
         .hricon-pin-heart-of-city-building:before {
         content: "\F34A"; }
         .hricon-pin-heart-of-city-mind:before {
         content: "\F34B"; }
         .hricon-pin-heart-of-city:before {
         content: "\F34C"; }
         .hricon-pin-heart-of-the-city:before {
         content: "\F34D"; }
         .hricon-pin-mountain-view:before {
         content: "\F34E"; }
         .hricon-pin-museum-arts:before {
         content: "\F34F"; }
         .hricon-pin-nightlife:before {
         content: "\F350"; }
         .hricon-pin-poi:before {
         content: "\F351"; }
         .hricon-pin-religious:before {
         content: "\F352"; }
         .hricon-pin-restaurant:before {
         content: "\F353"; }
         .hricon-pin-romance:before {
         content: "\F354"; }
         .hricon-pin-shopping-markets:before {
         content: "\F355"; }
         .hricon-pin-sightseeing:before {
         content: "\F356"; }
         .hricon-pin-skiing:before {
         content: "\F357"; }
         .hricon-pin-spas:before {
         content: "\F358"; }
         .hricon-pin-tennis-courts:before {
         content: "\F359"; }
         .hricon-pin-transportation-hub:before {
         content: "\F35A"; }
         .hricon-pin:before {
         content: "\F35B"; }
         .hricon-pin-star:before {
         content: "\F35C"; }
         .hricon-plus-thin:before {
         content: "\F35D"; }
         .hricon-plus-with-circle:before {
         content: "\F35E"; }
         .hricon-poi-text-search:before {
         content: "\F35F"; }
         .hricon-poi:before {
         content: "\F360"; }
         .hricon-pointsmax-line-logo:before {
         content: "\F361"; }
         .hricon-pointsmax-logo:before {
         content: "\F362"; }
         .hricon-pointsmax-placeholder:before {
         content: "\F363"; }
         .hricon-pointsmax:before {
         content: "\F364"; }
         .hricon-police:before {
         content: "\F365"; }
         .hricon-pool-kids:before {
         content: "\F366"; }
         .hricon-pool:before {
         content: "\F367"; }
         .hricon-poolside-bar:before {
         content: "\F368"; }
         .hricon-popular-icon:before {
         content: "\F369"; }
         .hricon-portable-wifi-rental:before {
         content: "\F36A"; }
         .hricon-positive:before {
         content: "\F36B"; }
         .hricon-postal-service:before {
         content: "\F36C"; }
         .hricon-prepayment:before {
         content: "\F36D"; }
         .hricon-price-display:before {
         content: "\F36E"; }
         .hricon-price-drop:before {
         content: "\F36F"; }
         .hricon-price-messaging:before {
         content: "\F370"; }
         .hricon-price-seen-user:before {
         content: "\F371"; }
         .hricon-printer:before {
         content: "\F372"; }
         .hricon-privacy-policy:before {
         content: "\F373"; }
         .hricon-private-bath:before {
         content: "\F374"; }
         .hricon-private-beach:before {
         content: "\F375"; }
         .hricon-private-entrance:before {
         content: "\F376"; }
         .hricon-private-pool:before {
         content: "\F377"; }
         .hricon-profiles:before {
         content: "\F378"; }
         .hricon-promo-code:before {
         content: "\F379"; }
         .hricon-promo-score:before {
         content: "\F37A"; }
         .hricon-promotion-right:before {
         content: "\F37B"; }
         .hricon-properties-without-price:before {
         content: "\F37C"; }
         .hricon-properties:before {
         content: "\F37D"; }
         .hricon-property-name:before {
         content: "\F37E"; }
         .hricon-property-owner:before {
         content: "\F37F"; }
         .hricon-property-tooltip:before {
         content: "\F380"; }
         .hricon-queen-bed:before {
         content: "\F381"; }
         .hricon-question-mark:before {
         content: "\F382"; }
         .hricon-questions:before {
         content: "\F383"; }
         .hricon-rain-sleet:before {
         content: "\F384"; }
         .hricon-rain-to-snow-showers:before {
         content: "\F385"; }
         .hricon-rain:before {
         content: "\F386"; }
         .hricon-ratings:before {
         content: "\F387"; }
         .hricon-recently:before {
         content: "\F388"; }
         .hricon-reception:before {
         content: "\F389"; }
         .hricon-recommendations:before {
         content: "\F38A"; }
         .hricon-refresh-bold:before {
         content: "\F38B"; }
         .hricon-refresh:before {
         content: "\F38C"; }
         .hricon-refrigerator:before {
         content: "\F38D"; }
         .hricon-religious:before {
         content: "\F38E"; }
         .hricon-reporting-property:before {
         content: "\F38F"; }
         .hricon-reporting:before {
         content: "\F390"; }
         .hricon-residence:before {
         content: "\F391"; }
         .hricon-resort-property-plan:before {
         content: "\F392"; }
         .hricon-restaurant-credit:before {
         content: "\F393"; }
         .hricon-restaurant:before {
         content: "\F394"; }
         .hricon-review-icon:before {
         content: "\F395"; }
         .hricon-review-line:before {
         content: "\F396"; }
         .hricon-review-your-stay:before {
         content: "\F397"; }
         .hricon-ribbon-card-no-circle:before {
         content: "\F398"; }
         .hricon-ribbon-card-solid:before {
         content: "\F399"; }
         .hricon-ribbon-card:before {
         content: "\F39A"; }
         .hricon-right-tick:before {
         content: "\F39B"; }
         .hricon-romance:before {
         content: "\F39C"; }
         .hricon-room-plan:before {
         content: "\F39D"; }
         .hricon-room-promotion-for-flashdeal:before {
         content: "\F39E"; }
         .hricon-room-promotion-for-mobiledeal:before {
         content: "\F39F"; }
         .hricon-room-promotion-for-otherdeal:before {
         content: "\F3A0"; }
         .hricon-room-promotion-for-smartdeal:before {
         content: "\F3A1"; }
         .hricon-room-promotion-super-savedeal:before {
         content: "\F3A2"; }
         .hricon-room-promotion:before {
         content: "\F3A3"; }
         .hricon-room-service:before {
         content: "\F3A4"; }
         .hricon-room-voltage:before {
         content: "\F3A5"; }
         .hricon-safety-deposit-boxes:before {
         content: "\F3A6"; }
         .hricon-salon:before {
         content: "\F3A7"; }
         .hricon-satellite-cable-channels:before {
         content: "\F3A8"; }
         .hricon-satellite-television:before {
         content: "\F3A9"; }
         .hricon-sauna:before {
         content: "\F3AA"; }
         .hricon-save-to-pdf:before {
         content: "\F3AB"; }
         .hricon-scale:before {
         content: "\F3AC"; }
         .hricon-scattered-clouds:before {
         content: "\F3AD"; }
         .hricon-scattered-flurries:before {
         content: "\F3AE"; }
         .hricon-scattered-showers:before {
         content: "\F3AF"; }
         .hricon-scattered-snow-showe:before {
         content: "\F3B0"; }
         .hricon-scattered-thunderstorms:before {
         content: "\F3B1"; }
         .hricon-scissor:before {
         content: "\F3B2"; }
         .hricon-search-box:before {
         content: "\F3B3"; }
         .hricon-search-calendar:before {
         content: "\F3B4"; }
         .hricon-search-icon:before {
         content: "\F3B5"; }
         .hricon-seating-area:before {
         content: "\F3B6"; }
         .hricon-sec:before {
         content: "\F3B7"; }
         .hricon-secure-icon:before {
         content: "\F3B8"; }
         .hricon-secure-payment:before {
         content: "\F3B9"; }
         .hricon-selected-property:before {
         content: "\F3BA"; }
         .hricon-self-parking:before {
         content: "\F3BB"; }
         .hricon-semi-double-bed-b:before {
         content: "\F3BC"; }
         .hricon-semi-double-bed:before {
         content: "\F3BD"; }
         .hricon-separate-dining-area:before {
         content: "\F3BE"; }
         .hricon-separate-living-room:before {
         content: "\F3BF"; }
         .hricon-separate-shower-and-tub:before {
         content: "\F3C0"; }
         .hricon-seriously-multilingual:before {
         content: "\F3C1"; }
         .hricon-sewing-kit:before {
         content: "\F3C2"; }
         .hricon-shampoo:before {
         content: "\F3C3"; }
         .hricon-share:before {
         content: "\F3C4"; }
         .hricon-shared-bath:before {
         content: "\F3C5"; }
         .hricon-shared-kitchen:before {
         content: "\F3C6"; }
         .hricon-shoeshine-kit:before {
         content: "\F3C7"; }
         .hricon-shopping-markets:before {
         content: "\F3C8"; }
         .hricon-shopping:before {
         content: "\F3C9"; }
         .hricon-shops:before {
         content: "\F3CA"; }
         .hricon-show-more:before {
         content: "\F3CB"; }
         .hricon-shower-and-bathtub:before {
         content: "\F3CC"; }
         .hricon-shower-rain:before {
         content: "\F3CD"; }
         .hricon-shower:before {
         content: "\F3CE"; }
         .hricon-shrine:before {
         content: "\F3CF"; }
         .hricon-shuttle-service:before {
         content: "\F3D0"; }
         .hricon-sightseeing:before {
         content: "\F3D1"; }
         .hricon-single-bed-b:before {
         content: "\F3D2"; }
         .hricon-single-bed:before {
         content: "\F3D3"; }
         .hricon-size-of-rooms:before {
         content: "\F3D4"; }
         .hricon-ski-equipment-rentals:before {
         content: "\F3D5"; }
         .hricon-ski-lessons:before {
         content: "\F3D6"; }
         .hricon-skiing:before {
         content: "\F3D7"; }
         .hricon-sleet:before {
         content: "\F3D8"; }
         .hricon-slippers:before {
         content: "\F3D9"; }
         .hricon-smoke-detector:before {
         content: "\F3DA"; }
         .hricon-smoke-windy:before {
         content: "\F3DB"; }
         .hricon-smoking-allowed:before {
         content: "\F3DC"; }
         .hricon-smoking-area:before {
         content: "\F3DD"; }
         .hricon-smorking-yes-no:before {
         content: "\F3DE"; }
         .hricon-snorkeling:before {
         content: "\F3DF"; }
         .hricon-snow:before {
         content: "\F3E0"; }
         .hricon-sofa-bed:before {
         content: "\F3E1"; }
         .hricon-sofa:before {
         content: "\F3E2"; }
         .hricon-solarium:before {
         content: "\F3E3"; }
         .hricon-solid-24hour-front-desk:before {
         content: "\F3E4"; }
         .hricon-solid-24hour-room-service:before {
         content: "\F3E5"; }
         .hricon-solid-adults-b:before {
         content: "\F3E6"; }
         .hricon-solid-adults:before {
         content: "\F3E7"; }
         .hricon-solid-air-conditioning:before {
         content: "\F3E8"; }
         .hricon-solid-airport-transfer:before {
         content: "\F3E9"; }
         .hricon-solid-babies:before {
         content: "\F3EA"; }
         .hricon-solid-bar:before {
         content: "\F3EB"; }
         .hricon-solid-beach:before {
         content: "\F3EC"; }
         .hricon-solid-car-park:before {
         content: "\F3ED"; }
         .hricon-solid-families-b:before {
         content: "\F3EE"; }
         .hricon-solid-families:before {
         content: "\F3EF"; }
         .hricon-solid-fitness:before {
         content: "\F3F0"; }
         .hricon-solid-free-wi-fi:before {
         content: "\F3F1"; }
         .hricon-solid-garden:before {
         content: "\F3F2"; }
         .hricon-solid-groups-b:before {
         content: "\F3F3"; }
         .hricon-solid-groups:before {
         content: "\F3F4"; }
         .hricon-solid-hair-dryer:before {
         content: "\F3F5"; }
         .hricon-solid-restaurant:before {
         content: "\F3F6"; }
         .hricon-solid-spa:before {
         content: "\F3F7"; }
         .hricon-solid-swimming-pool:before {
         content: "\F3F8"; }
         .hricon-solid-transportation:before {
         content: "\F3F9"; }
         .hricon-solo-hover:before {
         content: "\F3FA"; }
         .hricon-solo:before {
         content: "\F3FB"; }
         .hricon-sort-line:before {
         content: "\F3FC"; }
         .hricon-soundproofing:before {
         content: "\F3FD"; }
         .hricon-spa-credit:before {
         content: "\F3FE"; }
         .hricon-spa-sauna:before {
         content: "\F3FF"; }
         .hricon-spas:before {
         content: "\F400"; }
         .hricon-special-condition:before {
         content: "\F401"; }
         .hricon-spoken-1:before {
         content: "\F402"; }
         .hricon-spoken-10:before {
         content: "\F403"; }
         .hricon-spoken-11:before {
         content: "\F404"; }
         .hricon-spoken-12:before {
         content: "\F405"; }
         .hricon-spoken-13:before {
         content: "\F406"; }
         .hricon-spoken-2:before {
         content: "\F407"; }
         .hricon-spoken-20:before {
         content: "\F408"; }
         .hricon-spoken-22:before {
         content: "\F409"; }
         .hricon-spoken-23:before {
         content: "\F40A"; }
         .hricon-spoken-24:before {
         content: "\F40B"; }
         .hricon-spoken-25:before {
         content: "\F40C"; }
         .hricon-spoken-26:before {
         content: "\F40D"; }
         .hricon-spoken-27:before {
         content: "\F40E"; }
         .hricon-spoken-28:before {
         content: "\F40F"; }
         .hricon-spoken-29:before {
         content: "\F410"; }
         .hricon-spoken-3:before {
         content: "\F411"; }
         .hricon-spoken-30:before {
         content: "\F412"; }
         .hricon-spoken-31:before {
         content: "\F413"; }
         .hricon-spoken-32:before {
         content: "\F414"; }
         .hricon-spoken-33:before {
         content: "\F415"; }
         .hricon-spoken-34:before {
         content: "\F416"; }
         .hricon-spoken-35:before {
         content: "\F417"; }
         .hricon-spoken-36:before {
         content: "\F418"; }
         .hricon-spoken-37:before {
         content: "\F419"; }
         .hricon-spoken-38:before {
         content: "\F41A"; }
         .hricon-spoken-39:before {
         content: "\F41B"; }
         .hricon-spoken-4:before {
         content: "\F41C"; }
         .hricon-spoken-40:before {
         content: "\F41D"; }
         .hricon-spoken-43:before {
         content: "\F41E"; }
         .hricon-spoken-46:before {
         content: "\F41F"; }
         .hricon-spoken-47:before {
         content: "\F420"; }
         .hricon-spoken-48:before {
         content: "\F421"; }
         .hricon-spoken-49:before {
         content: "\F422"; }
         .hricon-spoken-5:before {
         content: "\F423"; }
         .hricon-spoken-50:before {
         content: "\F424"; }
         .hricon-spoken-6:before {
         content: "\F425"; }
         .hricon-spoken-7:before {
         content: "\F426"; }
         .hricon-spoken-8:before {
         content: "\F427"; }
         .hricon-spoken-9:before {
         content: "\F428"; }
         .hricon-sqm:before {
         content: "\F429"; }
         .hricon-squash-courts:before {
         content: "\F42A"; }
         .hricon-stack-of-square-papers:before {
         content: "\F42B"; }
         .hricon-star-1:before {
         content: "\F42C"; }
         .hricon-star-15:before {
         content: "\F42D"; }
         .hricon-star-2:before {
         content: "\F42E"; }
         .hricon-star-25:before {
         content: "\F42F"; }
         .hricon-star-3:before {
         content: "\F430"; }
         .hricon-star-35:before {
         content: "\F431"; }
         .hricon-star-4:before {
         content: "\F432"; }
         .hricon-star-45:before {
         content: "\F433"; }
         .hricon-star-5:before {
         content: "\F434"; }
         .hricon-steamroom:before {
         content: "\F435"; }
         .hricon-strong-storms:before {
         content: "\F436"; }
         .hricon-subways:before {
         content: "\F437"; }
         .hricon-suitable-for-events:before {
         content: "\F438"; }
         .hricon-sunny:before {
         content: "\F439"; }
         .hricon-super-king-bed:before {
         content: "\F43A"; }
         .hricon-surfing-lessons:before {
         content: "\F43B"; }
         .hricon-swimming-pool-access:before {
         content: "\F43C"; }
         .hricon-table-tennis:before {
         content: "\F43D"; }
         .hricon-tamil:before {
         content: "\F43E"; }
         .hricon-tax-id:before {
         content: "\F43F"; }
         .hricon-tax-receipt-available:before {
         content: "\F440"; }
         .hricon-taxi-service:before {
         content: "\F441"; }
         .hricon-telephone:before {
         content: "\F442"; }
         .hricon-television-plasma:before {
         content: "\F443"; }
         .hricon-tennis-courts:before {
         content: "\F444"; }
         .hricon-text-area:before {
         content: "\F445"; }
         .hricon-text-links:before {
         content: "\F446"; }
         .hricon-theme-park:before {
         content: "\F447"; }
         .hricon-thin-arrow-down:before {
         content: "\F448"; }
         .hricon-thin-arrow-left:before {
         content: "\F449"; }
         .hricon-thin-arrow-right:before {
         content: "\F44A"; }
         .hricon-thin-circle-arrow-left:before {
         content: "\F44B"; }
         .hricon-thin-sub-arrow:before {
         content: "\F44C"; }
         .hricon-thumb-down-line:before {
         content: "\F44D"; }
         .hricon-thumb-up-line:before {
         content: "\F44E"; }
         .hricon-thumb-up-solid-map:before {
         content: "\F44F"; }
         .hricon-thumb-up-solid:before {
         content: "\F450"; }
         .hricon-thumb-up:before {
         content: "\F451"; }
         .hricon-thunder-and-hail:before {
         content: "\F452"; }
         .hricon-thunderstorm:before {
         content: "\F453"; }
         .hricon-ticket-service:before {
         content: "\F454"; }
         .hricon-time-icon:before {
         content: "\F455"; }
         .hricon-time-to-airport:before {
         content: "\F456"; }
         .hricon-toiletries:before {
         content: "\F457"; }
         .hricon-tonight-only:before {
         content: "\F458"; }
         .hricon-tools:before {
         content: "\F459"; }
         .hricon-tooltip-details:before {
         content: "\F45A"; }
         .hricon-tooltip:before {
         content: "\F45B"; }
         .hricon-top-floor:before {
         content: "\F45C"; }
         .hricon-topic-calendar:before {
         content: "\F45D"; }
         .hricon-topic-filter:before {
         content: "\F45E"; }
         .hricon-topic-hotel-highlight:before {
         content: "\F45F"; }
         .hricon-topic-search:before {
         content: "\F460"; }
         .hricon-topic-user:before {
         content: "\F461"; }
         .hricon-tornado:before {
         content: "\F462"; }
         .hricon-total-savings:before {
         content: "\F463"; }
         .hricon-total-support:before {
         content: "\F464"; }
         .hricon-tours:before {
         content: "\F465"; }
         .hricon-towels:before {
         content: "\F466"; }
         .hricon-train-new-solid:before {
         content: "\F467"; }
         .hricon-train-new:before {
         content: "\F468"; }
         .hricon-train-station:before {
         content: "\F469"; }
         .hricon-tram-station:before {
         content: "\F46A"; }
         .hricon-transfer-both-ways:before {
         content: "\F46B"; }
         .hricon-transfer-one-ways:before {
         content: "\F46C"; }
         .hricon-transportation-hub:before {
         content: "\F46D"; }
         .hricon-transportation:before {
         content: "\F46E"; }
         .hricon-trash:before {
         content: "\F46F"; }
         .hricon-travelers:before {
         content: "\F470"; }
         .hricon-triangle-warning:before {
         content: "\F471"; }
         .hricon-tropical-storm:before {
         content: "\F472"; }
         .hricon-trouser-press:before {
         content: "\F473"; }
         .hricon-tv-area:before {
         content: "\F474"; }
         .hricon-tv-flat-screen:before {
         content: "\F475"; }
         .hricon-tv:before {
         content: "\F476"; }
         .hricon-twin-bed:before {
         content: "\F477"; }
         .hricon-umbrella:before {
         content: "\F478"; }
         .hricon-unionpay:before {
         content: "\F479"; }
         .hricon-upload-your-logo:before {
         content: "\F47A"; }
         .hricon-user-b:before {
         content: "\F47B"; }
         .hricon-user-font-icon:before {
         content: "\F47C"; }
         .hricon-user:before {
         content: "\F47D"; }
         .hricon-valet-parking:before {
         content: "\F47E"; }
         .hricon-vending-machine:before {
         content: "\F47F"; }
         .hricon-verified-checkmark:before {
         content: "\F480"; }
         .hricon-views:before {
         content: "\F481"; }
         .hricon-villa:before {
         content: "\F482"; }
         .hricon-visa:before {
         content: "\F483"; }
         .hricon-wake-up-service:before {
         content: "\F484"; }
         .hricon-walking:before {
         content: "\F485"; }
         .hricon-want-to-talk:before {
         content: "\F486"; }
         .hricon-washer:before {
         content: "\F487"; }
         .hricon-watch:before {
         content: "\F488"; }
         .hricon-water-park:before {
         content: "\F489"; }
         .hricon-water-sports-motorized:before {
         content: "\F48A"; }
         .hricon-water-sports-non-motorized:before {
         content: "\F48B"; }
         .hricon-watersports-equipment-rentals:before {
         content: "\F48C"; }
         .hricon-weekend-discount:before {
         content: "\F48D"; }
         .hricon-wheelchair-accessible:before {
         content: "\F48E"; }
         .hricon-wifi-additional-charge:before {
         content: "\F48F"; }
         .hricon-wifi-in-public-areas:before {
         content: "\F490"; }
         .hricon-wifi:before {
         content: "\F491"; }
         .hricon-wind-surfing:before {
         content: "\F492"; }
         .hricon-wintry-mix-snow-sleet:before {
         content: "\F493"; }
         .hricon-wired-internet:before {
         content: "\F494"; }
         .hricon-wooden-parqueted-flooring:before {
         content: "\F495"; }
         .hricon-world:before {
         content: "\F496"; }
         .hricon-x-icon:before {
         content: "\F497"; }
         .hricon-ycs-channels:before {
         content: "\F498"; }
         .hricon-ycs-dashboard:before {
         content: "\F499"; }
         .hricon-ycs-doc-csv:before {
         content: "\F49A"; }
         .hricon-ycs-doc-excel:before {
         content: "\F49B"; }
         .hricon-ycs-doc-pdf:before {
         content: "\F49C"; }
         .hricon-ycs-doc-update:before {
         content: "\F49D"; }
         .hricon-ycs-generic:before {
         content: "\F49E"; }
         .hricon-ycs-no-show:before {
         content: "\F49F"; }
         .hricon-year-hotel-built:before {
         content: "\F4A0"; }
         .hricon-year-hotel-last-renovated:before {
         content: "\F4A1"; }
         .hricon-yoga-room:before {
         content: "\F4A2"; }
         .flat-table {
         border: 1px solid #d6e2eb; }
         h6.list-header {
         margin-top: 0;
         margin-bottom: 0;
         padding: 10px 0;
         font-size: 16px !important; }
         .occupancies-event .row {
         margin-right: 5px; }
         .occupancies-event .icon-info {
         background: #fff;
         border-radius: 50%;
         width: 16px;
         height: 16px;
         display: inline-block;
         text-align: center;
         line-height: 16px;
         color: #ccc;
         border: 1px solid #ccc;
         font-size: 11px;
         margin-left: 5px; }
         .occupancies-event table td {
         vertical-align: top; }
         .occupancies-event table th {
         width: 50%; }
         .occupancies-event table .dayNames tr {
         font-size: var(--font-size-sm); }
         .occupancies-event .fluid {
         display: none; }
         .occupancies-event ul {
         padding: 0;
         list-style: none;
         margin-top: 20px; }
         .occupancies-event ul strong {
         margin-right: 10px; }
         table.calendar:hover .orange .day-content {
         color: #fd7e14; }
         table.calendar:hover .red .day-content {
         color: #dc3545; }
         table.calendar:hover .blue .day-content {
         color: #007bff; }
         table.calendar .grey .day-content {
         opacity: 0.5;
         color: #A09E9D; }
         table.calendar tbody tr th {
         width: 14%;
         line-height: 60px;
         padding: 0;
         vertical-align: middle;
         text-align: center;
         font-size: 16px;
         font-weight: 300; }
         table.calendar tbody tr td {
         height: 90px;
         border-color: #e8e8e8;
         vertical-align: top !important;
         text-align: center;
         border: 1px solid var(--border-color);
         max-width: 30px;
         cursor: pointer; }
         table.calendar tbody tr td.past-month, table.calendar tbody tr td.otherMonth {
         background-color: #f3f4f4;
         visibility: hidden;
         border: none; }
         table.calendar tbody tr .weekend {
         background-color: #f8f8f9; }
         table.calendar tbody tr .grey .day-number:after {
         display: none; }
         table.calendar tbody tr .day-number {
         font-size: var(--font-size-lg);
         color: #666;
         position: relative; }
         @media (max-width: 1199.98px) {
         table.calendar tbody tr .day-number {
         font-size: var(--font-size-md); } }
         @media (max-width: 991.98px) {
         table.calendar tbody tr .day-number {
         font-size: var(--font-size-sm); } }
         table.calendar tbody tr .day-number:after {
         content: ' ';
         width: 6px;
         height: 6px;
         margin-left: 5px;
         border-radius: 50%;
         display: inline-block;
         position: absolute;
         background-color: #28a745;
         top: 6px; }
         .occupancies-select-wrap {
         position: relative;
         display: inline-block;
         width: 200px; }
         .occupancies-select-wrap .occupancies-select-label:after {
         content: attr(data-after);
         left: 10px;
         top: 0;
         padding-right: 30px;
         position: absolute;
         padding-left: 10px;
         pointer-events: none;
         width: auto;
         height: 33px;
         line-height: 30px;
         z-index: 11;
         color: #333;
         vertical-align: middle;
         border: 1px solid #cccccc;
         border-radius: 6px;
         -webkit-border-radius: 2px;
         outline: none;
         box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
         transition: all 0.2s;
         font-size: 16px;
         background: #fff url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAALCAYAAABcUvyWAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RjhCOEZDMDMwMDgyMTFFNkIwMEFDQzkxNTk2Q0NBRjUiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RjhCOEZDMDQwMDgyMTFFNkIwMEFDQzkxNTk2Q0NBRjUiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpGOEI4RkMwMTAwODIxMUU2QjAwQUNDOTE1OTZDQ0FGNSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpGOEI4RkMwMjAwODIxMUU2QjAwQUNDOTE1OTZDQ0FGNSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhecWyIAAAB7SURBVHjaYrS2tmaAAm8ovRVEsEA5HEA8CYgZgXgvEP9ggkqUA7ESECtC2QyMQKNAnGtQXSDwA4i1mKBGwARhxk4G2eHLgAWAdGwB4v9oeAtIIhdqLgOSHXkgiftA3IkkAWLfY4R6kAPqMhDQAuliQdKeC/Ug2FiAAAMATYQZrau8kFkAAAAASUVORK5CYII=") no-repeat right 8px center; }
         .occupancies-select-wrap .occupancies-select-label:after :focus {
         border-color: #51a7e8;
         box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 5px rgba(81, 167, 232, 0.5); }
         .occupancies-month-name {
         z-index: 10;
         position: relative;
         border: 0;
         background: none;
         -webkit-appearance: none;
         -moz-appearance: none;
         appearance: none;
         height: 32px !important;
         margin-left: 10px;
         border: none !important;
         box-shadow: none !important; }
         .occupancies-month-name :focus {
         border: none;
         box-shadow: none; }
         .day-cell {
         position: relative; }
         .day-cell .day-content {
         width: 100%;
         position: absolute;
         bottom: 5px;
         left: 0;
         padding: 0px;
         transition: all .2s; }
         .day-cell .day-content .original_price {
         display: block;
         opacity: .5;
         font-size: var(--font-size-sm);
         text-decoration: line-through; }
         @media (max-width: 1199.98px) {
         .day-cell .day-content .original_price {
         font-size: var(--font-size-xs); } }
         .day-cell .day-content .current_price {
         display: block; }
         @media (max-width: 1199.98px) {
         .day-cell .day-content .current_price {
         font-size: var(--font-size-md); } }
         @media (max-width: 991.98px) {
         .day-cell .day-content .current_price {
         font-size: var(--font-size-xs); } }
         .day-cell.orange:after, .day-cell.red:after, .day-cell.blue:after, .day-cell.green:after {
         content: " ";
         position: absolute;
         bottom: -1px;
         left: -1px;
         width: 100%;
         height: 1px;
         background-color: gray;
         border: 1px solid #dc3545;
         box-sizing: content-box; }
         .day-cell.orange .day-number:after, .day-cell.red .day-number:after, .day-cell.blue .day-number:after, .day-cell.green .day-number:after {
         display: none; }
         .day-cell.green:after {
         background-color: #28a745;
         border-color: #28a745; }
         .day-cell.orange:after {
         background-color: #fd7e14;
         border-color: #fd7e14; }
         .day-cell.grey:after {
         background-color: #A09E9D;
         border-color: #A09E9D; }
         .day-cell.red:after {
         background-color: #dc3545;
         border-color: #dc3545; }
         .day-cell.blue:after {
         background-color: #007bff;
         border-color: #007bff; }
         .colors_meaning .color_mean {
         border-radius: 50%;
         width: 9px;
         height: 9px;
         margin-top: 3px; }
         .colors_meaning .color_mean:after {
         display: none; }
         .colors_meaning .color_mean.green {
         background-color: #28a745; }
         .colors_meaning .color_mean.orange {
         background-color: #fd7e14; }
         .colors_meaning .color_mean.grey {
         background-color: #A09E9D; }
         .colors_meaning .color_mean.red {
         background-color: #dc3545; }
         .colors_meaning .color_mean.blue {
         background-color: #007bff; }
         .popover-content {
         color: black; }
         .occupancies-event {
         border-left: 3px solid transparent;
         padding-left: 10px; }
         .occupancies-event:not(first-child) {
         margin-top: 20px; }
         .occupancies-event label {
         font-weight: 400; }
         .occupancies-event.green {
         border-color: #28a745; }
         .occupancies-event.orange {
         border-color: #fd7e14; }
         .occupancies-event.grey {
         border-color: #A09E9D; }
         .occupancies-event.red {
         border-color: #dc3545; }
         .occupancies-event.blue {
         border-color: #007bff; }
         body:not(:-moz-handler-blocked) .day-cell.orange:after, body:not(:-moz-handler-blocked) .day-cell.red:after, body:not(:-moz-handler-blocked) .day-cell.blue:after, body:not(:-moz-handler-blocked) .day-cell.green:after {
         bottom: 0 !important; }
         body:not(:-moz-handler-blocked) #calendar {
         overflow: hidden; }
         .calendar .dealIcon {
         position: absolute;
         right: 0px;
         top: 0px;
         color: var(--primary); }
         .calendar .in-range {
         background-color: var(--gray300); }
         .calendar .check_in {
         transition: background-color 0.5s ease;
         background-color: var(--primary);
         color: var(--clearTextColor); }
         @media screen and (prefers-reduced-motion: reduce) {
         .calendar .check_in {
         transition: none; } }
         .calendar .check_in .day-number, .calendar .check_in .dealIcon {
         color: var(--clearTextColor) !important; }
         .calendar .check_in:before {
         font-family: icons;
         position: absolute;
         bottom: 2px;
         left: 6px; }
         .calendar .check_out {
         transition: background-color 0.5s ease;
         background-color: var(--secondary);
         color: var(--clearTextColor); }
         @media screen and (prefers-reduced-motion: reduce) {
         .calendar .check_out {
         transition: none; } }
         .calendar .check_out .day-number, .calendar .check_out .dealIcon {
         color: var(--clearTextColor) !important; }
         .calendar .check_out:before {
         font-family: icons;
         position: absolute;
         bottom: 2px;
         right: 6px; }
         .prevMonth {
         position: absolute;
         left: 10px; }
         .nextMonth {
         position: absolute;
         right: 10px; }
         td.disabled {
         opacity: 0.5;
         background: linear-gradient(to bottom right, var(--gray300), var(--gray300) 49%, #a7a7a7 51%, var(--gray300) 52%, var(--gray300)); }
         td.disabled .day-content {
         display: none; }
         td.disabled .dealIcon {
         display: none; }
         td.loading .dealIcon {
         display: none; }
         .dateSelectionSummary {
         font-size: var(--font-size-xl);
         margin: 10px 0px 20px 0px; }
         .paymentForms .tab-container {
         display: block;
         position: relative; }
         .paymentForms .tab-container .nav-tabs {
         max-width: calc(100% - 90px); }
         .paymentForms .tab-container .moreMethods {
         position: absolute;
         right: 0px;
         top: 7px;
         width: 85px;
         text-align: right; }
         .paymentForms .tab-content {
         min-height: 300px; }
         .paymentForms .dropdown-menu a {
         display: block;
         width: 100%;
         padding: .25rem 1.5rem;
         clear: both;
         font-weight: 400;
         color: #212529;
         text-align: inherit;
         white-space: nowrap;
         background-color: transparent;
         border: 0; }
         .paymentForms .btn-tab {
         font-size: var(--font-size-sm); }
         @media (max-width: 1199.98px) {
         .paymentForms .cardInputs {
         max-width: 377px;
         margin: 0 auto;
         margin-bottom: 30px; } }
         .paymentForms .cardBrandNames {
         margin-top: 10px; }
         @media (max-width: 1199.98px) {
         .paymentForms .cardBrandNames {
         text-align: center;
         margin-top: 30px; } }
         .paymentForms .jp-card .jp-card-front .jp-card-lower .jp-card-name {
         text-transform: none !important; }
         @media (max-width: 575.98px) {
         .paymentForms .jp-card {
         -webkit-transform: scale(0.85);
         transform: scale(0.85);
         margin-left: -20px; } }
         .paymentForms .bankAccountContainer {
         margin-bottom: 15px; }
         .paymentForms .bankAccountContainer .bankAccountHeader {
         padding: 5px;
         text-align: center;
         background: var(--tabBackgroundColor); }
         .paymentForms .bankAccountContainer .bankAccountContent {
         border: 2px dashed var(--tabBackgroundColor);
         padding: 15px;
         border-top: none; }
         .child-ages {
         font-size: 0.75rem !important; }
         .intl-tel-input {
         width: 100%; }
         .circle-loader {
         border: 1px solid rgba(0, 0, 0, 0.2);
         border-left-color: #5cb85c;
         -webkit-animation: loader-spin 1.2s infinite linear;
         animation: loader-spin 1.2s infinite linear;
         position: relative;
         display: inline-block;
         vertical-align: top;
         border-radius: 50%;
         width: 3em;
         height: 3em;
         margin-right: 15px;
         min-width: 3em; }
         .load-complete {
         -webkit-animation: none;
         animation: none;
         border-color: #5cb85c;
         transition: border 500ms ease-out; }
         .load-complete .checkmark {
         display: block !important; }
         .checkmark {
         display: none; }
         .checkmark.draw:after {
         -webkit-animation-duration: 800ms;
         animation-duration: 800ms;
         -webkit-animation-timing-function: ease;
         animation-timing-function: ease;
         -webkit-animation-name: checkmark;
         animation-name: checkmark;
         -webkit-transform: scaleX(-1) rotate(135deg);
         transform: scaleX(-1) rotate(135deg); }
         .checkmark:after {
         opacity: 1;
         height: 1.5em;
         width: 0.75em;
         -webkit-transform-origin: left top;
         transform-origin: left top;
         border-right: 3px solid #5cb85c;
         border-top: 3px solid #5cb85c;
         content: '';
         left: 0.7em;
         top: 1.5em;
         position: absolute; }
         @-webkit-keyframes loader-spin {
         0% {
         -webkit-transform: rotate(0deg);
         transform: rotate(0deg); }
         100% {
         -webkit-transform: rotate(360deg);
         transform: rotate(360deg); } }
         @keyframes loader-spin {
         0% {
         -webkit-transform: rotate(0deg);
         transform: rotate(0deg); }
         100% {
         -webkit-transform: rotate(360deg);
         transform: rotate(360deg); } }
         @-webkit-keyframes checkmark {
         0% {
         height: 0;
         width: 0;
         opacity: 1; }
         20% {
         height: 0;
         width: 0.75em;
         opacity: 1; }
         40% {
         height: 1.5em;
         width: 0.75em;
         opacity: 1; }
         100% {
         height: 1.5em;
         width: 0.75em;
         opacity: 1; } }
         @keyframes checkmark {
         0% {
         height: 0;
         width: 0;
         opacity: 1; }
         20% {
         height: 0;
         width: 0.75em;
         opacity: 1; }
         40% {
         height: 1.5em;
         width: 0.75em;
         opacity: 1; }
         100% {
         height: 1.5em;
         width: 0.75em;
         opacity: 1; } }
         .loadingOverlay {
         height: 100vh;
         width: 100%;
         display: block;
         top: 0px;
         position: fixed;
         z-index: 9999;
         background: rgba(0, 0, 0, 0.458824); }
         @media (max-width: 575.98px) {
         html {
         font-size: 12px; } }
         @media (min-width: 576px) and (max-width: 767.98px) {
         html {
         font-size: 14px; } }
         body {
         background-color: var(--bgColor) !important;
         color: var(--bodyColor);
         font-family: var(--font-family-base);
         background-image: var(--bodyBackground);
         background-repeat: var(--bodyBackgroundRepeat);
         background-size: var(--bodyBackgroundSize);
         min-width: 420px;
         min-height: 100vh;
         position: relative; }
         @media (max-width: 1199.98px) {
         body {
         font-size: 14px; } }
         .summaryView .thanksMessage {
         display: flex;
         align-items: center;
         justify-content: center; }
         .summaryView .summaryRoom {
         margin: auto;
         margin-top: 30px;
         position: relative;
         border: 1px solid var(--border-color); }
         .summaryView .summaryRoom .roomHeader {
         background: var(--tabBackgroundColor);
         padding: 5px;
         padding-left: 15px;
         padding-right: 15px; }
         .summaryView .summaryRoom .roomContent {
         padding: 15px;
         position: relative;
         margin: auto; }
         .summaryView .summaryRoom .roomPrices {
         align-self: center;
         padding: 0px;
         padding-right: 0px;
         padding-left: 35px; }
         @media (max-width: 767.98px) {
         .summaryView .summaryRoom .roomPrices {
         padding: 0px;
         margin-top: 15px; } }
         .summaryView .summaryRoom .roomDates {
         align-self: center; }
         .summaryView .summaryRoom .roomDates .check-in:after, .summaryView .summaryRoom .roomDates .check-out:after {
         content: " ";
         width: 2px;
         background: #e9ecef;
         position: absolute;
         right: 0px;
         height: 100%;
         top: 0px; }
         .summaryView .summaryRoom .roomDates .guestCount:after {
         content: " ";
         width: 2px;
         background: #e9ecef;
         position: absolute;
         right: 0px;
         height: 100%;
         top: 0px; }
         @media (max-width: 767.98px) {
         .summaryView .summaryRoom .roomDates .guestCount:after {
         width: 0px; } }
         .summaryView .summaryRoom .roomDates p {
         margin: 0px; }
         .summaryView .summaryRoom .roomDates p.firstLabel {
         font-size: var(--font-size-xs); }
         .summaryView .summaryRoom .roomDates p.dateNumber {
         font-size: var(--font-size-xxl);
         font-weight: 400;
         line-height: var(--font-size-xxl);
         color: var(--primary); }
         @media (max-width: 991.98px) {
         .summaryView .summaryRoom .roomDates p.dateNumber {
         font-size: var(--font-size-xl);
         font-weight: 600;
         line-height: var(--font-size-xl); } }
         .summaryView .summaryRoom .roomDates p.dateMonth {
         font-size: var(--font-size-sm);
         font-weight: 600; }
         .summaryView .summaryRoom .roomDates p.dateDay {
         font-size: var(--font-size-sm); }
         .summaryView .summaryRoom .roomDates p.dateTime {
         font-size: var(--font-size-sm); }
         @media (max-width: 991.98px) {
         .summaryView .summaryRoom .roomDates p.dateTime {
         font-size: var(--font-size-xs); } }
         .summaryView .summaryRoomLeft img {
         width: 10em; }
         @media (max-width: 991.98px) {
         .summaryView .summaryRoomLeft img {
         width: 6em; } }
         @media (max-width: 767.98px) {
         .summaryView .summaryRoomLeft img {
         width: 5em; } }
         .summaryView .summaryRoomContent {
         display: inline-block;
         padding: 0px; }
         @media (min-width: 992px) and (max-width: 1199.98px) {
         .summaryView .summaryRoomContent {
         padding-left: 30px; } }
         @media (min-width: 768px) and (max-width: 991.98px) {
         .summaryView .summaryRoomContent {
         padding-left: 30px; } }
         @media (max-width: 767.98px) {
         .summaryView .summaryRoomContent {
         margin-top: 15px; } }
         .summaryView .hasSmall small {
         float: right; }
         @media (max-width: 767.98px) {
         .summaryView .hasSmall small {
         float: left;
         margin-top: 10px;
         display: block;
         width: 100%; } }
         .summaryView .printText {
         font-size: var(--font-size-sm); }
         .summaryView .summaryDetails {
         border: 1px solid var(--tableBorderColor);
         padding: 1rem;
         margin-top: 1rem; }
         .summaryView .summaryTotals {
         background-color: var(--cardContrastBgColor);
         padding-top: 15px; }
         @media (max-width: 991.98px) {
         .summaryView .summaryTotals {
         margin-top: 15px; } }
         .summaryView .summaryTotals .row {
         margin-bottom: 10px; }
         .summaryView .totalRow {
         font-size: var(--font-size-xl); }
         .summaryView .badges span {
         margin-right: 10px; }
         .summaryView .policies p {
         font-size: var(--font-size-sm);
         margin-bottom: 0.4rem; }
         .summaryView .roomAmenities {
         float: right;
         font-size: var(--font-size-xs); }
         .summaryView .roomPolicy {
         font-size: var(--font-size-xs); }
         .summaryView .childAgesPrompt {
         font-size: var(--font-size-xs);
         display: block; }
         @media print {
         @page {
         margin: 0; }
         body {
         margin: 1.6cm;
         min-height: 0px; }
         body {
         background: none !important;
         background-color: white !important; }
         .container {
         max-width: 100% !important; }
         .mainContainer {
         padding: 0px !important; }
         .contentContainerCard {
         margin: 0px !important;
         box-shadow: none; } }
         @media (min-width: 1200px) {
         .container {
         max-width: 1270px; } }
         @media (max-width: 767.98px) {
         .container {
         max-width: 100%; } }
         @media (max-width: 991.98px) {
         body {
         margin-bottom: 50px; }
         .sticky-bottom {
         position: fixed;
         bottom: 0px;
         z-index: 3;
         height: 50px; } }
         div.cart {
         min-height: 200px; }
         .contentContainerCard, .cartContainerInner {
         background: var(--cardsBackgroundColor) ; 
      }
         button, .btn {
         border-radius: 0px !important; }
         .navbar {
         background: var(--navbarBackground) !important;
         color: var(--clearTextColor); }
         @media (max-width: 575.98px) {
         .sticky-top-margin {
         top: 141px; } }
         @media (min-width: 576px) and (max-width: 767.98px) {
         .sticky-top-margin {
         top: 109px; } }
         @media (min-width: 768px) and (max-width: 991.98px) {
         .sticky-top-margin {
         top: 122px; } }
         @media (min-width: 992px) {
         .sticky-top-margin {
         top: 64px; } }
         .subNavbar {
         background: var(--clearTextColor);
         box-shadow: var(--boxShadow);
         border-top: none !important; }
         .clearTextColor {
         background: var(--clearTextColor); }
         .cartContainer {
         order: 1;
         font-size: var(--font-size-sm);
         z-index: 2; }
         .cartContainer .cartContainerInner {
         background: #d0cec5;
         box-shadow: var(--boxShadow);
         color: var(--cardTextColor);
         margin-bottom: 1rem; }
         @media (max-width: 991.98px) {
         .cartContainer .cartContainerInner {
         margin-bottom: 15px; } }
         .cartContainer .cartContainerInner .price {
         font-weight: 500; }
         .cartContainer .cartContainerInner.widget {
         text-align: center; }
         .cartContainer .cartContainerInner img {
         max-width: 300px; }
         .cartContainer .cartContainerInner .summaryRoomItem {
         background: var(--cardContrastBgColor);
         color: var(--contrastTextColor);
         margin: 15px;
         padding: 10px;
         position: relative; }
         .cartContainer .cartContainerInner .summaryRoomItem .mealPlan {
         font-size: var(--font-size-xs);
         padding-top: 4px; }
         .cartContainer .cartContainerInner .summaryRoomItem .price {
         padding-left: 0px;
         overflow: hidden; }
         .cartContainer .cartContainerInner .summaryRoomItem:before {
         content: " ";
         position: absolute;
         width: 5px;
         top: 0px;
         left: 0px;
         background-color: var(--roomSelectionBorderColor, var(--primary));
         height: 100%; }
         .cartContainer .cartContainerInner .summaryRoomItem small {
         font-size: var(--font-size-xs); }
         .cartContainer .cartContainerInner .summaryTotals {
         background: var(--cardContrastBgColor);
         color: var(--contrastTextColor);
         padding: 15px;
         position: relative;
         margin-top: 40px; }
         .cartContainer .cartContainerInner .summaryTotals .row {
         margin-bottom: 10px; }
         .mainContainer {
         min-height: 90vh;
         background: var(--mainOverlayBackground);
         padding: 15px; }
         .calloutIconList {
         margin: 0 auto;
         padding-left: 0px !important; }
         .calloutIconList li {
         font-size: var(--font-size-xl);
         color: var(--cardTextColor);
         display: inline-block;
         float: left;
         margin: 0px 50px; }
         @media (max-width: 575.98px) {
         .calloutIconList li {
         margin: 0px 5px; } }
         @media (min-width: 576px) and (max-width: 767.98px) {
         .calloutIconList li {
         margin: 0px 10px; } }
         @media (min-width: 768px) and (max-width: 991.98px) {
         .calloutIconList li {
         margin: 0px 20px; } }
         .calloutIconList li:nth-child(-n+9) {
         display: inline-block; }
         .calloutIconList li {
         display: none; }
         .moreDetailsAmenityList {
         margin: 0 auto;
         padding-left: 0px !important; }
         .moreDetailsAmenityList li {
         color: var(--bodyColor);
         display: inline-block;
         float: left;
         width: 20%;
         height: 80px;
         overflow: hidden;
         text-align: center;
         font-size: var(--font-size-sm); }
         .moreDetailsAmenityList li i {
         font-size: 36px; }
         .priceColor {
         color: var(--priceColor); }
         .contentContainer .price {
         position: absolute;
         right: 30px;
         bottom: 35px;
         font-size: 20px;
         font-weight: 500;
         color: #ad9260; }
         .contentContainer .price.notAvailable {
         bottom: 0px; left: 15px; }
         .contentContainer .price span {
         font-size: 18px;
         position: absolute;
         top: -25px;
         color: var(--cardTextColor) !important;
         font-weight: 400;
         right: 0px;
         width: 200px;
         text-align: right; }
         .contentContainer .contentContainerCard {
         color: var(--cardTextColor);
         position: relative;
         box-shadow: var(--boxShadow); }
         .contentContainer .contentContainerCard .cardMainDetails {
         cursor: pointer; }
         .contentContainer .contentContainerCard:not(.fullCover) {
         margin-bottom: 25px; }
         .contentContainer .contentContainerCard .imgContainer {
         max-width: 240px;
         padding: 0px;
         background-color: var(--cardContrastBgColor);
         display: flex; }
         .contentContainer .contentContainerCard .imgContainer img {
         width: 100%;
         align-self: center;
         max-width: 240px;
         max-height: 240px;
         min-height: 220px;
         padding:10px; }
         .contentContainer .contentContainerCard .imgContainerGroup {
         max-width: 300px;
         padding: 0px;
         background-color: var(--cardContrastBgColor);
         display: flex; }
         .contentContainer .contentContainerCard .imgContainerGroup img {
         width: 100%;
         align-self: center;
         max-width: 300px;
         max-height: 200px;
         min-height: 200px; }
         @media (max-width: 575.98px) {
         .contentContainer .contentContainerCard .imgContainerGroup {
         max-width: 240px;
         padding: 0px;
         background-color: var(--cardContrastBgColor);
         display: flex; }
         .contentContainer .contentContainerCard .imgContainerGroup img {
         width: 100%;
         align-self: center;
         max-width: 240px;
         max-height: 240px;
         min-height: 240px; } }
         .contentContainer .contentContainerCard .cartDetailsContainer {
         border-right: 1px dashed var(--border-color);
         position: relative; }
         @media (max-width: 575.98px) {
         .contentContainer .contentContainerCard .cartDetailsContainer {
         border-right: 0px; padding: 10px 0; } }
         .contentContainer .contentContainerCard .cartDetailsContainer .bottomArea {
         position: absolute;
         bottom: 0px;
         padding: 5px;
         height: auto;
         max-height: 70px;
         width: 100%;
         margin-bottom: 10px; }
         @media (max-width: 991.98px) {
         .contentContainer .contentContainerCard .cartDetailsContainer .bottomArea {
         width: 60%; } }
         @media (max-width: 1199.98px) {
         .contentContainer .contentContainerCard .cartDetailsContainer .bottomArea {
         bottom: -5px; }
         .contentContainer .contentContainerCard .cartDetailsContainer .bottomArea .iconList li {
         display: none !important; }
         .contentContainer .contentContainerCard .cartDetailsContainer .bottomArea .iconList li:nth-child(-n+5) {
         display: block !important; } }
         .contentContainer .contentContainerCard .cartDetailsContainer .bottomArea .iconList {
         color: var(--cardTextColor);
         display: inline;
         padding-left: 0px; }
         .contentContainer .contentContainerCard .cartDetailsContainer .bottomArea .iconList li {
         display: inline-block;
         float: left;
         margin: 0px 10px 0px 0px; }
         @media (max-width: 1199.98px) {
         .contentContainer .contentContainerCard .cartDetailsContainer .bottomArea .iconList {
         margin-bottom: 0.2rem; } }
         .contentContainer.contentContainer {
         order: 2; }
         @media (max-width: 991.98px) {
         .contentContainer.contentContainer {
         order: -1 !important; } }
         .contentContainer.contentContainer .contentContainerCard:not(.fullCover), .contentContainer.contentContainer .stepProgressBarContainer {
         margin-left: 25px;
         border-radius:15px; }
         .contentContainer.cartContainer {
         order: -1; }
         .contentContainer.cartContainer .contentContainerCard:not(.fullCover), .contentContainer.cartContainer .stepProgressBarContainer {
         margin-right: 25px; }
         @media (max-width: 991.98px) {
         .contentContainer .contentContainerCard {
         margin-right: 0px !important;
         margin-left: 0px !important;
         margin-bottom: 15px; } }
         .searchSummary {
         font-size: var(--font-size-sm); }
         .cardDetailsTitle {
         font-size: 24px;
         font-weight: 500;
         margin-left: 20px;
         padding: 0 20px;
         color: #ad9260;
         margin-bottom: 10px;
         max-height: 50px;
         overflow: hidden; }
         .cardDetailsTitle.deals {
         height: 50px; }
         .cardTitle {
         margin-bottom: 15px;
         border-bottom: 1px solid var(--tableBorderColor);
         padding-bottom: 15px;
         overflow: hidden; }
         .cardDetailsDescription {
         font-size: 16px;
         color: #000;
         max-height: 120px;
         overflow: hidden;
         position: relative;
         margin-bottom: 180px;
         margin-left: 20px;
         padding: 20px
       }
         @media (max-width: 1199.98px) {
         .cardDetailsDescription {
         font-size: var(--font-size-xs);
         max-height: 50px;
         margin-bottom: 35px; } }
         .cardDescMoreDetails {
         font-size: var(--font-size-sm);
         margin-top: -20px;
         opacity: 0;
         float: right;
         color: var(--cardTextColor);
         margin-bottom: 0px; }
         @media (max-width: 1199.98px) {
         .cardDescMoreDetails {
         font-size: var(--font-size-xs);
         margin-top: -30px; } }
         .cardDescMoreDetails a, .cardDescMoreDetails a:hover, .cardDescMoreDetails a:visited, .cardDescMoreDetails a:active, .cardDescMoreDetails a:focus {
         text-decoration: none; }
         .cardDescMoreDetails a {
         color: var(--cardTextColor); }
         .long .cardDetailsDescription:before {
         content: '';
         width: 100%;
         height: 100%;
         position: absolute;
         left: 0;
         top: 0;
         background: linear-gradient(rgba(255, 255, 255, 0) 46.22%, var(--cardsBackgroundColor)); }
         .long .cardDescMoreDetails {
         opacity: 1; }
         .badgeContainer {
         position: absolute;
         top: 0px;
         right: 17px; }
         .badgeLastRooms {
         border-radius: 0px;
         background-color: var(--lastRoomBadgeColor);
         color: var(--clearTextColor);
         margin-right: -20px;
         max-height: 18px;
         float: right;
         margin-top: 2px;
         clear: both; }
         .badgeNotAvailable {
         border-radius: 0px;
         background-color: var(--lastRoomBadgeColor);
         color: var(--clearTextColor);
         margin-right: -20px;
         max-height: 18px;
         float: right;
         margin-top: 2px;
         clear: both; }
         .badgeSpecialOffer {
         border-radius: 0px;
         background-color: var(--priceColor);
         color: var(--clearTextColor);
         margin-right: -20px;
         max-height: 18px;
         float: right;
         margin-top: 2px;
         clear: both; }
         .roomTourRibbon {
         border-radius: 0px;
         background-color: rgba(47, 47, 47, 0.5);
         color: var(--clearTextColor);
         margin-right: -20px;
         max-height: 18px;
         float: right;
         margin-top: 2px;
         clear: both; }
         @media (min-width: 1200px) {
         .badgeRightGroup {
         right: -12px !important; } }
         .seperator {
         margin: 5px auto;
         width: 90%;
         border-bottom: 1px dashed var(--gray400); }
         .cardDetailsPricing {
         padding-right: 5px; }
         @media (max-width: 575.98px) {
            .contentContainer{
               
    margin: 0 auto;
    width: 80%;
            }
         .cardDetailsPricing {
         position: relative;
         border: 1px solid #dee2e6; }
         .cardDetailsPricing.placeholderBoxContainer {
         height: 180px; } }
         .accommodationOptionsPrompt {
         background-color: var(--cardContrastBgColor);
         color: var(--contrastTextColor);
         padding: 0.5rem;
         font-weight: 500; }
         .accommodationOptionContainer {
         border-left: 1px solid var(--border-color);
         color: var(--cardTextColor);
         cursor: pointer; }
         .accommodationOptionContainer:hover {
         background-color: var(--cardContrastBgColor);
         color: var(--contrastTextColor); }
         .accommodationOptionContainer:first-child {
         border-left: 0px; }
         .accommodationOptionContainer .estimatedPrice {
         font-weight: 600; }
         .accommodationOptionContainer .dateRangeOffering {
         font-size: var(--font-size-sm); }
         @media (max-width: 767.98px) {
         .accommodationOptionContainer .dateRangeOffering {
         width: 100%;
         font-size: var(--font-size-xs);
         display: block;
         text-align: center; } }
         @media (max-width: 767.98px) {
         .accommodationOptionContainer .dateRangeOffering.to {
         -webkit-transform: rotate(90deg);
         transform: rotate(90deg); } }
         @media (max-width: 767.98px) {
         .rateDetailsContainer .priceTableContainer {
         padding-left: 0px !important;
         padding-right: 0px !important; } }
         .rateDetails {
         margin: 15px;
         padding: 0.5rem;
         background-color: var(--cardContrastBgColor);
         color: var(--contrastTextColor); }
         .rateDetails .policyLink {
         font-size: var(--font-size-sm);
         cursor: pointer; }
         .rateDetails .rateTitle {
         font-weight: 600;
         font-size: var(--font-size-base); }
         .rateDetails th {
         font-size: var(--font-size-sm);
         text-align: center;
         font-weight: 500; }
         .selectRoomCount {
         margin-top: var(--font-size-sm); }
         td.actionArea {
         text-align: center;
         vertical-align: middle; }
         td.ratePrice {
         position: relative;
         text-align: center;
         vertical-align: middle;
         width: 30%; }
         td.ratePrice .originalPrice {
         font-size: var(--font-size-md);
         text-decoration: line-through; }
         td.ratePrice .showPrice {
         display: block;
         width: 100%;
         font-size: var(--font-size-lg);
         text-align: center;
         color: var(--priceColor);
         font-weight: 500; }
         td.ratePrice .rateType {
         display: block;
         width: 100%;
         font-size: var(--font-size-xs);
         white-space: nowrap; }
         .placeholderAmenitiesDiv {
         position: absolute;
         bottom: 0px;
         right: 5px;
         left: 15px;
         height: 40px;
         width: 100%; }
         .placeholderBoxCard .cardMainDetails {
         cursor: not-allowed !important; }
         .placeholderBox {
         background-color: var(--gray300);
         position: relative;
         overflow: hidden;
         cursor: wait; }
         .placeholderBox::after {
         content: " ";
         display: block;
         background: var(--gray400);
         position: absolute;
         top: 0;
         bottom: 0;
         width: 100%;
         height: 100%;
         -webkit-transform: translateX(0);
         transform: translateX(0);
         -webkit-animation: 1.5s ib ease-in-out infinite;
         animation: 1.5s ib ease-in-out infinite; }
         .placeholderBox.placeholderRoomImage {
         min-height: 180px; }
         .placeholderBox.placeholderRoomImage:after {
         -webkit-animation: 1.5s hb ease-in-out infinite;
         animation: 1.5s hb ease-in-out infinite; }
         .placeholderBox.placeholderRecommendationLoader {
         min-height: 75px; }
         .placeholderBox.placeholderRecommendationLoader:after {
         -webkit-animation: 1.5s hb ease-in-out infinite;
         animation: 1.5s hb ease-in-out infinite; }
         .placeholderBox.placeholderRoomTitle {
         width: 40%;
         height: 20px; }
         .placeholderBox.placeholderRoomDesc {
         width: 75%;
         height: 20px; }
         .placeholderBox.placeholderRoomDesc:after {
         -webkit-animation: 1.5s hb ease-in-out infinite;
         animation: 1.5s hb ease-in-out infinite; }
         .placeholderBox.placeholderBadge {
         width: 50%;
         height: 20px;
         position: absolute;
         right: 5px;
         top: 5px; }
         .placeholderBox.placeholderButton {
         width: 60%;
         height: 40px; }
         .placeholderBox.placeholderMiniBox {
         width: 20%;
         height: 20px;
         display: inline-block;
         margin-right: 5px; }
         .placeholderBox.placeholderLine {
         width: 30%;
         height: 10px;
         margin-bottom: 15px; }
         .placeholderBox.placeholderLine.priceInfo {
         position: absolute;
         bottom: 45px;
         right: 5px; }
         .placeholderBox.placeholderLine.recommendationPriceInfo {
         position: absolute;
         bottom: 45px; }
         .text-xs {
         font-size: var(--font-size-xs); }
         .text-sm {
         font-size: var(--font-size-sm); }
         .text-md {
         font-size: var(--font-size-md); }
         td.guestIcons {
         text-align: center;
         vertical-align: middle;
         max-width: 33%; }
         div.searchFormContainer {
         width: 100%;
         max-width: 1024px; }
         @media (max-width: 991.98px) {
         div.searchFormContainer .btn.search {
         width: 50%; } }
         @media (max-width: 575.98px) {
         div.searchFormContainer .btn.search {
         width: 100%; } }
         @media (max-width: 991.98px) {
         div.searchFormContainer .searchInputs {
         width: 50%; } }
         @media (max-width: 575.98px) {
         div.searchFormContainer .searchInputs {
         width: 100%; } }
         div.searchFormContainerGroup {
         width: 100%; }
         @media (max-width: 991.98px) {
         div.searchFormContainerGroup .btn.search {
         width: 50%; } }
         @media (max-width: 575.98px) {
         div.searchFormContainerGroup .btn.search {
         width: 100%; } }
         @media (max-width: 991.98px) {
         div.searchFormContainerGroup .searchInputs {
         width: 50%; } }
         @media (max-width: 575.98px) {
         div.searchFormContainerGroup .searchInputs {
         width: 100%; } }
         .tabsContainer {
         padding: 0px;
         padding-right: 10px;
         margin-bottom: 35px;
         margin-left: 10px;
         width: 100%;
         min-height: 40px;
         order: -2; }
         @media (max-width: 991.98px) {
         .tabsContainer {
         margin-left: 0px;
         padding-right: 0px; } }
         .tabsContainer ul li:first-child:before {
         content: " ";
         position: absolute;
         left: -10px;
         width: 10px;
         border-bottom: 1px solid var(--border-color);
         height: 100%; }
         @media (max-width: 767.98px) {
         .tabsContainer ul li:first-child:before {
         top: -5px;
         left: -5px;
         width: 5px; } }
         .tabsContainer ul li:not(.active):hover {
         -webkit-filter: brightness(90%);
         filter: brightness(90%); }
         .tabsContainer ul li a {
         padding: 15px 60px;
         color: var(--contrastTextColor); }
         @media (max-width: 991.98px) {
         .tabsContainer ul li a {
         padding: 13px 35px;
         font-size: var(--font-size-xs); } }
         @media (max-width: 575.98px) {
         .tabsContainer ul li a {
         padding: 8px 10px;
         font-size: var(--font-size-xs); } }
         .tabsContainer ul li a.active {
         border-top: 5px solid var(--primary) !important; }
         .tabsContainerGroup {
         padding: 0px;
         padding-right: 10px;
         margin-bottom: 35px;
         width: 100%;
         min-height: 40px;
         order: -2; }
         @media (max-width: 991.98px) {
         .tabsContainerGroup {
         margin-left: 0px;
         padding-right: 0px; } }
         .tabsContainerGroup ul li:first-child:before {
         content: " ";
         position: absolute;
         left: -10px;
         width: 10px;
         height: 100%; }
         @media (max-width: 767.98px) {
         .tabsContainerGroup ul li:first-child:before {
         top: -5px;
         left: -5px;
         width: 5px; } }
         .tabsContainerGroup ul li:not(.active):hover {
         -webkit-filter: brightness(90%);
         filter: brightness(90%); }
         .tabsContainerGroup ul li a {
         color: var(--contrastTextColor); }
         @media (max-width: 991.98px) {
         .tabsContainerGroup ul li a {
         padding: 13px 35px;
         font-size: var(--font-size-xs); } }
         @media (max-width: 575.98px) {
         .tabsContainerGroup ul li a {
         padding: 8px 10px;
         font-size: var(--font-size-xs); } }
         .tabsContainerGroup ul li a.active {
         background-color: var(--primary);
         color: white !important; }
         .currencyLanguageSelector {
         position: absolute;
         background-color: var(--bgColor);
         right: 5px;
         top: 27px; }
         @media (max-width: 991.98px) {
         .currencyLanguageSelector {
         top: 18px; } }
         @media (max-width: 767.98px) {
         .currencyLanguageSelector {
         top: 50px; } }
         @media (max-width: 575.98px) {
         .currencyLanguageSelector {
         top: 42px; } }
         .currencyLanguageSelector .btn.no-bg, .currencyLanguageSelector .btn.no-bg:active, .currencyLanguageSelector .btn.no-bg:hover, .currencyLanguageSelector .btn.no-bg:visited {
         background: none;
         border: none;
         color: var(--bodyColor);
         font-size: var(--font-size-xs); }
         .currencyLanguageSelector .dropdown-menu {
         z-index: 999999;
         box-shadow: 0 0.5rem 1rem #dadada;
         border-radius: 0rem !important;
         padding: 15px;
         min-width: 225px; }
         .groupSortSelector {
         position: absolute;
         background-color: var(--bgColor);
         left: 0px;
         top: 27px; }
         @media (max-width: 991.98px) {
         .groupSortSelector {
         top: 18px; } }
         @media (max-width: 767.98px) {
         .groupSortSelector {
         top: 50px; } }
         @media (max-width: 575.98px) {
         .groupSortSelector {
         top: 42px; } }
         .groupSortSelector .btn.no-bg, .groupSortSelector .btn.no-bg:active, .groupSortSelector .btn.no-bg:hover, .groupSortSelector .btn.no-bg:visited {
         background: none;
         border: none;
         color: var(--bodyColor);
         font-size: var(--font-size-xs); }
         .groupSortSelector .dropdown-menu {
         z-index: 999999;
         box-shadow: 0 0.5rem 1rem #dadada;
         border-radius: 0rem !important;
         padding: 15px;
         min-width: 225px; }
         .paymentPage .tabsContainer {
         min-height: 10px; }
         .paymentPage .currencyLanguageSelector {
         top: 10px; }
         .extrasRoomItem {
         position: relative;
         margin-top: 20px;
         margin-left: 15px;
         margin-right: 15px;
         padding: 15px;
         background: var(--cardContrastBgColor);
         color: var(--contrastTextColor); }
         .extrasRoomItem:before {
         content: " ";
         position: absolute;
         width: 5px;
         top: 0px;
         left: 0px;
         background-color: var(--roomSelectionBorderColor, var(--primary));
         height: 100%; }
         .extrasRoomItem:last-child {
         margin-bottom: 20px; }
         .extraMoreInfoContainer {
         background-color: var(--white);
         margin-top: 15px; }
         .extraMoreInfoContainer .moreInfoPrompt {
         background-color: var(--tabBackgroundColor);
         color: var(--tabTextcolor);
         padding: 0.5rem;
         font-weight: 500; }
         .extraMoreInfoContainer .moreInfoContentContainer {
         padding: 15px; }
         .extraMoreInfoContainer .willInformLater {
         position: relative; }
         .extraMoreInfoContainer .willInformLater .form-check {
         margin: 0 auto; }
         .extraMoreInfoContainer .willInformLater:after {
         content: " ";
         position: absolute;
         width: 1px;
         height: 100%;
         right: 7px;
         border: 1px dashed var(--tableBorderColor); }
         .stepProgressBarContainer {
         margin-bottom: 1rem; }
         .stepProgressBarContainer ul.stepProgressBar {
         overflow: hidden;
         padding: 0px;
         margin-bottom: 0px; }
         .stepProgressBarContainer ul.stepProgressBar li {
         list-style-type: none;
         float: left;
         width: 33.33%;
         position: relative;
         text-align: center;
         font-weight: 700; }
         .stepProgressBarContainer ul.stepProgressBar li:not(:last-child):before {
         content: '';
         position: absolute;
         width: 100%;
         height: 4px;
         background-color: var(--tabBackgroundColor);
         color: var(--tabTextcolor);
         top: 6px;
         right: -50%;
         z-index: 0;
         -webkit-transform: translateY(50%);
         transform: translateY(50%); }
         .stepProgressBarContainer ul.stepProgressBar li .content {
         width: 30px;
         height: 30px;
         line-height: 30px;
         border-radius: 50%;
         background: var(--tabBackgroundColor);
         color: var(--tabTextcolor);
         text-align: center;
         display: block;
         margin: 0 auto;
         position: relative;
         font-size: 20px;
         font-weight: normal; }
         .stepProgressBarContainer ul.stepProgressBar li .information {
         font-size: var(--font-size-sm);
         color: var(--bodyColor);
         font-weight: 300; }
         .stepProgressBarContainer ul.stepProgressBar li.active .content {
         background: var(--primary);
         color: var(--clearTextColor);
         font-size: var(--font-size-sm); }
         .stepProgressBarContainer ul.stepProgressBar li.active .information {
         color: var(--primary); }
         .stepProgressBarContainer ul.stepProgressBar li.completed {
         cursor: pointer; }
         .paymentForms {
         margin: 40px 0px;
         color: var(--contrastTextColor); }
         .paymentForms h5 {
         color: var(--cardTextColor); }
         .paymentForms .tab-content {
         padding: 15px;
         background-color: var(--cardContrastBgColor); }
         .paymentForms .nav-tabs {
         border-bottom: 0px; }
         .paymentForms .nav-tabs .nav-item {
         background: transparent;
         border: 0px !important; }
         .paymentForms .nav-tabs .nav-item a {
         margin: 5px;
         color: var(--contrastTextColor);
         background-color: var(--cardContrastBgColor); }
         .paymentForms .nav-tabs .nav-item.active {
         background-color: var(--cardContrastBgColor) !important;
         border: 1px solid var(--tableBorderColor) !important;
         border-bottom: 0px !important; }
         .paymentForms .nav-tabs .nav-item.active a {
         margin: 0px;
         padding-top: 13px;
         color: var(--contrastTextColor);
         background-color: var(--cardContrastBgColor) !important; }
         /*td {
         .hricon-adults-one { margin-right: -10px; }
         .hricon-child { margin-left: 5px; }
         }*/
         .summaryRoomItem .hricon-adults-one, .extrasRoomItem .hricon-adults-one {
         margin-right: -4px; }
         .summaryRoomItem .hricon-child, .extrasRoomItem .hricon-child {
         margin-left: 2px; }
         .summaryRoomItem i.hricon:last-child, .extrasRoomItem i.hricon:last-child {
         margin-right: 0px !important; }
         .calendarHolderContainer {
         text-align: center;
         font-size: 95px;
         margin-bottom: -5px; }
         div.calendarHolder {
         position: relative;
         display: inline-flex; }
         div.calendarHolder:first-child {
         margin-left: 12px;
         margin-right: 15px; }
         span.checkinDateYear {
         font-size: 10px;
         line-height: 18px;
         text-align: center; }
         span.checkoutDateYear {
         font-size: 10px;
         line-height: 18px;
         text-align: center; }
         span.checkinDate {
         font-size: 12px;
         width: 85%;
         line-height: 14px;
         text-align: center; }
         span.checkinDate small {
         display: block;
         padding-top: 10px;
         font-size: 12px; }
         .cursor-p{

    font-size: 18px;
    text-align: center;
    margin: 10px;
         }
         .dayNumber {
         font-size: 35px;
         color: var(--primary);
         display: block;
         margin-bottom: 16px; }
         span.checkoutDate {
         font-size: 12px;
         width: 85%;
         line-height: 14px;
         text-align: center; }
         span.checkoutDate small {
         display: block;
         padding-top: 10px;
         font-size: var(--font-size-xs); }
         #dateRange {
         background: white;
         display: inline-block;
         vertical-align: middle;
         height: calc(2.875rem + 2px);
         padding: 0.25rem 0.50rem;
         font-size: var(--font-size-base);
         color: var(--bodyColor);
         line-height: 1.4;
         text-align: center;
         cursor: pointer; }
         @media (max-width: 991.98px) {
         #dateRange {
         margin-bottom: 10px;
         margin-right: 0px; } }
         @media (max-width: 575.98px) {
         #dateRange {
         margin-bottom: 10px;
         margin-right: 0px;
         font-size: var(--font-size-sm); } }
         div.dateRangeContainer {
         display: flex;
         justify-content: center;
         height: 100%;
         overflow: hidden; }
         div.checkin {
         position: relative;
         float: left;
         padding-right: 35px;
         padding-left: 45px;
         width: 180px; }
         div.checkout {
         position: relative;
         float: left;
         margin-left: 20px;
         width: 180px; }
         .checkout:before {
         content: "\e901";
         font-family: custom_icons;
         position: absolute;
         left: 0px;
         font-size: 1.25rem;
         top: 5px; }
         .checkin:before {
         content: "\e900";
         font-family: custom_icons;
         position: absolute;
         left: 10px;
         font-size: 1.25rem;
         top: 5px; }
         span.dayName {
         display: block;
         font-size: var(--font-size-sm); }
         @media (max-width: 575.98px) {
         span.dayName {
         font-size: var(--font-size-xs); } }
         .checkin:after {
         content: " ";
         position: absolute;
         height: 100%;
         border-right: 1px solid #dee2e6;
         top: 0px;
         right: 0px; }
         .bs-datepicker-body table td span[class*="select-"], .bs-datepicker-body table td[class*="select-"] span {
         border-radius: 0px; }
         .bs-datepicker-body table span {
         border-radius: 0% !important; }
         .bs-datepicker-body table span:hover {
         box-shadow: 0 0 5px 1px rgba(66, 75, 83, 0.4); }
         .roomSelector {
         color: var(--bodyColor); }
         .roomSelector .dropdown-menu {
         width: 50vw;
         min-width: 355px;
         max-width: 500px;
         z-index: 999999;
         box-shadow: 0 0.5rem 1rem #dadada;
         border-radius: 0rem !important; }
         .roomSelector button.dropdown-toggle, .roomSelector button.dropdown-toggle.show {
         background: white !important;
         color: var(--bodyColor) !important;
         height: calc(2.875rem + 2px);
         width: 250px;
         border-color: transparent !important; }
         .roomSelector button.dropdown-toggle:hover, .roomSelector button.dropdown-toggle:active, .roomSelector button.dropdown-toggle:focus, .roomSelector button.dropdown-toggle.show:hover, .roomSelector button.dropdown-toggle.show:active, .roomSelector button.dropdown-toggle.show:focus {
         background: white !important;
         border: 0px !important; }
         .roomSelector .btn.dropdown-toggle:after {
         position: absolute;
         border: none;
         content: "\F448";
         font-family: icons;
         right: 25px;
         font-size: 0.85rem;
         top: 0.85rem; }
         .roomSelector .btn.dropdown-toggle:before {
         content: "\f1ED";
         font-family: icons;
         position: absolute;
         left: 10px;
         font-size: 1.25rem;
         top: 9px; }
         @media (max-width: 767.98px) {
         .roomSelector {
         margin-bottom: 0px; } }
         @media (max-width: 575.98px) {
         .roomSelector {
         margin-bottom: 10px; } }
         @media (min-width: 768px) {
         .roomSelector {
         padding-left: 5px !important; } }
         @media (min-width: 768px) and (max-width: 991.98px) {
         .roomSelector {
         margin-bottom: 10px; } }
         .propertySelector {
         color: var(--bodyColor); }
         .propertySelector .dropdown-menu {
         white-space: nowrap;
         min-width: 100%;
         z-index: 999999;
         box-shadow: 0 0.5rem 1rem #dadada;
         border-radius: 0rem !important; }
         .propertySelector .dropdown-menu.show {
         display: table; }
         .propertySelector button.dropdown-toggle, .propertySelector button.dropdown-toggle.show {
         background: white !important;
         color: var(--bodyColor) !important;
         height: calc(2.875rem + 2px);
         width: 250px;
         border-color: transparent !important; }
         .propertySelector button.dropdown-toggle:hover, .propertySelector button.dropdown-toggle:active, .propertySelector button.dropdown-toggle:focus, .propertySelector button.dropdown-toggle.show:hover, .propertySelector button.dropdown-toggle.show:active, .propertySelector button.dropdown-toggle.show:focus {
         background: white !important;
         border: 0px !important; }
         .propertySelector .btn.dropdown-toggle:after {
         position: absolute;
         border: none;
         content: "\F448";
         font-family: icons;
         right: 25px;
         font-size: 0.85rem;
         top: 0.85rem; }
         @media (max-width: 767.98px) {
         .propertySelector {
         margin-bottom: 10px; } }
         @media (max-width: 575.98px) {
         .propertySelector {
         margin-bottom: 10px; } }
         @media (min-width: 768px) {
         .propertySelector {
         padding-right: 5px !important; } }
         @media (min-width: 768px) and (max-width: 991.98px) {
         .propertySelector {
         margin-bottom: 10px;
         padding-right: 0px !important; } }
         .searchButton {
         padding: 0px 0px 0px 5px; }
         @media (min-width: 768px) and (max-width: 991.98px) {
         .searchButton {
         padding: 0px; } }
         @media (max-width: 575.98px) {
         .searchButton {
         padding: 0px; } }
         .dropDownMenuContainer .room {
         padding-bottom: 15px;
         padding-top: 15px;
         border-left: 5px solid var(--roomSelectionBorderColor, var(--primary));
         margin: 15px;
         background: var(--cardContrastBgColor);
         color: var(--contrastTextColor); }
         .dropDownMenuContainer .room span {
         display: block; }
         .dropDownMenuContainer .room select.form-control {
         min-width: 70px;
         width: 85%; }
         .dropDownMenuContainer .room small {
         font-size: var(--font-size-xs);
         display: block;
         cursor: pointer; }
         .dropDownMenuContainer .room a {
         cursor: pointer; }
         .dropDownMenuFooter {
         margin-top: 10px;
         padding: 15px;
         border-top: 1px solid var(--tableBorderColor);
         font-size: var(--font-size-sm); }
         .dropDownMenuFooter button {
         margin-top: -5px; }
         @media screen and (max-width: 900px) and (min-width: 768px) {
         bs-daterangepicker-container {
         left: 45px !important; } }
         .cardFooterButton {
         margin-bottom: 15px;
         overflow: hidden; }
         .cardFooterButton button {
         float: right; }
         .cardBgImage:before, .imgContainerGroup:not(.placeholderBox):before {
         position: absolute;
         right: 0;
         bottom: 0;
         z-index: 1;
         content: "";
         display: inline-block;
         border-style: solid;
         border-width: 0 0 50px 50px;
         border-color: transparent transparent var(--primary) transparent; }
         .cardBgImage:after, .imgContainerGroup:not(.placeholderBox):after {
         position: absolute;
         right: 9px;
         bottom: 9px;
         z-index: 2;
         content: "\F460";
         display: inline-block;
         font-family: icons;
         font-size: 12px;
         color: #fff;
         text-rendering: auto;
         -webkit-font-smoothing: antialiased;
         -moz-osx-font-smoothing: grayscale; }
         .noSelection {
         color: var(--gray600);
         width: 100%;
         text-align: center;
         padding: 50px; }
         .noSelection i {
         font-size: 7rem; }
         .buttonSpinner {
         transition: 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) all; }
         @media screen and (prefers-reduced-motion: reduce) {
         .buttonSpinner {
         transition: none; } }
         .tooltip {
         font-size: var(--font-size-sm); }
         .footerAddress {
         text-align: center; }
         .footerAddress p {
         font-size: var(--font-size-sm);
         margin-bottom: 0px; }
         .logo {
         margin-top: -0.5rem;
         margin-bottom: -0.5rem; }
         .grayBg {
         background-color: var(--gray200); }
         .couponCodeMessage {
         font-weight: 600;
         font-size: 90%; }
         .couponCodeMessage.success {
         color: var(--success); }
         .couponCodeMessage.error {
         color: var(--danger); }
         small.errorExplanation {
         display: none; }
         .hasError {
         color: var(--danger); }
         .hasError select {
         border: 1px solid var(--danger); }
         .hasError small.errorExplanation {
         display: block; }
         input.hasError, select.hasError {
         color: var(--danger);
         border: 1px solid var(--danger); }
         small.errorExplanation.hasError {
         display: block; }
         .cursor-pointer {
         cursor: pointer; }
         .mainNavbar img {
         max-height: 100px;
         padding: 10px;
         max-width: 250px; }
         .noPlaceholder::-webkit-input-placeholder {
         /* WebKit browsers */
         color: transparent; }
         .noPlaceholder:-moz-placeholder {
         /* Mozilla Firefox 4 to 18 */
         color: transparent; }
         .noPlaceholder::-moz-placeholder {
         /* Mozilla Firefox 19+ */
         color: transparent; }
         .noPlaceholder:-ms-input-placeholder {
         /* Internet Explorer 10+ */
         color: transparent; }
         [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
         display: none !important; }
         .bs-datepicker-head {
         width: 100%;
         display: block;
         text-align: center; }
         .bs-datepicker-head button.previous {
         &nbsp;float: left; }
         .bs-datepicker-head button.next {
         &nbsp;float: right; }
         .closeFrame {
         width: 100%;
         text-align: right;
         background: var(--bgColor);
         color: black;
         display: block;
         padding: 0px 10px;
         box-shadow: 0px 1px 15px 0px #9e9e9e;
         border-bottom: 1px solid #dbdcdc;
         font-weight: bold; }
         .closeFrame:hover {
         text-decoration: none; }
         .collapse-in .collapsable {
         overflow: visible;
         opacity: 1;
         transition: 0.35s linear all;
         max-height: 250px;
         /*any number which is lager than a height of any of your elements*/ }
         @media screen and (prefers-reduced-motion: reduce) {
         .collapse-in .collapsable {
         transition: none; } }
         .collapse-in .searchBarSummaryContent {
         display: none !important; }
         .collapse-in .searchBarSummaryContentHidden {
         display: inherit; }
         .collapse-out .searchBarSummaryContent {
         display: inherit; }
         .collapse-out .searchBarSummaryContentHidden {
         display: none; }
         @media (max-width: 767.98px) {
         .collapse-out .collapsable {
         overflow: hidden;
         opacity: 0;
         transition: 0.35s linear all;
         max-height: 0px; } }
         @media screen and (max-width: 767.98px) and (prefers-reduced-motion: reduce) {
         .collapse-out .collapsable {
         transition: none; } }
         @media (min-width: 768px) {
         .searchBarSummary {
         display: none; } }
         @media (max-width: 767.98px) {
         .searchBarSummary {
         cursor: pointer;
         margin: 10px 0px;
         text-align: center; }
         .searchBarSummary i.toggleLink {
         position: absolute;
         top: 20px;
         right: 1.25rem;
         font-weight: 400; }
         .searchBarSummary i {
         font-weight: 600; } }
         .searchBarSummary .searchBarSummaryContent {
         display: inline-block;
         transition: 0.25s linear all; }
         @media screen and (prefers-reduced-motion: reduce) {
         .searchBarSummary .searchBarSummaryContent {
         transition: none; } }
         @media (max-width: 991.98px) {
         .searchBarSummary .searchBarSummaryContent .guestRoomsSelectionText {
         margin-left: 10px;
         margin-right: 10px; } }
         .tooltip {
         pointer-events: none; }
         .tooltip-inner {
         white-space: pre-wrap; }
         .video {
         padding: 15px;
         background: black;
         height: 565px;
         width: 100%; }
         @media (max-width: 991.98px) {
         .video {
         height: 350px !important; } }
         .cursor-p {
         cursor: pointer; }
         .customInformingClause {
         font-style: italic;
         font-size: var(--font-size-xs); }
         .textLink {
         text-decoration: none;
         font-weight: bold;
         color: var(--bodyColor);
         font-size: var(--font-size-xs); }
         .textLink:hover, .textLink:active, .textLink:visited {
         text-decoration: none;
         color: var(--bodyColor); }
         .cardHeaderBar {
         background: var(--navbarBackground);
         color: var(--clearTextColor);
         padding: 10px 15px; }
         .recommendedRoomSelection {
         border-bottom: 1px dashed var(--gray400);
         margin-bottom: 10px;
         padding-bottom: 10px; }
         .recommendedRoomSelection:last-child {
         border-bottom: 0px;
         padding-bottom: 0px; }
         .recommendedRoomSelection h5 {
         display: inline-block; }
         .recommendedRoomPriceArea {
         min-height: 70px; }
         .recommendationGuestRoomsContainer {
         margin-left: 5px; }
         .recommendationGuestRoomsContainer .recommendationGuestRoom {
         padding: 5px 5px;
         background: var(--tabBackgroundColor);
         color: var(--tabTextcolor);
         margin-right: 5px; }
         .originalPrice {
         font-size: var(--font-size-md);
         text-decoration: line-through; }
         .showPrice {
         display: block;
         width: 100%;
         font-size: var(--font-size-lg);
         color: var(--priceColor);
         font-weight: 500; }
         .rateType {
         display: block;
         width: 100%;
         font-size: var(--font-size-xs);
         white-space: nowrap; }
         .recommendCardDetailsPricing {
         min-height: 100px; }
         @media (max-width: 575.98px) {
         .recommendCardDetailsPricing {
         border-top: 1px dashed var(--border-color); } }
         .thumbRoomImg {
         width: 75px;
         margin-right: 10px;
         margin-bottom: 15px; }
         .v-align-top {
         vertical-align: top; }
         .font-w-200 {
         font-weight: 200; }
         @media (max-width: 1199.98px) {
         .cartMobileOnly {
         order: -2 !important;
         display: block !important;
         margin-bottom: 20px;
         width: 100%; } }
         @media (min-width: 992px) {
         .cartMobileOnly {
         display: none !important; } }
         .cartMobileOnly .brandingArea {
         display: none; }
         .progressBarMobileOnly {
         width: 100%; }
         @media (max-width: 1199.98px) {
         .progressBarMobileOnly {
         order: -2 !important;
         display: block !important; } }
         @media (min-width: 992px) {
         .progressBarMobileOnly {
         display: none !important; } }
         @media (max-width: 1199.98px) {
         .progressBarNotMobile {
         display: none !important; } }
         @media (min-width: 992px) {
         .progressBarNotMobile {
         display: block !important; } }
         .continueButton {
         height: 60px;
         width: 98%;
         margin: 1%;
         box-shadow: 0px 10px 35px 10px rgba(0, 0, 0, 0.3); }
         .completeButton {
         height: 60px;
         box-shadow: 0px 10px 35px 10px rgba(0, 0, 0, 0.3); }
         .close span {
         font-size: 2rem !important; }
         .badge-on-tabs {
         border-radius: 0px;
         background-color: var(--lastRoomBadgeColor);
         color: var(--clearTextColor);
         max-height: 18px;
         float: right;
         margin-top: 2px;
         clear: both;
         margin-left: 5px; }
         .hotelrunner-test {
         width: 100%; }
      </style>
      <style type="text/css">.jp-card.jp-card-safari.jp-card-identified .jp-card-front:before, .jp-card.jp-card-safari.jp-card-identified .jp-card-back:before {
         background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0.05) 1px, rgba(255, 255, 255, 0) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.03) 4px), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(210deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), -webkit-linear-gradient(-245deg, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%);
         background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0.05) 1px, rgba(255, 255, 255, 0) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.03) 4px), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(210deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), linear-gradient(-25deg, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%); }
         .jp-card.jp-card-ie-10.jp-card-flipped, .jp-card.jp-card-ie-11.jp-card-flipped {
         -webkit-transform: 0deg;
         -moz-transform: 0deg;
         -ms-transform: 0deg;
         -o-transform: 0deg;
         transform: 0deg; }
         .jp-card.jp-card-ie-10.jp-card-flipped .jp-card-front, .jp-card.jp-card-ie-11.jp-card-flipped .jp-card-front {
         -webkit-transform: rotateY(0deg);
         -moz-transform: rotateY(0deg);
         -ms-transform: rotateY(0deg);
         -o-transform: rotateY(0deg);
         transform: rotateY(0deg); }
         .jp-card.jp-card-ie-10.jp-card-flipped .jp-card-back, .jp-card.jp-card-ie-11.jp-card-flipped .jp-card-back {
         -webkit-transform: rotateY(0deg);
         -moz-transform: rotateY(0deg);
         -ms-transform: rotateY(0deg);
         -o-transform: rotateY(0deg);
         transform: rotateY(0deg); }
         .jp-card.jp-card-ie-10.jp-card-flipped .jp-card-back:after, .jp-card.jp-card-ie-11.jp-card-flipped .jp-card-back:after {
         left: 18%; }
         .jp-card.jp-card-ie-10.jp-card-flipped .jp-card-back .jp-card-cvc, .jp-card.jp-card-ie-11.jp-card-flipped .jp-card-back .jp-card-cvc {
         -webkit-transform: rotateY(180deg);
         -moz-transform: rotateY(180deg);
         -ms-transform: rotateY(180deg);
         -o-transform: rotateY(180deg);
         transform: rotateY(180deg);
         left: 5%; }
         .jp-card.jp-card-ie-10.jp-card-flipped .jp-card-back .jp-card-shiny, .jp-card.jp-card-ie-11.jp-card-flipped .jp-card-back .jp-card-shiny {
         left: 84%; }
         .jp-card.jp-card-ie-10.jp-card-flipped .jp-card-back .jp-card-shiny:after, .jp-card.jp-card-ie-11.jp-card-flipped .jp-card-back .jp-card-shiny:after {
         left: -480%;
         -webkit-transform: rotateY(180deg);
         -moz-transform: rotateY(180deg);
         -ms-transform: rotateY(180deg);
         -o-transform: rotateY(180deg);
         transform: rotateY(180deg); }
         .jp-card.jp-card-ie-10.jp-card-amex .jp-card-back, .jp-card.jp-card-ie-11.jp-card-amex .jp-card-back {
         display: none; }
         .jp-card-logo {
         height: 36px;
         width: 60px;
         font-style: italic; }
         .jp-card-logo, .jp-card-logo:before, .jp-card-logo:after {
         box-sizing: border-box; }
         .jp-card-logo.jp-card-amex {
         text-transform: uppercase;
         font-size: 4px;
         font-weight: bold;
         color: white;
         background-image: repeating-radial-gradient(circle at center, #FFF 1px, #999 2px);
         background-image: repeating-radial-gradient(circle at center, #FFF 1px, #999 2px);
         border: 1px solid #EEE; }
         .jp-card-logo.jp-card-amex:before, .jp-card-logo.jp-card-amex:after {
         width: 28px;
         display: block;
         position: absolute;
         left: 16px; }
         .jp-card-logo.jp-card-amex:before {
         height: 28px;
         content: "american";
         top: 3px;
         text-align: left;
         padding-left: 2px;
         padding-top: 11px;
         background: #267AC3; }
         .jp-card-logo.jp-card-amex:after {
         content: "express";
         bottom: 11px;
         text-align: right;
         padding-right: 2px; }
         .jp-card.jp-card-amex.jp-card-flipped {
         -webkit-transform: none;
         -moz-transform: none;
         -ms-transform: none;
         -o-transform: none;
         transform: none; }
         .jp-card.jp-card-amex.jp-card-identified .jp-card-front:before, .jp-card.jp-card-amex.jp-card-identified .jp-card-back:before {
         background-color: #108168; }
         .jp-card.jp-card-amex.jp-card-identified .jp-card-front .jp-card-logo.jp-card-amex {
         opacity: 1; }
         .jp-card.jp-card-amex.jp-card-identified .jp-card-front .jp-card-cvc {
         visibility: visible; }
         .jp-card.jp-card-amex.jp-card-identified .jp-card-front:after {
         opacity: 1; }
         .jp-card-logo.jp-card-discover {
         background: #FF6600;
         color: #111;
         text-transform: uppercase;
         font-style: normal;
         font-weight: bold;
         font-size: 10px;
         text-align: center;
         overflow: hidden;
         z-index: 1;
         padding-top: 9px;
         letter-spacing: .03em;
         border: 1px solid #EEE; }
         .jp-card-logo.jp-card-discover:before, .jp-card-logo.jp-card-discover:after {
         content: " ";
         display: block;
         position: absolute; }
         .jp-card-logo.jp-card-discover:before {
         background: white;
         width: 200px;
         height: 200px;
         border-radius: 200px;
         bottom: -5%;
         right: -80%;
         z-index: -1; }
         .jp-card-logo.jp-card-discover:after {
         width: 8px;
         height: 8px;
         border-radius: 4px;
         top: 10px;
         left: 27px;
         background-color: #FF6600;
         background-image: -webkit-radial-gradient(#FF6600, #fff);
         background-image: radial-gradient(  #FF6600, #fff);
         content: "network";
         font-size: 4px;
         line-height: 24px;
         text-indent: -7px; }
         .jp-card .jp-card-front .jp-card-logo.jp-card-discover {
         right: 12%;
         top: 18%; }
         .jp-card.jp-card-discover.jp-card-identified .jp-card-front:before, .jp-card.jp-card-discover.jp-card-identified .jp-card-back:before {
         background-color: #86B8CF; }
         .jp-card.jp-card-discover.jp-card-identified .jp-card-logo.jp-card-discover {
         opacity: 1; }
         .jp-card.jp-card-discover.jp-card-identified .jp-card-front:after {
         -webkit-transition: 400ms;
         -moz-transition: 400ms;
         transition: 400ms;
         content: " ";
         display: block;
         background-color: #FF6600;
         background-image: -webkit-linear-gradient(#FF6600, #ffa366, #FF6600);
         background-image: linear-gradient(#FF6600, #ffa366, #FF6600);
         height: 50px;
         width: 50px;
         border-radius: 25px;
         position: absolute;
         left: 100%;
         top: 15%;
         margin-left: -25px;
         box-shadow: inset 1px 1px 3px 1px rgba(0, 0, 0, 0.5); }
         .jp-card-logo.jp-card-visa {
         text-transform: uppercase;
         color: white;
         text-align: center;
         font-weight: bold;
         font-size: 24px;
         line-height: 18px;
         margin-top: 5px; }
         .jp-card-logo.jp-card-visa:before, .jp-card-logo.jp-card-visa:after {
         content: " ";
         display: block;
         width: 100%;
         height: 25%; }
         .jp-card-logo.jp-card-visa:before {
         position: absolute;
         left: -4px;
         width: 0;
         height: 0;
         border-style: solid;
         border-width: 0 12px 6px 0;
         border-color: transparent #ffffff transparent transparent; }
         .jp-card.jp-card-visa.jp-card-identified .jp-card-front:before, .jp-card.jp-card-visa.jp-card-identified .jp-card-back:before {
         background-color: #191278; }
         .jp-card.jp-card-visa.jp-card-identified .jp-card-logo.jp-card-visa {
         opacity: 1;
         box-shadow: none; }
         .jp-card-logo.jp-card-visaelectron {
         background: white;
         text-transform: uppercase;
         color: #1A1876;
         text-align: center;
         font-weight: bold;
         font-size: 15px;
         line-height: 18px; }
         .jp-card-logo.jp-card-visaelectron:before, .jp-card-logo.jp-card-visaelectron:after {
         content: " ";
         display: block;
         width: 100%;
         height: 25%; }
         .jp-card-logo.jp-card-visaelectron:before {
         background: #1A1876; }
         .jp-card-logo.jp-card-visaelectron:after {
         background: #E79800; }
         .jp-card-logo.jp-card-visaelectron .elec {
         float: right;
         font-family: arial;
         font-size: 9px;
         margin-right: 1px;
         margin-top: -5px;
         text-transform: none; }
         .jp-card.jp-card-visaelectron.jp-card-identified .jp-card-front:before, .jp-card.jp-card-visaelectron.jp-card-identified .jp-card-back:before {
         background-color: #191278; }
         .jp-card.jp-card-visaelectron.jp-card-identified .jp-card-logo.jp-card-visaelectron {
         opacity: 1; }
         .jp-card-logo.jp-card-mastercard {
         color: white;
         font-style: normal;
         text-transform: lowercase;
         font-weight: bold;
         text-align: center;
         font-size: 9px;
         line-height: 84px;
         z-index: 1;
         text-shadow: 1px 1px rgba(0, 0, 0, 0.6); }
         .jp-card-logo.jp-card-mastercard:before, .jp-card-logo.jp-card-mastercard:after {
         content: " ";
         display: block;
         width: 36px;
         top: 0;
         position: absolute;
         height: 36px;
         border-radius: 18px; }
         .jp-card-logo.jp-card-mastercard:before {
         left: 0;
         background: #EB001B;
         z-index: -1;
         opacity: 0.9; }
         .jp-card-logo.jp-card-mastercard:after {
         right: 0;
         background: #FF5F00;
         z-index: -2; }
         .jp-card.jp-card-mastercard.jp-card-identified .jp-card-front .jp-card-logo.jp-card-mastercard, .jp-card.jp-card-mastercard.jp-card-identified .jp-card-back .jp-card-logo.jp-card-mastercard {
         box-shadow: none; }
         .jp-card.jp-card-mastercard.jp-card-identified .jp-card-front:before, .jp-card.jp-card-mastercard.jp-card-identified .jp-card-back:before {
         background-color: #0061A8; }
         .jp-card.jp-card-mastercard.jp-card-identified .jp-card-logo.jp-card-mastercard {
         opacity: 1; }
         .jp-card-logo.jp-card-maestro {
         color: white;
         font-style: normal;
         text-transform: lowercase;
         font-weight: bold;
         text-align: center;
         font-size: 14px;
         line-height: 84px;
         z-index: 1;
         text-shadow: 1px 1px rgba(0, 0, 0, 0.6); }
         .jp-card-logo.jp-card-maestro:before, .jp-card-logo.jp-card-maestro:after {
         content: " ";
         display: block;
         width: 36px;
         top: 0;
         position: absolute;
         height: 36px;
         border-radius: 18px; }
         .jp-card-logo.jp-card-maestro:before {
         left: 0;
         background: #EB001B;
         z-index: -2; }
         .jp-card-logo.jp-card-maestro:after {
         right: 0;
         background: #00A2E5;
         z-index: -1;
         opacity: 0.8; }
         .jp-card.jp-card-maestro.jp-card-identified .jp-card-front .jp-card-logo.jp-card-maestro, .jp-card.jp-card-maestro.jp-card-identified .jp-card-back .jp-card-logo.jp-card-maestro {
         box-shadow: none; }
         .jp-card.jp-card-maestro.jp-card-identified .jp-card-front:before, .jp-card.jp-card-maestro.jp-card-identified .jp-card-back:before {
         background-color: #0B2C5F; }
         .jp-card.jp-card-maestro.jp-card-identified .jp-card-logo.jp-card-maestro {
         opacity: 1; }
         .jp-card-logo.jp-card-dankort {
         width: 60px;
         height: 36px;
         padding: 3px;
         border-radius: 8px;
         border: #000000 1px solid;
         background-color: #FFFFFF; }
         .jp-card-logo.jp-card-dankort .dk {
         position: relative;
         width: 100%;
         height: 100%;
         overflow: hidden; }
         .jp-card-logo.jp-card-dankort .dk:before {
         background-color: #ED1C24;
         content: '';
         position: absolute;
         width: 100%;
         height: 100%;
         display: block;
         border-radius: 6px; }
         .jp-card-logo.jp-card-dankort .dk:after {
         content: '';
         position: absolute;
         top: 50%;
         margin-top: -7.7px;
         right: 0;
         width: 0;
         height: 0;
         border-style: solid;
         border-width: 7px 7px 10px 0;
         border-color: transparent #ED1C24 transparent transparent;
         z-index: 1; }
         .jp-card-logo.jp-card-dankort .d, .jp-card-logo.jp-card-dankort .k {
         position: absolute;
         top: 50%;
         width: 50%;
         display: block;
         height: 15.4px;
         margin-top: -7.7px;
         background: white; }
         .jp-card-logo.jp-card-dankort .d {
         left: 0;
         border-radius: 0 8px 10px 0; }
         .jp-card-logo.jp-card-dankort .d:before {
         content: '';
         position: absolute;
         top: 50%;
         left: 50%;
         display: block;
         background: #ED1C24;
         border-radius: 2px 4px 6px 0px;
         height: 5px;
         width: 7px;
         margin: -3px 0 0 -4px; }
         .jp-card-logo.jp-card-dankort .k {
         right: 0; }
         .jp-card-logo.jp-card-dankort .k:before, .jp-card-logo.jp-card-dankort .k:after {
         content: '';
         position: absolute;
         right: 50%;
         width: 0;
         height: 0;
         border-style: solid;
         margin-right: -1px; }
         .jp-card-logo.jp-card-dankort .k:before {
         top: 0;
         border-width: 8px 5px 0 0;
         border-color: #ED1C24 transparent transparent transparent; }
         .jp-card-logo.jp-card-dankort .k:after {
         bottom: 0;
         border-width: 0 5px 8px 0;
         border-color: transparent transparent #ED1C24 transparent; }
         .jp-card.jp-card-dankort.jp-card-identified .jp-card-front:before, .jp-card.jp-card-dankort.jp-card-identified .jp-card-back:before {
         background-color: #0055C7; }
         .jp-card.jp-card-dankort.jp-card-identified .jp-card-logo.jp-card-dankort {
         opacity: 1; }
         .jp-card-logo.jp-card-elo {
         height: 50px;
         width: 50px;
         border-radius: 100%;
         background: black;
         color: white;
         text-align: center;
         text-transform: lowercase;
         font-size: 21px;
         font-style: normal;
         letter-spacing: 1px;
         font-weight: bold;
         padding-top: 13px; }
         .jp-card-logo.jp-card-elo .e, .jp-card-logo.jp-card-elo .l, .jp-card-logo.jp-card-elo .o {
         display: inline-block;
         position: relative; }
         .jp-card-logo.jp-card-elo .e {
         -webkit-transform: rotate(-15deg);
         -moz-transform: rotate(-15deg);
         -ms-transform: rotate(-15deg);
         -o-transform: rotate(-15deg);
         transform: rotate(-15deg); }
         .jp-card-logo.jp-card-elo .o {
         position: relative;
         display: inline-block;
         width: 12px;
         height: 12px;
         right: 0;
         top: 7px;
         border-radius: 100%;
         background-image: -webkit-linear-gradient( yellow 50%, red 50%);
         background-image: linear-gradient( yellow 50%, red 50%);
         -webkit-transform: rotate(40deg);
         -moz-transform: rotate(40deg);
         -ms-transform: rotate(40deg);
         -o-transform: rotate(40deg);
         transform: rotate(40deg);
         text-indent: -9999px; }
         .jp-card-logo.jp-card-elo .o:before {
         content: "";
         position: absolute;
         width: 49%;
         height: 49%;
         background: black;
         border-radius: 100%;
         text-indent: -99999px;
         top: 25%;
         left: 25%; }
         .jp-card.jp-card-elo.jp-card-identified .jp-card-front:before, .jp-card.jp-card-elo.jp-card-identified .jp-card-back:before {
         background-color: #6F6969; }
         .jp-card.jp-card-elo.jp-card-identified .jp-card-logo.jp-card-elo {
         opacity: 1; }
         .jp-card-logo.jp-card-jcb {
         border-radius: 5px 0px 5px 0px;
         -moz-border-radius: 5px 0px 5px 0px;
         -webkit-border-radius: 5px 0px 5px 0px;
         background-color: white;
         font-style: normal;
         color: white;
         width: 50px;
         padding: 2px 0 0 2px; }
         .jp-card-logo.jp-card-jcb > div {
         width: 15px;
         margin-right: 1px;
         display: inline-block;
         text-align: center;
         text-shadow: 1px 1px rgba(0, 0, 0, 0.6);
         border-radius: 5px 0px 5px 0px;
         -moz-border-radius: 5px 0px 5px 0px;
         -webkit-border-radius: 5px 0px 5px 0px; }
         .jp-card-logo.jp-card-jcb > div:before, .jp-card-logo.jp-card-jcb > div:after {
         content: " ";
         display: block;
         height: 8px; }
         .jp-card-logo.jp-card-jcb > div.j {
         background-color: #000063;
         background-image: -webkit-linear-gradient(left, #000063, #008cff);
         background-image: linear-gradient(to right,#000063, #008cff); }
         .jp-card-logo.jp-card-jcb > div.c {
         background-color: #630000;
         background-image: -webkit-linear-gradient(left, #630000, #ff008d);
         background-image: linear-gradient(to right,#630000, #ff008d); }
         .jp-card-logo.jp-card-jcb > div.b {
         background-color: #006300;
         background-image: -webkit-linear-gradient(left, #006300, #00ff00);
         background-image: linear-gradient(to right,#006300, #00ff00); }
         .jp-card.jp-card-jcb.jp-card-identified .jp-card-front:before, .jp-card.jp-card-jcb.jp-card-identified .jp-card-back:before {
         background-color: #CB8000; }
         .jp-card.jp-card-jcb.jp-card-identified .jp-card-logo.jp-card-jcb {
         opacity: 1;
         box-shadow: none; }
         .jp-card-logo.jp-card-dinersclub {
         font-family: serif;
         height: 40px;
         width: 100px;
         color: white;
         font-size: 17px;
         font-style: normal;
         letter-spacing: 1px; }
         .jp-card-logo.jp-card-dinersclub::before, .jp-card-logo.jp-card-dinersclub::after {
         display: block;
         position: relative; }
         .jp-card-logo.jp-card-dinersclub::before {
         content: 'Diners Club'; }
         .jp-card-logo.jp-card-dinersclub::after {
         content: 'International';
         text-transform: uppercase;
         font-size: 0.6em; }
         .jp-card.jp-card-dinersclub .jp-card-front .jp-card-logo {
         box-shadow: none !important; }
         .jp-card.jp-card-dinersclub.jp-card-identified .jp-card-front:before, .jp-card.jp-card-dinersclub.jp-card-identified .jp-card-back:before {
         background-color: #999; }
         .jp-card.jp-card-dinersclub.jp-card-identified .jp-card-logo.jp-card-dinersclub {
         opacity: 1; }
         .jp-card-container {
         -webkit-perspective: 1000px;
         -moz-perspective: 1000px;
         perspective: 1000px;
         width: 350px;
         max-width: 100%;
         height: 200px;
         margin: auto;
         z-index: 1;
         position: relative; }
         .jp-card {
         font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
         line-height: 1;
         position: relative;
         width: 100%;
         height: 100%;
         min-width: 315px;
         border-radius: 10px;
         -webkit-transform-style: preserve-3d;
         -moz-transform-style: preserve-3d;
         -ms-transform-style: preserve-3d;
         -o-transform-style: preserve-3d;
         transform-style: preserve-3d;
         -webkit-transition: all 400ms linear;
         -moz-transition: all 400ms linear;
         transition: all 400ms linear; }
         .jp-card > *, .jp-card > *:before, .jp-card > *:after {
         -moz-box-sizing: border-box;
         -webkit-box-sizing: border-box;
         box-sizing: border-box;
         font-family: inherit; }
         .jp-card.jp-card-flipped {
         -webkit-transform: rotateY(180deg);
         -moz-transform: rotateY(180deg);
         -ms-transform: rotateY(180deg);
         -o-transform: rotateY(180deg);
         transform: rotateY(180deg); }
         .jp-card .jp-card-front, .jp-card .jp-card-back {
         -webkit-backface-visibility: hidden;
         backface-visibility: hidden;
         -webkit-transform-style: preserve-3d;
         -moz-transform-style: preserve-3d;
         -ms-transform-style: preserve-3d;
         -o-transform-style: preserve-3d;
         transform-style: preserve-3d;
         -webkit-transition: all 400ms linear;
         -moz-transition: all 400ms linear;
         transition: all 400ms linear;
         width: 100%;
         height: 100%;
         position: absolute;
         top: 0;
         left: 0;
         overflow: hidden;
         border-radius: 10px;
         background: #DDD; }
         .jp-card .jp-card-front:before, .jp-card .jp-card-back:before {
         content: " ";
         display: block;
         position: absolute;
         width: 100%;
         height: 100%;
         top: 0;
         left: 0;
         opacity: 0;
         border-radius: 10px;
         -webkit-transition: all 400ms ease;
         -moz-transition: all 400ms ease;
         transition: all 400ms ease; }
         .jp-card .jp-card-front:after, .jp-card .jp-card-back:after {
         content: " ";
         display: block; }
         .jp-card .jp-card-front .jp-card-display, .jp-card .jp-card-back .jp-card-display {
         color: white;
         font-weight: normal;
         opacity: 0.5;
         -webkit-transition: opacity 400ms linear;
         -moz-transition: opacity 400ms linear;
         transition: opacity 400ms linear; }
         .jp-card .jp-card-front .jp-card-display.jp-card-focused, .jp-card .jp-card-back .jp-card-display.jp-card-focused {
         opacity: 1;
         font-weight: 700; }
         .jp-card .jp-card-front .jp-card-cvc, .jp-card .jp-card-back .jp-card-cvc {
         font-family: "Bitstream Vera Sans Mono", Consolas, Courier, monospace;
         font-size: 14px; }
         .jp-card .jp-card-front .jp-card-shiny, .jp-card .jp-card-back .jp-card-shiny {
         width: 50px;
         height: 35px;
         border-radius: 5px;
         background: #CCC;
         position: relative; }
         .jp-card .jp-card-front .jp-card-shiny:before, .jp-card .jp-card-back .jp-card-shiny:before {
         content: " ";
         display: block;
         width: 70%;
         height: 60%;
         border-top-right-radius: 5px;
         border-bottom-right-radius: 5px;
         background: #d9d9d9;
         position: absolute;
         top: 20%; }
         .jp-card .jp-card-front .jp-card-logo {
         position: absolute;
         opacity: 0;
         right: 5%;
         top: 8%;
         -webkit-transition: 400ms;
         -moz-transition: 400ms;
         transition: 400ms; }
         .jp-card .jp-card-front .jp-card-lower {
         width: 80%;
         position: absolute;
         left: 10%;
         bottom: 30px; }
         @media only screen and (max-width: 480px) {
         .jp-card .jp-card-front .jp-card-lower {
         width: 90%;
         left: 5%; } }
         .jp-card .jp-card-front .jp-card-lower .jp-card-cvc {
         visibility: hidden;
         float: right;
         position: relative;
         bottom: 5px; }
         .jp-card .jp-card-front .jp-card-lower .jp-card-number {
         font-family: "Bitstream Vera Sans Mono", Consolas, Courier, monospace;
         font-size: 24px;
         clear: both;
         margin-bottom: 30px; }
         .jp-card .jp-card-front .jp-card-lower .jp-card-expiry {
         font-family: "Bitstream Vera Sans Mono", Consolas, Courier, monospace;
         letter-spacing: 0em;
         position: relative;
         float: right;
         width: 25%; }
         .jp-card .jp-card-front .jp-card-lower .jp-card-expiry:before, .jp-card .jp-card-front .jp-card-lower .jp-card-expiry:after {
         font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
         font-weight: bold;
         font-size: 7px;
         white-space: pre;
         display: block;
         opacity: .5; }
         .jp-card .jp-card-front .jp-card-lower .jp-card-expiry:before {
         content: attr(data-before);
         margin-bottom: 2px;
         font-size: 7px;
         text-transform: uppercase; }
         .jp-card .jp-card-front .jp-card-lower .jp-card-expiry:after {
         position: absolute;
         content: attr(data-after);
         text-align: right;
         right: 100%;
         margin-right: 5px;
         margin-top: 2px;
         bottom: 0; }
         .jp-card .jp-card-front .jp-card-lower .jp-card-name {
         text-transform: uppercase;
         font-family: "Bitstream Vera Sans Mono", Consolas, Courier, monospace;
         font-size: 20px;
         max-height: 45px;
         position: absolute;
         bottom: 0;
         width: 190px;
         display: -webkit-box;
         -webkit-line-clamp: 2;
         -webkit-box-orient: horizontal;
         overflow: hidden;
         text-overflow: ellipsis; }
         .jp-card .jp-card-back {
         -webkit-transform: rotateY(180deg);
         -moz-transform: rotateY(180deg);
         -ms-transform: rotateY(180deg);
         -o-transform: rotateY(180deg);
         transform: rotateY(180deg); }
         .jp-card .jp-card-back .jp-card-bar {
         background-color: #444;
         background-image: -webkit-linear-gradient(#444, #333);
         background-image: linear-gradient(#444, #333);
         width: 100%;
         height: 20%;
         position: absolute;
         top: 10%; }
         .jp-card .jp-card-back:after {
         content: " ";
         display: block;
         background-color: #FFF;
         background-image: -webkit-linear-gradient(#FFF, #FFF);
         background-image: linear-gradient(#FFF, #FFF);
         width: 80%;
         height: 16%;
         position: absolute;
         top: 40%;
         left: 2%; }
         .jp-card .jp-card-back .jp-card-cvc {
         position: absolute;
         top: 40%;
         left: 85%;
         -webkit-transition-delay: 600ms;
         -moz-transition-delay: 600ms;
         transition-delay: 600ms; }
         .jp-card .jp-card-back .jp-card-shiny {
         position: absolute;
         top: 66%;
         left: 2%; }
         .jp-card .jp-card-back .jp-card-shiny:after {
         content: "This card has been issued by Jesse Pollak and is licensed for anyone to use anywhere for free. It comes with no warranty. For support issues, please visit: github.com/jessepollak/card.";
         position: absolute;
         left: 120%;
         top: 5%;
         color: white;
         font-size: 7px;
         width: 230px;
         opacity: .5; }
         .jp-card.jp-card-identified {
         box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); }
         .jp-card.jp-card-identified .jp-card-front, .jp-card.jp-card-identified .jp-card-back {
         background-color: #000;
         background-color: rgba(0, 0, 0, 0.5); }
         .jp-card.jp-card-identified .jp-card-front:before, .jp-card.jp-card-identified .jp-card-back:before {
         -webkit-transition: all 400ms ease;
         -moz-transition: all 400ms ease;
         transition: all 400ms ease;
         background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0.05) 1px, rgba(255, 255, 255, 0) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.03) 4px), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(210deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 70% 70%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 90% 20%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 15% 80%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), -webkit-linear-gradient(-245deg, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%);
         background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0.05) 1px, rgba(255, 255, 255, 0) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.03) 4px), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(210deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 70% 70%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 90% 20%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 15% 80%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), linear-gradient(-25deg, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%);
         opacity: 1; }
         .jp-card.jp-card-identified .jp-card-front .jp-card-logo, .jp-card.jp-card-identified .jp-card-back .jp-card-logo {
         box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.3); }
         .jp-card.jp-card-identified.no-radial-gradient .jp-card-front:before, .jp-card.jp-card-identified.no-radial-gradient .jp-card-back:before {
         background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0.05) 1px, rgba(255, 255, 255, 0) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.03) 4px), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(210deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), -webkit-linear-gradient(-245deg, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%);
         background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0.05) 1px, rgba(255, 255, 255, 0) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.03) 4px), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(210deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), linear-gradient(-25deg, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%); }
      </style>
      <title>Play By Admiral Hotel</title>
      <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
   </head>
   <body>

    <link rel="stylesheet" type="text/css" href="./index_files/styles.css?ver=5">
   	    <link rel="stylesheet" type="text/css" href="custom.css?ver=5">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="custom.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
  	#header_id{
  		display: block;
  		position: relative;
  	}
  	.searchGuests, .searchRooms{
  		font-size: 16px;
  	}
  	.dates-title{
  		font-size: 24px;
  		display: block;
  		text-align: center;
  		margin: 20px 0 0;
      color: #ad9260;
  	}
  	.heading-box {
  		margin:0 0 30px;
  	}
   .cursor-p{
      font-weight: bold;
   }

   body.tucky #header_id.tucky #main-menu li a {
    line-height: 100px; }
    @media (max-width: 992px) {
      body.tucky #header_id.tucky #main-menu li a {
        line-height: 33px !important; } }
        body.tucky #header_id.tucky #main-menu li a:hover {
          color: #000!important;
        }
  </style>
  
  <section>
      <header id="header_id" class="tucky">
        <div class="side container">
          <div class="first col-sm-4 col-md-2 iss">
            
            <a href="/">
              <div id="header-l">
                <img id="logo" src="logo.png" width="100%">
               
              </div>
            </a>
          </div>
          <div class="two col-sm-8 col-md-10 iss">

            <nav id="main-menu">
              <ul class="list-inline" style="margin-left: 108px;">
                <li>
                  <a href="policy.html">Policy</a>
                </li>
                <li>
                  <a href="about.html">About Us</a>
                </li>
                <li>
                  <a href="contact.html">Contact Us</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
    </section>
      <app-root _nghost-c0="" ng-version="6.1.10" style="background-image:  linear-gradient( rgba(255, 255, 255, 0.8), rgba(0, 0, 0, 0.5) ), url('/index_files/Giriş_2.jpg')">
         <app-search class="d-block" _nghost-c3="" style="background-image:  linear-gradient( rgba(255, 255, 255, 0.8), rgba(0, 0, 0, 0.5) ), url('/index_files/Giriş_2.jpg')">
            <div _ngcontent-c3="" class="container mainContainer marT30">

        <div class="heading-box">
          <h2>Your Stay</h2>
         
          <div class="subtitle"></div>
         
        </div>
               <div _ngcontent-c3="" class="row mar0">
             
                  <div _ngcontent-c3="" class="col-lg-4 col-xl-3 cartContainer left pad0">
                     <app-cart _ngcontent-c3="" class="d-block sticky-top sticky-top-margin" _nghost-c7="">
                        <div _ngcontent-c7="" class="cartContainerInner border">
                           <div _ngcontent-c7="" class="calendarHolderContainer">
                              	<p class="dates-title">Dates</p>
                              <div _ngcontent-c7="" class="cursor-p">
                                 <?php echo $daterange; ?>
                              </div>
                           </div>
                           <div _ngcontent-c7="" class="searchSummary p-3">
                              <div _ngcontent-c7="" class="row"></div>
                              <div _ngcontent-c7="" class="row">
                                 <div _ngcontent-c7="" class="col-12 searchGuests left">
                                    <?php echo $total_guests; ?> Adults 
                                 </div>
                              </div>
                              <div _ngcontent-c7="" class="row">
                                 <div _ngcontent-c7="" class="col-7 searchRooms left"> 1 Room </div>
                              </div>
                              <div _ngcontent-c7="" class="row marT10">
                               
                              </div>
                           </div>
                           
                           <div _ngcontent-c7="" class="summarySelections">
                              
                           </div>
                        </div>
                        
                     </app-cart>
                  </div>
                  
                  <div _ngcontent-c3="" class="contentContainer col-lg-8 col-xl-9 right pad0">
                     
                     <div _ngcontent-c3="" class="contentContainerCard border">
                        <div _ngcontent-c3="" class="row mar0 cardMainDetails">
                           <div _ngcontent-c3="" class="col-sm-3 imgContainer order-sm-0">
                              <img _ngcontent-c3="" alt="" src="https://dg2kj7uuq7g1w.cloudfront.net/-/media/images/nimbv2/hotel/rooms/hero/standard_double_room_818x610.jpg?w=818"><!---->
                           </div>
                           <div _ngcontent-c3="" class="col-sm-6 cartDetailsContainer padT10 long">
                           <h5 _ngcontent-c3="" class="cardDetailsTitle">Standard</h5>
                           <div _ngcontent-c3="" class="cardDetailsDescription">Play By Admiral Hotel Standard Rooms has the kingsize bed. The room with 1 bathroom with area of 35 m2. There are the 100 rooms. In Play By Admiral Hotel all of the rooms designed beyond the lovely you will experience the best weekends.</div>
                              <span _ngcontent-c3="" class="cardDescMoreDetails"></span>
                           </div>
                           <div _ngcontent-c3="" class="col-sm-3 d-flex flex-wrap cardDetailsPricing">
                              <div _ngcontent-c3="" class="badgeContainer" style="position: absolute; top: 0px; right: 17px;">
                              </div>
                              
                              <p _ngcontent-c3="" class="price notAvailable"><span _ngcontent-c3=""></span> € 449.99 <br>(Tourist tax included) </p>
                           </div>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
         </app-search>
      </app-root>

    <section data-section-id="footer-72097">
      
      <footer id="top-footer">
        <div class="side container">
          <div class="widget col-xs-6 col-md-2">
            <ul class="list-inline">
              <br>
              <br>
              <li>
                <a href="privacy.html">Privacy Policy</a>
              </li>
              <br>
              <br>
              <li>
                <a href="coockie.html">Cookie policy</a>
              </li>
              <br>
              <br>
            </ul>
          </div>
        </div>
      </footer>
      <div class="copy-right" style="text-align: center"> © Playbyadmiral.com. All Rights Reserved
      </div>
      
    </section>
   </body>
</html>