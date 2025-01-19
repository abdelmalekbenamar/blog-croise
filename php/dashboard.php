            
            
            <?php if(isset($_SESSION["rule"]) && ($_SESSION["rule"] == 1 || $_SESSION["rule"] == 2)){ ?>
            <div class="cours">
                <img class="w-[25px] block mx-auto my-0" src="./assets/images/course.png" alt="">
                <p><a href="./parametreCours.php">Cours</a></p>
            </div>
            <?php } ?>

            <?php if($_SESSION["rule"] == 1){ ?>
            <div class="enseignant">
                <img class="w-[25px] block mx-auto my-0" src="./assets/images/teacher.png" alt="">
                <p><a href="./parametreEnseignants.php">Enseignants</a></p>
            </div>


            <div class="etudiant">
                <img class="w-[25px] block mx-auto my-0" src="./assets/images/student.png" alt="">
                <p><a href="./parametreEtudiants.php">Étudiants</a></p>
            </div>


            <div class="categories">
                <img class="w-[25px] block mx-auto my-0" src="./assets/images/category.png" alt="">
                <p><a href="./parametreCategories.php">Catégories</a></p>
            </div>


            <div class="tags">
                <img class="w-[25px] block mx-auto my-0" src="./assets/images/tag.png" alt="">
                <p><a href="./parametreTags.php">Tags</a></p>
            </div>

            <?php } ?>