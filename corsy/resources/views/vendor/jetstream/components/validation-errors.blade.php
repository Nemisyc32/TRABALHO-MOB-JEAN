@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">{{ __('Opa! Algo deu errado.') }}</h4>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
