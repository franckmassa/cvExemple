<?php
include "common/header.php";
?>
<!--Corps du site-->
<div class="corps size20">
    <h2 class="size30 borderBottomDark">In'Tech sud</h2>
    <div>
        Téléphone : 0000000000 <br />
        Mail :fff@gmail.com
    </div>
    <h2 class="size30 borderBottomDark">Me contacter</h2>
    <div>
        <form action="#" method="post">
            <fieldset>
                <legend>Renseigner les informations</legend>
                <div>
                    <label for="nom">Nom : </label>
                    <input type="text" name="nom" id="nom" placeholder="Nom / Prénom">
                </div>
                <div>
                    <label for="mail">Email : </label>
                    <input type="email" name="mail" id="mail" placeholder="nom@exemple.com">
                </div>
                <div>
                    <label for="objet">Objet : </label>
                    <select name="objet" id="objet">
                        <option>Question</option>
                        <option>Autre</option>
                    </select>
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" value="Valider" class="butonContact bg-colorBlueLight colorWhite">
            </fieldset>
        </form>
    </div>
</div>
<?php
include "common/footer.php";
?>