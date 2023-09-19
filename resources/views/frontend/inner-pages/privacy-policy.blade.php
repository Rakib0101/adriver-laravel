<template>
  <div>
    <header-component />
    <Breadcrumb
      :links="[
        { label: '', url: '#' },
        { label: 'Support', url: '#' },
      ]"
      :title="'Privacy Policy'"
    />
    <div class="pt-[72px]">
      <div class="container">
        <div class="flex lg:flex-row flex-col lg:justify-between">
          <div class="w-full max-w-[872px]">
            <h3 class="text-xl text-gray-900 font-semibold mb-3">Collection</h3>
            <p class="text-base text-gray-600 mb-3">
              Advertisers and users are responsible for ensuring that
              advertising content, text, images, graphics, video ("Content")
              uploaded for inclusion on Bikroy.com complies with all applicable
              laws. Bikroy.com & Saltside Technologies AB assumes no
              responsibility for any illegality or any inaccuracy of the
              Content.
            </p>
            <ul
              class="list-disc list-inside text-gray-600 text-base leading-8 mb-8"
            >
              <li>
                Email address, contact information, and (depending on the
                service used) sometimes financial information.
              </li>
              <li>
                Computer sign-on data, statistics on page views, traffic to and
                from Bikroy.com and response to advertisements.
              </li>
              <li>
                Other information, including users' IP address and standard web
                log information.
              </li>
            </ul>
            <h3 class="text-xl text-gray-900 font-semibold mb-3">Use</h3>
            <ul
              class="list-inside list-disc text-gray-600 text-base leading-8 mb-8"
            >
              We use users' personal information to:
              <li>Provide our services</li>
              <li>Resolve disputes, collect fees, and troubleshoot problems</li>
              <li>Encourage safe trading and enforce our policies</li>
              <li>
                Customize users experience, measure interest in our services
              </li>
              <li>
                Improve our services and inform users about services and updates
              </li>
              <li>
                Communicate marketing and promotional offers to you according to
                your preference.
              </li>
              <li>
                Do other things for users as described when we collect the
                information
              </li>
            </ul>
            <h2 class="text-[32px] leading-10 font-semibold text-gray-900 mb-8">
              Cookie policy
            </h2>
            <h3 class="text-xl text-gray-900 font-semibold mb-3">
              What are cookies?
            </h3>
            <p class="text-base text-gray-600 mb-8">
              Cookies are text files containing small amounts of information
              that are downloaded to your computer or mobile device when you
              visit a site and allow a site to recognize your device. Websites
              use cookies to improve your browsing experience, for example, to
              keep you signed in, remember your site preferences, and serve you
              relevant content.
            </p>
            <h3 class="text-xl text-gray-900 font-semibold mb-3">
              Cookies and personal data
            </h3>
            <p class="text-base text-gray-600 mb-3">
              We use cookies and similar tracking technologies to collect and
              personalise content and ads, to provide social media features, to
              contact you with newsletters, marketing or promotional material
              and to analyse our traffic. We also share information about your
              use of our site with our social media, advertising and analytics
              partners who may combine it with other information that you’ve
              provided to them or that they’ve collected from your use of their
              services.
            </p>
            <p class="text-base text-gray-600 mb-3">
              You may opt out of receiving any, or all, of these communications
              from us by following the unsubscribe link or instructions provided
              in any email we send or by contacting us. All data stored in your
              browser can be cleared by clearing your browser cache. Personal
              data stored with Bikroy can be erased by contacting our support
              team, see below for contact details.
            </p>
            <ul
              class="list-disc list-inside text-gray-600 text-base leading-8 mb-8"
            >
              Types of cookies we use:
              <li>Session cookies: required to operate our service.</li>
              <li>
                Preference cookies: used to remember your preferences and
                various settings.
              </li>
              <li>Security cookies: required for security purposes.</li>
              We may use the following third-party service providers to monitor
              and analyze the use of our service. Each of the service providers
              links to their privacy policy that talks about how they use your
              data.
            </ul>
            <h3 class="text-xl text-gray-900 font-semibold mb-3">
              Controlling cookies from your browser
            </h3>
            <p class="text-base text-gray-600">
              You can choose to be notified when a cookie is being sent or
              decline them altogether in your browser. However, please note that
              if you do not accept cookies, you may not be able to use some
              portions of our service and some features may break.
            </p>
          </div>
          <div class="w-full lg:max-w-[312px] lg:ml-7">
            <h2 class="text-sm text-gray-700 font-semibold mb-3">
              Table of content
            </h2>
            <ul class="mb-8">
              <li>
                <a
                  href="#"
                  class="text-base text-gray-400 hover:text-primary-500 hover:underline transition-all duration-300 leading-7"
                  >Stay Here</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-base text-gray-400 hover:text-primary-500 hover:underline transition-all duration-300 leading-7"
                  >Create your account.</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-base text-gray-400 hover:text-primary-500 hover:underline transition-all duration-300 leading-7"
                  >What is listing ?</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-base text-gray-400 hover:text-primary-500 hover:underline transition-all duration-300 leading-7"
                  >Create your first listing.</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-base text-gray-400 hover:text-primary-500 hover:underline transition-all duration-300 leading-7"
                  >Promote Listing.</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-base text-gray-400 hover:text-primary-500 hover:underline transition-all duration-300 leading-7"
                  >Seller & rating.</a
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
</template>
<script setup>
import HeaderComponent from "../../components/Header/HeaderComponent.vue";
import Breadcrumb from "../../components/Breadcrumb/Breadcrumb.vue";
import BreadcrumbArrow from "../../components/Icons/BreadcrumbArrow.vue";
import FooterComponent from "../../components/FooterComponent.vue";
import InputField from "../../components/CustomInput/InputField.vue";
import SearchLg from "../../components/Icons/SearchLg.vue";
import GoogleAd from "../../assets/images/img/advertisement.png";
</script>
