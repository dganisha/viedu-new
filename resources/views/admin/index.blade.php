@extends('layouts.layout_nonton')

@section('style')
  <style>
    html,body{
      width: 100%;
    }
    .tengah{  
      display: table-cell;
      text-align: center;
      vertical-align: middle;
      color: white;
    }
    .admin-section{
      width: 100%;
      height: auto;
      padding: none;
      overflow-x: hidden;
      /*margin: 4.7em 0 5em 0;*/
    }
    .admin-section main{
      width: 100%;
      height: 20em;
      background: url(/educourse/images/background.png);
      background-size: cover;
      margin-left: 0;
      margin-right: 0;
      display: table;
    }
    .admin-section .sidenav ul a li{
      list-style: none;
      padding-top: 1.5em;
      padding-bottom: 1.5em;
      padding-left: 3em;
      color: white;
    }
    .admin-section .sidenav ul a li:hover{
      background-color: #0d47a1;
    }
    .admin-section .sidenav{
      position: absolute;
      background-color: #4285F4;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
    }
    .admin-section .sidenav ul{
      padding-left: 0;
      padding-bottom: 3em;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
    }
    .actives{
      background-color: #0d47a1;
    }
    br{
      display: none;
    }
    .admin-section .table{
      margin-top: 2em;
      margin-bottom: 2em;
    }
    .admin-section main h1 span{
      color: #CC0000;
    }
  </style>
@endsection

@section('content')
  	<div class="admin-section">
      <main>
        <div class="tengah">
          <h1>Selamat Datang <span>Admin Akbar</span> ! :D</h1>
        </div>
      </main>
      <div class="row">
        <div class="col-md-2">
          <div class="sidenav">
            <ul>
              <a href="#"><li class="actives">User</li></a>
              <a href="#"><li>Video</li></a>
              <a href="#"><li>Channel</li></a>
            </ul>
          </div>
        </div>
        <div class="col-md-10">
          <!-- Editable table -->
            <div class="container">
            <table class="table table-bordered table-responsive-md table-striped text-center">
              <tr>
                <th class="text-center">id</th>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Phone Number</th>
                <th class="text-center">Role</th>
                <!-- <th class="text-center">Sort</th> -->
                <th class="text-center">Action</th>
              </tr>
              <tr>
                <td class="pt-3-half">1</td>
                <td class="pt-3-half">Akbar</td>
                <td class="pt-3-half">lil@gmail.com</td>
                <td class="pt-3-half">022151541</td>
                <td class="pt-3-half">
                  <!-- <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                  <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down"
                                aria-hidden="true"></i></a></span> -->
                  Teacher
                </td>
                <td>
                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">DELETE</button></span>
                </td>
              </tr>
              <tr>
                <td class="pt-3-half">2</td>
                <td class="pt-3-half">Dimas</td>
                <td class="pt-3-half">lal@gmail.com</td>
                <td class="pt-3-half">022154651156</td>
                <td class="pt-3-half">
                  Student
                </td>
                <td>
                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">DELETE</button></span>
                </td>
              </tr>
              <tr>
                <td class="pt-3-half">3</td>
                <td class="pt-3-half">Angga</td>
                <td class="pt-3-half">lol@gmail.com</td>
                <td class="pt-3-half">02248465456</td>
                <td class="pt-3-half">
                  Teacher
                </td>
                <td>
                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">DELETE</button></span>
                </td>
              </tr>
              <tr class="hide">
                <td class="pt-3-half">4</td>
                <td class="pt-3-half">Burhan</td>
                <td class="pt-3-half">lul@gmail.com</td>
                <td class="pt-3-half">02260451456</td>
                <td class="pt-3-half">
                  Teacher
                </td>
                <td>
                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">DELETE</button></span>
                </td>
              </tr>
            </table>
            </div>
          <!-- Editable table -->
        </div>
      </div> 
    </div>
@endsection