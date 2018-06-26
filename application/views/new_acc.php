<div class="form-style-5">

<div class="jsError"></div>
  <form id="form">
    <fieldset>
      <legend><span class="number">1</span> Escolher Cliente</legend>
      
        <label>Cliente:</label>
        <select name="client_id">
            <?php 
            $contador = 0;
            foreach ($profiles as $profile) { 
                echo  '<option value="'. $profile->users_id .'">'. $profile->first_name . ' ' . $profile->last_name . ' -> ' . $profile->id . '</option>';
                $contador++;
            }?>
        </select>
    
    </fieldset>
    <fieldset>
    <legend><span class="number">2</span> Informação de Conta</legend>

      <label>Depóstio Inicial</label>
      <input type="text" name="account_balance" placeholder="Depósito *" required>

      <label>Tipo de Conta :</label>
      <select name="account_type">
        <option value="0">Débito</option>
        <option value="1">Crédito</option>
      </select> 
    </fieldset>
      
      <button onclick="save()" type="button"  value="Apply" />Registar</button>
  </form>
</div>

<script>

function save() {
       // ajax adding data to database
    $.ajax({
        url : "<?php echo base_url('clients/new_acc') ?>",
        type: "POST",
        data: $('#form').serialize(),
        success: function(data) { 
            var obj = JSON.parse(data); 
            
                    
            console.log(obj);
                
            if (obj.status == "ok") {    
                swal(
                    'Done!',
                    'Nova conta criada!',
                    'success'
                );
                $('#form')[0].reset();
            } else {
                $('.jsError').html(obj.message);
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR.responseText);
            alert('Error adding / update data');
        }
    });
}
</script>