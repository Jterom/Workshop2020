<?php include './parts/head.php'; ?>
<?php include './parts/header.php'; ?>

<div class="container contact-form">
    <div class="contact-image">
        <img src="src/img/Logo_workshopBlack.png" height="200px" alt="rocket_contact"/>
    </div>
    <form method="post">
        <h3>Contactez nous</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="txtName" class="form-control" placeholder="Nom *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="txtEmail" class="form-control" placeholder="Email *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="txtPhone" class="form-control" placeholder="Objet *" value="" />
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Envoyer" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="txtMsg" class="form-control" placeholder="Intitulé du message *" style="width: 100%; height: 150px;"></textarea>
                </div>
            </div>
        </div>
    </form>
</div>

</body>
</html>
    </body>
    </html>
<?php include './parts/footer.php'; ?>
