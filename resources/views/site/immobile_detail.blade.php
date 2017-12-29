@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row section">
    	<h3 align="center">Imóvel</h3>
    	<div class="divider"></div>
    </div>
    <div class="row section">
    	<div class="col s12 m6">
	    	<div class="slider">
				<ul class="slides">
					<li>
						<img src="{{ asset('img/modelo_detalhe_1.jpg') }}" alt="slide 1">
						<div class="caption center-align">
							<h3>Título da Imagem</h3>
							<h5>Descrição</h5>
						</div>
					</li>

					<li>
						<img src="{{ asset('img/modelo_detalhe_2.jpg') }}" alt="slide 1">
						<div class="caption left-align">
							<h3>Título da Imagem</h3>
							<h5>Descrição</h5>
						</div>
					</li>

					<li>
						<img src="{{ asset('img/modelo_detalhe_3.jpg') }}" alt="slide 1">
						<div class="caption right-align">
							<h3>Título da Imagem</h3>
							<h5>Descrição</h5>
						</div>
					</li>

					<li>
						<img src="{{ asset('img/modelo_detalhe_4.jpg') }}" alt="slide 1">
						<div class="caption left-align">
							<h3>Título da Imagem</h3>
							<h5>Descrição</h5>
						</div>
					</li>
				</ul>
			</div>
			<div class="row" align="center">
				<button onclick="sliderPrev()" class="btn blue">Anterior</button>
				<button onclick="sliderNext()" class="btn blue">Proximo</button>
			</div>
		</div>
    	<div class="col s12 m4">
    		<h4>Titulo do Imóvel</h4>
    		<blockquote>
    			Descrição breve sobre o Imóvel.
    		</blockquote>
    		<p><b>Código: </b> 1234</p>
    		<p><b>Status: </b> Vende</p>
    		<p><b>Tipo: </b> Galpão Comercial</p>
    		<p><b>Endereço: </b> Rua José Luis Fotes, nº 4888</p>
    		<p><b>CEP: </b> 64.010-760</p>
    		<p><b>Cidade: </b> Teresina-PI</p>
    		<p><b>Valor: </b> R$200.000,00</p>
    		<a class="btn deep-orange darken-1" href="{{ route('site.contact') }}">Entrar em contato</a>
    	</div>
    </div>
</div>
@endsection
