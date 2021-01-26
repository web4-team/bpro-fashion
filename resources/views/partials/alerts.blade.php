
@if (Session::has('success'))
  <div class="alert alert-success alert-dismissible fade show rounded" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span></button> <i class="fa fa-info mx-2"></i>
      <strong>{!! session('success') !!}</strong>
  </div>
@endif

@if(session('warning'))
  <div class="alert alert-warning alert-dismissible fade show rounded" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span></button> <i class="fa fa-info mx-2"></i>
      {{ session('warning') }}
  </div>
@endif

@if(session('error'))
  <div class="alert alert-danger alert-dismissible fade show rounded" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span></button> <i class="fa fa-info mx-2"></i>
      {{ session('error') }}
  </div>
@endif
