@extends('adminlte::layouts.app')
@section('htmlheader_title')
  
@endsection
@section('contentheader_title')
    {{__('General Chat room')}}
@endsection
@section('main-content')
    <section class="content" style="text-align: center;">
        <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="info-box ">
                    <div class="info-box-content">
                        <span class="info-box-text">{{__('Chat')}}</span>   
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center !important">
                <div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    
                    <div style="text-align: center;">
                        <span class="info-box-text">{{__('Users online')}}</span>
                        
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div>
            
        </div>
        
    </section>
    
@endsection