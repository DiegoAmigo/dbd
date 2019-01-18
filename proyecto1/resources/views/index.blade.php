@extends('layouts.app')

@section('content')
   <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                
                {!! Form::text('search_text', null, array('placeholder' => 'Search Text','class' => 'form-control','id'=>'search_text')) !!}
            </div>
        </div>
    </div>
    
   <script>
   $(document).ready(function() {
    src = "{{ route('searchajax') }}";
     $("#search_text").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term
                },
                success: function(data) {
                    response(data);
                   
                }
            });
        },
        minLength: 3,
       
    });
});
</script>
@endsection