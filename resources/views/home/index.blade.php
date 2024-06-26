@extends('layouts.app-master')

@section('content')

<head>
    <style>
        .select2-container .select2-selection--single {
            border: none !important;
        }

        .padding-top-bottom {
            padding-top: 13px !important;
            padding-bottom: 12px !important;
        }

        select {
            border: none;
            /* Optionally, you can also remove the outline */
            outline: none;
            background-color: #F0F0F0;

        }

        option {
            /* For some browsers, like Chrome, you might need to explicitly set border to none for options */
            border: none;
        }

        .tag::after {
            content: "" !important;
            display: inline-block;
            margin-left: 8px;
        }

        .tag {
            background-color: azure;
            border: 1px solid;
            padding: 5px;
        }
    </style>

    <!-- Critical path meta tags only -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('home.partials.meta')


    <!-- Google Experiment. ga_exp.js is special, don't include any script in the head! -->


    <!-- Font face handling for an FOFT rendering approach -->


    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&amp;display=swap" rel="stylesheet" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak {
            display: none !important;
        }
    </style>


    <!-- Critical CSS -->

    <script>
        function onStylesheetLoad(linkEl) {
            function listener() {
                if (/^(?:interactive|complete)$/.test(document.readyState)) {
                    document.removeEventListener('DOMContentLoaded', listener);
                    linkEl.rel = 'stylesheet';
                }
            };
            document.addEventListener('DOMContentLoaded', listener);
            listener();
        }
    </script>

    <link rel="stylesheet" href="{!! url('assets/css/base-8fdbe1a7.css') !!}" as="style" onload="onStylesheetLoad(this)">

    <link rel="stylesheet" href="{!! url('assets/css/PageJobs-9d096dbf.css') !!}" as="style" onload="onStylesheetLoad(this)">

    <noscript>

        <link href="{!! url('assets/css/base-8fdbe1a7.css') !!}" type="text/css" rel="stylesheet" />

        <link href="{!! url('assets/css/PageJobs-9d096dbf.css') !!}" type="text/css" rel="stylesheet" />

    </noscript>



    <link href="https://www.freelancer.com/rss.xml" rel="alternate" type="application/rss+xml" title="Latest projects">


    <link itemprop="sameAs" href="http://en.wikipedia.org/wiki/Freelancer.com">



    <link rel="icon" href="https://www.freelancer.com/favicon.ico" type="image/ico">
    <link rel="shortcut icon" href="https://www.freelancer.com/favicon.ico">

    <script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "Organization",
        "name": "SEO",
        "url": "<?= $_SERVER['HTTP_HOST'] ?>",
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "SEO",
        "url": "<?= $_SERVER['HTTP_HOST'] ?>",
    }
    </script>

    <style type="text/css"></style>

    <style>

    </style>
    <style>

    </style>



    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body data-role="page" style="" cz-shortcut-listen="true">
    <!-- Webapp compat loader. Dynamically load & bootstrap webapp Angular
    components onto server-side pages. Yes, it's awesome -->
    <script>
        window.webappCompat = {};
        window.webappCompat['seo-navbar'] = {};
        window.webappCompat['accessibility'] = {};
        window.webappCompat['tracking'] = {};
        window.webappCompat['toast-alerts'] = {};
        window.webappCompat['modals'] = {};
        window.webappCompat['abtest'] = {};
        window.webappCompat['threatmetrix'] = {};
        window.webappCompat['give-get-footer'] = {};
    </script>




    <div class="pinky-template">
        <main id="main" class="main-content">

            <header class="SectionHero SectionHero--compact PageJobs-sectionHero">
                <div class="Container">
                    <div class="Grid Grid--verticalCenter">
                        <div class="Grid-col Grid-col--12 Grid-col--desktopSmall-6 Grid-col--desktopLarge-7">
                            <h1 class="SectionHero-heading PageJobs-sectionHero-heading" id="job-hero-location-title">
                                Top Seo
                            </h1>
                        </div>

                        <div class="Grid-col Grid-col--12 Grid-col--desktopSmall-6 Grid-col--desktopLarge-5 PageJobs-sectionHero-ctas">
                            <a href="/posts" class="btn btn-primary PageJobs-sectionHero-cta">Tôi muốn Bán</a>

                            <a href="/signup" rel="nofollow" class="btn btn-plain-alt PageJobs-sectionHero-cta">Tôi muốn
                                Mua</a>

                        </div>
                    </div>
                </div>
            </header>

            <section class="PageJobs-container">
                <div class="PageJobs-breadCrumb Container">
                </div>

                <div class="Container">
                    <form id="search-form" class="ProjectSearch-searchField">
                        <div class="InputCombo InputCombo--highlighted ProjectSearch-searchField-search" id="location-form">
                            <div class="InputCombo-inner ProjectSearch-searchField-combo">
                                <div class="ProjectSearch-searchField-item ProjectSearch-searchField-item--keyword ProjectSearch-searchField-divider">
                                    <span class="InputCombo-icon Icon Icon--mid">
                                        <svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M21.71 20.29l-5.4-5.39a8 8 0 0 0-12-10.56 8 8 0 0 0 10.56 12l5.39 5.39 1.41-1.41zM10 16a6 6 0 1 1 4.24-1.76A6 6 0 0 1 10 16z">
                                            </path>
                                        </svg>

                                    </span>
                                    <label id="search-label" for="keyword-input" class="is-accessibly-hidden">
                                        Tìm kiếm tài nguyên
                                    </label>
                                    <input id="keyword-input" class="InputCombo-input xlarge-input" type="search" name="search_keyword" placeholder="Tìm kiếm bài đăng" aria-controls="search-form-error" data-uitest-target="input-keyword" value="{{ $searchKeyword }}">
                                </div>
                                <div class="ProjectSearch-searchField-item ProjectSearch-searchField-item--onlineSearch">
                                    <span class="InputCombo-icon Icon Icon--mid">

                                        <svg class="Icon-image" fill="#d6d6d6" viewBox="0 0 35 35" data-name="Layer 2" id="Layer_2" xmlns="http://www.w3.org/2000/svg" stroke="#d6d6d6">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M17.5,34.75A17.25,17.25,0,1,1,34.75,17.5,17.27,17.27,0,0,1,17.5,34.75Zm0-32A14.75,14.75,0,1,0,32.25,17.5,14.77,14.77,0,0,0,17.5,2.75Z">
                                                </path>
                                                <path d="M33.5,18.75H2.25a1.25,1.25,0,0,1,0-2.5H33.5a1.25,1.25,0,0,1,0,2.5Z">
                                                </path>
                                                <path d="M17.5,33.9c-4.86,0-8.66-7.2-8.66-16.4S12.64,1.1,17.5,1.1s8.66,7.2,8.66,16.4S22.36,33.9,17.5,33.9Zm0-30.3c-2.91,0-6.16,5.71-6.16,13.9s3.25,13.9,6.16,13.9,6.16-5.71,6.16-13.9S20.41,3.6,17.5,3.6Z">
                                                </path>
                                            </g>
                                        </svg>

                                    </span>
                                    <label id="location-label" for="location-input" class="is-accessibly-hidden">
                                        Where ?
                                    </label>

                                    <select class="InputCombo-input xlarge-input pac-target-input js-example-basic-single" style="border: none;" name="category">
                                        <option value=""></option>
                                        @foreach ($categoriesList as $category)
                                        <option value="{{ $category->id }}" {{ ( $category->id == $selectedCategory) ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <button id="search-submit" class="InputCombo-btn btn btn-xlarge btn-info ProjectSearch-searchField-button" aria-label="search">
                                Tìm kiếm
                            </button>
                        </div>

                    </form>

                </div>
                <div class="ProjectSearch-filterandresults Container fl-form">
                    <div class="Grid">
                        <div class="Grid-col Grid-col--desktopSmall-3">
                            <div class="ProjectSearch-filter Card">
                                <div class="SectionJobFilter">
                                    <div id="filter-panel" class="SectionJobFilter-inner">
                                        <div class="SectionJobFilter-content">
                                            <div class="SectionJobFilter-header">
                                                <h3 class="SectionJobFilter-header-heading">Tìm kiếm</h3>
                                                <a href="#" id="filter-close-btn" class="SectionJobFilter-header-link">
                                                    <span class="Icon Icon--small"><svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path d="M20.707 4.707l-1.414-1.414L12 10.586 4.707 3.293 3.293 4.707 10.586 12l-7.293 7.293 1.414 1.414L12 13.414l7.293 7.293 1.414-1.414L13.414 12">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="SectionJobFilter-sectionList">

                                                <div class="SectionJobFilter-section">
                                                    <h5 class="SectionJobFilter-mainHeading">Tìm kiếm theo:</h5>
                                                    <h5 class="SectionJobFilter-heading">Ngân sách</h5>
                                                    <div class="SectionJobFilter-sliderItem">

                                                        <div class="Grid Grid--verticalCenter">
                                                            <div class="Grid-col Grid-col--5">
                                                                <input id="fixed-min" class="default-input currency" placeholder="min">
                                                            </div>
                                                            <div class="Grid-col Grid-col--2 SectionJobFilter-sliderItem-label">
                                                                tới
                                                            </div>
                                                            <div class="Grid-col Grid-col--5">
                                                                <input id="fixed-max" class="default-input currency" placeholder="max">
                                                            </div>
                                                        </div>
                                                        <div id="fixed-error" class="SectionJobFilter-alert alert alert-warning is-hidden">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button class="btn" id="btn-search-price" style="background: #139ff0; color: #F7F7F7">Tìm kiếm</button>
                                                    </div>

                                                </div>



                                                <!-- Static Load Skills, Languages -->


                                            </div>
                                            <div class="SectionJobFilter-footer">
                                                <a id="filter-close-link" class="btn btn-large btn-info SectionJobFilter-footer-btn" aria-label="search">
                                                    Apply Filter </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="Grid-col Grid-col--desktopSmall-9 Post-Right">
                            
                        </div>
                    </div>
                </div>
    </div> <!-- End Grid -->
    </div>
    <div class="PageJobs-tags Container">
        <div id="other_related">
        </div>
    </div>

    </section>


    </main>
    </div>
    <div class="pinky-template">

        <footer class="FooterNew">
            <div class="FooterNew-content">
                <div class="FooterNew-content-inner">
                    <div class="FooterNew-section">
                        <div class="Container">
                            <div class="Grid">
                                <div class="Grid-col Grid-col--desktopSmall-4">
                                    <div class="FooterNew-info-section">
                                        <a href="/" class="FooterNew-logo">
                                            <img class="FooterNew-logo-img" src="https://www.f-cdn.com/assets/img/footer/Freelancer-footer-logo-522454d7.svg" alt="Freelancer Logo" width="62" height="40" loading="lazy">
                                        </a>
                                    </div>
                                    <div class="FooterNew-info-section">
                                        <a id="locale-selector" class="FooterNew-subTitle" href="/choose-your-country/" data-robots="LocaleSelector" data-qtsb-section="footer" data-qtsb-subsection="LanguageSelector" data-qtsb-label="GoToLanguageSelector" role="button">
                                            <span class="Icon--light Icon FooterNew-subTitle-icon"><svg class="Icon-image" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2 0 .68.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2 0-.68.07-1.35.16-2h4.68c.09.65.16 1.32.16 2 0 .68-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2 0-.68-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z">
                                                    </path>
                                                </svg>
                                            </span>
                                            English - US (International)
                                        </a>







                                    </div>

                                    <div class="FooterNew-info-section">
                                        <a href="/support/" class="FooterNew-subTitle"> <span class="Icon--light Icon FooterNew-subTitle-icon"><svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path d="M12 2C6.486 2 2 6.487 2 12c0 5.515 4.486 10 10 10s10-4.485 10-10c0-5.513-4.486-10-10-10zm0 16.25c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25zm1-4.375V15h-2v-3h1c1.104 0 2-.897 2-2 0-1.104-.896-2-2-2s-2 .896-2 2H8c0-2.205 1.795-4 4-4s4 1.795 4 4c0 1.86-1.277 3.43-3 3.875z">
                                                    </path>
                                                </svg>
                                            </span> Help &amp; Support</a>
                                    </div>
                                    <div class="FooterNew-info-section">
                                        <div id="triggerAccessibility" class="FooterNew-subTitle FooterNew-accessibility">
                                            <span class="Icon--light Icon FooterNew-subTitle-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 24 24" version="1.1">
                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                    <path d="M20.5 6c-2.61.7-5.67 1-8.5 1s-5.89-.3-8.5-1L3 8c1.86.5 4 .83 6 1v13h2v-6h2v6h2V9c2-.17 4.14-.5 6-1l-.5-2zM12 6c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z">
                                                    </path>
                                                </svg>

                                            </span>
                                            Accessibility
                                        </div>
                                    </div>
                                </div>
                                <div class="Grid-col Grid-col--tablet-3 Grid-col--desktopSmall-2 FooterNew-link-section">
                                    <h5 class="FooterNew-link-title" data-footerlink="footer-link">Freelancer
                                        <span class="Icon Icon--small Icon--light FooterNew-link-icon FooterNew-link-icon--disable"><svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M12 16c-.3 0-.5-.1-.7-.3l-6-6 1.4-1.4 5.3 5.3 5.3-5.3 1.4 1.4-6 6c-.2.2-.4.3-.7.3z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span class="Icon Icon--small Icon--light FooterNew-link-icon FooterNew-link-icon--active"><svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M12 8.3a.91.91 0 0 1 .7.3l6 6-1.4 1.4-5.3-5.3L6.7 16l-1.4-1.4 6-6a.91.91 0 0 1 .7-.3z">
                                                </path>
                                            </svg>
                                        </span>
                                    </h5>
                                    <div class="FooterNew-link-content">
                                        <ul class="FooterNew-links">
                                            <li>
                                                <a class="FooterNew-link" href="/job/" data-uitest-target="GoToCategories" data-qtsb-section="footer" data-qtsb-subsection="Network" data-qtsb-label="GoToCategories">
                                                    Categories
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/jobs/" data-uitest-target="GoToProjects" data-qtsb-section="footer" data-qtsb-subsection="Network" data-qtsb-label="GoToProjects">
                                                    Projects
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/contest/" data-uitest-target="GoToContest" data-qtsb-section="footer" data-qtsb-subsection="Network" data-qtsb-label="GoToContest">
                                                    Contests
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/freelancers/" data-uitest-target="GoToFreelancers" data-qtsb-section="footer" data-qtsb-subsection="Network" data-qtsb-label="GoToFreelancers">
                                                    Freelancers
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/enterprise/" data-uitest-target="GoToEnterprise" data-qtsb-section="footer" data-qtsb-subsection="Enterprise" data-qtsb-label="GoToEnterprise">
                                                    Enterprise
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/membership" data-uitest-target="GoToMembership" data-qtsb-section="footer" data-qtsb-subsection="Membership" data-qtsb-label="GoToMembership">
                                                    Membership
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/preferred-freelancer-program" data-uitest-target="GoToPreferredFreelancerProgram" data-qtsb-section="footer" data-qtsb-subsection="Network" data-qtsb-label="GoToPreferredFreelancerProgram">
                                                    Preferred Freelancer Program
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/project-management" data-uitest-target="GoToProjectManager" data-qtsb-section="footer" data-qtsb-subsection="Network" data-qtsb-label="GoToProjectManager">
                                                    Project Management
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/local" data-uitest-target="GoToFreelancerLocal" data-qtsb-section="footer" data-qtsb-subsection="Network" data-qtsb-label="GoToFreelancerLocal">
                                                    Local Jobs
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="https://www.photoanywhere.com" target="_blank" data-uitest-target="GoToPhotoAnywhere" data-qtsb-section="footer" data-qtsb-subsection="Network" data-qtsb-label="GoToPhotoAnywhere">
                                                    Photo Anywhere
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/showcase" data-uitest-target="GoToShowcase" data-qtsb-section="footer" data-qtsb-subsection="Network" data-qtsb-label="GoToShowcase">
                                                    Showcase
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="https://developers.freelancer.com" data-uitest-target="GoToAPIDevelopers" data-qtsb-section="footer" data-qtsb-subsection="Network" data-qtsb-label="GoToAPIDevelopers">
                                                    API for Developers
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="Grid-col Grid-col--tablet-3 Grid-col--desktopSmall-2 FooterNew-link-section">
                                    <h5 class="FooterNew-link-title" data-footerlink="footer-link">About
                                        <span class="Icon Icon--small Icon--light FooterNew-link-icon FooterNew-link-icon--disable"><svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M12 16c-.3 0-.5-.1-.7-.3l-6-6 1.4-1.4 5.3 5.3 5.3-5.3 1.4 1.4-6 6c-.2.2-.4.3-.7.3z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span class="Icon Icon--small Icon--light FooterNew-link-icon FooterNew-link-icon--active"><svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M12 8.3a.91.91 0 0 1 .7.3l6 6-1.4 1.4-5.3-5.3L6.7 16l-1.4-1.4 6-6a.91.91 0 0 1 .7-.3z">
                                                </path>
                                            </svg>
                                        </span>
                                    </h5>
                                    <div class="FooterNew-link-content">
                                        <ul class="FooterNew-links">
                                            <li>
                                                <a class="FooterNew-link" href="/about" data-uitest-target="GoToAboutUs" data-qtsb-section="footer" data-qtsb-subsection="About" data-qtsb-label="GoToAboutUs">
                                                    About us
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/info/how-it-works/" data-uitest-target="GoToHowItWorks" data-qtsb-section="footer" data-qtsb-subsection="About" data-qtsb-label="GoToHowItWorks">
                                                    How it Works
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/about/security" data-uitest-target="GoToSecurity" data-qtsb-section="footer" data-qtsb-subsection="About" data-qtsb-label="GoToSecurity">
                                                    Security
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/investor" data-uitest-target="GoToInvestor" data-qtsb-section="footer" data-qtsb-subsection="About" data-qtsb-label="GoToInvestor">
                                                    Investor
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/sitemap" data-uitest-target="GoToSitemap" data-qtsb-section="footer" data-qtsb-subsection="Network" data-qtsb-label="GoToSitemap">
                                                    Sitemap
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/about/stories" data-uitest-target="GoToStories" data-qtsb-section="footer" data-qtsb-subsection="About" data-qtsb-label="GoToStories">
                                                    Stories
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/about/media" data-uitest-target="GoToNews" data-qtsb-section="footer" data-qtsb-subsection="About" data-qtsb-label="GoToNews">
                                                    News
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/about/management" data-uitest-target="GoToManagement" data-qtsb-section="footer" data-qtsb-subsection="About" data-qtsb-label="GoToManagement">
                                                    Team
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/about/awards" data-uitest-target="GoToAwards" data-qtsb-section="footer" data-qtsb-subsection="About" data-qtsb-label="GoToAwards">
                                                    Awards
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/about/press" data-uitest-target="GoToPress" data-qtsb-section="footer" data-qtsb-subsection="About" data-qtsb-label="GoToPress">
                                                    Press Releases
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/careers" data-uitest-target="GoToCareers" data-qtsb-section="footer" data-qtsb-subsection="About" data-qtsb-label="GoToCareers">
                                                    Careers
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="Grid-col Grid-col--tablet-3  Grid-col--desktopSmall-2 FooterNew-link-section">
                                    <h5 class="FooterNew-link-title" data-footerlink="footer-link">Terms
                                        <span class="Icon Icon--small Icon--light FooterNew-link-icon FooterNew-link-icon--disable"><svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M12 16c-.3 0-.5-.1-.7-.3l-6-6 1.4-1.4 5.3 5.3 5.3-5.3 1.4 1.4-6 6c-.2.2-.4.3-.7.3z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span class="Icon Icon--small Icon--light FooterNew-link-icon FooterNew-link-icon--active"><svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M12 8.3a.91.91 0 0 1 .7.3l6 6-1.4 1.4-5.3-5.3L6.7 16l-1.4-1.4 6-6a.91.91 0 0 1 .7-.3z">
                                                </path>
                                            </svg>
                                        </span>
                                    </h5>
                                    <div class="FooterNew-link-content">
                                        <ul class="FooterNew-links">
                                            <li>
                                                <a rel="nofollow" class="FooterNew-link" href="/about/privacy" data-uitest-target="GoToPrivacyPolicy" data-qtsb-section="footer" data-qtsb-subsection="CorporateLinks" data-qtsb-label="GoToPrivacyPolicy">
                                                    Privacy Policy
                                                </a>
                                            </li>
                                            <li>
                                                <a rel="nofollow" class="FooterNew-link" href="/about/terms" data-uitest-target="GoToTermsAndConditions" data-qtsb-section="footer" data-qtsb-subsection="CorporateLinks" data-qtsb-label="GoToTermsAndConditions">
                                                    Terms and Conditions
                                                </a>
                                            </li>
                                            <li>
                                                <a rel="nofollow" class="FooterNew-link" href="/dmca" data-uitest-target="GoToCopyrightInfringementPolicy" data-qtsb-section="footer" data-qtsb-subsection="CorporateLinks" data-qtsb-label="GoToCopyrightInfringementPolicy">
                                                    Copyright Policy
                                                </a>
                                            </li>
                                            <li>
                                                <a rel="nofollow" class="FooterNew-link" href="/info/codeofconduct" data-uitest-target="GoToCodeOfConduct" data-qtsb-section="footer" data-qtsb-subsection="CorporateLinks" data-qtsb-label="GoToCodeOfConduct">
                                                    Code of Conduct
                                                </a>
                                            </li>
                                            <li>
                                                <a rel="nofollow" class="FooterNew-link" href="/feesandcharges" data-uitest-target="GoToFeesAndCharges" data-qtsb-section="footer" data-qtsb-subsection="CorporateLinks" data-qtsb-label="GoToFeesAndCharges">
                                                    Fees and Charges
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="Grid-col Grid-col--tablet-3  Grid-col--desktopSmall-2 FooterNew-link-section">
                                    <h5 class="FooterNew-link-title FooterNew-link-title--hideMobile">Apps</h5>
                                    <div class="FooterNew-appStoreIcons">
                                        <a href="https://cdn3.f-cdn.com/download" class="FooterNew-appStoreIcon" target="_blank" title="Download on the App Store" data-qtsb-section="footer" data-qtsb-subsection="AppsAndSocial" data-qtsb-label="GoToAppleStore">
                                            <img class="FooterNew-appStoreIcon-image" src="https://www.f-cdn.com/assets/img/footer/app-store-1f36bbd8.svg" alt="Apple App Store Badge" loading="lazy" width="300" height="89">
                                        </a>
                                        <a href="https://cdn3.f-cdn.com/download" class="FooterNew-appStoreIcon" target="_blank" title="Get it on Google Play" data-qtsb-section="footer" data-qtsb-subsection="AppsAndSocial" data-qtsb-label="GoToPlayStore">
                                            <img class="FooterNew-appStoreIcon-image" src="https://www.f-cdn.com/assets/img/footer/google-play-66442243.svg" alt="Google Play Store Badge" loading="lazy" width="300" height="88">
                                        </a>
                                    </div>

                                    <div class="FooterNew-social">
                                        <a class="FooterNew-social-icon Icon Icon--light" rel="nofollow" href="https://www.facebook.com/fansoffreelancer" target="_blank" title="Freelancer on Facebook" data-qtsb-section="footer" data-qtsb-subsection="AppsAndSocial" data-qtsb-label="GoToFacebook">
                                            <svg class="Icon-image" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                    <polygon id="Mask" opacity="0" fill="none" points="2 2 22 2 22 22 2 22"></polygon>
                                                    <path d="M22,12 C22,6.47714844 17.5228516,2 12,2 C6.47714844,2 2,6.47714844 2,12 C2,16.9912891 5.65685547,21.1283203 10.4375,21.8785156 L10.4375,14.890625 L7.8984375,14.890625 L7.8984375,12 L10.4375,12 L10.4375,9.796875 C10.4375,7.290625 11.9304297,5.90625 14.2146484,5.90625 C15.3087305,5.90625 16.453125,6.1015625 16.453125,6.1015625 L16.453125,8.5625 L15.1921484,8.5625 C13.9499023,8.5625 13.5625,9.33333984 13.5625,10.1241602 L13.5625,12 L16.3359375,12 L15.8925781,14.890625 L13.5625,14.890625 L13.5625,21.8785156 C18.3431445,21.1283203 22,16.9912891 22,12">
                                                    </path>
                                                </g>
                                            </svg>

                                        </a>
                                        <a class="FooterNew-social-icon Icon Icon--light" rel="nofollow" href="https://www.twitter.com/freelancer" target="_blank" title="Freelancer on Twitter" data-qtsb-section="footer" data-qtsb-subsection="AppsAndSocial" data-qtsb-label="GoToTwitter">
                                            <svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M8.192 21c-2.28 0-4.404-.668-6.192-1.815 2.144.252 4.282-.342 5.98-1.672-1.768-.034-3.26-1.202-3.772-2.806.633.12 1.256.085 1.823-.07-1.942-.39-3.282-2.14-3.24-4.01.545.302 1.17.484 1.83.505C2.822 9.93 2.313 7.555 3.37 5.738c1.992 2.444 4.97 4.053 8.326 4.22C11.106 7.434 13.024 5 15.63 5c1.163 0 2.212.49 2.95 1.276.92-.18 1.785-.517 2.565-.98-.3.944-.942 1.736-1.775 2.235.817-.097 1.596-.314 2.32-.635-.542.807-1.228 1.52-2.016 2.088C19.93 14.665 15.694 21 8.192 21z">
                                                </path>
                                            </svg>

                                        </a>
                                        <a class="FooterNew-social-icon Icon Icon--light" rel="nofollow" href="https://www.youtube.com/freelancerchannel" target="_blank" title="Freelancer on Youtube" data-qtsb-section="footer" data-qtsb-subsection="AppsAndSocial" data-qtsb-label="GoToYoutube">
                                            <svg class="Icon-image" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g transform="translate(2.000000, 5.000000)" fill-rule="nonzero" stroke="none" stroke-width="1">
                                                    <path d="M16.3458333,0.153435525 C13.3425,-0.0515616237 6.65333333,-0.0507283019 3.65416667,0.153435525 C0.406666667,0.375099108 0.0241666667,2.33673849 0,7.5 C0.0241666667,12.654095 0.403333333,14.6240676 3.65416667,14.8465645 C6.65416667,15.0507283 13.3425,15.0515616 16.3458333,14.8465645 C19.5933333,14.6249009 19.9758333,12.6632615 20,7.5 C19.9758333,2.34590503 19.5966667,0.37593243 16.3458333,0.153435525 Z M7.5,10.833287 L7.5,4.16671303 L14.1666667,7.49416675 L7.5,10.833287 L7.5,10.833287 Z" id="Shape"></path>
                                                </g>
                                            </svg>

                                        </a>
                                        <a class="FooterNew-social-icon Icon Icon--light" rel="nofollow" href="https://instagram.com/freelancerofficial" target="_blank" title="Freelancer on Instagram" data-qtsb-section="footer" data-qtsb-subsection="AppsAndSocial" data-qtsb-label="GoToInstagram">
                                            <svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M15 12c0 1.657-1.343 3-3 3s-3-1.342-3-3c0-1.657 1.343-3 3-3s3 1.343 3 3zm4.327-3.636c.043.948.052 1.233.052 3.636s-.01 2.688-.053 3.637c-.112 2.42-1.248 3.58-3.69 3.69-.948.042-1.233.052-3.637.052-2.403 0-2.69-.01-3.636-.053-2.446-.11-3.58-1.273-3.69-3.69-.043-.95-.053-1.234-.053-3.637s.01-2.688.054-3.636c.11-2.42 1.248-3.58 3.69-3.69.948-.043 1.233-.052 3.636-.052s2.69.01 3.637.052c2.44.11 3.578 1.27 3.69 3.69zM16.62 12c.002-2.553-2.07-4.622-4.62-4.622-2.553 0-4.622 2.07-4.622 4.622 0 2.553 2.07 4.622 4.622 4.622 2.553 0 4.622-2.07 4.622-4.622zm1.264-4.804c0-.596-.484-1.08-1.08-1.08-.596 0-1.08.484-1.08 1.08 0 .597.483 1.08 1.08 1.08.597 0 1.08-.483 1.08-1.08zM21 12c0-2.444-.01-2.75-.054-3.71-.147-3.265-1.963-5.085-5.235-5.235C14.75 3.01 14.446 3 12 3c-2.445 0-2.75.01-3.71.054-3.27.15-5.085 1.963-5.236 5.235C3.01 9.25 3 9.556 3 12c0 2.445.01 2.75.054 3.71.15 3.27 1.964 5.086 5.236 5.236.96.044 1.265.054 3.71.054 2.445 0 2.75-.01 3.71-.054 3.266-.15 5.09-1.963 5.236-5.236.044-.96.054-1.265.054-3.71z">
                                                </path>
                                            </svg>

                                        </a>
                                        <a class="FooterNew-social-icon Icon Icon--light" href="/rss.xml" target="_blank" title="Latest Projects" data-qtsb-section="footer" data-qtsb-subsection="AppsAndSocial" data-qtsb-label="GoToRSS">
                                            <svg class="Icon-image" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.168 20C4.97 20 4 19.03 4 17.835c0-1.196.97-2.165 2.168-2.165 1.197 0 2.167.97 2.167 2.165 0 1.196-.97 2.165-2.167 2.165zm5.18 0c-.04-4.03-3.314-7.298-7.348-7.34V9.455c5.814.04 10.518 4.74 10.56 10.546h-3.212zm5.44 0C16.77 12.937 11.054 7.24 4 7.208V4c8.83.03 15.98 7.18 16 16h-3.21z" fill-rule="evenodd"></path>
                                            </svg>

                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Statistics -->
                    <div class="FooterNew-section">
                        <div class="Container">
                            <div class="Grid">
                                <div class="Grid-col Grid-col--12 Grid-col--tablet-6 Grid-col--desktopSmall-3">
                                    <div class="SiteStat FooterNew-siteStat">
                                        <div id="footerRegisteredUsersCount" class="SiteStat-value FooterNew-siteStat-value">72,543,643</div>
                                        <div class="SiteStat-name FooterNew-siteStat-name">
                                            <span class="SiteStat-name-text">Registered Users</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="Grid-col Grid-col--12 Grid-col--tablet-6 Grid-col--desktopSmall-3">
                                    <div class="SiteStat FooterNew-siteStat">
                                        <div id="footerTotalJobsPostedCount" class="SiteStat-value FooterNew-siteStat-value">23,623,439</div>
                                        <div class="SiteStat-name FooterNew-siteStat-name">
                                            <span class="SiteStat-name-text">Total Jobs Posted</span>
                                            <span class="SiteStat-name-icon Icon Icon--small Tooltip--light Tooltip--top Tooltip--large" data-tooltip="Jobs Posted (Filtered) is defined as the sum of Total Posted Projects and Total Posted Contests,
                        filtered for spam, advertising, test projects, unawardable or otherwise projects that are deemed bad and unable to be
                        fulfilled.">
                                                <span class="Icon Icon--small"><svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <path d="M12 2C6.486 2 2 6.487 2 12c0 5.515 4.486 10 10 10s10-4.485 10-10c0-5.513-4.486-10-10-10zm0 16.25c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25zm1-4.375V15h-2v-3h1c1.104 0 2-.897 2-2 0-1.104-.896-2-2-2s-2 .896-2 2H8c0-2.205 1.795-4 4-4s4 1.795 4 4c0 1.86-1.277 3.43-3 3.875z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="Grid-col Grid-col--desktopSmall-6">
                                    <p class="FooterNew-siteStat-term">Freelancer ® is a registered Trademark of
                                        Freelancer Technology
                                        Pty Limited (ACN 142 189 759)</p>
                                    <p class="FooterNew-siteStat-term">
                                        Copyright © 2024 Freelancer Technology Pty Limited (ACN 142 189 759)
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </footer>








    </div>

    <!-- FIXME: please get rid of that, that should be lazy loaded through SystemJS -->








    <fl-modal-container class="pinky-template"></fl-modal-container>

    <!-- JS SDKs: think twice before adding something here -->
    <!-- SHOULD NEVER EVER include synchronous scripts. -->
    <!-- Google Analytics -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');


        ga('create', 'UA-223765-6', 'auto');

        // Set User ID if exist


        // ga('require', 'displayfeatures');
        // This is to differentiate different links to the same page - one in nav bar, one in side bar
        // ga('require', 'linkid', 'linkid.js');

        // This is page group like tags, PVP, CVP, Profiles

        // This is domain group

        ga('set', 'contentGroup2', 'Freelancer.com');


        // Use canonical URL as the url of the page if exist

        ga('set', 'location', 'https://www.freelancer.com/jobs');


        // Gets cookie for `event` and sends it if exist
        var allCookies = document.cookie.split(';');
        for (var i in allCookies) {
            cookie = allCookies[i].trim();
            var cookieArr = cookie.split('=');
            // check if there's ga event cookie
            var cookieKey = cookieArr[0];
            var cookieValue = cookieArr[1];
            if (cookieKey === 'gaevent' && cookieValue) {
                var gaData = decodeURIComponent(cookieValue);
                var gaEventData = JSON.parse(gaData.replace(/\+/g, ' '));
                for (var j in gaEventData) {
                    var event = gaEventData[j];
                    event.hitType = 'event';
                    ga('send', event);
                }
                // clear `gaevent` cookie afterwards
                document.cookie = 'gaevent=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                break;
            }
        };

        // Send Pageview after everything is set
        ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-G7FX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager -->
    <!-- Start Alexa Certify Javascript -->
    <noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=+QLxh1acBa0089" style="display:none" height="1" width="1" alt="" /></noscript>
    <!-- End Alexa Certify Javascript -->
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', "530993107478103");
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=530993107478103&ev=PageView
    &noscript=1" />
    </noscript>

    <script defer="" src="https://www.f-cdn.com/assets/polyfills-f96587f8.js"></script>

    <script defer="" id="systemjs-loader" src="https://www.f-cdn.com/assets/systemjs-83712958.js"></script>
    <script defer="" id="systemjs-config" src="https://www.f-cdn.com/assets/systemjs-config-e37fd3fe.js"></script>

    <!--// SystemJS  -->
</body>
<script src="{!! url('assets/js/global.js') !!}"></script>
<script src="{!! url('assets/js/home.js') !!}"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();

    });
</script>

@endsection