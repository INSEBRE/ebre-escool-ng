@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
    <div class="spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Wizard Plate</div>
                    <br>
                    <!--STEPS FORM START ------------ -->
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="stepsForm sf-theme-blue content">
                        <form method="post">
                            <div class="sf-steps">
                                <div class="sf-steps-content">
                                    <div>
                                        <span>1</span> Personal data
                                    </div>
                                    <div>
                                        <span>2</span> Period
                                    </div>
                                    <div>
                                        <span>3</span> Study
                                    </div>
                                    <div>
                                        <span>4</span> Course
                                    </div>
                                    <div>
                                        <span>5</span> Group Class
                                    </div>
                                    <div>
                                        <span>6</span> Profesional Modules
                                    </div>

                                    <div>
                                        <span>7</span> Training Units
                                    </div>
                                </div>
                            </div>
                            <div class="sf-steps-form sf-radius">

                                <ul class="sf-content"> <!-- form step one -->
                                    <li>
                                        <div class="sf_columns column_2">
                                            <div class="form-group">
                                                <div class="input-group col-xs-offset-2">
                                                    <div class="col-xs-offset-1">
                                                        <img src="{{Gravatar::get(Auth::loginUsingId(1)->email)}}"
                                                             class="img-circle"
                                                             alt="User Image" width="150px" height="150px"/>
                                                    </div>
                                                </div>
                                            {{--<div class="col-xs-offset-3">--}}
                                            {{--{{ Auth::user()->name }} {{ Auth::user()->lastname }}--}}
                                            {{--</div>--}}
                                            <!-- /.input group -->
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="sf_columns column_026">
                                            <label>DNI/NIE/Passaport:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input type="text" class="form-control" name=""
                                                       placeholder="DNI/NIE/Passaport"
                                                       data-required="true">
                                            </div>

                                        </div>
                                        <div class="sf_columns column_2">
                                            <label>TSI:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input type="text" class="form-control" placeholder="TSI"
                                                       data-required="true">
                                            </div>
                                        </div>
                                    </li>
                                    {{--Name, Surname--}}
                                    <li>
                                        <div class="sf_columns column_2">
                                            <label>Name:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input type="text" class="form-control" name="name" placeholder="Name"
                                                       data-required="true">
                                            </div>

                                        </div>
                                        <div class="sf_columns column_2">
                                            <label>Firts Surname:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input type="text" class="form-control" name="firts_surname"
                                                       placeholder="Firts Surname"
                                                       data-required="true">
                                            </div>
                                        </div>
                                        <div class="sf_columns column_2">
                                            <label>Second Surname:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Second Surname"
                                                        {{--data-required="true">--}}>
                                            </div>
                                        </div>
                                    </li>
                                    {{--Username--}}
                                    <li>
                                        <div class="sf_columns column_025">
                                            <label>Username:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input type="text" class="form-control" name="givename"
                                                       readonly="readonly" placeholder="Username">
                                                {{--data-required="true">--}}
                                            </div>

                                        </div>
                                        <div class="sf_columns column_025">
                                            <label>Password Generate:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input type="text" class="form-control" name="password"
                                                       readonly="readonly" placeholder="Password Generate"
                                                        {{--data-required="true">--}}>
                                            </div>
                                        </div>
                                        <div class="sf_columns column_025">
                                            <label>Password:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input type="password" class="form-control" name="password"
                                                       placeholder="Password"
                                                        {{--data-required="true">--}}>
                                            </div>
                                        </div>
                                        <div class="sf_columns column_025">
                                            <label>Password Verification:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input type="password" class="form-control" name="password_confirmation"
                                                       placeholder="Password Verification">
                                                {{--data-required="true">--}}
                                            </div>
                                        </div>
                                    </li>
                                    {{--Contact--}}
                                    <li>
                                        <div class="sf_columns column_025">
                                            <label>Phone:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input type="text" class="form-control" name="phone" placeholder="Phone"
                                                       data-required="true">
                                            </div>

                                        </div>
                                        <div class="sf_columns column_025">
                                            <label>Mobile:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-mobile"></i>
                                                </div>
                                                <input type="text" class="form-control" name="mobile"
                                                       placeholder="Mobile"
                                                       data-required="true">
                                            </div>
                                        </div>
                                        <div class="sf_columns column_025">
                                            <label>Email Center:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-at"></i>
                                                </div>
                                                <input type="text" class="form-control" name="email_center"
                                                       readonly="readonly"
                                                       placeholder="Email Center"> <!--data-required="true"
                                                       data-email="true"-->
                                            </div>
                                        </div>
                                        <div class="sf_columns column_025">
                                            <label>Personal Email:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-at"></i>
                                                </div>
                                                <input type="text" class="form-control" name="email"
                                                       placeholder="Personal Email"
                                                       data-required="true" data-email="true">
                                            </div>
                                        </div>
                                    </li>
                                    {{--Address--}}
                                    <li>
                                        <div class="sf_columns column_3">
                                            <label>Adress:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-home"></i>
                                                </div>
                                                <input type="text" class="form-control" name="adress"
                                                       placeholder="Adress"
                                                       data-required="true">
                                            </div>

                                        </div>
                                        <div class="sf_columns column_1">
                                            <label>Postal Code:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input type="text" class="form-control" name="postal_cpde"
                                                       placeholder="Postal Code"
                                                       data-required="true">
                                            </div>
                                        </div>
                                        <div class="sf_columns column_2">
                                            <label>Locality:</label>
                                            <label class="sf-select">
                                                <select name="locality" class="form-control" data-required="true">
                                                    <option value="locality">Tortosa</option>
                                                </select>
                                                <span></span>
                                            </label>
                                        </div>
                                    </li>
                                    {{--Date of Birthday--}}
                                    <div class="sf_columns column_2">
                                        <label>Date of Birthday:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" class="form-control" name="dateofbirthday"
                                                   placeholder="Date of Birthday"
                                                   data-required="true">
                                        </div>
                                    </div>
                                    <div class="sf_columns column_2">
                                        <label>Gender:</label>
                                        <div class="sf-radio">
                                            <label><input type="radio" value="M" name="gender"
                                                          data-required="true"><span></span> Male</label>
                                            <label><input type="radio" value="F" name="gender"
                                                          data-required="true"><span></span> Female</label>
                                        </div>
                                    </div>
                                </ul>

                                <ul class="sf-content"> <!-- form step two -->
                                    <div class="box box-default">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Period - Student</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                            class="fa fa-minus"></i></button>
                                            </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="column_3">
                                                <label>Period:</label>
                                                <label class="sf-select">
                                                    <select name="period" class="form-control"
                                                            data-required="true">
                                                        <option value="period">Hello!!</option>
                                                    </select>
                                                    <span></span>
                                                </label>
                                            </div>
                                            <br>
                                            <div class="column_3">
                                                <label>Student:</label>
                                                <label class="sf-select">
                                                    <select name="student" class="form-control"
                                                            data-required="true">
                                                        <option value="username">{{ Auth::user()->name }}</option>
                                                    </select>
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </ul>

                                <ul class="sf-content"> <!-- form step tree -->
                                    <div class="box box-default">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Study</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                            class="fa fa-minus"></i></button>
                                            </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="sf_columns column_3">
                                                <label>Study:</label>
                                                <label class="sf-select">
                                                    <select name="study" class="form-control" data-required="true">
                                                        <option value="study">SMX</option>
                                                    </select>
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </ul>

                                <ul class="sf-content"> <!-- form step tree -->
                                    <div class="box box-default">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Study</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                            class="fa fa-minus"></i></button>
                                            </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="sf_columns column_3">
                                                <label>Course:</label>
                                                <label class="sf-select">
                                                    <select name="course" class="form-control" data-required="true">
                                                        <option value="course">Course</option>
                                                    </select>
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </ul>

                                <ul class="sf-content"> <!-- form step tree -->
                                    <div class="box box-default">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Group Class</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                            class="fa fa-minus"></i></button>
                                            </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="sf_columns column_3">
                                                <label>Group Class:</label>
                                                <label class="sf-select">
                                                    <select name="groupclass" class="form-control" data-required="true">
                                                        <option value="groupclass">1r SMX A</option>
                                                    </select>
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </ul>

                                <ul class="sf-content"> <!-- form step tree -->
                                    <!-- box -->
                                    <div class="box box-default">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">1SMX - Curs 1 - SMX</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                            class="fa fa-minus"></i></button>
                                            </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="sf-check">
                                                        <label><input type="checkbox" value="M"
                                                                      name="gender"><span></span></label>MP01 - Muntatge
                                                        i manteniment d'equis
                                                        <br>
                                                        <label><input type="checkbox" value="F"
                                                                      name="gender"><span></span></label>MP02 - Sistemes
                                                        operatius monolloc
                                                        <br>
                                                        <label><input type="checkbox" value="F"
                                                                      name="gender"><span></span></label>MP03 -
                                                        Aplicacions ofimàtiques
                                                        <br>
                                                        <label><input type="checkbox" value="F"
                                                                      name="gender"><span></span></label>MP05 - Xarxes
                                                        locals
                                                        <br>
                                                        <label><input type="checkbox" value="F"
                                                                      name="gender"><span></span></label>MP09 - Formació
                                                        i orientació laboral
                                                        <br>
                                                        <label><input type="checkbox" value="F"
                                                                      name="gender"><span></span></label>MP11 - Angès
                                                        <br>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->

                                    <!-- box -->
                                    <div class="box box-default">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">2SMX - Curs 2 - SMX</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                            class="fa fa-minus"></i></button>
                                            </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="sf-check">
                                                        <label><input type="checkbox" value="M"
                                                                      name="gender"><span></span></label>MP04 - Muntatge
                                                        i manteniment d'equis
                                                        <br>

                                                        <label><input type="checkbox" value="F"
                                                                      name="gender"><span></span></label>MP06 - Sistemes
                                                        operatius monolloc
                                                        <br>

                                                        <label><input type="checkbox" value="F"
                                                                      name="gender"><span></span></label>MP07 -
                                                        Aplicacions ofimàtiques
                                                        <br>

                                                        <label><input type="checkbox" value="F"
                                                                      name="gender"><span></span></label>MP08 - Xarxes
                                                        locals
                                                        <br>

                                                        <label><input type="checkbox" value="F"
                                                                      name="gender"><span></span></label>MP10 - Formació
                                                        i orientació laboral
                                                        <br>

                                                        <label><input type="checkbox" value="F"
                                                                      name="gender"><span></span></label>MP12 - Angès
                                                        <br>

                                                        <label><input type="checkbox" value="F"
                                                                      name="gender"><span></span></label>MP13 - Formació
                                                        en centres de treball
                                                        <br>

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </ul>

                                <ul class="sf-content"> <!-- form step tree -->
                                    <li>
                                        <div class="sf_columns column_3">
                                            <label>Gender:</label>
                                            <div class="sf-check">
                                                <label><input type="checkbox" value="M" name="gender"
                                                              data-required="true"><span></span> Male</label>
                                                <label><input type="checkbox" value="F" name="gender"
                                                              data-required="true"><span></span> Female</label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="sf-steps-navigation sf-align-right">
                                <span id="sf-msg" class="sf-msg-error"></span>
                                <button id="sf-prev" type="button" class="sf-button">Previous</button>
                                <button id="sf-next" type="button" class="sf-button">Next</button>
                            </div>
                        </form>
                    </div>
                    <!--STEPS FORM END -------------- -->
                </div>
            </div>
        </div>
    </div>
@endsection
