<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $this->e($title) ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">

    <!-- Text Editor -->
    <script src="https://cdn.tiny.cloud/1/h9gvl4d0bz4vemdpcqdo8daaldpw5f0tzxf6qpg19rgakrv2/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>


    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/objects.css">
    <link rel="stylesheet" href="/assets/css/root.css">
    <link rel="stylesheet" href="/assets/css/midiaQ.css">
    <link rel="stylesheet" href="/assets/css/animations.css">

</head>

<body class="flex row">
    <?= $this->insert('components/admin/header') ?>

    <main class="main-adm container">
        <?= $this->section('content') ?>
    </main>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
        var userinfo = document.getElementById('user-info');
        var usermodal = document.getElementById('user-modal');
        userinfo.onclick = function() {
            usermodal.classList.toggle('off');
        }
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
        var userinfo = document.getElementById('user-info');
        var usermodal = document.getElementById('user-modal');
        userinfo.onclick = function() {
            usermodal.classList.toggle('off');
        }

        var back = document.getElementById('back-button');
        var write = document.getElementById('write');
        var edit = document.getElementById('edit');
        var ac = document.getElementById('ac');
        var sc = document.getElementById('sc');

        back.onclick = function() {
            edit.classList.remove('flex');
            edit.classList.add('off');

            ac.classList.add('flex');
            ac.classList.remove('off');

            sc.classList.add('flex');
            sc.classList.remove('off');
        }

        write.onclick = function() {
            edit.classList.add('flex');
            edit.classList.remove('off');

            ac.classList.remove('flex');
            ac.classList.add('off');

            sc.classList.remove('flex');
            sc.classList.add('off');
        }
    </script>

    <script src="/assets/js/foto.js"></script>

    <script src="https://cdn.tiny.cloud/1/crrxb8x61v26y9264z0x349do637jr7e9h7v7zt2hdy1khz0/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            menubar: false,
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline | link image media table | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });
    </script>
</body>

</html>