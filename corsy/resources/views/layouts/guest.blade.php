<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Corsy') }} - Painel</title>

        <!-- bootstrap 4.3.1 -->
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
        <!-- styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
        <!-- favicon -->
        <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}">

    </head>
    <body>
  <!-- LANDING -->
  <div class="landing">
    <!-- LANDING DECORATION -->
    <div class="landing-decoration"></div>
    <!-- /LANDING DECORATION -->

    <!-- LANDING INFO -->
    <div class="landing-info">
        <!-- LOGO -->
        <div class="logo">
          <!-- ICON LOGO VIKINGER -->
          <svg class="icon-logo-vikinger">
            <use xlink:href="#svg-logo-vikinger"></use>
          </svg>
          <!-- /ICON LOGO VIKINGER -->
        </div>
        <!-- /LOGO -->
  
        <!-- LANDING INFO PRETITLE -->
        <h2 class="landing-info-pretitle">Bem vindos(a) a</h2>
        <!-- /LANDING INFO PRETITLE -->
  
        <!-- LANDING INFO TITLE -->
        <h1 class="landing-info-title">Corsy LTDA</h1>
        <!-- /LANDING INFO TITLE -->
  
        <!-- LANDING INFO TEXT -->
        <p class="landing-info-text">Corsy a melhor plataforma de vendas de propriedades digitais da America. Realize a venda do seu canal do YouTube, TikTok ou Instagram com segurança e transparência na melhor plataforma.</p>
        <!-- /LANDING INFO TEXT -->
      </div>
      <!-- /LANDING INFO -->

      {{ $slot }}

    </div>
        <!-- app -->
        <script src="{{ asset('assets/js/app.bundle.min.js') }}"></script>
    </body>
</html>
