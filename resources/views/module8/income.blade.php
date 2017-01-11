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
      <h3>Income</h3>
      <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
   </div>
</div>
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h2>Company Income<small>Users</small></h2>
               <ul class="nav navbar-right panel_toolbox">
                  <!-- Large modal -->
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".add_income_modal">Add Income</button>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".add_user_modal">Invite Accountant</button>
               </ul>
               <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <p class="text-muted font-13 m-b-30">
                  DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
               </p>
				<div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
					<div class="row">
						{{-- data table --}}
						<div id="jsGrid"></div>
						{{-- data table end --}}
					</div>
				</div>
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
            <h4 class="modal-title" id="gridSystemModalLabel">Insert Income</h4>
         </div>
         <div class="modal-body">
            {{-- form start --}}
            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" method="post" action="{{ route('module8.store') }}">
            {{ csrf_field() }}
               <div class="form-group">
               {{-- account akan dapat list of account (group shah) --}}
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Account</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
					<select class="form-control" name="account">
						<option value="AK">Alaska</option>
						<option value="HI">Hawaii</option>
						<option value="CA">California</option>
						<option value="NV">Nevada</option>
						<option value="OR">Oregon</option>
						<option value="WA">Washington</option>
					</select>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Income Category</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
					<select class="form-control" name="income_category">
						<option value="Webiste design">Webiste design</option>
						<option value="Domain Hosting">Domain Hosting</option>
						<option value="Mobile Application">Mobile Application</option>
						<option value="Computer Hardware">Computer Hardware</option>
					</select>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Payment Method</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <select class="form-control" id="select2_single" tabindex="-2" name="payment_method">
	                        <option></option>
                            <option value="cash">Cash</option>
                            <option value="cheque">Cheque</option>
                            <option value="paypal">Paypal</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Amount</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input type="text" class="form-control" name="amount" placeholder="Amount">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Date</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input type="text" class="form-control" name="date_created">
                  </div>
               </div>
               <div class="form-group">
                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Payer</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input class="form-control col-md-7 col-xs-12" type="text" name="payer">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description
                  </label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <textarea class="form-control" rows="3" name="description"></textarea>
                  </div>
               </div>
 
               <div class="ln_solid"></div>
               <div class="form-group">
                  <div class="col-md-offset-9">
                     <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
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
                       <select class="form-control select2_single"  tabindex="-1">
	                        
                            <option value="admin">Admin</option>
                            <option value="accountant">Accountant</option>
                            <option value="auditor">Auditor</option>
                     </select>
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
                     <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
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

{{-- add_user_modal start --}}
<div class="modal fade" id="row-detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">Invite accountant</h4>
         </div>
         <div class="modal-body">
            {{-- form start --}}
          <h2 id="content-detail"></h2>
            {{-- form end --}}
         </div>
      </div>
   </div>
</div>
{{-- add_user_modal end --}}

<!-- footer content -->
@include('layouts.footer-content')
<!-- footer content -->
{{-- js files start --}}
@include ('layouts.js')
{{-- js files end --}}
@endsection