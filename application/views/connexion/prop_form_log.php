                      <?= form_open("/connexion/create_prop",array("class"=>"form form-horizontal")); ?>
                        <div class="form-group">
                          <label for="name">Nom :</label>
                          <input id="name" type="text" name="name" class="form-control" placeholder="Votre nom">
                        </div>
                        <div class="form-group">
                          <label for="firstname">Prénom :</label>
                          <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom">
                        </div>
                        <div class="form-group">
                          <label for="email">E-mail :</label>
                          <input id="email" type="email" name="email" class="form-control" placeholder="Votre email">
                        </div>
                        <div class="form-group">
                          <label for="lieu">Lieu :</label>
                          <input id="lieu" type="text" name="lieu" class="form-control" placeholder="Où vous êtes?">
                        </div>
                        <div class="form-group">
                          <label for="capacity">Capacité de l'emplacement :</label>
                          <input id="capacity" type="number" min="1" name="capacity" class="form-control" placeholder="Nombre d'emplacement possible">
                        </div>
                        <div class="form-group">
                          <label for="price">Prix d'un emplacement (en Ariary) :</label>
                          <input id="price" type="number" min="1" name="price" class="form-control" placeholder="Prix en Ariary">
                        </div>
                        
                        <div class="form-group">
                          <label for="password">Mot de passe :</label>
                          <input id="password" type="password" name="password" class="form-control" placeholder="mot de passe">
                        </div>
                        <div class="container-login100-form-btn m-t-32 mybtn">
                      <button class="login100-form-btn" type="submit">
                        S'inscrire
                      </button>
                    </div>
                    <?= form_close() ?>