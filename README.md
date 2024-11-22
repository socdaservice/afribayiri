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

 <header>
            <div class="navigation">
              <nav>
                <a class="nav-item is-active" data-active-color="orange" data-target="Accueil" href="https://github.com/socdaservice/afribayiri.com/blob/master/html/acceil.html">Accueil</a>
                <a class="nav-item" data-active-color="green" data-target="Services" href="https://github.com/socdaservice/afribayiri.com/blob/master/html/service.html">Services</a>
                <a class="nav-item" data-active-color="blue" data-target="Travaux" href="https://github.com/socdaservice/afribayiri.com/blob/master/html/travaux.html">Travaux</a>
                <a class="nav-item" data-active-color="red" data-target="Processus" href=(https://github.com/socdaservice/afribayiri.com/blob/master/html/processus.html)">Proccessus</a>
                <a class="nav-item" data-active-color="rebeccapurple" data-target="Propos" href="https://github.com/socdaservice/afribayiri.com/blob/master/html/propos.html">Propos</a>
                <a class="nav-item" data-active-color="orangered" data-target="Carrière" href="https://github.com/socdaservice/afribayiri.com/blob/master/html/carrieres.html">Carrière</a>
                <a class="nav-item" data-active-color="lightblue" data-target="Contacts" href="https://github.com/socdaservice/afribayiri.com/blob/master/html/contact.html">Contacts</a>
                <span class="nav-indicator"></span>
              </nav>
            </div>
        </header>
