<?php
    require_once 'include/connect.php';
    session_start();

    require_once 'include/navbar.php';
?>
<main>
    <section id="accueil">
        <img src="images/arbre.svg" alt="visuel">
        
        <p class="question">Vous êtes ?</p>
        
        <a href="<?=URL.'/page_projets.php' ?>">
            <button type="button">Un.e Bénévole <i class="las la-angle-double-right"></i> Voir les projets</button>
        </a>
        <a href="<?=URL.'/page_assos.php' ?>">
            <button type="button">Une Association <i class="las la-angle-double-right"></i> Proposer votre projet</button>
        </a>
    </section>
    
    <!-- Partie pour les bénévoles -->
    <section id="benevole">
        <div>
            <i class="las la-handshake" style="font-size: 3em;"></i>
            <h5>Cher futur bénévole ...</h5>
            <p>Vous souhaitez aider une asso ? Vous avez des compétences particulières ? Contribuez à un projet associatif qui vous tente en explorant la plateforme.</p>
            <button type="button">Voir les projets actuels</button>
        </div>
    </section>
    <!-- Partie pour les asso -->
    <section id="asso">
        <div>
            <i class="las la-network-wired" style="font-size: 3em;"></i>                    
            <h5>Chère association ...</h5>
            <p>Trouver des bonnes volontés pour vos projets en cours ou en préparation.</p>
            <button type="button">Poster votre projet</button>
        </div>
    </section>

    <section>
        <h2>
            A propos
        </h2>
        <div>
            <h3>Pourquoi cette plateforme ?</h3>
            <p>L'ADN du projet du Collectif du Ramier est de fédérer tous les acteurs de la
                Transition écologique à Toulouse. Associations de tout type constituent le Collectif (Nature,
                Sport & Culture) et portent l'idée de faire de l'île du Ramier un coeur dynamisant l'écosystème
                associatif dans la Métropole et ses alentours. Cette plateforme a été créée en réponse à un
                besoin des associations d'une part à connaitre les projets portées par les autres associations,
                et d'autre part à la volonté d'avoir un outil unique de mise en relation entre projets et
                bénévoles potentiels. </p>
            <img src="images/ileramier1.jpg" alt="plan ile ramier dessin" style="width: 10%;">
            <img src="images/ileramier2.jpg" alt="plan ile ramier photo satellite" style="width: 10%;">
            <a href="https://sites.google.com/lecollectifduramier.org/site/accueil">Pour
                en savoir plus sur le Collecif du Ramier</a>
            <hr>
            <h3>Nous contacter</h5>
            <form>
                <div>
                    <label for="nominput">Nom</label>
                    <input type="text" id="nominput" placeholder="...">
                </div>
                <div>
                    <label for="emailinput">Adresse email</label>
                    <input type="email" id="emailinput" placeholder="..@..">
                </div>
                <div >
                    <label for="message">Message</label>
                    <textarea id="message">Votre message, vos suggestions ...</textarea>
                </div>
            </form>
            <p>Ou directement à : ecosysteme@collectif-du-ramier.fr</p>
        </div>
    </section>
</main>

</body>

</html>