                  <div class="container" id="form_valeur" align="center">
                      <div class="form-group">
                        <label style="margin-left: 13.5%;">S'inscrire en tant que:</label><br>
                        <button onclick="form_log('user')" id="_btn_" class="btn">Client</button>
                        <button onclick="form_log('prop')" id="_btn_" class="btn">Propriétaire</button>
                      </div>
                      <?php echo form_open("",array("class"=>"form form-horizontal")); ?>
                      <div class="form_log">
                      </div>
                      <div class="container-login100-form-btn m-t-32 mybtn" style="display: none;">
                        <button class="login100-form-btn" type="submit">
                          S'inscrire
                        </button>
                      </div>
                    </form>
                  </div>