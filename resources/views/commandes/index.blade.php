@extends('layouts.rest')
@section('content')
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Commande</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h3><br><strong class="text-warning text-uppercase">List des plats que vous avez Commandez</strong></h3>
    @foreach ($commandes as $commande)
        @if($commande->user_id == Auth()->user()->id)
            @foreach ($article as $art)
                @if($commande->article_id == $art->id)
                    <div class="list-group-item ">    
                        <div class="card card-body bg-light">
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <img src="/storage/cover_images/{{$art->cover_image}}" style="width: 100%;">
                                </div> 
                                <div class="col-md-8 col-sm-8">
                                    <h3 class="card-title"><strong class="text-warning text-uppercase">{{$art->name}}</strong></h3> 
                                    <small>Commande at {{$commande->created_at}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                 @endif 
            @endforeach
        @endif
    @endforeach
    {{ $commandes->links() }}
</div>
@endsection