<div class="data-content">
  <div class="table-responsive">          
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Անուն</th>
          <th>Ազգանուն</th>
          <th>Առարկան</th>
          <th>Փոխել</th>
          <th>Ջնջել</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($data as $key=>$k) { 
          $ararka_id = $dasatu_ararka[$key]->ararka_id;
          $ararka_name = DB::select('select name from ararka where ID = ?', [$ararka_id]);
          ?>
          <tr>
            <td><?php print $key+1; ?></td>
            <td><?php print $k->name; ?></td>
            <td><?php print $k->surname; ?></td>
            <td><?php print $ararka_name[0]->name; ?></td>
            <td><i class="fa fa-edit edit" name="<?php print $k->ID; ?>"></i></td>
            <td><i class="fa fa-trash trash" name="<?php print $k->ID; ?>"></i></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
<script>
  jQuery(document).ready(function(){
    jQuery('.edit').click(function(e){
      e.preventDefault();
      jQuery(".loader-overlay").show();
      document.querySelector('.data-content').classList.add("data-content_anim");
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      });
      jQuery.ajax({
        url: "<?php print $ajax_url; ?>",
        method: 'post',
        data: {
            id: jQuery(this).attr('name'),
        },
        success: function(result){
          var data = JSON.parse(result);
          console.log(data)
          jQuery("#name_edit").val(data[0][0].name);
          jQuery("#surname_edit").val(data[0][0].surname);
          var src = jQuery(".edit_img_input").val();
          var dataSrc="";
          if(data[0][0].nkar == null){
            dataSrc="noavatarn.png";
          }else{
            dataSrc = data[0][0].nkar;
          }
          jQuery(".upload-image_edit img").attr("src",src+dataSrc);
          jQuery(".update_img_input").val(dataSrc);
          jQuery(".update").attr("name",data[0][0].ID);
          jQuery("#position_edit").val(data[1][0].name);
          jQuery(".update").attr("name",data[0][0].ID);
          setTimeout(function(){
            jQuery(".loader-overlay").hide();
            document.querySelector('.data-content').style.display = "none";
            document.querySelector('.update-content').style.display = "block";
            document.querySelector('.add').style.display = "none";
            document.querySelector('.back').style.display = "inline";
            setTimeout(function(){
              document.querySelector('.update-content').classList.add('update-content_anim')
            },100)
          },300)
        }
      });
    });


    jQuery('.trash').click(function(e){
      e.preventDefault();
      jQuery(".loader-overlay").show();
      var that = this;
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      });
      jQuery.ajax({
        url: "<?php print $delete_url; ?>",
        method: 'post',
        data: {
          id: jQuery(this).attr('name'),
        },
        success: function(result){
          setTimeout(function(){
            jQuery(that).parent().parent().fadeOut(1000);
            jQuery(".update-alert").text("Տվյալը հաջողությամբ ջնջված է:")
            jQuery(".update-alert").fadeIn(1000);
            jQuery(".loader-overlay").hide();
            setTimeout(function(){
              jQuery(".update-alert").fadeOut(3000);
            },5000)
          },300)
        }
      });
    });

  });
</script>