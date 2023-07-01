<div class="notification" style="position: fixed; bottom:2px; right:-300px; z-index:9999;">
    <div class="alert {{ $class ?? '' }} text-white alert-dismissible" role="alert">
      {{ $message }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
      </button>
    </div>
</div>

