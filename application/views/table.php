    
<div class="main-panel" style="margin-top: 50px">
    <p></p>
    <div class="col-12">
        <table class="table table-bordered table-striped" id='clients_table'>
            <thead>
                <tr>
                    <th>Nª Cliente</th>
                    <th>Primeiro Nome</th>
                    <th>Ultimo Nome</th>
                    <th>Tipo</th>
                    <th>Estados</th>
                    <th>Acções</th>
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
                        if ($account->type == 0) {
                            echo '<td> Débito </td>';   
                        } else {
                            echo '<td> Crédito </td>'; 
                        }
                        echo '<td align="left">';

                        if ($account->status == 1) {
                            echo '<h5><label class="badge badge-success">Ativo</label></h5>';
                        } else {
                            echo '<label class="badge badge-warning">Inativo</label>';

                        }
                        ?>
                    <td class="text-left"> 
                        
                    <a href="<?php echo base_url(); ?>clients/edit_client/<?php echo $account->id; ?>" class="btn btn-sm btn-success"><i class="mdi mdi-message-text"></i>Editar</a>
                    <button type="button" onclick="consult_operations(<?php echo $account->id; ?>)"   class="btn btn-sm btn-info"><i class="mdi mdi-cloud-download"></i>Consultar</button>
                    <button type="button" onclick="delete_client(<?php echo $account->id; ?>)" class="btn btn-sm btn-danger"><i class="mdi mdi-delete"></i>Apagar</button>
                    <?php
                    echo '</td>';
                    echo '</tr>';

                    $contador++;
                }
                ?>
            </tbody>
        </table>

        <center><a href="<?php echo base_url(); ?>clients/new_client" class="btn btn-outline-primary">Adicionar Novo CLiente</a></center>

    </div>
</div>

<script>
  
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
                title: "Tem a certeza?",
                text: "Ao apagar um cliente todos os dados serão perdidos!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Sim, apagar!",
                cancelButtonText: "Não, cancelar!",
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
                                swal("Apagado!", "Espere 5 segundos para recarregar ...", "success");
                                setInterval(function () {  window.location.reload(); }, 5000);
                                
                            },  
                            error: function (jqXHR, textStatus, errorThrown) {
                                alert('Error deleting data');
                            }
                        });
                    } else {
                        swal("Cancelado", "error");
                    }
                });
                
    }
</script>

              <!-- Bootstrap modal -->
<div id="modal_form" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="classInfo" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="classModalLabel"> Last Operations </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> × </button>
            </div>
            <div class="modal-body">1
                <table id="classTable" class="table table-bordered">
                    <thead>
                    </thead>
                    <tbody>
                        <tr>
                        <td>ID</td>
                        <td>Date</td>
                        <td>From</td>
                        <td>To</td>
                        <td>Value €</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"> Close </button>
            </div>
        </div>
    </div>
</div>
