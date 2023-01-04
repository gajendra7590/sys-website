<?php include('header.php');?>  
<section>
    <div class="kool-contact pt-3 koolbg pb-3" style="background-image: url('./assets/images/about-2.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 pt-5">
                    <div class="shadow p-4"> 
                        <div class="md-title mt-2 mb-2">
                            Need Help? Feel free to contact us, 24X7 Supprt Services.
                        </div>
                        <p class="xs-title mt-4 pb-4">
                            Come and visit our quarters or simply send us an email anytime you want. We are open to all suggestions from our audience.
                        </p>

                        <div class="kool-form">
                            <p style="text-left: center;color: green;font-size: 18px;" id="successMessage"></p>
                            <br>
                            <form action="" method="post" enctype="multipart/form-data" id="contactUsForm">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="xs-title mb-2">Your Name</label>
                                            <input type="text" class="form-control xs-title" aria-describedby="emailHelp" placeholder="Enter Name" name="name" id="contactName"> 
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="" class="xs-title mb-2">Your Contact No.</label>
                                            <input type="text" class="form-control xs-title" aria-describedby="emailHelp" placeholder="Enter Contact No." name="contact" id="contactPhone"> 
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="" class="xs-title mb-2">Your Email</label>
                                            <input type="email" class="form-control xs-title" aria-describedby="emailHelp" placeholder="Enter Email" name="email" id="contactEmail">

                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="" class="xs-title mb-2">Your Message</label>
                                            <textarea class="form-control xs-title" rows="1" name="message" placeholder="Enter Message" id="contactMessage"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" name="submit" class="btn  btn-outline-secondary custom-btn" tabindex="-1"> Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="row mt-5">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="about-services">
                                <div class="element-icon-box d-flex flex-wrap">
                                    <i class="fas fa-headset title-gray mr-3 mr-2 f-20"></i> 
                                    <h5 class='koolconsole-title f-20'>Phone Number</h5>
                                </div>  
                                <div class="element-content-box"> 
                                    <p class='mt-2 mb-3 title-gray xs-title'> <?php echo CONTACT ;?></p> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="about-services">
                                <div class="element-icon-box d-flex flex-wrap">
                                    <i class="fas fa-at title-gray mr-2 f-20"></i> 
                                    <h5 class='koolconsole-title f-20'>Email Address</h5>
                                </div>

                                <div class="element-content-box"> 
                                    <p class='mt-2 mb-3 title-gray xs-title'> <?php echo EMAIL ;?></p> 
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="about-services">
                                <div class="element-icon-box d-flex flex-wrap">
                                    <i class="fas fa-map-marker-alt title-gray mr-2 f-20"></i>  
                                    <h5 class='koolconsole-title mr-3 f-20'>Our Location</h5>
                                </div> 
                                <div class="element-content-box"> 
                                    <p class='mt-2 mb-3 title-gray xs-title'> <?php echo ADDRESS ;?></p> 
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="about-services">
                                <div class="element-icon-box d-flex flex-wrap">
                                    <i class="fab fa-skype title-gray mr-3 f-20"></i> 
                                    <h5 class='koolconsole-title f-20'>Skype Address</h5>
                                </div>

                                <div class="element-content-box"> 
                                    <p class='mt-2 mb-3 title-gray xs-title'> <?php echo SKYPE ;?></p> 
                                </div> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php');?>