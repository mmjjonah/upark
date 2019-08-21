                      <?= form_open("/connexion/create_user",array("class"=>"form form-horizontal")); ?>
                        <div class="form-group">
                          <label for="name">Nom :</label>
                          <input id="name" type="text" name="name_user" class="form-control" placeholder="Votre nom">
                        </div>
                        <div class="form-group">
                          <label for="firstname">Prénom :</label>
                          <input id="firstname" type="text" name="firstname_user" class="form-control" placeholder="Votre prénom">
                        </div>
                        <div class="form-group">
                          <label for="email">E-mail :</label>
                          <input id="email" type="email" name="email_user" class="form-control" placeholder="Votre email">
                        </div>
                        <div class="form-group">
                          <label for="numero">Numero du voiture :</label>
                          <input id="numero" type="text" name="num_car" class="form-control" placeholder="Numero du voiture">
                        </div>
                        <div class="form-group">
                          <label for="description">Description :</label>
                          <textarea id="description" name="description" class="form-control" style="width: 40%;" placeholder="comment est votre voiture?"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="password">Mot de passe :</label>
                          <input id="password" type="password" name="password_user" class="form-control" placeholder="mot de passe">
                        </div>
                        <div class="container-login100-form-btn m-t-32 mybtn">
                          <button class="login100-form-btn" type="submit">
                            S'inscrire
                          </button>
                        </div>
                      <?= form_close() ?>