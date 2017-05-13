<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box box-primary">
     <div class="box-header">
      <div class="box-title">
      	    {{__('customs')}}
      </div>
       <div class="box-tools">
        <button class="btn btn-primary" id="formUser" data-toggle="modal" data-target="#createCustom" >
        	<i class="glyphicon glyphicon-plus"></i>
        	{{__('create new custom')}}
        </button>
       </div>
     </div>

     <!--table-->
     <div class="box-body table-responsive">
      <table class="table table-hover dataTable">
       <thead>
       	 <tr>
       	 	<th>
       	 		{{__('document')}}
       	 	</th>
       	 	<th>
       	 		{{__('full name')}}
       	 	</th>
       	 	<th>
       	 		{{__('Email')}}
       	 	</th>
       	 	<th>
       	 		{{__('phone')}}
       	 	</th>
       	 	<th>
       	 		{{__('owner create')}}
       	 	</th>
       	 	<th>
       	 		{{__('create at')}}
       	 	</th>
       	 	<th>
       	 		{{__('update at')}}
       	 	</th>
       	 </tr>
       </thead>
      </table>
     </div>
    </div>	
  </div>	
</div>