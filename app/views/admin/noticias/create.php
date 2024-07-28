<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Text Editor -->
    <script src="https://cdn.tiny.cloud/1/h9gvl4d0bz4vemdpcqdo8daaldpw5f0tzxf6qpg19rgakrv2/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/objects.css">
    <link rel="stylesheet" href="/assets/css/root.css">
    <link rel="stylesheet" href="/assets/css/midiaQ.css">
    <link rel="stylesheet" href="/assets/css/animations.css">
</head>
<body class="flex row">
    <header class="menu-lateral">
        <section class="logo-container">
            <img src="/assets/img/logo.svg" alt="">
        </section>
        <nav class="flex col">
            <a href="/admindex.html">Dashboard</a>
            <a href="" class="ative">Newsletter</a>
            <a href="">Destaques</a>
            <a href="">Subscritos</a>
        </nav>
    </header>
    <main class="main-adm container"> 
        <section class="header-section row j-between flex">
            <h1>Newsletter</h1>
            <section class="user-info flex row a-center" id="user-info">
                <p class="">useremail@maiskwanza.com</p>
                <ion-icon name="person-circle" ></ion-icon>
            </section>
        </section>
        <section class="off" id="user-modal">
            <section class="user-modal flex col" >
                <a href="">Configurações</a>
                <a href="">Sair</a>
            </section>
        </section>
        <section class="stats-card-area row f-center flex" id="sc">
            <section class="stat-card">
                <img src="../assets/img/icon/news-icon.svg" alt="">
                <section class="stat-description">
                    <h2>Newsletter subscribers</h2>
                    <h1>34</h1>
                </section>
            </section>
            <section class="stat-card">
                <img src="../assets/img/icon/news-icon.svg" alt="">
                <section class="stat-description">
                    <h2>Newsletter subscribers</h2>
                    <h1>34</h1>
                </section>
            </section>
            <section class="stat-card">
                <img src="../assets/img/icon/news-icon.svg" alt="">
                <section class="stat-description">
                    <h2>Newsletter subscribers</h2>
                    <h1>34</h1>
                </section>
            </section>
        </section>

        <section class="action-card-area content row f-center flex" id="ac">
            <section class="action-area flex">
                <section class="action-card" id="write">
                    <ion-icon name="newspaper"></ion-icon>
                    <section class="stat-description">
                        <h2>Escrever Artigo</h2>
                    </section>
                </section>
                <section class="action-card">
                    <ion-icon name="time"></ion-icon>
                    <section class="stat-description">
                        <h2>Histórico de artigos</h2>
                    </section>
                </section>
            </section>
            <section class="artigos">
                <p>Ultimo Artigo</p>
                <section class="artigo-card">
                    <img src="/assets/img/primary.png" alt="">
                    <section class="description">
                        <h1>Nome do Artigo</h1>
                        <h3>Data</h3>
                    </section>
                </section>
            </section>
        </section>

        <section class="editor-section off f-center content j-between" id="edit"> 
            <span class="back flex f-center" id="back-button">
                <ion-icon name="caret-back" ></ion-icon> Voltar
            </span>
            <form action="" class="flex row">
                <div class="flex col innerform">
                    <select name="" id="" class="order">
                        <option value="">Categoria</option>
                        <option value="">Inovação</option>
                        <option value="">Mercado</option>
                        <option value="">Finanças</option>
                        <option value="">Negócios</option>
                        <option value="">Podcast</option>
                    </select>

                    <section class="add_image" id="imagem">
                        <img src="/assets/img/Frame 15.png" alt="" id="foto">
                        <input type = "file" id="foto_capa" class="off" name = "foto_capa" accept="image/*" required>
                    </section>
                </div>
                <div class="flex col innerform">
                    <input type="text" name="titulo" class="input-titulo" placeholder="Título do artigo">
                    <textarea name="" id="editorTextarea"></textarea>
                </div>
            </form>
        </section>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>

        var userinfo = document.getElementById('user-info');
        var usermodal = document.getElementById('user-modal');
        userinfo.onclick = function () {
            usermodal.classList.toggle('off');
        }

        var back = document.getElementById('back-button');
        var write = document.getElementById('write');
        var edit = document.getElementById('edit');
        var ac = document.getElementById('ac');
        var sc = document.getElementById('sc');

        back.onclick = function(){
            edit.classList.remove('flex');
            edit.classList.add('off');
            
            ac.classList.add('flex');
            ac.classList.remove('off');
            
            sc.classList.add('flex');
            sc.classList.remove('off');    
        }

        write.onclick = function(){
            edit.classList.add('flex');
            edit.classList.remove('off');
            
            ac.classList.remove('flex');
            ac.classList.add('off');
            
            sc.classList.remove('flex');
            sc.classList.add('off');    
        }
    </script>
    <script src="/assets/js/foto.js"></script>
</body>

<script>
    tinymce.init({
      selector: '#editorTextarea',
      plugins: 'advlist link lists',
      toolbar: 'undo redo | blocks  fontsize | bold italic underline | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      menubar: false,
      entity_encoding: 'row',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });
  </script>

</html>