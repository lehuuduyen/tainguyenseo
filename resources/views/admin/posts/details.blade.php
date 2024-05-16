@extends('layouts.app-master')

@section('content')
<html lang="en" dir="ltr">

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <meta charset="utf-8">
    @include('home.partials.meta')

    <title>SEO</title>
    <base href="/">
    <style type="text/css">
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xFIzIXKMnyrYk.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xMIzIXKMnyrYk.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xEIzIXKMnyrYk.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xLIzIXKMnyrYk.woff2) format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xHIzIXKMnyrYk.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xGIzIXKMnyrYk.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xIIzIXKMny.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fCRc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fABc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fCBc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fBxc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fCxc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fChc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fBBc4AMP6lQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu5mxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7mxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4WxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7WxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7GxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fCRc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fABc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fCBc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fBxc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fCxc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fChc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fBBc4AMP6lQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfCRc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfABc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfCBc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfBxc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfCxc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfChc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfBBc4AMP6lQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: 'Material Symbols Outlined';
            font-style: normal;
            font-weight: 100 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/materialsymbolsoutlined/v175/kJEhBvYX7BgnkSrUwT8OhrdQw4oELdPIeeII9v6oFsLjBuVY.woff2) format('woff2');
        }

        .material-symbols-outlined {
            font-family: 'Material Symbols Outlined';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/materialicons/v142/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.woff2) format('woff2');
        }

        .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }
    </style>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://www.f-cdn.com" rel="preconnect" crossorigin="">
    <link rel="manifest" href="manifest.webmanifest">
    <!-- TODO: remove those when iOS Safari fully implements W3C Web App Manifest -->
    <link rel="apple-touch-icon" href="https://www.f-cdn.com/assets/main/en/app-icons/apple-touch-icon.png">
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" href="https://www.f-cdn.com/assets/main/en/app-icons/apple-launch-1242x2688.png">
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" href="https://www.f-cdn.com/assets/main/en/app-icons/apple-launch-828x1792.png">
    <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" href="https://www.f-cdn.com/assets/main/en/app-icons/apple-launch-1125x2436.png">
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3)" href="https://www.f-cdn.com/assets/main/en/app-icons/apple-launch-1242x2208.png">
    <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" href="https://www.f-cdn.com/assets/main/en/app-icons/apple-launch-750x1334.png">
    <link rel="apple-touch-startup-image" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" href="https://www.f-cdn.com/assets/main/en/app-icons/apple-launch-2048x2732.png">
    <link rel="apple-touch-startup-image" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" href="https://www.f-cdn.com/assets/main/en/app-icons/apple-launch-1668x2388.png">
    <link rel="apple-touch-startup-image" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" href="https://www.f-cdn.com/assets/main/en/app-icons/apple-launch-1668x2224.png">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" href="https://www.f-cdn.com/assets/main/en/app-icons/apple-launch-1536x2048.png">
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-31ZQKFK760&amp;l=dataLayer&amp;cx=c"></script>
    <script type="text/javascript" src="https://www.googletagmanager.com/gtag/js?id=UA-223765-6" id="gtag-sdk"></script>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "Organization",
        "name": "<?= $post->title ?>",
        "url": "<?= $_SERVER['HTTP_HOST'] ?>",
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "<?= $post->title ?>",
        "url": "<?= $_SERVER['HTTP_HOST'] ?>",
    }
    </script>
    <style>
        .__pwa_loader_spinner__ {
            animation: __pwa_loader_spin__ 1s linear infinite;
            border-radius: 50%;
            border-right: 3px solid transparent;
            border-top: 3px solid rgba(88, 154, 240, 0.8);
            box-sizing: border-box;
            display: inline-block;
            height: 48px;
            position: relative;
            vertical-align: middle;
            width: 48px;
        }

        @keyframes __pwa_loader_spin__ {
            0% {
                transform: rotate(0);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <link rel="stylesheet" href="https://www.f-cdn.com/assets/main/en/styles.d9408bc986553825.css">
    <style type="text/css"></style>
    <style>
        @supports (padding: max(0px)) {
            [_nghost-webapp-c58]:before {
                content: "";
                height: env(safe-area-inset-top);
                left: 0;
                position: fixed;
                right: 0;
                top: 0;
                z-index: 1000
            }
        }
    </style>
    <style>
        .ModalContainer[_ngcontent-webapp-c43] {
            align-items: center;
            display: flex;
            justify-content: center;
            inset: 0;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
            padding-left: env(safe-area-inset-left);
            padding-right: env(safe-area-inset-right);
            position: fixed;
            z-index: 1090
        }

        .ModalContainer[data-active=false][_ngcontent-webapp-c43] {
            display: none
        }

        .ModalContainer[data-active=true][_ngcontent-webapp-c43] {
            background: rgba(25, 32, 45, .7)
        }

        .ModalContainer[data-active=true][data-color=dark][_ngcontent-webapp-c43] {
            background: rgba(25, 32, 45, .6)
        }

        .ModalContainer[data-mobile-fullscreen=true][data-active=true][_ngcontent-webapp-c43] {
            background: var(--color-bg-light)
        }

        .ModalContainer[data-mobile-fullscreen=true][data-active=true][data-color=dark][_ngcontent-webapp-c43] {
            background: #12151b
        }

        @media (min-width: 768px) {
            .ModalContainer[data-mobile-fullscreen=true][data-active=true][_ngcontent-webapp-c43] {
                background: rgba(25, 32, 45, .7)
            }

            .ModalContainer[data-mobile-fullscreen=true][data-active=true][data-color=dark][_ngcontent-webapp-c43] {
                background: rgba(25, 32, 45, .6)
            }
        }

        .ModalDialog[_ngcontent-webapp-c43] {
            max-height: 90%;
            max-width: 100%;
            position: relative;
            width: 95%;
            z-index: 1090
        }

        @media (min-width: 480px) {
            .ModalDialog[data-size=xxsmall][_ngcontent-webapp-c43] {
                max-width: 300px;
                min-width: 0
            }
        }

        @media (min-width: 480px) {
            .ModalDialog[data-size=xsmall][_ngcontent-webapp-c43] {
                max-width: 400px;
                min-width: 300px
            }
        }

        @media (min-width: 480px) {
            .ModalDialog[data-size=small][_ngcontent-webapp-c43] {
                max-width: 600px;
                min-width: 400px
            }
        }

        @media (min-width: 768px) {
            .ModalDialog[data-size=mid][_ngcontent-webapp-c43] {
                max-width: 800px;
                min-width: 600px
            }
        }

        @media (min-width: 960px) {
            .ModalDialog[data-size=large][_ngcontent-webapp-c43] {
                max-width: 1000px;
                min-width: 800px
            }
        }

        .ModalDialog[data-size=fullscreen][_ngcontent-webapp-c43] {
            max-width: none;
            min-width: 100%
        }

        .ModalDialog[data-size=fullscreen][_ngcontent-webapp-c43] .ModalContent[_ngcontent-webapp-c43] {
            border-radius: 0;
            min-height: 100%
        }

        .ModalDialog[data-mobile-fullscreen=true][_ngcontent-webapp-c43] {
            height: 100%;
            max-height: none;
            max-width: none;
            width: 100%
        }

        .ModalDialog[data-mobile-fullscreen=true][_ngcontent-webapp-c43] .ModalContent[_ngcontent-webapp-c43] {
            border-radius: 0;
            min-height: 100%
        }

        @media (min-width: 768px) {
            .ModalDialog[data-mobile-fullscreen=true][_ngcontent-webapp-c43] .ModalContent[_ngcontent-webapp-c43] {
                border-radius: 5px;
                min-height: 0
            }
        }

        @media (min-width: 768px) {
            .ModalDialog[data-mobile-fullscreen=true][_ngcontent-webapp-c43] {
                height: auto;
                max-height: 90%;
                max-width: 100%;
                width: 95%
            }
        }

        @media (min-width: 768px) and (min-width: 480px) {
            .ModalDialog[data-mobile-fullscreen=true][data-size=xxsmall][_ngcontent-webapp-c43] {
                max-width: 300px;
                min-width: 0
            }
        }

        @media (min-width: 768px) and (min-width: 480px) {
            .ModalDialog[data-mobile-fullscreen=true][data-size=xsmall][_ngcontent-webapp-c43] {
                max-width: 400px;
                min-width: 300px
            }
        }

        @media (min-width: 768px) and (min-width: 480px) {
            .ModalDialog[data-mobile-fullscreen=true][data-size=small][_ngcontent-webapp-c43] {
                max-width: 600px;
                min-width: 400px
            }
        }

        @media (min-width: 768px) and (min-width: 768px) {
            .ModalDialog[data-mobile-fullscreen=true][data-size=mid][_ngcontent-webapp-c43] {
                max-width: 800px;
                min-width: 600px
            }
        }

        @media (min-width: 768px) and (min-width: 960px) {
            .ModalDialog[data-mobile-fullscreen=true][data-size=large][_ngcontent-webapp-c43] {
                max-width: 1000px;
                min-width: 800px
            }
        }

        @media (min-width: 768px) {
            .ModalDialog[data-mobile-fullscreen=true][data-size=fullscreen][_ngcontent-webapp-c43] {
                max-width: none;
                min-width: 100%
            }

            .ModalDialog[data-mobile-fullscreen=true][data-size=fullscreen][_ngcontent-webapp-c43] .ModalContent[_ngcontent-webapp-c43] {
                border-radius: 0;
                min-height: 100%
            }
        }

        .ModalDialog[data-size=xlarge][_ngcontent-webapp-c43] {
            max-width: 1176px
        }

        .ModalDialog[data-size=fullscreen][_ngcontent-webapp-c43] {
            height: 100%;
            max-height: none
        }

        .ModalContent[_ngcontent-webapp-c43] {
            touch-action: pan-y !important;
            border-radius: 5px
        }

        @media (min-width: 768px) {
            .ModalContent[_ngcontent-webapp-c43] {
                -webkit-user-select: auto !important;
                user-select: auto !important
            }
        }

        .ModalContent[data-mobile-fullscreen=false][_ngcontent-webapp-c43] {
            box-shadow: 0 0 8px #12151b29, 0 10px 18px #12151b33
        }

        .ModalContent[data-edge-to-edge=false][_ngcontent-webapp-c43] {
            padding: 16px
        }

        @media (min-width: 768px) {
            .ModalContent[data-edge-to-edge=false][_ngcontent-webapp-c43] {
                padding: 24px
            }
        }

        .ModalContent[data-color=light][_ngcontent-webapp-c43] {
            background-color: var(--color-bg-light)
        }

        .ModalContent[data-color=dark][_ngcontent-webapp-c43] {
            background-color: #12151b;
            color: #fcfcfd
        }

        .ModalHeader[data-edge-to-edge=false][_ngcontent-webapp-c43] {
            margin: -16px -16px 16px
        }

        .ModalHeader-inner[_ngcontent-webapp-c43] {
            min-width: 100%
        }

        .ModalCloseButton[_ngcontent-webapp-c43] {
            cursor: pointer;
            position: absolute;
            right: 8px;
            top: 8px;
            z-index: 1090
        }
    </style>
    <style>
        [_nghost-webapp-c37] {
            display: block
        }

        .IsSticky[_nghost-webapp-c37] {
            z-index: 1200 !important
        }

        .ToastAlertInner[_ngcontent-webapp-c37] {
            position: relative
        }

        .ToastAlertContainer[_ngcontent-webapp-c37] {
            left: 50%;
            position: absolute;
            transform: translate(-50%);
            width: 100%;
            z-index: 1200
        }

        @media (min-width: 480px) {
            .ToastAlertContainer[_ngcontent-webapp-c37] {
                width: auto
            }
        }
    </style>
    <style>
        [_nghost-webapp-c32] {
            display: block;
            margin: 0 auto;
            width: 100%
        }

        @media (max-width: 767px) {
            [data-support-notch=true][data-mobile-padding=true][_nghost-webapp-c32] {
                padding-left: calc(env(safe-area-inset-left) + 16px);
                padding-right: calc(env(safe-area-inset-left) + 16px)
            }
        }

        @media (min-width: 768px) {
            [data-support-notch=true][_nghost-webapp-c32] {
                padding-left: calc(env(safe-area-inset-left) + 12px);
                padding-right: calc(env(safe-area-inset-right) + 12px)
            }
        }

        [data-support-notch=false][data-mobile-padding=true][_nghost-webapp-c32] {
            padding-left: 16px;
            padding-right: 16px
        }

        @media (min-width: 768px) {
            [data-support-notch=false][_nghost-webapp-c32] {
                padding-left: 12px;
                padding-right: 12px
            }
        }

        [data-padding=false][_nghost-webapp-c32] {
            padding: 0
        }

        [size=tablet][_nghost-webapp-c32] {
            max-width: 768px
        }

        [size=desktop-small][_nghost-webapp-c32] {
            max-width: 960px
        }

        [size=desktop-large][_nghost-webapp-c32] {
            max-width: 1200px
        }

        [size=desktop-xlarge][_nghost-webapp-c32] {
            max-width: 1440px
        }

        [size=desktop-xxlarge][_nghost-webapp-c32] {
            max-width: 1600px
        }

        [size=fluid][_nghost-webapp-c32] {
            max-width: none
        }

        @media (min-width: 768px) {
            [size-tablet=tablet][_nghost-webapp-c32] {
                max-width: 768px
            }

            [size-tablet=desktop-small][_nghost-webapp-c32] {
                max-width: 960px
            }

            [size-tablet=desktop-large][_nghost-webapp-c32] {
                max-width: 1200px
            }

            [size-tablet=desktop-xlarge][_nghost-webapp-c32] {
                max-width: 1440px
            }

            [size-tablet=desktop-xxlarge][_nghost-webapp-c32] {
                max-width: 1600px
            }

            [size-tablet=fluid][_nghost-webapp-c32] {
                max-width: none
            }
        }

        @media (min-width: 960px) {
            [size-desktop-small=tablet][_nghost-webapp-c32] {
                max-width: 768px
            }

            [size-desktop-small=desktop-small][_nghost-webapp-c32] {
                max-width: 960px
            }

            [size-desktop-small=desktop-large][_nghost-webapp-c32] {
                max-width: 1200px
            }

            [size-desktop-small=desktop-xlarge][_nghost-webapp-c32] {
                max-width: 1440px
            }

            [size-desktop-small=desktop-xxlarge][_nghost-webapp-c32] {
                max-width: 1600px
            }

            [size-desktop-small=fluid][_nghost-webapp-c32] {
                max-width: none
            }
        }

        @media (min-width: 1200px) {
            [size-desktop-large=tablet][_nghost-webapp-c32] {
                max-width: 768px
            }

            [size-desktop-large=desktop-small][_nghost-webapp-c32] {
                max-width: 960px
            }

            [size-desktop-large=desktop-large][_nghost-webapp-c32] {
                max-width: 1200px
            }

            [size-desktop-large=desktop-xlarge][_nghost-webapp-c32] {
                max-width: 1440px
            }

            [size-desktop-large=desktop-xxlarge][_nghost-webapp-c32] {
                max-width: 1600px
            }

            [size-desktop-large=fluid][_nghost-webapp-c32] {
                max-width: none
            }
        }

        @media (min-width: 1440px) {
            [size-desktop-xlarge=tablet][_nghost-webapp-c32] {
                max-width: 768px
            }

            [size-desktop-xlarge=desktop-small][_nghost-webapp-c32] {
                max-width: 960px
            }

            [size-desktop-xlarge=desktop-large][_nghost-webapp-c32] {
                max-width: 1200px
            }

            [size-desktop-xlarge=desktop-xlarge][_nghost-webapp-c32] {
                max-width: 1440px
            }

            [size-desktop-xlarge=desktop-xxlarge][_nghost-webapp-c32] {
                max-width: 1600px
            }

            [size-desktop-xlarge=fluid][_nghost-webapp-c32] {
                max-width: none
            }
        }

        @media (min-width: 1600px) {
            [size-desktop-xxlarge=tablet][_nghost-webapp-c32] {
                max-width: 768px
            }

            [size-desktop-xxlarge=desktop-small][_nghost-webapp-c32] {
                max-width: 960px
            }

            [size-desktop-xxlarge=desktop-large][_nghost-webapp-c32] {
                max-width: 1200px
            }

            [size-desktop-xxlarge=desktop-xlarge][_nghost-webapp-c32] {
                max-width: 1440px
            }

            [size-desktop-xxlarge=desktop-xxlarge][_nghost-webapp-c32] {
                max-width: 1600px
            }

            [size-desktop-xxlarge=fluid][_nghost-webapp-c32] {
                max-width: none
            }
        }
    </style>
    <style>
        [_nghost-webapp-c54] {
            display: none;
            left: 50%;
            position: absolute;
            top: 0;
            transform: translate(-50%);
            transform-origin: center;
            transition: top .15s linear;
            width: 100%
        }

        @media (min-width: 480px) {
            [_nghost-webapp-c54] {
                white-space: nowrap;
                width: auto
            }
        }

        .IsActive[_nghost-webapp-c54] {
            display: block
        }

        .ToastAlert[_ngcontent-webapp-c54] {
            align-items: center;
            border-left: 4px solid currentColor;
            border-radius: 5px;
            box-shadow: 0 1px 3px #12151b29;
            display: flex;
            padding: 16px
        }

        .ToastAlert-icon[_ngcontent-webapp-c54] {
            display: none;
            line-height: 1
        }

        .ToastAlert-content[_ngcontent-webapp-c54] {
            transform: translateY(1px)
        }

        .ToastAlert-closeBtn[_ngcontent-webapp-c54] {
            opacity: .5;
            transition: transform .1s ease-out, opacity .1s linear;
            display: inline-flex;
            margin-left: auto
        }

        .ToastAlert-closeBtn[_ngcontent-webapp-c54]:hover,
        .ToastAlert-closeBtn[_ngcontent-webapp-c54]:focus {
            opacity: 1;
            transform: rotate(90deg)
        }

        .ToastAlert-loader[_ngcontent-webapp-c54] {
            margin-bottom: -2px;
            margin-top: -2px
        }

        .ToastAlert[data-type=info][_ngcontent-webapp-c54] {
            color: #1772eb
        }

        .ToastAlert[data-type=success][_ngcontent-webapp-c54] {
            color: #058430
        }

        .ToastAlert[data-type=warning][_ngcontent-webapp-c54] {
            color: #e96800
        }

        .ToastAlert[data-type=error][_ngcontent-webapp-c54] {
            color: #eb3730
        }

        .ToastAlert[data-type=loading][_ngcontent-webapp-c54] {
            color: #5c6f8c
        }

        .ToastAlert[data-color=light][_ngcontent-webapp-c54] {
            background-color: var(--color-bg-light)
        }

        .ToastAlert[data-color=dark][_ngcontent-webapp-c54] {
            background-color: #12151b
        }

        @media (min-width: 480px) {
            .ToastAlert[_ngcontent-webapp-c54] {
                padding: 12px 16px
            }

            .ToastAlert-icon[_ngcontent-webapp-c54] {
                display: inline-block
            }

            .ToastAlert-loader[_ngcontent-webapp-c54] {
                margin-bottom: 0;
                margin-top: 0
            }
        }
    </style>
    <style>
        [data-text-align=center][_nghost-webapp-c41] {
            text-align: center
        }

        [data-text-align=left][_nghost-webapp-c41] {
            text-align: left
        }

        [data-text-align=right][_nghost-webapp-c41] {
            text-align: right
        }

        @media (min-width: 768px) {
            [data-text-align-tablet=center][_nghost-webapp-c41] {
                text-align: center
            }

            [data-text-align-tablet=left][_nghost-webapp-c41] {
                text-align: left
            }

            [data-text-align-tablet=right][_nghost-webapp-c41] {
                text-align: right
            }
        }

        @media (min-width: 960px) {
            [data-text-align-desktop-small=center][_nghost-webapp-c41] {
                text-align: center
            }

            [data-text-align-desktop-small=left][_nghost-webapp-c41] {
                text-align: left
            }

            [data-text-align-desktop-small=right][_nghost-webapp-c41] {
                text-align: right
            }
        }

        [data-type=paragraph][_nghost-webapp-c41] {
            display: block
        }

        [data-type=paragraph][_nghost-webapp-c41] .NativeElement[_ngcontent-webapp-c41] {
            display: inline
        }

        [data-max-lines][_nghost-webapp-c41] {
            align-items: flex-start;
            display: flex;
            justify-content: space-between
        }

        [data-max-lines][_nghost-webapp-c41] .NativeElement[_ngcontent-webapp-c41] {
            display: block
        }

        [data-max-lines][_nghost-webapp-c41] .NativeElement[_ngcontent-webapp-c41] .Strong[_ngcontent-webapp-c41],
        [data-max-lines][_nghost-webapp-c41] .NativeElement[_ngcontent-webapp-c41] .Span[_ngcontent-webapp-c41] {
            display: inline
        }

        [data-type=container][_nghost-webapp-c41] {
            display: block
        }

        [data-highlight-color=blue][_nghost-webapp-c41] [_ngcontent-webapp-c41]::selection {
            background: rgba(88, 154, 240, .7)
        }

        [data-highlight-color=gray][_nghost-webapp-c41] [_ngcontent-webapp-c41]::selection {
            background: rgba(188, 197, 211, .7)
        }

        [data-highlight-color=gray][_nghost-webapp-c41] [_ngcontent-webapp-c41]::-moz-selection {
            background: rgba(188, 197, 211, .7)
        }

        *[data-size=xxxsmall][_ngcontent-webapp-c41] {
            font-size: 11px;
            line-height: 1.45
        }

        *[data-size=xxsmall][_ngcontent-webapp-c41] {
            font-size: 14px;
            line-height: 1.43
        }

        *[data-size=xsmall][_ngcontent-webapp-c41] {
            font-size: 15px;
            line-height: 1.4
        }

        *[data-size=small][_ngcontent-webapp-c41] {
            font-size: 16px;
            line-height: 1.5
        }

        *[data-size=marketing_small][_ngcontent-webapp-c41] {
            font-size: 18px;
            line-height: 1.55
        }

        *[data-size=mid][_ngcontent-webapp-c41] {
            font-size: 20px;
            line-height: 1.4
        }

        *[data-size=large][_ngcontent-webapp-c41] {
            font-size: 24px;
            line-height: 1.33
        }

        *[data-size=xlarge][_ngcontent-webapp-c41] {
            font-size: 32px;
            line-height: 1.37
        }

        *[data-size=xxlarge][_ngcontent-webapp-c41] {
            font-size: 41px;
            line-height: 1.17
        }

        *[data-size=xxxlarge][_ngcontent-webapp-c41] {
            font-size: 48px;
            line-height: 1.17
        }

        *[data-size=marketing_mega][_ngcontent-webapp-c41] {
            font-size: 57px;
            line-height: 1.15
        }

        *[data-size=marketing_xmega][_ngcontent-webapp-c41] {
            font-size: 91px;
            line-height: 1.09
        }

        *[data-size=inherit][_ngcontent-webapp-c41] {
            font-size: inherit;
            line-height: inherit
        }

        *[data-weight=bold][_ngcontent-webapp-c41] {
            font-weight: 700
        }

        *[data-weight=medium][_ngcontent-webapp-c41] {
            font-weight: 500
        }

        *[data-weight=normal][_ngcontent-webapp-c41] {
            font-weight: 400
        }

        *[data-weight=light][_ngcontent-webapp-c41] {
            font-weight: 300
        }

        *[data-weight=inherit][_ngcontent-webapp-c41] {
            font-weight: inherit
        }

        @media (min-width: 768px) {
            *[data-size-tablet=xxxsmall][_ngcontent-webapp-c41] {
                font-size: 11px;
                line-height: 1.45
            }

            *[data-size-tablet=xxsmall][_ngcontent-webapp-c41] {
                font-size: 14px;
                line-height: 1.43
            }

            *[data-size-tablet=xsmall][_ngcontent-webapp-c41] {
                font-size: 15px;
                line-height: 1.4
            }

            *[data-size-tablet=small][_ngcontent-webapp-c41] {
                font-size: 16px;
                line-height: 1.5
            }

            *[data-size-tablet=marketing_small][_ngcontent-webapp-c41] {
                font-size: 18px;
                line-height: 1.55
            }

            *[data-size-tablet=mid][_ngcontent-webapp-c41] {
                font-size: 20px;
                line-height: 1.4
            }

            *[data-size-tablet=large][_ngcontent-webapp-c41] {
                font-size: 24px;
                line-height: 1.33
            }

            *[data-size-tablet=xlarge][_ngcontent-webapp-c41] {
                font-size: 32px;
                line-height: 1.37
            }

            *[data-size-tablet=xxlarge][_ngcontent-webapp-c41] {
                font-size: 41px;
                line-height: 1.17
            }

            *[data-size-tablet=xxxlarge][_ngcontent-webapp-c41] {
                font-size: 48px;
                line-height: 1.17
            }

            *[data-size-tablet=marketing_mega][_ngcontent-webapp-c41] {
                font-size: 57px;
                line-height: 1.15
            }

            *[data-size-tablet=marketing_xmega][_ngcontent-webapp-c41] {
                font-size: 91px;
                line-height: 1.09
            }

            *[data-size-tablet=inherit][_ngcontent-webapp-c41] {
                font-size: inherit;
                line-height: inherit
            }

            *[data-weight-tablet=bold][_ngcontent-webapp-c41] {
                font-weight: 700
            }

            *[data-weight-tablet=medium][_ngcontent-webapp-c41] {
                font-weight: 500
            }

            *[data-weight-tablet=normal][_ngcontent-webapp-c41] {
                font-weight: 400
            }

            *[data-weight-tablet=light][_ngcontent-webapp-c41] {
                font-weight: 300
            }

            *[data-weight-tablet=inherit][_ngcontent-webapp-c41] {
                font-weight: inherit
            }
        }

        @media (min-width: 960px) {
            *[data-size-desktop=xxxsmall][_ngcontent-webapp-c41] {
                font-size: 11px;
                line-height: 1.45
            }

            *[data-size-desktop=xxsmall][_ngcontent-webapp-c41] {
                font-size: 14px;
                line-height: 1.43
            }

            *[data-size-desktop=xsmall][_ngcontent-webapp-c41] {
                font-size: 15px;
                line-height: 1.4
            }

            *[data-size-desktop=small][_ngcontent-webapp-c41] {
                font-size: 16px;
                line-height: 1.5
            }

            *[data-size-desktop=marketing_small][_ngcontent-webapp-c41] {
                font-size: 18px;
                line-height: 1.55
            }

            *[data-size-desktop=mid][_ngcontent-webapp-c41] {
                font-size: 20px;
                line-height: 1.4
            }

            *[data-size-desktop=large][_ngcontent-webapp-c41] {
                font-size: 24px;
                line-height: 1.33
            }

            *[data-size-desktop=xlarge][_ngcontent-webapp-c41] {
                font-size: 32px;
                line-height: 1.37
            }

            *[data-size-desktop=xxlarge][_ngcontent-webapp-c41] {
                font-size: 41px;
                line-height: 1.17
            }

            *[data-size-desktop=xxxlarge][_ngcontent-webapp-c41] {
                font-size: 48px;
                line-height: 1.17
            }

            *[data-size-desktop=marketing_mega][_ngcontent-webapp-c41] {
                font-size: 57px;
                line-height: 1.15
            }

            *[data-size-desktop=marketing_xmega][_ngcontent-webapp-c41] {
                font-size: 91px;
                line-height: 1.09
            }

            *[data-size-desktop=inherit][_ngcontent-webapp-c41] {
                font-size: inherit;
                line-height: inherit
            }

            *[data-weight-desktop=bold][_ngcontent-webapp-c41] {
                font-weight: 700
            }

            *[data-weight-desktop=medium][_ngcontent-webapp-c41] {
                font-weight: 500
            }

            *[data-weight-desktop=normal][_ngcontent-webapp-c41] {
                font-weight: 400
            }

            *[data-weight-desktop=light][_ngcontent-webapp-c41] {
                font-weight: 300
            }

            *[data-weight-desktop=inherit][_ngcontent-webapp-c41] {
                font-weight: inherit
            }
        }

        @media (min-width: 1440px) {
            *[data-size-desktop-xlarge=xxxsmall][_ngcontent-webapp-c41] {
                font-size: 11px;
                line-height: 1.45
            }

            *[data-size-desktop-xlarge=xxsmall][_ngcontent-webapp-c41] {
                font-size: 14px;
                line-height: 1.43
            }

            *[data-size-desktop-xlarge=xsmall][_ngcontent-webapp-c41] {
                font-size: 15px;
                line-height: 1.4
            }

            *[data-size-desktop-xlarge=small][_ngcontent-webapp-c41] {
                font-size: 16px;
                line-height: 1.5
            }

            *[data-size-desktop-xlarge=marketing_small][_ngcontent-webapp-c41] {
                font-size: 18px;
                line-height: 1.55
            }

            *[data-size-desktop-xlarge=mid][_ngcontent-webapp-c41] {
                font-size: 20px;
                line-height: 1.4
            }

            *[data-size-desktop-xlarge=large][_ngcontent-webapp-c41] {
                font-size: 24px;
                line-height: 1.33
            }

            *[data-size-desktop-xlarge=xlarge][_ngcontent-webapp-c41] {
                font-size: 32px;
                line-height: 1.37
            }

            *[data-size-desktop-xlarge=xxlarge][_ngcontent-webapp-c41] {
                font-size: 41px;
                line-height: 1.17
            }

            *[data-size-desktop-xlarge=xxxlarge][_ngcontent-webapp-c41] {
                font-size: 48px;
                line-height: 1.17
            }

            *[data-size-desktop-xlarge=marketing_mega][_ngcontent-webapp-c41] {
                font-size: 57px;
                line-height: 1.15
            }

            *[data-size-desktop-xlarge=marketing_xmega][_ngcontent-webapp-c41] {
                font-size: 91px;
                line-height: 1.09
            }

            *[data-size-desktop-xlarge=inherit][_ngcontent-webapp-c41] {
                font-size: inherit;
                line-height: inherit
            }
        }

        [data-text-transform=lowercase][_ngcontent-webapp-c41] {
            text-transform: lowercase
        }

        [data-text-transform=capitalize][_ngcontent-webapp-c41] {
            text-transform: capitalize
        }

        [data-text-transform=uppercase][_ngcontent-webapp-c41] {
            text-transform: uppercase
        }

        [data-text-decoration=underline][_ngcontent-webapp-c41] {
            text-decoration: underline
        }

        [data-text-decoration=overline][_ngcontent-webapp-c41] {
            text-decoration: overline
        }

        [data-text-decoration=line-through][_ngcontent-webapp-c41] {
            text-decoration: line-through
        }

        *[data-color=inherit][_ngcontent-webapp-c41] {
            color: inherit
        }

        *[data-color=foreground][_ngcontent-webapp-c41] {
            color: var(--color-foreground)
        }

        *[data-color=light][_ngcontent-webapp-c41] {
            color: #fcfcfd
        }

        *[data-color=dark][_ngcontent-webapp-c41] {
            color: #12151b
        }

        *[data-color=error][_ngcontent-webapp-c41] {
            color: #eb3730
        }

        *[data-color=warning][_ngcontent-webapp-c41] {
            color: #e96800
        }

        *[data-color=success][_ngcontent-webapp-c41] {
            color: #058430
        }

        *[data-color=primary][_ngcontent-webapp-c41] {
            color: #e60278
        }

        [data-style=italic][_ngcontent-webapp-c41] {
            font-style: italic
        }

        [data-style=normal][_ngcontent-webapp-c41] {
            font-style: normal
        }

        .Strong[_ngcontent-webapp-c41] {
            font-weight: 700
        }

        [data-line-break=true][_ngcontent-webapp-c41] {
            white-space: pre-line
        }
    </style>
    <style>
        .TranslationText[_ngcontent-webapp-c51] {
            display: none
        }
    </style>
    <style>
        [data-backdrop][_nghost-webapp-c34] {
            border-radius: 50%
        }

        [data-backdrop][data-backdrop-style=pulse][data-backdrop=dark][_nghost-webapp-c34] {
            background: radial-gradient(rgba(61, 74, 93, .2) 50%, rgba(61, 74, 93, .1) 50%)
        }

        [data-backdrop][data-backdrop-style=pulse][data-backdrop=error][_nghost-webapp-c34] {
            background: radial-gradient(rgba(235, 55, 48, .2) 50%, rgba(235, 55, 48, .1) 50%)
        }

        [data-backdrop][data-backdrop-style=pulse][data-backdrop=pink-xlight][_nghost-webapp-c34] {
            background: radial-gradient(rgba(255, 218, 237, .2) 50%, rgba(255, 218, 237, .1) 50%)
        }

        [data-backdrop][data-backdrop-style=pulse][data-backdrop=pink][_nghost-webapp-c34] {
            background: radial-gradient(rgba(230, 2, 120, .2) 50%, rgba(230, 2, 120, .1) 50%)
        }

        [data-backdrop][data-backdrop-style=pulse][data-backdrop=primary][_nghost-webapp-c34] {
            background: radial-gradient(rgba(88, 154, 240, .2) 50%, rgba(88, 154, 240, .1) 50%)
        }

        [data-backdrop][data-backdrop-style=pulse][data-backdrop=white][_nghost-webapp-c34] {
            background: radial-gradient(rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .1) 50%)
        }

        [data-backdrop][data-backdrop-style=pulse][data-backdrop=aqua-light][_nghost-webapp-c34] {
            background: radial-gradient(rgba(30, 181, 189, .2) 50%, rgba(30, 181, 189, .1) 50%)
        }

        [data-backdrop][data-backdrop-style=pulse][data-backdrop=orange-xxxlight][_nghost-webapp-c34] {
            background: radial-gradient(rgba(225, 176, 0, .2) 50%, rgba(225, 176, 0, .1) 50%)
        }

        [data-backdrop][data-backdrop-style=pulse][data-backdrop=success][_nghost-webapp-c34] {
            background: radial-gradient(rgba(155, 251, 188, .2) 50%, rgba(155, 251, 188, .1) 50%)
        }

        [data-backdrop][data-backdrop-style=solid][data-backdrop=dark][_nghost-webapp-c34] {
            background: #3d4a5d
        }

        [data-backdrop][data-backdrop-style=solid][data-backdrop=success][_nghost-webapp-c34] {
            background: #9bfbbc
        }

        [data-backdrop][data-backdrop-style=solid][data-backdrop=error][_nghost-webapp-c34] {
            background: #eb3730
        }

        [data-backdrop][data-backdrop-style=solid][data-backdrop=pink-xlight][_nghost-webapp-c34] {
            background: #ffdaed
        }

        [data-backdrop][data-backdrop-style=solid][data-backdrop=pink][_nghost-webapp-c34] {
            background: #e60278
        }

        [data-backdrop][data-backdrop-style=solid][data-backdrop=primary][_nghost-webapp-c34] {
            background: #1772eb
        }

        [data-backdrop][data-backdrop-style=solid][data-backdrop=aqua-light][_nghost-webapp-c34] {
            background: #1eb5bd
        }

        [data-backdrop][data-backdrop-style=solid][data-backdrop=orange-xxxlight][_nghost-webapp-c34] {
            background: #fffad4
        }

        [data-backdrop][data-backdrop-style=solid][data-backdrop=white][_nghost-webapp-c34] {
            background-color: var(--color-bg-light)
        }

        [data-backdrop][data-backdrop-style=transparent][data-backdrop=dark][_nghost-webapp-c34] {
            background: rgba(61, 74, 93, .6)
        }

        [data-backdrop][data-backdrop-style=transparent][data-backdrop=error][_nghost-webapp-c34] {
            background: rgba(235, 55, 48, .1)
        }

        [data-backdrop][data-backdrop-style=transparent][data-backdrop=pink-xlight][_nghost-webapp-c34] {
            background: rgba(255, 218, 237, .1)
        }

        [data-backdrop][data-backdrop-style=transparent][data-backdrop=pink][_nghost-webapp-c34] {
            background: rgba(230, 2, 120, .1)
        }

        [data-backdrop][data-backdrop-style=transparent][data-backdrop=primary][_nghost-webapp-c34] {
            background: rgba(88, 154, 240, .1)
        }

        [data-backdrop][data-backdrop-style=transparent][data-backdrop=aqua-light][_nghost-webapp-c34] {
            background: rgba(30, 181, 189, .1)
        }

        [data-backdrop][data-backdrop-style=transparent][data-backdrop=orange-xxxlight][_nghost-webapp-c34] {
            background: rgba(225, 176, 0, .1)
        }

        [data-backdrop][data-backdrop-style=transparent][data-backdrop=white][_nghost-webapp-c34] {
            background: rgba(255, 255, 255, .6)
        }

        [data-backdrop][data-backdrop-style=transparent][data-backdrop=success][_nghost-webapp-c34] {
            background: rgba(155, 251, 188, .1)
        }

        [data-backdrop][data-backdrop-style=transparent][data-size=xsmall][_nghost-webapp-c34] {
            padding: 4px
        }

        [data-backdrop][data-backdrop-style=transparent][data-size=small][_nghost-webapp-c34] {
            padding: 8px
        }

        [data-backdrop][data-backdrop-style=transparent][data-size=mid][_nghost-webapp-c34] {
            padding: 12px
        }

        [data-backdrop][data-backdrop-style=transparent][data-size=large][_nghost-webapp-c34] {
            padding: 16px
        }

        [data-backdrop][data-backdrop-style=transparent][data-size=xlarge][_nghost-webapp-c34] {
            padding: 24px
        }

        [data-backdrop][data-backdrop-style=transparent][data-size=xxlarge][_nghost-webapp-c34] {
            padding: 24px
        }

        @media (min-width: 768px) {
            [data-backdrop][data-backdrop-style=transparent][data-size-tablet=xsmall][_nghost-webapp-c34] {
                padding: 4px
            }

            [data-backdrop][data-backdrop-style=transparent][data-size-tablet=small][_nghost-webapp-c34] {
                padding: 8px
            }

            [data-backdrop][data-backdrop-style=transparent][data-size-tablet=mid][_nghost-webapp-c34] {
                padding: 12px
            }

            [data-backdrop][data-backdrop-style=transparent][data-size-tablet=large][_nghost-webapp-c34] {
                padding: 16px
            }

            [data-backdrop][data-backdrop-style=transparent][data-size-tablet=xlarge][_nghost-webapp-c34] {
                padding: 24px
            }

            [data-backdrop][data-backdrop-style=transparent][data-size-tablet=xxlarge][_nghost-webapp-c34] {
                padding: 24px
            }
        }

        @media (min-width: 960px) {
            [data-backdrop][data-backdrop-style=transparent][data-size-desktop=xsmall][_nghost-webapp-c34] {
                padding: 4px
            }

            [data-backdrop][data-backdrop-style=transparent][data-size-desktop=small][_nghost-webapp-c34] {
                padding: 8px
            }

            [data-backdrop][data-backdrop-style=transparent][data-size-desktop=mid][_nghost-webapp-c34] {
                padding: 12px
            }

            [data-backdrop][data-backdrop-style=transparent][data-size-desktop=large][_nghost-webapp-c34] {
                padding: 16px
            }

            [data-backdrop][data-backdrop-style=transparent][data-size-desktop=xlarge][_nghost-webapp-c34] {
                padding: 24px
            }

            [data-backdrop][data-backdrop-style=transparent][data-size-desktop=xxlarge][_nghost-webapp-c34] {
                padding: 24px
            }
        }

        [data-backdrop][data-backdrop-style=pulse][data-backdrop-size=xxxsmall][_nghost-webapp-c34],
        [data-backdrop][data-backdrop-style=solid][data-backdrop-size=xxxsmall][_nghost-webapp-c34],
        [data-backdrop][data-backdrop-style=transparent][data-backdrop-size=xxxsmall][_nghost-webapp-c34] {
            padding: 4px
        }

        [data-backdrop][data-backdrop-style=pulse][data-backdrop-size=xxsmall][_nghost-webapp-c34],
        [data-backdrop][data-backdrop-style=solid][data-backdrop-size=xxsmall][_nghost-webapp-c34],
        [data-backdrop][data-backdrop-style=transparent][data-backdrop-size=xxsmall][_nghost-webapp-c34] {
            padding: 8px
        }

        [data-backdrop][data-backdrop-style=pulse][data-backdrop-size=xsmall][_nghost-webapp-c34],
        [data-backdrop][data-backdrop-style=solid][data-backdrop-size=xsmall][_nghost-webapp-c34],
        [data-backdrop][data-backdrop-style=transparent][data-backdrop-size=xsmall][_nghost-webapp-c34] {
            padding: 12px
        }

        [data-backdrop][data-backdrop-style=pulse][data-backdrop-size=small][_nghost-webapp-c34],
        [data-backdrop][data-backdrop-style=solid][data-backdrop-size=small][_nghost-webapp-c34],
        [data-backdrop][data-backdrop-style=transparent][data-backdrop-size=small][_nghost-webapp-c34] {
            padding: 16px
        }

        [data-backdrop][data-backdrop-style=pulse][data-backdrop-size=mid][_nghost-webapp-c34],
        [data-backdrop][data-backdrop-style=solid][data-backdrop-size=mid][_nghost-webapp-c34],
        [data-backdrop][data-backdrop-style=transparent][data-backdrop-size=mid][_nghost-webapp-c34] {
            padding: 24px
        }

        [data-backdrop][data-backdrop-style=pulse][data-backdrop-size=large][_nghost-webapp-c34],
        [data-backdrop][data-backdrop-style=solid][data-backdrop-size=large][_nghost-webapp-c34],
        [data-backdrop][data-backdrop-style=transparent][data-backdrop-size=large][_nghost-webapp-c34] {
            padding: 32px
        }

        [data-backdrop=transparent][_nghost-webapp-c34] {
            box-shadow: 0 0 0 1px #bcc5d3
        }

        [data-use-icon-font=false][_nghost-webapp-c34] {
            display: inline-block;
            vertical-align: middle
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-backdrop=dark][_nghost-webapp-c34] {
            background: radial-gradient(rgba(61, 74, 93, .2) 50%, rgba(61, 74, 93, .1) 50%)
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-backdrop=error][_nghost-webapp-c34] {
            background: radial-gradient(rgba(235, 55, 48, .2) 50%, rgba(235, 55, 48, .1) 50%)
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-backdrop=pink-xlight][_nghost-webapp-c34] {
            background: radial-gradient(rgba(255, 218, 237, .2) 50%, rgba(255, 218, 237, .1) 50%)
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-backdrop=pink][_nghost-webapp-c34] {
            background: radial-gradient(rgba(230, 2, 120, .2) 50%, rgba(230, 2, 120, .1) 50%)
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-backdrop=primary][_nghost-webapp-c34] {
            background: radial-gradient(rgba(88, 154, 240, .2) 50%, rgba(88, 154, 240, .1) 50%)
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-backdrop=white][_nghost-webapp-c34] {
            background: radial-gradient(rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .1) 50%)
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-backdrop=aqua-light][_nghost-webapp-c34] {
            background: radial-gradient(rgba(30, 181, 189, .2) 50%, rgba(30, 181, 189, .1) 50%)
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-backdrop=orange-xxxlight][_nghost-webapp-c34] {
            background: radial-gradient(rgba(225, 176, 0, .2) 50%, rgba(225, 176, 0, .1) 50%)
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-backdrop=success][_nghost-webapp-c34] {
            background: radial-gradient(rgba(155, 251, 188, .2) 50%, rgba(155, 251, 188, .1) 50%)
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-size=xsmall][_nghost-webapp-c34] {
            padding: 8px
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-size=small][_nghost-webapp-c34] {
            padding: 12px
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-size=mid][_nghost-webapp-c34] {
            padding: 16px
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-size=large][_nghost-webapp-c34] {
            padding: 24px
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-size=xlarge][_nghost-webapp-c34] {
            padding: 32px
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-size=xxlarge][_nghost-webapp-c34] {
            padding: 32px
        }

        @media (min-width: 768px) {
            [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-size-tablet=xsmall][_nghost-webapp-c34] {
                padding: 8px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-size-tablet=small][_nghost-webapp-c34] {
                padding: 12px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-size-tablet=mid][_nghost-webapp-c34] {
                padding: 16px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-size-tablet=large][_nghost-webapp-c34] {
                padding: 24px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-size-tablet=xlarge][_nghost-webapp-c34] {
                padding: 32px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-size-tablet=xxlarge][_nghost-webapp-c34] {
                padding: 32px
            }
        }

        @media (min-width: 960px) {
            [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-size-desktop=xsmall][_nghost-webapp-c34] {
                padding: 8px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-size-desktop=small][_nghost-webapp-c34] {
                padding: 12px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-size-desktop=mid][_nghost-webapp-c34] {
                padding: 16px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-size-desktop=large][_nghost-webapp-c34] {
                padding: 24px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-size-desktop=xlarge][_nghost-webapp-c34] {
                padding: 32px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=pulse][data-size-desktop=xxlarge][_nghost-webapp-c34] {
                padding: 32px
            }
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-backdrop=dark][_nghost-webapp-c34] {
            background: #3d4a5d
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-backdrop=success][_nghost-webapp-c34] {
            background: #9bfbbc
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-backdrop=error][_nghost-webapp-c34] {
            background: #eb3730
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-backdrop=pink-xlight][_nghost-webapp-c34] {
            background: #ffdaed
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-backdrop=pink][_nghost-webapp-c34] {
            background: #e60278
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-backdrop=primary][_nghost-webapp-c34] {
            background: #1772eb
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-backdrop=aqua-light][_nghost-webapp-c34] {
            background: #1eb5bd
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-backdrop=orange-xxxlight][_nghost-webapp-c34] {
            background: #fffad4
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-backdrop=white][_nghost-webapp-c34] {
            background-color: var(--color-bg-light)
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-size=xsmall][_nghost-webapp-c34] {
            padding: 4px
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-size=small][_nghost-webapp-c34] {
            padding: 8px
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-size=mid][_nghost-webapp-c34] {
            padding: 12px
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-size=large][_nghost-webapp-c34] {
            padding: 16px
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-size=xlarge][_nghost-webapp-c34] {
            padding: 24px
        }

        [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-size=xxlarge][_nghost-webapp-c34] {
            padding: 24px
        }

        @media (min-width: 768px) {
            [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-size-tablet=xsmall][_nghost-webapp-c34] {
                padding: 4px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-size-tablet=small][_nghost-webapp-c34] {
                padding: 8px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-size-tablet=mid][_nghost-webapp-c34] {
                padding: 12px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-size-tablet=large][_nghost-webapp-c34] {
                padding: 16px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-size-tablet=xlarge][_nghost-webapp-c34] {
                padding: 24px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-size-tablet=xxlarge][_nghost-webapp-c34] {
                padding: 24px
            }
        }

        @media (min-width: 960px) {
            [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-size-desktop=xsmall][_nghost-webapp-c34] {
                padding: 4px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-size-desktop=small][_nghost-webapp-c34] {
                padding: 8px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-size-desktop=mid][_nghost-webapp-c34] {
                padding: 12px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-size-desktop=large][_nghost-webapp-c34] {
                padding: 16px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-size-desktop=xlarge][_nghost-webapp-c34] {
                padding: 24px
            }

            [data-use-icon-font=false][data-backdrop][data-backdrop-style=solid][data-size-desktop=xxlarge][_nghost-webapp-c34] {
                padding: 24px
            }
        }

        [data-use-icon-font=false][role=button][_nghost-webapp-c34] {
            cursor: pointer;
            outline: 0;
            position: relative
        }

        [data-use-icon-font=false][role=button][data-size][_nghost-webapp-c34] {
            padding: 8px
        }

        [data-use-icon-font=false][role=button][_nghost-webapp-c34] .IconInner[_ngcontent-webapp-c34] {
            outline: 0
        }

        [data-use-icon-font=false][role=button][_nghost-webapp-c34]:before {
            inset: 0;
            position: absolute;
            background-color: transparent;
            border-radius: 50%;
            content: "";
            opacity: 1
        }

        @media (min-width: 768px) {
            [data-use-icon-font=false][data-hover-animation=spin][_nghost-webapp-c34] {
                transition: transform .1s ease-out
            }

            [data-use-icon-font=false][data-hover-animation=spin][_nghost-webapp-c34]:hover,
            [data-use-icon-font=false][data-hover-animation=spin][_nghost-webapp-c34]:focus {
                transform: rotate(90deg)
            }

            [data-use-icon-font=false][data-hover-animation=highlight][_nghost-webapp-c34] {
                transition: background .15s ease-in
            }

            [data-use-icon-font=false][data-hover-animation=highlight][_nghost-webapp-c34]:hover:before {
                background-color: #bcc5d34d
            }

            [data-use-icon-font=false][data-hover-animation=spin-and-fade][_nghost-webapp-c34] {
                opacity: .5;
                transition: transform .1s ease-out, opacity .1s linear
            }

            [data-use-icon-font=false][data-hover-animation=spin-and-fade][_nghost-webapp-c34]:hover,
            [data-use-icon-font=false][data-hover-animation=spin-and-fade][_nghost-webapp-c34]:focus {
                opacity: 1;
                transform: rotate(90deg)
            }

            [data-use-icon-font=false][data-hover-animation=spin-and-highlight][_nghost-webapp-c34] {
                transition: background .15s ease-in, transform .1s ease-out
            }

            [data-use-icon-font=false][data-hover-animation=spin-and-highlight][_nghost-webapp-c34]:hover,
            [data-use-icon-font=false][data-hover-animation=spin-and-highlight][_nghost-webapp-c34]:focus {
                transform: rotate(90deg)
            }

            [data-use-icon-font=false][data-hover-animation=spin-and-highlight][_nghost-webapp-c34]:hover:before,
            [data-use-icon-font=false][data-hover-animation=spin-and-highlight][_nghost-webapp-c34]:focus:before {
                background-color: #bcc5d34d
            }
        }

        [data-use-icon-font=false][data-click-animation=highlight][_nghost-webapp-c34]:active:before {
            background-color: #bcc5d3;
            transition: background 0
        }

        [data-use-icon-font=false][data-click-animation=shrink][_nghost-webapp-c34]:active,
        [data-use-icon-font=false][data-click-animation=shrink][_nghost-webapp-c34]:focus,
        [data-use-icon-font=false][data-click-animation=shrink][_nghost-webapp-c34]:focus:active {
            transform: scale(.96)
        }

        [data-use-icon-font=false][data-click-animation=highlight-and-shrink][_nghost-webapp-c34]:active,
        [data-use-icon-font=false][data-click-animation=highlight-and-shrink][_nghost-webapp-c34]:focus,
        [data-use-icon-font=false][data-click-animation=highlight-and-shrink][_nghost-webapp-c34]:focus:active {
            transform: scale(.96)
        }

        [data-use-icon-font=false][data-click-animation=highlight-and-shrink][_nghost-webapp-c34]:active:before,
        [data-use-icon-font=false][data-click-animation=highlight-and-shrink][_nghost-webapp-c34]:focus:before,
        [data-use-icon-font=false][data-click-animation=highlight-and-shrink][_nghost-webapp-c34]:focus:active:before {
            background-color: #bcc5d3;
            transition: background 0
        }

        .IconContainer[_ngcontent-webapp-c34] {
            align-items: center;
            display: flex;
            fill: currentColor;
            justify-content: center;
            position: relative
        }

        .IconContainer[data-size=xsmall][_ngcontent-webapp-c34] {
            height: 12px;
            width: 12px
        }

        .IconContainer[data-size=small][_ngcontent-webapp-c34] {
            height: 16px;
            width: 16px
        }

        .IconContainer[data-size=mid][_ngcontent-webapp-c34] {
            height: 24px;
            width: 24px
        }

        .IconContainer[data-size=large][_ngcontent-webapp-c34] {
            height: 32px;
            width: 32px
        }

        .IconContainer[data-size=xlarge][_ngcontent-webapp-c34] {
            height: 48px;
            width: 48px
        }

        .IconContainer[data-size=xxlarge][_ngcontent-webapp-c34] {
            height: 64px;
            width: 64px
        }

        @media (min-width: 768px) {
            .IconContainer[data-size-tablet=xsmall][_ngcontent-webapp-c34] {
                height: 12px;
                width: 12px
            }

            .IconContainer[data-size-tablet=small][_ngcontent-webapp-c34] {
                height: 16px;
                width: 16px
            }

            .IconContainer[data-size-tablet=mid][_ngcontent-webapp-c34] {
                height: 24px;
                width: 24px
            }

            .IconContainer[data-size-tablet=large][_ngcontent-webapp-c34] {
                height: 32px;
                width: 32px
            }

            .IconContainer[data-size-tablet=xlarge][_ngcontent-webapp-c34] {
                height: 48px;
                width: 48px
            }

            .IconContainer[data-size-tablet=xxlarge][_ngcontent-webapp-c34] {
                height: 64px;
                width: 64px
            }
        }

        @media (min-width: 960px) {
            .IconContainer[data-size-desktop=xsmall][_ngcontent-webapp-c34] {
                height: 12px;
                width: 12px
            }

            .IconContainer[data-size-desktop=small][_ngcontent-webapp-c34] {
                height: 16px;
                width: 16px
            }

            .IconContainer[data-size-desktop=mid][_ngcontent-webapp-c34] {
                height: 24px;
                width: 24px
            }

            .IconContainer[data-size-desktop=large][_ngcontent-webapp-c34] {
                height: 32px;
                width: 32px
            }

            .IconContainer[data-size-desktop=xlarge][_ngcontent-webapp-c34] {
                height: 48px;
                width: 48px
            }

            .IconContainer[data-size-desktop=xxlarge][_ngcontent-webapp-c34] {
                height: 64px;
                width: 64px
            }
        }

        .IconContainer[data-color=light][_ngcontent-webapp-c34] {
            fill: #fcfcfd
        }

        .IconContainer[data-color=dark][_ngcontent-webapp-c34] {
            fill: #12151b
        }

        .IconContainer[data-color=foreground][_ngcontent-webapp-c34] {
            fill: var(--color-foreground)
        }

        .IconContainer[data-color=secondary][_ngcontent-webapp-c34] {
            fill: #1772eb
        }

        .IconContainer[data-color=contest][_ngcontent-webapp-c34] {
            fill: #ffc24e
        }

        .IconContainer[data-color=white][_ngcontent-webapp-c34] {
            fill: var(--color-bg-light)
        }

        .IconContainer[data-color=error][_ngcontent-webapp-c34] {
            fill: #eb3730
        }

        .IconContainer[data-color=success][_ngcontent-webapp-c34] {
            fill: #058430
        }

        .IconContainer[data-color=recruiter-light][_ngcontent-webapp-c34] {
            fill: #7f21f7
        }

        .IconContainer[data-color=primary][_ngcontent-webapp-c34] {
            fill: #e60278
        }

        .IconContainer[data-color=warning][_ngcontent-webapp-c34] {
            fill: #ffa32d
        }

        .IconContainer[data-color=aqua-light][_ngcontent-webapp-c34] {
            fill: #1eb5bd
        }

        .IconContainer[data-color=blue-xdark][_ngcontent-webapp-c34] {
            fill: #1772eb
        }

        .IconContainer[data-color=orange-xdark][_ngcontent-webapp-c34] {
            fill: #f57207
        }

        .IconContainer[data-disabled=true][_ngcontent-webapp-c34] {
            fill: #bcc5d3
        }

        .IconContainer[data-drop-shadow=true][_ngcontent-webapp-c34] {
            filter: drop-shadow(0 0 4px rgba(61, 74, 93, .08)) drop-shadow(0 2px 4px rgba(61, 74, 93, .12))
        }

        .IconContainer[data-hover-color=primary][_ngcontent-webapp-c34]:hover {
            fill: #1772eb
        }

        .IconContainer[data-hover-color=light][_ngcontent-webapp-c34]:hover {
            fill: var(--color-hover-mid)
        }

        .IconContainer[data-hover-color=dark][_ngcontent-webapp-c34]:hover {
            fill: var(--color-hover-dark)
        }

        .IconContainer[data-hover-color=currentColor][_ngcontent-webapp-c34]:hover {
            fill: currentColor
        }

        .IconContainer[data-legacy=true][_ngcontent-webapp-c34] {
            fill: none;
            stroke: currentColor
        }

        .IconContainer[data-legacy=true][data-color=light][_ngcontent-webapp-c34] {
            fill: none;
            stroke: #fcfcfd
        }

        .IconContainer[data-legacy=true][data-color=dark][_ngcontent-webapp-c34] {
            fill: none;
            stroke: #12151b
        }

        .IconContainer[data-legacy=true][data-color=white][_ngcontent-webapp-c34] {
            fill: none;
            stroke: var(--color-bg-light)
        }
    </style>
    <style>
        [data-use-icon-font=true][_nghost-webapp-c34] {
            display: inline-block;
            font-family: Material Symbols Outlined;
            vertical-align: middle
        }

        [data-use-icon-font=true][data-fill-icon-font=true][_nghost-webapp-c34] {
            font-variation-settings: "FILL" 1
        }

        [data-use-icon-font=true][data-fill-icon-font=false][_nghost-webapp-c34] {
            font-variation-settings: "FILL" 0
        }

        [data-use-icon-font=true][role=button][data-size=xsmall][_nghost-webapp-c34] {
            height: 20px;
            width: 20px
        }

        [data-use-icon-font=true][role=button][data-size=small][_nghost-webapp-c34] {
            height: 32px;
            width: 32px
        }

        [data-use-icon-font=true][role=button][data-size=mid][_nghost-webapp-c34] {
            height: 44px;
            width: 44px
        }

        [data-use-icon-font=true][role=button][data-size=large][_nghost-webapp-c34] {
            height: 64px;
            width: 64px
        }

        [data-use-icon-font=true][role=button][data-size=xlarge][_nghost-webapp-c34] {
            height: 88px;
            width: 88px
        }

        [data-use-icon-font=true][role=button][data-size=xxlarge][_nghost-webapp-c34] {
            height: 104px;
            width: 104px
        }

        @media (min-width: 768px) {
            [data-use-icon-font=true][role=button][data-size-tablet=xsmall][_nghost-webapp-c34] {
                height: 20px;
                width: 20px
            }

            [data-use-icon-font=true][role=button][data-size-tablet=small][_nghost-webapp-c34] {
                height: 32px;
                width: 32px
            }

            [data-use-icon-font=true][role=button][data-size-tablet=mid][_nghost-webapp-c34] {
                height: 44px;
                width: 44px
            }

            [data-use-icon-font=true][role=button][data-size-tablet=large][_nghost-webapp-c34] {
                height: 64px;
                width: 64px
            }

            [data-use-icon-font=true][role=button][data-size-tablet=xlarge][_nghost-webapp-c34] {
                height: 88px;
                width: 88px
            }

            [data-use-icon-font=true][role=button][data-size-tablet=xxlarge][_nghost-webapp-c34] {
                height: 104px;
                width: 104px
            }
        }

        @media (min-width: 960px) {
            [data-use-icon-font=true][role=button][data-size-desktop=xsmall][_nghost-webapp-c34] {
                height: 20px;
                width: 20px
            }

            [data-use-icon-font=true][role=button][data-size-desktop=small][_nghost-webapp-c34] {
                height: 32px;
                width: 32px
            }

            [data-use-icon-font=true][role=button][data-size-desktop=mid][_nghost-webapp-c34] {
                height: 44px;
                width: 44px
            }

            [data-use-icon-font=true][role=button][data-size-desktop=large][_nghost-webapp-c34] {
                height: 64px;
                width: 64px
            }

            [data-use-icon-font=true][role=button][data-size-desktop=xlarge][_nghost-webapp-c34] {
                height: 88px;
                width: 88px
            }

            [data-use-icon-font=true][role=button][data-size-desktop=xxlarge][_nghost-webapp-c34] {
                height: 104px;
                width: 104px
            }
        }

        [data-use-icon-font=true][data-backdrop][data-backdrop-style=pulse][data-size=xsmall][_nghost-webapp-c34] {
            height: 28px;
            width: 28px
        }

        [data-use-icon-font=true][data-backdrop][data-backdrop-style=pulse][data-size=small][_nghost-webapp-c34] {
            height: 40px;
            width: 40px
        }

        [data-use-icon-font=true][data-backdrop][data-backdrop-style=pulse][data-size=mid][_nghost-webapp-c34] {
            height: 56px;
            width: 56px
        }

        [data-use-icon-font=true][data-backdrop][data-backdrop-style=pulse][data-size=large][_nghost-webapp-c34] {
            height: 80px;
            width: 80px
        }

        [data-use-icon-font=true][data-backdrop][data-backdrop-style=pulse][data-size=xlarge][_nghost-webapp-c34] {
            height: 112px;
            width: 112px
        }

        [data-use-icon-font=true][data-backdrop][data-backdrop-style=pulse][data-size=xxlarge][_nghost-webapp-c34] {
            height: 136px;
            width: 136px
        }

        @media (min-width: 768px) {
            [data-use-icon-font=true][data-backdrop][data-backdrop-style=pulse][data-size-tablet=xsmall][_nghost-webapp-c34] {
                height: 28px;
                width: 28px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=pulse][data-size-tablet=small][_nghost-webapp-c34] {
                height: 40px;
                width: 40px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=pulse][data-size-tablet=mid][_nghost-webapp-c34] {
                height: 56px;
                width: 56px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=pulse][data-size-tablet=large][_nghost-webapp-c34] {
                height: 80px;
                width: 80px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=pulse][data-size-tablet=xlarge][_nghost-webapp-c34] {
                height: 112px;
                width: 112px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=pulse][data-size-tablet=xxlarge][_nghost-webapp-c34] {
                height: 136px;
                width: 136px
            }
        }

        @media (min-width: 960px) {
            [data-use-icon-font=true][data-backdrop][data-backdrop-style=pulse][data-size-desktop=xsmall][_nghost-webapp-c34] {
                height: 28px;
                width: 28px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=pulse][data-size-desktop=small][_nghost-webapp-c34] {
                height: 40px;
                width: 40px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=pulse][data-size-desktop=mid][_nghost-webapp-c34] {
                height: 56px;
                width: 56px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=pulse][data-size-desktop=large][_nghost-webapp-c34] {
                height: 80px;
                width: 80px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=pulse][data-size-desktop=xlarge][_nghost-webapp-c34] {
                height: 112px;
                width: 112px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=pulse][data-size-desktop=xxlarge][_nghost-webapp-c34] {
                height: 136px;
                width: 136px
            }
        }

        [data-use-icon-font=true][data-backdrop][data-backdrop-style=solid][data-size=xsmall][_nghost-webapp-c34] {
            height: 20px;
            width: 20px
        }

        [data-use-icon-font=true][data-backdrop][data-backdrop-style=solid][data-size=small][_nghost-webapp-c34] {
            height: 32px;
            width: 32px
        }

        [data-use-icon-font=true][data-backdrop][data-backdrop-style=solid][data-size=mid][_nghost-webapp-c34] {
            height: 44px;
            width: 44px
        }

        [data-use-icon-font=true][data-backdrop][data-backdrop-style=solid][data-size=large][_nghost-webapp-c34] {
            height: 64px;
            width: 64px
        }

        [data-use-icon-font=true][data-backdrop][data-backdrop-style=solid][data-size=xlarge][_nghost-webapp-c34] {
            height: 88px;
            width: 88px
        }

        [data-use-icon-font=true][data-backdrop][data-backdrop-style=solid][data-size=xxlarge][_nghost-webapp-c34] {
            height: 104px;
            width: 104px
        }

        @media (min-width: 768px) {
            [data-use-icon-font=true][data-backdrop][data-backdrop-style=solid][data-size-tablet=xsmall][_nghost-webapp-c34] {
                height: 20px;
                width: 20px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=solid][data-size-tablet=small][_nghost-webapp-c34] {
                height: 32px;
                width: 32px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=solid][data-size-tablet=mid][_nghost-webapp-c34] {
                height: 44px;
                width: 44px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=solid][data-size-tablet=large][_nghost-webapp-c34] {
                height: 64px;
                width: 64px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=solid][data-size-tablet=xlarge][_nghost-webapp-c34] {
                height: 88px;
                width: 88px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=solid][data-size-tablet=xxlarge][_nghost-webapp-c34] {
                height: 104px;
                width: 104px
            }
        }

        @media (min-width: 960px) {
            [data-use-icon-font=true][data-backdrop][data-backdrop-style=solid][data-size-desktop=xsmall][_nghost-webapp-c34] {
                height: 20px;
                width: 20px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=solid][data-size-desktop=small][_nghost-webapp-c34] {
                height: 32px;
                width: 32px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=solid][data-size-desktop=mid][_nghost-webapp-c34] {
                height: 44px;
                width: 44px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=solid][data-size-desktop=large][_nghost-webapp-c34] {
                height: 64px;
                width: 64px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=solid][data-size-desktop=xlarge][_nghost-webapp-c34] {
                height: 88px;
                width: 88px
            }

            [data-use-icon-font=true][data-backdrop][data-backdrop-style=solid][data-size-desktop=xxlarge][_nghost-webapp-c34] {
                height: 104px;
                width: 104px
            }
        }

        .IconFont[data-color=light][_ngcontent-webapp-c34] {
            color: #fcfcfd
        }

        .IconFont[data-color=dark][_ngcontent-webapp-c34] {
            color: #12151b
        }

        .IconFont[data-color=foreground][_ngcontent-webapp-c34] {
            color: var(--color-foreground)
        }

        .IconFont[data-color=primary][_ngcontent-webapp-c34] {
            color: #e60278
        }

        .IconFont[data-color=secondary][_ngcontent-webapp-c34] {
            color: #1772eb
        }

        .IconFont[data-color=contest][_ngcontent-webapp-c34] {
            color: #ffc24e
        }

        .IconFont[data-color=white][_ngcontent-webapp-c34] {
            color: var(--color-bg-light)
        }

        .IconFont[data-color=error][_ngcontent-webapp-c34] {
            color: #eb3730
        }

        .IconFont[data-color=warning][_ngcontent-webapp-c34] {
            color: #ffa32d
        }

        .IconFont[data-color=success][_ngcontent-webapp-c34] {
            color: #058430
        }

        .IconFont[data-color=recruiter-light][_ngcontent-webapp-c34] {
            color: #7f21f7
        }

        .IconFont[data-color=blue-xdark][_ngcontent-webapp-c34] {
            color: #1772eb
        }

        .IconFont[data-color=orange-xdark][_ngcontent-webapp-c34] {
            color: #f57207
        }

        .IconFont[data-disabled=true][_ngcontent-webapp-c34] {
            color: #bcc5d3
        }

        .IconFont[data-name=ui-account][_ngcontent-webapp-c34]:before {
            content: "\e851"
        }

        .IconFont[data-name=ui-account-balance][_ngcontent-webapp-c34]:before {
            content: "\e850"
        }

        .IconFont[data-name=ui-add-circle][_ngcontent-webapp-c34]:before {
            content: "\e147"
        }

        .IconFont[data-name=ui-add-note][_ngcontent-webapp-c34]:before {
            content: "\e091"
        }

        .IconFont[data-name=ui-plus][_ngcontent-webapp-c34]:before {
            content: "\e145"
        }

        .IconFont[data-name=ui-sun][_ngcontent-webapp-c34]:before {
            content: "\e518"
        }

        .IconFont[data-name=ui-moon][_ngcontent-webapp-c34]:before {
            content: "\e51c"
        }

        .IconFont[data-name=ui-add-square][_ngcontent-webapp-c34]:before {
            content: "\e146"
        }

        .IconFont[data-name=ui-analytics][_ngcontent-webapp-c34]:before {
            content: "\ef3e"
        }

        .IconFont[data-name=ui-api][_ngcontent-webapp-c34]:before {
            content: "\eb92"
        }

        .IconFont[data-name=ui-archive][_ngcontent-webapp-c34]:before {
            content: "\e149"
        }

        .IconFont[data-name=ui-arrow-down][_ngcontent-webapp-c34]:before {
            content: "\f1e3"
        }

        .IconFont[data-name=ui-arrow-left][_ngcontent-webapp-c34]:before {
            content: "\f1e6"
        }

        .IconFont[data-name=ui-arrow-right][_ngcontent-webapp-c34]:before {
            content: "\f1df"
        }

        .IconFont[data-name=ui-arrow-up][_ngcontent-webapp-c34]:before {
            content: "\f1e0"
        }

        .IconFont[data-name=ui-arrows-expand][_ngcontent-webapp-c34]:before {
            content: "\f830"
        }

        .IconFont[data-name=ui-arrows-contract][_ngcontent-webapp-c34]:before {
            content: "\f1cf"
        }

        .IconFont[data-name=ui-article][_ngcontent-webapp-c34]:before {
            content: "\ef42"
        }

        .IconFont[data-name=ui-assignment-turned-in][_ngcontent-webapp-c34]:before {
            content: "\e862"
        }

        .IconFont[data-name=ui-attachment][_ngcontent-webapp-c34]:before {
            content: "\e226"
        }

        .IconFont[data-name=ui-back][_ngcontent-webapp-c34]:before {
            content: "\e5c4"
        }

        .IconFont[data-name=ui-backup][_ngcontent-webapp-c34]:before {
            content: "\e864"
        }

        .IconFont[data-name=ui-badge][_ngcontent-webapp-c34]:before {
            content: "\ea67"
        }

        .IconFont[data-name=ui-bank][_ngcontent-webapp-c34]:before {
            content: "\e84f"
        }

        .IconFont[data-name=ui-book][_ngcontent-webapp-c34]:before {
            content: "\f53b"
        }

        .IconFont[data-name=ui-bar-chart][_ngcontent-webapp-c34]:before {
            content: "\e26b"
        }

        .IconFont[data-name=ui-bars-stats-v2][_ngcontent-webapp-c34]:before {
            content: "\e01d"
        }

        .IconFont[data-name=ui-bars-v2][_ngcontent-webapp-c34]:before {
            content: "\e5d2"
        }

        .IconFont[data-name=ui-beaker][_ngcontent-webapp-c34]:before {
            content: "\ea4b"
        }

        .IconFont[data-name=ui-bell-v2][_ngcontent-webapp-c34]:before {
            content: "\e7f4"
        }

        .IconFont[data-name=ui-bell-silent-v2][_ngcontent-webapp-c34]:before {
            content: "\e7f6"
        }

        .IconFont[data-name=ui-bin][_ngcontent-webapp-c34]:before {
            content: "\e872"
        }

        .IconFont[data-name=ui-block][_ngcontent-webapp-c34]:before {
            content: "\e14b"
        }

        .IconFont[data-name=ui-add-person][_ngcontent-webapp-c34]:before {
            content: "\e7fe"
        }

        .IconFont[data-name=ui-unlink][_ngcontent-webapp-c34]:before {
            content: "\e16f"
        }

        .IconFont[data-name=ui-home][_ngcontent-webapp-c34]:before {
            content: "\e88a"
        }

        .IconFont[data-name=ui-bookmark-v2][_ngcontent-webapp-c34]:before {
            content: "\e866"
        }

        .IconFont[data-name=ui-bookmark-remove][_ngcontent-webapp-c34]:before {
            content: "\e59a"
        }

        .IconFont[data-name=ui-bought-medal][_ngcontent-webapp-c34]:before {
            content: "\e7af"
        }

        .IconFont[data-name=ui-broken-image][_ngcontent-webapp-c34]:before {
            content: "\e3ad"
        }

        .IconFont[data-name=ui-exit][_ngcontent-webapp-c34]:before {
            content: "\e9ba"
        }

        .IconFont[data-name=ui-suitcase][_ngcontent-webapp-c34]:before {
            content: "\e8f9"
        }

        .IconFont[data-name=ui-group][_ngcontent-webapp-c34]:before {
            content: "\e7ef"
        }

        .IconFont[data-name=ui-gift][_ngcontent-webapp-c34]:before {
            content: "\e8b1"
        }

        .IconFont[data-name=ui-browse][_ngcontent-webapp-c34]:before {
            content: "\e87a"
        }

        .IconFont[data-name=ui-browse-outline][_ngcontent-webapp-c34]:before {
            content: "\e87a"
        }

        .IconFont[data-name=ui-brush][_ngcontent-webapp-c34]:before {
            content: "\e3ae"
        }

        .IconFont[data-name=ui-calendar-v2][_ngcontent-webapp-c34]:before {
            content: "\e935"
        }

        .IconFont[data-name=ui-cake][_ngcontent-webapp-c34]:before {
            content: "\e7e9"
        }

        .IconFont[data-name=ui-camera][_ngcontent-webapp-c34]:before {
            content: "\e412"
        }

        .IconFont[data-name=ui-camera-switch-v2][_ngcontent-webapp-c34]:before {
            content: "\ea38"
        }

        .IconFont[data-name=ui-campaign][_ngcontent-webapp-c34]:before {
            content: "\ef49"
        }

        .IconFont[data-name=ui-cards][_ngcontent-webapp-c34]:before {
            content: "\e41d"
        }

        .IconFont[data-name=ui-category][_ngcontent-webapp-c34]:before {
            content: "\e574"
        }

        .IconFont[data-name=ui-chart-donut][_ngcontent-webapp-c34]:before {
            content: "\e1af"
        }

        .IconFont[data-name=ui-chat][_ngcontent-webapp-c34]:before {
            content: "\e625"
        }

        .IconFont[data-name=ui-chat-square][_ngcontent-webapp-c34]:before {
            content: "\e0ca"
        }

        .IconFont[data-name=ui-check][_ngcontent-webapp-c34]:before {
            content: "\e876"
        }

        .IconFont[data-name=ui-check-circle][_ngcontent-webapp-c34]:before {
            content: "\e2e6"
        }

        .IconFont[data-name=ui-check-in-circle-v2][_ngcontent-webapp-c34]:before {
            content: "\e86c"
        }

        .IconFont[data-name=ui-chevron-down][_ngcontent-webapp-c34]:before {
            content: "\e5cf"
        }

        .IconFont[data-name=ui-chevron-left][_ngcontent-webapp-c34]:before {
            content: "\e5cb"
        }

        .IconFont[data-name=ui-chevron-right][_ngcontent-webapp-c34]:before {
            content: "\e5cc"
        }

        .IconFont[data-name=ui-chevron-up][_ngcontent-webapp-c34]:before {
            content: "\e5ce"
        }

        .IconFont[data-name=ui-clock-v2][_ngcontent-webapp-c34]:before {
            content: "\e8b5"
        }

        .IconFont[data-name=ui-close][_ngcontent-webapp-c34]:before {
            content: "\e5cd"
        }

        .IconFont[data-name=ui-close-alt][_ngcontent-webapp-c34]:before {
            content: "\e5c9"
        }

        .IconFont[data-name=ui-code][_ngcontent-webapp-c34]:before {
            content: "\e86f"
        }

        .IconFont[data-name=ui-cog-v2][_ngcontent-webapp-c34]:before {
            content: "\e8b8"
        }

        .IconFont[data-name=ui-comment][_ngcontent-webapp-c34]:before {
            content: "\e0b9"
        }

        .IconFont[data-name=ui-chat-bubble][_ngcontent-webapp-c34]:before {
            content: "\e0ca"
        }

        .IconFont[data-name=ui-community][_ngcontent-webapp-c34]:before {
            content: "\e0bf"
        }

        .IconFont[data-name=ui-computer][_ngcontent-webapp-c34]:before {
            content: "\e30c"
        }

        .IconFont[data-name=ui-credit-card-v2][_ngcontent-webapp-c34]:before {
            content: "\e870"
        }

        .IconFont[data-name=ui-creditcard-check-v2][_ngcontent-webapp-c34]:before {
            content: "\eff1"
        }

        .IconFont[data-name=ui-delete-forever][_ngcontent-webapp-c34]:before {
            content: "\e92b"
        }

        .IconFont[data-name=ui-description][_ngcontent-webapp-c34]:before {
            content: "\e873"
        }

        .IconFont[data-name=ui-design-services][_ngcontent-webapp-c34]:before {
            content: "\f10a"
        }

        .IconFont[data-name=ui-devices-v2][_ngcontent-webapp-c34]:before {
            content: "\e1b1"
        }

        .IconFont[data-name=ui-document-list][_ngcontent-webapp-c34]:before {
            content: "\e0ee"
        }

        .IconFont[data-name=ui-dollar][_ngcontent-webapp-c34]:before {
            content: "\e227"
        }

        .IconFont[data-name=ui-dollar-alt][_ngcontent-webapp-c34]:before {
            content: "\e263"
        }

        .IconFont[data-name=ui-dollar-circled-v2][_ngcontent-webapp-c34]:before {
            content: "\e263"
        }

        .IconFont[data-name=ui-done-all][_ngcontent-webapp-c34]:before {
            content: "\e877"
        }

        .IconFont[data-name=ui-tick][_ngcontent-webapp-c34]:before {
            content: "\e5ca"
        }

        .IconFont[data-name=ui-download-v2][_ngcontent-webapp-c34]:before {
            content: "\e2c0"
        }

        .IconFont[data-name=ui-drag-indicator][_ngcontent-webapp-c34]:before {
            content: "\e945"
        }

        .IconFont[data-name=ui-edit][_ngcontent-webapp-c34]:before {
            content: "\e3c9"
        }

        .IconFont[data-name=ui-education][_ngcontent-webapp-c34]:before {
            content: "\e80c"
        }

        .IconFont[data-name=ui-ellipsis][_ngcontent-webapp-c34]:before {
            content: "\e5d3"
        }

        .IconFont[data-name=ui-engineering][_ngcontent-webapp-c34]:before {
            content: "\ea3d"
        }

        .IconFont[data-name=ui-error][_ngcontent-webapp-c34]:before {
            content: "\e000"
        }

        .IconFont[data-name=ui-event-available][_ngcontent-webapp-c34]:before {
            content: "\e614"
        }

        .IconFont[data-name=ui-event-upcoming][_ngcontent-webapp-c34]:before {
            content: "\f238"
        }

        .IconFont[data-name=ui-flag][_ngcontent-webapp-c34]:before {
            content: "\e153"
        }

        .IconFont[data-name=ui-folder-open][_ngcontent-webapp-c34]:before {
            content: "\e2c8"
        }

        .IconFont[data-name=ui-format-paint][_ngcontent-webapp-c34]:before {
            content: "\e243"
        }

        .IconFont[data-name=ui-format-quote][_ngcontent-webapp-c34]:before {
            content: "\e244"
        }

        .IconFont[data-name=ui-full-screen][_ngcontent-webapp-c34]:before {
            content: "\f1ce"
        }

        .IconFont[data-name=ui-handshake][_ngcontent-webapp-c34]:before {
            content: "\ebcb"
        }

        .IconFont[data-name=ui-handyman][_ngcontent-webapp-c34]:before {
            content: "\f10b"
        }

        .IconFont[data-name=ui-headphones][_ngcontent-webapp-c34]:before {
            content: "\f01f"
        }

        .IconFont[data-name=ui-heart][_ngcontent-webapp-c34]:before {
            content: "\e87d"
        }

        .IconFont[data-name=ui-image][_ngcontent-webapp-c34]:before {
            content: "\e3f4"
        }

        .IconFont[data-name=ui-info][_ngcontent-webapp-c34]:before {
            content: "\e88e"
        }

        .IconFont[data-name=ui-insert-chart][_ngcontent-webapp-c34]:before {
            content: "\e24b"
        }

        .IconFont[data-name=ui-language][_ngcontent-webapp-c34]:before {
            content: "\e894"
        }

        .IconFont[data-name=ui-lightbulb][_ngcontent-webapp-c34]:before {
            content: "\e0f0"
        }

        .IconFont[data-name=ui-link][_ngcontent-webapp-c34]:before {
            content: "\e157"
        }

        .IconFont[data-name=ui-lock][_ngcontent-webapp-c34]:before {
            content: "\e897"
        }

        .IconFont[data-name=ui-mail][_ngcontent-webapp-c34]:before {
            content: "\e158"
        }

        .IconFont[data-name=ui-magic-microphone][_ngcontent-webapp-c34]:before {
            content: "\f83e"
        }

        .IconFont[data-name=ui-mark-email-read][_ngcontent-webapp-c34]:before {
            content: "\f18c"
        }

        .IconFont[data-name=ui-miscellaneous-services][_ngcontent-webapp-c34]:before {
            content: "\f10c"
        }

        .IconFont[data-name=ui-monitoring][_ngcontent-webapp-c34]:before {
            content: "\f190"
        }

        .IconFont[data-name=ui-multifile][_ngcontent-webapp-c34]:before {
            content: "\e3e0"
        }

        .IconFont[data-name=ui-show-more-h][_ngcontent-webapp-c34]:before {
            content: "\e5d3"
        }

        .IconFont[data-name=ui-notes][_ngcontent-webapp-c34]:before {
            content: "\e26c"
        }

        .IconFont[data-name=ui-payments][_ngcontent-webapp-c34]:before {
            content: "\ef63"
        }

        .IconFont[data-name=ui-pin-drop][_ngcontent-webapp-c34]:before {
            content: "\e55e"
        }

        .IconFont[data-name=ui-pencil][_ngcontent-webapp-c34]:before {
            content: "\e22b"
        }

        .IconFont[data-name=ui-person][_ngcontent-webapp-c34]:before {
            content: "\e7fd"
        }

        .IconFont[data-name=ui-person-pin][_ngcontent-webapp-c34]:before {
            content: "\e56a"
        }

        .IconFont[data-name=ui-person-brain][_ngcontent-webapp-c34]:before {
            content: "\ea4a"
        }

        .IconFont[data-name=ui-person-remove][_ngcontent-webapp-c34]:before {
            content: "\ef66"
        }

        .IconFont[data-name=ui-phone][_ngcontent-webapp-c34]:before {
            content: "\e0b0"
        }

        .IconFont[data-name=ui-phone-down][_ngcontent-webapp-c34]:before {
            content: "\e0b1"
        }

        .IconFont[data-name=ui-publication][_ngcontent-webapp-c34]:before {
            content: "\e09e"
        }

        .IconFont[data-name=ui-public][_ngcontent-webapp-c34]:before {
            content: "\e80b"
        }

        .IconFont[data-name=ui-repeat][_ngcontent-webapp-c34]:before {
            content: "\e040"
        }

        .IconFont[data-name=ui-science][_ngcontent-webapp-c34]:before {
            content: "\ea4b"
        }

        .IconFont[data-name=ui-search][_ngcontent-webapp-c34]:before {
            content: "\e8b6"
        }

        .IconFont[data-name=ui-share][_ngcontent-webapp-c34]:before {
            content: "\e80d"
        }

        .IconFont[data-name=ui-smart-toy][_ngcontent-webapp-c34]:before {
            content: "\f06c"
        }

        .IconFont[data-name=ui-smiley][_ngcontent-webapp-c34]:before {
            content: "\e7f2"
        }

        .IconFont[data-name=ui-social-leaderboard][_ngcontent-webapp-c34]:before {
            content: "\f6a0"
        }

        .IconFont[data-name=ui-star][_ngcontent-webapp-c34]:before {
            content: "\e838"
        }

        .IconFont[data-name=ui-subtract-circle][_ngcontent-webapp-c34]:before {
            content: "\e644"
        }

        .IconFont[data-name=ui-suitcase-outline][_ngcontent-webapp-c34]:before {
            content: "\e8f9"
        }

        .IconFont[data-name=ui-terminal][_ngcontent-webapp-c34]:before {
            content: "\eb8e"
        }

        .IconFont[data-name=ui-thumb-up][_ngcontent-webapp-c34]:before {
            content: "\e8dc"
        }

        .IconFont[data-name=ui-thumb-down][_ngcontent-webapp-c34]:before {
            content: "\e8db"
        }

        .IconFont[data-name=ui-trophy][_ngcontent-webapp-c34]:before {
            content: "\e71a"
        }

        .IconFont[data-name=ui-user-cog-outline][_ngcontent-webapp-c34]:before {
            content: "\f02e"
        }

        .IconFont[data-name=ui-video][_ngcontent-webapp-c34]:before {
            content: "\e04b"
        }

        .IconFont[data-name=ui-volume-off][_ngcontent-webapp-c34]:before {
            content: "\e04f"
        }

        .IconFont[data-name=ui-vpn-lock][_ngcontent-webapp-c34]:before {
            content: "\e62f"
        }

        .IconFont[data-name=ui-visibility][_ngcontent-webapp-c34]:before {
            content: "\e8f4"
        }

        .IconFont[data-name=ui-visibility-off][_ngcontent-webapp-c34]:before {
            content: "\e8f5"
        }

        .IconFont[data-name=ui-warning][_ngcontent-webapp-c34]:before {
            content: "\e002"
        }

        .IconFont[data-name=ui-work][_ngcontent-webapp-c34]:before {
            content: "\e8f9"
        }

        .IconFont[data-name=ui-work-history][_ngcontent-webapp-c34]:before {
            content: "\ec09"
        }

        .IconFont[data-name=ui-pause-circle][_ngcontent-webapp-c34]:before {
            content: "\e1a2"
        }

        .IconFont[data-name=ui-more-vert][_ngcontent-webapp-c34]:before {
            content: "\e5d4"
        }

        .IconFont[data-name=ui-resume][_ngcontent-webapp-c34]:before {
            content: "\f7d0"
        }

        .IconFont[data-name=ui-assignment-add][_ngcontent-webapp-c34]:before {
            content: "\f848"
        }

        .IconFont[data-name=ui-forward-mail][_ngcontent-webapp-c34]:before {
            content: "\f187"
        }

        .IconFont[data-name=ui-mobile-phone][_ngcontent-webapp-c34]:before {
            content: "\e325"
        }

        .IconFont[data-hover-color=primary][_ngcontent-webapp-c34]:hover {
            color: #1772eb
        }

        .IconFont[data-hover-color=light][_ngcontent-webapp-c34]:hover {
            color: var(--color-hover-mid)
        }

        .IconFont[data-hover-color=dark][_ngcontent-webapp-c34]:hover {
            color: var(--color-hover-dark)
        }

        .IconFont[data-hover-color=currentColor][_ngcontent-webapp-c34]:hover {
            color: currentColor
        }

        .IconFont[data-size=xsmall][_ngcontent-webapp-c34] {
            font-size: 16px
        }

        .IconFont[data-size=small][_ngcontent-webapp-c34] {
            font-size: 24px
        }

        .IconFont[data-size=mid][_ngcontent-webapp-c34] {
            font-size: 32px
        }

        .IconFont[data-size=large][_ngcontent-webapp-c34] {
            font-size: 48px
        }

        .IconFont[data-size=xlarge][_ngcontent-webapp-c34] {
            font-size: 64px
        }

        .IconFont[data-size=xxlarge][_ngcontent-webapp-c34] {
            font-size: 72px
        }

        .IconFont[data-weight=bold][_ngcontent-webapp-c34] {
            font-weight: 700
        }

        .IconFont[data-weight=medium][_ngcontent-webapp-c34] {
            font-weight: 500
        }

        .IconFont[data-weight=normal][_ngcontent-webapp-c34] {
            font-weight: 400
        }

        .IconFont[data-weight=light][_ngcontent-webapp-c34] {
            font-weight: 300
        }

        .IconFont[data-weight=inherit][_ngcontent-webapp-c34] {
            font-weight: inherit
        }

        .IconFont[data-use-icon-font=true][data-role=button][_ngcontent-webapp-c34] {
            background-color: transparent;
            border-radius: 50%;
            cursor: pointer;
            outline: 0;
            position: relative
        }

        .IconFont[data-use-icon-font=true][data-role=button][_ngcontent-webapp-c34] .IconInner[_ngcontent-webapp-c34] {
            outline: 0
        }

        .IconFont[data-use-icon-font=true][data-role=button][_ngcontent-webapp-c34]:hover,
        .IconFont[data-use-icon-font=true][data-role=button][_ngcontent-webapp-c34]:focus {
            background-color: #bcc5d34d;
            transition: background .2s ease-out
        }

        .IconFont[data-use-icon-font=true][data-role=button][_ngcontent-webapp-c34]:active {
            background-color: #bcc5d3;
            transition: background 0s
        }

        .IconFont[data-backdrop][_ngcontent-webapp-c34],
        .IconFont[data-role=button][_ngcontent-webapp-c34] {
            align-items: center;
            border-radius: 50%;
            display: flex;
            height: 100%;
            justify-content: center;
            width: 100%
        }

        .IconFont[data-drop-shadow=true][_ngcontent-webapp-c34] {
            filter: drop-shadow(0 0 4px rgba(61, 74, 93, .08)) drop-shadow(0 2px 4px rgba(61, 74, 93, .12))
        }

        @media (min-width: 768px) {
            .IconFont[data-size-tablet=xsmall][_ngcontent-webapp-c34] {
                font-size: 16px
            }

            .IconFont[data-size-tablet=small][_ngcontent-webapp-c34] {
                font-size: 24px
            }

            .IconFont[data-size-tablet=mid][_ngcontent-webapp-c34] {
                font-size: 32px
            }

            .IconFont[data-size-tablet=large][_ngcontent-webapp-c34] {
                font-size: 48px
            }

            .IconFont[data-size-tablet=xlarge][_ngcontent-webapp-c34] {
                font-size: 64px
            }

            .IconFont[data-size-tablet=xxlarge][_ngcontent-webapp-c34] {
                font-size: 72px
            }
        }

        @media (min-width: 960px) {
            .IconFont[data-size-desktop=xsmall][_ngcontent-webapp-c34] {
                font-size: 16px
            }

            .IconFont[data-size-desktop=small][_ngcontent-webapp-c34] {
                font-size: 24px
            }

            .IconFont[data-size-desktop=mid][_ngcontent-webapp-c34] {
                font-size: 32px
            }

            .IconFont[data-size-desktop=large][_ngcontent-webapp-c34] {
                font-size: 48px
            }

            .IconFont[data-size-desktop=xlarge][_ngcontent-webapp-c34] {
                font-size: 64px
            }

            .IconFont[data-size-desktop=xxlarge][_ngcontent-webapp-c34] {
                font-size: 72px
            }
        }
    </style>
    <style>
        [_nghost-webapp-c38] {
            cursor: pointer;
            position: relative
        }

        [disabled=true][_nghost-webapp-c38],
        [data-busy=true][_nghost-webapp-c38] {
            pointer-events: none
        }

        [data-color][_nghost-webapp-c38] {
            font-size: 15px;
            line-height: 1.4;
            border: 1px solid;
            border-radius: 3px;
            display: inline-block;
            font-weight: 700;
            padding: 6px 13px;
            text-align: center
        }

        [data-color][_nghost-webapp-c38]:active:not(.ButtonGroupFirst):not(.ButtonGroupMiddle):not(.ButtonGroupLast),
        [data-color][_nghost-webapp-c38]:focus:not(.ButtonGroupFirst):not(.ButtonGroupMiddle):not(.ButtonGroupLast),
        [data-color][_nghost-webapp-c38]:focus:active:not(.ButtonGroupFirst):not(.ButtonGroupMiddle):not(.ButtonGroupLast) {
            transform: scale(.96)
        }

        [data-color][_nghost-webapp-c38]:hover:not(:active) {
            transition: background-color .1s linear, border-color .1s linear
        }

        [data-color][_nghost-webapp-c38]:active {
            outline: 0
        }

        [data-color][disabled=true][_nghost-webapp-c38] {
            background: #fcfcfd;
            border-color: #fcfcfd;
            color: #bcc5d3
        }

        [data-color][data-busy=true][_nghost-webapp-c38] {
            position: relative;
            -webkit-user-select: none;
            user-select: none
        }

        [data-color][data-busy=true][_nghost-webapp-c38] .ButtonElement[_ngcontent-webapp-c38] {
            opacity: 0
        }

        [data-color][data-busy=true][_nghost-webapp-c38] .LoadingSpinner[_ngcontent-webapp-c38] {
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%)
        }

        [data-color][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #fff
        }

        [data-color=default][_nghost-webapp-c38] {
            background: #fcfcfd;
            border-color: #bcc5d3;
            color: #3d4a5d
        }

        [data-color=default][_nghost-webapp-c38]:hover {
            background: #ededf3
        }

        [data-color=default][_nghost-webapp-c38]:active {
            background: #e7e7ef
        }

        @media (hover: none) {
            [data-color=default][_nghost-webapp-c38]:hover:not(:active):not([disabled=true]) {
                background: #fcfcfd
            }
        }

        [data-color=default][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #3d4a5d
        }

        [data-color=default].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=default].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid #ededf3
        }

        [data-color=default].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=default].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid #bcc5d3
        }

        [data-color=success][_nghost-webapp-c38] {
            background: #058430;
            border-color: transparent;
            color: #fcfcfd
        }

        [data-color=success][_nghost-webapp-c38]:hover {
            background: #046b27
        }

        [data-color=success][_nghost-webapp-c38]:active {
            background: #046223
        }

        @media (hover: none) {
            [data-color=success][_nghost-webapp-c38]:hover:not(:active):not([disabled=true]) {
                background: #058430
            }
        }

        [data-color=success][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #fcfcfd
        }

        [data-color=success].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=success].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid #046b27
        }

        [data-color=secondary][_nghost-webapp-c38] {
            background: #1772eb;
            border-color: transparent;
            color: #fcfcfd
        }

        [data-color=secondary][_nghost-webapp-c38]:hover {
            background: #1266d6
        }

        [data-color=secondary][_nghost-webapp-c38]:active {
            background: #1262cd
        }

        @media (hover: none) {
            [data-color=secondary][_nghost-webapp-c38]:hover:not(:active):not([disabled=true]) {
                background: #1772eb
            }
        }

        [data-color=secondary][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #fcfcfd
        }

        [data-color=secondary].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=secondary].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid #1266d6
        }

        [data-color=primary][_nghost-webapp-c38] {
            background: #e60278;
            border-color: transparent;
            color: #fcfcfd
        }

        [data-color=primary][_nghost-webapp-c38]:hover {
            background: #cd026b
        }

        [data-color=primary][_nghost-webapp-c38]:active {
            background: #c30266
        }

        @media (hover: none) {
            [data-color=primary][_nghost-webapp-c38]:hover:not(:active):not([disabled=true]) {
                background: #e60278
            }
        }

        [data-color=primary][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #fcfcfd
        }

        [data-color=primary].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=primary].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid #cd026b
        }

        [data-color=danger][_nghost-webapp-c38] {
            background: #e02a28;
            border-color: transparent;
            color: #fcfcfd
        }

        [data-color=danger][_nghost-webapp-c38]:hover {
            background: #d0201e
        }

        [data-color=danger][_nghost-webapp-c38]:active {
            background: #c81f1d
        }

        @media (hover: none) {
            [data-color=danger][_nghost-webapp-c38]:hover:not(:active):not([disabled=true]) {
                background: #e02a28
            }
        }

        [data-color=danger][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #fcfcfd
        }

        [data-color=danger].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=danger].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid #d0201e
        }

        [data-color=recruiter][_nghost-webapp-c38] {
            background: #7f21f7;
            border-color: transparent;
            color: #fcfcfd
        }

        [data-color=recruiter][_nghost-webapp-c38]:hover {
            background: #7109f6
        }

        [data-color=recruiter][_nghost-webapp-c38]:active {
            background: #6c08ec
        }

        @media (hover: none) {
            [data-color=recruiter][_nghost-webapp-c38]:hover:not(:active):not([disabled=true]) {
                background: #7f21f7
            }
        }

        [data-color=recruiter][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #fcfcfd
        }

        [data-color=recruiter].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=recruiter].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid #7109f6
        }

        [data-color=preferred-freelancer][_nghost-webapp-c38] {
            background: #ff6700;
            border-color: transparent;
            color: #fcfcfd
        }

        [data-color=preferred-freelancer][_nghost-webapp-c38]:hover {
            background: #e65d00
        }

        [data-color=preferred-freelancer][_nghost-webapp-c38]:active {
            background: #db5900
        }

        @media (hover: none) {
            [data-color=preferred-freelancer][_nghost-webapp-c38]:hover:not(:active):not([disabled=true]) {
                background: #ff6700
            }
        }

        [data-color=preferred-freelancer][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #fcfcfd
        }

        [data-color=preferred-freelancer].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=preferred-freelancer].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid #e65d00
        }

        [data-color=transparent-dark][_nghost-webapp-c38] {
            background: transparent;
            border-color: #3d4a5d;
            color: #3d4a5d
        }

        [data-color=transparent-dark][_nghost-webapp-c38]:hover {
            color: #29313e
        }

        @media (hover: none) {
            [data-color=transparent-dark][_nghost-webapp-c38]:hover:not(:active):not([disabled=true]) {
                background: transparent
            }
        }

        [data-color=transparent-dark][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #3d4a5d
        }

        [data-color=transparent-dark].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=transparent-dark].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid #29313e
        }

        [data-color=transparent-secondary][_nghost-webapp-c38] {
            background: transparent;
            border-color: #1772eb;
            color: #1772eb
        }

        [data-color=transparent-secondary][_nghost-webapp-c38]:hover {
            color: #105bbf
        }

        @media (hover: none) {
            [data-color=transparent-secondary][_nghost-webapp-c38]:hover:not(:active):not([disabled=true]) {
                background: transparent
            }
        }

        [data-color=transparent-secondary][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #1772eb
        }

        [data-color=transparent-secondary].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=transparent-secondary].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid #105bbf
        }

        [data-color=transparent-secondary][disabled=true][_nghost-webapp-c38] {
            background: transparent;
            border-color: #fcfcfd;
            color: #bcc5d3
        }

        [data-color=transparent-light][_nghost-webapp-c38] {
            background: transparent;
            border-color: #fff;
            color: #fff
        }

        [data-color=transparent-light][_nghost-webapp-c38]:hover {
            color: #e6e6e6
        }

        @media (hover: none) {
            [data-color=transparent-light][_nghost-webapp-c38]:hover:not(:active):not([disabled=true]) {
                background: transparent
            }
        }

        [data-color=transparent-light][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #fff
        }

        [data-color=transparent-light].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=transparent-light].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid #e6e6e6
        }

        [data-color=transparent-light][disabled=true][_nghost-webapp-c38] {
            background: transparent;
            border-color: #fcfcfd;
            color: #bcc5d3
        }

        [data-color=transparent-primary][_nghost-webapp-c38] {
            background: transparent;
            border-color: #e60278;
            color: #e60278
        }

        [data-color=transparent-primary][_nghost-webapp-c38]:hover {
            color: #b3025e
        }

        @media (hover: none) {
            [data-color=transparent-primary][_nghost-webapp-c38]:hover:not(:active):not([disabled=true]) {
                background: transparent
            }
        }

        [data-color=transparent-primary][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #e60278
        }

        [data-color=transparent-primary].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=transparent-primary].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid #b3025e
        }

        [data-color=transparent-primary][disabled=true][_nghost-webapp-c38] {
            background: transparent;
            border-color: #fcfcfd;
            color: #bcc5d3
        }

        [data-color=transparent-recruiter][_nghost-webapp-c38] {
            background: transparent;
            border-color: #7f21f7;
            color: #7f21f7
        }

        [data-color=transparent-recruiter][_nghost-webapp-c38]:hover {
            color: #6608dd
        }

        @media (hover: none) {
            [data-color=transparent-recruiter][_nghost-webapp-c38]:hover:not(:active):not([disabled=true]) {
                background: transparent
            }
        }

        [data-color=transparent-recruiter][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #7f21f7
        }

        [data-color=transparent-recruiter].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=transparent-recruiter].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid #6608dd
        }

        [data-color=transparent-recruiter][disabled=true][_nghost-webapp-c38] {
            background: transparent;
            border-color: #fcfcfd;
            color: #bcc5d3
        }

        [data-color=text-blue][_nghost-webapp-c38] {
            background: transparent;
            border-color: transparent;
            color: #1772eb
        }

        [data-color=text-blue][_nghost-webapp-c38]:hover {
            background-color: #1772eb1a
        }

        @media (hover: none) {
            [data-color=text-blue][_nghost-webapp-c38]:hover:not(:active):not([disabled=true]) {
                background: transparent
            }
        }

        [data-color=text-blue][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #1772eb
        }

        [data-color=text-blue].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=text-blue].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid rgba(23, 114, 235, .1)
        }

        [data-color=text-blue][disabled=true][_nghost-webapp-c38] {
            background: transparent;
            border-color: transparent;
            color: #bcc5d3
        }

        [data-color=text-primary][_nghost-webapp-c38] {
            background: transparent;
            border-color: transparent;
            color: #e60278
        }

        [data-color=text-primary][_nghost-webapp-c38]:hover {
            background-color: #e602781a
        }

        @media (hover: none) {
            [data-color=text-primary][_nghost-webapp-c38]:hover:not(:active):not([disabled=true]) {
                background: transparent
            }
        }

        [data-color=text-primary][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #e60278
        }

        [data-color=text-primary].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=text-primary].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid rgba(230, 2, 120, .1)
        }

        [data-color=text-primary][disabled=true][_nghost-webapp-c38] {
            background: transparent;
            border-color: transparent;
            color: #bcc5d3
        }

        [data-color=text-dark][_nghost-webapp-c38] {
            background: transparent;
            border-color: transparent;
            color: #3d4a5d
        }

        [data-color=text-dark][_nghost-webapp-c38]:hover {
            background-color: #3d4a5d1a
        }

        @media (hover: none) {
            [data-color=text-dark][_nghost-webapp-c38]:hover:not(:active):not([disabled=true]) {
                background: transparent
            }
        }

        [data-color=text-dark][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #3d4a5d
        }

        [data-color=text-dark].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=text-dark].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid rgba(61, 74, 93, .1)
        }

        [data-color=text-dark][disabled=true][_nghost-webapp-c38] {
            background: transparent;
            border-color: transparent;
            color: #bcc5d3
        }

        [data-color=text-light][_nghost-webapp-c38] {
            background: transparent;
            border-color: transparent;
            color: #fcfcfd
        }

        [data-color=text-light][_nghost-webapp-c38]:hover {
            background-color: #fcfcfd1a
        }

        @media (hover: none) {
            [data-color=text-light][_nghost-webapp-c38]:hover:not(:active):not([disabled=true]) {
                background: transparent
            }
        }

        [data-color=text-light][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #fcfcfd
        }

        [data-color=text-light].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=text-light].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid rgba(252, 252, 253, .1)
        }

        [data-color=text-light][disabled=true][_nghost-webapp-c38] {
            background: transparent;
            border-color: transparent;
            color: #bcc5d3
        }

        [data-color=text-recruiter][_nghost-webapp-c38] {
            background: transparent;
            border-color: transparent;
            color: #7f21f7
        }

        [data-color=text-recruiter][_nghost-webapp-c38]:hover {
            background-color: #7f21f71a
        }

        @media (hover: none) {
            [data-color=text-recruiter][_nghost-webapp-c38]:hover:not(:active):not([disabled=true]) {
                background: transparent
            }
        }

        [data-color=text-recruiter][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #7f21f7
        }

        [data-color=text-recruiter].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=text-recruiter].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid rgba(127, 33, 247, .1)
        }

        [data-color=text-recruiter][disabled=true][_nghost-webapp-c38] {
            background: transparent;
            border-color: transparent;
            color: #bcc5d3
        }

        [data-color=text-red][_nghost-webapp-c38] {
            background: transparent;
            border-color: transparent;
            color: #eb3730
        }

        [data-color=text-red][_nghost-webapp-c38]:hover {
            background-color: #eb37301a
        }

        @media (hover: none) {
            [data-color=text-red][_nghost-webapp-c38]:hover:not(:active):not([disabled=true]) {
                background: transparent
            }
        }

        [data-color=text-red][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: #eb3730
        }

        [data-color=text-red].ButtonGroupFirst[_nghost-webapp-c38],
        [data-color=text-red].ButtonGroupMiddle[_nghost-webapp-c38] {
            border-right: 1px solid rgba(235, 55, 48, .1)
        }

        [data-color=text-red][disabled=true][_nghost-webapp-c38] {
            background: transparent;
            border-color: transparent;
            color: #bcc5d3
        }

        [data-color=custom][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            fill: inherit
        }

        [data-size=mini][_nghost-webapp-c38] {
            font-size: 14px;
            line-height: 1.43;
            padding: 4px 12px
        }

        [data-size=mini][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            height: 12px;
            width: 12px
        }

        [data-size=small][_nghost-webapp-c38] {
            font-size: 15px;
            line-height: 1.4;
            padding: 6px 13px
        }

        [data-size=small][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            height: 13px;
            width: 13px
        }

        [data-size=mid][_nghost-webapp-c38] {
            font-size: 15px;
            line-height: 1.4;
            padding: 8px 22px
        }

        [data-size=large][_nghost-webapp-c38] {
            font-size: 20px;
            line-height: 1.4;
            padding: 8px 22px
        }

        [data-size=large][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            height: 16px;
            width: 16px
        }

        [data-size=xlarge][_nghost-webapp-c38] {
            font-size: 20px;
            line-height: 1.4;
            padding: 13px 26px
        }

        [data-size=xlarge][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            height: 16px;
            width: 16px
        }

        [data-size=xxlarge][_nghost-webapp-c38] {
            font-size: 24px;
            line-height: 1.33;
            padding: 15px 26px
        }

        [data-size=xxlarge][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            height: 18px;
            width: 18px
        }

        [data-display=inline][_nghost-webapp-c38] {
            display: inline;
            width: auto
        }

        [data-display=inline][data-color][_nghost-webapp-c38] {
            display: inline-block
        }

        [data-display=block][_nghost-webapp-c38] {
            display: block;
            width: 100%
        }

        [data-display=flex][_nghost-webapp-c38] {
            align-items: center;
            display: flex;
            width: auto
        }

        @media (min-width: 768px) {
            [data-size-tablet=mini][_nghost-webapp-c38] {
                font-size: 14px;
                line-height: 1.43;
                padding: 4px 12px
            }

            [data-size-tablet=mini][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
                height: 12px;
                width: 12px
            }

            [data-size-tablet=small][_nghost-webapp-c38] {
                font-size: 15px;
                line-height: 1.4;
                padding: 6px 13px
            }

            [data-size-tablet=small][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
                height: 13px;
                width: 13px
            }

            [data-size-tablet=mid][_nghost-webapp-c38] {
                font-size: 15px;
                line-height: 1.4;
                padding: 8px 22px
            }

            [data-size-tablet=large][_nghost-webapp-c38] {
                font-size: 20px;
                line-height: 1.4;
                padding: 8px 22px
            }

            [data-size-tablet=large][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
                height: 16px;
                width: 16px
            }

            [data-size-tablet=xlarge][_nghost-webapp-c38] {
                font-size: 20px;
                line-height: 1.4;
                padding: 13px 26px
            }

            [data-size-tablet=xlarge][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
                height: 16px;
                width: 16px
            }

            [data-size-tablet=xxlarge][_nghost-webapp-c38] {
                font-size: 24px;
                line-height: 1.33;
                padding: 15px 26px
            }

            [data-size-tablet=xxlarge][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
                height: 18px;
                width: 18px
            }

            [data-display-tablet=inline][_nghost-webapp-c38] {
                display: inline;
                width: auto
            }

            [data-display-tablet=inline][data-color][_nghost-webapp-c38] {
                display: inline-block
            }

            [data-display-tablet=block][_nghost-webapp-c38] {
                display: block;
                width: 100%
            }

            [data-display-tablet=flex][_nghost-webapp-c38] {
                align-items: center;
                display: flex;
                width: auto
            }
        }

        @media (min-width: 960px) {
            [data-size-desktop=mini][_nghost-webapp-c38] {
                font-size: 14px;
                line-height: 1.43;
                padding: 4px 12px
            }

            [data-size-desktop=mini][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
                height: 12px;
                width: 12px
            }

            [data-size-desktop=small][_nghost-webapp-c38] {
                font-size: 15px;
                line-height: 1.4;
                padding: 6px 13px
            }

            [data-size-desktop=small][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
                height: 13px;
                width: 13px
            }

            [data-size-desktop=mid][_nghost-webapp-c38] {
                font-size: 15px;
                line-height: 1.4;
                padding: 8px 22px
            }

            [data-size-desktop=large][_nghost-webapp-c38] {
                font-size: 20px;
                line-height: 1.4;
                padding: 8px 22px
            }

            [data-size-desktop=large][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
                height: 16px;
                width: 16px
            }

            [data-size-desktop=xlarge][_nghost-webapp-c38] {
                font-size: 20px;
                line-height: 1.4;
                padding: 13px 26px
            }

            [data-size-desktop=xlarge][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
                height: 16px;
                width: 16px
            }

            [data-size-desktop=xxlarge][_nghost-webapp-c38] {
                font-size: 24px;
                line-height: 1.33;
                padding: 15px 26px
            }

            [data-size-desktop=xxlarge][_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
                height: 18px;
                width: 18px
            }

            [data-display-desktop=inline][_nghost-webapp-c38] {
                display: inline;
                width: auto
            }

            [data-display-desktop=inline][data-color][_nghost-webapp-c38] {
                display: inline-block
            }

            [data-display-desktop=block][_nghost-webapp-c38] {
                display: block;
                width: 100%
            }

            [data-display-desktop=flex][_nghost-webapp-c38] {
                align-items: center;
                display: flex;
                width: auto
            }
        }

        .ButtonGroupFirst[_nghost-webapp-c38] {
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;
            margin-right: 0
        }

        .ButtonGroupMiddle[_nghost-webapp-c38] {
            border-left: 0;
            border-radius: 0;
            margin-left: 0;
            margin-right: 0
        }

        .ButtonGroupLast[_nghost-webapp-c38] {
            border-bottom-left-radius: 0;
            border-left: 0;
            border-top-left-radius: 0;
            margin-left: 0
        }

        [_nghost-webapp-c38] .ArrowIcon[_ngcontent-webapp-c38] {
            align-items: center;
            display: flex;
            height: 16px;
            width: 16px
        }

        [_nghost-webapp-c38] .ArrowIcon-head[_ngcontent-webapp-c38] {
            transform: translate(0);
            transition: transform .2s ease-in-out
        }

        [_nghost-webapp-c38] .ArrowIcon-body[_ngcontent-webapp-c38] {
            opacity: 0;
            transition: all .2s linear
        }

        [_nghost-webapp-c38] .ArrowRight[_ngcontent-webapp-c38] {
            margin-left: 8px
        }

        [_nghost-webapp-c38]:hover .ArrowIcon-body[_ngcontent-webapp-c38] {
            animation: _ngcontent-webapp-c38_line .1s linear;
            opacity: 1
        }

        @keyframes _ngcontent-webapp-c38_line {
            0% {
                right: 0;
                width: 0
            }

            to {
                right: 100%;
                width: inherit
            }
        }

        [_nghost-webapp-c38]:hover .ArrowLeftHead[_ngcontent-webapp-c38] {
            transform: translate(-3px)
        }

        [_nghost-webapp-c38]:hover .ArrowRightHead[_ngcontent-webapp-c38] {
            transform: translate(3px)
        }

        .IconContainer[_ngcontent-webapp-c38] {
            display: inline-block;
            padding-bottom: 2px;
            vertical-align: middle
        }

        .NextIcon[_ngcontent-webapp-c38] {
            margin-left: 8px
        }

        .ButtonElement[_ngcontent-webapp-c38] {
            background: none;
            border: 0;
            color: inherit;
            cursor: inherit;
            display: inherit;
            font-family: inherit;
            font-size: inherit;
            font-weight: inherit;
            line-height: normal;
            padding: 0;
            text-align: inherit
        }

        .ButtonElement[_ngcontent-webapp-c38]:focus-visible {
            outline: none
        }

        .ButtonElement[_ngcontent-webapp-c38]:focus-visible:after {
            border-radius: 2px;
            outline: #115cc0 solid 2px
        }

        .ButtonElement[_ngcontent-webapp-c38]:after {
            content: "";
            cursor: inherit;
            inset: 0;
            position: absolute
        }

        .ButtonElement[data-color][_ngcontent-webapp-c38] {
            display: inline-block
        }

        .ButtonElement[data-display=inline][_ngcontent-webapp-c38] {
            display: inherit;
            line-height: normal;
            width: auto
        }

        .ButtonElement[data-display=inline][data-color][_ngcontent-webapp-c38] {
            display: inline-block
        }

        .ButtonElement[data-display=block][_ngcontent-webapp-c38] {
            display: block;
            width: 100%
        }

        .ButtonElement[data-display=block][data-color][_ngcontent-webapp-c38] {
            line-height: inherit
        }

        .ButtonElement[data-display=flex][_ngcontent-webapp-c38] {
            display: flex;
            line-height: normal;
            width: auto
        }

        @media (min-width: 768px) {
            .ButtonElement[data-display-tablet=inline][_ngcontent-webapp-c38] {
                display: inherit;
                line-height: normal;
                width: auto
            }

            .ButtonElement[data-display-tablet=inline][data-color][_ngcontent-webapp-c38] {
                display: inline-block
            }

            .ButtonElement[data-display-tablet=block][_ngcontent-webapp-c38] {
                display: block;
                width: 100%
            }

            .ButtonElement[data-display-tablet=block][data-color][_ngcontent-webapp-c38] {
                line-height: inherit
            }

            .ButtonElement[data-display-tablet=flex][_ngcontent-webapp-c38] {
                display: flex;
                line-height: normal;
                width: auto
            }
        }

        @media (min-width: 960px) {
            .ButtonElement[data-display-desktop=inline][_ngcontent-webapp-c38] {
                display: inherit;
                line-height: normal;
                width: auto
            }

            .ButtonElement[data-display-desktop=inline][data-color][_ngcontent-webapp-c38] {
                display: inline-block
            }

            .ButtonElement[data-display-desktop=block][_ngcontent-webapp-c38] {
                display: block;
                width: 100%
            }

            .ButtonElement[data-display-desktop=block][data-color][_ngcontent-webapp-c38] {
                line-height: inherit
            }

            .ButtonElement[data-display-desktop=flex][_ngcontent-webapp-c38] {
                display: flex;
                line-height: normal;
                width: auto
            }
        }
    </style>
    <style>
        .Overlay[_nghost-webapp-c36] {
            align-items: center;
            display: flex;
            height: 100%;
            justify-content: center;
            inset: 0;
            position: absolute;
            width: 100%;
            z-index: 1020
        }

        .Overlay.IsModalOverlay[_nghost-webapp-c36] {
            z-index: 1091
        }

        .Overlay[data-background=light][_nghost-webapp-c36] {
            background: var(--color-bg-light)
        }

        .Overlay[data-background=dark][_nghost-webapp-c36] {
            background: var(--color-bg-dark)
        }

        @keyframes _ngcontent-webapp-c36_spin {
            0% {
                transform: rotate(0)
            }

            to {
                transform: rotate(360deg)
            }
        }

        .Spinner[_ngcontent-webapp-c36] {
            animation: _ngcontent-webapp-c36_spin 1s linear infinite;
            border-radius: 50%;
            border-right: 3px solid transparent;
            border-top: 3px solid rgba(88, 154, 240, .8);
            box-sizing: border-box;
            display: inline-block;
            height: 48px;
            position: relative;
            vertical-align: middle;
            width: 48px
        }

        .Spinner[data-size=large][_ngcontent-webapp-c36] {
            border-width: 4px;
            height: 64px;
            width: 64px
        }

        .Spinner[data-size=small][_ngcontent-webapp-c36] {
            border-width: 2px;
            height: 24px;
            width: 24px
        }

        .Spinner[data-color=light][_ngcontent-webapp-c36] {
            border-right: 3px solid transparent;
            border-top: 3px solid rgba(255, 255, 255, .5)
        }

        .Spinner[data-color=gray][_ngcontent-webapp-c36] {
            border-right: 3px solid transparent;
            border-top: 3px solid rgba(92, 111, 140, .5)
        }

        .Spinner[data-color=pink][_ngcontent-webapp-c36] {
            border-right: 3px solid transparent;
            border-top: 3px solid rgba(230, 2, 120, .5)
        }
    </style>
    <style>
        [_nghost-webapp-c118] {
            overflow-x: hidden
        }

        @supports (overflow-x: clip) {
            [_nghost-webapp-c118] {
                overflow-x: clip
            }

            @supports (-moz-appearance: none) {
                [_nghost-webapp-c118] {
                    overflow-x: hidden
                }
            }
        }

        @media (min-width: 768px) {
            [_nghost-webapp-c118] {
                display: inline;
                overflow-x: visible
            }
        }

        .IsNavBarTest[_ngcontent-webapp-c118] {
            margin-top: -84px
        }
    </style>
    <style>
        .DownloadAlertBody[_ngcontent-webapp-c68] {
            display: flex;
            flex-direction: column;
            width: 100%
        }

        .DownloadAlertDetails[_ngcontent-webapp-c68] {
            align-items: center;
            display: flex;
            flex-direction: row
        }

        .DownloadAlertDetails--status[_ngcontent-webapp-c68] {
            flex: 1 1 auto
        }
    </style>
    <style>
        .LoadingState[_ngcontent-webapp-c590] {
            display: block;
            min-height: 70vh;
            position: relative
        }

        .FullHeightSpinner[_ngcontent-webapp-c590] {
            height: 100vh
        }
    </style>
    <style>
        .NavigationRoot[_ngcontent-webapp-c93] {
            background: var(--color-bg-light);
            box-shadow: 0 0 4px #3d4a5d14, 0 2px 4px #3d4a5d1f;
            color: #12151b;
            padding-top: env(safe-area-inset-top);
            position: relative;
            z-index: 1000
        }

        .NavigationRoot[data-transparent=true][_ngcontent-webapp-c93] {
            background: transparent;
            box-shadow: none;
            color: #fcfcfd;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .NavigationContainer[_ngcontent-webapp-c93] {
            align-items: center;
            display: flex;
            height: 64px
        }

        @media (min-width: 480px) {
            .NavigationItem[_ngcontent-webapp-c93] {
                padding: 0 12px
            }

            .NavigationItem[_ngcontent-webapp-c93]:last-child {
                padding-right: 0
            }
        }

        .NavigationSections[_ngcontent-webapp-c93] {
            align-items: center;
            display: flex;
            margin-left: auto
        }

        .LogoButton[_ngcontent-webapp-c93] {
            align-items: center;
            flex: 0 0 145px
        }

        @media (min-width: 768px) {
            .LogoButton[data-long=true][_ngcontent-webapp-c93] {
                flex: 0 0 275px
            }
        }

        @media (min-width: 960px) {
            .LogoButton[data-long-desktop=true][_ngcontent-webapp-c93] {
                flex: 0 0 260px
            }
        }
    </style>
    <style>
        [_nghost-webapp-c117] {
            display: block
        }

        .SeoNavbar-content[_ngcontent-webapp-c117] {
            max-width: 100%;
            min-height: 48px;
            overflow-x: auto;
            white-space: nowrap
        }

        @media (min-width: 768px) {
            .SeoNavbar-content[_ngcontent-webapp-c117] {
                display: flex;
                flex-direction: row
            }
        }

        .SeoNavbar-item[_ngcontent-webapp-c117] {
            align-items: center;
            cursor: pointer;
            display: inline-flex;
            line-height: 48px;
            min-height: 48px;
            padding: 0 8px
        }

        @media (min-width: 768px) {
            .SeoNavbar-item[_ngcontent-webapp-c117] {
                padding: 0 16px
            }
        }

        .SeoNavbar-item-hover[_ngcontent-webapp-c117] {
            background-color: #ffffff26
        }

        .SeoNavbarWrapper[_ngcontent-webapp-c117] {
            overflow: hidden;
            background-color: #12151b;
            height: 100%;
            position: relative;
            -webkit-user-select: none;
            user-select: none;
            z-index: 2
        }

        @supports (overflow: clip) {
            .SeoNavbarWrapper[_ngcontent-webapp-c117] {
                overflow: clip
            }

            @supports (-moz-appearance: none) {
                .SeoNavbarWrapper[_ngcontent-webapp-c117] {
                    overflow: hidden
                }
            }
        }

        .SeoNavbarWrapper-shadow[_ngcontent-webapp-c117] {
            height: 100%;
            pointer-events: none;
            position: absolute;
            width: 100%;
            z-index: 900
        }

        .SeoNavbarWrapper-shadow-right[_ngcontent-webapp-c117] {
            box-shadow: -25px 0 15px -15px #12151b inset
        }

        .SeoNavbarWrapper-shadow-left[_ngcontent-webapp-c117] {
            box-shadow: 25px 0 15px -15px #12151b inset
        }
    </style>
    <style>
        [_nghost-webapp-c39],
        .LogoImg[_ngcontent-webapp-c39] {
            display: block
        }

        [data-size=mid][_nghost-webapp-c39],
        .LogoImg[data-size=mid][_ngcontent-webapp-c39] {
            height: 48px;
            width: 199px
        }

        [data-size=small][_nghost-webapp-c39],
        .LogoImg[data-size=small][_ngcontent-webapp-c39] {
            height: 32px;
            width: 133px
        }

        [data-size=icon][_nghost-webapp-c39],
        .LogoImg[data-size=icon][_ngcontent-webapp-c39] {
            height: 24px;
            width: 32px
        }

        [data-size=mini][_nghost-webapp-c39],
        .LogoImg[data-size=mini][_ngcontent-webapp-c39] {
            width: 20px
        }

        @media (min-width: 768px) {

            [data-size-tablet=mid][_nghost-webapp-c39],
            .LogoImg[data-size-tablet=mid][_ngcontent-webapp-c39] {
                height: 48px;
                width: 199px
            }

            [data-size-tablet=small][_nghost-webapp-c39],
            .LogoImg[data-size-tablet=small][_ngcontent-webapp-c39] {
                height: 32px;
                width: 133px
            }

            [data-size-tablet=icon][_nghost-webapp-c39],
            .LogoImg[data-size-tablet=icon][_ngcontent-webapp-c39] {
                height: 24px;
                width: 32px
            }

            [data-size-tablet=mini][_nghost-webapp-c39],
            .LogoImg[data-size-tablet=mini][_ngcontent-webapp-c39] {
                width: 20px
            }
        }

        @media (min-width: 960px) {

            [data-size-desktop=mid][_nghost-webapp-c39],
            .LogoImg[data-size-desktop=mid][_ngcontent-webapp-c39] {
                height: 48px;
                width: 199px
            }

            [data-size-desktop=small][_nghost-webapp-c39],
            .LogoImg[data-size-desktop=small][_ngcontent-webapp-c39] {
                height: 32px;
                width: 133px
            }

            [data-size-desktop=icon][_nghost-webapp-c39],
            .LogoImg[data-size-desktop=icon][_ngcontent-webapp-c39] {
                height: 24px;
                width: 32px
            }

            [data-size-desktop=mini][_nghost-webapp-c39],
            .LogoImg[data-size-desktop=mini][_ngcontent-webapp-c39] {
                width: 20px
            }
        }
    </style>
    <style>
        [_nghost-webapp-c66] {
            color: var(--color-link);
            cursor: pointer;
            position: relative;
            transition: color .1s ease-out
        }

        [data-color=inherit][_nghost-webapp-c66] {
            color: inherit
        }

        [data-color=foreground][_nghost-webapp-c66] {
            color: var(--color-foreground)
        }

        [data-color=light][_nghost-webapp-c66] {
            color: #fcfcfd
        }

        [data-color=dark][_nghost-webapp-c66] {
            color: #12151b
        }

        [data-color=error][_nghost-webapp-c66] {
            color: #eb3730
        }

        [data-color=warning][_nghost-webapp-c66] {
            color: #e96800
        }

        [data-color=success][_nghost-webapp-c66] {
            color: #058430
        }

        [data-color=primary][_nghost-webapp-c66] {
            color: #e60278
        }

        [data-color=mid][_nghost-webapp-c66] {
            color: #bcc5d3
        }

        @media (hover: hover) and (pointer: fine) {
            [data-hover-color=inherit][_nghost-webapp-c66]:hover {
                color: inherit
            }
        }

        @media (hover: hover) and (pointer: fine) {
            [data-hover-color=default][_nghost-webapp-c66]:hover {
                color: var(--color-link-hover)
            }
        }

        @media (hover: hover) and (pointer: fine) {
            [data-hover-color=light][_nghost-webapp-c66]:hover {
                color: var(--color-hover-mid)
            }
        }

        @media (hover: hover) and (pointer: fine) {
            [data-hover-color=primary][_nghost-webapp-c66]:hover {
                color: #e60278
            }
        }

        [data-weight=bold][_nghost-webapp-c66] {
            font-weight: 700
        }

        [data-weight=medium][_nghost-webapp-c66] {
            font-weight: 500
        }

        [data-highlight-color=blue][_nghost-webapp-c66] [_ngcontent-webapp-c66]::selection {
            background: rgba(88, 154, 240, .7)
        }

        [data-highlight-color=gray][_nghost-webapp-c66] [_ngcontent-webapp-c66]::selection {
            background: rgba(188, 197, 211, .7)
        }

        [data-highlight-color=gray][_nghost-webapp-c66] [_ngcontent-webapp-c66]::-moz-selection {
            background: rgba(188, 197, 211, .7)
        }

        [data-display=block][_nghost-webapp-c66] {
            display: block
        }

        [data-display=flex][_nghost-webapp-c66] {
            display: flex
        }

        [data-size=xxxsmall][_nghost-webapp-c66] {
            font-size: 11px;
            line-height: 1.45
        }

        [data-size=xxsmall][_nghost-webapp-c66] {
            font-size: 14px;
            line-height: 1.43
        }

        [data-size=xsmall][_nghost-webapp-c66] {
            font-size: 15px;
            line-height: 1.4
        }

        [data-size=small][_nghost-webapp-c66] {
            font-size: 16px;
            line-height: 1.5
        }

        [data-size=marketing_small][_nghost-webapp-c66] {
            font-size: 18px;
            line-height: 1.55
        }

        [data-size=mid][_nghost-webapp-c66] {
            font-size: 20px;
            line-height: 1.4
        }

        [data-size=large][_nghost-webapp-c66] {
            font-size: 24px;
            line-height: 1.33
        }

        [data-size=xlarge][_nghost-webapp-c66] {
            font-size: 32px;
            line-height: 1.37
        }

        [data-size=xxlarge][_nghost-webapp-c66] {
            font-size: 41px;
            line-height: 1.17
        }

        [data-size=xxxlarge][_nghost-webapp-c66] {
            font-size: 48px;
            line-height: 1.17
        }

        [data-size=marketing_mega][_nghost-webapp-c66] {
            font-size: 57px;
            line-height: 1.15
        }

        [data-size=marketing_xmega][_nghost-webapp-c66] {
            font-size: 91px;
            line-height: 1.09
        }

        [data-size=inherit][_nghost-webapp-c66] {
            font-size: inherit;
            line-height: inherit
        }

        @media (min-width: 768px) {
            [data-size-tablet=xxxsmall][_nghost-webapp-c66] {
                font-size: 11px;
                line-height: 1.45
            }

            [data-size-tablet=xxsmall][_nghost-webapp-c66] {
                font-size: 14px;
                line-height: 1.43
            }

            [data-size-tablet=xsmall][_nghost-webapp-c66] {
                font-size: 15px;
                line-height: 1.4
            }

            [data-size-tablet=small][_nghost-webapp-c66] {
                font-size: 16px;
                line-height: 1.5
            }

            [data-size-tablet=marketing_small][_nghost-webapp-c66] {
                font-size: 18px;
                line-height: 1.55
            }

            [data-size-tablet=mid][_nghost-webapp-c66] {
                font-size: 20px;
                line-height: 1.4
            }

            [data-size-tablet=large][_nghost-webapp-c66] {
                font-size: 24px;
                line-height: 1.33
            }

            [data-size-tablet=xlarge][_nghost-webapp-c66] {
                font-size: 32px;
                line-height: 1.37
            }

            [data-size-tablet=xxlarge][_nghost-webapp-c66] {
                font-size: 41px;
                line-height: 1.17
            }

            [data-size-tablet=xxxlarge][_nghost-webapp-c66] {
                font-size: 48px;
                line-height: 1.17
            }

            [data-size-tablet=marketing_mega][_nghost-webapp-c66] {
                font-size: 57px;
                line-height: 1.15
            }

            [data-size-tablet=marketing_xmega][_nghost-webapp-c66] {
                font-size: 91px;
                line-height: 1.09
            }

            [data-size-tablet=inherit][_nghost-webapp-c66] {
                font-size: inherit;
                line-height: inherit
            }
        }

        @media (min-width: 960px) {
            [data-size-desktop=xxxsmall][_nghost-webapp-c66] {
                font-size: 11px;
                line-height: 1.45
            }

            [data-size-desktop=xxsmall][_nghost-webapp-c66] {
                font-size: 14px;
                line-height: 1.43
            }

            [data-size-desktop=xsmall][_nghost-webapp-c66] {
                font-size: 15px;
                line-height: 1.4
            }

            [data-size-desktop=small][_nghost-webapp-c66] {
                font-size: 16px;
                line-height: 1.5
            }

            [data-size-desktop=marketing_small][_nghost-webapp-c66] {
                font-size: 18px;
                line-height: 1.55
            }

            [data-size-desktop=mid][_nghost-webapp-c66] {
                font-size: 20px;
                line-height: 1.4
            }

            [data-size-desktop=large][_nghost-webapp-c66] {
                font-size: 24px;
                line-height: 1.33
            }

            [data-size-desktop=xlarge][_nghost-webapp-c66] {
                font-size: 32px;
                line-height: 1.37
            }

            [data-size-desktop=xxlarge][_nghost-webapp-c66] {
                font-size: 41px;
                line-height: 1.17
            }

            [data-size-desktop=xxxlarge][_nghost-webapp-c66] {
                font-size: 48px;
                line-height: 1.17
            }

            [data-size-desktop=marketing_mega][_nghost-webapp-c66] {
                font-size: 57px;
                line-height: 1.15
            }

            [data-size-desktop=marketing_xmega][_nghost-webapp-c66] {
                font-size: 91px;
                line-height: 1.09
            }

            [data-size-desktop=inherit][_nghost-webapp-c66] {
                font-size: inherit;
                line-height: inherit
            }
        }

        .LinkElement[_ngcontent-webapp-c66] {
            background: none;
            border: 0;
            color: inherit;
            cursor: inherit;
            font-family: inherit;
            font-size: inherit;
            font-weight: inherit;
            padding: 0;
            text-align: left
        }

        .LinkElement[_ngcontent-webapp-c66]:before {
            content: "";
            cursor: inherit;
            inset: 0;
            position: absolute
        }

        .LinkElement[_ngcontent-webapp-c66]:hover .IconAnimation[_ngcontent-webapp-c66] {
            transform: translate(-5px)
        }

        .LinkElement[_ngcontent-webapp-c66]:hover .IconAnimationRight[_ngcontent-webapp-c66] {
            transform: translate(5px)
        }

        .LinkElement[data-underline=always][_ngcontent-webapp-c66] {
            text-decoration: underline
        }

        @media (hover: hover) and (pointer: fine) {
            .LinkElement[data-underline=hover][_ngcontent-webapp-c66]:hover {
                text-decoration: underline
            }
        }

        .LinkElement[data-outline=inherit][_ngcontent-webapp-c66] {
            outline: inherit
        }

        .LinkElement[disabled=true][_ngcontent-webapp-c66] {
            color: #bcc5d3
        }

        @media (hover: hover) and (pointer: fine) {
            .LinkElement[disabled=true][_ngcontent-webapp-c66]:hover {
                color: #bcc5d3;
                text-decoration: none
            }
        }

        .LinkElement[data-text-transform=lowercase][_ngcontent-webapp-c66] {
            text-transform: lowercase
        }

        .LinkElement[data-text-transform=capitalize][_ngcontent-webapp-c66] {
            text-transform: capitalize
        }

        .LinkElement[data-text-transform=uppercase][_ngcontent-webapp-c66] {
            text-transform: uppercase
        }

        .LinkElement[data-display=block][_ngcontent-webapp-c66] {
            display: block;
            width: 100%
        }

        .LinkElement[data-display=flex][_ngcontent-webapp-c66] {
            display: flex;
            width: 100%
        }

        .LinkElement[data-display=flex][data-flex-align=center][_ngcontent-webapp-c66] {
            align-items: center
        }

        .LinkElement[data-display=flex][data-flex-align=flex-start][_ngcontent-webapp-c66] {
            align-items: flex-start
        }

        .LinkElement[data-display=flex][data-flex-align=flex-end][_ngcontent-webapp-c66] {
            align-items: flex-end
        }

        .LinkElement[data-display=flex][data-flex-align=baseline][_ngcontent-webapp-c66] {
            align-items: baseline
        }

        .LinkElement[data-display=flex][data-flex-align=stretch][_ngcontent-webapp-c66] {
            align-items: stretch
        }

        .LinkElement[data-display=flex][data-flex-justify=center][_ngcontent-webapp-c66] {
            justify-content: center
        }

        .LinkElement[data-display=flex][data-flex-justify=flex-start][_ngcontent-webapp-c66] {
            justify-content: flex-start
        }

        .LinkElement[data-display=flex][data-flex-justify=flex-end][_ngcontent-webapp-c66] {
            justify-content: flex-end
        }

        .LinkElement[data-display=flex][data-flex-justify=space-between][_ngcontent-webapp-c66] {
            justify-content: space-between
        }

        .LinkElement[data-display=flex][data-flex-justify=space-around][_ngcontent-webapp-c66] {
            justify-content: space-around
        }

        .LinkElement[data-display=flex][data-flex-justify=space-evenly][_ngcontent-webapp-c66] {
            justify-content: space-evenly
        }

        .LinkElement[data-display=flex][data-flex-direction=column][_ngcontent-webapp-c66] {
            flex-direction: column
        }

        .LinkElement[data-display=flex][data-flex-direction=row][_ngcontent-webapp-c66] {
            flex-direction: row
        }

        .LinkElement[data-icon=true][_ngcontent-webapp-c66] {
            align-items: center;
            display: inline-flex
        }

        .LinkElement[data-icon-position=right][_ngcontent-webapp-c66] {
            flex-direction: row-reverse
        }

        .LinkIcon[_ngcontent-webapp-c66] {
            line-height: 0;
            transition: all .1s linear
        }

        .LinkIcon[data-icon-position=left][_ngcontent-webapp-c66] {
            padding-right: 4px
        }

        .LinkIcon[data-icon-position=right][_ngcontent-webapp-c66] {
            padding-left: 4px
        }

        .LinkText[_ngcontent-webapp-c66] {
            display: inline
        }
    </style>
    <style>
        [_nghost-webapp-c589] {
            display: block
        }

        @media (min-width: 960px) {
            [_nghost-webapp-c589] {
                background-color: #fcfcfd
            }
        }

        .Banner[_ngcontent-webapp-c589] {
            height: 130px;
            margin-top: -48px;
            position: relative
        }

        @media (min-width: 960px) {
            .Banner[_ngcontent-webapp-c589] {
                height: 230px
            }
        }

        @media (min-width: 960px) {
            .Banner[_ngcontent-webapp-c589]:after {
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, .49) 62%, rgba(0, 0, 0, .47) 100%);
                content: "";
                display: block;
                height: 100%;
                left: 0;
                position: absolute;
                top: 0;
                width: 100%
            }
        }

        .Content[_ngcontent-webapp-c589] {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative
        }

        @media (min-width: 960px) {
            .Content[_ngcontent-webapp-c589] {
                margin-top: -72px
            }
        }

        @media (min-width: 960px) {
            .Content[_ngcontent-webapp-c589] {
                flex-direction: row
            }
        }

        .Content-main[_ngcontent-webapp-c589] {
            width: 100%
        }

        .Content-main-container[_ngcontent-webapp-c589] {
            flex: 2
        }

        @media (min-width: 960px) {
            .Content-main-container[_ngcontent-webapp-c589] {
                margin-right: 16px
            }
        }

        @media (min-width: 960px) {
            .Content-side[_ngcontent-webapp-c589] {
                margin-top: 96px;
                width: 352px
            }
        }

        .Loading-container[_ngcontent-webapp-c589] {
            height: 100vh
        }

        .Loading-spinner[_ngcontent-webapp-c589] {
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%)
        }
    </style>
    <style>
        [_nghost-webapp-c35] [data-aspect-ratio=true][_ngcontent-webapp-c35] {
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%
        }

        [data-aspect-ratio=true][_nghost-webapp-c35] {
            display: block;
            position: relative
        }

        [data-aspect-ratio=true][_nghost-webapp-c35]:before {
            content: "";
            display: block;
            padding-top: 75%
        }

        [data-is-bg-image=true][_nghost-webapp-c35] {
            overflow: hidden;
            height: 100%
        }

        @supports (overflow: clip) {
            [data-is-bg-image=true][_nghost-webapp-c35] {
                overflow: clip
            }

            @supports (-moz-appearance: none) {
                [data-is-bg-image=true][_nghost-webapp-c35] {
                    overflow: hidden
                }
            }
        }

        [data-display=inline][_nghost-webapp-c35],
        .PictureElement[data-display=inline][_ngcontent-webapp-c35],
        .ImageElement[data-display=inline][_ngcontent-webapp-c35] {
            display: inline-block
        }

        [data-display=block][_nghost-webapp-c35],
        .PictureElement[data-display=block][_ngcontent-webapp-c35],
        .ImageElement[data-display=block][_ngcontent-webapp-c35] {
            display: block
        }

        .PictureElement[_ngcontent-webapp-c35],
        .ImageElement[_ngcontent-webapp-c35] {
            height: inherit
        }

        .PictureElement[data-bounded-height=true][_ngcontent-webapp-c35],
        .ImageElement[data-bounded-height=true][_ngcontent-webapp-c35] {
            height: auto;
            max-height: 100%
        }

        .PictureElement[data-border-radius-bottom=true][_ngcontent-webapp-c35],
        .ImageElement[data-border-radius-bottom=true][_ngcontent-webapp-c35] {
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px
        }

        .PictureElement[data-border-radius-top=true][_ngcontent-webapp-c35],
        .ImageElement[data-border-radius-top=true][_ngcontent-webapp-c35] {
            border-top-left-radius: 5px;
            border-top-right-radius: 5px
        }

        .PictureElement[_ngcontent-webapp-c35] {
            opacity: 0
        }

        .PictureElement[data-aspect-ratio=true][_ngcontent-webapp-c35] {
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%
        }

        .IsShown[_ngcontent-webapp-c35] {
            opacity: 1
        }

        .ImageElement[data-is-bg-image=true][_ngcontent-webapp-c35] {
            inset: 0;
            position: absolute;
            color: var(--bg-color);
            height: 100%;
            object-fit: cover;
            object-position: var(--bg-position);
            width: 100%;
            z-index: -1
        }

        .ImageElement[data-is-bg-image=true][data-bg-object-fit=contain][_ngcontent-webapp-c35] {
            object-fit: contain
        }

        .ImageElement[data-is-bg-image=true][data-bg-object-fit=cover][_ngcontent-webapp-c35] {
            object-fit: cover
        }

        .ImageElement[data-is-bg-image=true][data-bg-object-fit=none][_ngcontent-webapp-c35] {
            object-fit: none
        }

        @media (min-width: 768px) {
            .ImageElement[data-is-bg-image=true][_ngcontent-webapp-c35] {
                object-position: var(--bg-position-tablet)
            }

            .ImageElement[data-is-bg-image=true][data-bg-object-fit-tablet=contain][_ngcontent-webapp-c35] {
                object-fit: contain
            }

            .ImageElement[data-is-bg-image=true][data-bg-object-fit-tablet=cover][_ngcontent-webapp-c35] {
                object-fit: cover
            }

            .ImageElement[data-is-bg-image=true][data-bg-object-fit-tablet=none][_ngcontent-webapp-c35] {
                object-fit: none
            }
        }

        @media (min-width: 960px) {
            .ImageElement[data-is-bg-image=true][_ngcontent-webapp-c35] {
                object-position: var(--bg-position-desktop)
            }

            .ImageElement[data-is-bg-image=true][data-bg-object-fit-desktop=contain][_ngcontent-webapp-c35] {
                object-fit: contain
            }

            .ImageElement[data-is-bg-image=true][data-bg-object-fit-desktop=cover][_ngcontent-webapp-c35] {
                object-fit: cover
            }

            .ImageElement[data-is-bg-image=true][data-bg-object-fit-desktop=none][_ngcontent-webapp-c35] {
                object-fit: none
            }
        }

        @media (min-width: 1200px) {
            .ImageElement[data-is-bg-image=true][_ngcontent-webapp-c35] {
                object-position: var(--bg-position-desktop-large)
            }

            .ImageElement[data-is-bg-image=true][data-bg-object-fit-desktop-large=contain][_ngcontent-webapp-c35] {
                object-fit: contain
            }

            .ImageElement[data-is-bg-image=true][data-bg-object-fit-desktop-large=cover][_ngcontent-webapp-c35] {
                object-fit: cover
            }

            .ImageElement[data-is-bg-image=true][data-bg-object-fit-desktop-large=none][_ngcontent-webapp-c35] {
                object-fit: none
            }
        }

        @media (min-width: 1440px) {
            .ImageElement[data-is-bg-image=true][_ngcontent-webapp-c35] {
                object-position: var(--bg-position-desktop-xlarge)
            }

            .ImageElement[data-is-bg-image=true][data-bg-object-fit-desktop-xlarge=contain][_ngcontent-webapp-c35] {
                object-fit: contain
            }

            .ImageElement[data-is-bg-image=true][data-bg-object-fit-desktop-xlarge=cover][_ngcontent-webapp-c35] {
                object-fit: cover
            }

            .ImageElement[data-is-bg-image=true][data-bg-object-fit-desktop-xlarge=none][_ngcontent-webapp-c35] {
                object-fit: none
            }
        }

        @media (min-width: 1600px) {
            .ImageElement[data-is-bg-image=true][_ngcontent-webapp-c35] {
                object-position: var(--bg-position-desktop-xxlarge)
            }

            .ImageElement[data-is-bg-image=true][data-bg-object-fit-desktop-xxlarge=contain][_ngcontent-webapp-c35] {
                object-fit: contain
            }

            .ImageElement[data-is-bg-image=true][data-bg-object-fit-desktop-xxlarge=cover][_ngcontent-webapp-c35] {
                object-fit: cover
            }

            .ImageElement[data-is-bg-image=true][data-bg-object-fit-desktop-xxlarge=none][_ngcontent-webapp-c35] {
                object-fit: none
            }
        }

        .ImageElement[data-full-width=true][_ngcontent-webapp-c35] {
            width: 100%
        }

        .ImageElement[data-bounded-width=true][_ngcontent-webapp-c35] {
            max-width: 100%
        }

        .ImageElement[data-align-center=true][_ngcontent-webapp-c35] {
            margin-left: auto;
            margin-right: auto
        }

        .ImageElement[data-aspect-ratio=true][_ngcontent-webapp-c35] {
            display: block;
            object-fit: cover;
            width: 100%
        }

        .ImageElement[data-object-fit=contain][_ngcontent-webapp-c35] {
            object-fit: contain
        }

        .ImageElement[data-object-fit=cover][_ngcontent-webapp-c35] {
            object-fit: cover
        }

        .ImageElement[data-object-fit=none][_ngcontent-webapp-c35] {
            object-fit: none
        }

        .ImageElement[data-object-fit=scale-down][_ngcontent-webapp-c35] {
            object-fit: scale-down
        }

        .ImageElement[data-aspect-ratio-value=square][_ngcontent-webapp-c35] {
            aspect-ratio: 1;
            line-height: 0;
            width: 100%
        }

        .ImageElement[data-aspect-ratio-value=rectangle-small][_ngcontent-webapp-c35] {
            aspect-ratio: 3/2;
            line-height: 0;
            width: 100%
        }

        .ImageElement[data-aspect-ratio-value=rectangle-medium][_ngcontent-webapp-c35] {
            aspect-ratio: 4/3;
            line-height: 0;
            width: 100%
        }

        .ImageElement[data-aspect-ratio-value=rectangle-large][_ngcontent-webapp-c35] {
            aspect-ratio: 16/9;
            line-height: 0;
            width: 100%
        }
    </style>
    <style>
        [_nghost-webapp-c585] {
            display: block
        }

        @media (min-width: 960px) {
            .ContentContainer[_ngcontent-webapp-c585] {
                background-color: var(--color-bg-light);
                border-radius: 5px;
                box-shadow: 0 1px 3px #bcc5d3;
                padding: 24px 32px
            }
        }

        .Project-heading[_ngcontent-webapp-c585] {
            display: flex;
            justify-content: space-between
        }

        @media (min-width: 768px) {
            .Project-heading-title[_ngcontent-webapp-c585] {
                flex: 0 0 67%
            }
        }

        .Project-description[_ngcontent-webapp-c585] {
            word-break: break-word;
            word-wrap: break-word
        }

        .IconTextPair[_ngcontent-webapp-c585] {
            align-items: center;
            display: flex
        }

        .IconContainer[_ngcontent-webapp-c585] {
            align-items: center;
            display: flex;
            height: 24px;
            width: 24px
        }

        .MapContainer[_ngcontent-webapp-c585] {
            height: 300px
        }

        .BidList[_ngcontent-webapp-c585] {
            align-items: center;
            display: flex;
            flex-direction: column
        }

        @media (min-width: 768px) {
            .BidList[_ngcontent-webapp-c585] {
                align-items: stretch
            }
        }

        @media (min-width: 960px) {
            .BidList[_ngcontent-webapp-c585] {
                display: block
            }
        }
    </style>
    <style>
        [_nghost-webapp-c588] {
            display: block
        }

        .Cta[_ngcontent-webapp-c588] {
            justify-content: center
        }

        .Cta-container[_ngcontent-webapp-c588] {
            background-color: var(--color-bg-light);
            box-shadow: 0 -1px 4px #12151b29;
            padding: 24px
        }

        @media (min-width: 960px) {
            .Cta-container[_ngcontent-webapp-c588] {
                box-shadow: none;
                padding: 0
            }
        }

        .PreviousNextJobContainer[_ngcontent-webapp-c588] {
            display: flex;
            justify-content: space-between
        }

        .Section[_ngcontent-webapp-c588] {
            border: 1px solid #eef0f4;
            border-radius: 5px;
            padding: 16px
        }

        @media (min-width: 960px) {
            .Section[_ngcontent-webapp-c588] {
                border: none;
                padding: 0
            }
        }
    </style>
    <style>
        [_nghost-webapp-c583] {
            display: block
        }

        .Breadcrumbs[_ngcontent-webapp-c583] {
            color: #12151b
        }

        @media (min-width: 960px) {
            .Breadcrumbs[_ngcontent-webapp-c583] {
                color: #fcfcfd
            }
        }

        .Breadcrumbs-projectTitle[_ngcontent-webapp-c583] {
            align-items: center;
            display: flex
        }
    </style>
    <style>
        [_nghost-webapp-c33] {
            display: block
        }

        [data-text-align=center][_nghost-webapp-c33] {
            text-align: center
        }

        [data-text-align=left][_nghost-webapp-c33] {
            text-align: left
        }

        [data-text-align=right][_nghost-webapp-c33] {
            text-align: right
        }

        @media (min-width: 768px) {
            [data-text-align-tablet=center][_nghost-webapp-c33] {
                text-align: center
            }

            [data-text-align-tablet=left][_nghost-webapp-c33] {
                text-align: left
            }

            [data-text-align-tablet=right][_nghost-webapp-c33] {
                text-align: right
            }
        }

        @media (min-width: 960px) {
            [data-text-align-desktop-small=center][_nghost-webapp-c33] {
                text-align: center
            }

            [data-text-align-desktop-small=left][_nghost-webapp-c33] {
                text-align: left
            }

            [data-text-align-desktop-small=right][_nghost-webapp-c33] {
                text-align: right
            }
        }

        *[data-size=xxxsmall][_ngcontent-webapp-c33] {
            font-size: 11px;
            line-height: 1.45
        }

        *[data-size=xxsmall][_ngcontent-webapp-c33] {
            font-size: 14px;
            line-height: 1.43
        }

        *[data-size=xsmall][_ngcontent-webapp-c33] {
            font-size: 15px;
            line-height: 1.4
        }

        *[data-size=small][_ngcontent-webapp-c33] {
            font-size: 16px;
            line-height: 1.5
        }

        *[data-size=marketing_small][_ngcontent-webapp-c33] {
            font-size: 18px;
            line-height: 1.55
        }

        *[data-size=mid][_ngcontent-webapp-c33] {
            font-size: 20px;
            line-height: 1.4
        }

        *[data-size=large][_ngcontent-webapp-c33] {
            font-size: 24px;
            line-height: 1.33
        }

        *[data-size=xlarge][_ngcontent-webapp-c33] {
            font-size: 32px;
            line-height: 1.37
        }

        *[data-size=xxlarge][_ngcontent-webapp-c33] {
            font-size: 41px;
            line-height: 1.17
        }

        *[data-size=xxxlarge][_ngcontent-webapp-c33] {
            font-size: 48px;
            line-height: 1.17
        }

        *[data-size=marketing_mega][_ngcontent-webapp-c33] {
            font-size: 57px;
            line-height: 1.15
        }

        *[data-size=marketing_xmega][_ngcontent-webapp-c33] {
            font-size: 91px;
            line-height: 1.09
        }

        *[data-size=inherit][_ngcontent-webapp-c33] {
            font-size: inherit;
            line-height: inherit
        }

        *[data-weight=bold][_ngcontent-webapp-c33] {
            font-weight: 700
        }

        *[data-weight=medium][_ngcontent-webapp-c33] {
            font-weight: 500
        }

        *[data-weight=normal][_ngcontent-webapp-c33] {
            font-weight: 400
        }

        *[data-weight=light][_ngcontent-webapp-c33] {
            font-weight: 300
        }

        *[data-weight=inherit][_ngcontent-webapp-c33] {
            font-weight: inherit
        }

        @media (min-width: 768px) {
            *[data-size-tablet=xxxsmall][_ngcontent-webapp-c33] {
                font-size: 11px;
                line-height: 1.45
            }

            *[data-size-tablet=xxsmall][_ngcontent-webapp-c33] {
                font-size: 14px;
                line-height: 1.43
            }

            *[data-size-tablet=xsmall][_ngcontent-webapp-c33] {
                font-size: 15px;
                line-height: 1.4
            }

            *[data-size-tablet=small][_ngcontent-webapp-c33] {
                font-size: 16px;
                line-height: 1.5
            }

            *[data-size-tablet=marketing_small][_ngcontent-webapp-c33] {
                font-size: 18px;
                line-height: 1.55
            }

            *[data-size-tablet=mid][_ngcontent-webapp-c33] {
                font-size: 20px;
                line-height: 1.4
            }

            *[data-size-tablet=large][_ngcontent-webapp-c33] {
                font-size: 24px;
                line-height: 1.33
            }

            *[data-size-tablet=xlarge][_ngcontent-webapp-c33] {
                font-size: 32px;
                line-height: 1.37
            }

            *[data-size-tablet=xxlarge][_ngcontent-webapp-c33] {
                font-size: 41px;
                line-height: 1.17
            }

            *[data-size-tablet=xxxlarge][_ngcontent-webapp-c33] {
                font-size: 48px;
                line-height: 1.17
            }

            *[data-size-tablet=marketing_mega][_ngcontent-webapp-c33] {
                font-size: 57px;
                line-height: 1.15
            }

            *[data-size-tablet=marketing_xmega][_ngcontent-webapp-c33] {
                font-size: 91px;
                line-height: 1.09
            }

            *[data-size-tablet=inherit][_ngcontent-webapp-c33] {
                font-size: inherit;
                line-height: inherit
            }

            *[data-weight-tablet=bold][_ngcontent-webapp-c33] {
                font-weight: 700
            }

            *[data-weight-tablet=medium][_ngcontent-webapp-c33] {
                font-weight: 500
            }

            *[data-weight-tablet=normal][_ngcontent-webapp-c33] {
                font-weight: 400
            }

            *[data-weight-tablet=light][_ngcontent-webapp-c33] {
                font-weight: 300
            }

            *[data-weight-tablet=inherit][_ngcontent-webapp-c33] {
                font-weight: inherit
            }
        }

        @media (min-width: 960px) {
            *[data-size-desktop=xxxsmall][_ngcontent-webapp-c33] {
                font-size: 11px;
                line-height: 1.45
            }

            *[data-size-desktop=xxsmall][_ngcontent-webapp-c33] {
                font-size: 14px;
                line-height: 1.43
            }

            *[data-size-desktop=xsmall][_ngcontent-webapp-c33] {
                font-size: 15px;
                line-height: 1.4
            }

            *[data-size-desktop=small][_ngcontent-webapp-c33] {
                font-size: 16px;
                line-height: 1.5
            }

            *[data-size-desktop=marketing_small][_ngcontent-webapp-c33] {
                font-size: 18px;
                line-height: 1.55
            }

            *[data-size-desktop=mid][_ngcontent-webapp-c33] {
                font-size: 20px;
                line-height: 1.4
            }

            *[data-size-desktop=large][_ngcontent-webapp-c33] {
                font-size: 24px;
                line-height: 1.33
            }

            *[data-size-desktop=xlarge][_ngcontent-webapp-c33] {
                font-size: 32px;
                line-height: 1.37
            }

            *[data-size-desktop=xxlarge][_ngcontent-webapp-c33] {
                font-size: 41px;
                line-height: 1.17
            }

            *[data-size-desktop=xxxlarge][_ngcontent-webapp-c33] {
                font-size: 48px;
                line-height: 1.17
            }

            *[data-size-desktop=marketing_mega][_ngcontent-webapp-c33] {
                font-size: 57px;
                line-height: 1.15
            }

            *[data-size-desktop=marketing_xmega][_ngcontent-webapp-c33] {
                font-size: 91px;
                line-height: 1.09
            }

            *[data-size-desktop=inherit][_ngcontent-webapp-c33] {
                font-size: inherit;
                line-height: inherit
            }

            *[data-weight-desktop=bold][_ngcontent-webapp-c33] {
                font-weight: 700
            }

            *[data-weight-desktop=medium][_ngcontent-webapp-c33] {
                font-weight: 500
            }

            *[data-weight-desktop=normal][_ngcontent-webapp-c33] {
                font-weight: 400
            }

            *[data-weight-desktop=light][_ngcontent-webapp-c33] {
                font-weight: 300
            }

            *[data-weight-desktop=inherit][_ngcontent-webapp-c33] {
                font-weight: inherit
            }
        }

        @media (min-width: 1440px) {
            *[data-size-desktop-xlarge=xxxsmall][_ngcontent-webapp-c33] {
                font-size: 11px;
                line-height: 1.45
            }

            *[data-size-desktop-xlarge=xxsmall][_ngcontent-webapp-c33] {
                font-size: 14px;
                line-height: 1.43
            }

            *[data-size-desktop-xlarge=xsmall][_ngcontent-webapp-c33] {
                font-size: 15px;
                line-height: 1.4
            }

            *[data-size-desktop-xlarge=small][_ngcontent-webapp-c33] {
                font-size: 16px;
                line-height: 1.5
            }

            *[data-size-desktop-xlarge=marketing_small][_ngcontent-webapp-c33] {
                font-size: 18px;
                line-height: 1.55
            }

            *[data-size-desktop-xlarge=mid][_ngcontent-webapp-c33] {
                font-size: 20px;
                line-height: 1.4
            }

            *[data-size-desktop-xlarge=large][_ngcontent-webapp-c33] {
                font-size: 24px;
                line-height: 1.33
            }

            *[data-size-desktop-xlarge=xlarge][_ngcontent-webapp-c33] {
                font-size: 32px;
                line-height: 1.37
            }

            *[data-size-desktop-xlarge=xxlarge][_ngcontent-webapp-c33] {
                font-size: 41px;
                line-height: 1.17
            }

            *[data-size-desktop-xlarge=xxxlarge][_ngcontent-webapp-c33] {
                font-size: 48px;
                line-height: 1.17
            }

            *[data-size-desktop-xlarge=marketing_mega][_ngcontent-webapp-c33] {
                font-size: 57px;
                line-height: 1.15
            }

            *[data-size-desktop-xlarge=marketing_xmega][_ngcontent-webapp-c33] {
                font-size: 91px;
                line-height: 1.09
            }

            *[data-size-desktop-xlarge=inherit][_ngcontent-webapp-c33] {
                font-size: inherit;
                line-height: inherit
            }

            *[data-weight-desktop-xlarge=bold][_ngcontent-webapp-c33] {
                font-weight: 700
            }

            *[data-weight-desktop-xlarge=medium][_ngcontent-webapp-c33] {
                font-weight: 500
            }

            *[data-weight-desktop-xlarge=normal][_ngcontent-webapp-c33] {
                font-weight: 400
            }

            *[data-weight-desktop-xlarge=light][_ngcontent-webapp-c33] {
                font-weight: 300
            }

            *[data-weight-desktop-xlarge=inherit][_ngcontent-webapp-c33] {
                font-weight: inherit
            }
        }

        [data-text-transform=lowercase][_ngcontent-webapp-c33] {
            text-transform: lowercase
        }

        [data-text-transform=capitalize][_ngcontent-webapp-c33] {
            text-transform: capitalize
        }

        [data-text-transform=uppercase][_ngcontent-webapp-c33] {
            text-transform: uppercase
        }

        *[data-color=inherit][_ngcontent-webapp-c33] {
            color: inherit
        }

        *[data-color=foreground][_ngcontent-webapp-c33] {
            color: var(--color-foreground)
        }

        *[data-color=light][_ngcontent-webapp-c33] {
            color: #fcfcfd
        }

        *[data-color=dark][_ngcontent-webapp-c33] {
            color: #12151b
        }

        *[data-color=error][_ngcontent-webapp-c33] {
            color: #eb3730
        }

        *[data-color=warning][_ngcontent-webapp-c33] {
            color: #e96800
        }

        *[data-color=success][_ngcontent-webapp-c33] {
            color: #058430
        }

        *[data-color=primary][_ngcontent-webapp-c33] {
            color: #e60278
        }

        [data-truncate=true][_ngcontent-webapp-c33] {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            line-height: normal
        }

        @supports (overflow: clip) {
            [data-truncate=true][_ngcontent-webapp-c33] {
                overflow: clip
            }

            @supports (-moz-appearance: none) {
                [data-truncate=true][_ngcontent-webapp-c33] {
                    overflow: hidden
                }
            }
        }

        [data-inline=true][_ngcontent-webapp-c33] {
            display: inline
        }
    </style>
    <style>
        [_nghost-webapp-c132] {
            border-radius: 20px;
            color: var(--color-foreground);
            display: inline-flex
        }

        [data-tag-dark-mode=true][_nghost-webapp-c132] {
            color: #fcfcfd
        }

        [data-tag-borderless=true][_nghost-webapp-c132] .Tag[_ngcontent-webapp-c132] {
            background-color: transparent;
            height: auto;
            padding: 0 8px 0 0
        }

        [data-tag-borderless=true][_nghost-webapp-c132] .IsSelected[_ngcontent-webapp-c132] {
            border: none
        }

        [data-tag-borderless=true][_nghost-webapp-c132]:not(:last-child):after {
            align-self: center;
            background: currentColor;
            border-radius: 50%;
            content: "\a";
            height: 3px;
            margin-right: 8px;
            position: relative;
            width: 3px
        }

        .Tag[_ngcontent-webapp-c132] {
            align-items: center;
            background-color: var(--color-bg-light);
            border-radius: inherit;
            display: inline-flex;
            padding: 3px 12px;
            transition: background-color .2s ease-out, color .2s ease-out
        }

        .Tag[data-tag-type=clickable][_ngcontent-webapp-c132]:hover,
        .Tag[data-tag-type=dismissable][_ngcontent-webapp-c132]:hover {
            border-color: #589af0
        }

        .Tag[data-tag-type=clickable][_ngcontent-webapp-c132] {
            cursor: pointer
        }

        .Tag[data-tag-borderless=false][_ngcontent-webapp-c132] {
            border: 1px solid #bcc5d3
        }

        .Tag[data-tag-invalid=true][_ngcontent-webapp-c132] {
            border-color: #eb3730
        }

        .Tag[data-tag-size=small][_ngcontent-webapp-c132] {
            border-radius: 10px;
            height: 20px;
            padding: 3px 8px
        }

        .Tag[data-tag-size=large][_ngcontent-webapp-c132] {
            border-radius: 24px;
            height: 36px;
            padding: 3px 24px
        }

        .Tag[data-tag-color=mid][_ngcontent-webapp-c132] {
            background-color: #bcc5d3
        }

        .Tag[data-tag-color=mid-light][_ngcontent-webapp-c132] {
            background-color: #eef0f4;
            border-color: #eef0f4;
            color: #3d4a5d
        }

        .Tag[data-tag-color=primary][_ngcontent-webapp-c132] {
            background-color: #e60278;
            border-color: transparent;
            color: #fcfcfd
        }

        .Tag[data-tag-color=preferred-freelancer][_ngcontent-webapp-c132] {
            background-color: #ff6700;
            border-color: transparent;
            color: #fcfcfd
        }

        .Tag[data-tag-color=preferred-freelancer-light][_ngcontent-webapp-c132] {
            background-color: #ff670012;
            border-color: #ff670012;
            color: #ad4d00
        }

        .Tag[data-tag-color=secondary][_ngcontent-webapp-c132] {
            background-color: #fcfcfd;
            border-color: #1772eb;
            color: #1772eb
        }

        .Tag[data-tag-color=secondary-dark][_ngcontent-webapp-c132] {
            background-color: #eaf2fd;
            border-color: #eaf2fd;
            color: #082e60
        }

        .Tag[data-tag-color=success][_ngcontent-webapp-c132] {
            background-color: #058430;
            border-color: inherit;
            color: #fcfcfd
        }

        .Tag[data-tag-color=success-light][_ngcontent-webapp-c132] {
            background-color: #e5ffe280;
            border-color: #e5ffe280;
            color: #023815
        }

        .Tag[data-tag-color=danger][_ngcontent-webapp-c132] {
            background-color: #d31721;
            border-color: inherit;
            color: #fcfcfd
        }

        .Tag[data-tag-color=danger-light][_ngcontent-webapp-c132] {
            background-color: #ffcdc740;
            border-color: #ffcdc740;
            color: #891b21
        }

        .Tag[data-tag-color=dark-green][_ngcontent-webapp-c132] {
            background-color: #058430;
            border-color: inherit;
            color: #fcfcfd
        }

        .Tag[data-tag-color=yellow-light][_ngcontent-webapp-c132] {
            background-color: #fff3cb;
            border-color: #fff3cb;
            color: #d31721
        }

        .Tag[data-tag-color=inherit][_ngcontent-webapp-c132] {
            background-color: inherit;
            border-color: inherit;
            color: inherit
        }

        .IsSelected[_ngcontent-webapp-c132] {
            background-color: #eaf2fd;
            border: 1px solid currentColor;
            color: #1772eb
        }

        .Content[_ngcontent-webapp-c132] {
            word-break: break-word;
            word-wrap: break-word
        }

        .CloseIcon[_ngcontent-webapp-c132] {
            cursor: pointer;
            height: 13px;
            transform: scale(.5)
        }
    </style>
    <style>
        [_nghost-webapp-c578] {
            display: block
        }

        @media (min-width: 960px) {
            .ContentContainer[_ngcontent-webapp-c578] {
                background-color: var(--color-bg-light);
                border-radius: 5px;
                box-shadow: 0 1px 3px #bcc5d3;
                padding: 24px 32px
            }
        }

        .Project-heading[_ngcontent-webapp-c578] {
            display: flex;
            justify-content: space-between
        }

        @media (min-width: 768px) {
            .Project-heading-title[_ngcontent-webapp-c578] {
                flex: 0 0 67%
            }
        }

        .Project-description[_ngcontent-webapp-c578] {
            word-break: break-word;
            word-wrap: break-word
        }

        .IconTextPair[_ngcontent-webapp-c578] {
            align-items: center;
            display: flex
        }

        .IconContainer[_ngcontent-webapp-c578] {
            align-items: center;
            display: flex;
            height: 24px;
            width: 24px
        }

        .MapContainer[_ngcontent-webapp-c578] {
            height: 300px
        }

        .BidList[_ngcontent-webapp-c578] {
            align-items: center;
            display: flex;
            flex-direction: column
        }

        @media (min-width: 768px) {
            .BidList[_ngcontent-webapp-c578] {
                align-items: stretch
            }
        }

        @media (min-width: 960px) {
            .BidList[_ngcontent-webapp-c578] {
                display: block
            }
        }
    </style>
    <style>
        .IconText[_ngcontent-webapp-c578] {
            align-items: flex-start;
            display: flex
        }
    </style>
    <style>
        [_nghost-webapp-c70] {
            align-items: flex-start;
            display: flex;
            flex-flow: row wrap;
            margin-left: -8px;
            margin-right: -8px
        }

        @media (min-width: 768px) {
            [_nghost-webapp-c70] {
                margin-left: -12px;
                margin-right: -12px
            }
        }

        [data-horizontal-alignment=center][_nghost-webapp-c70] {
            justify-content: center
        }

        [data-horizontal-alignment=right][_nghost-webapp-c70] {
            justify-content: flex-end
        }

        [data-vertical-alignment=bottom][_nghost-webapp-c70] {
            align-items: flex-end
        }

        [data-vertical-alignment=center][_nghost-webapp-c70] {
            align-items: center
        }

        [data-vertical-alignment=stretch][_nghost-webapp-c70] {
            align-items: stretch
        }

        [data-overflow=true][_nghost-webapp-c70] {
            flex-flow: row nowrap
        }
    </style>
    <style>
        [_nghost-webapp-c69] {
            flex: 0 0 100%;
            max-width: 100%;
            padding: 0 8px
        }

        [data-col="1"][_nghost-webapp-c69] {
            flex-basis: 8.3333333333%;
            max-width: 8.3333333333%
        }

        [data-col="2"][_nghost-webapp-c69] {
            flex-basis: 16.6666666667%;
            max-width: 16.6666666667%
        }

        [data-col="3"][_nghost-webapp-c69] {
            flex-basis: 25%;
            max-width: 25%
        }

        [data-col="4"][_nghost-webapp-c69] {
            flex-basis: 33.3333333333%;
            max-width: 33.3333333333%
        }

        [data-col="5"][_nghost-webapp-c69] {
            flex-basis: 41.6666666667%;
            max-width: 41.6666666667%
        }

        [data-col="6"][_nghost-webapp-c69] {
            flex-basis: 50%;
            max-width: 50%
        }

        [data-col="7"][_nghost-webapp-c69] {
            flex-basis: 58.3333333333%;
            max-width: 58.3333333333%
        }

        [data-col="8"][_nghost-webapp-c69] {
            flex-basis: 66.6666666667%;
            max-width: 66.6666666667%
        }

        [data-col="9"][_nghost-webapp-c69] {
            flex-basis: 75%;
            max-width: 75%
        }

        [data-col="10"][_nghost-webapp-c69] {
            flex-basis: 83.3333333333%;
            max-width: 83.3333333333%
        }

        [data-col="11"][_nghost-webapp-c69] {
            flex-basis: 91.6666666667%;
            max-width: 91.6666666667%
        }

        [data-col="12"][_nghost-webapp-c69] {
            flex-basis: 100%;
            max-width: 100%
        }

        [data-order="1"][_nghost-webapp-c69] {
            order: 1
        }

        [data-order="2"][_nghost-webapp-c69] {
            order: 2
        }

        [data-order="3"][_nghost-webapp-c69] {
            order: 3
        }

        [data-order="4"][_nghost-webapp-c69] {
            order: 4
        }

        [data-order="5"][_nghost-webapp-c69] {
            order: 5
        }

        [data-order="6"][_nghost-webapp-c69] {
            order: 6
        }

        [data-pull=right][_nghost-webapp-c69] {
            margin-left: auto
        }

        [data-pull=left][_nghost-webapp-c69] {
            margin-right: auto
        }

        [data-flex-container=true][_nghost-webapp-c69] {
            display: flex
        }

        @media (min-width: 768px) {
            [_nghost-webapp-c69] {
                padding: 0 12px
            }

            [data-col-tablet="1"][_nghost-webapp-c69] {
                flex-basis: 8.3333333333%;
                max-width: 8.3333333333%
            }

            [data-col-tablet="2"][_nghost-webapp-c69] {
                flex-basis: 16.6666666667%;
                max-width: 16.6666666667%
            }

            [data-col-tablet="3"][_nghost-webapp-c69] {
                flex-basis: 25%;
                max-width: 25%
            }

            [data-col-tablet="4"][_nghost-webapp-c69] {
                flex-basis: 33.3333333333%;
                max-width: 33.3333333333%
            }

            [data-col-tablet="5"][_nghost-webapp-c69] {
                flex-basis: 41.6666666667%;
                max-width: 41.6666666667%
            }

            [data-col-tablet="6"][_nghost-webapp-c69] {
                flex-basis: 50%;
                max-width: 50%
            }

            [data-col-tablet="7"][_nghost-webapp-c69] {
                flex-basis: 58.3333333333%;
                max-width: 58.3333333333%
            }

            [data-col-tablet="8"][_nghost-webapp-c69] {
                flex-basis: 66.6666666667%;
                max-width: 66.6666666667%
            }

            [data-col-tablet="9"][_nghost-webapp-c69] {
                flex-basis: 75%;
                max-width: 75%
            }

            [data-col-tablet="10"][_nghost-webapp-c69] {
                flex-basis: 83.3333333333%;
                max-width: 83.3333333333%
            }

            [data-col-tablet="11"][_nghost-webapp-c69] {
                flex-basis: 91.6666666667%;
                max-width: 91.6666666667%
            }

            [data-col-tablet="12"][_nghost-webapp-c69] {
                flex-basis: 100%;
                max-width: 100%
            }

            [data-tablet-order="1"][_nghost-webapp-c69] {
                order: 1
            }

            [data-tablet-order="2"][_nghost-webapp-c69] {
                order: 2
            }

            [data-tablet-order="3"][_nghost-webapp-c69] {
                order: 3
            }

            [data-tablet-order="4"][_nghost-webapp-c69] {
                order: 4
            }

            [data-tablet-order="5"][_nghost-webapp-c69] {
                order: 5
            }

            [data-tablet-order="6"][_nghost-webapp-c69] {
                order: 6
            }

            [data-tablet-order="7"][_nghost-webapp-c69] {
                order: 7
            }

            [data-tablet-order="8"][_nghost-webapp-c69] {
                order: 8
            }
        }

        @media (min-width: 960px) {
            [data-col-desktop-small="1"][_nghost-webapp-c69] {
                flex-basis: 8.3333333333%;
                max-width: 8.3333333333%
            }

            [data-col-desktop-small="2"][_nghost-webapp-c69] {
                flex-basis: 16.6666666667%;
                max-width: 16.6666666667%
            }

            [data-col-desktop-small="3"][_nghost-webapp-c69] {
                flex-basis: 25%;
                max-width: 25%
            }

            [data-col-desktop-small="4"][_nghost-webapp-c69] {
                flex-basis: 33.3333333333%;
                max-width: 33.3333333333%
            }

            [data-col-desktop-small="5"][_nghost-webapp-c69] {
                flex-basis: 41.6666666667%;
                max-width: 41.6666666667%
            }

            [data-col-desktop-small="6"][_nghost-webapp-c69] {
                flex-basis: 50%;
                max-width: 50%
            }

            [data-col-desktop-small="7"][_nghost-webapp-c69] {
                flex-basis: 58.3333333333%;
                max-width: 58.3333333333%
            }

            [data-col-desktop-small="8"][_nghost-webapp-c69] {
                flex-basis: 66.6666666667%;
                max-width: 66.6666666667%
            }

            [data-col-desktop-small="9"][_nghost-webapp-c69] {
                flex-basis: 75%;
                max-width: 75%
            }

            [data-col-desktop-small="10"][_nghost-webapp-c69] {
                flex-basis: 83.3333333333%;
                max-width: 83.3333333333%
            }

            [data-col-desktop-small="11"][_nghost-webapp-c69] {
                flex-basis: 91.6666666667%;
                max-width: 91.6666666667%
            }

            [data-col-desktop-small="12"][_nghost-webapp-c69] {
                flex-basis: 100%;
                max-width: 100%
            }

            [data-desktop-small-order="1"][_nghost-webapp-c69] {
                order: 1
            }

            [data-desktop-small-order="2"][_nghost-webapp-c69] {
                order: 2
            }

            [data-desktop-small-order="3"][_nghost-webapp-c69] {
                order: 3
            }

            [data-desktop-small-order="4"][_nghost-webapp-c69] {
                order: 4
            }

            [data-desktop-small-order="5"][_nghost-webapp-c69] {
                order: 5
            }

            [data-desktop-small-order="6"][_nghost-webapp-c69] {
                order: 6
            }

            [data-desktop-small-order="7"][_nghost-webapp-c69] {
                order: 7
            }

            [data-desktop-small-order="8"][_nghost-webapp-c69] {
                order: 8
            }

            [data-desktop-small-order="9"][_nghost-webapp-c69] {
                order: 9
            }
        }

        @media (min-width: 1200px) {
            [data-col-desktop-large="1"][_nghost-webapp-c69] {
                flex-basis: 8.3333333333%;
                max-width: 8.3333333333%
            }

            [data-col-desktop-large="2"][_nghost-webapp-c69] {
                flex-basis: 16.6666666667%;
                max-width: 16.6666666667%
            }

            [data-col-desktop-large="3"][_nghost-webapp-c69] {
                flex-basis: 25%;
                max-width: 25%
            }

            [data-col-desktop-large="4"][_nghost-webapp-c69] {
                flex-basis: 33.3333333333%;
                max-width: 33.3333333333%
            }

            [data-col-desktop-large="5"][_nghost-webapp-c69] {
                flex-basis: 41.6666666667%;
                max-width: 41.6666666667%
            }

            [data-col-desktop-large="6"][_nghost-webapp-c69] {
                flex-basis: 50%;
                max-width: 50%
            }

            [data-col-desktop-large="7"][_nghost-webapp-c69] {
                flex-basis: 58.3333333333%;
                max-width: 58.3333333333%
            }

            [data-col-desktop-large="8"][_nghost-webapp-c69] {
                flex-basis: 66.6666666667%;
                max-width: 66.6666666667%
            }

            [data-col-desktop-large="9"][_nghost-webapp-c69] {
                flex-basis: 75%;
                max-width: 75%
            }

            [data-col-desktop-large="10"][_nghost-webapp-c69] {
                flex-basis: 83.3333333333%;
                max-width: 83.3333333333%
            }

            [data-col-desktop-large="11"][_nghost-webapp-c69] {
                flex-basis: 91.6666666667%;
                max-width: 91.6666666667%
            }

            [data-col-desktop-large="12"][_nghost-webapp-c69] {
                flex-basis: 100%;
                max-width: 100%
            }

            [data-desktop-large-order="1"][_nghost-webapp-c69] {
                order: 1
            }

            [data-desktop-large-order="2"][_nghost-webapp-c69] {
                order: 2
            }

            [data-desktop-large-order="3"][_nghost-webapp-c69] {
                order: 3
            }
        }
    </style>
    <style>
        [_nghost-webapp-c584] {
            display: block
        }

        .BidCta[_ngcontent-webapp-c584] {
            width: 100%
        }
    </style>
    <style>
        [_nghost-webapp-c582] {
            display: block
        }

        .Breadcrumbs[_ngcontent-webapp-c582] {
            display: flex;
            flex-wrap: wrap;
            line-height: 1
        }
    </style>
    <style>
        @charset "UTF-8";

        [_nghost-webapp-c581]:not(:last-child):not([data-mobile-show-breadcrumb=true]) {
            display: none
        }

        [_nghost-webapp-c581]:not(:last-child):after {
            content: "\203a";
            padding-left: 8px;
            padding-right: 8px
        }

        @media (min-width: 768px) {
            [_nghost-webapp-c581]:not(:last-child):not([data-mobile-show-breadcrumb=true]) {
                display: block
            }
        }

        [data-color=inherit][_nghost-webapp-c581] {
            color: inherit
        }

        [data-color=light][_nghost-webapp-c581] {
            color: #fcfcfd
        }

        [data-color=dark][_nghost-webapp-c581] {
            color: #12151b
        }

        [data-text-transform=lowercase][_nghost-webapp-c581] {
            text-transform: lowercase
        }

        [data-text-transform=capitalize][_nghost-webapp-c581] {
            text-transform: capitalize
        }

        [data-text-transform=uppercase][_nghost-webapp-c581] {
            text-transform: uppercase
        }
    </style>
    <style>
        [_nghost-webapp-c189] {
            display: block
        }

        [data-dynamic-validation=true][_nghost-webapp-c189] {
            min-height: 71px
        }

        .InputInner[_ngcontent-webapp-c189] {
            position: relative
        }

        .InputInner[data-type=number-increment][_ngcontent-webapp-c189] {
            display: flex
        }

        .InputInner[data-type=number-increment][_ngcontent-webapp-c189] .InputContainer[_ngcontent-webapp-c189] {
            flex: 0 1 40px
        }

        .InputInner[data-type=number-increment][_ngcontent-webapp-c189] .InputContainer[data-size=mid][_ngcontent-webapp-c189] {
            flex-basis: 50px
        }

        .InputInner[data-type=number-increment][_ngcontent-webapp-c189] .InputContainer[data-size=large][_ngcontent-webapp-c189] {
            flex-basis: 60px
        }

        .InputInner[data-type=number-increment][_ngcontent-webapp-c189] .NativeElement[_ngcontent-webapp-c189] {
            background-color: var(--color-bg-input);
            padding-left: 8px;
            padding-right: 8px;
            text-align: center
        }

        .InputInner[data-type=number-increment][data-align=right][_ngcontent-webapp-c189] {
            justify-content: flex-end
        }

        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189] .InputContainer[_ngcontent-webapp-c189],
        .InputInner[data-edit-inline=non-bordered][_ngcontent-webapp-c189] .InputContainer[_ngcontent-webapp-c189] {
            border: 0;
            border-radius: 0;
            transition: all .3s ease
        }

        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189] .LabelTag[_ngcontent-webapp-c189],
        .InputInner[data-edit-inline=non-bordered][_ngcontent-webapp-c189] .LabelTag[_ngcontent-webapp-c189] {
            font-size: 15px;
            line-height: 1.4;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 0;
            transition: all .3s ease;
            z-index: 0
        }

        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189] .TitleInput[_ngcontent-webapp-c189],
        .InputInner[data-edit-inline=non-bordered][_ngcontent-webapp-c189] .TitleInput[_ngcontent-webapp-c189] {
            color: #5c6f8c;
            font-weight: 700
        }

        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189] .TitleInput[data-edit-inline-title-size=large][_ngcontent-webapp-c189],
        .InputInner[data-edit-inline=non-bordered][_ngcontent-webapp-c189] .TitleInput[data-edit-inline-title-size=large][_ngcontent-webapp-c189] {
            font-size: 20px;
            line-height: 1.4
        }

        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189] .TitleInput[data-edit-inline-title-size=xlarge][_ngcontent-webapp-c189],
        .InputInner[data-edit-inline=non-bordered][_ngcontent-webapp-c189] .TitleInput[data-edit-inline-title-size=xlarge][_ngcontent-webapp-c189] {
            font-size: 24px;
            line-height: 1.33
        }

        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189] .TitleInput[data-edit-inline-title-size=xxlarge][_ngcontent-webapp-c189],
        .InputInner[data-edit-inline=non-bordered][_ngcontent-webapp-c189] .TitleInput[data-edit-inline-title-size=xxlarge][_ngcontent-webapp-c189] {
            font-size: 32px;
            line-height: 1.37
        }

        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189] .TitleInput.HasValue[_ngcontent-webapp-c189],
        .InputInner[data-edit-inline=non-bordered][_ngcontent-webapp-c189] .TitleInput.HasValue[_ngcontent-webapp-c189] {
            font-size: 11px;
            line-height: 1.45
        }

        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189] .BeforeLabelSpace[_ngcontent-webapp-c189],
        .InputInner[data-edit-inline=non-bordered][_ngcontent-webapp-c189] .BeforeLabelSpace[_ngcontent-webapp-c189] {
            left: 16px
        }

        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189] .HasValue[_ngcontent-webapp-c189],
        .InputInner[data-edit-inline=non-bordered][_ngcontent-webapp-c189] .HasValue[_ngcontent-webapp-c189] {
            font-size: 11px;
            line-height: 1.45;
            top: -4px
        }

        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189] .HasValue.HideLabelTag[_ngcontent-webapp-c189],
        .InputInner[data-edit-inline=non-bordered][_ngcontent-webapp-c189] .HasValue.HideLabelTag[_ngcontent-webapp-c189] {
            font-size: 15px;
            line-height: 1.4;
            color: transparent;
            top: 50%;
            visibility: hidden
        }

        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189]:focus-within .LabelTag[_ngcontent-webapp-c189],
        .InputInner[data-edit-inline=non-bordered][_ngcontent-webapp-c189]:focus-within .LabelTag[_ngcontent-webapp-c189] {
            font-size: 11px;
            line-height: 1.45;
            top: -4px
        }

        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189]:focus-within .HideLabelTag[_ngcontent-webapp-c189],
        .InputInner[data-edit-inline=non-bordered][_ngcontent-webapp-c189]:focus-within .HideLabelTag[_ngcontent-webapp-c189] {
            font-size: 15px;
            line-height: 1.4;
            color: transparent;
            top: 50%;
            visibility: hidden
        }

        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189] .InputLabel[_ngcontent-webapp-c189],
        .InputInner[data-edit-inline=non-bordered][_ngcontent-webapp-c189] .InputLabel[_ngcontent-webapp-c189] {
            min-width: auto
        }

        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189] .LabelText[_ngcontent-webapp-c189],
        .InputInner[data-edit-inline=non-bordered][_ngcontent-webapp-c189] .LabelText[_ngcontent-webapp-c189] {
            padding: 0 8px 0 0
        }

        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189] .InputContainer[_ngcontent-webapp-c189]:before,
        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189] .InputContainer[_ngcontent-webapp-c189]:after {
            bottom: 0;
            content: "";
            height: 0%;
            left: 0;
            position: absolute;
            transition: all .3s ease;
            width: 100%;
            z-index: 1
        }

        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189] .InputContainer[_ngcontent-webapp-c189]:before {
            border-bottom: 1px solid #bcc5d3
        }

        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189] .InputContainer[_ngcontent-webapp-c189]:after {
            border-bottom: 2px solid #1772eb;
            transform: translate(-100%)
        }

        .InputInner[data-edit-inline=default][_ngcontent-webapp-c189] .InputContainer[_ngcontent-webapp-c189]:focus-within:after {
            transform: translate(0)
        }

        .ValidationError[_ngcontent-webapp-c189] {
            display: flex
        }

        .ValidationError[data-align=right][_ngcontent-webapp-c189] {
            justify-content: flex-end
        }

        .InputContainer[_ngcontent-webapp-c189] {
            font-size: 15px;
            line-height: 1.4;
            overflow: hidden;
            align-items: center;
            background-color: var(--color-bg-input);
            border: 1px solid #bcc5d3;
            border-radius: 4px;
            color: var(--color-foreground);
            display: flex;
            padding: 4px 0;
            position: relative;
            transition: all .2s ease-out, border-color .3s ease-out
        }

        @supports (overflow: clip) {
            .InputContainer[_ngcontent-webapp-c189] {
                overflow: clip
            }

            @supports (-moz-appearance: none) {
                .InputContainer[_ngcontent-webapp-c189] {
                    overflow: hidden
                }
            }
        }

        .InputContainer[data-size=small][_ngcontent-webapp-c189] {
            height: 35px;
            padding: 0
        }

        .InputContainer[data-size=mid][_ngcontent-webapp-c189] {
            height: 39px;
            padding: 0
        }

        .InputContainer[data-size=large][_ngcontent-webapp-c189] {
            height: 46px;
            padding: 0
        }

        .InputContainer[data-size=large][_ngcontent-webapp-c189] .IconEnd[_ngcontent-webapp-c189] {
            margin-right: 16px
        }

        .InputContainer[data-size=auto][_ngcontent-webapp-c189] {
            font-size: inherit;
            height: auto;
            min-height: 46px;
            padding: 0
        }

        @media (min-width: 768px) {
            .InputContainer[data-size-tablet=small][_ngcontent-webapp-c189] {
                height: 35px;
                padding: 0
            }

            .InputContainer[data-size-tablet=mid][_ngcontent-webapp-c189] {
                height: 39px;
                padding: 0
            }

            .InputContainer[data-size-tablet=large][_ngcontent-webapp-c189] {
                height: 46px;
                padding: 0
            }

            .InputContainer[data-size-tablet=large][_ngcontent-webapp-c189] .IconEnd[_ngcontent-webapp-c189] {
                margin-right: 16px
            }

            .InputContainer[data-size-tablet=auto][_ngcontent-webapp-c189] {
                font-size: inherit;
                height: auto;
                min-height: 46px;
                padding: 0
            }
        }

        @media (min-width: 960px) {
            .InputContainer[data-size-desktop=small][_ngcontent-webapp-c189] {
                height: 35px;
                padding: 0
            }

            .InputContainer[data-size-desktop=mid][_ngcontent-webapp-c189] {
                height: 39px;
                padding: 0
            }

            .InputContainer[data-size-desktop=large][_ngcontent-webapp-c189] {
                height: 46px;
                padding: 0
            }

            .InputContainer[data-size-desktop=large][_ngcontent-webapp-c189] .IconEnd[_ngcontent-webapp-c189] {
                margin-right: 16px
            }

            .InputContainer[data-size-desktop=auto][_ngcontent-webapp-c189] {
                font-size: inherit;
                height: auto;
                min-height: 46px;
                padding: 0
            }
        }

        .InputContainer[disabled][_ngcontent-webapp-c189] {
            background-color: var(--color-bg-input-disabled);
            color: var(--color-foreground);
            cursor: not-allowed
        }

        .InputContainer[disabled][_ngcontent-webapp-c189] .InputButtonEnd[_ngcontent-webapp-c189] {
            cursor: inherit;
            pointer-events: none
        }

        .InputContainer[type=number][_ngcontent-webapp-c189] {
            padding-right: 0
        }

        .InputContainer[_ngcontent-webapp-c189]:hover,
        .InputContainer.IsFocused[_ngcontent-webapp-c189] {
            border-color: #589af0;
            color: var(--color-foreground)
        }

        .InputContainer.IsInvalid[_ngcontent-webapp-c189] {
            border-color: #eb3730
        }

        .InputContainer.IsValid[_ngcontent-webapp-c189] {
            border-color: #058430
        }

        .InputContainer.BeforeLabelPresent[_ngcontent-webapp-c189] .NativeElement[_ngcontent-webapp-c189] {
            padding-left: 2px
        }

        .InputContainer.AfterLabelPresent[_ngcontent-webapp-c189] .NativeElement[_ngcontent-webapp-c189] {
            padding-right: 2px
        }

        .InputContainer.IsExpandable[_ngcontent-webapp-c189] {
            margin-left: auto
        }

        .InputContainer.IsExpandable[_ngcontent-webapp-c189] .NativeElement[_ngcontent-webapp-c189] {
            padding-right: 32px
        }

        .InputContainer.IsExpandable[data-expanded=true][_ngcontent-webapp-c189] {
            width: 100%
        }

        .InputContainer.IsExpandable[data-expanded=false][_ngcontent-webapp-c189] {
            background: none;
            border: 0;
            width: 36px
        }

        .InputContainer.IsExpandable[data-expanded=false][_ngcontent-webapp-c189] .NativeElement[_ngcontent-webapp-c189] {
            opacity: 0
        }

        .InputContainer.IsBorderless[_ngcontent-webapp-c189] {
            border: none
        }

        .InputContainer.IsBorderless[_ngcontent-webapp-c189] .HasIconStart[_ngcontent-webapp-c189],
        .InputContainer.IsBorderless[_ngcontent-webapp-c189] .InputButtonStart[_ngcontent-webapp-c189],
        .InputContainer.IsBorderless[_ngcontent-webapp-c189] .InputButtonStart-noMarginMobile[_ngcontent-webapp-c189] {
            transition: all .2s ease-out
        }

        .InputContainer.IsBorderless[data-hide-icon=true][_ngcontent-webapp-c189] .InputButtonStart[_ngcontent-webapp-c189],
        .InputContainer.IsBorderless[data-hide-icon=true][_ngcontent-webapp-c189] .InputButtonStart-noMarginMobile[_ngcontent-webapp-c189] {
            opacity: 0;
            pointer-events: none;
            transform: translate(-100%, -50%)
        }

        .InputContainer.IsBorderless[data-hide-icon=true][_ngcontent-webapp-c189] .HasIconStart[_ngcontent-webapp-c189] {
            padding-left: 0
        }

        @media (max-width: 768px) {
            .InputContainer.IsBorderlessMobile[_ngcontent-webapp-c189] {
                border: none
            }

            .InputContainer.IsBorderlessMobile[_ngcontent-webapp-c189] .HasIconStart[_ngcontent-webapp-c189],
            .InputContainer.IsBorderlessMobile[_ngcontent-webapp-c189] .InputButtonStart[_ngcontent-webapp-c189],
            .InputContainer.IsBorderlessMobile[_ngcontent-webapp-c189] .InputButtonStart-noMarginMobile[_ngcontent-webapp-c189] {
                transition: all .2s ease-out
            }

            .InputContainer.IsBorderlessMobile[data-hide-icon=true][_ngcontent-webapp-c189] .InputButtonStart[_ngcontent-webapp-c189],
            .InputContainer.IsBorderlessMobile[data-hide-icon=true][_ngcontent-webapp-c189] .InputButtonStart-noMarginMobile[_ngcontent-webapp-c189] {
                opacity: 0;
                pointer-events: none;
                transform: translate(-100%, -50%)
            }

            .InputContainer.IsBorderlessMobile[data-hide-icon=true][_ngcontent-webapp-c189] .HasIconStart[_ngcontent-webapp-c189] {
                padding-left: 0
            }
        }

        .InputContainer[_ngcontent-webapp-c189] .NativeElementContainer[_ngcontent-webapp-c189] {
            background-color: var(--color-bg-input)
        }

        .InputContainer[_ngcontent-webapp-c189] .NativeElementContainer[data-transparent-background=true][_ngcontent-webapp-c189] {
            background: transparent
        }

        .InputContainer.SearchInput[_ngcontent-webapp-c189] {
            background-color: var(--color-bg-input);
            padding-right: 24px
        }

        .InputContainer.SearchInput-roundCorners[_ngcontent-webapp-c189] {
            border-radius: 24px
        }

        .InputContainer.IsDateRangeDataApplied[_ngcontent-webapp-c189] {
            background: #eaf2fd;
            border-color: #589af0
        }

        .InputContainer[data-transparent-background=true][_ngcontent-webapp-c189] {
            background: transparent
        }

        .NativeElementContainer[_ngcontent-webapp-c189] {
            flex: 1 1 100%;
            height: 100%
        }

        .NativeElementContainer.DateRangeNativeElementContainer[_ngcontent-webapp-c189] {
            height: auto;
            padding-right: 42px
        }

        .NativeElementContainer.DateRangeNativeElementContainer[data-right-icon-size=small][_ngcontent-webapp-c189] {
            padding-right: 34px
        }

        .NativeElement[_ngcontent-webapp-c189] {
            background-color: var(--color-bg-input);
            border: 0;
            color: var(--color-foreground);
            display: inline-block;
            flex: 0 1 auto;
            font-family: inherit;
            font-size: inherit;
            height: 100%;
            margin: 0;
            opacity: 1;
            padding-left: 6px;
            padding-right: 6px;
            transition: opacity .2s ease-in;
            width: 100%
        }

        .NativeElement[data-edit-inline-title-size=large][_ngcontent-webapp-c189] {
            font-size: 20px;
            line-height: 1.4
        }

        .NativeElement[data-edit-inline-title-size=xlarge][_ngcontent-webapp-c189] {
            font-size: 24px;
            line-height: 1.33
        }

        .NativeElement[data-edit-inline-title-size=xxlarge][_ngcontent-webapp-c189] {
            font-size: 32px;
            line-height: 1.37
        }

        .NativeElement[type=search][_ngcontent-webapp-c189]::-webkit-search-cancel-button {
            -webkit-appearance: none;
            appearance: none
        }

        .NativeElement[data-applied=true][_ngcontent-webapp-c189] {
            background: #eaf2fd;
            border-color: #589af0
        }

        .NativeElement[data-size=small][_ngcontent-webapp-c189] {
            padding-left: 6px;
            padding-right: 6px
        }

        .NativeElement[data-size=mid][_ngcontent-webapp-c189] {
            padding-left: 14px;
            padding-right: 14px
        }

        .NativeElement[data-size=large][_ngcontent-webapp-c189] {
            padding-left: 18px;
            padding-right: 18px
        }

        .NativeElement[data-size=auto][_ngcontent-webapp-c189] {
            padding-left: 14px;
            padding-right: 14px
        }

        @media (min-width: 768px) {
            .NativeElement[data-size-tablet=small][_ngcontent-webapp-c189] {
                padding-left: 6px;
                padding-right: 6px
            }

            .NativeElement[data-size-tablet=mid][_ngcontent-webapp-c189] {
                padding-left: 14px;
                padding-right: 14px
            }

            .NativeElement[data-size-tablet=large][_ngcontent-webapp-c189] {
                padding-left: 18px;
                padding-right: 18px
            }

            .NativeElement[data-size-tablet=auto][_ngcontent-webapp-c189] {
                padding-left: 14px;
                padding-right: 14px
            }
        }

        @media (min-width: 960px) {
            .NativeElement[data-size-desktop=small][_ngcontent-webapp-c189] {
                padding-left: 6px;
                padding-right: 6px
            }

            .NativeElement[data-size-desktop=mid][_ngcontent-webapp-c189] {
                padding-left: 14px;
                padding-right: 14px
            }

            .NativeElement[data-size-desktop=large][_ngcontent-webapp-c189] {
                padding-left: 18px;
                padding-right: 18px
            }

            .NativeElement[data-size-desktop=auto][_ngcontent-webapp-c189] {
                padding-left: 14px;
                padding-right: 14px
            }
        }

        @media (min-width: 1440px) {
            .NativeElement[data-size-desktop-xlarge=small][_ngcontent-webapp-c189] {
                padding-left: 6px;
                padding-right: 6px
            }

            .NativeElement[data-size-desktop-xlarge=mid][_ngcontent-webapp-c189] {
                padding-left: 14px;
                padding-right: 14px
            }

            .NativeElement[data-size-desktop-xlarge=large][_ngcontent-webapp-c189] {
                padding-left: 18px;
                padding-right: 18px
            }

            .NativeElement[data-size-desktop-xlarge=auto][_ngcontent-webapp-c189] {
                padding-left: 14px;
                padding-right: 14px
            }
        }

        .NativeElement[data-edit-inline=default][_ngcontent-webapp-c189],
        .NativeElement[data-edit-inline=non-bordered][_ngcontent-webapp-c189] {
            background: transparent;
            padding-left: 0;
            padding-right: 0;
            position: relative;
            z-index: 1
        }

        .NativeElement[data-borderless=true][_ngcontent-webapp-c189] {
            border: 1px solid transparent
        }

        .NativeElement[data-borderless=true][_ngcontent-webapp-c189]:focus {
            border-bottom-color: #589af0
        }

        @media (max-width: 768px) {
            .NativeElement[data-borderlessMobile=true][_ngcontent-webapp-c189] {
                border: 1px solid transparent
            }

            .NativeElement[data-borderlessMobile=true][_ngcontent-webapp-c189]:focus {
                border-bottom-color: #589af0
            }
        }

        .NativeElement[data-transparent-background=true][_ngcontent-webapp-c189] {
            background: transparent
        }

        .NativeElement[data-weight=bold][_ngcontent-webapp-c189] {
            font-weight: 700
        }

        .NativeElement[data-weight=medium][_ngcontent-webapp-c189] {
            font-weight: 500
        }

        .NativeElement[data-weight=normal][_ngcontent-webapp-c189] {
            font-weight: 400
        }

        .NativeElement[data-weight=light][_ngcontent-webapp-c189] {
            font-weight: 300
        }

        .NativeElement[data-weight=inherit][_ngcontent-webapp-c189] {
            font-weight: inherit
        }

        .NativeElement[_ngcontent-webapp-c189]:focus {
            outline: none
        }

        .NativeElement[_ngcontent-webapp-c189]:disabled {
            background-color: var(--color-bg-input-disabled);
            color: var(--color-foreground);
            cursor: not-allowed
        }

        .NativeElement[data-align=left][_ngcontent-webapp-c189] {
            text-align: left
        }

        .NativeElement[data-align=right][_ngcontent-webapp-c189] {
            text-align: right
        }

        .NativeElement[data-align=right][type=number][_ngcontent-webapp-c189]::-webkit-outer-spin-button,
        .NativeElement[data-align=right][type=number][_ngcontent-webapp-c189]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            appearance: none;
            margin: 0
        }

        .NativeElement[type=date][_ngcontent-webapp-c189]::-webkit-inner-spin-button {
            display: none
        }

        .NativeElement[_ngcontent-webapp-c189]::-ms-clear {
            display: none
        }

        .NativeElement[_ngcontent-webapp-c189]:-moz-ui-invalid {
            box-shadow: none
        }

        .NativeElement.HasIconStart[_ngcontent-webapp-c189] {
            padding-left: 42px
        }

        .NativeElement[data-left-icon-size=small].HasIconStart[_ngcontent-webapp-c189] {
            padding-left: 34px
        }

        .NativeElement.HasIconEnd[_ngcontent-webapp-c189] {
            padding-right: 42px
        }

        .NativeElement[data-right-icon-size=small].HasIconEnd[_ngcontent-webapp-c189] {
            padding-right: 34px
        }

        .NativeElement[data-custom-arrows=true][_ngcontent-webapp-c189] {
            -moz-appearance: textfield
        }

        .NativeElement[data-custom-arrows=true][_ngcontent-webapp-c189]::-webkit-outer-spin-button,
        .NativeElement[data-custom-arrows=true][_ngcontent-webapp-c189]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            appearance: none;
            margin: 0
        }

        .DateRangeNativeElementLeft[_ngcontent-webapp-c189] {
            height: auto;
            padding-right: 0;
            text-align: center
        }

        .DateRangeNativeElementLeft[data-size=small][_ngcontent-webapp-c189] {
            padding-left: 6px;
            padding-right: 0
        }

        .DateRangeNativeElementLeft[data-size=mid][_ngcontent-webapp-c189] {
            padding-left: 14px;
            padding-right: 0
        }

        .DateRangeNativeElementLeft[data-size=large][_ngcontent-webapp-c189] {
            padding-left: 18px;
            padding-right: 0
        }

        .DateRangeNativeElementLeft[data-size=xlarge][_ngcontent-webapp-c189] {
            padding-left: 26px;
            padding-right: 0
        }

        .DateRangeNativeElementRight[_ngcontent-webapp-c189] {
            height: auto;
            padding-left: 0;
            text-align: center
        }

        .DateRangeNativeElementRight[data-size=small][_ngcontent-webapp-c189] {
            padding-left: 0;
            padding-right: 6px
        }

        .DateRangeNativeElementRight[data-size=mid][_ngcontent-webapp-c189] {
            padding-left: 0;
            padding-right: 14px
        }

        .DateRangeNativeElementRight[data-size=large][_ngcontent-webapp-c189] {
            padding-left: 0;
            padding-right: 18px
        }

        .DateRangeNativeElementRight[data-size=xlarge][_ngcontent-webapp-c189] {
            padding-left: 0;
            padding-right: 26px
        }

        .InputButtonStart[_ngcontent-webapp-c189],
        .IconElementStart[_ngcontent-webapp-c189] {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 0;
            margin-left: 12px;
            z-index: 1
        }

        .InputButtonStart-noMarginMobile[_ngcontent-webapp-c189],
        .IconElementStart-noMarginMobile[_ngcontent-webapp-c189] {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 0;
            z-index: 1
        }

        @media (min-width: 768px) {

            .InputButtonStart-noMarginMobile[_ngcontent-webapp-c189],
            .IconElementStart-noMarginMobile[_ngcontent-webapp-c189] {
                margin-left: 12px
            }
        }

        @media (max-width: 768px) {

            .InputButtonStart-noMarginMobile[_ngcontent-webapp-c189],
            .IconElementStart-noMarginMobile[_ngcontent-webapp-c189] {
                margin-left: 0
            }
        }

        .InputButtonEnd[_ngcontent-webapp-c189],
        .IconElementEnd[_ngcontent-webapp-c189] {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            margin-right: 12px;
            right: 0;
            z-index: 1
        }

        .InputLabel[_ngcontent-webapp-c189] {
            align-items: center;
            color: var(--color-foreground);
            display: flex;
            flex: 0 0 auto;
            height: 100%;
            justify-content: center;
            max-width: 100px;
            min-width: 36px
        }

        .LabelText[_ngcontent-webapp-c189] {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            padding: 0 8px
        }

        @supports (overflow: clip) {
            .LabelText[_ngcontent-webapp-c189] {
                overflow: clip
            }

            @supports (-moz-appearance: none) {
                .LabelText[_ngcontent-webapp-c189] {
                    overflow: hidden
                }
            }
        }

        .BeforeLabel[_ngcontent-webapp-c189] {
            border-bottom-left-radius: 4px;
            border-top-left-radius: 4px
        }

        .AfterLabel[_ngcontent-webapp-c189] {
            border-bottom-right-radius: 4px;
            border-top-right-radius: 4px
        }

        .CountCharacterWrapper[_ngcontent-webapp-c189] {
            text-align: right
        }

        .Counter[_ngcontent-webapp-c189] {
            opacity: 0;
            padding-top: 4px
        }

        .Counter.IsFocus[_ngcontent-webapp-c189] {
            opacity: 1
        }

        .ErrorContainer[_ngcontent-webapp-c189] {
            display: flex
        }

        .IconError[_ngcontent-webapp-c189],
        .Hint[_ngcontent-webapp-c189] {
            padding-top: 4px
        }

        .InputIncrement[_ngcontent-webapp-c189] {
            border-color: #bcc5d3;
            display: inline-flex;
            flex: 0 0 auto;
            transition: all .2s ease-out, border-color .3s ease-out
        }

        .InputIncrement[_ngcontent-webapp-c189]:hover {
            background: #ededf3
        }

        .InputIncrement[data-invalid=true][_ngcontent-webapp-c189] {
            border-color: #eb3730
        }

        .InputIncrement[data-warning=true][_ngcontent-webapp-c189] {
            border-color: #e96800
        }

        .InputIncrement[data-valid=true][_ngcontent-webapp-c189] {
            border-color: #058430
        }

        .InputIncrement[disabled=true][_ngcontent-webapp-c189] {
            border-color: #bcc5d3
        }

        .InputIncrement[_ngcontent-webapp-c189]:first-child {
            border-right-color: transparent
        }

        .InputIncrement[_ngcontent-webapp-c189]:last-child {
            border-left-color: transparent
        }

        .Shadowed[_ngcontent-webapp-c189] {
            border: 1px solid #fcfcfd;
            border-radius: 8px;
            box-shadow: 0 10px 20px #12151b0a, 0 2px 6px #12151b0a, 0 0 1px #12151b0a
        }
    </style>
    <style>
        [_nghost-webapp-c76] {
            display: block
        }

        .ErrorContainer[_ngcontent-webapp-c76] {
            display: flex
        }

        .IconError[_ngcontent-webapp-c76] {
            padding-top: 4px
        }
    </style>
    <style>
        [_nghost-webapp-c188] {
            align-items: center;
            display: flex;
            width: 100%
        }

        [_nghost-webapp-c188]:before,
        [_nghost-webapp-c188]:after {
            border-top: 1px solid #bcc5d3;
            content: "";
            flex: 1 1 auto
        }

        [data-color=dark][_nghost-webapp-c188]:before,
        [data-color=dark][_nghost-webapp-c188]:after {
            border-top-color: #bcc5d3
        }

        [data-color=neutral][_nghost-webapp-c188]:before,
        [data-color=neutral][_nghost-webapp-c188]:after {
            border-top-color: #5c6f8c
        }

        [data-color=xdark][_nghost-webapp-c188]:before,
        [data-color=xdark][_nghost-webapp-c188]:after {
            border-top-color: #12151b
        }

        .HrText[_ngcontent-webapp-c188] {
            flex: 0 0 auto;
            padding-left: 12px;
            padding-right: 12px
        }
    </style>
    <style>
        [_nghost-webapp-c579] {
            display: flex
        }

        .User-bid[_ngcontent-webapp-c579] {
            display: flex;
            flex: 1;
            flex-direction: column
        }

        @media (min-width: 768px) {
            .User-bid[_ngcontent-webapp-c579] {
                flex-direction: row
            }
        }

        .User-bid-username[_ngcontent-webapp-c579] {
            align-items: center;
            display: flex
        }

        .User-bid-text[_ngcontent-webapp-c579] {
            word-break: break-word;
            word-wrap: break-word
        }

        .User-bid-info[_ngcontent-webapp-c579] {
            flex: 1
        }
    </style>
    <style>
        [_nghost-webapp-c91] {
            aspect-ratio: 1/1;
            display: block;
            flex: 0 0 auto;
            position: relative
        }

        [data-size=xxsmall][_nghost-webapp-c91] {
            height: 16px;
            width: 16px
        }

        [data-size=xxsmall][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
            font-size: 11px;
            line-height: 1.45
        }

        [data-size=xsmall][_nghost-webapp-c91] {
            height: 24px;
            width: 24px
        }

        [data-size=xsmall][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
            font-size: 11px;
            line-height: 1.45
        }

        [data-size=small][_nghost-webapp-c91] {
            height: 32px;
            width: 32px
        }

        [data-size=small][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
            font-size: 24px;
            line-height: 1.33
        }

        [data-size=mid][_nghost-webapp-c91] {
            height: 48px;
            width: 48px
        }

        [data-size=mid][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
            font-size: 24px;
            line-height: 1.33
        }

        [data-size=large][_nghost-webapp-c91] {
            height: 64px;
            width: 64px
        }

        [data-size=large][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
            font-size: 41px;
            line-height: 1.17
        }

        [data-size=xlarge][_nghost-webapp-c91] {
            height: 96px;
            width: 96px
        }

        [data-size=xlarge][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
            font-size: 48px;
            line-height: 1.17
        }

        [data-size=xxlarge][_nghost-webapp-c91] {
            height: 128px;
            width: 128px
        }

        [data-size=xxlarge][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
            font-size: 48px;
            line-height: 1.17
        }

        [data-size=max][_nghost-webapp-c91] {
            height: 100%;
            width: 100%
        }

        [data-size=max][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
            font-size: 48px;
            line-height: 1.17
        }

        @media (min-width: 768px) {
            [data-size-tablet=xxsmall][_nghost-webapp-c91] {
                height: 16px;
                width: 16px
            }

            [data-size-tablet=xxsmall][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
                font-size: 11px;
                line-height: 1.45
            }

            [data-size-tablet=xsmall][_nghost-webapp-c91] {
                height: 24px;
                width: 24px
            }

            [data-size-tablet=xsmall][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
                font-size: 11px;
                line-height: 1.45
            }

            [data-size-tablet=small][_nghost-webapp-c91] {
                height: 32px;
                width: 32px
            }

            [data-size-tablet=small][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
                font-size: 24px;
                line-height: 1.33
            }

            [data-size-tablet=mid][_nghost-webapp-c91] {
                height: 48px;
                width: 48px
            }

            [data-size-tablet=mid][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
                font-size: 24px;
                line-height: 1.33
            }

            [data-size-tablet=large][_nghost-webapp-c91] {
                height: 64px;
                width: 64px
            }

            [data-size-tablet=large][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
                font-size: 41px;
                line-height: 1.17
            }

            [data-size-tablet=xlarge][_nghost-webapp-c91] {
                height: 96px;
                width: 96px
            }

            [data-size-tablet=xlarge][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
                font-size: 48px;
                line-height: 1.17
            }

            [data-size-tablet=xxlarge][_nghost-webapp-c91] {
                height: 128px;
                width: 128px
            }

            [data-size-tablet=xxlarge][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
                font-size: 48px;
                line-height: 1.17
            }

            [data-size-tablet=max][_nghost-webapp-c91] {
                height: 100%;
                width: 100%
            }

            [data-size-tablet=max][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
                font-size: 48px;
                line-height: 1.17
            }
        }

        @media (min-width: 960px) {
            [data-size-desktop=xxsmall][_nghost-webapp-c91] {
                height: 16px;
                width: 16px
            }

            [data-size-desktop=xxsmall][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
                font-size: 11px;
                line-height: 1.45
            }

            [data-size-desktop=xsmall][_nghost-webapp-c91] {
                height: 24px;
                width: 24px
            }

            [data-size-desktop=xsmall][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
                font-size: 11px;
                line-height: 1.45
            }

            [data-size-desktop=small][_nghost-webapp-c91] {
                height: 32px;
                width: 32px
            }

            [data-size-desktop=small][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
                font-size: 24px;
                line-height: 1.33
            }

            [data-size-desktop=mid][_nghost-webapp-c91] {
                height: 48px;
                width: 48px
            }

            [data-size-desktop=mid][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
                font-size: 24px;
                line-height: 1.33
            }

            [data-size-desktop=large][_nghost-webapp-c91] {
                height: 64px;
                width: 64px
            }

            [data-size-desktop=large][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
                font-size: 41px;
                line-height: 1.17
            }

            [data-size-desktop=xlarge][_nghost-webapp-c91] {
                height: 96px;
                width: 96px
            }

            [data-size-desktop=xlarge][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
                font-size: 48px;
                line-height: 1.17
            }

            [data-size-desktop=xxlarge][_nghost-webapp-c91] {
                height: 128px;
                width: 128px
            }

            [data-size-desktop=xxlarge][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
                font-size: 48px;
                line-height: 1.17
            }

            [data-size-desktop=max][_nghost-webapp-c91] {
                height: 100%;
                width: 100%
            }

            [data-size-desktop=max][_nghost-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
                font-size: 48px;
                line-height: 1.17
            }
        }

        [_nghost-webapp-c91]:hover .UserAvatarPreviewVideo[_ngcontent-webapp-c91] {
            inset: 0;
            position: absolute;
            display: block
        }

        .UserAvatar[_ngcontent-webapp-c91] {
            overflow: hidden;
            align-items: center;
            border-radius: 5px;
            color: #fcfcfd;
            height: 100%;
            justify-content: center;
            position: relative;
            width: 100%
        }

        @supports (overflow: clip) {
            .UserAvatar[_ngcontent-webapp-c91] {
                overflow: clip
            }

            @supports (-moz-appearance: none) {
                .UserAvatar[_ngcontent-webapp-c91] {
                    overflow: hidden
                }
            }
        }

        .UserAvatar[_ngcontent-webapp-c91]:before {
            content: "";
            display: block;
            float: left
        }

        .UserAvatar[_ngcontent-webapp-c91]:after {
            border: 1px solid #eef0f4;
            border-radius: 5px;
            content: "";
            inset: 0;
            position: absolute;
            z-index: 0
        }

        .UserAvatar[data-disable-avatar-border=true][_ngcontent-webapp-c91]:after {
            border: 1px solid transparent
        }

        .UserAvatar[data-online-status=false][_ngcontent-webapp-c91] {
            border-radius: 5px
        }

        .UserAvatar[data-online-status=false][_ngcontent-webapp-c91]:after {
            border-bottom-right-radius: 5px
        }

        .UserAvatar-upsell[_ngcontent-webapp-c91] {
            cursor: pointer
        }

        .UserAvatar[data-online-status=true][_ngcontent-webapp-c91] {
            border-bottom-right-radius: 5px
        }

        .UserAvatar[data-online-status=true][_ngcontent-webapp-c91]:after {
            border-bottom-right-radius: 5px
        }

        .UserAvatar[data-online-status=true][data-online-size=small][_ngcontent-webapp-c91] {
            border-bottom-right-radius: 5px
        }

        .UserAvatar[data-online-status=true][data-online-size=small][_ngcontent-webapp-c91]:after {
            border-bottom-right-radius: 5px
        }

        .UserAvatar[data-online-status=true][data-online-size=mid][_ngcontent-webapp-c91] {
            border-bottom-right-radius: 6px
        }

        .UserAvatar[data-online-status=true][data-online-size=mid][_ngcontent-webapp-c91]:after {
            border-bottom-right-radius: 6px
        }

        .UserAvatar[data-online-status=true][data-online-size=large][_ngcontent-webapp-c91] {
            border-bottom-right-radius: 8px
        }

        .UserAvatar[data-online-status=true][data-online-size=large][_ngcontent-webapp-c91]:after {
            border-bottom-right-radius: 8px
        }

        .UserAvatar[data-online-status=true][data-online-size=xlarge][_ngcontent-webapp-c91],
        .UserAvatar[data-online-status=true][data-online-size=xxlarge][_ngcontent-webapp-c91] {
            border-bottom-right-radius: 12px
        }

        .UserAvatar[data-online-status=true][data-online-size=xlarge][_ngcontent-webapp-c91]:after,
        .UserAvatar[data-online-status=true][data-online-size=xxlarge][_ngcontent-webapp-c91]:after {
            border-bottom-right-radius: 12px
        }

        @media (min-width: 768px) {
            .UserAvatar[data-online-status=true][data-online-size-tablet=small][_ngcontent-webapp-c91] {
                border-bottom-right-radius: 5px
            }

            .UserAvatar[data-online-status=true][data-online-size-tablet=small][_ngcontent-webapp-c91]:after {
                border-bottom-right-radius: 5px
            }

            .UserAvatar[data-online-status=true][data-online-size-tablet=mid][_ngcontent-webapp-c91] {
                border-bottom-right-radius: 6px
            }

            .UserAvatar[data-online-status=true][data-online-size-tablet=mid][_ngcontent-webapp-c91]:after {
                border-bottom-right-radius: 6px
            }

            .UserAvatar[data-online-status=true][data-online-size-tablet=large][_ngcontent-webapp-c91] {
                border-bottom-right-radius: 8px
            }

            .UserAvatar[data-online-status=true][data-online-size-tablet=large][_ngcontent-webapp-c91]:after {
                border-bottom-right-radius: 8px
            }

            .UserAvatar[data-online-status=true][data-online-size-tablet=xlarge][_ngcontent-webapp-c91],
            .UserAvatar[data-online-status=true][data-online-size-tablet=xxlarge][_ngcontent-webapp-c91] {
                border-bottom-right-radius: 12px
            }

            .UserAvatar[data-online-status=true][data-online-size-tablet=xlarge][_ngcontent-webapp-c91]:after,
            .UserAvatar[data-online-status=true][data-online-size-tablet=xxlarge][_ngcontent-webapp-c91]:after {
                border-bottom-right-radius: 12px
            }
        }

        @media (min-width: 960px) {
            .UserAvatar[data-online-status=true][data-online-size-desktop=small][_ngcontent-webapp-c91] {
                border-bottom-right-radius: 5px
            }

            .UserAvatar[data-online-status=true][data-online-size-desktop=small][_ngcontent-webapp-c91]:after {
                border-bottom-right-radius: 5px
            }

            .UserAvatar[data-online-status=true][data-online-size-desktop=mid][_ngcontent-webapp-c91] {
                border-bottom-right-radius: 6px
            }

            .UserAvatar[data-online-status=true][data-online-size-desktop=mid][_ngcontent-webapp-c91]:after {
                border-bottom-right-radius: 6px
            }

            .UserAvatar[data-online-status=true][data-online-size-desktop=large][_ngcontent-webapp-c91] {
                border-bottom-right-radius: 8px
            }

            .UserAvatar[data-online-status=true][data-online-size-desktop=large][_ngcontent-webapp-c91]:after {
                border-bottom-right-radius: 8px
            }

            .UserAvatar[data-online-status=true][data-online-size-desktop=xlarge][_ngcontent-webapp-c91],
            .UserAvatar[data-online-status=true][data-online-size-desktop=xxlarge][_ngcontent-webapp-c91] {
                border-bottom-right-radius: 12px
            }

            .UserAvatar[data-online-status=true][data-online-size-desktop=xlarge][_ngcontent-webapp-c91]:after,
            .UserAvatar[data-online-status=true][data-online-size-desktop=xxlarge][_ngcontent-webapp-c91]:after {
                border-bottom-right-radius: 12px
            }
        }

        .UserAvatar[_ngcontent-webapp-c91] .UserAvatarLetter[_ngcontent-webapp-c91] {
            align-items: center;
            border: 1px solid #fcfcfd;
            color: #589af0;
            display: flex;
            height: 100%;
            justify-content: center;
            width: 100%
        }

        .UserAvatar-img[_ngcontent-webapp-c91] {
            display: block;
            width: 100%
        }

        .UserAvatar-content[_ngcontent-webapp-c91] {
            overflow: hidden;
            align-items: center;
            background: #bcc5d3;
            border: 1px solid #fcfcfd;
            border-radius: 0;
            height: 100%;
            justify-content: center;
            width: 50%
        }

        @supports (overflow: clip) {
            .UserAvatar-content[_ngcontent-webapp-c91] {
                overflow: clip
            }

            @supports (-moz-appearance: none) {
                .UserAvatar-content[_ngcontent-webapp-c91] {
                    overflow: hidden
                }
            }
        }

        .UserAvatar-content--topLeft[_ngcontent-webapp-c91] {
            border-top-left-radius: 5px
        }

        .UserAvatar-content--topRight[_ngcontent-webapp-c91] {
            border-top-right-radius: 5px
        }

        .UserAvatar-content--bottomLeft[_ngcontent-webapp-c91] {
            border-bottom-left-radius: 5px
        }

        .UserAvatar-content--bottomRight[_ngcontent-webapp-c91] {
            border-bottom-right-radius: 5px
        }

        .UserAvatar-multi[_ngcontent-webapp-c91] {
            flex: 0 0 auto;
            height: 100%
        }

        .UserAvatar-multi-row[_ngcontent-webapp-c91] {
            display: flex;
            height: 50%
        }

        .UserAvatar-multi-row--secondary[_ngcontent-webapp-c91] {
            justify-content: center
        }

        .UserAvatar-multi-img[_ngcontent-webapp-c91],
        .UserAvatar-multi-letter[_ngcontent-webapp-c91] {
            display: block;
            height: 100%;
            width: 100%
        }

        .UserAvatar-multi-letter[_ngcontent-webapp-c91] {
            font-size: 14px;
            line-height: 1.43;
            align-items: center;
            color: #589af0;
            display: flex;
            font-weight: 700;
            justify-content: center
        }

        .UserAvatar-multi-letter[data-size=small][_ngcontent-webapp-c91] {
            font-size: 8px;
            line-height: 1.45
        }

        .UserAvatar-multi-letter[data-size=mid][_ngcontent-webapp-c91] {
            font-size: 11px;
            line-height: 1.45
        }

        .UserAvatar-multi-letter[data-size=xlarge][_ngcontent-webapp-c91] {
            font-size: 20px;
            line-height: 1.4
        }

        .UserAvatar-container[_ngcontent-webapp-c91] {
            height: 100%;
            width: 100%
        }

        .OnlineStatus[_ngcontent-webapp-c91] {
            border-radius: 50%;
            bottom: -5px;
            line-height: 0;
            position: absolute;
            right: -5px;
            z-index: 1
        }

        .UserAvatarVideo[_ngcontent-webapp-c91] {
            cursor: pointer;
            padding: 4px
        }

        .UserAvatarVideo[_ngcontent-webapp-c91]:before {
            inset: 0;
            position: absolute;
            animation: _ngcontent-webapp-c91_BidPitch-pulse 1s linear infinite;
            border-radius: 3px;
            content: ""
        }

        .UserAvatarVideo-img[_ngcontent-webapp-c91] {
            border: 6px solid #fff;
            z-index: 1
        }

        @keyframes _ngcontent-webapp-c91_BidPitch-pulse {
            0% {
                border: 3px solid #023815;
                transform: scale(.9)
            }

            to {
                border: 1px solid #9bfbbc;
                transform: scale(1)
            }
        }

        .UserAvatarVideo-playButton[_ngcontent-webapp-c91] {
            background-color: #023815;
            border-radius: 50%;
            left: 80%;
            padding: 6px;
            position: absolute;
            top: 80%;
            z-index: 3
        }

        .UserAvatarPreviewVideo[_ngcontent-webapp-c91] {
            display: none;
            padding: 7px;
            z-index: 2
        }

        .Loader[_ngcontent-webapp-c91] {
            display: flex;
            height: 100%;
            width: 100%
        }
    </style>
    <style>
        [_nghost-webapp-c158] {
            align-items: center;
            display: flex;
            flex-wrap: wrap
        }

        [data-compact=true][_nghost-webapp-c158] {
            display: block
        }

        @media (min-width: 768px) {
            [data-compact-tablet=false][_nghost-webapp-c158] {
                display: flex
            }

            [data-compact-tablet=true][_nghost-webapp-c158] {
                display: block
            }
        }

        .Username-badges[_ngcontent-webapp-c158] {
            align-self: center;
            display: inline-block;
            line-height: 0;
            padding-left: 8px;
            vertical-align: sub;
            white-space: nowrap
        }

        .Username-badge[_ngcontent-webapp-c158]:not(:last-child) {
            margin-right: 4px
        }

        .Username-row[_ngcontent-webapp-c158] {
            align-items: baseline;
            display: flex
        }

        .Username-row[data-truncate=true][_ngcontent-webapp-c158] {
            max-width: 100%
        }

        .Username-row[data-size-tablet=profile_summary][_ngcontent-webapp-c158],
        .Username-row[data-size-desktop=profile_summary][_ngcontent-webapp-c158] {
            align-self: end
        }

        .Username-flag[_ngcontent-webapp-c158] {
            align-self: center;
            line-height: 0;
            position: relative
        }

        .Username-flag[data-size=small][_ngcontent-webapp-c158] {
            top: 1px
        }

        .Username-flag[data-size=xxlarge][_ngcontent-webapp-c158] {
            top: -1px
        }

        @media (min-width: 768px) {
            .Username-flag[data-size-tablet=small][_ngcontent-webapp-c158] {
                top: 1px
            }

            .Username-flag[data-size-tablet=xxlarge][_ngcontent-webapp-c158] {
                top: -1px
            }
        }

        @media (min-width: 960px) {
            .Username-flag[data-size-desktop=small][_ngcontent-webapp-c158] {
                top: 1px
            }

            .Username-flag[data-size-desktop=xxlarge][_ngcontent-webapp-c158] {
                top: -1px
            }
        }

        .Username-displayName[data-truncate=true][_ngcontent-webapp-c158],
        .Username-userId[data-truncate=true][_ngcontent-webapp-c158] {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        @supports (overflow: clip) {

            .Username-displayName[data-truncate=true][_ngcontent-webapp-c158],
            .Username-userId[data-truncate=true][_ngcontent-webapp-c158] {
                overflow: clip
            }

            @supports (-moz-appearance: none) {

                .Username-displayName[data-truncate=true][_ngcontent-webapp-c158],
                .Username-userId[data-truncate=true][_ngcontent-webapp-c158] {
                    overflow: hidden
                }
            }
        }

        .Username-displayName[_ngcontent-webapp-c158] {
            display: inline-block;
            font-weight: 500
        }

        @media (min-width: 768px) {

            .Username-displayName[data-size-tablet=profile_summary][_ngcontent-webapp-c158],
            .Username-displayName[data-size-desktop=profile_summary][_ngcontent-webapp-c158] {
                font-weight: 700
            }
        }

        .Username-userId[_ngcontent-webapp-c158] {
            font-weight: 400
        }

        .Username-userId[data-size=xlarge][_ngcontent-webapp-c158],
        .Username-userId[data-size=xxlarge][_ngcontent-webapp-c158] {
            font-weight: 300
        }

        .Username-userId[data-compact=true][_ngcontent-webapp-c158] {
            display: inline-block
        }

        @media (min-width: 768px) {

            .Username-userId[data-size-tablet=xlarge][_ngcontent-webapp-c158],
            .Username-userId[data-size-tablet=xxlarge][_ngcontent-webapp-c158] {
                font-weight: 300
            }

            .Username-userId[data-compact-tablet=false][_ngcontent-webapp-c158] {
                display: block
            }

            .Username-userId[data-compact-tablet=true][_ngcontent-webapp-c158] {
                display: inline-block
            }

            .Username-userId[data-size-tablet=profile_summary][_ngcontent-webapp-c158],
            .Username-userId[data-size-desktop=profile_summary][_ngcontent-webapp-c158] {
                font-weight: 400
            }
        }

        @media (min-width: 960px) {

            .Username-userId[data-size-desktop=xlarge][_ngcontent-webapp-c158],
            .Username-userId[data-size-desktop=xxlarge][_ngcontent-webapp-c158] {
                font-weight: 300
            }

            .Username-userId[data-size-tablet=profile_summary][_ngcontent-webapp-c158],
            .Username-userId[data-size-desktop=profile_summary][_ngcontent-webapp-c158] {
                font-weight: 400
            }
        }
    </style>
    <style>
        [_nghost-webapp-c75] {
            display: inline-block;
            vertical-align: middle
        }

        .FlagImage[_ngcontent-webapp-c75] {
            box-shadow: 0 0 1px #bcc5d3;
            display: block
        }

        .FlagImage[data-size=small][_ngcontent-webapp-c75] {
            height: 12px;
            width: 16px
        }

        .FlagImage[data-size=mid][_ngcontent-webapp-c75] {
            height: 16px;
            width: 21px
        }

        @media (min-width: 768px) {
            .FlagImage[data-size-tablet=small][_ngcontent-webapp-c75] {
                height: 12px;
                width: 16px
            }

            .FlagImage[data-size-tablet=mid][_ngcontent-webapp-c75] {
                height: 16px;
                width: 21px
            }
        }

        @media (min-width: 960px) {
            .FlagImage[data-size-desktop=small][_ngcontent-webapp-c75] {
                height: 12px;
                width: 16px
            }

            .FlagImage[data-size-desktop=mid][_ngcontent-webapp-c75] {
                height: 16px;
                width: 21px
            }
        }
    </style>
    <style>
        [_nghost-webapp-c170] {
            display: flex;
            flex-direction: column
        }

        [data-read-only=true][_nghost-webapp-c170] .LayerGroup[_ngcontent-webapp-c170],
        [data-compact=true][_nghost-webapp-c170] .LayerGroup[_ngcontent-webapp-c170],
        [data-compact-mobile=true][_nghost-webapp-c170] .LayerGroup[_ngcontent-webapp-c170] {
            cursor: default
        }

        [data-icon-color=mid][_nghost-webapp-c170] .LayerGroup[_ngcontent-webapp-c170] {
            background: #fcfcfd
        }

        [data-display-inline=true][_nghost-webapp-c170] {
            display: inline-flex;
            vertical-align: bottom
        }

        @media (min-width: 768px) {
            [data-compact-mobile=true][_nghost-webapp-c170]:not([data-read-only=true]) .LayerGroup[_ngcontent-webapp-c170] {
                cursor: pointer
            }
        }

        @media (min-width: 960px) {
            [data-compact-tablet=true][_nghost-webapp-c170]:not([data-read-only=true]) .LayerGroup[_ngcontent-webapp-c170] {
                cursor: pointer
            }
        }

        [data-size=xsmall][_ngcontent-webapp-c170] {
            height: 12px;
            width: 6px
        }

        [data-size=xsmall].CompactIcon[_ngcontent-webapp-c170],
        [data-size=xsmall].Ticks[_ngcontent-webapp-c170] {
            width: 12px
        }

        [data-size=small][_ngcontent-webapp-c170] {
            height: 16px;
            width: 8px
        }

        [data-size=small].CompactIcon[_ngcontent-webapp-c170],
        [data-size=small].Ticks[_ngcontent-webapp-c170] {
            width: 16px
        }

        [data-size=mid][_ngcontent-webapp-c170] {
            height: 24px;
            width: 12px
        }

        [data-size=mid].CompactIcon[_ngcontent-webapp-c170],
        [data-size=mid].Ticks[_ngcontent-webapp-c170] {
            width: 24px
        }

        [data-size=large][_ngcontent-webapp-c170] {
            height: 32px;
            width: 16px
        }

        [data-size=large].CompactIcon[_ngcontent-webapp-c170],
        [data-size=large].Ticks[_ngcontent-webapp-c170] {
            width: 32px
        }

        [data-size=xlarge][_ngcontent-webapp-c170] {
            height: 48px;
            width: 24px
        }

        [data-size=xlarge].CompactIcon[_ngcontent-webapp-c170],
        [data-size=xlarge].Ticks[_ngcontent-webapp-c170] {
            width: 48px
        }

        [data-size=xxlarge][_ngcontent-webapp-c170] {
            height: 64px;
            width: 32px
        }

        [data-size=xxlarge].CompactIcon[_ngcontent-webapp-c170],
        [data-size=xxlarge].Ticks[_ngcontent-webapp-c170] {
            width: 64px
        }

        @media (min-width: 768px) {
            [data-size-tablet=xsmall][_ngcontent-webapp-c170] {
                height: 12px;
                width: 6px
            }

            [data-size-tablet=xsmall].CompactIcon[_ngcontent-webapp-c170],
            [data-size-tablet=xsmall].Ticks[_ngcontent-webapp-c170] {
                width: 12px
            }

            [data-size-tablet=small][_ngcontent-webapp-c170] {
                height: 16px;
                width: 8px
            }

            [data-size-tablet=small].CompactIcon[_ngcontent-webapp-c170],
            [data-size-tablet=small].Ticks[_ngcontent-webapp-c170] {
                width: 16px
            }

            [data-size-tablet=mid][_ngcontent-webapp-c170] {
                height: 24px;
                width: 12px
            }

            [data-size-tablet=mid].CompactIcon[_ngcontent-webapp-c170],
            [data-size-tablet=mid].Ticks[_ngcontent-webapp-c170] {
                width: 24px
            }

            [data-size-tablet=large][_ngcontent-webapp-c170] {
                height: 32px;
                width: 16px
            }

            [data-size-tablet=large].CompactIcon[_ngcontent-webapp-c170],
            [data-size-tablet=large].Ticks[_ngcontent-webapp-c170] {
                width: 32px
            }

            [data-size-tablet=xlarge][_ngcontent-webapp-c170] {
                height: 48px;
                width: 24px
            }

            [data-size-tablet=xlarge].CompactIcon[_ngcontent-webapp-c170],
            [data-size-tablet=xlarge].Ticks[_ngcontent-webapp-c170] {
                width: 48px
            }

            [data-size-tablet=xxlarge][_ngcontent-webapp-c170] {
                height: 64px;
                width: 32px
            }

            [data-size-tablet=xxlarge].CompactIcon[_ngcontent-webapp-c170],
            [data-size-tablet=xxlarge].Ticks[_ngcontent-webapp-c170] {
                width: 64px
            }
        }

        @media (min-width: 960px) {
            [data-size-desktop=xsmall][_ngcontent-webapp-c170] {
                height: 12px;
                width: 6px
            }

            [data-size-desktop=xsmall].CompactIcon[_ngcontent-webapp-c170],
            [data-size-desktop=xsmall].Ticks[_ngcontent-webapp-c170] {
                width: 12px
            }

            [data-size-desktop=small][_ngcontent-webapp-c170] {
                height: 16px;
                width: 8px
            }

            [data-size-desktop=small].CompactIcon[_ngcontent-webapp-c170],
            [data-size-desktop=small].Ticks[_ngcontent-webapp-c170] {
                width: 16px
            }

            [data-size-desktop=mid][_ngcontent-webapp-c170] {
                height: 24px;
                width: 12px
            }

            [data-size-desktop=mid].CompactIcon[_ngcontent-webapp-c170],
            [data-size-desktop=mid].Ticks[_ngcontent-webapp-c170] {
                width: 24px
            }

            [data-size-desktop=large][_ngcontent-webapp-c170] {
                height: 32px;
                width: 16px
            }

            [data-size-desktop=large].CompactIcon[_ngcontent-webapp-c170],
            [data-size-desktop=large].Ticks[_ngcontent-webapp-c170] {
                width: 32px
            }

            [data-size-desktop=xlarge][_ngcontent-webapp-c170] {
                height: 48px;
                width: 24px
            }

            [data-size-desktop=xlarge].CompactIcon[_ngcontent-webapp-c170],
            [data-size-desktop=xlarge].Ticks[_ngcontent-webapp-c170] {
                width: 48px
            }

            [data-size-desktop=xxlarge][_ngcontent-webapp-c170] {
                height: 64px;
                width: 32px
            }

            [data-size-desktop=xxlarge].CompactIcon[_ngcontent-webapp-c170],
            [data-size-desktop=xxlarge].Ticks[_ngcontent-webapp-c170] {
                width: 64px
            }
        }

        .RatingContainer[_ngcontent-webapp-c170] {
            align-items: center;
            display: flex;
            line-height: 0;
            min-height: 20px
        }

        .LayerGroup[_ngcontent-webapp-c170] {
            background-color: transparent;
            cursor: pointer;
            display: inline-flex;
            position: relative
        }

        .LayerGroup[data-background-color=light][_ngcontent-webapp-c170] {
            background-color: #fcfcfd
        }

        .LayerGroup[data-background-color=mid][_ngcontent-webapp-c170] {
            background-color: #bcc5d3
        }

        .LayerGroup[data-background-color=dark][_ngcontent-webapp-c170] {
            background-color: #12151b
        }

        .LayerGroup[data-background-color=white][_ngcontent-webapp-c170] {
            background-color: var(--color-bg-light)
        }

        .LayerGroup[data-background-color=inherit][_ngcontent-webapp-c170] {
            background-color: currentColor
        }

        .IconLayer[_ngcontent-webapp-c170] {
            display: inline-flex
        }

        .IconContainer[_ngcontent-webapp-c170] {
            display: inline-flex;
            fill: #bcc5d3;
            margin: -1px
        }

        .IconContainer[_ngcontent-webapp-c170] .StarIcon[_ngcontent-webapp-c170]:focus {
            outline: none
        }

        .IconContainer[_ngcontent-webapp-c170] .Ticks[_ngcontent-webapp-c170],
        .IconContainer[_ngcontent-webapp-c170] .CompactIcon[_ngcontent-webapp-c170] {
            color: #bcc5d3
        }

        .IconContainer[data-type=stars][_ngcontent-webapp-c170] .IsInteractable[_ngcontent-webapp-c170] {
            fill: #ffdaed
        }

        .IconContainer[data-type=stars][_ngcontent-webapp-c170] .IsActive[_ngcontent-webapp-c170] {
            color: #e60278;
            fill: #e60278
        }

        .IconContainer[data-type=stars][_ngcontent-webapp-c170] .IsHover[_ngcontent-webapp-c170] {
            fill: #e60278
        }

        .IconContainer[data-type=ticks][data-ticks-color=primary][_ngcontent-webapp-c170] .IsHover[_ngcontent-webapp-c170] {
            color: #acccf8
        }

        .IconContainer[data-type=ticks][data-ticks-color=primary][_ngcontent-webapp-c170] .IsActive[_ngcontent-webapp-c170] {
            color: #589af0
        }

        .IconContainer[data-type=ticks][data-ticks-color=success][_ngcontent-webapp-c170] .IsHover[_ngcontent-webapp-c170] {
            color: #9bfbbc
        }

        .IconContainer[data-type=ticks][data-ticks-color=success][_ngcontent-webapp-c170] .IsActive[_ngcontent-webapp-c170] {
            color: #07bc44
        }

        .IconSpacer[_ngcontent-webapp-c170] {
            margin-right: 1px
        }

        .ValueBlock[_ngcontent-webapp-c170],
        .ReviewCount[_ngcontent-webapp-c170] {
            align-items: center;
            color: #12151b;
            display: flex;
            justify-content: center;
            white-space: nowrap
        }

        .ValueBlock[data-icon-size=xsmall][_ngcontent-webapp-c170],
        .ReviewCount[data-icon-size=xsmall][_ngcontent-webapp-c170] {
            font-size: 11px;
            height: 13px;
            line-height: 1
        }

        .ValueBlock[data-icon-size=small][_ngcontent-webapp-c170],
        .ReviewCount[data-icon-size=small][_ngcontent-webapp-c170] {
            font-size: 14px;
            height: 15px;
            line-height: 1
        }

        .ValueBlock[data-icon-size=mid][_ngcontent-webapp-c170],
        .ValueBlock[data-icon-size=large][_ngcontent-webapp-c170],
        .ReviewCount[data-icon-size=mid][_ngcontent-webapp-c170],
        .ReviewCount[data-icon-size=large][_ngcontent-webapp-c170] {
            font-size: 16px;
            height: 24px;
            line-height: 1.7
        }

        .ValueBlock[data-icon-size=xlarge][_ngcontent-webapp-c170],
        .ReviewCount[data-icon-size=xlarge][_ngcontent-webapp-c170] {
            font-size: 18px;
            height: 18px;
            line-height: 1
        }

        .ValueBlock[data-icon-size=xxlarge][_ngcontent-webapp-c170],
        .ReviewCount[data-icon-size=xxlarge][_ngcontent-webapp-c170] {
            font-size: 24px;
            height: 24px;
            line-height: 1
        }

        @media (min-width: 768px) {

            .ValueBlock[data-icon-size-tablet=xsmall][_ngcontent-webapp-c170],
            .ReviewCount[data-icon-size-tablet=xsmall][_ngcontent-webapp-c170] {
                font-size: 11px;
                height: 13px;
                line-height: 1
            }

            .ValueBlock[data-icon-size-tablet=small][_ngcontent-webapp-c170],
            .ReviewCount[data-icon-size-tablet=small][_ngcontent-webapp-c170] {
                font-size: 14px;
                height: 15px;
                line-height: 1
            }

            .ValueBlock[data-icon-size-tablet=mid][_ngcontent-webapp-c170],
            .ValueBlock[data-icon-size-tablet=large][_ngcontent-webapp-c170],
            .ReviewCount[data-icon-size-tablet=mid][_ngcontent-webapp-c170],
            .ReviewCount[data-icon-size-tablet=large][_ngcontent-webapp-c170] {
                font-size: 16px;
                height: 24px;
                line-height: 1.7
            }

            .ValueBlock[data-icon-size-tablet=xlarge][_ngcontent-webapp-c170],
            .ReviewCount[data-icon-size-tablet=xlarge][_ngcontent-webapp-c170] {
                font-size: 18px;
                height: 18px;
                line-height: 1
            }

            .ValueBlock[data-icon-size-tablet=xxlarge][_ngcontent-webapp-c170],
            .ReviewCount[data-icon-size-tablet=xxlarge][_ngcontent-webapp-c170] {
                font-size: 24px;
                height: 24px;
                line-height: 1
            }
        }

        @media (min-width: 960px) {

            .ValueBlock[data-icon-size-desktop=xsmall][_ngcontent-webapp-c170],
            .ReviewCount[data-icon-size-desktop=xsmall][_ngcontent-webapp-c170] {
                font-size: 11px;
                height: 13px;
                line-height: 1
            }

            .ValueBlock[data-icon-size-desktop=small][_ngcontent-webapp-c170],
            .ReviewCount[data-icon-size-desktop=small][_ngcontent-webapp-c170] {
                font-size: 14px;
                height: 15px;
                line-height: 1
            }

            .ValueBlock[data-icon-size-desktop=mid][_ngcontent-webapp-c170],
            .ValueBlock[data-icon-size-desktop=large][_ngcontent-webapp-c170],
            .ReviewCount[data-icon-size-desktop=mid][_ngcontent-webapp-c170],
            .ReviewCount[data-icon-size-desktop=large][_ngcontent-webapp-c170] {
                font-size: 16px;
                height: 24px;
                line-height: 1.7
            }

            .ValueBlock[data-icon-size-desktop=xlarge][_ngcontent-webapp-c170],
            .ReviewCount[data-icon-size-desktop=xlarge][_ngcontent-webapp-c170] {
                font-size: 18px;
                height: 18px;
                line-height: 1
            }

            .ValueBlock[data-icon-size-desktop=xxlarge][_ngcontent-webapp-c170],
            .ReviewCount[data-icon-size-desktop=xxlarge][_ngcontent-webapp-c170] {
                font-size: 24px;
                height: 24px;
                line-height: 1
            }
        }
    </style>
    <style>
        [_nghost-webapp-c431] {
            display: block
        }

        .EarningsContainer[_ngcontent-webapp-c431] {
            align-items: center;
            display: flex;
            font-size: 14px;
            line-height: 1.24
        }

        .DollarIcon[_ngcontent-webapp-c431] {
            color: #058430;
            margin-right: 4px
        }

        .DollarIcon[data-flip-value=true][_ngcontent-webapp-c431] {
            margin-left: 4px
        }

        .ValueBlock[_ngcontent-webapp-c431] {
            border-radius: 5px;
            color: #058430;
            width: 2px
        }

        .ValueBlock[data-size=small][_ngcontent-webapp-c431] {
            height: 10px;
            margin-right: 3px
        }

        .ValueBlock[data-size=mid][_ngcontent-webapp-c431] {
            height: 13px;
            margin-right: 4px
        }

        .ValueBlock[data-size=large][_ngcontent-webapp-c431] {
            height: 16px;
            margin-right: 4px
        }

        @media (min-width: 768px) {
            .ValueBlock[data-size-tablet=small][_ngcontent-webapp-c431] {
                height: 10px;
                margin-right: 3px
            }

            .ValueBlock[data-size-tablet=mid][_ngcontent-webapp-c431] {
                height: 13px;
                margin-right: 4px
            }

            .ValueBlock[data-size-tablet=large][_ngcontent-webapp-c431] {
                height: 16px;
                margin-right: 4px
            }
        }

        @media (min-width: 960px) {
            .ValueBlock[data-size-desktop=small][_ngcontent-webapp-c431] {
                height: 10px;
                margin-right: 3px
            }

            .ValueBlock[data-size-desktop=mid][_ngcontent-webapp-c431] {
                height: 13px;
                margin-right: 4px
            }

            .ValueBlock[data-size-desktop=large][_ngcontent-webapp-c431] {
                height: 16px;
                margin-right: 4px
            }
        }

        .EarningsText[_ngcontent-webapp-c431] {
            line-height: 0
        }

        .EarningsText[data-size=mid][_ngcontent-webapp-c431],
        .EarningsText[data-size-tablet=mid][_ngcontent-webapp-c431],
        .EarningsText[data-size-desktop=mid][_ngcontent-webapp-c431],
        .EarningsText[data-size=large][_ngcontent-webapp-c431],
        .EarningsText[data-size-tablet=large][_ngcontent-webapp-c431],
        .EarningsText[data-size-desktop=large][_ngcontent-webapp-c431] {
            padding-top: 2px
        }

        .RightEarningsText[_ngcontent-webapp-c431] {
            padding-left: 2px
        }
    </style>
    <style>
        [_nghost-webapp-c65] {
            display: block
        }
    </style>
    <style>
        [_nghost-webapp-c89] {
            background: var(--color-bg-light);
            display: inline-block;
            height: 100%;
            width: 100%
        }

        .Padded[_nghost-webapp-c89] {
            padding: 16px
        }

        .LoadingBarRightMask[_ngcontent-webapp-c89] {
            height: 16px
        }

        .LoadingBarRowMask[_ngcontent-webapp-c89]:not(:last-child) {
            background: var(--color-bg-light);
            height: 12px;
            width: 100%
        }

        .BackgroundShimmer[_ngcontent-webapp-c89] {
            overflow: hidden;
            align-items: flex-end;
            animation: _ngcontent-webapp-c89_shimmer 1s infinite linear;
            background: linear-gradient(90deg, var(--color-bg-loading-secondary) 20%, var(--color-bg-loading-primary) 40%, var(--color-bg-loading-secondary) 60%);
            background-size: 200% 200%;
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 100%
        }

        @supports (overflow: clip) {
            .BackgroundShimmer[_ngcontent-webapp-c89] {
                overflow: clip
            }

            @supports (-moz-appearance: none) {
                .BackgroundShimmer[_ngcontent-webapp-c89] {
                    overflow: hidden
                }
            }
        }

        @keyframes _ngcontent-webapp-c89_shimmer {
            0% {
                background-position: 100% 50%
            }

            to {
                background-position: -100% 50%
            }
        }
    </style>
    <style>
        [_nghost-webapp-c586] {
            display: block
        }

        .IconContainer[_ngcontent-webapp-c586] {
            align-items: center;
            display: flex;
            height: 24px;
            justify-content: center;
            width: 24px
        }

        .FlexContainer[_ngcontent-webapp-c586] {
            align-items: center;
            display: flex
        }

        .ClientVerification[_ngcontent-webapp-c586] {
            display: flex;
            justify-content: space-around
        }
    </style>
    <style>
        [_nghost-webapp-c171] {
            align-items: center;
            display: flex
        }

        .ReviewIcon[_ngcontent-webapp-c171] {
            color: #f57207
        }
    </style>
    <style>
        [_nghost-webapp-c587] {
            display: block
        }

        .Link[_ngcontent-webapp-c587] {
            word-break: break-word;
            word-wrap: break-word;
            color: #12151b
        }
    </style>
    <style>
        .GiveGetFooter-container[_ngcontent-webapp-c92] {
            border-radius: 3px;
            position: relative;
            bottom: 10px;
            box-shadow: 0 0 8px #12151b29, 0 10px 18px #12151b33;
            left: 10px;
            opacity: 0;
            position: fixed;
            right: 10px;
            z-index: 1030
        }

        .GiveGetFooter-container[_ngcontent-webapp-c92]:after {
            animation: _ngcontent-webapp-c92_animated-gradient 10s ease alternate infinite;
            background: linear-gradient(60deg, #f20091, #139ff0, #082e60);
            background-size: 300% 300%;
            border-radius: 6px;
            content: "";
            height: calc(100% + 6px);
            left: -3px;
            position: absolute;
            top: -3px;
            width: calc(100% + 6px);
            z-index: -1
        }

        @keyframes _ngcontent-webapp-c92_animated-gradient {
            0% {
                background-position: 0% 50%
            }

            50% {
                background-position: 100% 50%
            }

            to {
                background-position: 0% 50%
            }
        }

        @media (min-width: 768px) {
            .GiveGetFooter-container[_ngcontent-webapp-c92] {
                bottom: 20px;
                left: auto;
                right: 20px
            }
        }

        @media (min-width: 960px) {
            .GiveGetFooter-container[_ngcontent-webapp-c92] {
                bottom: 30px;
                right: 30px
            }
        }

        .GiveGetFooter-body[_ngcontent-webapp-c92] {
            min-height: 140px;
            min-width: 100%;
            padding: 12px
        }

        @media (max-width: 767px) {
            .GiveGetFooter-body[_ngcontent-webapp-c92] {
                padding-left: calc(env(safe-area-inset-left) + 16px);
                padding-right: calc(env(safe-area-inset-left) + 16px)
            }
        }

        @media (min-width: 768px) {
            .GiveGetFooter-body[_ngcontent-webapp-c92] {
                min-height: 160px;
                min-width: 450px;
                padding: 16px
            }
        }

        .GiveGetFooter-darkBackground[_ngcontent-webapp-c92] {
            background-color: #12151b
        }

        .GiveGetFooter-titleContainer[_ngcontent-webapp-c92] {
            align-items: center;
            display: flex
        }

        .GiveGetFooter-cta-container[_ngcontent-webapp-c92] {
            align-items: center;
            display: flex;
            flex-direction: column
        }

        @media (min-width: 768px) {
            .GiveGetFooter-cta-container[_ngcontent-webapp-c92] {
                flex-direction: row
            }
        }

        .GiveGetFooter-cta-fullWidth[_ngcontent-webapp-c92] {
            width: 100%
        }

        @media (min-width: 768px) {
            .GiveGetFooter-cta-fullWidth[_ngcontent-webapp-c92] {
                width: auto
            }
        }

        .GiveGetFooter-closeIcon[_ngcontent-webapp-c92] {
            cursor: pointer;
            position: absolute;
            right: 8px;
            top: 8px
        }

        .GiveGetFooter-loadingState[_ngcontent-webapp-c92] {
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%)
        }

        .GiveGetFooter-slideIn[_ngcontent-webapp-c92] {
            animation: _ngcontent-webapp-c92_slideIn .2s forwards ease-in;
            animation-delay: .3s
        }

        @keyframes _ngcontent-webapp-c92_slideIn {
            0% {
                opacity: 0;
                transform: translate(10%)
            }

            to {
                opacity: 1;
                transform: translate(0)
            }
        }
    </style>
    <style>
        [_nghost-webapp-c80] {
            font-size: 14px;
            line-height: 1.43;
            background: #12151b;
            color: #fcfcfd;
            display: block;
            padding-bottom: env(safe-area-inset-bottom);
            position: relative
        }

        .CargoCategories[_ngcontent-webapp-c80] {
            display: flex;
            flex-wrap: wrap
        }

        .CargoCategories-item[_ngcontent-webapp-c80] {
            width: 50%
        }

        .ContactInfoRow[_ngcontent-webapp-c80] {
            align-items: center;
            display: flex
        }

        .FooterSection[_ngcontent-webapp-c80] {
            font-size: 14px;
            line-height: 1.43;
            border-top: 1px solid var(--color-navigation-border);
            padding: 32px 0
        }

        @media (min-width: 960px) {
            .FooterSection[_ngcontent-webapp-c80]:last-child {
                padding-bottom: 48px
            }
        }

        @media (min-width: 1440px) {
            .FooterSection[_ngcontent-webapp-c80]:last-child {
                padding-bottom: 32px
            }
        }

        .FooterInfo[_ngcontent-webapp-c80] {
            align-items: center;
            border-bottom: 1px solid #232a35;
            display: flex;
            padding-bottom: 16px
        }

        @media (min-width: 768px) {
            .FooterInfo[_ngcontent-webapp-c80] {
                border-bottom: 0;
                padding-bottom: 0
            }
        }

        .FooterNav[_ngcontent-webapp-c80] {
            font-size: 14px;
            line-height: 1.43;
            border-bottom: 1px solid #232a35;
            display: flex;
            flex-direction: column;
            padding-bottom: 16px
        }

        .FooterNav-item[_ngcontent-webapp-c80]:not(:last-child) {
            margin-bottom: 4px
        }

        @media (min-width: 768px) {
            .FooterNav[_ngcontent-webapp-c80] {
                border: 0;
                padding-bottom: 0
            }
        }

        .FooterTitle[_ngcontent-webapp-c80] {
            display: block
        }

        .FooterAppStoreIcons[_ngcontent-webapp-c80] {
            display: flex;
            max-width: 480px
        }

        @media (min-width: 768px) {
            .FooterAppStoreIcons[_ngcontent-webapp-c80] {
                display: block;
                max-width: 136px
            }
        }

        .FooterSocialIcons[_ngcontent-webapp-c80] {
            max-width: 480px
        }

        @media (min-width: 768px) {
            .FooterSocialIcons[_ngcontent-webapp-c80] {
                max-width: 160px
            }
        }

        .FooterMobileLink[_ngcontent-webapp-c80] {
            display: block;
            flex: 1 1 50%
        }

        .FooterStats[_ngcontent-webapp-c80],
        .FooterStatsCopy[_ngcontent-webapp-c80] {
            display: none
        }

        @media (min-width: 768px) {

            .FooterStats[_ngcontent-webapp-c80],
            .FooterStatsCopy[_ngcontent-webapp-c80] {
                display: block
            }
        }

        .FooterCopy[_ngcontent-webapp-c80] {
            font-size: 11px;
            line-height: 1.45
        }

        .FooterBordered[_ngcontent-webapp-c80] {
            border-top: 1px solid #232a35;
            padding-top: 24px
        }

        @media (min-width: 768px) {
            .FreightlancerSocialIcons[_ngcontent-webapp-c80] {
                display: flex;
                justify-content: flex-end
            }
        }
    </style>
    <style>
        [_nghost-webapp-c79] {
            display: block
        }
    </style>
    <style>
        [_nghost-webapp-c72] {
            display: inline-flex;
            flex-wrap: wrap
        }

        [data-fluid=true][_nghost-webapp-c72] {
            display: flex;
            justify-content: space-between
        }

        [data-type=button][_nghost-webapp-c72] {
            margin-bottom: -2px;
            margin-top: -2px
        }

        [data-type=button][_nghost-webapp-c72] .SocialButtonItem[_ngcontent-webapp-c72] {
            padding-bottom: 2px;
            padding-top: 2px
        }

        .SocialButton[_ngcontent-webapp-c72] {
            cursor: pointer
        }

        .SocialButton[data-theme=light][_ngcontent-webapp-c72] {
            color: #fcfcfd
        }

        .SocialButton[data-theme=dark][_ngcontent-webapp-c72] {
            color: #12151b
        }

        .SocialButton[data-theme=colored].SocialButton--facebook[_ngcontent-webapp-c72],
        .SocialButton[data-type=icon][_ngcontent-webapp-c72]:hover.SocialButton--facebook {
            color: #1877f2
        }

        .SocialButton[data-theme=colored].SocialButton--twitter[_ngcontent-webapp-c72],
        .SocialButton[data-type=icon][_ngcontent-webapp-c72]:hover.SocialButton--twitter {
            color: #00b6f1
        }

        .SocialButton[data-theme=colored].SocialButton--google[_ngcontent-webapp-c72],
        .SocialButton[data-type=icon][_ngcontent-webapp-c72]:hover.SocialButton--google {
            color: #df4a32
        }

        .SocialButton[data-theme=colored].SocialButton--youtube[_ngcontent-webapp-c72],
        .SocialButton[data-type=icon][_ngcontent-webapp-c72]:hover.SocialButton--youtube {
            color: red
        }

        .SocialButton[data-theme=colored].SocialButton--instagram[_ngcontent-webapp-c72],
        .SocialButton[data-type=icon][_ngcontent-webapp-c72]:hover.SocialButton--instagram {
            color: #c32aa3
        }

        .SocialButton[data-theme=colored].SocialButton--linkedin[_ngcontent-webapp-c72],
        .SocialButton[data-type=icon][_ngcontent-webapp-c72]:hover.SocialButton--linkedin {
            color: #0a66c2
        }

        .SocialButton[data-theme=colored].SocialButton--pinterest[_ngcontent-webapp-c72],
        .SocialButton[data-type=icon][_ngcontent-webapp-c72]:hover.SocialButton--pinterest {
            color: #e60019
        }

        .SocialButton[data-theme=colored].SocialButton--copyLink[_ngcontent-webapp-c72],
        .SocialButton[data-type=icon][_ngcontent-webapp-c72]:hover.SocialButton--copyLink {
            color: #1772eb
        }

        .SocialButton[data-type=button][_ngcontent-webapp-c72] {
            padding: 4px 16px
        }

        .SocialButton[data-type=button][data-theme=colored][_ngcontent-webapp-c72] {
            border-color: #5c6f8c
        }

        .SocialButton[data-type=button][_ngcontent-webapp-c72]:hover {
            color: #fcfcfd
        }

        .SocialButton[data-type=button][_ngcontent-webapp-c72]:hover.SocialButton--facebook {
            background-color: #1877f2;
            border-color: #1877f2
        }

        .SocialButton[data-type=button][_ngcontent-webapp-c72]:hover.SocialButton--twitter {
            background-color: #00b6f1;
            border-color: #00b6f1
        }

        .SocialButton[data-type=button][_ngcontent-webapp-c72]:hover.SocialButton--google {
            background-color: #df4a32;
            border-color: #df4a32
        }

        .SocialButton[data-type=button][_ngcontent-webapp-c72]:hover.SocialButton--youtube {
            background-color: red;
            border-color: red
        }

        .SocialButton[data-type=button][_ngcontent-webapp-c72]:hover.SocialButton--instagram {
            background-color: #c32aa3;
            border-color: #c32aa3
        }

        .SocialButton[data-type=button][_ngcontent-webapp-c72]:hover.SocialButton--linkedin {
            background-color: #0a66c2;
            border-color: #0a66c2
        }

        .SocialButton[data-type=button][_ngcontent-webapp-c72]:hover.SocialButton--pinterest {
            background-color: #e60019;
            border-color: #e60019
        }

        .SocialButton[data-type=button][_ngcontent-webapp-c72]:hover.SocialButton--copyLink {
            background-color: #1772eb;
            border-color: #1772eb
        }

        .ClipboardError[_ngcontent-webapp-c72] {
            flex: 1 1 100%
        }
    </style>
    <style>
        [_nghost-webapp-c73] {
            align-items: center;
            display: flex
        }
    </style>
    <style>
        .Container[_ngcontent-webapp-c116] {
            display: flex;
            flex-direction: row;
            padding: 16px 0;
            position: relative
        }

        .Container-innerContainer[_ngcontent-webapp-c116] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            left: 0;
            min-height: 48px;
            position: absolute;
            transition: transform .3s ease-out
        }

        @media (min-width: 768px) {
            .Container-innerContainer[_ngcontent-webapp-c116] {
                min-height: 48px;
                position: relative;
                width: auto
            }
        }

        @media (min-width: 768px) {
            .Container-border[_ngcontent-webapp-c116] {
                border-left: 1px solid #bcc5d3
            }
        }

        .ChildNodesContainer[_ngcontent-webapp-c116] {
            display: none
        }

        .ChildNodesContainer--visible[_ngcontent-webapp-c116] {
            display: flex;
            flex-direction: column
        }

        .Item[_ngcontent-webapp-c116] {
            align-items: center;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            opacity: 1;
            padding: 0 16px
        }

        .Item--active[_ngcontent-webapp-c116] {
            color: #589af0
        }

        .Item--cursor[_ngcontent-webapp-c116] {
            cursor: pointer
        }

        .Item-previousIndicator[_ngcontent-webapp-c116] {
            position: absolute;
            transform: translate(-16px)
        }

        .Item-link[_ngcontent-webapp-c116] {
            font-size: 15px;
            line-height: 1.4;
            margin-right: 24px
        }

        .Item-link[_ngcontent-webapp-c116]:hover {
            color: #589af0
        }

        .MobilePrevColumn[_ngcontent-webapp-c116] {
            transform: translate(-100vh)
        }

        @media (min-width: 768px) {
            .MobilePrevColumn[_ngcontent-webapp-c116] {
                transform: translate(0);
                width: auto
            }
        }

        .MobileNextColumn[_ngcontent-webapp-c116] {
            transform: translate(100vh);
            width: 0
        }

        @media (min-width: 768px) {
            .MobileNextColumn[_ngcontent-webapp-c116] {
                transform: translate(0);
                width: auto
            }
        }

        .MobileCurrColumn[_ngcontent-webapp-c116] {
            transform: translate(0);
            width: 100%
        }

        @media (min-width: 768px) {
            .MobileCurrColumn[_ngcontent-webapp-c116] {
                width: auto
            }
        }
    </style>
    <style>
        .ContentContainer[_ngcontent-webapp-c96] {
            width: 100%
        }

        @media (prefers-reduced-motion: no-preference) {
            .ContentContainer[_ngcontent-webapp-c96] {
                animation: .1s ease-out growOut
            }

            @keyframes growOut {
                0% {
                    transform: scale(.95)
                }

                to {
                    transform: scale(1)
                }
            }
        }

        .ContentContainer[data-placement=start][_ngcontent-webapp-c96] {
            transform-origin: right
        }

        .ContentContainer[data-placement=end][_ngcontent-webapp-c96] {
            transform-origin: left
        }

        .ContentContainer[data-placement=top][_ngcontent-webapp-c96] {
            transform-origin: bottom
        }

        .ContentContainer[data-placement=bottom][_ngcontent-webapp-c96] {
            transform-origin: top
        }

        .ContentContainer[data-placement=bottom-left][_ngcontent-webapp-c96] {
            transform-origin: top left
        }

        .ContentContainer[data-placement=bottom-right][_ngcontent-webapp-c96] {
            transform-origin: top right
        }

        .ContentContainer[data-placement=end-bottom][_ngcontent-webapp-c96] {
            transform-origin: bottom right
        }

        .ContentContainer[data-placement=end-top][_ngcontent-webapp-c96] {
            transform-origin: top right
        }
    </style>
    <style>
        [_nghost-webapp-c95] {
            display: inline-block
        }

        @media (max-width: 767px) {
            [data-mobile-force-click=true][_nghost-webapp-c95] {
                position: relative
            }

            [data-mobile-force-click=true][_nghost-webapp-c95]:after {
                inset: 0;
                position: absolute;
                content: "";
                cursor: pointer
            }
        }
    </style>
    <style>
        @media (max-width: 767px) {
            [_nghost-webapp-c94] {
                height: 100%;
                width: 100%
            }
        }

        .CalloutHeader[_ngcontent-webapp-c94] {
            min-width: 100%
        }

        .CalloutBody[_ngcontent-webapp-c94] {
            border-radius: 3px;
            box-shadow: 0 0 12px #12151b29, 0 8px 24px #12151b33;
            max-width: 100%;
            padding: 32px 24px 24px
        }

        @media (max-width: 767px) {
            .CalloutBody[_ngcontent-webapp-c94] {
                overflow: auto;
                -webkit-overflow-scrolling: touch
            }

            .CalloutBody[data-mobile-fullscreen=true][_ngcontent-webapp-c94] {
                border-radius: 0;
                box-shadow: none;
                height: 100%;
                max-height: none;
                padding: 0;
                width: 100%
            }

            .CalloutBody[data-mobile-fullscreen=true][_ngcontent-webapp-c94] .CalloutContent[_ngcontent-webapp-c94] {
                min-height: calc(100% - 64px - env(safe-area-inset-bottom) - env(safe-area-inset-top));
                padding: 16px
            }
        }

        .CalloutBody[data-edge-to-edge=true][_ngcontent-webapp-c94] {
            padding: 0
        }

        .CalloutBody[data-edge-to-edge=true][_ngcontent-webapp-c94] .WrapperCloseButtonMobile[_ngcontent-webapp-c94] {
            padding-bottom: 8px;
            padding-right: 8px
        }

        @media (min-width: 768px) {
            .CalloutBody[data-size=small][_ngcontent-webapp-c94] {
                width: 270px
            }
        }

        @media (min-width: 768px) {
            .CalloutBody[data-size=medium][_ngcontent-webapp-c94] {
                max-width: 400px;
                min-width: 270px;
                width: 100%
            }
        }

        @media (min-width: 768px) {
            .CalloutBody[data-size=large][_ngcontent-webapp-c94] {
                max-width: 870px;
                min-width: 270px;
                width: 100%
            }
        }

        .CalloutBody[data-color=light][_ngcontent-webapp-c94] {
            background-color: var(--color-bg-light)
        }

        .CalloutBody[data-color=light][data-position^=bottom][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            border-top-color: var(--color-bg-light)
        }

        .CalloutBody[data-color=light][data-position^=top][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            border-bottom-color: var(--color-bg-light)
        }

        .CalloutBody[data-color=light][data-position^=start][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            border-right-color: var(--color-bg-light)
        }

        .CalloutBody[data-color=light][data-position^=end][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            border-left-color: var(--color-bg-light)
        }

        .CalloutBody[data-color=dark][_ngcontent-webapp-c94] {
            background-color: #12151b
        }

        .CalloutBody[data-color=dark][data-position^=bottom][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            border-top-color: #12151b
        }

        .CalloutBody[data-color=dark][data-position^=top][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            border-bottom-color: #12151b
        }

        .CalloutBody[data-color=dark][data-position^=start][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            border-right-color: #12151b
        }

        .CalloutBody[data-color=dark][data-position^=end][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            border-left-color: #12151b
        }

        .CalloutBody[data-color=onboarding][_ngcontent-webapp-c94] {
            background-color: #115cc0
        }

        .CalloutBody[data-color=onboarding][data-position^=bottom][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            border-top-color: #115cc0
        }

        .CalloutBody[data-color=onboarding][data-position^=top][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            border-bottom-color: #115cc0
        }

        .CalloutBody[data-color=onboarding][data-position^=start][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            border-right-color: #115cc0
        }

        .CalloutBody[data-color=onboarding][data-position^=end][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            border-left-color: #115cc0
        }

        .CalloutBody[data-hide-arrow=false][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            border: 8px solid transparent;
            position: absolute
        }

        .CalloutBody[data-hide-arrow=false][data-position=top-start][_ngcontent-webapp-c94] {
            transform: translateY(8px)
        }

        .CalloutBody[data-hide-arrow=false][data-position=top-start][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            bottom: 100%;
            transform: translate(-50%)
        }

        .CalloutBody[data-hide-arrow=false][data-position=top-start][data-arrow-offset="100"][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            left: -100px
        }

        .CalloutBody[data-hide-arrow=false][data-position=top-start][data-arrow-offset="200"][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            left: -200px
        }

        .CalloutBody[data-hide-arrow=false][data-position=top-center][_ngcontent-webapp-c94] {
            transform: translateY(8px)
        }

        .CalloutBody[data-hide-arrow=false][data-position=top-center][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            bottom: 100%;
            left: 50%;
            transform: translate(-50%)
        }

        .CalloutBody[data-hide-arrow=false][data-position=top-end][_ngcontent-webapp-c94] {
            transform: translateY(8px)
        }

        .CalloutBody[data-hide-arrow=false][data-position=top-end][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            bottom: 100%;
            transform: translate(50%)
        }

        .CalloutBody[data-hide-arrow=false][data-position=bottom-start][_ngcontent-webapp-c94] {
            transform: translateY(-8px)
        }

        .CalloutBody[data-hide-arrow=false][data-position=bottom-start][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            left: 0;
            top: 100%
        }

        .CalloutBody[data-hide-arrow=false][data-position=bottom-start][data-arrow-offset="100"][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            left: -100px
        }

        .CalloutBody[data-hide-arrow=false][data-position=bottom-start][data-arrow-offset="200"][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            left: -200px
        }

        .CalloutBody[data-hide-arrow=false][data-position=bottom-center][_ngcontent-webapp-c94] {
            transform: translateY(-8px)
        }

        .CalloutBody[data-hide-arrow=false][data-position=bottom-center][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            left: 50%;
            top: 100%;
            transform: translate(-50%)
        }

        .CalloutBody[data-hide-arrow=false][data-position=bottom-center][data-arrow-offset="100"][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            left: calc(50% - 100px)
        }

        .CalloutBody[data-hide-arrow=false][data-position=bottom-center][data-arrow-offset="200"][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            left: calc(50% - 200px)
        }

        .CalloutBody[data-hide-arrow=false][data-position=bottom-end][_ngcontent-webapp-c94] {
            transform: translateY(-8px)
        }

        .CalloutBody[data-hide-arrow=false][data-position=bottom-end][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            right: 4px;
            top: 100%
        }

        .CalloutBody[data-hide-arrow=false][data-position=end-bottom][_ngcontent-webapp-c94] {
            transform: translate(-8px)
        }

        .CalloutBody[data-hide-arrow=false][data-position=end-bottom][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            bottom: 0;
            left: 100%
        }

        .CalloutBody[data-hide-arrow=false][data-position=end-center][_ngcontent-webapp-c94] {
            transform: translate(-8px)
        }

        .CalloutBody[data-hide-arrow=false][data-position=end-center][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            left: 100%;
            top: 50%;
            transform: translateY(-50%)
        }

        .CalloutBody[data-hide-arrow=false][data-position=end-center][data-arrow-offset="100"][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            top: calc(50% - 100px)
        }

        .CalloutBody[data-hide-arrow=false][data-position=end-center][data-arrow-offset="200"][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            top: calc(50% - 200px)
        }

        .CalloutBody[data-hide-arrow=false][data-position=end-top][_ngcontent-webapp-c94] {
            transform: translate(-8px)
        }

        .CalloutBody[data-hide-arrow=false][data-position=end-top][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            left: 100%;
            top: 0
        }

        .CalloutBody[data-hide-arrow=false][data-position=end-top][data-arrow-offset="100"][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            top: -100px
        }

        .CalloutBody[data-hide-arrow=false][data-position=end-top][data-arrow-offset="200"][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            top: -200px
        }

        .CalloutBody[data-hide-arrow=false][data-position=start-bottom][_ngcontent-webapp-c94] {
            transform: translate(8px)
        }

        .CalloutBody[data-hide-arrow=false][data-position=start-bottom][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            right: 100%;
            transform: translateY(50%)
        }

        .CalloutBody[data-hide-arrow=false][data-position=start-center][_ngcontent-webapp-c94] {
            transform: translate(8px)
        }

        .CalloutBody[data-hide-arrow=false][data-position=start-center][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            right: 100%;
            top: 50%;
            transform: translateY(-50%)
        }

        .CalloutBody[data-hide-arrow=false][data-position=start-center][data-arrow-offset="100"][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            top: calc(50% - 100px)
        }

        .CalloutBody[data-hide-arrow=false][data-position=start-center][data-arrow-offset="200"][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            top: calc(50% - 200px)
        }

        .CalloutBody[data-hide-arrow=false][data-position=start-top][_ngcontent-webapp-c94] {
            transform: translate(8px)
        }

        .CalloutBody[data-hide-arrow=false][data-position=start-top][_ngcontent-webapp-c94] .CalloutArrow[_ngcontent-webapp-c94] {
            right: 100%;
            transform: translateY(-50%)
        }

        .CloseButton[_ngcontent-webapp-c94] {
            position: absolute;
            right: 12px;
            top: 12px;
            z-index: 10
        }

        .CalloutContent[_ngcontent-webapp-c94] {
            overflow: auto;
            position: relative
        }

        .CalloutContent.OverflowContent[_ngcontent-webapp-c94] {
            overflow: visible
        }

        .WrapperCloseButtonMobile[_ngcontent-webapp-c94] {
            padding-top: 24px;
            text-align: right
        }
    </style>
    <style>
        [_nghost-webapp-c40] {
            display: flex;
            flex-direction: column;
            padding-top: env(safe-area-inset-top)
        }

        [data-background=light][_nghost-webapp-c40] {
            background-color: #fff
        }

        [data-background=dark][_nghost-webapp-c40] {
            background-color: #12151b
        }

        [data-background=transparent][_nghost-webapp-c40] {
            background-color: transparent;
            background-image: linear-gradient(#bcc5d3, transparent)
        }

        .ViewHeaderContainer[data-background=light][_ngcontent-webapp-c40] {
            border-bottom: 1px solid #bcc5d3;
            color: #12151b
        }

        .ViewHeaderContainer[data-background=dark][_ngcontent-webapp-c40],
        .ViewHeaderContainer[data-background=transparent][_ngcontent-webapp-c40] {
            color: #fcfcfd
        }

        .ViewHeaderContent[_ngcontent-webapp-c40] {
            align-items: center;
            display: flex;
            min-height: 64px;
            padding: 8px 16px
        }

        @media (min-width: 960px) {
            .ViewHeaderContent[_ngcontent-webapp-c40] {
                padding-bottom: 8px;
                padding-top: 8px
            }
        }

        .ViewHeaderContent[data-side-notch=true][_ngcontent-webapp-c40] {
            padding-left: calc(env(safe-area-inset-left) + 16px);
            padding-right: calc(env(safe-area-inset-right) + 16px)
        }

        .ViewHeaderContent-inner[_ngcontent-webapp-c40] {
            align-items: center;
            display: flex;
            flex-grow: 1;
            margin-left: -8px;
            margin-right: -8px;
            min-width: 0
        }

        .ViewHeaderContent-action[_ngcontent-webapp-c40] {
            align-items: center;
            display: flex;
            min-height: 32px
        }

        .ViewHeaderContent-action--back[_ngcontent-webapp-c40] {
            padding: 4px 4px 4px 0
        }

        .ViewHeaderContent-title[_ngcontent-webapp-c40] {
            flex: 1 1;
            min-width: 0;
            padding-left: 8px;
            padding-right: 8px
        }

        @media (max-width: 767px) {
            .ViewHeaderContent-title--indented[_ngcontent-webapp-c40] {
                padding-left: 4px
            }
        }

        .HasLogo[_ngcontent-webapp-c40] {
            justify-content: space-between;
            margin-left: 0
        }
    </style>
</head>

<body cz-shortcut-listen="true">

    <app-root ng-version="15.2.8">
        <app-toast-alerts>
            <div _ngcontent-webapp-c37="" style="position: relative; top: -64px;" class="ng-star-inserted"></div>
            <fl-toast-alert-container _nghost-webapp-c37="" data-show-mobile="true">
                <fl-container _ngcontent-webapp-c37="" _nghost-webapp-c32="" size="desktop-large" data-mobile-padding="true" data-padding="true" data-support-notch="true">
                    <div _ngcontent-webapp-c37="" class="ToastAlertInner">
                        <div _ngcontent-webapp-c37="" class="ToastAlertContainer"></div>
                    </div>
                </fl-container>
            </fl-toast-alert-container>
            <div _ngcontent-webapp-c37="" style="position: relative; top: 0px;" class="ng-star-inserted"></div>
            <fl-toast-alert-container _nghost-webapp-c37="" data-hide-mobile="true" class="" style="left: 0px;">
                <fl-container _ngcontent-webapp-c37="" _nghost-webapp-c32="" size="desktop-large" data-mobile-padding="true" data-padding="true" data-support-notch="true">
                    <div _ngcontent-webapp-c37="" class="ToastAlertInner">
                        <div _ngcontent-webapp-c37="" class="ToastAlertContainer"></div>
                    </div>
                </fl-container>
            </fl-toast-alert-container>
        </app-toast-alerts>
        <fl-pwa _nghost-webapp-c58=""></fl-pwa>
        <fl-seo></fl-seo>
        <router-outlet></router-outlet>
        <app-logged-out-shell _nghost-webapp-c118="" class="ng-star-inserted">
            <app-navigation-logged-out _ngcontent-webapp-c118="" _nghost-webapp-c93="" class="ng-star-inserted">
                <div _ngcontent-webapp-c93="" style="position: relative; top: 0px;" class="ng-star-inserted"></div>
                <div _ngcontent-webapp-c93="" style="display: block; height: 64px;"></div>
            </app-navigation-logged-out>
            <!---->

            <!---->
            <!---->
            <!---->
            <div _ngcontent-webapp-c118="">
                <router-outlet _ngcontent-webapp-c118=""></router-outlet>
                <app-project-view _nghost-webapp-c590="" class="ng-star-inserted">
                    <app-project-view-logged-out _ngcontent-webapp-c590="" _nghost-webapp-c589="" class="ng-star-inserted">
                        <fl-picture _ngcontent-webapp-c589="" class="Banner ng-star-inserted" _nghost-webapp-c35="" data-display="block" data-aspect-ratio="false" data-is-bg-image="false" data-margin-bottom="small" data-margin-bottom-desktop="none"><img _ngcontent-webapp-c35="" class="ImageElement IsShown ng-star-inserted" alt="" data-aspect-ratio="false" data-border-radius-bottom="false" data-border-radius-top="false" data-display="block" data-full-width="true" data-is-bg-image="false" data-object-fit="cover" height="230" width="1920" sizes="100vw" srcset="https://www.f-cdn.com/assets/main/en/assets/project-view/logged-out/header.jpg?image-optimizer=force&amp;format=webply&amp;width=16 16w, https://www.f-cdn.com/assets/main/en/assets/project-view/logged-out/header.jpg?image-optimizer=force&amp;format=webply&amp;width=32 32w, https://www.f-cdn.com/assets/main/en/assets/project-view/logged-out/header.jpg?image-optimizer=force&amp;format=webply&amp;width=48 48w, https://www.f-cdn.com/assets/main/en/assets/project-view/logged-out/header.jpg?image-optimizer=force&amp;format=webply&amp;width=64 64w, https://www.f-cdn.com/assets/main/en/assets/project-view/logged-out/header.jpg?image-optimizer=force&amp;format=webply&amp;width=96 96w, https://www.f-cdn.com/assets/main/en/assets/project-view/logged-out/header.jpg?image-optimizer=force&amp;format=webply&amp;width=128 128w, https://www.f-cdn.com/assets/main/en/assets/project-view/logged-out/header.jpg?image-optimizer=force&amp;format=webply&amp;width=256 256w, https://www.f-cdn.com/assets/main/en/assets/project-view/logged-out/header.jpg?image-optimizer=force&amp;format=webply&amp;width=384 384w, https://www.f-cdn.com/assets/main/en/assets/project-view/logged-out/header.jpg?image-optimizer=force&amp;format=webply&amp;width=640 640w, https://www.f-cdn.com/assets/main/en/assets/project-view/logged-out/header.jpg?image-optimizer=force&amp;format=webply&amp;width=750 750w, https://www.f-cdn.com/assets/main/en/assets/project-view/logged-out/header.jpg?image-optimizer=force&amp;format=webply&amp;width=828 828w, https://www.f-cdn.com/assets/main/en/assets/project-view/logged-out/header.jpg?image-optimizer=force&amp;format=webply&amp;width=1080 1080w, https://www.f-cdn.com/assets/main/en/assets/project-view/logged-out/header.jpg?image-optimizer=force&amp;format=webply&amp;width=1200 1200w, https://www.f-cdn.com/assets/main/en/assets/project-view/logged-out/header.jpg?image-optimizer=force&amp;format=webply&amp;width=1920 1920w, https://www.f-cdn.com/assets/main/en/assets/project-view/logged-out/header.jpg?image-optimizer=force&amp;format=webply&amp;width=2048 2048w, https://www.f-cdn.com/assets/main/en/assets/project-view/logged-out/header.jpg?image-optimizer=force&amp;format=webply&amp;width=3840 3840w" src="https://www.f-cdn.com/assets/main/en/assets/project-view/logged-out/header.jpg?image-optimizer=force&amp;format=webply&amp;width=2304" style="object-position: left center;">
                            <!---->
                            <!---->
                            <!---->
                        </fl-picture>
                        <fl-container _ngcontent-webapp-c589="" class="Content ng-star-inserted" _nghost-webapp-c32="" size="desktop-large" data-mobile-padding="false" data-padding="false" data-support-notch="true">
                            <fl-container _ngcontent-webapp-c589="" class="Content-main-container" _nghost-webapp-c32="" size="desktop-large" data-mobile-padding="true" data-padding="true" data-support-notch="true">
                                <app-project-view-logged-out-main _ngcontent-webapp-c589="" class="Content-main" _nghost-webapp-c585="" data-margin-right-desktop="large">
                                    <app-project-view-logged-out-breadcrumbs _ngcontent-webapp-c585="" _nghost-webapp-c583="" data-margin-bottom="small">
                                        <fl-breadcrumbs _ngcontent-webapp-c583="" fltrackingsection="ProjectViewLoggedOut" class="Breadcrumbs" _nghost-webapp-c582="">
                                            <div _ngcontent-webapp-c582="" role="list" itemscope="" itemtype="https://schema.org/BreadcrumbList" class="Breadcrumbs">
                                                <fl-breadcrumbs-item _ngcontent-webapp-c583="" fltrackinglabel="ProjectViewLoggedOut-BreadcrumbMainSite" link="/" _nghost-webapp-c581="" data-color="inherit" data-text-transform="uppercase" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" role="listitem">
                                                    <fl-link _ngcontent-webapp-c581="" _nghost-webapp-c66="" data-color="inherit" data-hover-color="inherit" data-weight="bold" data-size="xxxsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" itemprop="item" itemtype="https://schema.org/Thing" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/" target="_self">
                                                            <!----><span _ngcontent-webapp-c581="" itemprop="name" class="ng-star-inserted"> Tài nguyên </span>
                                                            <!---->
                                                        </a>
                                                    </fl-link>
                                                </fl-breadcrumbs-item>
                                                @foreach($parentCategories as $categories)
                                                <fl-breadcrumbs-item _ngcontent-webapp-c583="" fltrackinglabel="ProjectViewLoggedOut-BreadcrumbMainSite" link="/" _nghost-webapp-c581="" data-color="inherit" data-text-transform="uppercase" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" role="listitem">
                                                    <fl-link _ngcontent-webapp-c581="" _nghost-webapp-c66="" data-color="inherit" data-hover-color="inherit" data-weight="bold" data-size="xxxsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" itemprop="item" itemtype="https://schema.org/Thing" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/" target="_self">
                                                            <!----><span _ngcontent-webapp-c581="" itemprop="name" class="ng-star-inserted"> {{ $categories->name }} </span>
                                                            <!---->
                                                        </a>
                                                    </fl-link>
                                                </fl-breadcrumbs-item>
                                                @endforeach
                                            </div>
                                        </fl-breadcrumbs>
                                    </app-project-view-logged-out-breadcrumbs>
                                    <div _ngcontent-webapp-c585="" class="ContentContainer" data-margin-bottom="mid">
                                        <div _ngcontent-webapp-c585="" class="Project-heading" data-margin-bottom="small">
                                            <div _ngcontent-webapp-c585="" class="Project-heading-title">
                                                <fl-heading _ngcontent-webapp-c585="" _nghost-webapp-c33="" data-margin-bottom-tablet="xxsmall">
                                                    <h1 _ngcontent-webapp-c33="" data-color="foreground" data-inline="false" data-size="large" data-size-desktop="xlarge" data-truncate="false" data-weight="bold" class="ng-star-inserted"> {{ $post->title }}
                                                        <!---->
                                                    </h1>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-heading>
                                                <fl-heading _ngcontent-webapp-c585="" _nghost-webapp-c33="" data-show-mobile="true" data-margin-bottom="small">
                                                    <!---->
                                                    <h2 _ngcontent-webapp-c33="" data-color="foreground" data-inline="false" data-size="mid" data-size-desktop="xlarge" data-truncate="false" data-weight="bold" class="ng-star-inserted"> 
                                                            {{ number_format($post->min_price, 0, '', '.') }} đ
                                                        @if(!empty($post->max_price))
                                                        -   {{ number_format($post->max_price, 0, '', '.') }} đ
                                                        @endif
                                                    </h2>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-heading>
                                                <div _ngcontent-webapp-c585="" class="IconTextPair">
                                                    <fl-tag _ngcontent-webapp-c585="" _nghost-webapp-c132="" data-tag-borderless="false" data-tag-dark-mode="false" data-margin-right="xxsmall">
                                                        <!---->
                                                        <div _ngcontent-webapp-c132="" class="Tag ng-star-inserted" data-tag-color="success-light" data-tag-borderless="false" data-tag-dark-mode="false" data-tag-type="default" data-tag-size="mid">
                                                            <fl-text _ngcontent-webapp-c132="" _nghost-webapp-c41="" data-color="inherit" data-type="span" data-max-lines="1" data-read-more="none" data-margin-right="none" style="max-height: inherit;" class="ng-star-inserted">
                                                                <!----><span _ngcontent-webapp-c41="" class="NativeElement Span ng-star-inserted" data-color="inherit" data-size="xsmall" data-weight="normal" data-style="normal" data-line-break="false">
                                                                    <div _ngcontent-webapp-c132="" class="Content ng-star-inserted">
                                                                        <fl-text _ngcontent-webapp-c585="" _nghost-webapp-c41="" data-color="foreground" data-type="paragraph" data-read-more="none">
                                                                            <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="foreground" data-size="xxsmall" data-weight="medium" data-style="normal" data-line-break="false"> Open
                                                                                <!---->
                                                                            </div>
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                        </fl-text>
                                                                    </div>
                                                                    <!---->
                                                                </span>
                                                                <!---->
                                                                <!---->
                                                                <!---->
                                                                <!---->
                                                                <!---->
                                                            </fl-text>
                                                            <!---->
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                        <!---->
                                                    </fl-tag>
                                                    <fl-text _ngcontent-webapp-c585="" _nghost-webapp-c41="" data-color="foreground" data-type="paragraph" data-read-more="none" data-margin-right="xxxsmall">
                                                        <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="foreground" data-size="xsmall" data-weight="normal" data-style="normal" data-line-break="false"> Đã đăng <fl-relative-time _ngcontent-webapp-c585="" class="ng-star-inserted">
                                                                <fl-text _nghost-webapp-c41="" data-color="foreground" data-type="span" data-read-more="none">
                                                                    <!----><span _ngcontent-webapp-c41="" class="NativeElement Span ng-star-inserted" data-color="foreground" data-size="xsmall" data-weight="normal" data-style="normal" data-line-break="false">
                                                                        <!---->{{ $post->getGapTime() }}
                                                                        <!---->
                                                                        <!---->
                                                                        <!---->
                                                                    </span>
                                                                    <!---->
                                                                    <!---->
                                                                    <!---->
                                                                    <!---->
                                                                    <!---->
                                                                </fl-text>
                                                            </fl-relative-time>
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                    </fl-text>
                                                    <fl-text _ngcontent-webapp-c585="" _nghost-webapp-c41="" data-color="foreground" data-type="paragraph" data-read-more="none" data-margin-right="xxxsmall" class="ng-star-inserted">
                                                        <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="foreground" data-size="xsmall" data-weight="normal" data-style="normal" data-line-break="false"> •
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                    </fl-text>

                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </div>
                                            </div>
                                            <div _ngcontent-webapp-c585="" data-hide-mobile="true">
                                                <fl-heading _ngcontent-webapp-c585="" _nghost-webapp-c33="" data-text-align="right">
                                                    <h2 _ngcontent-webapp-c33="" data-color="foreground" data-inline="false" data-size="large" data-size-desktop="xlarge" data-truncate="false" data-weight="bold" class="ng-star-inserted">
                                                        {{ number_format($post->min_price, 0, '', '.') }} đ
                                                        @if(!empty($post->max_price))
                                                        - {{ number_format($post->max_price, 0, '', '.') }} đ
                                                        @endif
                                                    </h2>
                                                </fl-heading>
                                                <fl-text _ngcontent-webapp-c585="" _nghost-webapp-c41="" data-color="foreground" data-text-align="right" data-type="paragraph" data-read-more="none" class="ng-star-inserted">
                                                    <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="foreground" data-size="xsmall" data-weight="normal" data-style="normal" data-line-break="false"> Paid on delivery
                                                    </div>
                                                </fl-text>
                                            </div>
                                        </div>
                                        <fl-text _ngcontent-webapp-c585="" class="Project-description" _nghost-webapp-c41="" data-color="foreground" data-type="paragraph" data-read-more="none" data-margin-bottom="mid">
                                            <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="foreground" data-size="xsmall" data-weight="normal" data-style="normal" data-line-break="true">
                                                {!! $post->description !!}
                                            </div>
                                        </fl-text>
                                        <div _ngcontent-webapp-c585="" data-margin-bottom="small" class="ng-star-inserted">
                                            <fl-tag _ngcontent-webapp-c585="" fltrackingsection="ProjectViewLoggedOut" fltrackinglabel="ProjectViewLoggedOut-SkillTag" _nghost-webapp-c132="" data-tag-borderless="false" data-tag-dark-mode="false" data-margin-right="xxsmall" data-margin-bottom="xxsmall" class="ng-star-inserted">
                                                <fl-link _ngcontent-webapp-c132="" class="Tag ng-star-inserted" _nghost-webapp-c66="" data-tag-borderless="false" data-tag-color="light" data-tag-dark-mode="false" data-tag-type="clickable" data-tag-size="mid" data-color="inherit" data-hover-color="default" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="never" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/?category={{$post->category_id}}" target="_self">
                                                        <!---->
                                                        <fl-text _ngcontent-webapp-c132="" _nghost-webapp-c41="" data-color="inherit" data-type="span" data-max-lines="1" data-read-more="none" data-margin-right="none" style="max-height: inherit;" class="ng-star-inserted">
                                                            <!----><span _ngcontent-webapp-c41="" class="NativeElement Span ng-star-inserted" data-color="inherit" data-size="xsmall" data-weight="normal" data-style="normal" data-line-break="false">
                                                                <div _ngcontent-webapp-c132="" class="Content ng-star-inserted"> {{$post->category->name}} </div>
                                                                <!---->
                                                            </span>
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                        </fl-text>
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                    </a>

                                                </fl-link>
                                                <!---->
                                                <!---->
                                                <!---->
                                            </fl-tag>

                                            <!---->
                                        </div>
                                        <!---->
                                        <fl-text _ngcontent-webapp-c585="" _nghost-webapp-c41="" data-color="foreground" data-type="paragraph" data-read-more="none" data-margin-bottom="small">
                                            <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="foreground" data-size="xxxsmall" data-weight="normal" data-style="normal" data-line-break="false"> Project ID: 37991606
                                                <!---->
                                            </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-text>

                                        <!---->

                                    </div>
                                    <!---->

                                    <!---->
                                </app-project-view-logged-out-main>
                            </fl-container>
                            <app-project-view-logged-out-side _ngcontent-webapp-c589="" class="Content-side" _nghost-webapp-c588="">
                                <fl-container _ngcontent-webapp-c588="" _nghost-webapp-c32="" size="desktop-large" data-mobile-padding="true" data-padding="true" data-support-notch="true">
                                    <div _ngcontent-webapp-c588="" data-show-desktop="true">
                                        <div _ngcontent-webapp-c588="" class="Cta-container ng-star-inserted">
                                            <fl-button _ngcontent-webapp-c588="" fltrackingsection="ProjectViewLoggedOut" fltrackinglabel="ProjectViewLoggedOut-RepostProjectCTA" class="Cta" _nghost-webapp-c38="" data-color="primary" data-display="flex" data-size="large" data-margin-bottom="mid"><a _ngcontent-webapp-c38="" tabindex="0" aria-live="assertive" class="ButtonElement ng-star-inserted" rel="" data-color="primary" data-display="flex" href="/buyers/repost.php?id=37991606" target="_self">
                                                    <!---->
                                                    <fl-text _ngcontent-webapp-c588="" _nghost-webapp-c41="" data-color="light" data-type="strong" data-read-more="none" class="ng-star-inserted">
                                                        <!---->
                                                        <!----><strong _ngcontent-webapp-c41="" class="NativeElement Strong ng-star-inserted" data-color="light" data-size="marketing_small" data-weight="normal" data-style="normal" data-line-break="false"> Cần trung gian
                                                            <!---->
                                                        </strong>
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                    </fl-text>
                                                    <!---->
                                                    <!---->
                                                </a>
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                            </fl-button>
                                        </div>
                                        <!---->
                                        <fl-hr _ngcontent-webapp-c588="" _nghost-webapp-c188="" data-color="light" data-margin-bottom="mid">
                                            <!---->
                                        </fl-hr>
                                    </div>
                                    <div _ngcontent-webapp-c588="" class="Section ng-star-inserted" data-margin-bottom="mid" data-margin-bottom-desktop="none">
                                        <app-project-view-logged-out-client-info _ngcontent-webapp-c588="" _nghost-webapp-c586="">
                                            <fl-heading _ngcontent-webapp-c586="" _nghost-webapp-c33="" data-margin-bottom="small">
                                                <!---->
                                                <!---->
                                                <h3 _ngcontent-webapp-c33="" data-color="foreground" data-inline="false" data-size="marketing_small" data-size-desktop="mid" data-truncate="false" data-weight="bold" class="ng-star-inserted">
                                                    Thông tin người cung ứng
                                                    <!---->
                                                </h3>
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                            </fl-heading>
                                            <div _ngcontent-webapp-c586="" class="FlexContainer" data-margin-bottom="xxsmall">
                                                <div _ngcontent-webapp-c586="" class="IconContainer" data-margin-right="xxsmall">
                                                    <fl-flag _ngcontent-webapp-c586="" _nghost-webapp-c75=""><img _ngcontent-webapp-c75="" role="presentation" class="FlagImage" alt="Flag of INDIA" title="India" src="https://www.f-cdn.com/assets/main/en/assets/flags/in.png" data-size="mid"></fl-flag>
                                                </div>
                                                <fl-text _ngcontent-webapp-c586="" _nghost-webapp-c41="" data-color="foreground" data-type="paragraph" data-read-more="none">
                                                    <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="foreground" data-size="xsmall" data-size-desktop="small" data-weight="normal" data-style="normal" data-line-break="false"> Vietnam
                                                        <!---->
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-text>
                                            </div>

                                            <div _ngcontent-webapp-c586="" class="FlexContainer ng-star-inserted" data-margin-bottom="xxsmall">
                                                <fl-icon _ngcontent-webapp-c586="" class="IconContainer" _nghost-webapp-c34="" data-backdrop-style="solid" data-size="small" data-disabled="false" role="img" data-use-icon-font="true" data-fill-icon-font="false" data-margin-right="xxsmall"><span _ngcontent-webapp-c34="" class="IconFont ng-star-inserted" data-color="foreground" data-disabled="false" data-drop-shadow="false" data-name="ui-check-in-circle-v2" data-role="img" data-size="small" data-use-icon-font="true" data-weight="normal" aria-hidden="true"></span>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-icon>
                                                <fl-text _ngcontent-webapp-c586="" _nghost-webapp-c41="" data-color="foreground" data-type="paragraph" data-read-more="none">
                                                    <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="foreground" data-size="xsmall" data-size-desktop="small" data-weight="normal" data-style="normal" data-line-break="false">
                                                        @if($post->is_validated)
                                                        Domain đã được verify
                                                        @else
                                                        Domain chưa được verify
                                                        @endif
                                                        <!---->
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-text>
                                            </div>
                                            <!---->
                                            <div _ngcontent-webapp-c586="" class="FlexContainer" data-margin-bottom="small">
                                                <fl-icon _ngcontent-webapp-c586="" class="IconContainer" _nghost-webapp-c34="" data-backdrop-style="solid" data-size="small" data-disabled="false" role="img" data-use-icon-font="true" data-fill-icon-font="false" data-margin-right="xxsmall"><span _ngcontent-webapp-c34="" class="IconFont ng-star-inserted" data-color="foreground" data-disabled="false" data-drop-shadow="false" data-name="ui-clock-v2" data-role="img" data-size="small" data-use-icon-font="true" data-weight="normal" aria-hidden="true"></span>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-icon>
                                                <fl-text _ngcontent-webapp-c586="" _nghost-webapp-c41="" data-color="foreground" data-type="paragraph" data-read-more="none">
                                                    <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="foreground" data-size="xsmall" data-size-desktop="small" data-weight="normal" data-style="normal" data-line-break="false"> Thành viên kể từ ngày 22/11/2020
                                                        <!---->
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-text>
                                            </div>
                                            <fl-hr _ngcontent-webapp-c586="" _nghost-webapp-c188="" data-color="light" data-show-desktop="true" data-margin-bottom="mid">
                                                <!---->
                                            </fl-hr>
                                            <fl-heading _ngcontent-webapp-c586="" _nghost-webapp-c33="" data-margin-bottom="small">
                                                <!---->
                                                <!---->
                                                <h3 _ngcontent-webapp-c33="" data-color="foreground" data-inline="false" data-size="marketing_small" data-size-desktop="mid" data-truncate="false" data-weight="bold" class="ng-star-inserted">
                                                    Thông tin verify
                                                    <!---->
                                                </h3>
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                            </fl-heading>
                                            <div _ngcontent-webapp-c586="" class="ClientVerification FlexContainer" data-margin-bottom-desktop="mid">
                                                <fl-icon _ngcontent-webapp-c586="" class="IconContainer ng-star-inserted" _nghost-webapp-c34="" aria-label="Deposit made" data-backdrop-style="solid" data-size="small" data-disabled="false" role="img" data-use-icon-font="true" data-fill-icon-font="false"><span _ngcontent-webapp-c34="" class="IconFont ng-star-inserted" data-color="success" data-disabled="false" data-drop-shadow="false" data-name="ui-payments" data-role="img" data-size="small" data-use-icon-font="true" data-weight="normal" title="Deposit made" aria-hidden="true"></span>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-icon>
                                                <fl-icon _ngcontent-webapp-c586="" class="IconContainer ng-star-inserted" _nghost-webapp-c34="" aria-label="Email verified" data-backdrop-style="solid" data-size="small" data-disabled="false" role="img" data-use-icon-font="true" data-fill-icon-font="false"><span _ngcontent-webapp-c34="" class="IconFont ng-star-inserted" data-color="success" data-disabled="false" data-drop-shadow="false" data-name="ui-mail" data-role="img" data-size="small" data-use-icon-font="true" data-weight="normal" title="Email verified" aria-hidden="true"></span>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-icon>
                                                <fl-icon _ngcontent-webapp-c586="" class="IconContainer ng-star-inserted" _nghost-webapp-c34="" aria-label="Profile complete" data-backdrop-style="solid" data-size="small" data-disabled="false" role="img" data-use-icon-font="true" data-fill-icon-font="false"><span _ngcontent-webapp-c34="" class="IconFont ng-star-inserted" data-color="success" data-disabled="false" data-drop-shadow="false" data-name="ui-person" data-role="img" data-size="small" data-use-icon-font="true" data-weight="normal" title="Profile complete" aria-hidden="true"></span>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-icon>
                                                <fl-icon _ngcontent-webapp-c586="" class="IconContainer ng-star-inserted" _nghost-webapp-c34="" aria-label="Phone verified" data-backdrop-style="solid" data-size="small" data-disabled="false" role="img" data-use-icon-font="true" data-fill-icon-font="false"><span _ngcontent-webapp-c34="" class="IconFont ng-star-inserted" data-color="success" data-disabled="false" data-drop-shadow="false" data-name="ui-phone" data-role="img" data-size="small" data-use-icon-font="true" data-weight="normal" title="Phone verified" aria-hidden="true"></span>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-icon>
                                                <fl-icon _ngcontent-webapp-c586="" class="IconContainer ng-star-inserted" _nghost-webapp-c34="" aria-label="Payment verified" data-backdrop-style="solid" data-size="small" data-disabled="false" role="img" data-use-icon-font="true" data-fill-icon-font="false"><span _ngcontent-webapp-c34="" class="IconFont ng-star-inserted" data-color="success" data-disabled="false" data-drop-shadow="false" data-name="ui-creditcard-check-v2" data-role="img" data-size="small" data-use-icon-font="true" data-weight="normal" title="Payment verified" aria-hidden="true"></span>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-icon>
                                                <!---->
                                            </div>
                                        </app-project-view-logged-out-client-info>
                                    </div>
                                    <fl-hr _ngcontent-webapp-c588="" _nghost-webapp-c188="" data-color="light" data-show-desktop="true" data-margin-bottom="mid" class="ng-star-inserted">
                                </fl-container>
                                <div _ngcontent-webapp-c588="" data-hide-desktop="true">
                                    <div _ngcontent-webapp-c588="" class="Cta-container ng-star-inserted">
                                        <fl-button _ngcontent-webapp-c588="" fltrackingsection="ProjectViewLoggedOut" fltrackinglabel="ProjectViewLoggedOut-RepostProjectCTA" class="Cta" _nghost-webapp-c38="" data-color="primary" data-display="flex" data-size="large" data-margin-bottom="none"><a _ngcontent-webapp-c38="" tabindex="0" aria-live="assertive" class="ButtonElement ng-star-inserted" rel="" data-color="primary" data-display="flex" href="/buyers/repost.php?id=37991606" target="_self">
                                                <!---->
                                                <fl-text _ngcontent-webapp-c588="" _nghost-webapp-c41="" data-color="light" data-type="strong" data-read-more="none" class="ng-star-inserted">
                                                    <!---->
                                                    <!----><strong _ngcontent-webapp-c41="" class="NativeElement Strong ng-star-inserted" data-color="light" data-size="marketing_small" data-weight="normal" data-style="normal" data-line-break="false"> Post a project like
                                                        this
                                                        <!---->
                                                    </strong>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-text>
                                                <!---->
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-button>
                                    </div>
                                    <!---->
                                </div>
                                <!---->
                                <div _ngcontent-webapp-c588="" style="position: relative; bottom: 0px;"></div>
                            </app-project-view-logged-out-side>
                        </fl-container>
                        <!---->
                        <!---->
                        <!---->
                    </app-project-view-logged-out>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                </app-project-view>
                <!---->
            </div>
            <app-give-get-footer _ngcontent-webapp-c118="" _nghost-webapp-c92="" class="ng-tns-c92-7 ng-star-inserted">
                <!---->
                <!---->
                <fl-toast-alert _ngcontent-webapp-c92="" class="ng-tns-c92-7 ng-tns-c54-8 ng-star-inserted" _nghost-webapp-c54="">
                    <div _ngcontent-webapp-c54="" class="ToastAlert ng-tns-c54-8 ng-trigger ng-trigger-toggleElement" data-type="info" data-color="light" style="opacity: 0; transform: translateY(-12px);">
                        <fl-icon _ngcontent-webapp-c54="" class="ToastAlert-icon ng-tns-c54-8 ng-star-inserted" _nghost-webapp-c34="" data-backdrop-style="solid" data-size="small" data-disabled="false" role="img" data-use-icon-font="true" data-fill-icon-font="false" data-margin-right="xsmall" style=""><span _ngcontent-webapp-c34="" class="IconFont ng-star-inserted" data-color="inherit" data-disabled="false" data-drop-shadow="false" data-name="ui-info" data-role="img" data-size="small" data-use-icon-font="true" data-weight="normal" aria-hidden="true"></span>
                            <!---->
                            <!---->
                            <!---->
                        </fl-icon>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <fl-text _ngcontent-webapp-c54="" class="ToastAlert-content ng-tns-c54-8" _nghost-webapp-c41="" data-closeable="false" data-color="dark" data-type="paragraph" data-read-more="none" data-margin-right="none">
                            <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="dark" data-size="xsmall" data-weight="normal" data-style="normal" data-line-break="false" style=""> Thanks! We’ve emailed you a link to claim your free
                                credit.
                                <!---->
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                        </fl-text>
                        <!---->
                    </div>
                </fl-toast-alert>
                <fl-toast-alert _ngcontent-webapp-c92="" class="ng-tns-c92-7 ng-tns-c54-9 ng-star-inserted" _nghost-webapp-c54="">
                    <div _ngcontent-webapp-c54="" class="ToastAlert ng-tns-c54-9 ng-trigger ng-trigger-toggleElement" data-type="error" data-color="light" style="opacity: 0; transform: translateY(-12px);">
                        <!---->
                        <fl-icon _ngcontent-webapp-c54="" class="ToastAlert-icon ng-tns-c54-9 ng-star-inserted" _nghost-webapp-c34="" data-backdrop-style="solid" data-size="small" data-disabled="false" role="img" data-use-icon-font="true" data-fill-icon-font="false" data-margin-right="xsmall" style=""><span _ngcontent-webapp-c34="" class="IconFont ng-star-inserted" data-color="inherit" data-disabled="false" data-drop-shadow="false" data-name="ui-error" data-role="img" data-size="small" data-use-icon-font="true" data-weight="normal" aria-hidden="true"></span>
                            <!---->
                            <!---->
                            <!---->
                        </fl-icon>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <fl-text _ngcontent-webapp-c54="" class="ToastAlert-content ng-tns-c54-9" _nghost-webapp-c41="" data-closeable="false" data-color="dark" data-type="paragraph" data-read-more="none" data-margin-right="none">
                            <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="dark" data-size="xsmall" data-weight="normal" data-style="normal" data-line-break="false" style=""> Something went wrong while sending your email. Please
                                try again.
                                <!---->
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                        </fl-text>
                        <!---->
                    </div>
                </fl-toast-alert>
            </app-give-get-footer>
            <!---->
            <!---->
            <!---->
            <app-footer _ngcontent-webapp-c118="" class="ng-star-inserted">
                <!---->
                <!---->
                <app-footer-freelancer _nghost-webapp-c80="" role="contentinfo" class="ng-star-inserted">
                    <div _ngcontent-webapp-c80="" fltrackingsection="Footer" class="FooterSection">
                        <fl-container _ngcontent-webapp-c80="" _nghost-webapp-c32="" size="desktop-large" data-mobile-padding="true" data-padding="true" data-support-notch="true">
                            <fl-grid _ngcontent-webapp-c80="" _nghost-webapp-c70="" data-overflow="false">
                                <fl-col _ngcontent-webapp-c80="" _nghost-webapp-c69="" data-col-desktop-small="2" data-flex-container="false">
                                    <fl-link _ngcontent-webapp-c80="" class="FooterInfo" _nghost-webapp-c66="" data-color="default" data-hover-color="default" data-weight="inherit" data-size="xsmall" data-display="inline" data-margin-bottom="small" data-margin-bottom-tablet="large"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/" target="_self">
                                            <!---->
                                            <fl-logo _ngcontent-webapp-c80="" _nghost-webapp-c39="" class="ng-star-inserted">
                                                <picture _ngcontent-webapp-c39="">
                                                    <!---->
                                                    <!---->
                                                    <source _ngcontent-webapp-c39="" srcset="https://www.f-cdn.com/assets/main/en/assets/freelancer-logo-light.svg" class="ng-star-inserted">
                                                    <!----><img _ngcontent-webapp-c39="" alt="Freelancer logo" class="LogoImg" src="https://www.f-cdn.com/assets/main/en/assets/freelancer-logo-light.svg" data-size="small">
                                                </picture>
                                            </fl-logo>
                                            <!---->
                                        </a>
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                    </fl-link>
                                    <fl-language-switcher _ngcontent-webapp-c80="" class="FooterInfo" _nghost-webapp-c79="" data-margin-bottom="small">
                                        <fl-language-switcher-link _ngcontent-webapp-c79="" _nghost-webapp-c73="" class="ng-star-inserted">
                                            <fl-icon _ngcontent-webapp-c73="" _nghost-webapp-c34="" data-backdrop-style="solid" data-size="mid" data-disabled="false" role="img" data-use-icon-font="false" data-fill-icon-font="false" data-hide-mobile="true" data-margin-right="xsmall">
                                                <!---->
                                                <div _ngcontent-webapp-c34="" class="IconContainer ng-star-inserted" aria-hidden="true" data-color="inherit" data-disabled="false" data-drop-shadow="false" data-name="ui-globe" data-size="mid"><svg width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                            <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                                            <path d="M11.99,2 C6.47,2 2,6.48 2,12 C2,17.52 6.47,22 11.99,22 C17.52,22 22,17.52 22,12 C22,6.48 17.52,2 11.99,2 Z M18.92,8 L15.97,8 C15.65,6.75 15.19,5.55 14.59,4.44 C16.43,5.07 17.96,6.35 18.92,8 Z M12,4.04 C12.83,5.24 13.48,6.57 13.91,8 L10.09,8 C10.52,6.57 11.17,5.24 12,4.04 Z M4.26,14 C4.1,13.36 4,12.69 4,12 C4,11.31 4.1,10.64 4.26,10 L7.64,10 C7.56,10.66 7.5,11.32 7.5,12 C7.5,12.68 7.56,13.34 7.64,14 L4.26,14 Z M5.08,16 L8.03,16 C8.35,17.25 8.81,18.45 9.41,19.56 C7.57,18.93 6.04,17.66 5.08,16 Z M8.03,8 L5.08,8 C6.04,6.34 7.57,5.07 9.41,4.44 C8.81,5.55 8.35,6.75 8.03,8 Z M12,19.96 C11.17,18.76 10.52,17.43 10.09,16 L13.91,16 C13.48,17.43 12.83,18.76 12,19.96 Z M14.34,14 L9.66,14 C9.57,13.34 9.5,12.68 9.5,12 C9.5,11.32 9.57,10.65 9.66,10 L14.34,10 C14.43,10.65 14.5,11.32 14.5,12 C14.5,12.68 14.43,13.34 14.34,14 Z M14.59,19.56 C15.19,18.45 15.65,17.25 15.97,16 L18.92,16 C17.96,17.65 16.43,18.93 14.59,19.56 Z M16.36,14 C16.44,13.34 16.5,12.68 16.5,12 C16.5,11.32 16.44,10.66 16.36,10 L19.74,10 C19.9,10.64 20,11.31 20,12 C20,12.69 19.9,13.36 19.74,14 L16.36,14 Z">
                                                            </path>
                                                        </g>
                                                    </svg></div>
                                                <!---->
                                            </fl-icon>
                                            <fl-link _ngcontent-webapp-c73="" fltrackinglabel="goToChooseCountry" _nghost-webapp-c66="" data-color="inherit" data-hover-color="default" data-weight="inherit" data-size="inherit" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/choose-your-country" target="_self">
                                                    <!----> US (International) / English
                                                    <!---->
                                                </a>
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                            </fl-link>
                                        </fl-language-switcher-link>
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                    </fl-language-switcher>
                                    <fl-bit _ngcontent-webapp-c80="" class="FooterInfo" _nghost-webapp-c65="" data-margin-bottom="small">
                                        <fl-icon _ngcontent-webapp-c80="" class="FooterInfoIcon" _nghost-webapp-c34="" data-backdrop-style="solid" data-size="mid" data-disabled="false" role="img" data-use-icon-font="false" data-fill-icon-font="false" data-margin-right="xsmall">
                                            <!---->
                                            <div _ngcontent-webapp-c34="" class="IconContainer ng-star-inserted" aria-hidden="true" data-color="light" data-disabled="false" data-drop-shadow="false" data-name="ui-help" data-size="mid"><svg width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                        <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22">
                                                        </polygon>
                                                        <path d="M12,2 C6.486,2 2,6.487 2,12 C2,17.515 6.486,22 12,22 C17.514,22 22,17.515 22,12 C22,6.487 17.514,2 12,2 Z M12,18.25 C11.31,18.25 10.75,17.69 10.75,17 C10.75,16.31 11.31,15.75 12,15.75 C12.69,15.75 13.25,16.31 13.25,17 C13.25,17.69 12.69,18.25 12,18.25 Z M13,13.875 L13,15 L11,15 L11,12 L12,12 C13.104,12 14,11.103 14,10 C14,8.896 13.104,8 12,8 C10.896,8 10,8.896 10,10 L8,10 C8,7.795 9.795,6 12,6 C14.205,6 16,7.795 16,10 C16,11.86 14.723,13.43 13,13.875 Z">
                                                        </path>
                                                    </g>
                                                </svg></div>
                                            <!---->
                                        </fl-icon>
                                        <fl-link _ngcontent-webapp-c80="" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/support" target="_self">
                                                <!----> Help &amp; Support
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                    </fl-bit>
                                    <fl-bit _ngcontent-webapp-c80="" class="FooterInfo" _nghost-webapp-c65="" data-margin-bottom="small">
                                        <fl-icon _ngcontent-webapp-c80="" class="FooterInfoIcon" _nghost-webapp-c34="" data-backdrop-style="solid" data-size="mid" data-disabled="false" role="img" data-use-icon-font="false" data-fill-icon-font="false" data-margin-right="xsmall">
                                            <!---->
                                            <div _ngcontent-webapp-c34="" class="IconContainer ng-star-inserted" aria-hidden="true" data-color="light" data-disabled="false" data-drop-shadow="false" data-name="ui-accessibility" data-size="mid">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 24 24" version="1.1" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                    <path d="M20.5 6c-2.61.7-5.67 1-8.5 1s-5.89-.3-8.5-1L3 8c1.86.5 4 .83 6 1v13h2v-6h2v6h2V9c2-.17 4.14-.5 6-1l-.5-2zM12 6c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <!---->
                                        </fl-icon>
                                        <fl-link _ngcontent-webapp-c80="" id="triggerAccessibility" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!----><button _ngcontent-webapp-c66="" type="button" class="LinkElement ng-star-inserted" tabindex="0" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row">
                                                <!----> Accessibility
                                                <!---->
                                            </button>
                                            <!---->
                                            <!---->
                                        </fl-link>
                                    </fl-bit>
                                </fl-col>
                                <fl-col _ngcontent-webapp-c80="" _nghost-webapp-c69="" data-col-tablet="3" data-col-desktop-small="2" data-flex-container="false">
                                    <fl-text _ngcontent-webapp-c80="" class="FooterTitle" _nghost-webapp-c41="" data-color="light" data-type="span" data-read-more="none" data-margin-bottom="xsmall">
                                        <!----><span _ngcontent-webapp-c41="" class="NativeElement Span ng-star-inserted" data-color="light" data-size="small" data-weight="bold" data-style="normal" data-line-break="false"> Freelancer
                                            <!---->
                                        </span>
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                    </fl-text>
                                    <fl-bit _ngcontent-webapp-c80="" class="FooterNav" _nghost-webapp-c65="" data-margin-bottom="small">
                                        <fl-link _ngcontent-webapp-c80="" link="/job" class="FooterNav-item ng-star-inserted" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/job" target="_self">
                                                <!----> Categories
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <!---->
                                        <fl-link _ngcontent-webapp-c80="" link="/jobs" class="FooterNav-item ng-star-inserted" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/jobs" target="_self">
                                                <!----> Projects
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <!---->
                                        <!---->
                                        <fl-link _ngcontent-webapp-c80="" link="/contest" class="FooterNav-item ng-star-inserted" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/contest" target="_self">
                                                <!----> Contests
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <!---->
                                        <fl-link _ngcontent-webapp-c80="" link="/freelancers" class="FooterNav-item ng-star-inserted" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/freelancers" target="_self">
                                                <!----> Freelancers
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <!---->
                                        <!---->
                                        <fl-link _ngcontent-webapp-c80="" link="/enterprise/" class="FooterNav-item ng-star-inserted" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/enterprise" target="_self">
                                                <!----> Enterprise
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <!---->
                                        <fl-link _ngcontent-webapp-c80="" link="/membership" class="FooterNav-item ng-star-inserted" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/membership" target="_self">
                                                <!----> Membership
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <!---->
                                        <fl-link _ngcontent-webapp-c80="" link="/preferred-freelancer-program" class="FooterNav-item ng-star-inserted" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/preferred-freelancer-program" target="_self">
                                                <!----> Preferred Freelancer Program
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <!---->
                                        <fl-link _ngcontent-webapp-c80="" link="/project-management" class="FooterNav-item ng-star-inserted" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/project-management" target="_self">
                                                <!----> Project Management
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <!---->
                                        <fl-link _ngcontent-webapp-c80="" link="/local" class="FooterNav-item ng-star-inserted" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/local" target="_self">
                                                <!----> Local Jobs
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <!---->
                                        <fl-link _ngcontent-webapp-c80="" link="https://www.photoanywhere.com" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline">
                                            <!---->
                                            <!----><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" href="https://www.photoanywhere.com" tabindex="0" target="_blank" rel=" noopener" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row">
                                                <!----> Photo Anywhere
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <fl-link _ngcontent-webapp-c80="" link="/showcase" class="FooterNav-item ng-star-inserted" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/showcase" target="_self">
                                                <!----> Showcase
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <!---->
                                        <fl-link _ngcontent-webapp-c80="" link="https://developers.freelancer.com" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline">
                                            <!---->
                                            <!----><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" href="https://developers.freelancer.com" tabindex="0" target="_blank" rel=" noopener" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row">
                                                <!----> API for Developers
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <fl-link _ngcontent-webapp-c80="" link="/verified" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/verified" target="_self">
                                                <!----> Get Verified
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <fl-link _ngcontent-webapp-c80="" link="/desktop-app" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/desktop-app" target="_self">
                                                <!----> Desktop App
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                    </fl-bit>
                                </fl-col>
                                <fl-col _ngcontent-webapp-c80="" _nghost-webapp-c69="" data-col-tablet="2" data-flex-container="false">
                                    <fl-text _ngcontent-webapp-c80="" class="FooterTitle" _nghost-webapp-c41="" data-color="light" data-type="span" data-read-more="none" data-margin-bottom="xsmall">
                                        <!----><span _ngcontent-webapp-c41="" class="NativeElement Span ng-star-inserted" data-color="light" data-size="small" data-weight="bold" data-style="normal" data-line-break="false"> About
                                            <!---->
                                        </span>
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                    </fl-text>
                                    <fl-bit _ngcontent-webapp-c80="" class="FooterNav" _nghost-webapp-c65="" data-margin-bottom="small">
                                        <fl-link _ngcontent-webapp-c80="" link="/about" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/about" target="_self">
                                                <!----> About us
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <fl-link _ngcontent-webapp-c80="" link="/info/how-it-works/" class="FooterNav-item ng-star-inserted" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/info/how-it-works" target="_self">
                                                <!----> How it Works
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <!---->
                                        <fl-link _ngcontent-webapp-c80="" link="/about/security" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/about/security" target="_self">
                                                <!----> Security
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <fl-link _ngcontent-webapp-c80="" link="/investor" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/investor" target="_self">
                                                <!----> Investor
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <fl-link _ngcontent-webapp-c80="" link="/sitemap" class="FooterNav-item ng-star-inserted" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/sitemap" target="_self">
                                                <!----> Sitemap
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <!---->
                                        <fl-link _ngcontent-webapp-c80="" link="/about/stories" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/about/stories" target="_self">
                                                <!----> Stories
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <fl-link _ngcontent-webapp-c80="" link="/about/media" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/about/media" target="_self">
                                                <!----> News
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <fl-link _ngcontent-webapp-c80="" link="/about/management" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/about/management" target="_self">
                                                <!----> Team
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <fl-link _ngcontent-webapp-c80="" link="/about/awards" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/about/awards" target="_self">
                                                <!----> Awards
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <fl-link _ngcontent-webapp-c80="" link="/about/press" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/about/press" target="_self">
                                                <!----> Press Releases
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <fl-link _ngcontent-webapp-c80="" link="/careers" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/careers" target="_self">
                                                <!----> Careers
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                    </fl-bit>
                                </fl-col>
                                <fl-col _ngcontent-webapp-c80="" _nghost-webapp-c69="" data-col-tablet="2" data-flex-container="false">
                                    <fl-text _ngcontent-webapp-c80="" class="FooterTitle" _nghost-webapp-c41="" data-color="light" data-type="span" data-read-more="none" data-margin-bottom="xsmall">
                                        <!----><span _ngcontent-webapp-c41="" class="NativeElement Span ng-star-inserted" data-color="light" data-size="small" data-weight="bold" data-style="normal" data-line-break="false"> Terms
                                            <!---->
                                        </span>
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                    </fl-text>
                                    <fl-bit _ngcontent-webapp-c80="" class="FooterNav" _nghost-webapp-c65="" data-margin-bottom="small">
                                        <fl-link _ngcontent-webapp-c80="" link="/about/privacy" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/about/privacy" target="_self">
                                                <!----> Privacy Policy
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <fl-link _ngcontent-webapp-c80="" link="/about/terms" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/about/terms" target="_self">
                                                <!----> Terms and Conditions
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <fl-link _ngcontent-webapp-c80="" link="/dmca" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/dmca" target="_self">
                                                <!----> Copyright Policy
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <fl-link _ngcontent-webapp-c80="" link="/info/codeofconduct" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/info/codeofconduct" target="_self">
                                                <!----> Code of Conduct
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <fl-link _ngcontent-webapp-c80="" link="/feesandcharges" class="FooterNav-item ng-star-inserted" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/feesandcharges" target="_self">
                                                <!----> Fees and Charges
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <!---->
                                    </fl-bit>
                                </fl-col>
                                <fl-col _ngcontent-webapp-c80="" _nghost-webapp-c69="" data-col-tablet="2" data-flex-container="false">
                                    <fl-text _ngcontent-webapp-c80="" class="FooterTitle" _nghost-webapp-c41="" data-color="light" data-type="span" data-read-more="none" data-margin-bottom="xsmall">
                                        <!----><span _ngcontent-webapp-c41="" class="NativeElement Span ng-star-inserted" data-color="light" data-size="small" data-weight="bold" data-style="normal" data-line-break="false"> Partners
                                            <!---->
                                        </span>
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                    </fl-text>
                                    <fl-bit _ngcontent-webapp-c80="" class="FooterNav" _nghost-webapp-c65="" data-margin-bottom="small">
                                        <fl-link _ngcontent-webapp-c80="" link="https://www.escrow.com" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline">
                                            <!---->
                                            <!----><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" href="https://www.escrow.com" tabindex="0" target="_blank" rel=" noopener" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row">
                                                <!----> Escrow.com
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <fl-link _ngcontent-webapp-c80="" link="https://www.loadshift.com.au" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline">
                                            <!---->
                                            <!----><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" href="https://www.loadshift.com.au" tabindex="0" target="_blank" rel=" noopener" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row">
                                                <!----> Loadshift
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <fl-link _ngcontent-webapp-c80="" link="https://www.warriorforum.com" class="FooterNav-item" _nghost-webapp-c66="" data-color="light" data-hover-color="light" data-weight="inherit" data-size="xsmall" data-display="inline">
                                            <!---->
                                            <!----><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" href="https://www.warriorforum.com" tabindex="0" target="_blank" rel=" noopener" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row">
                                                <!----> Warrior Forum
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                    </fl-bit>
                                </fl-col>
                                <fl-col _ngcontent-webapp-c80="" _nghost-webapp-c69="" data-col-tablet="3" data-col-desktop-small="2" data-flex-container="false" class="ng-star-inserted">
                                    <fl-text _ngcontent-webapp-c80="" class="FooterTitle" _nghost-webapp-c41="" data-color="light" data-type="span" data-read-more="none" data-margin-bottom="xsmall">
                                        <!----><span _ngcontent-webapp-c41="" class="NativeElement Span ng-star-inserted" data-color="light" data-size="small" data-weight="bold" data-style="normal" data-line-break="false"> Apps
                                            <!---->
                                        </span>
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                    </fl-text>
                                    <fl-bit _ngcontent-webapp-c80="" class="FooterAppStoreIcons" _nghost-webapp-c65="">
                                        <fl-link _ngcontent-webapp-c80="" class="FooterMobileLink" _nghost-webapp-c66="" data-color="default" data-hover-color="default" data-weight="inherit" data-size="xsmall" data-display="inline" data-margin-right="small" data-margin-bottom="mid" data-margin-right-tablet="none"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/download" target="_self">
                                                <!---->
                                                <fl-picture _ngcontent-webapp-c80="" alt="Apple App Store logo" _nghost-webapp-c35="" data-display="block" data-aspect-ratio="false" data-is-bg-image="false" class="ng-star-inserted"><img _ngcontent-webapp-c35="" class="ImageElement IsShown ng-star-inserted" alt="Apple App Store logo" data-aspect-ratio="false" data-border-radius-bottom="false" data-border-radius-top="false" data-display="block" data-is-bg-image="false" height="40" loading="lazy" width="135" srcset="https://www.f-cdn.com/assets/main/en/assets/footer/app-store.svg" src="https://www.f-cdn.com/assets/main/en/assets/footer/app-store.svg">
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-picture>
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                        <fl-link _ngcontent-webapp-c80="" class="FooterMobileLink" _nghost-webapp-c66="" data-color="default" data-hover-color="default" data-weight="inherit" data-size="xsmall" data-display="inline" data-margin-bottom="mid"><a _ngcontent-webapp-c66="" class="LinkElement ng-star-inserted" tabindex="0" rel="" data-underline="hover" data-display="inline" data-icon="false" data-icon-position="left" data-flex-direction="row" href="/download" target="_self">
                                                <!---->
                                                <fl-picture _ngcontent-webapp-c80="" alt="Google Play logo" _nghost-webapp-c35="" data-display="block" data-aspect-ratio="false" data-is-bg-image="false" class="ng-star-inserted"><img _ngcontent-webapp-c35="" class="ImageElement IsShown ng-star-inserted" alt="Google Play logo" data-aspect-ratio="false" data-border-radius-bottom="false" data-border-radius-top="false" data-display="block" data-is-bg-image="false" height="40" loading="lazy" width="135" srcset="https://www.f-cdn.com/assets/main/en/assets/footer/google-play.svg" src="https://www.f-cdn.com/assets/main/en/assets/footer/google-play.svg">
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-picture>
                                                <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </fl-link>
                                    </fl-bit>
                                    <fl-social-buttons _ngcontent-webapp-c80="" class="FooterSocialIcons" _nghost-webapp-c72="" data-fluid="true" data-type="icon" role="list">
                                        <div _ngcontent-webapp-c72="" role="listitem" class="SocialButtonItem ng-star-inserted" data-margin-right="xxxsmall">
                                            <fl-button _ngcontent-webapp-c72="" class="SocialButton SocialButton--facebook" _nghost-webapp-c38="" data-type="icon" data-theme="light" data-display="inline">
                                                <!----><a _ngcontent-webapp-c38="" tabindex="0" aria-live="assertive" class="ButtonElement ng-star-inserted" href="https://facebook.com/fansoffreelancer" rel=" noopener" target="_blank" data-display="inline">
                                                    <!---->
                                                    <!---->
                                                    <fl-icon _ngcontent-webapp-c72="" label="Facebook" _nghost-webapp-c34="" aria-label="Facebook" data-backdrop-style="solid" data-size="mid" data-disabled="false" role="img" data-use-icon-font="false" data-fill-icon-font="false" class="ng-star-inserted">
                                                        <!---->
                                                        <div _ngcontent-webapp-c34="" class="IconContainer ng-star-inserted" aria-hidden="true" data-color="inherit" data-disabled="false" data-drop-shadow="false" data-hover-color="currentColor" data-name="ui-facebook" data-size="mid" title="Facebook">
                                                            <svg width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                                    <polygon opacity="0" fill="none" points="2 2 22 2 22 22 2 22"></polygon>
                                                                    <path d="M22,12 C22,6.47714844 17.5228516,2 12,2 C6.47714844,2 2,6.47714844 2,12 C2,16.9912891 5.65685547,21.1283203 10.4375,21.8785156 L10.4375,14.890625 L7.8984375,14.890625 L7.8984375,12 L10.4375,12 L10.4375,9.796875 C10.4375,7.290625 11.9304297,5.90625 14.2146484,5.90625 C15.3087305,5.90625 16.453125,6.1015625 16.453125,6.1015625 L16.453125,8.5625 L15.1921484,8.5625 C13.9499023,8.5625 13.5625,9.33333984 13.5625,10.1241602 L13.5625,12 L16.3359375,12 L15.8925781,14.890625 L13.5625,14.890625 L13.5625,21.8785156 C18.3431445,21.1283203 22,16.9912891 22,12">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <!---->
                                                    </fl-icon>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </a>
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                            </fl-button>
                                        </div>
                                        <!---->
                                        <div _ngcontent-webapp-c72="" role="listitem" class="SocialButtonItem ng-star-inserted" data-margin-right="xxxsmall">
                                            <fl-button _ngcontent-webapp-c72="" class="SocialButton SocialButton--twitter" _nghost-webapp-c38="" data-type="icon" data-theme="light" data-display="inline">
                                                <!----><a _ngcontent-webapp-c38="" tabindex="0" aria-live="assertive" class="ButtonElement ng-star-inserted" href="https://twitter.com/freelancer" rel=" noopener" target="_blank" data-display="inline">
                                                    <!---->
                                                    <!---->
                                                    <fl-icon _ngcontent-webapp-c72="" label="Twitter" _nghost-webapp-c34="" aria-label="Twitter" data-backdrop-style="solid" data-size="mid" data-disabled="false" role="img" data-use-icon-font="false" data-fill-icon-font="false" class="ng-star-inserted">
                                                        <!---->
                                                        <div _ngcontent-webapp-c34="" class="IconContainer ng-star-inserted" aria-hidden="true" data-color="inherit" data-disabled="false" data-drop-shadow="false" data-hover-color="currentColor" data-name="ui-twitter" data-size="mid" title="Twitter"><svg width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                                    <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                                                    <path d="M8.28948705,20.2519045 C5.97359066,20.2519045 3.81615033,19.5733875 2,18.4083291 C4.17775521,18.6642966 6.34941595,18.0609446 8.07414931,16.7100051 C6.27831386,16.6754698 4.76282377,15.4890808 4.24276282,13.8598273 C4.8857288,13.9817166 5.51853733,13.9461656 6.0944642,13.7887252 C4.12188928,13.3925851 2.76079228,11.615033 2.80345353,9.71559167 C3.35703403,10.0223464 3.99187405,10.2072118 4.66226511,10.2285424 C2.83494159,9.00761808 2.31792788,6.595226 3.39156932,4.7496191 C5.41493144,7.23209751 8.43981717,8.86642966 11.8486541,9.03605891 C11.2493652,6.47232098 13.1975622,4 15.8445912,4 C17.0259015,4 18.091417,4.49771458 18.8410361,5.29608939 C19.7755206,5.11325546 20.6541392,4.77094972 21.4464195,4.30066023 C21.1416963,5.2595226 20.4895886,6.06399187 19.6434738,6.57084815 C20.4733367,6.47232098 21.2646013,6.25190452 22,5.92585069 C21.4494667,6.74555612 20.7526663,7.46978162 19.95226,8.04672423 C20.2122905,13.8171661 15.9095988,20.2519045 8.28948705,20.2519045 Z">
                                                                    </path>
                                                                </g>
                                                            </svg></div>
                                                        <!---->
                                                    </fl-icon>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </a>
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                            </fl-button>
                                        </div>
                                        <!---->
                                        <div _ngcontent-webapp-c72="" role="listitem" class="SocialButtonItem ng-star-inserted" data-margin-right="xxxsmall">
                                            <fl-button _ngcontent-webapp-c72="" class="SocialButton SocialButton--youtube" _nghost-webapp-c38="" data-type="icon" data-theme="light" data-display="inline">
                                                <!----><a _ngcontent-webapp-c38="" tabindex="0" aria-live="assertive" class="ButtonElement ng-star-inserted" href="https://youtube.com/freelancerchannel" rel=" noopener" target="_blank" data-display="inline">
                                                    <!---->
                                                    <fl-icon _ngcontent-webapp-c72="" label="YouTube" _nghost-webapp-c34="" aria-label="YouTube" data-backdrop-style="solid" data-size="mid" data-disabled="false" role="img" data-use-icon-font="false" data-fill-icon-font="false" class="ng-star-inserted">
                                                        <!---->
                                                        <div _ngcontent-webapp-c34="" class="IconContainer ng-star-inserted" aria-hidden="true" data-color="inherit" data-disabled="false" data-drop-shadow="false" data-hover-color="currentColor" data-name="ui-youtube" data-size="mid" title="YouTube"><svg width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                                <g transform="translate(2.000000, 5.000000)" fill-rule="nonzero" stroke="none" stroke-width="1">
                                                                    <path d="M16.3458333,0.153435525 C13.3425,-0.0515616237 6.65333333,-0.0507283019 3.65416667,0.153435525 C0.406666667,0.375099108 0.0241666667,2.33673849 0,7.5 C0.0241666667,12.654095 0.403333333,14.6240676 3.65416667,14.8465645 C6.65416667,15.0507283 13.3425,15.0515616 16.3458333,14.8465645 C19.5933333,14.6249009 19.9758333,12.6632615 20,7.5 C19.9758333,2.34590503 19.5966667,0.37593243 16.3458333,0.153435525 Z M7.5,10.833287 L7.5,4.16671303 L14.1666667,7.49416675 L7.5,10.833287 L7.5,10.833287 Z">
                                                                    </path>
                                                                </g>
                                                            </svg></div>
                                                        <!---->
                                                    </fl-icon>
                                                    <!---->
                                                    <!---->
                                                </a>
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                            </fl-button>
                                        </div>
                                        <!---->
                                        <div _ngcontent-webapp-c72="" role="listitem" class="SocialButtonItem ng-star-inserted" data-margin-right="xxxsmall">
                                            <fl-button _ngcontent-webapp-c72="" class="SocialButton SocialButton--instagram" _nghost-webapp-c38="" data-type="icon" data-theme="light" data-display="inline">
                                                <!----><a _ngcontent-webapp-c38="" tabindex="0" aria-live="assertive" class="ButtonElement ng-star-inserted" href="https://instagram.com/freelancerofficial" rel=" noopener" target="_blank" data-display="inline">
                                                    <!---->
                                                    <fl-icon _ngcontent-webapp-c72="" label="Instagram" _nghost-webapp-c34="" aria-label="Instagram" data-backdrop-style="solid" data-size="mid" data-disabled="false" role="img" data-use-icon-font="false" data-fill-icon-font="false" class="ng-star-inserted">
                                                        <!---->
                                                        <div _ngcontent-webapp-c34="" class="IconContainer ng-star-inserted" aria-hidden="true" data-color="inherit" data-disabled="false" data-drop-shadow="false" data-hover-color="currentColor" data-name="ui-instagram" data-size="mid" title="Instagram">
                                                            <svg width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                                    <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                                                    <path d="M15.3333333,12 C15.3333333,13.8411111 13.8411111,15.3333333 12,15.3333333 C10.1588889,15.3333333 8.66666667,13.8422222 8.66666667,12 C8.66666667,10.1588889 10.1588889,8.66666667 12,8.66666667 C13.8411111,8.66666667 15.3333333,10.1588889 15.3333333,12 Z M20.1411111,7.96 C20.1888889,9.01333333 20.1988889,9.33 20.1988889,12 C20.1988889,14.67 20.1877778,14.9866667 20.14,16.0411111 C20.0155556,18.73 18.7533333,20.0188889 16.04,20.1411111 C14.9866667,20.1877778 14.67,20.1988889 11.9988889,20.1988889 C9.32888889,20.1988889 9.01,20.1877778 7.95888889,20.14 C5.24111111,20.0177778 3.98111111,18.7255556 3.85888889,16.04 C3.81111111,14.9844444 3.8,14.6688889 3.8,11.9988889 C3.8,9.32888889 3.81111111,9.01222222 3.86,7.95888889 C3.98222222,5.27 5.24666667,3.98111111 7.96,3.85888889 C9.01333333,3.81111111 9.33,3.80111111 12,3.80111111 C14.67,3.80111111 14.9888889,3.81222222 16.0411111,3.85888889 C18.7522222,3.98111111 20.0166667,5.27 20.1411111,7.95888889 L20.1411111,7.96 Z M17.1333333,12 C17.1355556,9.16333333 14.8333333,6.86444444 12,6.86444444 C9.16333333,6.86444444 6.86444444,9.16444444 6.86444444,12 C6.86444444,14.8366667 9.16444444,17.1355556 12,17.1355556 C14.8366667,17.1355556 17.1355556,14.8355556 17.1355556,12 L17.1333333,12 Z M18.5377778,6.66222222 C18.5377778,6 18,5.46222222 17.3377778,5.46222222 C16.6755556,5.46222222 16.1377778,6 16.1377778,6.66222222 C16.1377778,7.32555556 16.6744444,7.86222222 17.3377778,7.86222222 C18.0011111,7.86222222 18.5377778,7.32555556 18.5377778,6.66222222 Z M22,12 C22,9.28444444 21.9888889,8.94444444 21.94,7.87777778 C21.7766667,4.25 19.7588889,2.22777778 16.1233333,2.06111111 C15.0555556,2.01111111 14.7177778,2 12,2 C9.28333333,2 8.94444444,2.01111111 7.87777778,2.06 C4.24444444,2.22666667 2.22777778,4.24111111 2.06,7.87666667 C2.01111111,8.94444444 2,9.28444444 2,12 C2,14.7166667 2.01111111,15.0555556 2.06,16.1222222 C2.22666667,19.7555556 4.24222222,21.7733333 7.87777778,21.94 C8.94444444,21.9888889 9.28333333,22 12,22 C14.7166667,22 15.0555556,21.9888889 16.1222222,21.94 C19.7511111,21.7733333 21.7777778,19.7588889 21.94,16.1222222 C21.9888889,15.0555556 22,14.7166667 22,12 Z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <!---->
                                                    </fl-icon>
                                                    <!---->
                                                    <!---->
                                                </a>
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                            </fl-button>
                                        </div>
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <fl-toast-alert _ngcontent-webapp-c72="" _nghost-webapp-c54="" class="ng-tns-c54-10 ng-star-inserted">
                                            <div _ngcontent-webapp-c54="" class="ToastAlert ng-tns-c54-10 ng-trigger ng-trigger-toggleElement" data-type="error" data-color="light" style="opacity: 0; transform: translateY(-12px);">
                                                <!---->
                                                <fl-icon _ngcontent-webapp-c54="" class="ToastAlert-icon ng-tns-c54-10 ng-star-inserted" _nghost-webapp-c34="" data-backdrop-style="solid" data-size="small" data-disabled="false" role="img" data-use-icon-font="true" data-fill-icon-font="false" data-margin-right="xsmall" style="">
                                                    <span _ngcontent-webapp-c34="" class="IconFont ng-star-inserted" data-color="inherit" data-disabled="false" data-drop-shadow="false" data-name="ui-error" data-role="img" data-size="small" data-use-icon-font="true" data-weight="normal" aria-hidden="true"></span>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-icon>
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <fl-text _ngcontent-webapp-c54="" class="ToastAlert-content ng-tns-c54-10" _nghost-webapp-c41="" data-closeable="false" data-color="dark" data-type="paragraph" data-read-more="none" data-margin-right="none">
                                                    <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="dark" data-size="xsmall" data-weight="normal" data-style="normal" data-line-break="false" style=""> Copy to clipboard failed,
                                                        please try again after adjusting your permissions.
                                                        <!---->
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-text>
                                                <!---->
                                            </div>
                                        </fl-toast-alert>
                                        <fl-toast-alert _ngcontent-webapp-c72="" _nghost-webapp-c54="" class="ng-tns-c54-11 ng-star-inserted">
                                            <div _ngcontent-webapp-c54="" class="ToastAlert ng-tns-c54-11 ng-trigger ng-trigger-toggleElement" data-type="success" data-color="light" style="opacity: 0; transform: translateY(-12px);">
                                                <!---->
                                                <!---->
                                                <fl-icon _ngcontent-webapp-c54="" class="ToastAlert-icon ng-tns-c54-11 ng-star-inserted" _nghost-webapp-c34="" data-backdrop-style="solid" data-size="small" data-disabled="false" role="img" data-use-icon-font="true" data-fill-icon-font="false" data-margin-right="xsmall" style="">
                                                    <span _ngcontent-webapp-c34="" class="IconFont ng-star-inserted" data-color="inherit" data-disabled="false" data-drop-shadow="false" data-name="ui-check-in-circle-v2" data-role="img" data-size="small" data-use-icon-font="true" data-weight="normal" aria-hidden="true"></span>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-icon>
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <fl-text _ngcontent-webapp-c54="" class="ToastAlert-content ng-tns-c54-11" _nghost-webapp-c41="" data-closeable="false" data-color="dark" data-type="paragraph" data-read-more="none" data-margin-right="none">
                                                    <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="dark" data-size="xsmall" data-weight="normal" data-style="normal" data-line-break="false" style=""> Copied to clipboard.
                                                        <!---->
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </fl-text>
                                                <!---->
                                            </div>
                                        </fl-toast-alert>
                                    </fl-social-buttons>
                                </fl-col>
                                <!---->
                            </fl-grid>
                        </fl-container>
                    </div>
                    <div _ngcontent-webapp-c80="" class="FooterSection">
                        <fl-container _ngcontent-webapp-c80="" _nghost-webapp-c32="" size="desktop-large" data-mobile-padding="true" data-padding="true" data-support-notch="true">
                            <fl-grid _ngcontent-webapp-c80="" class="FooterBordered" _nghost-webapp-c70="" data-overflow="false">
                                <fl-col _ngcontent-webapp-c80="" _nghost-webapp-c69="" data-col="3" data-col-tablet="6" data-col-desktop-small="3" data-flex-container="false" data-margin-bottom-tablet="small" data-margin-bottom-desktop="none">
                                    <fl-text _ngcontent-webapp-c80="" class="FooterStats" _nghost-webapp-c41="" data-color="light" data-type="span" data-read-more="none" data-margin-right="xxsmall">
                                        <!----><span _ngcontent-webapp-c41="" class="NativeElement Span ng-star-inserted" data-color="light" data-size="xsmall" data-weight="bold" data-style="normal" data-line-break="false"> 72,617,941
                                            <!---->
                                        </span>
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                    </fl-text><span _ngcontent-webapp-c80="" class="FooterStatsCopy"> Registered Users
                                    </span>
                                </fl-col>
                                <fl-col _ngcontent-webapp-c80="" _nghost-webapp-c69="" data-col="3" data-col-tablet="6" data-col-desktop-small="3" data-flex-container="false" data-margin-bottom-tablet="small" data-margin-bottom-desktop="none">
                                    <fl-text _ngcontent-webapp-c80="" class="FooterStats" _nghost-webapp-c41="" data-color="light" data-type="span" data-read-more="none" data-margin-right="xxsmall">
                                        <!----><span _ngcontent-webapp-c41="" class="NativeElement Span ng-star-inserted" data-color="light" data-size="xsmall" data-weight="bold" data-style="normal" data-line-break="false"> 23,633,634
                                            <!---->
                                        </span>
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                    </fl-text><span _ngcontent-webapp-c80="" class="FooterStatsCopy"> Total Jobs Posted
                                    </span>
                                </fl-col>
                                <fl-col _ngcontent-webapp-c80="" _nghost-webapp-c69="" data-col-tablet="6" data-flex-container="false">
                                    <fl-text _ngcontent-webapp-c80="" _nghost-webapp-c41="" data-color="light" data-type="paragraph" data-read-more="none">
                                        <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="light" data-size="xxxsmall" data-weight="normal" data-style="normal" data-line-break="false"> Freelancer ® is a registered Trademark of
                                            Freelancer Technology Pty Limited (ACN 142 189 759)
                                            <!---->
                                        </div>
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                    </fl-text>
                                    <fl-text _ngcontent-webapp-c80="" _nghost-webapp-c41="" data-color="light" data-type="paragraph" data-read-more="none">
                                        <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="light" data-size="xxxsmall" data-weight="normal" data-style="normal" data-line-break="false"> Copyright © 2024 Freelancer Technology Pty Limited
                                            (ACN 142 189 759)
                                            <!---->
                                        </div>
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                    </fl-text>
                                </fl-col>
                            </fl-grid>
                        </fl-container>
                    </div>
                </app-footer-freelancer>
                <!---->
                <!---->
            </app-footer>
            <!---->
            <fl-file-download-alert _ngcontent-webapp-c118="" _nghost-webapp-c68="">
                <!---->
            </fl-file-download-alert>
        </app-logged-out-shell>
        <!---->
        <fl-tracking class="ng-star-inserted">
            <fl-page-view-tracking>
                <!---->
            </fl-page-view-tracking>
            <fl-navigation-performance-tracking>
                <!---->
            </fl-navigation-performance-tracking>
            <fl-memory-tracking>
                <!---->
            </fl-memory-tracking>
            <fl-synthetic-performance-tracking>
                <!---->
            </fl-synthetic-performance-tracking>
            <fl-core-web-vitals-tracking>
                <!---->
            </fl-core-web-vitals-tracking>
            <fl-long-task-tracking>
                <!---->
            </fl-long-task-tracking>
            <fl-tracking-hotjar-user-attributes>
                <!---->
            </fl-tracking-hotjar-user-attributes>
            <fl-translation-usage-tracking _nghost-webapp-c51="">
                <div _ngcontent-webapp-c51="" id="translation-tracking" class="TranslationText"> Translation trigger for
                    this page to tell when this text has been translated by a third party </div>
            </fl-translation-usage-tracking>
        </fl-tracking>
        <!---->
        <fl-error-tracking>
            <!---->
        </fl-error-tracking>
        <fl-location>
            <!---->
        </fl-location>
        <fl-modal _nghost-webapp-c43="" class="ng-tns-c43-0">
            <div _ngcontent-webapp-c43="" cdkscrollable="" class="ModalContainer ng-tns-c43-0 ng-trigger ng-trigger-paneAnimation ng-animate-disabled" data-active="false" data-color="light" data-mobile-fullscreen="false">
                <div _ngcontent-webapp-c43="" class="ModalDialog ng-tns-c43-0" data-size="large" data-mobile-fullscreen="false">
                    <div _ngcontent-webapp-c43="" class="ModalContent ng-tns-c43-0" data-edge-to-edge="false" data-color="light" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </div>
            </div>
        </fl-modal>
        <fl-network-alert>
            <fl-toast-alert _nghost-webapp-c54="" class="ng-tns-c54-1">
                <div _ngcontent-webapp-c54="" class="ToastAlert ng-tns-c54-1 ng-trigger ng-trigger-toggleElement" data-type="error" data-color="dark" style="opacity: 0; transform: translateY(-12px);">
                    <!---->
                    <fl-icon _ngcontent-webapp-c54="" class="ToastAlert-icon ng-tns-c54-1 ng-star-inserted" _nghost-webapp-c34="" data-backdrop-style="solid" data-size="small" data-disabled="false" role="img" data-use-icon-font="true" data-fill-icon-font="false" data-margin-right="xsmall" style=""><span _ngcontent-webapp-c34="" class="IconFont ng-star-inserted" data-color="inherit" data-disabled="false" data-drop-shadow="false" data-name="ui-error" data-role="img" data-size="small" data-use-icon-font="true" data-weight="normal" aria-hidden="true"></span>
                        <!---->
                        <!---->
                        <!---->
                    </fl-icon>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <fl-text _ngcontent-webapp-c54="" class="ToastAlert-content ng-tns-c54-1" _nghost-webapp-c41="" data-closeable="true" data-color="light" data-type="paragraph" data-read-more="none" data-margin-right="xsmall">
                        <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="light" data-size="xsmall" data-weight="normal" data-style="normal" data-line-break="false" style="">
                            <!---->
                        </div>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                    </fl-text>
                    <fl-button _ngcontent-webapp-c54="" aria-label="Close toast alert" class="ToastAlert-closeBtn ng-tns-c54-1 ng-star-inserted" _nghost-webapp-c38="" data-display="inline" style="">
                        <!---->
                        <!---->
                        <!----><button _ngcontent-webapp-c38="" tabindex="0" aria-live="assertive" class="ButtonElement ng-star-inserted" type="button" data-display="inline">
                            <!---->
                            <fl-icon _ngcontent-webapp-c54="" _nghost-webapp-c34="" data-backdrop-style="solid" data-size="small" data-disabled="false" role="img" data-use-icon-font="false" data-fill-icon-font="false" class="ng-star-inserted">
                                <!---->
                                <div _ngcontent-webapp-c34="" class="IconContainer ng-star-inserted" aria-hidden="true" data-color="light" data-disabled="false" data-drop-shadow="false" data-name="ui-close" data-size="small"><svg width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                            <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                            <polyline points="22 3.62398071 20.3760193 2 12 10.3760193 3.62398071 2 2 3.62398071 10.3760193 12 2 20.3760193 3.62398071 22 12 13.6239807 20.3760193 22 22 20.3760193 13.6239807 12">
                                            </polyline>
                                        </g>
                                    </svg></div>
                                <!---->
                            </fl-icon>
                            <!---->
                            <!---->
                        </button>
                        <!---->
                        <!---->
                        <!---->
                    </fl-button>
                    <!---->
                </div>
            </fl-toast-alert>
        </fl-network-alert>
        <fl-notifications></fl-notifications>
        <fl-update-native-alert></fl-update-native-alert>
        <fl-toast-alert-global>
            <fl-toast-alert _nghost-webapp-c54="" class="ng-tns-c54-2">
                <div _ngcontent-webapp-c54="" class="ToastAlert ng-tns-c54-2 ng-trigger ng-trigger-toggleElement" data-type="loading" data-color="light" style="opacity: 0; transform: translateY(-12px);">
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <fl-spinner _ngcontent-webapp-c54="" class="ToastAlert-loader ng-tns-c54-2 ng-star-inserted" _nghost-webapp-c36="" data-background="light" data-margin-right="xsmall" style="">
                        <div _ngcontent-webapp-c36="" role="presentation" class="Spinner" data-color="gray" data-size="small" data-type="default">
                            <!---->
                        </div>
                    </fl-spinner>
                    <!---->
                    <!---->
                    <fl-text _ngcontent-webapp-c54="" class="ToastAlert-content ng-tns-c54-2" _nghost-webapp-c41="" data-closeable="true" data-color="dark" data-type="paragraph" data-read-more="none" data-margin-right="xsmall">
                        <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="dark" data-size="xsmall" data-weight="normal" data-style="normal" data-line-break="false" style=""> Loading preview
                            <!---->
                        </div>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                    </fl-text>
                    <fl-button _ngcontent-webapp-c54="" aria-label="Close toast alert" class="ToastAlert-closeBtn ng-tns-c54-2 ng-star-inserted" _nghost-webapp-c38="" data-display="inline" style="">
                        <!---->
                        <!---->
                        <!----><button _ngcontent-webapp-c38="" tabindex="0" aria-live="assertive" class="ButtonElement ng-star-inserted" type="button" data-display="inline">
                            <!---->
                            <fl-icon _ngcontent-webapp-c54="" _nghost-webapp-c34="" data-backdrop-style="solid" data-size="small" data-disabled="false" role="img" data-use-icon-font="false" data-fill-icon-font="false" class="ng-star-inserted">
                                <!---->
                                <div _ngcontent-webapp-c34="" class="IconContainer ng-star-inserted" aria-hidden="true" data-color="foreground" data-disabled="false" data-drop-shadow="false" data-name="ui-close" data-size="small"><svg width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                            <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                            <polyline points="22 3.62398071 20.3760193 2 12 10.3760193 3.62398071 2 2 3.62398071 10.3760193 12 2 20.3760193 3.62398071 22 12 13.6239807 20.3760193 22 22 20.3760193 13.6239807 12">
                                            </polyline>
                                        </g>
                                    </svg></div>
                                <!---->
                            </fl-icon>
                            <!---->
                            <!---->
                        </button>
                        <!---->
                        <!---->
                        <!---->
                    </fl-button>
                    <!---->
                </div>
            </fl-toast-alert>
            <fl-toast-alert _nghost-webapp-c54="" class="ng-tns-c54-3">
                <div _ngcontent-webapp-c54="" class="ToastAlert ng-tns-c54-3 ng-trigger ng-trigger-toggleElement" data-type="success" data-color="light" style="opacity: 0; transform: translateY(-12px);">
                    <!---->
                    <!---->
                    <fl-icon _ngcontent-webapp-c54="" class="ToastAlert-icon ng-tns-c54-3 ng-star-inserted" _nghost-webapp-c34="" data-backdrop-style="solid" data-size="small" data-disabled="false" role="img" data-use-icon-font="true" data-fill-icon-font="false" data-margin-right="xsmall" style=""><span _ngcontent-webapp-c34="" class="IconFont ng-star-inserted" data-color="inherit" data-disabled="false" data-drop-shadow="false" data-name="ui-check-in-circle-v2" data-role="img" data-size="small" data-use-icon-font="true" data-weight="normal" aria-hidden="true"></span>
                        <!---->
                        <!---->
                        <!---->
                    </fl-icon>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <fl-text _ngcontent-webapp-c54="" class="ToastAlert-content ng-tns-c54-3" _nghost-webapp-c41="" data-closeable="true" data-color="dark" data-type="paragraph" data-read-more="none" data-margin-right="xsmall">
                        <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="dark" data-size="xsmall" data-weight="normal" data-style="normal" data-line-break="false" style=""> Permission granted for Geolocation.
                            <!---->
                        </div>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                    </fl-text>
                    <fl-button _ngcontent-webapp-c54="" aria-label="Close toast alert" class="ToastAlert-closeBtn ng-tns-c54-3 ng-star-inserted" _nghost-webapp-c38="" data-display="inline" style="">
                        <!---->
                        <!---->
                        <!----><button _ngcontent-webapp-c38="" tabindex="0" aria-live="assertive" class="ButtonElement ng-star-inserted" type="button" data-display="inline">
                            <!---->
                            <fl-icon _ngcontent-webapp-c54="" _nghost-webapp-c34="" data-backdrop-style="solid" data-size="small" data-disabled="false" role="img" data-use-icon-font="false" data-fill-icon-font="false" class="ng-star-inserted">
                                <!---->
                                <div _ngcontent-webapp-c34="" class="IconContainer ng-star-inserted" aria-hidden="true" data-color="foreground" data-disabled="false" data-drop-shadow="false" data-name="ui-close" data-size="small"><svg width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                            <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                            <polyline points="22 3.62398071 20.3760193 2 12 10.3760193 3.62398071 2 2 3.62398071 10.3760193 12 2 20.3760193 3.62398071 22 12 13.6239807 20.3760193 22 22 20.3760193 13.6239807 12">
                                            </polyline>
                                        </g>
                                    </svg></div>
                                <!---->
                            </fl-icon>
                            <!---->
                            <!---->
                        </button>
                        <!---->
                        <!---->
                        <!---->
                    </fl-button>
                    <!---->
                </div>
            </fl-toast-alert>
            <fl-toast-alert _nghost-webapp-c54="" class="ng-tns-c54-4">
                <div _ngcontent-webapp-c54="" class="ToastAlert ng-tns-c54-4 ng-trigger ng-trigger-toggleElement" data-type="warning" data-color="light" style="opacity: 0; transform: translateY(-12px);">
                    <!---->
                    <!---->
                    <!---->
                    <fl-icon _ngcontent-webapp-c54="" class="ToastAlert-icon ng-tns-c54-4 ng-star-inserted" _nghost-webapp-c34="" data-backdrop-style="solid" data-size="small" data-disabled="false" role="img" data-use-icon-font="true" data-fill-icon-font="false" data-margin-right="xsmall" style=""><span _ngcontent-webapp-c34="" class="IconFont ng-star-inserted" data-color="inherit" data-disabled="false" data-drop-shadow="false" data-name="ui-warning" data-role="img" data-size="small" data-use-icon-font="true" data-weight="normal" aria-hidden="true"></span>
                        <!---->
                        <!---->
                        <!---->
                    </fl-icon>
                    <!---->
                    <!---->
                    <!---->
                    <fl-text _ngcontent-webapp-c54="" class="ToastAlert-content ng-tns-c54-4" _nghost-webapp-c41="" data-closeable="true" data-color="dark" data-type="paragraph" data-read-more="none" data-margin-right="xsmall">
                        <div _ngcontent-webapp-c41="" role="paragraph" class="NativeElement ng-star-inserted" data-color="dark" data-size="xsmall" data-weight="normal" data-style="normal" data-line-break="false" style=""> Your login session has expired and you have been logged
                            out. Please log in again.
                            <!---->
                        </div>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                    </fl-text>
                    <fl-button _ngcontent-webapp-c54="" aria-label="Close toast alert" class="ToastAlert-closeBtn ng-tns-c54-4 ng-star-inserted" _nghost-webapp-c38="" data-display="inline" style="">
                        <!---->
                        <!---->
                        <!----><button _ngcontent-webapp-c38="" tabindex="0" aria-live="assertive" class="ButtonElement ng-star-inserted" type="button" data-display="inline">
                            <!---->
                            <fl-icon _ngcontent-webapp-c54="" _nghost-webapp-c34="" data-backdrop-style="solid" data-size="small" data-disabled="false" role="img" data-use-icon-font="false" data-fill-icon-font="false" class="ng-star-inserted">
                                <!---->
                                <div _ngcontent-webapp-c34="" class="IconContainer ng-star-inserted" aria-hidden="true" data-color="foreground" data-disabled="false" data-drop-shadow="false" data-name="ui-close" data-size="small"><svg width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                            <polygon fill="none" opacity="0" points="2 2 22 2 22 22 2 22"></polygon>
                                            <polyline points="22 3.62398071 20.3760193 2 12 10.3760193 3.62398071 2 2 3.62398071 10.3760193 12 2 20.3760193 3.62398071 22 12 13.6239807 20.3760193 22 22 20.3760193 13.6239807 12">
                                            </polyline>
                                        </g>
                                    </svg></div>
                                <!---->
                            </fl-icon>
                            <!---->
                            <!---->
                        </button>
                        <!---->
                        <!---->
                        <!---->
                    </fl-button>
                    <!---->
                </div>
            </fl-toast-alert>
        </fl-toast-alert-global>
        <fl-theme></fl-theme>
    </app-root>

    <noscript>Please enable JavaScript to continue using this application.</noscript>

    <div class="cdk-overlay-container" style="z-index: 9001;"></div>
</body>
<script>
    $(document).ready(function() {
        $('.NativeElement').find("p img").width(300);
    });
</script>

</html>
@endsection