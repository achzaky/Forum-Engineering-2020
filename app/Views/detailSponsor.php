<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-20">Detail Sponsor</h2>
            <div class="card mb-3" style="max-width:1080px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <p class="card-text  "><b>Banner : </b></p>
                        <img src="/assets/photos/sponsor/banner/<?= $sponsorData['sponsor_banner']; ?>" style="width: 300px; height:300px" alt="...">
                        <p class="card-text  "><b>Logo : </b></p>
                        <img class="d-inline" src="/assets/photos/sponsor/logo/<?= $sponsorData['sponsor_logo']; ?>" alt="" style="width: 300px; height:300px">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <span>
                                <h2 class="card-title"><?= $sponsorData['name']; ?> - Nomor Telepon <?= $sponsorData['phoneNumber']; ?></h2>
                                <!-- <h4 class=""> </h4> -->
                                <!-- nanti kita buat table -->
                            </span>
                            <div class="embed-responsive embed-responsive-16by9" style="margin-top: 30px; margin-left: -13px">
                                <span>
                                    <p> <b>Channel Youtube</b> </p>
                                    <iframe id="sponsorVideo" src="<?= $sponsorData['video']; ?>" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </span>
                            </div>
                            <span>
                                <br>
                                <a href="/admin/edit/<?= $sponsorData['description']; ?>" class="btn btn-warning"> Edit</a>
                                <form action="/admin/<?= $sponsorData['name']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin untuk Delete Sponsor?')"> Delete</button>
                                </form>
                                <div>
                                    <!-- belum bisa link balik ke /adminDashboard // Error there is no controller/method AdminDashboard::index -->
                                    <a href="/admin/index">Kembali ke Dashboard Admin</a>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>