@extends('news.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>News</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('news.create') }}"> Create a new Notice</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Date</th>
            <th>Topic</th>
            <th>Author</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($news as $notice)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $notice->title }}</td>
	        <td>{{ $notice->created_at }}</td>
            <td>{{ $notice->topic }}</td>
            <td>{{ $notice->author }}</td>
	        <td>
                <form action="{{ route('news.destroy',$notice->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('news.show',$notice->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('news.edit',$notice->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


@endsection