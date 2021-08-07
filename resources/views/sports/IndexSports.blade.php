@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Sports </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('sports.create') }}" title="Create a sport"> <i class="fas fa-plus-circle"></i>
               
            </a>
      
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if(session('message'))
    <div class="col-lg-12">
        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
    </div>
@endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($sports as $sports)
            <tr>
                <td>{{ $sports->id }}</td>
                <td>{{ $sports->name }}</td>

                <td>{{ date_format($sports->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('sports.destroy',$sports->id) }}" method="POST" onsubmit="return confirm('{{trans('are you sure') }}')">

                        
                    

                        <a href="{{ route('sports.edit',$sports->id) }}">
                        
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>



@endsection