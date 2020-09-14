<body style="overflow: hidden;">
    <div id='nav'>
        <nav class="navbar fixed-bottom navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <!-- Menu dan icon pada navbar -->
                    <a id='navLobby' class="nav-link active">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd"
                                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg>Lobby <span class="sr-only">(current)</span></a>

                    <a id='navConnectionArea' class="nav-link active">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-menu-button-wide-fill"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M14 7H2a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zM2 6a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2H2z" />
                            <path fill-rule="evenodd"
                                d="M15 11H1v-1h14v1zM2 12.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM1.5 0A1.5 1.5 0 0 0 0 1.5v2A1.5 1.5 0 0 0 1.5 5h13A1.5 1.5 0 0 0 16 3.5v-2A1.5 1.5 0 0 0 14.5 0h-13zm1 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm9.927.427l.396.396a.25.25 0 0 0 .354 0l.396-.396A.25.25 0 0 0 13.396 2h-.792a.25.25 0 0 0-.177.427z" />
                        </svg>Connection Area</a>

                    <a id='navExhibition' class="nav-link active">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-grid" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
                        </svg>Exhibition</a>

                    <a id='navUnknown' class="nav-link active">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                        </svg>Unknown</a>

                    <a id='navAuditorium' class="nav-link active">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tv-fill" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM2 2h12s2 0 2 2v6s0 2-2 2H2s-2 0-2-2V4s0-2 2-2z" />
                        </svg>Auditorium</a>

                    <a id='navRC' href="https://foreng.wika.co.id/news" target="__blank" class="nav-link active"
                        style="width: fit-content;">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-down-fill"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z" />
                        </svg>Resource Center</a>

                    <a id='navAbout' href="https://foreng.wika.co.id/about" target="__blank" class="nav-link active">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>About</a>

                    <a id='navEF' class="nav-link active" style="width: fit-content;">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd"
                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>Event Feedback</a>


                </div>
            </div>
        </nav>
    </div>

    <form action="/pages/login" method="post">
        <div id="registration" class="wrapper">
            <div class="wrapper-bg"></div>
            <div id='loginCard' class="loginPanel">
                <img src="/assets/photos/forenglogo.png" class="foto">
                <h1 class="user-select-none">Welcome</h1>
                <p class="user-select-none">E-mail</p>
                <input id="username" type="text" name="email" placeholder="Enter E-mail">
                <p class="user-select-none">ID Peserta</p>
                <input id="password" type="text" name="password" placeholder="Enter ID Peserta">
                <input type="submit" name="login" value="Login">
                <p style="margin-top: 0%;"></p>
                <a class="signup">Sign up</a>
            </div>
        </div>
    </form>

    <!-- Login and lobby -->
    <div id='lobby' class='wrapper'>
        <div class="wrapper-bg-lobby">
            <div class="container">
                <div class="row">
                    <div class="col" style="margin-top: 280px;">
                        <a id="lCo" style="margin-left: 40px; opacity: 0%; font-size: 60px;" href="#">HERE!</a>
                    </div>
                    <div class="col" style="margin-top: 300px;">
                        <a id="lA" style="margin-left: 175px; opacity: 0%; font-size: 45px;" href="#">HERE!</a>
                        <div class="row">
                            <div class="col" style="margin-left: -20px;">
                                <a id="lex1" style="font-size: 65px; opacity: 0%;" href="#">HER</a>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="margin-top: 370px;">
                        <a id="lex2" style="margin-left: -10px; font-size: 40px; opacity: 0%;" href="#">HERE!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </form>


    <?php foreach ($audvid as $av) : ?>
    <!-- AUDITORIUM -->
    <div id='auditorium' class='wrapper'>
        <div class="wrapper-bg-auditorium">
            <div class="container">
                <div class="row">
                    <div class="position  embed-responsive embed-responsive-16by9 centered-thing">
                        <iframe id='auditoriumVideo' width="560" height="315" src="<?= $av['video']; ?>; controls=0;"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>


    <!-- Exhibition -->
    <div id='exhibition' class='wrapper'>
        <div class="wrapper-bg-exhibition">
            <div class="container">
                <div class="row">
                    <div class="col" style="margin-top: 380px;">
                        <a style="margin-left: 140px; opacity: 0%; font-size: 100px;" href="/booth">Hi!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Unknown -->
    <div id='unknown' class='wrapper'>
        <div class="wrapper-bg-unknown">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 embed-responsive embed-responsive-16by9 centered-things">
                        <iframe width="600" height="338"
                            src="https://datastudio.google.com/embed/reporting/74e5ebb4-e21c-4dbb-83aa-97456a4e8c39/page/iy7dB"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Connection Area -->
    <div id='connectionArea' class='wrapper'>
        <div class="wrapper-bg-connectionArea">
        </div>
    </div>


    <!-- Resource Center -->
    <!-- <div id='resourceCenter' class='wrapper'>
        <div class="wrapper-bg-resource"></div>
    </div> -->


    <!-- About -->
    <!-- <div id='about' class='wrapper'>
        <div class="wrapper-bg-about"></div>
    </div> -->


    <!-- Event Feedback -->
    <div id='eventFeedback' class='wrapper'>
        <div class="wrapper-bg-feedback">
            <div class="container">
                <div class="row">
                    <div class="col"
                        style="font-size: 60px; text-align: center; font-family: Poppins, cursive; font-weight: bold; color: white; margin-top: 50px;">
                        Event Feedback
                        <div class="row">
                            <div class="colFeedback transboxFeedback">
                                <form autocompolete="off" action="" method="post">
                                    <p class="user-select-none">If you were running the event, what would you have done
                                        differently?</p>
                                    <input id="answer" autocomplete="off" type="text" name="answer1">
                                    <p class="user-select-none">Any suggestions for future event topics?</p>
                                    <input id="answer" autocomplete="off" type="text" name="answer2">
                                    <p class="user-select-none">What did you like most about the event?</p>
                                    <input id="answer" autocomplete="off" type="text" name="answer2">
                                    <p class="user-select-none">What did you like least about the event?</p>
                                    <input id="answer" autocomplete="off" type="text" name="answer2">
                                    <p class="user-select-none">How do you think this event could have been improved?
                                    </p>
                                    <input id="answer" autocomplete="off" type="text" name="answer2">
                                    <input type="submit" name="submitFeedback" value="Submit Feedback">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Fade out login form -->
    <?php if (isset($_SESSION['logonUser'])) {
        if ($_SESSION['logonUser'] == 'aktif') { ?>
    <script>
    // $('#bgBlur').css('filter', 'none').fadeIn(1000);
    $('#loginCard').fadeOut(600);
    $('#nav').fadeIn(600);

    $('#registration').fadeOut();
    $('#lobby').fadeIn();
    $('#auditorium').fadeOut();
    $('#about').fadeOut();
    $('#eventFeedback').fadeOut();
    $('#exhibition').fadeOut();
    $('#connectionArea').fadeOut();
    $('#resourceCenter').fadeOut();
    $('#unknown').fadeOut();
    </script>
    <?php }
    } ?>

    <script>
    $(document).ready(function() {
        $('#lobby').fadeIn();
        $('#auditorium').fadeOut();
        $('#about').fadeOut();
        $('#eventFeedback').fadeOut();
        $('#exhibition').fadeOut();
        $('#connectionArea').fadeOut();
        $('#resourceCenter').fadeOut();
        $('#unknown').fadeOut();
    });

    $("#navAuditorium").click(function() {
        $('#auditoriumVideo')[0].src += "&autoplay=1";
        // ev.preventDefault();
        $('#auditorium').fadeIn();
        $('#about').fadeOut();
        $('#eventFeedback').fadeOut();
        $('#exhibition').fadeOut();
        $('#connectionArea').fadeOut();
        $('#resourceCenter').fadeOut();
        $('#lobby').fadeOut();
        $('#registration').fadeOut();
        $('#unknown').fadeOut();
    });

    $("#navLobby").click(function() {
        var video = $('#auditoriumVideo').attr("src");
        $('#auditoriumVideo').attr("src", "");
        $('#auditoriumVideo').attr("src", video);


        $('#lobby').fadeIn();
        $('#auditorium').fadeOut();
        $('#about').fadeOut();
        $('#eventFeedback').fadeOut();
        $('#exhibition').fadeOut();
        $('#connectionArea').fadeOut();
        $('#resourceCenter').fadeOut();
        $('#registration').fadeOut();
        $('#unknown').fadeOut();
    });

    $("#lCo").click(function() {
        var video = $('#auditoriumVideo').attr("src");
        $('#auditoriumVideo').attr("src", "");
        $('#auditoriumVideo').attr("src", video);


        $('#lobby').fadeOut();
        $('#auditorium').fadeOut();
        $('#about').fadeOut();
        $('#eventFeedback').fadeOut();
        $('#exhibition').fadeOut();
        $('#connectionArea').fadeIn();
        $('#resourceCenter').fadeOut();
        $('#registration').fadeOut();
        $('#unknown').fadeOut();
    });

    $("#lA").click(function() {
        var video = $('#auditoriumVideo').attr("src");
        $('#auditoriumVideo').attr("src", "");
        $('#auditoriumVideo').attr("src", video);


        $('#lobby').fadeOut();
        $('#auditorium').fadeIn();
        $('#about').fadeOut();
        $('#eventFeedback').fadeOut();
        $('#exhibition').fadeOut();
        $('#connectionArea').fadeOut();
        $('#resourceCenter').fadeOut();
        $('#registration').fadeOut();
        $('#unknown').fadeOut();
    });

    $("#lex1").click(function() {
        var video = $('#auditoriumVideo').attr("src");
        $('#auditoriumVideo').attr("src", "");
        $('#auditoriumVideo').attr("src", video);


        $('#lobby').fadeOut();
        $('#auditorium').fadeOut();
        $('#about').fadeOut();
        $('#eventFeedback').fadeOut();
        $('#exhibition').fadeIn();
        $('#connectionArea').fadeOut();
        $('#resourceCenter').fadeOut();
        $('#registration').fadeOut();
        $('#unknown').fadeOut();
    });

    $("#lex2").click(function() {
        var video = $('#auditoriumVideo').attr("src");
        $('#auditoriumVideo').attr("src", "");
        $('#auditoriumVideo').attr("src", video);


        $('#lobby').fadeOut();
        $('#auditorium').fadeOut();
        $('#about').fadeOut();
        $('#eventFeedback').fadeOut();
        $('#exhibition').fadeIn();
        $('#connectionArea').fadeOut();
        $('#resourceCenter').fadeOut();
        $('#registration').fadeOut();
        $('#unknown').fadeOut();
    });

    $("#navExhibition").click(function() {
        var video = $('#auditoriumVideo').attr("src");
        $('#auditoriumVideo').attr("src", "");
        $('#auditoriumVideo').attr("src", video);

        $('#auditorium').fadeOut();
        $('#about').fadeOut();
        $('#eventFeedback').fadeOut();
        $('#exhibition').fadeIn();
        $('#connectionArea').fadeOut();
        $('#resourceCenter').fadeOut();
        $('#lobby').fadeOut();
        $('#registration').fadeOut();
        $('#unknown').fadeOut();
    });

    $("#navUnknown").click(function() {
        var video = $('#auditoriumVideo').attr("src");
        $('#auditoriumVideo').attr("src", "");
        $('#auditoriumVideo').attr("src", video);

        $('#auditorium').fadeOut();
        $('#unknown').fadeIn();
        $('#about').fadeOut();
        $('#eventFeedback').fadeOut();
        $('#exhibition').fadeOut();
        $('#connectionArea').fadeOut();
        $('#resourceCenter').fadeOut();
        $('#lobby').fadeOut();
        $('#registration').fadeOut();
    });

    $("#navConnectionArea").click(function() {
        var video = $('#auditoriumVideo').attr("src");
        $('#auditoriumVideo').attr("src", "");
        $('#auditoriumVideo').attr("src", video);

        $('#auditorium').fadeOut();
        $('#about').fadeOut();
        $('#eventFeedback').fadeOut();
        $('#exhibition').fadeOut();
        $('#connectionArea').fadeIn();
        $('#resourceCenter').fadeOut();
        $('#lobby').fadeOut();
        $('#registration').fadeOut();
        $('#unknown').fadeOut();
    });

    // $("#navRC").click(function() {
    //     var video = $('#auditoriumVideo').attr("src");
    //     $('#auditoriumVideo').attr("src", "");
    //     $('#auditoriumVideo').attr("src", video);

    //     $('#auditorium').fadeOut();
    //     $('#about').fadeOut();
    //     $('#eventFeedback').fadeOut();
    //     $('#exhibition').fadeOut();
    //     $('#connectionArea').fadeOut();
    //     $('#resourceCenter').fadeIn();
    //     $('#lobby').fadeOut();
    //     $('#registration').fadeOut();
    // });

    $("#navEF").click(function() {
        var video = $('#auditoriumVideo').attr("src");
        $('#auditoriumVideo').attr("src", "");
        $('#auditoriumVideo').attr("src", video);

        $('#auditorium').fadeOut();
        $('#about').fadeOut();
        $('#eventFeedback').fadeIn();
        $('#exhibition').fadeOut();
        $('#connectionArea').fadeOut();
        $('#resourceCenter').fadeOut();
        $('#lobby').fadeOut();
        $('#registration').fadeOut();
        $('#unknown').fadeOut();
    });

    // $("#navAbout").click(function() {
    //     var video = $('#auditoriumVideo').attr("src");
    //     $('#auditoriumVideo').attr("src", "");
    //     $('#auditoriumVideo').attr("src", video);

    //     $('#auditorium').fadeOut();
    //     $('#about').fadeIn();
    //     $('#eventFeedback').fadeOut();
    //     $('#exhibition').fadeOut();
    //     $('#connectionArea').fadeOut();
    //     $('#resourceCenter').fadeOut();
    //     $('#lobby').fadeOut();
    // });
    </script>
</body>