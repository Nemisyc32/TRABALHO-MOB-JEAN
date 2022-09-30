<x-guest-layout>
    <x-jet-authentication-card-auth>

        <!-- FORM BOX TITLE -->
        <h2 class="form-box-title">Faça seu login</h2>
        <!-- /FORM BOX TITLE -->
        <br>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="form-row">
                <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" type="text" name="email" :value="old('email', $request->email)" required autofocus />
                    </div>
                    <!-- /FORM INPUT -->
                </div>
            </div>

            <div class="form-row">
                <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" type="password" name="password" required autocomplete="new-password" />
                    </div>
                    <!-- /FORM INPUT -->
                </div>
            </div>

            <div class="form-row">
                <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-jet-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                    <!-- /FORM INPUT -->
                </div>
            </div>

            <!-- FORM ROW -->
            <div class="form-row">
                <!-- FORM ITEM -->
                <div class="form-item">
                <!-- BUTTON -->
                <x-jet-button class="button medium secondary">
                    {{ __('Resetar') }}
                </x-jet-button>
                <!-- /BUTTON -->
                </div>
                <!-- /FORM ITEM -->
            </div>
            
            <!-- /FORM ROW -->
        </form>
    </x-jet-authentication-card-auth>
</x-guest-layout>
