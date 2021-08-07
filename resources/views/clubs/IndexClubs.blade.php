@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Clubs </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('clubs.create') }}" title="Create a club"> <i class="fas fa-plus-circle"></i>
               
            </a>
      
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>logo</th>
            <th>Name</th>
            <th>Date Created</th>
            <th>city</th>
            <th>sports</th>
            <th width="280px">Action</th>
            
        </tr>
        @foreach ($clubs as $clubs)
            <tr>
                <td>{{ $clubs->id }}</td>
                <td><img src="/uploads/logo/{{ $clubs->logo }}" width="100px"></td>
                <td>{{ $clubs->name }}</td>

                <td>{{ date_format($clubs->created_at, 'jS M Y') }}</td>
                <td>{{ $clubs->city->name }}</td>
                <td>@foreach ($clubs->sports as $sport)
                {{ $sport->name }} 

                @endforeach
                </td>
                <td>
                    <form action="{{ route('clubs.destroy',$clubs->id) }}" method="POST" onsubmit="return confirm('{{trans('are you sure') }}')">

                        <a href="{{ route('clubs.edit',$clubs->id) }}">
                        
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