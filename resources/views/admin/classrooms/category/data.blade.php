<div class="data-content">
  <div class="table-responsive">          
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Կատեգորիա</th>
          <th>Դասղեկ</th>
          <th>Ծնողկոմիտե</th>
          <th>Փոխել</th>
          <th>Ջնջել</th>
        </tr>
      </thead>
      <tbody>
        <?php $count = 0; ?>
        <?php foreach($dasaran_category as $key=>$k) { ?>
          <?php if($k->number_id == $number){
            $count++;
           ?>
            <tr class="category">
              <td><div><?php print $count; ?></div></td>
              <td><div><?php print $k->name; ?></div></td>
              <?php if($k->dasxek_nkar == ""){ ?>
                <td><div><img src="http://<?php
  echo $_SERVER['HTTP_HOST']; ?>/dist/img/noavatarn.png" alt="<?php print $k->dasxek; ?>" /><?php print $k->dasxek; ?></div></td>
              <?php } else { ?>
                <td><div><img src="http://<?php
  echo $_SERVER['HTTP_HOST']; ?>/upload/<?php print $k->dasxek_nkar; ?>" alt="<?php print $k->dasxek; ?>" /><?php print $k->dasxek; ?></div></td>
              <?php } ?>
              
              <td><div><?php print $k->cnox_komite; ?></div></td>
              <td><div><i class="fa fa-edit edit" name="<?php print $k->ID; ?>"></i></div></td>
              <td><div><i class="fa fa-trash trash" name="<?php print $k->ID; ?>"></i></div></td>
            </tr>
          <?php } ?>
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
          jQuery("#category_update").val(data[0]['name'])
          jQuery("#update_image").attr("src","http://<?php
  echo $_SERVER['HTTP_HOST']; ?>/upload/" + data[0]['dasxek_nkar'])
          jQuery(".update_img_input").val(data[0]['dasxek_nkar'])
          jQuery("#name_dasxek_update").val(data[0]['dasxek'])
          jQuery("#name_cnox_update").val(data[0]['cnox_komite'])
          jQuery("#update_id").val(data[0]['ID'])
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
            jQuery(that).parent().parent().parent().fadeOut(1000)
            jQuery(".update-alert").text("Տվյալը հաջողությամբ ջնջված է:")
            jQuery(".update-alert").fadeIn(1000);
            jQuery(".loader-overlay").hide();
            setTimeout(function(){
              jQuery(".update-alert").fadeOut(3000);
            },5000)
            location.reload();
          },300)
        }
      });
    });
  });
</script>