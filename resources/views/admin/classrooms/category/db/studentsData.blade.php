<div class="data-content">
  <div class="table-responsive">          
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Նկար</th>
          <th>Անուն</th>
          <th>Ազգանուն</th>
          <th>Փոխել</th>
          <th>Ջնջել</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($ashakertner as $key=>$k) { ?>
            <tr class="category">
              <td><div><?php print $key+1; ?></div></td>
              
              <?php if($k->nkar == ""){ ?>
                <td><div><img src="http://<?php
  echo $_SERVER['HTTP_HOST']; ?>/dist/img/noavatarn.png" alt="<?php print $k->name; ?>" /></div></td>
              <?php } else { ?>
                <td><div><img src="http://<?php
  echo $_SERVER['HTTP_HOST']; ?>/upload/<?php print $k->nkar; ?>" alt="<?php print $k->name; ?>" /></div></td>
              <?php } ?>
              <td><div><?php print $k->name; ?></div></td>
              <td><div><?php print $k->surname; ?></div></td>
              <td><div><i class="fa fa-edit edit" name="<?php print $k->ID; ?>"></i></div></td>
              <td><div><i class="fa fa-trash trash" name="<?php print $k->ID; ?>"></i></div></td>
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
          jQuery(".img").attr("src", "http://<?php
  echo $_SERVER['HTTP_HOST']; ?>/upload/" + data[0]['nkar'])
          jQuery(".update_img_input").val(data[0]['nkar'])
          jQuery("#name_update").val(data[0]['name'])
          jQuery("#surname_update").val(data[0]['surname'])
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
          },300)
        }
      });
    });
  });
</script>
