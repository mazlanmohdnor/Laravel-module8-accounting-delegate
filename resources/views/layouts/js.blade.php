
<!-- Select2 -->

<!-- /Select2 -->

<script>

     // csrf token
    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    }); 
    var clients = {!! $expenses !!};
 

 
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
                    url: "/expense/"+id,
                    data: item
                });
            },
            
            deleteItem: function(item) {
                var id = item.id;
                return $.ajax({
                    type: "DELETE",
                    url: "/expense/"+id,
                    data: item
                });
            },

        },


        data: clients,
        
        fields: [
            { name: "account", type: "text", width: 50},
            // { name: "accountant_id", type: "text", width: 60 },
            { name: "expense_category", type: "text", width: 100 },
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
