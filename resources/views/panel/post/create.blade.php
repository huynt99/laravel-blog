@extends('layouts.panel')

@section('title')
    {{__('messages.panel.post_page.title')}}
@endsection

@section('content')
    <section class="hk-sec-wrapper">
        <h5 class="hk-sec-title">{{__('values.create_new_post')}}</h5>
        <p class="mb-25">{{__('messages.panel.post_page.create')}}</p>
        <div class="row">
            <div class="col-sm">
                <form method="post" action="{{route('panel.post.store')}}" enctype="multipart/form-data">

                    @include('panel.partials.message')

                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="title">{{__('values.title')}}</label>
                            <input class="form-control" name="title" placeholder="" value="{{old('title')}}" type="text">
                            @if($errors->has('title'))<span
                                class="error">{{ $errors->first('title') }}</span>@endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="url_key">{{__('values.url_key')}}</label>
                            <input class="form-control" name="url_key" placeholder="" value="{{old('url_key')}}" type="text">
                            @if($errors->has('url_key'))<span
                                class="error">{{ $errors->first('url_key') }}</span>@endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="image">{{__('values.image')}}</label>
                            <input type="file" class="form-control-file" name="image">
                            @if($errors->has('image'))<span
                                class="error">{{ $errors->first('image') }}</span>@endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="category">{{__('values.category')}}</label>
                            <select class="form-control custom-select  mt-15" name="category_id">
                                <option disabled selected>{{__('values.selected')}}</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category_id'))<span
                                class="error">{{ $errors->first('category_id') }}</span>@endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="content">{{__('values.content')}}</label>
                            <textarea class="form-control mt-15" name="content" rows="5" placeholder="Textarea" >{{old('content')}}</textarea>
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-primary" type="submit">{{__('values.create_post')}}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
