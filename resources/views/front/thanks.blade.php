
@extends('layouts.app')

@section('content')
    <div class="container" style="margin:200px 100px 270px 0px;">
        <h2 class="wow fadeInRight text-capitalize">
        @if($type=='sussces')
            <span class="color" >شكرا على الاشتراك في الترحيل الخاص سيتم التواصل معاك عن طريق الايمبل</span>
            @endif

            @if($type=='error')
            <span class="color" >   نعتذر منك بياناتك لا تتناسب مع السائق لاختلافها الرجاء مراجعة باقي العروض </span>
            @endif
        </h2>
    </div>



    <!------ Include the above in your HEAD tag ---------->

<!-- Team -->
<!-- Team -->
    @endsection