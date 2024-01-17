@extends('layouts.main')
@section('title')
    HOME PAGE
@endsection

@section('content')
<p>HOME CONTENT</p>

    {{-- @include('components.product_ui') --}}

    @for ($i = 0; $i < 10; $i++)
        @include('components.product_ui',[
            'id' => $i
        ])
    @endfor

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Vitae dolorum magnam sint nobis est pariatur alias corporis facilis quasi sit?</p>
@endsection