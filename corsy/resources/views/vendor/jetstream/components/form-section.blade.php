@props(['submit'])

<div {{ $attributes->merge(['class' => 'account-hub-content']) }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="subtitle">{{ $subtitle }}</x-slot>
    </x-jet-section-title>

    <div class="grid-column">
            
            <form id="my-form-user" class="form" wire:submit.prevent="{{ $submit }}">
                <div class="form-row split {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                        {{ $form }}
                </div>

                @if (isset($actions))
                        {{ $actions }}
                @endif
            </form>
        </div>
    </div>
</div>
