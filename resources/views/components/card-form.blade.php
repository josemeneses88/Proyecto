<div class="card shadow-sm">
    @isset($titulo)
        <div class="card-header bg-primary rounded-top">
            <h1 class="text-white">{{ $titulo }}</h1>
            @isset($show)
                @if(!$show)
                    <span class="text-white">* Indica que la pregunta es obligatoria</span>
                @endif
            @endisset
        </div>
    @endisset
    <div class="card-body">
        {{ $slot }}
    </div>
</div>
