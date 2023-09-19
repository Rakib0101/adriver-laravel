@extends('frontend.layouts.master')

@section('content')
  <div>
    <x-frontend.breadcrumb.breadcrumb-view label='About Us' url='#' title="Contact" />
    <x-frontend.inner-pages.contact.address-section />
    <x-frontend.inner-pages.contact.contact-form />
    <x-frontend.mobile-app.mobile-app />
    <x-frontend.newsletter.newsletter-view/>
  </div>
@endsection
{{-- <script setup>
import HeaderComponent from "../../components/Header/HeaderComponent.vue";
import Breadcrumb from "../../components/Breadcrumb/Breadcrumb.vue";
import AdressSection from "../../components/Pages/Contact/AddressSection.vue";
import ContactForm from "../../components/Pages/Contact/ContactForm.vue";
import BreadcrumbArrow from "../../components/Icons/BreadcrumbArrow.vue";
import MobileApp from "../../components/MobileApp/MobileApp.vue";
import NewsLetterView from "../../components/Newsletter/NewsLetterView.vue";
import FooterComponent from "../../components/FooterComponent.vue";
</script> --}}
