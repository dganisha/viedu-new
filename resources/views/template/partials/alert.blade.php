@if(Session::get('error'))
	<div class="row">
        <div class="col-md-12">
        	<div class="alert alert-danger alert-dismissable">
        	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        	    {{Session::get('error')}}
        	</div>
        </div>
    </div>
@endif
@if(Session::get('success'))
	<div class="row">
        <div class="col-md-12">
        	<div class="alert alert-success alert-dismissable">
        	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        	    {{Session::get('success')}}
        	</div>
        </div>
    </div>
@endif