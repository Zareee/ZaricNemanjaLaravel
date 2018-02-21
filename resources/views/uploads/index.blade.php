
<body style="background:;">


@extends('layouts.master')

@yield('content')

@section('content')


      <div class="container">
        <div class="row" >

      <!-- Page Heading -->
          
          <div id="carouselExampleIndicators" class="carousel rounded slide my-4 pt-2" style="max-width: 600px; margin: 0 auto;" data-ride="carousel">
            
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner mt-3" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="/storage/konj.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="/storage/konj.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="/storage/konj.jpg" alt="Third slide">
              </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
         
          </div>

        </div>
      </div>

      <div class="container">
      <!-- Page body -->
      <div class="row">
        @foreach($uploads as $upload)

        <div class="col-lg-3 col-md-4 col-sm-6 col-pb-5 pt-3 portfolio-item">
          <div class="card h-100" style="background:#d9d9d9;">
            <a href="{{$upload->image}}" data-lightbox="roadtrip">
              <img class="card-img-top img-fluid img-thumbnail" id="{{$upload->id}}" src="{{$upload->image}}" alt="{{$upload->title}}">
            </a>
            <div class="card-body ">
              <h3 class="card-title fixed-bot">{{$upload->title}}</h3>
              <h5 class="card-title">br: 0{{$upload->id}}</h5>
              <h6 class="card-title">Cena: {{$upload->price}} din.</h6>
              <p class="card-text">{{$upload->description}}</p>
            </div>

            @if(Auth::check())
            <div class="form-group">
              <a href="/delete/{{$upload->id}}" onclick="return confirm('Are you sure?');" >
              <button type="button"class="btn btn-danger btn-sm ml-2">
                Delete image</button>
              </a>
              <a>
              <button type="button" value="" href="" onclick="editMe({{$upload->id}})" class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#myModal">
                Edit image</button>
              </a>
            </div>
            @else 
              <div class="form-group">             
                <button class="btn btn-dark btn-sm ml-2" onclick="addMe({{$upload->id}})" type="button" >Add <i class="fa fa-cart-arrow-down"></i></button>             
              </div>
            @endif

          </div>
        </div>
          @endforeach    
        </div>

        
        <!-- Button trigger modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"  >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
              </div>
              <div class="modal-body">
                <form method="POST" action="/edit" >
                  {{ csrf_field() }}
                <div class="container center_div">
                  <div class="form-group col-xs-4">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="titleM" name="title" value="" required>
                  </div>

                  <div class="form-group col-xs-4">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="priceM" name="price" value="" required>
                  </div>

                  <div class="form-group col-xs-4">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" id="descriptionM" value="" required>
                  </div>

                  <div class="form-group col-xs-4">    
                   <input type="file" class="form-control-file" id="image"  value="">
                  </div>
                </div>  
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                  <input type='hidden' id='editID' name='editID'> 
                </div>
                </form>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->    

    </div>
    <!-- /.container -->
    @endsection

</body>


<script>


  function editMe(el1){

    var id = el1;
    $.post('getter', {'id': id, '_token':$('input[name=_token]').val()}, function(data){
        $('#titleM').val(data.uploads.title);
        $('#priceM').val(data.uploads.price);
        $('#descriptionM').val(data.uploads.description);
        $('#editID').val(data.uploads.id);
    });

  }
  function addMe(el1){
    var id = el1;
    $.post('cart', {'id': id, '_token':$('input[name=_token]').val()}, function(data){
        alert(data);
    });
  }



</script>

