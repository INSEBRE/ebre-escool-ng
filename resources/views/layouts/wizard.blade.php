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
                        <div class="container">
                            <div class="container-top">
                                <h3>* Resize window for the responsive control </h3>
                                <h3>* Change style for color </h3>
                                <div class="themes">
                                    <span data-value="default" class="selectedx" style="background:#2096cd;"></span>
                                    <span data-value="purple" style="background:#795aac;"></span>
                                    <span data-value="red" style="background:#f44a56;"></span>
                                    <span data-value="green" style="background:#27ae60;"></span>
                                    <span data-value="turquoise" style="background:#1fb5ad;"></span>
                                </div>
                                <div class="themes">
                                    <a class="activex" href="index.html">Example 1</a>
                                    <a href="index2.html">Example 2</a>
                                    <a href="index3.html">Example 3</a>
                                    <a href="index4.html">Example 4</a>
                                </div>
                            </div>

                            <!--STEPS FORM START ------------ -->
                            <div class="stepsForm">
                                <form method="post">
                                    <div class="sf-steps">
                                        <div class="sf-steps-content">
                                            <div>
                                                <span>1</span> Profile
                                            </div>
                                            <div>
                                                <span>2</span> Account
                                            </div>
                                            <div>
                                                <span>3</span> Extras
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sf-steps-form sf-radius">

                                        <ul class="sf-content"> <!-- form step one -->
                                            <li>
                                                <div class="sf_columns column_3">
                                                    <input type="text" name="name" placeholder="Name" data-required="true">
                                                </div>
                                                <div class="sf_columns column_3">
                                                    <input type="text" name="surname" placeholder="Surname" data-required="true">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sf_columns column_3">
                                                    <label class="sf-select">
                                                        <select name="country" data-required="true">
                                                            <option value="" selected="selected" >Select country...</option>
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
                                                        <label><input type="radio" value="M" name="gender" data-required="true"><span></span> Male</label>
                                                        <label><input type="radio" value="F" name="gender" data-required="true"><span></span> Female</label>
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
                                                        <label><input type="checkbox" value="test" name="test" data-required="true"><span></span> Lorem Ipsum is simply dummy text of the printing and typesetting industry</label>
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
                                                    <input type="text" placeholder="Email" data-required="true" data-email="true">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sf_columns column_3">
                                                    <input type="password" placeholder="Password" data-required="true" data-confirm="true">
                                                </div>
                                                <div class="sf_columns column_3">
                                                    <input type="password" placeholder="Confirm Password" data-required="true" data-confirm="true">
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
                                                        <label><input checked type="checkbox" value="true" name="accept"><span></span> Lorem Ipsum is simply dummy text of the printing and typesetting industry</label>
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

                        <div class="footer">
                            <h2>Main Features</h2>
                            <h4>1. Clean</h4>
                            <h4>2. Basic Jquery Plugin</h4>
                            <h4>3. Falt Design</h4>
                            <h4>4. Responsive</h4>
                            <h4>5. Custom selectbox</h4>
                            <h4>6. Custom radio and checkbox</h4>
                            <h4>7. Multi step form</h4>
                            <h4>8. 5 color shemes</h4>
                            <h4>9. 6 cell grid system</h4>
                            <h4>10. Form validation (requred, email,number and confirm validation included) </h4>
                            <h4>11. AJAX form post action</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
