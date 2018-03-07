<?php
if( isset($_GET['submit']) )
{
    //be sure to validate and clean your variables
    $val1 = htmlentities($_GET['val1']);
    $val2 = htmlentities($_GET['val2']);

    //then you can use them in a PHP function.
    $result = myFunction($val1, $val2);
}
?>

<?php if( isset($result) ) echo $result; //print the result above the form ?>


 Create a function that will accept a date input and format it into mm/dd/yyyy format.
 Create a function that will accept a date input and format it into dd/mm/yyyy format to use when working with international dates.
 Create a function that will accept a string input.  It will do the following things to the string:
 Display the number of characters in the string
 Trim any leading or trailing whitespace
 Display the string as all lowercase characters
 Will display whether or not the string contains "DMACC" either upper or lowercase
 Create a function that will accept a number and display it as a formatted number.   Use 1234567890 for your testing.
 Create a function that will accept a number and display it as US currency.  Use 123456 for your testing.

<!doctype html>
<html lang="en">

<head>
  <title>WDV341 Homework</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="/css/main.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous" />
  <link rel="stylesheet" href="/css/shards.min.css" />
  <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>
  <link rel="shortcut icon" href="/images/slogo.png" />
  <link rel="stylesheet" href="/css/main.css" />
  <style>
    ul {
      list-style-type: none;
    }
  </style>

</head>

<body>
  <!--Nav menu -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="/">Spencer Davis</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/resume/index.html">Resume</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/resume/index.html#contact-form">Contact Me</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Homework
        </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/WDV/Homework/wdv101homework.html">Intro HTML/CSS (2017)</a>
            <a class="dropdown-item" href="/wdv205/index.html">Adv CSS (2017)</a>
            <a class="dropdown-item" href="/introJavaScript/index.html">Intro Javascript (2017)</a>
            <a class="dropdown-item" href="/wdv321/index.html">Advanced Javascript (2018)</a>
            <a class="dropdown-item" href="/wdv341/index.html">Intro PHP (2018)<span class="sr-only">(current)</span></a>
          </div>
        </li>
        <li>
          <a class="gitgrey d-sm-block d-lg-none d-xl-none" href="https://github.com/instagibby/sldavis"><i class="fab fa-2x fa-github"></i></a>
        </li>
      </ul>
    </div>
    <a class="gitgrey hidesmall d-sm-none d-xl-block" href="https://github.com/instagibby/sldavis"><i class="fab fa-2x fa-github"></i></a>
  </nav>
  <!-- nav menu end --->

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="date" name="fname">
    <input type="submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // collect value of input field
      $name = $_POST['fname'];
      if (empty($name)) {
          echo "Empty!";
      } else {
        $date=date_create("2013-03-15");
        date_format($date,"Y/m/d");

      }
  }
  ?>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="/wdv205/portfolio/js/shards.min.js"></script>
</body>

</html>
