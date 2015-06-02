<!DOCTYPE html>
<?php require('templates/header.php'); ?>

<h1>NeoPoints</h1>

<div id = "voting_box"></div>

<form id = "points">
  <input type = "checkbox" name = "Greg" value = "Greg">Greg
  <br/>
  <input type = "checkbox" name = "Kendall" value = "Kendall">Kendall
  <br/>
  <input type = "checkbox" name = "Kurt" value = "Kurt">Kurt
  <br/>
  <input type = "checkbox" name = "Bilal" value = "Bilal">Bilal
  <br/>
  <input type = "checkbox" name = "Taylor B." value = "Taylor B.">Taylor B.
  <br/>
  <input type = "checkbox" name = "Victoria" value = "Victoria">Victoria
  <br/>
  <input type = "checkbox" name = "Tif" value = "Tif">Tif
  <br/>
  <input type = "checkbox" name = "Jacob" value = "Jacob">Jacob
  <br/>
  <input type = "checkbox" name = "Taylor F." value = "Taylor F.">Taylor F.
  <br/>
  <input type = "checkbox" name = "Kate" value = "Kate">Kate
  <br/>
  <input type = "checkbox" name = "Rachel" value = "Rachel">Rachel
  <br/>
  <input type = "checkbox" name = "Emma" value = "Emma">Emma
  <br/>
  <input type = "checkbox" name = "Hannah" value = "Hannah">Hannah
  <br/>
  <input type = "checkbox" name = "Candice" value = "Candice">Candice
  <br/>
  <input type = "checkbox" name = "Brenda" value = "Brenda">Brenda
  <br/>
  <input type = "checkbox" name = "Ida" value = "Ida">Ida
  <br/>
  <input type = "checkbox" name = "Trevor" value = "Trevor">Trevor
  <br/>
  <input type = "checkbox" name = "Nick" value = "Nick">Nick
  <br/>
  <input type = "checkbox" name = "Dan" value = "Dan">Dan
  <br/>
  <input type = "checkbox" name = "Lily" value = "Lily">Lily
  <br/>
  <input type = "checkbox" name = "Kirsten" value = "Kirsten">Kirsten
  <br/>
  <input type = "checkbox" name = "Leah" value = "Leah">Leah
  <br/>
  <input type = "checkbox" name = "Malic" value = "Malic">Malic
  <br/>
</form>

<script src = "progressbar.min.js"></script>
<script>
window.onload = function onLoad() {
    var square = new ProgressBar.Square('#voting_box', {
        width: "150px",
        color: 'red',
        strokeWidth: 5,
        duration: 3000,
        easing: 'easeInOut',
        fill: function(height) {
          if (height > 0.3)
            return 'black';
          else
            return 'red';
        }
    });

    square.animate(0.2);
};
</script>
<?php require('templates/footer.php'); ?>
