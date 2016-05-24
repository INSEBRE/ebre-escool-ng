@extends('layouts.app')

@section('htmlheader_title')
    Profile
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>

                    <div class="panel-body">
                        <div class="container">
                            <h1>Personal Info</h1>
                            <hr>
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img src="{{Gravatar::get(Auth::loginUsingId(1)->email)}}" class="img-circle" alt="User Image" width="150px" height="150px"/><br>
                                        {{ Auth::user()->name }} {{ Auth::user()->lastname }}
                                        {{--<h6>Upload a different photo...</h6>--}}
                                        {{--<input type="file" class="form-control">--}}
                                    </div>
                                    <br>
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">User id:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->id }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Username:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->username }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Corporate Email:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->email}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Address:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->address}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Population:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->population}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Date of birth:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->dateodbirth}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Sex:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->sex}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Phone:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->phone}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Mobile:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->mobile}}">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- edit form column -->
                                <div class="col-md-7 personal-info">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">User id:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->id }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Person id:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->id }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Username:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->username }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Full name:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->name }} {{ Auth::user()->lastname }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">First name:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Last name:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->lastname }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Second surname:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->secondsurname }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Organizational unit:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->organizationalunit }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Corporate Email:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->corporateemail}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Personal Email 1:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->email}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Personal Email 2:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->personalemail2}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">DNI/NIF/Passaport:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->dni}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Kind personal identifier:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->id}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Personal identifier 2(Ex. TSI):</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->id}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Address:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->address}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Population:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->population}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Date of birth:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->dateodbirth}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Sex:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->sex}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Phone:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->phone}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Mobile:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->mobile}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Created at:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->createdat}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Updated at:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->updatedat}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Role:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->role}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Description:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" readonly="readonly" value="{{ Auth::user()->description}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-8">
                                                <input type="button" class="btn btn-primary" value="Save Changes">
                                                <span></span>
                                                <input type="reset" class="btn btn-default" value="Cancel">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
