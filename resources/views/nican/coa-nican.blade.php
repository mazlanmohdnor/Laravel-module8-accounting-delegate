@extends('layouts.layout')
@section('content')
<!-- menu profile quick info -->
@include('layouts.profile-quick-info')
<!-- menu profile quick info -->
<br />
<!-- sidebar menu -->
@include('layouts.sidebar-menu')
<!-- sidebar menu -->
<!-- /menu footer buttons -->
@include('layouts.footer-button')
<!-- /menu footer buttons -->
</div>
</div>
<!-- top navigation -->
@include('layouts.top-navigation')
<!-- top navigation -->

 <!-- page content -->
{{-- data table start --}}
<div class="right_col" role="main">
<div class="nav side-menu">
</div>
<div class="alert alert-success alert-dismissible fade in" role="alert">
   <div class="title_left">
      <h3>Nican COA</h3>
      <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
   </div>
</div>
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h2>Default Example <small>Users</small></h2>
               <ul class="nav navbar-right panel_toolbox">
                  <!-- Large modal -->
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".add_income_modal">Add Income</button>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".add_user_modal">Add Accountant</button>
               </ul>
               <div class="clearfix"></div>
            </div>
            <div class="x_content">
              LETAK KO PUNYA CODING TU DALAM NI
              DALAM NI
              JANGAN TEMPAT LAIN
            </div>
         </div>
      </div>
   </div>
</div>
{{-- data table end --}}

{{-- add_income_modal start --}}
<div class="modal fade add_income_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">Modal title</h4>
         </div>
         <div class="modal-body">
            {{-- form start --}}
            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Account</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <select class="form-control">
                        <option>Choose option</option>
                        <option>Option one</option>
                        <option>Option two</option>
                        <option>Option three</option>
                        <option>Option four</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Income Category</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <select class="form-control">
                        <option>Choose option</option>
                        <option>Option one</option>
                        <option>Option two</option>
                        <option>Option three</option>
                        <option>Option four</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Payment Method</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <select class="form-control">
                        <option>Choose option</option>
                        <option>Option one</option>
                        <option>Option two</option>
                        <option>Option three</option>
                        <option>Option four</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Amount (in dollars)</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input type="text" class="form-control" name="income_amount" placeholder="Amount">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Date</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input type="text" id="first-name" required="required" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Payer</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description
                  </label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <textarea class="form-control" rows="3"></textarea>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                  </label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                  </div>
               </div>
               <div class="ln_solid"></div>
               <div class="form-group">
                  <div class="col-md-offset-9">
                     <button type="submit" class="btn btn-primary">Cancel</button>
                     <button type="submit" class="btn btn-success">Submit</button>
                  </div>
               </div>
            </form>
            {{-- form end --}}
         </div>
      </div>
   </div>
</div>
{{-- add_income_modal end --}}

{{-- add_user_modal start --}}
<div class="modal fade add_user_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">Invite accountant</h4>
         </div>
         <div class="modal-body">
            {{-- form start --}}
            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">First Name</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input type="text" class="form-control" name="first-name">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Last Name</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input type="text" name="last-name" required="required" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input class="form-control col-md-7 col-xs-12" type="text" name="email">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title/Designation</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                      <input class="form-control col-md-7 col-xs-12" type="text" name="title">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Company</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input name="company" class="date-picker form-control col-md-7 col-xs-12"type="text">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Role</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input name="role" class="date-picker form-control col-md-7 col-xs-12"type="text">
                  </div>
               </div>   
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Worksroom</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input name="worksroom" class="date-picker form-control col-md-7 col-xs-12"type="text">
                  </div>
               </div>
               <div class="ln_solid"></div>
               <div class="form-group">
                  <div class="col-md-offset-9">
                     <button type="submit" class="btn btn-primary">Cancel</button>
                     <button type="submit" class="btn btn-success">Submit</button>
                  </div>
               </div>
            </form>
            {{-- form end --}}
         </div>
      </div>
   </div>
</div>
{{-- add_user_modal end --}}
<!-- footer content -->
    @include('layouts.footer-content')
    <!-- footer content -->
@endsection