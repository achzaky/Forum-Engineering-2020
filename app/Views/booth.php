<?php foreach ($sponsorData as $sd) : ?>
<h2>Nama sponsor: <?= $sd['name']; ?></h2>
<h2>Nomor sponsor: <?= $sd['phoneNumber']; ?></h2>
<h2>Video sponsor: <?= $sd['video']; ?></h2>
<h2>Brosur sponsor: <?= $sd['brosur']; ?></h2>
<h2>Banner sponsor: <?= $sd['sponsor_banner']; ?></h2>
<h2>Logo sponsor: <?= $sd['sponsor_logo']; ?></h2>
<?php endforeach; ?>