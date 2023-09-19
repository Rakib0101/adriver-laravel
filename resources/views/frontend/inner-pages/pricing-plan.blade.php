@extends('frontend.layouts.master')

@section('content')
  <div>
    <x-frontend.breadcrumb.breadcrumb-view label='About Us' url='#' title="Pricing Plan" />
    <x-frontend.pricing.pricing-area />
  </div>
@endsection
