<div class="data-content">
  <div class="table-responsive">          
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Դասատու</th>
          <th>Առարկա</th>
          <th>Փոխել</th>
          <th>Ջնջել</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($dasaran_teachers as $key=>$k) { ?>
          <tr class="category">
            <td><div><?php print $key+1; ?></div></td>
            <?php if($k[0]->nkar == "") { ?>
              <td><div><img src="http://<?php
echo $_SERVER['HTTP_HOST']; ?>/dist/img/noavatarn.png"><?php print $k[0]->name; ?> <?php print $k[0]->surname; ?></div></td>
            <?php } else { ?>
              <td><div><img src="http://<?php
echo $_SERVER['HTTP_HOST']; ?>/upload/<?php print $k[0]->nkar; ?>"><?php print $k[0]->name; ?> <?php print $k[0]->surname; ?></div></td>
            <?php } ?> 
            <td><div><?php print $ararka_arr[$key][0]->name; ?></div></td>
            <td><div><i class="fa fa-edit edit" name="<?php print $dasatu_dasaran_id_arr[$key]; ?>"></i></div></td>
            <td><div><i class="fa fa-trash trash" name="<?php print $dasatu_dasaran_id_arr[$key]; ?>"></i></div></td>
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
          jQuery("#teacher_update").val(data[0]['dasatu_id'])
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