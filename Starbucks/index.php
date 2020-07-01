<?php
echo"
<!doctype html>
<html lang='en'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
    <link href='index.css' rel='stylesheet' type = 'text/css'/>
    <title>Starbucks Coffee Company</title>
  </head>
  <body>

    <nav class='navbar fixed-top navbar-expand-lg navbar-light bg-light'>
      <a href='index.php'><img id='icon' src='starbucks.png'/></a>
      <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarTogglerDemo02' aria-controls='navbarTogglerDemo02' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
      </button>

      <div class='collapse navbar-collapse' id='navbarTogglerDemo02'>
        <ul class='navbar-nav mr-auto mt-2 mt-lg-0'>
          <li class='nav-item active navspace'>
            <a class='nav-link' href='#'><div class='navtab menu'>MENU</div><span class='sr-only'>(current)</span></a>
          </li>
          <li class='nav-item active navspace'>
            <a class='nav-link' href='#'><div class='navtab reward'>REWARDS</div></a>
          </li>
          <li class='nav-item active navspace'>
            <a class='nav-link' href='#'><div class='navtab'>GIFT CARDS</div></a>
          </li>
        </ul>
        <div class='form-inline my-2 my-lg-0'>
          <a class='navspace signintext'><img src=''/>Find a store</a>
          <button class=' signinbutton my-2 my-sm-0 navspace' href='#'><div class='signintext'>Sign in<div></button>
          <button class=' joininbutton my-2 my-sm-0 navspace' href='#'><div class='joinintext'>Join now<div></button>
        </divs>
      </div>
    </nav>
    <div class='contentcontrol'></div>
    <div class='secondrow'>
      <a href='#' class='selected'>All products</a>
      <a href='#'>Featured</a>
      <a href='#'>Previous Orders</a>
      <a href='#'>Favorite Products</a>
    </div>

    <div class='menubody'> <!--menu body-->

    <div class='leftside'>
      <table>
        <tr valign='top'>
          <th rowspan='2' class='lefttab'>
        <h6>Drinks</h6>
        <a href='#'><p>Hot Coffees</p></a>
        <a href='tea.html'><p>Hot Teas</p></a>
        <a href='#'><p>Hot Drinks</p></a>
        <a href='#'><p>Fappuccino®<br/>Blended Beverages</p></a>
        <a href='#'><p>Cold Coffees</p></a>
        <a href='#'><p>Iced Teas</p></a>
        <a href='#'><p>Cold Drinks</p></a>

        <h6>Food</h6>
        <a href='#'><p>Hot Breakfast</p></a>
        <a href='#'><p>Bakery</p></a>
        <a href='#'><p>Lunch</p></a>
        <a href='#'><p>Snacks & Sweets</p></a>
        <a href='#'><p>Yogurt & Custard</p></a>

        <h6>At Home Coffee</h6>
        <a href='#'><p>Whole Bean</p></a>
        <a href='#'><p>Verismo® Pods</p></a>
        <a href='#'><p>VIA® Instant</p></a>
        <a href='#'><p>Cold Brew</p></a>

        <h6>Shopping Bags</h6>
        <a href='#'><p>Shopping Bags</p></a>
      </th>

      <th rowspan='2' style='width: 100%'>
        <br/><h4>Menu</h4><br/>
        <h4>Drinks</h4>
        <hr/>
        <table style='width: 100%'>
          <tr >
            <td ><a href='#'><img src='images/hotcoffees.jpg'/><span>Hot Coffees</span></a></td>
            <td><a href='hottea.php'><img src='images/hotteas.jpg'/><span>Hot Teas</span></a></td>
          </tr>
          <tr>
            <td><a href='#'><img src='images/hotdrinks.jpg'/><span>Hot Drinks</span></a></td>
            <td><a href='#'><img src='images/frappuccino.jpg'/><span>Fappuccino</span></a></td>
          </tr>
          <tr>
            <td><a href='#'><img src='images/coldcoffees.jpg'/><span>Cold Coffees</span></a></td>
            <td><a href='#'><img src='images/icedteas.jpg'/><span>Iced Teas</span></a></td>
          </tr>
          <tr>
            <td><a href='#'><img src='images/colddrinks.jpg'/><span>Cold Drinks</span></a></td>
          </tr>
        </table>
        <br/>
        <h4>Food</h4>
        <hr/>
        <table style='width: 100%'>
          <tr >
            <td ><a href='#'><img src='images/breakfast.jpg'/><span>Hot Breakfast</span></a></td>
            <td><a href='#'><img src='images/bakery.jpg'/><span>Bakery</span></a></td>
          </tr>
          <tr>
            <td><a href='#'><img src='images/lunch.jpg'/><span>Lunch</span></a></td>
            <td><a href='#'><img src='images/snacks.jpg'/><span>Snack & Sweets</span></a></td>
          </tr>
          <tr>
            <td><a href='#'><img src='images/yogurt.jpg'/><span>Yogurt & Custard</span></a></td>
          </tr>
        </table>
        <br/>
        <h4>At Home Coffee</h4>
        <hr/>
        <table style='width: 100%'>
          <tr >
            <td ><a href='#'><img src='images/wholebean.jpg'/><span>Whole Bean</span></a></td>
            <td><a href='#'><img src='images/verismopods.jpg'/><span>Verismo® Pods</span></a></td>
          </tr>
          <tr>
            <td><a href='#'><img src='images/viainstant.jpg'/><span>VIA® Instant</span></a></td>
            <td><a href='#'><img src='images/coldbrew.jpg'/><span>Cold Brew</span></a></td>
          </tr>
        </table>
        <br/>
        <h4>Shopping Bags</h4>
        <hr/>
        <table style='width: 100%'>
          <tr >
            <td ><a href='#'><img src='images/shoppingbags.jpg'/><span>Shopping Bags</span></a></td>
          </tr>
        </table>
      </th>
      </tr>
    </div>
    <div>
    </div>
  </div>


  <table style='width: 70%'>
    <tr>
      <th>About Us</th>
      <th>Career</th>
      <th>Social Impact</th>
      <th>For Business<br/>Partners</th>
      <th>Ways To Order</th>
    </tr>
    </table>

    <div class='botnav fixed-bottom'>
      <a href='#'><p id='pickup'>Pickup at<br/><span>254-21 Horace Harding Expressway <svg class='bi bi-x' style='margin-left:20px' width='1.5em' height='1.5em' viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z' clip-rule='evenodd'/>
  <path fill-rule='evenodd' d='M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z' clip-rule='evenodd'/>
</svg></span></p></a>
      <span class='icon-placement'>
      <a href='#'><img id='bagicon' src='images/bag.png'><span class='number'>0</span></img class='teaicon'></a>
      </span>
    </div>";
?>