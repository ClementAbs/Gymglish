<?php

$username = $_POST["username"];

?>






<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </head>
  <body>
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">The session has been successfully opened by   <span id="username"> <?php echo $username; ?> </span></h4>
    
    </div>
    <div class="jumbotron">
      <h1>Gymglish Website</h1>
      <br>
      <h2>Gymglish propose des cours d'anglais en ligne par e-mails quotidiens. Dans chaque leçon découvrez votre épisode de la saga Delavigne à San Franscico : humour, anglais, 'business', accents variés...</h2>
      <br>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Learn more</button>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">
                My modal
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <p>
                    When you click on the 'OK' button it should display a message with your firstname on the top of the page
                  </p>
                </div>
                <div class="form-group">
                  <div class="col-md-6 mb-3">
                    <label for="validationServer03">Firstname</label>
                    <input type="text" class="form-control is-invalid" class="form-control is-valid" id="validationServer03" placeholder="Firstname" required>
                    <div class="invalid-feedback">
                      Please fill your firstname
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <button class="btn btn-primary" type="submit" data-dismiss="modal" id="bouton">Ok</button>
          </div>
        </div>
      </div>
    </div>

    </form>

    <div id="b1">
      Block1
    </div>
    <div id="b2">
      Block2
    </div>
    <div id="b3">
      Block3
    </div>
    <div id="b4">
      Block4
    </div>


  </body>
</html>
