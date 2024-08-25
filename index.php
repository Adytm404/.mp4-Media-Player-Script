<?php ini_set('display_errors', 0); ?>
<?php
$id = $_GET['id'];
session_start(); /* Starts the session */ 
if(!isset($_SESSION['UserData']['Username'])){
        header("location:login.php");
        exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>odstream clone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body> <?php
      if($id != null){
        $hidden = "visible";
      }else{
        $hidden = 'hidden';
      }
      ?>
    <!-- global container -->
    <div class="container">
      <!-- inner container -->
      <!-- box -->
      <div class="column is-half is-centered is-offset-one-quarter">
        <form class="box generate">
          <div class="field">
            <label class="label">Link archive.org</label>
            <div class="control">
              <input class="input" type="text" placeholder="https://archive.org/download/xxxxxxxxxxxxx.mp4" id="input-link">
            </div>
            <div class="embed" style="visibility: 
												<?=$hidden?>; display:inline;">
              <label class="label">Embed link</label>
              <div class="control">
                <input class="input" type="text" placeholder="" id="result-link" value="https://<?=$_SERVER['HTTP_HOST']."/embed.php?id=".$id?>">
              </div>
            </div>
          </div>
          <button class="button is-primary" id="button-generate">Generate link</button>
          <button class="button is-primary" id="button-generate" style="visibility: <?=$hidden?>; display:inline;" onclick="myCopy()">Copy link </button>
          <div class="span" style="display:flex; justify-content:flex-end; width:100%; padding:0;">
            <button class="button is-danger is-right" id="button-out">Sign out</button>
          </div>
        </form>
      </div>
      <!-- end box -->
      <!-- preview -->
      <div class="columns" style="visibility: <?=$hidden?>; display:inline;">
        <div class="column is-half is-centered is-offset-one-quarter">
          <div class="box" style="width: 100%; height: 400px">
            <iframe src="http://<?=$_SERVER['HTTP_HOST']."/embed.php?id=".$id?>" frameborder="0" width="100%" height="100%"></iframe>
          </div>
        </div>
      </div>
      <!-- end preview -->
      <!-- end inner container -->
    </div>
    <!-- end global container -->
    <!-- javascript -->
    <script>
      document.getElementById('button-generate').onclick = function() {
        window.location = "./generate.php?url=" + document.getElementById('input-link').value;
        return false;
      }
      document.getElementById('button-out').onclick = function() {
        window.location = "./logout.php";
        return false;
      }

      function myCopy() {
        /* Get the text field */
        var copyText = document.getElementById("result-link");
        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */
        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);
        /* Alert the copied text */
        alert("Copied the text: " + copyText.value);
      }
    </script>
  </body>
</html>