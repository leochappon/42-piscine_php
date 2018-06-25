#!/usr/bin/php
<?php
while (1)
{
  echo "Entrez un nombre: ";
  $nbr = trim(fgets(STDIN));
  if (feof(STDIN) == TRUE)
  {
    echo "\n";
    exit();
  }
  if (is_numeric($nbr) == FALSE)
  {
    echo "'$nbr' n'est pas un chiffre\n";
  }
  else
  {
    echo "Le chiffre $nbr est ";
    if ($nbr % 2 == 0)
    {
     echo "Pair\n";
    }
    else
    {
      echo "Impair\n";
    }
  }
}
?>
