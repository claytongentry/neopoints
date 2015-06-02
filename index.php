<!DOCTYPE html>
<?php require('templates/header.php'); ?>

<h1>NeoPoints</h1>

<div id = "neos">
    <form role = "form" id = "points">
      <label><input type = "checkbox" name = "Greg" value = "Greg">Greg</label>
      <label><input type = "checkbox" name = "Kendall" value = "Kendall">Kendall</label>
      <label><input type = "checkbox" name = "Kurt" value = "Kurt">Kurt</label>
      <label><input type = "checkbox" name = "Bilal" value = "Bilal">Bilal</label>
      <label><input type = "checkbox" name = "Taylor B." value = "Taylor B.">Taylor B.</label>
      <label><input type = "checkbox" name = "Victoria" value = "Victoria">Victoria</label>
      <label><input type = "checkbox" name = "Tif" value = "Tif">Tif</label>
      <label><input type = "checkbox" name = "Jacob" value = "Jacob">Jacob</label>
      <label><input type = "checkbox" name = "Taylor F." value = "Taylor F.">Taylor F.</label>
      <label><input type = "checkbox" name = "Kate" value = "Kate">Kate</label>
      <label><input type = "checkbox" name = "Rachel" value = "Rachel">Rachel</label>
      <label><input type = "checkbox" name = "Emma" value = "Emma">Emma</label>
      <label><input type = "checkbox" name = "Hannah" value = "Hannah">Hannah</label>
      <label><input type = "checkbox" name = "Candice" value = "Candice">Candice</label>
      <label><input type = "checkbox" name = "Brenda" value = "Brenda">Brenda</label>
      <label><input type = "checkbox" name = "Ida" value = "Ida">Ida</label>
      <label><input type = "checkbox" name = "Trevor" value = "Trevor">Trevor</label>
      <label><input type = "checkbox" name = "Nick" value = "Nick">Nick</label>
      <label><input type = "checkbox" name = "Dan" value = "Dan">Dan</label>
      <label><input type = "checkbox" name = "Lily" value = "Lily">Lily</label>
      <label><input type = "checkbox" name = "Kirsten" value = "Kirsten">Kirsten</label>
      <label><input type = "checkbox" name = "Leah" value = "Leah">Leah</label>
      <label><input type = "checkbox" name = "Malic" value = "Malic">Malic</label>
      <input type = "submit" value = "Vote" onclick = "squarify()"
    </form>
</div>
<div id = "voting_box"></div>


<script src = "progressbar.min.js"></script>
<script>

function squarify() {
  console.log("Squarify called.");
  var form = document.getElementById("points");
  console.log("Form: " + form);
  var vote_count = loop_form(form);
  console.log("Vote Count: " + vote_count);
  show_square(vote_count);
}

function loop_form(form) {
  var count = 0;
  for (var i = 0, len = form.elements.length; i < len; i++) {
    if (form.elements[i].checked == true) {
      count += 0.1;
      console.log("Count: " + count);
    }
  }
  return count;
}

var square = new ProgressBar.Square('#voting_box', {
    width: "150px",
    color: 'red',
    strokeWidth: 5,
    duration: 2000,
    easing: 'easeInOut'
});

function show_square(height) {



    square.animate(height);

};

</script>
<?php require('templates/footer.php'); ?>
