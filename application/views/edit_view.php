
<div class="main-panel" style="margin-top: 30px">
    <div class="col-13 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Client Information</h2>
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
                                    <input type="text"  value="<?= $account->first_name ?>" name="client_first_name" class="form-control"  required/>
                                    

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ultimo Nome</label>
                                <div class="col-sm-9">
                                    <input type="text"  value="<?= $account->last_name ?>" name="client_last_name" class="form-control" required>
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
                                    <option <?=($account->gender == "Femenino")? 'selected': '' ?>>Femenino</option>
                                    <option <?=($account->gender == "Masculino")? 'selected': '' ?>>Masculino</option>;
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date de Nascimento</label>
                                <div class="col-sm-9">
                                    <input type="date"  value="<?= $account->birthday ?>" name="client_date" class="form-control">
                                </div>
                            </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Phone</label>
                                <div class="col-sm-9">
                                <input type="text"  value="<?= $account->phone ?>" name="client_phone" maxlenght="9"class="form-control">

                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Membership</label>
                                    <div class="col-sm-9">
                                    <select name="client_type"class="form-control">
                                    <option <?=($account->client_type == "0")? 'selected': '' ?> >Familiar</option>
                                    <option <?=($account->client_type == "1")? 'selected': '' ?> >Empresarial</option>
                                    </select>
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
                                        <input type="text"  value="<?= $account->address ?>" name="client_address" class="form-control">
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">District</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="<?= $account->district ?>" name ="client_district"class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Postcode</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="<?= $account->zipcode ?>" name="client_zipcode"class="form-control">
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" value="<?= $account->email?>" name="client_email"class="form-control">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="<?= $account->city ?>" name="client_city" class="form-control">
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
                                    <input name="number" placeholder="Empty" value="<?= $account->users_id ?>" class="form-control" type="text" readonly>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date of Opening</label>
                                <div class="col-sm-9">
                                    <input type="text"  value="<?= $account->date ?>" name="account_date" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Current Balance</label>
                                    <div class="col-sm-9">
                                    <input name="account_balance" placeholder="Balance" class="form-control" value="<?= $account->balance ?>€" type="text" readonly>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Account Type</label>
                                <div class="col-sm-9">
                                    <select name="account_type" class="form-control">
                                    <option <?=($account->type == "0")? 'selected': '' ?> >Débito</option>
                                    <option <?=($account->type == "1")? 'selected': '' ?> >Crédito</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <button type="button" onclick="save()" class="btn btn-success"><i class="mdi mdi-loop"></i>Update</button>
               
            </div>
        </div>
    </div>
</div>

<script>
function save() {
       // ajax adding data to database
    $.ajax({
        url : url = "<?php echo base_url('clients/clients_update') ?>",
        type: "POST",
        data: $('#form').serialize(),
        success: function(data) { 
            var obj = JSON.parse(data); 
            
                    
            console.log(obj);
                
            if (obj.status == "ok") {    
                swal(
                    'Done!',
                    'The client has been updated!',
                    'success'
                );
                
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