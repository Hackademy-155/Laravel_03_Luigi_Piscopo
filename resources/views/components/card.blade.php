
        <div class="col-4">
            <div class="card" style="width: 18rem;">
              
                <div class="card-body">
                  <h5 class="card-title">{{$prodotto['name']}}</h5>
                  <p class="card-text">{{$prodotto['memoria']}}</p>
                  <a href="{{route('dettaglio', ['id' => $prodotto['id']])}}" class="btn btn-primary">Dettaglio</a>
                </div>
              </div>
        </div>
  
