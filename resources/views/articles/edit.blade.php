@extends('layouts.admin')
@section('content')

<div class="reservation-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <br>
                    <h1>Edit Article</h1>
                    <p>Modifier votre  Plat dans cette article</p>
                </div>
            </div>
        </div>
    </div>    
</div>
<!-- End All Pages -->
        
        <div class="container">
            {!! Form::open(['action' => ['ArticlesController@update', $article->id], 'methode' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
                {!! csrf_field() !!}
                <div class="form-group">
                    {{Form::text('name', $article->name, ['class' => 'form-control', 'placeholder' => 'Name of meal', 'required data-error' => 'Please enter your name'])}}
                </div>
                <div class="form-group">
                    {{Form::number('prix', $article->prix, ['class' => 'form-control', 'placeholder' => 'Enter prix'])}}  
                </div>
                <div class="form-group">                    
                    {{Form::textarea('description', $article->description, ['class' => 'form-control', 'placeholder' => 'Your description', 'required data-error' => 'Please enter your description'])}}
                </div>
                <div class="form-group">
                    {{Form::select('category', ['drinks' => 'Drinks', 'lunch' => 'Lunch', 'dinner' => 'Dinner'], $article->category, ['class' => 'form-control','placeholder' => 'Select Category'])}}
                </div>
                <div class="form-group">
                    {{Form::file('cover_image')}}  
                </div>
                <div class="form-group">
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('submit', ['class' => 'btn btn-primary'])}} 
                    <div class ="float-right"><a href="{{ route('articles.index') }}" class="btn btn-secondary">Go back</a></div> 
                    <div class="clearfix"></div>
                </div>
            {!! Form::close() !!}
</div>
@endsection