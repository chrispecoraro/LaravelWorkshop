@extends('app')

@section('container_content')
<div class="container">
    <div id="health-test" style="" class="">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Health Test</div>
            </div>
            <div class="panel-body">
                Your score is
                @if ($score>5)
                    <span class="alert alert-danger">{{ $score }}</span>. You are at high risk for Type 2 diabetes.
                @else
                    <span class="alert alert-success">{{ $score }}</span>. You are not at high risk for Type 2 diabetes.
                @endif
            </div>
        </div>
    </div>
@endsection