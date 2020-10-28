<body>
    <div class="container">
        <div class=" row">
            <div class="col">
                <h1>Admin Dashboard</h1>
                <h3 class="text-center text-white pt-5">Login form</h3>
                <label for="exampleInputEmail1"></label>
                <form action="post" action="/admin/videoAuditorium">
                    <input class="form-control" type="text" placeholder="Video Auditorium" />
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <div class="embed-responsive embed-responsive-16by9" style="margin-top: 30px; margin-left: -13px">
                    Youtube
                    <?php foreach ($audvid as $av) : ?>
                    <iframe id="sponsorVideo" src="<?php echo $av['video'] ?>"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col">
                <h3 class="mt-2">List Sponsor</h3>
                <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
                <?php endif; ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Sponsor Logo</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $i = 1; ?>
                        <?php foreach ($sponsorData as $s) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $s['name']; ?></td>
                            <td><?= $s['phoneNumber']; ?></td>
                            <td><img class="logo" src="/assets/photos/sponsor/logo/<?= $s['sponsor_logo']; ?>">
                            </td>
                            <td>
                                <a href="/adminDashboard/<?= $s['description']; ?>" class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <button type="submit" onClick="window.location.href='/admin/admin-input'" class="btn btn-primary">Add
                    New</button>
            </div>
        </div>
    </div>
</body>`