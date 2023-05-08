




<div class="container">
    <div class="row my-5 justify-content-center">
        <div class="col-md-4">
            <form action="../controllers/traitement.php" method="post">
                <div class="form-group mb-3">
                    <label for="name">Votre nom </label>
                    <input type="text" name="nom" id="" placeholder="nom....." class="form-control w-200" required>
                </div>

                <div class="form-group mb-3">
                    <label for="email">Votre email </label>
                    <input type="email" name="email" id="" placeholder="email....." class="form-control w-200" required>
                </div>

                <div class="form-group mb-3">
                    <label for="password">Votre password_hash </label>
                    <input type="password" name="password" id="" placeholder="********************" class="form-control w-200" required>
                </div>



                <div class="form-group">
                    <button class="btn btn-dark w-100">VALIDER</button>
                </div>


            </form>
        </div>
    </div>
</div>