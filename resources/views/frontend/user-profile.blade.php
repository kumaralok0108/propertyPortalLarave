<x-left-menu/>
                    <div class="col-lg-6 col-md-6 col-xs-6 widget-boxed mt-33 mt-0 offset-lg-2 offset-md-3">
                       <div class="col-lg-12 mobile-dashbord dashbord">
                            <div class="dashboard_navigationbar dashxl">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i> Dashboard Navigation</button>
                                    <ul id="myDropdown" class="dropdown-content">
                                        <li>
                                            <a href="dashboard.php">
                                                <i class="fa fa-map-marker mr-3"></i> Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a class="active" href="user-profile.php">
                                                <i class="fa fa-user mr-3"></i>Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="my-listings.php">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>My Properties
                                            </a>
                                        </li>
                                      
                                        <li>
                                            <a href="add-property.php">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>Add Property
                                            </a>
                                        </li>
                                      
                                        
                                        <li>
                                            <a href="change-password.php">
                                                <i class="fa fa-lock mr-3"></i>Change Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.php">
                                                <i class="fas fa-sign-out-alt mr-3"></i>Log Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget-boxed-header">
                            <h4>Profile Details</h4>
                        </div>
                        <div class="sidebar-widget author-widget2">
                            <div class="author-box clearfix">
                                <img src="images/testimonials/ts-1.jpg" alt="author-image" class="author__img">
                                <h4 class="author__title">Lisa Clark</h4>
                                <p class="author__meta">Agent of Property</p>
                            </div>
                            <ul class="author__contact">
                                <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>302 Av Park, New York</li>
                                <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">(234) 0200 17813</a></li>
                                <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">lisa@gmail.com</a></li>
                            </ul>
                            <div class="agent-contact-form-sidebar">
                                <h4>Request Inquiry</h4>
                                <form name="contact_form" method="post" action="functions.php">
                                    <input type="text" id="fname" name="full_name" placeholder="Full Name" required />
                                    <input type="number" id="pnumber" name="phone_number" placeholder="Phone Number" required />
                                    <input type="email" id="emailid" name="email_address" placeholder="Email Address" required />
                                    <textarea placeholder="Message" name="message" required></textarea>
                                    <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit Request" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <x-left-footer/>