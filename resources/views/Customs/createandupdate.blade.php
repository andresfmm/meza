<div id="createCustom" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{__('create custom')}}</h4>
      </div>
      <div class="modal-body">
      <div class="row">
        {!! Form::open(['url' => 'epa']) !!}
        <div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
         <label for="first name"><strong style="color: red; padding-right: 1px;">*</strong><strong>{{__('first name')}}</strong>
         </label>
         {!! Form::text('text', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])!!}
         </div>
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
         <label for="last name"><strong style="color: red; padding-right: 1px;">*</strong><strong>{{__('last name')}}</strong>
         </label>
         {!! Form::text('text', null, ['class' => 'form-control', 'placeholder' => 'Apellido'])!!}
         </div>
         </div>

        <div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-top: 25px;">
         <label for="identicication"><strong style="color: red; padding-right: 1px;">*</strong><strong>{{__('identification')}}</strong>
         </label>
         {!! Form::text('text', null, ['class' => 'form-control', 'placeholder' => 'Identicacion'])!!}
         </div>
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-top: 25px;">
         <label for="phone"><strong style="color: red; padding-right: 1px;">*</strong><strong>{{__('phone')}}</strong>
         </label>
         {!! Form::text('text', null, ['class' => 'form-control', 'placeholder' => 'Telefono'])!!}
         </div>
         </div>

         <div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-top: 25px;">
         <label for="email"><strong style="color: red; padding-right: 1px;">*</strong><strong>{{__('email')}}</strong>
         </label>
         {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Correo'])!!}
         </div>
         </div>

         <div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-top: 25px;">
         <label for="password"><strong style="color: red; padding-right: 1px;">*</strong><strong>{{__('password')}}</strong>
         </label>
         {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'clave'])!!}
         </div>
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-top: 25px;">
         <label for="confirm password"><strong style="color: red; padding-right: 1px;">*</strong><strong>{{__('confirm password')}}</strong>
         </label>
         {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'confirme clave'])!!}
         </div>
         </div>
         <div class="row">
         </div>
         <div class="modal-footer" style="padding-top:15px;">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-save"></i> Close</button>
        <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        {!! Form::close() !!}
      </div>
      
    </div>

  </div>
</div>