<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		@include('layouts.head')
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/easter.js') }}"></script>

        <!-- Libs -->
    </head>
    <body>
		<!-- HEADER -->
		@include('layouts.header')

		<!-- MAIN -->
		<section id="main">
      <h1 class="line anim-typewriter">Sauveteurs du Dunkerquois</h1>
      <h2 class="sentence">270 ans d'histoire !</h2>
      <p>Bienvenue sur le site des sauveteurs du dunkerquois. Ce site rend hommage aux femmes, hommes et enfants qui ont réalisé des actes de sauvetages en milieu aquatique.</p>
      <p>Ces sauveteurs, habitants du dunkerquois (de Bray-Dunes à Grand-Fort-Philippe), ont participé à plus de 900 sauvetages en mer et plus de 1100 sauvetages individuels. Œuvrant avec courage, abnégation et souvent au mépris du risque ils méritent amplement que leurs actes soient pérennisés.</p>
      <br>
      <p>La citation ci-dessous, signée Arsène Bossu, à un journaliste du Grand Echo du Nord de la France en 1932, résume à elle seule l’état d’esprit des sauveteurs du Dunkerquois.</p>
      <br>
      <img class="citation" src="{{ asset('pictures/citation.png') }}">
      <div class="box_pictures">
        <div><img class="picture1" src="{{ asset('pictures/journal.png') }}"></div>
        <div><img class="picture2" src="{{ asset('pictures/semaine.png') }}"></div>
      </div>
    </section>

		<!-- FOOTER -->
		@include('layouts.footer')
    </body>
</html>	