@if ($toko->template == 1)
    @include('template.1')
@elseif($toko->template == 2)
    @include('template.2')
@endif
