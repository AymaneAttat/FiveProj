@extends('layouts.rest')
@section('content')
<div id="slides" class="cover-slides">
    <ul class="slides-container">
        <li class="text-center">
            <img src="{{asset('dist/images/slider01.png')}}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> xxxx Restaurant</strong></h1>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="{{asset('dist/images/slider02.jpg')}}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> xxxx Restaurant</strong></h1>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="{{asset('dist/images/slider03.jpg')}}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> xxxx Restaurant</strong></h1>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- Start About -->
<div class="about-section-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{asset('dist/images/man-decorating-food-2403391.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <div class="inner-column">
                    <h1>Bienvenue sur <span>xxxx Restaurant</span></h1>
                    
                    <p>xxxx restaurent vous livre désormais vos produits préférés via Jumia Food, chez vous, 
                        au travail ou tout simplement là où vous en avez envie. Ce service de livraison est disponible à Casablanca, Rabat, Marrakech, Tanger, Meknès, Agadir, Oujda, Tétouan et bientôt sur plusieurs autres villes du Maroc.. </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="qt-box qt-background">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-left">
                <p class="lead ">
                    " You don't need a silver fork to eat good food. "
                </p>
                <span class="lead">Paul Prudhomme</span>
            </div>
        </div>
    </div>
</div>
<div class="menu-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Special Menu</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".drinks">Drinks</button>
                        <button data-filter=".lunch">Lunch</button>
                        <button data-filter=".dinner">Dinner</button>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="row special-list">
            
            @foreach ($articles as $article)
                @if($article->category == 'lunch' )
                    <div class="col-md-4 special-grid lunch">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" src="/storage/cover_images/{{$article->cover_image}}" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><strong class="text-warning text-uppercase">{{$article->name}}</strong></h4>
                            <p class="card-text">{{$article->description}}.</p>
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-circle btn-outline-secondary" href="{{route('articles.show', $article->id)}}">Reserver</a>
                            </div>
                            <strong class="text-muted"><b>{{$article->prix}}Dh</b></strong>
                            </div>
                        </div>
                        </div>
                    </div>
                @endif
                @if($article->category == 'drinks' )
                    <div class="col-md-4 special-grid drinks">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" src="/storage/cover_images/{{$article->cover_image}}" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><strong class="text-warning text-uppercase">{{$article->name}}</strong></h4>
                            <p class="card-text">{{$article->description}}.</p>
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-circle btn-outline-secondary" href="{{route('articles.show', $article->id)}}">Reserver</a>
                            </div>
                            <strong class="text-muted"><b>{{$article->prix}}Dh</b></strong>
                            </div>
                        </div>
                        </div>
                    </div>
                @endif
                @if($article->category == 'dinner' )
                    <div class="col-md-4 special-grid dinner">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" src="/storage/cover_images/{{$article->cover_image}}" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><strong class="text-warning text-uppercase">{{$article->name}}</strong></h4>
                            <p class="card-text">{{$article->description}}.</p>
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-circle btn-outline-secondary" href="{{route('articles.show', $article->id)}}">Reserver</a>
                            </div>
                            <strong class="text-muted">{{$article->prix}}Dh</strong>
                            </div>
                        </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
<br><br><br>
@endsection