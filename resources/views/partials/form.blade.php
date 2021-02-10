<div class="container">
    <form action="/ingredient-store" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nom</label>
          <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Quantité</label>
            <input type="text" name="quantite" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Photo</label>
            <input type="text" name="src" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>