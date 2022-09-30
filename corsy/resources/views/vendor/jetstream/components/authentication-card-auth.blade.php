
<div class="landing-form">
    <div class="form-box login-register-form-element">

        <img class="form-box-decoration overflowing" src="{{ asset('assets/img/landing/rocket.png')}}" alt="rocket">


        <div class="form-row split">
            <div class="form-item">
              <div class="form-select">
              <label>Idioma: </label>
                <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                  <option value="" selected>Português-BR</option>
                  <option value="">English</option>
                  <option value="">Espanish</option>
                </select>
  
              <svg class="form-select-icon icon-small-arrow">
                  <use xlink:href="#svg-small-arrow"></use>
              </svg>
              </div>
            </div>
          </div>
          <br>

        {{ $slot }}
    </div>
</div>
