@extends('layouts.main')


@section('title', 'Inicio con blade')


@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <figure>
                <img class="w-full" src="/img/banner.jpg" alt="Banner Publicitario">
            </figure>
        </div>
    </div>
    <section class="flex justify-center items-center gap-4 mx-20 mt-10">
        <figure>
            <img src="/img/ventana.jpg" alt="Ventana" class="w-3/4">
        </figure>
        <article class="w-1/2">
            <h2 class="font-bold mb-10 text-3xl">Dalama - Accesorios de Carpintería de Aluminio con 30 Años de Trayectoria Familiar</h2>
            <p>En Dalama, ofrecemos soluciones <b>duraderas y de alta calidad</b> para tus proyectos de carpintería de aluminio. Con 30 años de experiencia como empresa familiar, nos comprometemos a brindar productos <b>confiables</b> y un servicio de <b>excelencia</b> que cumple con las necesidades de nuestros clientes en todo el país.</p>
        </article>
    </section>
    <section class="mx-5 my-10">
        <h2 class="text-center font-bold text-2xl my-20">Nuestros servicios</h2>
        <div class="grid grid-cols-3 gap-4 mt-10">
            <div>
                <figure>
                    <img src="/img/envio.png" alt="Icono Envios" class="flex items-center mx-auto">
                </figure>
                <article class="text-center mt-5">
                    <h3 class="font-bold text-lg">Entrega inmediata a toda Argentina</h3>
                    <p class="text-balance">Garantizamos entregas rápidas y seguras en cualquier punto del país para que no tengas que esperar.</p>
                </article>
            </div>
            <div>
                <figure>
                    <img src="/img/help.png" alt="Icono Asesoramiento" class="flex items-center mx-auto">
                </figure>
                <article class="text-center mt-5">
                    <h3 class="font-bold text-lg">Asesoramiento personalizado</h3>
                    <p class="text-balance">Nuestro equipo de expertos está disponible para ofrecerte soluciones adaptadas a tus proyectos, asegurando que obtengas los productos adecuados para cada necesidad.</p>
                </article>
            </div>
            <div>
                <figure>
                    <img src="/img/calidad.png" alt="Icono Calidad" class="flex items-center mx-auto">
                </figure>
                <article class="text-center mt-5">
                    <h3 class="font-bold text-lg">Calidad garantizada en cada producto</h3>
                    <p class="text-balance">Todos nuestros accesorios de carpintería de aluminio cumplen con los más altos estándares de calidad, brindándote durabilidad y confianza en cada compra.</p>
                </article>
            </div>
        </div>
    </section>
</div>

@endsection