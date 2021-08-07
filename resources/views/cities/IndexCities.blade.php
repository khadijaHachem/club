@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cities </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cities.create') }}" title="Create a city"> <i class="fas fa-plus-circle"></i>
               
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
        @foreach ($cities as $cities)
            <tr>
                <td>{{ $cities->id }}</td>
                <td>{{ $cities->name }}</td>

                <td>{{ date_format($cities->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('cities.destroy',$cities->id) }}" method="POST" onsubmit="return confirm('{{trans('are you sure') }}')">

                        

                        <a href="{{ route('cities.edit',$cities->id) }}">
                        
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