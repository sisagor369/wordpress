<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>বাংলাদেশ জাতীয় তথ্য বাতায়ন</title>
    <?php wp_head(); ?>
    <!-- <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./bootstrap.min.css"> -->
</head>
<body>
    <header class="con">
        <div class="topbar row">
            <div class="col-lg-6 left">
                <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
            </div>
            <div class="col-lg-6 right text-end">
                <p>৬ অগ্রহায়ণ, ১৪২৯</p>
                <a href="">English</a>
            </div>
        </div>
        <!-- header  -->
        <div class="logo row">
            <div class="logoimg col-lg-5">
                <img src="<?= get_template_directory_uri()?>./images/header/logo_bn.png" alt="">
            </div>
            <div class="col-lg-5 search">
                <form action="">
                    <input type="text" name="" id="" placeholder="খুঁজুন "><button>অনুসন্ধান </button>
                </form>
            </div>
            <div class="col-lg-2 social justy-content-end d-flex">
                <div class="sleft">
                   <a href=""> <img src="<?= get_template_directory_uri()?>./images/header/a2i-logo-footer.png" alt=""></a>
                </div>
                <div class="sright">
                    <a href=""><img src="<?= get_template_directory_uri()?>./images/header/facebook-icon.png" alt=""></a>
                    <a href=""><img src="<?= get_template_directory_uri()?>./images/header/gplus-icon.png" alt=""></a>
                    <a href=""><img src="<?= get_template_directory_uri()?>./images/header/youtube-icon.png" alt=""></a>
                    <a href=""><img src="<?= get_template_directory_uri()?>./images/header/twitter-blue-icon.png" alt=""></a>
                </div>
            </div>
        </div> 
        <!-- navbar  -->
        <div class="con">
                            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">হোম</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">ই-সেবাসমূহ</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">সেবাখাত</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">তথ্য বাতায়ন</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">ব্যবসা-বাণিজ্য</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">আইন-বিধি</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">ব্যবসা-বাণিজ্য</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">তথ্য বাতায়ন</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">তথ্য বাতায়ন</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </nav>
        </div>
    </header>
    <div class="con">
        <div class="row">
            <div class="col-lg-8">
                <!-- banner  -->
                    <div class="banner">
                        <img src="<?= get_template_directory_uri()?>./images/padmabanner.jpg" class="w-100" alt="">
                    </div>
                    <!-- slider -->
                    <div class="slider">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="<?= get_template_directory_uri()?>./images/slider/Banner-1.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="<?= get_template_directory_uri()?>./images/slider/banner-renew-your-passport.png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="<?= get_template_directory_uri()?>./images/slider/myGov Static2(1) (1).jpg" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
                    <!-- tabbar  -->
                    <div class="tabbar">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact1" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">দপ্তর ভিত্তিক সেবা</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">সকল ই-সেবা</button>
                            </li>
                          </ul>
                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">জনপ্রিয় সেবা</div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">নতুন সেবা.</div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="row mobile-seba">
                                    <div class="col-lg-3">
                                        <img src="<?= get_template_directory_uri()?>./images/modile-seva/agriculture.png" alt="">
                                        <p>কৃষি</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="<?= get_template_directory_uri()?>./images/modile-seva/call_center.png" alt="">
                                        <p> কল সেন্টার </p>
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="<?= get_template_directory_uri()?>./images/modile-seva/helpdesk.png" alt="">
                                        <p>কৃষি</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="<?= get_template_directory_uri()?>./images/modile-seva/helpdesk.png" alt="">
                                        <p>মৎস্য ও প্রাণী</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">দপ্তর ভিত্তিক সেবা</div>
                            <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">সকল ই-সেবা
                            </div>
                            </div>
                    </div>
                            <!-- uddog -->
                            <div class="uddog">
                                <h6>উদ্যোগ</h6>
                                <ul>
                                    <li><a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                                        <p>(১৩-০৬-২০১৬)</p></li>
                                    <li><a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a></li>
                                    <li><a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                                    </li>
                                    <li><a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                                    </li>
                                    <li><a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                                    <p>(১৩-০৬-২০১৬)</p></li>
                                    <li><a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                                    <p>(১৩-০৬-২০১৬)</p></li>
                                </ul>
                                <p class="text-center">সকল</p>
                            </div>
                            <div class="img">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="<?= get_template_directory_uri()?>./images/forms_portal_logo (1).png" alt="">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="<?= get_template_directory_uri()?>./images/infokosh-logo (1).png" alt="">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="<?= get_template_directory_uri()?>./images/forms_portal_logo (1).png" alt="">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="<?= get_template_directory_uri()?>./images/infokosh-logo (1).png" alt="">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="<?= get_template_directory_uri()?>./images/forms_portal_logo (1).png" alt="">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="<?= get_template_directory_uri()?>./images/infokosh-logo (1).png" alt="">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="<?= get_template_directory_uri()?>./images/forms_portal_logo (1).png" alt="">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="<?= get_template_directory_uri()?>./images/infokosh-logo (1).png" alt="">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="<?= get_template_directory_uri()?>./images/forms_portal_logo (1).png" alt="">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="<?= get_template_directory_uri()?>./images/infokosh-logo (1).png" alt="">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="<?= get_template_directory_uri()?>./images/forms_portal_logo (1).png" alt="">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="<?= get_template_directory_uri()?>./images/infokosh-logo (1).png" alt="">
                                    </div>
                                </div>
                                <div class="vdo2">
                                    <div class="row">
                                        <h6>আশ্রয়ণের অধিকার শেখ হাসিনার উপহার</h6>
                                        <div class="col-lg-4">
                                            <iframe class="d-block w-100" width="560" height="315" src="https://www.youtube.com/embed/B0FgrYBE4uY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-4">
                                            <iframe class="d-block w-100" width="560" height="315" src="https://www.youtube.com/embed/B0FgrYBE4uY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-4">
                                            <iframe class="d-block w-100" width="560" height="315" src="https://www.youtube.com/embed/B0FgrYBE4uY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                            <h6>অন্যান্য ভিডিও</h6>
                                            <iframe class="d-block w-100" width="560" height="315" src="https://www.youtube.com/embed/B0FgrYBE4uY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-4">
                                            <iframe class="d-block w-100" width="560" height="315" src="https://www.youtube.com/embed/B0FgrYBE4uY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-4">
                                            <iframe class="d-block w-100" width="560" height="315" src="https://www.youtube.com/embed/B0FgrYBE4uY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-4 card">
                                                <iframe class="d-block w-100" width="560" height="315" src="https://www.youtube.com/embed/B0FgrYBE4uY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                <div class="container">
                                                  <p>বন্যার সময় কি করণীয়</p>
                                                </div>
                                        </div>
                                        <div class="col-lg-4 card">
                                            <iframe class="d-block w-100" width="560" height="315" src="https://www.youtube.com/embed/B0FgrYBE4uY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <div class="container">
                                              <p>বন্যার সময় কি করণীয়</p>
                                            </div>
                                    </div>
                                    <div class="col-lg-4 card">
                                        <iframe class="d-block w-100" width="560" height="315" src="https://www.youtube.com/embed/B0FgrYBE4uY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <div class="container">
                                          <p>বন্যার সময় কি করণীয়</p>
                                        </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-4">
                        <a href=""><img src="<?= get_template_directory_uri()?>./images/side-bar/333_gov.png" class="d-block w-100 p-2" alt=""></a>
                        <a href=""><img src="<?= get_template_directory_uri()?>./images/side-bar/Bangladesh-Directory.jpg" class="d-block w-100 p-2" alt=""></a>
                        <a href=""><img src="<?= get_template_directory_uri()?>./images/side-bar/bangladesh-portal--batton-bangla.png" class="d-block w-100 p-2" alt=""></a>
                        <a href=""><img src="<?= get_template_directory_uri()?>./images/side-bar/currency_bangla (1).png" class="d-block w-100 p-2" alt=""></a>
                        <a href=""><img src="<?= get_template_directory_uri()?>./images/side-bar/discount_bn.jpg" class="d-block w-100 p-2" alt=""></a>
                        <a href=""><img src="<?= get_template_directory_uri()?>./images/side-bar/Tamplate_security_bn (1).png" class="d-block w-100 p-2" alt=""></a>
                        <a href=""><img src="<?= get_template_directory_uri()?>./images/side-bar/currency_bangla (1).png" class="d-block w-100 p-2" alt=""></a>
                        <a href=""><img src="<?= get_template_directory_uri()?>./images/side-bar/currency_bangla (1).png" class="d-block w-100 p-2" alt=""></a>
                        <a href=""><img src="<?= get_template_directory_uri()?>./images/side-bar/currency_bangla (1).png" class="d-block w-100 p-2" alt=""></a>
                        <a href=""><img src="<?= get_template_directory_uri()?>./images/side-bar/currency_bangla (1).png" class="d-block w-100 p-2" alt=""></a>
                        <a href=""><img src="<?= get_template_directory_uri()?>./images/side-bar/currency_bangla (1).png" class="d-block w-100 p-2" alt=""></a>
                        <a href=""><img src="<?= get_template_directory_uri()?>./images/side-bar/currency_bangla (1).png" class="d-block w-100 p-2" alt=""></a>
                        <a href=""><img src="<?= get_template_directory_uri()?>./images/side-bar/currency_bangla (1).png" class="d-block w-100 p-2" alt=""></a>
                        <a href=""><img src="<?= get_template_directory_uri()?>./images/side-bar/currency_bangla (1).png" class="d-block w-100 p-2" alt=""></a>
                        <a href=""><img src="<?= get_template_directory_uri()?>./images/side-bar/currency_bangla (1).png" class="d-block w-100 p-2" alt=""></a>
                        <form action="">
                            <select name="" id="">
                                <option value="">মন্ত্রণালয়</option>
                                <option value="">মন্ত্রণালয়</option>
                                <option value="">মন্ত্রণালয়</option>
                                <option value="">মন্ত্রণালয়</option>
                                <option value="">মন্ত্রণালয়</option>
                                <option value="">মন্ত্রণালয়</option>
                                <option value="">মন্ত্রণালয়</option>
                                <option value="">মন্ত্রণালয়</option>
                                <option value="">মন্ত্রণালয়</option>
                            </select><button>চলুন</button>
                        </form>
                        <div class="side2">
                            <h6>মাস্ক পরুন সেবা নিন</h6>
                        <img src="<?= get_template_directory_uri()?>./images/sideimage/mask-bd-portal (1).jpg" class="d-block w-100" alt="">
                        </div>
                        <h6>ডেঙ্গু প্রতিরোধে করণীয়</h6>
                        <img src="<?= get_template_directory_uri()?>./images/sideimage/dengu.jpg" class="d-block w-100" alt="">

                        <iframe class="d-block w-100" width="560" height="315" src="https://www.youtube.com/embed/B0FgrYBE4uY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <iframe class="d-block w-100" width="560" height="315" src="https://www.youtube.com/embed/B0FgrYBE4uY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <a href=""><img src="<?= get_template_directory_uri()?>./images/side-bar/333_gov.png" class="d-block w-100 p-2" alt=""></a>
                        <a href=""><img src="<?= get_template_directory_uri()?>./images/side-bar/333_gov.png" class="d-block w-100 p-2" alt=""></a>
                        <a href=""><img src="<?= get_template_directory_uri()?>./images/side-bar/333_gov.png" class="d-block w-100 p-2" alt=""></a>
                    </div>
            </div>
            <!-- footer  -->
            <img src="<?= get_template_directory_uri()?>./images/footer_top_bg.png" alt="">
            <div class="row">
                <div class="col-lg-7 fmenu">
                    <nav class="navbar navbar-expand-lg bg-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">হোম</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">ই-সেবাসমূহ</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">সেবাখাত</a>
                                </li>
                            </ul>
                            </div>
                        </div>
                        </nav>
                        <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p>
                </div>
                <div class="col-lg-5 fright">
                    <p>পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি</p>
                    <span style="font-size:10px ;">কারিগরি সহায়তায়: </span><img src="<?= get_template_directory_uri()?>./images/footer/np-logo-set.png" alt="">
                </div>
            </div>
    </div>
    <?php wp_footer(); ?>
    <!-- <script src="<?= get_template_directory_uri()?>./bootstrap.bundle.min.js"></script> -->
</body>
</html>