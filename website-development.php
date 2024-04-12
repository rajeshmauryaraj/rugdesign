<?php include('header.php'); ?>
<section class="page-title-section web-design-banner" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="page-header text-center">
                <h1>Website Development</h1>
                <p>Reliable and Customized CMS Services to help you enhance and manage your
website seamlessly.</p>
            </div>
        </div>
    </section>
    <section class="inner-block web-inner-pages gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <h2 class="title">Improve & Elevate your website/ application
With Customized CMS Solutions<span> </span></h2>
                    </div>
                    <div class="bar-main mb-3 mt-2">
                        <div class="bar bar-big-left"></div>
                    </div>
                    <div class="text">
                        <p>R.S Smart Web Ideas offers state-of-the-art CMS Development Services that help you gain better
                             controller of your content. We offer a variation of services, including cloud-based CMS and 
                            database management systems to professionally manage and control your processes.</p>
                        <p>
                           We are passionate about crafting brilliant web experiences. Our web development services are 
                            personalized to meet the specific needs of our clients, delivering high-quality and visually fabulous websites. 
                            Whether you require a simple, informative website, our skilled team of developers and designers will work
                             closely with you to carry your vision to life. With a focus on user-centric design, seamless functionality,
                             and responsive layouts, we ensure that your website not only looks great but also delivers a seamless 
                            browsing experience across devices. Trust us to build your online presence with a website that captures
                             your brand identity and engages your target audience effectively.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="web-sec-image">
                        <img  src="images/web-development.jpg" alt="Website Development" />
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <h4 class="heading-red">Our Process of CMS Development</h4>
                    <ul class="check-circle-list mt-4">
                        <li><i class="fa fa-check-circle"></i>Customization</li>
                        <li><i class="fa fa-check-circle"></i>CMS Development</li>
                        <li><i class="fa fa-check-circle"></i>Plug-in Development</li>
                        <li><i class="fa fa-check-circle"></i>CMS Migration</li>
                        <li><i class="fa fa-check-circle"></i>Support and Maintenance</li>
                        <li><i class="fa fa-check-circle"></i>Improve the website’s responsiveness and speed</li>
                         <li><i class="fa fa-check-circle"></i>Better scalability of the website</li>
                    </ul>
                </div>
                <div class="col-md-6">
                <form method="post" action="mail-now.php" class="inner-form">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <p class="heading-red">Say Hi!</p>
                            <h3 class="mb-2 mt-2">Get Started</h3>
                            <p class="mb-4">Do you have questions or suggestions? We are happy to communicate in any
                                situation!</p>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control" required="" placeholder="Enter Name*" />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="phone" maxlength="10" name="phone" placeholder="Enter Mobile No.*"  onkeyup="check(); return false;" onkeypress="return isNumberKey(event);" />
                                <div class="help-block with-errors" id="message"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                            <input type="hidden" id="frmmail" name="frmmail" value="no-reply@rssmartwebideas.com" />
                                <input type="email" id="email" name="email" class="form-control" required="" placeholder="Enter Email" />
                                <div class="help-block with-errors" id="result"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <select class="form-control"  name="sevicetype" >
                                    <option>Website Designing</option>
                                    <option>Website Development</option>
                                    <option>SEO Optimization</option>
                                    <option>Social Media Marketing</option>
                                    <option>Hosting & Domain</option>
                                    <option>Others Information</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <!-- <button class="contact-btn border-0">Order a Call</button> -->
                            <button class="button-71" id="button" role="button" type="submit">Order a Call</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
<?php include('footer.php'); ?>