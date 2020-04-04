@extends('layouts.rest')
@section('content')

<div class="reservation-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h1>Reservation</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                </div>
            </div>
        </div>
    </div>    
</div>   
<div class="col-md-12 col-lg-12 col-sm-12">
    <div class="container">
    {!! Form::open(['action' => 'CommandesController@store', 'method' => 'POST']) !!}
        {!! csrf_field() !!}
                
        <div class="form-group">
            <div class="row">
                <div class="col-md-12">{{Form::select('article_id', array_pluck( $article , 'name','id'), 'Choose Article', ['class' => 'form-control', 'placeholder' => 'Choose Article']) }}</div>       
            </div>
        </div>
        <div class="form-group">
                    
            {{Form::submit('Save', ['class' => 'btn btn-info'])}}
            <div class ="float-right"><a href="{{ route('commandes.index')}}" class="btn btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i>Go back</a></div>
        </div>
    {!! Form::close() !!}
    </div>
</div>         
                
                    
                
            
        

@endsection