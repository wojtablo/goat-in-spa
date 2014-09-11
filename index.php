<?php
/**
 * Created by PhpStorm.
 * User: Dev
 * Date: 11.09.14
 * Time: 16:16
 */

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Fundacja Koźmińskich</title>
    <link rel="stylesheet" href="stylesheets/app.css" />

  </head>
  <body id="home">

      <div id="globalContainer">

        <!-- Sekcja 1. Strona powitalna -->
        <section id="section-1" class="rowWrapper rowSlide section__home">
            <!-- Row #1 -->
            <div class="row row-1">
                <div class="large-12 columns fundacja__logo">
                    <img class="logo" src="gfx/1_logo.png" alt="Fundacja Koźmińskich" />
                </div>
            </div>
            <!-- Row #2 -->
            <div class="row row-2">
                <div class="large-12 columns">
                    <header class="section__header text-center">
                        <h1 class="section__title">
Witamy na stronie<span>Fundacji</span>
                        </h1>
                    </header>
                    <div class="section__content medium-text-right small-text-center">
                    </div>
                </div>
            </div>
            <a class="btn__arrow--down" href="#section-2"></a>
        </section>

        <section id="top--nav" class="contain-to-grid sticky">
            <nav class="top-bar" data-topbar role="navigation">
                <ul class="title-area">
                    <li class="name"><h1><a href="#home"><img src="gfx/M_logo.png" alt="" /></a></h1></li>
                    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
                </ul>
                <section class="top-bar-section"> <!-- Right Nav Section -->
                    <ul class="right">
                        <li><a href="#section-1">Misja</a></li>
                        <li><a href="#section-11">Aktualności</a></li>
                        <li><a href="#section-4">O Fundacji</a></li>
                        <li><a href="#section-5">Rada i Zarząd</a></li>
                        <li><a href="#section-5">Statut</a></li>
                        <li><a href="#section-5">Sprawozdania finansowe</a></li>
                        <li><a href="#section-5">Partnerzy fundacji</a></li>
                        <li><a href="#section-5">Kontakt</a></li>
                    </ul>
                </section>
            </nav>

        </section>

        <!-- Sekcja 2. Misja -->
        <section id="section-2" class="rowWrapper rowSlide section__misja section--hasArrow">
            <div class="row">
                <div class="large-12 columns">
                    <header class="section__header text-center">
                        <h1 class="section__title">
Misja
                        </h1>
                        <h3 class="section__subtitle">
                            <span class="sep sep--top"></span>
                            <span class="first__line">Aktywne wspieranie postaw przedsiębiorczych</span> oraz inicjowanie międzykulturowej wymiany doświadczeń.
                            <span class="sep sep--bottom"></span>
                        </h3>
                    </header>
                    <div class="section__content"></div>
                </div>
                <figure class="crossSectionArrow--right"><img src="gfx/9_strzalka.png" alt="" title=""/></figure>
            </div>
        </section>

        <!-- Sekcja 3. Działalność -->
        <section id="section-3" class="rowWrapper rowSlide section__dzialalnosc">
            <div class="row">
                <div class="large-12 columns">
                    <header class="section__header text-center">
                        <h2 class="section__title">Zakres działalności Fundacji:</h2>
                    </header>
                    <div class="section__content">
                        <div id="slider-dzialalnosc" class="royalSlider contentSlider rsDefault">
                            <div class="__events--slide">
                                <div class="__event">
                                    <div class="__wrapper" >
                                        <div class="__sep" >&nbsp;</div>
                                        <div class="__container" >
                                            <span class="__icon"></span>
                                            <div class="__info">
                                                <a class="news__title" href="#" title="">Wybieramy najlepszych</a>
                                                <p class="news__intro">Program stypendialny</p>
                                                <div class="xx">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean accumsan nisi ac pulvinar laoreet. </p>
                                                    <p>Nam sollicitudin leo sit amet sollicitudin tincidunt. Nullam sit amet elementum metus, eget gravida elit. Fusce blandit luctus diam, luctus tincidunt felis. Fusce eros dolor, dictum et urna et, ornare dignissim libero. Sed convallis magna neque, eget dictum lacus rutrum in. Nunc sed viverra quam. Sed lacinia tincidunt nunc. Mauris in risus nec dui gravida varius. Integer viverra viverra sapien.</p>
                                                </div>
                                                <a class="news__more" href="#">Czytaj więcej</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="__event">
                                    <div class="__wrapper">
                                        <div class="__container">
                                            <div class="__info">
                                                <a class="news__title" href="#" title="">
    Przybliżanie nauki studentom,
                                                    środowiskom biznesowym
</a>
                                                <p class="news__intro">
i aktywistom społecznym.<br/>
                                                    Upowszechnianie idei uczenia
                                                    się przez cale życie.
                                                </p>
                                                <p class="xx">xxxxxxxxxxxxxx</p>
                                                <a class="news__more" href="#">Czytaj więcej</a>
                                            </div>
                                        </div>
                                        <div class="__sep">
                                            <span class="__icon"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="__event">
                                    <div class="__wrapper">
                                        <div class="__sep">&nbsp;</div>
                                        <div class="__container">
                                            <span class="__icon"></span>
                                            <div class="__info">
                                                <a class="news__title" href="#" title="">Wybieramy najlepszych</a>
                                                <p class="news__intro">Program stypendialny</p>
                                                <p class="xx">xxxxxxxxxxxxxx</p>
                                                <a class="news__more" href="#" >Czytaj więcej</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="__events--slide">
                                <div class="__event">
                                    <div class="__wrapper" data-equalizer>
                                        <div class="__sep" data-equalizer-watch>&nbsp;</div>
                                        <div class="__container" data-equalizer-watch>
                                            <span class="__icon"></span>
                                            <div class="__info">
                                                <a class="news__title" href="#" title="">Wybieramy najlepszych</a>
                                                <p class="news__intro">Program stypendialny</p>
                                                <p class="xx">xxxxxxxxxxxxxx</p>
                                                <a class="news__more" href="#">Czytaj więcej</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="__event">
                                    <div class="__wrapper">
                                        <div class="__container">
                                            <div class="__info">
                                                <a class="news__title" href="#" title="">
    Przybliżanie nauki studentom,
                                                    środowiskom biznesowym
</a>
                                                <p class="news__intro">
i aktywistom społecznym.<br/>
                                                    Upowszechnianie idei uczenia
                                                    się przez cale życie.
                                                </p>
                                                <p class="xx">xxxxxxxxxxxxxx</p>
                                                <a class="news__more" href="#">Czytaj więcej</a>
                                            </div>
                                        </div>
                                        <div class="__sep">
                                            <span class="__icon"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="__event">
                                    <div class="__wrapper">
                                        <div class="__sep">&nbsp;</div>
                                        <div class="__container">
                                            <span class="__icon"></span>
                                            <div class="__info">
                                                <a class="news__title" href="#" title="">Wybieramy najlepszych</a>
                                                <p class="news__intro">Program stypendialny</p>
                                                <p class="xx">xxxxxxxxxxxxxx</p>
                                                <a class="news__more" href="#" >Czytaj więcej</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sekcja 4. Aktualności -->
        <section id="section-4" class="rowWrapper rowSlide section__news">
            <div class="row">
                <div class="large-12 columns">
                    <header class="section__header  text-center">
                        <h2 class="section__title">Aktualności</h2>
                        <h3 class="section__subtitle hide-for-small-only">
                            <span class="sep sep--top"></span>
                            <span>Aktywne wspieranie postaw przedsiębiorczych</span>
oraz inicjowanie międzykulturowej wymiany
                            doświadczeń.
                            <span class="sep sep--bottom"></span>
                        </h3>
                    </header>
                    <div class="section__content">
                        <div id="slider-news" class="royalSlider contentSlider rsDefault visibleNearby">
                            <div class="text-center">
                                <img class="rsImg" src="gfx/news-sample.jpg" data-rsw="540" data-rsh="325">
                                <h3 class="slide__subTitle">Warsztat "Podstawy prawa autorskiego a wolne licencje"</h3>
                                <p class="slide__intro">After all, you have many other things you should be doing. Who's paying you to waste this time, anyway?</p>
                                <a class="slide--more" data-reveal-id="news-1" href="#">Czytaj więcej</a>

                                <div id="news-1" class="reveal-modal member__details full" data-reveal>
                                    <h3 class="slide__subTitle">Warsztat "Podstawy prawa autorskiego a wolne licencje"</h3>

                                    <!--<p class="lead">Asystentka Rektora ALK</p>-->
                                    <p class="slide__intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque felis tellus, condimentum non nisl ut, ultricies commodo turpis. Ut maximus non sapien a vehicula. Praesent vel elementum urna. Suspendisse ligula purus, vestibulum id metus at, condimentum lacinia felis. Aliquam dictum fermentum augue non efficitur. Nullam finibus commodo ligula, fringilla viverra nibh finibus at. </p>
                                    <a class="close-reveal-modal">&#215;</a>
                                </div>

                            </div>
                            <div class="text-center">
                                <img class="rsImg" src="gfx/news-sample.jpg" data-rsw="540" data-rsh="325">
                                <h3 class="slide__subTitle">Warsztat "Podstawy prawa autorskiego a wolne licencje"</h3>
                                <p class="slide__intro">After all, you have many other things you should be doing. Who's paying you to waste this time, anyway?</p>
                                <a class="slide--more" data-reveal-id="news-2" href="#">Czytaj więcej</a>

                                <div id="news-2" class="reveal-modal member__details full" data-reveal>
                                    <h3 class="slide__subTitle">Warsztat "Podstawy prawa autorskiego a wolne licencje"</h3>
                                    <figure class="hide-for-small text-center">
                                        <img class="rsImg" src="gfx/news-sample.jpg" data-rsw="540" data-rsh="325">
                                    </figure>
                                    <!--<p class="lead">Asystentka Rektora ALK</p>-->
                                    <p class="slide__intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque felis tellus, condimentum non nisl ut, ultricies commodo turpis. Ut maximus non sapien a vehicula. Praesent vel elementum urna. Suspendisse ligula purus, vestibulum id metus at, condimentum lacinia felis. Aliquam dictum fermentum augue non efficitur. Nullam finibus commodo ligula, fringilla viverra nibh finibus at. </p>
                                    <a class="close-reveal-modal">&#215;</a>
                                </div>
                            </div>
                            <div class="text-center">
                                <img class="rsImg" src="gfx/news-sample.jpg" data-rsw="540" data-rsh="325">
                                <h3 class="slide__subTitle">Warsztat "Podstawy prawa autorskiego a wolne licencje"</h3>
                                <p class="slide__intro">After all, you have many other things you should be doing. Who's paying you to waste this time, anyway?</p>
                                <a class="slide--more" data-reveal-id="news-3" href="#">Czytaj więcej</a>

                                <div id="news-3" class="reveal-modal member__details full" data-reveal>
                                    <figure class="hide-for-small text-center">
                                        <img class="rsImg" src="gfx/3_aktualnosci_f1.jpg" data-rsw="540" data-rsh="325">
                                    </figure>
                                    <h3 class="slide__subTitle">Warsztat "Podstawy prawa autorskiego a wolne licencje"</h3>
                                    <!--<p class="lead">Asystentka Rektora ALK</p>-->
                                    <p class="slide__intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque felis tellus, condimentum non nisl ut, ultricies commodo turpis. Ut maximus non sapien a vehicula. Praesent vel elementum urna. Suspendisse ligula purus, vestibulum id metus at, condimentum lacinia felis. Aliquam dictum fermentum augue non efficitur. Nullam finibus commodo ligula, fringilla viverra nibh finibus at. </p>
                                    <a class="close-reveal-modal">&#215;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sekcja 4. O Fundacji -->
        <section id="section-5" class="rowWrapper rowSlide section__ofundacji section--hasArrow">
            <!-- row prefix for mobile -->
            <div class="row__prefix show-for-small-only text-center">
                <h2 class="section__title">O fundacji</h2>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <header class="section__header text-center">
                        <h2 class="section__title hide-for-small">O fundacji</h2>
                    </header>
                    <div class="section__content text-center">
                        <img src="gfx/4_logo.png" alt="" />
                    </div>
                </div>
                <figure class="crossSectionArrow--left show-for-medium-up">
                    <img src="gfx/8_strzalka.png" alt="" title=""/>
                </figure>
            </div>
            <!-- row sufix for mobile -->
            <div class="row__sufix show-for-small-only">
                <figure class="crossSectionArrow--left"><img src="gfx/8_strzalka.png" alt="" title=""/></figure>
            </div>
        </section>

        <!-- Sekcja 5. Rada i Zarząd Fundacji -->
        <section id="section-6" class="hide-for-small-only rowWrapper rowSlide section__radaizarzad">
            <div class="row">
                <div class="large-12 columns">
                    <header class="section__header text-center">
                        <h2 class="section__title">Rada i Zarząd Fundacji</h2>
                    </header>
                    <div class="section__content small-only-text-center">
                         <div class="row row__zarzad">
                             <div class="columns medium-3">
                                 <h3 class="extra__label">Prezes <br/>Fundacji</h3>
                             </div>
                             <dd class="medium-1 columns">&nbsp;</dd>
                             <div class="columns medium-8">
                                 <h3 class="extra__label">Członkowie&nbsp;<span>Zarządu</span></h3>
                             </div>
                         </div>
                         <div class="row collapse row__decoration" data-equalizer>
                             <dl class="tabs" data-tab>
                                 <dd  data-equalizer-watch class="active small-12 medium-3 columns">
                                     <a class="hide-for-medium-up" href="#" data-reveal-id="rada1"  >Prof. Leon Koźmiński</a>
                                     <a class="person__image hidden-for-small-only" data-reveal-id="rada1" href="#" ><img src="gfx/5_prezes.png" alt="" /></a>
                                 </dd>
                                 <dd  data-equalizer-watch class="small-12 medium-1 columns">&nbsp;</dd>
                                 <dd  data-equalizer-watch class="small-12 medium-2 columns">
                                     <a class="hide-for-medium-up" href="#" data-reveal-id="rada1"  >Prof. Leon Koźmiński</a>
                                     <a class="person__image hidden-for-small-only" data-reveal-id="rada1" ><img src="gfx/5_czlonek_M.jpg" alt="" /></a>
                                 </dd>
                                 <dd  data-equalizer-watch class="small-12 medium-2 columns">
                                     <a class="hide-for-medium-up" href="#" data-reveal-id="patron-2aa">Małgorzata Heit</a>
                                     <a class="person__image hidden-for-small-only"  data-reveal-id="patron-2aa"><img src="gfx/5_czlonek_K1.jpg" alt="" /></a>
                                 </dd>
                                 <dd  data-equalizer-watch class="small-12 medium-2 columns">
                                     <a class="hide-for-medium-up" href="#"  data-reveal-id="patron-3aa">Teresa Nowacka</a>
                                     <a class="person__image hidden-for-small-only" data-reveal-id="patron-3aa"><img src="gfx/5_czlonek_K2.jpg" alt="" /></a>
                                 </dd>
                                 <dd  data-equalizer-watch class="small-12 medium-2 columns">
                                     <a class="hide-for-medium-up" href="#" data-reveal-id="patron-4aa">Magdalena Bąk</a>
                                     <a class="person__image hidden-for-small-only" data-reveal-id="patron-4aa"><img src="gfx/5_czlonek_K3.jpg" alt="" /></a>
                                 </dd>
                             </dl>
                         </div>
                         <div class="tabs-content text-center">
                             <div class="content" id="panel1rada">
                                 <h2>Prof. Leon Koźmiński</h2>
                                 <p><strong>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której uzyskał magisterium.</strong></p>
                                 <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929. Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w organizacji i technice handlu. Uczył tam też języka francuskiego. </p>
                                 <p>This is the first panel of the basic tab example. This is the first panel of the basic tab example.</p>
                                 <a class="slide--more" data-reveal-id="rada1" href="#">Szczegóły</a>
                                 <div id="rada1" class="reveal-modal member__details" data-reveal>
                                     <h3 class="slide__subTitle">Prof. Leon Koźmiński</h3>
                                     <figure class="text-center">
                                         <img class="hide-for-small-only rsImg"
                                              src="http://m.natemat.pl/3f379ad7ee5b2cc7124337f3097244ed,640,0,0,0.jpg"
                                              data-rsw="340" data-rsh="225">
                                     </figure>
                                     <p class="slide__intro">

                                     <p>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor
                                         urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w
                                         Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której
                                         uzyskał magisterium.</p>

                                     <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929.
                                         Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w
                                         organizacji i technice handlu. Uczył tam też języka francuskiego. </p>

                                     <p>We wrześniu 1939 roku walczył jako porucznik w 21 pułku piechoty. Udało mu się
                                         uniknąć niewoli rosyjskiej. Idea szerzenia wiedzy była zawsze bardzo Mu bliska.
                                         W czasie okupacji niemieckiej uczył w Miejskiej Szkole Handlowej w Warszawie,
                                         która była faktycznie zakonspirowaną SGH oraz w Instytucie Morskim przy tajnym
                                         Uniwersytecie Ziem Zachodnich. Był wielki patriotą. Działał w konspiracji, w
                                         komórce „Z”- „Ziemie Zachodnie”, przy Delegaturze rządu londyńskiego na kraj. W
                                         stopniu porucznika walczył na Mokotowie w Powstaniu Warszawskim jako członek
                                         dowództwa Zgrupowania AK „Baszta”. Po upadku Powstania został wywieziony do
                                         Niemiec. </p>

                                     <p>Od roku 1947 Profesor współorganizował ponowne uruchomienie SGH, w której był
                                         kierownikiem katedry i dziekanem. Profesor sprzyjał wszystkiemu, co w tym
                                         zakresie mogło być przenoszone z doświadczeń zachodnich, wykorzystywał
                                         znajomości i literaturę, a przy okazji wspierał rozwój młodych pracowników
                                         naukowych. </p>

                                     <p>Głównie w oparciu o wysiłek Profesora ukształtowana została kadra Instytutu
                                         Handlu Wewnętrznego, którego został dyrektorem. Część kadry do dziś kontynuuje w
                                         rozwiniętej formule wątki regulacyjne, marketingowe i inne kierunki badań
                                         wspierające współczesny rynek i działające przedsiębiorstwa. </p>

                                     <p>Na tych i innych obszarach badań tworzył warunki do adaptacji szerokiej
                                         instrumentacji biznesowej, które we współczesnych procesach zmian znalazły
                                         sprzyjający klimat czyli otwarte nastawienie do postępu rynkowego, jaki
                                         przyniósł koniec XX wieku w naszym kraju. </p>

                                     <p>Wkład Profesora w kształtowanie klimatu przedsiębiorczości i prowadzenie badań z
                                         zakresu organizacji i zarządzania procentował w praktyce. Jako Ekspert działał
                                         on w gremiach oceniających projekty inwestycyjne, które kształtowały ówczesne
                                         formy infrastruktury rynku. Przenosił na ich grunt doświadczenia z praktyk
                                         Europy Zachodniej, ale też z własnych badań i Jego zespołów, wywierając wpływ na
                                         postęp często wybiegający naprzód o wiele lat. Angażował się w procesy szkolenia
                                         i doskonalenia kadry menedżerskiej, której przekazywał najnowsze doświadczenia
                                         europejskie i kształtował sposób myślenia kategoriami m. in. samodzielności,
                                         przedsiębiorczości, orientacji na klienta i rynek, działania kalkulacyjnego w
                                         konkretnych decyzjach.</p>
                                     </p>
                                     <a class="close-reveal-modal">&#215;</a>
                                 </div>
                             </div>
                             <div class="content" id="panel2aa">
                                 <h2>Małgorzata Heit</h2>
                                 <p><strong>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której uzyskał magisterium.</strong></p>
                                 <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929. Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w organizacji i technice handlu. Uczył tam też języka francuskiego. </p>
                                 <p>This is the first panel of the basic tab example. This is the first panel of the basic tab example.</p>
                                 <a class="slide--more" data-reveal-id="patron-2a" href="#">Szczegóły</a>
                                 <div id="patron-2aa" class="reveal-modal member__details" data-reveal>
                                     <h3 class="slide__subTitle">Prof. Leon Koźmiński</h3>
                                     <figure class="text-center">
                                         <img class="hide-for-small-only rsImg"
                                              src="http://m.natemat.pl/3f379ad7ee5b2cc7124337f3097244ed,640,0,0,0.jpg"
                                              data-rsw="340" data-rsh="225">
                                     </figure>
                                     <p class="slide__intro">

                                     <p>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor
                                         urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w
                                         Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której
                                         uzyskał magisterium.</p>

                                     <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929.
                                         Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w
                                         organizacji i technice handlu. Uczył tam też języka francuskiego. </p>

                                     <p>We wrześniu 1939 roku walczył jako porucznik w 21 pułku piechoty. Udało mu się
                                         uniknąć niewoli rosyjskiej. Idea szerzenia wiedzy była zawsze bardzo Mu bliska.
                                         W czasie okupacji niemieckiej uczył w Miejskiej Szkole Handlowej w Warszawie,
                                         która była faktycznie zakonspirowaną SGH oraz w Instytucie Morskim przy tajnym
                                         Uniwersytecie Ziem Zachodnich. Był wielki patriotą. Działał w konspiracji, w
                                         komórce „Z”- „Ziemie Zachodnie”, przy Delegaturze rządu londyńskiego na kraj. W
                                         stopniu porucznika walczył na Mokotowie w Powstaniu Warszawskim jako członek
                                         dowództwa Zgrupowania AK „Baszta”. Po upadku Powstania został wywieziony do
                                         Niemiec. </p>

                                     <p>Od roku 1947 Profesor współorganizował ponowne uruchomienie SGH, w której był
                                         kierownikiem katedry i dziekanem. Profesor sprzyjał wszystkiemu, co w tym
                                         zakresie mogło być przenoszone z doświadczeń zachodnich, wykorzystywał
                                         znajomości i literaturę, a przy okazji wspierał rozwój młodych pracowników
                                         naukowych. </p>

                                     <p>Głównie w oparciu o wysiłek Profesora ukształtowana została kadra Instytutu
                                         Handlu Wewnętrznego, którego został dyrektorem. Część kadry do dziś kontynuuje w
                                         rozwiniętej formule wątki regulacyjne, marketingowe i inne kierunki badań
                                         wspierające współczesny rynek i działające przedsiębiorstwa. </p>

                                     <p>Na tych i innych obszarach badań tworzył warunki do adaptacji szerokiej
                                         instrumentacji biznesowej, które we współczesnych procesach zmian znalazły
                                         sprzyjający klimat czyli otwarte nastawienie do postępu rynkowego, jaki
                                         przyniósł koniec XX wieku w naszym kraju. </p>

                                     <p>Wkład Profesora w kształtowanie klimatu przedsiębiorczości i prowadzenie badań z
                                         zakresu organizacji i zarządzania procentował w praktyce. Jako Ekspert działał
                                         on w gremiach oceniających projekty inwestycyjne, które kształtowały ówczesne
                                         formy infrastruktury rynku. Przenosił na ich grunt doświadczenia z praktyk
                                         Europy Zachodniej, ale też z własnych badań i Jego zespołów, wywierając wpływ na
                                         postęp często wybiegający naprzód o wiele lat. Angażował się w procesy szkolenia
                                         i doskonalenia kadry menedżerskiej, której przekazywał najnowsze doświadczenia
                                         europejskie i kształtował sposób myślenia kategoriami m. in. samodzielności,
                                         przedsiębiorczości, orientacji na klienta i rynek, działania kalkulacyjnego w
                                         konkretnych decyzjach.</p>
                                     </p>
                                     <a class="close-reveal-modal">&#215;</a>
                                 </div>
                             </div>
                             <div class="content" id="panel3aa">
                                 <h2>Teresa Nowacka</h2>
                                 <p><strong>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której uzyskał magisterium.</strong></p>
                                 <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929. Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w organizacji i technice handlu. Uczył tam też języka francuskiego. </p>
                                 <p>This is the first panel of the basic tab example. This is the first panel of the basic tab example.</p>
                                 <a class="slide--more" data-reveal-id="patron-3aa" href="#">Szczegóły</a>
                                 <div id="patron-3aa" class="reveal-modal member__details" data-reveal>
                                     <h3 class="slide__subTitle">Prof. Leon Koźmiński</h3>
                                     <figure class="text-center">
                                         <img class="hide-for-small-only rsImg"
                                              src="http://m.natemat.pl/3f379ad7ee5b2cc7124337f3097244ed,640,0,0,0.jpg"
                                              data-rsw="340" data-rsh="225">
                                     </figure>
                                     <p class="slide__intro">

                                     <p>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor
                                         urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w
                                         Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której
                                         uzyskał magisterium.</p>

                                     <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929.
                                         Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w
                                         organizacji i technice handlu. Uczył tam też języka francuskiego. </p>

                                     <p>We wrześniu 1939 roku walczył jako porucznik w 21 pułku piechoty. Udało mu się
                                         uniknąć niewoli rosyjskiej. Idea szerzenia wiedzy była zawsze bardzo Mu bliska.
                                         W czasie okupacji niemieckiej uczył w Miejskiej Szkole Handlowej w Warszawie,
                                         która była faktycznie zakonspirowaną SGH oraz w Instytucie Morskim przy tajnym
                                         Uniwersytecie Ziem Zachodnich. Był wielki patriotą. Działał w konspiracji, w
                                         komórce „Z”- „Ziemie Zachodnie”, przy Delegaturze rządu londyńskiego na kraj. W
                                         stopniu porucznika walczył na Mokotowie w Powstaniu Warszawskim jako członek
                                         dowództwa Zgrupowania AK „Baszta”. Po upadku Powstania został wywieziony do
                                         Niemiec. </p>

                                     <p>Od roku 1947 Profesor współorganizował ponowne uruchomienie SGH, w której był
                                         kierownikiem katedry i dziekanem. Profesor sprzyjał wszystkiemu, co w tym
                                         zakresie mogło być przenoszone z doświadczeń zachodnich, wykorzystywał
                                         znajomości i literaturę, a przy okazji wspierał rozwój młodych pracowników
                                         naukowych. </p>

                                     <p>Głównie w oparciu o wysiłek Profesora ukształtowana została kadra Instytutu
                                         Handlu Wewnętrznego, którego został dyrektorem. Część kadry do dziś kontynuuje w
                                         rozwiniętej formule wątki regulacyjne, marketingowe i inne kierunki badań
                                         wspierające współczesny rynek i działające przedsiębiorstwa. </p>

                                     <p>Na tych i innych obszarach badań tworzył warunki do adaptacji szerokiej
                                         instrumentacji biznesowej, które we współczesnych procesach zmian znalazły
                                         sprzyjający klimat czyli otwarte nastawienie do postępu rynkowego, jaki
                                         przyniósł koniec XX wieku w naszym kraju. </p>

                                     <p>Wkład Profesora w kształtowanie klimatu przedsiębiorczości i prowadzenie badań z
                                         zakresu organizacji i zarządzania procentował w praktyce. Jako Ekspert działał
                                         on w gremiach oceniających projekty inwestycyjne, które kształtowały ówczesne
                                         formy infrastruktury rynku. Przenosił na ich grunt doświadczenia z praktyk
                                         Europy Zachodniej, ale też z własnych badań i Jego zespołów, wywierając wpływ na
                                         postęp często wybiegający naprzód o wiele lat. Angażował się w procesy szkolenia
                                         i doskonalenia kadry menedżerskiej, której przekazywał najnowsze doświadczenia
                                         europejskie i kształtował sposób myślenia kategoriami m. in. samodzielności,
                                         przedsiębiorczości, orientacji na klienta i rynek, działania kalkulacyjnego w
                                         konkretnych decyzjach.</p>
                                     </p>
                                     <a class="close-reveal-modal">&#215;</a>
                                 </div>
                             </div>
                             <div class="content" id="panel4aa">
                                 <h2>Magdalena Bąk</h2>
                                 <p><strong>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której uzyskał magisterium.</strong></p>
                                 <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929. Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w organizacji i technice handlu. Uczył tam też języka francuskiego. </p>
                                 <p>This is the first panel of the basic tab example. This is the first panel of the basic tab example.</p>
                                 <a class="slide--more" data-reveal-id="patron-4aa" href="#">Szczegóły</a>
                                 <div id="patron-4aa" class="reveal-modal member__details" data-reveal>
                                     <h3 class="slide__subTitle">Prof. Leon Koźmiński</h3>
                                     <figure class="text-center">
                                         <img class="hide-for-small-only rsImg"
                                              src="http://m.natemat.pl/3f379ad7ee5b2cc7124337f3097244ed,640,0,0,0.jpg"
                                              data-rsw="340" data-rsh="225">
                                     </figure>
                                     <p class="slide__intro">

                                     <p>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor
                                         urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w
                                         Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której
                                         uzyskał magisterium.</p>

                                     <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929.
                                         Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w
                                         organizacji i technice handlu. Uczył tam też języka francuskiego. </p>

                                     <p>We wrześniu 1939 roku walczył jako porucznik w 21 pułku piechoty. Udało mu się
                                         uniknąć niewoli rosyjskiej. Idea szerzenia wiedzy była zawsze bardzo Mu bliska.
                                         W czasie okupacji niemieckiej uczył w Miejskiej Szkole Handlowej w Warszawie,
                                         która była faktycznie zakonspirowaną SGH oraz w Instytucie Morskim przy tajnym
                                         Uniwersytecie Ziem Zachodnich. Był wielki patriotą. Działał w konspiracji, w
                                         komórce „Z”- „Ziemie Zachodnie”, przy Delegaturze rządu londyńskiego na kraj. W
                                         stopniu porucznika walczył na Mokotowie w Powstaniu Warszawskim jako członek
                                         dowództwa Zgrupowania AK „Baszta”. Po upadku Powstania został wywieziony do
                                         Niemiec. </p>

                                     <p>Od roku 1947 Profesor współorganizował ponowne uruchomienie SGH, w której był
                                         kierownikiem katedry i dziekanem. Profesor sprzyjał wszystkiemu, co w tym
                                         zakresie mogło być przenoszone z doświadczeń zachodnich, wykorzystywał
                                         znajomości i literaturę, a przy okazji wspierał rozwój młodych pracowników
                                         naukowych. </p>

                                     <p>Głównie w oparciu o wysiłek Profesora ukształtowana została kadra Instytutu
                                         Handlu Wewnętrznego, którego został dyrektorem. Część kadry do dziś kontynuuje w
                                         rozwiniętej formule wątki regulacyjne, marketingowe i inne kierunki badań
                                         wspierające współczesny rynek i działające przedsiębiorstwa. </p>

                                     <p>Na tych i innych obszarach badań tworzył warunki do adaptacji szerokiej
                                         instrumentacji biznesowej, które we współczesnych procesach zmian znalazły
                                         sprzyjający klimat czyli otwarte nastawienie do postępu rynkowego, jaki
                                         przyniósł koniec XX wieku w naszym kraju. </p>

                                     <p>Wkład Profesora w kształtowanie klimatu przedsiębiorczości i prowadzenie badań z
                                         zakresu organizacji i zarządzania procentował w praktyce. Jako Ekspert działał
                                         on w gremiach oceniających projekty inwestycyjne, które kształtowały ówczesne
                                         formy infrastruktury rynku. Przenosił na ich grunt doświadczenia z praktyk
                                         Europy Zachodniej, ale też z własnych badań i Jego zespołów, wywierając wpływ na
                                         postęp często wybiegający naprzód o wiele lat. Angażował się w procesy szkolenia
                                         i doskonalenia kadry menedżerskiej, której przekazywał najnowsze doświadczenia
                                         europejskie i kształtował sposób myślenia kategoriami m. in. samodzielności,
                                         przedsiębiorczości, orientacji na klienta i rynek, działania kalkulacyjnego w
                                         konkretnych decyzjach.</p>
                                     </p>
                                     <a class="close-reveal-modal">&#215;</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                    <div class="section__content small-only-text-center">
                        <div class="row row__rada">
                            <div class="columns medium-3">
                                <h3 class="extra__label">Fundator</h3>
                            </div>
                            <dd class="medium-3 columns">&nbsp;</dd>
                            <div class="columns medium-6">
                                <h3 class="extra__label">Rada&nbsp;<span>Fundacji</span></h3>
                            </div>
                        </div>
                        <div class="row collapse row__decoration" data-equalizer>
                            <dl class="tabs" data-tab>
                                <dd  data-equalizer-watch class="active small-12 medium-3 columns">
                                    <a class="hide-for-medium-up" href="#" data-reveal-id="rada1"  >Prof. Leon Koźmiński</a>
                                    <a class="person__image hidden-for-small-only" data-reveal-id="rada1" ><img src="gfx/5_prezes.png" alt="" /></a>
                                </dd>
                                <dd  data-equalizer-watch class="small-12 medium-3 columns">&nbsp;</dd>
                                <dd  data-equalizer-watch class="small-12 medium-2 columns">
                                    <a class="hide-for-medium-up" href="#" data-reveal-id="patron-2aa">Małgorzata Heit</a>
                                    <a class="person__image hidden-for-small-only"  data-reveal-id="patron-12aa"><img src="gfx/5_czlonek_M2.jpg" alt="" /></a>
                                </dd>
                                <dd  data-equalizer-watch class="small-12 medium-2 columns">
                                    <a class="hide-for-medium-up" href="#"  data-reveal-id="patron-3aa">Teresa Nowacka</a>
                                    <a class="person__image hidden-for-small-only" data-reveal-id="patron-13aa"><img src="gfx/5_czlonek_M3.jpg" alt="" /></a>
                                </dd>
                                <dd  data-equalizer-watch class="small-12 medium-2 columns">
                                    <a class="hide-for-medium-up" href="#" data-reveal-id="patron-4aa">Magdalena Bąk</a>
                                    <a class="person__image hidden-for-small-only" data-reveal-id="patron-14aa"><img src="gfx/5_czlonek_M4.jpg" alt="" /></a>
                                </dd>
                            </dl>
                        </div>
                        <div class="tabs-content text-center">
                        <div class="content" id="panel11aa">
                            <h2>Prof. Leon Koźmiński</h2>
                            <p><strong>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której uzyskał magisterium.</strong></p>
                            <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929. Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w organizacji i technice handlu. Uczył tam też języka francuskiego. </p>
                            <p>This is the first panel of the basic tab example. This is the first panel of the basic tab example.</p>
                            <a class="slide--more" data-reveal-id="patron-11aa" href="#">Szczegóły</a>
                            <div id="patron-11aa" class="reveal-modal member__details" data-reveal>
                                <h3 class="slide__subTitle">Prof. Leon Koźmiński</h3>
                                <figure class="text-center">
                                    <img class="hide-for-small-only rsImg"
                                         src="http://m.natemat.pl/3f379ad7ee5b2cc7124337f3097244ed,640,0,0,0.jpg"
                                         data-rsw="340" data-rsh="225">
                                </figure>
                                <p class="slide__intro">

                                <p>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor
                                    urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w
                                    Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której
                                    uzyskał magisterium.</p>

                                <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929.
                                    Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w
                                    organizacji i technice handlu. Uczył tam też języka francuskiego. </p>

                                <p>We wrześniu 1939 roku walczył jako porucznik w 21 pułku piechoty. Udało mu się
                                    uniknąć niewoli rosyjskiej. Idea szerzenia wiedzy była zawsze bardzo Mu bliska.
                                    W czasie okupacji niemieckiej uczył w Miejskiej Szkole Handlowej w Warszawie,
                                    która była faktycznie zakonspirowaną SGH oraz w Instytucie Morskim przy tajnym
                                    Uniwersytecie Ziem Zachodnich. Był wielki patriotą. Działał w konspiracji, w
                                    komórce „Z”- „Ziemie Zachodnie”, przy Delegaturze rządu londyńskiego na kraj. W
                                    stopniu porucznika walczył na Mokotowie w Powstaniu Warszawskim jako członek
                                    dowództwa Zgrupowania AK „Baszta”. Po upadku Powstania został wywieziony do
                                    Niemiec. </p>

                                <p>Od roku 1947 Profesor współorganizował ponowne uruchomienie SGH, w której był
                                    kierownikiem katedry i dziekanem. Profesor sprzyjał wszystkiemu, co w tym
                                    zakresie mogło być przenoszone z doświadczeń zachodnich, wykorzystywał
                                    znajomości i literaturę, a przy okazji wspierał rozwój młodych pracowników
                                    naukowych. </p>

                                <p>Głównie w oparciu o wysiłek Profesora ukształtowana została kadra Instytutu
                                    Handlu Wewnętrznego, którego został dyrektorem. Część kadry do dziś kontynuuje w
                                    rozwiniętej formule wątki regulacyjne, marketingowe i inne kierunki badań
                                    wspierające współczesny rynek i działające przedsiębiorstwa. </p>

                                <p>Na tych i innych obszarach badań tworzył warunki do adaptacji szerokiej
                                    instrumentacji biznesowej, które we współczesnych procesach zmian znalazły
                                    sprzyjający klimat czyli otwarte nastawienie do postępu rynkowego, jaki
                                    przyniósł koniec XX wieku w naszym kraju. </p>

                                <p>Wkład Profesora w kształtowanie klimatu przedsiębiorczości i prowadzenie badań z
                                    zakresu organizacji i zarządzania procentował w praktyce. Jako Ekspert działał
                                    on w gremiach oceniających projekty inwestycyjne, które kształtowały ówczesne
                                    formy infrastruktury rynku. Przenosił na ich grunt doświadczenia z praktyk
                                    Europy Zachodniej, ale też z własnych badań i Jego zespołów, wywierając wpływ na
                                    postęp często wybiegający naprzód o wiele lat. Angażował się w procesy szkolenia
                                    i doskonalenia kadry menedżerskiej, której przekazywał najnowsze doświadczenia
                                    europejskie i kształtował sposób myślenia kategoriami m. in. samodzielności,
                                    przedsiębiorczości, orientacji na klienta i rynek, działania kalkulacyjnego w
                                    konkretnych decyzjach.</p>
                                </p>
                                <a class="close-reveal-modal">&#215;</a>
                            </div>
                        </div>
                        <div class="content" id="panel12aa">
                            <h2>Małgorzata Heit</h2>
                            <p><strong>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której uzyskał magisterium.</strong></p>
                            <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929. Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w organizacji i technice handlu. Uczył tam też języka francuskiego. </p>
                            <p>This is the first panel of the basic tab example. This is the first panel of the basic tab example.</p>
                            <a class="slide--more" data-reveal-id="patron-12a" href="#">Szczegóły</a>
                            <div id="patron-12aa" class="reveal-modal member__details" data-reveal>
                                <h3 class="slide__subTitle">Prof. Leon Koźmiński</h3>
                                <figure class="text-center">
                                    <img class="hide-for-small-only rsImg"
                                         src="http://m.natemat.pl/3f379ad7ee5b2cc7124337f3097244ed,640,0,0,0.jpg"
                                         data-rsw="340" data-rsh="225">
                                </figure>
                                <p class="slide__intro">

                                <p>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor
                                    urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w
                                    Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której
                                    uzyskał magisterium.</p>

                                <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929.
                                    Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w
                                    organizacji i technice handlu. Uczył tam też języka francuskiego. </p>

                                <p>We wrześniu 1939 roku walczył jako porucznik w 21 pułku piechoty. Udało mu się
                                    uniknąć niewoli rosyjskiej. Idea szerzenia wiedzy była zawsze bardzo Mu bliska.
                                    W czasie okupacji niemieckiej uczył w Miejskiej Szkole Handlowej w Warszawie,
                                    która była faktycznie zakonspirowaną SGH oraz w Instytucie Morskim przy tajnym
                                    Uniwersytecie Ziem Zachodnich. Był wielki patriotą. Działał w konspiracji, w
                                    komórce „Z”- „Ziemie Zachodnie”, przy Delegaturze rządu londyńskiego na kraj. W
                                    stopniu porucznika walczył na Mokotowie w Powstaniu Warszawskim jako członek
                                    dowództwa Zgrupowania AK „Baszta”. Po upadku Powstania został wywieziony do
                                    Niemiec. </p>

                                <p>Od roku 1947 Profesor współorganizował ponowne uruchomienie SGH, w której był
                                    kierownikiem katedry i dziekanem. Profesor sprzyjał wszystkiemu, co w tym
                                    zakresie mogło być przenoszone z doświadczeń zachodnich, wykorzystywał
                                    znajomości i literaturę, a przy okazji wspierał rozwój młodych pracowników
                                    naukowych. </p>

                                <p>Głównie w oparciu o wysiłek Profesora ukształtowana została kadra Instytutu
                                    Handlu Wewnętrznego, którego został dyrektorem. Część kadry do dziś kontynuuje w
                                    rozwiniętej formule wątki regulacyjne, marketingowe i inne kierunki badań
                                    wspierające współczesny rynek i działające przedsiębiorstwa. </p>

                                <p>Na tych i innych obszarach badań tworzył warunki do adaptacji szerokiej
                                    instrumentacji biznesowej, które we współczesnych procesach zmian znalazły
                                    sprzyjający klimat czyli otwarte nastawienie do postępu rynkowego, jaki
                                    przyniósł koniec XX wieku w naszym kraju. </p>

                                <p>Wkład Profesora w kształtowanie klimatu przedsiębiorczości i prowadzenie badań z
                                    zakresu organizacji i zarządzania procentował w praktyce. Jako Ekspert działał
                                    on w gremiach oceniających projekty inwestycyjne, które kształtowały ówczesne
                                    formy infrastruktury rynku. Przenosił na ich grunt doświadczenia z praktyk
                                    Europy Zachodniej, ale też z własnych badań i Jego zespołów, wywierając wpływ na
                                    postęp często wybiegający naprzód o wiele lat. Angażował się w procesy szkolenia
                                    i doskonalenia kadry menedżerskiej, której przekazywał najnowsze doświadczenia
                                    europejskie i kształtował sposób myślenia kategoriami m. in. samodzielności,
                                    przedsiębiorczości, orientacji na klienta i rynek, działania kalkulacyjnego w
                                    konkretnych decyzjach.</p>
                                </p>
                                <a class="close-reveal-modal">&#215;</a>
                            </div>
                        </div>
                        <div class="content" id="panel13aa">
                            <h2>Teresa Nowacka</h2>
                            <p><strong>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której uzyskał magisterium.</strong></p>
                            <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929. Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w organizacji i technice handlu. Uczył tam też języka francuskiego. </p>
                            <p>This is the first panel of the basic tab example. This is the first panel of the basic tab example.</p>
                            <a class="slide--more" data-reveal-id="patron-13aa" href="#">Szczegóły</a>
                            <div id="patron-13aa" class="reveal-modal member__details" data-reveal>
                                <h3 class="slide__subTitle">Prof. Leon Koźmiński</h3>
                                <figure class="text-center">
                                    <img class="hide-for-small-only rsImg"
                                         src="http://m.natemat.pl/3f379ad7ee5b2cc7124337f3097244ed,640,0,0,0.jpg"
                                         data-rsw="340" data-rsh="225">
                                </figure>
                                <p class="slide__intro">

                                <p>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor
                                    urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w
                                    Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której
                                    uzyskał magisterium.</p>

                                <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929.
                                    Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w
                                    organizacji i technice handlu. Uczył tam też języka francuskiego. </p>

                                <p>We wrześniu 1939 roku walczył jako porucznik w 21 pułku piechoty. Udało mu się
                                    uniknąć niewoli rosyjskiej. Idea szerzenia wiedzy była zawsze bardzo Mu bliska.
                                    W czasie okupacji niemieckiej uczył w Miejskiej Szkole Handlowej w Warszawie,
                                    która była faktycznie zakonspirowaną SGH oraz w Instytucie Morskim przy tajnym
                                    Uniwersytecie Ziem Zachodnich. Był wielki patriotą. Działał w konspiracji, w
                                    komórce „Z”- „Ziemie Zachodnie”, przy Delegaturze rządu londyńskiego na kraj. W
                                    stopniu porucznika walczył na Mokotowie w Powstaniu Warszawskim jako członek
                                    dowództwa Zgrupowania AK „Baszta”. Po upadku Powstania został wywieziony do
                                    Niemiec. </p>

                                <p>Od roku 1947 Profesor współorganizował ponowne uruchomienie SGH, w której był
                                    kierownikiem katedry i dziekanem. Profesor sprzyjał wszystkiemu, co w tym
                                    zakresie mogło być przenoszone z doświadczeń zachodnich, wykorzystywał
                                    znajomości i literaturę, a przy okazji wspierał rozwój młodych pracowników
                                    naukowych. </p>

                                <p>Głównie w oparciu o wysiłek Profesora ukształtowana została kadra Instytutu
                                    Handlu Wewnętrznego, którego został dyrektorem. Część kadry do dziś kontynuuje w
                                    rozwiniętej formule wątki regulacyjne, marketingowe i inne kierunki badań
                                    wspierające współczesny rynek i działające przedsiębiorstwa. </p>

                                <p>Na tych i innych obszarach badań tworzył warunki do adaptacji szerokiej
                                    instrumentacji biznesowej, które we współczesnych procesach zmian znalazły
                                    sprzyjający klimat czyli otwarte nastawienie do postępu rynkowego, jaki
                                    przyniósł koniec XX wieku w naszym kraju. </p>

                                <p>Wkład Profesora w kształtowanie klimatu przedsiębiorczości i prowadzenie badań z
                                    zakresu organizacji i zarządzania procentował w praktyce. Jako Ekspert działał
                                    on w gremiach oceniających projekty inwestycyjne, które kształtowały ówczesne
                                    formy infrastruktury rynku. Przenosił na ich grunt doświadczenia z praktyk
                                    Europy Zachodniej, ale też z własnych badań i Jego zespołów, wywierając wpływ na
                                    postęp często wybiegający naprzód o wiele lat. Angażował się w procesy szkolenia
                                    i doskonalenia kadry menedżerskiej, której przekazywał najnowsze doświadczenia
                                    europejskie i kształtował sposób myślenia kategoriami m. in. samodzielności,
                                    przedsiębiorczości, orientacji na klienta i rynek, działania kalkulacyjnego w
                                    konkretnych decyzjach.</p>
                                </p>
                                <a class="close-reveal-modal">&#215;</a>
                            </div>
                        </div>
                        <div class="content" id="panel14aa">
                            <h2>Magdalena Bąk</h2>
                            <p><strong>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której uzyskał magisterium.</strong></p>
                            <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929. Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w organizacji i technice handlu. Uczył tam też języka francuskiego. </p>
                            <p>This is the first panel of the basic tab example. This is the first panel of the basic tab example.</p>
                            <a class="slide--more" data-reveal-id="patron-14aa" href="#">Szczegóły</a>
                            <div id="patron-14aa" class="reveal-modal member__details" data-reveal>
                                <h3 class="slide__subTitle">Prof. Leon Koźmiński</h3>
                                <figure class="text-center">
                                    <img class="hide-for-small-only rsImg"
                                         src="http://m.natemat.pl/3f379ad7ee5b2cc7124337f3097244ed,640,0,0,0.jpg"
                                         data-rsw="340" data-rsh="225">
                                </figure>
                                <p class="slide__intro">

                                <p>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor
                                    urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w
                                    Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której
                                    uzyskał magisterium.</p>

                                <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929.
                                    Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w
                                    organizacji i technice handlu. Uczył tam też języka francuskiego. </p>

                                <p>We wrześniu 1939 roku walczył jako porucznik w 21 pułku piechoty. Udało mu się
                                    uniknąć niewoli rosyjskiej. Idea szerzenia wiedzy była zawsze bardzo Mu bliska.
                                    W czasie okupacji niemieckiej uczył w Miejskiej Szkole Handlowej w Warszawie,
                                    która była faktycznie zakonspirowaną SGH oraz w Instytucie Morskim przy tajnym
                                    Uniwersytecie Ziem Zachodnich. Był wielki patriotą. Działał w konspiracji, w
                                    komórce „Z”- „Ziemie Zachodnie”, przy Delegaturze rządu londyńskiego na kraj. W
                                    stopniu porucznika walczył na Mokotowie w Powstaniu Warszawskim jako członek
                                    dowództwa Zgrupowania AK „Baszta”. Po upadku Powstania został wywieziony do
                                    Niemiec. </p>

                                <p>Od roku 1947 Profesor współorganizował ponowne uruchomienie SGH, w której był
                                    kierownikiem katedry i dziekanem. Profesor sprzyjał wszystkiemu, co w tym
                                    zakresie mogło być przenoszone z doświadczeń zachodnich, wykorzystywał
                                    znajomości i literaturę, a przy okazji wspierał rozwój młodych pracowników
                                    naukowych. </p>

                                <p>Głównie w oparciu o wysiłek Profesora ukształtowana została kadra Instytutu
                                    Handlu Wewnętrznego, którego został dyrektorem. Część kadry do dziś kontynuuje w
                                    rozwiniętej formule wątki regulacyjne, marketingowe i inne kierunki badań
                                    wspierające współczesny rynek i działające przedsiębiorstwa. </p>

                                <p>Na tych i innych obszarach badań tworzył warunki do adaptacji szerokiej
                                    instrumentacji biznesowej, które we współczesnych procesach zmian znalazły
                                    sprzyjający klimat czyli otwarte nastawienie do postępu rynkowego, jaki
                                    przyniósł koniec XX wieku w naszym kraju. </p>

                                <p>Wkład Profesora w kształtowanie klimatu przedsiębiorczości i prowadzenie badań z
                                    zakresu organizacji i zarządzania procentował w praktyce. Jako Ekspert działał
                                    on w gremiach oceniających projekty inwestycyjne, które kształtowały ówczesne
                                    formy infrastruktury rynku. Przenosił na ich grunt doświadczenia z praktyk
                                    Europy Zachodniej, ale też z własnych badań i Jego zespołów, wywierając wpływ na
                                    postęp często wybiegający naprzód o wiele lat. Angażował się w procesy szkolenia
                                    i doskonalenia kadry menedżerskiej, której przekazywał najnowsze doświadczenia
                                    europejskie i kształtował sposób myślenia kategoriami m. in. samodzielności,
                                    przedsiębiorczości, orientacji na klienta i rynek, działania kalkulacyjnego w
                                    konkretnych decyzjach.</p>
                                </p>
                                <a class="close-reveal-modal">&#215;</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <!--<section id="section-7" class="rowWrapper rowSlide section__orgpubliczna">-->
            <!--<h2>Patroni</h2>-->
            <!--<figure class="crossSectionArrow--left"><img src="gfx/8_strzalka.png" alt="" title=""/></figure>-->
        <!--</section>-->

        <!-- Sekcja 8. Patroni -->
        <section id="section-8" class="rowWrapper rowSlide section__patroni">
            <div class="row">
                <div class="large-12 columns">
                    <header class="section__header text-center">
                        <h2 class="section__title">Patroni</h2>
                    </header>
                    <div class="section__content  small-only-text-center">
                        <dl class="tabs" data-tab>
                            <dd class="active small-12 medium-3 columns">
                                <a class="hide-for-medium-up" href="#panel1a">Prof. Leon Koźmiński</a>
                                <a class="hidden-for-small-only" href="#panel1a"><img src="gfx/5_prezes.png" alt="" /></a>
                            </dd>
                            <dd class="small-12 medium-3 columns">
                                <a class="hide-for-medium-up" href="#panel2a">Małgorzata Heit</a>
                                <a class="hidden-for-small-only" href="#panel2a"><img src="gfx/5_prezes.png" alt="" /></a>
                            </dd>
                            <dd class="small-12 medium-3 columns">
                                <a class="hide-for-medium-up" href="#panel3a">Teresa Nowacka</a>
                                <a class="hidden-for-small-only" href="#panel3a"><img src="gfx/5_prezes.png" alt="" /></a>
                            </dd>
                            <dd class="small-12 medium-3 columns">
                                <a class="hide-for-medium-up" href="#panel4a">Magdalena Bąk</a>
                                <a class="hidden-for-small-only" href="#panel4a"><img src="gfx/5_prezes.png" alt="" /></a>
                            </dd>
                        </dl>
                        <div class="tabs-content text-center">
                            <div class="content active" id="panel1a">
                                <h2>Prof. Leon Koźmiński</h2>
                                <p><strong>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której uzyskał magisterium.</strong></p>
                                <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929. Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w organizacji i technice handlu. Uczył tam też języka francuskiego. </p>
                                <p>This is the first panel of the basic tab example. This is the first panel of the basic tab example.</p>
                                <a class="slide--more" data-reveal-id="patron-1a" href="#">Szczegóły</a>
                                <div id="patron-1a" class="reveal-modal member__details" data-reveal>
                                    <h3 class="slide__subTitle">Prof. Leon Koźmiński</h3>
                                    <figure class="text-center">
                                        <img class="hide-for-small-only rsImg"
                                             src="http://m.natemat.pl/3f379ad7ee5b2cc7124337f3097244ed,640,0,0,0.jpg"
                                             data-rsw="340" data-rsh="225">
                                    </figure>
                                    <p class="slide__intro">

                                    <p>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor
                                        urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w
                                        Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której
                                        uzyskał magisterium.</p>

                                    <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929.
                                        Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w
                                        organizacji i technice handlu. Uczył tam też języka francuskiego. </p>

                                    <p>We wrześniu 1939 roku walczył jako porucznik w 21 pułku piechoty. Udało mu się
                                        uniknąć niewoli rosyjskiej. Idea szerzenia wiedzy była zawsze bardzo Mu bliska.
                                        W czasie okupacji niemieckiej uczył w Miejskiej Szkole Handlowej w Warszawie,
                                        która była faktycznie zakonspirowaną SGH oraz w Instytucie Morskim przy tajnym
                                        Uniwersytecie Ziem Zachodnich. Był wielki patriotą. Działał w konspiracji, w
                                        komórce „Z”- „Ziemie Zachodnie”, przy Delegaturze rządu londyńskiego na kraj. W
                                        stopniu porucznika walczył na Mokotowie w Powstaniu Warszawskim jako członek
                                        dowództwa Zgrupowania AK „Baszta”. Po upadku Powstania został wywieziony do
                                        Niemiec. </p>

                                    <p>Od roku 1947 Profesor współorganizował ponowne uruchomienie SGH, w której był
                                        kierownikiem katedry i dziekanem. Profesor sprzyjał wszystkiemu, co w tym
                                        zakresie mogło być przenoszone z doświadczeń zachodnich, wykorzystywał
                                        znajomości i literaturę, a przy okazji wspierał rozwój młodych pracowników
                                        naukowych. </p>

                                    <p>Głównie w oparciu o wysiłek Profesora ukształtowana została kadra Instytutu
                                        Handlu Wewnętrznego, którego został dyrektorem. Część kadry do dziś kontynuuje w
                                        rozwiniętej formule wątki regulacyjne, marketingowe i inne kierunki badań
                                        wspierające współczesny rynek i działające przedsiębiorstwa. </p>

                                    <p>Na tych i innych obszarach badań tworzył warunki do adaptacji szerokiej
                                        instrumentacji biznesowej, które we współczesnych procesach zmian znalazły
                                        sprzyjający klimat czyli otwarte nastawienie do postępu rynkowego, jaki
                                        przyniósł koniec XX wieku w naszym kraju. </p>

                                    <p>Wkład Profesora w kształtowanie klimatu przedsiębiorczości i prowadzenie badań z
                                        zakresu organizacji i zarządzania procentował w praktyce. Jako Ekspert działał
                                        on w gremiach oceniających projekty inwestycyjne, które kształtowały ówczesne
                                        formy infrastruktury rynku. Przenosił na ich grunt doświadczenia z praktyk
                                        Europy Zachodniej, ale też z własnych badań i Jego zespołów, wywierając wpływ na
                                        postęp często wybiegający naprzód o wiele lat. Angażował się w procesy szkolenia
                                        i doskonalenia kadry menedżerskiej, której przekazywał najnowsze doświadczenia
                                        europejskie i kształtował sposób myślenia kategoriami m. in. samodzielności,
                                        przedsiębiorczości, orientacji na klienta i rynek, działania kalkulacyjnego w
                                        konkretnych decyzjach.</p>
                                    </p>
                                    <a class="close-reveal-modal">&#215;</a>
                                </div>
                            </div>
                            <div class="content" id="panel2a">
                                <h2>Małgorzata Heit</h2>
                                <p><strong>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której uzyskał magisterium.</strong></p>
                                <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929. Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w organizacji i technice handlu. Uczył tam też języka francuskiego. </p>
                                <p>This is the first panel of the basic tab example. This is the first panel of the basic tab example.</p>
                                <a class="slide--more" data-reveal-id="patron-2a" href="#">Szczegóły</a>
                                <div id="patron-2a" class="reveal-modal member__details" data-reveal>
                                    <h3 class="slide__subTitle">Prof. Leon Koźmiński</h3>
                                    <figure class="text-center">
                                        <img class="hide-for-small-only rsImg"
                                             src="http://m.natemat.pl/3f379ad7ee5b2cc7124337f3097244ed,640,0,0,0.jpg"
                                             data-rsw="340" data-rsh="225">
                                    </figure>
                                    <p class="slide__intro">

                                    <p>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor
                                        urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w
                                        Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której
                                        uzyskał magisterium.</p>

                                    <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929.
                                        Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w
                                        organizacji i technice handlu. Uczył tam też języka francuskiego. </p>

                                    <p>We wrześniu 1939 roku walczył jako porucznik w 21 pułku piechoty. Udało mu się
                                        uniknąć niewoli rosyjskiej. Idea szerzenia wiedzy była zawsze bardzo Mu bliska.
                                        W czasie okupacji niemieckiej uczył w Miejskiej Szkole Handlowej w Warszawie,
                                        która była faktycznie zakonspirowaną SGH oraz w Instytucie Morskim przy tajnym
                                        Uniwersytecie Ziem Zachodnich. Był wielki patriotą. Działał w konspiracji, w
                                        komórce „Z”- „Ziemie Zachodnie”, przy Delegaturze rządu londyńskiego na kraj. W
                                        stopniu porucznika walczył na Mokotowie w Powstaniu Warszawskim jako członek
                                        dowództwa Zgrupowania AK „Baszta”. Po upadku Powstania został wywieziony do
                                        Niemiec. </p>

                                    <p>Od roku 1947 Profesor współorganizował ponowne uruchomienie SGH, w której był
                                        kierownikiem katedry i dziekanem. Profesor sprzyjał wszystkiemu, co w tym
                                        zakresie mogło być przenoszone z doświadczeń zachodnich, wykorzystywał
                                        znajomości i literaturę, a przy okazji wspierał rozwój młodych pracowników
                                        naukowych. </p>

                                    <p>Głównie w oparciu o wysiłek Profesora ukształtowana została kadra Instytutu
                                        Handlu Wewnętrznego, którego został dyrektorem. Część kadry do dziś kontynuuje w
                                        rozwiniętej formule wątki regulacyjne, marketingowe i inne kierunki badań
                                        wspierające współczesny rynek i działające przedsiębiorstwa. </p>

                                    <p>Na tych i innych obszarach badań tworzył warunki do adaptacji szerokiej
                                        instrumentacji biznesowej, które we współczesnych procesach zmian znalazły
                                        sprzyjający klimat czyli otwarte nastawienie do postępu rynkowego, jaki
                                        przyniósł koniec XX wieku w naszym kraju. </p>

                                    <p>Wkład Profesora w kształtowanie klimatu przedsiębiorczości i prowadzenie badań z
                                        zakresu organizacji i zarządzania procentował w praktyce. Jako Ekspert działał
                                        on w gremiach oceniających projekty inwestycyjne, które kształtowały ówczesne
                                        formy infrastruktury rynku. Przenosił na ich grunt doświadczenia z praktyk
                                        Europy Zachodniej, ale też z własnych badań i Jego zespołów, wywierając wpływ na
                                        postęp często wybiegający naprzód o wiele lat. Angażował się w procesy szkolenia
                                        i doskonalenia kadry menedżerskiej, której przekazywał najnowsze doświadczenia
                                        europejskie i kształtował sposób myślenia kategoriami m. in. samodzielności,
                                        przedsiębiorczości, orientacji na klienta i rynek, działania kalkulacyjnego w
                                        konkretnych decyzjach.</p>
                                    </p>
                                    <a class="close-reveal-modal">&#215;</a>
                                </div>
                            </div>
                            <div class="content" id="panel3a">
                                <h2>Teresa Nowacka</h2>
                                <p><strong>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której uzyskał magisterium.</strong></p>
                                <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929. Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w organizacji i technice handlu. Uczył tam też języka francuskiego. </p>
                                <p>This is the first panel of the basic tab example. This is the first panel of the basic tab example.</p>
                                <a class="slide--more" data-reveal-id="patron-3a" href="#">Szczegóły</a>
                                <div id="patron-3a" class="reveal-modal member__details" data-reveal>
                                    <h3 class="slide__subTitle">Prof. Leon Koźmiński</h3>
                                    <figure class="text-center">
                                        <img class="hide-for-small-only rsImg"
                                             src="http://m.natemat.pl/3f379ad7ee5b2cc7124337f3097244ed,640,0,0,0.jpg"
                                             data-rsw="340" data-rsh="225">
                                    </figure>
                                    <p class="slide__intro">

                                    <p>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor
                                        urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w
                                        Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której
                                        uzyskał magisterium.</p>

                                    <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929.
                                        Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w
                                        organizacji i technice handlu. Uczył tam też języka francuskiego. </p>

                                    <p>We wrześniu 1939 roku walczył jako porucznik w 21 pułku piechoty. Udało mu się
                                        uniknąć niewoli rosyjskiej. Idea szerzenia wiedzy była zawsze bardzo Mu bliska.
                                        W czasie okupacji niemieckiej uczył w Miejskiej Szkole Handlowej w Warszawie,
                                        która była faktycznie zakonspirowaną SGH oraz w Instytucie Morskim przy tajnym
                                        Uniwersytecie Ziem Zachodnich. Był wielki patriotą. Działał w konspiracji, w
                                        komórce „Z”- „Ziemie Zachodnie”, przy Delegaturze rządu londyńskiego na kraj. W
                                        stopniu porucznika walczył na Mokotowie w Powstaniu Warszawskim jako członek
                                        dowództwa Zgrupowania AK „Baszta”. Po upadku Powstania został wywieziony do
                                        Niemiec. </p>

                                    <p>Od roku 1947 Profesor współorganizował ponowne uruchomienie SGH, w której był
                                        kierownikiem katedry i dziekanem. Profesor sprzyjał wszystkiemu, co w tym
                                        zakresie mogło być przenoszone z doświadczeń zachodnich, wykorzystywał
                                        znajomości i literaturę, a przy okazji wspierał rozwój młodych pracowników
                                        naukowych. </p>

                                    <p>Głównie w oparciu o wysiłek Profesora ukształtowana została kadra Instytutu
                                        Handlu Wewnętrznego, którego został dyrektorem. Część kadry do dziś kontynuuje w
                                        rozwiniętej formule wątki regulacyjne, marketingowe i inne kierunki badań
                                        wspierające współczesny rynek i działające przedsiębiorstwa. </p>

                                    <p>Na tych i innych obszarach badań tworzył warunki do adaptacji szerokiej
                                        instrumentacji biznesowej, które we współczesnych procesach zmian znalazły
                                        sprzyjający klimat czyli otwarte nastawienie do postępu rynkowego, jaki
                                        przyniósł koniec XX wieku w naszym kraju. </p>

                                    <p>Wkład Profesora w kształtowanie klimatu przedsiębiorczości i prowadzenie badań z
                                        zakresu organizacji i zarządzania procentował w praktyce. Jako Ekspert działał
                                        on w gremiach oceniających projekty inwestycyjne, które kształtowały ówczesne
                                        formy infrastruktury rynku. Przenosił na ich grunt doświadczenia z praktyk
                                        Europy Zachodniej, ale też z własnych badań i Jego zespołów, wywierając wpływ na
                                        postęp często wybiegający naprzód o wiele lat. Angażował się w procesy szkolenia
                                        i doskonalenia kadry menedżerskiej, której przekazywał najnowsze doświadczenia
                                        europejskie i kształtował sposób myślenia kategoriami m. in. samodzielności,
                                        przedsiębiorczości, orientacji na klienta i rynek, działania kalkulacyjnego w
                                        konkretnych decyzjach.</p>
                                    </p>
                                    <a class="close-reveal-modal">&#215;</a>
                                </div>
                            </div>
                            <div class="content" id="panel4a">
                                <h2>Magdalena Bąk</h2>
                                <p><strong>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której uzyskał magisterium.</strong></p>
                                <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929. Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w organizacji i technice handlu. Uczył tam też języka francuskiego. </p>
                                <p>This is the first panel of the basic tab example. This is the first panel of the basic tab example.</p>
                                <a class="slide--more" data-reveal-id="patron-4a" href="#">Szczegóły</a>
                                <div id="patron-4a" class="reveal-modal member__details" data-reveal>
                                    <h3 class="slide__subTitle">Prof. Leon Koźmiński</h3>
                                    <figure class="text-center">
                                        <img class="hide-for-small-only rsImg"
                                             src="http://m.natemat.pl/3f379ad7ee5b2cc7124337f3097244ed,640,0,0,0.jpg"
                                             data-rsw="340" data-rsh="225">
                                    </figure>
                                    <p class="slide__intro">

                                    <p>Wybór Prof. Leona Koźmińskiego na patrona fundacji nie był przypadkowy. Profesor
                                        urodził się 1904 roku na Ukrainie. Szkołę średnią ukończył w Lozannie, w
                                        Szwajcarii. Następnie studiował w kraju, w Szkole Głównej Handlowej, w której
                                        uzyskał magisterium.</p>

                                    <p>Stopień doktora obronił na Sorbonie, w Paryżu, w wieku 26 lat. Był to rok 1929.
                                        Habilitował się w latach 30-tych. Był docentem w SGH specjalizującym się w
                                        organizacji i technice handlu. Uczył tam też języka francuskiego. </p>

                                    <p>We wrześniu 1939 roku walczył jako porucznik w 21 pułku piechoty. Udało mu się
                                        uniknąć niewoli rosyjskiej. Idea szerzenia wiedzy była zawsze bardzo Mu bliska.
                                        W czasie okupacji niemieckiej uczył w Miejskiej Szkole Handlowej w Warszawie,
                                        która była faktycznie zakonspirowaną SGH oraz w Instytucie Morskim przy tajnym
                                        Uniwersytecie Ziem Zachodnich. Był wielki patriotą. Działał w konspiracji, w
                                        komórce „Z”- „Ziemie Zachodnie”, przy Delegaturze rządu londyńskiego na kraj. W
                                        stopniu porucznika walczył na Mokotowie w Powstaniu Warszawskim jako członek
                                        dowództwa Zgrupowania AK „Baszta”. Po upadku Powstania został wywieziony do
                                        Niemiec. </p>

                                    <p>Od roku 1947 Profesor współorganizował ponowne uruchomienie SGH, w której był
                                        kierownikiem katedry i dziekanem. Profesor sprzyjał wszystkiemu, co w tym
                                        zakresie mogło być przenoszone z doświadczeń zachodnich, wykorzystywał
                                        znajomości i literaturę, a przy okazji wspierał rozwój młodych pracowników
                                        naukowych. </p>

                                    <p>Głównie w oparciu o wysiłek Profesora ukształtowana została kadra Instytutu
                                        Handlu Wewnętrznego, którego został dyrektorem. Część kadry do dziś kontynuuje w
                                        rozwiniętej formule wątki regulacyjne, marketingowe i inne kierunki badań
                                        wspierające współczesny rynek i działające przedsiębiorstwa. </p>

                                    <p>Na tych i innych obszarach badań tworzył warunki do adaptacji szerokiej
                                        instrumentacji biznesowej, które we współczesnych procesach zmian znalazły
                                        sprzyjający klimat czyli otwarte nastawienie do postępu rynkowego, jaki
                                        przyniósł koniec XX wieku w naszym kraju. </p>

                                    <p>Wkład Profesora w kształtowanie klimatu przedsiębiorczości i prowadzenie badań z
                                        zakresu organizacji i zarządzania procentował w praktyce. Jako Ekspert działał
                                        on w gremiach oceniających projekty inwestycyjne, które kształtowały ówczesne
                                        formy infrastruktury rynku. Przenosił na ich grunt doświadczenia z praktyk
                                        Europy Zachodniej, ale też z własnych badań i Jego zespołów, wywierając wpływ na
                                        postęp często wybiegający naprzód o wiele lat. Angażował się w procesy szkolenia
                                        i doskonalenia kadry menedżerskiej, której przekazywał najnowsze doświadczenia
                                        europejskie i kształtował sposób myślenia kategoriami m. in. samodzielności,
                                        przedsiębiorczości, orientacji na klienta i rynek, działania kalkulacyjnego w
                                        konkretnych decyzjach.</p>
                                    </p>
                                    <a class="close-reveal-modal">&#215;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sekcja 9. Statut -->
        <section id="section-9" class="rowWrapper rowSlide section__statut section--hasArrow">
            <div class="row">
                <div class="large-12 columns">
                    <header class="section__header text-center">
                        <h1 class="section__title">Statut</h1>
                    </header>
                    <div class="section__content">
                        <div id="slider-statut" class="royalSlider contentSlider rsDefault">
                            <div class="text-center">
                                <p>§ 1.</p>
                                <p><strong>Praska Fundacja Nauki i Kultury im. Leona Koźmińskiego zwana dalej Fundacją zostaje utworzona przez Andrzeja Krzysztofa Koźmińskiego,</strong></p>
                                <p>zwanego dalej Fundatorem, aktem notarialnym z dnia dwunastego sierpnia dwa tysiące czwartego roku (12.08.2004) sporządzonym przed notariuszem Tomaszem Bąbka, prowadzącym Kancelarię Notarialną w Warszawie, przy ulicy Nowogrodzkiej nr 7/9 m. 24, przybyłym do budynku przy ulicy Jagiellońskiej 59 w Warszawie.</p>
                                <p>§ 2.</p>
                                <p>Fundacja działa na podstawie przepisów ustawy z dnia 6 kwietnia 1984 roku o fundacjach (Dz. U. Nr 21 póź. 97, z późn. zmianami) oraz niniejszego statutu.</p>
                            </div>
                            <div class="text-center">
                                <p>§ 3.</p>
                                <p>Fundacja działa na terenie Rzeczpospolitej Polskiej. Siedzibą Fundacji jest miasto stołeczne Warszawa. Dla właściwego realizowania celów społecznych i gospodarczych Fundacja może tworzyć oddziały oraz prowadzić działalność również poza granicami Rzeczpospolitej Polskiej. Czas trwania Fundacji jest nieograniczony.</p>
                                <p>§ 4.</p>
                                <p>Praska Fundacja Nauki i Kultury im. Leona Koźmińskiego zwana dalej Fundacją zostaje utworzona przez Andrzeja Krzysztofa Koźmińskiego, zwanego dalej Fundatorem, aktem notarialnym z dnia dwunastego sierpnia dwa tysiące czwartego roku (12.08.2004) sporządzonym przed notariuszem Tomaszem Bąbka, prowadzącym Kancelarię Notarialną w Warszawie, przy ulicy Nowogrodzkiej nr 7/9 m. 24, przybyłym do budynku przy ulicy Jagiellońskiej 59 w Warszawie.</p>
                            </div>
                            <div class="text-center">
                                <p>§ 5.</p>
                                <p>Fundacja działa na podstawie przepisów ustawy z dnia 6 kwietnia 1984 roku o fundacjach (Dz. U. Nr 21 póź. 97, z późn. zmianami) oraz niniejszego statutu.</p>
                                <p>§ 6.</p>
                                <p>Fundacja działa na terenie Rzeczpospolitej Polskiej. Siedzibą Fundacji jest miasto stołeczne Warszawa. Dla właściwego realizowania celów społecznych i gospodarczych Fundacja może tworzyć oddziały oraz prowadzić działalność również poza granicami Rzeczpospolitej Polskiej. Czas trwania Fundacji jest nieograniczony.</p>
                            </div>
                            <div class="text-center">
                                <p>§ 7.</p>
                                <p>Praska Fundacja Nauki i Kultury im. Leona Koźmińskiego zwana dalej Fundacją zostaje utworzona przez Andrzeja Krzysztofa Koźmińskiego, zwanego dalej Fundatorem, aktem notarialnym z dnia dwunastego sierpnia dwa tysiące czwartego roku (12.08.2004) sporządzonym przed notariuszem Tomaszem Bąbka, prowadzącym Kancelarię Notarialną w Warszawie, przy ulicy Nowogrodzkiej nr 7/9 m. 24, przybyłym do budynku przy ulicy Jagiellońskiej 59 w Warszawie.</p>
                                <p>§ 8.</p>
                                <p>Fundacja działa na podstawie przepisów ustawy z dnia 6 kwietnia 1984 roku o fundacjach (Dz. U. Nr 21 póź. 97, z późn. zmianami) oraz niniejszego statutu.</p>
                            </div>
                            <div class="text-center">
                                <p>§ 9.</p>
                                <p>Fundacja działa na terenie Rzeczpospolitej Polskiej. Siedzibą Fundacji jest miasto stołeczne Warszawa. Dla właściwego realizowania celów społecznych i gospodarczych Fundacja może tworzyć oddziały oraz prowadzić działalność również poza granicami Rzeczpospolitej Polskiej. Czas trwania Fundacji jest nieograniczony.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="crossSectionArrow--left"><img src="gfx/8_strzalka.png" alt="" title=""/></figure>
            </div>
        </section>

        <!-- Sekcja 10. Sprawozdania finansowe -->
        <section id="section-10" class="rowWrapper rowSlide section__sprawozdania">
            <div class="row">
                <div class="large-12 columns">
                    <header class="section__header text-center">
                        <h1 class="section__title">Sprawozdania finansowe</h1>
                    </header>
                </div>
            </div>
            <section class="subSection__rowWrapper">
                <div class="row">
                    <div class="section__content">
                        <div id="content-slider-2" class="royalSlider contentSlider rsDefault">
                            <div class="small-12 medium-6 columns">
                                <div class="column__header hidden-for-small"></div>
                                <span class="sep hide-for-small"></span>
                                <div>
                                    <ul class="list__files">
                                        <li class="list__item">
                                            <a href="#" title="">Sprawozdanie finansowe 2012</a>
                                        </li>
                                        <li class="list__item">
                                            <a href="#" title="">Sprawozdanie finansowe 2012</a>

                                        </li>
                                        <li class="list__item">
                                            <a href="#" title="">Sprawozdanie finansowe 2012</a>

                                        </li>
                                        <li class="list__item">
                                            <a href="#" title="">Sprawozdanie finansowe 2012</a>

                                        </li>
                                        <li class="list__item">
                                            <a href="#" title="">Sprawozdanie finansowe 2012</a>
                                        </li>
                                        <li class="list__item">
                                            <a href="#" title="">Sprawozdanie finansowe 2012</a>

                                        </li>
                                        <li class="list__item">
                                            <a href="#" title="">Sprawozdanie finansowe 2012</a>

                                        </li>
                                        <li class="list__item">
                                            <a href="#" title="">Sprawozdanie finansowe 2012</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="small-12 medium-6 columns">
                                <div class="column__header hidden-for-small"></div>
                                <span class="sep hide-for-small"></span>
                                <div>
                                    <ul class="list__files">
                                        <li class="list__item">
                                            <a href="#" title="">Sprawozdanie finansowe 2012</a>
                                        </li>
                                        <li class="list__item">
                                            <a href="#" title="">Sprawozdanie finansowe 2012</a>

                                        </li>
                                        <li class="list__item">
                                            <a href="#" title="">Sprawozdanie finansowe 2012</a>

                                        </li>
                                        <li class="list__item">
                                            <a href="#" title="">Sprawozdanie finansowe 2012</a>

                                        </li>
                                        <li class="list__item">
                                            <a href="#" title="">Sprawozdanie finansowe 2012</a>
                                        </li>
                                        <li class="list__item">
                                            <a href="#" title="">Sprawozdanie finansowe 2012</a>

                                        </li>
                                        <li class="list__item">
                                            <a href="#" title="">Sprawozdanie finansowe 2012</a>

                                        </li>
                                        <li class="list__item">
                                            <a href="#" title="">Sprawozdanie finansowe 2012</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
        </section>

        <!-- Sekcja 11. Partnerzy Fundacji -->
        <section id="section-11" class="rowWrapper rowSlide section__partnerzy  section--hasArrow">
            <div class="row">
                <div class="large-12 columns">
                    <header class="section__header text-center">
                        <h1 class="section__title">Partnerzy Fundacji</h1>
                    </header>
                </div>
            </div>
            <div class="row">
                <div class="small-12 medium-4 columns">
                    <div class="partner">
                        <div class="imp--wrapper"> <img src="gfx/9_partnerzy_logo.jpg" alt="" title=""></div>
                        <h4 class="partner--name">Akademia Leona Koźmińskiego</h4>
                        <p class="partner--description">
                            Polska niepubliczna uczelnia
                            akademicka, specjalizująca się
                            w zakresie nauk ekonomicznych,
                            humanistycznych i prawnych.
                        </p>
                        <a class="partner_www">www.kozminski.edui.pl</a>
                    </div>
                </div>
                <div class="small-12 medium-4  columns">
                    <div class="partner">
                        <div class="imp--wrapper"><img src="gfx/9_partnerzy_logo.jpg" alt="" title=""></div>
                        <h4 class="partner--name">Akademia Leona Koźmińskiego</h4>
                        <p class="partner--description">
                            Polska niepubliczna uczelnia
                            akademicka, specjalizująca się
                            w zakresie nauk ekonomicznych,
                            humanistycznych i prawnych.
                        </p>
                        <a class="partner_www">www.kozminski.edui.pl</a>
                    </div>
                </div>
                <div class="small-12 medium-4 columns">
                    <div class="partner">
                        <div class="imp--wrapper"><img src="gfx/9_partnerzy_logo.jpg" alt="" title=""></div>
                        <h4 class="partner--name">Akademia Leona Koźmińskiego</h4>
                        <p class="partner--description">
                            Polska niepubliczna uczelnia
                            akademicka, specjalizująca się
                            w zakresie nauk ekonomicznych,
                            humanistycznych i prawnych.
                        </p>
                        <a class="partner_www">www.kozminski.edui.pl</a>
                    </div>
                </div>
            </div>
            <figure class="crossSectionArrow--right"><img src="gfx/9_strzalka.png" alt="" title=""/></figure>
        </section>

        <!-- Sekcja 12. Instytucje partnerskie w projektach -->
        <section id="section-12" class="rowWrapper rowSlide section__instytucjepartnerskie">
            <div class="row">
                <div class="large-12 columns">
                    <header class="section__header text-center">
                        <h2 class="section__title">
                            <span class="sep sep--top"></span>
                            Instytucje partnerskie
                            <span>w projektach:</span>
                            <span class="sep sep--bottom"></span>
                        </h2>
                    </header>
                </div>
            </div>
        </section>

        <!-- Sekcja 12a. Instytucje partnerskie w projektach -->
        <section id="section-12a" class="rowWrapper rowSlide section__partnerzy2">
            <div class="row">
                <div class="small-12 medium-4 columns">
                    <div class="partner">
                        <div class="imp--wrapper"><img src="gfx/9_partnerzy_logo_1.jpg" alt="" title=""></div>
                        <h4 class="partner--name">Akademia Leona Koźmińskiego</h4>
                        <p class="partner--description">
                            Polska niepubliczna uczelnia
                            akademicka, specjalizująca się
                            w zakresie nauk ekonomicznych,
                            humanistycznych i prawnych.
                        </p>
                        <a class="partner_www">www.kozminski.edui.pl</a>
                    </div>
                </div>
                <div class="small-12 medium-4  columns">
                    <div class="partner">
                        <div class="imp--wrapper"><img src="gfx/9_partnerzy_logo_2.jpg" alt="" title=""></div>
                        <h4 class="partner--name">Akademia Leona Koźmińskiego</h4>
                        <p class="partner--description">
                            Polska niepubliczna uczelnia
                            akademicka, specjalizująca się
                            w zakresie nauk ekonomicznych,
                            humanistycznych i prawnych.
                        </p>
                        <a class="partner_www">www.kozminski.edui.pl</a>
                    </div>
                </div>
                <div class="small-12 medium-4 columns">
                    <div class="partner">
                        <div class="imp--wrapper"><img src="gfx/9_partnerzy_logo_3.jpg" alt="" title=""></div>
                        <h4 class="partner--name">Akademia Leona Koźmińskiego</h4>
                        <p class="partner--description">
                            Polska niepubliczna uczelnia
                            akademicka, specjalizująca się
                            w zakresie nauk ekonomicznych,
                            humanistycznych i prawnych.
                        </p>
                        <a class="partner_www">www.kozminski.edui.pl</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="small-12 medium-4 columns">
                    <div class="partner">
                        <div class="imp--wrapper"><img src="gfx/9_partnerzy_logo_1.jpg" alt="" title=""></div>
                        <h4 class="partner--name">Akademia Leona Koźmińskiego</h4>
                        <p class="partner--description">
                            Polska niepubliczna uczelnia
                            akademicka, specjalizująca się
                            w zakresie nauk ekonomicznych,
                            humanistycznych i prawnych.
                        </p>
                        <a class="partner_www">www.kozminski.edui.pl</a>
                    </div>
                </div>
                <div class="small-12 medium-4  columns">
                    <div class="partner">
                        <div class="imp--wrapper"><img src="gfx/9_partnerzy_logo_2.jpg" alt="" title=""></div>
                        <h4 class="partner--name">Akademia Leona Koźmińskiego</h4>
                        <p class="partner--description">
                            Polska niepubliczna uczelnia
                            akademicka, specjalizująca się
                            w zakresie nauk ekonomicznych,
                            humanistycznych i prawnych.
                        </p>
                        <a class="partner_www">www.kozminski.edui.pl</a>
                    </div>
                </div>
                <div class="small-12 medium-4 columns">
                    <div class="partner">
                        <div class="imp--wrapper"><img src="gfx/9_partnerzy_logo_3.jpg" alt="" title=""></div>
                        <h4 class="partner--name">Akademia Leona Koźmińskiego</h4>
                        <p class="partner--description">
                            Polska niepubliczna uczelnia
                            akademicka, specjalizująca się
                            w zakresie nauk ekonomicznych,
                            humanistycznych i prawnych.
                        </p>
                        <a class="partner_www">www.kozminski.edui.pl</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sekcje 13. Organizacja pożytku publicznego -->
        <section id="section-13" class="rowWrapper rowSlide section__podatek hide-for-small-only">
            <div class="row">
                <div class="large-12 columns">
                    <div class="section__content">
                        Fundacja Koźmińskich to organizacja pożytku publicznego.<br/>
                        Przekazując 1% swojego podatku wspomagasz realizację naszych projektów społecznych
                    </div>
                </div>
            </div>
        </section>

        <!-- Sekcja 14. Kontakt -->
        <section id="section-14" class="rowWrapper rowSlide section__kontakt">
            <div class="row">
                <div class="large-12 columns">
                    <header class="section__header text-center">
                        <h1 class="section__title">Kontakt</h1>
                    </header>
                </div>
            </div>
            <div class="row">
                <div class="medium-6 columns hide-for-small-only">
                    <h2>Formularz kontaktowy</h2>
                    <form>
                        <div class="row">
                            <div class="small-12 medium-9 columns">
                                <label>
                                    <input type="text" placeholder="Imię (wymagane)"/>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 medium-9  columns">
                                <label>
                                    <input type="text" placeholder="Nazwisko (wymagane)"/>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 medium-9  columns">
                                <label>
                                    <input type="text" placeholder="Temat"/>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 columns">
                                <label>
                                    <textarea placeholder="Wiadomość"></textarea>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">
                                <a href="#" class="button tiny">Wyślij</a>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="small-12 medium-6 columns small-text-center">
                    <ul class="kontakt__data">
                        <li class="kontakt__address">
                            <p class="kontakt__icon">
                                Fundacja <span>Koźmińskich</span>
                            </p>
                            <p>ul. Jagiellońska 59</p>
                            <p>03-301 Warszawa</p>
                        </li>
                        <li class="kontakt__email">
                            <p class="kontakt__icon">
                                e-mail: <a href="mailto:fundacja@kozminski.edu.pl">fundacja@kozminski.edu.pl</a>
                            </p>
                        </li>
                        <li class="kontakt__tel">
                            <p class="kontakt__icon">tel: 602 580 696</p>
                            <p>fax: 22 519 21 97</p>
                        </li>
                        <li class="kontakt__bank">
                            <p class="kontakt__icon">Bank PEKAO S.A. || o/Warszawa</p>
                            <p>nr rachunku: 91 1240 1024 1111 00 1005 2096 87</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Sekcja 15. Stopka -->
        <section id="section-15" class="rowWrapper rowSlide section__footer">
            <div class="row">
                <div class="large-12 columns">
                    <header class="section__header text-center">
                        <a id="logo__footer" class="hide-for-small-only" href="">
                            <img src="gfx/11_logo.png" alt="" title=""/>
                        </a>
                        <p>Fundacja Koźmińskich // copyright 2014</p>
                    </header>
                </div>
            </div>
        </section>

      </div>

      <script>
          /**
           * Self executing function to determine viewport height and set it as a value for welcome screen section
           */
          (function() {
              var oDiv = document.getElementById("home");
              var welcomeScreen = document.getElementById("section-1");
              var sOriginalOverflow = oDiv.style.overflow;
              var sOriginalHeight = oDiv.style.height;
              oDiv.style.overflow = "";
              oDiv.style.height = "";
              var height = oDiv.offsetHeight;
              oDiv.style.height = sOriginalHeight;
              oDiv.style.overflow = sOriginalOverflow;
              welcomeScreen.setAttribute("style","height:"+height+"px;");
              console.log("Real height is " + height);
          })();
      </script>

      <script src="js/require.js"></script>
      <script src="js/app.js"></script>
  </body>
</html>
