<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Prise de contact sur mon beau site</h2>
    <p>Réception d'une prise de contact avec les éléments suivants :</p>
    <ul>
      <li><strong>Nom</strong> : {{ $contact->name }}</li>
      <li><strong>Prénom</strong> : {{ $contact->surname }}</li>
      <li><strong>Email</strong> : {{ $contact->email }}</li>
      <li><strong>Objet</strong> : {{ $contact->object }}</li>
      <li><strong>Message</strong> : {{ $contact->message }}</li>
    </ul>
  </body>
</html>