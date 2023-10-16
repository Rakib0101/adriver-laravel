@extends('frontend.layouts.master')

@section('content')
  <div>
    <x-frontend.breadcrumb.breadcrumb-view label='Home' url='#' title="Blog List" />
    <div class="pt-[72px]">
      <div class="container">
        <div class="flex justify-between">
          <div class="w-full max-w-[872px]">
            <h3 class="text-xl text-gray-900 font-semibold mb-3">General</h3>
            <p class="text-base text-gray-600 mb-3">
              Advertisers and users are responsible for ensuring that
              advertising content, text, images, graphics, video ("Content")
              uploaded for inclusion on Bikroy.com complies with all applicable
              laws. Bikroy.com & Saltside Technologies AB assumes no
              responsibility for any illegality or any inaccuracy of the
              Content.
            </p>
            <p class="text-base text-gray-600 mb-3">
              The advertisers and user guarantees that his or her Content do not
              violate any copyright, intellectual property rights or other
              rights of any person or entity, and agrees to release Bikroy.com
              and Saltside Technologies AB from all obligations, liabilities and
              claims arising in connection with the use of (or the inability to
              use) the service.
            </p>
            <p class="text-base text-gray-600 mb-8">
              Advertisers agree that their Content can may be presented through
              Bikroy.com's partner sites under the same terms and conditions as
              on Bikroy.com.
            </p>

            <h3 class="text-xl text-gray-900 font-semibold mb-3">Copyrights</h3>
            <p class="text-base text-gray-600 mb-3">
              Advertisers grant Bikroy.com and Saltside Technologies AB a
              perpetual, royalty-free, irrevocable, non-exclusive right and
              license to use, reproduce, modify, adapt, publish, translate,
              create derivative works from and distribute such Content or
              incorporate such Content into any form, medium, or technology now
              known or later developed.
            </p>
            <p class="text-base text-gray-600 mb-8">
              The material (including the Content, and any other content,
              software or services) contained on Bikroy.com are the property of
              Saltside Technologies AB, its subsidiaries, affiliates and/or
              third party licensors. Any intellectual property rights, such as
              copyright, trademarks, service marks, trade names and other
              distinguishing brands on the Web Site are the property of Saltside
              Technologies AB. To be clear: No material on this site may be
              copied, reproduced, republished, installed, posted, transmitted,
              stored or distributed without written permission from Saltside
              Technologies AB.
            </p>
            <h3 class="text-xl text-gray-900 font-semibold mb-3">Watermarks</h3>
            <p class="text-base text-gray-600 mb-8">
              All images on Bikroy.com are watermarked, which prevents the
              images to be used for other purposes, without the consent of the
              advertiser.
            </p>
            <h3 class="text-xl text-gray-900 font-semibold mb-3">
              Safety and images
            </h3>
            <p class="text-base text-gray-600 mb-3">
              Bikroy.com and Saltside Technologies AB reserves the right to
              change the title of the Content, for editorial purposes.
              Bikroy.com and Saltside Technologies AB reserves the right not to
              publish images that are irrelevant or images that violate
              Bikroy.com's rules.
            </p>
            <p class="text-base text-gray-600 mb-8">
              You may opt out of receiving any, or all, of these communications
              from us by following the unsubscribe link or instructions provided
              in any email we send or by contacting us. All data stored in your
              browser can be cleared by clearing your browser cache. Personal
              data stored with Bikroy can be erased by contacting our support
              team, see below for contact details.
            </p>
            <h3 class="text-xl text-gray-900 font-semibold mb-3">Personal</h3>
            <p class="text-base text-gray-600 mb-8">
              Bikroy.com and Saltside Technologies AB has the right to cooperate
              with authorities in the case any Content violates the law. The
              identity of advertisers, users or buyers may be determined, for
              example by an ISP. IP addresses may also be registered in order to
              ensure compliance with the terms and conditions.
            </p>
            <h3 class="text-xl text-gray-900 font-semibold mb-3">Privacy</h3>
            <p class="text-base text-gray-600 mb-8">
              Bikroy.com and Saltside Technologies AB will collect information
              from Users and Advertisers. It is a condition of use of the
              Bikroy.com that each User and advertiser consents and authorises
              Bikroy.com and Saltside Technologies AB to collect and use this
              information. Bikroy.com and Saltside Technologies AB also reserves
              the right to disclose it to Company Affiliates and any other
              person for the purposes of administering, supporting and
              maintaining Bikroy.com, as well as for improving Bikroy.com, for
              example by using the information for research, marketing, product
              development and planning.
            </p>
            <h3 class="text-xl text-gray-900 font-semibold mb-3">Cookies</h3>
            <p class="text-base text-gray-600 mb-8">
              This site uses cookies, which means that you must have cookies
              enabled on your computer in order for all functionality on this
              site to work properly. A cookie is a small data file that is
              written to your hard drive when you visit certain Web sites.
              Cookie files contain certain information, such as a random number
              user ID that the site assigns to a visitor to track the pages
              visited. A cookie cannot read data off your hard disk or read
              cookie files created by other sites. Cookies, by themselves,
              cannot be used to find out the identity of any user.
            </p>
            <h3 class="text-xl text-gray-900 font-semibold mb-3">
              Email address of users
            </h3>
            <p class="text-base text-gray-600 mb-8">
              Users are required to submit a valid email address, before they
              are allowed to post advertisements. The email address of the User
              shall not be publicly displayed and other users are permitted to
              send email to the User through Bikroy.com.
            </p>
            <h3 class="text-xl text-gray-900 font-semibold mb-3">
              Site availability
            </h3>
            <p class="text-base text-gray-600 mb-8">
              Bikroy.com and Saltside Technologies AB does not guarantee
              continuous or secure access to the Web Site. The Web Site is
              provided "as is" and as and when available.
            </p>

            <h3 class="text-xl text-gray-900 font-semibold mb-3">
              Links to third party websites
            </h3>
            <p class="text-base text-gray-600 mb-8">
              Bikroy.com may contain links or references to other websites
              ('Third Party Websites'). Bikroy.com or Saltside Technologies AB
              shall not be responsible for the contents in Third Party Websites.
              Third Party Websites are not investigated or monitored. In the
              event the user decides to leave Bikroy.com and access Third Party
              Sites, the user does so at his/her own risk.
            </p>
            <h3 class="text-xl text-gray-900 font-semibold mb-3"></h3>
            <p class="text-base text-gray-600 mb-8">
              Some content and services of Bikroy.com require payment, including
              but not limited to, membership packages, posting of ads in select
              categories, and sale of items through Doorstep Delivery.
            </p>
            <h3 class="text-xl text-gray-900 font-semibold mb-3">
              Doorstep Delivery
            </h3>
            <p class="text-base text-gray-600 mb-3">
              Doorstep Delivery is an eCommerce service provided by Bikroy.com
              to help Buyers get items delivered to their doorstep. In some
              cases, the delivery and payments are handled by the Seller, while
              in other cases they are handled by Bikroy.com. Whether an item
              will be delivered by the Seller or by Bikroy.com will be specified
              in the ad.
            </p>
            <p class="text-base text-gray-600 mb-3">
              A Seller has to be a Member on Bikroy.com to opt into the Doorstep
              Delivery service. For Seller-related Terms and Conditions, please
              contact your Field Sales Executive (or refer to the material
              provided by your Field Sales Executive). To become a member on
              Bikroy.com, please contact support@bikroy.com or 09609555444.
            </p>
            <p class="text-base text-gray-600 mb-3">
              By placing a 'Doorstep Delivery' order, Buyers undertake to
              purchase the item unless it is materially different from the
              description provided by the Seller on Bikroy.com. If the delivered
              item is not as described in the ad, then the Buyer is entitled to
              a free replacement of the product under Bikroy.com’s Buyer
              Protection policy.
            </p>
            <p class="text-base text-gray-600 mb-3">
              Bikroy.com does not provide any guarantees that Sellers have been
              truthful or accurate in their listings, have items in stock, will
              accept the return of the item, or provide any refunds. Bikroy.com
              is not responsible for unsatisfactory or delayed performance,
              losses, damages or delays as a result of items being unavailable
              or mishandled by Sellers.
            </p>
            <p class="text-base text-gray-600 mb-3">
              Bikroy.com reserves the right to suspend, limit or withdraw access
              to Bikroy.com and/or Membership of any user who does not comply
              with these terms.
            </p>
            <p class="text-base text-gray-600 mb-3">
              Bikroy.com reserves the right to suspend, limit or withdraw access
              to Bikroy.com and/or Membership of any user who does not comply
              with these terms.
            </p>
          </div>
          <div class="w-full lg:max-w-[312px] lg:ml-7">
            <h2 class="text-sm text-gray-700 font-semibold mb-3 uppercase">
              Table of content
            </h2>
            <ul class="mb-8">
              <li>
                <a
                  href="#"
                  class="text-base text-gray-400 hover:text-primary-500 hover:underline transition-all duration-300 leading-7"
                >
                  General</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-base text-gray-400 hover:text-primary-500 hover:underline transition-all duration-300 leading-7"
                  >Copyrights</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-base text-gray-400 hover:text-primary-500 hover:underline transition-all duration-300 leading-7"
                  >Watermarks</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-base text-gray-400 hover:text-primary-500 hover:underline transition-all duration-300 leading-7"
                  >Safety and imaged</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-base text-gray-400 hover:text-primary-500 hover:underline transition-all duration-300 leading-7"
                  >Personal</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-base text-gray-400 hover:text-primary-500 hover:underline transition-all duration-300 leading-7"
                  >Privacy</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-base text-gray-400 hover:text-primary-500 hover:underline transition-all duration-300 leading-7"
                  >Cookies</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-base text-gray-400 hover:text-primary-500 hover:underline transition-all duration-300 leading-7"
                  >Email address of users</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-base text-gray-400 hover:text-primary-500 hover:underline transition-all duration-300 leading-7"
                  >Site availability</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-base text-gray-400 hover:text-primary-500 hover:underline transition-all duration-300 leading-7"
                  >Link to third party websites</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-base text-gray-400 hover:text-primary-500 hover:underline transition-all duration-300 leading-7"
                  >Paid content and services</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-base text-gray-400 hover:text-primary-500 hover:underline transition-all duration-300 leading-7"
                  >Doorstep delivery</a
                >
              </li>
            </ul>
            <div>
              <img :src="GoogleAd" alt="" class="w-full h-full object-cover" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer-component />
  </div>
@endsection
