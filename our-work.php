<?php 
    include('./web_header.php');
?>

<section id="portfolio-header">
    <div class="container-fluid">
        <div class="row portfolio-header center">
            <div class="col s12 inner-col">
                <h1>Our Work</h1>
            </div>
        </div>
    </div>
</section>

<section id="portfolio-projects">
    <div class="container">
        <div class="row projects-filter">
            <div id="filterContainer" class="filterContainer">
                <div id="categoryFilter">
                    <div class="filter-list" id="newCategory">
                        <div class="filter-item active" value="zooma" onclick="filterSelection('all')">All</div>
                        <div class="filter-item" value="fashion" onclick="filterSelection('fashion')">Logo</div>
                        <div class="filter-item" value="saas" onclick="filterSelection('saas')">Brochures</div>
                        <div class="filter-item" value="gadgets" onclick="filterSelection('gadgets')">Branding</div>
                        <div class="filter-item" value="ebook" onclick="filterSelection('ebook')">Packaging</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row portfolio-projects">
            <div class="col s12 m4 zooma fashion project">
                <a href="./cognito">
                    <div class="tile">
                        <img src="./img/portfolio/cognito938x505_5.jpg" width="100%" alt="projects">
                        <div class="tile-overlay">
                            <h4>View</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col s12 m4 zooma saas project">
                <a href="./abesit">
                    <div class="tile">
                        <img src="./img/portfolio/abesit938x505_2.jpg" width="100%" alt="projects">
                        <div class="tile-overlay">
                            <h4>View</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col s12 m4 zooma gadgets project">
                <a href="./grofers">
                    <div class="tile">
                        <img src="./img/portfolio/grofers938x505_1.jpg" width="100%" alt="projects">
                        <div class="tile-overlay">
                            <h4>View</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col s12 m4 zooma ebook project">
                <a href="./rollery">
                    <div class="tile">
                        <img src="./img/portfolio/rollery938x505_1.jpg" width="100%" alt="projects">
                        <div class="tile-overlay">
                            <h4>View</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>
    filterSelection("all")
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("zooma");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c)> -1) w3AddClass(x[i], "show");
      }
    }

    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
      }
    }

    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i])> -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);     
        }
      }
      element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("newCategory");
    var btns = btnContainer.getElementsByClassName("filter-item");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function(){
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
      });
    }
</script>

<?php 
    include('./web_footer.php');
?>