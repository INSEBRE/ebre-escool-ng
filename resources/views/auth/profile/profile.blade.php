@extends('layouts.app')

@section('htmlheader_title')
    Profile
@endsection

@section('main-content')
    <div class="spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>

                    <div class="panel-body">
                        <div class="container">
                            <h1>Personal Info</h1>
                            <button  class="btn btn-primary col-xs-1 col-xs-offset-10">Edit</button>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Important information</h3>
                    </div>
                    <!-- /.form group -->
                    <div class="box-body">
                        <div class="form-group">
                            <div class="input-group col-xs-offset-3">
                                <img src="{{Gravatar::get(Auth::loginUsingId(1)->email)}}" class="img-circle"
                                     alt="User Image" width="170px" height="170px" /><br>
                            </div>
                            <div class="text-center">
                                {{ Auth::user()->name }} {{ Auth::user()->lastname }}
                                <hr>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <!-- /.form group -->
                    <div class="box-body">
                        <div class="form-group">
                            <!-- /.form group -->
                            <div class="form-group">
                                <label>User id:</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-male"></i>
                                    </div>
                                    <input class="form-control" type="text" readonly="readonly"
                                           value="{{ Auth::user()->id }}">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <label>Username:</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input class="form-control" type="text" readonly="readonly"
                                           value="{{ Auth::user()->username }}">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <label>Corporate email:</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-at"></i>
                                    </div>
                                    <input class="form-control" type="text" readonly="readonly"
                                           value="{{ Auth::user()->email }}">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <label>Address:</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <input class="form-control" type="text" readonly="readonly"
                                           value="{{ Auth::user()->address }}">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>
            </div>
            <!-- /.col (left) -->
            <div class="col-md-8">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#UserInformation" data-toggle="tab">User Information</a></li>
                        <li><a href="#PersonInformation" data-toggle="tab">Person Information</a></li>
                        <li><a href="#AcademicInformation" data-toggle="tab">Academic Information</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="UserInformation">
                            <div class="box-body">
                                <div class="form-group">
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>User id:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-male"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->id }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>Username:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->username }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>Corporate email:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-at"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->email }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>Personal email 1:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-at"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->email }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>Personal email 2:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-at"></i>
                                            </div>
                                            <input class="form-control" type="text"
                                                   value="{{ Auth::user()->email }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>Created at:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->createdat }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>Updated at:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->updatedat }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->

                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="PersonInformation">
                            <div class="box-body">
                                <div class="form-group">
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>Person id:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-male"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->id }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>DNI/NIF/Passaport:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-credit-card"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->identifier }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>Personal identifier 2(Ex. TSI):</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-credit-card"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->identifier2 }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>Name:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->name }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>First Surname:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->lastname }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>Second Surname:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->lastname }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <!-- Date mm/dd/yyyy -->
                                    <div class="form-group">
                                        <label>Date of Birth:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" readonly="readonly"
                                                   data-inputmask="'alias': 'dd/mm/yyyy'"
                                                   data-mask value="{{ Auth::user()->dateofbirth}}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <label>Population:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->population}}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>Address:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->address }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>Phone/Mobile:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->phone }}">
                                            <div class="input-group-addon">
                                                <i class="fa fa-mobile"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->mobile }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->

                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="AcademicInformation">
                            <div class="box-body">
                                <div class="form-group">
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>Organizational Unit:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-users"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->organizationalunit }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>Username:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->username }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>Course:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->course }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>Module:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-leanpub"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->module }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>Group:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-slideshare"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->group }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group">
                                        <label>Description:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </div>
                                            <input class="form-control" type="text" readonly="readonly"
                                                   value="{{ Auth::user()->description }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->

                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
        </div>
    </div>
@endsection
