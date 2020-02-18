<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto my-5 bg-light p-3 shadow-sm">
            <?php
                if(isset($error)){
                    $html = '<div class="alert alert-danger">'.$error.'</div>';
                    echo $html;
                }
            ?>
            <form method="post">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" name="submitLogin" value="submit" class="btn btn-success">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</div>