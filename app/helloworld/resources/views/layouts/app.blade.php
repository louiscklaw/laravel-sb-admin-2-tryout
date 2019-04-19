@extends('sb-admin-2::layouts.main')

@section('sidebar-menu')
  {!! $MyNavBar->asUl(['class' => 'nav']) !!}
@endsection
