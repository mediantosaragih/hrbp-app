@extends('layout.main')

@section('title', 'Roster')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container mt-5">
      <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3">
                  <div class="sticky-top mb-3">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Draggable Events</h4>
                      </div>
                      <div class="card-body">
                        <!-- the events -->
                        <div id="external-events">
                          <div class="external-event bg-success">Lunch</div>
                          <div class="external-event bg-warning">Go home</div>
                          <div class="external-event bg-info">Do homework</div>
                          <div class="external-event bg-primary">Work on UI design</div>
                          <div class="external-event bg-danger">Sleep tight</div>
                          <div class="checkbox">
                            <label for="drop-remove">
                              <input type="checkbox" id="drop-remove">
                              remove after drop
                            </label>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Create Event</h3>
                      </div>
                      <div class="card-body">
                        <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                          <ul class="fc-color-picker" id="color-chooser">
                            <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                            <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                            <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                            <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                            <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                          </ul>
                        </div>
                        <!-- /btn-group -->
                        <div class="input-group">
                          <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                          <div class="input-group-append">
                            <button id="add-new-event" type="button" class="btn btn-primary">Add</button>
                          </div>
                          <!-- /btn-group -->
                        </div>
                        <!-- /input-group -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                  <div class="card card-primary">
                    <div class="card-body p-0">
                      <!-- THE CALENDAR -->
                      <div id="calendar"></div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </section>

      </div>
      </div>


@stop