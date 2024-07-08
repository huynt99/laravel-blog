@extends('layouts.panel')

@section('title')
    Category
@endsection

@section('content')
    @include('panel.partials.message')
    <section class="hk-sec-wrapper">
        <h5 class="hk-sec-title">Update category</h5>
        <div class="">
            <form method="post" action="{{route('panel.category.update',$category->id)}}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="title">{{__('values.name')}}</label>
                        <input class="form-control" name="name" placeholder="" value="{{$category->name}}" type="text">
                        @if($errors->has('name'))<span class="error">{{ $errors->first('name') }}</span>@endif
                    </div>
                    <livewire:genealogy/>
                    <div class="col-md-6 form-group">
                        <label for="url_key">{{__('values.url_key')}}</label>
                        <input class="form-control" name="url_key" placeholder="" value="{{$category->url_key}}" type="text">
                        @if($errors->has('url_key'))<span class="error">{{ $errors->first('url_key') }}</span>@endif
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">{{__('values.update')}}</button>
            </form>

        </div>
    </section>
@endsection
