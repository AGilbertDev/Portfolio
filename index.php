<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Alexandre Gilbert | Développeur fullstack</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!-- Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet" />

  <!-- CSS -->
  <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
  <!-- Header -->
  <header class="container-fluid bg-main-color p-0 text-light vh-100">
    <div class="container vh-100 px-0 py-5">

      <!-- Navbar -->
      <div class="navigation row">
        <nav id="nav" class="navbar navbar-expand-sm navbar-dark mx-auto ">

          <!-- Hamburger Button -->
          <i id="menuBtn" class="d-sm-none fas fa-bars ms-auto fs-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></i>

          <!-- Links -->
          <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="#about" class="nav-link text-uppercase">À propos</a>
              </li>
              <li class="nav-item">
                <a href="#projects" class="nav-link text-uppercase">Portfolio</a>
              </li>
              <li class="nav-item">
                <a href="#resume" class="nav-link text-uppercase">CV</a>
              </li>
              <li class="nav-item">
                <a href="#contact" class="nav-link text-uppercase">Contact</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <!-- Hero -->
      <div id="hero" class="hero row p-0 mx-auto">
        <div class="d-flex flex-column align-items-center justify-content-center">
          <div>
            <h6 class="display-6">Bonjour,</h6>
            <h5 class="display-4 mb-4">Je m'appelle Alexandre Gilbert</h5>
            <p class="mb-4">Je suis développeur fullstack</p>
            <a href="#projects" class="btn btn-outline-light">Voir mon portfolio</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="container-fluid p-0">

    <!-- About -->
    <div class="container px-0 py-5">
      <div id="about" class="mx-auto">
        <h2 class="fw-normal text-main-color mb-4">À propos de moi</h2>
        <p class="text-justify">Je suis étudiant en informatique à l'université et je termine bientôt mes études. Passionné par la programmation, j'aime autant le développement web que les applications mobiles et PC. Je m'intéresse aussi à la cybersécurité et j'essaie le plus possible d'en incorporer dans ce que je programme. </p>

        <p class="text-justify">Je suis constamment à la recherche de nouvelles compétences et je consacre beaucoup de mon temps libre à élargir mon stack. Dernièrement, j'ai suivi une formation en C# donnée par Microsoft. J'ai envie d'apprendre ASP.NET Core et Angular très prochainement. </p>

        <p class="text-justify">J'ai beaucoup d'expériences connexes dans le milieu industriel qui me permettent de comprendre le fonctionnement sur le plancher des entreprises où j'ai travaillé. J'ai eu affaire à des environnements très exigeants qui demandaient une bonne performance, une capacité à résoudre les problèmes et un grand souci de la qualité. Je suis quelqu'un de sérieux, qui n'a pas peur de travailler et je suis fier de pouvoir dire que j'ai vu comment ça marche parce que j'étais là!</p>

        <a href="#resume"><i class="fa-solid fa-arrow-down me-2"></i> Allez voir mon CV!</a>
      </div>
    </div>

    <!-- Projects -->
    <div class="container-fluid bg-dark-subtle p-0 m-0">
      <div class="container px-0 py-5">
        <div id="projects" class="mx-auto">
          <h2 class="fw-normal text-main-color mb-4">Mon portfolio</h2>

          <!-- Projet 1 -->
          <div class="project row row-cols-1 row-cols-lg-2 d-flex flex-column-reverse flex-lg-row mb-5">
            <div class="col">
              <a href="https://agilbert.dev/ARN"><img src="images/project1.png" alt="" class="showcase"></a>
            </div>
            <div class="col px-lg-4">
              <h3>Visualisateur d&apos;acides amin&eacute;s</h3>
              <p class="text-justify">Site web r&eacute;alis&eacute; dans le cadre d&apos;un devoir pour un cours et permettant &agrave; l&apos;utilisateur de voir les acides amin&eacute;s qui composent une cha&icirc;ne d&apos;ARN.</p>
              <p><em>Pour un meilleur affichage, consulter sur un PC.</em></p>
              <div class="d-flex flex-wrap">
                <img src="https://user-images.githubusercontent.com/25181517/117447155-6a868a00-af3d-11eb-9cfe-245df15c9f3f.png" alt="JavaScript" title="JavaScript" />
                <img src="https://user-images.githubusercontent.com/25181517/192158954-f88b5814-d510-4564-b285-dff7d6400dad.png" alt="HTML" title="HTML" />
                <img src="https://user-images.githubusercontent.com/25181517/183898674-75a4a1b1-f960-4ea9-abcb-637170a00a75.png" alt="CSS" title="CSS" />
                <img src="https://user-images.githubusercontent.com/25181517/192158956-48192682-23d5-4bfc-9dfb-6511ade346bc.png" alt="Sass" title="Sass" />
                <img src="https://user-images.githubusercontent.com/25181517/183898054-b3d693d4-dafb-4808-a509-bab54cf5de34.png" alt="Bootstrap" title="Bootstrap" />
              </div>
              <div>
                <a href="https://agilbert.dev/ARN">Version Live: https://agilbert.dev/ARN</a><br>
                <a href="https://github.com/AGilbertDev/ARN"><i class="fa-brands fa-github"></i> Voir le code source sur GitHub</a>
              </div>
            </div>
          </div>

          <!-- Projet 2 -->
          <div class="d-none project row flex-column-reverse flex-lg-row-reverse">
            <div class="col">
              <img src="images/monitor.png" alt="" class="showcase">
            </div>
            <div class="col px-lg-4">
              <h3>(&Agrave; venir) Logiciel de gestion d&apos;employ&eacute;s</h3>
              <p class="text-justify">Application web qui permet aux employ&eacute;s d&apos;un centre de distribution de consulter leur profil, contenant des informations sur leur poste, anciennet&eacute;, quota de performance de la semaine et leur paie, incluant les primes et bonus. Les administrateurs pourront ajouter, modifier ou supprimer des profils d'employ&eacute;s.</p>
              <div class="d-flex mb-2 flex-wrap">
                <img src="images/PHP.png" alt="" title="PHP" class="icon">
                <img src="images/MySQL.png" alt="" title="MySQL" class="icon">
                <img src="images/HTML5.png" alt="" title="HTML" class="icon">
                <img src="images/CSS3.png" alt="" title="CSS" class="icon">
                <img src="images/Bootstrap.png" alt="" title="Bootstrap" class="icon">
                <img src="images/Sass.png" alt="" title="Sass" class="icon">
                <img src="images/JavaScript.png" alt="" title="Javascript" class="icon">
              </div>
              <a href="https://www.figma.com/design/xyOPc04fT62nfdoE2BY4CR/App-Dashboard?node-id=0-1&t=6Lo0r9nWKBG8lKfg-0"><i class="fa-brands fa-figma"></i> Voir le prototype sur Figma</a><br>
              <a href="https://github.com/AGilbertDev/Employee-Management-App"><i class="fa-brands fa-github"></i> Voir le code source sur GitHub</a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- CV -->
    <div class="container-fluid p-0 m-0">
      <div class="container px-0 py-5">
        <div id="resume" class="mx-auto">

          <div class="d-flex">
            <h2 class="mb-4">Mon CV</h2>

            <a class="ms-2" href="files/AlexandreGilbert_CV.pdf" download>
              <h2><i class="fa-regular fa-file-pdf"></i></i></h2>
            </a>
          </div>


          <!-- CV PETIT FORMAT -->
          <div class="d-md-none mb-4">
            <h3 class="mb-4">Mes Comp&eacute;tences</h3>
            <div>
              <h5>Backend</h5>
              <div class="d-flex flex-wrap mb-4">
                <img src="https://user-images.githubusercontent.com/25181517/183570228-6a040b9f-3ddf-47a2-a201-743121dac664.png" alt="php" title="php" />
                <img src="https://user-images.githubusercontent.com/25181517/192107858-fe19f043-c502-4009-8c47-476fc89718ad.png" alt="REST" title="REST" />
                <img src="https://user-images.githubusercontent.com/25181517/117208740-bfb78400-adf5-11eb-97bb-09072b6bedfc.png" alt="PostgreSQL" title="PostgreSQL" />
                <img src="https://user-images.githubusercontent.com/25181517/183896128-ec99105a-ec1a-4d85-b08b-1aa1620b2046.png" alt="MySQL" title="MySQL" />
                <img src="https://user-images.githubusercontent.com/25181517/117201156-9a724800-adec-11eb-9a9d-3cd0f67da4bc.png" alt="Java" title="Java" />
                <img src="https://user-images.githubusercontent.com/25181517/121405384-444d7300-c95d-11eb-959f-913020d3bf90.png" alt="C#" title="C#" />
                <img src="https://user-images.githubusercontent.com/25181517/183423507-c056a6f9-1ba8-4312-a350-19bcbc5a8697.png" alt="Python" title="Python" />
              </div>
              <div>
                <h5>Frontend</h5>
                <div class="d-flex flex-wrap mb-4">
                  <img src="https://user-images.githubusercontent.com/25181517/183897015-94a058a6-b86e-4e42-a37f-bf92061753e5.png" alt="React" title="React" />
                  <img src="https://user-images.githubusercontent.com/25181517/117447155-6a868a00-af3d-11eb-9cfe-245df15c9f3f.png" alt="JavaScript" title="JavaScript" />
                  <img src="https://user-images.githubusercontent.com/25181517/183890598-19a0ac2d-e88a-4005-a8df-1ee36782fde1.png" alt="TypeScript" title="TypeScript" />
                  <img src="https://user-images.githubusercontent.com/25181517/192158954-f88b5814-d510-4564-b285-dff7d6400dad.png" alt="HTML" title="HTML" />
                  <img src="https://user-images.githubusercontent.com/25181517/183898674-75a4a1b1-f960-4ea9-abcb-637170a00a75.png" alt="CSS" title="CSS" />
                  <img src="https://user-images.githubusercontent.com/25181517/192158956-48192682-23d5-4bfc-9dfb-6511ade346bc.png" alt="Sass" title="Sass" />
                  <img src="https://user-images.githubusercontent.com/25181517/183898054-b3d693d4-dafb-4808-a509-bab54cf5de34.png" alt="Bootstrap" title="Bootstrap" />
                  <img src="https://user-images.githubusercontent.com/25181517/202896760-337261ed-ee92-4979-84c4-d4b829c7355d.png" alt="Tailwind CSS" title="Tailwind CSS" />
                </div>
              </div>
              <div>
                <h5>Autre tech</h5>
                <div class="d-flex flex-wrap mb-4">
                  <img src="https://user-images.githubusercontent.com/25181517/192108372-f71d70ac-7ae6-4c0d-8395-51d8870c2ef0.png" alt="Git" title="Git" />
                  <img src="https://user-images.githubusercontent.com/25181517/192108374-8da61ba1-99ec-41d7-80b8-fb2f7c0a4948.png" alt="GitHub" title="GitHub" />
                  <img src="https://user-images.githubusercontent.com/25181517/117269608-b7dcfb80-ae58-11eb-8e66-6cc8753553f0.png" alt="Android" title="Android" />
                </div>
              </div>
            </div>

            <h3 class="mb-3">Formation</h3>
            <p>
              2021 - 2025<br>
              <strong>Baccalauréat - Informatique</strong><br>
              Université de Montréal
            </p>

            <p>
              2019 - 2020<br>
              <strong>Certificat - Informatique appliquée</strong><br>
              Université de Montréal
            </p>

            <p>
              2013 - 2014<br>
              <strong>AEC - Modélisation 3D oritentée jeu vidéo</strong><br>
              Le Campus ADN, Montréal
            </p>

            <p>
              2010 - 2013<br>
              <strong>DEC - Animation et synthèse d'images</strong><br>
              Cégep de Matane
            </p>

            <h3 class="mt-4 mb-3">Expérience professionnelle</h3>
            <p>
              3 sept. 2024 - 27 dec. 2024<br>
              <strong>D&eacute;veloppeur Fullstack stagiaire</strong><br>
              Transport Logi-Pro, Montréal
            </p>

            <p>
              2015<br>
              <strong>Artiste 3D freelancer</strong><br>
              EDGE Dimension, Montréal
            </p>

            <h3 class="mt-4 mb-3">Autre expérience</h3>
            <p>
              2017 - 2021<br>
              <strong>Préparateur de commandes</strong><br>
              (2018 - 2021) Transport Logi-Pro, Montréal<br>
              (2017) Extra Multi-Ressources, Montréal
            </p>
            <p>
              2018<br>
              <strong>Aide-Pressier</strong><br>
              Thomson Tremblay, Montréal
            </p>
            <p>
              2015 - 2017<br>
              <strong>Opérateur à l'empaquetage</strong><br>
              Molson Coors, Montréal
            </p>
            <p>
              2014 - 2015<br>
              <strong>Journalier</strong><br>
              (2015) Fuze HR Solutions, Montréal<br>
              (2014) Bédard Ressources, Montréal
            </p>
          </div>

          <!-- CV GROS FORMAT -->
          <div class="d-none d-md-block">
            <h3 class="text-center fw-normal text-main-color mb-4">Mon stack</h3>

            <div class="row mx-auto mb-2">
              <div class="col-4 d-flex justify-content-center">
                <h5 class="text-center">Backend</h5>
              </div>
              <div class="col-4 d-flex justify-content-center">
                <h5 class="text-center">Frontend</h5>
              </div>
              <div class="col-4 d-flex justify-content-center">
                <h5 class="text-center">Autre tech</h5>
              </div>
            </div>

            <div class="row mx-auto mb-5">
              <div class="col-4 d-flex align-items-start justify-content-center">
                <div class="d-flex justify-content-center flex-wrap w-100 p-0">
                  <img src="https://user-images.githubusercontent.com/25181517/183570228-6a040b9f-3ddf-47a2-a201-743121dac664.png" alt="php" title="php" />
                  <img src="https://user-images.githubusercontent.com/25181517/192107858-fe19f043-c502-4009-8c47-476fc89718ad.png" alt="REST" title="REST" />
                  <img src="https://user-images.githubusercontent.com/25181517/117208740-bfb78400-adf5-11eb-97bb-09072b6bedfc.png" alt="PostgreSQL" title="PostgreSQL" />
                  <img src="https://user-images.githubusercontent.com/25181517/183896128-ec99105a-ec1a-4d85-b08b-1aa1620b2046.png" alt="MySQL" title="MySQL" />
                  <img src="https://user-images.githubusercontent.com/25181517/117201156-9a724800-adec-11eb-9a9d-3cd0f67da4bc.png" alt="Java" title="Java" />
                  <img src="https://user-images.githubusercontent.com/25181517/121405384-444d7300-c95d-11eb-959f-913020d3bf90.png" alt="C#" title="C#" />
                  <img src="https://user-images.githubusercontent.com/25181517/183423507-c056a6f9-1ba8-4312-a350-19bcbc5a8697.png" alt="Python" title="Python" />
                </div>
              </div>
              <div class="col-4 d-flex align-items-start justify-content-center">
                <div class="d-flex justify-content-center flex-wrap w-100 p-0">
                  <img src="https://user-images.githubusercontent.com/25181517/183897015-94a058a6-b86e-4e42-a37f-bf92061753e5.png" alt="React" title="React" />
                  <img src="https://user-images.githubusercontent.com/25181517/117447155-6a868a00-af3d-11eb-9cfe-245df15c9f3f.png" alt="JavaScript" title="JavaScript" />
                  <img src="https://user-images.githubusercontent.com/25181517/183890598-19a0ac2d-e88a-4005-a8df-1ee36782fde1.png" alt="TypeScript" title="TypeScript" />
                  <img src="https://user-images.githubusercontent.com/25181517/192158954-f88b5814-d510-4564-b285-dff7d6400dad.png" alt="HTML" title="HTML" />
                  <img src="https://user-images.githubusercontent.com/25181517/183898674-75a4a1b1-f960-4ea9-abcb-637170a00a75.png" alt="CSS" title="CSS" />
                  <img src="https://user-images.githubusercontent.com/25181517/192158956-48192682-23d5-4bfc-9dfb-6511ade346bc.png" alt="Sass" title="Sass" />
                  <img src="https://user-images.githubusercontent.com/25181517/183898054-b3d693d4-dafb-4808-a509-bab54cf5de34.png" alt="Bootstrap" title="Bootstrap" />
                  <img src="https://user-images.githubusercontent.com/25181517/202896760-337261ed-ee92-4979-84c4-d4b829c7355d.png" alt="Tailwind CSS" title="Tailwind CSS" />
                </div>
              </div>
              <div class="col-4 d-flex align-items-start justify-content-center">
                <div class="d-flex justify-content-center flex-wrap w-100 p-0">
                  <img src="https://user-images.githubusercontent.com/25181517/192108372-f71d70ac-7ae6-4c0d-8395-51d8870c2ef0.png" alt="Git" title="Git" />
                  <img src="https://user-images.githubusercontent.com/25181517/192108374-8da61ba1-99ec-41d7-80b8-fb2f7c0a4948.png" alt="GitHub" title="GitHub" />
                  <img src="https://user-images.githubusercontent.com/25181517/117269608-b7dcfb80-ae58-11eb-8e66-6cc8753553f0.png" alt="Android" title="Android" />
                </div>
              </div>
            </div>

            <!-- Titres -->
            <div class="row mx-auto">
              <div class="col-6">
                <h3 class="text-center fw-normal text-main-color mb-4">Formation</h3>
              </div>
              <div class="col-6">
                <h3 class="text-center fw-normal text-main-color mb-4">Expérience<br>professionnelle</h3>
              </div>
            </div>

            <!-- Baccalaureat -->
            <div class="row mx-auto">
              <div class="col-6 border-end border-2 border-dark position-relative">
                <div class="d-flex align-items-center justify-content-start">
                  <div class="event card p-2 ms-25">
                    <p class="text-start my-auto">
                      <strong>Baccalauréat - Informatique</strong><br>
                      Université de Montréal
                    </p>
                  </div>
                  <p class="date-l">2021 - 2025</p>
                  <div class="line-l"></div>
                  <div class="circle-l"></div>
                </div>
              </div>
              <div class="col-6 position-relative"></div>
            </div>

            <!-- Developpeur Fullstack -->
            <div class="row mx-auto">
              <div class="col-6 border-end border-2 border-dark position-relative"></div>
              <div class="col-6 position-relative">
                <div class="d-flex align-items-center justify-content-end">
                  <div class="event card p-2 me-25">
                    <p class="text-start my-auto">
                      <strong>D&eacute;veloppeur Fullstack Stagiaire</strong><br>
                      Hubelia, Montréal
                    </p>
                  </div>
                  <p class="date-r">2024</p>
                  <div class="line-r"></div>
                  <div class="circle-r"></div>
                </div>
              </div>
            </div>

            <!-- Preparateur de commandes -->
            <div class="row mx-auto">
              <div class="col-6 border-end border-2 border-dark position-relative"></div>
              <div class="col-6 position-relative">
                <div class="d-flex align-items-center justify-content-end">
                  <div class="event card p-2 me-25">
                    <p class="text-start my-auto">
                      <strong>Préparateur de commandes</strong><br>
                      (2018 - 2021) Transport Logi-Pro, Montréal<br>
                      (2017) Extra Multi-Ressources, Montréal
                    </p>
                  </div>
                  <p class="date-r">2017 - 2021</p>
                  <div class="line-r"></div>
                  <div class="circle-r"></div>
                </div>
              </div>
            </div>

            <!-- Certificat -->
            <div class="row mx-auto">
              <div class="col-6 border-end border-2 border-dark position-relative">
                <div class="d-flex align-items-center justify-content-start">
                  <div class="event card p-2 ms-25">
                    <p class="text-start my-auto">
                      <strong>Certificat - Informatique appliquée</strong><br>
                      Université de Montréal
                    </p>
                  </div>
                  <p class="date-l">2019 - 2020</p>
                  <div class="line-l"></div>
                  <div class="circle-l"></div>
                </div>
              </div>
              <div class="col-6 position-relative"></div>
            </div>

            <!-- Aide-pressier -->
            <div class="row mx-auto">
              <div class="col-6 border-end border-2 border-dark position-relative"></div>
              <div class="col-6 position-relative">
                <div class="d-flex align-items-center justify-content-end">
                  <div class="event card p-2 me-25">
                    <p class="text-start my-auto">
                      <strong>Aide-pressier</strong><br>
                      Thomson Tremblay, Montréal
                    </p>
                  </div>
                  <p class="date-r">2018</p>
                  <div class="line-r"></div>
                  <div class="circle-r"></div>
                </div>
              </div>
            </div>

            <!-- Molson -->
            <div class="row mx-auto">
              <div class="col-6 border-end border-2 border-dark position-relative"></div>
              <div class="col-6 position-relative">
                <div class="d-flex align-items-center justify-content-end">
                  <div class="event card p-2 me-25">
                    <p class="text-start my-auto">
                      <strong>Opérateur à l'empaquetage</strong><br>
                      Molson Coors, Montréal
                    </p>
                  </div>
                  <p class="date-r">2015 - 2017</p>
                  <div class="line-r"></div>
                  <div class="circle-r"></div>
                </div>
              </div>
            </div>

            <!-- Artiste 3D -->
            <div class="row mx-auto">
              <div class="col-6 border-end border-2 border-dark position-relative"></div>
              <div class="col-6 position-relative">
                <div class="d-flex align-items-center justify-content-end">
                  <div class="event card p-2 me-25">
                    <p class="text-start my-auto">
                      <strong>Artiste 3D freelancer</strong><br>
                      EDGE Dimension, Montréal
                    </p>
                  </div>
                  <p class="date-r">2015</p>
                  <div class="line-r"></div>
                  <div class="circle-r"></div>
                </div>
              </div>
            </div>

            <!-- Journalier -->
            <div class="row mx-auto">
              <div class="col-6 border-end border-2 border-dark position-relative"></div>
              <div class="col-6 position-relative">
                <div class="d-flex align-items-center justify-content-end">
                  <div class="event card p-2 me-25">
                    <p class="text-start my-auto">
                      <strong>Journalier</strong><br>
                      (2015) Fuze HR Solutions, Montréal<br>
                      (2014) Bédard Ressources, Montréal
                    </p>
                  </div>
                  <p class="date-r">2014 - 2015</p>
                  <div class="line-r"></div>
                  <div class="circle-r"></div>
                </div>
              </div>
            </div>

            <!-- AEC -->
            <div class="row mx-auto">
              <div class="col-6 border-end border-2 border-dark position-relative">
                <div class="d-flex align-items-center justify-content-start">
                  <div class="event card p-2 ms-25">
                    <p class="text-start my-auto">
                      <strong>AEC - Modélisation 3D orientée jeu vidéo</strong><br>
                      Le Campus ADN, Montréal
                    </p>
                  </div>
                  <p class="date-l">2013 - 2014</p>
                  <div class="line-l"></div>
                  <div class="circle-l"></div>
                </div>
              </div>
              <div class="col-6 position-relative"></div>
            </div>

            <!-- DEC -->
            <div class="row mx-auto">
              <div class="col-6 border-end border-2 border-dark position-relative">
                <div class="d-flex align-items-center justify-content-start">
                  <div class="event card p-2 ms-25">
                    <p class="text-start my-auto">
                      <strong>DEC - Animation 3D et synthèse d'images</strong><br>
                      Cégep de Matane
                    </p>
                  </div>
                  <p class="date-l">2010 - 2013</p>
                  <div class="line-l"></div>
                  <div class="circle-l"></div>
                </div>
              </div>
            </div>
            <div class="col-6 position-relative"></div>
          </div>

        </div>
      </div>
    </div>

    <!-- Contact -->
    <div class="container-fluid bg-dark-subtle p-0 m-0">
      <div class="container px-0 py-5">
        <div id="contact" class="mx-auto">

          <div class="row row-cols-1 row-cols-lg-2 p-0">

            <!-- Contact info -->
            <div class="col mx-auto me-lg-0">
              <div class="container mx-auto p-0 p-lg-4">
                <h2 class="fw-normal text-main-color mb-4">Me contacter</h2>
                <p class="text-justify">Vous pouvez me contacter par courriel à l'adresse ci-dessous, par Linkedin ou en utilisant le formulaire.</p>
                <a href="mailto: alexandre.gilbert.dev@gmail.com" class="text-main-color mb-2 d-block"><i class="fas fa-envelope me-2"></i>alexandre.gilbert.dev@gmail.com</a>
                <a href="https://www.linkedin.com/in/agilbertdev/" class="text-main-color d-block"><i class="fa-brands fa-linkedin-in me-2"></i>linkedin.com/in/agilbertdev</a>
              </div>
            </div>

            <!-- Contact form -->
            <div class="col mx-auto ms-lg-0">
              <div class="container bg-main-color rounded-4 p-4 mt-5 mt-lg-0">
                <h2 class="fw-normal text-main-color mb-4 text-light">Envoyer un message</h2>

                <!-- Form Validation -->
                <?php if ($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                  require 'includes/formHandler.php';
                  $errors = validateForm();
                }
                ?>

                <form id="contactForm" class="mx-auto d-flex flex-column gap-0" action="<?php echo $_SERVER["PHP_SELF"]; ?>#contact" method="POST" novalidate>
                  <input name="fromName" type="text" class="form-control form-control-lg <?php if (isset($errors['nameErr']))
                                                                                          {
                                                                                            echo 'border border-2 border-danger';
                                                                                          } ?> " placeholder="Nom complet *" value="<?php if (isset($fromName)) echo $fromName; ?>" required />
                  <!-- Displays name error message. -->
                  <?php if (isset($errors['nameErr']))
                  {
                    echo "<p class='err text-danger'>{$errors['nameErr']}</p>";
                  } ?>

                  <input name="fromCompany" type="text" class="mt-4 form-control form-control-lg" placeholder="Compagnie" value="<?php if (isset($fromCompany)) echo $fromCompany; ?>" />

                  <input name="fromEmail" type="email" class="mt-4 form-control form-control-lg <?php if (isset($errors['emailErr']))
                                                                                                {
                                                                                                  echo 'border border-2 border-danger';
                                                                                                } ?> " placeholder="Courriel *" value="<?php if (isset($fromEmail)) echo $fromEmail; ?>" required />
                  <!-- Displays email error message. -->
                  <?php if (isset($errors['emailErr']))
                  {
                    echo "<p class='err text-danger'>{$errors['emailErr']}</p>";
                  } ?>

                  <input name="subject" type="text" class="mt-4 form-control form-control-lg <?php if (isset($errors['subjectErr']))
                                                                                              {
                                                                                                echo 'border border-2 border-danger';
                                                                                              } ?> " placeholder="Objet *" value="<?php if (isset($subject)) echo $subject; ?>" required />
                  <!-- Displays title error message. -->
                  <?php if (isset($errors['subjectErr']))
                  {
                    echo "<p class='err text-danger'>{$errors['subjectErr']}</p>";
                  } ?>

                  <textarea name="message" type="text" class="mt-4 form-control form-control-lg <?php if (isset($errors['messageErr']))
                                                                                                {
                                                                                                  echo 'border border-2 border-danger';
                                                                                                } ?> " placeholder="Message *" rows="5" required><?php if (isset($message))
                                                                                                                                                  {
                                                                                                                                                    echo $message;
                                                                                                                                                  } ?></textarea>
                  <!-- Displays text error message. -->
                  <?php if (isset($errors['messageErr']))
                  {
                    echo "<p class='err text-danger'>{$errors['messageErr']}</p>";
                  } ?>

                  <button id="submitBtn" type="submit" class="mt-4 btn btn-lg btn-light w-100">Envoyer</button><br />

                  <!-- Displays success or error message. -->
                  <?php if (isset($errors['success']))
                  {
                    echo "<p class='err text-success mx-auto my-0 p-0'>{$errors['success']}</p>";
                  }
                  else if (isset($errors['error']))
                  {
                    echo "<p class='err text-danger mx-auto my-0 p-0'>{$errors['error']}</p>";
                  } ?>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer>
    <div class="container-fluid bg-main-color text-center text-white py-2">
      <p class="my-auto">&copy; 2024 Alexandre Gilbert</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>
  <script src="js/app.js"></script>
</body>

</html>