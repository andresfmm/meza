@extends('adminlte::layouts.app')
@section('htmlheader_title')
  
@endsection
@section('contentheader_title')
    {{__('customs')}}
@endsection
@section('main-content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="info-box ">
                    @include('Customs.table') 
                    @include('Customs.createandupdate')    
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div>
        </div>
    </section>
    
@endsection