@extends('iphones.layout')
 
@section('content')
    <br>
    <div class="row">
    	<br>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD Assignment - Sarah May Anasco</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('iphones.create') }}"> Create New iPhone</a>
            </div>
        </div>
    </div>
    <hr>
    <br>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   <div class="row">
	    <table id="iPhoneTables" class="table table-bordered">
	        <thead>
		        <tr>
		            <th>No</th>
		            <th>Name</th>
		            <th>Details</th>
		            <th width="280px">Action</th>
		        </tr>
		    </thead>
	        <tbody>
		        @foreach ($iphones as $iphone)
		        <tr>
		            <td>{{ ++$i }}</td>
		            <td>{{ $iphone->name }}</td>
		            <td>{{ $iphone->detail }}</td>
		            <td>
		                <form action="{{ route('iphones.destroy',$iphone->id) }}" method="POST">
		   
		                    <a class="btn btn-info" href="{{ route('iphones.show',$iphone->id) }}">View</a>
		    
		                    <a class="btn btn-primary" href="{{ route('iphones.edit',$iphone->id) }}">Edit</a>
		   
		                    @csrf
		                    @method('DELETE')
		      
		                    <button type="submit" class="btn btn-danger">Delete</button>
		                </form>
		            </td>
		        </tr>
		        @endforeach
		    </tbody>
	        <tfoot>
		        <tr>
		            <th>No</th>
		            <th>Name</th>
		            <th>Details</th>
		            <th width="280px">Action</th>
		        </tr>
		    </tfoot>
	    </table>
  	</div>
    
      
@endsection