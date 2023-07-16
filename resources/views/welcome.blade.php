@extends('layouts.main')
@section('title', "Metrip")
@section('description', "Discover amazing places at exclusive deals")
@section('keyword', "travel, airline, airport, places, google place, map, flight, tickets, booking, embassy, book")
@section('main')

@include('partials._search')

@include('partials.offers')

@include('partials.allOffers')

<!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7706882345547718" crossorigin="anonymous"></script>
<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7706882345547718" data-ad-slot="7102150691" data-ad-format="auto" data-full-width-responsive="true">
</ins>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>  -->

@include('partials.cta')

@endsection