<div id="contact" class="spacer">
    <!--Contact Starts-->
    <div class="container contactform center">
        <h2 class="text-center  wowload fadeInUp">Fale conosco</h2>
        <div class="row wowload fadeInLeftBig">

            <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                {!! Form::open(['route' => 'index.email']) !!}
                {!! Form::text('name', null, ['placeholder' => 'Nome']) !!}

                {!! Form::text('email', null, ['placeholder' => 'Email']) !!}

                {!! Form::textarea('message', null, ['placeholder' => 'Mensagem', 'rows' => '5']) !!}

                {!! Form::submit('Enviar',['class' => 'btn btn-primary', 'onclick' => 'alert("Mensagem enviada com Sucesso!");']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!--Contact Ends-->