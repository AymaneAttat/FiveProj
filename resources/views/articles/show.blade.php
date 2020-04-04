@extends('layouts.rest')
@section('content')
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Article</h1>
            </div>
        </div>
    </div>
</div>
<div class="reservation-box">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card mb-4 shadow-sm">
                    <img class="bd-placeholder-img card-img-top" src="/storage/cover_images/{{$article->cover_image}}" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title"><strong class="text-warning text-uppercase">{{$article->name}}</strong></h4>
                        <small class="text-muted"><strong class="text-warning text-uppercase">{{$article->prix}}Dh</strong></small>
                        <p class="card-text"><strong class="text-warning text-uppercase">{{$article->description}}.</strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <form method="post" action="{{ route('commandes.store') }}">
                                    @csrf
                                    <div class="submit-button text-center">
                                        <input type = "hidden" name = "article_id" value = "{{$article->id}}">
                                        <button class="btn btn-common" id="submit" type="submit">Commander</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  