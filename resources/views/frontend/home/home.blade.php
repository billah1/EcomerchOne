@extends('frontend.master')
 @section('title','home')
@section('body')
    <div id="flex" class="flexslider kindergarten">
        <ul class="slides">

            <li style="background:url(images/use_img/banner1.jpg) no-repeat center; background-size:cover;">
                <div class="container">
                    <div class="row">
                        <div class="slide-caption">
                            <h2 data-animation="animated bounceInLeft"> An Innovative Graduate university of Theology </h2>
                            <a href="home-1.html#" data-animation="animated zoomInUp" class="btn btn-medium btn-blue">View Campus <i class="lnr lnr-arrow-right"></i></a> </div>
                    </div>
                </div>
            </li>


            <li style="background:url(images/use_img/banner1.jpg) no-repeat center; background-size:cover;">
                <div class="container">
                    <div class="row">
                        <div class="slide-caption">
                            <h2 data-animation="animated bounceInLeft"> An Innovative Graduate University of Theology </h2>
                            <a href="home-1.html#" data-animation="animated zoomInUp" class="btn btn-medium btn-blue">View Campus <i class="lnr lnr-arrow-right"></i></a> </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>

    <section class="about-with-slide">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 aboutus">
                    <div class="row">
                        <div class="col-xs-12 col-sm-7">
                            <h3><span>About</span> #1 Education Press</h3>
                            <p>Starting with the new school year in our kindergarten will discover a professional team that aims to respect your child's feelings, to give them responsibility, independence and freedom to make choices.</p>
                            <p>Kindergarten will discover a professional team that aims to respect your child's feeling, to give them responsibility, independence and freedom to make choices.</p>
                            <a href="home-1.html#" class="btn btn-medium btn-blue">Know More <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                        <div class="col-xs-12 col-sm-5">

                            <div class="flexslider about-slide">
                                <ul class="slides">
                                    <li><a href="home-1.html#"><img src="{{asset('/')}}frontend/images/use_img/about-g1.jpg" alt=""></a></li>
                                    <li><a href="home-1.html#"><img src="{{asset('/')}}frontend/images/use_img/about-g2.jpg" alt=""></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-features">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3><span>OUR</span> Features</h3>
                    <ul>
                        <li>Lorem ipsum is simply dummy text of the printing and typestting industry</li>
                    </ul>
                    <div class="col-xs-12 col-sm-4 feature wow bounceInLeft">
                        <i class="lnr lnr-graduation-hat"></i>
                        <h3>Features Name Here</h3>
                        <p>Kindergarten will discover a
                            professional team that aims to respect your child's feelings,
                            to give them responsibility, independence and freedom to make choices.</p>
                    </div>
                    <div class="col-xs-12 col-sm-4 feature wow bounceInLeft">
                        <i class="lnr lnr-bus"></i>
                        <h3>Features Name Here</h3>
                        <p>Kindergarten will discover a
                            professional team that aims to respect your child's feelings,
                            to give them responsibility, independence and freedom to make choices.</p>
                    </div>
                    <div class="col-xs-12 col-sm-4 feature wow bounceInLeft">
                        <i class="lnr lnr-smile"></i>
                        <h3>Features Name Here</h3>
                        <p>Kindergarten will discover a
                            professional team that aims to respect your child's feelings,
                            to give them responsibility, independence and freedom to make choices.</p>
                    </div>
                    <div class="text-center col-xs-12">
                        <a href="home-1.html#" data-animation="animated zoomInUp" class="btn btn-medium btn-default">Know More <i class="lnr lnr-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fun-gallery">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3><span>Fun</span> Gallery</h3>
                    <ul>
                        <li>Lorem ipsum is simply dummy text of the printing and typestting industry</li>
                    </ul>

                    <div class="flexslider fun-gallery-slider">
                        <ul class="slides">

                            <li>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="row">
                                        <img src="{{asset('/')}}frontend/images/use_img/gallery_home_main1.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 slide-right">
                                    <div class="col-sm-6">
                                        <img src="{{asset('/')}}frontend/images/use_img/gallery_home_thumb2.jpg" alt="" />
                                        <img src="{{asset('/')}}frontend/images/use_img/gallery_home_thumb3.jpg" alt="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="{{asset('/')}}frontend/images/use_img/gallery_home_thumb2.jpg" alt="" />
                                        <img src="{{asset('/')}}frontend/images/use_img/gallery_home_thumb3.jpg" alt="" />
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="row">
                                        <img src="{{asset('/')}}frontend/images/use_img/gallery_home_main1.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 slide-right">
                                    <div class="col-sm-6">
                                        <img src="{{asset('/')}}frontend/images/use_img/gallery_home_thumb3.jpg" alt="" />
                                        <img src="{{asset('/')}}frontend/images/use_img/gallery_home_thumb2.jpg" alt="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="{{asset('/')}}frontend/images/use_img/gallery_home_thumb2.jpg" alt="" />
                                        <img src="{{asset('/')}}frontend/images/use_img/gallery_home_thumb3.jpg" alt="" />
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="row">
                                        <img src="{{asset('/')}}frontend/images/use_img/gallery_home_main1.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 slide-right">
                                    <div class="col-sm-6">
                                        <img src="{{asset('/')}}frontend/images/use_img/gallery_home_thumb3.jpg" alt="" />
                                        <img src="{{asset('/')}}frontend/images/use_img/gallery_home_thumb2.jpg" alt="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="{{asset('/')}}frontend/images/use_img/gallery_home_thumb2.jpg" alt="" />
                                        <img src="{{asset('/')}}frontend/images/use_img/gallery_home_thumb3.jpg" alt="" />
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="text-center col-xs-12">
                        <a href="home-1.html#" data-animation="animated zoomInUp" class="btn btn-medium btn-blue">View Campus <i class="lnr lnr-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="school-classes">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3><span>School</span> Classes</h3>
                    <ul>
                        <li>Lorem ipsum is simply dummy text of the printing and typestting industry</li>
                    </ul>
                    <div id="owl-classes" class="owl-carousel">
                        <div class="col-xs-12 zoom">
                            <div class="classes">
                                <a href="home-1.html#" class="img-thumb"><figure>
                                        <img src="{{asset('/')}}frontend/images/use_img/course_img1.png" alt="" /></figure></a>
                                <div class="classes-info">
                                    <div class="price">$55 <small></small></div>
                                    <h3><a href="home-1.html#">Features Name Here</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <ul class="classes-time">
                                        <li><span>2 - 5</span>
                                            Year old </li>
                                        <li><span>24</span>
                                            Class Size</li>
                                        <li><span>9:00 - 10:00</span>
                                            Class Duration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 zoom">
                            <div class="classes">
                                <a href="home-1.html#" class="img-thumb"><figure>
                                        <img src="{{asset('/')}}frontend/images/use_img/course_img2.png" alt="" /></figure></a>
                                <div class="classes-info">
                                    <div class="price">$45 <small></small></div>
                                    <h3><a href="home-1.html#">Features Name Here</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <ul class="classes-time">
                                        <li><span>2 - 5</span>
                                            Year old </li>
                                        <li><span>24</span>
                                            Class Size</li>
                                        <li><span>9:00 - 10:00</span>
                                            Class Duration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 zoom">
                            <div class="classes">
                                <a href="home-1.html#" class="img-thumb"><figure>
                                        <img src="{{asset('/')}}frontend/images/use_img/course_img3.png" alt="" /></figure></a>
                                <div class="classes-info">
                                    <div class="price">$35 <small></small></div>
                                    <h3><a href="home-1.html#">Features Name Here</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <ul class="classes-time">
                                        <li><span>2 - 5</span>
                                            Year old </li>
                                        <li><span>24</span>
                                            Class Size</li>
                                        <li><span>9:00 - 10:00</span>
                                            Class Duration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 zoom">
                            <div class="classes">
                                <a href="home-1.html#" class="img-thumb"><figure>
                                        <img src="{{asset('/')}}frontend/images/use_img/course_img4.png" alt="" /></figure></a>
                                <div class="classes-info">
                                    <div class="price">$55 <small></small></div>
                                    <h3><a href="home-1.html#">Features Name Here</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <ul class="classes-time">
                                        <li><span>2 - 5</span>
                                            Year old </li>
                                        <li><span>24</span>
                                            Class Size</li>
                                        <li><span>9:00 - 10:00</span>
                                            Class Duration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 zoom">
                            <div class="classes">
                                <a href="home-1.html#" class="img-thumb"><figure>
                                        <img src="{{asset('/')}}frontend/images/use_img/course_img5.png" alt="" /></figure></a>
                                <div class="classes-info">
                                    <div class="price">$45 <small></small></div>
                                    <h3><a href="home-1.html#">Features Name Here</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <ul class="classes-time">
                                        <li><span>2 - 5</span>
                                            Year old </li>
                                        <li><span>24</span>
                                            Class Size</li>
                                        <li><span>9:00 - 10:00</span>
                                            Class Duration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 zoom">
                            <div class="classes">
                                <a href="home-1.html#" class="img-thumb"><figure>
                                        <img src="{{asset('/')}}frontend/images/use_img/course_img6.png" alt="" /></figure></a>
                                <div class="classes-info">
                                    <div class="price">$35 <small></small></div>
                                    <h3><a href="home-1.html#">Features Name Here</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <ul class="classes-time">
                                        <li><span>2 - 5</span>
                                            Year old </li>
                                        <li><span>24</span>
                                            Class Size</li>
                                        <li><span>9:00 - 10:00</span>
                                            Class Duration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="school-events">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3><span>School</span> Events</h3>
                    <ul>
                        <li>Lorem ipsum is simply dummy text of the printing and typestting industry</li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 zoom">
                    <div class="events">
                        <a href="home-1.html#" class="img-thumb"><figure>
                                <img src="{{asset('/')}}frontend/images/use_img/event1.jpg" alt="" /></figure></a>
                        <div class="events-info">
                            <h3><a href="home-1.html#">Event Name Here</a></h3>
                            <p class="location"><i class="lnr lnr-map-marker"></i> New yourk tower, Melbourne</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <ul class="events-time">
                                <li><span>Aug 25 -27, 2015</span>
                                    Date </li>
                                <li><span>09:00 AM</span>
                                    Time</li>
                            </ul>
                            <a href="home-1.html#" class="know-more">Know More <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 zoom">
                    <div class="events">
                        <a href="home-1.html#" class="img-thumb"><figure>
                                <img src="{{asset('/')}}frontend/images/use_img/event2.jpg" alt="" /></figure></a>
                        <div class="events-info">
                            <h3><a href="home-1.html#">Event Name Here And secound line will be here Awesome !</a></h3>
                            <p class="location"><i class="lnr lnr-map-marker"></i> New yourk tower, Melbourne</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <ul class="events-time">
                                <li><span>Aug 25 -27, 2015</span>
                                    Date </li>
                                <li><span>09:00 AM</span>
                                    Time</li>
                            </ul>
                            <a href="home-1.html#" class="know-more">Know More <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 zoom">
                    <div class="events">
                        <a href="home-1.html#" class="img-thumb"><figure>
                                <img src="{{asset('/')}}frontend/images/use_img/event1.jpg" alt="" /></figure></a>
                        <div class="events-info">
                            <h3><a href="home-1.html#">Event Name Here</a></h3>
                            <p class="location"><i class="lnr lnr-map-marker"></i> New yourk tower, Melbourne</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <ul class="events-time">
                                <li><span>Aug 25 -27, 2015</span>
                                    Date </li>
                                <li><span>09:00 AM</span>
                                    Time</li>
                            </ul>
                            <a href="home-1.html#" class="know-more">Know More <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-blog">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3><span>Our</span> Blog</h3>
                    <ul>
                        <li>Lorem ipsum is simply dummy text of the printing and typestting industry</li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="blogs">
                        <a href="home-1.html#"><figure><img src="{{asset('/')}}frontend/images/use_img/blog-thumb.jpg" alt="" /></figure></a>
                        <div class="col-sm-6">
                            <h3><a href="home-1.html#">Blog Title Will Be Here Long Secound Line Too!</a></h3>
                            <p class="meta"><span class="date">Aug 25, 2015</span> <span>.</span> By <a href="home-1.html#">Mark Freeman</a></p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="home-1.html#" class="know-more">Know More <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="blogs">
                        <a href="home-1.html#"><figure><img src="{{asset('/')}}frontend/images/use_img/blog-thumb.jpg" alt="" /></figure></a>
                        <div class="col-sm-6">
                            <h3><a href="home-1.html#">Blog Title Will Be Here Long Secound Line Too!</a></h3>
                            <p class="meta"><span class="date">Aug 25, 2015</span> <span>.</span> By <a href="home-1.html#">Mark Freeman</a></p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="home-1.html#" class="know-more">Know More <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-teachers">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3><span>Our</span> Teachers</h3>
                    <ul>
                        <li>Lorem ipsum is simply dummy text of the printing and typestting industry</li>
                    </ul>
                </div>
                <div id="owl-teachers" class="owl-carousel">
                    <div class="col-xs-12">
                        <div class="teachers">
                            <a href="home-1.html#"><img src="{{asset('/')}}frontend/images/use_img/teacher-thumb2.jpg" alt="" /></a>
                            <div class="col-sm-9">
                                <h3><a href="home-1.html#">Teacher Name</a></h3>
                                <p class="meta">Music Teacher</p>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <ul class="social-icons">
                                    <li><a href="http://facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="http://linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="http://pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="http://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="http://youtube.com/"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                                <a href="home-1.html#" class="btn btn-medium btn-default">Know More <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="teachers">
                            <a href="home-1.html#"><img src="{{asset('/')}}frontend/images/use_img/teacher-thumb2.jpg" alt="" /></a>
                            <div class="col-sm-9">
                                <h3><a href="home-1.html#">Teacher Name</a></h3>
                                <p class="meta">Music Teacher</p>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <ul class="social-icons">
                                    <li><a href="http://facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="http://linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="http://pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="http://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="http://youtube.com/"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                                <a href="home-1.html#" class="btn btn-medium btn-default">Know More <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="teachers">
                            <a href="home-1.html#"><img src="{{asset('/')}}frontend/images/use_img/teacher-thumb2.jpg" alt="" /></a>
                            <div class="col-sm-9">
                                <h3><a href="home-1.html#">Teacher Name</a></h3>
                                <p class="meta">Music Teacher</p>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <ul class="social-icons">
                                    <li><a href="http://facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="http://linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="http://pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="http://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="http://youtube.com/"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                                <a href="home-1.html#" class="btn btn-medium btn-default">Know More <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="teachers">
                            <a href="home-1.html#"><img src="{{asset('/')}}frontend/images/use_img/teacher-thumb2.jpg" alt="" /></a>
                            <div class="col-sm-9">
                                <h3><a href="home-1.html#">Teacher Name</a></h3>
                                <p class="meta">Music Teacher</p>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <ul class="social-icons">
                                    <li><a href="http://facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="http://linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="http://pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="http://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="http://youtube.com/"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                                <a href="home-1.html#" class="btn btn-medium btn-default">Know More <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="testimonials" class="testimonials-kindergarten carousel slide">
        <div class="container">
            <div class="row widget">

                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <div class="col-xs-12 col-md-12">
                            <blockquote>
                                <p>It has survived not only five centuries, but also the leap
                                    into electronic typesetting, remaining essentially unchanged.</p>
                                <footer>
                                    <img src="{{asset('/')}}frontend/images/use_img/t1.jpg" alt="" />
                                    <span>Mark Freeman</span>
                                    <cite>Some TItle</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>

                    <div class="item ">
                        <div class="col-xs-12 col-md-12">
                            <blockquote>
                                <p>It has survived not only five centuries, but also the leap
                                    into electronic typesetting, remaining essentially unchanged.</p>
                                <footer>
                                    <img src="{{asset('/')}}frontend/images/use_img/t1.jpg" alt="" />
                                    <span>Mark Freeman</span>
                                    <cite>Some TItle</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>

                <ol class="carousel-indicators">
                    <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonials" data-slide-to="1"></li>
                </ol>
            </div>
        </div>
    </div>
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-12 col-sm-8">
                        <h3>Remaining essentially unchanged.</h3>
                        <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <a href="home-1.html#" class="btn btn-medium btn-default pull-right">Know More <i class="lnr lnr-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

@endsection
