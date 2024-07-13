@extends('layouts.panel')

@section('title')
{{__('messages.panel.post_page.title')}}
@endsection

@section('content')

@include('panel.partials.message')


<section class="hk-sec-wrapper">
    <h5 class="hk-sec-title">{{__('values.posts')}}</h5>
    <div class="row">
        <div class="col-sm">
            <div class="table-wrap">
                <div class="table-responsive">

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <form action="{{route('panel.user.index')}}" method="get">
                                <div id="datable_1_filter" class="dataTables_filter">
                                    <label>
                                        <input type="search" class="form-control form-control-sm" placeholder="Search"
                                               name="search"
                                               value="@if(request()->has('search')){{request()->get('search')}}@endif"
                                               aria-controls="datable_1">
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>

                    <table class="table table-hover table-bordered mb-0">
                        <thead>
                        <tr>
                            <th>{{__('values.full_name')}}</th>
                            <th>{{__('values.name')}}</th>
                            <th>{{__('values.gender')}}</th>
                            <th>{{__('values.email')}}</th>
                            <th>{{__('values.actions')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->full_name}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->gender}}</td>
                            <td>{{$user->email}}</td>

                            <td>
                                <a href="{{route('panel.user.show',$user->id)}}" class="mr-25"
                                   data-toggle="tooltip" data-original-title="Show"> <i
                                        class="fa fa-eye"></i></a>
                                <a href="{{route('panel.user.edit',$user->id)}}" class="mr-25"
                                   data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i>
                                </a>
                                <a href="{{route('panel.user.destroy',$user->id)}}" data-toggle="tooltip"
                                   data-original-title="Close"> <i
                                        class="icon-trash txt-danger"></i> </a>
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
            {{ $users->links() }}
        </div>
    </div>
</section>
@endsection
