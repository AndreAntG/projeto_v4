<div class="nav-tabs-responsive">
  <ul class="nav nav-tabs-progress nav-tabs-4 mb-4">
    <li class="nav-item">
      <a href="#account" class="nav-link active" data-toggle="tab">
        <span class="font-lg">1.</span> Customer's Personal Identification
        <small class="d-block text-secondary">
          Please get personal information from the customer. 
        </small>
      </a>
    </li>
    <li class="nav-item">
      <a href="#personal" class="nav-link" data-toggle="tab">
        <span class="font-lg">2.</span> Customer's Address Information
        <small class="d-block text-secondary">
          Please get address information from the customer.
        </small>
      </a>
    </li>
    <li class="nav-item">
      <a href="#payment" class="nav-link" data-toggle="tab">
        <span class="font-lg">3.</span> Customer's Account Information
        <small class="d-block text-secondary">
          Please insert account information to the customer.
        </small>
      </a>
    </li>
    <li class="nav-item">
      <a href="#confirmation" class="nav-link" data-toggle="tab">
        <span class="font-lg">4.</span> Confirm all Data
        <small class="d-block text-secondary">
          Please check if everything is correct.
        </small>
      </a>
    </li>
  </ul>
  <form id="formOrder" class="tab-content">
    <div id="account" class="tab-pane show active">
      <div class="mb-3">
        <a href="#account-collapse" data-toggle="collapse">
          <span class="font-lg">1.</span> Customer's Personal Identification
          <small class="d-block text-secondary">
            Lorem ipsum dolor sit amet, venenatis adipiscing
          </small>
        </a>
      </div>
      <div id="account-collapse" class="collapse show" data-parent="#formOrder">
        <div class="text-secondary mb-3">
          <small>Step 1 of 4</small>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-6">
            <div class="form-group">
              <label>First Name</label>
              <input type="text" name="client_first_name" class="form-control">
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-6">
            <div class="form-group">
              <label>Last Name</label>
              <input type="text" name="client_first_name" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-6">
            <div class="form-group">
              <label>Gender</label>
              <select name="client_gender"class="form-control">
                <option>Masculino</option>
                <option>Femenino</option>
                </select>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-6">
            <div class="form-group">
              <label>Date</label>
              <input type="date" name="client_date" class="form-control">
            </div>
          </div>
        </div>
            <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
            <div class="form-group">
            <label>Phone</label> 
            <input type="text" name="client_phone" class="form-control">
            </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
            <div class="form-group">
             <label> Membership </label>
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
        <div class="d-none d-md-block">
          <hr>
          <div class="d-flex mb-3">
            <button type="button" class="btn btn-success ml-auto" data-form-step="#personal">
              Address Information
              <i class="fa fa-angle-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div id="personal" class="tab-pane">
      <div class="mb-3">
        <a href="#personal-collapse" data-toggle="collapse">
          <span class="font-lg">2.</span> Address Information
          <small class="d-block text-secondary">
            Lorem ipsum dolor sit amet, venenatis adipiscing
          </small>
        </a>
      </div>
      <div id="personal-collapse" class="collapse" data-parent="#formOrder">
        <div class="text-secondary mb-3">
          <small>Step 2 of 4</small>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-6">
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="client_email"class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label>Zip code</label>
                  <input type="text" name="client_zipcode" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label>District</label>
                  <input type="text" name="client_district" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="form-group">
              <label>Home address</label>
              <input type="text" name="client_address" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-none d-md-block">
          <hr>
          <div class="d-flex mb-3">
            <button type="button" class="btn btn-outline-success" data-form-step="#account">
              <i class="fa fa-angle-left"></i>
                Account information
            </button>
            <button type="button" class="btn btn-success ml-auto" data-form-step="#payment">
              Customer's Account Information  
              <i class="fa fa-angle-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div id="payment" class="tab-pane">
      <div class="mb-3">
        <a href="#payment-collapse" data-toggle="collapse">
          <span class="font-lg">3.</span> Customer's Account Information
          <small class="d-block text-secondary">
            Lorem ipsum dolor sit amet, venenatis adipiscing
          </small>
        </a>
      </div>
      <div id="payment-collapse" class="collapse" data-parent="#formOrder">
        <div class="text-secondary mb-3">
          <small>Step 3 of 4</small>
        </div>
        <div class="row">
          <div class="col-12 col-md-8 col-lg-8">
            <div class="form-group">
              <label>Account number</label>
              <input type="text" placeholder="Automatic" class="form-control" readonly>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-4">
            <div class="form-group">
              <label>Account Type</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8">
            <div class="form-group">
              <label>Card holder name</label>
              <select name="account_type" class="form-control">
                <option value="0">Débito</option>
                <option value="1">Crédito</option>
                </select>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="row">
              <div class="col-12 col-md-4 col-lg-6">
                <div class="form-group">
                  <label>Expiry month</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-6">
                <div class="form-group">
                  <label>Expiry year</label>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-none d-md-block">
          <hr>
          <div class="d-flex mb-3">
            <button type="button" class="btn btn-outline-success" data-form-step="#personal">
              <i class="fa fa-angle-left"></i>
                Personal information
            </button>
            <button type="button" class="btn btn-success ml-auto" data-form-step="#confirmation">
              Confirm your details  
              <i class="fa fa-angle-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div id="confirmation" class="tab-pane">
      <div class="mb-3">
        <a href="#confirmation-collapse" data-toggle="collapse">
          <span class="font-lg">4.</span> Confirm your details
          <small class="d-block text-secondary">
            Lorem ipsum dolor sit amet, venenatis adipiscing
          </small>
        </a>
      </div>
      <div id="confirmation-collapse" class="collapse" data-parent="#formOrder">
        <div class="text-secondary mb-3">
          <small>Step 4 of 4</small>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-md-3 col-lg-2">
                <label class="text-secondary">Username</label>
              </div>
              <div class="col-12 col-md-9 col-lg-10">
                <div class="mb-2">john_doe</div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-3 col-lg-2">
                <label class="text-secondary">Email ID</label>
              </div>
              <div class="col-12 col-md-9 col-lg-10">
                <div class="mb-2">john_doe@email.com</div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-3 col-lg-2">
                <label class="text-secondary">Full name</label>
              </div>
              <div class="col-12 col-md-9 col-lg-10">
                <div class="mb-2">John Doe</div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-3 col-lg-2">
                <label class="text-secondary">Gender</label>
              </div>
              <div class="col-12 col-md-9 col-lg-10">
                <div class="mb-2">Male</div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-3 col-lg-2">
                <label class="text-secondary">Date of birth</label>
              </div>
              <div class="col-12 col-md-9 col-lg-10">
                <div class="mb-2">January 10, 1980</div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-3 col-lg-2">
                <label class="text-secondary">Phone number</label>
              </div>
              <div class="col-12 col-md-9 col-lg-10">
                <div class="mb-2">John Doe</div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-3 col-lg-2">
                <label class="text-secondary">Address</label>
              </div>
              <div class="col-12 col-md-9 col-lg-10">
                <div class="mb-2">111 W.App Ave. Suite 123, Sunway, CA</div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-3 col-lg-2">
                <label class="text-secondary">ZIP Code</label>
              </div>
              <div class="col-12 col-md-9 col-lg-10">
                <div class="mb-2">94086</div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-3 col-lg-2">
                <label class="text-secondary">Country</label>
              </div>
              <div class="col-12 col-md-9 col-lg-10">
                <div class="mb-2">USA</div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-3 col-lg-2">
                <label class="text-secondary">Card number</label>
              </div>
              <div class="col-12 col-md-9 col-lg-10">
                <div class="mb-2">**** 2086</div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-3 col-lg-2">
                <label class="text-secondary">Card type</label>
              </div>
              <div class="col-12 col-md-9 col-lg-10">
                <div class="mb-2">VISA</div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="d-block d-md-flex">
          <button type="button" class="btn btn-outline-success d-none d-md-inline mb-3" data-form-step="#payment">
            <i class="fa fa-angle-left"></i>
              Payment information
          </button>
          <div class="d-block d-md-inline ml-auto mb-3">
            <button type="submit" class="btn btn-success btn-block">
              Complete order
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<script>
$('[data-form-step]').on('click', function () {
  var tabId = $(this).attr('data-form-step');
  $('[href="' + tabId + '"]').tab('show');
});

$('#formOrder').on('submit', function(e) {
  $('.nav-tabs-progress').find('.nav-item').last().addClass('complete');
  e.preventDefault();
});
</script>