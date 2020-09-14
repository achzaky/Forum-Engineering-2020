<body>
    <div class="container">
        <h2 class='mt-2'>Admin Panel</h2>
        <div class="row">

            <!-- Input data sponsor -->
            <div class="col">
                <h3 class='mt-3 mb-3'>Input data sponsor</h3>

                <form action="" method="POST">
                    <!-- Nama -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
                        </div>
                        <input type="text" name="sponsorName" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>

                    <!-- No.Telp -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">No.Telp</span>
                        </div>
                        <input type="text" name="sponsorPhone" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>

                    <!-- Video -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Link Video (youtube)</span>
                        </div>
                        <input type="text" name="sponsorVideo" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>

                    <!-- Brosur -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Link brosur</span>
                        </div>
                        <input type="text" name="sponsorBrosur" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>

                    <!-- Banner -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Link banner</span>
                        </div>
                        <input type="text" name="sponsorBanner" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>

                    <!-- Logo -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Link logo</span>
                        </div>
                        <input type="text" name="sponsorLogo" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>

                    <!-- Background -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Link background</span>
                        </div>
                        <input type="text" name="sponsorBackground" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <!-- Display name -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Link display name</span>
                        </div>
                        <input type="text" name="sponsorNameDisp" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>
                    <button type="submit" formaction="/admin/boothCheck" class="btn btn-success">Check</button>
                    <button type="submit" formaction="/admin/insertData" class="btn btn-primary">Input</button>
                </form>
            </div>

            <!-- Input Video Live -->
            <div class="col">
                <form action="/admin/videoAuditorium" method="post">
                    <h3 class='mt-3 mb-3'>Input video live</h3>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Video Auditorium</span>
                        </div>
                        <input type="text" name="audVid" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                        <button type="submit" class="btn btn-primary">Input</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>