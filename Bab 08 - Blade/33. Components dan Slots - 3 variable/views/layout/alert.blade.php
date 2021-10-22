<div class="alert alert-{{$class}} alert-dismissible fade show">
  <h4 class="alert-heading"><u>{{$judul}}</u></h4>
  {{$slot}}
  <button type="button" class="close" data-dismiss="alert">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
