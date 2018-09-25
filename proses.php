<form action=" " method="POST">
  <input type="checkbox" name="hobi[]" value="Olahraga">Olahraga<br />
  <input type="checkbox" name="hobi[]" value="Memancing">Memancing<br />
  <input type="checkbox" name="hobi[]" value="Membaca">Membaca<br />
  <input type="checkbox" name="hobi[]" value="Travelling">Travelling<br />
  <input type="submit" value="Kirim">
</form>

<?php
$hobi = $_POST["hobi"];
echo "<p>Hobi yang Anda pilih:</p>";
foreach ($hobi as $nilai) {
echo "- $nilai <br />";
}

echo "string";

?>