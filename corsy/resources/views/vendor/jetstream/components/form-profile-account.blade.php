@props(['submit'])

<div {{ $attributes->merge(['class' => 'account-hub-content']) }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="subtitle">{{ $subtitle }}</x-slot>
    </x-jet-section-title>

    <div class="grid-column">
            {{$photo}}
        <div class="widget-box">
            <p class="widget-box-title">Sobre seu perfil</p>
            <div class="widget-box-content">
                    <form id="my-form-user" class="form" wire:submit.prevent="{{ $submit }}">
					    @csrf
                        {{ $form }}
                    <div class="sidebar-box-footer">
                        <br>
                        @if (isset($actions))
                            {{ $actions }}
                        @endif
					</div>
				</form>
			</div>
		</div>
    </div>
</div>
