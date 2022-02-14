<?php include("header.php"); 
        ?>
                <div class="navigation-list">
                    <div class="navigation-list-button navigation__button"><a href="#" class="">Маркетинг</a></div>
                    <div class="navigation-list-button navigation__button"><a href="#" class="">Бизнес</a></div>
                </div>
                <div class="navigation__button">
                    <a href="#" class="">Сохранённые видео</a>
                </div>
                </div>
                <style>
                    .navigation__button {
                      /* transition-property: background-color; */
                      transition-property: width;
                      /* transition-property: ; */
                      transition-duration: 1s;
                    }
                  </style>
                  
                  <script>
                      let elm = document.querySelector(".main-navigation__buttons");
                      var elm2 = document.querySelector(".navigation-list");
                      if (elm != null ) {
                        elm.addEventListener('click', function (event) {
                            let target = event.target.parentNode
                            if (target.className == "navigation__button"){
                                console.log(target.className)
                            target.style.width = 0
                            target.style.padding = 0
                            elm2.style.display = "block"
                            console.log(elm2);
                            }
                        })
                      }
                  </script>
                  <?php include("footer.php"); ?>