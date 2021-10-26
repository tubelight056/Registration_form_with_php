<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="index.css" />
  <title>Php validation</title>
</head>

<body>
  <div class="form-body">
    <div class="conatiner">
      <h1 class="h1">Register Form</h1>
      <form class="form" method="post" action="check.php">
        <div class="eachfieldcontainer">
          <label primary>Name</label>
          <input type="text" class="input nameinpt" name="name" required/>
        </div>

        <div class="eachfieldcontainer">
          <label>Email</label>
          <input class="input" type="email" name="email" required />
        </div>
        <div class="eachfieldcontainer">
          <label>Phone Number</label>
          <input class="input" pattern="[0-9]{10}" type="tel" name="phone" required />
        </div>
        <div class="eachfieldcontainer">
          <label>Password</label>
          <input class="input passwordinpt" type="password" name="pass" required />
        </div>
        <div>
          <input class="input" type="submit" value="Register" name="submit" />
        </div>
      </form>
    </div>
  </div>

</body>

</html>