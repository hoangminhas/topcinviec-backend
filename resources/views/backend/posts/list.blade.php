@extends('backend.dashboard')
@section('title', 'Post list')
@section('subtitle', 'Post list')
@section('content')

    <div class="card shadow mb-4">

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
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post->posting_start}}</td>
                        <td>{{$post->posting_end}}</td>
                        <td>
                            <a type="button" href="{{route('admin.delete', $post->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <span aria-hidden="true"> {{ $posts->links() }}</span>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection
