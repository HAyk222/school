@extends("admin/index")

@section("content")
<div class="wrapper">
  @include("admin/header")
  
  @include("admin/sidebar")
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="cont">
      @include("admin/title")
      <div class="page-content">
        @include("admin/personnel/educational/dataTeachers")
        @include("admin/personnel/educational/saveDataTeachers")
      </div>
    </div>
  </div>
  @include("admin/adminControls")
</div>
@stop
