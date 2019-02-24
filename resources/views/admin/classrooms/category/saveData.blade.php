<div class="save-content">
  <form class="form-horizontal" action="<?php print $action_url; ?>" enctype="multipart/form-data"  method="post">
    <div class="col-md-12" style="margin-bottom: 30px;">
      <label class="control-label col-sm-2" for="name">Կատեգորիա:</label>
      <div class="col-sm-10">          
        <select class="form-control" id="name" name="category">
          <option value="Ա">Ա</option>
          <option value="Բ">Բ</option>
          <option value="Գ">Գ</option>
          <option value="Դ">Դ</option>
          <option value="Ե">Ե</option>
          <option value="Զ">Զ</option>
          <option value="Է">Է</option>
          <option value="Ը">Ը</option>
        </select>
      </div>
    </div>
    <div class="col-md-6" style="margin-bottom: 20px;">
      <div class="upload-image">
        <img src="http://<?php
echo $_SERVER['HTTP_HOST']; ?>/dist/img/noavatarn.png">
      </div>
      <div class="col-md-12">
        <input type="file" name="image_dasxek" class="file form-control btn btn-info" placeholder="Image Id" value="Upload Image">
      </div>
      <div class="col-md-4">
        <label class="control-label col-sm-2" for="name">Դասղեկ:</label>
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control" id="name_dasxek" placeholder="Enter name" name="name_dasxek">
      </div>
    </div>
    <div class="col-md-6" style="margin-bottom: 20px;">
      <div class="col-md-4">
        <label class="control-label col-sm-2" for="name">Ծնողկոմիտե:</label>
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control" id="name_cnox" placeholder="Enter name" name="name_cnox">
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">        
        <div class="" style="text-align: center;">
          <input type="hidden" name="classroom_number" value="<?php print $number; ?>">
          <button type="submit" class="update btn btn-lg btn-primary" name="">Save</button>
        </div>
      </div>
    </div>
  </form>
</div>
<div class="update-content">
  <form class="form-horizontal" action="<?php print $update_url; ?>" enctype="multipart/form-data"  method="post">
    <div class="col-md-12" style="margin-bottom: 30px;">
      <label class="control-label col-sm-2" for="name">Կատեգորիա:</label>
      <div class="col-sm-10">          
        <select class="form-control" id="category_update" name="category_update">
          <option value="Ա">Ա</option>
          <option value="Բ">Բ</option>
          <option value="Գ">Գ</option>
          <option value="Դ">Դ</option>
          <option value="Ե">Ե</option>
          <option value="Զ">Զ</option>
          <option value="Է">Է</option>
          <option value="Ը">Ը</option>
        </select>
      </div>
    </div>
    <div class="col-md-6" style="margin-bottom: 20px;">
      <div class="upload-image">
        <img id="update_image" src="http://<?php
echo $_SERVER['HTTP_HOST']; ?>/dist/img/noavatarn.png">
      </div>
      <div class="col-md-12">
        <input type="file" id="image_dasxek_update" name="image_dasxek_update" class="file form-control btn btn-info" placeholder="Image Id" value="Upload Image">
        <input type="hidden" class="update_img_input" name="upload_image" value="">
      </div>
      <div class="col-md-4">
        <label class="control-label col-sm-2" for="name">Դասղեկ:</label>
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control" id="name_dasxek_update" placeholder="Enter name" name="name_dasxek_update">
      </div>
    </div>
    <div class="col-md-6" style="margin-bottom: 20px;">
      <div class="col-md-4">
        <label class="control-label col-sm-2" for="name">Ծնողկոմիտե:</label>
      </div>
      <div class="col-md-8">
        <input type="text" class="form-control" id="name_cnox_update" placeholder="Enter name" name="name_cnox_update">
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">        
        <div class="" style="text-align: center;">
          <input type="hidden" id="update_id" name="update_id" value="">
          <button type="submit" class="update btn btn-lg btn-primary" name="">Update</button>
        </div>
      </div>
    </div>
  </form>
</div>
