@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Post Content -->
     <livewire:public.single-view :post_id="$post_id"/>
   
  </div>
  
@endsection