<?php

function mo_openid_licensing_plans()
{
    ?>

    <div style="text-align:center; color: rgb(233, 125, 104); margin-top: 55px; font-size: 23px"> You are currently on the Free version of the plugin <br> <br><span style="font-size: 20px; ">
        <li style="color: dimgray; list-style-type: none;">
            <div class="mo_openid-quote">
                <p>
                    <span onclick="void(0);" class="mo_openid-check-tooltip" style="font-size: 15px">Why should I upgrade?
                        <span class="mo_openid-info">
                            <span class="mo_openid-pronounce">Why should I upgrade to premium plugin?</span>
                            <span class="mo_openid-text">Upgrading lets you access all of our features such as Integration, User account moderation etc.</span>
                        </span>
                    </span>
                </p>
            </div>
            <br><br>
        </li>
    </div>

    <div style="text-align: center; font-size: 14px; background: forestgreen; color: white; padding-top: 4px; padding-bottom: 4px; border-radius: 16px;"></div>

    <input type="hidden" id="mo_license_plan_selected" value="" />
    <div class="mo-openid-tab-content">
        <div class="active">
            <br>
            <div class="mo-openid-cd-pricing-container mo-openid-cd-has-margins"><br>
                <div class="mo-open-id-cd-pricing-switcher">
                    <p class="mo-open-id-fieldset" style="background-color: #e97d68;">
                        <input type="radio" name="sitetype" value="singlesite" id="singlesite" checked>
                        <label for="singlesite">Plugins</label>
                        <input type="radio" name="sitetype" value="multisite" id="multisite">
                        <label for="multisite">Add-ons</label>
                        <span class="mo-open-id-cd-switch"></span>
                    </p>
                </div>
                <div style="line-height: initial; background: #F2F5FB;border-radius:5px;font-size: large;margin-top:10px;padding:10px;border-style: solid;border-color: #2f6062">
                    <span class="dashicons dashicons-info" style="vertical-align: bottom;"></span>
                    Upgrading to any plan is a <b style="color: black">One-Time Payment</b> which includes 1 year of updates. You can continue using all the available features in that plan for lifetime. Contact us at <a style="color:blue
    " href="mailto:socialloginsupport@xecurify.com">socialloginsupport@xecurify.com</a> for bulk discounts.
                </div>
                <ul id="list-type" class="mo-openid-cd-pricing-list cd-bounce-invert" >
                    <li>
                        <ul class="mo-openid-cd-pricing-wrapper" id="col1">
                            <li data-type="singlesite" class="mosslp is-visible" style="">
                                <header class="mo-openid-cd-pricing-header">
                                    <h2 style="margin-bottom: 10%;">Login with Apple Plan</h2>
                                    <!--                                    <h3 class="mo-openid-subheading_plans" style="color:black;"><span> &nbsp;</span><br><br> <span>&#36;159 - 10 Instance </span><br /><br /></h3>-->
                                    <label for="mo_openid_ap">Select No. of Instances : </label>
                                    <select name="mo_openid_ap" id="mo_openid_ap">
                                        <option value="1">1</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                    </select>

                                    <div class="cd-price" style="margin-top: 9%;">
                                        <span class="mo-openid-cd-currency">$</span>
                                        <span id="mo_openid_ap1" class="mo-openid-cd-value">25</span> &nbsp;&nbsp;
                                        <span class="mo-openid-cd-currency">$</span>
                                        <span id="mo_openid_ap2" class="mo-openid-cd-value"><s>29</s></span>
                                    </div>
                                </header> <!-- .mo-openid-cd-pricing-header -->
                                <footer class="mo-openid-cd-pricing-footer">
                                    <a href="#" class="mo-openid-cd-select" onclick="mosocial_addonform('wp_social_login_apple_plan')" >Upgrade Now</a>
                                </footer>
                                <div class="mo-openid-cd-pricing-body">
                                    <ul class="mo-openid-cd-pricing-features">
                                        <li><b>All Free features +</b></li>
                                        <li>Apple Login</li>
                                        <li>Twitch Login</li>
                                        <li>Discord Login</li>
                                        <li><a style="cursor: pointer" onclick="mo_openid_support_form('')">Click here to Contact Us</a></li>
                                    </ul>
                                </div> <!-- .mo-openid-cd-pricing-body -->
                            </li>
                            <li data-type="singlesite" class="mosslp is-visible" style="">
                                <header class="mo-openid-cd-pricing-header">
                                    <h2 style="margin-bottom: 10%;">Social Sharing</h2>
                                    <label for="mo_openid_ss">Select No. of Instances : </label>
                                    <select name="mo_openid_ss" id="mo_openid_ss">
                                        <option value="1">1</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                    </select>

                                    <div class="cd-price" style="margin-top: 9%;">
                                        <span class="mo-openid-cd-currency">$</span>
                                        <span id="mo_openid_ss1" class="mo-openid-cd-value">15</span> &nbsp;&nbsp;
                                        <span class="mo-openid-cd-currency">$</span>
                                        <span id="mo_openid_ss2" class="mo-openid-cd-value"><s>19</s></span>
                                    </div>
                                </header> <!-- .mo-openid-cd-pricing-header -->
                                <footer class="mo-openid-cd-pricing-footer">
                                    <a href="#" class="mo-openid-cd-select" onclick="mosocial_addonform('wp_social_login_share_plan')" >Upgrade Now</a>
                                </footer>

                                <div class="mo-openid-cd-pricing-body">
                                    <ul class="mo-openid-cd-pricing-features ">
                                        <li><b>All Free features +</b></li>
                                        <li>45 Social Sharing Apps</li>
                                        <li>Social Share Count</li>
                                        <li>WooCommerce Social</li>
                                        <li>Facebook Like & Recommended</li>
                                        <li>Pinterest Pin it Button</li>
                                        <li>Twitter Follow Button</li>
                                        <li>Hover Icons & Floating Icons</li>
                                        <li>Vertical Icons & Horizontal Icons</li>
<!--                                        <li>Display Options</li>-->
<!--                                        <li>E-mail subscriber</li>-->
                                        <li>Shortcodes to display social icons on<br/>any homepage page, post, popup and php pages.</li>
                                        <li><a style="cursor: pointer" onclick="mo_openid_support_form('')">Click here to Contact Us</a></li>
                                    </ul>
                                </div> <!-- .mo-openid-cd-pricing-body -->
                            </li>

                            <li data-type="multisite" class="momslp is-hidden" style="">
                                <header class="mo-openid-cd-pricing-header">

                                    <h2 style="margin-bottom: 10%;" >Custom Registration Form Add-On </h2>
                                    <!--                                    <h3 class="mo-openid-subheading_plans" style="color:black;"><span> &nbsp;</span><br> <span>&#36;109 - 10 Instance </span><br><br /><br /></h3>-->

                                    <label for="mo_openid_cra">Select No. of Instances : </label>
                                    <select name="mo_openid_cra" id="mo_openid_cra">
                                        <option value="1">1</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                    </select>

                                    <div class="cd-price" style="margin-top: 9%;">
                                        <span class="mo-openid-cd-currency">$</span>
                                        <span id="mo_openid_cra1" class="mo-openid-cd-value">25</span> &nbsp;&nbsp;
                                        <span class="mo-openid-cd-currency">$</span>
                                        <span id="mo_openid_cra2" class="mo-openid-cd-value"><s>29</s></span>

                                    </div>
                                </header>
                                <!-- .mo-openid-cd-pricing-header -->
                                <footer class="mo-openid-cd-pricing-footer">
                                    <a href="#" class="mo-openid-cd-select" id="mosocial_purchase_cust_addon" onclick="mosocial_addonform('wp_social_login_extra_attributes_addon')" >Upgrade Now</a>
                                </footer>

                                <div class="mo-openid-cd-pricing-body">
                                    <ul class="mo-openid-cd-pricing-features">
                                        <li>Create a pre-registration form</li>
                                        <li>Allow user to select Role while Registration</li>
                                        <li>All WordPress Themes Supported</li>
                                        <li>Map Users Data returned from all Social Apps</li>
                                        <li>Add Custom Fields in the Registration form</li>
<!--                                        <li>Edit Profile option using shortcode</li>-->
<!--                                        <li>Support input field types: text, date, checkbox or dropdown</li>-->
                                        <li>Advanced Form Control</li>
                                        <li>Sync existing meta field</li>
                                        <li><a style="cursor: pointer" onclick="mo_openid_support_form('')">Click here to Contact Us</a></li>
                                    </ul>
                                </div> <!-- .mo-openid-cd-pricing-body -->
                            </li>
                        </ul> <!-- .mo-openid-cd-pricing-wrapper -->
                    </li>

                    <li class="mo-openid-cd-popular">
                        <ul class="mo-openid-cd-pricing-wrapper" id="col2">
                            <li data-type="singlesite" class="mosslp is-visible" style="">
                                <header class="mo-openid-cd-pricing-header">
                                    <h2 style="margin-bottom: 10%;" >Standard<span style="font-size:0.5em"></span></h2>
                                    <!--                                    <h3 class="mo-openid-subheading_plans" style="color:black;"><span> &nbsp;</span><br> <span>&#36;169 - 10 Instance </span><br><br /><br /></h3>-->

                                    <label for="mo_openid_std">Select No. of Instances : </label>
                                    <select name="mo_openid_std" id="mo_openid_std">
                                        <option value="1">1</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                    </select>

                                    <div class="cd-price" style="margin-top: 9%;">
                                        <span class="mo-openid-cd-currency">$</span>
                                        <span id="mo_openid_std1" class="mo-openid-cd-value">29</span> &nbsp;&nbsp;
                                        <span class="mo-openid-cd-currency">$</span>
                                        <span id="mo_openid_std2" class="mo-openid-cd-value"><s>39</s></span>
                                    </div>
                                </header> <!-- .mo-openid-cd-pricing-header -->
                                <footer class="mo-openid-cd-pricing-footer">
                                    <a href="#" class="mo-openid-cd-select" onclick="mosocial_addonform('wp_social_login_standard_plan')" >Upgrade Now</a>
                                </footer>
                                <div class="mo-openid-cd-pricing-body">
                                    <ul class="mo-openid-cd-pricing-features">
                                        <li><b>All Free features +</b></li>
                                        <li>7 Pre-configured Social Login Apps</li>
                                        <li>
                                            <div class="mo_openid_tooltip" style="padding-left: 40px;">30 Custom Login Apps <i class="mofa mofa-commenting " style="font-size:18px; color:#85929E"></i><span class="mo_openid_tooltiptext" style="width:100%;"> Using the custom app tab, you can set up your own app id and secret in the plugin. Login flow will not involve miniOrange in between. Login flow will go from plugin to social media application and then back to plugin.<br>30 custom apps are <span id="mo_openid_dots2">...</span><span id="mo_openid_more2" style="display:none" ><br>Facebook,Google,Yandex,Paypal,<br>vkontakte,Reddit,twitter,linkedin,<br>amazon,windowslive,yahoo,disqus<br>,instagram,wordpress,pinterest,<br>
                                            spotify,tumblr,vimeo,kakao<br>,discord,dribble,flickr,line,<br>meetup,naver,snapchat,foursquare,<br>teamsnap,stackexchange,livejournal & odnoklassniki.</span><button style="border:transparent;background-color: transparent;color: tomato;" onclick="myFunction('mo_openid_dots2','mo_openid_more2','mo_openid_myBtn2')" id="mo_openid_myBtn2">Read more</button>
                                            </div>
                                        </li>
                                        <li>General Data Protection Regulation (GDPR)</li>
                                        <li>Google recaptcha</li>
                                        <li>Woocommerce Social Login</li>
                                        <li>BuddyPress Social Login</li>
                                        <li>Advance Account Linking</li>
                                        <li>Various Email notification options to users & multiple admins</li>
                                        <li>Woocommerce Display Options</li>
                                        <li>Account Linking & Unlinking for Users</li>
                                        <li>Welcome Email to end users</li>
                                        <li>Customizable Email Notification template</li>
                                        <li>Customizable welcome Email template</li>
                                        <li>Custom CSS for Social Login buttons</li>
                                        <li>Social Login Opens in a New Window</li>
                                        <li>Domain restriction</li>
                                        <li>Force Admin To Login Using Password</li>
                                        <li>Send Username and Password Reset link</li>
                                        <li>Disable Admin Bar</li>

                                        <li><a style="cursor: pointer" onclick="mo_openid_support_form('')">Click here to Contact Us</a></li>
                                    </ul>
                                </div> <!-- .mo-openid-cd-pricing-body -->
                            </li>

                            <li data-type="multisite" class="momslp is-hidden" style="">
                                <header class="mo-openid-cd-pricing-header">
                                    <h2 style="margin-bottom: 10%;">WooCommerce Integration Add-On</h2>
                                    <label for="mo_openid_wca_in">Select No. of Instances : </label>
                                    <select name="mo_openid_wca_in" id="mo_openid_wca_in">
                                        <option value="1">1</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                    </select>

                                    <div class="cd-price" style="margin-top: 9%;">
                                        <span class="mo-openid-cd-currency">$</span>
                                        <span id="mo_openid_wca_in1" class="mo-openid-cd-value">25</span> &nbsp;&nbsp;
                                        <span class="mo-openid-cd-currency">$</span>
                                        <span id="mo_openid_wca_in2" class="mo-openid-cd-value"><s>29</s></span>
                                    </div>
                                </header> <!-- .mo-openid-cd-pricing-header -->
                                <footer class="mo-openid-cd-pricing-footer">
                                    <a href="#" class="mo-openid-cd-select" onclick="mosocial_addonform('wp_social_login_woocommerce_addon')" >Upgrade Now</a>
                                </footer>
                                <div class="mo-openid-cd-pricing-body">
                                    <ul class="mo-openid-cd-pricing-features">
                                        <li><b>All Free features +</b></li>
                                        <li>WooCommerce Display Options</li>
                                        <li><div class="mo_openid_tooltip" >WooCommerce Integration <i class="mofa mofa-commenting" style="font-size:18px;color:#85929E"></i> <span class="mo_openid_tooltiptext" style="width:100%;"> First name, last name and email are pre-filled in billing details of a user and on the Woocommerce checkout page. Social Login icons are displayed on the Woocommerce checkout page.</span></li>
                                        <li>Social Login on WooCommerce Login Page</li>
                                        <li>Social Login on WooCommerce Registration Page</li>
                                        <li>Social Login on WooCommerce Checkout Page</li>
                                        <li>Before WooCommerce Login Form</li>
                                        <li>Before 'Remember Me' of WooCommerce Login Form</li>
                                        <li>After WooCommerce Login Form</li>
                                        <li>Before WooCommerce Registration Form</li>
                                        <li>Before 'Register button' of WooCommerce Registration Form</li>
                                        <li>After WooCommerce Registration Form</li>
                                        <li>Before & After WooCommerce Checkout Form</li>
                                        <li><a style="cursor: pointer" onclick="mo_openid_support_form('')">Click here to Contact Us</a></li>
                                    </ul>
                                </div> <!-- .mo-openid-cd-pricing-body -->
                            </li>
                        </ul> <!-- .mo-openid-cd-pricing-wrapper -->
                    </li>

                    <li>
                        <ul class="mo-openid-cd-pricing-wrapper" id="col3">
                            <li data-type="singlesite" class="mosslp is-visible" style="">
                                <header class="mo-openid-cd-pricing-header">
                                    <h2 style="margin-bottom: 10%;">Premium</h2>
                                    <label for="mo_openid_pre">Select No. of Instances : </label>
                                    <select name="mo_openid_pre" id="mo_openid_pre">
                                        <option value="1">1</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                    </select>

                                    <div class="cd-price" style="margin-top: 9%;">
                                        <span class="mo-openid-cd-currency">$</span>
                                        <span id="mo_openid_pre1" class="mo-openid-cd-value">49</span> &nbsp;&nbsp;
                                        <span class="mo-openid-cd-currency">$</span>
                                        <span id="mo_openid_pre2" class="mo-openid-cd-value"><s>59</s></span>
                                    </div>
                                </header> <!-- .mo-openid-cd-pricing-header -->
                                <footer class="mo-openid-cd-pricing-footer">
                                    <a href="#" class="mo-openid-cd-select" onclick="mosocial_addonform('wp_social_login_premium_plan')" >Upgrade Now</a>
                                </footer>
                                <div class="mo-openid-cd-pricing-body">
                                    <ul class="mo-openid-cd-pricing-features">
                                        <li><b>All Free features +</b></li>
                                        <li><b>All Standard features +</b></li>
                                        <li>8 Pre-configured Social Login Apps</li>
                                        <li>
                                            <div class="mo_openid_tooltip" style="padding-left: 40px;">37 Custom Login Apps <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"></i><span class="mo_openid_tooltiptext" style="width:100%;"> Using the custom app tab, you can set up your own app id and secret in the plugin. Login flow will not involve miniOrange in between. Login flow will go from plugin to social media application and then back to plugin.<br>37 custom apps are <span id="mo_openid_dots3">...</span><span id="mo_openid_more3" style="display:none" ><br>Facebook,Google,Yandex,Paypal,<br>vkontakte,Reddit,twitter,linkedin,<br>amazon,windowslive,yahoo,apple,<br>disqus,instagram,wordpress,pinterest<br>
                                                spotify,tumblr,twitch,vimeo,<br>kakao,discord,dribble,flickr,<br>line,meetup,naver,snapchat,<br>foursquare,teamsnap,stackexchange,<br> Github,Mailru,Hubspot,livejournal & odnoklassniki.</span><button style="border:transparent;background-color: transparent;color: tomato;" onclick="myFunction('mo_openid_dots3','mo_openid_more3','mo_openid_myBtn3')" id="mo_openid_myBtn3">Read more</button>
                                            </div>
                                        </li>
                                        <li>Apple, Twitch & Discord Social Login</li>
<!--                                        <li><span class="mo_openid_tooltip">Custom attribute mapping <i class="mofa mofa-commenting" style="font-size:18px;color:#85929E"></i> <span class="mo_openid_tooltiptext" style="width:100%;">Extended attributes returned from social app are mapped to Custom attributes created by admin. These Attributes get stored in user_meta.</span></li>-->
                                        <li><div class="mo_openid_tooltip" ><img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__)));?>includes/images/woocommerce.png" alt="wc" style="width:35px;height:20px;"> Woocommerce Integration  <i class="mofa mofa-commenting" style="font-size:18px;color:#85929E"></i> <span class="mo_openid_tooltiptext" style="width:100%;"> First name, last name and email are pre-filled in billing details of a user and on the Woocommerce checkout page. Social Login icons are displayed on the Woocommerce checkout page.</span></li>
                                        <li><span class="mo_openid_tooltip"><img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__)));?>includes/images/paidmember.png" alt="pmpro" style="width:35px;height:20px;">  Paid Membership pro Integration <i class="mofa mofa-commenting" style="font-size:18px;color:#85929E"></i> <span class="mo_openid_tooltiptext" style="width:100%;">Assign default levels or let users choose to set their levels provided by Paid Membership Pro to the users login using Social Login</span></li>
                                        <li><div class="mo_openid_tooltip" ><img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__)));?>includes/images/buddypress.png" alt="bp" style="width:35px;height:20px;"> BuddyPress Integration<i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"> </i><span class="mo_openid_tooltiptext" style="width:100%;"> Extended attributes returned from social app are mapped to Custom BuddyPress fields. Profile picture from social media is mapped to Buddypress avatar.</span></li>
                                        <li><div class="mo_openid_tooltip" ><img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__)));?>includes/images/mailchimp_logo.png" alt="mc" style="width:35px;height:20px;"> MailChimp Integration <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"> </i><span class="mo_openid_tooltiptext" style="width:100%;">A user is added as a subscriber to a mailing list in MailChimp when that user registers using Social Login. First name, last name and email are also captured for that user in the Mailing List. Option is available to download csv file that has list of emails of all users in WordPress.</span></li>
                                        <li><div class="mo_openid_tooltip" >miniOrange OTP Integration<span style="color: red">*</span> <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"> </i><span class="mo_openid_tooltiptext" style="width:100%;">Verify your users via OTP on registration.</span></li>
<!--                                        <li><div class="mo_openid_tooltip" >Extended Profile Data <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"> </i><span class="mo_openid_tooltiptext" style="width:100%;">Extended profile data feature requires additional configuration. You need to have your own social media app and permissions from social media providers to collect extended user data.</span></li>-->
<!--                                        <li><div class="mo_openid_tooltip" >Custom Integration <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"> </i><span class="mo_openid_tooltiptext" style="width:100%;"> If you have a specific custom requirement in the Social Login Plugin, we can implement and integrate it in the Plugin fo you. This includes all those custom features that come under the scope of Social Login/ Sharing/ Comments and impart additional value to the plugin. These features are chargeable. Please send us a query through the support forum to get in touch with us about your custom requirements.</span></div></li>-->
                                        <li>Social Login for WooCommerce, BuddyPress, PMPro, MemberPress & Ultimate Member</li>
                                        <li>Send Account Activation Link to the Users</li>
                                        <li>General Data Protection Regulation (GDPR)</li>
                                        <li>Google recaptcha</li>
                                        <li>Advance Account Linking</li>
                                        <li>Various Email notification options to users & multiple admins</li>
                                        <li>Account Linking & Unlinking for Users</li>
                                        <li>Custom CSS for Social Login buttons</li>
                                        <li>Domain Restriction</li>
                                        <li>Force Admin To Login Using Password</li>
                                        <li>Send username and password reset link</li>
                                        <li>Disable admin bar</li>
<!--                                        <li>Restrict registration from specific pages</li>-->
<!--                                        <li>User Moderation</li>-->
<!--                                        <li>Advance Account Linking</li>-->
<!--                                        <li>General Data Protection Regulation (GDPR)</li>-->
<!--                                        <li>BuddyPress Display Options</li>-->
<!--                                        <li>Woocommerce Display Options</li>-->
<!--                                        <li>Account Linking & Unlinking for Users</li>-->
<!--                                        <li>Various Email notification options to Users and Multiple admins</li>-->
<!--                                        <li>Welcome Email to end users</li>-->
<!--                                        <li>Customizable Email Notification template</li>-->
<!--                                        <li>Customizable welcome Email template</li>-->
<!--                                        <li>Custom CSS for Social Login buttons</li>-->
<!--                                        <li>Social Login Opens in a New Window</li>-->
<!--                                        <li>Domain restriction</li>-->
<!--                                        <li>Force Admin To Login Using Password</li>-->
<!--                                        <li>Send username and password reset link</li>-->
<!--                                        <li>Disable admin bar</li>-->
<!--                                        <li>Google recaptcha</li>-->


                                        <li><a style="cursor: pointer" onclick="mo_openid_support_form('')">Click here to Contact Us</a></li>
                                    </ul>
                                </div> <!-- .mo-openid-cd-pricing-body -->
                            </li>
                            <li data-type="multisite" class="momslp is-hidden" style="">
                                <a id="popover5" data-toggle="popover">
                                    <header class="mo-openid-cd-pricing-header">
                                        <h2 style="margin-bottom: 10%;">BuddyPress Integration Add-On</h2>
                                        <label for="mo_openid_bpa">Select No. of Instances : </label>
                                        <select name="mo_openid_bpa" id="mo_openid_bpa">
                                            <option value="1">1</option>
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                        </select>

                                        <div class="cd-price" style="margin-top: 9%;">
                                            <span class="mo-openid-cd-currency">$</span>
                                            <span id="mo_openid_bpa1" class="mo-openid-cd-value">25</span> &nbsp;&nbsp;
                                            <span class="mo-openid-cd-currency">$</span>
                                            <span id="mo_openid_bpa2" class="mo-openid-cd-value"><s>29</s></span>
                                        </div>
                                    </header> <!-- .mo-openid-cd-pricing-header -->
                                </a>
                                <footer class="mo-openid-cd-pricing-footer">
                                    <a href="#" class="mo-openid-cd-select" onclick="mosocial_addonform('wp_social_login_buddypress_addon')" >Upgrade Now</a>
                                </footer>
                                <div class="mo-openid-cd-pricing-body">
                                    <ul class="mo-openid-cd-pricing-features">
                                        <li><b>All Free features +</b></li>
                                        <li>Social Login for BuddyPress</li>
                                        <li><div class="mo_openid_tooltip" >BuddyPress Integration <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"> </i><span class="mo_openid_tooltiptext" style="width:100%;"> Extended attributes returned from social app are mapped to Custom BuddyPress fields. Profile picture from social media is mapped to Buddypress avatar.</span></li>
                                        <li>Before BuddyPress Registration Form</li>
                                        <li>Before BuddyPress Account Details</li>
                                        <li>After BuddyPress Registration Form</li>
                                        <li><a style="cursor: pointer" onclick="mo_openid_support_form('')">Click here to Contact Us</a></li>
                                    </ul>
                                </div> <!-- .mo-openid-cd-pricing-body -->
                            </li>
                        </ul> <!-- .mo-openid-cd-pricing-wrapper -->
                    </li>

                    <li class="mo-openid-cd-popular">
                        <ul class="mo-openid-cd-pricing-wrapper" id="col4">
                            <li data-type="singlesite" class="mosslp is-visible" style="">
                                <header class="mo-openid-cd-pricing-header">
                                    <h2 style="margin-bottom: 10%;">All-In-One</h2>
                                    <label for="mo_openid_ai">Select No. of Instances : </label>
                                    <select name="mo_openid_ai" id="mo_openid_ai">
                                        <option value="1">1</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                    </select>

                                    <div class="cd-price" style="margin-top: 9%;">
                                        <span class="mo-openid-cd-currency">$</span>
                                        <span id="mo_openid_ai1" class="mo-openid-cd-value">89</span> &nbsp;&nbsp;
                                        <span class="mo-openid-cd-currency">$</span>
                                        <span id="mo_openid_ai2" class="mo-openid-cd-value"><s>99</s></span>
                                    </div>
                                </header> <!-- .mo-openid-cd-pricing-header -->
                                <footer class="mo-openid-cd-pricing-footer">
                                    <a href="#" class="mo-openid-cd-select" onclick="mosocial_addonform('wp_social_login_all_inclusive')" >Upgrade Now</a>
                                </footer>
                                <div class="mo-openid-cd-pricing-body">
                                    <ul class="mo-openid-cd-pricing-features ">
                                        <!--<li>
                                            <a  id="openid_question_login" class="mo_openid_all_feature_panel" style="color: black;" onclick="show_faq_options4(this.id)"><b id="allfeature"><span class="dashicons dashicons-arrow-right"></span>All Free features + </b></a>
                                            <div class="mo_openid_help_desc" hidden="" id="openid_question_login_desc">
                                                <h3>All Standard Features +</h3>
                                                <h3>All Premium Features +</h3>
                                                <h3>All Sharing Features +</h3>
                                                <h3>All Popular Integrations</h3>
                                                <h3><img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__)));?>includes/images/woocommerce.png" alt="int" style="width:35px;height:20px;"> <img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__)));?>includes/images/buddypress.png" alt="int" style="width:35px;height:20px;"><img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__)));?>includes/images/mailchimp_logo.png" alt="int" style="width:35px;height:20px;"><img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__)));?>includes/images/paidmember.png" style="width:35px;height:20px;"></h3>
                                            </div>
                                        </li>-->
                                        <li><b>All Free features +</b></li>
                                        <li><b>All Standard features +</b></li>
                                        <li><b>All Premium features +</b></li>
                                        <li><b>All Sharing features +</b></li>
                                        <li>Free Custom Registration Add-On</li>
                                        <li>8 Pre-configured Social Login Apps</li>
                                        <li>
                                            <div class="mo_openid_tooltip" style="padding-left: 40px;">37 Custom Login Apps <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"></i><span class="mo_openid_tooltiptext" style="width:100%;"> Using the custom app tab, you can set up your own app id and secret in the plugin. Login flow will not involve miniOrange in between. Login flow will go from plugin to social media application and then back to plugin.<br>33 custom apps are <span id="mo_openid_dots3">...</span><span id="mo_openid_more3" style="display:none" ><br>Facebook,Google,Yandex,Paypal,vkontakte,<br/>Reddit,twitter,linkedin,amazon,windowslive,<br/>yahoo,apple,disqus,instagram,wordpress,pinterest,<br>
                                                spotify,tumblr,twitch,vimeo,kakao,discord,<br>dribble,flickr,line,meetup,naver,snapchat,foursquare,<br>teamsnap,stackexchange,livejournal & odnoklassniki.</span><button style="border:transparent;background-color: transparent;color: tomato;" onclick="myFunction('mo_openid_dots3','mo_openid_more3','mo_openid_myBtn3')" id="mo_openid_myBtn3">Read more</button>
                                            </div>
                                        </li>
                                        <li>45 Social Sharing Apps</li>
                                        <li>Basic Data Analytics</li>
                                        <li><div class="mo_openid_tooltip" ><img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__)));?>includes/images/woocommerce.png" alt="wc" style="width:35px;height:20px;"> Woocommerce Integration  <i class="mofa mofa-commenting" style="font-size:18px;color:#85929E"></i> <span class="mo_openid_tooltiptext" style="width:100%;"> First name, last name and email are pre-filled in billing details of a user and on the Woocommerce checkout page. Social Login icons are displayed on the Woocommerce checkout page.</span></li>
                                        <li><span class="mo_openid_tooltip"><img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__)));?>includes/images/paidmember.png" alt="pmpro" style="width:35px;height:20px;">  Paid Membership pro Integration <i class="mofa mofa-commenting" style="font-size:18px;color:#85929E"></i> <span class="mo_openid_tooltiptext" style="width:100%;">Assign default levels or let users choose to set their levels provided by Paid Membership Pro to the users login using Social Login</span></li>
                                        <li><div class="mo_openid_tooltip" > <img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__)));?>includes/images/buddypress.png" alt="bp" style="width:35px;height:20px;"> BuddyPress Integration<i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"> </i><span class="mo_openid_tooltiptext" style="width:100%;"> Extended attributes returned from social app are mapped to Custom BuddyPress fields. Profile picture from social media is mapped to Buddypress avatar.</span></li>
                                        <li><div class="mo_openid_tooltip" ><img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__)));?>includes/images/mailchimp_logo.png" alt="mc" style="width:35px;height:20px;"> MailChimp Integration <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"> </i><span class="mo_openid_tooltiptext" style="width:100%;">A user is added as a subscriber to a mailing list in MailChimp when that user registers using Social Login. First name, last name and email are also captured for that user in the Mailing List. Option is available to download csv file that has list of emails of all users in WordPress.</span></li>
                                        <li>Social Login for WooCommerce, BuddyPress, PMPro, MemberPress & Ultimate Member</li>
                                        <li>General Data Protection Regulation (GDPR)</li>
                                        <li>Google recaptcha</li>
                                        <li>Facebook Like & Recommended</li>
                                        <li>Twitter Follow Button</li>
                                        <li>Various Icon Customizations</li>
                                        <li>Shortcodes to display social icons on<br/>any homepage page, post, popup and php pages.</li>
                                        <li>Advance Account Activation & Account Linking</li>
                                        <li>Various Email notification options to users & multiple admins</li>
                                        <li>Custom CSS for Social Login buttons</li>
                                        <li>Domain Restriction</li>
                                        <li>Send Username and Password reset link</li>
                                        <li>Social Share Count</li>
                                        <li><span class="mo_openid_tooltip">Custom attribute mapping <i class="mofa mofa-commenting" style="font-size:18px;color:#85929E"></i> <span class="mo_openid_tooltiptext" style="width:100%;">Extended attributes returned from social app are mapped to Custom attributes created by admin. These Attributes get stored in user_meta.</span></li>
                                        <li><div class="mo_openid_tooltip" >miniOrange OTP Integration<span style="color: red">*</span> <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"> </i><span class="mo_openid_tooltiptext" style="width:100%;">Verify your users via OTP on registration.</span></li>
                                        <li><div class="mo_openid_tooltip" >Extended Profile Data <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"> </i><span class="mo_openid_tooltiptext" style="width:100%;">Extended profile data feature requires additional configuration. You need to have your own social media app and permissions from social media providers to collect extended user data.</span></li>
                                        <li><div class="mo_openid_tooltip" >Custom Integration <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"> </i><span class="mo_openid_tooltiptext" style="width:100%;"> If you have a specific custom requirement in the Social Login Plugin, we can implement and integrate it in the Plugin fo you. This includes all those custom features that come under the scope of Social Login/ Sharing/ Comments and impart additional value to the plugin. These features are chargeable. Please send us a query through the support forum to get in touch with us about your custom requirements.</span></div></li>
                                        <li> Display Options</li>
                                        <li>Send account activation link to the user</li>
                                        <li>Restrict registration from specific pages</li>
                                        <li>User Moderation</li>
                                        <li>Advance Account Linking</li>
                                        <li>Woocommerce, BuddyPress & Ultimate Member Display Options</li>
                                        <li>Disable admin bar</li>
                                        <li>Pinterest Pin</li>
                                        <li><a style="cursor: pointer" onclick="mo_openid_support_form('')">Click here to Contact Us</a></li>
                                    </ul>
                                </div> <!-- .mo-openid-cd-pricing-body -->
                            </li>
                            <li data-type="multisite" class="momslp is-hidden">
                                <header class="mo-openid-cd-pricing-header">
                                    <h2 style="margin-bottom: 10%;">MailChimp Integration Add-on</h2>
                                    <label for="mo_openid_mca">Select No. of Instances : </label>
                                    <select name="mo_openid_mca" id="mo_openid_mca">
                                        <option value="1">1</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                    </select>

                                    <div class="cd-price" style="margin-top: 9%;">
                                        <span class="mo-openid-cd-currency">$</span>
                                        <span id="mo_openid_mca1" class="mo-openid-cd-value">25</span> &nbsp;&nbsp;
                                        <span class="mo-openid-cd-currency">$</span>
                                        <span id="mo_openid_mca2" class="mo-openid-cd-value"><s>29</s></span>
                                    </div>
                                </header> <!-- .mo-openid-cd-pricing-header -->
                                <footer class="mo-openid-cd-pricing-footer">
                                    <a href="#" class="mo-openid-cd-select" onclick="mosocial_addonform('wp_social_login_mailchimp_addon')" >Upgrade Now</a>
                                </footer>
                                <div class="mo-openid-cd-pricing-body">
                                    <ul class="mo-openid-cd-pricing-features">
                                        <li><b>All Free features +</b></li>
                                        <li><div class="mo_openid_tooltip" ><img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__)));?>includes/images/mailchimp_logo.png" style="width:35px;height:20px;"> MailChimp Integration <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"> </i><span class="mo_openid_tooltiptext" style="width:100%;">A user is added as a subscriber to a mailing list in MailChimp when that user registers using Social Login. First name, last name and email are also captured for that user in the Mailing List. Option is available to download csv file that has list of emails of all users in WordPress.</span></li>
                                        <li><a style="cursor: pointer" onclick="mo_openid_support_form('')">Click here to Contact Us</a></li>
                                    </ul>
                                </div> <!-- .mo-openid-cd-pricing-body -->
                            </li>

                        </ul> <!-- .mo-openid-cd-pricing-wrapper -->
                    </li>

                </ul> <!-- .mo-openid-cd-pricing-list -->
            </div>
        </div>
    </div>
    <script>

        //apple plan
        jQuery('#mo_openid_ap').on('change', function () {
            if (this.value === "1") {
                jQuery('#mo_openid_ap1').html("25");
                jQuery('#mo_openid_ap2').html("<s>29</s>");
            } else if (this.value === "5") {
                jQuery('#mo_openid_ap1').html("89");
                jQuery('#mo_openid_ap2').html("<s>145</s>");
            }
            else if (this.value === "10") {
                jQuery('#mo_openid_ap1').html("149");
                jQuery('#mo_openid_ap2').html("<s>290</s>");
            }
        });

        //custom registration add on
        jQuery('#mo_openid_cra').on('change', function () {
            if (this.value === "1") {
                jQuery('#mo_openid_cra1').html("25");
                jQuery('#mo_openid_cra2').html("<s>29</s>");
            } else if (this.value === "5") {
                jQuery('#mo_openid_cra1').html("89");
                jQuery('#mo_openid_cra2').html("<s>145</s>");
            }
            else if (this.value === "10") {
                jQuery('#mo_openid_cra1').html("149");
                jQuery('#mo_openid_cra2').html("<s>290</s>");
            }
        });

        //standard plan
        jQuery('#mo_openid_std').on('change', function () {
            if (this.value === "1") {
                jQuery('#mo_openid_std1').html("29");
                jQuery('#mo_openid_std2').html("<s>39</s>");
            } else if (this.value === "5") {
                jQuery('#mo_openid_std1').html("99");
                jQuery('#mo_openid_std2').html("<s>195</s>");
            }
            else if (this.value === "10") {
                jQuery('#mo_openid_std1').html("169");
                jQuery('#mo_openid_std2').html("<s>390</s>");
            }
        });

        //woocommerce addon/plan
        jQuery('#mo_openid_wca_in').on('change', function () {
            if (this.value === "1") {
                jQuery('#mo_openid_wca_in1').html("25");
                jQuery('#mo_openid_wca_in2').html("<s>29</s>");
            } else if (this.value === "5") {
                jQuery('#mo_openid_wca_in1').html("89");
                jQuery('#mo_openid_wca_in2').html("<s>149</s>");
            }
            else if (this.value === "10") {
                jQuery('#mo_openid_wca_in1').html("149");
                jQuery('#mo_openid_wca_in2').html("<s>290</s>");
            }
        });

        //premium plugin
        jQuery('#mo_openid_pre').on('change', function () {
            if (this.value === "1") {
                jQuery('#mo_openid_pre1').html("49");
                jQuery('#mo_openid_pre2').html("<s>59</s>");
            } else if (this.value === "5") {
                jQuery('#mo_openid_pre1').html("149");
                jQuery('#mo_openid_pre2').html("<s>295</s>");
            }
            else if (this.value === "10") {
                jQuery('#mo_openid_pre1').html("199");
                jQuery('#mo_openid_pre2').html("<s>590</s>");
            }
        });

        //buddypress addon/plan
        jQuery('#mo_openid_bpa').on('change', function () {
            if (this.value === "1") {
                jQuery('#mo_openid_bpa1').html("25");
                jQuery('#mo_openid_bpa2').html("<s>29</s>");
            } else if (this.value === "5") {
                jQuery('#mo_openid_bpa1').html("89");
                jQuery('#mo_openid_bpa2').html("<s>149</s>");
            }
            else if (this.value === "10") {
                jQuery('#mo_openid_bpa1').html("149");
                jQuery('#mo_openid_bpa2').html("<s>290</s>");
            }
        });

        //all-inclusive plan
        jQuery('#mo_openid_ai').on('change', function () {
            if (this.value === "1") {
                jQuery('#mo_openid_ai1').html("89");
                jQuery('#mo_openid_ai2').html("<s>99</s>");
            } else if (this.value === "5") {
                jQuery('#mo_openid_ai1').html("299");
                jQuery('#mo_openid_ai2').html("<s>495</s>");
            }
            else if (this.value === "10") {
                jQuery('#mo_openid_ai1').html("499");
                jQuery('#mo_openid_ai2').html("<s>990</s>");
            }
        });

        //mailchimp addon
        jQuery('#mo_openid_mca').on('change', function () {
            if (this.value === "1") {
                jQuery('#mo_openid_mca1').html("25");
                jQuery('#mo_openid_mca2').html("<s>29</s>");
            } else if (this.value === "5") {
                jQuery('#mo_openid_mca1').html("89");
                jQuery('#mo_openid_mca2').html("<s>149</s>");
            }
            else if (this.value === "10") {
                jQuery('#mo_openid_mca1').html("149");
                jQuery('#mo_openid_mca2').html("<s>290</s>");
            }
        });

        //social sharing plan
        jQuery('#mo_openid_ss').on('change', function () {
            if (this.value === "1") {
                jQuery('#mo_openid_ss1').html("15");
                jQuery('#mo_openid_ss2').html("<s>19</s>");
            } else if (this.value === "5") {
                jQuery('#mo_openid_ss1').html("45");
                jQuery('#mo_openid_ss2').html("<s>95</s>");
            }
            else if (this.value === "10") {
                jQuery('#mo_openid_ss1').html("99");
                jQuery('#mo_openid_ss2').html("<s>190</s>");
            }
        });


        var x="<?php echo get_option('mo_openid_extension_tab'); ?>";
        if(x==1){
            document.getElementById('multisite').checked= true;
            document.getElementById('singlesite').checked= false;
        }
        var card1 = document.getElementById('col1');
        var card2= document.getElementById('col2');
        var card3= document.getElementById('col3');
        var card4= document.getElementById('col4');

        document.getElementById('multisite').addEventListener('click', function() {
            card1.classList.toggle('flipped');
            card2.classList.toggle('flipped');
            card3.classList.toggle('flipped');
            card4.classList.toggle('flipped');
        }, false);

        document.getElementById('singlesite').addEventListener('click', function() {
            card1.classList.toggle('flipped');
            card2.classList.toggle('flipped');
            card3.classList.toggle('flipped');
            card4.classList.toggle('flipped');
        }, false);
    </script>
    <script>
        jQuery("input[name=sitetype]:radio").change(function() {

            if (this.value == 'multisite') {
                jQuery('.mosslp').removeClass('is-visible').addClass('is-hidden');
                jQuery('.momslp').addClass('is-visible').removeClass('is-hidden is-selected');
                document.getElementById("list-type").style.width = "100%";
            }
            else{
                document.getElementById("list-type").style.width = "100%";
                jQuery('.mosslp').addClass('is-visible').removeClass('is-hidden');
                jQuery('.momslp').removeClass('is-visible').addClass('is-hidden is-selected');
            }
        });

        jQuery(document).ready(function($){

            //document.getElementById("multisite").checked = true;
            if(jQuery('#mo_license_plan_selected').val() == 'multisite'){
                document.getElementById("multisite").checked = true;
            }
            if(document.getElementById("multisite").checked == true){
                jQuery('.mosslp').removeClass('is-visible').addClass('is-hidden');
                jQuery('.momslp').addClass('is-visible').removeClass('is-hidden is-selected');
            }

            //switch from monthly to annual pricing tables
            bouncy_filter($('.cd-pricing-container'));

            function bouncy_filter(container) {
                container.each(function(){
                    var pricing_table = $(this);
                    var filter_list_container = pricing_table.children('.cd-pricing-switcher'),
                        filter_radios = filter_list_container.find('input[type="radio"]'),
                        pricing_table_wrapper = pricing_table.find('.mo-openid-cd-pricing-wrapper');

                    //store pricing table items
                    var table_elements = {};
                    filter_radios.each(function(){
                        var filter_type = $(this).val();
                        table_elements[filter_type] = pricing_table_wrapper.find('li[data-type="'+filter_type+'"]');
                    });

                    //detect input change event
                    filter_radios.on('change', function(event){
                        event.preventDefault();
                        //detect which radio input item was checked
                        var selected_filter = $(event.target).val();

                        //give higher z-index to the pricing table items selected by the radio input
                        show_selected_items(table_elements[selected_filter]);

                        //rotate each mo-openid-cd-pricing-wrapper
                        //at the end of the animation hide the not-selected pricing tables and rotate back the .mo-openid-cd-pricing-wrapper

                        if( !Modernizr.cssanimations ) {
                            hide_not_selected_items(table_elements, selected_filter);
                            pricing_table_wrapper.removeClass('is-switched');
                        } else {
                            pricing_table_wrapper.addClass('is-switched').eq(0).one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function() {
                                hide_not_selected_items(table_elements, selected_filter);
                                pricing_table_wrapper.removeClass('is-switched');
                                //change rotation direction if .mo-openid-cd-pricing-list has the .cd-bounce-invert class
                                if(pricing_table.find('.mo-openid-cd-pricing-list').hasClass('cd-bounce-invert')) pricing_table_wrapper.toggleClass('reverse-animation');
                            });
                        }
                    });
                });
            }
            function show_selected_items(selected_elements) {
                selected_elements.addClass('is-selected');
            }

            function hide_not_selected_items(table_containers, filter) {
                $.each(table_containers, function(key, value){
                    if ( key != filter ) {
                        $(this).removeClass('is-visible is-selected').addClass('is-hidden');

                    } else {
                        $(this).addClass('is-visible').removeClass('is-hidden is-selected');
                    }
                });
            }
        });
    </script>
    <br/>&nbsp;<br/>
    <div style="font-size: 15px; padding: 1%">
        <hr><h3>Available Add on</h3>
        <a style="text-decoration: none" target="_blank" href="<?php echo get_site_url() . "/wp-admin/admin.php?page=mo_openid_settings_addOn";?>">Social Login Custom Registration Form Add on</a>
        <button style="margin-left: 2%; margin-top: -.5%" onclick="mosocial_addonform('wp_social_login_extra_attributes_addon')" id="mosocial_purchase_cust_addon" class="button button-primary button-large">Upgrade Now</button>
        <p style="font-size: 15px">Custom Registration Form Add-On helps you to integrate details of new as well as existing users. You can add as many fields as you want including the one which are returned by social sites at time of registration.</p>
    </div>
    <div class="clear">
        <hr>
        <h3>Refund Policy -</h3>
        <p><b>At miniOrange, we want to ensure you are 100% happy with your purchase. If the premium plugin you
                purchased is not working as advertised and you've attempted to resolve any issues with our support
                team, which couldn't get resolved then we will refund the whole amount within 10 days of the
                purchase. Please email us at <a href="mailto:info@xecurify.com"><i>info@xecurify.com</i></a> for any
                queries regarding the return policy.</b></p>
        <b>Not applicable for -</b>
        <ol>
            <li>Returns that are because of features that are not advertised.</li>
            <li>Returns beyond 10 days.</li>
        </ol>
    </div>
    <script>
        //to set heading name
        jQuery('#mo_openid_page_heading').text('<?php echo mo_sl('Licensing Plans');?>');
        function myFunction(dots_id,read_id,btn_id) {

            var dots = document.getElementById(dots_id);
            var moreText = document.getElementById(read_id);
            var btnText = document.getElementById(btn_id);

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Close";
                moreText.style.display = "inline";
            }
        }
        function mosocial_addonform(planType) {
            jQuery.ajax({
                url: "<?php echo admin_url("admin-ajax.php");?>", //the page containing php script
                method: "POST", //request type,
                dataType: 'json',
                data: {
                    action: 'mo_register_customer_toggle_update',
                },
                success: function (result) {
                    if(result.status){
                        jQuery('#requestOrigin').val(planType);
                        jQuery('#mosocial_loginform').submit();
                    }
                    else
                    {
                        alert("It seems you are not registered with miniOrange. Please login or register with us to upgrade to premium plan.");
                        window.location.href="<?php echo site_url()?>".concat("/wp-admin/admin.php?page=mo_openid_general_settings&tab=profile");
                    }
                }
            });
        }
    </script>

    </td>

    <td>
        <form style="display:none;" id="mosocial_loginform" action="<?php echo get_option( 'mo_openid_host_name' ) . '/moas/login'; ?>"
              target="_blank" method="post" >
            <input type="email" name="username" value="<?php echo esc_attr(get_option('mo_openid_admin_email')); ?>" />
            <input type="text" name="redirectUrl" value="<?php echo esc_attr(get_option( 'mo_openid_host_name')).'/moas/initializepayment'; ?>" />
            <input type="text" name="requestOrigin" id="requestOrigin"/>
        </form>
    </td>
    <?php
}

function mo_openid_licensing_plan_sharing()
{
    ?>
    <td style="vertical-align:top;width:100%;">

        <div style="float: left">
            <div class="mo_openid_table_layout" id="mo_openid_single" style="min-height: min-content; margin-top: 1%;width: 31%; float: left; display: inline-block">
                <div>
                    <table style="width: 100%" class="mo_table-bordered-license">
                        <thead>
                        <tr style="background-color:#F5F5F5;">
                            <th><br>
                                <h2>Social Sharing Premium Applications<br/>&nbsp;</h2>
                                <h1><img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__))); ?>includes/images/dollar.png" style="width:20px;height:20px;">15</h1>
                            </th>
                        </tr>
                        <tr>
                            <th><button style="background-color: #0C1F28; width: 100%" onclick="mosocial_addonform('wp_social_custom_plan')"
                                        class="mo-button-plan mo_lic_color">Upgrade Now</button></th>
                        </tr>
                        </thead>
                        <tbody class="mo_align-center mo-fa-icon">
                        <tr>
                            <td><b>All Free features +</b></td>
                        </tr>
                        <tr>
                            <td>You will get any one application of your choice integrated with the plugin with $10 each.</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mo_openid_table_layout" id="mo_openid_single" style="min-height: min-content; margin-top: 1%;width: 31%; float: left; display: inline-block">
                <div>
                    <table style="width: 100%" class="mo_table-bordered-license">
                        <thead>
                        <tr style="background-color:#F5F5F5;">
                            <th><br>
                                <h2>Social Sharing Premium +<br/>Social Login Standard</h2>
                                <h1><img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__))); ?>includes/images/dollar.png" style="width:20px;height:20px;">49</h1>
                            </th>
                        </tr>
                        <tr>
                            <th><button style="width: 100%" onclick="mo_openid_support_form('Sharing Premium + Standard')"
                                        class="mo-button-plan">Contact us for custom plugin</button></th>
                        </tr>
                        </thead>
                        <tbody class="mo_align-center mo-fa-icon">
                        <tr>
                            <td><b>All Free features +</b></td>
                        </tr>
                        <tr>
                            <td>All Social Sharing Premium Features</td>
                        </tr>
                        <tr>
                            <td>All Social Login Standard Features</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mo_openid_table_layout" id="mo_openid_single" style="min-height: min-content; margin-top: 1%;width: 31%; float: left; display: inline-block">
                <div>
                    <table style="width: 100%" class="mo_table-bordered-license">
                        <thead>
                        <tr style="background-color:#F5F5F5;">
                            <th><br>
                                <h2>Social Sharing Premium +<br/>Social Login Premium</h2>
                                <h1><img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__))); ?>includes/images/dollar.png" alt="int" style="width:20px;height:20px;">59</h1>
                            </th>
                        </tr>
                        <tr>
                            <th><button style="background-color: #0C1F28; width: 100%" onclick="mo_openid_support_form('Sharing Premium + Premium')"
                                        class="mo-button-plan">Contact us for custom plugin</button></th>
                        </tr>
                        </thead>
                        <tbody class="mo_align-center mo-fa-icon">
                        <tr>
                            <td><b>All Free features +</b></td>
                        </tr>
                        <tr>
                            <td>All Social Sharing Premium Features</td>
                        </tr>
                        <tr>
                            <td>All Social Login Premium Features</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mo_openid_table_layout" id="mo_openid_single" style="margin-left: 17%; margin-top: 1%;width: 31%; float: left; display: inline-block">
                <div>
                    <table style="width: 100%" class="mo_table-bordered-license">
                        <thead>
                        <tr style="background-color:#F5F5F5;">
                            <th><br>
                                <h1>Free</h1>
                                <h2>(YOU ARE ON THIS PLAN)</h2>
                                <h1><img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__))); ?>includes/images/dollar.png" alt="int" style="width:20px;height:20px;">0</h1>
                                <h3>(Features and plans)</h3>
                            </th>
                        </tr>
                        <tr>
                            <th><button style="background-color: #0C1F28; width: 100%" onclick="mo_openid_support_form('')"
                                        class="mo-button-plan">Contact us for more features</button></th>
                        </tr>
                        </thead>
                        <tbody class="mo_align-center mo-fa-icon">
                        <tr>
                            <td>
                                <div class="mo_openid_tooltip" style="padding-left: 25px;">9 Pre-configured Social Login Apps <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"></i><span class="mo_openid_tooltiptext" style="width:100%;">Pre-configured apps are already configured by miniOrange. Login flow will go from plugin to miniOrange and then back to plugin. 9 pre-configured apps are<span id="mo_openid_dots">...</span><span id="mo_openid_more" style="display: none"><br>  google,vkontakte,twitter,linkedin,<br>amazon,windowslive,salesforce,<br/>yahoo and instagram.</span><button style="border:transparent;background-color: transparent;color: tomato;" onclick="myFunction('mo_openid_dots','mo_openid_more','mo_openid_myBtn')" id="mo_openid_myBtn">Read more</button</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="mo_openid_tooltip" style="padding-left: 37px;">9 Custom Social Login Apps <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"></i><span class="mo_openid_tooltiptext" style="width:100%;"> Using the custom app tab, you can set up your own app id and secret in the plugin. Login flow will not involve miniOrange in between. Login flow will go from plugin to social media application and then back to plugin.<br>10 custom apps are <span id="mo_openid_dots1">...</span><span id="mo_openid_more1" style="display:none" ><br>Facebook,Google,vkontakte,<br/>twitter,linkedin,<br>amazon,windowslive,yahoo and instagram.</span><button style="border:transparent;background-color: transparent;color: tomato;" onclick="myFunction('mo_openid_dots1','mo_openid_more1','mo_openid_myBtn1')" id="mo_openid_myBtn1">Read more</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Beautiful Icon Customisations</td>
                        </tr>
                        <tr>
                            <td>16 Social Sharing Apps</td>
                        </tr>
                        <tr>
                            <td>Facebook Social Comments</td>
                        </tr>
                        <tr>
                            <td>Disqus Social Comments</td>
                        </tr>
                        <tr>
                            <td>Login Redirect URL</td>
                        </tr>
                        <tr>
                            <td>Logout Redirect URL</td>
                        </tr>
                        <tr>
                            <td>Profile completion (username, email)</td>
                        </tr>
                        <tr>
                            <td>Profile Picture</td>
                        </tr>
                        <tr>
                            <td>Email notification to admin</td>
                        </tr>
                        <tr>
                            <td>Customizable Text For Login Icons</td>
                        </tr>
                        <tr>
                            <td>Option to enable/disable user registration</td>
                        </tr>
                        <tr>
                            <td>Basic Email Support</td>
                        </tr>
                        <tr>
                            <td>Role Mapping</td>
                        </tr>
                        <tr>
                            <td>Shortcodes to display social icons on<br/>any login page, post, popup and php pages</td>
                        </tr>

                        <tr>
                            <td><a style="cursor: pointer" onclick="mo_openid_support_form('')">Click here to Contact Us</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mo_openid_table_layout" id="mo_openid_single" style=" margin-top: 1%;width: 31%; float: left; display: inline-block">
                <div>
                    <table style="width: 100%" class="mo_table-bordered-license">
                        <thead>
                        <tr style="background-color:#F5F5F5;">
                            <th><br>
                                <h1>Sharing Premium</h1>
                                <h2>&nbsp;</h2>
                                <h1>
                                    <img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__)));?>includes/images/dollar.png" alt="int" style="width:20px;height:20px;"><s>29</s>
                                    <img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__))); ?>includes/images/dollar.png" alt="int" style="width:20px;height:20px;">19</h1>
                                </h1>
                                <h3>(Features and plans)</h3>
                            </th>
                        </tr>
                        <tr>
                            <th><button style="width: 100%" onclick="mosocial_addonform('wp_social_login_share_plan')"
                                        class="mo-button-plan mo_lic_color">Upgrade Now</button></th>
                        </tr>
                        </thead>
                        <tbody class="mo_align-center mo-fa-icon">
                        <tr>
                            <td><b>All Free features +</b></td>
                        </tr>
                        <tr>
                            <td>45 Social Sharing Apps</td>
                        </tr>
                        <tr>
                            <td>Social Share Count</td>
                        </tr>
                        <tr>
                            <td>Display Options</td>
                        </tr>
                        <tr>
                            <td>Hover Icons</td>
                        </tr>
                        <tr>
                            <td>Floating Icons</td>
                        </tr>
                        <tr>
                            <td>WooCommerce Display option</td>
                        </tr>
                        <tr>
                            <td>E-mail subcriber</td>
                        </tr>
                        <tr>
                            <td>Facebook Like</td>
                        </tr>
                        <tr>
                            <td>Facebook Recommended</td>
                        </tr>
                        <tr>
                            <td>Pinterest Pin</td>
                        </tr>
                        <tr>
                            <td>Twitter follow</td>
                        </tr>
                        <tr>
                            <td>Vertical Icons</td>
                        </tr>
                        <tr>
                            <td>Horizontal Icons</td>
                        </tr>
                        <tr>
                            <td>Shortcodes to display social icons on<br/>any hompage page, post, popup and php pages</td>
                        </tr>
                        <tr>
                            <td><a style="cursor: pointer" onclick="mo_openid_support_form('')">Click here to Contact Us</a></td>
                        </tr>
                        <tr><td</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mo_openid_table_layout" id="mo_openid_single" style="margin-left:33%; min-height: min-content; margin-top: 1%;width: 31%; float: left; display: inline-block">
                <div>
                    <table style="width: 100%" class="mo_table-bordered-license">
                        <thead>
                        <tr style="background-color:#F5F5F5;">
                            <th><br>
                                <h2>Custom feature / Integration</h2>
                                <h1>&nbsp;</h1>
                            </th>
                        </tr>
                        <tr>
                            <th><button style="width: 100%" onclick="mo_openid_support_form('Custom requirement for  ')"
                                        class="mo-button-plan">Contact us with requirements</button></th>
                        </tr>
                        </thead>
                        <tbody class="mo_align-center mo-fa-icon">
                        <tr>
                            <td><b>All Free features +</b></td>
                        </tr>
                        <tr>
                            <td>If you require any feature or integration of any plugin to be integrated with your Social Login plugin.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br/>&nbsp;<br/>
        <div style="font-size: 15px; padding: 1%">
            <hr><h3>Available Add on</h3>
            <a style="text-decoration: none" target="_blank" href="<?php echo get_site_url() . "/wp-admin/admin.php?page=mo_openid_settings_addOn";?>">Social Login Custom Registration Form Add on</a>
            <button style="margin-left: 2%; margin-top: -.5%" onclick="mosocial_addonform('wp_social_login_extra_attributes_addon')" id="mosocial_purchase_cust_addon" class="button button-primary button-large">Upgrade Now</button>
            <p style="font-size: 15px">Custom Registration Form Add-On helps you to integrate details of new as well as existing users. You can add as many fields as you want including the one which are returned by social sites at time of registration.</p>
        </div>
        <div class="clear">
            <hr>
            <h3>Refund Policy -</h3>
            <p><b>At miniOrange, we want to ensure you are 100% happy with your purchase. If the premium plugin you
                    purchased is not working as advertised and you've attempted to resolve any issues with our support
                    team, which couldn't get resolved then we will refund the whole amount within 10 days of the
                    purchase. Please email us at <a href="mailto:info@xecurify.com"><i>info@xecurify.com</i></a> for any
                    queries regarding the return policy.</b></p>
            <b>Not applicable for -</b>
            <ol>
                <li>Returns that are because of features that are not advertised.</li>
                <li>Returns beyond 10 days.</li>
            </ol>
        </div>
        <script>
            //to set heading name
            jQuery('#mo_openid_page_heading').text('<?php echo mo_sl('Licensing Plan For Social Sharing');?>');
            function myFunction(dots_id,read_id,btn_id) {

                var dots = document.getElementById(dots_id);
                var moreText = document.getElementById(read_id);
                var btnText = document.getElementById(btn_id);

                if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "Read more";
                    moreText.style.display = "none";
                } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Close";
                    moreText.style.display = "inline";
                }
            }
            function mosocial_addonform(planType) {
                jQuery.ajax({
                    url: "<?php echo admin_url("admin-ajax.php");?>", //the page containing php script
                    method: "POST", //request type,
                    dataType: 'json',
                    data: {
                        action: 'mo_register_customer_toggle_update',
                    },
                    success: function (result) {
                        if(result.status){
                            jQuery('#requestOrigin').val(planType);
                            jQuery('#mosocial_loginform').submit();
                        }
                        else
                        {
                            alert("It seems you are not registered with miniOrange. Please login or register with us to upgrade to premium plan.");
                            window.location.href="<?php echo site_url()?>".concat("/wp-admin/admin.php?page=mo_openid_general_settings&tab=profile");
                        }
                    }
                });
            }
        </script>

    </td>

    <td>
        <form style="display:none;" id="mosocial_loginform" action="<?php echo get_option( 'mo_openid_host_name' ) . '/moas/login'; ?>"
              target="_blank" method="post" >
            <input type="email" name="username" value="<?php echo esc_attr(get_option('mo_openid_admin_email')); ?>" />
            <input type="text" name="redirectUrl" value="<?php echo esc_attr(get_option( 'mo_openid_host_name')).'/moas/initializepayment'; ?>" />
            <input type="text" name="requestOrigin" id="requestOrigin"/>
        </form>
    </td>
    <?php
}
