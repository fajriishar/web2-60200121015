<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="  template/img/icon/favicon.png">

    <link rel="stylesheet" href="template/css/bootstrap.min.css">
    <link rel="stylesheet" href="template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="template/css/slicknav.css">
    <link rel="stylesheet" href="template/css/animate.min.css">
    <link rel="stylesheet" href="template/css/magnific-popup.css">
    <link rel="stylesheet" href="template/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="template/css/themify-icons.css">
    <link rel="stylesheet" href="template/css/slick.css">
    <link rel="stylesheet" href="template/css/nice-select.css">
    <link rel="stylesheet" href="template/css/style.css">
    <script nonce="fb3f31a4-f4d4-4b02-a9be-841f0e921fdf">
        (function (w, d) {
            ! function (dK, dL, dM, dN) {
                dK[dM] = dK[dM] || {};
                dK[dM].executed = [];
                dK.zaraz = {
                    deferred: [],
                    listeners: []
                };
                dK.zaraz.q = [];
                dK.zaraz._f = function (dO) {
                    return function () {
                        var dP = Array.prototype.slice.call(arguments);
                        dK.zaraz.q.push({
                            m: dO,
                            a: dP
                        })
                    }
                };
                for (const dQ of ["track", "set", "debug"]) dK.zaraz[dQ] = dK.zaraz._f(dQ);
                dK.zaraz.init = () => {
                    var dR = dL.getElementsByTagName(dN)[0],
                        dS = dL.createElement(dN),
                        dT = dL.getElementsByTagName("title")[0];
                    dT && (dK[dM].t = dL.getElementsByTagName("title")[0].text);
                    dK[dM].x = Math.random();
                    dK[dM].w = dK.screen.width;
                    dK[dM].h = dK.screen.height;
                    dK[dM].j = dK.innerHeight;
                    dK[dM].e = dK.innerWidth;
                    dK[dM].l = dK.location.href;
                    dK[dM].r = dL.referrer;
                    dK[dM].k = dK.screen.colorDepth;
                    dK[dM].n = dL.characterSet;
                    dK[dM].o = (new Date).getTimezoneOffset();
                    if (dK.dataLayer)
                        for (const dX of Object.entries(Object.entries(dataLayer).reduce(((dY, dZ) => ({
                                ...dY[1],
                                ...dZ[1]
                            })), {}))) zaraz.set(dX[0], dX[1], {
                            scope: "page"
                        });
                    dK[dM].q = [];
                    for (; dK.zaraz.q.length;) {
                        const d_ = dK.zaraz.q.shift();
                        dK[dM].q.push(d_)
                    }
                    dS.defer = !0;
                    for (const ea of [localStorage, sessionStorage]) Object.keys(ea || {}).filter((ec => ec
                        .startsWith("_zaraz_"))).forEach((eb => {
                        try {
                            dK[dM]["z_" + eb.slice(7)] = JSON.parse(ea.getItem(eb))
                        } catch {
                            dK[dM]["z_" + eb.slice(7)] = ea.getItem(eb)
                        }
                    }));
                    dS.referrerPolicy = "origin";
                    dS.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(dK[
                        dM])));
                    dR.parentNode.insertBefore(dS, dR)
                };
                ["complete", "interactive"].includes(dL.readyState) ? zaraz.init() : dK.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

    <header>
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top text-center">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <p>This handy little bar is great for informing visitors of various features. <a
                                        href="#" class="btn2">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between flex-wrap position-relative">

                        <div class="logo">
                            <a href="index-2.html"><img src="template/img/logo/logo.png" alt=""></a>
                        </div>

                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href=<?= Yii::$app->urlManager->createUrl(['site/index']) ?>>Home</a></li>
                                    <li><a href=<?= Yii::$app->urlManager->createUrl(['site/about']) ?>>About</a></li>
                                    <li><a href=<?= Yii::$app->urlManager->createUrl(['site/services']) ?>>Services</a></li>
                                    <li><a href=<?= Yii::$app->urlManager->createUrl(['site/portofolio']) ?>>Portfolio</a></li>
                                    <li><a href=<?= Yii::$app->urlManager->createUrl(['mahasiswa015/index']) ?>>Tugas</a>
                                        <ul class="submenu">
                                            <li><a href=<?= Yii::$app->urlManager->createUrl(['mahasiswa015/index']) ?>>Project Yii2</a></li>
                                            <li><a href=<?= Yii::$app->urlManager->createUrl(['site/tugas']) ?>>Mahasiswa</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=<?= Yii::$app->urlManager->createUrl(['site/contact']) ?>>Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right-btn f-right">
                            <a href="#" class="btn_1 d-none d-xl-block">Free Quote</a>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <?= $content ?>
    </main>


    <footer>
        <div class="footer-wrapper gray-bg">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-20">

                                    <div class="footer-logo mb-35">
                                        <a href="index-2.html"><img src="template/img/logo/logo2_footer.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Quick Links</h4>
                                    <ul>
                                        <li><a href="#">Work</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Tips & Tricks</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Support</h4>
                                    <ul>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Submit Ticket</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="offset-xl-2 col-xl-4 col-lg-5 col-md-8 col-sm-10">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle mb-10">
                                    <h4>Newsletter</h4>
                                    <p>Subscribe newsletter to get updates..</p>
                                </div>

                                <div class="footer-form mb-40">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email"
                                                placeholder="Enter your email" class="placeholder hide-on-focus">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm">
                                                    <img src="template/img/icon/arrow.svg" alt="">
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>

                                <div class="footer-social">
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>Copyright &copy;<script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | This template is made with <i
                                            class="fa fa-heart color-danger" aria-hidden="true"></i> by <a
                                            href="https://colorlib.com/" target="_blank"
                                            rel="nofollow noopener">Colorlib</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="back-top">
        <a class="wrapper" title="Go to Top" href="#">
            <div class="arrows-container">
                <div class="arrow arrow-one">
                </div>
                <div class="arrow arrow-two">
                </div>
            </div>
        </a>
    </div>


    <script src="template/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="template/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="template/js/popper.min.js"></script>
    <script src="template/js/bootstrap.min.js"></script>

    <script src="template/js/owl.carousel.min.js"></script>
    <script src="template/js/slick.min.js"></script>
    <script src="template/js/jquery.slicknav.min.js"></script>
    <script src="template/js/hover-direction-snake.min.js"></script>

    <script src="template/js/wow.min.js"></script>
    <script src="template/js/jquery.magnific-popup.js"></script>
    <script src="template/js/jquery.nice-select.min.js"></script>
    <script src="template/js/jquery.counterup.min.js"></script>
    <script src="template/js/waypoints.min.js"></script>

    <script src="template/js/contact.js"></script>
    <script src="template/js/jquery.form.js"></script>
    <script src="template/js/jquery.validate.min.js"></script>
    <script src="template/js/mail-script.js"></script>
    <script src="template/js/jquery.ajaxchimp.min.js"></script>

    <script src="template/js/plugins.js"></script>
    <script src="template/js/main.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
        integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
        data-cf-beacon='{"rayId":"7d577cadae7f4a83","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
