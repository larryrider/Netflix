<!doctype html>
<html>
<head>
    <title>Netflix</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="google" value="notranslate"/>
    <link type="text/css" rel="stylesheet" href="/css/home.css"/>
    <link rel="shortcut icon" href="/img/nficon2016.ico"/>
    <link type="text/css" rel="stylesheet" href="/css/welcome.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
    <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
</head>
<body>
    <div id="appMountPoint">
        <div lang="es-ES" dir="ltr" class="lang_es">
            <div class="bd dark-background has-uma lang_es" lang="es-ES">
                <div class="pinning-header">
                    <div class="pinning-header-container">
                        <div class="main-header has-billboard" style="min-height:50px">
                        <a id="prueba" aria-label="Netflix" class="logo icon-logoUpdate active" href="/home"></a>
                        <ul class="tabbed-primary-navigation" role="navigation">
                            <li class="navigation-menu" id="navigationMenu">
                                <a class="menu-trigger" role="button" aria-haspopup="true" style="color:#e50914">Menú</a>
                                <div class="sub-menu theme-lakira" style="opacity:0;display:none;" id="navOculto">
                                    <div class="callout-arrow"></div>
                                    <div class="topbar"></div>
                                    <ul class="sub-menu-list">
                                        <li class="sub-menu-item"><a href="/home" style="cursor:pointer;text-decoration:none;">Inicio</a></li>
                                        <li class="sub-menu-item"><a href="/admin" style="cursor:pointer;text-decoration:none;">Admin</a></li>
                                        <li class="sub-menu-item"><a class="current active" href="/admin/editDirector" style="cursor:pointer;text-decoration:none;">Editar Director</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="navigation-tab">
                                <a href="/home" style="cursor:pointer;text-decoration:none;">Inicio</a>
                            </li>
                            <li class="navigation-tab">
                                <a href="/admin" style="cursor:pointer;text-decoration:none;">Admin</a></li>
                            </li>
                            <li class="navigation-tab">
                                <a class="current active" href="/admin/editDirector" style="cursor:pointer;text-decoration:none;">Editar Director</a>
                            </li>
                        </ul>
                        <div class="secondary-navigation">
                            <div class="nav-element">
                                <div class="account-menu-item">
                                    <div class="account-dropdown-button" id="dropdownButton">
                                        <a style="z-index:unset">
                                            <span class="profile-link">
                                                <img class="profile-icon" src="/img/user_icon.png"/>
                                            </span>
                                        </a>
                                        <span class="caret"></span>
                                    </div>
                                    <div class="account-drop-down sub-menu theme-lakira" style="opacity:0;display:none;" id="menuOculto">
                                        <div class="ptrack-content">
                                            <ul class="account-links sub-menu-list" role="list" aria-label="Cuenta">
                                                <li class="sub-menu-item" role="listitem">
                                                    <a class="sub-menu-link" href="/admin">Administrar</a>
                                                </li>
                                                <div class="topbar"></div>
                                                <li class="sub-menu-item" role="listitem">
                                                    <a class="sub-menu-link" href="/logout">Cerrar sesión en Netflix</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sub-header">
                        <div class="subheader-shadow"></div>
                            <div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainView" role="main" style="min-height:400px;">
                    <div class="responsive-account-container" style="min-width:80px;width:800px;margin:0 auto;padding:30px;">
                        <div style="text-align:center;">
                            <h1 class="account-header">Editar Director</h1>
                            <div class="responsive-account-content">
                                <div class="account-section collapsable-panel clearfix membership-section-wrapper membership-section-with-button">
                                <section class="collapsable-section-content account-section-content" style="text-align:left;margin-left:200px;">
                                    </br>
                                    <form action="{{action('DirectorController@edit')}}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="PUT"></input>
                                        <input type="hidden" name="id" id="id"></input>
                                        <label>
                                            <span class="ui-label-text">Directores</span>
                                            <select data-placeholder="Seleccione un director" class="chosen-select" name="directors" style="min-width: 187px;">
                                                <option></option>
                                                @foreach($directors as $d)
                                                <option id="{{$d->id}}" name="{{$d->name}}">{{$d->name}}</option>
                                                @endforeach
                                            </select>
                                            <div id="inputs" name="inputs"></div>
                                        </label>
                                        </br>
                                        <label>
                                            <span class="ui-label-text">Nombre director</span>
                                            <input class="ui-text-input" type="text" name="name" id="name" value="" tabindex="1" required autofocus/>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </label>
                                        </br>
                                        </br>
                                        <div style="margin-left: 120px;">
                                            <button class="btn hero-cta-btn btn-large btn-red" type="submit" autocomplete="off" tabindex="4">
                                                Editar
                                            </button>
                                        </div>
                                    </form>
                                </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="contentinfo" class="member-footer">
                    <div class="social-links">
                        <a class="social-link" href="#" target="_blank" aria-label="facebook">
                        <svg class="svg-icon svg-icon-facebook-logo" focusable="true">
                            <use filter="" xlink:href="#facebook-logo"></use>
                        </svg>
                        </a>
                        <a class="social-link" href="#" target="_blank" aria-label="instagram">
                        <svg class="svg-icon svg-icon-instagram-logo" focusable="true">
                            <use filter="" xlink:href="#instagram-logo"></use>
                        </svg>
                        </a>
                        <a class="social-link" href="#" target="_blank" aria-label="twitter">
                        <svg class="svg-icon svg-icon-twitter-logo" focusable="true">
                            <use filter="" xlink:href="#twitter-logo"></use>
                        </svg>
                        </a>
                        <a class="social-link" href="#" target="_blank" aria-label="youtube">
                        <svg class="svg-icon svg-icon-youtube-logo" focusable="true">
                            <use filter="" xlink:href="#youtube-logo"></use>
                        </svg>
                        </a>
                    </div>
                    <ul class="member-footer-links">
                        <li class="member-footer-link-wrapper">
                            <a class="member-footer-link" href="#">
                                <span class="member-footer-link-content">Audio y subtítulos</span>
                            </a>
                        </li>
                        <li class="member-footer-link-wrapper">
                            <a class="member-footer-link" href="#">
                                <span class="member-footer-link-content">Descripción de audio</span>
                            </a>
                        </li>
                        <li class="member-footer-link-wrapper">
                            <a class="member-footer-link" href="#">
                                <span class="member-footer-link-content">Centro de ayuda</span>
                            </a>
                        </li>
                        <li class="member-footer-link-wrapper">
                            <a class="member-footer-link" href="#">
                                <span class="member-footer-link-content">Tarjetas regalo</span>
                            </a>
                        </li>
                        <li class="member-footer-link-wrapper">
                            <a class="member-footer-link" href="#">
                                <span class="member-footer-link-content">Zona de prensa</span>
                            </a>
                        </li>
                        <li class="member-footer-link-wrapper">
                            <a class="member-footer-link" href="#">
                                <span class="member-footer-link-content">Inversores</span>
                            </a>
                        </li>
                        <li class="member-footer-link-wrapper">
                            <a class="member-footer-link" href="#">
                                <span class="member-footer-link-content">Empleo</span>
                            </a>
                        </li>
                        <li class="member-footer-link-wrapper">
                            <a class="member-footer-link" href="#">
                                <span class="member-footer-link-content">Términos de uso</span>
                            </a>
                        </li>
                        <li class="member-footer-link-wrapper">
                            <a class="member-footer-link" href="#">
                                <span class="member-footer-link-content">Privacidad</span>
                            </a>
                        </li>
                        <li class="member-footer-link-wrapper">
                            <a class="member-footer-link" href="#">
                                <span class="member-footer-link-content">Preferencias de cookies</span>
                            </a>
                        </li>
                        <li class="member-footer-link-wrapper">
                            <a class="member-footer-link" href="#">
                                <span class="member-footer-link-content">Información corporativa</span>
                            </a>
                        </li>
                        <li class="member-footer-link-wrapper">
                            <a class="member-footer-link" href="#">
                                <span class="member-footer-link-content">Contáctanos</span>
                            </a>
                        </li>
                    </ul>
                    <div class="member-footer-service">
                        <button class="service-code">Código de servicio</button>
                    </div>
                    <div class="member-footer-copyright">
                        <span>
                            © 1997-2018 Netflix, Inc.
                        </span>
                    </div>
                </div>
                <div class="image-preloaders">
                    <span class="jawbone-images" ></span>
                </div>
                <svg style="height:0;width:0;display:block;" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <symbol id="chevron-down" viewBox="0 0 60 19">
                            <path fill="currentColor" d="M59.5615866,2.44258873 L31.1899791,17.6617954 C30.7515658,17.9123173 30.2505219,18.1002088 30.0626305,18.1002088 C29.874739,18.1002088 29.6242171,18.0375783 29.5615866,18.0375783 C29.4363257,17.9749478 28.9979123,17.7244259 28.559499,17.5365344 L0.501043841,2.44258873 C0.187891441,2.31732777 0,1.94154489 0,1.62839248 C0,1.50313152 0.0626304802,1.37787056 0.12526096,1.18997912 L0.501043841,0.501043841 C0.688935282,0.187891441 1.00208768,0 1.31524008,0 C1.50313152,0 1.62839248,0 1.75365344,0.12526096 L29.1858038,14.8434238 C29.3736952,14.9686848 29.6868476,15.0313152 30,15.0313152 C30.3131524,15.0313152 30.6263048,14.9686848 30.8141962,14.8434238 L58.2463466,0.12526096 C58.6847599,-0.12526096 59.2484342,0 59.4989562,0.501043841 L59.874739,1.18997912 C60.125261,1.62839248 60,2.19206681 59.5615866,2.44258873"></path>
                        </symbol>
                        <symbol id="add" viewBox="0 0 60 60">
                            <path fill="currentColor" d="M54.6886726,24.6861711 C57.6894231,24.7461866 60,26.9367348 60,30.0025004 C60,33.0582644 57.6894231,35.3088269 54.6886726,35.3738432 L35.3738432,35.3738432 L35.3738432,54.6836707 C35.3088269,57.6844212 33.0032509,60 29.9974996,60 C26.9967491,60 24.7511874,57.6844212 24.6861711,54.6836707 L24.6861711,35.3738432 L5.31132735,35.3738432 C2.37559424,35.3088269 0,32.99825 0,30.0025004 C0,27.0017511 2.37559424,24.7461866 5.31132735,24.6861711 L24.6861711,24.6861711 L24.6861711,5.30632652 C24.7511874,2.31057799 26.9367348,0 29.9974996,0 C33.0632663,0 35.3088269,2.31057799 35.3738432,5.30632652 L35.3738432,24.6861711 L54.6886726,24.6861711"></path>
                        </symbol>
                        <symbol id="check" viewBox="0 0 60 60">
                            <path fill="currentColor" d="M0,40.0650165 L9.37734421,27.5668918 L21.8754686,36.939235 L47.1867971,0 L59.1247815,9.25231308 L26.5016254,60 L0,40.0650165 L0,40.0650165 Z"></path>
                        </symbol>
                        <symbol id="episodes" viewBox="0 0 81 60">
                            <path fill="currentColor" d="M50.9256283,23.8269128 C51.5703585,23.8269128 52.096041,24.3485822 52.096041,25.0521669 L52.096041,58.7693954 C52.096041,59.4154628 51.5703585,60 50.9256283,60 L1.16907437,60 C0.525682496,60 0,59.4154628 0,58.7693954 L0,25.0521669 C0,24.3485822 0.525682496,23.8269128 1.16907437,23.8269128 L50.9256283,23.8269128 L50.9256283,23.8269128 Z M65.0936335,11.9983949 C65.7370253,11.9983949 66.2640451,12.5294275 66.2640451,13.2289995 L66.2640451,48.8777423 C66.2640451,49.5197969 65.7370253,50.0468166 65.0936335,50.0468166 L57.3060465,50.0468166 C56.6064745,50.0468166 56.0754419,49.5197969 56.0754419,48.8777423 L56.0754419,20.0214019 L13.1139646,20.0214019 C12.4692345,20.0214019 11.943553,19.4903692 11.943553,18.7907973 L11.943553,13.2289995 C11.943553,12.5294275 12.4692345,11.9983949 13.1139646,11.9983949 L65.0936335,11.9983949 L65.0936335,11.9983949 Z M79.0850725,0 C79.7271271,0 80.2554841,0.584537187 80.2554841,1.2306046 L80.2554841,34.7685928 C80.2554841,35.4735153 79.7271271,35.9991974 79.0850725,35.9991974 L71.2988228,35.9991974 C70.5965763,35.9991974 70.0682182,35.4735153 70.0682182,34.7685928 L70.0682182,8.01899411 L27.2766187,8.01899411 C26.5770466,8.01899411 26.0500269,7.49197436 26.0500269,6.84858217 L26.0500269,1.2306046 C26.0500269,0.584537187 26.5770466,0 27.2766187,0 L79.0850725,0 L79.0850725,0 Z"></path>
                        </symbol>
                        <symbol id="play" viewBox="0 0 53 60">
                            <path fill="currentColor" d="M50.7569187,27.4991667 C51.9423137,28.2494161 52.5025004,29.1247086 52.5025004,30 C52.5025004,31.0003335 51.9423137,31.8106033 50.7569187,32.5008333 L4.37645931,59.4398134 C3.62620889,59.8149386 2.9359789,60 2.37579226,60 C0.940313102,60 0.0650216737,58.8746244 0,56.8739573 L0,3.12604159 C0.0650216737,1.12037329 0.940313102,0.0600204233 2.37579226,0 C2.9359789,0 3.62620889,0.185061437 4.37645931,0.555185394 L50.7569187,27.4991667"></path>
                        </symbol>
                        <symbol id="edit" viewBox="0 0 32 32">
                            <path fill="currentColor" d="M16 0c8.833 0 16 7.167 16 16 0 8.8-7.167 16-16 16s-16-7.2-16-16c0-8.833 7.167-16 16-16zM16 1.7c-7.9 0-14.3 6.4-14.3 14.3s6.4 14.3 14.3 14.3 14.3-6.4 14.3-14.3-6.4-14.3-14.3-14.3zM22.333 12.9l0.3-0.267 0.867-0.867c0.467-0.5 0.4-0.767 0-1.167l-1.767-1.767c-0.467-0.467-0.767-0.4-1.167 0l-0.867 0.867-0.267 0.3zM18.3 11.1l-8.6 8.6-0.833 3.767 3.767-0.833 0.967-1 7.633-7.6z"></path>
                        </symbol>
                        <symbol id="check-mark" viewBox="0 0 32 32">
                            <path fill="currentColor" d="M14.133 23.5l12.767-12.467c0.033-0.033 0.1-0.1 0.133-0.167l-3.1-3.133c-0.067 0.033-0.133 0.1-0.2 0.167l-11.267 10.933-4.267-4.333-3.233 2.933c0.033 0 1.067 1.067 1.1 1.067l4.767 5 0.133 0.133c0.433 0.4 0.967 0.633 1.5 0.633s1.1-0.233 1.5-0.633z"></path>
                        </symbol>
                        <symbol id="add-profile" viewBox="0 0 32 32">
                            <path fill="currentColor" d="M16 0c8.833 0 16 7.133 16 16 0 8.833-7.167 16-16 16s-16-7.167-16-16c0-8.867 7.167-16 16-16zM16 29.533c7.467 0 13.533-6.067 13.533-13.533s-6.067-13.567-13.533-13.567-13.533 6.1-13.533 13.567 6.067 13.533 13.533 13.533zM17.133 14.767h5.033v2.433h-5.033v4.933h-2.467v-4.933h-4.833v-2.433h4.833v-4.933h2.467v4.933z"></path>
                        </symbol>
                        <symbol id="thumb-up" viewBox="0 0 44 44">
                            <path fill="currentColor" d="M14.4914731,10.5133658 C14.5025232,10.3721258 14.5112703,10.2600368 14.5373244,9.92616603 C14.6065316,9.03836208 14.6757357,8.14414039 14.7403047,7.30077512 C14.7465683,7.21894322 14.7465683,7.21894322 14.752828,7.13707632 C14.9046548,5.15090242 15.0272627,3.45867565 15.0272627,3.40867664 L15.0272627,1.53263123 L16.7144227,0.711648736 C16.9560747,0.594059357 17.2924682,0.45883302 17.7131667,0.333356234 C19.0883517,-0.0768040048 20.5613519,-0.154799924 22.0533288,0.363315376 C24.5195179,1.21974305 26.1769774,3.46135556 26.8035959,6.84975024 C27.351817,9.81421638 27.5019717,12.9866944 27.3599098,16.0115829 L34.1297665,16.0259652 L34.2527202,16.036358 C37.3831944,16.3009647 40,18.0263548 40,21.50351 C40,22.0672808 39.9265137,22.5421505 39.8025926,23.0579114 C40.5520589,23.9178872 41,25.0573442 41,26.5026539 C41,28.4265345 40.1989133,29.8141446 38.9529692,30.7147706 C39,31.0829242 39,31.2285855 39,31.5017978 C39,33.4256784 38.1989133,34.8132885 36.9529692,35.7139145 C37,36.1120923 37,36.2277294 37,36.5009417 C37,39.978097 34.3831944,41.703487 31.2527202,41.9680938 L31.1299097,41.9784745 L31.0066614,41.9787481 L21.4308667,42 C17.3598399,42 15.3049785,41.5120961 12.3004159,40.2094732 C10.4281403,39.3976996 9.56555009,39.1413507 7.75086356,38.9901527 L5,38.7609533 L5,22.2682088 L9.98007986,19.4037917 L14.4914731,10.5133658 Z M23.8535989,7.39510873 C22.6962315,1.13672751 18.0272627,3.40867664 18.0272627,3.40867664 C18.0272627,3.82250684 17.4358448,11.340371 17.4358448,11.340371 L12.2509485,21.558043 L8,24.003082 L8,36.0010273 C14,36.5009417 13.6061821,39.0005137 21.4308667,39.0005137 L31,38.9792692 C32.339044,38.866085 34,38.2712124 34,36.5009417 C34,34.730671 32.339044,34.1357984 31,34.0013698 L33,33.9801253 C34.339044,33.8669411 36,33.2720686 36,31.5017978 C36,29.7315271 34.339044,29.1366545 33,29.0022259 L35,28.9809814 C36.339044,28.8677972 38,28.2729247 38,26.5026539 C38,24.7323832 36.339044,24.1375106 35,24.003082 L34,23.9818375 C35.339044,23.8686533 37,23.2737808 37,21.50351 C37,19.7332393 35.339044,19.1383668 34,19.0251826 L24.0526449,19.0040499 C24.2446335,18.1909366 24.845597,12.7592672 23.8535989,7.39510873 Z"></path>
                        </symbol>
                        <symbol id="thumb-down" viewBox="0 0 44 44">
                            <path fill="currentColor" d="M29.5085269,33.4866342 C29.4974768,33.6278742 29.4887297,33.7399632 29.4626756,34.073834 C29.3934684,34.9616379 29.3242643,35.8558596 29.2596953,36.6992249 C29.2534317,36.7810568 29.2534317,36.7810568 29.247172,36.8629237 C29.0953452,38.8490976 28.9727373,40.5413244 28.9727373,40.5913234 L28.9727373,42.4673688 L27.2855773,43.2883513 C27.0439253,43.4059406 26.7075318,43.541167 26.2868333,43.6666438 C24.9116483,44.076804 23.4386481,44.1547999 21.9466712,43.6366846 C19.4804821,42.780257 17.8230226,40.5386444 17.1964041,37.1502498 C16.648183,34.1857836 16.4980283,31.0133056 16.6400902,27.9884171 L9.87023353,27.9740348 L9.74727981,27.963642 C6.61680565,27.6990353 4,25.9736452 4,22.49649 C4,21.9327192 4.07348633,21.4578495 4.19740742,20.9420886 C3.44794109,20.0821128 3,18.9426558 3,17.4973461 C3,15.5734655 3.80108673,14.1858554 5.04703083,13.2852294 C5,12.9170758 5,12.7714145 5,12.4982022 C5,10.5743216 5.80108673,9.18671152 7.04703083,8.28608555 C7,7.88790771 7,7.77227059 7,7.49905828 C7,4.02190301 9.61680565,2.29651296 12.7472798,2.03190622 L12.8700903,2.02152553 L12.9933386,2.0212519 L22.5691333,2 C26.6401601,2 28.6950215,2.48790389 31.6995841,3.79052685 C33.5718597,4.60230044 34.4344499,4.8586493 36.2491364,5.00984729 L39,5.23904667 L39,21.7317912 L34.0199201,24.5962083 L29.5085269,33.4866342 Z M20.1464011,36.6048913 C21.3037685,42.8632725 25.9727373,40.5913234 25.9727373,40.5913234 C25.9727373,40.1774932 26.5641552,32.659629 26.5641552,32.659629 L31.7490515,22.441957 L36,19.996918 L36,7.99897267 C30,7.49905828 30.3938179,4.99948634 22.5691333,4.99948634 L13,5.02073084 C11.660956,5.133915 10,5.72878756 10,7.49905828 C10,9.26932901 11.660956,9.86420157 13,9.99863023 L11,10.0198747 C9.66095598,10.1330589 8,10.7279314 8,12.4982022 C8,14.2684729 9.66095598,14.8633455 11,14.9977741 L9,15.0190186 C7.66095598,15.1322028 6,15.7270753 6,17.4973461 C6,19.2676168 7.66095598,19.8624894 9,19.996918 L10,20.0181625 C8.66095598,20.1313467 7,20.7262192 7,22.49649 C7,24.2667607 8.66095598,24.8616332 10,24.9748174 L19.9473551,24.9959501 C19.7553665,25.8090634 19.154403,31.2407328 20.1464011,36.6048913 Z"></path>
                        </symbol>
                        <symbol id="thumb-up-filled" viewBox="0 0 44 44">
                            <path fill="currentColor" d="M36.2259059,39.0138889 C36.2259059,41.128741 34.2435159,41.8394049 32.6453354,41.9746203 L21.0300552,42 C11.6911102,42 12.1611411,39.0138889 5,38.4166667 L5,24.0833333 L10.073607,21.1623699 L16.2619026,9.95583842 C16.2619026,9.95583842 16.9677739,0.974629541 16.9677739,0.480247712 C16.9677739,0.480247712 22.5402979,-2.23393403 23.9216431,5.2426348 C25.3029884,12.7192036 24.344293,17.3331909 24.0839076,17.9993896 L36.2134373,18.0247694 C37.8116178,18.1599847 39.8064765,18.9823701 39.8064765,21.0972222 C39.8064765,23.2120744 37.8240865,23.9227383 36.2259059,24.0579536 L37.4194295,24.0833333 C39.01761,24.2439284 41,24.9545923 41,27.0694444 C41,29.1842966 39.01761,29.8949605 37.4194295,30.0301758 L35.0323824,30.0555556 C36.6305629,30.2161506 38.612953,30.9268145 38.612953,33.0416667 C38.612953,35.1565188 36.6305629,35.8671827 35.0323824,36.002398 L32.6453354,36.0277778 C34.2435159,36.1883728 36.2259059,36.8990367 36.2259059,39.0138889 Z"></path>
                        </symbol>
                        <symbol id="thumb-down-filled" viewBox="0 0 44 44">
                            <path fill="currentColor" d="M7.77409406,4.98611111 C7.77409406,2.87125897 9.75648409,2.16059507 11.3546646,2.02537973 L22.9699448,2 C32.3088898,2 31.8388589,4.98611111 39,5.58333333 L39,19.9166667 L33.926393,22.8376301 L27.7380974,34.0441616 C27.7380974,34.0441616 27.0322261,43.0253705 27.0322261,43.5197523 C27.0322261,43.5197523 21.4597021,46.233934 20.0783569,38.7573652 C18.6970116,31.2807964 19.655707,26.6668091 19.9160924,26.0006104 L7.78656274,25.9752306 C6.18838222,25.8400153 4.19352352,25.0176299 4.19352352,22.9027778 C4.19352352,20.7879256 6.17591354,20.0772617 7.77409406,19.9420464 L6.58057055,19.9166667 C4.98239002,19.7560716 3,19.0454077 3,16.9305556 C3,14.8157034 4.98239002,14.1050395 6.58057055,13.9698242 L8.96761758,13.9444444 C7.36943706,13.7838494 5.38704703,13.0731855 5.38704703,10.9583333 C5.38704703,8.84348119 7.36943706,8.13281729 8.96761758,7.99760195 L11.3546646,7.97222222 C9.75648409,7.81162716 7.77409406,7.10096325 7.77409406,4.98611111 Z"></path>
                        </symbol>
                        <symbol id="grips" viewBox="0 0 7.5 35.2" fill="currentColor">
                            <circle cx="5.8" cy="19.6" r="1.6"/>
                            <circle cx="1.6" cy="19.6" r="1.6"/>
                            <circle cx="5.8" cy="24.3" r="1.6"/>
                            <circle cx="1.6" cy="24.3" r="1.6"/>
                            <circle cx="5.8" cy="28.9" r="1.6"/>
                            <circle cx="1.6" cy="28.9" r="1.6"/>
                            <circle cx="5.8" cy="33.6" r="1.6"/>
                            <circle cx="1.6" cy="33.6" r="1.6"/>
                            <circle cx="5.8" cy="1.6" r="1.6"/>
                            <circle cx="1.6" cy="1.6" r="1.6"/>
                            <circle cx="5.8" cy="6.3" r="1.6"/>
                            <circle cx="1.6" cy="6.3" r="1.6"/>
                            <circle cx="5.8" cy="10.9" r="1.6"/>
                            <circle cx="1.6" cy="10.9" r="1.6"/>
                            <circle cx="5.8" cy="15.6" r="1.6"/>
                            <circle cx="1.6" cy="15.6" r="1.6"/>
                        </symbol>
                        <symbol id="moveToTop" viewBox="0 0 32 15.5">
                            <path fill="currentColor" d="M0,12.7L16.1,0L32,12.6l-2.2,2.8L16.1,4.6L2.2,15.5L0,12.7z"/>
                        </symbol>
                        <symbol id="close" viewBox="0 0 25.5 25.5">
                            <polygon fill="currentColor" class="st0" points="25.5,1.4 24,0 12.7,11.3 1.4,0 0,1.4 11.3,12.7 0,24 1.4,25.5 12.7,14.1 24,25.5 25.5,24 14.1,12.7 "/>
                        </symbol>
                        <symbol id="down-arrow-small" viewBox="0 0 10 7">
                            <path fill="currentColor" d="M8.25,7.25 L6.75,8.75 L1.75,3.75 L6.75,-1.25 L8.25,0.25 L4.75,3.75 L8.25,7.25 Z" id="Combined-Shape" transform="translate(5.000000, 3.750000) rotate(-90.000000) translate(-5.000000, -3.750000) "></path>
                        </symbol>
                        <filter id="dropShadow">
                            <feGaussianBlur in="SourceAlpha" stdDeviation="3"/>
                            <feOffset dx="0" dy="0" result="offsetblur"/>
                            <feFlood flood-color="rgba(0,0,0,0.5)"/>
                            <feComposite in2="offsetblur" operator="in"/>
                            <feMerge>
                            <feMergeNode/>
                            <feMergeNode in="SourceGraphic"/>
                            </feMerge>
                        </filter>
                        <symbol id="uma-plan-selector-selected" viewBox="0 0 32 32">
                            <path fill="currentColor" d="M16 0c8.833 0 16 7.167 16 16s-7.167 16-16 16-16-7.167-16-16 7.167-16 16-16zM14.067 23.733l13.2-12.867c0.067-0.033 0.1-0.1 0.133-0.167l-3.2-3.267c-0.067 0.067-0.133 0.133-0.2 0.167l-11.633 11.333-4.433-4.5-3.333 3.033c0 0.033 1.1 1.1 1.1 1.133l4.933 5.133 0.167 0.167c0.867 0.833 2.233 0.833 3.1 0z"></path>
                        </symbol>
                        <symbol id="uma-plan-selector-not-selected" viewBox="0 0 32 32">
                            <path fill="#000" d="M15.967 31.933c-8.1 0-15.967-6.433-15.967-15.967 0-8.1 6.433-15.967 15.967-15.967 8.833 0 15.967 7.133 15.967 15.967s-7.133 15.967-15.967 15.967z"></path>
                        </symbol>
                        <symbol id="facebook-logo" viewBox="0 0 612 612" preserveAspectRatio="xMinYMid">
                            <path d="M578.057573,0.17272 L33.7689511,0.17272 C15.1157956,0.17272 0.000151111111,15.2883644 0.000151111111,33.94152 L0.000151111111,578.230142 C0.000151111111,596.878764 15.1157956,611.998942 33.7689511,611.998942 L326.797573,611.998942 L326.797573,375.067298 L247.063796,375.067298 L247.063796,282.730853 L326.797573,282.730853 L326.797573,214.635653 C326.797573,135.610587 375.060951,92.5801867 445.557307,92.5801867 C479.326107,92.5801867 508.346996,95.0946756 516.804684,96.2189422 L516.804684,178.804187 L467.911173,178.826853 C429.572773,178.826853 422.150196,197.044809 422.150196,223.779387 L422.150196,282.732364 L513.586018,282.732364 L501.679973,375.068809 L422.150196,375.068809 L422.150196,612.000453 L578.059084,612.000453 C596.707707,612.000453 611.827884,596.880276 611.827884,578.231653 L611.827884,33.94152 C611.826373,15.2883644 596.706196,0.17272 578.057573,0.17272"></path>
                        </symbol>
                        <symbol id="instagram-logo" viewBox="0 0 612 612" preserveAspectRatio="xMinYMid">
                            <path d="M544,170 C544,179.388 536.389,187 527,187 L442,187 C432.611,187 425,179.388 425,170 L425,85 C425,75.612 432.611,68 442,68 L527,68 C536.389,68 544,75.612 544,85 L544,170 Z M544,527 C544,536.389 536.389,544 527,544 L85,544 C75.612,544 68,536.389 68,527 L68,255 L126.042,255 C121.457,271.211 119,288.32 119,306 C119,409.277 202.723,493 306,493 C409.277,493 493,409.277 493,306 C493,288.32 490.544,271.211 485.958,255 L544,255 L544,527 Z M306,187 C371.722,187 425,240.278 425,306 C425,371.722 371.722,425 306,425 C240.278,425 187,371.722 187,306 C187,240.278 240.278,187 306,187 L306,187 Z M527,0 L85,0 C38.057,0 0,38.057 0,85 L0,527 C0,573.943 38.057,612 85,612 L527,612 C573.943,612 612,573.943 612,527 L612,85 C612,38.057 573.943,0 527,0 L527,0 Z"></path>
                        </symbol>
                        <symbol id="twitter-logo" viewBox="0 0 753 612" preserveAspectRatio="xMinYMid">
                            <path d="M752.409201,72.9169906 C724.726452,85.1934372 694.976873,93.4926432 663.749687,97.223869 C695.622283,78.1197499 720.099246,47.8675117 731.62398,11.8217747 C701.79999,29.5120675 668.76262,42.3579931 633.600715,49.2828566 C605.441122,19.2796705 565.322471,0.533943424 520.922859,0.533943424 C435.671107,0.533943424 366.554591,69.6489409 366.554591,154.896137 C366.554591,166.996425 367.919821,178.776286 370.551573,190.074747 C242.259365,183.638876 128.513926,122.182231 52.3783921,28.7892089 C39.0905509,51.5881072 31.4792754,78.1045638 31.4792754,106.394757 C31.4792754,159.950072 58.7322581,207.19708 100.150839,234.879829 C74.8462333,234.079522 51.0450521,227.134916 30.2309777,215.572216 C30.2203474,216.216107 30.2173102,216.863035 30.2173102,217.511482 C30.2173102,292.304564 83.4279007,354.696673 154.046323,368.875938 C141.092576,372.402152 127.455454,374.288266 113.376417,374.288266 C103.429519,374.288266 93.7590074,373.320911 84.3329926,371.519839 C103.977737,432.847402 160.984854,477.476326 228.534164,478.724623 C175.704744,520.124981 109.145568,544.8024 36.8232655,544.8024 C24.363067,544.8024 12.0759901,544.074986 0,542.64901 C68.3131712,586.447254 149.454045,611.999393 236.628357,611.999393 C520.564467,611.999393 675.830233,376.783343 675.830233,172.794479 C675.830233,166.103482 675.678372,159.445894 675.383762,152.826271 C705.543365,131.061546 731.715097,103.873864 752.409201,72.9169906"></path>
                        </symbol>
                        <symbol id="youtube-logo" viewBox="0 0 869 611" preserveAspectRatio="xMinYMid">
                            <path d="M344.583367,419.231578 L344.542768,175.20748 L579.212438,297.642065 L344.583367,419.231578 Z M859.81519,132.932866 C859.81519,132.932866 851.328389,73.0861828 825.290571,46.7295833 C792.26663,12.138802 755.245893,11.9658781 738.270787,9.94191744 C616.739917,1.15738673 434.434591,1.15738673 434.434591,1.15738673 L434.054158,1.15738673 C434.054158,1.15738673 251.754846,1.15738673 130.216458,9.94342113 C113.239849,11.9673818 76.2356521,12.138802 43.1966742,46.731087 C17.158856,73.0861828 8.68558821,132.932866 8.68558821,132.932866 C8.68558821,132.932866 0.000300737101,203.21663 0.000300737101,273.495883 L0.000300737101,339.382871 C0.000300737101,409.663628 8.68558821,479.945888 8.68558821,479.945888 C8.68558821,479.945888 17.158856,539.798586 43.1981779,566.149171 C76.2371558,600.739952 119.633519,599.646772 138.961893,603.275166 C208.442689,609.937996 434.248134,611.999549 434.248134,611.999549 C434.248134,611.999549 616.741421,611.724374 738.272291,602.941347 C755.247397,600.912876 792.268134,600.739952 825.292075,566.149171 C851.329893,539.798586 859.816694,479.945888 859.816694,479.945888 C859.816694,479.945888 868.492959,409.665131 868.492959,339.382871 L868.492959,273.495883 C868.489952,203.21663 859.81519,132.932866 859.81519,132.932866 L859.81519,132.932866 Z"></path>
                        </symbol>
                        <symbol id="rows" viewBox="0 0 16 16">
                            <path d="M0,2 L16,2 L16,3.5 L0,3.5 L0,2 Z M0,7 L12,7 L12,8.5 L0,8.5 L0,7 Z M0,12 L16,12 L16,13.5 L0,13.5 L0,12 Z"></path>
                        </symbol>
                        <symbol id="grid" viewBox="0 0 16 16">
                            <path fill="currentColor" d="M2,2 L6,2 L6,6 L2,6 L2,2 Z M2,10 L6,10 L6,14 L2,14 L2,10 Z M10,10 L14,10 L14,14 L10,14 L10,10 Z M10,2 L14,2 L14,6 L10,6 L10,2 Z"></path>
                        </symbol>
                        <symbol id="mylist-add" viewBox="0 0 14 14">
                            <polygon fill="currentColor" points="6.32918892 6.32913969 6.32918892 -4.92334366e-05 7.67086031 -4.92334366e-05 7.67086031 6.32913969 14.0000492 6.32913969 14.0000492 7.67081108 7.67086031 7.67081108 7.67086031 14 6.32918892 14 6.32918892 7.67081108 0 7.67081108 0 6.32913969"></polygon>
                        </symbol>
                        <symbol id="mylist-added" viewBox="0 0 14 14">
                            <polygon fill="currentColor" points="5.48335262 11.4770745 1.18125415 7.16039261 0 8.34164677 5.65835323 14 15.4146375 1.00620431 14.0729662 0.0145341512"></polygon>
                        </symbol>
                        <symbol id="expand" viewBox="0 0 32 32">
                            <g id="expand-symbol">
                            <rect fill="currentColor" x="0" y="0" width="3.55555556" height="12.4444444"></rect>
                            <rect fill="currentColor" x="28.4444444" y="19.5555556" width="3.55555556" height="12.4444444"></rect>
                            <rect fill="currentColor" x="0" y="0" width="12.4444444" height="3.55555556"></rect>
                            <rect fill="currentColor" x="19.5555556" y="28.4444444" width="12.4444444" height="3.55555556"></rect>
                            <path d="M18.6666667,18.6666667 L30.2222222,30.2222222" stroke="currentColor" stroke-width="3"></path>
                            <path d="M1.77777778,1.77777778 L13.3333333,13.3333333" stroke="currentColor" stroke-width="3"></path>
                            </g>
                        </symbol>
                        <symbol id="audio-on" viewBox="0 0 22 22">
                            <g id="group-audio-on-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g stroke="currentColor">
                                <g  transform="translate(2.000000, 3.000000)">
                                    <path d="M8.5,16.7928932 L8.5,1.20710678 L4.20710678,5.5 L0.5,5.5 L0.5,12.5 L4.20710678,12.5 L8.5,16.7928932 Z" ></path>
                                    <path d="M13.0366802,12.6818415 C15.0522894,10.6662322 15.0522894,7.39828393 13.0366802,5.38267468 L13.0366802,5.38267468" ></path>
                                    <path d="M16.5066331,14.5066331 C19.530047,11.4832193 19.530047,6.58129686 16.5066331,3.55788298" ></path>
                                </g>
                            </g>
                            </g>
                        </symbol>
                        <symbol id="audio-off" viewBox="0 0 17 17">
                            <g id="group-audio-off-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g  stroke="currentColor">
                                <path d="M7.5,14.2928932 L7.5,3.70710678 L4.70710678,6.5 L1.5,6.5 L1.5,11.5 L4.70710678,11.5 L7.5,14.2928932 Z" ></path>
                                <path d="M10.5,6.5 L16,12"  stroke-width="1.5"></path>
                                <path d="M10.5,6.5 L16,12"  transform="translate(13.250000, 9.250000) scale(-1, 1) translate(-13.250000, -9.250000) "></path>
                            </g>
                            </g>
                        </symbol>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
    <script>
        (function() {
            $(".chosen-select").chosen({
                no_results_text: "No se ha encontrado nada!",
                width: '199px'
            })
            $("#dropdownButton").click(function(){
                if($("#menuOculto").css('opacity') == '1'){
                    $("#menuOculto").css('opacity', '0');
                    $("#menuOculto").css('display', 'none');
                }
                else{
                    $("#menuOculto").css('opacity', '1');
                    $("#menuOculto").css('display', 'unset');
                }
            });
            $("#navigationMenu").click(function(){
                if($("#navOculto").css('opacity') == '1'){
                    $("#navOculto").css('opacity', '0');
                    $("#navOculto").css('display', 'none');
                }
                else{
                    $("#navOculto").css('opacity', '1');
                    $("#navOculto").css('display', 'unset');
                }
            });
        })();
    </script>
    <script>
        (function() {
            document.getElementById("name").readOnly = true;
            $(document).on('change', 'select', function() {
                document.getElementById("name").value = "";
                document.getElementById("name").readOnly = false;
                $( "select option:selected" ).each(function() {
                    document.getElementById("id").innerHTML = $( this ).attr('id');
                    document.getElementById("name").innerHTML = $( this ).attr('name');
                    
                    document.getElementById("id").value = $( this ).attr('id');
                    document.getElementById("name").value = $( this ).attr('name');
                });
            });
        })();
    </script>
</body>
</html>