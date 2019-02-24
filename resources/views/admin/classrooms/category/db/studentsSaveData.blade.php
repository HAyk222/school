<div class="save-content">
  <form class="form-horizontal" action="<?php print $action_url; ?>" enctype="multipart/form-data"  method="post">
    <div class="col-md-4">
      <div class="upload-image">
        <img src="http://<?php
echo $_SERVER['HTTP_HOST']; ?>/dist/img/noavatarn.png">
      </div>
      <div class="col-md-12">
        <input type="file" name="image" class="file form-control btn btn-info" placeholder="Image Id" value="Upload Image">
      </div>
    </div>
    <div class="col-md-8">
      <div class="form-group">
        <label class="control-label col-sm-2" for="text">Անուն:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="surname">Ազգանուն:</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" id="surname" placeholder="Enter surname" name="surname">
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10" style="text-align: center;">
          <input type="hidden" name="dasaran_id" value="<?php print $id; ?>">
          <button type="submit" class="btn btn-lg btn-primary">Save</button>
        </div>
      </div>
    </div>
  </form>
</div>
<div class="update-content">
  <form class="form-horizontal" action="<?php print $update_url; ?>" enctype="multipart/form-data"  method="post">
    <div class="col-md-4">
      <div class="upload-image">
        <img class="img" src="http://<?php
echo $_SERVER['HTTP_HOST']; ?>/dist/img/noavatarn.png">
      </div>
      <div class="col-md-12">
        <input type="file" name="image_up" id="image" class="file form-control btn btn-info" placeholder="Image Id" value="Upload Image">
        <input type="hidden" class="update_img_input" name="upload_image" value="">
      </div>
    </div>
    <div class="col-md-8">
      <div class="form-group">
        <label class="control-label col-sm-2" for="text">Անուն:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name_update" placeholder="Enter name" name="name_update">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="surname">Ազգանուն:</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" id="surname_update" placeholder="Enter surname" name="surname_update">
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10" style="text-align: center;">
          <input type="hidden" id="update_id" name="update_id" value="">
          <button type="submit" class="btn btn-lg btn-primary" name="">Update</button>
        </div>
      </div>
    </div>
  </form>
</div>
