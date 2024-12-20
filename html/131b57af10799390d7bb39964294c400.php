<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=dievice-width, initial-scle=1.0">
        <title>Services</title>
        <style>
            body{
                color: #fff;
            }
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
            h3{
                color: #ffffff;
                text-align: center;
            }
            .content{
                background-image: url("img/Abstract Design.png");
                text-align: center;
                align-items: center;
                border: #333 solid;
            }
            .service-content{
                background-color: #1d1f1fd4;
                justify-content: center;
                align-items: center;
                border: #1e2020d4 solid;
                box-shadow: 0 10px 25px 0 rgb(0, 0, 0, 0.75);
            }
            .title-service{
                font-size: 15px;
                color: #ffffff;
                text-align: center;
            }
            .service-type{
                align-items: center;
                border: #1e2020d4 solid;
            }
            .user-exp{
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                margin: 0 auto;
                gap: 1rem;
                max-width: 1200px;
                color: #fff;
                border: #1e2020d4 solid;
            }
            img{
                align-content: center;
                justify-content: center;
                align-items: center;
            }
            .item{
                align-items: center;
                justify-content: center;
                border: #1e2020d4 solid;
            }
            .footer-container {
                background-color: #1e2020d4;
                display: flex;
                min-height: 5vh;
                justify-content: space-around;
                align-items: center;
                box-shadow: 0 10px 25px 0 rgb(0, 0, 0, 0.75);
                border-bottom: 30px;
            }
            .contact{
                background-color: #ffffff;
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
                  <a class="nav-item is-active" data-active-color="green" data-target="Service" href="#">Service</a>
                  <a class="nav-item" data-active-color="blue" data-target="Travaux" href="<?php echo e(url('/travaux')); ?>">Travaux</a>
                  <a class="nav-item" data-active-color="red" data-target="Processus" href="<?php echo e(url('/processus')); ?>">Proccessus</a>
                  <a class="nav-item" data-active-color="rebeccapurple" data-target="Propos" href="<?php echo e(url('/a_propos')); ?>">Propos</a>
                  <a class="nav-item" data-active-color="orangered" data-target="Carrière" href="<?php echo e(url('/carrieres')); ?>">Carrière</a>
                  <a class="nav-item" data-active-color="lightblue" data-target="Contacts" href="<?php echo e(url('/contact')); ?>">Contacts</a>
                  <span class="nav-indicator"></span>
                </nav>
            </div>
        </header>
        <div class="content">
            <h2>Nos Services</h2>
            <p>
               Transformez vos idées avec nos innovantes solutions digitaux qui captivent and engagent vos audiences.
            </p>
        </div>
        <div class="service-content">
            <div class="title-service">
                Design
                <p>A ABDG, notre équipe de design est passionnante au sujet de créativité,de designs affectueux plus attrayants
                pour vos audiences et augmenteront la valeur de votre mark. Nous croyons que de designs élégants ne sont pas seulement
                à but esthétiques;c'est une création approximative et intuitive selon l'expérience de l'utilisateur.</p>
            </div>
            <h3>Nos services de design inclus:</h3>
            <div class="service-type">
                <h3>Expérience d'Utilisteur (UX)Design</h3>
                <div class="user-exp">
                    <div class="item">
                        <img src="<?php echo e(asset('icon/&.png')); ?>">
                        <h4>Recherche et </h4>
                        <h4>Développement personnel</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/et.png')); ?>">
                        <h4>Architecture d'information</h4>
                        <h4> et acheminement</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/_.png')); ?>">
                        <h4>Prototypage interactive et</h4>
                        <h4> Test d'utilisateur</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/a.png')); ?>">
                        <h4>Design UI et Création de Visuel </h4>
                    </div>
                       
                </div>
                <h3>Nouvelle création et Identité visuelle </h3>
                <div class="user-exp">

                    <div class="item">
                        <img src="<?php echo e(asset('icon/y.png')); ?>">
                        <h4>Création de Logo</h4>
                        <h4> et Développement d'identité visuelle</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/u.png')); ?>">
                        <h4>Strategie de création et</h4>
                        <h4> de Positionnement</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/i.png')); ?>">
                        <h4>Création de Guide d'utilistion </h4>
                        <h4>et style de Guides</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/o.png')); ?>">
                        <h4>Designs Collateraux de Markrting </h4>
                        <h4>(Brochures, Carte Business, etc...)</h4>
                    </div>
                </div>
                <h3>Design (UI) d'Interface Utilisteur </h3>
                <div class="user-exp">
                   
                    <div class="item">
                        <img src="<?php echo e(asset('icon/z.png')); ?>">
                        <h4>Design d'Interface Intuitive</h4>
                        <h4> et visuels Attractifs</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/e.png')); ?>">
                        <h4>Création d'icone d'Utilisteur</h4>
                        <h4> et Illustrations</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/r.png')); ?>">
                        <h4>Prototypage et Palette </h4>
                        <h4>de Selection de coleurs</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/t.png')); ?>">
                        <h4>Designs Dynamiques </h4>
                        <h4>pour divers Services</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="service-content">
            <div class="title-service">
                Engenieurie
                <p>Notre équipe d'Ingénieurs combine des expertises techniques avec une innivation passionnantes à construire 
                    des solutions digitales robustes et évolutives. Nous évalions les dernières technologies et les meilleurs 
                   pratiques pour founir des applications de hautes performances selon vos besions. 
                </p>
            </div>
            <h3>Nos services d'ingenieurie inclus:</h3>
            <div class="service-type">
            <h3>Développmement Web</h3>
                <div class="user-exp">
                    
                    <div class="item">
                        <img src="<?php echo e(asset('icon/q.png')); ?>">
                        <h4>Développement Front-End </h4>
                        <h4>(HTML, CSS, JavaScript)</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/s.png')); ?>">
                        <h4>Développement Back-End </h4>
                        <h4>( PHP, Python, Ruby)</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/d.png')); ?>">
                        <h4>Développement en Content Management System (CMS)</h4>
                        <h4> (WordPress, Drupal)</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/f.png')); ?>">
                        <h4>Développement de plateforme E-Commerce</h4>
                        <h4>(Magento, Shopify)</h4>
                    </div>
                       
                </div>
                <h3>Développement d'Application Mobile </h3>
                <div class="user-exp">
                    
                    <div class="item">
                        <img src="<?php echo e(asset('icon/g.png')); ?>">
                        <h4>Développement de Native iOS</h4>
                        <h4> et Android App</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/h.png')); ?>">
                        <h4>Coss-platform App Development</h4>
                        <h4> (React Native, Flutter)</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/j.png')); ?>">
                        <h4>Prototypage D'Application </h4>
                        <h4>et Intégration au Design UI/Ux</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/k.png')); ?>">
                        <h4>Test d'Application </h4>
                        <h4>Déploiement et Maintenance</h4>
                    </div>
                </div>
                <h3>Développement de Logiciel Clients </h3>
                <div class="user-exp">
                    
                    <div class="item">
                        <img src="<?php echo e(asset('icon/l.png')); ?>">
                        <h4>Développement de Logiciels d'Entreprise</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/m.png')); ?>">
                        <h4>Service de Développement d'Application</h4>
                        <h4> Web </h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/un.png')); ?>">
                        <h4>Intégrtion aux Systèmes </h4>
                        <h4>et APIs</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/1.png')); ?>">
                        <h4>Modelisation de systèmes Robustes </h4>
                        <h4>et Migrtions</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="service-content">
            <div class="title-service">
                Managements des Projets
                <p>
                    Notre équipe d'experts de Managements de Projets assure que vos Projets
                    soient delivrés selon votre calendrier,incluand votre budget et en accord
                    vos spécifications. Nous suivons la methodologie de standardisation
                    industrielle et utilisons une communication éffective et des outils de 
                    collaboration pour rester informés de l'évolution des processus.
                </p>
            </div>
            <h3>Nos services de mamenagement des projects inclus:</h3>
            <div class="service-type">
                <h3>Planification et anlyse </h3>
                <div class="user-exp">
                    
                    <div class="item">
                        <img src="<?php echo e(asset('icon/2.png')); ?>">
                        <h4>Rassemblement des exigences </h4>
                        <h4>et analyse</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/3.png')); ?>">
                        <h4> Plan de Projet </h4>
                        <h4>et calendrier de Développement</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/4.png')); ?>">
                        <h4>Allocation des ressources</h4>
                        <h4>et spécifiction des taches</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/5.png')); ?>">
                        <h4>Evaluation des risques et</h4>
                        <h4>Stratégie de contenance</h4>
                    </div>
                       
                </div>
                <h3>Développement Souple </h3>
                <div class="user-exp">
                    
                    <div class="item">
                        <img src="<?php echo e(asset('icon/5.png')); ?>">
                        <h4> Directive de Développement </h4>
                        <h4> et optimisation</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/7.png')); ?>">
                        <h4>Methodologie d'Implantation</h4>
                        <h4> de Scrum ou de Kanban</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/8.png')); ?>">
                        <h4>mise à jour régulière de </h4>
                        <h4>l'avancement des projets et des demonstrations</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/9.png')); ?>">
                        <h4>Améliortion continue et </h4>
                        <h4>Incorportion suggestive</h4>
                    </div>
                </div>
                <h3>Assurance Qualité et Test </h3>
                <div class="user-exp">
                    
                    <div class="item">
                        <img src="<?php echo e(asset('icon/11.png')); ?>">
                        <h4>Planification de teste et Exécution</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/22.png')); ?>">
                        <h4>Teste d'Utilisation et</h4>
                        <h4>de fonctionnement</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/33.png')); ?>">
                        <h4>Teste de Sécurité et </h4>
                        <h4>de Performance</h4>
                    </div>
                    <div class="item">
                        <img src="<?php echo e(asset('icon/44.png')); ?>">
                        <h4>Recherche d'erreurs de fonctionnement </h4>
                        <h4>et Résolution des cas</h4>
                    </div>
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
</html><?php /**PATH C:\Users\USER\gradient\resources\views\services.blade.php ENDPATH**/ ?>