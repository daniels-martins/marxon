@props(['fieldname'])

@error($fieldname)
    {{-- @if (\Route::currentRouteNamed('landingpage') or \Route::currentRouteNamed('contact'))
        <div class="text-danger"><small>{{ str_replace('visitor', '', $message) }}</small></div>
    @else --}}
    <div class=""><small class="text-warning">{{ $message }}</small></div>
    {{-- @endif --}}
@enderror
