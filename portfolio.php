<?php
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Portfolio | Sultan Shaikh</title>

    <!-- FAVICON -->
    <link rel="icon" type="png" href="Images/favicon-16x16.png">


    <!-- GOOGLE FONTS LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- ICONS LINK -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css"
        integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- BOOTSTRAP LINK -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


    <!-- CSS FILE -->
    <link rel="stylesheet" href="styles.css">

</head>

<body class="dark-theme">


    <!-- ================================
             HEADER SECTION START
        ================================= -->

    <header class="header-top">
        <nav class="navbar navbar-expand-lg pt-lg-4">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link content-link" href="#">Home</a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link  content-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link  content-link" href="#about">About Me</a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link  content-link" href="#resume">Resume</a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link  content-link" href="#contact">Contact</a>
                    </li>

                </ul>

                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <div class="nav-link">
                            <a href="http://wa.me/+919967939158" target="_blank">

                                <button class="Download-button">
                                    <svg class="pb-1 mr-0" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="22"
                                        height="22" viewBox="0 0 50 50" fill="CurrentColor">
                                        <path
                                            d="M25,2C12.318,2,2,12.318,2,25c0,3.96,1.023,7.854,2.963,11.29L2.037,46.73c-0.096,0.343-0.003,0.711,0.245,0.966 C2.473,47.893,2.733,48,3,48c0.08,0,0.161-0.01,0.24-0.029l10.896-2.699C17.463,47.058,21.21,48,25,48c12.682,0,23-10.318,23-23 S37.682,2,25,2z M36.57,33.116c-0.492,1.362-2.852,2.605-3.986,2.772c-1.018,0.149-2.306,0.213-3.72-0.231 c-0.857-0.27-1.957-0.628-3.366-1.229c-5.923-2.526-9.791-8.415-10.087-8.804C15.116,25.235,13,22.463,13,19.594 s1.525-4.28,2.067-4.864c0.542-0.584,1.181-0.73,1.575-0.73s0.787,0.005,1.132,0.021c0.363,0.018,0.85-0.137,1.329,1.001 c0.492,1.168,1.673,4.037,1.819,4.33c0.148,0.292,0.246,0.633,0.05,1.022c-0.196,0.389-0.294,0.632-0.59,0.973 s-0.62,0.76-0.886,1.022c-0.296,0.291-0.603,0.606-0.259,1.19c0.344,0.584,1.529,2.493,3.285,4.039 c2.255,1.986,4.158,2.602,4.748,2.894c0.59,0.292,0.935,0.243,1.279-0.146c0.344-0.39,1.476-1.703,1.869-2.286 s0.787-0.487,1.329-0.292c0.542,0.194,3.445,1.604,4.035,1.896c0.59,0.292,0.984,0.438,1.132,0.681 C37.062,30.587,37.062,31.755,36.57,33.116z">
                                        </path>
                                    </svg>
                                    <span>Chat</span>
                                </button>
                            </a>
                        </div>
                    </li>

                </ul>

            </div>

        </nav>
    </header>


    <!-- ================================
              HEADER SECTION END
        ================================= -->






    <!-- ================================
              SIDEBAR SECTION START
        ================================= -->

    <div class="sidebar-side">

        <div class="row no-gutters p-lg-5">
            <div class="col-12">

                <div class="cardContainer">
                    <div class="card-glass p-lg-4">
                        <div class="row no-gutters">
                            <!-- <div class="col-4"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAACXBIWXMAAAsTAAALEwEAmpwYAAADz0lEQVR4nO2cS0hUURjHT9hjYRBRWtomWqUR0aZoJ/QgDcyNq3ZRUJC2jihqrxkFIVT0WLRoU+kgYvsiiLIsqoW2MQssyBwfmfGL45wgpjPOnXu/69zH+cHsZr77//5z73l+9yjlcDgcDofD4XB4ANgGdAFvgCx2fgJ9QG25TQU2Af1Gk42syeUSUB+mkBXAFWAe7wyEJsi77scl6P0FXNa5hmHeAKUzD1SIiilNdwXw24fuflETzZ3nh2ExEf61f/SpvUuyzSvlsf23bTkoIiKY/sZF2upij3OdhADdYdh4CbQBrZZPM1ClIgJQbTTZtOocBgvk2Clx8bcFzFupEgKwqoCJQxLBJy2BT6mEAbRb8vwhEdhGq0oY5B7n/5AI7AyMm4HAWmAPcMj0oqF3SLG/A4HVpkd8YRn8zgFX9Xekr5sIA4H9wCeK8ww4AGyUvH7YBtom4c0iqtVC/CM+plt6YH8HWCOoQ48T85mVCKxXVf4lK9UmAbvM4+mXJ3oMJzjYnsqL3ysRuNYsJOi7ZFhqegYsA54SnDMSeowm3WGNmFx1zjVSsRcSFgumFuLtRIYxYLmwNtFcQwE4jxy7VdoA7goaeFylDXKLllKItYOxAbgnaGCbShvAOUEDG1XaILfSLcE0UKnSCPBQwMCbKq0AjwQMzKi0AswIGDit0gowLmDgO5VWgG4BA8+qtAKsMysqfulN0u6gL4AdAQzc7u+qCQPI+DCvp9y6IwOwAfhSgnnjomt1SQBo8Dis0d9pKLfeSAK0eDCwpdw6Iw1FKLe+yIMzMBjOwPCXuMIrBI8zwHpT1lGM53oGU269kQGoBE4CnyltK/NEmLUykYZc9fw+szNnK+D0yoyZD7emYk4MbDYV/1+R5xtwDdiiEtq+3QhYB1NKdf2tKBW5BwKoB0ZZekZj32MDVR7r/sJiLNZ3IrLlG365reIIubK4pWjzijEXy6Uv4BjR4Wg5jagxVar6n3wP7PX4u+tEh+4SarU/mLLmjEgttmXz+7seloS0TB8WPR47vIm83z2QMDC/bljT5OF3F4H7Eflc8KC3yZJnVsJAG+5VL684AwPiDAyIMzAgzsCA6JeO01CTDJy25DkhEVgfSpPPoNQrVhF65f+VJc/XEsH1iT4UMLF9kUMnqlW0SkcOF9DaXsA8TYfExet8HnsyFYXqeTNAtk0GvCzMbpUSoY9D8sOIiIDyHLzTKX30U3+Kjn7qk36B8a+JXebWTvLhY53i5lnaRH2RoUW2JGfNdmNNRBZ2M0aTjUmTS4dYm+dwOBwOh8PhUEnnD3bWQekBuCxAAAAAAElFTkSuQmCC"></div> -->
                            <div class="col-4">
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEvklEQVR4nO2cTYgcRRTHS/w6RAnTr3pnEy8iHjRBxIviTfADE0G9ePImCgpGzyKK3rMmKkiCu069WZLDXPzIEpZ48KYIoqtG1IPxElchCsYk7rqb8Jfq6cU4U8P0dL1O93TXD+o2Xf3qP6+qXlW/KqUCgUAgEAgEAoEMGLR2G9ABhj5pQOcZGoPFQP/DoOPzoJ1li2oQ3WRAy32bXLYmbTjJoDcWEe0qzJDDUNca0FsG+qLLEHYLeUKVjIH+eAJ7Nxl00La1APH0iayG8H8GXexBXa1Kwr6boS9Nbjcti4poPW9SIzgp9JMqGQb9nMd2O0wJjnnZuy1fNrZ0ED8sYoSX/XrPqLF6fHeObhcwIJkwXN71FSPe10X8xGAxoEcXMBuritBFe8ba5LLVtsGAVkY4wZz3yw30dy7xelDXqZrwJm693iWigf7Wu3IDOjdccfS8qhkd6BccXviXd8Uu17aur2pGN+nOw231rjgIOIUCHsH2FqN1bwf6ETuLXokJaeo9sIf4hnRG/NIR/G4w9Nv2N6ogplrALqIHGfqXDPHZ5wbRQx3Es5LvL1RA1yLcxlRysx89OelyKw3s+TBa26XssG1yhGvr3hXbXZXBFYbUmGQQ3Z12zxzLxETIT20MJxVsM+jCQFuPeVdst6TSjYRLdm0rtTwD1FUM/Vle8S6LSV9Sssu+U7atts2L0Duk6k4aLFaZSsbWu3zFS71k9ROoayRtk25rITD0qxIC9ie16B7VNAx0V0pAhn5GNQ0DWpYSUHIcnBoYdFTOA+N9qmkw9CtyHqj3qKZh0NotNAv/3UV7m2oiBvoDAQEXVFNh6A/9vZCWVFNh0JpEF1ZNxYDOCIyD36umwtCHBAR8WTUVxo1kd1Q8uu+xOn0dzEUX8Z15BXwPM3fke2vNYNDS5N6nPyrb7spwFDNtA/ptgq57RnSvrg50QPdlC2tozf62bHsrSRf0+DgB7W/KtrPS8BgBy7av8nAQ0I8gYMFbXIUmgk8zR7BDp2kd48KYL+wKpmx7K0MX7W0G9ByDfp0gDlxl0LNF5spUml6SPR89YL/MuRI4sxdas+thm9fSiDVxB+2b07Mmv+cXbWT5g6HfWcDMLaqm49u8Tx7MBGvkTQPqVCnJ3YtFRLsY+nTRwjnK6amfsRcwG2fM+yvIG2l1qj3RyKZv5O3SRk0j86CdV2LMy1A2pnLry0A/XQHxtspTpQlh/700S3XDQP/QAd2f5TkGvVsB4bbKoay52gb0Y3reeUkkF9vx8ftPG5YUsU3PBZUs2/92sjHQZweee19AwP/nDadl77jnDOh1A+pVoTDotfHt1HuHhafzAgIO/6PhqNcEBAE9CQJ6EgT0JAjoiT103IScZAP9oiP8Oetdcf9SmqHpfUXqiFUVsG1h0NfDjkLfeFdub/RxB6e0Yo/Jj7p0wp49UxVKHWHQYy5b+0f9XeIlHrjf++X26o88154w6EIVsuf7AbJzMTBu9bLZAd0mZAQdzLeEolMiBpRz8Y7/lScD92YtN+XqJwYdlz7AuCXigf6NPvW9fMyA5sTFGx4Tac5eSmNGfpKkdfu5sQobmf2NXbszROsjuuq5flv0frExLxAIBAKBQCCg6s6/noot4gY8/Z8AAAAASUVORK5CYII=">

                            </div>
                            <div class="col-8">
                                <h2 class="profile-name pt-2 pl-2">Sultan <br> Shaikh</h2>
                            </div>
                        </div>
                        <div class="card-image-container"></div>

                        <div class="row no-gutters mt-4">
                            <div class="col-12">
                                <p class="text-color mb-1">Specialization:</p>
                                <p class="text-detail">Full Stack Developer</p>
                            </div>
                        </div>

                        <div class="row no-gutters mt-1">
                            <div class="col-12">
                                <p class="text-color mb-1">Based in:</p>
                                <p class="text-detail">Mumbai, Maharashtra, <br>India</p>
                            </div>
                        </div>

                        <div class="row no-gutters mt-1">
                            <div class="col-12">
                                <!-- <button class="btn btn-green btn-block btn-change pt-2 pb-2">Let's Work Together
                                    !</button> -->
                                <a href="#contact" class="download-btn-link"><button class="Download-button btn-block">
                                    <span>Let's Work Together !!</span>
                                </button></a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- ================================
               SIDEBAR SECTION END
        ================================= -->



    <!-- ================================
               MAIN SECTION START
        ================================= -->

    <main class="main-grid">

        <!-- ===== DOWNLOAD CV SECTION START ===== -->

        <div class="container-fluid mb-5 pb-5">
            <div class="row no-gutters mt-5">
                <div class="col-12 pt-5">
                    <button class="btn btn-display mb-3 p-auto">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAAACXBIWXMAAAsTAAALEwEAmpwYAAABN0lEQVR4nK2TPS8EURSGV+KjkSVC6HQSQS1Ri19ARFT8AK1E4URm3+febLbZqLYnEQoVleAHKERHIVvoNEKhIEYmuZsMmZ3xsaede577vG/ulEqdHjMblLT4L0ilUlkHmnEcd/0JkCxKOgFiYPZXy5JGJO0CDwEQA2/AWTqamZWBnUyI935A0rak6xZE0rOkA+fcfOscsAK8mll/rhVwFCDTGcaHyTfn3FIRZBW4ywCMAi/B9NjMettCElUXIlSr1TFgQ9KFpPdUX4npE7CfdNZoNHryrJYl3aaXv4ES8HkUReOlovHeT4XiPwLgHlir1WrDeQYLWe9E0lUodjP3VjMbAi5DeeVvkK1gMlH03zymcjfNrDsVa1LSTWH+er3eB5xK2ksDUhd9sWs7URTNee9nfnS4k/MJdtzZ7RT/XCkAAAAASUVORK5CYII=">
                        Let's Meet !</button>

                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-12">
                    <div>
                        <p class="detail-display pt-3">I'm <span class="text-green">Sultan Shaikh</span><br>
                            Full Stack Developer &<br>
                            UI/UX Designer</p>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-4">
                    <a class="download-btn-link" href="RESUME_SULTAN SHAIKH.pdf" download="RESUME_SULTAN SHAIKH"><button
                            class="Download-button">
                            <svg viewBox="0 0 640 512" width="20" height="16" xmlns="http://www.w3.org/2000/svg">
                                <path fill="black"
                                    d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z">
                                </path>
                            </svg>
                            <span>Download CV</span>
                        </button>
                    </a>
                </div>
                <div class="col-8"></div>
            </div>

        </div>

        <!-- ====== DOWNLOAD CV SECTION END =====-->


        <!-- ====== PORTFOLIO SECTION START =====-->

        <div class="container-fluid mb-5 pb-5" id="portfolio">
            <div class="row no-gutters mt-5 pt-5">
                <div class="col-12 pt-5">
                    <button class="btn btn-display mb-3 p-auto">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAAACXBIWXMAAAsTAAALEwEAmpwYAAABN0lEQVR4nK2TPS8EURSGV+KjkSVC6HQSQS1Ri19ARFT8AK1E4URm3+febLbZqLYnEQoVleAHKERHIVvoNEKhIEYmuZsMmZ3xsaede577vG/ulEqdHjMblLT4L0ilUlkHmnEcd/0JkCxKOgFiYPZXy5JGJO0CDwEQA2/AWTqamZWBnUyI935A0rak6xZE0rOkA+fcfOscsAK8mll/rhVwFCDTGcaHyTfn3FIRZBW4ywCMAi/B9NjMettCElUXIlSr1TFgQ9KFpPdUX4npE7CfdNZoNHryrJYl3aaXv4ES8HkUReOlovHeT4XiPwLgHlir1WrDeQYLWe9E0lUodjP3VjMbAi5DeeVvkK1gMlH03zymcjfNrDsVa1LSTWH+er3eB5xK2ksDUhd9sWs7URTNee9nfnS4k/MJdtzZ7RT/XCkAAAAASUVORK5CYII=">
                        Portfolio</button>

                </div>
            </div>

            <div class="row no-gutters mb-4">
                <div class="col-12">
                    <div>
                        <h1 class="project-title pt-3">Check Out My <span class="text-green">Featured Project</span>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="pr-5">

                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col mb-4">
                        <div class="card-2">
                            <div class="temporary_text">
                            </div>
                            <div class="card_content">
                                <span class="card_title">Nurturing With Tech</span>
                                <span class="card_subtitle">Full Stack Web Application for Orphanage</span>
                                <p class="card_description">Developed a dynamic, comprehensive web application for
                                    orphanage management, streamlining daily tasks and integrating a secure payment
                                    gateway for fundraising.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-2">
                            <div class="temporary_text_card3"></div>
                            <div class="card_content">
                                <span class="card_title">A Cake Bakery</span>
                                <span class="card_subtitle">Web Application for Homemade Cake Bakery</span>
                                <p class="card_description">Developed a full-stack cake website with user
                                    authentication, order placement, cart management, and order tracking, utilizing
                                    frontend, backend, and database technologies</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col mb-4">
                        <div class="card-2">
                            <div class="temporary_text_card2"></div>
                            <div class="card_content">
                                <span class="card_title">Resto</span>
                                <span class="card_subtitle">Full Stack Web Application for Resturant</span>
                                <p class="card_description">Developed a full-stack restaurant web application with
                                    comprehensive features, integrating a payment gateway for seamless transactions</p>

                            </div>
                        </div>
                    </div>
                    <!-- <div class="col mb-4">
                        <div class="card-2">
                            <div class="temporary_text_card4"></div>
                            <div class="card_content">
                                <span class="card_title">This is a Title</span>
                                <span class="card_subtitle">Thsi is a subtitle of this page. Let us see how it looks on
                                    the Web.</span>
                                <p class="card_description">Lorem ipsum dolor, sit amet expedita exercitationem
                                    recusandae aut dolor tempora aperiam itaque possimus at, cupiditate earum, quae
                                    repudiandae aspernatur? Labore minus soluta consequatur placeat.</p>

                            </div>
                        </div>
                    </div> -->
                </div>

            </div>

        </div>

        <!-- ====== PORTFOLIO SECTION END  ======-->




        <!-- ====== ABOUT ME SECTION START =====-->

        <div class="container-fluid mb-5 pb-5" id="about">
            <div class="row no-gutters mt-5 mb-4 pt-5">
                <div class="col-12 pt-5">
                    <button class="btn btn-display mb-3 p-auto">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAAACXBIWXMAAAsTAAALEwEAmpwYAAABN0lEQVR4nK2TPS8EURSGV+KjkSVC6HQSQS1Ri19ARFT8AK1E4URm3+febLbZqLYnEQoVleAHKERHIVvoNEKhIEYmuZsMmZ3xsaede577vG/ulEqdHjMblLT4L0ilUlkHmnEcd/0JkCxKOgFiYPZXy5JGJO0CDwEQA2/AWTqamZWBnUyI935A0rak6xZE0rOkA+fcfOscsAK8mll/rhVwFCDTGcaHyTfn3FIRZBW4ywCMAi/B9NjMettCElUXIlSr1TFgQ9KFpPdUX4npE7CfdNZoNHryrJYl3aaXv4ES8HkUReOlovHeT4XiPwLgHlir1WrDeQYLWe9E0lUodjP3VjMbAi5DeeVvkK1gMlH03zymcjfNrDsVa1LSTWH+er3eB5xK2ksDUhd9sWs7URTNee9nfnS4k/MJdtzZ7RT/XCkAAAAASUVORK5CYII=">
                        ABOUT ME</button>

                </div>
            </div>

            <div class="row no-gutters mb-4">
                <div class="col-1">
                    <div>
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGIAAABiCAYAAACrpQYOAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFgUlEQVR4nO2ceWwUVRzHHxD/MTGavtmSxhiiRgpG6/WHCeIRjMYjJNjdLYJUKTZV2+7SFkO7D6WJISbQREViwmHcmS1XMZJoFauVHqGJGDz+8AarSe+6paFQpNf2a2YpddOu7A7s9E1nfp/k98/uztt53887ZifZYYwgCIIgCIKwGSpct6pQ8jXw7Sp4nQblWw38pAbeGq9C4Mtln7NtqIaSoUIRFwNXYKRU8O8BNkd2H2Y1+5ChaOBvaeAXjAqIrRD4Ctl9mbUE4XKr4L1XI+C/4j/QrDDIIbB5KvjbqREQu0Qp9Sp4eTXSbjdn6NiIXWDXaFAOp1pCHCknVLg8lWBzZffZclSCzVXBD5otYcqS1RIEXyS775ZChVI5sxIm62wQytOy+28JguCPalAikkToS9VwEK4nmJPZhYxrNfA/ZEmIqTP6j0XmVDQomywgARN7RrMjL3ODuP4GFUq/fAFKzDKV9jhzGhqUErODrUEmvsYGHMWqJEXwWuY0VCi/mBl+F5oxjjHoRDCCBjyfzPGREObfzJyCivSsVIZ/ELfhGArRjrpo6PHQX2/EC8nMileYU7h4NzUVI78MXWiaHPmJiGA44cxQwQ8xp6BB+WKmwjcug3czJ6BfImpQTqdy2TFKoj3jffDrmN1RkXbjTIz85GZGbtzv/wDpdzK7E4TrAVnhJyvDEfefQnB5Yzv9MZbOaPjxZHyGx6bKWMnsjgpXXmynm7AOstHPIfacQnCtZXZHv063ugjVCb8lQuBFVhcRAi9idodEWAQSYRFIhAUAwHtwvKUGiy27R3yILITxXROANGZHAMwB0Kx3/Dw6UYtHEooYRwS9wycwMPrXFYc8MPpntA29rUQiPsGDGETHpZcb9HNmdgPAQ7GdH8E5fIVnLyNiHHXhVdjdzrGnPR2/D+43LOG3wb3Y0+6KtlEXXh1t8/9EfAkPRnB26ltLmd0A4It3860NR+KGc2a0NRrgpfqo52HDIvRjYtvQZ0c82vA5xjEa761iZjcA5BoJcTgygGDHgskQ6/vyDIuo71s7ebze1nBk2ohPxBpmNwC4AAwaSaFz6BiOhL1o6vfhn7G/jYaI82O9aOovjrbRNdRi9PBzABRmRyZmhZy7e8YYArCa2RkA9wPYB+AUrMdJAHsB3MGcAoDFsB4L2WzC6/XOyy7ctCC7pOKWK62X39ia2R3uG+rpOw0rVHe470J+5ZsLr6ZPeiZ6NjMi4Zni8rs8vkCXxy9AJaZl4PaLTrc/kGW6CI9f1JAAkWgQ1pgvwhdoJBHi8iJ8gUYS4bfAkkkihHwJJELIF0AihPzwSYSQHzyJEPJDJxFCfuAkQsgPm0QI+UGTCCE/ZBIh5AdMIoT8cEmEkB8siRDyQyURQn6gJEIkDOHFqgJsbliGbT/dG63NR5chf1uBfAlOuQ2es6EcW75ZAnU8zp/VxxVsOb4k+hkSYaaI9YHo6E/09+CtP94X/SzNCJNElB3ITvopBaX7PCTCLBE7OjKTFvFu2yISYYaEla9uNPTcDn2/0I+RsjzZebN+7vUSww9RWfNaCYlItYic0nKoY+lJSwiOzYe3tIJEmDErqn69O2kRVT/fQ3uEWcvTS9vz4v5+iLc/FLyzjkSYuVcEPn0yoYhA7VPyJNh9s/bEVEm1F7sHbpomQH9tfcgrV4KTRHgmbnUU7czFxsPLo1W4Mxc5ZZI2ZyeL8Fi5SISQL4FECPkCSISQHz6JEPKDJxFCfugkQsgPnEQI+WGTCCE/aBIh5IdMIoT8gEmEkB8uiRDygyURQn6oJELID5RECPlhWl2E2xd4T3pH/dYuty+ww3QRK4oquNsnDrh94pTHJ1qpxGQG0Uz8gf3e0kp7PkWZIAiCIAiCyeZf4MbY4PEDvG8AAAAASUVORK5CYII=">
                    </div>
                </div>
                <div class="col-11 pl-5">
                    <div>

                        <p class="about-title pt-3">Turning Complex Problem Into <br>
                            <span class="text-green">Simple Design</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="pr-3">

                <div class="row no-gutters">
                    <div class="col-8">

                        <p class="text-justify text-about">
                            As a Fresh Professional, I offer a dynamic fusion of technical prowess and collaborative
                            finesse, ready to energize any team. With expertise in Java, Python, web development, and
                            database management, I'm poised to redefine the tech landscape.

                            <br><br>
                            My academic journey is marked by a relentless pursuit of excellence and a fervent commitment
                            to collaboration, honing my skills and spirit. What sets me apart is my innovative
                            problem-solving approach, thriving on challenges and driving impactful results through
                            teamwork.
                            <br><br>
                            Now, I'm poised for the next career chapter, eager to unleash my skills and passion. Seeking
                            a role where I can make a real impact, I'm ready to drive forward the frontier of
                            technology.

                        </p>

                        <div class="row no-gutters mt-4">
                            <div class="col-8">
                                <a class="download-btn-link" href="RESUME_SULTAN SHAIKH.pdf"
                                    download="RESUME_SULTAN SHAIKH"><button class="Download-button">
                                        <svg viewBox="0 0 640 512" width="20" height="16"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill="black"
                                                d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z">
                                            </path>
                                        </svg>
                                        <span>Download CV</span>
                                    </button>
                                </a>
                            </div>
                            <div class="col-4"></div>
                        </div>

                    </div>
                    <div class="col-4 pl-5 pr-4">

                        <div class="row no-gutters">
                            <div class="col-12">
                                <p class="text-color mb-0 text-green">Name</p>
                                <p class="text-about-detail">Sultan Shaikh</p>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col-12">
                                <p class="text-color mb-0 text-green">Phone</p>
                                <a href="tel:+919967939158" class="about-link">
                                    <p class="text-about-detail">+91 9967939158</p>
                                </a>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col-12">
                                <p class="text-color mb-0 text-green">Email</p>
                                <a href="mailto:sultanshaikh1029@gmail.com" class="about-link">
                                    <p class="text-about-detail">sultanshaikh1029@gmail.com</p>
                                </a>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col-12">
                                <p class="text-color mb-0 text-green">Location</p>
                                <p class="text-about-detail">Mumbai, Maharashtra, India</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- ====== ABOUT ME SECTION END  ======-->




        <!-- ====== ABOUT ME CARD SECTION START =====-->

        <div class="container-fluid mt-5 pt-5">

            <div class="pr-5">

                <div class="row">
                    <div class="col mb-4">
                        <div class="card-about">
                            <div class="card-details-about">
                                <p class="text-title-about mb-1">Frontend Development</p>
                                <div class="mb-4">
                                    <button class="btn btn-create-grey mr-2">Design to Code</button>
                                </div>
                                <p class="text-body-about pr-3 text-justify mb-4">Dynamic Frontend Developer dedicated
                                    to creating captivating user experiences with sleek, efficient code. Committed to
                                    ongoing learning and innovation, I specialize in translating creative designs into
                                    flawless, user-centric interfaces that leave a lasting impression.</p>

                                <div class="card-img-container">
                                    <img src="Images/Frontend-Dev.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-about">
                            <div class="card-details-about">
                                <p class="text-title-about mb-1">Backend Development</p>
                                <div class="mb-4">
                                    <button class="btn btn-create-grey mr-2">Logic Architect</button>
                                </div>
                                <p class="text-body-about pr-3 text-justify">Eager Backend Developer passionate about
                                    coding and problem-solving. Equipped with foundational knowledge in backend
                                    technologies, I'm dedicated to learning and applying best practices to create robust
                                    solutions.</p>

                                <div class="card-img-container">
                                    <img src="Images/backend-dev.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col mb-4">
                        <div class="card-about">
                            <div class="card-details-about">
                                <p class="text-title-about mb-1">Database Development</p>
                                <div class="mb-4">
                                    <button class="btn btn-create-grey mr-2">Passionate Database Developer</button>
                                </div>
                                <p class="text-body-about pr-3 text-justify mb-4">Passionate about crafting efficient
                                    databases to drive application performance. Skilled in user-friendly design and data
                                    security, I thrive on learning new technologies to optimize functionality. Committed
                                    to maintaining accurate data for informed decision-making and project success.</p>

                                <div class="card-img-container">
                                    <img src="Images/database.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-about">
                            <div class="card-details-about">
                                <p class="text-title-about mb-1">UI / UX Design</p>
                                <div class="mb-4">
                                    <button class="btn btn-create-grey mr-2">Experience Craftsman</button>
                                </div>
                                <p class="text-body-about pr-3 text-justify">Passionate about creating intuitive,
                                    user-centric designs to elevate digital experiences. Excited to infuse my creative
                                    flair and unique perspective into designing captivating interfaces that enchant
                                    users.</p>

                                <div class="card-img-container">
                                    <img src="Images/UI-UX.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>

        <!-- ====== ABOUT ME CARD SECTION END  ======-->



        <!-- ====== RESUME SECTION START =====-->

        <div class="container-fluid mb-5 pb-5" id="resume">
            <div class="row no-gutters mt-5 pt-5">
                <div class="col-12 pt-5">
                    <button class="btn btn-display mb-3 p-auto">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAAACXBIWXMAAAsTAAALEwEAmpwYAAABN0lEQVR4nK2TPS8EURSGV+KjkSVC6HQSQS1Ri19ARFT8AK1E4URm3+febLbZqLYnEQoVleAHKERHIVvoNEKhIEYmuZsMmZ3xsaede577vG/ulEqdHjMblLT4L0ilUlkHmnEcd/0JkCxKOgFiYPZXy5JGJO0CDwEQA2/AWTqamZWBnUyI935A0rak6xZE0rOkA+fcfOscsAK8mll/rhVwFCDTGcaHyTfn3FIRZBW4ywCMAi/B9NjMettCElUXIlSr1TFgQ9KFpPdUX4npE7CfdNZoNHryrJYl3aaXv4ES8HkUReOlovHeT4XiPwLgHlir1WrDeQYLWe9E0lUodjP3VjMbAi5DeeVvkK1gMlH03zymcjfNrDsVa1LSTWH+er3eB5xK2ksDUhd9sWs7URTNee9nfnS4k/MJdtzZ7RT/XCkAAAAASUVORK5CYII=">
                        Resume</button>

                </div>
            </div>

            <div class="row no-gutters mb-2">
                <div class="col-12">
                    <div>
                        <h1 class="project-title pt-3">Education and Practical <span
                                class="text-green">Experience</span>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="pr-5 mb-5">

                <p class="text-justify text-body-resume mb-5">
                    Stepping into the world of IT, I'm eager to share the beginnings of my journey through education and
                    practical learning. From my academic studies to hands-on projects, each experience has been a
                    stepping stone towards building my skills and understanding. Join me as I navigate through my early
                    adventures and discoveries in IT.
                </p>

                <h2 class="resume-heading mb-2 text-green"> <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAACXBIWXMAAAsTAAALEwEAmpwYAAACE0lEQVR4nO2WPWsUURSGr40RC3X3nCRYhKisX6BFJD/AQn9CxH9gaZdKxdoujbiFO+fMimCqBOxCeosUggiKaKNokdbKxLxydDZZbmacz51b6AsHprhn7sN7PrjO/de/qAh03SI0h1N0bwj4lYJhIaDXMaaXAHckKIh60RqY5oC0BqYlQSYGpjVBGgNrGkSrgk0aRIuCtQ2ifwMT0GooED0U9MIp+Et4EE6c4s9WrssKXhfwXkCQPQGvGct+Hw0wc9XK1zaYgDcUtJg5aW2BSR6IryH4WtOlPCgNL4zfFWO6F4GWC4MJeK0OWBaIScB3Bbyj4C1XRoOKpcwrjYL7ydl8oAi0bHZ6P1jIc6xMaUoBKXhLwT+T5XmhiGNpjkSYPWMXp5WmChCSi3YELAPwed8xBT3/E4cdsZwEZATdDJAexG/HhqCLWXmeI35+40AYOaZgHd+uEehSiiPNAQl4s9gk0VeLglO3WcMhejiBLf2gMlAfnZMC+tQcDH0conuiMpApxuxZAb+tCyPgN89wat55Kg1kijB/TMH3BbRdHoS2BXxvBb0p58l2m72BknPfY3RvujLq4/RxAd8ScCyg9wLeTXFiV8DvbALtWWo5Wf/zX6sC+uDqaAW9qQE6czE6VyzsO82JLCnopddj31xICeiO5/CToECrcEfHpvjHU8ycc6EVg28nvfcoNMu+FPx41Py/AOj7t0XC9LBQAAAAAElFTkSuQmCC">
                    &nbsp;My Education</h2>
                <hr class="line mb-2">

                <table class="table table-borderless">
                    <tbody>
                        <tr class="table-resume">
                            <td>2019</td>
                            <td><span class="text-white-main-content">SSC (Class 10)</span> <br><span
                                    class="text-resume-grey">Schooling at </span><span class="text-resume-white">Mother
                                    Teressa High School</span></td>
                            <td>Scored a commendable <span class="text-change-color">74%</span> in Class 10<sup>th</sup>
                            </td>
                        </tr>
                        <tr class="table-resume">
                            <td>2021</td>
                            <td><span class="text-white-main-content">HSC (Class 12)</span> <br><span
                                    class="text-resume-grey">Juinor College at </span><span
                                    class="text-resume-white">BSGD Juinor College</span></td>
                            <td>Scored a commendable <span class="text-change-color">74%</span> in Class 12<sup>th</sup>
                            </td>
                        </tr>
                        <tr class="table-resume">
                            <td>2024</td>
                            <td><span class="text-white-main-content">Bachelor's of Science In Information Technology
                                    (Bsc.IT)</span> <br><span class="text-resume-grey">Schooling at </span><span
                                    class="text-resume-white">Nagindas Khandwala College</span></td>
                            <td>Achieved an impressive overall score of <span class="text-change-color">81%</span> and a
                                <span class="text-change-color">CGPA of 9.49</span> in BSc.IT
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="pr-5 mt-5 pt-5">

                <h2 class="resume-heading mb-2 text-green"> <img class="pb-2"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAhCAYAAABX5MJvAAAACXBIWXMAAAsTAAALEwEAmpwYAAABd0lEQVR4nO1Xu04CURBdKxtjwcyC0cbnJ1lpZ4yG2hjlA3xQaEgsNIrMUPILKo1aaMlHWKOFhUqOObCFNMgisDHZm0xu5u7snDOT3XvPDYL/OqrIZR2y7dALg9Qcem6QrTJmwpGDA8GEIbNvkHeDvhrkniQ4O/SN6w7ZY9zISBj02KEfBtmpIZz6+Yx+BbJr0E+DHo6IQLhk0K8qdKNXnEM3O3G5hb6TV5CbN0jZoDe9zCENh8Kh9d5xWu/ESeO3nMQlPpk/R8mTsieSaCVMohUkTAC0lISnnUD6TWj6d2Do+4RBXqoIV6+hK2VkFznT5/qgm1Uz7ksVyBrBHXrg0CPO9A2yPgCJZnCJ6QwTxLESlicNWujujha4HjcX8SlUzqJq+rZOFyTfXZHkqTni5iL+gGeHnFDCUQuQUFsTtIWPnI77ALs1aDGqpmjQu/QU9VRPIFVWOnSNmbzaNshjsiTkITBk5hxSii62YzXiXkFmh3BL/fv4BnVMXCfA37ZDAAAAAElFTkSuQmCC">
                    &nbsp;Work Experience</h2>
                <hr class="line mb-2">

                <table class="table table-borderless table-resume">
                    <tbody>
                        <tr class="table-resume">
                            <td>2023</td>
                            <td class="text-white-main-content-we">Software Developer <br><span
                                    class="text-resume-grey">Worked for an </span><span
                                    class="text-resume-white">Orphanage</span></td>
                            <td>I have developed a comprehensive web application tailored for orphanage, faciliating
                                seamless management of daily tasks dynamically along with a payment gateway for fund
                                raising. <br><a href="https://jamiatulehsaniya.org.in/" class="link"
                                    target="_blank">Explore My Live Project</a></td>
                        </tr>
                        <tr class="table-resume">
                            <td>2022</td>
                            <td class="text-white-main-content-we">UI/UX Design <br><span
                                    class="text-resume-grey">Worked for an </span><span
                                    class="text-resume-white">Restaurant and College</span></td>
                            <td>Designed captivating posters for esteemed restaurants and Certificates for colleges.
                            </td>
                        </tr>
                        <tr class="table-resume">
                            <td>2022</td>
                            <td class="text-white-main-content-we">Tutor / Coaching <br><span
                                    class="text-resume-grey">Guiding a group of Class 12<sup>th</sup> Student towards
                                    Knowledge.</span></td>
                            <td>Took Private Tutions until 12th Class Students who were financially Challenged.</td>
                        </tr>
                    </tbody>
                </table>

            </div>


            <div class="pr-5 mb-5 pt-5">

                <div class="row no-gutters mb-2 mt-5">
                    <div class="col-12">
                        <div>
                            <h2 class="resume-heading mb-4 text-green"> <i class="fa-solid fa-code icon-green"></i>
                                &nbsp;Programming Language</h2>
                        </div>

                        <hr class="line">
                    </div>
                </div>


                <div class="row row-cols-5">
                    <div class="col mt-4">
                        <div class="card-lang">
                            <img class="img-lang"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFSklEQVR4nO2bWYwURRiA/65lqnY5F4NRTIzxiiA+iD6QqBgPNDFGH1S8SNQHBUXIRmWqZlfjGiMI4gMmxgMk+uCBiy8eUZep2q7aHRYSNxITjcaARzwiCSIBr1XgN91DVnqXY6a7emboqS/5k0l2ZtL97f9Xdf1VA+BwOBwOh8PhcNSLfGkS5OVFhKtbiZBdHlcrPS5f9oR63eNqQ/m1XEEK8n4QxSugMDC1uf9Z3f64Fi6v87haR4T8nHB1gAiFlYc8GHzOE/JJ6DLToZkgXN5OhPyuOmHHlLk3zMxmwBPqCXviouFxtRwyjVCXl0svHYFBtIi+myGreEK+naa8MLjaAQuHcpBFCFc/pi4wyMK8vBIyR7c/LlK+XA0TLhdBh98OnfJ8T0hpUeJjkDnypUmRAV+oVZG/i+IUItQeS5PJ85A5Ovz2SJlxddPotxAht1gRKORayLpAj6uVqWVgMwgkQv2d1hjYLAIxrXAChRM4FpeBCVk4lGspqPlxggh5T9wSxl6YgIb1HDE0fRU17cb+tjmQaTqqGz8jAn1oR8Pw+EH7ULGzIZN01EIgQ9R0J/q5C2rfSebqkhbRd33cEk21hKsRWI6vsQSTarGuvZcIubn6TnJtH2NiCAziqfTk8U0zwxZ8A4gi6Qnch1thsn15y/wLbS23SGMLRNRsYQrdFJv7GKrRBX5g1V+w+1VvMaRSgVw9m1hgUMYIxN6kwdWueoshlQZX9/0vkJ0TUyCiT2dY8ddSKM47geQNw8P+tBGBhl0VW6DO3dnwW5HEdvkKFXkEQc2eiS+QrbYjkKv3Tgh5XPbC0g/ZiLwhyKGh3yYQ+L4VgUSonxo/8+RaeGiw7fDrRsOWxJYXCqSbk9vrlKfUWw45WnD5lyfku9DZd+noy8YBdhZq9msygeyr5AJFcXY6N6++CHbmSL5vcdXr47y6EQp9c0Zn3Ii8QTgJNfsskbxyBu5svBmYq8Hw5lMiaEmhYV8mllcW+H3iCyKF4m125MngONrjAOhBCqAPE1HTLjTsdyvyyvFp4gsjvHi3JYEPHvXmDTsT+9nVqOn8qsLkFqChBdRsA2r2h0Vxh4JuSiywRcgbLMyQL4yRthUmo6YCNd1h/8YthaavJRYIonhZwpnyZ3ikd0JEnm6dG4wvdRd0fIEdlvp/iTJwaUReWKrsz7rLqUhg69zkArt7aHiSKp68/dDZf/KIPH/itHDf4YSQxw5Ya+0TIbfFnDg+Ofx7ULMVdRdTeWwDW3hcro83eaiNEYGGbm8AMRVmIH3UmsDgESSWQK7WRRf2bH/dxVQW+9Aff6o1gcDVrLq11k1dso+DbYiQ25tE4JuIYH+1RIQqZFzgv6jZ0/b2QY60K8fVL9kTSHehpi+hpjMhbYhQd9VMoKay6rVxpdFPb0GfzQs7N2mU67HwhFxdmwykGTyme4jgbDPhcrcTmITgVH2+uMDjao0n1FseVz2jIzxEXo8SHshdDFkDazqJZLD80Ql0ArOTgZoNo2GLwu/06QzUtNeVsKlK4qox2wOG/ebGQFPxDD3mh4po6GC2BQ7BeIslHDn0g0WYgobtOUzwi5BFULO9lgT+g5otxgGYigO5WeEzY/Q9IwcsMwVq+nGNngWXQBZBP3dHTQTq3GzIIohA0NAt6cqjJcgyaFpPR02/SUcg/QE1PReyDprx09HQj+xlHTuIhr2BpbbToJlAw65Fzd5BzXbHELcnXIFoylG1ngHNDAZjY4meF3aKDV2Ghj2Hhq4/9JveV9CwNWjYcvTZA6jZNeFprtT2LhwOh8PhcDgcDqiI/wD8maSpB7+xMQAAAABJRU5ErkJggg==">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">Python</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4">
                        <div class="card-lang">
                            <img class="img-lang-big"
                                src="data:image/png;base64,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">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">Java</p>
                            </div>
                        </div>
                    </div>

                    <div class="col mt-4">
                        <div class="card-lang">
                            <img class="img-lang"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACKElEQVR4nO2WT0hVQRTGz/GZ7yEiRJJ/SsMiRaigUFwUhQgGouLChZS5Cmmj5c4kol1tRNoYLcJ0JRKUFYmUJi5EQSP/dEFxkUW4iQyUIMS+mHe5jtN7ihLeO8L54OPBmXmX+c2c+90hEolEIisFh2CTSQAcOQFIC+1GQbcM5CV2gt91SIw6we885EPm2GHarYJeMATACX7XIS3k/M+O8YZ7282xmT5CbTkjI42RGGJkHWbUVTJmX+4DgMFOQiSsx2iTkyMcHbcWYH2WkHtU18NJjILj7q9XKz7D+PPJUoCPz3U9IYEx/cKtLw4STmQzbl5jrExYfALDXbqu2uj3lJ7/64NlKRQP4MuQWa8uZXx+t9PnWQCgfPmC+eJGwozrNYz5/n0C8G2YcLYgNoFCIRdkddJyAGW1yNYGRkpyLMjpPMaPMcsBPH8fJdxvJqQfMiEar3KwACrvtwP4N+d/jlM0/7352Rk+AqgUqSphvH6kawsDJsCrDj3W/YBQeCo279tb9H+SDvgE0NNG0c+/lya36hkddwnnz5ktoe4+ar66/3i1kmLG1yG3vjxOuFSkx9TX2heAuTcaYCufPKavBg9bzZNhZhxJN68SyrcbfGyh908JqSnxF69a4e0Ts/fv3Nge+GJh/CjdMwDlpRFCUx0jJ9PNc3VNriljTD6LP3+sh3ClgpGf6+7+wVR34Y/vEdZmtkq1PQTwwyQAjpwAfG0hkUgkIj/0FxH0JVVHu8XgAAAAAElFTkSuQmCC">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">Javascript</p>
                            </div>
                        </div>
                    </div>

                    <div class="col mt-4">
                        <div class="card-lang">
                            <img class="img-lang"
                                src="data:image/png;base64,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">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">JQuery</p>
                            </div>
                        </div>
                    </div>

                    <div class="col mt-4">
                        <div class="card-lang">
                            <img class="img-lang"
                                src="data:image/png;base64,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">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">Angular JS</p>
                            </div>
                        </div>
                    </div>

                    <!-- </div> -->


                    <!-- <div class="row"> -->

                    <div class="col mt-5">
                        <div class="card-lang">
                            <img class="img-lang"
                                src="data:image/png;base64,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">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">HTML5</p>
                            </div>
                        </div>
                    </div>


                    <div class="col mt-5">
                        <div class="card-lang">
                            <img class="img-lang"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEEElEQVR4nO3YSUwUQRQA0J5qF4zx4JK4HEz04HrRg3G5aIxr4nJRb+pFOelBYaoaVDSgkcUVN0Qxbgfxoh5QYKp6RBQXkIjKMuAoiAziMKCCKCiU6THQXTgtM12lk5j5SSVkuqu7Hr+2LkmKRCQi8f8GQKQdIELDWiBusw6AxB12AMKvODKAH4YdAEmRZYAN4pu8DZDPNYRejlb21bchcsM6AOHMsAAOvdABEJ/lyUBSOAAgucyQAZxoGQAQ2R4WwIGnhjGAt1kHQLIhLIDEx3p9hay3DJCQY5FZw6alPqAtLS0DlmBizOVGFpHwoO89kl1daB0A86ebAcYm3hMC6KGUDjnfLwO7C3VAnHOadYDiGG0GGBKnUp+PH/Cxs/v3LhTn1AE7ckdZB0jUBhDuMkO88Xi5AbVtP1jA2XrDO3CX1gYOgH8mahA5iKdmNzGAMl8Xe8/pN4YZiLzjarwfAEmpSMD8W14GUODpZLvPCbex/lNugA3hXJGAVbk+BnCr9it7zzGXYRUmd/gBEF8SCdjsZMfFpeov7D2Hyw2rMLkoIgNpwTY21eEKeRAff9HOAlKeGzKAU7kBAJLYYAEJOZUhAxJLP7Nj4GCpcRaK4QcgsilYwM6bL0MGxD76xAKSivVn2slGboAM1eXBAqKvPw8ZsKWglQXse6iPH4Us4wZIyDFb5CC+WtPBANY5fOw9e+731ZVinbP4Afb8CSIBOW+/MoClOc1sBuLv6oD4gvH8gL3OQQCS7kCNm5nG7kgLqxoGBBS972QAc2580K9nvqNAUXsHcI8UXTKYH/BrJmoOBJh4oJABlLgbBwRUtH5nAFOym/TrGXXGGcgrpPF+ACIVgQAj995lALWNXro8s5hGxeu7yd7GDcvy0NW5Ptra2c0Axl3RvwXAqdf68yEpFwawQeIMBBhssqV+7fHSkwWv6OIzT+iK2830gusLbfnGNrw3orI8egbSq42rsCoOgHC22SCtb2q2vJ1u/97DdrEjhuMUSK6JA0CcbgY4olb/8bvALLSulFHRbxuRZjhOQfi4MABAZPefpkqtKy048Zgm57uoq77JFKB1oys1HXRtns8/JuT+X2IpzwxjAO8SB4Bka7DzvhFTVf+B+gZotGx2nILwFmEAGalrrSxi2nfz0CyLxyl2skYYQILOeaJWYtNypo7dRijqXHEAxTFZOEBbdU+6qZxS9uscSGHrSTF5k8QBYvKGCwFk1FH5aBUF+4spMCx2IEDR3ikJDS0Lihptg+Q6QPhz0Ij0GgqSn1E5Qe8egQvusEHiAApGUhyeIf3V2FE0TFYcS2yQJAOIS6xmB0Di1o7P/eef9vsjpLBF0Nn5l/9lnuxAvNK/ekNcoxXtb+037Zrl50YiEpH4P+Mn9Q+e3CSBSHQAAAAASUVORK5CYII=">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">CSS3</p>
                            </div>
                        </div>
                    </div>

                    <div class="col mt-5">
                        <div class="card-lang">
                            <img class="img-lang"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACyklEQVR4nO2Z20tUQRzHjy/10EPv9X8k/QGBtTOLXbaoh956qewlotiZRaxEC3opE7q5Elh2AS9QYRIJRZBmF6JaUiKiiC6kEpvYrn5iXOwIuXXm7DmeivOF39P+9sz3M/ObOTNzHCdWrFixYoUrqtKCPUqQU5KClhBmqFIbL5SkzrRdsX0taA3btC4fLRWZzwhWR2geE5kk1b4BlKA5agAtafINoAXtkQMI2isBuBA1gJJ0+AeQXI0aQAsu+wZQgh4vjTRshMat5eNgqqIR6PIPIBnw0sjdLv6or2Mw3A/HdlhD3PYNoCWvgwKY09QknDlgVUKvfJnfn2K5EkzbAtzrhax242IT9J+H8U9uzvhHqK/1WEKCaePFGkBJarz20nyA3taFc5q3Q37CzTtrMwoJ1tkDCLJBAph4esfN62y2mMiCrJX5dIKVWvAtaIDRR27eid0WAJK88eTJfF0NS7Wg32al8AKQzUCxWMoZfWxRPvLnKNw03soa37uGZVqyQUke2D58PsCTAehuKUXPSbjVAblBmJkp/f72ZWk+2LahTQiG0gnWG6+/1nySlK+HWiyjpudtSkeXj82hAZiV5st7N8Y+QGHK/d2MxOAN78uo9gowW0KCWiUZrASg3Bw4l4Y3OTfP/EfbzgPjTVC7YAnNqT7FEi3pCxrAROM2KHwv5RULcHiLFUCf8eZpJapPssIsXUEDmHg3av8yU5K88eTYSEvawgCY+OzmntrnuffbnKi3EiY6j7h5ppQOeSyhtGBtZJu5jka4dhpyQ+67wOj+dY+9Lyj62syFtZ02GnkIDZtC3k4HfaCZzMPIMFw6OntVskgHGkF3EEdKz70tgz9SXvHb8F9xqNf/+rWKsjjUhAYgLA8z/9XVYiZJddQA6QSrnEpkrrgjAxAcdyoXVUqwS0meL9oHDsGzjGBnIB84YsWKFSuW8xv9ABXlvamd/sh5AAAAAElFTkSuQmCC">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">Bootstrap</p>
                            </div>
                        </div>
                    </div>

                    <div class="col mt-5">
                        <div class="card-lang">
                            <img class="img-lang-big"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEVklEQVR4nO2YW2hcRRjH/6naWi+9JZnZaLFVI1JvIBVvUBAKCl7Ql1SRilpxk/1mtzGtyc7sJucrolWxphcvUBWkLfogVvFBEasFS8GHCmpBfeiTKGjpleTMhmJ1ZeZsNptksyR5kBM4P/jImZkvc+Y/3zczZxZISEhISEhISJhDcG4RNH0BrQ5Cq01Ipy/CnKKQboNWg8jlFsCobmg6DE37oFUXejdcjjmBUVtQzNxdLWvVDK2ehlHfopB5CLHHpY2mDwA0oUgroLOP+vqenoXQ6m1o9ZJvizWGOqEz9/pnJ6KWAvXC0HbEGj/b9N6U7U6AVmnEGqO6YWhtgzT7DvnOlYgtHR0XwNC7U7YX1H3Q9CZiS3/X9dAZauDRBE1H/C4VSwytQ6HrzoY+0fa6BbHEqMeh6Q70ZVb5U7kezPNh6Cjy6cWIHTqzGib7DDS9CkM/+p2pHnnaAEOfQFM7YkYTtNoDTYf8CayJp/TM526Fode9WH7yYsSGfOdKP8MOk12P/o3XNfR3UTDqjThGI8IJcHlfjz66ESbbB0O7YdTnYJ4HFLK3w9Br0Co/ZQ6a7Bpo2gFN2emGr8yYV2K5LmQ5aAO5u9ZCbn3e+VhO3WZZbpvYbgPx8nC/uDnyEV2uboRb26HVNhi1F5s3X1ozOHUCRpW9OYdJqnPLoZWt8ZnW8R6y/NCyLIeBeKsUpDpqbZjlPaViakUYiHOW5VnLMjvaZgPRHbIIw0CMjBTl1WEg97t+SgMta8B8oU8fQx+D6bJRAWUYOglNP8OoIX/hGDf79Epl4D9V/hanI8AG4rh7cTmNuheWkFP3u3YbyH2T/pflO37QQapjnIDqmLpu8uPwW2s0syf8zEbP3VVHTl8CTaeg6S8Y0lUB7vJh6MCk7xj3KezrN8qQ5R/uxcNGyCki9GAkQLw/uU3s8oNm+VhdAdX3Za4ZE+By26jjMOpYtDh8dHKVCBWg1XM1Agaj+uz6cR0a9b2vL5JLj2crqfCbDeQBbyy/CgOx0xaWXdlQQCB2TktA5aWRAP9ML/pyIfOAF+HEuPyPbkwzEuCK5Vz7gmEWt9iBttXOwkBwtC7kZ40jIHfMToC/r9I5aPoSJvtINGDaFYVr5gImMtSfWuUFsDjUOAJy++wEROW9MOpfaPoVRp1HMXftJAFGvRBFinpnIsAOiIcrEdhfGhB3eQEsj5Z7li8cMqlWy/Jry+KXMBBH/PoZEGtHF7TbTqcnwB0khn6Hpn9gaGu1vlbApnQLDH0EQyE0nYFRpyt2fmwNyGOWxelaC1mUwkB+GhZa2spAk2Wx1QbilNsyfXsgbEVUOWR5uMw3zHdbqQ3EN5GPHJrYp1vJS8HdS+pIG3+pdj+DeN8JB5nbyly9+7Y36k8vXKvmM7x4yVl91dJRc+X6Mwic5GWLRv0sN19hWRwMA/l3yPKpWr+JfTrDrHC/GozN+php9QM0PTG7ThMSEhISEhIS8H/zH0+vv/NpkXfUAAAAAElFTkSuQmCC">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">MySQL</p>
                            </div>
                        </div>
                    </div>

                    <div class="col mt-5">
                        <div class="card-lang">
                            <img class="img-lang"
                                src="data:image/png;base64,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">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">PHP</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="pr-5 mb-5 pt-5">

                <div class="row no-gutters mb-2 mt-5">
                    <div class="col-12">
                        <div>
                            <h2 class="resume-heading mb-4 text-green"> <i class="fa-solid fa-user-gear icon-green"></i>
                                &nbsp;Technical Skills</h2>
                        </div>

                        <hr class="line">
                    </div>
                </div>


                <div class="row row-cols-5">
                    <div class="col mt-4">
                        <div class="card-lang">
                            <img class="img-lang"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAtUlEQVR4nO2ZsQ3CMBBFLTMIlBkOhgizxINA5CI3AhTJAMkEFEdDWtDJjmyF96Tf39c9y5LtHABsztz5uISDWjJ3vne1YB1++cTVAgVKwwZKwwZKwwa2RocmqjRqyet2qucisw6/ZqFAJthA4AykgUIBhXaukI5t1OmqpjzPFRWYjMOvoUAm2IBwBtJAIUGhNFBIUCgNFBIUSgOFBIX+XaGx7c3DPy4/HneP379Zg79nKwCwY94mH/S29nqOhAAAAABJRU5ErkJggg==">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">Power BI</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4">
                        <div class="card-lang">
                            <img class="img-lang"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACsklEQVR4nO2W0YqbQBSG8xBNGu9LMXvRVyhoF2I2FlrMA/RipzGwKO1VUSgb80QFXVYLfQKTvETS26jRS08Zs2nDEo0OM9ZAfjhXifB/Z/45c1qtiy76P/p9/bKzkrjZWuouVgNuux5wkFegi/mlCVvQhDnoggVfrzv1mL/pjlYSFxaZLg2gH8KIIeiCwt78gEvLmq8EoGeVMoN4ik3pzhMCAOhCAHf9NnWALPMVzZMBiPhuTKkDrKXuskaAOXWA1YCL6gMQQ/oABPknBtCFgDoAnvnnHSGJs+o7AfH+fMeoJmzgy9sXLRZa97sK84dMe/eRiflnEAF1AE3YMDd/ANFeDbjpWur6p8brCeMRaKKPM88sNsf0/QN0DBlmpgwLU4atKQPk1eF3bx6jDm/HM95JFrwdb3eVzHk7tvBvtZg33sPIHEJYZPoYwNVDMuo5cdhzEjhecXjlxAp78zKkZc3vATLzdpzmm092ZccpMwgcmyqd3xeORnHnk+cQwSsnpL+NPmUeqhbOfGnzzt840d9GDRmWZADJsioAbyf0VwljCBHhCUQEJxBSByDJP65K+Xf+3QP6ALuZX/0EnGTRiAiZMliEEbIITuD+jMdosnn9I2SzVpg3oBA9ZE6slH3I+IeY7UKHIQwZgioABxBBUed51ub3+taHtjGEqSmDf2q8Hn6HX1j8SPXsxMfjNRuxduLjzDOLzTGNH8cd5E1myFMXyFO3yJtAXrWaJuSqI+ROwiLTjQVAO/NpWfONAhjj2FTofOMAUJb5auYbBXDrqcvzBnDV6KwBEEH+bz2V/lZJqt3MrwjgTuhvlaS6dVWLIEL0t8oax+gG/UL1rQdl9PnnRCn1kOH/uGo9ixkJBL6chZ1vqvm9Pjl3beSqU+SqPh6v2Yh1VR9nvnGxueiiVq7+AFwg/qWc6gzXAAAAAElFTkSuQmCC">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">Figma</p>
                            </div>
                        </div>
                    </div>

                    <div class="col mt-4">
                        <div class="card-lang">
                            <img class="img-lang"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADv0lEQVR4nO2ZvWsUQRjGZ97VJogfaSSFQbC5bWyUYGMRsbWwsBObgIWFMWBmLid4gtGZBNTOzn9ABEHZGMzsLRo/Ck935hRUSBELQQIKIrkLEjMyG8479T5mde8L7oEpd+f57b4z88wMQn311VfH5FBxDKhY2sZfPXMfFA+jXhIQMQbUXwfqayctNty5ona94suUVzyFshpQNwuoGAcqNoz5cosAKu21ATmQ11tRd0ljTMRstXGoDRC11Nzqsuutjh+4pwc67RyhbLAFE3GrlnmoA/CrecWV1NzqBNIad8j8vQFMhFfPPDQDqIBk2m8+vbgLiHjSyDzYA3xsr/nMoyGgvmpmHmwB5oq6febP+/vMHG9jHloCYAYMD0cQC/fGNj8ZHAQiVmzNQ+IA194MYq4C4EoDU+uYyWl0+7Zj86gzKUaB+F/jmIdEAfibYeDybWS+qhkgNJ0famieiuNARCmWeSJKkM6dTgwAuFr803ylyU8Ok0dqPjeZOwPE/xHvy4t36LzYb55PDoDJz/UBNksKmLxYnVcgLWjcksFE3EF0YUf5HYkBYC4vNwQolxSTD9GVwm5MxPWY5tdMFvqzXzexMaA1xkxdsoEAJktwYTFOySwjIkZqdesmPY0Cl2eByx/NIZSG7HMNNNe4ZKh/F40HO+v157ZiIQMWngSmvlv9jct5Demg1lf/bsZIs77cVq3EDiscBS6/WUFcDTVkHlUDfEAkOGTTj9vSKMHDEeDyixWEadnnGhP/PpqYH7Ttwm0pABEjkAm+RF/YEgKz8L5Z0TsO4KQXjgIR36KSyAQarryyhgAuPyCuOldCQMXJaBBWD8opA5G3hzCTACu0fxADyZ2tGw3Suc1Zx/pPRAvfXXQjbMc0qjGm/qXmi5KBeFGKAwFMLUcRvZUAmPrTVlmG+g/RlNiNubweD0KuAVOtixJA/c9NzK8DFRdRNlsJc6xAY0FsxvM7iOeTD3NA/cf1s7v/yaF+7Tg9o85YRY/f/8Y7NFtINk4jujAMRLz9O/76gdmkN3rUYeFx4DLeuOCyBKyQ3IYm0sT8oDFcLhkzLtAJyy3lTDgKXH2NW1Ju8uuAxmZzji7M70FxNVM4CFytdBjgPzX7eh8wudS7AEbT+SFgUvUugBEr7AKuniQC4LX7aLGsbH4Ac+n9L0DKK051BiCCCLZgrm79E4AXHa+f69zxevWBAZeztgCprrrgqJLJQsDkRgOAbr1iqgi4HIsOybjSDpe9dclXlsPkMeDq/fabS0977pq1r75Qd+gnbk39qO0MuGMAAAAASUVORK5CYII=">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">VS Code</p>
                            </div>
                        </div>
                    </div>

                    <div class="col mt-4">
                        <div class="card-lang">
                            <img class="img-lang" src="Images/x.png" style="border-radius: 10px;">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">Xampp Server</p>
                            </div>
                        </div>
                    </div>

                    <div class="col mt-4">
                        <div class="card-lang">
                            <img class="img-lang" src="Images/qgis.png">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">QGIS</p>
                            </div>
                        </div>
                    </div>

                    <!-- </div> -->


                    <!-- <div class="row"> -->


                    <div class="col mt-5">
                        <div class="card-lang">
                            <img class="img-lang-big"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFPklEQVR4nO2Zf0gbZxjHrx3rNtjY/tlg21/WGTeLYG39Q5DKYML+KVNEL0aL1eVec2/Q2P3omCA6QeiY7qfr5hL/mVCorlA6dObeZtnApv64bAxdbNQOnVZZ652u3UCr5hl3mpjEeLmYRDPwgQfim+fk+3l+3Bvel6IO7MASw6p7qx9DHFuEOHwDEdxV0Vv9rNpnLUNModmJXqf2w5CtOpkh+ALi8D1EMHidIVhEhEXhnrfwjMkyrF83DzPn90YxRVENDQ2HGcK+JmUaEbzmL3ybc+z3VderXgz+HwDUITPPXLDwDGy43hx34eV20zMMx5oQYf9QFL0dYtG/Gl2jRUcsPHNpSzwD5mH9z3ETrreyJxgOtyOC/41I+DYQ3GvqN6Saeb3VX7xFAuD183EZSoaw/VGJ9nOjDcPng2gtWLxl09t59HRMxFcR/AYiWIiVcMlNP7Lw5RAKKdzidSc6GRMARPBHsRT/lp2Fr4cVhPPeNkK6mAAwBHeGEpKUlLQnTkVdAQ6T/zUAQ/DIfgK85BjPjbYC98IBiKIIwba0tAR2ux0KCwtDCispKQGbzQaLi4uwuroK8/PzcOXKFcjLywuI0zjcyyk33Wd3J55HjzKEXd8NgNfW1tZAp9MFxLe0tIDH4wkZv7y8DPn5+X4A417/jOqCRyICkLb9nd4moQCuXbsGZWVlUFFRAa2trXJmJXM6nb5Yg8HgEzs2NgY1NTWy4MbGRrkaDocDUlJSQgFAyg33D0f52+r3B8QZT0YCcPHixYD17u5uX1a9ay6XS16bnp6GtLS0gPjs7GzIyMgIaqHxIIhx98uDLo06ACt7OhqAnp4eeX1hYUH+Oysry5d9KeNqhlgTBLAJsZDaP/FqWAA9h5lIAKxWKxiNRjCZTNDZ2Qnr6+vyuvRZipMG1GuVlZW7BtBsQDzU3Jg4o1wBgusjAQhlAwMDkJ6eLsdlZmb6hrepqSkigFNDfCiQNxUBGILbIgGYnJyU2+bq1avQ1tYmD3NycnJA7MjIiBw7MzMDx44dC/guIyMDcnJyAtbqXZfAeec8PFgoh1du3vIT755OGx09olwBjv0umhkI5RKUtwoTExNQW1sLBQUFUFdXJ+8Fc3NzkJub64sHUevz4l9tWy3U72bCzoDSz+fdAkje3Nzsm49gE0UxYB/wB/h03Kw++5sVmIwHgOTSDt3X1yc/u7KyAlNTU9DR0SG/qfzj/AEGZ9/fyL7DXRVWvAxA2H/UAMTTwQ/goVAKxx2jM6qyX9lf+ZTS7/r9AABRC5+MW75QlX09MWoSEWBFKP1YXftY8alEBACB/kVdBThcnJgAWg/cLwp/0ocIrklIAFGuAh0WgCFsc8ICiPQ34SvAsR0JCyDQU2oq0KMWQK3FrgJagCXd0XAVcCY0gEArn3Yjwt5J2BYS5Tm4rNxCHL6V0AACvQDQcFj5REI6PufwfSUQr3/F6xWyFSdfLM4MM8oUVckZX0CE/RZx2KME0Os6u/cAAv1uWABfSxE2CxF8cycA1/SZvQcQ6T4q0usk6XYFEfZuMMCHDiRX4c/ZUvDsTfYfgkh3U7u+XpIu8wheCVWNt38yQPuw3jM1W2YHkZ6Loeh1ELX9INImeFD2HBWtGWyGVOmqaIe2+kCKkd4UsKQ7AQL9HohaspG5iIXzsui7pc9T8TDpAIzh8O0t8exlCqhDoWLhr6InQSw5DaK2HUTttILw30GgG2GJTqb2ws45zj0hnSMxHMuV28sfV/sciLp0EOh3QNBeB4H+DUS6Hv4uSYmv2gM7MCqU/QcQdvjfWoAWEwAAAABJRU5ErkJggg==">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">PyCharm</p>
                            </div>
                        </div>
                    </div>

                    <div class="col mt-5">
                        <div class="card-lang">
                            <img class="img-lang-big" src="Images/c-rm.png">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">Google Collab</p>
                            </div>
                        </div>
                    </div>

                    <div class="col mt-5">
                        <div class="card-lang">
                            <img class="img-lang" src="Images/jira-rm.png">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">Jira</p>
                            </div>
                        </div>
                    </div>



                    <div class="col mt-5">
                        <div class="card-lang">
                            <img class="img-lang"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACOElEQVR4nO2ZQWgTQRSGh+DFq70VD2lvQuKpV714cGtLu3ioiiJeWr0oaSnSm0KhKnabJiKYYhHRQxORBmLqoYVKqaGGWmizAYsaCBhDpdCkqatpap68l3QO4kHJsBnN/PDDzts34f+YN3sJY0pKSkr/pFz31q64/Ym822+CPU7kXX7zsjAAe8ObZJfPzAkEsDe8u2oFsC91An41Qv/rCGmGh2nGDtMMqMWOznFoHpipC8BOreE5RMc4uIdNoWZ/AAAirQCGG/kEjg8GARVZ+shrR3ofwb5ODD3j9Wg8RTXcIw3AwS4ffN/dgy85i9f6fLMc4MaTGK9vbH2lXtwjDQDTDHidzFDYlksPaf14LgnFUgVqdiVNNXyHwl6pRohpBtwJxSncmZEXtE5lc7D07jNMx95DwdqFAx1eOHc7Sj3YKx1A180whTOeL0Pz+QA9e6ffwvXJBXpuu/qU1ijslQ6gqec+lMsAi8kMnQKqZyQCxwan6NnzYJ5GB3uw99f9Rz1vhJr9LQA6md6Eb8USBGZWKfThCxN0WfEuhGMfwCqWqOd3e6UACFSDb1tF+LRZ4PX4ehZKez/oHfZIC3Dx7kv+6QwtrPO6L7zC69gjLUBr9TOJ6g+84vWztyp3AoU90gKwGqwAPI13AqMFUeEdp7x1ADhpXBMB4WgfKx/qnLRaT4e2RJqJUosehHqYKYCq1AnoaoQafIScejBvd3hn95S4PziceqgPf9DO8E492CsMQElJSYmJ0E+635eFCoKREwAAAABJRU5ErkJggg==">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">MS Word</p>
                            </div>
                        </div>
                    </div>

                    <div class="col mt-5">
                        <div class="card-lang">
                            <img class="img-lang"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB90lEQVR4nGNgGAWjYBSMgiEJxCYEZ4hNCP4oNjHkP6lY81A96fhg3Uetg3Xp1PQAWY4n2wOHwPgD9TxApuMp9MD/UQ/AwGgMHBpNQsM0CXEXWhRwF1p84Smy+E8RLrH8L9TsMSAe+EKx42G42OI/T4MrBpZck0o2ZiAEqOZ4GB71QOpoDPwXLrP9f+f1o/8gULVpEjx5aLUE/v/x+9f/b79+/NdpDR7cSShiXhnYA2++vP8vUekEFlt5didYrGHr9KGRB3ZdPw52cOO2Gf8te2L///339//tVw/BMTQkPGDSGfn/15/f/99/+/T/2L0L///9+/ffa1r20CqFphxc8R8Glp/ZPvSK0YUnNsE9sOLsDoIeEHfXwsBC04LIxgyUeMBzahY42Zx6cPn/kbvnwZ7wn5k/NDwgXGb7/8aL+2BHg9K9/YQksGcevn32X6zCcfB7oHvPArDjd1w7ChfbdOkAWKx378LB7QGzrihw6QMqNq174+Dihh1h/3///QPGVr2xg9cDPBTgUQ9MG2kxwF1k/plqHigwHwAPFJrnUcUTBeb/hKL0v4m7a75Hx6oZDmRjBmoBCQ+t/+Ri9TR7sjHDqAegYDQG0kaT0EhPQu5aH+nvATvqTXBIemilSXhofaCfB+w+qKbYp1LNA6NgFIyCUcBADQAA6UC2Ipn+q/gAAAAASUVORK5CYII=">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">MS Excel</p>
                            </div>
                        </div>
                    </div>


                    <div class="col mt-5">
                        <div class="card-lang">
                            <img class="img-lang-big"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEDElEQVR4nO2YXUxTZxjHT+YuptfK/FwpoC2oPWcyNqfSSmtPrbSYc0zVQTK3JYCct1zs2guyu0VDT9iFIcQrRWdc/IpfiCgFCgXEiudAIC7gRd3wo/XKxM0wnuUc116YHs5bzstGlv6T5+a0SX+/933ej1OKyiWXXHL5X+W5wBa9RB6UQOy5BGJjCeRJJoKetxBCbyEkJEAUYhBC56C5QYCWxkJqKQSaHB++amRrEkF2IBn0QKYCEWWuEOqHZlQNFwLL/hP4pMDuTSLPYy1wXQExLTIJoQb2XwP/rc63IonYU3rg2AJiWqQNmr9fvqjwM0fdeckg+wAXPisBUSnhPrQ0rlo8eMROZgOfvQB611KkJdS2yXLkFywg/jMTTUc+IiYw+rW9/dE3DsCp8W8d8KTOCS8Qa0AAKTPRmhXkYJW1cthf8nTIVwyDPisMVlohus8CUa8FBvZuUqvfsxH62Y0QcRdB355C6HMVQq+rAHqdBdBTYYae3WYIOwugl98GE9/tViUWLCAqFfRiCwz7i+OG4R35ELbnQ3eFGYZqdkG83mVQQJjAPieIwdtN0F1ugmj1TpiuNSqAAJrRYbwWIgh/b9cnqsBUrdO4gChE8AQIwt/duYGcQAjNwU9Bs66AFvz7mZudhddTEzB2rE4T/u4OggKiOgv1+gIaI5/KzI3zMHPtZ3g13PNO5K9ZiB3lMsJ37VhPWAC16wpotU0qfawl3TbPOi6qz55ePp0RvutLwgIhNIIlkKnnU+l1b0r3/HTbcfXZ79fPZ4S/s30dYQHhha6A1oJNJcqVQcRHQ6yBhzczcfWZfKw+I/ydL4gL/KEvoLHbaEVpHy34zs/XwlW3FSK+rSDzjOGSeEZfQGurTGW67QRMtf4Iv7b8ACO1VfPCd5aRFZA5Wr+FtPb5VHpcRZoL9n3422VryArwtP4i1jqk0gLOImz4js9WE54B5oyugNYJm0q4ohAbvqOUrIDE0foHGc71ABf+1raPiQlIPDP3cD+drytAEv7Wp0QF+nThVQGC8DeZPHICB+iDWAJhuylOCv56KZkZkDh6/EIA84UmbDd575Wb4iTgL5UXwE1PCQz4jQmMcTYnRSJX3NazvzgtgFMXXRa4xhZD974tMLLfZmT0T1KkMhDYvrzLWzLa5d0MOBWu3AJRvw0ecfQC4ZnBJ0cc5P5WUdLP2fKG/FsfD1XZQK+UkV8ovMzRE5O+0pXUYiQWYFZJPD1sdGeR5xl55TeoxYzSTjLPtJKHp08Sb5v5IvHMHmW6CYCPE9ttso2yR48dYL6SOCaiHPnY0Dwzp5ywMm87BE3UB9RSyGjAZlYuXTLPtMs880Di6YTEMX+qxdMvlSux8pnynYc4d5tccsklF2op52+0JB2QLGqszwAAAABJRU5ErkJggg==">
                            <div class="textBox-lang">
                                <p class="text-lang head-lang">MS Powerpoint</p>
                            </div>
                        </div>
                    </div>



                </div>

            </div>

        </div>

        <!-- ====== RESUME SECTION END  ======-->





        <!-- ====== CONTACT SECTION END  ======-->

        <div class="container-fluid mb-5 pb-5" id="contact">

            <div class="pr-5">
                <div class="row no-gutters mt-5 mb-4 pt-5">
                    <div class="col-12 pt-5">
                        <button class="btn btn-display mb-3 p-auto">
                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAAACXBIWXMAAAsTAAALEwEAmpwYAAABN0lEQVR4nK2TPS8EURSGV+KjkSVC6HQSQS1Ri19ARFT8AK1E4URm3+febLbZqLYnEQoVleAHKERHIVvoNEKhIEYmuZsMmZ3xsaede577vG/ulEqdHjMblLT4L0ilUlkHmnEcd/0JkCxKOgFiYPZXy5JGJO0CDwEQA2/AWTqamZWBnUyI935A0rak6xZE0rOkA+fcfOscsAK8mll/rhVwFCDTGcaHyTfn3FIRZBW4ywCMAi/B9NjMettCElUXIlSr1TFgQ9KFpPdUX4npE7CfdNZoNHryrJYl3aaXv4ES8HkUReOlovHeT4XiPwLgHlir1WrDeQYLWe9E0lUodjP3VjMbAi5DeeVvkK1gMlH03zymcjfNrDsVa1LSTWH+er3eB5xK2ksDUhd9sWs7URTNee9nfnS4k/MJdtzZ7RT/XCkAAAAASUVORK5CYII=">
                            CONTACT</button>

                        <div class="row no-gutters mb-4">
                            <div class="col-12">
                                <div>
                                    <h1 class="project-title pt-3">Let's Make Something <span class="text-green">Awesome
                                            Together</span>
                                    </h1>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid pl-0">
                            <form id="form" method="post" action="">
                                <div class="form-row">
                                    <div class="col mr-4">
                                        <div class="input-field">
                                            <input required name="names" type="text" id="names" />
                                            <label>Your Name</label>

                                        </div>
                                        <div class="error-msg-name text-left" id="error-msg-name"></div>

                                    </div>
                                    <div class="col">
                                        <div class="input-field">
                                            <input required name="mail" type="email" id="mail" />
                                            <label>Your Email</label>
                                        </div>
                                        <div class="error-msg-email text-left" id="error-msg-email"></div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-12">
                                        <div class="input-field">
                                            <input required name="text" type="text" id="text" />
                                            <label>Write a Message</label>
                                        </div>
                                        <div class="error-msg-text text-left" id="error-msg-text"></div>
                                    </div>
                                </div>
                                <input type="submit" id="submit" name="submit" value="Send Message"
                                    class="Download-button-1 mt-4">
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- ====== CONTACT SECTION END  ======-->


        <!-- ====== FOOTER SECTION END  ======-->

        <div class="container-fluid pb-5" id="contact">

            <div class="row no-gutters">
                <div class="col-12">
                    <div>
                        <pre class="project-title-last pt-3">Want to known more about me, tell me
about your project or just to <span class="text-green">say hello?</span>
Drop me a line and <span class="text-green">I'll get back as
soon as possible.</span> 
</pre>
                    </div>
                </div>
            </div>

            <div class="pr-5">
                <hr class="line mb-4">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="text-color-grey">Location: <br> Mumbai, Maharashtra, India</div>
                    <div class="text-color-grey ml-5">Phone: <br> <a href="tel:+919967939158" class="last-link">+91
                            9967939158</a></div>
                    <div class="text-color-grey ml-5">Email: <br> <a href="mailto:sultanshaikh1029@gmail.com"
                            class="last-link">sultanshaikh1029@gmail.com</a></div>
                </div>
            </div>

        </div>

        <!-- ====== FOOTER SECTION END  ======-->


        <a href="#" class="to-top">
            <i class="fa-solid fa-angles-up"></i>
        </a>



    </main>

    <!-- ================================
                MAIN SECTION END
         ================================= -->



    <!-- ================================
                JQUERY CDN LINK 
         ================================= -->


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>


    <!-- ================================
                   SMTP JS LINK
         ================================= -->

    <!-- <script src="https://smtpjs.com/v3/smtp.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="script.js" type="text/javascript">
        </script>

    <!-- <scrip type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"> -->



    <!-- ================================
              JQUERY VALIDATION START
         ================================= -->




    <script>
        // JQUERY FORM VALIDATION

        $(document).ready(function () {

            $('#error-msg-name').hide();
            $('#error-msg-email').hide();
            $('#error-msg-text').hide();



            var name = true;
            var email = true;
            var text = true;



            var name_checking = true;
            var email_checking = true;
            var text_checking = true;



            // FORM VALIDATION FOR USERNAME BEFORE THE SUBMIT BUTTON IS CLICKED
            $('#names').keyup(function () {
                name_check();
            });

            // STUDENT NAME VALIDATION
            function name_check() {

                var name_val = $('#names').val();

                if (name_val.length == '') {
                    $('#error-msg-name').show();
                    $('#error-msg-name').html('<i class="fa-solid fa-circle-exclamation fa-sm pr-2"></i>Name is Required');
                    $('#names').css('border-color', '#EA5455');
                    name_err = false;
                    return false;
                }
                else if (/[\d]/.test(name_val)) {
                    $('#error-msg-name').show();
                    $('#error-msg-name').html('<i class="fa-solid fa-circle-exclamation fa-sm pr-2"></i>Only alphabetic characters are permitted.');
                    $('#names').css('border-color', '#EA5455');
                    name_err = false;
                    event.preventDefault();
                }

                else {
                    $('#names').css('border-color', '#A1FF14');
                    $('#error-msg-name').hide();
                }
            }




            // VALIDATING EMAIL INPUT

            $('#mail').keyup(function () {
                email_check();
            });

            // EMAIL VALIDATION
            function email_check() {

                var email_val = $('#mail').val();
                var email_pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (email_val.length == '') {
                    $('#error-msg-email').show();
                    $('#error-msg-email').html('<i class="fa-solid fa-circle-exclamation fa-sm pr-2"></i>Email is Required');
                    $('#mail').css('border-color', '#EA5455');
                    email_err = false;
                    return false;
                }

                else if (!email_pattern.test(email_val)) {
                    $('#error-msg-email').show();
                    $('#error-msg-email').html('<i class="fa-solid fa-circle-exclamation fa-sm pr-2"></i>Please enter a valid email address');
                    $('#mail').css('border-color', '#EA5455');
                    email_err = false;
                    event.preventDefault();
                }

                else {
                    $('#mail').css('border-color', '#A1FF14');
                    $('#error-msg-email').hide();
                }

            }



            // VALIDATING MESSAGE INPUT

            $('#text').keyup(function () {
                text_check();
            });

            // MESSAGE VALIDATION
            function text_check() {

                var text_val = $('#text').val();

                if (text_val.length == '') {
                    $('#error-msg-text').show();
                    $('#error-msg-text').html('<i class="fa-solid fa-circle-exclamation fa-sm pr-2"></i>Please Fill this Field');
                    $('#text').css('border-color', '#EA5455');
                    text_err = false;
                    return false;
                }

                else {
                    $('#text').css('border-color', '#A1FF14');
                    $('#error-msg-text').hide();
                }

            }

            // CHECKING THE CREDENTIALS AND FORM VALIDATION AFTER THE SUBMIT BUTTON IS CLICKED
            $('#submit').click(function () {

                var name_err = true;
                var email_err = true;
                var text_err = true;



                name_check();
                email_check();
                text_check();


                if ((name_err == true) && (email_err == true) && (text_err == true)) {
                    return true;
                }
                else {
                    return false;
                }

            });

        });
    </script>


    <!-- ================================
              JQUERY VALIDATION END
         ================================= -->

</body>

</html>

<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['submit'])) {


        $name = $_POST['names'];
        $email = $_POST['mail'];
        $msg = $_POST['text'];

        //Load Composer's autoloader

        require 'PHPMailer/Exception.php';
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   //Enable SMTP authentication
            $mail->Username = 'sultanshaikh1029@gmail.com';                     //SMTP username
            $mail->Password = 'oinvcwbopflpihwh';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom($email, 'Portfolio Message');
            $mail->addAddress('sultanshaikh1029@gmail.com', 'Sultan Shaikh');     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Message from Portfolio';
            $mail->Body = "<b>Message from Professional's</b> <br> Name - $name <br> Email Address - $email <br> Message - $msg <br> <i>Portfolio Message</i>";

            $mail->send();
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
            echo '<script> Swal.fire({ title: "Thank You for reaching out!", text: "Feel Free to explore more of my portfolio. Have a great day!!", icon: "success", confirmButtonText: "OK" }).then((result) => { if (result.isConfirmed) { window.location.href = window.location.href; } }); </script>';
        } 
        catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
            echo '<script> Swal.fire({ title: "Oops..", text: "Something Went Wrong", icon: "error", confirmButtonText: "OK" }).then((result) => { if (result.isConfirmed) { window.location.href = window.location.href; } }); </script>';
        }
    }

}