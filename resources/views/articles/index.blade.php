@extends('layouts.admin')
@section('content')

<div class="blog-box">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="heading-title text-center">
            <h2>Article List</h2>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($articles as $art)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="/storage/cover_images/{{$art->cover_image}}" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title"><strong class="text-secondary text-uppercase">{{$art->name}}</strong></h4>
                <small class="float-right text-muted"><b>{{$art->prix}}Dh</b></small><br>
                <p class="card-text">{{$art->description}}.</p>
                <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <form method="post" action="{{ route('commandes.destroy', $art->id) }}">
                      @csrf
                      <div class="form-group">
                        <input type="hidden" value="DELETE" />
                        @can('Edit Article')
                          <a class="btn btn-lg btn-circle btn-outline-secondary" href="{{ route('articles.edit',$art->id) }}"> Modifier </a>
                        @endcan
                        @can('Delete Article')
                          <input type="submit" class="btn btn-lg btn-circle btn-outline-danger" value="Supprimer" />
                        @endcan
                      </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
      <br>
      {{ $articles->links() }}
    </div>
  </div>
@endsection