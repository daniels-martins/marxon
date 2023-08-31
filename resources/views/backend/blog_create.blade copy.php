@extends('layout.admin')
@section('content')
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start container-fluid -->
                <div class="container-fluid">

                    <!-- start  -->
                    <div class="row">
                        <div class="col-12">
                            <div>
                                <h4 class="header-title mb-3">Form Elements</h4>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Text</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" value="Some text value...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="example-email">Email</label>
                                    <div class="col-md-10">
                                        <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="example-password">Password</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control" id="example-password" value="password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="example-placeholder">Placeholder</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="example-placeholder" placeholder="placeholder">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="example-textarea">Text area</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" rows="5" id="example-textarea"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end -->

                        <div class="col-lg-6">
                            <form class="form-horizontal mt-4 mt-lg-0">

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Readonly</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" readonly="" value="Readonly value">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Disabled</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" disabled="" value="Disabled value">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Static control</label>
                                    <div class="col-md-10">
                                        <p class="form-control-static my-1">email@example.com</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="example-helping">Helping text</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="Helping text" id="example-helping">
                                        <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Input Select</label>
                                    <div class="col-md-10">
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <h6 class="font-13 mt-3">Multiple select</h6>
                                        <select multiple="" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <h5 class="header-title">Input States</h5>
                                <p class="sub-header">
                                    Bootstrap includes validation styles for error, warning, and success states on form controls.
                                </p>

                                <form class="form-horizontal">

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="state-success">Success</label>
                                        <div class="col-md-6">
                                            <input type="text" id="state-success" name="state-success" class="form-control border-success" placeholder="...">
                                        </div>
                                    </div>

                                    <div class="form-group has-warning row">
                                        <label class="col-md-3 col-form-label" for="state-warning">Warning</label>
                                        <div class="col-md-6">
                                            <input type="text" id="state-warning" name="state-warning" class="form-control border-warning" placeholder="...">
                                        </div>
                                    </div>

                                    <div class="form-group has-error row">
                                        <label class="col-md-3 col-form-label" for="state-danger">Danger</label>
                                        <div class="col-md-6">
                                            <input type="text" id="state-danger" name="state-danger" class="form-control border-danger" placeholder="...">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mt-4">
                                <h5 class="header-title">Input Sizes</h5>
                                <p class="sub-header">
                                    Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.
                                </p>

                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="example-input-small">Small</label>
                                        <div class="col-md-6">
                                            <input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=".input-sm">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="example-input-normal">Normal</label>
                                        <div class="col-md-6">
                                            <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="example-input-large">Large</label>
                                        <div class="col-md-6">
                                            <input type="text" id="example-input-large" name="example-input-large" class="form-control input-lg" placeholder=".input-lg">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Grid Sizes</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder=".col-md-4">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-5 offset-md-3">
                                            <input type="text" class="form-control" placeholder=".col-md-5">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-3">
                                            <input type="text" class="form-control" placeholder=".col-md-6">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-9 offset-md-3">
                                            <input type="text" class="form-control" placeholder=".col-md-9">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-12">
                            <div>
                                <h4 class="mt-5 header-title">Input groups</h4>
                                <p class="sub-header">
                                    Extend form controls by adding text or buttons before, after, or on both sides of any text-based <code>&lt;input&gt;</code>. Use <code>.input-group</code> with an <code>.input-group-addon</code> or <code>.input-group-btn</code> to prepend or append elements to a single <code>.form-control</code>.
                                </p>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <form class="form mt-4 mt-lg-0">
                                            <div class="form-group">
                                                <label class="control-label" for="example-input1-group1">Static</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                    </div>
                                                    <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Username">
                                                </div>

                                                <div class="input-group mt-3">
                                                    <input type="email" id="example-input2-group1" name="example-input2-group1" class="form-control" placeholder="Email">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                                    </div>
                                                </div>
                                                <div class="input-group mt-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                                    </div>
                                                    <input type="text" id="example-input3-group1" name="example-input3-group1" class="form-control" placeholder="..">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- form-group -->

                                        </form>
                                    </div>

                                    <div class="col-lg-4">
                                        <form class="form mt-4 mt-lg-0">
                                            <div class="form-group">
                                                <label class="control-label mt-3 mt-lg-0" for="example-input1-group2">Buttons</label>
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                </span>
                                                    <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
                                                </div>
                                                <div class="input-group mt-3">
                                                    <input type="email" id="example-input2-group2" name="example-input2-group2" class="form-control" placeholder="Email">
                                                    <span class="input-group-append">
                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                                </span>
                                                </div>
                                                <div class="input-group mt-3">
                                                    <span class="input-group-prepend">
                                                        <button type="button" class="btn btn-primary"><i class="fab fa-facebook-f"></i></button>
                                                    </span>
                                                    <input type="text" id="example-input3-group2" name="example-input3-group2" class="form-control" placeholder="Search">
                                                    <span class="input-group-append">
                                                        <button type="button" class="btn btn-primary"><i class="fab fa-twitter"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- form-group -->

                                        </form>
                                    </div>

                                    <div class="col-lg-4">
                                        <form class="form mt-4 mt-lg-0">
                                            <div class="form-group">
                                                <label class="control-label mt-3 mt-lg-0" for="example-input1-group3">Dropdowns</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;">Action <i class="mdi mdi-chevron-down"></i></button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="javascript:void(0)" class="dropdown-item">Action</a></li>
                                                            <li><a href="javascript:void(0)" class="dropdown-item">Another action</a></li>
                                                            <li><a href="javascript:void(0)" class="dropdown-item">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                    <input type="text" id="example-input1-group3" name="example-input1-group3" class="form-control" placeholder="Username">
                                                </div>
                                                <div class="input-group mt-3">
                                                    <input type="email" id="example-input2-group3" name="example-input2-group3" class="form-control" placeholder="Email">
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;">Action <i class="mdi mdi-chevron-down"></i></button>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="javascript:void(0)" class="dropdown-item">Action</a></li>
                                                            <li><a href="javascript:void(0)" class="dropdown-item">Another action</a></li>
                                                            <li><a href="javascript:void(0)" class="dropdown-item">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="input-group mt-3">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-primary" style="overflow: hidden; position: relative;">Action</button>
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;"><i class="mdi mdi-chevron-down"></i></button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="javascript:void(0)" class="dropdown-item">Action</a></li>
                                                            <li><a href="javascript:void(0)" class="dropdown-item">Another action</a></li>
                                                            <li><a href="javascript:void(0)" class="dropdown-item">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                    <input type="text" id="example-input3-group3" name="example-input3-group3" class="form-control" placeholder="..">
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;"><i class="mdi mdi-chevron-down"></i></button>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="javascript:void(0)" class="dropdown-item">Action</a></li>
                                                            <li><a href="javascript:void(0)" class="dropdown-item">Another action</a></li>
                                                            <li><a href="javascript:void(0)" class="dropdown-item">Separated link</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- form-group -->

                                        </form>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mt-5">
                                <h4 class="header-title mb-3">Basic example</h4>

                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mt-5">
                                <h4 class="header-title mb-3">Horizontal form</h4>

                                <form class="form-horizontal mt-3">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-3 control-label">Email</label>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-md-3 control-label">Password</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword4" class="col-md-3 control-label">Re Password</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Retype Password">
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-end">
                                        <div class="col-md-9">
                                            <div class="checkbox checkbox-info">
                                                <input id="checkbox222" type="checkbox">
                                                <label for="checkbox222">
                                                    Check me out !
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-end mb-0">
                                        <div class="col-md-9">
                                            <button type="submit" class="btn btn-info">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mt-5">
                                <h4 class="header-title">Select menu</h4>
                                <p class="sub-header">
                                    Custom <code class="highlighter-rouge">&lt;select&gt;</code> menus need only a custom class, <code class="highlighter-rouge">.custom-select</code> to trigger the custom styles.
                                </p>

                                <select class="custom-select mt-3">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <h4 class="header-title  mt-5">Switches</h4>
                                <p class="text-muted">
                                    A switch has the markup of a custom checkbox but uses the <code>.custom-switch</code> class to render a toggle switch. Switches also support the <code>disabled</code> attribute.
                                </p>

                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                                </div>
                                <div class="custom-control custom-switch mt-1">
                                    <input type="checkbox" class="custom-control-input" disabled="" id="customSwitch2">
                                    <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mt-5">
                                <h4 class="header-title">Bootstrap Checkboxes and radios</h4>
                                <div class="mt-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mt-5">
                                <h4 class="header-title">Checkbox and Radio</h4>

                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-4">

                                            <h5 class="font-16 mt-3">Basic</h5>

                                            <p class="text-muted font-13">
                                                Supports bootstrap brand colors: <code>.checkbox-primary</code>, <code>.checkbox-info</code> etc.
                                            </p>

                                            <div class="checkbox">
                                                <input id="checkbox0" type="checkbox">
                                                <label for="checkbox0">
                                                    Default
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-teal">
                                                <input id="checkbox111" type="checkbox">
                                                <label for="checkbox111">
                                                    Teal
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox2" type="checkbox" checked>
                                                <label for="checkbox2">
                                                    Primary
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox3" type="checkbox">
                                                <label for="checkbox3">
                                                    Success
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-info">
                                                <input id="checkbox4" type="checkbox">
                                                <label for="checkbox4">
                                                    Info
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-warning">
                                                <input id="checkbox5" type="checkbox" checked>
                                                <label for="checkbox5">
                                                    Warning
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-danger">
                                                <input id="checkbox6" type="checkbox" checked>
                                                <label for="checkbox6">
                                                    Danger
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-dark">
                                                <input id="checkbox6c" type="checkbox">
                                                <label for="checkbox6c">
                                                    Dark
                                                </label>
                                            </div>

                                            <p class="text-muted font-13 mt-4">Checkboxes without label text <code>.checkbox-single</code></p>
                                            <div class="checkbox checkbox-single">
                                                <input type="checkbox" id="singleCheckbox1" value="option1" aria-label="Single checkbox One">
                                                <label></label>
                                            </div>
                                            <div class="checkbox checkbox-primary checkbox-single">
                                                <input type="checkbox" id="singleCheckbox2" value="option2" checked aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>

                                            <p class="text-muted font-13 mt-4">Inline checkboxes</p>
                                            <div class="checkbox form-check-inline">
                                                <input type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label for="inlineCheckbox1"> Inline One </label>
                                            </div>
                                            <div class="checkbox checkbox-success form-check-inline">
                                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                                <label for="inlineCheckbox2"> Inline Two </label>
                                            </div>
                                            <div class="checkbox checkbox-pink form-check-inline">
                                                <input type="checkbox" id="inlineCheckbox3" value="option1">
                                                <label for="inlineCheckbox3"> Inline Three </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-4">

                                            <h5 class="font-16 mt-3">Circled</h5>

                                            <p class="text-muted font-13">
                                                <code>.checkbox-circle</code> for roundness.
                                            </p>

                                            <div class="checkbox checkbox-teal checkbox-circle">
                                                <input id="checkbox08" type="checkbox" checked>
                                                <label for="checkbox08">
                                                    teal
                                                </label>
                                            </div>

                                            <div class="checkbox checkbox-circle">
                                                <input id="checkbox7" type="checkbox">
                                                <label for="checkbox7">
                                                    Simply Rounded
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox8" type="checkbox" checked>
                                                <label for="checkbox8">
                                                    Info
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-primary checkbox-circle">
                                                <input id="checkbox-9" type="checkbox">
                                                <label for="checkbox-9">
                                                    Primary
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-success checkbox-circle">
                                                <input id="checkbox-10" type="checkbox" checked>
                                                <label for="checkbox-10">
                                                    Success
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-warning checkbox-circle">
                                                <input id="checkbox-11" type="checkbox">
                                                <label for="checkbox-11">
                                                    Warning
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-danger checkbox-circle">
                                                <input id="checkbox-12" type="checkbox" checked>
                                                <label for="checkbox-12">
                                                    Danger
                                                </label>
                                            </div>

                                            <div class="checkbox checkbox-dark checkbox-circle">
                                                <input id="checkbox-15" type="checkbox" checked>
                                                <label for="checkbox-15">
                                                    Dark
                                                </label>
                                            </div>

                                            <p class="text-muted font-13 mt-4">Checkboxes without label text <code>.checkbox-single</code></p>
                                            <div class="checkbox checkbox-single checkbox-circle">
                                                <input type="checkbox" id="singleCheckbox11" value="option1" aria-label="Single checkbox One">
                                                <label></label>
                                            </div>
                                            <div class="checkbox checkbox-primary checkbox-single checkbox-circle">
                                                <input type="checkbox" id="singleCheckbox21" value="option2" checked aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>

                                            <p class="text-muted font-13 mt-4">Inline checkboxes</p>
                                            <div class="checkbox form-check-inline checkbox-circle">
                                                <input type="checkbox" id="inlineCheckbox11" value="option1">
                                                <label for="inlineCheckbox11"> Inline One </label>
                                            </div>
                                            <div class="checkbox checkbox-success form-check-inline checkbox-circle">
                                                <input type="checkbox" id="inlineCheckbox21" value="option1" checked>
                                                <label for="inlineCheckbox21"> Inline Two </label>
                                            </div>
                                            <div class="checkbox checkbox-primary form-check-inline checkbox-circle">
                                                <input type="checkbox" id="inlineCheckbox31" value="option1">
                                                <label for="inlineCheckbox31"> Inline Three </label>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-4">

                                            <h5 class="font-16 mt-3">Disabled</h5>

                                            <p class="text-muted font-13">
                                                Disabled state also supported.
                                            </p>

                                            <div class="checkbox">
                                                <input id="checkbox9" type="checkbox" disabled>
                                                <label for="checkbox9">
                                                    Can't check this
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-warning checkbox-circle">
                                                <input id="checkbox110" type="checkbox" disabled checked>
                                                <label for="checkbox110">
                                                    And this
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-info">
                                                <input id="checkbox12" type="checkbox" disabled checked>
                                                <label for="checkbox12">
                                                    Can't check this
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox13" type="checkbox" disabled checked>
                                                <label for="checkbox13">
                                                    This too
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-danger checkbox-circle">
                                                <input id="checkbox14" type="checkbox" disabled checked>
                                                <label for="checkbox14">
                                                    And this
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end col -->

                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-4">

                                            <h5 class="font-16 mt-3">Basic</h5>

                                            <p class="text-muted font-13">
                                                Supports bootstrap brand colors: <code>.radio-primary</code>, <code>.radio-danger</code> etc.
                                            </p>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="radio">
                                                        <input type="radio" name="radio" id="radio1" value="option1" checked>
                                                        <label for="radio1">
                                                            Default
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-teal">
                                                        <input type="radio" name="radio" id="radio03" value="option3">
                                                        <label for="radio03">
                                                            Teal
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-primary">
                                                        <input type="radio" name="radio" id="radio3" value="option3">
                                                        <label for="radio3">
                                                            Primary
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-success">
                                                        <input type="radio" name="radio" id="radio4" value="option4">
                                                        <label for="radio4">
                                                            Success
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-info">
                                                        <input type="radio" name="radio" id="radio5" value="option5">
                                                        <label for="radio5">
                                                            Info
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-danger">
                                                        <input type="radio" name="radio" id="radio6" value="option6">
                                                        <label for="radio6">
                                                            Danger
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-warning">
                                                        <input type="radio" name="radio" id="radio7" value="option7">
                                                        <label for="radio7">
                                                            Warning
                                                        </label>
                                                    </div>

                                                </div>
                                                <!-- end col -->

                                                <div class="col-sm-6">
                                                    <div class="radio">
                                                        <input type="radio" name="radio1" id="radio11" value="option1" checked>
                                                        <label for="radio11">
                                                            Default
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-primary">
                                                        <input type="radio" name="radio3" id="radio13" value="option3">
                                                        <label for="radio13">
                                                            Primary
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-success">
                                                        <input type="radio" name="radio4" id="radio14" value="option4" checked>
                                                        <label for="radio14">
                                                            Success
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-info">
                                                        <input type="radio" name="radio5" id="radio15" value="option5" checked>
                                                        <label for="radio15">
                                                            Info
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-danger">
                                                        <input type="radio" name="radio6" id="radio16" value="option6">
                                                        <label for="radio16">
                                                            Danger
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-warning">
                                                        <input type="radio" name="radio7" id="radio17" value="option7" checked>
                                                        <label for="radio17">
                                                            Warning
                                                        </label>
                                                    </div>

                                                </div>
                                                <!-- end col -->

                                            </div>
                                            <!-- end row -->

                                            <p class="text-muted font-13 mt-4">Radios without label text <code>.radio-single</code></p>
                                            <div class="radio radio-single">
                                                <input type="radio" id="singleRadio1" value="option1.1" name="radioSingle1" aria-label="Single radio One">
                                                <label></label>
                                            </div>
                                            <div class="radio radio-success radio-single">
                                                <input type="radio" id="singleRadio2" value="option2.1" name="radioSingle1" checked aria-label="Single radio Two">
                                                <label></label>
                                            </div>

                                            <p class="text-muted font-13 mt-4">Inline radios</p>
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked>
                                                <label for="inlineRadio1"> Inline One </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="option2" name="radioInline" checked>
                                                <label for="inlineRadio2"> Inline Two </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-4">

                                            <h5 class="font-16 mt-3">Disabled</h5>

                                            <p class="text-muted font-13">
                                                Disabled state also supported.
                                            </p>

                                            <div class="radio radio-danger">
                                                <input type="radio" name="radio31" id="radio51" value="option1" checked disabled>
                                                <label for="radio51">
                                                    Next
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="radio41" id="radio61" value="option2" checked disabled>
                                                <label for="radio61">
                                                    One
                                                </label>
                                            </div>
                                            <div class="radio radio-info">
                                                <input type="radio" name="radio61" id="radio81" value="option4" checked disabled>
                                                <label for="radio81">
                                                    One
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>

                        </div>
                    </div>
                    <!-- end row -->

                </div>
                <!-- end container-fluid -->



                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2017 - 2020 &copy; Simple theme by <a href="forms-general.html">Coderthemes</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
            <!-- end content -->

        </div>
        <!-- END content-page -->

    </div>
    <!-- END wrapper -->
    @endsection
