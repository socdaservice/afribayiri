<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacts</title>
        <style>
            body{
                background-color: #1e2020d4;
                justify-content: center;
                color: #fff;
            }
            .add{
                display: flex;
                justify-content: space-between;
                right: 45%;
                margin-bottom: 30px;
            }
            .add-item{
                background-color: lightgrey;
                border: solid gray;
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
            form{
                margin-bottom: 30px;
            }
            .content{
                background-image: url("img/Abstract Design.png");
                text-align: center;
                align-items: center;
                box-shadow: 0 10px 10px 0 rgb(0, 0, 0, 0.75);
            }
            .for-content{
                display: flex;
                height: 15vh;
                justify-content: space-around;
                font-family: "valeraa round", sans-serif;
                margin-bottom: 30px;
            }
            .pict{
                justify-content: center;
                text-align: center;
                margin-bottom: 30px;
            }
            .label-content{
                
                color: #fff;
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
                text-align: center;
                border: #333 solid;
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
                    <a class="nav-item" data-active-color="orange" data-target="Accueil" href="{{ url('/accueil')}}">Accueil</a>
                    <a class="nav-item" data-active-color="green" data-target="Service" href="{{ url('/services')}}">Service</a>
                    <a class="nav-item" data-active-color="blue" data-target="Travaux" href="{{ url('/travaux')}}">Travaux</a>
                    <a class="nav-item" data-active-color="red" data-target="Processus" href="#">Proccessus</a>
                    <a class="nav-item" data-active-color="rebeccapurple" data-target="Propos" href="{{ url('/a_propos') }}">Propos</a>
                    <a class="nav-item" data-active-color="orangered" data-target="Carrière" href="{{ url('/carrieres')}}">Carrière</a>
                    <a class="nav-item is-active" data-active-color="lightblue" data-target="Contacts" href="#">Contacts</a>
                    <span class="nav-indicator"></span>
                </nav>
            </div>
        </header>

        <div class="content">
            <h2>Contactez-nous</h2>
            <p>
               Touchez nous aujourdhui et permettez nous de répondre à vos questions et besoins.
            </p>
        </div>
        <div class="add">
            <div class="add-item">
                <h5><a href="africabayiridevelopmentgroup@gmail.com"><img src="{{asset('icon/gmail.png')}}">africabayiridevelopmentgroup@gmail.com</a></h5>
            </div>
            <div class="add-item">
                <h5><img src="">+226 73666844</h5>
            </div>
            <div class="add-item">
                <h5><img src="">Ouagadougou</h5>
            </div>
        </div>

        <form method="post" action="/inscription">
            <div class="label-content">
                <div class="pict">
                    <img src="{{asset('icon/abdg.jpg')}}" width="20%">
                    <h2>Merci pour l'interet que vous porter à ABDG.</h2>
                    <p>
                        Nous aimerions vous entendre et discuter sur ce que nous pouvons
                        nous pouvons vous aider à rendre votre idée digital viable.
                        voici les conduites ci-dessous pour prendre attache avec nous.
                    </p>
                    <div class="button">
                        <input type="submit" value="Commencer le Projet" name="commencer le Projet">
                    </div>
    
                </div><br>
                
                <div class="for-content">
                    <div class="section">
                      <label for="nom complet">Nom complet</label><br />
                      <input type="text" name="Nom" placeholder="Nom et Prénom" required>
                    </div>
 
                    <div class="section">
                      <label for="email">Email</label><br />
                      <input type="text" name="email" id="email" placeholder="exemple@gmail.com">
                    </div>
                </div>

                <div class="for-container">
                   <label for="vos besions"><h2>Qu'avez-vous besoins ?</h2></label><br />
            
                    <div class="section-1">
                        <div>
                           <input name="web design" value="Web Design" type="checkbox">Web Design<br /><br />
                        </div>
                        <div>
                           <input name="Mobile App Design" value="Mobile App Design" type="checkbox">Design d'Application Mobile
                        </div>
                        <div>
                           <input name="Collaboration" value="Collaboration" type="checkbox">Collaboration<br /><br />
                        </div>
                        <div>
                          <input name="Autres" value="Autres" type="checkbox">Autres
                        </div>
                    </div>
                </div>

               <div class="for-container">
                  <h2>Votre Budget</h2>
                
                    <div class="section">
                        <p>
                           Glisser ci-dessous pour indiquer votre budget.
                        </p>
                       <div class="for-container">
                            <div class="section">
                               <input id="budget_input" type="range" min="0" max="2000000" step="any">
                               <p>Valeur: <output id="value"></output></p> 
                            </div> 
                        </div>
                   </div>
                    <div class="for-container">
                        <div class="section">
                          <label for="message">Decrire vos besions</label><br />
                          <textarea id="message" name="message" placeholder="votre message" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés :  a-zA-Z0-9-_."></textarea><br><br>
                        </div>
                    </div>
                    <div class="button">
                       <input type="submit" value="soumettre" name="soumettre">
                    </div>
                </div>
            </div>
        </form>

        <footer>
            <div class="footer-container">
                <h5>Contacts</h5>
                <div class="contact-item">
                    <a href="#"><img src="{{asset('icon/whatsapp.png')}}">whatsapp</a>
                </div>
                <div class="contact-item">
                    <a href="#"><img src="{{asset('icon/facebook.png')}}">facebook</a>
                </div>
                <div class="contact-item">
                    <a href="#"><img src="{{asset('icon/gmail.png')}}">Gmail</a>
                </div>
            </div>
            <div class="footer" style="color:orangered"> &copy 2024 ABDG, All rights reserved</div>
        </footer>
    </body>
</html>