<?php include('header1.php') ?>
        <!--Start slider-section-->
   
        <!--End slider-section-->
        <!-- start blog-section-->
        <section class="contact-section contact-page">
            <div class="container">
                <div class="section-title text-center">
                    <h2>contact us</h2>
                    <p>Our church is open from Monday to Friday and the contacts below can be used to communicate with the church administration via the phone<br> 
                        our Midweek service is delivered every Wednesday from 5 to 6 Oclock, on Thursday and Sartudays they are women and praise team preparatory activities  </p>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12">
                        <div class="contact-us">
                            <div class="contaat-item">
                                <div class="icon">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <h4>Address:</h4>
                                    <p>Chirimba International Vision Assembly ,
                                        <br>Po Box 3134 Chichiri Blantyre 3</p>
                                </div>
                            </div>
                            <div class="contaat-item con-pd">
                                <div class="icon">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <h4>Email Address:</h4>
                                    <p>info@ivassembly.org
                                        <br>bsinkhonde@gmail.com </p>
                                </div>
                            </div>
                            <div class="contaat-item con-pd">
                                <div class="icon">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <h4>Phone</h4>
                                    <p>+265 888 384 355
                                        <br>+265 999 448 484</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="default-form-2 clearfix">
                                    <form id="contact-form" name="contact_form" class="default-form" action="http://perconcept.muzahid.com/Kindness/sendmail.php" method="post">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" name="form_name" value="" placeholder="Full Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="email" name="form_email" value="" placeholder="Email Address" required="">
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                               <div class="form-group">
                                                    <input type="text" name="form_subject" value="" placeholder="Subject" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="form_phone" value="" placeholder="phone" required="">
                                                </div>
                                                <div class="form-group comments">
                                                    <textarea name="form_message" placeholder="Detail" required=""></textarea>
                                                </div>
                                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                                <button class="btn btn-1" type="submit" data-loading-text="Please wait...">Contact Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>              
                    </div>
                </div>
            </div>
        </section>
        <!--End blog-section-->
        <!--.news-seciton-->
        <div class="news-seciton">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="news-text">
                            <h4>Newsletter Sign-up</h4>
                            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <div class="news-form">
                            <input type="text" name="lastname" placeholder="Full Name" value="">
                            <input type="email" name="email" placeholder="Email" value="">
                            <button type="submit" class="btn news-btn">send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/news-seciton-->
      <?php include('footer.php'); ?>