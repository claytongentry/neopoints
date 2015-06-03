<!DOCTYPE html>
<?php require('templates/header.php'); ?>

<div id = "neos">
    <form role = "form" id = "points">
      <label><input type = "checkbox" name = "Greg" data-years = "27">Greg</label>
      <label><input type = "checkbox" name = "Kendall" data-years = "1">Kendall</label>
      <label><input type = "checkbox" name = "Kurt" data-years = "7">Kurt</label>
      <label><input type = "checkbox" name = "Bilal" data-years = "11">Bilal</label>
      <label><input type = "checkbox" name = "Taylor B." data-years = "3">Taylor B.</label>
      <label><input type = "checkbox" name = "Victoria" data-years = "2">Victoria</label>
      <label><input type = "checkbox" name = "Tif" data-years = "4">Tif</label>
      <label><input type = "checkbox" name = "Jacob" data-years = "2">Jacob</label>
      <label><input type = "checkbox" name = "Taylor F." data-years = "4">Taylor F.</label>
      <label><input type = "checkbox" name = "Kate" data-years = "2">Kate</label>
      <label><input type = "checkbox" name = "Rachel" data-years = "3">Rachel</label>
      <label><input type = "checkbox" name = "Emma" data-years = "1">Emma</label>
      <label><input type = "checkbox" name = "Hannah" data-years = "2">Hannah</label>
      <label><input type = "checkbox" name = "Candice" data-years = "6">Candice</label>
      <label><input type = "checkbox" name = "Brenda" data-years = "4">Brenda</label>
      <label><input type = "checkbox" name = "Ida" data-years = "1">Ida</label>
      <label><input type = "checkbox" name = "Trevor" data-years = "4">Trevor</label>
      <label><input type = "checkbox" name = "Nick" data-years = "1">Nick</label>
      <label><input type = "checkbox" name = "Dan" data-years = "3">Dan</label>
      <label><input type = "checkbox" name = "Lily" data-years = "3">Lily</label>
      <label><input type = "checkbox" name = "Kirsten" data-years = "3">Kirsten</label>
      <label><input type = "checkbox" name = "Leah" data-years = "4">Leah</label>
      <label><input type = "checkbox" name = "Malic" data-years = "3">Malic</label>
      <input id = "vote_btn" type = "submit" value = "Vote" onclick = "squarify()"
    </form>
</div>
<div id = "voting_box"><h1>NeoPoints</h1>
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

    if (form.elements[i].checked == true) {
      var data = form.elements[i].dataset;
      count += data.years / 100 + 0.01;
      console.log("Count: " + count);
    }
  }

  // Can't get more than 100%;
  if (count > 1) {
    count = 1;
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
