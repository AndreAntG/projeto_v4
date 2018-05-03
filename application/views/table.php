
    <div class="main-panel" style="margin-top: 50px">
<p> </p>
<div class="col-12">
<table class="table table-bordered table-striped" id='clients_table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Nº</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                    $contador = 0;
                    foreach ($accounts as $account) {
                        if ($account->status == 1) {
                        //Se for igual a 1 esta ATIVO
                            echo '<tr class="table-success">';
                        } else {
                            echo '<tr>';
                        }
                        echo '<td>' . $account->id . '</td>';
                        echo '<td>' . $account->first_name . '</td>';
                        echo '<td>' . $account->last_name . '</td>';
                        echo '<td>' . $account->phone . '</td>';
                        echo '<td align="left">';

                        if ($account->status == 1) {
                            echo '<label class="badge badge-success">Ativo</label>';
                        } else {
                            echo '<label class="badge badge-warning">Inativo</label>';

                        }
                        ?>
                    <td class="text-left"> 
                        
                    <a href="<?php echo base_url(); ?>clients/edit_client/<?php echo $account->id; ?>" class="btn btn-warning"><i class="mdi mdi-message-text"></i>Edit</a>
                    <button type="button" onclick="delete_client(<?php echo $account->id; ?>)" class="btn btn-info"><i class="mdi mdi-delete"></i>Delete</button>
                    <button type="button" onclick="consult_operations(<?php echo $account->id; ?>)"   class="btn btn-success"><i class="mdi mdi-cloud-download"></i>Info</button>
                    <?php
                    echo '</td>';
                    echo '</tr>';

                    $contador++;
                }
                ?>
                </tbody>
            </table>

       <center>  <a href="<?php echo base_url(); ?>clients/new_client" class="btn btn-light btn-rounded btn-fw"><i class="mdi mdi-upload"></i>Add New Client</a></center>

          
</div>
</div>



<script type="text/javascript">
  
        $(document).ready( function () {
            $('#clients_table').DataTable();
        });
    var save_method; //for save method string
    var table;

    function consult_operations(id) {
        
 
        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo base_url('clients/ajax_edit') ?>/" + id,
            type: "POST",
            success: function(data) {
                var obj = JSON.parse(data);
                $('#modal_form').modal('show');
            obj.forEach (function(element) {

                 
                $('#operations tr:last').after('<tr><td>' + element.operation_id +'</td></tr>');

            console.log(element.operation_id);
            }); 
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }
  

    function delete_client(id) {
         swal({
                title: "Are you sure?",
                text: "You will not be able to recover this client from DB!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                closeOnConfirm: false,
                closeOnCancel: false,
                showLoaderOnConfirm: true
                },
                function(isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            async: false,
                            url : "<?php echo site_url('clients/clients_delete') ?>" + "/" + id,
                            type: "POST",
                            dataType: "JSON",
                            success: function(data) {
                                swal("Deleted!", "Wait 5 seconds to reload ...", "success");
                                setInterval(function () {  window.location.reload(); }, 5000);
                                
                            },  
                            error: function (jqXHR, textStatus, errorThrown) {
                                alert('Error deleting data');
                            }
                        });
                    } else {
                        swal("Cancelled", "Your client is not deleted :)", "error");
                    }
                });
                
    }
</script>

  
             
              <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Client Form</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="client_id"/>
          <table name="operations">
          <thead>
          </thead>
          <tbody class="table">
              
          </tbody>
      </table>
    </div>
        </form>
          </div>
          <div class="modal-footer">
          <label class="">For more information go to Edit Client</label>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->

</div> <!-- Content div -->
