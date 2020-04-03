@component('components.modal')
    @slot('modal_id')
        forgot_confirm
    @endslot
    @slot('title')
        Recuperar contraseña, o mis datos
    @endslot
    @slot('content')
    <p>Acabamos de enviar tu usuario, y un link para restablecer tu contraseña, al correo:
    </p>    
        <a href="mailto:nirvana01@gmail.com">nirvana01@gmail.com</a>
    <p class="text-danger">
        y al número de teléfono: 0414-xxx-xx-xx
    </p>
    <p class="text-primary">
        Si este no es su correo o teléfono, debe modificar su correo electrónico, o teléfono, en la cuenta que posee con la empresa, y solicitar nuevamente el envío de dicha información.
    </p>    
    
    @endslot
@endcomponent