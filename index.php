<!DOCTYPE html>
<html>
<body>
<script>
  const urlParams = new URLSearchParams(window.location.search);
	const idValue = urlParams.get('code');
  window.location.href = "https://localhost/1/index.php?code="+idValue;
</script>
</body>
</html>
