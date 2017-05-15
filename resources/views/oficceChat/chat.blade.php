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
                <div class="info-box" style="border-radius: 5px;">
                    
                        <span class="info-box-text" style="left:50%;line-height: 30px; border-bottom: 1px solid rgb(204, 204, 204)">{{__('Chat')}}</span>
                        <div style=" height: 350px; overflow-y: scroll;">
                        <div style="text-align: left; padding-left: 20px; height: 310px;" >
                        <br>wdwd        
                        <br>ñkjk    
                        <br>dcdc
                        <br>lsfsfsdf
                        <br>kjkj
                        <br>jkjkj
                        <br>fsdfsdf
                        <br>sdfsdf
                        <br>fsdfsdf
                        <br>esdfsdf
                        <br>fsdfsdfsd
                        <br>eewfdwef
                        <br>dwfefwef
                        <br>edfwef
                        <br>ewefwef
                        <br>fwefwef
                        <br>ewfwefw
                        <br>fwasas
                        <br>rhytgr
                        <br>btbrtbrt
                        <br>rtrbrtb
                        <br>rtgrge
                        <br>sfsfsr
                        <br>gegerg
                        <br>gthrththt
                        <br>egregerg
                        <br>egerg
                        <br>egegerg
                        <br>egeg
                        <br>wfwefwef
                        </div>
                           
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->

                <!--box chat-->
                <input type="text" class="form-control" id="input-chat">     
                

                <!--box- button-->
                <input type="submit" name="enviar" class="btn btn-primary pull-right" value="enviar" style="margin-top: 8px;" id="btn-chat">
            </div>
            <!--divider-->
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center !important" style="margin-top:8px;">
                <div class="info-box" style="border-radius: 5px;">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-text" style="left: 30%; line-height:30px; border-bottom: 1px solid rgb(204, 204, 204); ">{{__('Users online')}}</span>
                    <div style=" height: 350px; overflow-y: scroll;">
                     
                         
                        <div style="text-align: left; padding-left: 20px;">
                        <br>wdwd        
                        <br>ñkjk    
                        <br>dcdc
                        <br>lsfsfsdf
                        <br>kjkj
                        <br>jkjkj
                        <br>fsdfsdf
                        <br>sdfsdf
                        <br>fsdfsdf
                        <br>esdfsdf
                        <br>fsdfsdfsd
                        <br>eewfdwef
                        <br>dwfefwef
                        <br>edfwef
                        <br>ewefwef
                        <br>fwefwef
                        <br>ewfwefw
                        <br>fwasas
                        <br>rhytgr
                        <br>btbrtbrt
                        <br>rtrbrtb
                        <br>rtgrge
                        <br>sfsfsr
                        <br>gegerg
                        <br>gthrththt
                        <br>egregerg
                        <br>egerg
                        <br>egegerg
                        <br>egeg
                        <br>wfwefwef
                        </div>
                        
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div>
            
        </div>
        
    </section>
    
@endsection