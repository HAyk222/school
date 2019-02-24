<div class="data-content">
  <div class="table-responsive">          
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Առարկա</th>
          <th>Մասնախումբ</th>
          <th>Փոխել</th>
          <th>Ջնջել</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($data as $key=>$k) { ?>
          <tr>
            <td><?php print $key+1; ?></td>
            <td><?php print $k->name; ?></td>
            <td><?php print $k->type; ?></td>
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
          jQuery("#name_edit").val(data[0].name);
          jQuery("#type_edit").val(data[0].type);
          jQuery(".update").attr("name",data[0].ID);
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