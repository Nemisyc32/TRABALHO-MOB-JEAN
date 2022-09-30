<x-guest-layout>
    <x-jet-authentication-card-auth>

        <!-- FORM BOX TITLE -->
        <h2 class="form-box-title">Faça seu login</h2>
        <!-- /FORM BOX TITLE -->
        <br>
        <x-jet-validation-errors />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-row">
                <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input">
                        <x-jet-label for="email" value="{{ __('Email ou usuário') }}" />
                        <x-jet-input id="email" type="text" name="email" :value="old('email')" required autofocus />
                    </div>
                    <!-- /FORM INPUT -->
                </div>
            </div>
            <div class="form-row">
                <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input">
                        <x-jet-label for="password" value="{{ __('Senha') }}" />
                        <x-jet-input id="password" type="password" name="password" required autocomplete="current-password" />
                    </div>
                    <!-- /FORM INPUT -->
                </div>
            </div>
          <!-- FORM ROW -->
          <div class="form-row space-between">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- CHECKBOX WRAP -->
              <div class="checkbox-wrap">
                <input type="checkbox" id="login-remember" name="login_remember" checked>
                <x-jet-checkbox id="remember_me" name="remember" checked/>
                <!-- CHECKBOX BOX -->
                <div class="checkbox-box">
                  <!-- ICON CROSS -->
                  <svg class="icon-cross">
                    <use xlink:href="#svg-cross"></use>
                  </svg>
                  <!-- /ICON CROSS -->
                </div>
                <!-- /CHECKBOX BOX -->
                <label for="login-remember">{{ __('Lembrar-me') }}</label>
              </div>
              <!-- /CHECKBOX WRAP -->
            </div>
            <!-- /FORM ITEM -->
    
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM LINK -->
            @if (Route::has('password.request'))
              <a class="form-link" href="{{ route('password.request') }}">
                  {{ __('Esqueceu sua senha?') }}
              </a>
            @endif
              <!-- /FORM LINK -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row">
                <!-- FORM ITEM -->
                <div class="form-item">
                <!-- BUTTON -->
                <x-jet-button class="button medium secondary">
                    {{ __('Logar') }}
                </x-jet-button>
                <!-- /BUTTON -->
                </div>
                <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->
            <p class="lined-text">Não é registrado? Registre-se <a href="<?= route('register');?>">agora!</a></p>
        </form>
    </x-jet-authentication-card-auth>
</x-guest-layout>
