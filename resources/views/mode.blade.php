
<html
    data-wf-page="64e71f3f7303690218eb5b3d"
    data-wf-site="64e71f3f7303690218eb5b32"
>
    <head>
        <meta charset="utf-8" />
        <title>Brawl World</title>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Webflow" name="generator" />
        <link
            href="https://uploads-ssl.webflow.com/64e71f3f7303690218eb5b32/css/brawl-world.webflow.04182a505.css"
            rel="stylesheet"
            type="text/css"
        />
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link
            href="https://fonts.gstatic.com"
            rel="preconnect"
            crossorigin="anonymous"
        />
        <script
            src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"
            type="text/javascript"
        ></script>
        <script type="text/javascript">
            WebFont.load({
                google: {
                    families: [
                        "Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic",
                    ],
                },
            });
        </script>
        <script type="text/javascript">
            !(function (o, c) {
                var n = c.documentElement,
                    t = " w-mod-";
                (n.className += t + "js"),
                    ("ontouchstart" in o ||
                        (o.DocumentTouch && c instanceof DocumentTouch)) &&
                        (n.className += t + "touch");
            })(window, document);
        </script>
        <link
            href="https://uploads-ssl.webflow.com/img/favicon.ico"
            rel="shortcut icon"
            type="image/x-icon"
        />
        <link
            href="https://uploads-ssl.webflow.com/img/webclip.png"
            rel="apple-touch-icon"
        />
    </head>
    <body class="body">
        <div
            data-animation="default"
            data-collapse="medium"
            data-duration="400"
            data-easing="ease"
            data-easing2="ease"
            role="banner"
            class="navbar-2 w-nav"
        >
            <div class="container-4 w-container">
                <nav role="navigation" class="nav-menu w-nav-menu">
                    <a href="#" class="nav-link-2 w-nav-link">Login</a
                    ><a href="#" class="nav-link-3 w-nav-link">Register</a>
                </nav>
                <div class="w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
            </div>
            <h1 class="heading-3"> <a href ="/">Brawl World</a></h1>
        </div>
        <section>
            <p class="paragraph">
                <strong class="bold-text"
                    >Welcome to Brawl World ! Find all the stats you need about
                    brawl stars, you can check everyday for the latest stats
                    about the current rotation.<br />Take your gaming experience
                    to the next level !</strong
                >
            </p>
        </section>
        <div class="w-form">
            <x-dropdown/>
            <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
            </div>
        </div>
        <section class="section">
            <h3
                class="heading-4 heading-5 heading-6 heading-7 heading-8 heading-9 heading-10"
            >
                Stats
            </h3>
        </section>
        <div class="w-layout-grid grid">
            <x-mode_stat :modes="$modes"/>
        <script
            src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=64e71f3f7303690218eb5b32"
            type="text/javascript"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"
        ></script>
        <script
            src="https://uploads-ssl.webflow.com/64e71f3f7303690218eb5b32/js/webflow.d513ca016.js"
            type="text/javascript"
        ></script>
    </body>
</html>
