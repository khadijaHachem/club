@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cities.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clubs.update', $club->id) }}" method="POST">
        @csrf
        @method('PUT')

       
        <!------------------------------------------------------------------>

        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $club->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>description:</strong>
                    <input type="text" name="description" value="{{ $club->description }}" class="form-control" placeholder="description">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>logo:</strong>
                    <input type="file" name="logo" value="{{ $club->logo }}" class="form-control" placeholder="description">
                    <img src="/uploads/logo/{{ $club->logo }}" width="300px">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>city:</strong>
                    <select class="form-control" name="city_id">
                        @foreach ($cities as $cities)
                        <option value="{{ $cities->id }} "  {{ ( $cities->id === $club->city_id) ? ' selected="selected"'  : '' }}"> 
                       
                       
                        {{ $cities->name }} 
                        </option>
                         @endforeach    
                    </select>
                </div>
               <!-- checked--> 
               

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>sports:</strong>
                    @foreach ($sports as $sports)
                        
                         {{ $sports->name }}  <input type="checkbox" name="sport_id[]"  value="{{ $sports->id }}" {{ ( $club->sports->contains($sports->id)) ? ' checked="checked"'  : '' }}" />

                         
                    @endforeach   
                </div>

            </div>

            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div> 
        <!------------------------------------------------------------------->

    </form>
@endsection