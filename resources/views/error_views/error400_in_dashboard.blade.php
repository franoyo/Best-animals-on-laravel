@extends("layouts.plantilla_right")
@section("putTitle")
Error 400
@endsection
@section("contenidoPrincipal")
 @include("error_views.error400")
@endsection
@section("menuButtons")
<div class="dash">
<a class="ins" href="{{route('admin')}}"><p class="t1"><i class="bi bi-arrow-left"></i>ATRAS</p></a>
          <div class="linea"></div>
      
        </div>
@endsection