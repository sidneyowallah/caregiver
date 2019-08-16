{{--
  Template Name: Event Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.events-header')
    @include('partials.content-events')
  @endwhile
@endsection
