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
        padding: 100px 0px;
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

</style>
@extends('layouts.front')
@section('content')
    <div class="page-banner-top">
        <img src="{{ asset('/uploads/default/banner.jpg') }}" />

        <div class="page-name-title"> Contact</div>
        <div class="banner-overlay"> </div>
    </div>
    <div class="container contact-pg">
        <div class="page-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <div class="row">
                <div class="col-md-8">

                    <div class="left">
                        <h2 class="green">Send Us Query</h2>
                        <div class="contact-form">
                            <form method="POST" action="{{ route('contactstore') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name:</label>
                                        <input type="text" required class="form-control" name="name" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email or phone:</label>
                                        <input type="text" required class="form-control" name="email_or_phone" required="">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Message:</label>
                                        <input type="text" required class="form-control message" name="message" required="">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="common">
                                            <div class="button">
                                                <!-- <a href="#" class="readmore">View All Facilities</a> -->
                                                <button type="submit" class="readmore" name="submit" value="submit">Book
                                                    Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right wow zoomIn" data-wow-delay=".3s" data-wow-duration="1s">
                        <h2>Momo Inn</h2>
                        <ul class="address">
                            <li class="heading">Address</li>
                            <li class="details">Nawdapara, Rangpur Road, Bogura - 5800, Bangladesh</li>
                        </ul>
                        <ul class="address">
                            <li class="heading">Phone</li>
                            <!-- <li class="details">+880 18 4418 7817</li> -->
                            <li class="details">+880 51 62504, +880 51 62505</li>
                        </ul>
                        <ul class="address">
                            <li class="heading">Hotline (24/7)</li>
                            <li class="details">+88 017 55 66 99 00</li>
                        </ul>
                        <ul class="address">
                            <li class="heading">Fax</li>
                            <li class="details">+88 0516 6402</li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.933006622539!2d89.35510101554176!3d24.900266684035174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc5580e6d1053d%3A0x79830ecb3e34f2f4!2sHotel+Momo+Inn!5e0!3m2!1sen!2sbd!4v1505298061134"
        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>



@endsection

@section('head')

@endsection

@section('foot')

@endsection
