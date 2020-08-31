<div class="container">
    <h3 class='mt-5 mb-3'>Input data sponsor</h3>

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
            <input type="text" name="sponsorBackground" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
        </div>

        <!-- Display name -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Link display name</span>
            </div>
            <input type="text" name="sponsorNameDisp" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
        </div>
        <button type="submit" formaction="/admin/boothCheck" class="btn btn-success" target='__blank'>Check</button>
        <button type="submit" formaction="/admin/insertData" class="btn btn-primary" target='__blank'>Input</button>
    </form>
</div>