<x-guest-layout>
    <x-jet-authentication-card-auth>

        <h2 class="form-box-title">Esqueceu a senha</h2>
        <!-- /FORM BOX TITLE -->
        <center><p class="form-text">
            {{ __('Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e nós lhe enviaremos um link de redefinição de senha que permitirá que você escolha uma nova.') }}
        </p></center>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-row">
                <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" type="text" name="email" :value="old('email')" required autofocus />
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
                    {{ __('Enviar link de redefinição de senha para o email') }}
                </x-jet-button>
                <!-- /BUTTON -->
                </div>
                <!-- /FORM ITEM -->
            </div>
            <p class="lined-text">Não é registrado? Registre-se <a href="<?= route('register');?>">agora!</a></p>
            <p class="lined-text">Já possui uma conta? Logue <a href="{{ route('login') }}">agora!</a></p>
            <!-- /FORM ROW -->
        </form>
    </x-jet-authentication-card-auth>
</x-guest-layout>
