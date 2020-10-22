<body>
    <script>
        const brosur = document.querySelector('#sponsorBrosur');
        const logo = document.querySelector('#sponsorLogo');
        const banner = document.querySelector('#sponsorBanner');
        const logoLabel = document.querySelector('.ogol');
        const bannerLabel = document.querySelector('.banner');
        const brosurLabel = document.querySelector('.brosur');
        const imgLogo = document.querySelector('.img-logo');
        const imgBanner = document.querySelector('.img-banner');
        const imgBrosur = document.querySelector('.img-brosur');

        function previewLogo() {
            logoLabel.textContent = logo.files[0].name;

            const fileLogo = new FileReader();
            fileLogo.readAsDataURL(logo.files[0]);

            fileLogo.onload = function(e) {
                imgLogo.src = e.target.result;
            }
        }

        function previewBanner() {
            bannerLabel.textContent = banner.files[0].name;

            const fileLogo = new FileReader();
            fileLogo.readAsDataURL(banner.files[0]);

            fileLogo.onload = function(e) {
                imgBanner.src = e.target.result;
            }
        }


        function previewBrosur() {
            brosurLabel.textContent = brosur.files[0].name;

            const fileBrosur = new FileReader();
            fileBrosur.readAsDataURL(brosur.files[0]);

            fileBrosur.onload = function(e) {
                imgBrosur.src = e.target.result;
            }
        }
    </script>
</body>

</html>