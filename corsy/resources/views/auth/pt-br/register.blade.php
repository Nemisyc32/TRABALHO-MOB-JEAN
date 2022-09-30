<x-guest-layout>
    <x-jet-authentication-card-auth>

        <h2 class="form-box-title">Crie sua conta!</h2>
        <br>
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" >
            @csrf


            <div class="form-row">
                <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input">
                        <x-jet-label for="name" value="{{ __('Insira seu nome') }}" />
                        <x-jet-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
                    <!-- /FORM INPUT -->
                </div>
            </div>

            <div class="form-row">
                <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input">
                        <x-jet-label for="email" value="{{ __('Insira seu email') }}" />
                        <x-jet-input id="email" type="text" name="email" :value="old('email')" required />
                    </div>
                    <!-- /FORM INPUT -->
                </div>
            </div>

            <div class="form-row">
                <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input">
                        <x-jet-label for="password" value="{{ __('Insira sua senha') }}" />
                        <x-jet-input id="password" type="password" name="password" required autocomplete="new-password" />
                    </div>
                    <!-- /FORM INPUT -->
                </div>
            </div>

            <div class="form-row">
                <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirme sua senha') }}" />
                        <x-jet-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                    <!-- /FORM INPUT -->
                </div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())


                <!-- FORM ROW -->
                <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                    <!-- CHECKBOX WRAP -->
                    <div class="checkbox-wrap">
                        <x-jet-checkbox name="terms" id="terms"/>
                        <!-- CHECKBOX BOX -->
                        <div class="checkbox-box">
                        <!-- ICON CROSS -->
                        <svg class="icon-cross">
                            <use xlink:href="#svg-cross"></use>
                        </svg>
                        <!-- /ICON CROSS -->
                        </div>
                        <!-- /CHECKBOX BOX -->
                        <label for="terms">{!! __('Eu concordo com os :terms_of_service e :privacy_policy', ['terms_of_service' => '<a href="'.route('terms.show').'">'.__('Termos de serviço').'</a>','privacy_policy' => '<a href="'.route('policy.show').'">'.__('Política de Privacidade').'</a>',]) !!}</label>
                    </div>
                    <!-- /CHECKBOX WRAP -->
                    </div>
                    <!-- /FORM ITEM -->
                </div>
            @endif
            <!-- FORM ROW -->
            <div class="form-row">
                <!-- FORM ITEM -->
                <div class="form-item">
                <!-- BUTTON -->
                <x-jet-button class="button medium secondary">
                    {{ __('Registrar') }}
                </x-jet-button>
                <!-- /BUTTON -->
                </div>
                <!-- /FORM ITEM -->
            </div>
            <p class="lined-text">Você já possui uma conta? Logue <a href="{{ route('login') }}">agora!</a></p>
        </form>
    </x-jet-authentication-card-auth>
</x-guest-layout>
