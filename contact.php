<?php
    session_name("cv-portfolio");
    session_start();

    $page = "contact";
    require_once "inc/header.php";

    if (!empty($_POST) && isset($_POST)) {
        $nom = valid_donnees($_POST["name"]);
        $email = valid_donnees($_POST["email"]);
        $message = valid_donnees($_POST["msg"]);
        $objet = valid_donnees($_POST["objet"])

        if (mail("deoliveiraf.solange@gmail.com", "Réception formulaire de Contact", "Vous avez recu un nouveau message de : " . $nom . "\n" . " - Adresse email : " . $email . "\n" . " - Objet : " . $objet . "\n" . " - Message : " . $message . ' ')) {
            echo "<p class='alert alert-info mt-5' role='alert'>Votre message a été envoyé !</p>";
        } else {
            echo "<p class='alert alert-danger mt-5' role='alert'>Votre message n'a pas été envoyé !</p>";
        }
    }

    function valid_donnees($donnees) {
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }

?>

        <main class="container mt-5 mb-5">
            <div class="form-area mt-5">
                <h3 class="text-center font3">Me Contacter</h3>
                <form action="" method="post" id="form">
                    <p>Nom :</p>
                        <input type="text" name="name" id="name" placeholder="Entrer votre nom ou raison sociale" required>
                    <p>Email :</p>
                        <input type="email" name="email" id="email" placeholder="Entrer votre adresse email" required>
                    <p>Objet :</p>
                        <select name="objet" id="objet">
                            <option value="">

                            </option>
                            <option value="Poste">
                                Poste    
                            </option>
                            <option value="Stage">
                                Stage
                            </option>
                            <option value="Autre">
                                Autre
                            </option>
                        </select>
                    <p>Votre message :</p>    
                        <textarea id="msg" name="msg" cols="30" rows="10" required></textarea>
                        <button type="submit" class="btn btn-info">Envoyer</button>
                </form>
            </div>

<?php
    include "inc/footer.php";
?>
