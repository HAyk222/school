<div class="save-content">
  <form class="form-horizontal" action="<?php print $action_url; ?>" enctype="multipart/form-data"  method="post">
    <div class="col-md-6">
      <div class="form-group">
        <label class="control-label col-sm-4" style="text-align: center;" for="text">Առարկաի Անուն:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
      </div>
    </div>
    <div class="col-md-6"> 
      <div class="form-group">
        <label class="control-label col-sm-4" style="text-align: center;" for="type">Մասնախումբ:</label>
        <div class="col-sm-8">          
          <select class="form-control" id="type" name="type">
            <option value="Բնագիտական">Բնագիտական</option>
            <option value="Ներառական">Ներառական</option>
            <option value="Հայոց լեզվի և գրականության մեթոդամիավորում">Հայոց լեզվի և գրականության մեթոդամիավորում</option>
            <option value="Մաթեմատիկաի մեթոդամիավորում">Մաթեմատիկաի մեթոդամիավորում</option>
            <option value="Օտար լեզու">Օտար լեզու</option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">        
        <div class="" style="text-align: center;">
          <button type="submit" class="btn btn-lg btn-primary">Save</button>
        </div>
      </div>
    </div>
  </form>
</div>
<div class="update-content">
    <div class="col-md-6" style="margin-bottom: 40px;">
      <div class="form-group">
        <label class="control-label col-sm-4" style="text-align: center;" for="text">Առարկաի Անուն:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="name_edit" placeholder="Enter name" name="name">
        </div>
      </div>
    </div>
    <div class="col-md-6" style="margin-bottom: 40px;"> 
      <div class="form-group">
        <label class="control-label col-sm-4" style="text-align: center;" for="type">Մասնախումբ:</label>
        <div class="col-sm-8">          
          <select class="form-control" id="type_edit" name="type">
            <option value="Բնագիտական">Բնագիտական</option>
            <option value="Ներառական">Ներառական</option>
            <option value="Հայոց լեզվի և գրականության մեթոդամիավորում">Հայոց լեզվի և գրականության մեթոդամիավորում</option>
            <option value="Մաթեմատիկաի մեթոդամիավորում">Մաթեմատիկաի մեթոդամիավորում</option>
            <option value="Օտար լեզու">Օտար լեզու</option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">        
        <div class="" style="text-align: center;">
          <button type="submit" class="update btn btn-lg btn-primary" name="">Update</button>
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
          type: jQuery("#type_edit").val(),
        },
        success: function(result){
          var data = JSON.parse(result);
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
            jQuery(el).parent().parent().find("td:nth-child(2)").text(data[0].name);
            jQuery(el).parent().parent().find("td:nth-child(3)").text(data[0].type);
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