<!DOCTYPE html>
<?php require('templates/header.php'); ?>

<h1>NeoPoints</h1>

<div id = "voting_box"></div>

<div id = "neos">
    <form id = "points">
      <input type = "checkbox" name = "Greg" value = "Greg">Greg
      <input type = "checkbox" name = "Kendall" value = "Kendall">Kendall
      <input type = "checkbox" name = "Kurt" value = "Kurt">Kurt
      <input type = "checkbox" name = "Bilal" value = "Bilal">Bilal
      <input type = "checkbox" name = "Taylor B." value = "Taylor B.">Taylor B.
      <input type = "checkbox" name = "Victoria" value = "Victoria">Victoria
      <input type = "checkbox" name = "Tif" value = "Tif">Tif
      <input type = "checkbox" name = "Jacob" value = "Jacob">Jacob
      <input type = "checkbox" name = "Taylor F." value = "Taylor F.">Taylor F.
      <input type = "checkbox" name = "Kate" value = "Kate">Kate
      <input type = "checkbox" name = "Rachel" value = "Rachel">Rachel
      <input type = "checkbox" name = "Emma" value = "Emma">Emma
      <input type = "checkbox" name = "Hannah" value = "Hannah">Hannah
      <input type = "checkbox" name = "Candice" value = "Candice">Candice
      <input type = "checkbox" name = "Brenda" value = "Brenda">Brenda
      <input type = "checkbox" name = "Ida" value = "Ida">Ida
      <input type = "checkbox" name = "Trevor" value = "Trevor">Trevor
      <input type = "checkbox" name = "Nick" value = "Nick">Nick
      <input type = "checkbox" name = "Dan" value = "Dan">Dan
      <input type = "checkbox" name = "Lily" value = "Lily">Lily
      <input type = "checkbox" name = "Kirsten" value = "Kirsten">Kirsten
      <input type = "checkbox" name = "Leah" value = "Leah">Leah
      <input type = "checkbox" name = "Malic" value = "Malic">Malic
      <input type = "submit" value = "Vote" onclick = "squarify()"
    </form>
</div>

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
    if (form.elements[i].checked == true)
      count += 0.1;
      console.log("Count: " + count);
  }
  return count;
}

function show_square(height) {

    var square = new ProgressBar.Square('#voting_box', {
        width: "150px",
        color: 'red',
        strokeWidth: 5,
        duration: 2000,
        easing: 'easeInOut'
    });

    square.animate(height);

};

</script>
<?php require('templates/footer.php'); ?>
