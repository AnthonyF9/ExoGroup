<?php
function debug($array) {
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}
function br() {
  echo '<br/>';
}
function inputCorrect($title,$titreErrors,$errors,$caraMin,$caraMax)
{
  if (!empty($title)) {
    if (strlen($title) < $caraMin) {
      $errors[$titreErrors] = 'Veuillez mettre plus de ' . $caraMin . ' caractères';
    }
    elseif (strlen($title) > $caraMax) {
      $errors[$titreErrors] = 'Veuillez mettre moins de ' . $caraMax .' caractères';
    }
    else {

    }
  } else {
    $errors[$titreErrors] = 'Veuillez renseigner ce champ';
  }
  return $errors;
}
function inputSearchCorrect($title,$titreErrors,$errors,$caraMin,$caraMax)
{
  if (!empty($title)) {
    if (strlen($title) < $caraMin) {
      $errors[$titreErrors] = 'Veuillez mettre plus de ' . $caraMin . ' caractères';
    }
    elseif (strlen($title) > $caraMax) {
      $errors[$titreErrors] = 'Veuillez mettre moins de ' . $caraMax .' caractères';
    }
    else {

    }
  } else {
    $errors[$titreErrors] = 'Saisissez quelque-chose';
  }
  return $errors;
}
function paginationIndex($page,$nbPages,$file)
{
  if ($page < 0 || $page > $nbPages) {
    header('Location: ./' . $file . '.php');
  } ?>
  <div>
    <?php
      if($page-1 > 0) {
        ?><a href="<?php echo $file ?>.php?page=<?php echo $page-1; ?>"><button type="button" name="button">Page précédente</button></a><?php
      } ?>
  </div>
  <div>
    <p>Page <?php echo $page ?> sur <?php echo $nbPages ?></p>
  </div>
  <div>
    <?php if($page+1 <= $nbPages) {
      ?><a href="<?php echo $file ?>.php?page=<?php echo $page+1; ?>"><button type="button" name="button">Page suivante</button></a><?php
    } ?>
  </div>
  <?php
}
function numeroDernierArticle($page,$nbArticles,$perpage)
{
  if ($page*$perpage > $nbArticles) {
    return $nbArticles;
  }
  else {
    return $page*$perpage;
  }
}
function pourcentage($chiffre,$chiffreMax)
{
  return round(($chiffre*100)/$chiffreMax,2) .' %';
}
function chiffreMaxPourcentage($chiffre,$pourcentage)
{
  return round(($chiffre*100)/$pourcentage,0);
}
function chiffrePourcentage($pourcentage,$chiffreMax)
{
  return round(($pourcentage*$chiffreMax)/100,0);
}
function longueurHypothenuse($a,$b)
{
  $cCarre = pow($a,2)+pow($b,2);
  return round(pow($cCarre,1.0/2),2);
}
function longueurPetitCote($a,$c)
{
  $bCarre = pow($c,2)-pow($a,2);
  return round(pow($bCarre,1.0/2),2);
}
function bonjour($prenom)
{
  return 'Bonjour ' . $prenom . ' ! Comment allez-vous ?';
}
?>
