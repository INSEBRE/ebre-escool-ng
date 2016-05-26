@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Wizard Plate</div>
                    <br>
                    <!--STEPS FORM START ------------ -->
                    <div class="stepsForm sf-theme-blue">
                        <form method="post">
                            <div class="sf-steps">
                                <div class="sf-steps-content">
                                    <div>
                                        <span>1</span> Personal data
                                    </div>
                                    <div>
                                        <span>2</span> Student
                                    </div>
                                    <div>
                                        <span>3</span> Period
                                    </div>
                                    <div>
                                        <span>4</span> Study
                                    </div>
                                    <div>
                                        <span>5</span> Course
                                    </div>
                                    <div>
                                        <span>6</span> Group Class
                                    </div>
                                    <div>
                                        <span>7</span> Profesional Modules
                                    </div>

                                    <div>
                                        <span>8</span> Training Units
                                    </div>
                                </div>
                            </div>
                            <div class="sf-steps-form sf-radius">

                                <ul class="sf-content"> <!-- form step one -->
                                    <li>
                                        <div class="sf_columns column_2">
                                            <div class="form-group">
                                                <div class="input-group col-xs-offset-2">
                                                    <img src="{{Gravatar::get(Auth::loginUsingId(1)->email)}}" class="img-circle"
                                                         alt="User Image" width="150px" height="150px" /><br>
                                                    {{ Auth::user()->name }} {{ Auth::user()->lastname }}
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                        <div class="sf_columns column_3">
                                                <label>Username:</label>

                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" placeholder="Surname"
                                                           data-required="true">
                                                </div>
                                        </div>
                                        <div class="sf_columns column_3">
                                            <input type="text" name="surname" placeholder="Surname"
                                                   data-required="true">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sf_columns column_3">
                                            <label class="sf-select">
                                                <select name="country" data-required="true">
                                                    <option value="" selected="selected">Select country...</option>
                                                    <option value="de">Germany</option>
                                                    <option value="en">England</option>
                                                    <option value="us">United States</option>
                                                    <option value="tr">Turkey</option>
                                                    <option value="jp">Japan</option>
                                                </select>
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="sf_columns column_3">
                                            <div class="sf-radio">
                                                Gender :
                                                <label><input type="radio" value="M" name="gender" data-required="true"><span></span>
                                                    Male</label>
                                                <label><input type="radio" value="F" name="gender" data-required="true"><span></span>
                                                    Female</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sf_columns column_6">
                                            <textarea placeholder="Address" name="address"></textarea>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sf_columns column_6">
                                            <div class="sf-check">
                                                <label><input type="checkbox" value="test" name="test"
                                                              data-required="true"><span></span> Lorem Ipsum is simply
                                                    dummy text of the printing and typesetting industry</label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <ul class="sf-content"> <!-- form step two -->
                                    <li>
                                        <div class="sf_columns column_3">
                                            <input type="text" placeholder="Username" data-required="true">
                                        </div>
                                        <div class="sf_columns column_3">
                                            <input type="text" placeholder="Email" data-required="true"
                                                   data-email="true">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sf_columns column_3">
                                            <input type="password" placeholder="Password" data-required="true"
                                                   data-confirm="true">
                                        </div>
                                        <div class="sf_columns column_3">
                                            <input type="password" placeholder="Confirm Password" data-required="true"
                                                   data-confirm="true">
                                        </div>
                                    </li>
                                </ul>

                                <ul class="sf-content"> <!-- form step tree -->
                                    <li>
                                        <div class="sf_columns column_3">
                                            <input type="text" placeholder="Phone" data-number="true">
                                        </div>
                                        <div class="sf_columns column_3">
                                            <input type="text" placeholder="Extra">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sf_columns column_6">
                                            <div class="sf-check">
                                                <label><input checked type="checkbox" value="true"
                                                              name="accept"><span></span> Lorem Ipsum is simply dummy
                                                    text of the printing and typesetting industry</label>
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
