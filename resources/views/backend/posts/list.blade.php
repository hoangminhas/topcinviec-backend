@extends('backend.dashboard')
@section('title', 'Post list')
@section('subtitle', 'Post list')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Recruiter</th>
                        <th>Post start</th>
                        <th>Post end</th>
                        <th>Action</th>
                    </tr>
                    </thead>
{{--                    <tfoot>--}}
{{--                    <tr>--}}
{{--                        <th>Name</th>--}}
{{--                        <th>Position</th>--}}
{{--                        <th>Office</th>--}}
{{--                        <th>Age</th>--}}
{{--                        <th>Start date</th>--}}
{{--                        <th>Salary</th>--}}
{{--                    </tr>--}}
{{--                    </tfoot>--}}
                    <tbody>
                    @foreach($posts as $key=> $post)
                    <tr>
                        <td>{{$post-> $key+1}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post->posting_start}}</td>
                        <td>{{$post->posting_end}}</td>
                        <td></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
