@extends('layouts.template')

@section('title','Agregar un Producto')

@section('content')
<div class="tabla_principalv2">
	{!! Form::open(['route' => ['inventario.store'], 'method' => 'POST','id' => 'formorden','class'=>"form-horizontal", 'name' => 'formorden']) !!}

		<div class="form-group">
			{!! Form::label('codigo','Código', ['class' => 'col-sm-2 control-label']); !!}
		<div class="col-sm-10">
			{!! Form::text('codpro',NULL, ['class' => 'form-control', 'placeholder' => 'Indique el Código', 'required']); !!}
		</div>
		</div>
		<div class="form-group">
			{!! Form::label('descripcion','Descripción', ['class' => 'col-sm-2 control-label']); !!}
		<div class="col-sm-10">
			{!! Form::text('descr',NULL, ['class' => 'form-control', 'placeholder' => 'Indique la Descripción', 'required']); !!}
		</div>
		</div>
		<div class="form-group">
			{!! Form::label('video','Video', ['class' => 'col-sm-2 control-label']); !!}
		<div class="col-sm-10">

			{!! Form::select('video', $array_video, NULL, ['class' => 'form-control', 'placeholder' => 'Indique la Cantidad de Canales de Salida HDMI/VGA/BNC', '']) !!}
		</div>
		</div>
		<div class="form-group">
			{!! Form::label('audio','Audio', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('audio','', ['class' => 'form-control', 'placeholder' => 'Ej: 4/8/16 ', '']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('resolucion','Resolución', ['class' => 'col-sm-2 control-label']); !!}
		<div class="col-sm-10">
			{!! Form::text('resolucion',NULL, ['class' => 'form-control', 'placeholder' => 'Ej: 1024x768', '']); !!}
		</div>
		</div>
		<div class="form-group">
			{!! Form::label('almacenamiento','Almacenamiento', ['class' => 'col-sm-2 control-label']); !!}
		<div class="col-sm-10">
			{!! Form::text('almacenamiento',NULL, ['class' => 'form-control', 'placeholder' => 'Indique ', '']); !!}
		</div>
		</div>
		<div class="form-group">
			{!! Form::label('grabacion','Grabación', ['class' => 'col-sm-2 control-label']); !!}
		<div class="col-sm-10">
			{!! Form::text('grabacion',NULL, ['class' => 'form-control', 'placeholder' => 'Indique la Forma de Grabación', '']); !!}
		</div>
		</div>
		<div class="form-group">
			{!! Form::label('general','Observación', ['class' => 'col-sm-2 control-label']); !!}
		<div class="col-sm-10">
			{!! Form::textarea('general',NULL, ['class' => 'form-control', 'placeholder' => 'Indique cualquier Observación', "rows"=> 2, '']); !!}
		</div>
		</div>
		<div class="form-group">
			{!! Form::label('exist','Existencia', ['class' => 'col-sm-2 control-label']); !!}
		<div class="col-sm-10">
			{!! Form::number('exist',NULL, ['class' => 'form-control', 'placeholder' => 'Indique la existencia','min'=>1 , 'max'=>2000, 'required']); !!}
		</div>
		</div>
		<div class="form-group">
			{!! Form::label('precio','Precio', ['class' => 'col-sm-2 control-label']); !!}
		<div class="col-sm-10">
			{!! Form::text('precio',NULL, ['class' => 'form-control', 'placeholder' => 'Indique el Precio de Venta', 'required']); !!}
		</div>
		</div>
		<div class="form-group">
			{!! Form::label('oferta','¿Este producto esta en Oferta?', ['class' => 'alert-danger col-sm-2 control-label']); !!}
			&nbsp;&nbsp;
		<div class="col-sm-10">
			{!! Form::radio('oferta', '1') !!} Si &nbsp;&nbsp;&nbsp;
			{!! Form::radio('oferta', '0') !!} No
		</div>
		</div>

		<div class="form-group">
			{!! Form::label('estatus','¿Activar ?', ['class' => 'col-sm-2 control-label']); !!}
		<div class="col-sm-10">
			{!! Form::radio('estatus', '1') !!} Si &nbsp;&nbsp;&nbsp;
			{!! Form::radio('estatus', '0') !!} No
		</div>
		</div>

		<div class="form-group">
			<a class="btn btn-primary" href="{{ route('inventario.index') }}" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>

			{!! Form::button('Guardar', ['class' => 'btn btn-success', 'id' => 'aceptar']) !!}
		</div>

	{!! Form::close() !!}
</div>

<script type="text/javascript">
$(document).ready(function(){
	$('#precio').priceFormat({
	    prefix: 'Bs ',
	    centsSeparator: ',',
	    thousandsSeparator: '.',
	    centsLimit: 2
	});

	$( "#aceptar").click(function() {
		$('#precio').priceFormat({
		    prefix: '',
		    centsSeparator: '.',
		    thousandsSeparator: '',
		    centsLimit: 2
		});

		 $( "#formorden" ).submit();
		 return true;
	});
});

</script>
@endsection