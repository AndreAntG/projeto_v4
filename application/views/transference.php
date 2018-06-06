<style>

/*form styles*/
#msform {
	width: 400px;
	margin: 50px auto;
	text-align: center;
	position: relative;
}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	
	box-sizing: border-box;
	width: 80%;
	margin: 0 10%;
	
	/*stacking fieldsets above each other*/
	position: absolute;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}
/*buttons*/
#msform .action-button {
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
	color: white;
	text-transform: uppercase;
	font-size: 9px;
	width: 33.33%;
	float: left;
	position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #27AE60;
	color: white;
}

</style>

<section id="inner-headline">
    <div class="container">
    	<div class="row">
        	<div class="span4">
            	<div class="inner-heading">
              		<h2>Transference</h2>
            	</div>
          	</div>
          	<div class="span8">
            	<ul class="breadcrumb">
					<li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Transference</li>
            	</ul>
          	</div>
        </div>
      </div>
</section>
<section id="content">
<!-- multistep form -->
	<form id="msform">
	<!-- progressbar -->
		<ul id="progressbar">
			<li class="active">Introdução de Dados</li>
		</ul>
		<!-- fieldsets -->
		<fieldset>
			<h2 class="fs-title">Introdução de Dados</h2>
			<h3 class="fs-subtitle">Conta Origem / Conta Destino / Dados </h3>
			<input type="text" name="acc_id1" placeholder="AccountID *" />
			<input type="text" name="value" placeholder="Valor *" />
			<input type="text" name="desc" placeholder="Pequena Descrição" />
			<h6 class="fs-subtitle">* Obrigatório </h6>
			<input type="button" onclick="save()" name="next" class="submit action-button" value="Done" />
		</fieldset>
	</form>
</section>	

<!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>


<script>
function save() {
       // ajax adding data to database
    $.ajax({
        url : url = "<?php echo base_url('operations/transfers') ?>",
        type: "POST",
        data: $('#msform').serialize(),
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