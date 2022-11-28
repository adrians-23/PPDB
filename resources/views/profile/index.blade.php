@extends('template.layout')

@section('title')
    Dashboard
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Profile | {{ Auth()->user()->name }}</h1>
    </div>

    <div class="section-body">
        -
    </div>
</section>
@endsection