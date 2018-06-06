      <div class="card" style="background-color='blue'">
            <div class="card-body">
                <div class="jsError"></div>                  
                <form class="form-sample" id="form">
                    <h4 class="card-description">
                      Informação Pessoal
                    </h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nome</label>
                                <div class="col-sm-9">
                                    <input type="text"  value="" name="client_first_name" class="form-control"  required/>
                                    

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Apelido</label>
                                <div class="col-sm-9">
                                    <input type="text"  value="" name="client_last_name" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Sexo</label>
                                <div class="col-sm-9">
                                    <select name="client_gender"class="form-control">
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Data Nascimento</label>
                                <div class="col-sm-7">
                                    <input type="date"  value="" name="client_date" class="form-control">
                                </div>
                            </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Telefone</label>
                                <div class="col-sm-9">
                                <input type="text"  value="" name="client_phone" maxlength="9" class="form-control">
                                </div>
                            </div>
                        </div>
                       <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="client_email"class="form-control">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-description">
                      Informação de Residência
                    </h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Morada</label>
                                    <div class="col-sm-9">
                                        <input type="text"  value="" name="client_address" class="form-control">
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Código Postal</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="client_zipcode"class="form-control">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Cidade</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="client_city" class="form-control">
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Distrito</label>
                                    <div class="col-sm-9">
                                        <input type="text"  name ="client_district"class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">País</label>
                                    <div class="col-sm-9">
                                        <select name="client_country" class="form-control">
                                            <option>Portugal</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-description">
                    Informação de Conta
                    </h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Número de Conta</label>
                                    <div class="col-sm-9">
                                    <input name="number" placeholder="Empty" value="" class="form-control" type="text" readonly>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Data de Abertura</label>
                                <div class="col-sm-9">
                                    <input type="text"  value="Empty" name="account_date" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Depósito Incial</label>
                                    <div class="col-sm-9">
                                    <input name="account_balance" placeholder="Balance" class="form-control" value="€" type="text">
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tipo de Conta</label>
                                <div class="col-sm-9">
                                    <select name="account_type" class="form-control">
                                    <option value="0">Débito</option>
                                    <option value="1">Crédito</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tipo de Cliente</label>
                                    <div class="col-sm-2">
                                        <div class="form-radio">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="client_type" value="0" id="membershipRadios1" checked="">
                                                Familiar
                                                <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                <div class="col-sm-5">
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input"  name="client_type" value="1" id="membershipRadios2">
                                            Empresarial
                                            <i class="input-helper"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
                <button type="button" onclick="save()" class="btn btn-success"><i class="mdi mdi-upload"></i>Criar</button>
                <button type="button" onclick="photo()" class="btn btn-success"><i class="mdi mdi-upload"></i>Client Photo</button>
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