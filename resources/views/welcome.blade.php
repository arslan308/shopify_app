 
        @extends('layouts.app')

@section('content')
<h2>Welcome <a href="{{ ShopifyApp::shop()->shopify_domain }}">{{ ShopifyApp::shop()->shopify_domain }}</a></h2>
<h3>We have new items!</h3>
<button class="Polaris-Button">Example button</button>
@if(isset($products->body->products))
@foreach ($products->body->products as $key => $product)
<p>{{ $key+1 }}- <img src="{{ $product->images[0]->src }}" style="width:80px;">Title: {{ $product->title }} and Price is {{ $product->variants[0]->price }}</p>
@endforeach 
@endif
@endsection

@section('scripts')
    @parent

    <script type="text/javascript">
        var AppBridge = window['app-bridge'];
        var actions = AppBridge.actions;
        var TitleBar = actions.TitleBar;
        var Button = actions.Button;
        var Redirect = actions.Redirect;
        var titleBarOptions = {
            title: 'Welcome',
        };
        var myTitleBar = TitleBar.create(app, titleBarOptions);
    </script>
@endsection 
    