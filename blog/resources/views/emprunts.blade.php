@extends("layouts.master")
@section("contenu")
<div class="d-flex my-3 justify-content-end">
    <a href="#" class="btn btn-primary">Ajouter un emprunt</a>
</div>
<div class="my-3 p-3 bg-body rounded shadow-sm">
  <h6 class="border-bottom pb-2 mb-0">Recent updates</h6>
  <table class="table table-bordered table hover">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Adresse mail</th>
        <th scope="col">Catégories</th>
        <th scope="col">Actions</th>
      </tr>
      </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>NDONG KOUMBANGOYE</td>
            <td>Hans Wilfried</td>
            <td>h.Ndong_Koumbangoye@mundiapolis.ma</td>
            <td>Étudiant</td>
            <td>
              <a href="#" class="btn btn-success">Editer</a>
              <a href="#" class="btn btn-danger">Supprimer</a>
            </td>
          </tr>
        </tbody>
  </table>
  <small class="d-block text-end mt-3">
    <a href="#">All updates</a>
  </small>
</div>
@endsection()