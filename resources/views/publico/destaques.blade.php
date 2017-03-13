@extends ('publico.bem_vindo')
@section ('conteudo')

<!--Item slider text-->
<div class="container">
  <div class="row" id="slider-text">
    <div class="col-md-6" >
      <h2>Destaques</h2>
    </div>
  </div>
</div>
<!-- Item slider-->
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider" >
        <div class="carousel-inner" style="height:200px">
            @foreach ($destaques as $key=> $p)
                @if ($key == 0)
                <div class="item active">
                    <div class="col-xs-12 col-sm-6 col-md-2">
                      <a href="#"><img src="/img/{{$p->nome}}" class="img-responsive center-block img-thumbnail"></a>
                      <h4 class="text-center">...</h4>
                      <h5 class="text-center">...</h5>
                    </div>
                </div>
                @else 
                <div class="item">
                    <div class="col-xs-12 col-sm-6 col-md-2">
                      <a href="#"><img src="/img/{{$p->nome}}" class="img-responsive center-block img-thumbnail"></a>
                      <h4 class="text-center">...</h4>
                      <h5 class="text-center">...</h5>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
        <div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://s12.postimg.org/uj3ffq90d/arrow_left.png" alt="Left" class="img-responsive"></a>
        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="https://s12.postimg.org/djuh0gxst/arrow_right.png" alt="Right" class="img-responsive"></a>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- Item slider end-->

@stop