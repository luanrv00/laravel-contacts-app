@extends("layouts.base")

@section("content")
@include("layouts.back")

<div class="box">
    @if ($errors->any())
    <div class="mb-6">
        <p class="has-text-danger">Por favor, preencha os campos obrigatórios.</p>
    </div>
    @endif

    <form method="post" action="{{route('contacts.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field">
                    <label class="label">
                        Nome <span class="field-required">*</span>
                    </label>
                    <div class="control">
                        <input
                            class="input @error('first_name') is-danger @enderror"
                            name="first_name"
                            value="{{old('first_name')}}">
                        @error('first_name')
                        <p class="help is-danger">
                            Por favor, informe o nome do contato
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">
                        Sobrenome <span class="field-required">*</span>
                    </label>
                    <div class="control">
                        <input
                            class="input @error('last_name') is-danger @enderror"
                            name="last_name"
                            value="{{old('last_name')}}">
                        @error('last_name')
                        <p class="help is-danger">
                            Por favor, informe o sobrenome do contato
                        </p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field">
                    <label class="label">
                        E-mail <span class="field-required">*</span>
                    </label>
                    <div class="control has-icons-left">
                        <input
                            class="input @error('email') is-danger @enderror"
                            type="email"
                            name="email"
                            value="{{old('email')}}">
                        @error('email')
                        <p class="help is-danger">
                            Por favor, informe um e-mail válido
                        </p>
                        @enderror
                        <span class="icon is-small is-left">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Telefone</label>
                    <div class="control has-icons-left">
                        <input class="input" type="phone" name="phone" value="{{old('phone')}}">
                        <span class="icon is-small is-left">
                            <i class="fa fa-phone"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class='mt-6'>
            <div class="file is-boxed is-centered">
                <label class="file-label">
                    <input class="file-input" type="file" name="photo">
                    <span class="file-cta">
                        <span class="file-icon"><i class="fa fa-upload"></i></span>
                        <span class="file-label">Selecione uma foto...</span>
                    </span>
                </label>
            </div>
        </div>

        <hr class="mt-6 mb-6">

        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field">
                    <label class="label">País</label>
                    <div class="control">
                        <input class="input" name="country" value="{{old('country')}}">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Estado</label>
                    <div class="control">
                        <input class="input" name="state" value="{{old('state')}}">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Cidade</label>
                    <div class="control">
                        <input class="input" name="city" value="{{old('city')}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field">
                    <label class="label">Avenida/Rua</label>
                    <div class="control">
                        <input class="input" name="street" value="{{old('street')}}">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Nº</label>
                    <div class="control">
                        <input class="input" name="number" value="{{old('number')}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="field">
            <label class="label">Complemento</label>
            <div class="control">
                <textarea class="textarea" name="additional_info">
                    {{old('additional_info')}}
                </textarea>
            </div>
        </div>

        <div class='mt-6'>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-primary" type="submit">
                        Adicionar
                    </button>
                </div>
                <div class="control">
                    <a class="button is-link is-light" href="{{url()->previous()}}">
                        Cancelar
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
