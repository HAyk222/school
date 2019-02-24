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
        <label class="control-label col-sm-2" for="topic">Դասավանդվող առարկան:</label>
        <div class="col-sm-10">          
          <select class="form-control" id="topic" name="topic">
            <?php foreach($data_position as $key=>$k) { ?>
              <option value="<?php print $k->name; ?>"><?php print $k->name; ?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10" style="text-align: center;">
          <button type="submit" class="btn btn-lg btn-primary">Save</button>
        </div>
      </div>
    </div>
  </form>
</div>
<div class="update-content">
    <div class="col-md-4">
      <div class="upload-image upload-image_edit">
        <img src="http://<?php
echo $_SERVER['HTTP_HOST']; ?>/dist/img/noavatarn.png">
        <input type="hidden" class="edit_img_input" value="http://<?php
echo $_SERVER['HTTP_HOST']; ?>/upload/">
        <input type="hidden" class="update_img_input" value="">
      </div>
      <div class="col-md-12">
        <input type="file" name="image" class="file form-control btn btn-info" placeholder="Image Id" value="Upload Image">
      </div>
    </div>
    <div class="col-md-8">
      <div class="form-group">
        <label class="control-label col-sm-2" for="text">Անուն:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name_edit" placeholder="Enter name" name="name">
        </div><br /><br />
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="surname">Ազգանուն:</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" id="surname_edit" placeholder="Enter surname" name="surname">
        </div><br /><br />
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="position">Դասավանդվող առարկան:</label>
        <div class="col-sm-10">          
          <select class="form-control" id="position_edit" name="position">
            <?php foreach($data_position as $key=>$k) { ?>
              <option value="<?php print $k->name; ?>"><?php print $k->name; ?></option>
            <?php } ?>
          </select>
        </div><br /><br />
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10" style="text-align: center;">
          <button type="submit" name="" class="btn btn-lg btn-primary update">Update</button>
        </div>
      </div>
    </div>
</div>
<script>
  jQuery(document).ready(function(){
    jQuery('.update').click(function(e){
      e.preventDefault();
      jQuery(".loader-overlay").show();
      var that = this;
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      });
      jQuery.ajax({
        url: "<?php print $update_url; ?>",
        method: 'post',
        data: {
          id: jQuery(this).attr('name'),
          name: jQuery("#name_edit").val(),
          surname: jQuery("#surname_edit").val(),
          position: jQuery("#position_edit").val(),
          image: jQuery(".update_img_input").val()
        },
        success: function(result){
          var data = JSON.parse(result);
          console.log(data);
          setTimeout(function(){
            jQuery(".update-alert").text("Փոփոխությունները հաջողությամբ կատարված  են:")
            jQuery(".update-alert").fadeIn(1000);
            jQuery(".loader-overlay").hide();
            var n = jQuery(that).attr("name");
            var iconArr = document.querySelectorAll(".edit"); 
            var el =""
            for( var i=0; i < iconArr.length; i++ ) {
              if(iconArr[i].getAttribute("name") != n){
                continue;
              }
              el=iconArr[i]
            }
            jQuery(el).parent().parent().find("td:nth-child(2)").text(data[0][0].name);
            jQuery(el).parent().parent().find("td:nth-child(3)").text(data[0][0].surname);
            jQuery(el).parent().parent().find("td:nth-child(4)").text(data[1][0].name);
            jQuery(el).parent().parent().css("background","#c8d6b863");
            setTimeout(function(){
              jQuery(".update-alert").fadeOut(3000);
            },5000)
          },300)
        }
      });
    });
  });
</script>

