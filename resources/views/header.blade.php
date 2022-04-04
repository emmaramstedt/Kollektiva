<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/helpcenter.css')}}">
    <link rel="stylesheet" href="{{asset('css/testimonies.css')}}">
    <link rel="stylesheet" href="{{asset('css/stepbystep.css')}}">
    <link rel="stylesheet" href="{{asset('css/quote.css')}}">
    <link rel="stylesheet" href="{{asset('css/ctaCards.css')}}">
    <link rel="stylesheet" href="{{asset('css/hero.css')}}">
    <title>Kollektiva</title>
    <header>
        <div class="topWrapper">
            <h1 class="logo">Kollektiva</h1>
            <div class="languageAndSearchWrapper">
                <div class="languageBox">
                    <button class="languageButton">
                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.99051 0.333008C4.93051 0.333008 0.833008 4.43967 0.833008 9.49967C0.833008 14.5597 4.93051 18.6663 9.99051 18.6663C15.0597 18.6663 19.1663 14.5597 19.1663 9.49967C19.1663 4.43967 15.0597 0.333008 9.99051 0.333008ZM16.343 5.83301H13.6388C13.3519 4.69768 12.9271 3.60175 12.3738 2.56967C14.0459 3.14534 15.4549 4.30375 16.343 5.83301ZM9.99967 2.20301C10.7605 3.30301 11.3563 4.52217 11.7505 5.83301H8.24884C8.64301 4.52217 9.23884 3.30301 9.99967 2.20301ZM2.90467 11.333C2.75801 10.7463 2.66634 10.1322 2.66634 9.49967C2.66634 8.86717 2.75801 8.25301 2.90467 7.66634H6.00301C5.92967 8.27134 5.87467 8.87634 5.87467 9.49967C5.87467 10.123 5.92967 10.728 6.00301 11.333H2.90467ZM3.65634 13.1663H6.36051C6.65384 14.3122 7.07551 15.4122 7.62551 16.4297C5.95164 15.8572 4.54169 14.6979 3.65634 13.1663ZM6.36051 5.83301H3.65634C4.54169 4.30142 5.95164 3.1422 7.62551 2.56967C7.07223 3.60175 6.6474 4.69768 6.36051 5.83301ZM9.99967 16.7963C9.23884 15.6963 8.64301 14.4772 8.24884 13.1663H11.7505C11.3563 14.4772 10.7605 15.6963 9.99967 16.7963ZM12.1447 11.333H7.85467C7.77217 10.728 7.70801 10.123 7.70801 9.49967C7.70801 8.87634 7.77217 8.26217 7.85467 7.66634H12.1447C12.2272 8.26217 12.2913 8.87634 12.2913 9.49967C12.2913 10.123 12.2272 10.728 12.1447 11.333ZM12.3738 16.4297C12.9238 15.4122 13.3455 14.3122 13.6388 13.1663H16.343C15.4549 14.6956 14.0459 15.854 12.3738 16.4297ZM13.9963 11.333C14.0697 10.728 14.1247 10.123 14.1247 9.49967C14.1247 8.87634 14.0697 8.27134 13.9963 7.66634H17.0947C17.2413 8.25301 17.333 8.86717 17.333 9.49967C17.333 10.1322 17.2413 10.7463 17.0947 11.333H13.9963Z" fill="#FCA82B" />
                        </svg>
                    </button>
                    <!-- text visible in mobile view -->
                    <p class="mobile">Språk</p>
                    <!-- text visible in laptop view -->
                    <p class="laptop">Välj språk</p>
                </div>
                <div class="searchBox">
                    <button class="searchButton">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.05295 17.605C10.9506 17.6046 12.7936 16.9693 14.2884 15.8004L18.9883 20.5L20.5 18.9883L15.8002 14.2888C16.9698 12.7938 17.6054 10.9505 17.6059 9.05249C17.6059 4.33686 13.7688 0.5 9.05295 0.5C4.33707 0.5 0.5 4.33686 0.5 9.05249C0.5 13.7681 4.33707 17.605 9.05295 17.605ZM9.05295 2.63812C12.5907 2.63812 15.4677 5.51497 15.4677 9.05249C15.4677 12.59 12.5907 15.4669 9.05295 15.4669C5.51523 15.4669 2.63824 12.59 2.63824 9.05249C2.63824 5.51497 5.51523 2.63812 9.05295 2.63812Z" fill="#FCA82B" />
                        </svg>
                    </button>
                    <p>Sök</p>
                </div>
            </div>
            <div class="laptopSearchContainer">
                <form class="laptopSearchForm" action="">
                    <input type="text" placeholder="Sök.." name="search">
                    <button class="formSearchButton" type="submit">
                        <p>Sök</p><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.05295 17.605C10.9506 17.6046 12.7936 16.9693 14.2884 15.8004L18.9883 20.5L20.5 18.9883L15.8002 14.2888C16.9698 12.7938 17.6054 10.9505 17.6059 9.05249C17.6059 4.33686 13.7688 0.5 9.05295 0.5C4.33707 0.5 0.5 4.33686 0.5 9.05249C0.5 13.7681 4.33707 17.605 9.05295 17.605ZM9.05295 2.63812C12.5907 2.63812 15.4677 5.51497 15.4677 9.05249C15.4677 12.59 12.5907 15.4669 9.05295 15.4669C5.51523 15.4669 2.63824 12.59 2.63824 9.05249C2.63824 5.51497 5.51523 2.63812 9.05295 2.63812Z" fill="white" />
                        </svg>
                    </button>
                </form>
            </div>

        </div>
        <!-- <hr class="headerHr"> -->
        <div class="searchContainer">
            <form class="searchForm" action="">
                <input type="text" placeholder="Sök.." name="search">
                <button class="formSearchButton" type="submit"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.05295 17.605C10.9506 17.6046 12.7936 16.9693 14.2884 15.8004L18.9883 20.5L20.5 18.9883L15.8002 14.2888C16.9698 12.7938 17.6054 10.9505 17.6059 9.05249C17.6059 4.33686 13.7688 0.5 9.05295 0.5C4.33707 0.5 0.5 4.33686 0.5 9.05249C0.5 13.7681 4.33707 17.605 9.05295 17.605ZM9.05295 2.63812C12.5907 2.63812 15.4677 5.51497 15.4677 9.05249C15.4677 12.59 12.5907 15.4669 9.05295 15.4669C5.51523 15.4669 2.63824 12.59 2.63824 9.05249C2.63824 5.51497 5.51523 2.63812 9.05295 2.63812Z" fill="white" />
                    </svg></button>
            </form>
        </div>
        <!-- Mobile navigation  -->
        <div class="mobileNav">
            <nav class="navbar navbar-expand-lg navbar-light bg-#F5FAF4">
                <div class="nav-wrapper">
                    <a class="navbar-brand" href="#">Meny</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Hem</a>
                        </li>
                        <div class="headerLine">
                            <hr>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="/hyrut">Hyr ut din bostad</a>
                        </li>
                        <div class="headerLine">
                            <hr>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="/hyrkontrakt">Sök bostad</a>
                        </li>
                        <div class="headerLine">
                            <hr>
                        </div>
                        <li class="nav-item">
                            <!-- no corresponding blade.file -->
                            <a class="nav-link" href="#">Hur fungerar Kollektiva?</a>
                        </li>
                        <div class="headerLine">
                            <hr>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="/help">Hjälpcenter</a>
                        </li>
                        <div class="headerLine">
                            <hr>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Kontakt</a>
                        </li>
                        <div class="headerLine">
                            <hr>
                        </div>
                    </ul>
                    <div class="openMenuButtonWrapper">
                        <button class="menuButton">Logga in</button>
                        <button class="menuButton">Registrera dig</button>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Laptop nav -->
        <div class="laptopNav">
            <ul>
                <li>
                    <a class="nav-link" href="/">Hem</a>
                </li>

                <li>
                    <a class="nav-link" href="/hyrut">Hyr ut din bostad</a>
                </li>

                <li>
                    <a class="nav-link" href="/hyrkontrakt">Sök bostad</a>
                </li>

                <li>
                    <a class="nav-link" href="/help">Hjälpcenter</a>
                </li>

                <li>
                    <a class="nav-link" href="/contact">Kontakt</a>
                </li>
                <div class="menuGap">


                    <li>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30 14.985C30 6.7125 23.28 0 15 0C6.72 0 0 6.7125 0 14.985C0 19.5413 2.07 23.6475 5.31 26.4037C5.34 26.4337 5.37 26.4338 5.37 26.4638C5.64 26.6738 5.91 26.8837 6.21 27.0937C6.36 27.1837 6.48 27.3019 6.63 27.4219C9.10888 29.1026 12.0351 30.0007 15.03 30C18.0249 30.0007 20.9511 29.1026 23.43 27.4219C23.58 27.3319 23.7 27.2138 23.85 27.1219C24.12 26.9138 24.42 26.7038 24.69 26.4938C24.72 26.4638 24.75 26.4637 24.75 26.4337C27.93 23.6456 30 19.5413 30 14.985V14.985ZM15 28.1119C12.18 28.1119 9.6 27.2119 7.47 25.7137C7.5 25.4737 7.56 25.2356 7.62 24.9956C7.79876 24.3452 8.06094 23.7206 8.4 23.1375C8.73 22.5675 9.12 22.0575 9.6 21.6075C10.05 21.1575 10.59 20.7394 11.13 20.4094C11.7 20.0794 12.3 19.8394 12.96 19.6594C13.6251 19.4801 14.3111 19.3899 15 19.3913C17.045 19.3768 19.0148 20.1612 20.49 21.5775C21.18 22.2675 21.72 23.0775 22.11 24.0056C22.32 24.5456 22.47 25.1156 22.56 25.7137C20.346 27.2703 17.7064 28.1076 15 28.1119ZM10.41 14.2369C10.1457 13.6317 10.0127 12.9773 10.02 12.3169C10.02 11.6587 10.14 10.9987 10.41 10.3988C10.68 9.79875 11.04 9.26062 11.49 8.81062C11.94 8.36062 12.48 8.0025 13.08 7.7325C13.68 7.4625 14.34 7.3425 15 7.3425C15.69 7.3425 16.32 7.4625 16.92 7.7325C17.52 8.0025 18.06 8.3625 18.51 8.81062C18.96 9.26062 19.32 9.80062 19.59 10.3988C19.86 10.9987 19.98 11.6587 19.98 12.3169C19.98 13.0069 19.86 13.6369 19.59 14.235C19.3294 14.8261 18.9635 15.3649 18.51 15.825C18.0497 16.2778 17.511 16.6431 16.92 16.9031C15.6803 17.4126 14.2897 17.4126 13.05 16.9031C12.459 16.6431 11.9203 16.2778 11.46 15.825C11.0059 15.3716 10.6487 14.8307 10.41 14.235V14.2369ZM24.33 24.1856C24.33 24.1256 24.3 24.0956 24.3 24.0356C24.0049 23.097 23.5701 22.2083 23.01 21.3994C22.4494 20.5845 21.7605 19.8658 20.97 19.2712C20.3663 18.8171 19.7119 18.4345 19.02 18.1313C19.3348 17.9236 19.6264 17.6828 19.89 17.4131C20.3373 16.9716 20.7301 16.4781 21.06 15.9431C21.7244 14.8515 22.0676 13.5947 22.05 12.3169C22.0593 11.371 21.8755 10.4331 21.51 9.56062C21.1491 8.71995 20.6296 7.95667 19.98 7.3125C19.3313 6.67506 18.5679 6.16611 17.73 5.8125C16.8561 5.44761 15.917 5.26452 14.97 5.27437C14.0229 5.26511 13.0838 5.44885 12.21 5.81438C11.3649 6.16723 10.5996 6.68697 9.96 7.3425C9.32258 7.99048 8.81361 8.75329 8.46 9.59062C8.09447 10.4631 7.91072 11.401 7.92 12.3469C7.92 13.0069 8.01 13.6369 8.19 14.235C8.37 14.865 8.61 15.435 8.94 15.9731C9.24 16.5131 9.66 16.9931 10.11 17.4431C10.38 17.7131 10.68 17.9512 11.01 18.1612C10.3159 18.4726 9.66135 18.8654 9.06 19.3313C8.28 19.9313 7.59 20.6494 7.02 21.4294C6.45424 22.2349 6.0189 23.1246 5.73 24.0656C5.7 24.1256 5.7 24.1856 5.7 24.2156C3.33 21.8175 1.86 18.5813 1.86 14.985C1.86 7.7625 7.77 1.85812 15 1.85812C22.23 1.85812 28.14 7.7625 28.14 14.985C28.1361 18.4349 26.7662 21.7429 24.33 24.1856V24.1856Z" fill="#FCA82B" />
                        </svg>
                        <a class="underline" href="/">Skapa konto</a>
                    </li>
                </div>
                <div class="menuGap">

                    <li>
                        <svg width="20" height="26" viewBox="0 0 20 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 20.5V21.75C1 22.413 1.26339 23.0489 1.73223 23.5178C2.20107 23.9866 2.83696 24.25 3.5 24.25L16 24.25C16.663 24.25 17.2989 23.9866 17.7678 23.5178C18.2366 23.0489 18.5 22.413 18.5 21.75L18.5 4.25C18.5 3.58696 18.2366 2.95107 17.7678 2.48223C17.2989 2.01339 16.663 1.75 16 1.75L3.5 1.75C2.83696 1.75 2.20107 2.01339 1.73223 2.48223C1.26339 2.95107 1 3.58696 1 4.25V5.5M1 13H9.75H1ZM9.75 13L6 9.25L9.75 13ZM9.75 13L6 16.75L9.75 13Z" stroke="#FCA82B" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <a class="underline" href="/">Logga in</a>
                    </li>
                </div>

            </ul>

            </nav>
        </div>
    </header>
    <main>