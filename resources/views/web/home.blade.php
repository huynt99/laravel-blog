@extends('layouts.site')

@section('title')
    {{__('messages.home_page.title')}}
@endsection

@section('content')

    <!-- Feature post -->
    @include('web.partials.feature-post',['feature'=>$data['feature']])

    <!-- Post -->
   @include('web.partials.section-post',['posts'=>$data['posts']])

@endsection
