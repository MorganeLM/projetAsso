<?php
    require_once 'include/connect.php';
    session_start();

    require_once 'include/navbar.php';
?>
<main>
    <section id="accueil">
        <img src="images/image.png" alt="visuel">
        <div>
            <h1>Bienvenue dans l'Assosystème</h1>
            <p id="question">Vous êtes ?</p>
            <p>
                <a href="<?=URL.'/page_projets.php' ?>">
                    <button type="button">Un.e Bénévole <i class="las la-angle-double-right"></i> Voir les projets</button>
                </a>
            </p>
            <p>
                <a href="<?=URL.'/page_assos.php' ?>">
                    <button type="button">Une Association <i class="las la-angle-double-right"></i> Proposer votre projet</button>
                </a>
            </p>
        </div>
    </section>
    
    <!-- Partie pour les bénévoles -->
    <section id="benevole">
        <div class="bloc">
            <i class="las la-users"></i>
            <p>Cher futur bénévole ...</p>
            <p>Vous souhaitez aider une asso ? Vous avez des compétences particulières ? Contribuez à un projet associatif qui vous tente en explorant la plateforme.</p>
            <button type="button">Voir les projets actuels</button>
        </div>
    </section>
    <!-- Partie pour les asso -->
    <section id="asso">
        <div class="bloc">
            <i class="las la-network-wired"></i>                    
            <p>Chère association ...</p>
            <p>Trouver des bonnes volontés pour vos projets en cours ou en préparation.</p>
            <button type="button">Poster votre projet</button>
        </div>
    </section>

    <section id="about">
        <h2>
            A propos
        </h2>
        <div>
            <h3>Pourquoi cette plateforme ?</h3>
            <div>
                <p>L'ADN du projet du Collectif du Ramier est de fédérer tous les acteurs de la
                    Transition écologique à Toulouse. Associations de tout type constituent le Collectif (Nature,
                    Sport & Culture) et portent l'idée de faire de l'île du Ramier un coeur dynamisant l'écosystème
                    associatif dans la Métropole et ses alentours. Cette plateforme a été créée en réponse à un
                    besoin des associations d'une part à connaitre les projets portées par les autres associations,
                    et d'autre part à la volonté d'avoir un outil unique de mise en relation entre projets et
                    bénévoles potentiels. </p>
                <img src="images/ileramier1.jpg" alt="plan ile ramier dessin">
            </div>
            <p>Pour en savoir plus sur <a href="https://sites.google.com/lecollectifduramier.org/site/accueil">le Collecif du Ramier</a></p>
        </div>
    </section>

    <section>
            <h2>Nous contacter</h2>
            <form id="contact">
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
                <p>Ou directement à : ecosysteme@collectif-du-ramier.fr</p>
            </form>
    </section>
</main>

</body>

</html>