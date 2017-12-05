
  <!--  -->
  <h1>Référencer une nouvelle oeuvre</h1><br>
  <div class="lookFor">
    <div class="form-group">
      <label for="bookSearch">Rechercher un livre</label>
      <input type="text" class="form-control" id="bookSearch" name="bookSearch" placeholder="Auteur, titre, maison d'édition...">
    </div>
    <div id="results">
      <h2><span></span> résultats <i class="ion-chevron-up"></i></h2>
      <section id="allWorks"></section>
    </div>
  </div>
  <form class="form refNewBook" action="<?= $root; ?>?p=books&admin=true&action=validateForm&formID=91" method="POST">
    <input type="hidden" name="googleId" id="googleId">
    <input type="hidden" id="bookAuthor" name="bookAuthor">
    <input type="hidden" id="bookTitlee" name="bookTitlee">
    <input type="hidden" id="bookPublisher" name="bookPublisher">
    <input type="hidden" id="bookPublishedDate" name="bookPublishedDate">
    <input type="hidden" id="bookImagee" name="bookImagee">
    <textarea style="display:none;" id="bookDescription" name="bookDescription"></textarea>

    <section id="emphasisWork">
        <div class="row">
          <div class="col-md-8">
            <div class="work" id="emphased">
              <div class="row">
                <div class="col-md-3">
                    <img src="#" id="bookImage"/>
                </div>
                <div class="col-md-9 description">
                  <h2 id="bookTitle"></h2>
                  <h3>by <span id="author"></span> &nbsp;&nbsp;|&nbsp;&nbsp; <span id="publish_date"></span>, <span id="publisher"></span></h3>
                  <div id="desc_content"></div>
                </div>
              </div>
            </div><br>
            <button class="btn btn-primary pull-right" type="submit" name="validateForm">Ajouter le livre</button>
          </div>

          <aside class="col-md-3 col-md-offset-1">
            <div class="sideCat">
              <div class="form-group">
                <h3>À la une</h3>
                <label class="form-radio"><input type="radio" class="form-control" name="aLaUne" value="0" checked> No</label>
                <label class="form-radio"><input type="radio" class="form-control" name="aLaUne" value="1"> Yes</label>
              </div>

            </div>
            <div class="sideCat">
              <h3>Genres</h3>
              <ul id="tags"></ul>
              
              <!-- genresIds: exist already -->
              <input type="hidden" id="genresIds" name="genresIds">
              <!-- genresNames: to create -->
              <input type="hidden" id="genresNames" name="genresNames">

              <div class="form-group ui-widget"><br>
                <small><label for="addGenre">Ajouter un genre</label></small>
                <input type="text" class="form-control" id="addGenre" name="addGenre" placeholder="Genre">
              </div>
            </div>
          </aside>

        </div>
      </section>

  </form>
  <!--  -->