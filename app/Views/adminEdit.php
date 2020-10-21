<body>
    <div class="container">
        <h2 class='mt-2'>Admin Panel</h2>
        <div class="row">
            <!-- Input data sponsor -->
            <div class="col-8">
                <h3 class='mt-3 mb-3'>Edit data sponsor</h3>
                <form action="/admin/update/<?= $sponsorData['name']; ?>" method="POST">
                    <?= csrf_field(); ?>
                    <div class="was-validated">
                        <!-- Nama -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
                            </div>
                            <input type="text" name="sponsorName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>

                        <!-- No.Telp -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">No.Telp</span>
                            </div>
                            <input type="text" name="sponsorPhone" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>

                        <!-- Video -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Link Video (youtube)</span>
                            </div>
                            <input type="text" name="sponsorVideo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <!-- Brosur -->
                        <div class="custom-file">
                            <input type="file" name="sponsorBrosur" class="custom-file-input" id="validatedCustomFile" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                            <label class="custom-file-label" for="validatedCustomFile">Sponsor Brosur</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </>

                            <!-- Banner -->
                            <div class="custom-file">
                                <input type="file" name="sponsorBanner" class="custom-file-input" id="validatedCustomFile" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                                <label class="custom-file-label" for="validatedCustomFile">Sponsor Banner</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                            <!-- Logo -->
                            <div class="custom-file">
                                <input type="file" name="sponsorLogo" class="custom-file-input" id="validatedCustomFile" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                                <label class="custom-file-label" for="validatedCustomFile">Sponsor Banner</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>

                            <!-- Background -->
                            <div class="custom-file">
                                <input type="file" name="sponsorBackground" class="custom-file-input" id="validatedCustomFile" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                                <label class="custom-file-label" for="validatedCustomFile">Sponsor Banner</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>

                            <!-- Display name -->
                            <div class="custom-file">
                                <input type="file" name="SponsorNameDisp" class="custom-file-input" id="validatedCustomFile" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                                <label class="custom-file-label" for="validatedCustomFile">Sponsor Banner</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                        <button type="submit" formaction="/admin/boothCheck" class="btn btn-success">Check</button>
                        <button type="submit" formaction="/admin/insertData" class="btn btn-primary">Edit</button>
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
                        <input type="text" name="audVid" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        <button type="submit" class="btn btn-primary">Input</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>