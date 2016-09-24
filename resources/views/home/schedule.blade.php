<div id="partners" class="container spacer ">
    <h2 class="text-center  wowload fadeInUp">Agenda</h2>
    <div class="clearfix">

    </div>


    <!-- team -->
    <h3 class="text-center  wowload fadeInUp">Próximos Eventos</h3>

    <div class="row grid team  wowload fadeInUpBig">

        @foreach($agendas as $evento)

            <h1>{{ $evento->name }}</h1>
            <h2>{{ date('d-m-Y', strtotime($evento->date)) }}</h2>
            <h2>{{ $evento->description }}</h2>
            <h3> {{ $evento->local }} </h3>
            <h2>{{ $evento->time }}</h2>

        @endforeach

    </div>
    <!-- team -->

</div>