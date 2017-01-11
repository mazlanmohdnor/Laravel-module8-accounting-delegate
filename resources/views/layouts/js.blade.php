 <!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/select2/dist/js/select2.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="vendors/nprogress/nprogress.js"></script>
<!-- Select2 -->
<!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
<!-- Select2 -->
<script>
$(document).ready(function() {
$("#select2_single").select2();
});
</script>
<!-- /Select2 -->

<script>

     // csrf token
    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    }); 

    var clients = {!! $income !!};
 

 
    $("#jsGrid").jsGrid({

        width: "100%",
        height: "400px",

        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
        filtering: true,

		rowClick: function(item) {
			// alert('asd');
		$('#row-detail').modal('show');
		$('#content-detail').append(item.item.id);
		
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
                    url: "/update"+"/"+id,
                    data: item
                });
            },
            
            deleteItem: function(item) {
                var id = item.id;
                return $.ajax({
                    type: "DELETE",
                    url: "/delete"+"/"+id,
                    data: item
                });
            },

        },


        data: clients,
 
        fields: [
            { name: "account", type: "text", width: 50, validate: "required" },
            { name: "income_category", type: "text", width: 100 },
            { name: "payment_method", type: "text", width: 50 },
            { name: "amount", type: "text", width: 50 },
            { name: "date_created", type: "text", width: 50 },
            { name: "payer", type: "text", width: 100 },
            { name: "description", type: "text", width: 200 },
            { type: "control" }
        ]
    });
</script>
