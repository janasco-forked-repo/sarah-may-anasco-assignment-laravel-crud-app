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
                <strong>Name:</strong><br><br>
                <h2>{{ $iphone->name }}<h2>
            </div><br><br>
        </div>
   		<br>
   		<br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong><br><br>
                <h5>{{ $iphone->detail }}</h5>
            </div>
        </div>
    </div>
@endsection