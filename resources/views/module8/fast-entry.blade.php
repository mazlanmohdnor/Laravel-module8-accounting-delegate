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
      <h3>Fast Data Entry</h3>
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
               <p class="text-muted font-13 m-b-30">
                  DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
               </p>
               <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="dataTables_length" id="datatable_length">
                           <label>
                              Show 
                              <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                                 <option value="10">10</option>
                                 <option value="25">25</option>
                                 <option value="50">50</option>
                                 <option value="100">100</option>
                              </select>
                              entries
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></label></div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                           <thead>
                              <tr role="row">
                                 <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 197px;">Name</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 313px;">Position</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 145px;">Office</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 74px;">Age</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 139px;">Start date</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 109px;">Salary</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr role="row" class="odd">
                                 <td class="sorting_1">Airi Satou</td>
                                 <td>Accountant</td>
                                 <td>Tokyo</td>
                                 <td>33</td>
                                 <td>2008/11/28</td>
                                 <td>$162,700</td>
                              </tr>
                              <tr role="row" class="even">
                                 <td class="sorting_1">Angelica Ramos</td>
                                 <td>Chief Executive Officer (CEO)</td>
                                 <td>London</td>
                                 <td>47</td>
                                 <td>2009/10/09</td>
                                 <td>$1,200,000</td>
                              </tr>
                              <tr role="row" class="odd">
                                 <td class="sorting_1">Ashton Cox</td>
                                 <td>Junior Technical Author</td>
                                 <td>San Francisco</td>
                                 <td>66</td>
                                 <td>2009/01/12</td>
                                 <td>$86,000</td>
                              </tr>
                              <tr role="row" class="even">
                                 <td class="sorting_1">Bradley Greer</td>
                                 <td>Software Engineer</td>
                                 <td>London</td>
                                 <td>41</td>
                                 <td>2012/10/13</td>
                                 <td>$132,000</td>
                              </tr>
                              <tr role="row" class="odd">
                                 <td class="sorting_1">Brenden Wagner</td>
                                 <td>Software Engineer</td>
                                 <td>San Francisco</td>
                                 <td>28</td>
                                 <td>2011/06/07</td>
                                 <td>$206,850</td>
                              </tr>
                              <tr role="row" class="even">
                                 <td class="sorting_1">Brielle Williamson</td>
                                 <td>Integration Specialist</td>
                                 <td>New York</td>
                                 <td>61</td>
                                 <td>2012/12/02</td>
                                 <td>$372,000</td>
                              </tr>
                              <tr role="row" class="odd">
                                 <td class="sorting_1">Bruno Nash</td>
                                 <td>Software Engineer</td>
                                 <td>London</td>
                                 <td>38</td>
                                 <td>2011/05/03</td>
                                 <td>$163,500</td>
                              </tr>
                              <tr role="row" class="even">
                                 <td class="sorting_1">Caesar Vance</td>
                                 <td>Pre-Sales Support</td>
                                 <td>New York</td>
                                 <td>21</td>
                                 <td>2011/12/12</td>
                                 <td>$106,450</td>
                              </tr>
                              <tr role="row" class="odd">
                                 <td class="sorting_1">Cara Stevens</td>
                                 <td>Sales Assistant</td>
                                 <td>New York</td>
                                 <td>46</td>
                                 <td>2011/12/06</td>
                                 <td>$145,600</td>
                              </tr>
                              <tr role="row" class="even">
                                 <td class="sorting_1">Cedric Kelly</td>
                                 <td>Senior Javascript Developer</td>
                                 <td>Edinburgh</td>
                                 <td>22</td>
                                 <td>2012/03/29</td>
                                 <td>$433,060</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-5">
                        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                     </div>
                     <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                           <ul class="pagination">
                              <li class="paginate_button previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous</a></li>
                              <li class="paginate_button active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a></li>
                              <li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0">2</a></li>
                              <li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0">3</a></li>
                              <li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0">4</a></li>
                              <li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0">5</a></li>
                              <li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0">6</a></li>
                              <li class="paginate_button next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0">Next</a></li>
                           </ul>
                        </div>
                     </div>
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
    {{-- js files start --}}
@include ('layouts.js')
{{-- js files end --}}
@endsection