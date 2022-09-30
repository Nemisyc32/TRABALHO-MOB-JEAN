<x-app-layout>
    <x-slot name="header">
    <!-- SECTION BANNER -->
    <div class="section-banner">
        <!-- SECTION BANNER ICON -->
        <img class="section-banner-icon" src="{{ asset('assets/img/banner/accounthub-icon.png')}}" alt="accounthub-icon">
        <!-- /SECTION BANNER ICON -->
    
        <!-- SECTION BANNER TITLE -->
        <p class="section-banner-title">Central de contas</p>
        <!-- /SECTION BANNER TITLE -->
    
        <!-- SECTION BANNER TEXT -->
        <p class="section-banner-text">Informações de perfil, mensagens, configurações e muito mais!</p>
        <!-- /SECTION BANNER TEXT -->
      </div>
      <!-- /SECTION BANNER -->
    </x-slot>



    <!-- GRID -->
    <div class="grid grid-3-9 medium-space">
      <!-- GRID COLUMN -->
      <div class="account-hub-sidebar">
        <!-- SIDEBAR BOX -->
        <div class="sidebar-box no-padding">
          <!-- SIDEBAR MENU -->
          <div class="sidebar-menu">
            <!-- SIDEBAR MENU ITEM -->
            <div class="sidebar-menu-item">
              <!-- SIDEBAR MENU HEADER -->
              <div class="sidebar-menu-header accordion-trigger-linked">
                <!-- SIDEBAR MENU HEADER ICON -->
                <svg class="sidebar-menu-header-icon icon-profile">
                  <use xlink:href="#svg-profile"></use>
                </svg>
                <!-- /SIDEBAR MENU HEADER ICON -->

                <!-- SIDEBAR MENU HEADER CONTROL ICON -->
                <div class="sidebar-menu-header-control-icon">
                  <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                  <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                    <use xlink:href="#svg-minus-small"></use>
                  </svg>
                  <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                  <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                  <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                </div>
                <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

                <!-- SIDEBAR MENU HEADER TITLE -->
                <p class="sidebar-menu-header-title">Meu Perfil</p>
                <!-- /SIDEBAR MENU HEADER TITLE -->

                <!-- SIDEBAR MENU HEADER TEXT -->
                <p class="sidebar-menu-header-text">Altere seu avatar &amp; cobrir, aceitar amigos, ler mensagens e muito mais!</p>
                <!-- /SIDEBAR MENU HEADER TEXT -->
              </div>
              <!-- /SIDEBAR MENU HEADER -->

              <!-- SIDEBAR MENU BODY -->
              <div class="sidebar-menu-body accordion-content-linked accordion-open">
                <!-- SIDEBAR MENU LINK -->
                <a class="sidebar-menu-link active" href="{{ route('profile.show')}}">Informações do Perfil</a>
                <!-- /SIDEBAR MENU LINK -->

                <!-- SIDEBAR MENU LINK -->
                <a class="sidebar-menu-link" href="hub-profile-notifications.html">Notificações</a>
                <!-- /SIDEBAR MENU LINK -->

                <!-- SIDEBAR MENU LINK -->
                <a class="sidebar-menu-link" href="hub-profile-messages.html">Mensagem</a>
                <!-- /SIDEBAR MENU LINK -->
              </div>
              <!-- /SIDEBAR MENU BODY -->
            </div>
            <!-- /SIDEBAR MENU ITEM -->

            <!-- SIDEBAR MENU ITEM -->
            <div class="sidebar-menu-item">
              <!-- SIDEBAR MENU HEADER -->
              <div class="sidebar-menu-header accordion-trigger-linked">
                <!-- SIDEBAR MENU HEADER ICON -->
                <svg class="sidebar-menu-header-icon icon-settings">
                  <use xlink:href="#svg-settings"></use>
                </svg>
                <!-- /SIDEBAR MENU HEADER ICON -->

                <!-- SIDEBAR MENU HEADER CONTROL ICON -->
                <div class="sidebar-menu-header-control-icon">
                  <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                  <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                    <use xlink:href="#svg-minus-small"></use>
                  </svg>
                  <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                  <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                  <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                </div>
                <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

                <!-- SIDEBAR MENU HEADER TITLE -->
                <p class="sidebar-menu-header-title">Conta</p>
                <!-- /SIDEBAR MENU HEADER TITLE -->

                <!-- SIDEBAR MENU HEADER TEXT -->
                <p class="sidebar-menu-header-text"> Altere as configurações, configure notificações e revise sua privacidade</p>
                <!-- /SIDEBAR MENU HEADER TEXT -->
              </div>
              <!-- /SIDEBAR MENU HEADER -->

              <!-- SIDEBAR MENU BODY -->
              <div class="sidebar-menu-body accordion-content-linked">
                <!-- SIDEBAR MENU LINK -->
                <a class="sidebar-menu-link" href="hub-account-info.html">Informações da conta</a>
                <!-- /SIDEBAR MENU LINK -->

                <!-- SIDEBAR MENU LINK -->
                <a class="sidebar-menu-link" href="hub-account-password.html">Alterar sua senha</a>
                <!-- /SIDEBAR MENU LINK -->

                <!-- SIDEBAR MENU LINK -->
                <a class="sidebar-menu-link" href="hub-account-settings.html">Configurações Gerais</a>
                <!-- /SIDEBAR MENU LINK -->
              </div>
              <!-- /SIDEBAR MENU BODY -->
            </div>
            <!-- /SIDEBAR MENU ITEM -->

            <!-- SIDEBAR MENU ITEM -->
            <div class="sidebar-menu-item">
              <!-- SIDEBAR MENU HEADER -->
              <div class="sidebar-menu-header accordion-trigger-linked">
                <!-- SIDEBAR MENU HEADER ICON -->
                <svg class="sidebar-menu-header-icon icon-store">
                  <use xlink:href="#svg-store"></use>
                </svg>
                <!-- /SIDEBAR MENU HEADER ICON -->

                <!-- SIDEBAR MENU HEADER CONTROL ICON -->
                <div class="sidebar-menu-header-control-icon">
                  <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                  <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                    <use xlink:href="#svg-minus-small"></use>
                  </svg>
                  <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                  <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                  <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                </div>
                <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

                <!-- SIDEBAR MENU HEADER TITLE -->
                <p class="sidebar-menu-header-title">Minha loja</p>
                <!-- /SIDEBAR MENU HEADER TITLE -->

                <!-- SIDEBAR MENU HEADER TEXT -->
                <p class="sidebar-menu-header-text">Revise sua conta, gerencie estatísticas de verificação de produtos e muito mais!</p>
                <!-- /SIDEBAR MENU HEADER TEXT -->
              </div>
              <!-- /SIDEBAR MENU HEADER -->

              <!-- SIDEBAR MENU BODY -->
              <div class="sidebar-menu-body accordion-content-linked">
                <!-- SIDEBAR MENU LINK -->
                <a class="sidebar-menu-link" href="hub-store-account.html">Minha conta</a>
                <!-- /SIDEBAR MENU LINK -->

                <!-- SIDEBAR MENU LINK -->
                <a class="sidebar-menu-link" href="hub-store-statement.html">Declaração de vendas</a>
                <!-- /SIDEBAR MENU LINK -->

                <!-- SIDEBAR MENU LINK -->
                <a class="sidebar-menu-link" href="hub-store-items.html">Manage Items</a>
                <!-- /SIDEBAR MENU LINK -->

              </div>
              <!-- /SIDEBAR MENU BODY -->
            </div>
            <!-- /SIDEBAR MENU ITEM -->
          </div>
          <!-- /SIDEBAR MENU -->

          <!-- SIDEBAR BOX FOOTER -->
          <div class="sidebar-box-footer">
            <!-- BUTTON -->
            <button form="my-form-user" class="button primary">Salvar alterações!</button>
            <!-- /BUTTON -->

            <!-- BUTTON -->
            <button class="button white small-space">Descartar Alterações</button>
            <!-- /BUTTON -->
          </div>
          <!-- /SIDEBAR BOX FOOTER -->
        </div>
        <!-- /SIDEBAR BOX -->
      </div>
      <!-- /GRID COLUMN -->

      @if (Laravel\Fortify\Features::canUpdateProfileInformation())
      @livewire('profile.update-profile-information-form')

      <x-jet-section-border />
    @endif
    </div>
    <!-- /GRID -->

</x-app-layout>
