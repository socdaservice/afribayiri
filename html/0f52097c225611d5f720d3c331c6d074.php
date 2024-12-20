<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Works</title>
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
                border-radius: 8px 8px 1px 2px;
            }
            h3{
                color: #ffffff;
                text-align: center;
            }
            .content{
                background-image: url("img/Abstract Design.png");
                color: #fff;
                text-align: center;
                align-items: center;
                border: #333 solid;
            }
            .work-content{
                background-color: #1d1f1fd4;
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
                <a class="nav-item" data-active-color="green" data-target="Service" href="<?php echo e(url('/services')); ?>">Service</a>
                <a class="nav-item is-active" data-active-color="blue" data-target="Travaux" href="#">Travaux</a>
                <a class="nav-item" data-active-color="red" data-target="Processus" href="<?php echo e(url('/processus')); ?>">Proccessus</a>
                <a class="nav-item" data-active-color="rebeccapurple" data-target="Propos" href="<?php echo e(url('/a_propos')); ?>">Propos</a>
                <a class="nav-item" data-active-color="orangered" data-target="Carrière" href="<?php echo e(url('/carrieres')); ?>">Carrière</a>
                <a class="nav-item" data-active-color="lightblue" data-target="Contacts" href="<?php echo e(url('/contact')); ?>">Contacts</a>
                <span class="nav-indicator"></span>
            </nav>
            </div>
        </header>

        <div class="content">
            <h2>Nos Travaux</h2>
            <p>
               Découvrez un portfolio de hautes gammes de visuelles et de projets digitaux stratégiques
               qui prouvent notre créativité et expériences.
            </p>
        </div>
        <div class="content">
            <h3>A ABDG</h3>
            <p>
                Nous avons eu les privilèges de travailler avec divers clients 
                et mené à bien plusieurs projets à terme.
            </p>
        </div>
        <div class="work-content">
            <div class="work-type">
               Plateforme E-Commerce moderne
                <div class="work-exp">
                <img src="<?php echo e(asset('img/')); ?>">
                <h4>Chic Boutique</h4>
                <a href="#">https://chicboutique.com</a>
                <p>
                    Nous avons développé une Plateforme E-Commerce pour chic Boutique,un renommé
                    detaillant de produits de mode. La platforme fonctionne par une navigation
                    pour visiter les produits, intégration d'un payement sécurisé and des recommandations
                    personnalisées,resultant à une hausse de satisfaction des clients.
                </p>
                </div>
            </div>
            <div class="work-type">
              Application Mobile pour un service de livraison de Nourriture
                <div class="work-exp">
                   <img src="<?php echo e(asset('img/')); ?>">
                   <h4>Hangrybites</h4>
                  <a href="#">https://hangrybites.com</a>
                   <p>
                       hangrybites nous a approché pour l création d'une application mobile
                       pour mettre en ligne de leur service en ligne de livraison. L'application
                       inclus les fonction de commande à temps réel,menu facile de commande et
                       et une option de payement sécurisé, améliorant la satisfaction clientel.
                    </p>
                </div>
            </div>
            <div class="work-type">
                Bookin et Système de réservation d'organisation évènementielle
                <div class="work-exp">
                   <img src="<?php echo e(asset('img/')); ?>">
                    <h4>EventMasters</h4>
                    <a href="#">https://eventmasters.com</a>
                    <p>
                        EventMsters avait besoin d'un système cohérent de réservation et de booking
                        pour leurs services d'organisation évènementielle. Nous avons développé 
                        une plateforme clients permettant l'enregistrement de pareil évènement 
                        en les étiquettant avant l'organisation,favorisant les processus en ligne
                        et augmente l'expérience des clients.
                    </p>
                </div>
            </div>
            <div class="work-type">
                Logiciel Client pour automatisation de workflow
                <div class="work-exp">
                   <img src="<?php echo e(asset('img/')); ?>">
                    <h4>ProTech Solutions</h4>
                    <a href="#">https://protechsolutions.com</a>
                    <p>
                       hangrybites nous a approché pour l création d'une application mobile
                       pour mettre en ligne de leur service en ligne de livraison. L'application
                       inclus les fonction de commande à temps réel,menu facile de commande et
                       et une option de payement sécurisé, améliorant la satisfaction clientel.
                    </p>
                </div>
            </div>

            <div class="work-type">
                Portail web pour lister en temps réel les Etats
                <div class="work-exp">
                   <img src="<?php echo e(asset('img/')); ?>">
                    <h4>Dream Homes Realty</h4>
                    <a href="#">https://dreamhomesrealty.com</a>
                    <p>
                       Dream Homes Realty voulait un portail web intuitive pour publier
                       la liste de leurs propriétes en ligne. Nous avons créé une plateforme
                       attractive avec un filtre de recherche avancé,une interface utilisateur
                       amusant permettant aux acheteurs potentiels de trouver facilement
                       des locations.
                    </p>
                </div>
            </div>

            <div class="work-type">
                Logiciel client pour Supply Chain Management
                <div class="work-exp">
                   <img src="<?php echo e(asset('img/')); ?>">
                    <h4>Global Logiciels Solutions</h4>
                    <a href="#">https://globallogisticssolutions.com</a>
                    <p>
                       Globl Logistics Solutions exigeait un logiciel client pour mettre
                       en ligne leurs demandes d'opérations d'offres. Nous avons développé
                       un système échelonné qui optimise les inventaires d'organisation,
                       automatise leurs processus de commande et augmente leur situation
                       logistiques tout en réduisant les couts
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
</html><?php /**PATH C:\Users\USER\gradient\resources\views\travaux.blade.php ENDPATH**/ ?>