<body>
    <div class="container">
        <h2 class='mt-2'>Admin Panel</h2>
        <div class="row">
            <!-- Input data sponsor -->
            <div class="col-8">
                <h3 class='mt-3 mb-3'>Ubah data sponsor</h3>

                <form action="/admin/update/<?= $sponsor['name']; ?>" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="description" value="<?= $sponsor['description']; ?>">
                    <input type="hidden" name="brosurLama" value="<?= $sponsor['brosur']; ?>">
                    <input type="hidden" name="bannerLama" value="<?= $sponsor['sponsor_banner']; ?>">
                    <input type="hidden" name="logoLama" value="<?= $sponsor['sponsor_logo']; ?>">

                    <!-- Nama -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
                        </div>
                        <input type="text" name="sponsorName" class="form-control <?= ($validation->hasError('sponsorName')) ? 'is-invalid' : ''; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?= (old('name')) ? old('name') : $sponsor['name'] ?>">
                        <div class=" invalid-feedback"><?= $validation->getError('sponsorName'); ?>
                        </div>
                    </div>

                    <!-- No.Telp -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">No.Telp</span>
                        </div>
                        <input type="text" name="sponsorPhone" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?= (old('phoneNumber')) ? old('phoneNumber') : $sponsor['phoneNumber'] ?>">
                    </div>

                    <!-- Video -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Link Video (youtube)</span>
                        </div>
                        <input type="text" name="sponsorVideo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?= (old('video')) ? old('video') : $sponsor['video'] ?>">
                    </div>
                    <!-- Brosur -->
                    <div class=" form-group row">
                        <label for="sponsorBrosur" class="col-sm-2 col-form-label">Sponsor Brosur</label>
                        <div class="col-sm-2">
                            <img src="/assets/photos/sponsor/<?= $sponsor['brosur']; ?>" class="img-thumbnail img-brosur">
                        </div>
                        <div class="col-sm-8">
                            <div class="custom-file">
                                <br>
                                <input type="file" name="sponsorBrosur" class="custom-file-input <?= ($validation->hasError('sponsorBrosur')) ? 'is-invalid' : ''; ?>" id="sponsorBrosur" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" onchange="previewBrosur()" required>
                                <label class="custom-file-label brosur" for="sponsorBrosur"><?= $sponsor['brosur']; ?></label>
                                <div class="invalid-feedback"><?= $validation->getError('sponsorBrosur'); ?></div>
                            </div>

                        </div>
                    </div>

                    <!-- Banner -->
                    <div class="form-group row">
                        <label for="sponsorBanner" class="col-sm-2 col-form-label">Sponsor Banner</label>
                        <div class="col-sm-2">
                            <img src="/assets/photos/sponsor/banner/<?= $sponsor['sponsor_banner']; ?>" class="img-thumbnail img-banner">
                        </div>
                        <div class="col-sm-8">
                            <div class="custom-file">
                                <br>
                                <input type="file" name="sponsorBanner" class="custom-file-input" id="sponsorBanner" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" onchange="previewBanner()" required>
                                <label class="custom-file-label banner" for="sponsorBanner"><?= $sponsor['sponsor_banner']; ?></label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                    </div>

                    <!-- Logo -->
                    <div class="form-group row">
                        <label for="sponsorLogo" class="col-sm-2 col-form-label">Sponsor Logo</label>
                        <div class="col-sm-2">
                            <img src="/assets/photos/sponsor/logo/<?= $sponsor['sponsor_logo']; ?>" class="img-thumbnail img-logo">
                        </div>
                        <div class=" col-sm-8">
                            <div class="custom-file">
                                <input type="file" name="sponsorLogo" class="custom-file-input" id="sponsorLogo" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" onchange="previewLogo()" required>
                                <label class="custom-file-label ogol" for="sponsorLogo"><?= $sponsor['sponsor_logo']; ?></label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-file">
                        <button type="submit" formaction="/admin/boothCheck" class="btn btn-success">Check</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>