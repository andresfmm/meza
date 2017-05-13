@extends('adminlte::layouts.app')
@section('htmlheader_title')
  
@endsection
@section('contentheader_title')
    {{__('E-mail')}}
@endsection
@section('main-content')
    <section class="content">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <button class="btn btn-primary btn-lg">
                        {{__('recived')}}
                    </button>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center !important" style="padding-top: 10px;">
               <button class="btn btn-primary btn-lg">
                        {{__('sends')}}
                    </button>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left" align="center !important" style="padding-top: 10px;">
                <button class="btn btn-primary btn-lg">
                        {{__('deleted')}}
                    </button>
            </div>
            </div>
            {{__('E-mail')}}
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left" align="center !important">
                <div class="info-box ">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    
                    
                </div><!-- /.info-box -->
            </div>
            </div>
        </div>
        
    </section>
    
@endsection