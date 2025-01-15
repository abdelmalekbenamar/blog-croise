<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body class="bg-[#abdbe3]">
    <?php include_once("./php/menu.php") ?>



<main>
    <form class="inscriptionForm w-[360px] h-[400px] flex flex-col items-center justify-center m-auto" action="./php/inscriptionFormSubmit.php" method="POST">

        <select requiered name="typeCompte" class="w-full h-[50px] bg-[#678388] rounded-[10px] border-b-[bisque] border-b border-solid m-[10px]">
            <option value="teacher" id="">Enseignant</option>
            <option value="student" id="">Etudiant</option>
        </select>

        <input placeholder="Nom" name="nom" class="w-full h-[50px] bg-[#678388] rounded-[10px] border-b-[bisque] border-b border-solid m-[10px]" type="text">
        <input placeholder="Email" name="mail" class="w-full h-[50px] bg-[#678388] rounded-[10px] border-b-[bisque] border-b border-solid m-[10px]" id="mail" type="email">


        <input placeholder="Password" name="pass" class="w-full h-[50px] bg-[#678388] rounded-[10px] border-b-[bisque] border-b border-solid m-[10px]" id="pass" type="password">
        <button class="submitConnexionForm border w-[200px] m-2.5 p-[5px] rounded-[5px] border-solid border-[black]" type="submit">Inscription</button>
    </form>
</main>


    <script src="./assets/js/indexScript.js"></script>
</body>
</html>