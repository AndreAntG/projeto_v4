
<div class="form-group">
  <label>What client do you want to edit?</label>
  <div class="input-suggestion">
    <input type="text" class="form-control" data-toggle="suggestion">
    <div class="input-suggestion-list">
      <div class="list-group empty">
        <p class="list-group-item text-muted">No results found</p>
      </div>
      <div class="list-group items">
           	<?php
                $contador = 0;
                foreach ($accounts as $account) {
                   
                   echo '<a href="<?php echo base_url(); ?>clients/edit_client/<?php echo $account->id; ?>" class="list-group-item list-group-item-action" tabindex="-1">'. $account->first_name . ' ' . $account->last_name .' - ID: '	. $account->id .'</a>';
                    $contador++;      
                }
            ?>
      </div>
    </div>
  </div>
</div>