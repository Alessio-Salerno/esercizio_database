<x-layout>
    <div class="container-fluid">
        <div class="row">
            <h2 class="text-center">Inserisci il film</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">

    <form method="post" action="{{ route('movie.submit') }}" enctype="multipart/form-data">
        <!-- TOKEN csrf -->
       @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo:</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp">
        </div>



        <div class="mb-3">
            <label for="director" class="form-label">Regista:</label>
            <input type="text" name="director" class="form-control" id="director" aria-describedby="directorHelp">
        </div>
    

        
        <div class="mb-3">
            <label for="img" class="form-label">Inserisci una locandina</label>
            <input type="file" name="img" class="form-control" id="img" aria-describedby="imgHelp">
        </div>


        <div class="mb-3">
            <label for="year" class="form-label">Anno di uscita:</label>
            <input type="text"  name="year"  class="form-control" id="year" aria-describedby="yearHelp">
        </div>

        
        <div class="mb-3">
    <label for="plot" class="form-label">Trama</label>
    <textarea name="plot" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>



        <button type="submit" class="btn btn-primary">Inserisci il film</button>
    </form>



          </div>
        </div>
    </div>
</x-layout>