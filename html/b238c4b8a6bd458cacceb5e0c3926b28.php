<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>A propos</title>
        <style>
            * {
                box-sizing: border-box;
                text-decoration: none;
            }
            nav{
                background: #fff;
                padding: 0 20px;
                border-radius: 40px;
                box-shadow: 0 10px 40ps rgba(159, 162, 177, .8);
                display: flex;
                overflow: hidden;
                overflow-x: auto;
                position: relative;
            }
            .nav-item{
                color: #83818c;
                font-family: Arial, sans-serif;
                padding: 20px;
                margin: 0 6px;
                position: relative;
            }

            .nav-item::before{
                content: '';
                position: absolute;
                bottom: -6px;
                background-color: #dfe2ea;
                height: 5px;
                width: 100%;
                border-radius: 8px 8px 0 0;
                left: 0;
                transition: .3s;
            }
            .nav-item:not(.is-active):hover::before{
                bottom: 0;
            }
            .nav-item:not(.is-active):hover{
                color: #333;
            }
            .nav-indicator{
                position: absolute;
                left: 0;
                bottom: 0;
                height: 5px;
                transition: .4s;
                border-radius: 8px 8px 0 0;
            }
            body{
                background-color: #1e2020d4;
                justify-content: center;
                color: #fff;
            }
            .work-type a{
                position: relative;
                background-color: lightgray;
                border-radius: 8px 8px 0 0;
            }
            h1, h5{
                color: lightgreen;
                height: 40px;
            }
            h3{
                color: #ffffff;
                text-align: center;
            }
            .content{
                background-image: url("img/Abstract Design.png");
                text-align: center;
                align-items: center;
                box-shadow: 0 10px 25px 0 rgb(0, 0, 0, 0.75);
            }
            .for-content{
                display: flex;
                height: 15vh;
                justify-content: space-around;
                font-family: "valeraa round", sans-serif;
            }
            .section-1{
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
                margin: 0 auto;
                gap: 1rem;
                max-width: 1200px;
                color: #fff;
                justify-content: space-around;
                align-items: center;
            }
            .for-container{
                justify-content: center;
                border: #1e2020d4 solid;
                text-align: center;
            }
            .work-content{
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
                margin: 0 auto;
                gap: 1rem;
                max-width: 1200px;
                color: #fff;
                align-items: center;
                margin-bottom: 20px;
            }
            .work-type{
                border:#1e2020d4 solid;
                font-family: Arial, Helvetica, sans-serif;
            }
            .footer-container {
                background-color: #1e2020d4;
                display: flex;
                justify-content: space-around;
                align-items: center;
                box-shadow: 0 10px 25px 0 rgb(0, 0, 0, 0.75);
                border-bottom: 30px;
            }
            .contact{
                box-shadow: 0 10px 25px 0 rgb(0, 0, 0, 0.75);
                align-items: center;
            }
            .footer{
                text-align: right;
            }
         </style>
        <script>
            const indicator = document.querySelector('.nav-indicator');
            const items = document.querySelector('.nav-item');

            function handleIndicator(el){
                items.forEach(item => {item.classList.remove('is-active');
                    item.removeAttribute('style');
                    
                })

                const elementColor = el.dataset.activeColor;
                const target = el.dataset.target;
                //style de l'indicateur
                indicator.style.width = `${el.offsetWidth}px`;
                indicator.style.backgroundColor = elementColor;
                indicator.style.left = `${el.offsetLeft}px`;
                
                //ajout de classe active
                el.classList.add('is-active');
                el.style.color = elementColor;
            }
            items.forEach((item, index) => {
                item.addEventListener('click', e =>{
                    handleIndicator(e.target)
                });
                item.classList.contains('is-active') &&handleIndicator(item);
            });

        </script>
    </head>
    <body>
        <header>
            <div class="navigation">
                <nav>
                   <a class="nav-item" data-active-color="orange" data-target="Accueil" href="<?php echo e(url('/accueil')); ?>">Accueil</a>
                   <a class="nav-item" data-active-color="green" data-target="Service" href="<?php echo e(url('/services')); ?>">Service</a>
                   <a class="nav-item" data-active-color="blue" data-target="Travaux" href="<?php echo e(url('/travaux')); ?>">Travaux</a>
                   <a class="nav-item" data-active-color="red" data-target="Processus" href="<?php echo e(url('/processus')); ?>">Proccessus</a>
                   <a class="nav-item is-active" data-active-color="rebeccapurple" data-target="Propos" href="#">Propos</a>
                   <a class="nav-item" data-active-color="orangered" data-target="Carrière" href="<?php echo e(url('/carrieres')); ?>">Carrière</a>
                   <a class="nav-item" data-active-color="lightblue" data-target="Contacts" href="<?php echo e(url('/contact')); ?>">Contacts</a>
                   <span class="nav-indicator"></span>
                </nav>
            </div>
        </header>

        <div class="content">
            <h2>A Propos de Nous</h2>
            <p>
               Bienvenu à ABDG,où la collaboration,l'expertise,l'approche client sont réunis
               pour garantir une innovation digitale future
            </p>
        </div>
        <div class="content">
            <h3>A ABDG</h3>
            <p>
                ABDG est une agence de production digital passionnée dans d'exceptionnelles
                expériences digitales. Nous sommes spécialisées en Design,Ingenieurie,Management
                des Projets et accompagment business digital. Nous suivons un processus 
                collaboratif et structural pour vous assurer de produits digitaux exceptionnels.
            </p>
        </div>
        <div class="work-content">
            <div class="work-type">
                <div class="pocess-tit">
                  <h1>01</h1><h5>Design</h5>
                </div>
                <div class="work-exp">
                    <p>
                        Dans un monde dominé par la technologie, un groupe de Designers talentieux
                        se sont regroupés avec une vision commune. Ils croient que le designe 
                        transerait la manière dont les gens interagissent vec le digital.
                        Avec leur passion pour l'esthétique et la visibilté, ils fondent un 
                        département de design à ABDG. Leur vision était de créer d'extraordinaire
                        visuels et interfaces qui facineront le monde.
                    </p>
                </div>
            </div>
            <div class="work-type">
                <div class="pocess-tit">
                  <h1>02</h1><h5>Ingenieurie</h5>
                </div>
                <div class="work-exp">
                    <p>
                       Depuis longtemps, une équipe de brillants ingénieurs se sont la tache 
                       d'innover le digital. Par leurs expertises en codaage et développement,
                       ils fondent la division d'ingenieurie  de ABDG. Ils ont la ferme conviction
                       que la technologie a le pouvoir de transformer les idées en réalités.
                       Leur mission était de créer de produits digitaux robustes et pointus. 
                    </p>
                </div>
            </div>

            <div class="work-type">
                <div class="pocess-tit">
                  <h1>03</h1><h5>Management de Projet</h5>
                </div>
                <div class="work-exp">
                    <p>
                       Dans le but de créativité et d'esprit technique, un groupe d'organisateur de projets
                       se sont regroupé. Ils ont compris l'importance de la communication éffective,
                       l'organisation et l'exécution éfficce. Avec leurs compétences en planification et
                       de coordination,ils fondirent le département de Manager de Projet à ABDG.
                       Leur mission était d'assurer que tout projet s'exécute en parfait accord 
                       en temps d'exécution et les ressources.
                    </p>
                </div>
            </div>

            <div class="work-type">
                <div class="pocess-tit">
                  <h1>04</h1><h5>Collaboration</h5>
                </div>
                <div class="work-exp">
                    <p>
                       A ABDG, il ya quatre départements qui se sont unis pour donner
                       une coopérative. Elles ont embrassé le pouvoir de collaboration
                       et se sont accordées que leur union répondra plus aux exigences
                       de meilleurs produits digitaux. Selon elles,travailler à l'écoute
                       des clients,comprendre leurs besoins et les menés au succès créatifs
                       elles pourraient donner de rusultats qui surpassent l'entendement. 
                    </p>
                </div>
            </div>
            <div class="work-type">
                <div class="pocess-tit">
                  <h1>05</h1><h5>Approche Clients</h5>
                </div>
                <div class="work-exp">
                   <p>
                    Le succès de ABDG n'est pas seulement grace à ses experts,mais 
                    aussi c'est avec son attention complice à ses clients. Nos experts 
                    placent les clients au centre de chaque tache qu'ils font. Ils prennent 
                    le temps d'écouter, comprendre leurs défies uniques et detaillent les 
                    travaux répondants aux exigences de client. Leur mission, devenir 
                    un partenaire confiant dans leur aventure digital
                   </p>
                </div>
            </div>
            <div class="work-type">
                <div class="pocess-tit">
                  <h1>06</h1><h5>Succès garantie</h5>
                </div>
                <div class="work-exp">
                   
                   <p>
                       Avec chaque projet,notre réputation grandit.les portfolios de nos
                       experts s'étendent pour inclure divers domaines industriels.
                       Chez nous pour établir des entreprises, faites confiance à ABDG
                       pour ses expertises en création de produits digitaux qui promettent
                       de résultats tangibles.Le succès de notre coopération est conduit
                       par notre passion à l'innovation, à notre création de qualité et
                       acharnement à vous aider à réussir dans le monde digital.
                    </p>
                </div>
            </div>
            
        </div>
    

        <footer>
            <div class="footer-container">
                <h5>Contacts</h5>
                <div class="contact-item">
                    <a href="#"><img src="<?php echo e(asset('icon/whatsapp.png')); ?>">whatsapp</a>
                </div>
                <div class="contact-item">
                    <a href="#"><img src="<?php echo e(asset('icon/facebook.png')); ?>">facebook</a>
                </div>
                <div class="contact-item">
                    <a href="#"><img src="<?php echo e(asset('icon/gmail.png')); ?>">Gmail</a>
                </div>
            </div>
            <div class="footer" style="color:orangered"> &copy 2024 ABDG, All rights reserved</div>
        </footer>
    </body>
</html><?php /**PATH C:\Users\USER\gradient\resources\views\a_propos.blade.php ENDPATH**/ ?>