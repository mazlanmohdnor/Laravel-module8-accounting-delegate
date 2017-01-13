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
      <h3>transfer</h3>
      <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
   </div>
</div>
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h2>Company Transfer<small>Users</small></h2>
               <ul class="nav navbar-right panel_toolbox">
                  <!-- Large modal -->
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".add_transfer_modal">Add transfers</button>
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



{{-- add_transfer_modal start --}}
<div class="modal fade add_transfer_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">Insert transfers</h4>
         </div>
         <div class="modal-body">
            {{-- form start --}}
            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" method="post" action="{{ url('transfer/store') }}">
            {{ csrf_field() }}
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Insert By</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input type="text" class="form-control" name="accountant_id" value="1">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Amount</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input type="text" class="form-control" name="amount" placeholder="Amount">
                  </div>
               </div>
               <div class="form-group">
                  {{-- account akan dapat list of account (group shah) --}}
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Account</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <select class="form-control" name="account">
                      @foreach($accounts as $account)
                        <option value="{{ $account->account_name }}">{{ $account->account_name }}</option>
                      @endforeach
                      </select>
                  </div>
               </div>
               <div class="form-group">
                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">To Account</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input class="form-control col-md-7 col-xs-12" type="text" name="to_account">
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
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Date</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input type="text" class="form-control" name="date_created">
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
{{-- add_transfer_modal end --}}

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
            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" method="post" action="{{ url('/invite') }}">
               {{ csrf_field() }}
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">First Name</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input type="text" class="form-control" name="firstname">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Last Name</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input type="text" name="lastname" required="required" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input class="form-control col-md-7 col-xs-12" type="text" name="email">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Role</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                       <select class="form-control select2_single"  tabindex="-1" name="role">
                            <option value="admin">Admin</option>
                            <option value="accountant">Accountant</option>
                            <option value="auditor">Auditor</option>
                     </select>
                  </div>
               </div>   
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Worksroom</label>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                     <input name="worksroom" class="form-control col-md-7 col-xs-12"type="text">
                  </div>
               </div>
            <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12">Invited by</label>
               <div class="col-md-8 col-sm-8 col-xs-12">
                  <input class="form-control col-md-7 col-xs-12"type="text" name="invited_by" value="mazlan">
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





<!-- footer content -->
@include('layouts.footer-content')
<!-- footer content -->
{{-- js files start --}}
@include ('layouts.script')

<script>

     // csrf token
    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    }); 
    var clients = {!! $transfers !!};
 

 
    $("#jsGrid").jsGrid({

        width: "100%",
        height: "400px",

        // inserting: true,
        editing: true,
        sorting: true,
        paging: true,
        filtering: true,
        pageSize: 10,
        autoload: true,

      rowClick: function(item) {
         console.log(item.item);
      $('#row-detail').modal('show');
      $('#content-detail').html("Item Number: "+item.item.id+"<br>"+"Income Category: "+item.item.income_category+"");
      
      },

        controller: {


          insertItem: function(item) {
                return $.ajax({
                    type: "POST",
                    url: "/insert",
                    data: item,
                    success: function (data) {
                        alert("Added Successfully");
                    },
                    error: function(data){
                        alert("Error");
                    }
                });
            },
            
            updateItem: function(item) {
                var id = item.id;
                return $.ajax({
                    type: "PUT",
                    url: "/transfer/"+id,
                    data: item
                });
            },
            
            deleteItem: function(item) {
                var id = item.id;
                return $.ajax({
                    type: "DELETE",
                    url: "/transfer/"+id,
                    data: item
                });
            },

        },


        data: clients,
        
        fields: [
            { name: "account", type: "text", width: 50},
            // { name: "accountant_id", type: "text", width: 60 },
            { name: "transfer_category", type: "text", width: 100 },
            { name: "payment_method", type: "text", width: 50 },
            { name: "amount", type: "text", width: 50 },
            { name: "date_created", type: "text", width: 50 },
            { name: "payee", type: "text", width: 100 },
            { name: "description", type: "text", width: 200 },
            { name: "verified", width: 50 , readOnly: false  },
            { type: "control"}
        ]
    });
</script>

@endsection