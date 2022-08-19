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
         max-width: 100%; }}

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
         z-index: 3;
         bottom: 0px;
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

         .subNavbar {
            box-shadow: var(--boxShadow);
         background: var(--clearTextColor);
         border-top: none !important; }

         .clearTextColor {
         background: var(--clearTextColor); }
         .cartContainer {
         order: 1;
         font-size: var(--font-size-sm);
         z-index: 2; }

         
         .mainContainer {
            background: var(--mainOverlayBackground);
         min-height: 90vh;
         padding: 15px; }

         .calloutIconList {
         margin: 0 auto;
         padding-left: 0px !important; }
         
         .calloutIconList li {
         font-size: var(--font-size-xl);
         float: left;
         color: var(--cardTextColor);
         display: inline-block;
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

         .cardTitle {
         margin-bottom: 15px;
         border-bottom: 1px solid var(--tableBorderColor);
         padding-bottom: 15px;
         overflow: hidden; }

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
         width: 80%; }

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

         .summaryRoomItem .hricon-adults-one, .extrasRoomItem .hricon-adults-one {
         margin-right: -4px; }
         .summaryRoomItem .hricon-child, .extrasRoomItem .hricon-child {
         margin-left: 2px; }
         .summaryRoomItem i.hricon:last-child, .extrasRoomItem i.hricon:last-child {
         margin-right: 0px !important; }
         .hotelrunner-test {width: 100%; }

      </style>

      <style type="text/css"></style>
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

     .padT10 {
         padding-top: 10px !important; }

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
            max-height: 240px;
         width: 100%;
         max-width: 240px;
         align-self: center;
         min-height: 220px;
         padding:20px 10px; }

         .contentContainer .contentContainerCard .imgContainerGroup {
            background-color: var(--cardContrastBgColor);
            padding: 0px;
         max-width: 300px;
         display: flex; }

         .contentContainer .contentContainerCard .imgContainerGroup img {
            max-width: 300px;
            align-self: center;
         width: 100%;
         max-height: 200px;
         min-height: 200px; }

         @media (max-width: 575.98px) {
         .contentContainer .contentContainerCard .imgContainerGroup {
         max-width: 240px;
         padding: 0px;
         background-color: var(--cardContrastBgColor);
         display: flex; }

         .contentContainer .contentContainerCard .imgContainerGroup img {
            max-width: 240px;
            max-height: 240px;
            align-self: center;
         width: 100%;
         min-height: 240px; } }

         .contentContainer .contentContainerCard .cartDetailsContainer {
         border-right: 1px dashed var(--border-color);
         position: relative; }

         @media (max-width: 575.98px) {
         .contentContainer .contentContainerCard .cartDetailsContainer {
         border-right: 0px; padding: 10px 0; } }

         .contentContainer .contentContainerCard .cartDetailsContainer .bottomArea {
         position: absolute;
         height: auto;
         bottom: 0px;
         max-height: 70px;
         padding: 5px;
         width: 100%;
         margin-bottom: 10px; }

         @media (max-width: 991.98px) {
         .contentContainer .contentContainerCard .cartDetailsContainer .bottomArea {
         width: 60%; } }

         .cardDetailsDescription {
         font-size: 16px;
         margin-bottom: 180px;
         color: #000;
         max-height: 120px;
         overflow: hidden;
         position: relative;
         margin-left: 20px;
         padding: 20px
       }

         @media (max-width: 1199.98px) {
         .cardDetailsDescription {
            max-height: 50px;
         font-size: var(--font-size-xs);
         margin-bottom: 35px; } }

         .cardDescMoreDetails {
            margin-top: -20px;
            float: right;
         font-size: var(--font-size-sm);
         opacity: 0;
         color: var(--cardTextColor);
         margin-bottom: 0px; }

         @media (max-width: 1199.98px) {
         .cardDescMoreDetails {
         font-size: var(--font-size-xs);
         margin-top: -30px; } }

         .cardDescMoreDetails a {
         color: var(--cardTextColor); }

         .long .cardDetailsDescription:before {
         position: absolute;
         content: '';
         height: 100%;
         width: 100%;
         top: 0;
         left: 0;
         background: linear-gradient(rgba(255, 255, 255, 0) 46.22%, var(--cardsBackgroundColor)); }
         
         .long .cardDescMoreDetails {
         opacity: 1; }
        

     .calendarHolderContainer {
         text-align: center;
         font-size: 95px;
         margin-bottom: -5px; }

     .cartContainer .cartContainerInner {
         color: var(--cardTextColor);
         background: #d0cec5;
         box-shadow: var(--boxShadow);
         margin-bottom: 1rem; }

         @media (max-width: 991.98px) {
         .cartContainer .cartContainerInner {
         margin-bottom: 15px; } }

         .cartContainer .cartContainerInner .price {
         font-weight: 500; }

         .cartContainer .cartContainerInner{
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
            position: absolute;
            content: " ";
            width: 5px;
            top: 0px;
            left: 0px;
            background-color: var(--roomSelectionBorderColor, var(--primary));
            height: 100%; }

            .cartContainer .cartContainerInner .summaryRoomItem small {
               font-size: var(--font-size-xs); }

               .cartContainer .cartContainerInner .summaryTotals {
                  position: relative;
                  background: var(--cardContrastBgColor);
                  color: var(--contrastTextColor);
                  padding: 15px;
         margin-top: 40px; }
         
     @supports ((position: -webkit-sticky) or (position: sticky)) {
         .sticky-top {
         position: -webkit-sticky;
         position: sticky;
         top: 0;
         z-index: 1020; } }

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

     .occupancies-event .row {
         margin-right: 5px; }

     .summaryView .summaryTotals .row {
         margin-bottom: 10px; }

     .row {
        display: flex;
        flex-wrap: wrap;
         margin-right: -15px;
         margin-left: -15px; }

         .cartContainer .cartContainerInner .summaryTotals .row {
         margin-bottom: 10px; }

     .mar0 {
         margin: 0px; }


  	.heading-box {
  		margin:0 0 30px;
  	}
   .cursor-p{
      font-weight: bold;
   }
   .cursor-p {
         cursor: pointer; }

         .cursor-pointer {
         cursor: pointer; }

         .cursor-p{
font-size: 18px;
text-align: center;
margin: 10px;
     }


   body.tucky #header_id.tucky #nav-m li a {
    line-height: 100px; }

    @media (max-width: 992px) {

      body.tucky #header_id.tucky #nav-m li a {
        line-height: 33px !important; } }

        body.tucky #header_id.tucky #nav-m li a:hover {
          color: #000!important;
        }

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
  </style>
  
  <section>
      <header id="header_id" class="tucky" style="height: 70px;">
        <div class="side container">
          <div class="first col-sm-4 col-md-2 iss">
            
            <a href="/">
              <div id="header-l">
                <img id="logo" src="logo.png" width="100%">
               
              </div>
            </a>
          </div>
          <div class="two col-sm-8 col-md-10 iss">

            <nav id="nav-m">
              <ul class="nav-ul" style="margin-left: 108px;">
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

      <app-root _nghost-c0="" ng-version="6.1.10" style="background-image:  linear-gradient( rgba(255, 255, 255, 0.8), rgba(0, 0, 0, 0.5) ), url('/index_files/G.jpg')">
         <app-search class="d-block" _nghost-c3="" style="background-image:  linear-gradient( rgba(255, 255, 255, 0.8), rgba(0, 0, 0, 0.5) ), url('/index_files/G.jpg')">
            <div class="container mainContainer marT30">

        <div class="heading-box">
          <h2>Your Stay</h2>
         
          <div class="subtitle"></div>
         
        </div>
               <div class="row mar0">
             
                  <div class="col-lg-4 col-xl-3 cartContainer left pad0">

                     <app-cart class="d-block sticky-top sticky-top-margin" _nghost-c7="">

                        <div class="cartContainerInner border">
                           <div class="calendarHolderContainer">
                              	<p class="dates-title">Dates</p>

                              <div class="cursor-p">
                                 <?php echo $daterange; ?>
                              </div>
                           </div>

                           <div class="searchSummary p-3">
                              <div class="row"></div>
                              <div class="row">

                                 <div class="col-12 searchGuests left">
                                    <?php echo $total_guests; ?> Adults 
                                 </div>
                              </div>

                              <div class="row">
                                 <div class="col-7 searchRooms left" style="margin-left: 83px;"> 1 Room </div>
                              </div>
                           </div>
                           
                           <div class="summarySelections">
                              
                           </div>
                        </div>
                        
                     </app-cart>
                  </div>
                  
                  <div class="contentContainer col-lg-8 col-xl-9 right pad0">
                     
                     <div class="contentContainerCard border">
                        <div class="row mar0 cardMainDetails">
                           <div class="col-sm-3 imgContainer order-sm-0">
                              <img alt="" src="https://dg2kj7uuq7g1w.cloudfront.net/-/media/images/nimbv2/hotel/rooms/hero/standard_double_room_818x610.jpg?w=818">
                           </div>
                           <div class="col-sm-6 cartDetailsContainer padT10 long">
                           <h5 class="cardDetailsTitle">Standard</h5>
                           <div class="cardDetailsDescription">Play By Admiral Hotel Standard Rooms has the kingsize bed. The room with 1 bathroom with area of 35 m2. There are the 100 rooms. In Play By Admiral Hotel all of the rooms designed beyond the lovely you will experience the best weekends.</div>
                              <span class="cardDescMoreDetails"></span>
                           </div>
                           <div class="col-sm-3 d-flex flex-wrap cardDetailsPricing">
                              <div class="badgeContainer" style="position: absolute; top: 0px; right: 17px;">
                              </div>
                              
                              <p class="price notAvailable"><span _ngcontent-c3=""></span> € 449.99 <br>(Tourist tax included) </p>
                           </div>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
         </app-search>
      </app-root>

    <section>
      
      <footer id="end__id">
      
        <div class="side container">
          <div class="col-xs-6 col-md-2">

            <ul class="nav-ul">
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

      <div class="footer__c"> © Playbyadmiral.com. All Rights Reserved
      </div>

    </section>
   </body>
</html>