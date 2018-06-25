<?php
function auth($login, $passwd)
{
  if ($login && $passwd)
  {
    $account = unserialize(file_get_contents("../private/passwd"));
    if ($account)
    {
      foreach ($account as $key => $value)
      {
        if ($value["login"] === $login && $value["passwd"] === hash("whirlpool", $passwd))
        {
          return TRUE;
        }
      }
    }
    else
    {
      return FALSE;
    }
  }
  else
  {
  return FALSE;
  }
}
?>
