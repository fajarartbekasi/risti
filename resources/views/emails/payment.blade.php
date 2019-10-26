@component('mail::message')
Hello ****, {{$permintaan->name}}
Terimakasih atas permintaan yang anda ajukan silahkan lakukan pembayaran sebesar
<br>
{{ $permintaan->unit * $permintaan->nominal }}
dan upload bukti dengan mengklik tombol di
bawah ini !

@component('mail::button', ['url' => "http://jasaserviceac.test/confirmation/payment/{$permintaan->id}"])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
