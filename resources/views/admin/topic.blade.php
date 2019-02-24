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
        @include("admin/topicData")
        @include("admin/saveTopicData")
      </div>
    </div>
  </div>
  @include("admin/adminControls")
</div>
@stop
