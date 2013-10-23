<?php require "../_partials/_head.php" ?>
<?php require "../_partials/_navbar.php" ?>


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1>Our Community Friends</h1>
    <p>
      Learn more about the organizations that breathe life into Patterson Park.
    </p>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm-3"><?php require "../_partials/_local_nav.php" ?></div>

    <div class="col-sm-9">
      <div class="row">
        <div class="col-lg-12">
          <div class="athleticDiv">
            <div class="row">
              <h2>Athletic Friends</h2>
              <div class="col-lg-4">
                <h3>General Organizations</h3>
                <ul>
                  <li><a href="http://www.baltssc.com/" title="Baltimore Sports and Social Club">Baltimore Sports and Social Club</a></li>
                  <li><a href="http://bgcmetrobaltimore.org/" title="Boys & Girls Club of Highlandtown">Boys & Girls Club of Highlandtown</a></li>
                  <li><a href="http://www.uss.salvationarmy.org/uss/www_uss_baltimore.nsf/vw-dynamic-index/8FF42CB663F86BC880256EDD00658D35?openDocument&charset=utf-8" title="Salvation Army">Salvation Army</a></li>
                </ul>
                <h3>Baseball</h3>
                <ul>
                  <li>Harbor Federal Baseball Club</li>
                  <li><a href="http://www.baltimorebrowser.com/Highlandtown-Exchange-Club-Little-cdz9s.html" title="Highlandtown Exchange Club Little League">Highlandtown Exchange Club Little League</a></li>
                  <li><a href="http://www.baltimoremetrobaseball.com/" title="Metro Baseball League">Metro Baseball League</a></li>
                </ul>
                <h3>Basketball</h3>
                <ul>
                  <li><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&ved=0CDQQFjAB&url=http%3A%2F%2Fbcrp.baltimorecity.gov%2FRecreation%2FSportsYouthandAdult%2FSportsPrograms.aspx&ei=kQpjUtfgEK-r4APZv4CwDg&usg=AFQjCNETvU8N2M-UwxI1nK3Fho2QraRUPA&sig2=2BLWyvoxqk8kk2WXl2oG8w&bvm=bv.54934254,d.dmg&cad=rja" title="Baltimore Neighborhood Basketball League">Baltimore Neighborhood Basketball League</a></li>
                </ul>
                <h3>Football</h3>
                <ul>
                  <li><a href="http://www.maxpreps.com/high-schools/patterson-clippers-(baltimore,md)/football/home.htm" title="Patterson High School Football">Patterson High School Football</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h3>Hockey</h3>
                <ul>
                  <li><a href="http://byhc.org/page.php?page_id=3541" title="Baltimore Youth Hockey Club">Baltimore Youth Hockey Club</a></li>
                </ul>
                <h3>Kickball</h3>
                <ul>
                  <li><a href="http://www.kickball-baltimore.com/aboutUs.shtml" title="Kickball League of Baltimore">Kickball League of Baltimore</a></li>
                </ul>
                <h3>Running</h3>
                <ul>
                  <li><a href="http://brrc.com/" title="Baltimore Road Runners Club">Baltimore Road Runners Club</a></li>
                </ul>
                <h3>Soccer</h3>
                <ul>
                  <li><a href="http://www.marylandsoccer.com/mmsl/" title="Maryland Major Soccer League">Maryland Major Soccer League</a></li>
                </ul>
                <h3>Swimming</h3>
                <ul>
                  <li>Patterson Park Piranhas Swim Team</li>
                </ul>
              </div>
              <div class="col-lg-4">
                <img src="/_img/soccer.jpg" alt="Child Playing Soccer" title="Child Playing Soccer" class="img-responsive-centered">
              </div>
            </div>
          </div>
          <div class="neighborhoodDiv">
            <div class="row">
              <h2>Neighborhood Friends</h2>
              <div class="col-lg-4">
                <ul>
                  <li><a href="http://bcrp.baltimorecity.gov/ParksTrails/PattersonPark.aspx" title="Baltimore City Department of Recreation and Parks">Baltimore City Department of Recreation and Parks</a></li>
                  <li><a href="http://www.ilovepattersonpark.com/" title="I Love Patterson Park">I Love Patterson Park</a></li>
                  <li><a href="http://www.pattersonparkbaptistchurch.org/" title="Patterson Park Baptist Church">Patterson Park Baptist Church</a></li>
                  <li><a href="http://www.prattlibrary.org/locations/pattersonpark/" title="Patterson Park Library Branch">Patterson Park Library Branch</a></li>
                  <li><a href="http://www.pattersonparkneighbors.org/" title="Patterson Park Neighborhood Association">Patterson Park Neighborhood Association</a></li>
                  <li><a href="http://www.pppcs.org/" title="Patterson Park Public Charter School">Patterson Park Public Charter School</a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <img src="/_img/communityFriend.jpg" alt="Patterson Park Aerial View" title="Patterson Park Aerial View" class="img-responsive-centered">
              </div>
            </div>
          </div>
          <div class="natureDiv">
            <div class="row">
              <h2>Nature Friends</h2>
              <div class="col-lg-4">
                <ul>
                  <li><a href="http://www.nps.gov/balt/index.htm" title="Baltimore National Heritage Area">Baltimore National Heritage Area</a></li>
                  <li><a href="http://pattersonpark.com/fun-in-the-park/community-gardening/" title="Patterson City Farms Garden">Patterson City Farms Garden</a></li>
                  <li><a href="http://pattersonpark.audubon.org/" title="Patterson Park Audubon">Patterson Park Audubon</a></li>
                  <li><a href="http://www.pattersondogpark.org/" title="Patterson Dog Park">Patterson Dog Park</a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <img src="/_img/nature.jpg" alt="Children Experiencing Nature" title="Children Experiencing Nature" class="img-responsive-centered">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php require "../_partials/_foot.php" ?>
<?php require "../_partials/_scripts.php" ?>

<script type="text/javascript">
$(document).ready(function(){
  // Hide the extra content in the Ways To Give section
  $(".neighborhoodDiv").hide();
  $(".natureDiv").hide();
  // Show/Hide the Stock extra information upon clicking "Learn more"
  $('#athleticShow_Hide').click(function(){
    $(".neighborhoodDiv").hide();
    $(".natureDiv").hide();
    $(".athleticDiv").show();
    $('#athleticMenu').attr('class', 'active');
    $('#natureMenu').attr('class', '');
    $('#neighborhoodMenu').attr('class', '');
  });
    // Show/Hide the Gift extra information upon clicking "Learn more"
  $('#natureShow_Hide').click(function(){
    $(".neighborhoodDiv").hide();
    $(".athleticDiv").hide();
    $(".natureDiv").show();
    $('#athleticMenu').attr('class', '');
    $('#natureMenu').attr('class', 'active');
    $('#neighborhoodMenu').attr('class', '');
  });
  // Show/Hide the Will extra information upon clicking "Learn more"
  $('#neighborhoodShow_Hide').click(function(){
    $(".athleticDiv").hide();
    $(".natureDiv").hide();
    $(".neighborhoodDiv").show();
    $('#athleticMenu').attr('class', '');
    $('#natureMenu').attr('class', '');
    $('#neighborhoodMenu').attr('class', 'active');
  });
});
</script>

<?php require "../_partials/_end.php" ?>
