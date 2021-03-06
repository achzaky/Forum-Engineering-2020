<body>
    <div id='nav'>
        <nav class="navbar fixed-bottom navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" style="height:10vh;">
                    <!-- Menu dan icon pada navbar -->
                    <a id='navLobby' class="nav-link active" style="visibility: hidden;">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd"
                                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg>Lobby <span class="sr-only">(current)</span></a>

                    <a id='navConnectionArea' class="nav-link active" style="visibility: hidden;">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-menu-button-wide-fill"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M14 7H2a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zM2 6a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2H2z" />
                            <path fill-rule="evenodd"
                                d="M15 11H1v-1h14v1zM2 12.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM1.5 0A1.5 1.5 0 0 0 0 1.5v2A1.5 1.5 0 0 0 1.5 5h13A1.5 1.5 0 0 0 16 3.5v-2A1.5 1.5 0 0 0 14.5 0h-13zm1 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm9.927.427l.396.396a.25.25 0 0 0 .354 0l.396-.396A.25.25 0 0 0 13.396 2h-.792a.25.25 0 0 0-.177.427z" />
                        </svg>Connection Area</a>

                    <a id='navExhibition' class="nav-link active" style="visibility: hidden;">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-grid" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
                        </svg>Exhibition</a>

                    <a id='navUnknown' class="nav-link active" style="font-size:1.3vw; margin-left: 7vw;" href="/pages">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle-fill"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z" />
                        </svg>Back</a>

                    <a id='navAuditorium' class="nav-link active" style="visibility: hidden;">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tv-fill" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM2 2h12s2 0 2 2v6s0 2-2 2H2s-2 0-2-2V4s0-2 2-2z" />
                        </svg>Auditorium</a>

                    <a id='navRC' href="https://foreng.wika.co.id/news" target="__blank" class="nav-link active"
                        style="width: fit-content; visibility: hidden;">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-down-fill"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z" />
                        </svg>Resource Center</a>

                    <a id='navAbout' href="https://foreng.wika.co.id/about" target="__blank" class="nav-link active"
                        style="visibility: hidden;">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>About</a>

                    <a id='navEF' class="nav-link active" style="width: fit-content; visibility:hidden;">
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

    <div id='boothW' class='wrapper'>
        <div class="wrapper-bg-boothW">
            <div class="container-fluid">
                <div class="row">
                    <div class="col" style="margin-top:28.62%; margin-left:25.7%">
                        <img class="boothW_banner" src="public/assets/photos/sponsor/banner/wikaRealty.gif"
                            id="modalButton" data-toggle="modal" data-target="#exampleModal">
                    </div>
                    <div class="col vidSponsor" style="margin-top: 25.7%;">
                        <iframe class="boothW_video" src="https://www.youtube.com/embed/0Zoutxtslvw?autoplay=0"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="col" style="margin-top:28%; margin-left:-40%">
                        <img class="boothW_banner" src="public/assets/photos/sponsor/banner/wikaRealty.gif"
                            id="modalButton2" data-toggle="modal" data-target="#exampleModal">
                    </div>
                </div>
            </div>
        </div>
        <div id="manualModal" class="manualModal d-none">
            <img src="public/assets/photos/sponsor/banner/wikaRealty.gif" alt="">
            <p id="text" class="textModal"> For more info contact via Whatsapp<br>or visit the website by<br>click the
                button below
            </p>
            <a class="modalButton btn" href="#" target="__blank" role="button">Whatsapp</a>
            <a class="modalButton btn" href="https://www.wika.co.id/" target="__blank" role="button">Website</a>
        </div>



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
        window.onload = setTimeout(function() {
            alert('Untuk informasi lebih lanjut, klik banner.');
        }, 1000);

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
        $("#modalButton").click(function() {
            $("#manualModal").removeClass('d-none');
            $("#nav").addClass('d-none');
        })

        $("#modalButton2").click(function() {
            $("#manualModal").removeClass('d-none');
            $("#nav").addClass('d-none');
        })

        $(".manualModal").click(function() {
            $("#manualModal").addClass('d-none');
            $("#nav").removeClass('d-none');
        })

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