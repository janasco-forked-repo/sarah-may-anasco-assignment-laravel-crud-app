@extends('iphones.layout')
  
@section('content')
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> iPhone Details</h2>
            </div>
   			<br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('iphones.index') }}"> Back</a>
            </div>
        </div>
    </div>
   	<br>
   	<br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $iphone->name }}
            </div>
        </div>
   		<br>
   		<br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $iphone->detail }}
            </div>
        </div>
    </div>
@endsection