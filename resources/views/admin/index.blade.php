@extends('template.partials.index')
@section('style')
  <link href="/css/assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('title')
  User
@endsection
@section('content')
  <div class="row">
      <div class="col-md-12">
          <div class="portlet">
              <div class="portlet-heading">
                  <h3 class="portlet-title text-dark">List User</h3>
              </div>
              <div class="portlet-body">
                {{-- {!! view('template.partials.alert') !!} --}}
                  <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        @if(count($errors) > 0)
                          <div class="alert alert-danger alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <h4><i class="icon fa fa-close"></i> Failed!</h4>
                              @foreach($errors->all() as $error)
                                <p><i>{{ $error }}</i></p>
                              @endforeach
                          </div>
                        @endif
                        @if (Session::has('success'))
                             <div class="alert alert-success alert-dismissible">
                               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                               <h4><i class="icon fa fa-check"></i> Success!</h4>
                               {{ Session::get('success')}}
                             </div>
                        @elseif (Session::has('failed'))
                            <div class="alert alert-danger alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <h4><i class="icon fa fa-close"></i> Failed!</h4>
                              {{ Session::get('failed')}}
                            </div>
                        @endif
                          <table id="datatable" class="table table-striped table-bordered">
                              <thead>
                                  <tr>
                                      <th>No</th>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Phone Number</th>
                                      <th>Role</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @php $no = 1; @endphp
                                @foreach($allUser as $user)
                                <tr>
                                  <td>{{ $no++ }}</td>
                                  <td>{{ $user->name }}</td>
                                  <td>{{ $user->email }}</td>
                                  <td>{{ $user->phone_number }}</td>
                                  <td>{{ $user->role }}</td>
                                  <td class="text-center">
                                    <div class="btn-group">
                                        <form method="POST" action="/admin/deleteUser">
                                          @csrf
                                          <input type="hidden" name="userid" value="{{ $user->id }}">
                                          <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
@section('script')
  <script src="/css/assets/datatables/jquery.dataTables.min.js"></script>
  <script src="/css/assets/datatables/dataTables.bootstrap.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#datatable').dataTable({
        "scrollX": true,
      });
    });
    function del(id) {
        $('#delete' + id).submit();
    }
  </script>
@endsection