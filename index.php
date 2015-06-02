<!DOCTYPE html>
<?php require('templates/header.php'); ?>

<h1>NeoPoints</h1>

<script>
// Drag and Drop
<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
</script>

<?php require('templates/footer.php'); ?>
