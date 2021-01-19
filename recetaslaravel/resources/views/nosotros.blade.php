<h1>Desde nosotros.blade.php</h1>

@php

     $variable = 20;

@endphp

@if( $variable === 20 )
     
     {{ "Si es 20 "}}

@endif

{{ $variable }}