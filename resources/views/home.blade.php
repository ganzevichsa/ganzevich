@extends('layouts.apphome')

@section('content')
  <div id="basicdiagram" style="width: 3000px; height: 1000px; border-style: dotted; border-width: 1px;" />
  <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

    </div>
@endsection
