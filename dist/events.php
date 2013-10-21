<?php require "partials/_head.php" ?>
<?php require "partials/_navbar.php" ?>

<!-- Banner -->
<div class="se-banner se-banner-calendar">
  <div class="se-calendar-jumbo">
    <table>
      <thead>
        <tr>
          <th>Sun</th>
          <th>Mon</th>
          <th>Tue</th>
          <th>Wed</th>
          <th>Thu</th>
          <th>Fri</th>
          <th>Sat</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            20
            <p class="se-calendar-jumbo-event">We can list event here and <a href="">link to detail page</a></p>
          </td>
          <td class="se-calendar-jumbo-today-cell">21</td>
          <td>22</td>
          <td>23</td>
          <td>24</td>
          <td>25</td>
          <td>26</td>
        </tr>
        <tr>
          <td>27</td>
          <td>28</td>
          <td>29</td>
          <td>30</td>
          <td>31</td>
          <td>
            <span class="se-calendar-jumbo-first-day-of-month">November</span>
            <p class="se-calendar-jumbo-event">This is the first day of a month</p>
          </td>
          <td>2</td>
        </tr>
        <tr>
          <td>3</td>
          <td>4</td>
          <td>5</td>
          <td>6</td>
          <td>7</td>
          <td>8</td>
          <td>9</td>
        </tr>
        <tr>
          <td>10</td>
          <td>
            11
            <p class="se-calendar-jumbo-event red" id="calendar-mouseover-popover">Try mouse over here</p>
          </td>
          <td>12</td>
          <td>13</td>
          <td>14</td>
          <td>15</td>
          <td>16</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>



<!-- Map Block -->
<div class="se-map-block">
  <div class="se-map-block-canvas" id="se-map-block-canvas"></div>
  <div class="se-map-block-detail">
    <div class="se-map-block-d-container">
      <div class="se-map-block-d-inner">
        <header class="se-map-block-d-i-header">Find us at:</header>
        <address class="se-map-block-d-i-address">
          27 South Patterson Park Avenue<br/>
          Baltimore, MD 21231
        </address>
        <a href="" class="se-map-block-d-i-get-direction">Get Directions from Google</a>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="se-footer">
  <div class="se-footer-inner">
    <!-- Left -->
    <div class="se-footer-i-contact-info">
      <header class="se-footer-section-header">Contact us</header>
      <ul class="se-footer-section-list">
        <li><span>Phone: </span><span>410-276-3676</span></li>
        <li><span>Fax: </span><span>410-327-7592</span></li>
        <li><span>Email: </span><span>Friends@PattersonPark.com</span></li>
      </ul>
    </div>

    <!-- Middle -->
    <div class="se-footer-i-subscribe">
      <header class="se-footer-section-header">Subscribe Email Newsletter</header>
      <input type="email" class="se-footer-section-input" placeholder="Subscribe to Email Newsletter">
      <button class="btn btn-success">Subscribe</button>
    </div>

    <!-- Right -->
    <div class="se-footer-i-search">
      <header class="se-footer-section-header">Search this Website</header>
      <input type="text" class="se-footer-section-input" placeholder="">
      <button class="btn btn-primary">Search</button>
    </div>

  </div>
</footer>

<div class="se-footer-copyright">Copyright © 2013 Friends of Patterson Park. All Rights Reserved.</div>


<?php require "partials/_foot.php" ?>
<?php require "partials/_scripts.php" ?>
<?php require "partials/_end.php" ?>
