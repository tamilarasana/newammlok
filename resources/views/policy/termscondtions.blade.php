<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AAMLOK | TERMS AND CONDITIONS</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css" />
    <link rel="stylesheet" type="text/css" href="css/theme.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="all" />
</head>

<body>

    <div class="wrap">
        <div id="header">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="images/home_2/Aamlok logopng.png" width="160px" height="57px" alt="" /></a>
                                {{-- <a href="{{ url('/') }}"><img src="images/home_3/logo.png" alt="" /></a> --}}
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-2">
                                    <nav class="main-nav main-nav3">
                                        <ul class="list-inline text-right">
                                            <li>
                                                <div class="top-search search-box">
                                                    <div class="search-form search-form3">
                                                        <form action="{{ route('search') }}" method="get">
                                                            <input type="text" name="search_query" value="Search..."
                                                                onfocus="if (this.value==this.defaultValue) this.value = ''"
                                                                onblur="if (this.value=='') this.value = this.defaultValue" />
                                                            <input type="submit" value="" />
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="{{ route('listing') }}">PRODUCTS</a></li>
                                            @guest
                                                <li><a href="{{ route('login') }}">LOGIN </a></li>
                                            @endauth
                                            @if (auth()->user())
                                                <li><a href="{{ route('home') }}">{{ auth()->user()->name }}</a>
                                                </li>
                                                <li><a href="{{ route('logout') }}">Logout</a></li>
                                            @endauth
                                    </ul>
                                    <a href="#" class="btn-mobile-menu"></a>
                                </nav>
                            </div>
                            @if (auth()->user())
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="grid--full">
                        <div class="grid--full medium-down--hide">
                            <div class="grid__item">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->
    <div id="content">
        <div class="container">
            <p class = "text-justify">
                Terms & Conditions
<br><br>
<span style="  padding-left: 7em;">Welcome to Aamlok.com (“Website”). Aamlok and/or its affiliates provide website features and other
products and services to you when you visit or shop at aamlok.com , use Aamlok products or services, or
use software provided by Aamlok in connection with any of the foregoing. Aamlok provides the Services
subject to the following conditions. This user agreement (“Terms and Conditions” or “T&C” or “Terms” or
“Agreement”) is between you (“you” or “End User” or “your” or “Buyer” or “Customer” or “Registered
User”) and Aamlok (“Company” or “us” or “We” or “aamlok.com”). This document is an electronic record
in terms of Information Technology Act, 2000 and rules there under as applicable and the amended
provisions pertaining to electronic records in various statutes as amended by the Information Technology
Act, 2000. This electronic record is generated by a computer system and does not require any physical
or digital signatures. Notwithstanding anything contained or said in any other document, if there is a
conflict between the terms mentioned herein below and any other document, the terms contained in the
present T&C shall alone prevail for the purposes of usage of the Site.<span>
<br><br><br>

INTRODUCTION
<br><br>
<span style="  padding-left: 7em;">The domain name aamlok.com is registered in the name of Aamlok which is a registered company under
the Companies Act. Aamlok is in the business of selling luxury lifestyle retail products such as apparel
and other related goods.<span>
<br><br><br>

RIGHT TO CHANGE
<br><br>
<span style="  padding-left: 7em;">Aamlok reserves the sole right to update or modify these Terms and Conditions at any time without prior
notice. For this reason, we encourage you to review these Terms and Conditions every time you
purchase products from us or use our Web Site.<span>
<br><br><br>

PRIVACY
<br><br>
<span style="  padding-left: 7em;">We view protection of your privacy as a very important principle. We understand clearly that You and
Your Personal Information is one of our most important assets. We store and process Your Information
including any sensitive financial information collected (as defined under the Information Technology Act,
2000), if any, on computers that may be protected by physical as well as reasonable technological
security measures and procedures in accordance with Information Technology Act 2000 and Rules there
under. If you object to our current Privacy Policy and your information being transferred or used in this
way, please do not use Website.</span>
<br><br><br>

ELECTRONIC COMMUNICATIONS
<br><br>
<span style="  padding-left: 7em;">When you use any of our Services, or send e-mails to us, you are communicating with us electronically.
You by using our services consent to receive communications from us electronically. We will
communicate with you by e-mail or by posting notices on this site or through other Services. You agree
that all agreements, notices, disclosures and other communications that we provide to you electronically
satisfy any legal requirement that such communications be in writing. The legal requirements would be in
conformity with the Indian Information Technology Act, 2000 and rules there under as applicable and the
amended provisions pertaining to electronic records in various statutes as amended by the Information
Technology Act, 2000.<span
<br><br><br>
INTELLECTUAL PROPERTY RIGHTS
<br><br>
<span style="  padding-left: 7em;">Unless otherwise indicated or anything contained to the contrary or any proprietary material owned by a
third party and so expressly mentioned, Aamlok owns all Intellectual Property Rights to and into the
Website, including, without limitation, any and all rights, title and interest in and to copyright, related
rights, patents, utility models, trademarks, trade names, service marks, designs, know-how, trade secrets
and inventions (whether patentable or not ), goodwill, source code, meta tags, databases, text, content,</span>
<br><br><br>
graphics, icons, and hyperlinks. You acknowledge and agree that you shall not use, reproduce or
distribute any content from the Website belonging to Aamlok without obtaining authorization from it.
<br><br><br>
User shall not upload post or otherwise make available on the Site any material protected by copyright,
trademark or other proprietary right without the express permission of the owner of the copyright,
trademark or other proprietary right. Aamlok does not have any express burden or responsibility to
provide the Users with indications, markings or anything else that may aid the User in determining
whether the material in question is copyrighted or trademarked. User shall be solely liable for any
damage resulting from any infringement of Copyrights, trademarks, proprietary rights or any other harm
resulting from such a submission. By submitting material to any public area of the Site, User warrants
that the owner of such material has expressly granted Aamlok the royalty-free, perpetual, irrevocable,
non- exclusive right and license to use, reproduce, modify, adapt, publish, translate and distribute such
material (in whole or in part) worldwide and/or to incorporate it in other works in any Form, media or
technology now known or hereafter developed for the full term of any copyright that may exist in such
material. User also permits any other end user to access, view, and store or reproduce the material for
that end user’s personal use. User hereby grants Aamlok, the right to edit, copy, publish and distribute
any material made available on the Site by the User. The foregoing provisions of Section 25 apply
equally to and are for the benefit of Aamlok, its subsidiaries, affiliates and its third party content providers
and licensors and each shall have the right to assert and enforce such provisions directly or on its own
behalf.
<br><br><br>
TRADEMARKS
<br><br>
<span style="  padding-left: 7em;">The Site contain copyrighted material, trademarks and other proprietary information, including, but not
limited to, text, software, photos, video, graphics, music , sound, and the entire contents of Aamlok
protected by copyright as a collective work under the applicable copyright laws. Aamlok owns a copyright
in the selection, coordination, arrangement and enhancement of such content, as well as in the content
original to it. Users may not modify, publish, transmit, participate in the transfer or sale, create derivative
works, or in any way exploit, any of the content, in whole or in part. Users may download / print / save
copyrighted material for the User’s personal use only. Except as otherwise expressly stated under
copyright law, no copying, redistribution, retransmission, publication or commercial exploitation of
downloaded material without the express permission of Aamlok and the copyright owner is permitted.
<br><br><br>
If copying, redistribution or publication of copyrighted material is permitted, no changes in or deletion of
author attribution, trademark legend or copyright notice shall be made. The User acknowledges that
he/she/it does not acquire any ownership rights by downloading copyrighted material. Trademarks that
are located within or on the Site or a website otherwise owned or operated in conjunction with Aamlok
shall not be deemed to be in the public domain but rather the exclusive property of Aamlok, unless such
site is under license from the trademark owner thereof in which case such license is for the exclusive
benefit and use of Aamlok, unless otherwise stated.</span>
<br><br><br>
INTELLECTUAL PROPERTY RIGHTS COMPLAINTS
<br><br>
<span style="  padding-left: 7em;">Aamlok respects the intellectual property of others. If you believe that your work has been copied in a
way that constitutes any Intellectual Property Right infringement, please address a complaint to the
‘Customer Care’ by way of an email as provided herein below.</span>
<br><br><br>
USER RESPONSIBILITY AND REGISTRATION OBLIGATIONS
<br><br>
<span style="  padding-left: 7em;">If you use the Website as Registered User, you agree that you are competent to contract within the
meaning of the Indian Contract Act, 1872. Aamlok reserves the right to terminate your membership and
refuse to provide you with access to the Website if it is brought to its notice or if it is discovered that you
are under the age of 18 years. You are solely responsible for maintaining the confidentiality of your User
ID and Password. You are responsible for all activities that occur under your User ID and Password.
<br><br><br>
You agree, inter-alia, to provide true, accurate, current and complete information about yourself as prompted
by Website registration form or provided by You as a Visitor or user of a third party site through which
You access the Website. If you provide any information that is untrue, inaccurate, not current or
incomplete or we have reasonable grounds to suspect that such information is untrue, inaccurate, not
current or incomplete, or not in accordance with the User Agreement, Aamlok has the right to indefinitely
suspend or terminate or block access of your membership with the Website and refuse to provide you
with access to the Website.
<br><br><br>
As a condition of purchase, the Site requires your permission to send you administrative and promotional
emails. We will send you information regarding your account activity and purchases, as well as updates
about our products and promotional offers. You can opt-Out of our promotional emails anytime by
clicking the unsubscribe link at the bottom of any of our email correspondences. Please see our Privacy
Policy for details. The offers made in any promotional messages sent via emails /SMS/MMS shall be
subject to change at the sole discretion of Aamlok and Aamlok owes no responsibility to provide you any
information regarding such change.
<br><br><br>
You undertake not to host, display, upload, modify, publish, transmit, update or share any information that
is contained on the website that: belongs to another person and to which you does not have any right to;
is grossly harmful, harassing, blasphemous; defamatory, obscene, pornographic, paedophilic, libellous,
invasive of another’s privacy, hateful, or racially, ethnically objectionable, disparaging, relating or
encouraging money laundering or gambling, or otherwise unlawful in any manner whatever; harm minors
in any way; infringes any patent, trademark , copyright or other proprietary rights; violates any law for the
time being in force; deceives or misleads the addressee about the origin of such messages or
communicates any information which is grossly offensive or menacing in nature; impersonate another
person; contains software viruses or any other computer code, files or programs designed to interrupt,
destroy or limit the functionality of any computer resource; threatens the unity, integrity, defence, security
or sovereignty of India, friendly relations with foreign states, or public order or causes incitement to the
commission of any cognisable offence or prevents investigation of any offence or is insulting any other
nation.
<br><br><br>
That in case it is found that you are in violation of these express conditions, you shall be solely
responsible and shall face all legal consequences of the same by yourself and that Aamlok shall in no
manner be held responsible for the same.</span>
<br><br><br>
BILLING
<br><br>
<span style="  padding-left: 7em;">The price of our merchandise as mentioned on aamlok.com is the Maximum Retail Price (MRP) for the
said product. Such MRP shall be inclusive of all local taxes as are applicable in India. Additional
applicable taxes may be charged depending upon the destination where the order has to be shipped to.
The tax rate applied and charged upon the order shall include combined tax rate for both state and local
tax rates in accordance with the address where the order is being shipped. Aamlok reserves the right to
collect taxes and/or such other levy/ duty/ surcharge that it may have to incur in addition to the normal
taxes it may have to pay. We may also charge delivery Charges which may include postal charges /
shipment charges etc. That may be applicable for your country.</span>
<br><br><br>
ORDER CANCELLATION BY Aamlok
<br><br>
<span style="  padding-left: 7em;">Due to unavoidable circumstances, there may be times when certain orders having been validly placed
may not be processed or capable of being dispatched. Aamlok reserves the exclusive right to refuse or
cancel any order for any reason. Some situations that may result in your order being cancelled shall
include limitations on quantities available for purchase, inaccuracies or errors in product or pricing
information, problems identified by our credit and fraud avoidance department or any defect regarding
the quality of the product. We may also require additional verifications or information before accepting
any order. We will contact you if all or any portion of your order is cancelled or if additional information is
<br><br><br>
required to accept your order. If your order is cancelled after your credit card/ debit card/ any other mode
of payment has been charged, the said amount will be reversed into your Account/ as the case may be
to the source of the payment within a period of 30 working days. Any type of voucher used in these
orders shall be returned and made available to the user in case of cancellation by Aamlok.</span>
<br><br><br>
SHIPPING & PROCESSING FEE
<br><br>
<span style="  padding-left: 7em;">Currently our all-domestic shipments are free of shipping charges. Our shipping and processing charges
wherever applicable are intended to compensate Aamlok for the cost of processing your order, handling
and packing the products you purchase and delivering them to you. For further information please refer
to our Shipping & Payment Policy.</span>
<br><br><br>
PAYMENT
<br><br>
<span style="  padding-left: 7em;">While availing any of the payment method/s offered by us, we are not responsible or take no liability of
whatsoever nature in respect of any loss or damage arising directly or indirectly to you including but not
limited to the following: (a) lack of authorization for any transaction/s; (b) or exceeding the present limit
mutually agreed by you and between your “Bank /s”; (c) or any payment issues arising out of the
transaction; (d) or decline of transaction for any other reason/s.
<br><br><br>
All payments made against the purchases /services on aamlok.com by you shall be as against the MRP
displayed on the website and shall be in terms and conditions of the third party Online Payment Gateway
Services as adopted and applicable to your transaction as approved by Aamlok. Before shipping your
order to you, we may request you to provide supporting documents (including but not limited to Govt.
Issued ID and address proof) to establish the ownership of the payment instrument used by you for your
purchase. This is done so as to ensure a safe and a full proof online shopping environment to our users.
<br><br><br>
Aamlok may employ PaisaPay, PayPal and such other third party facilities, for Payments on the Website.
Such payments can be made through the electronic or through Cash on delivery transactions, as may be
permitted by Aamlok which shall be at its sole discretion. Use of such third party services will be
governed by their User Agreement, Seller Terms, Conditions and other rules and policies as may be
required and applicable for your nature of activities.</span>
<br><br><br>
DELIVERY
<br><br>
<span style="  padding-left: 7em;">Aamlok endeavors but does not guarantee delivery of products in the stipulated time period as
mentioned on the purchase of the product. In no manner can the contract be repudiated if Aamlok fails to
deliver any one or more products in the stipulated time frame. However, if you fail to take the delivery of
the goods, Aamlok may at its discretion charge you for additional shipping cost.</span>
<br><br><br>
LOSS IN TRANSIT
<br><br>
<span style="  padding-left: 7em;">Aamlok shall make all endeavours to deliver defect free products to the purchasers. Aamlok does not
take title to any returned items purchased by the user unless the item is received by Aamlok. Any item
purchased on our website does not qualify for any return unless the product delivered is damaged or has
manufacturing defects. The defective and/or damaged goods so received shall be communicated to
Aamlok within 48 hours of its receipt. Any communication received after 48 hours of delivery shall not
qualify for return unless expressly covered by the product warranty even in case the said product has
been wrongly delivered.
<br><br><br>
Aamlok holds the sole discretion to determine whether a refund can be issued. For further information
please read our Returns & Exchanges Policy.</span>
<br><br><br>
REFUNDS & RETURNS
<br><br>
<span style="  padding-left: 7em;">Aamlok shall make all endeavors to deliver defect free products to the purchasers. Aamlok does not take
title to any returned items purchased by the user unless the item is received by Aamlok. Any item
purchased on our website does not qualify for any return unless the product delivered is damaged or has
manufacturing defects. The defective and/or damaged goods so received shall be communicated to
Aamlok within 48 hours of its receipt. Any communication received after 48 hours of delivery shall not
qualify for return unless expressly covered by the product warranty even in case the said product has
been wrongly delivered.
<br><br><br>
Aamlok holds the sole discretion to determine whether a refund can be issued. For further information
please read our Returns & Exchanges Policy.</span>
<br><br><br>
PRODUCT DESCRIPTIONS
<br><br>
<span style="  padding-left: 7em;">Products displayed on Aamlok attempts to be as accurate as possible. However, Aamlok does not
warrant that product descriptions or other content is accurate, complete, reliable, current, or error-free. If
a product offered by Aamlok is not as described, your sole remedy is to contact Aamlok within 48 hours
of receipt and Aamlok riser vest the right to provide a solution as per its discretion. Aamlok is not liable to
issue any refunds or allow exchanges and/or returns as a matter of policy.</span>
<br><br><br>
PRODUCT COMPLIANCE
<br><br>
<span style="  padding-left: 7em;">Products displayed/ sold on the Aamlok website are manufactured/ procured as per the applicable Local
Laws of India and are in conformity with the required Indian industry standards.</span>
<br><br><br>
PRODUCT PRICING DISCLAIMER
<br><br>
<span style="  padding-left: 7em;">The prices displayed on our website may differ from prices that are available in stores. Further the prices
displayed in our catalogues are quotes which may vary from country to country for the same product.
Prices shown on the website both for India and in other International Countries are subject to change
without prior notice. These prices only reflect the MRP and do not include shipping and taxes which may
be extra as applicable.</span>
<br><br><br>
INACCURACY DISCLAIMER
<br><br>
<span style="  padding-left: 7em;">From time to time there may be information on our Website or in our catalogue that may contain
typographical errors, inaccuracies, or omissions that may relate to product descriptions, pricing, and
availability. Aamlok reserves the right to correct any errors, inaccuracies or omissions and to change or
update information at any time without prior notice.</span>
<br><br><br>
WARRANTIES & LIABILITY
<br><br>
<span style="  padding-left: 7em;">All information, content, materials, products (including software) and other services included on or
otherwise made available to you by Aamlok are provided on an AS IS and AS AVAILABLE basis, unless
otherwise specified in writing. Aamlok makes no representations or warranties of any kind, express or
implied, as to the operation of the services, or the information, content, materials, products (including
software) or other services included on or otherwise made available to you through Aamlok, unless
otherwise specified in writing. You expressly agree that your use of the website is at your sole risk.
<br><br><br>
Aamlok does not warrant that this Website will be constantly available, or available at all or that any
information on this Website is complete, true, accurate or non-misleading.
<br><br><br>
We will not be liable to you in any way or in relation to the Contents of, or use of, or otherwise in
connection with, the Website. You acknowledge, by your use of this Website, that your use of this
Website is at your sole risk , that you assume full responsibility for all risks associated with all necessary
servicing or repairs of any equipment you use in connection with your use of this Website, and that
Aamlok shall not be liable for any damages of any kind related to your use of this Website.
<br><br><br>
Though Aamlok shall make all endeavour to protect its websites from any viruses or other illegal use of
its website. However we do not warrant that this site; information, Content, materials, product (including
software) or services included on or otherwise made available to You through the Website; its servers; or
electronic communication sent from us are free of viruses or other harmful components. Nothing on
Website constitutes, or is meant to constitute, advice of any kind.
<br><br><br>
All the Products sold on Website shall be solely governed by the Indian Laws. In the event we are unable
to deliver such Products due to implications of different territorial laws, we will return or will give credit for
the amount (if any) received in advance by us from the sale of such Product that could not be delivered
to You. It is YOUR responsibility to ensure that the products purchased on this website is not restricted in
your territory. Aamlok shall not be responsible for any non-compliance with regard to the local laws of
that territory for any product available on this website.
<br><br><br>
Aamlok will not be liable for any damages of any kind arising from the use of any service, or from any
information, content, materials, products (including software) or other services included on or otherwise
made available to you through the website, including, but not limited to direct, indirect, incidental,
punitive, and consequential damages, unless otherwise specified in writing.</span>
<br><br><br>
INDEMNITY
<br><br>
<span style="  padding-left: 7em;">You agree to indemnify and shall not hold Aamlok (and its officers, directors, agents, subsidiaries,
affiliates, joint ventures, and employees) for any claim or demand, including but not limited to reasonable
attorneys’ fees, or arising out of or related to your breach of this T&C , or your violation of any law or the
rights of a third party or any damage to life and/or property caused by the products delivered.</span>
<br><br><br>
BREACH
<br><br>
<span style="  padding-left: 7em;">In the event you are found to be in breach of the Terms of Use or Privacy Policy or other rules and
policies or if we are unable to verify or authenticate any information you provide or if it is believed that
your actions may cause legal liability for you, other users or us, without limiting to the present, without
prior notice immediately limit your activity, remove your information, temporarily/indefinitely suspend or
terminate or block your membership, and/or refuse to provide you with access to this Website. Any user
that has been suspended or blocked may not register or attempt to register with us or use the Website in
any manner whatsoever until such time that such user is reinstated by us.
<br><br><br>
Notwithstanding the foregoing, if you breach the Terms of Use or Privacy Policy or other rules and
policies, we reserve the right to recover any amounts due and owing by you to us and to take strict legal
action including but not limited to a referral to the appropriate police or other authorities for initiating
criminal or other proceedings against you.
<br><br><br>
Any breach of any applicable local laws of that territory shall also result in, without prior notice
immediately limit your activity, remove your information, temporarily/indefinitely suspend or terminate or
block your membership, and/or refuse to provide you with access to this Website.</span>
<br><br><br>
SEVERABILITY
<br><br>
<span style="  padding-left: 7em;">We reserve the right to make changes to our site, policies, Service Terms, and these Conditions of Use
at any time. If any of these conditions shall be deemed invalid, void, or for any reason unenforceable,
that condition shall be deemed severable and shall not affect the validity and enforceability of any
remaining condition.</span>
<br><br><br>
WAIVER
<br><br>
<span style="  padding-left: 7em;">The failure by Aamlok to enforce at any time or for any period any one or more of the terms or conditions
of the Agreement shall not be a waiver by Aamlok of them or of the right any time subsequent to enforce
all Terms and Conditions of this agreement.</span>
<br><br><br>
FORCE MAJEURE
<br><br>
<span style="  padding-left: 7em;">Failure on the part of Aamlok to perform any of its obligations and the non-furnishing of the Service, shall
not entitle you to raise any claim against Aamlok or be a breach hereunder to the extent that such failure
arises from an event of Force Majeure. If through force Majeure the fulfilment by either party of any
obligation set forth in this Agreement will be delayed, the period of such delay will not be counted on in
computing periods prescribed by this Agreement. Force Majeure will include any war, civil commotion,
strike, governmental action, lockout, accident, epidemic or any other event of any nature or kind
whatsoever beyond the control of Aamlok that directly or indirectly hinders or prevents Aamlok from
commencing or proceeding with consummation of the transactions contemplated hereby. You expressly
agree that lack of funds shall not in any event constitute or be considered an event of Force Majeure.
</span>
<br><br><br>
DISPUTE RESOLUTION
<br><br>
<span style="  padding-left: 7em;">This agreement shall be construed and the legal relations between YOU and Aamlok hereto shall be
determined and governed according to the laws of India. If any dispute arises between you and Aamlok
regarding your use of the Website or Your dealing with Aamlok in relation to any activity on the Website,
in connection with the validity, interpretation, implementation or breach of any provision of the Terms &
Conditions and/or Privacy Policy including but not limited to the rules and policies contained herein, the
dispute shall be subject to the exclusive jurisdiction to the Courts of New Delhi.
<br><br><br>
Your obligations to pay the Payment Fees shall not be suspended during the pendency of such
proceedings.</span>
<br><br><br>
GRIEVANCE
<br><br>
<span style="  padding-left: 7em;">Any grievances you have by way of use of the website can be addressed to the ‘Customer Care’ by way
of email to aamlokfashions@gmail.com
<br><br><br>
The ‘Customer Care’ shall thereafter consider the same and provide a response within one month of the
date of such complaint/ grievance.</span>
<br><br><br>
GOVERNING LAW
<br><br>
<span style="  padding-left: 7em;">These Terms and Conditions or the documents of third party payment channels shall be governed and
construed in accordance with the laws of India.
<br><br><br>
This document is an electronic record in terms of Information Technology Act, 2000 and the amended
provisions pertaining to electronic records in various statutes as amended by the Information Technology
Act, 2000.
<br><br><br>
This electronic record is generated by a computer system and does not require any physical or digital
signatures.</span>
            </p>
        </div>
    </div>
    <!-- End Content -->
    <div id="footer">
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="left-footer">
							<div class="logo-footer logo-footer2">
								<a href="#"><img src="images/home_2/aamloklogo.jpg"  width="150px"  height="57" alt="" /></a>

							</div>
							<div class="contact-footer">
								<h2 class="title-footer">Contact Us</h2>
								<p><i class="fa fa-home"></i>Dw-5 Omaxe Royal Residency, Ludhiana, Punjab . 142022</p>
								<p><i class="fa fa-tablet"></i> +91 99101 97553</p>
								<p><i class="fa fa-envelope"></i> support@aamlok.com</p>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="right-footer">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="box-footer-menu">
										<h2 class="title-footer">ABOUT US</h2>
										<ul class="menu-footer-default">
											<li><a href="{{ route('about') }}">About Us</a></li>
											<li><a href="{{ route('termscondition') }}">Terms and Conditions</a></li>
											<li><a href="{{ route('privacypolicy') }}">Privacy Policy</a></li>
											<li><a href="{{ route('returnexchange') }}">Return & Exchange</a></li>
											<li><a href="{{ route('shipping') }}">Shipping Policy</a></li>
											<li><a href="{{ route('contact') }}">Contact Us</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-7 col-xs-12">
						<p class="info-copyright">Aamlok © 2022 All Rights Reserved. </p>
						<p class="info-copyright">Designed by Aamlok</p>
					</div>
				</div>
			</div>
		</div>
   </div>
	<!-- End Footer -->
    <script src="{{ asset('seller/js/jquery-3.3.1.min.js') }}"></script>
    <script>
    $(".notification").animate({right: '40px'});
            setTimeout(function(){
            $('.notification').slideUp(1000)}, 2500);
    </script>
	<script src="https://kit.fontawesome.com/7ca433db62.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/theme.js"></script>
</div>
</body>
</html>