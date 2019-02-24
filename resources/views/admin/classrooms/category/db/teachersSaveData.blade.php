<div class="save-content">
  <form class="form-horizontal" action="<?php print $action_url; ?>" enctype="multipart/form-data"  method="post">
    <div class="col-md-12" style="margin-bottom: 30px;">
      <label class="control-label col-sm-2" for="name">Ուսուցիչներ:</label>
      <div class="col-sm-10"> 
        <select class="form-control" id="name" name="teacher">
          <?php foreach($data as $key=>$k) { 
          $ararka_id = $dasatu_ararka[$key]->ararka_id;
          $ararka_name = DB::select('select name from ararka where ID = ?', [$ararka_id]);
          ?>
            <option value="<?php print $k->ID; ?>">
              <?php print $k->name; ?> <?php print $k->surname; ?> (<?php print $ararka_name[0]->name; ?>) 
            </option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-12" style="text-align: center;">
        <input type="hidden" name="dasaran_id" value="<?php print $id; ?>">
        <button type="submit" class="btn btn-lg btn-primary">Save</button>
      </div>
    </div>
  </form>
</div>
<div class="update-content">
    <form class="form-horizontal" action="<?php print $update_url; ?>" enctype="multipart/form-data"  method="post">
    <div class="col-md-12" style="margin-bottom: 30px;">
      <label class="control-label col-sm-2" for="name">Ուսուցիչներ:</label>
      <div class="col-sm-10"> 
        <select class="form-control" id="teacher_update" name="teacher_update">
          <?php foreach($data as $key=>$k) { 
          $ararka_id = $dasatu_ararka[$key]->ararka_id;
          $ararka_name = DB::select('select name from ararka where ID = ?', [$ararka_id]);
          ?>
            <option value="<?php print $k->ID; ?>">
              <?php print $k->name; ?> <?php print $k->surname; ?> (<?php print $ararka_name[0]->name; ?>) 
            </option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-12" style="text-align: center;">
        <input type="hidden" id="update_id" name="update_id" value="">
        <button type="submit" class="btn btn-lg btn-primary">Update</button>
      </div>
    </div>
  </form>
</div>
