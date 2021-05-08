
@extends('/layouts/main')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css" />

<div class="medium-6 large-5">
    <br/>
    <h1 class="title">Contactez nous !</h1>

    <form action="/contact" method="POST">
        @csrf

        <div>
            <label>Nom:

                <div class="control">
                    <input
                        class="input @error('name') is-danger  @enderror"
                        type="text"
                        name="name"
                        id="name"
                       
                        value="{{ old('name') }}">

                    @error('name')
                        <p class="help is-danger">{{ $errors->first('name') }}</p>
                    @enderror
                </div>
            </label>
        </div>

        <div >
            <label>Email:

                <div class="control">
                    <input
                        class="input @error('email') is-danger  @enderror"
                        type="text"
                        name="email"
                        id="email"
                        
                        value="{{ old('email') }}">

                    @error('email')
                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                    @enderror
                </div>
            </label>
        </div>

        <div>
            <label>Message:

                <div class="control">
                    <input
                        class="textarea @error('message') is-danger  @enderror"
                        type="text"
                        name="message"
                        id="message"
                       
                        value="{{ old('message') }}">

                    @error('message')
                        <p class="help is-danger">{{ $errors->first('message') }}</p>
                    @enderror
                </div>
            </label>
        </div>


        <div>
            <div>
                <button class="button is-link" type="submit">Envoyer le message</button>
            </div>
        </div>

    </form>

</div>
@endsection


