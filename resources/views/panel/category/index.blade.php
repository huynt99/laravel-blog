@extends('layouts.panel')

@section('title')
    Category
@endsection

@section('content')
    @include('panel.partials.message')
    <section class="hk-sec-wrapper">
        <h5 class="hk-sec-title">Add new category</h5>
        <div class="">
            <form method="post" action="{{route('panel.category.store')}}">
                @csrf
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="title">{{__('values.name')}}</label>
                        <input class="form-control" name="name" placeholder="" value="{{old('name')}}" type="text">
                        @if($errors->has('name'))<span class="error">{{ $errors->first('name') }}</span>@endif
                    </div>

                    <livewire:genealogy/>

                    <div class="col-md-4 form-group">
                        <label for="url_key">{{__('values.url_key')}}</label>
                        <input class="form-control" name="url_key" placeholder="" value="{{old('url_key')}}" type="text">
                        @if($errors->has('url_key'))<span
                            class="error">{{ $errors->first('url_key') }}</span>@endif
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">{{__('values.create')}}</button>
            </form>

        </div>
    </section>

    <section class="hk-sec-wrapper">
        <h5 class="hk-sec-title">{{__('values.category')}}</h5>
        <div class="row">
            <div class="col-sm">
                <div class="table-wrap">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered mb-0">
                            <thead>
                            <tr>
                                <th>{{__('values.name')}}</th>
                                <th>{{__('values.url_key')}}</th>
                                <th>{{__('values.parent')}}</th>
                                <th>{{__('values.create_at')}}</th>
                                <th>{{__('values.actions')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->url_key}}</td>
                                    <td>{{$category->parent_name}}</td>
                                    <td>{{$category->created_at}}</td>

                                    <td>
                                        <a href="{{route('panel.category.edit',$category->id)}}" class="mr-25"
                                           data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i>
                                        </a>
                                        <a href="{{route('panel.category.destroy',$category->id)}}"
                                           data-toggle="tooltip" data-original-title="Close"><i class="icon-trash"></i>
                                        </a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm" style="margin-top: 25px">
                {{ $categories->links() }}
            </div>
    </section>
@endsection
