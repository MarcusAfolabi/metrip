@extends('layouts.main')
@section('title', "Metrip")
@section('description', "Discover amazing places at exclusive deals")
@section('keyword', "travel, airline, airport, places, google place, map, flight, tickets, booking, embassy, book")
@section('main')

@include('partials._search')

@include('partials.offers')

@include('partials.allOffers')


<!-- 
@include('partials.reviews')

@include('partials.blog') -->

@include('partials.cta')

@endsection