
<div class="form-style-5">

<div class="jsError"></div>
  <form id="form">
    <fieldset>
        <legend><span class="number">1</span> Informação Pessoal</legend>
      
        <label>Primeiro Nome</label>
        <input type="text" placeholder="Nome *" value="<?= $account->first_name ?>" name="client_first_name"  required>
        
        <label>Ultimo Nome</label>
        <input type="text" name="client_last_name"  value="<?= $account->last_name ?>" placeholder="Apelido *" required>
        
        <label>Data Nascimento</label>
        <input type="date" name="client_date" value="<?= $account->birthday ?>" placeholder="Data Nascimento *" required>
        
        <label>Sexo :</label>
        <select name="client_gender">
            <option <?=($account->gender == "Masculino")? 'selected': '' ?>>Masculino</option>;
            <option <?=($account->gender == "Femenino")? 'selected': '' ?>>Femenino</option>
        </select>

        <label>Nº Telefone</label>
        <input type="text" name="client_phone" value="<?= $account->phone ?>" placeholder="Número *"  maxlength="9" required>

        <label>Email</label>
        <input type="email" name="client_email" value="<?= $account->email?>" placeholder="Email *" required>
        
    </fieldset>
    <fieldset>
      <legend><span class="number">2</span> Informação de Residência</legend>
      
      <label>Morada</label>
      <input type="text" name="client_address" value="<?= $account->address ?>" placeholder="Morada *"  required>

      <label>Código Postal</label>
      <input type="text" name="client_zipcode" value="<?= $account->zipcode ?>" placeholder="Código Postal *" required>
    
      <label>Cidade</label>
      <input type="text" name="client_city" value="<?= $account->city ?>" placeholder="Cidade *"  required>

      <label>Distrito</label>
      <input type="text" name="client_district" value="<?= $account->district ?>" placeholder="Distrito *" required>

        <label>País :</label>
      <select name="client_country">
        <option>Portugal</option>
        <option disabled>Espanha "Indisponivel"</option>
        <option disabled>França  "Indisponivel"</option>
      </select> 
    
    </fieldset>
      <button onclick="save()" type="button"  value="Apply" />Atualizar</button>
  </form>
</div>

<script>

function save() {
       // ajax adding data to database
    $.ajax({
        url : "<?php echo base_url('clients/clients_add') ?>",
        type: "POST",
        data: $('#form').serialize(),
        success: function(data) { 
            var obj = JSON.parse(data); 
            
                    
            console.log(obj);
                
            if (obj.status == "ok") {    
                swal(
                    'Done!',
                    'New client has been save!',
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

function photo(){
    
    swal({
  title: "Sweet!",
  text: "Here's a custom image.",
  imageUrl: 'thumbs-up.jpg'
});

}

</script>