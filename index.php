<?php
$title = 'Accueil';
include_once('./inc/pdo.php');
// include_once('./vendor/autoload.php');
include_once('./inc/fonctions.php');
$errors = array();
$success = false;
if (!empty($_POST['submitted'])) {
  $ac = trim(strip_tags($_POST['ac']));
  $ab = trim(strip_tags($_POST['ab']));
  $bc = trim(strip_tags($_POST['bc']));
  $errors = inputCorrect($ac,'ac',$errors,1,100);
  $errors = inputCorrect($ab,'ab',$errors,1,100);
  $errors = inputCorrect($bc,'bc',$errors,1,100);
  // if () {
  // }
  if (count($errors) == 0) {
    $success = true;
    $acCarre = pow($ac,2);
    $sommeCarresPetitsCotes = pow($ab,2)+pow($bc,2);
    // header('Location: ./index.php');
    function resultat($acCarre,$sommeCarresPetitsCotes)
    {
      if ($acCarre != $sommeCarresPetitsCotes) { ?>
        Le triangle n'est pas rectangle !<?php
      } else { ?>
        Le triangle est rectangle !<?php
      }
    }
  }
}
include_once('./inc/header.php');
?>
      <main>
        <div class="flex-col">
          <div id="alpha">
            <p>On est dans la page contact du front.</p>
            <?php

            ?>
          </div>
          <div id="beta">
            <form action="" method="post" class="main">
              <p>
                <label for="ac">Hypothénuse AC <span class="erreur">*</span> : </label>
                <input type="number" name="ac" value="<?php
                  if(!empty($_POST['ac'])) {
                    echo $_POST['ac'];
                  }
                  ?>">
              </p>
              <p class="erreur pform">
                <?php
                  if (!empty($errors['ac'])) {
                    echo $errors['ac'];
                  }
                ?>
              </p>
              <p>
                <label for="ab">Côté de taille moyenne AB <span class="erreur">*</span> : </label>
                <input type="number" name="ab" value="<?php
                  if(!empty($_POST['ab'])) {
                    echo $_POST['ab'];
                  }
                  ?>">
              </p>
              <p class="erreur pform">
                <?php
                  if (!empty($errors['ab'])) {
                    echo $errors['ab'];
                  }
                ?>
              </p>
              <p>
                <label for="bc">Côté de petite taille BC <span class="erreur">*</span> : </label>
                <input type="number" name="bc" value="<?php
                  if(!empty($_POST['bc'])) {
                    echo $_POST['bc'];
                  }
                  ?>">
              </p>
              <p class="erreur pform">
                <?php
                  if (!empty($errors['bc'])) {
                    echo $errors['bc'];
                  }
                ?>
              </p>
              <p>
                <input type="submit" name="submitted" value="Valider">
              </p>
            </form>
            <p><?php
              if (!empty($_POST['submitted'])) {
                if (count($errors) == 0) {
                  echo resultat($acCarre,$sommeCarresPetitsCotes);
                }
              } ?>
            </p>
            <?php

            ?>
          </div>
          <div id="gamma">
            <?php

            ?>
          </div>
        </div>
      </main>
<?php
include_once('./inc/footer.php');
?>
