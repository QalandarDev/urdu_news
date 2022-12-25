<?php

use cinghie\multilanguage\widgets\MultiLanguageWidget;

?>
<header id="rs-header" class="rs-header">
    <!-- Topbar Area Start -->
    <div class="topbar-area">
        <div class="container">
            <div class="row y-middle">
                <div class="col-md-7">
                    <ul class="topbar-contact">
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:info@urdu.uz">info@urdu.uz</a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <a href="tel:+998622246700">+998 (62) 224 67 00</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 text-right">
                    <ul class="topbar-right">
                        <li class="login-register">
                            <i class="fa fa-sign-in"></i>
                            <a href="login.html">Login</a>/<a href="register.html">Register</a>
                        </li>
                        <li class="btn-part">
                            <a class="apply-btn" href="#">Apply Now</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Area End -->

    <!-- Menu Start -->
    <div class="menu-area menu-sticky">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-2">
                    <div class="logo-cat-wrap">
                        <div class="logo-part pr-90">
                            <a class="dark-logo" href="index.html">
                                <img src="<?= Yii::getAlias('@web') . "/img/urdu_log.png" ?>" style="max-height: 75px"
                                     alt="">
                            </a>
                            <a class="light-logo" href="index.html">
                                <img src="<?= Yii::getAlias('@web') . "/img/urdu_log.png" ?>" style="max-height: 75px"
                                     alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 text-center">
                    <div class="rs-menu-area">
                        <div class="main-menu pr-90">
                            <div class="mobile-menu">
                                <a class="rs-menu-toggle">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                            <nav class="rs-menu rs-menu-close">
                                <ul class="nav-menu">
                                    <li class="rs-mega-menu mega-rs menu-item-has-children current-menu-item"><a
                                                href="index.html">Home</a>
                                        <ul class="mega-menu">
                                            <li class="mega-menu-container">
                                                <div class="mega-menu-innner">
                                                    <div class="single-megamenu">
                                                        <ul class="sub-menu">
                                                            <li><a href="index.html">Main Demo</a></li>
                                                            <li><a href="index2.html">Online Course</a></li>
                                                            <li class="active"><a href="index3.html">University 01</a>
                                                            </li>
                                                            <li><a href="index4.html">E-Learning</a></li>
                                                            <li><a href="index5.html">Distance Learning</a></li>
                                                            <div class="sub-menu-close"><i class="fa fa-times"
                                                                                           aria-hidden="true"></i>Close
                                                            </div>
                                                        </ul>
                                                    </div>
                                                    <div class="single-megamenu">
                                                        <ul class="sub-menu last-sub-menu">
                                                            <li><a href="index6.html">Personal Demo</a></li>
                                                            <li><a href="index7.html">Online Training</a></li>
                                                            <li><a href="index8.html">Online Learning</a></li>
                                                            <li><a href="index9.html">Kitchen Coach</a></li>
                                                            <li><a href="index10.html">University 02</a></li>
                                                            <div class="sub-menu-close"><i class="fa fa-times"
                                                                                           aria-hidden="true"></i>Close
                                                            </div>
                                                        </ul>
                                                    </div>
                                                    <div class="single-megamenu">
                                                        <ul class="sub-menu last-sub-menu">
                                                            <li><a href="index11.html">Kindergarten 01</a></li>
                                                            <li><a href="index12.html">Freelancing Course</a></li>
                                                            <li><a href="index13.html">Gym Coach</a></li>
                                                            <li><a href="index14.html">Courses Archive</a></li>
                                                            <li><a href="index15.html">Courses Hub</a></li>
                                                            <div class="sub-menu-close"><i class="fa fa-times"
                                                                                           aria-hidden="true"></i>Close
                                                            </div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="sub-menu-close"><i class="fa fa-times" aria-hidden="true"></i>Close
                                            </div>
                                        </ul> <!-- //.mega-menu -->
                                        <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span><span
                                                class="rs-menu-parent"><i class="fa fa-angle-down"
                                                                          aria-hidden="true"></i></span></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Universitet</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">About One</a></li>
                                            <li><a href="about2.html">About Two</a></li>
                                            <div class="sub-menu-close"><i class="fa fa-times" aria-hidden="true"></i>Close
                                            </div>
                                        </ul>
                                        <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Faoliyat</a>
                                        <ul class="sub-menu">
                                            <li><a href="course.html">Courses One</a></li>
                                            <li><a href="course2.html">Courses Two</a></li>
                                            <li><a href="course3.html">Courses Three</a></li>
                                            <li><a href="course4.html">Courses Four</a>
                                            </li>
                                            <li><a href="course5.html">Courses Five</a></li>
                                            <li><a href="course-single.html">Courses Single</a></li>
                                            <div class="sub-menu-close"><i class="fa fa-times" aria-hidden="true"></i>Close
                                            </div>
                                        </ul>
                                        <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Abituriyentlarga</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children right">
                                                <a href="#">Team</a>
                                                <ul class="sub-menu right">
                                                    <li><a href="team.html">Team One</a></li>
                                                    <li><a href="team2.html">Team Two</a></li>
                                                    <li><a href="team-single.html">Team Single</a></li>
                                                    <div class="sub-menu-close"><i class="fa fa-times"
                                                                                   aria-hidden="true"></i>Close
                                                    </div>
                                                </ul>
                                                <span class="rs-menu-parent"><i class="fa fa-angle-down"
                                                                                aria-hidden="true"></i></span></li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Event</a>
                                                <ul class="sub-menu right">
                                                    <li><a href="events-style1.html">Event One</a></li>
                                                    <li><a href="events-style2.html">Event Two</a></li>
                                                    <li><a href="events-style3.html">Event Three</a></li>
                                                    <div class="sub-menu-close"><i class="fa fa-times"
                                                                                   aria-hidden="true"></i>Close
                                                    </div>
                                                </ul>
                                                <span class="rs-menu-parent"><i class="fa fa-angle-down"
                                                                                aria-hidden="true"></i></span></li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Gallery</a>
                                                <ul class="sub-menu right">
                                                    <li><a href="gallery-style1.html">Gallery One</a></li>
                                                    <li><a href="gallery-style2.html">Gallery Two</a></li>
                                                    <li><a href="gallery-style3.html">Gallery Three</a></li>
                                                    <div class="sub-menu-close"><i class="fa fa-times"
                                                                                   aria-hidden="true"></i>Close
                                                    </div>
                                                </ul>
                                                <span class="rs-menu-parent"><i class="fa fa-angle-down"
                                                                                aria-hidden="true"></i></span></li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Shop</a>
                                                <ul class="sub-menu right">
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-single.html">Shop Single</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <div class="sub-menu-close"><i class="fa fa-times"
                                                                                   aria-hidden="true"></i>Close
                                                    </div>
                                                </ul>
                                                <span class="rs-menu-parent"><i class="fa fa-angle-down"
                                                                                aria-hidden="true"></i></span></li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Others</a>
                                                <ul class="sub-menu right">
                                                    <li><a href="faq.html">FAQ</a></li>
                                                    <li><a href="error.html">404 Page</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="register.html">Register</a></li>
                                                    <div class="sub-menu-close"><i class="fa fa-times"
                                                                                   aria-hidden="true"></i>Close
                                                    </div>
                                                </ul>
                                                <span class="rs-menu-parent"><i class="fa fa-angle-down"
                                                                                aria-hidden="true"></i></span></li>
                                            <div class="sub-menu-close"><i class="fa fa-times" aria-hidden="true"></i>Close
                                            </div>
                                        </ul>
                                        <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Xorijiy talabalar</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Blog Sidebar</a>
                                                <ul class="sub-menu right">
                                                    <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                                                    <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                                    <div class="sub-menu-close"><i class="fa fa-times"
                                                                                   aria-hidden="true"></i>Close
                                                    </div>
                                                </ul>
                                                <span class="rs-menu-parent"><i class="fa fa-angle-down"
                                                                                aria-hidden="true"></i></span></li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Single Post</a>
                                                <ul class="sub-menu right">
                                                    <li><a href="blog-post-left.html">Post Left Sidebar</a></li>
                                                    <li><a href="blog-post-right.html">Post Right Sidebar</a></li>
                                                    <li><a href="blog-single.html">Full Width Post</a></li>
                                                    <div class="sub-menu-close"><i class="fa fa-times"
                                                                                   aria-hidden="true"></i>Close
                                                    </div>
                                                </ul>
                                                <span class="rs-menu-parent"><i class="fa fa-angle-down"
                                                                                aria-hidden="true"></i></span></li>
                                            <div class="sub-menu-close"><i class="fa fa-times" aria-hidden="true"></i>Close
                                            </div>
                                        </ul>
                                        <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Contact</a>
                                        <ul class="sub-menu">
                                            <li><a href="contact.html">Contact One</a></li>
                                            <li><a href="contact2.html">Contact Two</a></li>
                                            <li><a href="contact3.html">Contact Three</a></li>
                                            <li><a href="contact4.html">Contact Four</a></li>
                                            <div class="sub-menu-close"><i class="fa fa-times" aria-hidden="true"></i>Close
                                            </div>
                                        </ul>
                                        <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </li>
                                </ul> <!-- //.nav-menu -->
                            </nav>
                        </div> <!-- //.main-menu -->
                        <div class="expand-btn-inner">
                            <ul>
                                <li>
                                    <a class="hidden-xs rs-search short-border" data-target=".search-modal"
                                       data-toggle="modal" href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pull-right">
                                <?= MultiLanguageWidget::widget([
                                    'widget_type' => 'classic', // classic or selector
                                    'image_type' => 'classic', // classic or rounded
                                    'width' => '25',
                                    'calling_controller' => $this->context
                                ]); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

    <!-- Canvas Menu start -->

    <!-- Canvas Menu end -->
</header>
