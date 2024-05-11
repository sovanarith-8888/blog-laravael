{{-- extends from root layout --}}
@extends('layouts.master');

{{-- Chnage title --}}
@section('title',"portfoio")

<x-navbar>
  {{-- Overload from navbar components --}}
  <x-slot name="title">
    {{-- change title in navbar --}}
    main of title
  </x-slot>
  <h4>main of the navbar</h4>
</x-navbar>


{{-- Dynamic content --}}
@section('mycontent')
<h1>Welcome to my portfolio</h1>

@endsection

