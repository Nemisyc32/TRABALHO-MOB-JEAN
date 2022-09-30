<!-- NAVIGATION WIDGET -->
<nav x-data="{ open: false }" id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">

    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
    <!-- USER AVATAR -->
    <a class="user-avatar small no-outline online" href="profile-timeline.html">
        <!-- USER AVATAR CONTENT -->
        <div class="user-avatar-content">
          <!-- HEXAGON -->
          <div class="hexagon-image-30-32" data-src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"></div>
          <!-- /HEXAGON -->
        </div>
        <!-- /USER AVATAR CONTENT -->
    
        <!-- USER AVATAR PROGRESS -->
        <div class="user-avatar-progress">
          <!-- HEXAGON -->
          <div class="hexagon-progress-40-44"></div>
          <!-- /HEXAGON -->
        </div>
        <!-- /USER AVATAR PROGRESS -->
    
        <!-- USER AVATAR PROGRESS BORDER -->
        <div class="user-avatar-progress-border">
          <!-- HEXAGON -->
          <div class="hexagon-border-40-44"></div>
          <!-- /HEXAGON -->
        </div>
        <!-- /USER AVATAR PROGRESS BORDER -->
    
        <!-- USER AVATAR BADGE -->
        <div class="user-avatar-badge">
          <!-- USER AVATAR BADGE BORDER -->
          <div class="user-avatar-badge-border">
            <!-- HEXAGON -->
            <div class="hexagon-22-24"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR BADGE BORDER -->
    
          <!-- USER AVATAR BADGE CONTENT -->
          <div class="user-avatar-badge-content">
            <!-- HEXAGON -->
            <div class="hexagon-dark-16-18"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR BADGE CONTENT -->
    
          <!-- USER AVATAR BADGE TEXT -->
          <p class="user-avatar-badge-text">24</p>
          <!-- /USER AVATAR BADGE TEXT -->
        </div>
        <!-- /USER AVATAR BADGE -->
      </a>
      <!-- /USER AVATAR -->
    @endif
      <!--MENU-->
    <ul class="menu small">
        <!-- MENU ITEM -->
        <li class="menu-item {{Request::is('dashboard') ? 'active' : ''}}">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link text-tooltip-tfr" href="{{ route('dashboard') }}" data-title="{{ __('Dashboard') }}">
            <!-- MENU ITEM LINK ICON -->
            <svg class="menu-item-link-icon icon-newsfeed">
              <use xlink:href="#svg-newsfeed"></use>
            </svg>
            <!-- /MENU ITEM LINK ICON -->
          </a>
          <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->

        <!-- MENU ITEM -->
        <li class="menu-item">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link text-tooltip-tfr" href="#" data-title="Marketplace">
            <!-- MENU ITEM LINK ICON -->
            <svg class="menu-item-link-icon icon-marketplace">
              <use xlink:href="#svg-marketplace"></use>
            </svg>
            <!-- /MENU ITEM LINK ICON -->
          </a>
          <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->

        <!-- MENU ITEM -->
        <li class="menu-item">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link text-tooltip-tfr" href="#" data-title="Ticket's de Suporte">
            <!-- MENU ITEM LINK ICON -->
            <svg class="menu-item-link-icon icon-ticket">
              <use xlink:href="#svg-ticket"></use>
            </svg>
            <!-- /MENU ITEM LINK ICON -->
          </a>
          <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->

    </ul></nav>
<!-- /NAVIGATION WIDGET -->

<!-- NAVIGATION WIDGET -->
<nav id="navigation-widget" class="navigation-widget navigation-widget-desktop sidebar left hidden" data-simplebar>
    <!-- NAVIGATION WIDGET COVER -->
    <figure class="navigation-widget-cover liquid">
      <img src="{{ asset('assets/img/cover/01.jpg')}}" alt="cover-01">
    </figure>
    <!-- /NAVIGATION WIDGET COVER -->

    <!-- USER SHORT DESCRIPTION -->
    <div class="user-short-description">
      <!-- USER SHORT DESCRIPTION AVATAR -->
      <a class="user-short-description-avatar user-avatar medium" href="profile-timeline.html">
        <!-- USER AVATAR BORDER -->
        <div class="user-avatar-border">
          <!-- HEXAGON -->
          <div class="hexagon-120-132"></div>
          <!-- /HEXAGON -->
        </div>
        <!-- /USER AVATAR BORDER -->
    
        <!-- USER AVATAR CONTENT -->
        <div class="user-avatar-content">
          <!-- HEXAGON -->
          <div class="hexagon-image-82-90" data-src="{{ Auth::user()->profile_photo_url }}"></div>
          <!-- /HEXAGON -->
        </div>
        <!-- /USER AVATAR CONTENT -->
    
        <!-- USER AVATAR PROGRESS -->
        <div class="user-avatar-progress">
          <!-- HEXAGON -->
          <div class="hexagon-progress-100-110"></div>
          <!-- /HEXAGON -->
        </div>
        <!-- /USER AVATAR PROGRESS -->
    
        <!-- USER AVATAR PROGRESS BORDER -->
        <div class="user-avatar-progress-border">
          <!-- HEXAGON -->
          <div class="hexagon-border-100-110"></div>
          <!-- /HEXAGON -->
        </div>
        <!-- /USER AVATAR PROGRESS BORDER -->
    
        <!-- USER AVATAR BADGE -->
        <div class="user-avatar-badge">
          <!-- USER AVATAR BADGE BORDER -->
          <div class="user-avatar-badge-border">
            <!-- HEXAGON -->
            <div class="hexagon-32-36"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR BADGE BORDER -->
    
          <!-- USER AVATAR BADGE CONTENT -->
          <div class="user-avatar-badge-content">
            <!-- HEXAGON -->
            <div class="hexagon-dark-26-28"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR BADGE CONTENT -->
    
          <!-- USER AVATAR BADGE TEXT -->
          <p class="user-avatar-badge-text">24</p>
          <!-- /USER AVATAR BADGE TEXT -->
        </div>
        <!-- /USER AVATAR BADGE -->
      </a>
      <!-- /USER SHORT DESCRIPTION AVATAR -->

      <!-- USER SHORT DESCRIPTION TITLE -->
      <p class="user-short-description-title"><a href="profile-timeline.html">{{ Auth::user()->name }}</a></p>
      <!-- /USER SHORT DESCRIPTION TITLE -->

      <!-- USER SHORT DESCRIPTION TEXT -->
      <p class="user-short-description-text"><a href="#">www.corsy.com</a></p>
      <!-- /USER SHORT DESCRIPTION TEXT -->
    </div>
    <!-- /USER SHORT DESCRIPTION -->

    <!-- BADGE LIST -->
    <div class="badge-list small">
      <!-- BADGE ITEM -->
      <div class="badge-item">
        <img src="{{ asset('assets/img/badge/gold-s.png')}}" alt="badge-gold-s">
      </div>
      <!-- /BADGE ITEM -->

      <!-- BADGE ITEM -->
      <div class="badge-item">
        <img src="{{ asset('assets/img/badge/age-s.png')}}" alt="badge-age-s">
      </div>
      <!-- /BADGE ITEM -->

      <!-- BADGE ITEM -->
      <div class="badge-item">
        <img src="{{ asset('assets/img/badge/caffeinated-s.png') }}" alt="badge-caffeinated-s">
      </div>
      <!-- /BADGE ITEM -->

      <!-- BADGE ITEM -->
      <div class="badge-item">
        <img src="{{ asset('assets/img/badge/warrior-s.png') }}" alt="badge-warrior-s">
      </div>
      <!-- /BADGE ITEM -->

      <!-- BADGE ITEM -->
      <a class="badge-item" href="profile-badges.html">
        <img src="{{ asset('assets/img/badge/blank-s.png') }}" alt="badge-blank-s">
        <!-- BADGE ITEM TEXT -->
        <p class="badge-item-text">+9</p>
        <!-- /BADGE ITEM TEXT -->
      </a>
      <!-- /BADGE ITEM -->
    </div>
    <!-- /BADGE LIST -->

    <!-- USER STATS -->
    <div class="user-stats">
      <!-- USER STAT -->
      <div class="user-stat">
        <!-- USER STAT TITLE -->
        <p class="user-stat-title">0</p>
        <!-- /USER STAT TITLE -->

        <!-- USER STAT TEXT -->
        <p class="user-stat-text">compras</p>
        <!-- /USER STAT TEXT -->
      </div>
      <!-- /USER STAT -->

      <!-- USER STAT -->
      <div class="user-stat">
        <!-- USER STAT TITLE -->
        <p class="user-stat-title">0</p>
        <!-- /USER STAT TITLE -->

        <!-- USER STAT TEXT -->
        <p class="user-stat-text">$ Max</p>
        <!-- /USER STAT TEXT -->
      </div>
      <!-- /USER STAT -->

      <!-- USER STAT -->
      <div class="user-stat">
        <!-- USER STAT TITLE -->
        <p class="user-stat-title">0</p>
        <!-- /USER STAT TITLE -->

        <!-- USER STAT TEXT -->
        <p class="user-stat-text">vendas</p>
        <!-- /USER STAT TEXT -->
      </div>
      <!-- /USER STAT -->
    </div>
    <!-- /USER STATS -->

    <!-- MENU -->
    <ul class="menu">
      <!-- MENU ITEM -->
      <li class="menu-item {{Request::is('dashboard') ? 'active' : ''}}">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="{{ route('dashboard') }}">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-newsfeed">
            <use xlink:href="#svg-newsfeed"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Dashboard
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="marketplace.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-marketplace">
            <use xlink:href="#svg-marketplace"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Marketplace
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="marketplace.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-ticket">
            <use xlink:href="#svg-ticket"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Ticket's de Suporte
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->
    </ul>
    <!-- /MENU -->
  </nav>
  <!-- /NAVIGATION WIDGET -->

<!-- NAVIGATION WIDGET -->

<!-- NAVIGATION WIDGET -->
<nav id="navigation-widget-mobile" class="navigation-widget navigation-widget-mobile sidebar left hidden" data-simplebar>
        <!-- NAVIGATION WIDGET CLOSE BUTTON -->
        <div class="navigation-widget-close-button">
          <!-- NAVIGATION WIDGET CLOSE BUTTON ICON -->
          <svg class="navigation-widget-close-button-icon icon-back-arrow">
            <use xlink:href="#svg-back-arrow"></use>
          </svg>
          <!-- NAVIGATION WIDGET CLOSE BUTTON ICON -->
        </div>
        <!-- /NAVIGATION WIDGET CLOSE BUTTON -->
    
        <!-- NAVIGATION WIDGET INFO WRAP -->
        <div class="navigation-widget-info-wrap">
          <!-- NAVIGATION WIDGET INFO -->
          <div class="navigation-widget-info">
            <!-- USER AVATAR -->
            <a class="user-avatar small no-outline" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="{{ Auth::user()->profile_photo_url }}"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
          
              <!-- USER AVATAR PROGRESS -->
              <div class="user-avatar-progress">
                <!-- HEXAGON -->
                <div class="hexagon-progress-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS -->
          
              <!-- USER AVATAR PROGRESS BORDER -->
              <div class="user-avatar-progress-border">
                <!-- HEXAGON -->
                <div class="hexagon-border-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS BORDER -->
          
              <!-- USER AVATAR BADGE -->
              <div class="user-avatar-badge">
                <!-- USER AVATAR BADGE BORDER -->
                <div class="user-avatar-badge-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE BORDER -->
          
                <!-- USER AVATAR BADGE CONTENT -->
                <div class="user-avatar-badge-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-dark-16-18"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE CONTENT -->
          
                <!-- USER AVATAR BADGE TEXT -->
                <p class="user-avatar-badge-text">24</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </a>
            <!-- /USER AVATAR -->
    
            <!-- NAVIGATION WIDGET INFO TITLE -->
            <p class="navigation-widget-info-title"><a href="profile-timeline.html">{{ Auth::user()->name }}</a></p>
            <!-- /NAVIGATION WIDGET INFO TITLE -->
    
            <!-- NAVIGATION WIDGET INFO TEXT -->
            <p class="navigation-widget-info-text">Bem vindo de volta!</p>
            <!-- /NAVIGATION WIDGET INFO TEXT -->
          </div>
          <!-- /NAVIGATION WIDGET INFO -->
    
          <!-- NAVIGATION WIDGET BUTTON -->
          <p class="navigation-widget-info-button button small secondary">Deslogar</p>
          <!-- /NAVIGATION WIDGET BUTTON -->
        </div>
        <!-- /NAVIGATION WIDGET INFO WRAP -->
    
        <!-- NAVIGATION WIDGET SECTION TITLE -->
        <p class="navigation-widget-section-title">Sections</p>
        <!-- /NAVIGATION WIDGET SECTION TITLE -->
    
        <!-- MENU -->
        <ul class="menu">
          <!-- MENU ITEM -->
          <li class="menu-item active">
            <!-- MENU ITEM LINK -->
            <a class="menu-item-link" href="newsfeed.html">
              <!-- MENU ITEM LINK ICON -->
              <svg class="menu-item-link-icon icon-newsfeed">
                <use xlink:href="#svg-newsfeed"></use>
              </svg>
              <!-- /MENU ITEM LINK ICON -->
              Newsfeed
            </a>
            <!-- /MENU ITEM LINK -->
          </li>
          <!-- /MENU ITEM -->
    
          <!-- MENU ITEM -->
          <li class="menu-item">
            <!-- MENU ITEM LINK -->
            <a class="menu-item-link" href="overview.html">
              <!-- MENU ITEM LINK ICON -->
              <svg class="menu-item-link-icon icon-overview">
                <use xlink:href="#svg-overview"></use>
              </svg>
              <!-- /MENU ITEM LINK ICON -->
              Overview
            </a>
            <!-- /MENU ITEM LINK -->
          </li>
          <!-- /MENU ITEM -->
    
          <!-- MENU ITEM -->
          <li class="menu-item">
            <!-- MENU ITEM LINK -->
            <a class="menu-item-link" href="groups.html">
              <!-- MENU ITEM LINK ICON -->
              <svg class="menu-item-link-icon icon-group">
                <use xlink:href="#svg-group"></use>
              </svg>
              <!-- /MENU ITEM LINK ICON -->
              Groups
            </a>
            <!-- /MENU ITEM LINK -->
          </li>
          <!-- /MENU ITEM -->
    
          <!-- MENU ITEM -->
          <li class="menu-item">
            <!-- MENU ITEM LINK -->
            <a class="menu-item-link" href="members.html">
              <!-- MENU ITEM LINK ICON -->
              <svg class="menu-item-link-icon icon-members">
                <use xlink:href="#svg-members"></use>
              </svg>
              <!-- /MENU ITEM LINK ICON -->
              Members
            </a>
            <!-- /MENU ITEM LINK -->
          </li>
          <!-- /MENU ITEM -->
    
          <!-- MENU ITEM -->
          <li class="menu-item">
            <!-- MENU ITEM LINK -->
            <a class="menu-item-link" href="badges.html">
              <!-- MENU ITEM LINK ICON -->
              <svg class="menu-item-link-icon icon-badges">
                <use xlink:href="#svg-badges"></use>
              </svg>
              <!-- /MENU ITEM LINK ICON -->
              Badges
            </a>
            <!-- /MENU ITEM LINK -->
          </li>
          <!-- /MENU ITEM -->
    
          <!-- MENU ITEM -->
          <li class="menu-item">
            <!-- MENU ITEM LINK -->
            <a class="menu-item-link" href="quests.html">
              <!-- MENU ITEM LINK ICON -->
              <svg class="menu-item-link-icon icon-quests">
                <use xlink:href="#svg-quests"></use>
              </svg>
              <!-- /MENU ITEM LINK ICON -->
              Quests
            </a>
            <!-- /MENU ITEM LINK -->
          </li>
          <!-- /MENU ITEM -->
    
          <!-- MENU ITEM -->
          <li class="menu-item">
            <!-- MENU ITEM LINK -->
            <a class="menu-item-link" href="streams.html">
              <!-- MENU ITEM LINK ICON -->
              <svg class="menu-item-link-icon icon-streams">
                <use xlink:href="#svg-streams"></use>
              </svg>
              <!-- /MENU ITEM LINK ICON -->
              Streams
            </a>
            <!-- /MENU ITEM LINK -->
          </li>
          <!-- /MENU ITEM -->
    
          <!-- MENU ITEM -->
          <li class="menu-item">
            <!-- MENU ITEM LINK -->
            <a class="menu-item-link" href="events.html">
              <!-- MENU ITEM LINK ICON -->
              <svg class="menu-item-link-icon icon-events">
                <use xlink:href="#svg-events"></use>
              </svg>
              <!-- /MENU ITEM LINK ICON -->
              Events
            </a>
            <!-- /MENU ITEM LINK -->
          </li>
          <!-- /MENU ITEM -->
    
          <!-- MENU ITEM -->
          <li class="menu-item">
            <!-- MENU ITEM LINK -->
            <a class="menu-item-link" href="forums.html">
              <!-- MENU ITEM LINK ICON -->
              <svg class="menu-item-link-icon icon-forums">
                <use xlink:href="#svg-forums"></use>
              </svg>
              <!-- /MENU ITEM LINK ICON -->
              Forums
            </a>
            <!-- /MENU ITEM LINK -->
          </li>
          <!-- /MENU ITEM -->
    
          <!-- MENU ITEM -->
          <li class="menu-item">
            <!-- MENU ITEM LINK -->
            <a class="menu-item-link" href="marketplace.html">
              <!-- MENU ITEM LINK ICON -->
              <svg class="menu-item-link-icon icon-marketplace">
                <use xlink:href="#svg-marketplace"></use>
              </svg>
              <!-- /MENU ITEM LINK ICON -->
              Marketplace
            </a>
            <!-- /MENU ITEM LINK -->
          </li>
          <!-- /MENU ITEM -->
        </ul>
        <!-- /MENU -->
    
        <!-- NAVIGATION WIDGET SECTION TITLE -->
        <p class="navigation-widget-section-title">Meu perfil</p>
        <!-- /NAVIGATION WIDGET SECTION TITLE -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-profile-info.html">Informações do perfil</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-profile-social.html">Social &amp; Stream</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-profile-notifications.html">Notifications</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-profile-messages.html">Messages</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-profile-requests.html">Friend Requests</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION TITLE -->
        <p class="navigation-widget-section-title">Account</p>
        <!-- /NAVIGATION WIDGET SECTION TITLE -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-account-info.html">Account Info</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-account-password.html">Change Password</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-account-settings.html">General Settings</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION TITLE -->
        <p class="navigation-widget-section-title">Groups</p>
        <!-- /NAVIGATION WIDGET SECTION TITLE -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-group-management.html">Manage Groups</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-group-invitations.html">Invitations</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION TITLE -->
        <p class="navigation-widget-section-title">Minha loja</p>
        <!-- /NAVIGATION WIDGET SECTION TITLE -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-store-account.html">Minha conta <span class="highlighted">$250,32</span></a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-store-statement.html">Sales Statement</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-store-items.html">Manage Items</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION TITLE -->
        <p class="navigation-widget-section-title">Main Links</p>
        <!-- /NAVIGATION WIDGET SECTION TITLE -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="#">Home</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="#">Carreiras</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="#">Faqs</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="#">Sobre nós</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="#">Nosso blog</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="#">Contate-nos</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    
        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="#">Política de Privacidade</a>
        <!-- /NAVIGATION WIDGET SECTION LINK --></nav>
<!-- /NAVIGATION WIDGET -->

  <!-- CHAT WIDGET -->
  <aside id="chat-widget-messages" class="chat-widget closed sidebar right">
    <!-- CHAT WIDGET MESSAGES -->
    <div class="chat-widget-messages" data-simplebar>
      <!-- CHAT WIDGET MESSAGE -->
      <div class="chat-widget-message">
        <!-- USER STATUS -->
        <div class="user-status">
          <!-- USER STATUS AVATAR -->
          <div class="user-status-avatar">
            <!-- USER AVATAR -->
            <div class="user-avatar small no-outline online">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="{{ Auth::user()->profile_photo_url}}"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
          
              <!-- USER AVATAR PROGRESS -->
              <div class="user-avatar-progress">
                <!-- HEXAGON -->
                <div class="hexagon-progress-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS -->
          
              <!-- USER AVATAR PROGRESS BORDER -->
              <div class="user-avatar-progress-border">
                <!-- HEXAGON -->
                <div class="hexagon-border-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS BORDER -->
          
              <!-- USER AVATAR BADGE -->
              <div class="user-avatar-badge">
                <!-- USER AVATAR BADGE BORDER -->
                <div class="user-avatar-badge-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE BORDER -->
          
                <!-- USER AVATAR BADGE CONTENT -->
                <div class="user-avatar-badge-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-dark-16-18"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE CONTENT -->
          
                <!-- USER AVATAR BADGE TEXT -->
                <p class="user-avatar-badge-text">16</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </div>
            <!-- /USER AVATAR -->
          </div>
          <!-- /USER STATUS AVATAR -->
      
          <!-- USER STATUS TITLE -->
          <p class="user-status-title"><span class="bold">Raique</span></p>
          <!-- /USER STATUS TITLE -->
      
          <!-- USER STATUS TEXT -->
          <p class="user-status-text small">Deseja me chamar?</p>
          <!-- /USER STATUS TEXT -->
      
          <!-- USER STATUS TIMESTAMP -->
          <p class="user-status-timestamp floaty">2hrs</p>
          <!-- /USER STATUS TIMESTAMP -->
        </div>
        <!-- /USER STATUS -->
      </div>
      <!-- /CHAT WIDGET MESSAGE -->
    </div>
    <!-- /CHAT WIDGET MESSAGES -->

    <!-- CHAT WIDGET FORM -->
    <form class="chat-widget-form">
      <!-- INTERACTIVE INPUT -->
      <div class="interactive-input small">
        <input type="text" id="chat-widget-search" name="chat_widget_search" placeholder="Search Messages...">
        <!-- INTERACTIVE INPUT ICON WRAP -->
        <div class="interactive-input-icon-wrap">
          <!-- INTERACTIVE INPUT ICON -->
          <svg class="interactive-input-icon icon-magnifying-glass">
            <use xlink:href="#svg-magnifying-glass"></use>
          </svg>
          <!-- /INTERACTIVE INPUT ICON -->
        </div>
        <!-- /INTERACTIVE INPUT ICON WRAP -->

        <!-- INTERACTIVE INPUT ACTION -->
        <div class="interactive-input-action">
          <!-- INTERACTIVE INPUT ACTION ICON -->
          <svg class="interactive-input-action-icon icon-cross-thin">
            <use xlink:href="#svg-cross-thin"></use>
          </svg>
          <!-- /INTERACTIVE INPUT ACTION ICON -->
        </div>
        <!-- /INTERACTIVE INPUT ACTION -->
      </div>
      <!-- /INTERACTIVE INPUT -->
    </form>
    <!-- /CHAT WIDGET FORM -->

    <!-- CHAT WIDGET BUTTON -->
    <div class="chat-widget-button">
      <!-- CHAT WIDGET BUTTON ICON -->
      <div class="chat-widget-button-icon">
        <!-- BURGER ICON -->
        <div class="burger-icon">
          <!-- BURGER ICON BAR -->
          <div class="burger-icon-bar"></div>
          <!-- /BURGER ICON BAR -->

          <!-- BURGER ICON BAR -->
          <div class="burger-icon-bar"></div>
          <!-- /BURGER ICON BAR -->

          <!-- BURGER ICON BAR -->
          <div class="burger-icon-bar"></div>
          <!-- /BURGER ICON BAR -->
        </div>
        <!-- /BURGER ICON -->
      </div>
      <!-- /CHAT WIDGET BUTTON ICON -->

      <!-- CHAT WIDGET BUTTON TEXT -->
      <p class="chat-widget-button-text">Mensagem / Chat</p>
      <!-- /CHAT WIDGET BUTTON TEXT -->
    </div>
    <!-- /CHAT WIDGET BUTTON -->
  </aside>
  <!-- /CHAT WIDGET -->

