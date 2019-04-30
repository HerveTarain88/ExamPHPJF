<section id="container1" class="container-fluid">
    <form action="index.php/createTicket" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <table class="table">
                        <thead>
                            <tr>
                            <th class="text-center" style="color:rebeccapurple">Choisi ton noob</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select name='listeEleves'>
                                        <?php foreach ($eleves as $eleve) { ?>
                                            <option value="<?= $eleve->getId() ?>"> <?= $eleve->getPrenom() ?> <?= $eleve->getNom() ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center" style="color:rebeccapurple">Choisi ta fucking reason !</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select name='listeRaisons'>
                                        <?php foreach ($raisons as $raison) { ?>
                                            <option value="<?= $raison->getId() ?>"> <?= $raison->getLibelle() ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-3">
                    <table class="table">
                        <thead>
                            <tr>
                            <th class="text-center" style="color:rebeccapurple">Choisi ton boss</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select name='listeFormateurs' >
                                        <?php foreach ($formateurs as $formateur) { ?>
                                            <option value="<?= $formateur->getId() ?>"> <?= $formateur->getPrenom() ?> <?= $formateur->getNom() ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <table class="table">
                        <thead>
                            <tr>
                            <th class="text-center" style="color:rebeccapurple">Choisi ton urgence</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select name='listeUrgences'>
                                        <?php foreach ($urgences as $urgence) { ?>
                                            <option value="<?= $urgence->getId() ?>"> <?= $urgence->getLibelle() ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div><button type="submit" class="btn btn-warning btn-lg btn-block">Générer un
                ticket</button></div>
        </div>
    </form>
</section>

<section id="container1" class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Tickets en cours</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">

                        <tr>
                            <th>N° Ticket </th>
                            <th> N° Noob </th>
                            <th> N° Raison </th>
                            <th> N° Boss </th>
                            <th> N° Urgence </th>
                            <th> Action </th>
                        </tr>
                        <?php
                        //on parcours le tableau résultat (rappel qui contient des objet de type ticket)
                        foreach ($tickets as $ticket) {
                            ?>
                            <tr>
                                <td> <?= $ticket->getId() ?> </td>
                                <td> <?= $ticket->getIdEleve() ?> </td>
                                <td> <?= $ticket->getIdRaison() ?> </td>
                                <td> <?= $ticket->getIdFormateur() ?> </td>
                                <td> <?= $ticket->getIdUrgence() ?> </td>
                                <td><a href="index.php/delete?id=<?= $ticket->getId() ?>"> <button> Delete </button> </a> </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>