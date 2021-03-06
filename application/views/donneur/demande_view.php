<div>
    <!--h5 class="mb-1"><?php if(sizeof($articles) > 0) echo $articles[0]['label']; ?></h5-->
    <div class="list-group">
        <table>
        <?php foreach ($articles as $article) { ?>
            <tr class="spacer">
                <td>
                    <input class="" type="checkbox" value="<?php echo $article['id_article'] ?>" 
                     id="check_<?php echo $article['id_article'] ?>" 
                     <?php if($article['etat'] == EN_ATTENTE) { echo 'disabled ';} ?>
                     >
                </td>
                <td>
                    <a href="#" id="a_<?php echo $article['id_article'] ?>"  class="list-group-item list-group-item-action list-group-item-secondary"
                    <?php if($article['etat'] == EN_ATTENTE) { echo 'style="background: #ffc10714;" '.'data-toggle="tooltip" data-placement="top" title="en attente de confirmation"';} ?>
                    > <!--style ="background: #dee2e6;"-->
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Demande de <?php echo $article['nom'] ?></h5>
                        <small class="text-muted"><?php echo explode(" ", $article['date'])[0]?></small>
                    </div>
                    <p class="mb-1">
                        <?php 
                            if($article['comment']) {
                                echo $article['comment']; 
                            } 
                            else {
                                echo 'Pourriez-vous m’assister avec un peu de'.$article['nom'].' selon vos capacités ?';
                            }
                        ?>
                    </p>
                    <small class="text-muted">Merci de votre soutien</small>
                    </a>
                </td>
            </tr>
        <?php } ?>
        </table>
    </div>
    <div style="margin-top: 50px" class="col-md-6">
        <span data-toggle="tooltip" data-placement="top" title="Cliquer sur ce bouton uniquement si vous estimez avoir satisfait les demandes sélectionnées">
            <button 
                type="button" class="btn btn-custum" id ="validDem"
                data-toggle="modal" data-target="#modalConfirm"
                data-url = '<?php echo site_url("donneur/confirmerDon")?>'>
             Valider les sélections
            </button>
        </span>
    </div>
</div>