@php
    $edit = !is_null($dataTypeContent->getKey());
    $add  = is_null($dataTypeContent->getKey());

    
@endphp

@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form"
                            class="form-edit-add"
                            action="{{ $edit ? route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) : route('voyager.'.$dataType->slug.'.store') }}"
                            method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->
                        @if($edit)
                            {{ method_field("PUT") }}
                        @endif

                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div>{{ $dataType->slug }}</div>


                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Adding / Editing -->
                            @php
                                $dataTypeRows = $dataType->{($edit ? 'editRows' : 'addRows' )};
                            @endphp

@foreach($dataTypeRows as $row)


    <!-- GET THE DISPLAY OPTIONS -->
    @php
        $display_options = $row->details->display ?? NULL;
        if ($dataTypeContent->{$row->field.'_'.($edit ? 'edit' : 'add')}) {
            $dataTypeContent->{$row->field} = $dataTypeContent->{$row->field.'_'.($edit ? 'edit' : 'add')};
        }
    @endphp
    @if (isset($row->details->legend) && isset($row->details->legend->text))
        <legend class="text-{{ $row->details->legend->align ?? 'center' }}" style="background-color: {{ $row->details->legend->bgcolor ?? '#f0f0f0' }};padding: 5px;">{{ $row->details->legend->text }}</legend>
    @endif

    <div class="form-group @if($row->type == 'hidden') hidden @endif col-md-{{ $display_options->width ?? 12 }} {{ $errors->has($row->field) ? 'has-error' : '' }}" @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
        {{ $row->slugify }}
        <label class="control-label" for="{{ $row->field }}">{{ $row->getTranslatedAttribute('display_name') }}</label>
        @include('voyager::multilingual.input-hidden-bread-edit-add')
        @if ($row->type == 'price')
            <!-- Renderizar campo de tipo price -->
            <input type="text" class="form-control" id="{{ $row->field }}" name="{{ $row->field }}" value="{{ old($row->field, $dataTypeContent->{$row->field}) }}">
        @elseif ($row->type == 'relationship')
            <!-- Renderizar campo de tipo relationship -->
            @include('voyager::formfields.relationship', ['options' => $row->details])
        @else
            <!-- Renderizar otros tipos de campos utilizando formField() -->
            {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
        @endif

        @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
            {!! $after->handle($row, $dataType, $dataTypeContent) !!}
        @endforeach
        @if ($errors->has($row->field))
            @foreach ($errors->get($row->field) as $error)
                <span class="help-block">{{ $error }}</span>
            @endforeach
        @endif
    </div>
@endforeach

    </div><!-- panel-body -->
       <div class="panel">
            <div class="panel-header text-center text-success">
                        Cantidades

            </div>
            <div class="panel-body ">

                        
                    <table id="tabla" style="margin: 0 auto" >
                    </table>     
                    </div>
            </div>
       </div>                 
   
                        <div class="panel-footer">
                            @section('submit-buttons')
                                <button type="submit" class="btn btn-success save">{{ __('voyager::generic.save') }}</button>
                            @stop
                            @yield('submit-buttons')
                        </div>
                    </form>
                    <iframe id="form_target" name="form_target" style="display:none"></iframe>
                    <form id="my_form" action="{{ route('voyager.upload')}}" target="form_target" method="post"
                            enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
                        <input name="image" id="upload_file" type="file"
                                 onchange="$('#my_form').submit();this.value='';">
                        <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-danger" id="confirm_delete_modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}</h4>
                </div>

                <div class="modal-body">
                    <h4>{{ __('voyager::generic.are_you_sure_delete') }} '<span class="confirm_delete_name"></span>'</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                    <button type="button" class="btn btn-danger" id="confirm_delete">{{ __('voyager::generic.delete_confirm') }}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete File Modal -->
@stop

@section('javascript')
<style>
#tabla, th, td {
  border: 1px solid #CCC;
  padding:4px;
}
</style>
    <script>
var table = document.getElementById("tabla");
table.setAttribute("style", "border:1px solid #000; margin: 0 auto");
// Create an empty <tr> element and add it to the 1st position of the table:
var row = table.insertRow(0);

// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:



@php

$i=0;
if($dataTypeContent->id){
$pack = DB::select("SELECT det_product_packages.*, products.name FROM det_product_packages INNER JOIN products ON products.id=det_product_packages.products_id WHERE packages_id='$dataTypeContent->id'");

echo "var data= new Array(".count($pack).");";                                
                        
        foreach($pack as $valor){

echo "
    var row = table.insertRow(".$i.");
        
        row.insertCell().innerHTML= '".$valor->name."';
        row.insertCell().innerHTML= \"<input name='cantidad[".$valor->products_id."]' type='number' min='1' value='".($valor->cant ? $valor->cant : 0)."'>\";

        data[$valor->products_id]=".($valor->cant ? $valor->cant : 0).";
       
        
       
        ";

        $i++;  

       }
    }else{
        echo "var data= new Array();"; 

    }
         echo "var i=".$i;

                            @endphp
                            /*
$.each($(".select2-ajax option:selected"), function(){     
         
         var row = table.insertRow(i);
        
         row.insertCell().innerHTML= $(this).text();
         row.insertCell().innerHTML= "<input name='cantidad["+$(this).val()+"]' type='number' min='1' value='1'>";

         
         i++
     });
*/
$(".select2-ajax").on('change', function(){
   
//alert($(this).children("option:selected").val());
    while(table.rows.length > 0) {
  table.deleteRow(0);
}  
    var countries = [];
        i=0;
        $.each($(".select2-ajax option:selected"), function(){     
         if(data[$(this).val()]){
             val=data[$(this).val()];
         }else{
             val=1;
         }
            var row = table.insertRow(i);
            countries.push($(this).val());
            row.insertCell().innerHTML= $(this).text();
            row.insertCell().innerHTML= "<input name='cantidad["+$(this).val()+"]' type='number' min='1' value='"+val+"'>";

            
            i++
        });
        // alert("You have selected the country - " + countries.join("<input type='text'> "));
});



        var params = {};
        var $file;

        function deleteHandler(tag, isMulti) {
          return function() {
            $file = $(this).siblings(tag);

            params = {
                slug:   '{{ $dataType->slug }}',
                filename:  $file.data('file-name'),
                id:     $file.data('id'),
                field:  $file.parent().data('field-name'),
                multi: isMulti,
                _token: '{{ csrf_token() }}'
            }

            $('.confirm_delete_name').text(params.filename);
            $('#confirm_delete_modal').modal('show');
          };
        }

        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();

            //Init datepicker for date fields if data-datepicker attribute defined
            //or if browser does not handle date inputs
            $('.form-group input[type=date]').each(function (idx, elt) {
                if (elt.hasAttribute('data-datepicker')) {
                    elt.type = 'text';
                    $(elt).datetimepicker($(elt).data('datepicker'));
                } else if (elt.type != 'date') {
                    elt.type = 'text';
                    $(elt).datetimepicker({
                        format: 'L',
                        extraFormats: [ 'YYYY-MM-DD' ]
                    }).datetimepicker($(elt).data('datepicker'));
                }
            });

            @if ($isModelTranslatable)
                $('.side-body').multilingual({"editing": true});
            @endif

            $('.side-body input[data-slug-origin]').each(function(i, el) {
                $(el).slugify();
            });

            $('.form-group').on('click', '.remove-multi-image', deleteHandler('img', true));
            $('.form-group').on('click', '.remove-single-image', deleteHandler('img', false));
            $('.form-group').on('click', '.remove-multi-file', deleteHandler('a', true));
            $('.form-group').on('click', '.remove-single-file', deleteHandler('a', false));

            $('#confirm_delete').on('click', function(){
                $.post('{{ route('voyager.'.$dataType->slug.'.media.remove') }}', params, function (response) {
                    if ( response
                        && response.data
                        && response.data.status
                        && response.data.status == 200 ) {

                        toastr.success(response.data.message);
                        $file.parent().fadeOut(300, function() { $(this).remove(); })
                    } else {
                        toastr.error("Error removing file.");
                    }
                });

                $('#confirm_delete_modal').modal('hide');
            });
            $('[data-toggle="tooltip"]').tooltip();
        });

    

    </script>
@stop
