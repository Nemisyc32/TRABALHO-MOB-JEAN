<x-app-layout>
    <x-slot name="header">
    <!-- SECTION BANNER -->
    <div class="section-banner">
      <!-- SECTION BANNER ICON -->
      <img class="section-banner-icon" src="{{ asset('assets/img/banner/marketplace-icon.png') }}" alt="marketplace-icon">
      <!-- /SECTION BANNER ICON -->
  
      <!-- SECTION BANNER TITLE -->
      <p class="section-banner-title">Marketplace</p>
      <!-- /SECTION BANNER TITLE -->
  
      <!-- SECTION BANNER TEXT -->
      <p class="section-banner-text">O melhor lugar para a comunidade comprar e vender!</p>
      <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->
    </x-slot>


    <!-- GRID -->
    <div class="grid">
      <!-- GRID -->
      <div class="grid grid-half change-on-desktop">
        <!-- ACHIEVEMENT BOX -->
        <div class="achievement-box secondary">
          <!-- ACHIEVEMENT BOX INFO WRAP -->
          <div class="achievement-box-info-wrap">
            <!-- ACHIEVEMENT BOX IMAGE -->
            <img class="achievement-box-image" src="{{ asset('assets/img/badge/verifieds-b.png')}}" alt="AVALIAÇÃO GRATUITA">
            <!-- /ACHIEVEMENT BOX IMAGE -->
      
            <!-- ACHIEVEMENT BOX INFO -->
            <div class="achievement-box-info">
              <!-- ACHIEVEMENT BOX TITLE -->
              <p class="achievement-box-title">REALIZE A LISTAGEM DA SUA PROPRIEDADE DIGITAL</p>
              <!-- /ACHIEVEMENT BOX TITLE -->
      
              <!-- ACHIEVEMENT BOX TEXT -->
              <p class="achievement-box-text"><span class="bold">Tempo: </span> até 5 dias úteis</p>
              <!-- /ACHIEVEMENT BOX TEXT -->
            </div>
            <!-- /ACHIEVEMENT BOX INFO -->
          </div>
          <!-- /ACHIEVEMENT BOX INFO WRAP -->
      
          <!-- BUTTON -->
          <a class="button white-solid" href="#">REALIZAR</a>
          <!-- /BUTTON -->
        </div>
        <!-- /ACHIEVEMENT BOX -->
      
        <!-- ACHIEVEMENT BOX -->
        <div class="achievement-box primary">
          <!-- ACHIEVEMENT BOX INFO WRAP -->
          <div class="achievement-box-info-wrap">
            <!-- ACHIEVEMENT BOX IMAGE -->
            <img class="achievement-box-image" src="{{ asset('assets/img/quest/completedq-l.png')}}" alt="REALIZAR UMA COMPRA">
            <!-- /ACHIEVEMENT BOX IMAGE -->
      
            <!-- ACHIEVEMENT BOX INFO -->
            <div class="achievement-box-info">
              <!-- ACHIEVEMENT BOX TITLE -->
              <p class="achievement-box-title">SOU UM COMPRADOR!</p>
              <!-- /ACHIEVEMENT BOX TITLE -->
      
              <!-- ACHIEVEMENT BOX TEXT -->
              <p class="achievement-box-text"><span class="bold">Tempo: </span> até 2 dias úteis</p>
              <!-- /ACHIEVEMENT BOX TEXT -->
            </div>
            <!-- /ACHIEVEMENT BOX INFO -->
          </div>
          <!-- /ACHIEVEMENT BOX INFO WRAP -->
      
          <!-- BUTTON -->
          <a class="button white-solid" href="#">VISITAR LOJA</a>
          <!-- /BUTTON -->
        </div>
        <!-- /ACHIEVEMENT BOX -->
      </div>
      <!-- /GRID -->

    </div>
    <!-- /GRID -->

    <!-- SECTION HEADER -->
    <div class="section-header">
      <!-- SECTION HEADER INFO -->
      <div class="section-header-info">
        <!-- SECTION PRETITLE -->
        <p class="section-pretitle">Pesquise o que quiser!</p>
        <!-- /SECTION PRETITLE -->
  
        <!-- SECTION TITLE -->
        <h2 class="section-title">Categorias de mercado</h2>
        <!-- /SECTION TITLE -->
      </div>
      <!-- /SECTION HEADER INFO -->
    </div>
    <!-- /SECTION HEADER -->

    <!-- GRID -->
    <div class="grid grid-3-3-3-3 centered">
      <!-- PRODUCT CATEGORY BOX -->
      <a class="product-category-box category-all" href="marketplace-category.html">
        <!-- PRODUCT CATEGORY BOX TITLE -->
        <p class="product-category-box-title">Procurar tudo</p>
        <!-- /PRODUCT CATEGORY BOX TITLE -->
    
        <!-- PRODUCT CATEGORY BOX TEXT -->
        <p class="product-category-box-text">Confira todos os itens</p>
        <!-- /PRODUCT CATEGORY BOX TEXT -->
    
        <!-- PRODUCT CATEGORY BOX TAG -->
        <p class="product-category-box-tag">0 items</p>
        <!-- /PRODUCT CATEGORY BOX TAG -->
      </a>
      <!-- /PRODUCT CATEGORY BOX -->
    
      <!-- PRODUCT CATEGORY BOX -->
      <a class="product-category-box category-featured" href="marketplace-category.html">
        <!-- PRODUCT CATEGORY BOX TITLE -->
        <p class="product-category-box-title">YouTube</p>
        <!-- /PRODUCT CATEGORY BOX TITLE -->
    
        <!-- PRODUCT CATEGORY BOX TEXT -->
        <p class="product-category-box-text">Todos os canais disponiveis para venda do YouTube</p>
        <!-- /PRODUCT CATEGORY BOX TEXT -->
    
        <!-- PRODUCT CATEGORY BOX TAG -->
        <p class="product-category-box-tag">0 items</p>
        <!-- /PRODUCT CATEGORY BOX TAG -->
      </a>
      <!-- /PRODUCT CATEGORY BOX -->
    
      <!-- PRODUCT CATEGORY BOX -->
      <a class="product-category-box category-digital" href="marketplace-category.html">
        <!-- PRODUCT CATEGORY BOX TITLE -->
        <p class="product-category-box-title">TikTok</p>
        <!-- /PRODUCT CATEGORY BOX TITLE -->
    
        <!-- PRODUCT CATEGORY BOX TEXT -->
        <p class="product-category-box-text">Todas as contas disponiveis para a venda do TikTok.</p>
        <!-- /PRODUCT CATEGORY BOX TEXT -->
    
        <!-- PRODUCT CATEGORY BOX TAG -->
        <p class="product-category-box-tag">0 items</p>
        <!-- /PRODUCT CATEGORY BOX TAG -->
      </a>
      <!-- /PRODUCT CATEGORY BOX -->
    
      <!-- PRODUCT CATEGORY BOX -->
      <a class="product-category-box category-physical" href="marketplace-category.html">
        <!-- PRODUCT CATEGORY BOX TITLE -->
        <p class="product-category-box-title">Instagram</p>
        <!-- /PRODUCT CATEGORY BOX TITLE -->
    
        <!-- PRODUCT CATEGORY BOX TEXT -->
        <p class="product-category-box-text">Todos as conta do Instagram disponiveis para a venda.</p>
        <!-- /PRODUCT CATEGORY BOX TEXT -->
    
        <!-- PRODUCT CATEGORY BOX TAG -->
        <p class="product-category-box-tag">0 items</p>
        <!-- /PRODUCT CATEGORY BOX TAG -->
      </a>
      <!-- /PRODUCT CATEGORY BOX -->
    </div>
    <!-- /GRID -->

    <!-- SECTION HEADER -->
    <div class="section-header">
      <!-- SECTION HEADER INFO -->
      <div class="section-header-info">
        <!-- SECTION PRETITLE -->
        <p class="section-pretitle">Veja o que é novo!</p>
        <!-- /SECTION PRETITLE -->
  
        <!-- SECTION TITLE -->
        <h2 class="section-title">Últimos itens</h2>
        <!-- /SECTION TITLE -->
      </div>
      <!-- /SECTION HEADER INFO -->
  
      <!-- SECTION HEADER ACTIONS -->
      <div class="section-header-actions">
        <!-- SECTION HEADER ACTION -->
        <a class="section-header-action" href="marketplace-category.html">Procurar tudo mais recente</a>
        <!-- /SECTION HEADER ACTION -->
      </div>
      <!-- /SECTION HEADER ACTIONS -->
    </div>
    <!-- /SECTION HEADER -->

    <!-- GRID -->
    <div class="grid grid-3-3-3-3 centered">

      <!-- PRODUCT PREVIEW -->
      <div class="product-preview">
        <!-- PRODUCT PREVIEW IMAGE -->
        <a href="marketplace-product.html">
          <figure class="product-preview-image liquid">
            <img src="img/marketplace/items/01.jpg" alt="item-01">
          </figure>
        </a>
        <!-- /PRODUCT PREVIEW IMAGE -->
    
        <!-- PRODUCT PREVIEW INFO -->
        <div class="product-preview-info">
          <!-- TEXT STICKER -->
          <p class="text-sticker"><span class="highlighted">$</span> 12.00</p>
          <!-- /TEXT STICKER -->
    
          <!-- PRODUCT PREVIEW TITLE -->
          <p class="product-preview-title"><a href="marketplace-product.html">Twitch Stream UI Pack</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->
    
          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category digital"><a href="marketplace-category.html">Stream Packs</a></p>
          <!-- /PRODUCT PREVIEW CATEGORY -->
    
          <!-- PRODUCT PREVIEW TEXT -->
          <p class="product-preview-text">Awesome hexagon themed stream pack, you can change all colors and...</p>
          <!-- /PRODUCT PREVIEW TEXT -->
        </div>
        <!-- /PRODUCT PREVIEW INFO -->
    
        <!-- PRODUCT PREVIEW META -->
        <div class="product-preview-meta">
          <!-- PRODUCT PREVIEW AUTHOR -->
          <div class="product-preview-author">
            <!-- PRODUCT PREVIEW AUTHOR IMAGE -->
            <a class="product-preview-author-image user-avatar micro no-border" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-18-20" data-src="img/avatar/01.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->
    
            <!-- PRODUCT PREVIEW AUTHOR TITLE -->
            <p class="product-preview-author-title">Posted By</p>
            <!-- /PRODUCT PREVIEW AUTHOR TITLE -->
    
            <!-- PRODUCT PREVIEW AUTHOR TEXT -->
            <p class="product-preview-author-text"><a href="profile-timeline.html">Marina Valentine</a></p>
            <!-- /PRODUCT PREVIEW AUTHOR TEXT -->
          </div>
          <!-- /PRODUCT PREVIEW AUTHOR -->
    
          <!-- RATING LIST -->
          <div class="rating-list">
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
    
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
    
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
    
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
    
            <!-- RATING -->
            <div class="rating">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
          </div>
          <!-- /RATING LIST -->
        </div>
        <!-- /PRODUCT PREVIEW META -->
      </div>
      <!-- /PRODUCT PREVIEW -->

      <!-- PRODUCT PREVIEW -->
      <div class="product-preview">
        <!-- PRODUCT PREVIEW IMAGE -->
        <a href="marketplace-product.html">
          <figure class="product-preview-image liquid">
            <img src="img/marketplace/items/02.jpg" alt="item-02">
          </figure>
        </a>
        <!-- /PRODUCT PREVIEW IMAGE -->
    
        <!-- PRODUCT PREVIEW INFO -->
        <div class="product-preview-info">
          <!-- TEXT STICKER -->
          <p class="text-sticker"><span class="highlighted">$</span> 34.00</p>
          <!-- /TEXT STICKER -->
    
          <!-- PRODUCT PREVIEW TITLE -->
          <p class="product-preview-title"><a href="marketplace-product.html">Jaxxy Witch Black Frame</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->
    
          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category physical"><a href="marketplace-category.html">Art Prints</a></p>
          <!-- /PRODUCT PREVIEW CATEGORY -->
    
          <!-- PRODUCT PREVIEW TEXT -->
          <p class="product-preview-text">30x60 inches fine art print, with glossy paper and a polymer black frame...</p>
          <!-- /PRODUCT PREVIEW TEXT -->
        </div>
        <!-- /PRODUCT PREVIEW INFO -->
    
        <!-- PRODUCT PREVIEW META -->
        <div class="product-preview-meta">
          <!-- PRODUCT PREVIEW AUTHOR -->
          <div class="product-preview-author">
            <!-- PRODUCT PREVIEW AUTHOR IMAGE -->
            <a class="product-preview-author-image user-avatar micro no-border" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-18-20" data-src="img/avatar/05.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->
    
            <!-- PRODUCT PREVIEW AUTHOR TITLE -->
            <p class="product-preview-author-title">Posted By</p>
            <!-- /PRODUCT PREVIEW AUTHOR TITLE -->
    
            <!-- PRODUCT PREVIEW AUTHOR TEXT -->
            <p class="product-preview-author-text"><a href="profile-timeline.html">Neko Bebop</a></p>
            <!-- /PRODUCT PREVIEW AUTHOR TEXT -->
          </div>
          <!-- /PRODUCT PREVIEW AUTHOR -->
    
          <!-- RATING LIST -->
          <div class="rating-list">
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
    
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
    
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
    
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
    
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
          </div>
          <!-- /RATING LIST -->
        </div>
        <!-- /PRODUCT PREVIEW META -->
      </div>
      <!-- /PRODUCT PREVIEW -->
    </div>
    <!-- /GRID -->

    </x-app-layout>
