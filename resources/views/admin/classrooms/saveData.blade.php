<div class="save-content">
  <form class="form-horizontal" action="<?php print $action_url; ?>" enctype="multipart/form-data"  method="post">
    <div class="col-md-6">
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Դասարան:</label>
        <div class="col-sm-10">          
          <select class="form-control" id="name" name="name">
            <option value="1">1-ին դասարան</option>
            <option value="2">2-րդ դասարան</option>
            <option value="3">3-րդ դասարան</option>
            <option value="4">4-րդ դասարան</option>
            <option value="5">5-րդ դասարան</option>
            <option value="6">6-րդ դասարան</option>
            <option value="7">7-րդ դասարան</option>
            <option value="8">8-րդ դասարան</option>
            <option value="9">9-րդ դասարան</option>
            <option value="10">10-րդ դասարան</option>
            <option value="11">11-րդ դասարան</option>
            <option value="12">12-րդ դասարան</option>
          </select>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-12" style="text-align: center;">
        <button type="submit" class="btn btn-lg btn-primary">Save</button>
      </div>
    </div>
  </form>
</div>
<div class="update-content">
  <form class="form-horizontal" action="<?php print $update_url; ?>" enctype="multipart/form-data"  method="post">
    <div class="col-md-6">
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Դասարան:</label>
        <div class="col-sm-10">          
          <select class="form-control" id="name_update" name="name_update">
            <option value="1">1-ին դասարան</option>
            <option value="2">2-րդ դասարան</option>
            <option value="3">3-րդ դասարան</option>
            <option value="4">4-րդ դասարան</option>
            <option value="5">5-րդ դասարան</option>
            <option value="6">6-րդ դասարան</option>
            <option value="7">7-րդ դասարան</option>
            <option value="8">8-րդ դասարան</option>
            <option value="9">9-րդ դասարան</option>
            <option value="10">10-րդ դասարան</option>
            <option value="11">11-րդ դասարան</option>
            <option value="12">12-րդ դասարան</option>
          </select>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-12" style="text-align: center;">
        <input type="hidden" name="update_id" id="update_id" value="">
        <button type="submit" class="btn btn-lg btn-primary">Update</button>
      </div>
    </div>
  </form>
</div>