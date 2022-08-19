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

         .summaryRoomItem .hricon-adults-one, .extrasRoomItem .hricon-adults-one {
         margin-right: -4px; }
         .summaryRoomItem .hricon-child, .extrasRoomItem .hricon-child {
         margin-left: 2px; }
         .summaryRoomItem i.hricon:last-child, .extrasRoomItem i.hricon:last-child {
         margin-right: 0px !important; }

         .hotelrunner-test {
         width: 100%; }
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
        

     .calendarHolderContainer {
         text-align: center;
         font-size: 95px;
         margin-bottom: -5px; }

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
                                 <div _ngcontent-c7="" class="col-7 searchRooms left" style="margin-left: 83px;"> 1 Room </div>
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