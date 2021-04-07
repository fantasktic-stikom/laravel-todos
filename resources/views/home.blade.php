@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
           <div class="row m-custom">
               <div class="col-md-12 ">
                   <h4>Halo, {{Auth::user()->name}}!</h4>
                   <p>Catat dan jadwalkan sesuatu.</p>
               </div>
               <div class="col-md-12">
                   <a href="" class="btn btn-blue btn-block">Tambah</a>
               </div>
           </div>
        </div>
    </div>
</div>
@endsection
