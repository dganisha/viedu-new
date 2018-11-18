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
                  <div class="portlet-widgets">
                      <a href="/administrator/portfolio/create">
                        <i class="ion-plus"></i>
                      </a>
                  </div>
              </div>
              <div class="portlet-body">
                {!! view('template.partials.alert') !!}
                  <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                          <table id="datatable" class="table table-striped table-bordered">
                              <thead>
                                  <tr>
                                      <th>No</th>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Phone Number</th>
                                      <th>Role</th>
                                      <th>Image</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>d</td>
                                  <td>s</td>
                                  <td>w</td>
                                  <td>e</td>
                                  <td>r</td>
                                  <td class="text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-danger">Delete</a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>d</td>
                                  <td>s</td>
                                  <td>w</td>
                                  <td>e</td>
                                  <td>r</td>
                                  <td class="text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-danger">Delete</a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>d</td>
                                  <td>s</td>
                                  <td>w</td>
                                  <td>e</td>
                                  <td>r</td>
                                  <td class="text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-danger">Delete</a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>d</td>
                                  <td>s</td>
                                  <td>w</td>
                                  <td>e</td>
                                  <td>r</td>
                                  <td class="text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-danger">Delete</a>
                                    </div>
                                  </td>
                                </tr>
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