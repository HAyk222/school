<aside class="main-sidebar">
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="http://<?php
echo $_SERVER['HTTP_HOST']; ?>/dist/img/staff_login.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Administrator</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treeview <?php print $class['dashboard']; ?>">
        <a href="{{ route('dashboard') }}">
          <i class="fa fa-dashboard"></i> <span>Գլխավոր</span>
        </a>
      </li>
      <li class="treeview <?php print $class['personnel']; ?>">
        <a href="#">
          <i class="fa fa-share"></i> <span>Անձնակազմ</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu <?php print $class['personnel_open']; ?>">
          <li class="<?php print $class['administrative']; ?>"><a href="{{route('administrative')}}"><i class="fa fa-circle-o"></i> Վարչական </a></li>
          <li class="<?php print $class['educational']; ?>"><a href="#"><i class="fa fa-circle-o"></i> Մանկավարժական </a>
            <ul class="treeview-menu <?php print $class['educational_open']; ?>">
              <li class="<?php print $class['teachers']; ?>"><a href="{{route('teachers')}}"><i class="fa fa-circle-o"></i> Ուսուցիչներ </a></li>
              <li class="<?php print $class['other']; ?>"><a href="{{route('other')}}"><i class="fa fa-circle-o"></i> Այլ </a></li>
            </ul>
          </li>
          <li class="<?php print $class['serving']; ?>"><a href="{{route('serving')}}"><i class="fa fa-circle-o"></i> Սպասարկող </a></li>
        </ul>
      </li>

      <li class="treeview <?php print $class['council']; ?>">
        <a href="#">
          <i class="fa fa-share"></i> <span>Խորհուրդներ</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu <?php print $class['council_open']; ?>">
          <li class="<?php print $class['parentCouncil']; ?>"><a href="{{route('parentCouncil')}}"><i class="fa fa-circle-o"></i> Ծնողական </a></li>
          <li class="<?php print $class['teacherCouncil']; ?>"><a href="{{route('teacherCouncil')}}"><i class="fa fa-circle-o"></i> Ուսուցչական </a></li>
          <li class="<?php print $class['otherCouncil']; ?>"><a href="{{route('otherCouncil')}}"><i class="fa fa-circle-o"></i> Այլ </a></li>
        </ul>
      </li>
      <li class="treeview <?php print $class['topic']; ?>">
        <a href="{{ route('topic') }}">
          <i class="fa fa-share"></i> <span>Առարկաներ</span>
        </a>
      </li>
      <li class="treeview <?php print $class['classrooms']; ?>">
        <a href="#">
          <i class="fa fa-share"></i> <span>Դասարաններ</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu <?php print $class['classrooms_open']; ?>">
          <?php if(isset($number)){ ?>
            <li class=""><a href="{{route('addClassroom')}}"><i class="fa fa-circle-o"></i> Ավելացնել Դասարան </a></li>
          <?php } else { ?>
            <li class="<?php print $class['add_classroom']; ?>"><a href="{{route('addClassroom')}}"><i class="fa fa-circle-o"></i> Ավելացնել Դասարան </a></li>
          <?php } ?>
          <?php foreach($dasaran as $key=>$k) { ?>
              <?php if(isset($number) && $number == $k->name){ ?>
                <li class="active">
                  <a href="#">
                    <?php if($k->name == "1"){ ?>
                      <i class="fa fa-circle-o"></i> <?php print $k->name; ?>-ին դասարան 
                    <?php } else { ?>
                      <i class="fa fa-circle-o"></i> <?php print $k->name; ?>-րդ դասարան 
                    <?php } ?>
                  </a>
                  <ul class="treeview-menu menue-open">
                      <li class="<?php print $class['add_category']; ?>"><a href="http://<?php
  echo $_SERVER['HTTP_HOST']; ?>/admin/Դասարան/<?php print $k->name; ?>/Ավելաացնել"><i class="fa fa-circle-o"></i> Ավելացնել կատեգորիա </a></li>
                    
                    <?php foreach($dasaran_category as $key=>$c) { ?>
                        <?php if($k->ID == $c->number_id){ ?>
                          <?php if(isset($id) && $c->ID == $id) { ?>
                            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> <?php print $k->name; ?>-ի <?php print $c->name; ?>   </a>
                                <ul class="treeview-menu  <?php print $class['classCat_open']; ?>">
                                  <li class="<?php print $class['classroom_teachers']; ?>"><a href="http://<?php
        echo $_SERVER['HTTP_HOST']; ?>/admin/Դասարան/<?php print $k->name; ?>/<?php print $c->ID; ?>/Ուսուցիչներ"><i class="fa fa-circle-o"></i> Ուսուցիչներ </a></li>
                                  <li class="<?php print $class['classroom_students']; ?>"><a href="http://<?php
        echo $_SERVER['HTTP_HOST']; ?>/admin/Դասարան/<?php print $k->name; ?>/<?php print $c->ID; ?>/Աշակերտներ"><i class="fa fa-circle-o"></i> Աշակերտներ </a></li>
                          <?php } else { ?>
                            <li class=""><a href="#"><i class="fa fa-circle-o"></i> <?php print $k->name; ?>-ի <?php print $c->name; ?>   </a>
                                <ul class="treeview-menu">
                                  <li class=""><a href="http://<?php
        echo $_SERVER['HTTP_HOST']; ?>/admin/Դասարան/<?php print $k->name; ?>/<?php print $c->ID; ?>/Ուսուցիչներ"><i class="fa fa-circle-o"></i> Ուսուցիչներ </a></li>
                                  <li class=""><a href="http://<?php
        echo $_SERVER['HTTP_HOST']; ?>/admin/Դասարան/<?php print $k->name; ?>/<?php print $c->ID; ?>/Աշակերտներ"><i class="fa fa-circle-o"></i> Աշակերտներ </a></li>
                          <?php } ?>
                        
                          </ul>
                        </li>
                      <?php } ?>
                    <?php } ?>
                  </ul>
                </li>
              <?php } else { ?>
                <li class="">
                  <a href="#">
                    <?php if($k->name == "1"){ ?>
                      <i class="fa fa-circle-o"></i> <?php print $k->name; ?>-ին դասարան 
                    <?php } else { ?>
                      <i class="fa fa-circle-o"></i> <?php print $k->name; ?>-րդ դասարան 
                    <?php } ?>
                  </a>
                  <ul class="treeview-menu">
                      <li class=" "><a href="http://<?php
  echo $_SERVER['HTTP_HOST']; ?>/admin/Դասարան/<?php print $k->name; ?>/Ավելաացնել"><i class="fa fa-circle-o"></i> Ավելացնել կատեգորիա </a></li>
                    <?php foreach($dasaran_category as $key=>$c) { ?>
                      <?php if($k->ID == $c->number_id){ ?>
                        <li class=" "><a href="#"><i class="fa fa-circle-o"></i> <?php print $k->name; ?>-ի <?php print $c->name; ?>   </a>
                          <ul class="treeview-menu  ">
                            <li class=" "><a href="http://<?php
  echo $_SERVER['HTTP_HOST']; ?>/admin/Դասարան/<?php print $k->name; ?>/<?php print $c->ID; ?>/Ուսուցիչներ"><i class="fa fa-circle-o"></i> Ուսուցիչներ </a></li>
                            <li class=" "><a href="http://<?php
  echo $_SERVER['HTTP_HOST']; ?>/admin/Դասարան/<?php print $k->name; ?>/<?php print $c->ID; ?>/Աշակերտներ"><i class="fa fa-circle-o"></i> Աշակերտներ </a></li>
                          </ul>
                        </li>
                      <?php } ?>
                    <?php } ?>
                  </ul>
                </li>
              <?php } ?>
          <?php } ?>
        </ul>
      </li>
    </ul>
  </section>
</aside>