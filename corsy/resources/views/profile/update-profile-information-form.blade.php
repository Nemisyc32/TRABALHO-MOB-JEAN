
<x-jet-form-profile-account submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Meu Perfil') }}
    </x-slot>

    <x-slot name="subtitle">
        {{ __('Informações da conta') }}
    </x-slot>
    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
    <x-slot name="photo">
          <!-- GRID -->
          <div class="grid grid-3-3-3 centered">
            <!-- USER PREVIEW -->
            <div class="user-preview small fixed-height">
              <!-- USER PREVIEW COVER -->
              <figure class="user-preview-cover liquid">
                <img src="{{ asset('assets/img/cover/01.jpg')}}" alt="cover-01">
              </figure>
              <!-- /USER PREVIEW COVER -->
          
              <!-- USER PREVIEW INFO -->
              <div class="user-preview-info">
                <!-- USER SHORT DESCRIPTION -->
                <div class="user-short-description small">
                  <!-- USER SHORT DESCRIPTION AVATAR -->
                  <div class="user-short-description-avatar user-avatar">
                    <!-- USER AVATAR BORDER -->
                    <div class="user-avatar-border">
                      <!-- HEXAGON -->
                      <div class="hexagon-100-110"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BORDER -->
                
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-68-74" data-src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                
                    <!-- USER AVATAR PROGRESS -->
                    <div class="user-avatar-progress">
                      <!-- HEXAGON -->
                      <div class="hexagon-progress-84-92"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR PROGRESS -->
                
                    <!-- USER AVATAR PROGRESS BORDER -->
                    <div class="user-avatar-progress-border">
                      <!-- HEXAGON -->
                      <div class="hexagon-border-84-92"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR PROGRESS BORDER -->
                
                    <!-- USER AVATAR BADGE -->
                    <div class="user-avatar-badge">
                      <!-- USER AVATAR BADGE BORDER -->
                      <div class="user-avatar-badge-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-28-32"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR BADGE BORDER -->
                
                      <!-- USER AVATAR BADGE CONTENT -->
                      <div class="user-avatar-badge-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-dark-22-24"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR BADGE CONTENT -->
                
                      <!-- USER AVATAR BADGE TEXT -->
                      <p class="user-avatar-badge-text">24</p>
                      <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                  </div>
                  <!-- /USER SHORT DESCRIPTION AVATAR -->
                </div>
                <!-- /USER SHORT DESCRIPTION -->
              </div>
              <!-- /USER PREVIEW INFO -->
            </div>
            <!-- /USER PREVIEW -->

            <!-- UPLOAD BOX -->
            <div id="avatar" x-on:click.prevent="$refs.photo.click()" class="upload-box">
              <!-- UPLOAD BOX ICON -->
              <svg class="upload-box-icon icon-members">
                <use xlink:href="#svg-members"></use>
              </svg>
              <!-- /UPLOAD BOX ICON -->
          
              <!-- UPLOAD BOX TITLE -->
              <p class="upload-box-title">Alterar foto</p>
              <!-- /UPLOAD BOX TITLE -->
          
              <!-- UPLOAD BOX TEXT -->
              <p class="upload-box-text">tamanho mínimo de 110 x 110 pixels</p>
              <!-- /UPLOAD BOX TEXT -->
            </div>
            <!-- /UPLOAD BOX -->
          </div>
          <!-- /GRID -->
    </x-slot>
    @endif

    <x-slot name="form">
                <!-- Profile Photo -->
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div class="form-row split">
                    <div x-data="{photoName: null, photoPreview: null}">
                        <!-- Profile Photo File Input -->
                        <input id="photos" type="file" class="hidden"
                                    wire:model="photo"
                                    x-ref="photo"
                                    x-on:change="
                                            photoName = $refs.photo.files[0].name;
                                            const reader = new FileReader();
                                            reader.onload = (e) => {
                                                photoPreview = e.target.result;
                                            };
                                            reader.readAsDataURL($refs.photo.files[0]);
                                    " />
                        @if ($this->user->profile_photo_path)
                        <div class="form-item">
                            <x-jet-secondary-button wire:click="deleteProfilePhoto">
                                {{ __('Deletar') }}
                            </x-jet-secondary-button>
                        </div>
                        @endif
                        <x-jet-input-error for="photo" class="mt-2" />
                    </div>
                </div>
                @endif
                <!-- FORM ROW -->
                <div class="form-row split">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- FORM INPUT -->
                      <div class="form-input small active">
                        <label for="profile-name">Nome do Perfil</label>
                        <x-jet-input id="name" type="text" wire:model.defer="state.name" autocomplete="name" />
                        <x-jet-input-error for="name" class="mt-2" />
                      </div>
                      <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->
  
                    <div class="form-item">
                        <!-- FORM INPUT DECORATED -->
                        <div class="form-input-decorated">
                          <!-- FORM INPUT -->
                          <div class="form-input small active">
                            <label for="profile-birthday">Email</label>
                            <x-jet-input id="email" type="text" wire:model.defer="state.email" />
                            <x-jet-input-error for="email" class="mt-2" />
                            
                            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                            <span class="text-danger">
                                {{ __('Seu endereço de e-mail não foi verificado.') }}
                            </span>
                                <button type="button" class="button secondary" wire:click.prevent="sendEmailVerification">
                                    {{ __('Verificar') }}
                                </button>

                            @if ($this->verificationLinkSent)
                                <p v-show="verificationLinkSent" class="mt-2 font-medium text-sm text-green-600">
                                    {{ __('Um novo link de verificação foi enviado para seu endereço de e-mail.') }}
                                </p>
                            @endif
                        @endif

                          </div>
                          <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM INPUT DECORATED -->
                      </div>

                    <!-- FORM ITEM -->
                    <div class="form-item">
                        <!-- FORM INPUT -->
                        <div class="form-input small active">
                          <label for="profile-name">ID</label>
                          <x-jet-input id="UID" type="text" wire:model.defer="state.id" autocomplete="name" disabled/>
                        </div>
                        <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->
                </div>

                <!-- FORM ROW -->
                <div class="form-row split">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- FORM INPUT -->
                      <div class="form-input small full">
                        <textarea name="description" placeholder="Escreva um pouco sobre você para nossa comunidade..." id="description" wire:model.defer="state.description"></textarea>
                        <x-jet-input-error for="description" class="mt-2" />
                      </div>
                      <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->
  
                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- FORM INPUT -->
                      <div class="form-input small active">
                        <label for="public_email">E-mail público</label>
                        <input type="text" id="public_email" name="public_email" wire:model.defer="state.public_email">
                        <x-jet-input-error for="public_email" class="mt-2" />
                      </div>
                      <!-- /FORM INPUT -->
  
                    <!-- FORM ITEM -->
                    <div class="form-item">
                        <!-- FORM SELECT -->
                        <div class="form-select">
                        <label for="country">País</label>
                        <select wire:model.defer="state.country">
                            <option disabled>Escolha o seu país</option>
                            <option value="1">Brasil</option>
                            <option value="2">United States</option>
                            <option value="3">França</option>
                            <option value="4" >Portugal</option>
                            <option value="5">Russia</option>
                        </select>
                        <!-- FORM SELECT ICON -->
                        <svg class="form-select-icon icon-small-arrow">
                            <use xlink:href="#svg-small-arrow"></use>
                        </svg>
                        <!-- /FORM SELECT ICON -->
                        </div>
                        <x-jet-input-error for="country" class="mt-2" />
                        <!-- /FORM SELECT -->
                    </div>
                    <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ITEM -->
                  </div>
                  <!-- /FORM ROW -->

                  <x-slot name="actions">

                    <x-jet-action-message on="saved">
                      {{ __('As alterações foram realizada com sucesso!') }}
                    </x-jet-action-message>
                  
                  </x-slot>

    </x-slot>
</x-jet-form-profile-account>
