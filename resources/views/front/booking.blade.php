<style>
    body {
        background: #fff;
    }

    #menuToggle span {
        background: #b4a43e !important;
    }

    .book-now,
    .book-now a {
        color: #b4a43e !important;
    }

    .header .social-ul li a {
        color: #b4a43e !important;
        padding-right: 20px;
    }



    /*! CSS Used from: https://www.momoinn.com/css/bootstrap.css */
    @media print {

        *,
        *::before,
        *::after {
            text-shadow: none !important;
            box-shadow: none !important;
        }

        a,
        a:visited {
            text-decoration: underline;
        }

        img {
            page-break-inside: avoid;
        }

        p,
        h2 {
            orphans: 3;
            widows: 3;
        }

        h2 {
            page-break-after: avoid;
        }
    }

    *,
    *::before,
    *::after {
        box-sizing: inherit;
    }

    h2,
    h4 {
        margin-top: 0;
        margin-bottom: .5rem;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    ul {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    sup {
        position: relative;
        font-size: 75%;
        line-height: 0;
        vertical-align: baseline;
    }

    sup {
        top: -.5em;
    }

    a {
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }

    a:hover {
        color: #00a651;
        text-decoration: underline;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    a {
        -ms-touch-action: manipulation;
        touch-action: manipulation;
    }

    h2,
    h4 {
        margin-bottom: 0.5rem;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        color: inherit;
    }

    h2 {
        font-size: 2rem;
    }

    h4 {
        font-size: 1.5rem;
    }

    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .col-sm-12,
    .col-md-6,
    .col-md-12 {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    @media (min-width: 576px) {
        .col-sm-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    @media (min-width: 768px) {
        .col-md-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-md-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    /*! CSS Used from: https://www.momoinn.com/css/bootstrap-grid.css */
    *,
    *::before,
    *::after {
        box-sizing: inherit;
    }

    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .col-sm-12,
    .col-md-6,
    .col-md-12 {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    @media (min-width: 576px) {
        .col-sm-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    @media (min-width: 768px) {
        .col-md-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-md-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    /*! CSS Used from: https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css */
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .fadeInUp {
        -webkit-animation-name: fadeInUp;
        animation-name: fadeInUp;
    }

    /*! CSS Used from: https://www.momoinn.com/css/style.css */
    * {
        margin: 0;
        padding: 0;
    }

    *:focus {
        outline: none;
        border: 0px solid transparent;
    }

    img {
        max-width: 100%;
    }

    a,
    a:hover {
        text-decoration: none;
    }

    a {
        color: #000;
    }

    li {
        list-style: none;
    }

    li {
        display: inline-block;
    }

    ul,
    li {
        padding: 0px;
        margin: 0px;
    }

    #mobile-ver {
        display: none;
    }

    .common-div .page-body {
        display: block;
        padding: 50px 0px;
    }

    .room-pg .text-holder-right {
        display: block;
        padding-left: 50px;
        max-height: 400px;
        overflow: hidden;
    }

    .room-pg .text-holder-left {
        display: block;
        padding-right: 50px;
        max-height: 400px;
        overflow: hidden;
    }

    .room-pg .left {
        padding: 10px;
        margin-bottom: 10px;
    }

    .room-pg .left p {
        font-size: 14px;
        line-height: 20px;
        text-align: justify;
    }

    .room-pg h2 {
        font-family: 'Playfair Display', serif;
        color: #cf9437;
        padding-bottom: 8px;
        margin-top: -7px;
    }

    .room-pg h2.price {
        background: #cf9437;
        color: #fff;
        padding: 10px 0px 10px 10px;
        font-size: 20px;
        font-style: italic;
    }

    .room-pg h2.price span {
        font-size: 22px;
    }

    .room-pg ul.tours {
        color: #000;
        padding: 11px 15px 12px 0px;
        margin-top: 6px;
    }

    .room-pg ul.tours li {
        margin-right: 15px;
        font-weight: 500;
        color: #444;
    }

    .room-pg ul.tours li a {
        color: #cf9437;
    }

    .room-pg ul.tours li a:hover {
        color: #00a651;
    }

    .room-pg ul.tours li:hover img {
        animation: bounce 2s;
    }

    .room-pg ul.tours li img {
        width: 30px;
        height: 20px;
        padding-right: 10px;
        vertical-align: top;
    }

    .room-pg ul.tours li img:hover {
        animation: bounce 2s;
    }

    .room-pg ul.amenities li {
        display: inline-block;
        width: 49%;
        background: rgba(239, 232, 221, 0.3);
        padding: 3px 20px;
        margin-bottom: 7px;
    }

    .room-pg ul.amenities li span {
        padding-right: 7px;
    }

    .room-pg h4 {
        font-size: 16px;
        font-weight: 400;
        margin-bottom: 20px;
    }

    .hoverflash:hover {
        overflow: hidden;
        display: block;
        position: relative;
    }

    .hoverflash:after {
        content: "";
        position: absolute;
        top: 0px;
        left: 0px;
        width: 0%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.4);
        -webkit-transition: none;
        -moz-transition: none;
        -ms-transition: none;
        -o-transition: none;
        transition: none;
        overflow: hidden;
    }

    .hoverflash:hover:after {
        width: 100%;
        background-color: rgba(255, 255, 255, 0);
        -webkit-transition: all 1s ease-out;
        -moz-transition: all 1s ease-out;
        -ms-transition: all 1s ease-out;
        -o-transition: all 1s ease-out;
        transition: all 1s ease-out;
        overflow: hidden;
    }

    /*! CSS Used from: https://www.momoinn.com/css/style-responsive.css */
    .image-holder img {
        height: 384px;
        width: 100%;
        object-fit: cover;
    }

    .room-pg h2 {
        font-family: 'Playfair Display', serif;
        color: #cf9437;
        padding-bottom: 8px;
        margin-top: 0px;
    }

    @media (min-width: 980px) and (max-width: 1199px) {
        .room-pg ul.amenities li {
            padding: 3px 3px;
        }

        .room-pg .text-holder-right {
            max-height: 395px;
            padding-top: 0px;
        }
    }

    @media (min-width: 768px) and (max-width: 979px) {
        #mobile-ver {
            display: none;
        }

        #desktop-ver {
            display: block;
        }

        .room-pg .text-holder-right {
            padding-left: 0px;
            max-height: 400px;
            overflow: visible;
            padding-top: 0px;
        }

        .room-pg ul.amenities li {
            padding: 3px 0px;
            vertical-align: top;
            font-size: 14px;
        }

        .room-pg h2.price {
            font-size: 17px;
        }

        .room-pg .image-holder.hoverflash {
            margin-left: -15px;
        }

        .room-pg .text-holder-left {
            padding-right: 0px;
            max-height: 440px;
            padding-right: 15px;
            padding-top: 15px;
        }

        .room-pg .text-holder-right {
            max-height: 430px;
        }

        .room-pg .left {
            margin-bottom: 5px;
        }

        .room-pg .text-holder-right h2 {
            font-size: 25px;
        }

        .room-pg .text-holder-left {
            padding-top: 3px;
        }

        .room-pg .text-holder-left h2 {
            font-size: 25px;
        }
    }

    @media only screen and (min-width: 480px) and (max-width: 767px) {
        #mobile-ver {
            display: block;
        }

        #desktop-ver {
            display: none;
        }

        .room-pg .text-holder-right {
            padding-left: 15px;
            max-height: 400px;
            overflow: visible;
            padding-top: 20px;
            padding-right: 15px;
        }

        .room-pg ul.amenities li {
            padding: 3px 0px;
            vertical-align: top;
            font-size: 14px;
        }

        .room-pg h2.price {
            font-size: 17px;
        }

        .room-pg .image-holder.hoverflash {
            margin-left: -15px;
        }

        .room-pg .text-holder-left {
            padding-right: 0px;
            max-height: 380px;
            padding-left: 0px;
            padding-top: 15px;
        }

        .room-pg .left {
            margin-bottom: 20px;
        }
    }

    @media only screen and (max-width: 479px) {
        #mobile-ver {
            display: block;
        }

        #desktop-ver {
            display: none;
        }

        .room-pg h2 {
            font-size: 25px;
        }

        .room-pg .text-holder-right {
            padding-left: 15px;
            max-height: 500px;
            overflow: visible;
            padding-top: 20px;
            padding-right: 15px;
        }

        .room-pg ul.amenities li {
            padding: 3px 0px;
            vertical-align: top;
            font-size: 14px;
        }

        .room-pg h2.price {
            font-size: 17px;
        }

        .room-pg .image-holder.hoverflash {
            margin: 0 auto;
        }

        .room-pg .text-holder-left {
            padding-right: 15px;
            max-height: 460px;
            padding-left: 15px;
            padding-top: 15px;
        }

        .room-pg .left {
            margin-bottom: 20px;
        }
    }

    @media only screen and (min-width: 300px) and (max-width: 370px) {
        .room-pg .text-holder-right {
            padding-left: 15px;
            max-height: 470px;
            overflow: visible;
            padding-top: 20px;
            padding-right: 15px;
        }

        .room-pg .text-holder-left {
            padding-right: 15px;
            max-height: 470px;
            padding-left: 15px;
            padding-top: 15px;
        }

        .room-pg h2.price {
            font-size: 16px;
        }

        .room-pg ul.amenities li {
            font-size: 12px;
        }

        .room-pg ul.tours li {
            margin-right: 10px;
        }

        .room-pg h2 {
            font-size: 20px;
        }
    }

    /*! CSS Used keyframes */
    @-webkit-keyframes fadeInUp {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    @-webkit-keyframes bounce {

        0%,
        20%,
        53%,
        80%,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
        }

        40%,
        43% {
            -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0);
        }

        40%,
        43%,
        70% {
            -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            animation-timing-function: cubic-bezier(.755, .05, .855, .06);
        }

        70% {
            -webkit-transform: translate3d(0, -15px, 0);
            transform: translate3d(0, -15px, 0);
        }

        90% {
            -webkit-transform: translate3d(0, -4px, 0);
            transform: translate3d(0, -4px, 0)
        }
    }

    @keyframes bounce {

        0%,
        20%,
        53%,
        80%,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
        }

        40%,
        43% {
            -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0);
        }

        40%,
        43%,
        70% {
            -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            animation-timing-function: cubic-bezier(.755, .05, .855, .06);
        }

        70% {
            -webkit-transform: translate3d(0, -15px, 0);
            transform: translate3d(0, -15px, 0);
        }

        90% {
            -webkit-transform: translate3d(0, -4px, 0);
            transform: translate3d(0, -4px, 0)
        }
    }

    @keyframes bounce {

        0%,
        20%,
        60%,
        100% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        40% {
            -webkit-transform: translateY(-10px);
            transform: translateY(-10px);
        }

        80% {
            -webkit-transform: translateY(-5px);
            transform: translateY(-5px)
        }
    }

    /*! CSS Used fontfaces */
    @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgFE_.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTPYgFE_.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTLYgFE_.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTzYgA.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgFE_.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTPYgFE_.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTLYgFE_.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTzYgA.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /*! CSS Used from: https://www.momoinn.com/css/bootstrap.css */
    @media print {

        *,
        *::before,
        *::after {
            text-shadow: none !important;
            box-shadow: none !important;
        }

        h2 {
            orphans: 3;
            widows: 3;
        }

        h2 {
            page-break-after: avoid;
        }
    }

    *,
    *::before,
    *::after {
        box-sizing: inherit;
    }

    h1,
    h2 {
        margin-top: 0;
        margin-bottom: .5rem;
    }

    ul {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    button,
    input,
    label {
        -ms-touch-action: manipulation;
        touch-action: manipulation;
    }

    label {
        display: inline-block;
        margin-bottom: .5rem;
    }

    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color;
    }

    input,
    button {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    button,
    input {
        overflow: visible;
    }

    button {
        text-transform: none;
    }

    button,
    [type="submit"] {
        -webkit-appearance: button;
    }

    button::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
        padding: 0;
        border-style: none;
    }

    h1,
    h2 {
        margin-bottom: 0.5rem;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        color: inherit;
    }

    h1 {
        font-size: 2.5rem;
    }

    h2 {
        font-size: 2rem;
    }

    .container {
        margin-right: auto;
        margin-left: auto;
        padding-right: 15px;
        padding-left: 15px;
        width: 100%;
    }

    @media (min-width: 576px) {
        .container {
            max-width: 540px;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }
    }

    @media (min-width: 992px) {
        .container {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
    }

    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .col-md-4,
    .col-md-6,
    .col-md-8,
    .col-md-12 {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    @media (min-width: 768px) {
        .col-md-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .col-md-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-md-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }

        .col-md-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    .form-control {
        display: block;
        width: 100%;
        padding: 0.5rem 0.75rem;
        font-size: 1rem;
        line-height: 1.25;
        color: #fff;
        background-color: transparent;
        background-image: none;
        background-clip: padding-box;
        border: 1px solid #ccc;
        border-radius: 0px;
        transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    }

    .form-control::-ms-expand {
        background-color: transparent;
        border: 0;
    }

    .form-control:focus {
        color: #b9945b !important;
        background-color: transparent;
        border: 1px solid #00a651 !important;
        outline: none;
    }

    .form-control:hover {
        color: #b9945b !important;
        background-color: transparent;
        border: 1px solid #00a651 !important;
        outline: none;
    }

    .form-control::-webkit-input-placeholder {
        color: #868e96;
        opacity: 1;
    }

    .form-control:-ms-input-placeholder {
        color: #868e96;
        opacity: 1;
    }

    .form-control::placeholder {
        color: #868e96;
        opacity: 1;
    }

    .form-control:disabled {
        background-color: #e9ecef;
        opacity: 1;
    }

    /*! CSS Used from: https://www.momoinn.com/css/bootstrap-grid.css */
    *,
    *::before,
    *::after {
        box-sizing: inherit;
    }

    .container {
        margin-right: auto;
        margin-left: auto;
        padding-right: 15px;
        padding-left: 15px;
        width: 100%;
    }

    @media (min-width: 576px) {
        .container {
            max-width: 540px;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }
    }

    @media (min-width: 992px) {
        .container {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
    }

    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .col-md-4,
    .col-md-6,
    .col-md-8,
    .col-md-12 {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    @media (min-width: 768px) {
        .col-md-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .col-md-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-md-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }

        .col-md-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    /*! CSS Used from: https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css */
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .zoomIn {
        -webkit-animation-name: zoomIn;
        animation-name: zoomIn;
    }

    /*! CSS Used from: https://www.momoinn.com/css/style.css */
    * {
        margin: 0;
        padding: 0;
    }

    *:focus {
        outline: none;
        border: 0px solid transparent;
    }

    li {
        list-style: none;
    }

    li {
        display: inline-block;
    }

    ul,
    li {
        padding: 0px;
        margin: 0px;
    }

    input::-webkit-input-placeholder {
        color: #fff !important;
    }

    input:-moz-placeholder {
        color: #fff !important;
    }

    input::-moz-placeholder {
        color: #fff !important;
    }

    input:-ms-input-placeholder {
        color: #fff !important;
    }

    .common-div .banner-inner {
        display: block;
        text-align: center;
        background-image: url('https://www.momoinn.com/images/room-banner.jpg');
        background-size: cover;
        height: 250px;
    }

    .common-div .contact-banner {
        background-image: url('https://www.momoinn.com/images/contace-banner.jpg');
    }

    .common-div .banner-inner:after {
        content: '';
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 250px;
        background: rgba(0, 0, 0, .5);
    }

    .common-div .banner-inner h1 {
        font-family: 'Playfair Display', serif;
        position: relative;
        color: #fff;
        padding: 50px 0px;
        z-index: 11;
        font-style: italic;
        font-size: 50px;
    }

    .common-div .page-body {
        display: block;
        padding: 50px 0px;
    }

    .common .button {
        display: block;
        text-align: left;
        margin-top: 30px;
        margin-left: 0px;
    }

    .common .button button.readmore {
        display: inline-block;
        width: 150px;
        height: 50px;
        background: #cf9437;
        text-align: center;
        padding: 10px 0px;
        color: #fff;
        transition: .8s;
        outline: none;
        border: 0px solid;
        border-top: 1px solid transparent;
        border-bottom: 1px solid transparent;
    }

    .common .button button.readmore:after {
        position: relative;
        content: ' ';
        bottom: 35px;
        right: -110px;
        display: block;
        width: 50px;
        height: 50px;
        -webkit-transform: skew(-10deg);
        -moz-transform: skew(20deg);
        -o-transform: skew(20deg);
        background: #cf9437;
        z-index: -1;
        transition: .8s;
    }

    .common .button button.readmore:hover {
        border-bottom: 1px solid #cf9437;
        border-top: 1px solid #cf9437;
        background: transparent;
        color: #000;
        transition: .8s;
    }

    .common .button button.readmore:hover:after {
        background: #fff;
        bottom: 34px;
        right: 50px;
        -webkit-transform: skew(0deg);
        -moz-transform: skew(0deg);
        -o-transform: skew(0deg);
        width: 150px;
    }

    .contact-pg h2 {
        display: inline-block;
        font-family: 'Playfair Display', serif;
        color: #cf9437;
        padding-bottom: 40px;
        border-bottom: 1px solid #e3d4bd;
        margin-bottom: 40px;
    }

    .contact-pg h2.green {
        color: #0c8e4c;
    }

    .contact-pg .contact-form {
        margin-top: 0px;
    }

    .contact-pg input.form-control {
        margin-bottom: 20px;
        color: #000;
    }

    .contact-pg .left {
        padding: 50px;
        padding-bottom: 0px;
        padding-top: 0px;
    }

    .contact-pg .right {
        border: 5px solid #cee8db;
        padding: 30px;
        text-align: center;
    }

    .contact-pg .right h2 {
        padding-bottom: 30px;
        border-bottom: 1px solid #e3d4bd;
        margin-bottom: 30px;
    }

    .contact-pg .right ul.address {
        padding-bottom: 24px;
    }

    .contact-pg .right ul.address li.heading {
        display: block;
        color: #003e55;
    }

    .contact-pg .right ul.address li.details {
        display: block;
    }

    .contact-pg .form-control:hover {
        border: 1px solid #00a651;
    }

    .contact-pg input.form-control.message {
        height: 140px;
    }

    .contact-pg iframe {
        margin-bottom: -5px;
    }

    /*! CSS Used from: https://www.momoinn.com/css/style-responsive.css */
    @media (min-width: 768px) and (max-width: 979px) {
        .common-div .banner-inner h1 {
            font-size: 30px;
            padding: 60px 0px;
        }

        .common-div .banner-inner {
            height: 150px;
        }

        .common-div .banner-inner:after {
            height: 150px;
        }
    }

    @media only screen and (min-width: 480px) and (max-width: 767px) {
        .common-div .banner-inner h1 {
            font-size: 30px;
            padding: 90px 0px;
        }

        .common-div .banner-inner {
            height: 150px;
        }

        .common-div .banner-inner:after {
            height: 150px;
        }
    }

    @media only screen and (max-width: 479px) {
        .common-div .banner-inner h1 {
            font-size: 30px;
            padding: 90px 0px;
        }

        .common-div .banner-inner {
            height: 150px;
        }

        .common-div .banner-inner:after {
            height: 150px;
        }

        .common .button {
            margin-bottom: 30px;
        }
    }

    /*! CSS Used from: https://www.momoinn.com/css/magnific-popup.css */
    button::-moz-focus-inner {
        padding: 0;
        border: 0;
    }

    /*! CSS Used keyframes */
    @-webkit-keyframes zoomIn {
        0% {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3);
        }

        50% {
            opacity: 1
        }
    }

    @keyframes zoomIn {
        0% {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3);
        }

        50% {
            opacity: 1
        }
    }

    /*! CSS Used fontfaces */
    @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgFE_.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

</style>

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .top-menu ul li a {
        color: #b4a43e !important;
    }

</style>

@extends('layouts.front')
@section('content')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session()->has('failed'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session()->get('failed') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <div class="custom-modal-popup" id="viewRoomSelectModal">
        <div class="view-room"> Your selected room </div>
        <div class="select-room-show-list" id="viewRoomData">
        </div>
        <div class="close-modal" onclick="closeModal()">Add more room </div>
        <div class="pay-goto-now" onclick="nextPaymentProcess()">
            Confirm Book
        </div>
    </div>

    <div class="custom-modal-popup-order" id="viewOrderSuccess">
        <div class="view-room"> Order Successful! </div>
        <div class="select-order">
            <div class="order-info">
                <div class="label"> Customer Name </div>
                <div class="dot"> : </div>
                <div class="value" id="showName"> </div>
            </div>
            <div class="order-info">
                <div class="label"> Customer Phone </div>
                <div class="dot"> : </div>
                <div class="value" id="showPhone"> </div>
            </div>
            <div class="order-info">
                <div class="label"> Customer Email </div>
                <div class="dot"> : </div>
                <div class="value" id="showEmail"></div>
            </div>
            <div class="order-info">
                <div class="label"> Payment Type</div>
                <div class="dot"> : </div>
                <div class="value" id="showPayment"> </div>
            </div>
            <div class="order-info">
                <div class="label"> Stay Date </div>
                <div class="dot"> : </div>
                <div class="value" id="showStayDate"> </div>
            </div>
            <div class="order-info">
                <div class="label"> Order Amount </div>
                <div class="dot"> : </div>
                <div class="value" id="showTotalAmount"> . </div>
            </div>
        </div>
        <div class="pay-goto-now" onclick="reloadPage()">
            Finish
        </div>
    </div>

    <div class="booking-page">

        <form method="POST">
            <input type="text" value="" id="currentmenu" hidden />
            <input type="text" value="" id="maxActiveFormNumber" hidden />
            <div class="booking-menu">
                <div class="menu-item" onclick="selectArrowMenu(1)">
                    <div class="selected-tittle"> Adults & Children </div>
                    <div class="selected-value" id="viewSelectedAdultChild"> SELECT

                    </div>
                    <div class="selected-arrow">
                        <span class="arrow-1 down-1" id="arrow1"></span>
                    </div>
                </div>
                <div class="menu-item" onclick="selectArrowMenu(2)">
                    <div class="selected-tittle"> Dates of stay </div>
                    <div class="selected-value" id="viewSelectedDate"> SELECT </div>
                    <div class="selected-arrow">
                        <span class="arrow-1 down-1" id="arrow2"></span>
                    </div>
                </div>
                <div class="menu-item" onclick="selectArrowMenu(3)">
                    <div class="selected-tittle"> Accomadations </div>
                    <div class="selected-value" id="viewSelectedRoom"> SELECT </div>
                    <div class="selected-arrow">
                        <span class="arrow-1 down-1" id="arrow3"></span>
                    </div>
                </div>
                <div class="menu-item" onclick="selectArrowMenu(4)">
                    <div class="selected-tittle"> Total </div>
                    <div class="selected-value" id="viewTotalAmount"> BDT 000 </div>
                    <div class="all-room"> ALL ROOMS BDT </div>
                    <div class="selected-arrow">
                        <span class="arrow-1 down-1" id="arrow4"></span>
                    </div>
                </div>
            </div>

            <div class="container input-wrapper">
                <div class="row" id="form1">
                    <div class="col-md-2 onlyDesktop"></div>
                    <div class="col-md-8 col-12 width100">
                        <div class="room-title"> Guest & Rooms </div>
                        <div class="propperty_wrapper">
                            <div class="guest-room">
                                <div class="remove"> </div>
                                <select name="adult" id="selectedAdult1" class="common-select">
                                    <option value="1"> 1 Adult</option>
                                    <option value="2"> 2 Adults</option>
                                    <option value="3"> 3 Adults</option>
                                </select>
                                <select name="child" id="selectedChild1" class="common-select">
                                    <option value="0"> 0 Children
                                    </option>
                                    <option value="1"> 1 Child</option>
                                    <option value="2"> 2 Child</option>
                                    <option value="3"> 3 Child</option>
                                </select>
                            </div>
                        </div>
                        {{-- <div class="col-8 add-a-room add_property_button">
                            + Add more
                        </div> --}}


                        <div class="discount-section">
                            <div class="app-code" onclick="couponBoxOpen()">
                                <div class="app-text"> <span id="successCoupon"> App </span> </div> <span
                                    class="arrow-2 down-2"></span>
                            </div>
                            <div class="coupon" id="couponInputBox">
                                <select name="discount-option" id="discountOption">
                                    <option value=""> Discount Code </option>
                                </select>
                                <input type="text" name="" id="discountCode" />
                                <div class="coupon-button">
                                    <div onclick="couponBoxOpen()" class="cancel"> Cancel </div>
                                    <div class="add-btn" onclick="setCoupon()"> Add </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-coupon" onClick="updateRoom(false)"> Next </div>
                    </div>
                </div>

                <div class="date-calender" id="form2">
                    <div class="calender-title"> Select Date (Start Date - End Date)</div>
                    <div class="startdate-endate">
                        <input type="text" placeholder="Start date" id="selectedStartDate" />
                        <input type="text" placeholder="End date" id="selectedEndDate" />
                    </div>
                    <div class="submit-coupon" onClick="nextFormRoom()"> Next </div>
                </div>


                <div class="room-list-view container" id="form3">
                    @foreach ($roomssuites as $key => $room)
                        <div class="selected-room-list">
                            <div class="list-part">
                                <div class="photo-view">
                                    <img height="363"
                                        src="{{ !empty($room->feature_image) ? asset($room->feature_image) : asset('uploads/default/room-meeting-facilities-restaurants.jpg') }}" />
                                </div>
                                <div class="room-description">
                                    <div class="room-title">
                                        {{ $room->name }}
                                    </div>
                                    <div class="room-item">
                                        <div class="people">
                                            <div class="icon-user"> <strong> Property : </strong> <span>
                                                    {{ $room->property_list }} </span> </div>
                                        </div>

                                    </div>

                                    <div class="room-info">
                                        {{ $room->description }}
                                    </div>
                                    <div class="room-link">
                                        <a href="#"> View room details & enhancement</a>
                                    </div>
                                </div>

                                <div class="sales-price-section">
                                    <div class="sales-section">
                                        <div class="sales-name"> <input type="radio" selected value="online" /> Sales:
                                            Online
                                            special
                                            </br>
                                        </div>
                                    </div>
                                    <div class="price-section">
                                        <div class="discount-price"> {{ $room->rate_in_usd }} USD</div>
                                        <div class="current-price"> BDT {{ $room->rate_in_bdt }} </div>
                                    </div>
                                </div>
                            </div>
                            <div class="book-part">
                                <div class="price-button">
                                    <del>Bdt 0 </del>
                                    <br />
                                    <p> BDT {{ $room->rate_in_bdt }} </p>
                                </div>
                                <div class="book-submit-button" id="bookButton{{ $key }}"
                                    onclick='nextForPayment("{{ $room->id }}" , "{{ $room->name }}", "{{ $room->rate_in_bdt }}", "{{ $room->rate_in_usd }}")'>
                                    Book
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>





            <div class="payment-page" id="form4">
                <div class="container">
                    <div class="payment-area">
                        <div class="first-part">
                            <div class="title"> Your Reservation </div>
                            <div class="sale">
                                <span style="color:red"> Sale: </span> Online Special <br />
                                </br />
                            </div>

                            <div class="room-title-cart">
                                <table class="table table-border table-hovered">
                                    <thead>
                                        <tr>
                                            <th> Particulars </th>
                                            <th> No#Room </th>
                                            <th> Unit Price</th>
                                            <th> Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody id="cartBody">

                                    </tbody>
                                    <tfoot id="cartFoot">

                                    </tfoot>
                                </table>
                            </div>

                            <div id="roomAndPrice"> </div>

                            <div class="border-room-top"> </div>
                            <div class="special-request">
                                <p> Specail request </p>
                                <p>Note: These are not guraunteed </p>
                                <div class="payment-form-group">
                                    <p> Arrival time: </p>
                                    <input type="text" id="arrivalTime" name="arrivalTime" class="payment-input" />
                                </div>
                                <div class="payment-form-group">
                                    <p> Additional Comments: </p>
                                    <input type="text" id="additionalComment" name="additionalComment"
                                        class="payment-input" />
                                </div>
                            </div>
                        </div>
                        <div class="second-part">
                            <div class="title"> Guest information </div>
                            <a href="#" style="color:#f6d83e"> Been here before ? click here </a>

                            <div class="pay-input-common top-guest-gap">
                                <select name="payment-type" id="payment_type">
                                    <option value=""> Select Payment Type</option>
                                    <option value="SSL"> Online Payment</option>
                                    <option value="COD"> Cash On Delivery</option>
                                </select>
                            </div>
                            <div class="pay-input-common ">
                                <input type="text" id="name" name="name" placeholder="Full name" required />
                                <span> * </span>
                            </div>

                            <div class="pay-input-common">
                                <input type="email" id="email" name="email" placeholder="Email address" />
                                <span> * </span>
                                <div id="emailStatus"></div>
                            </div>
                            <div class="pay-input-common">
                                <input type="text" id="phone" name="phone" placeholder="Phone number" required />
                                <span> * </span>
                                <div id="phoneStatus"></div>
                            </div>
                            <div class="pay-input-common">
                                <input type="text" id="address" name="address" placeholder="Address" required />
                            </div>
                            <div class="pay-input-common">
                                <input type="text" id="city" name="city" placeholder="City" required />
                            </div>
                            <div class="pay-input-common">
                                <select name="country">
                                    <option value="Bangladesh"> Bangladesh</option>
                                </select>
                            </div>
                            <div class="pay-input-common">
                                <input type="text" id="postalCode" name="postalCode" placeholder="Postal Code" required />
                            </div>

                        </div>
                        <div class="third-part">
                            <div class="title"> Payment Method</div>
                            <div class="payment-card-image">
                                <img src={{ asset('/uploads/default/amex.jpg') }} alt="" />
                                <img src={{ asset('/uploads/default/mastercard.jpg') }} alt="" />
                                <img src={{ asset('/uploads/default/visa.jpg') }} alt="" />
                            </div>
                            <div class="payment-card-image">
                                <img src={{ asset('/uploads/default/bkash_logo_0.jpg') }} alt="" />
                                <img src={{ asset('/uploads/default/rocket.png') }} alt="" />
                                <img src={{ asset('/uploads/default/nagad.png') }} alt="" />
                            </div>

                            <div class="agreement">
                                <p> <input type="checkbox" id="checkAgree" name="checkAgree"> I have read agree to the <a
                                        href="" style="color:#f6d83e">rerms of condition </a> and <a href=""
                                        style="color:#f6d83e">
                                        privacy policy </a></p>
                            </div>
                            <div class="btn btn-primary btn-lg btn-block book-now-button" id="bookNowSubmitBtn"
                                onclick="codBook()">
                                Book Now
                            </div>
                            <button class="btn btn-primary btn-lg btn-block book-now-button" id="sslczPayBtn" token=""
                                postdata="" order="order" endpoint="{{ url('/pay-via-ajax') }}" type="submit"> Pay Now
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


    </div>
    </div>




    <script type="text/javascript">
        var numberOfRoom = 1;
        var isOpenCouponBox = 0;
        var selectedAdult = [];
        var selectedChild = [];
        var selectedRoom = [];
        var selectedRoomQuantity = [];
        var selectedRoomName = [];
        var selectedBDT = [];
        var selectedUSD = [];
        var selectedDiscount = 0;
        var selectedTax = parseInt("{{ $taxs->tax }}");
        var selectedVat = parseInt("{{ $taxs->vat }}");
        var selectedServicesCharg = parseInt("{{ $taxs->services_charge }}");
        var selectedCurrency = '(BDT)';
        var totalAmountFinal = 0;

        $(document).ready(function() {
            $("#form2").hide();
            $("#form3").hide();
            $("#form4").hide();
            var x = 1;
            var maxField = 20;
            var addButton = $('.add_property_button');
            var wrapper = $('.propperty_wrapper');
            $(addButton).click(function() {
                if (x < maxField) {
                    x++;
                    numberOfRoom = x;
                    var fieldHTML =
                        '<div class="guest-room"><div class="remove"> <span> X </span>Remove </div><select name="adult" id="selectedAdult' +
                        numberOfRoom +
                        '" class="common-select" onchange="updateRoom(true);"><option value="1"> 1 Adult</option><option value="2"> 2 Adults</option><option value="3"> 3 Adults</option><option value="4"> 4 Adults</option></select><select id="selectedChild' +
                        numberOfRoom +
                        '" name="child"  class="common-select"  onchange="updateRoom(true);"><option value="0"> 0 Children</option><option value="1"> 1 Child</option><option value="2"> 2 Child</option></select></div>';

                    $(wrapper).append(fieldHTML);
                    updateRoom(true);
                }
            });
            $(wrapper).on('click', '.remove', function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
                numberOfRoom = x;
                updateRoom(true);
            });

            $("#arrow1").show();
            $("#couponInputBox").hide();
            /* guest & room value */
            $('select').on('change', function() {
                updateRoom(true);
            })

            $("#sslczPayBtn").hide();
            $("#bookNowSubmitBtn").hide();
        });

        function selectArrowMenu(id) {
            $(document).ready(function() {
                $("#arrow1").hide();
                $("#arrow2").hide();
                $("#arrow3").hide();
                $("#arrow4").hide();
                $("#arrow" + id).show();
                $("#currentmenu").val(id);
                if ($("#maxActiveFormNumber").val() >= id) {
                    if(id == 4){
                        var startDate = $("#selectedStartDate").val();
                        var endDate = $("#selectedEndDate").val();
                        const date1 = new Date(startDate);
                        const date2 = new Date(endDate);
                        if(startDate && endDate && date2 > date1){
                            formPage(id);
                        }
                    }
                    else{
                        formPage(id);
                    }                   
                }
            });
        }

        function formPage(id) {
            $(document).ready(function() {
                $("#form1").hide();
                $("#form2").hide();
                $("#form3").hide();
                $("#form4").hide();
                $("#form" + id).show();
                if (id > $("#maxActiveFormNumber").val()) {
                    $("#maxActiveFormNumber").val(id);
                }
            });
        }

        function couponBoxOpen() {
            if (isOpenCouponBox) {
                $("#couponInputBox").hide();
                isOpenCouponBox = 0;
            } else {
                $("#couponInputBox").show();
                isOpenCouponBox = 1;
            }
        }

        function setCoupon() {
            var getDiscountCode = $("#discountCode").val();
            if (getDiscountCode) {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('checkcoupon') }}",
                    data: {
                        code: getDiscountCode
                    },
                    success: function(data) {
                        if (data.amount) {
                            selectedDiscount = parseInt(data.amount);
                            $("#successCoupon").html("<font color='green'>Coupon success added </font>");
                        } else {
                            alert(getDiscountCode + " coupon code is not valid");
                            $("#successCoupon").html("App");
                            selectedDiscount = 0;
                        }
                        $("#couponInputBox").hide();
                    }
                });
            }
        }

        function updateRoom(isOnlyArrow) {
            var viewAdultChild = "";
            var adults = $('[name=adult]').map(function() {
                return parseInt(this.value);
            }).get();
            var childs = $('[name=child]').map(function() {
                return parseInt(this.value);
            }).get();
            for (i = 0; i < adults.length; i++) {
                var isLastChild = " , ";
                if (parseInt(i + 1) == adults.length) {
                    isLastChild = "";
                }
                viewAdultChild = viewAdultChild + adults[i] + "/" + childs[i] + isLastChild;
            }
            selectedAdult = adults;
            selectedChild = childs;
            $("#viewSelectedAdultChild").html(viewAdultChild);
            var discountOption = $("#discountOption").val();
            var discountCode = $("#discountCode").val();
            if (viewAdultChild.length) {
                if (!isOnlyArrow) {
                    formPage(2);
                    selectArrowMenu(2);

                }
            }

        }


        function nextFormRoom() {
            var startDate = $("#selectedStartDate").val();
            var endDate = $("#selectedEndDate").val();
            const date1 = new Date(startDate);
            const date2 = new Date(endDate);
            if (startDate && endDate && date2 > date1) {
                //$("#viewSelectedDate").html(startDate + " &nbsp; to " + endDate);
                formPage(3);
                selectArrowMenu(3);
                selectQuantity();
            }

        }

        function nextForPayment(room_id, room_name, bdt, usd) {
            $("#viewRoomSelectModal").show();
            if (!selectedRoom.includes(room_id)) {
                selectedRoomName.push(room_name);
                selectedRoom.push(room_id);
                selectedBDT.push(bdt ? parseInt(bdt) : 0);
                selectedUSD.push(usd ? usd : 0);
                var indexPos = selectedRoom.findIndex(id => id == room_id);
                $("#bookButton" + indexPos).addClass("already-booked");
            } else {
                var indexPos = selectedRoom.findIndex(id => id == room_id);
                $("#bookButton" + indexPos).removeClass("already-booked");
                selectedRoom.splice(indexPos, 1);
                selectedRoomName.splice(indexPos, 1);
                selectedBDT.splice(indexPos, 1);
                selectedUSD.splice(indexPos, 1);
            }
            $("#viewRoomData").empty();
            for (i = 0; i < selectedRoom.length; i++) {
                $("#viewRoomData").append("<div class='room-name-price'><span>" + (parseInt(i + 1)) + "</span> <b> " +
                    selectedRoomName[i] + " </B> &nbsp;  " + selectedBDT[i] + " ৳  </div>");

                var indexPos = selectedRoom.findIndex(id => id == room_id);
                $("#bookButton" + indexPos).addClass("already-booked");

            }

            $("#viewSelectedRoom").html(selectedRoomName.join(","));
        }

        function nextPaymentProcess() {
            if (selectedRoom.length) {
                formPage(4);
                selectArrowMenu(4);
                $("#viewRoomSelectModal").hide();
                $("#cartBody").empty();
                for (i = 0; i < selectedRoom.length; i++) {
                    $("#cartBody").append('<tr><td>' + selectedRoomName[i] +
                        ' </td><td><div class="room-name"><select name="roomQuantity" onchange="selectQuantity()"><option value="1"> 1 </option><option value="2"> 2 </option><option value="3"> 3 </option><option value="4"> 4 </option><option value="5"> 5 </option></select></div> </td><td>' +
                        selectedBDT[i] + ' </td><td id="quantityTotalPrice' + i + '">' + selectedBDT[i] + '</td></tr>')

                }
                var finalTotal = 0;
                for (i = 0; i < selectedBDT.length; i++) {
                    finalTotal = finalTotal + parseInt(selectedBDT[i]);
                }
                var subtotalprice = finalTotal;
                const date1 = new Date($("#selectedStartDate").val());
                const date2 = new Date($("#selectedEndDate").val());
                const diffTime = Math.abs(date2 - date1);
                var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                if (diffDays == 0) {
                    diffDays = 1;
                }
                var numberOfDayWithTotal = diffDays * finalTotal;
                finalTotal = diffDays * finalTotal;
                var totalDiscountAmount = Math.ceil((selectedDiscount * finalTotal) / 100);
                finalTotal = finalTotal - totalDiscountAmount;
                var processAmount = finalTotal;
                var totalCharge = Math.ceil((selectedServicesCharg * finalTotal) / 100);
                processAmount = parseInt(finalTotal) + parseInt(totalCharge);
                var totalTax = Math.ceil((selectedTax * processAmount) / 100);
                var totalVat = Math.ceil((selectedVat * processAmount) / 100);
                processAmount = processAmount + totalTax + totalVat;
                totalAmountFinal = processAmount;
                $("#finalTotal").html('BDT ' + finalTotal);
                $("#viewTotalAmount").html('BDT ' + finalTotal);
                $("#cartFoot").empty();
                $("#cartFoot").html('<tr><td colspan="3" > Subtotal </td><td id="subtotalprice"> ' + subtotalprice +
                    '</td></tr>' + '<tr><td colspan="3" > No. of day stay * Subtotal  <br/>' + diffDays + ' * ' +
                    subtotalprice + ' </td><td id="subtotalpriceWithDay"> ' + +numberOfDayWithTotal + '</td></tr>' +
                    '<tr><td colspan="3"> Discount (' + selectedDiscount + '%) </td><td> ' + totalDiscountAmount +
                    '  </td></tr>' + '<tr><td colspan="3"> Services Charge (' + selectedServicesCharg +
                    '%) </td><td> ' + totalCharge + ' </td></tr>' + '<tr><td colspan="3"> VAT(' + selectedVat +
                    '%) </td><td> ' + totalVat + '</td></tr><tr><td colspan="3"> TAX(' + selectedTax + '%) </td><td> ' +
                    totalTax + ' </td></tr><tr><td colspan="3"><b> Total ' + selectedCurrency +
                    '</b> </td><td id="allTotalPrice"> ' + processAmount + '</td></tr>');

                $("#finalTotal").html('BDT ' + processAmount);
                $("#viewTotalAmount").html('BDT ' + processAmount);
            } else {
                alert("Select at least one room");
            }
        }

        function closeModal() {
            $("#viewRoomSelectModal").hide();
        }


        function selectQuantity() {
            var roomQuantity = $('[name=roomQuantity]').map(function() {
                return parseInt(this.value);
            }).get();
            selectedRoomQuantity = roomQuantity;
            for (quantity = 0; quantity < roomQuantity.length; quantity++) {
                $("#quantityTotalPrice" + quantity).html(parseInt(selectedBDT[quantity]) * parseInt(roomQuantity[
                quantity]));
            }
            var finalTotal = 0;
            for (i = 0; i < selectedBDT.length; i++) {
                finalTotal = finalTotal + parseInt(selectedBDT[i]) * parseInt(selectedRoomQuantity[i]);
            }
            var subtotalprice = finalTotal;
            const date1 = new Date($("#selectedStartDate").val());
            const date2 = new Date($("#selectedEndDate").val());
            const diffTime = Math.abs(date2 - date1);
            var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
            if (diffDays == 0) {
                diffDays = 1;
            }
            var numberOfDayWithTotal = diffDays * finalTotal;
            finalTotal = diffDays * finalTotal;
            var totalDiscountAmount = Math.ceil((selectedDiscount * finalTotal) / 100);
            finalTotal = finalTotal - totalDiscountAmount;
            var processAmount = finalTotal;
            var totalCharge = Math.ceil((selectedServicesCharg * finalTotal) / 100);
            processAmount = parseInt(finalTotal) + parseInt(totalCharge);
            var totalTax = Math.ceil((selectedTax * processAmount) / 100);
            var totalVat = Math.ceil((selectedVat * processAmount) / 100);
            processAmount = processAmount + totalTax + totalVat;
            totalAmountFinal = processAmount;
            $("#finalTotal").html('BDT ' + processAmount);
            $("#viewTotalAmount").html('BDT ' + processAmount);
            $("#cartFoot").empty();
            $("#cartFoot").html('<tr><td colspan="3" > Subtotal </td><td id="subtotalprice"> ' + subtotalprice +
                '</td></tr>' + '<tr><td colspan="3" > No. of day stay * Subtotal  <br/>' + diffDays + ' * ' +
                subtotalprice + ' </td><td id="subtotalpriceWithDay"> ' + +numberOfDayWithTotal + '</td></tr>' +
                '<tr><td colspan="3"> Discount (' + selectedDiscount + '%) </td><td> ' + totalDiscountAmount +
                '  </td></tr>' + '<tr><td colspan="3"> Services Charge (' + selectedServicesCharg + '%) </td><td> ' +
                totalCharge + ' </td></tr>' + '<tr><td colspan="3"> VAT(' + selectedVat + '%) </td><td> ' + totalVat +
                '</td></tr><tr><td colspan="3"> TAX(' + selectedTax + '%) </td><td> ' + totalTax +
                ' </td></tr><tr><td colspan="3"><b> Total ' + selectedCurrency + '</b> </td><td id="allTotalPrice"> ' +
                processAmount + '</td></tr>');

            $("#finalTotal").html('BDT ' + finalTotal);
            $("#viewTotalAmount").html('BDT ' + finalTotal);

        }

        function reloadPage() {
            location.href = "{{ route('booking') }}";
        }

        function isEmail() {
            var email = $("#email").val();
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }

        function codBook() {
            $("#bookNowSubmitBtn").hide();
            if (!event.detail || event.detail == 1) {
                $(document).ready(function() {
                    var obj = {};
                    obj.name = $('#name').val();
                    obj.phone = $('#phone').val();
                    obj.email = $('#email').val();
                    obj.address = $('#address').val();
                    obj.city = $('#city').val();
                    obj.arrival_time = $('#arrivalTime').val();
                    obj.additional_comment = $('#additionalComment').val();
                    obj.postal_code = $('#postalCode').val();
                    obj.room = selectedRoom.join();
                    obj.adult = selectedAdult.join();
                    obj.child = selectedChild.join();
                    obj.discount = selectedDiscount;
                    obj.startdate = $("#selectedStartDate").val();
                    obj.endDate = $("#selectedEndDate").val();
                    obj.payment_type = $("#payment_type").val();
                    obj.quantity = selectedRoomQuantity;
                    obj.quantity = '';
                    obj.total_amount = totalAmountFinal;
                    obj.tax = 0;
                    obj.service_charge = 0;
                    obj.roomName = selectedRoomName;
                    obj.bdtPrice = selectedBDT;
                    var isPhoneValid = false;
                    if (/^(?:\+88|88)?(01[3-9]\d{8})$/.test($('#phone').val())) {
                        isPhoneValid = true;
                    }
                    var paymentType = $("#payment_type").val();
                    var startDate = $("#selectedStartDate").val();
                    var endDate = $("#selectedEndDate").val();
                    const date1 = new Date(startDate);
                    const date2 = new Date(endDate);

                    if ($('#name').val().length && isEmail() && $("#checkAgree").prop('checked') == true &&
                        isPhoneValid && paymentType && date2 > date1) {
                        $.ajax({
                            type: 'POST',
                            url: "{{ url('/pay-via-ajax') }}",
                            data: {
                                order: "",
                                cart_json: JSON.stringify(obj)
                            },
                            success: function(data) {
                                $("#bookNowSubmitBtn").hide();
                                $("#viewOrderSuccess").show();
                                $("#showName").html($('#name').val());
                                $("#showPhone").html($('#phone').val());
                                $("#showEmail").html($('#email').val());
                                $("#showPayment").html('Cash On Delivery');
                                $("#showStayDate").html($("#selectedStartDate").val() + " to " + $(
                                    "#selectedEndDate").val());
                                $("#showTotalAmount").html(totalAmountFinal + ' BDT');
                            }

                        });
                    }else{
                        alert("Please put all valid data")
                    }

                });
            }
        }

    </script>

    <!-- If you want to use the popup integration, -->


@endsection

@section('head')

@endsection

@section('foot')

@endsection

<script src="http://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="http://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>


<script>
    $(document).ready(function() {
        $("form :input").change(function() {
            var obj = {};
            obj.name = $('#name').val();
            obj.phone = $('#phone').val();
            obj.email = $('#email').val();
            obj.address = $('#address').val();
            obj.city = $('#city').val();
            obj.arrival_time = $('#arrivalTime').val();
            obj.additional_comment = $('#additionalComment').val();
            obj.postal_code = $('#postalCode').val();
            obj.room = selectedRoom.join();
            obj.adult = selectedAdult.join();
            obj.child = selectedChild.join();
            obj.discount = selectedDiscount;
            obj.startdate = $("#selectedStartDate").val();
            obj.endDate = $("#selectedEndDate").val();
            obj.payment_type = $("#payment_type").val();
            obj.quantity = selectedRoomQuantity;
            obj.quantity = '';
            obj.total_amount = totalAmountFinal;
            obj.tax = 0;
            obj.service_charge = 0;
            obj.roomName = selectedRoomName;
            obj.bdtPrice = selectedBDT;
            var isPhoneValid = false;
            if (/^(?:\+88|88)?(01[3-9]\d{8})$/.test($('#phone').val())) {
                isPhoneValid = true;
            }
            var paymentType = $("#payment_type").val();
            var startDate = $("#selectedStartDate").val();
            var endDate = $("#selectedEndDate").val();
            const date1 = new Date(startDate);
            const date2 = new Date(endDate);
            if ($('#name').val().length && isEmail() && $("#checkAgree").prop('checked') == true &&
                isPhoneValid && paymentType && date2 > date1) {
                if (paymentType == "COD") {
                    $("#bookNowSubmitBtn").show();
                    $("#sslczPayBtn").hide();
                } else {
                    $("#sslczPayBtn").show();
                    $("#bookNowSubmitBtn").hide();
                }
            } else {
                $("#sslczPayBtn").hide();
            }

            $('#sslczPayBtn').prop('postdata', obj);

            if (paymentType) {
                $('#payment_type').css('border', 'none');
            } else {
                if ($('#name').val().length && isEmail() && isPhoneValid) {
                    $('#payment_type').css('border', '1px solid red');
                }
            }
        });


        $('#email').keyup(function(e) {
            if (isEmail()) {
                $('#emailStatus').html('Valid');
                $('#emailStatus').css('color', 'green');
            } else {
                $('#emailStatus').html('Invalid');
                $('#emailStatus').css('color', 'red');
            }
        });

        function isEmail() {
            var email = $("#email").val();
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }


        $('#phone').keyup(function(e) {
            var isPhoneValid = false;
            if (/^(?:\+88|88)?(01[3-9]\d{8})$/.test($('#phone').val())) {
                isPhoneValid = true;
            }
            if (isPhoneValid) {
                $('#phoneStatus').html('Valid');
                $('#phoneStatus').css('color', 'green');
            } else {
                $('#phoneStatus').html('Invalid');
                $('#phoneStatus').css('color', 'red');
            }
        });

        $('#payment_type').change(function(e) {
            var isSetpayment = $("#payment_type").val();
            if (isSetpayment) {
                $('#payment_type').css('border', 'none');
            } else {
                $('#payment_type').css('border', '1px solid red');
            }
        });



        function validatePhone(txtPhone) {
            var a = document.getElementById(txtPhone).value;
            var filter =
                /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
            if (filter.test(a)) {
                return true;
            } else {
                return false;
            }
        }
    });

    (function(window, document) {
        var loader = function() {
            var script = document.createElement("script"),
                tag = document.getElementsByTagName("script")[0];
            // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
                7); // USE THIS FOR SANDBOX
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
            loader);
    })(window, document);

</script>
