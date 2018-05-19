      <div class="card">
            <div class="card-body">
                <h2 class="card-title">New Client</h2>
                <div class="jsError"></div>                  
                <form class="form-sample" id="form">
                    <h4 class="card-description">
                      Personal info
                    </h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Primeiro Nome</label>
                                <div class="col-sm-9">
                                    <input type="text"  value="" name="client_first_name" class="form-control"  required/>
                                    

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ultimo Nome</label>
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
                                <label class="col-sm-3 col-form-label">Date de Nascimento</label>
                                <div class="col-sm-9">
                                    <input type="date"  value="" name="client_date" class="form-control">
                                </div>
                            </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Phone</label>
                                <div class="col-sm-9">
                                <input type="text"  value="" name="client_phone" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Membership</label>
                                    <div class="col-sm-4">
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
                    <h4 class="card-description">
                      Address Information
                    </h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text"  value="" name="client_address" class="form-control">
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">District</label>
                                    <div class="col-sm-9">
                                        <input type="text"  name ="client_district"class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Postcode</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="client_zipcode"class="form-control">
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="client_city" class="form-control">
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Country</label>
                                    <div class="col-sm-9">
                                        <select name="client_country" class="form-control">
                                            <option>Portugal</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-description">
                    Account Information
                    </h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Account Number</label>
                                    <div class="col-sm-9">
                                    <input name="number" placeholder="Empty" value="" class="form-control" type="text" readonly>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date of Opening</label>
                                <div class="col-sm-9">
                                    <input type="text"  value="Empty" name="account_date" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Inicial Balance</label>
                                    <div class="col-sm-9">
                                    <input name="account_balance" placeholder="Balance" class="form-control" value="€" type="text">
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Account Type</label>
                                <div class="col-sm-9">
                                    <select name="account_type" class="form-control">
                                    <option value="0">Débito</option>
                                    <option value="1">Crédito</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <button type="button" onclick="save()" class="btn btn-success"><i class="mdi mdi-upload"></i>Create</button>
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