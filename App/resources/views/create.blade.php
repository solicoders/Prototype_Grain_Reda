@extends('../Layouts.Layout')
@section('content')
    <div class="content-header">
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ajouter Une Voiture</h3>
                        </div>
                        @include('form')
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection