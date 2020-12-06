
<?php 

include '../../Includes/header.php';

?>


                                    <!-- Partie photo de couverture-->

    <div class="backgroundCover">
        <div class="cover">
            <!-- AVATAR -->
            <img src="img/avatar1.png" class="avatar col-12 col-md-6 col-lg-3">

            <!-- Titre + TEXTE ANIMATION -->
            <div class="titre col-12 col-md-6 col-lg-3">
                <div class="talk-bubble tri-right  round left-top">
                    <div class="talktext ">
                        <div class="MyDescription ">
                            <p ID="MyTextDescription">Coucou, je m'appelle Amalshia et je veux vous faire découvrir ma passion pour l'illustration à travers ce site que je mettrais à jour fréquemment.
                            Ce site à pour but de vous faire partager mes créations et aussi me faire connaitre dans ce milieu afin de faire de ma passion ma vocation. Merci de votre visite, j'espère que mes créations vous plairont 😊</p>
                        </div>             
                    </div>
                </div>
            </div>
            
        </div>
    </div>
<br>


                <!-- Partie STYLE-->
    <div class="bg-style">
        <div class="row"> <!--bootstrap fonctionne sur une grille de 12 On peut donc avoir une row avec 4 colonnes de 3-->
            
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <a href="../Page1_Traditionnel/index.php">
                    <div class=" CaseStyle projet4">
                        <img src="img/traditionnel.png" class="buttonMenu"alt="">
                    </div>
                </a>     
            </div>
        

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <a href="../Page2_Digital/index.php" >
                    <div class=" CaseStyle projet4">
                        <img src="img/digital.png" class="buttonMenu"alt="">
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <a href="../Page3_Professionel/index.php">
                    <div class=" CaseStyle projet4">
                        <img src="img/Professionnel.png" class="buttonMenu"alt="">
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <a href="../Page4_Shop/index.php">
                        <div class=" CaseStyle projet4">
                            <img src="img/starwhite.png" class="buttonMenu"alt="">
                        </div>
                    </div>
                    </a>
                    
            </div>
        </div> <!--Fin de la div Row-->
    </div> <!--fin backgroundCover-->

<!-- EXEMPLE DE CREATION -->         
    <div class="container">
        <div class="LastCreaDiv col-12 col-md-6 col-lg-12">
            <h3>Mes dernières créations</h3>
            <div class="LastCrea ">
                <img src="img/Tradi_crayons04_2020.png" alt="" class="col-6 col-md-6 col-lg-5">
                <img src="img/Tradi_Portrait03_2019.png" alt="" class="col-6 col-md-6 col-lg-5">
            </div>
        </div>
    </div>



                                        <!-- Partie CONTACT-->
    
    <p id="CONTACT"><br></p>                
    <div class="contact">
        <div class="container text-center">
           
            <h2 class="TitleContact">Contact</h1>
                                    <!--formulaire  contact-->
           <div class="col-lg-10 mx-auto">
                <form action="" class="contact-form"> <!--balise pour indiquer le formulaire-->
                    <div class="form-group shadowblock">
                            <label for="name" class="d-none ">Téléphone</label> 
                            <input type="text" name="name" id="Nom" placeholder="Nom" class="form-control">
                    </div>
                        
                    <div class="form-group shadowblock">
                            <label for="email" class="d-none">Email</label> 
                            <input type="email" name="email" id="email" placeholder="Adresse email" class="form-control">
                    </div>

                    <div class="form-group shadowblock">
                        <label for="phone" class="d-none">Téléphone</label> 
                        <input type="phone" name="phone" id="phone" placeholder="Téléphone" class="form-control">
                    </div>

                    <label for="message"></label>
                    <textarea name="message" id="message" cols="60" rows="10" placeholder="Message" class="TextContact form-control shadowblock"></textarea>
        <!--le block du texte se réduit rapidement a partir d'une certaine zone à régler-->
        <!--le block du texte se réduit rapidement a partir d'une certaine zone à régler-->
  
                  


                    <div class="Send"><button>Envoyer</button></div>
                    
                <!--envoyer un mail -->
                <a  class="envoyermail" href="mailto:michael-goth@hotmail.fr">Envoyer mail</a>
                </form>
            </div> <!-- fin formulaire-->
        </div>


            <br/><br/><br/>
    </div>
    <a href="">
    

    </a>
  
    <?php 
        include '../../Includes/footer.php';
    ?>
