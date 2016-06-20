<html>
<head>
    <meta charset="utf-8">
    <title>CKFinder 3</title>
    <script src="<?=base_url()?>/ckfinder/ckfinder.js"></script>
</head>
<body>
<div id="ckfinder1"></div>
    <script>
        CKFinder.widget( 'ckfinder1', {
            // jQuery
            jquery: '//code.jquery.com/jquery-2.1.3.min.js',

            // jQuery Mobile "core" files, used regardless of which skin is enabled.
            jqueryMobile: '//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js',
            jqueryMobileStructureCSS: '//code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css',
        } );
    </script>
</body>
</html>