<?php
    require_once 'include/navbar.php';
?>
    <div class="container">
        <main>
            <p>a</p>
            <section id="accueil"></section>
            <div class="card text-center m-5">
                <img src="images/image.png" class="card-img-top" alt="visuel collectif du ramier">
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <h5 class="card-title">Vous êtes ?</h5>
                <button type="button" class="btn bg-light ml-5 mr-5">Un.e Bénévole</button>
                <button type="button" class="btn bg-light ml-5 mr-5 mb-3 mt-1">Une Association</button>
            </div>
            </section>
            <!-- Partie pour les bénévoles -->
            <section id="benevole">
                <div class="card text-center m-5 p-5">
                    <i class="las la-handshake" style="font-size: 3em;"></i>
                    <h5 class="card-title">Cher futur bénévole ...</h5>
                    <p class="card-text">Vous souhaitez aider une asso ? Vous avez des compétences particulières ? Contribuez à un projet associatif qui vous tente en explorant la plateforme.</p>
                    <button type="button" class="btn bg-light">Voir les projets actuels</button>
                </div>
            </section>
            <!-- Partie pour les asso -->
            <section id="asso">
                <div class="card text-center m-5 p-5">
                    <i class="las la-network-wired" style="font-size: 3em;"></i>                    
                    <h5 class="card-title">Chère association ...</h5>
                    <p class="card-text">Trouver des bonnes volontés pour vos projets en cours ou en préparation.</p>
                    <button type="button" class="btn bg-light">Poster votre projet</button>
                </div>
            </section>
        </main>
    </div>
    <div class="container">
        <footer>
            <div class="card m-5">
                <div class="card-header">
                    A propos
                </div>
                <div class="card-body">
                    <h5 class="card-title">Pourquoi cette plateforme ?</h5>
                    <p class="card-text">L'ADN du projet du Collectif du Ramier est de fédérer tous les acteurs de la
                        Transition écologique à Toulouse. Associations de tout type constituent le Collectif (Nature,
                        Sport & Culture) et portent l'idée de faire de l'île du Ramier un coeur dynamisant l'écosystème
                        associatif dans la Métropole et ses alentours. Cette plateforme a été créée en réponse à un
                        besoin des associations d'une part à connaitre les projets portées par les autres associations,
                        et d'autre part à la volonté d'avoir un outil unique de mise en relation entre projets et
                        bénévoles potentiels. </p>
                    <img src="images/ileramier1.jpg" alt="plan ile ramier dessin" style="width: 10%;">
                    <img src="images/ileramier2.jpg" alt="plan ile ramier photo satellite" style="width: 10%;">
                    <a href="https://sites.google.com/lecollectifduramier.org/site/accueil" class="btn btn-primary">Pour
                        en savoir plus sur le Collecif du Ramier</a>
                    <hr>
                    <h5 class="card-title">Nous contacter</h5>
                    <form>
                        <div class="form-group">
                            <label for="nominput">Nom</label>
                            <input type="text" class="form-control" id="nominput" placeholder="...">
                        </div>
                        <div class="form-group">
                            <label for="emailinput">Adresse email</label>
                            <input type="email" class="form-control" id="emailinput" placeholder="..@..">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                rows="3">Votre message, vos suggestions ...</textarea>
                        </div>
                    </form>
                    <p class="card-text">Ou directement à : ecosysteme@collectif-du-ramier.fr</p>
                </div>
            </div>

        </footer>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>