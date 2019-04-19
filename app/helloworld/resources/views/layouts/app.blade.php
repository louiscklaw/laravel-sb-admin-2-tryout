@extends('sb-admin-2::layouts.main')

@section('sidebar-menu')
<ul class="nav" id="side-menu">
  <li>
    <a href="{{ route('home') }}" class="active"><i class="fa fa-home fa-fw"></i> Home</a>
  </li>
  <li>
    <a href="{{ route('home') }}" class="active"><i class="fa fa-home fa-fw"></i> item1</a>
    <li>
      <a href="{{ route('home') }}" class="active"><i class="fa fa-home fa-fw"></i> item1.1</a>
    </li>
  </li>
  <li>
    <a href="{{ route('home') }}" class="active"><i class="fa fa-home fa-fw"></i> item2</a>
  </li>
</ul>

@endsection
