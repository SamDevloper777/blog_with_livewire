@extends('layout')

@section('content')
    <div class="flex flex-1 px-[10%] mt-10">
        <div class="w-3/12">
          <livewire:public.sidebar/>
        </div>
        <div class="w-9/12">
        <livewire:public.post-section/>
            </div>
    </div>
@endsection