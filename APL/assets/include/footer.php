

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?= base_url();?>assets/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?= base_url();?>assets/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url();?>assets/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url();?>assets/datatables-responsive/dataTables.responsive.js"></script>
    
    <!-- Morris Charts JavaScript -->
    <script src="<?= base_url();?>assets/raphael/raphael.min.js"></script>
    <script src="<?= base_url();?>assets/morrisjs/morris.min.js"></script>
    <script src="<?= base_url();?>assets/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url();?>assets/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
			 "paging":   false,
        });
    });
    </script>
    <script>
        $(document).ready(function(){
            $('.delete').click(function(){
                var url = $(this).data('url');
                if (confirm('Are you sure you want to delete this entry?')) {
                    window.location = url
                }
            });
        });
</script>
<script>
$(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });
    
});
</script>
</body>
</html>
