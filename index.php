<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php first project</title>
</head>
<body>
  <form action="function.php" method="get">
  <input type="text" name="num01" placeholder="Number 1">
  <select name="oper">
  <option value="add">Add</option>
  <option value="sub">Subtract</option>
  <option value="multiply">Multiply</option>
  <option value="div">Division</option>
  </select>
  <input type="text" name="num02" placeholder="Number 2">
<button type="submit">calculate</button>
  </form>
</body>
</html>